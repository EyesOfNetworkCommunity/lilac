<?php

include_once("/srv/eyesofnetwork/eonweb/include/config.php");
include_once("/srv/eyesofnetwork/eonweb/include/function.php");

abstract class NagiosExporter extends Exporter {
	
	private $exportJob;
	private $outputFile;

	public function __construct($engine, $fp) {
		$this->outputFile = $fp;
		parent::__construct($engine);
	}
	
	/**
	 * Enter description here...
	 *
	 * @return NagiosImportFileSegment
	 */
	protected function getOutputFile() {
		return $this->outputFile;
	}
	
	abstract function init();
	
	/**
	 * Returns if this importer is valid and able to export.  If not, we defer it 
	 *
	 */
	abstract function valid();
	
	abstract function export();
	
}

class NagiosExportEngine extends ExportEngine {
	
	private $restartCmd = null;
	private $verifyCmd = null;
	public $MainConfigDir = null;
	private $exportDir = null;

	public function getDisplayName() {
		return "Nagios Exporter";
	}

	public function getDescription() {
		return "Exports configuration to Nagios 3.x configuration files.";
	}

	public function renderConfig($jobID=1) {
		?>
		<p>
		<fieldset class="checks">
		
			<legend>Options</legend>
			<p>
			<input type="checkbox" id="export_diff" name="export_diff" />
			<label for="export_diff">Differential export</label>
			</p>
			<p>
			<input type="checkbox" id="backup_existing" name="backup_existing" />
			<label for="backup_existing">Backup Existing Files</label>
			</p>
			<p>
			<input type="checkbox" id="preflight_check" name="preflight_check" checked="checked" />
			<label for="preflight_check">Perform a Configuration Sanity Check</label>
			</p>
			<p>
			<input type="checkbox" id="restart_nagios" name="restart_nagios" checked="checked" />
			<label for="restart_nagios">Restart Nagios</label>
			</p>
		</fieldset>
		</p>
		<p>
		<fieldset>
			<legend>Path Locations</legend>
			<p>
			<label for="nagios_path">Nagios Sanity-Check Command (Required if Doing Sanity Check)</label>
			<input type="text" size="100" maxlength="255" id="nagios_path" name="nagios_path" value="/srv/eyesofnetwork/nagios/bin/nagios -v /tmp/lilac-export-<?php echo $jobID; ?>/nagios.cfg" />
			</p>
			
			<p>
			<label for="nagios_path">Restart Nagios Command (Required if Restarting Nagios)</label>
			<input type="text" size="100" maxlength="255" id="restart_command" name="restart_command" value="/usr/bin/sudo /bin/systemctl restart nagios" />
			</p>
		</fieldset>
		</p>
		<?php
	}
	
	public function validateConfig() {
		$error = false;
		return $error;
	}

	public function buildConfig($config) {
		if(isset($_POST['export_diff'])) {
			$config->setVar("export_diff", true);
		}
		else {
			$config->setVar("export_diff", false);
		}
		if(isset($_POST['backup_existing'])) {
			$config->setVar("backup_existing", true);
		}
		else {
			$config->setVar("backup_existing", false);
		}
		if(isset($_POST['preflight_check'])) {
			$config->setVar("preflight_check", true);
		}
		else {
			$config->setVar("preflight_check", false);
		}
		if(isset($_POST['restart_nagios'])) {
			$config->setVar("restart_nagios", true);
		}
		else {
			$config->setVar("restart_nagios", false);
		}
		$config->setVar("nagios_path", $_POST['nagios_path']);
		$config->setVar("restart_command", $_POST['restart_command']);
	}

	public function showJobSupplemental() {
		$config = $this->getConfig();
		?><ul>
		<?php
		if($config->getVar("overwrite_main")) {
			?><li><strong>Exporting Main Configuration</li><?php
		}
		if($config->getVar("overwrite_resources")) {
			?><li>Exporting Resources</li><?php
		}
		if($config->getVar("overwrite_cgi")) {
			?><li>Exporting CGI Configuration</li><?php
		}
		if($config->getVar("export_diff")) {
		   ?><li><strong>Do differential export</strong></li><?php
		}
		if($config->getVar("backup_existing")) {
		   ?><li><strong>Backing Up Existing Configuration Files</strong></li><?php
		}
		if($config->getVar("preflight_check")) {
			?><li><strong>Performing Preflight Check With Command: <?php echo $config->getVar("nagios_path");?></li><?php
		}
		if($config->getVar("restart_nagios")) {
			?><li><strong>Performing Nagios Restart With Command: <?php echo $config->getVar("restart_command");?></li><?php
		}

		?></ul><?php
	}
	
	public function init() {
		$job = $this->getJob();
		$job->addNotice("NagiosExportEngine Starting...");
		$config = $this->getConfig();

		// First determine, do we need to make backups?
		if($config->getVar('backup_existing')) {
			$mainConfiguration = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
			$backupDir = $mainConfiguration->getConfigDir() . "/" . "lilac-backup-" . date("m-d-Y-H-i");
			$result = @mkdir($backupDir);
			if(!$result) {
				$job->addError("Unable to create backup directory at: " . $backupDir);
				return false;
			}
			// Okay, do a dir_copy
			if(!$this->dir_copy($mainConfiguration->getConfigDir(), $backupDir)) {
				$job->addError("Unable to create backups to: " . $backupDir);
				return false;
			}
		}

		
		// Attempt to create tmp directory for lilac export
		$jobID = $job->getId();
		$this->exportDir = "/tmp/lilac-export-" . $jobID;
		if(!file_exists($this->exportDir)) {
			$result = @mkdir($this->exportDir);
			if(!$result) {
				$job->addError("Unable to create temporary export directory at: " . $this->exportDir);
				return false;
			}
			else {
				mkdir($this->exportDir . "/objects");
			}
		}
		if(!@touch($this->exportDir . "/touch")) {
			$job->addError("Unable to write into export directory at: " . $this->exportDir);
			return false;
		}
		if(!@unlink($this->exportDir . "/touch")) {
			$job->addError("Unable to remove temporary touch file in export directory at: " . $this->exportDir);
			return false;
		}
		if($config->getVar("preflight_check") || $config->getVar("restart_nagios")) {
			$this->restartCmd = $config->getVar("restart_command");
			$this->verifyCmd = $config->getVar("nagios_path");
		}
		return true;
	}
	
	public function exportDiff() {
		
		global $database_lilac;
		
		$ExportDiff=new EoN_Job_Exporter();
	
		$mainConfiguration = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		$MainConfigDir = $mainConfiguration->getConfigDir();
		$job = $this->getJob();
		$job->addNotice("NagiosExportEngine beginning diff export...");
		exec("rm -rf ".$this->exportDir."/*");
		exec("cp -arf ".$MainConfigDir."/* ".$this->exportDir."/");
		$config = $this->getConfig();
		
		//Export Main
		exec("rm -rf ".$this->exportDir."/nagios.cfg");
		// Main Configuration
		$fp = @fopen($this->exportDir . "/nagios.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/nagios.cfg for writing.");
			return false;
		}
		$exporter = new NagiosMainExporter($this, $fp);
		$exporter->setConfigDir($this->exportDir);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Main exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Main Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Export the diffences
		$requêteDiff = sqlrequest($database_lilac, "SELECT * FROM export_job_history ORDER BY id");
		
		while($row = mysqli_fetch_assoc($requêteDiff)){
			if($row["type"]=='nagios_cgi_configuration'){
				exec("rm -rf ".$this->exportDir."/cgi.cfg");
				// CGI Configuration
				$fp = @fopen($this->exportDir . "/cgi.cfg", "w");
				if(!$fp) {
					$job->addError("Unable to open " . $this->exportDir . "/cgi.cfg for writing.");
					return false;
				}
				$exporter = new NagiosCgiExporter($this, $fp);
				$exporter->init();
				
				if(!$exporter->valid()) {
					$this->addQueuedExporter($exporter);
					$job->addNotice("NagiosImportEngine queueing up CGI exporter until dependencies are valid.");
				}
				else {
					if(!$exporter->export()) {
						$job->addError("CGI Exporter failed export.  Bailing out of job...");
						return false;
					}
				}		
			}
			elseif($row["type"]=='nagios_resource'){
				exec("rm -rf ".$this->exportDir."/resource.cfg");
				// Resource Configuration
				$fp = @fopen($this->exportDir . "/resource.cfg", "w");
				if(!$fp) {
					$job->addError("Unable to open " . $this->exportDir . "/resource.cfg for writing.");
					return false;
				}
				$exporter = new NagiosResourceExporter($this, $fp);
				$exporter->init();
				
				if(!$exporter->valid()) {
					$this->addQueuedExporter($exporter);
					$job->addNotice("NagiosImportEngine queueing up Resource exporter until dependencies are valid.");
				}
				else {
					if(!$exporter->export()) {
						$job->addError("Resource Exporter failed export.  Bailing out of job...");
						return false;
					}
				}
			}
			// Objects
			else {
				// Service in Host Template
				if($row["parent_type"]=="hosttemplate"){
					$tmpHostTemplate = NagiosHostTemplatePeer::getByName($row["parent_name"]);
					foreach($tmpHostTemplate->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $tmpHostInheritance){
						if($tmpHostInheritance->getNagiosHost()!=null){
							// Delete if exists
							$final = $ExportDiff->ModifyCfgFile($this->exportDir, $row["name"], $row["type"], $tmpHostInheritance->getNagiosHost()->getName(), 'host');			
							$fp = @fopen($this->exportDir . "/objects/services.cfg", "w");
							fwrite($fp,$final);
							fclose ($fp);
							$job->addNotice("Service ".$row["name"]." has been deleted on host ".$tmpHostInheritance->getNagiosHost()->getName());
							
							// Create object
							if($row["action"]=='add' || $row["action"]=='modify'){
								$fp = @fopen($this->exportDir."/objects/services.cfg", "a");
								
								$objectExporter = new NagiosServiceExporter($this, $fp);
								
								$object = NagiosServicePeer::getByHostTemplateAndDescription($row["parent_name"],$row["name"]);
								
								$object_parent = NagiosHostPeer::getByName($tmpHostInheritance->getNagiosHost()->getName());
								
								if($object && $object_parent) {
									$objectExporter->_exportService($object, 'host', $object_parent);
									$job->addNotice("Service ".$row["name"]." has been added on host ".$tmpHostInheritance->getNagiosHost()->getName());
								}
							}
						}
					}
				}
				// Host Template
				elseif($row["type"]=="hosttemplate"){
					$tmpHostTemplate = NagiosHostTemplatePeer::getByName($row["name"]);
					foreach($tmpHostTemplate->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $tmpHostInheritance){
						if($tmpHostInheritance->getNagiosHost()!=null){
							// Delete if exists
							$final = $ExportDiff->ModifyCfgFile($this->exportDir, $tmpHostInheritance->getNagiosHost()->getName(), 'host');			
							$fp = @fopen($this->exportDir . "/objects/hosts.cfg", "w");
							fwrite($fp,$final);
							fclose ($fp);
							$job->addNotice("Host ".$tmpHostInheritance->getNagiosHost()->getName()." has been deleted");
							
							// Create object
							if($row["action"]=='add' || $row["action"]=='modify'){
								$fp = @fopen($this->exportDir."/objects/hosts.cfg", "a");
								
								$objectExporter = new NagiosHostExporter($this, $fp);
								
								$object = NagiosHostPeer::getByName($tmpHostInheritance->getNagiosHost()->getName());
								if($object) {
									$objectExporter->export($object);
									$job->addNotice("Host ".$tmpHostInheritance->getNagiosHost()->getName()." has been added");
								}
							}
						}
					}
				}
				// Service Template
				elseif($row["type"]=="servicetemplate"){
					$tmpServiceTemplate = NagiosServiceTemplatePeer::getByName($row["name"]);
					foreach($tmpServiceTemplate->getNagiosServiceTemplateInheritancesRelatedByTargetTemplate() as $tmpServiceInheritance){
						if($tmpServiceInheritance->getNagiosService() != null){
							$service = $tmpServiceInheritance->getNagiosService();
							
							// Service in Host
							if($service->getNagiosHost() != null) {
								// Delete if exists
								$final = $ExportDiff->ModifyCfgFile($this->exportDir, $service->getDescription(), 'service', $service->getNagiosHost(), "host");			
								$fp = @fopen($this->exportDir . "/objects/services.cfg", "w");
								fwrite($fp,$final);
								fclose ($fp);
								$job->addNotice("Service ".$service->getDescription()." has been deleted on host ".$service->getNagiosHost()->getName());
							
								// Create object
								if($row["action"]=='add' || $row["action"]=='modify'){
									$fp = @fopen($this->exportDir."/objects/services.cfg", "a");
									
									$objectExporter = new NagiosServiceExporter($this, $fp);
									
									$object = NagiosServicePeer::getByHostAndDescription($service->getNagiosHost()->getName(),$service->getDescription());								
									$object_parent = NagiosHostPeer::getByName($service->getNagiosHost()->getName());
									
									if($object && $object_parent) {
										$objectExporter->_exportService($object, 'host', $object_parent);
										$job->addNotice("Service ".$service->getDescription()." has been added on host ".$service->getNagiosHost()->getName());
									}
								}
							}
							// Service in Host Template
							elseif($service->getNagiosHostTemplate()  != null){
								$tmpHostTemplate = NagiosHostTemplatePeer::getByName($service->getNagiosHostTemplate()->getName());
								foreach($tmpHostTemplate->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $tmpHostInheritance) {
									if($tmpHostInheritance->getNagiosHost() != null) {
										// Delete if exists
										$final = $ExportDiff->ModifyCfgFile($this->exportDir, $service->getDescription(), 'service', $tmpHostInheritance->getNagiosHost()->getName(), "host");			
										$fp = @fopen($this->exportDir . "/objects/services.cfg", "w");
										fwrite($fp,$final);
										fclose ($fp);
										$job->addNotice("Service ".$service->getDescription()." has been deleted");
										
										// Create object
										if($row["action"]=='add' || $row["action"]=='modify'){
											$fp = @fopen($this->exportDir."/objects/services.cfg", "a");
											
											$objectExporter = new NagiosServiceExporter($this, $fp);
											
											$object = NagiosServicePeer::getByHostTemplateAndDescription($tmpHostTemplate->getName(),$service->getDescription());
											$object_parent = NagiosHostPeer::getByName($tmpHostInheritance->getNagiosHost()->getName());
											
											if($object && $object_parent) {
												$objectExporter->_exportService($object, 'host', $object_parent);
												$job->addNotice("Service ".$service->getDescription()." has been added on host ".$tmpHostInheritance->getNagiosHost()->getName());
											}
										}
									}
								}
							}
						}
					}
				}else{
					// Delete if exists
					$final = $ExportDiff->ModifyCfgFile($this->exportDir, $row["name"], $row["type"], $row["parent_name"], $row["parent_type"]);			
					$fp = @fopen($this->exportDir . "/objects/".$row["type"]."s.cfg", "w");
					fwrite($fp,$final);
					fclose ($fp);
					$job->addNotice(ucfirst($row["type"])." ".$row["name"]." has been deleted");
					
					// Add / Modify
					if($row["action"]=='add' || $row["action"]=='modify'){
						if($row["type"]=='servicegroup' || $row["type"]=='contactgroup'){
							//Get Object by Name
							$majuscule = explode( "g", $row["type"]);
							$objectName = ucfirst($majuscule[0]).ucfirst("g".$majuscule[1]);
							$job->addNotice("Résultat du type d'objet :".$objectName);
						}else{
							$objectName = ucfirst($row["type"]);
						}
						
						//Create new object exporter
						$classname='Nagios'.$objectName.'Exporter';
						$fp = @fopen($this->exportDir."/objects/".$row["type"]."s.cfg", "a");
						
						$objectExporter = new $classname($this, $fp);
						
						// Get Service and Host
						if($row["type"]=='service') {
							$object = NagiosServicePeer::getByHostAndDescription($row["parent_name"],$row["name"]);
							
							if($row["parent_type"]=="host") {
								$object_parent = NagiosHostPeer::getByName($row["parent_name"]);
							}
							
							if($object && $object_parent) {
								$objectExporter->_exportService($object, $row["parent_type"], $object_parent);
								$job->addNotice(ucfirst($row["type"])." ".$row["name"]." has been added on ".$row["parent_type"]." ".$row["parent_name"]);
							}
						// Other objects
						} else {
							$object = call_user_func_array('Nagios'.$objectName.'Peer::getByName', array($row["name"]));
							if($object) {
								$objectExporter->export($object);
								$job->addNotice(ucfirst($row["type"])." ".$row["name"]." has been added");
							}
						}

					}
					
				}
			}
		}
		
		$job->addNotice("Finished exporting objects.");

		// Finished exporting, let's check if we need to do the preflight
		if($config->getVar("preflight_check")) {
			exec($this->verifyCmd . " -v " . $this->exportDir . "/nagios.cfg", $output, $retVal);
			if(($retVal != 0)) {
				if($retVal == 127) {
					$job->addError("The command to verify your configuration: " . $this->verifyCmd . " was not found (127).");
				}
				else {
					$job->addError("Nagios Sanity Check Failed.  Did not write configuration files to production.  Output is as follows:");
					foreach($output as $outputLine) {
						$job->addError($outputLine);
					}
				}
				$job->addError("Export failed.");
				return false;
			}
			else {
				$job->addNotice("Nagios Sanity Check Passed.");
			}
		}

		// Now need to re-export main configuration file, so config dir's point 
		// to right location
		$fp = @fopen($this->exportDir . "/nagios.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/nagios.cfg for writing.");
			return false;
		}
		$exporter = new NagiosMainExporter($this, $fp);
		$exporter->init();
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Main exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Main Exporter failed export.  Bailing out of job...");
				return false;
			}
		}

		// Move the configuration files to the appropriate place.
		$mainConfiguration = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		if(!$this->dir_copy($this->exportDir, $mainConfiguration->getConfigDir())) {
			$job->addError("Unable to copy configuration files to : " . $mainConfiguration->getConfigDir());
			$job->addError("Export failed.");
			return false;
		} 
		
		// Check if we have to restart
		if($config->getVar("restart_nagios")) {
			$output = null;
			exec($this->restartCmd, $output, $retVal);
			if($retVal != 0) {
				if($retVal == 127) {
					$job->addError("The command to restart Nagios: " . $this->restartCmd . " was not found (127).");
				}
				else {
					$job->addError("Nagios Restart Failed.  You need to manually restart Nagios");
					foreach($output as $outputLine) {
						$job->addError($outputLine);
					}
				}
				$job->addError("Restart failed.");
				return false;
			}
			$job->addNotice("Nagios Restarted Successfully.");
			
		}
		
		return true;
	}
	
	public function export() {
		$job = $this->getJob();
		$job->addNotice("NagiosExportEngine beginning export...");
		
		$config = $this->getConfig();

		
		// Main Configuration
		$fp = @fopen($this->exportDir . "/nagios.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/nagios.cfg for writing.");
			return false;
		}
		$exporter = new NagiosMainExporter($this, $fp);
		$exporter->setConfigDir($this->exportDir);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Main exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Main Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// CGI Configuration
		$fp = @fopen($this->exportDir . "/cgi.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/cgi.cfg for writing.");
			return false;
		}
		$exporter = new NagiosCgiExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up CGI exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("CGI Exporter failed export.  Bailing out of job...");
				return false;
			}
		}		
		
		// Resource Configuration
		$fp = @fopen($this->exportDir . "/resource.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/resource.cfg for writing.");
			return false;
		}
		$exporter = new NagiosResourceExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Resource exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Resource Exporter failed export.  Bailing out of job...");
				return false;
			}
		}		
		
		// Command Configuration
		$fp = @fopen($this->exportDir . "/objects/commands.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/commands.cfg for writing.");
			return false;
		}
		$exporter = new NagiosCommandExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Command exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Command Exporter failed export.  Bailing out of job...");
				return false;
			}
		}		
		
		// Timeperiod Configuration
		$fp = @fopen($this->exportDir . "/objects/timeperiods.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/timeperiods.cfg for writing.");
			return false;
		}
		$exporter = new NagiosTimePeriodExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Timeperiod exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Time Period Exporter failed export.  Bailing out of job...");
				return false;
			}
		}		
		
		// Contact Configuration
		$fp = @fopen($this->exportDir . "/objects/contacts.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/contacts.cfg for writing.");
			return false;
		}
		$exporter = new NagiosContactExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Contact exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Contact Exporter failed export.  Bailing out of job...");
				return false;
			}
		}		

		// Contact Group Configuration
		$fp = @fopen($this->exportDir . "/objects/contactgroups.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . 3 . "/objects/contactgroups.cfg for writing.");
			return false;
		}
		$exporter = new NagiosContactGroupExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Contact Group exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Contact Group Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Host Group Configuration
		$fp = @fopen($this->exportDir . "/objects/hostgroups.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/hostgroups.cfg for writing.");
			return false;
		}
		$exporter = new NagiosHostGroupExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Host Group exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Host Group Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Service Group Configuration
		$fp = @fopen($this->exportDir . "/objects/servicegroups.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/servicegroups.cfg for writing.");
			return false;
		}
		$exporter = new NagiosServiceGroupExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Service Group exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Service Group Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Host Configuration
		$fp = @fopen($this->exportDir . "/objects/hosts.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/hosts.cfg for writing.");
			return false;
		}
		$exporter = new NagiosHostExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Host exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Host Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Service Configuration
		$fp = @fopen($this->exportDir . "/objects/services.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/services.cfg for writing.");
			return false;
		}
		$exporter = new NagiosServiceExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Service exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Service Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Dependency Configuration
		$fp = @fopen($this->exportDir . "/objects/dependencies.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/dependencies.cfg for writing.");
			return false;
		}
		$exporter = new NagiosDependencyExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Dependency exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Dependency Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		// Escalation Configuration
		$fp = @fopen($this->exportDir . "/objects/escalations.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/objects/escalations.cfg for writing.");
			return false;
		}
		$exporter = new NagiosEscalationExporter($this, $fp);
		$exporter->init();
		
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Escalation exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Escalation Exporter failed export.  Bailing out of job...");
				return false;
			}
		}
		
		$job->addNotice("Finished exporting objects.");

		// Finished exporting, let's check if we need to do the preflight
		if($config->getVar("preflight_check")) {
			exec($this->verifyCmd . " -v " . $this->exportDir . "/nagios.cfg", $output, $retVal);
			if(($retVal != 0)) {
				if($retVal == 127) {
					$job->addError("The command to verify your configuration: " . $this->verifyCmd . " was not found (127).");
				}
				else {
					$job->addError("Nagios Sanity Check Failed.  Did not write configuration files to production.  Output is as follows:");
					foreach($output as $outputLine) {
						$job->addError($outputLine);
					}
				}
				$job->addError("Export failed.");
				return false;
			}
			else {
				$job->addNotice("Nagios Sanity Check Passed.");
			}
		}

		// Now need to re-export main configuration file, so config dir's point 
		// to right location
		$fp = @fopen($this->exportDir . "/nagios.cfg", "w");
		if(!$fp) {
			$job->addError("Unable to open " . $this->exportDir . "/nagios.cfg for writing.");
			return false;
		}
		$exporter = new NagiosMainExporter($this, $fp);
		$exporter->init();
		if(!$exporter->valid()) {
			$this->addQueuedExporter($exporter);
			$job->addNotice("NagiosImportEngine queueing up Main exporter until dependencies are valid.");
		}
		else {
			if(!$exporter->export()) {
				$job->addError("Main Exporter failed export.  Bailing out of job...");
				return false;
			}
		}

		// Move the configuration files to the appropriate place.

		$mainConfiguration = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		if(!$this->dir_copy($this->exportDir, $mainConfiguration->getConfigDir())) {
			$job->addError("Unable to copy configuration files to : " . $mainConfiguration->getConfigDir());
			$job->addError("Export failed.");
			return false;
		}
		// Check if we have to restart
		if($config->getVar("restart_nagios")) {
			$output = null;
			exec($this->restartCmd, $output, $retVal);
			if($retVal != 0) {
				if($retVal == 127) {
					$job->addError("The command to restart Nagios: " . $this->restartCmd . " was not found (127).");
				}
				else {
					$job->addError("Nagios Restart Failed.  You need to manually restart Nagios");
					foreach($output as $outputLine) {
						$job->addError($outputLine);
					}
				}
				$job->addError("Restart failed.");
				return false;
			}
			$job->addNotice("Nagios Restarted Successfully.");
			
		}
				
		return true;
	}
	
	private function dir_copy($source,$target ) {
        if(is_dir($source)) {
            @mkdir($target);
            $d = dir( $source );
            while(FALSE !== ( $entry = $d->read())){
                if ($entry == '.' || $entry == '..' || preg_match("/^lilac-backup/", $entry )){
                    continue;
                }
                $Entry = $source . '/' . $entry;           
                if ( is_dir( $Entry ) )
                {
                    if(!$this->dir_copy( $Entry, $target . '/' . $entry )) {
                    	return false;
                    }
                    continue;
                }
                if(@copy( $Entry, $target . '/' . $entry ) === false) {
                	return false;
                }
            }
           
            $d->close();
        }else {
            if(@copy( $source, $target ) === false) {
            	return false;
            }
        }
        return true;
    }

	
}

$path = dirname(__FILE__) . "/../../";

// Include our importers
require_once($path . 'exporters/nagios/NagiosMainExporter.php');
require_once($path . 'exporters/nagios/NagiosCgiExporter.php');
require_once($path . 'exporters/nagios/NagiosResourceExporter.php');
require_once($path . 'exporters/nagios/NagiosCommandExporter.php');
require_once($path . 'exporters/nagios/NagiosTimePeriodExporter.php');
require_once($path . 'exporters/nagios/NagiosContactExporter.php');
require_once($path . 'exporters/nagios/NagiosContactGroupExporter.php');
require_once($path . 'exporters/nagios/NagiosHostGroupExporter.php');
require_once($path . 'exporters/nagios/NagiosServiceGroupExporter.php');
require_once($path . 'exporters/nagios/NagiosHostExporter.php');
require_once($path . 'exporters/nagios/NagiosServiceExporter.php');
require_once($path . 'exporters/nagios/NagiosDependencyExporter.php');
require_once($path . 'exporters/nagios/NagiosEscalationExporter.php');
?>
