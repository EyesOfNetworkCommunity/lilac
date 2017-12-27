<?php


abstract class NagiosImporter extends Importer {

	private $importJob;
	private $fileSegment;
	private $needQueued;

	public function __construct($engine, $fileSegment) {
		$this->fileSegment = $fileSegment;
		parent::__construct($engine);

	}

	/**
	 * Enter description here...
	 *
	 * @return NagiosImportFileSegment
	 */
	protected function getSegment() {
		return $this->fileSegment;
	}

	abstract function init();

	/**
	 * Returns if this importer is valid and able to import.  If not, we defer it
	 *
	 */
	abstract function valid();

	abstract function import();

}

class NagiosImportFileSegment {
	private $values;
	private $fileName;
	private $line;

	public function __construct($fileName) {
		$this->fileName = $fileName;
		$this->values = array();
	}

	public function add($lineNum, $key, $value, $line) {
		if($key === null) {
			$key = '__nokey__';	// Special key value
		}
		if(!isset($this->values[$key])) {
			$this->values[$key] = array();
		}
		$this->values[$key][] = array(
				'value' => $value,
				'line' => $lineNum,
				'text' => $line
		);
	}

	public function get($key) {
		if(isset($this->values[$key])) {
			return $this->values[$key];
		}
		return null;
	}

	/**
	 * Enter description here...
	 *
	 * @return array Copy of lines
	 */
	public function getValues() {
		return $this->values;
	}


	public function getFilename() {
		return $this->fileName;
	}

	public function dump() {
		print("Contents of Values:\n");
		var_dump($this->values);
	}
}

class NagiosImportEngine extends ImportEngine {

	private $objectFiles = array();		// Will contain a list of object files to process

	private $queuedImporters = array();

	public function getDisplayName() {
		return "Nagios Importer";
	}

	public function getDescription() {
		return "Imports existing configurations from Nagios 2.x and 3.x";
	}

	public function renderConfig() {

		$cfgLocation = $this->guessConfigLocation();

		?>
<p>
<fieldset class="checks">
	<legend>Options</legend>
	<p>
		<input type="checkbox" id="overwrite_main" name="overwrite_main"
			checked="checked" /> <label for="overwrite_main">Overwrite Main
			Configuration</label>
	</p>
	<p>
		<input type="checkbox" id="overwrite_cgi" name="overwrite_cgi"
			checked="checked" /> <label for="overwrite_cgi">Overwrite CGI
			Configuration</label>
	</p>
	<p>
		<input type="checkbox" id="overwrite_resources"
			name="overwrite_resources" checked="checked" /> <label
			for="overwrite_resources">Overwrite Resources (resources.cfg)</label>
	</p>
	<p>
		<input type="checkbox" id="delete_existing" name="delete_existing"
			checked="checked" /> <label for="delete_existing">Delete Current
			Objects</label>
	</p>
	<p>
		<input type="checkbox" name="overwrite_existing"
			id="overwrite_existing" checked="checked" /> <label
			for="overwrite_existing">Overwrite Existing Objects (Ignored if
			Deleting Existing Objects)</label>
	</p>
	<p>
		<input type="checkbox" name="skip_missing_template_values"
			id="skip_missing_template_values" checked="checked" /> <label
			for="skip_missing_template_values">Skip dependency warnings for
			templates (Warning is still shown in log)</label>
	</p>
	<p>
		<input type="checkbox" id="continue_error" name="continue_error" /> <label
			for="continue_error">Attempt to Continue on Errors</label>
	</p>
</fieldset>
</p>
<p>
<fieldset>
	<legend>File Locations</legend>
	<p>
		<label for="config_file">Main Configuration File (nagios.cfg)</label>
		<input type="text" size="100" maxlength="255" id="config_file"
			name="config_file" value="<?php echo $cfgLocation["nagios"]?>" />
	</p>
	<p>
		<label for="cgi_file">CGI Configuration File (cgi.cfg)</label> <input
			type="text" size="100" maxlength="255" id="cgi_file" name="cgi_file"
			value="<?php echo $cfgLocation["cgi"]?>" />
	</p>
	<p>
		<label for="resources_file">Resource File (resource.cfg)</label> <input
			type="text" size="100" maxlength="255" id="resources_file"
			name="resources_file" value="<?php echo $cfgLocation["resource"]?>" />
	</p>
</fieldset>
</p>
<?php

	}

	public function guessConfigLocation()
	{
		// Most possible locations
		$posLoc = array("/etc/nagios/", "/etc/nagios3/", "/usr/local/nagios/etc/", "/etc/nagios/private/", "/usr/local/nagios/");

		// Found locations
		$cfgFound = array("nagios" => "", "cgi" => "", "resource" => "");

		// Search for configs
		foreach($posLoc as $dir)
		{
			
			if(file_exists($dir . "nagios.cfg"))
			{
				$cfgFound["nagios"] = $dir . "nagios.cfg";
				$cfgFound["cgi"] = $dir . "cgi.cfg";
				$cfgFound["resource"] = $dir . "resource.cfg";
			}
		}
		
		foreach($posLoc as $dir)
		{
				
			if(file_exists($dir . "cgi.cfg"))
			{
				$cfgFound["cgi"] = $dir . "cgi.cfg";
			}
				
			if(file_exists($dir . "resource.cfg"))
			{
				$cfgFound["resource"] = $dir . "resource.cfg";
			}
		}

		return $cfgFound;
	}

	public function validateConfig() {
		$error = false;
		if(!file_exists($_POST['config_file'])) {
			$error = "Main configuration file not found at: " . $_POST['config_file'];
		}
		else if(isset($_POST['overwrite_cgi']) && !file_exists($_POST['cgi_file'])) {
			$error = "CGI configuration file not found at: " . $_POST['cgi_file'];
		}
		else if(isset($_POST['overwrite_resources']) && !file_exists($_POST['resources_file'])) {
			$error = "Resources file not found at: " . $_POST['resources_file'];
		}
		return $error;
	}

	public function buildConfig($config) {
		$config->setVar("overwrite_main", (isset($_POST['overwrite_main']) ? true : false));
		$config->setVar("overwrite_cgi", (isset($_POST['overwrite_cgi']) ? true : false));
		$config->setVar("overwrite_resources", (isset($_POST['overwrite_resources']) ? true : false));
		$config->setVar("continue_error", (isset($_POST['continue_error']) ? true : false));
		$config->setVar("delete_existing", (isset($_POST['delete_existing']) ? true : false));
		$config->setVar("overwrite_existing", (isset($_POST['overwrite_existing']) ? true : false));
		$config->setVar("skip_missing_template_values", (isset($_POST['skip_missing_template_values']) ? true : false));
		$config->setVar("config_file", $_POST['config_file']);
		$config->setVar("cgi_file", $_POST['cgi_file']);
		$config->setVar("resources_file", $_POST['resources_file']);
	}

	public function showJobSupplemental() {
		?>
<ul>
	<?php
	$config = $this->getConfig();
	if($config->getVar("overwrite_main")) {
		?>
	<li><strong>Importing Main Configuration</strong>
	</li>
	<?php
	}
	if($config->getVar("overwrite_resources")) {
		?>
	<li><strong>Importing Resources</strong>
	</li>
	<?php
	}
	if($config->getVar("overwrite_cgi")) {
		?>
	<li><strong>Importing CGI Configuration</strong>
	</li>
	<?php
	}
	if($config->getVar("overwrite_existing")) {
		?>
	<li><strong>Overwriting Existing Objects</strong>
	</li>
	<?php
	}
	if($config->getVar("continue_error")) {
		?>
	<li><strong>Attempting to Continue on Errors</strong>
	</li>
	<?php
	}
	if($config->getVar("skip_missing_template_values")) {
		?>
	<li><strong>Skip dependency warnings for templates</strong>
	</li>
	<?php
	}
	?>
</ul>
<?php
	}

	public function addQueuedImporter($importer) {
		$this->queuedImporters[] = $importer;
	}

	public function init() {
		$job = $this->getJob();


		$job->addNotice("NagiosImportEngine Starting...");
		$config = $this->getConfig();

		// Attempt to try and open each config file
		$job->addNotice("Attempting to open " . $config->GetVar('config_file'));
		if(!file_exists($config->getVar('config_file')) || !@fopen($config->getVar('config_file'), "r")) {
			$job->addError("Failed to open " . $config->getVar('config_file'));
			return false;
		}
		$job->addNotice("Attempting to open " . $config->GetVar('cgi_file'));
		if(!file_exists($config->getVar('cgi_file')) || !@fopen($config->getVar('cgi_file'), "r")) {
			$job->addError("Failed to open " . $config->getVar('cgi_file'));
			return false;
		}
		$job->addNotice("Attempting to open " . $config->GetVar('resources_file'));
		if(!file_exists($config->getVar('resources_file')) || !@fopen($config->getVar('resources_file'), "r")) {
			$job->addError("Failed to open " . $config->getVar('resources_file'));
			return false;
		}
		$job->addNotice("Config passed sanity check for Nagios import.  Finished initializing.");

		if($config->getVar('delete_existing')) {
			$job->addNotice("Removing existing Nagios objects.");
			NagiosTimeperiodPeer::doDeleteAll();
			NagiosCommandPeer::doDeleteAll();
			NagiosContactPeer::doDeleteAll();
			NagiosContactGroupPeer::doDeleteAll();
			NagiosHostTemplatePeer::doDeleteAll();
			NagiosHostPeer::doDeleteAll();
			NagiosHostgroupPeer::doDeleteAll();
			NagiosServiceGroupPeer::doDeleteAll();
			NagiosServiceTemplatePeer::doDeleteAll();
			NagiosServicePeer::doDeleteAll();
			NagiosDependencyPeer::doDeleteAll();
			NagiosDependencyTargetPeer::doDeleteAll();
			NagiosEscalationPeer::doDeleteAll();
		}
		return true;
	}

	public function import() {
		$job = $this->getJob();
		$job->addNotice("NagiosImportEngine beginning import...");
		$config = $this->getConfig();
		$fp = fopen($config->getVar('config_file'), 'r');
		// We have our file pointer.
		$segment = $this->buildSegmentFromConfigFile($fp, $config->getVar('config_file'));
		$importer = new NagiosMainImporter($this, $segment);
		$importer->init();
		if($config->getVar('overwrite_main')) {
			if(!$importer->valid()) {
				$this->addQueuedImporter($importer);
				$job->addNotice("NagiosImportEngine queueing up Main importer until dependencies are valid.");
			}
			else {
				if(!$importer->import()) {
					if(!$config->getVar('continue_error')) {
						$job->addError("Failed to import.");
						return false;
					}
				}
			}
		}
		if($config->getVar('overwrite_cgi')) {
			$fp = fopen($config->getVar('cgi_file'), 'r');
			// We have our file pointer.
			$segment = $this->buildSegmentFromConfigFile($fp, $config->getVar('cgi_file'));
			$importer = new NagiosCgiImporter($this, $segment);

			if(!$importer->valid()) {
				$this->addQueuedImporter($importer);
				$job->addNotice("NagiosImportEngine queueing up CGI importer until dependencies are valid.");
			}
			else {
				if(!$importer->import()) {
					if(!$config->getVar('continue_error')) {
						$job->addError("Failed to import.");
						return false;
					}
				}
			}
		}
		if($config->getVar('overwrite_resources')) {
			$fp = fopen($config->getVar('resources_file'), 'r');
			// We have our file pointer.
			$segment = $this->buildSegmentFromConfigFile($fp, $config->getVar('resources_file'));
			$importer = new NagiosResourceImporter($this, $segment);

			if(!$importer->valid()) {
				$this->addQueuedImporter($importer);
				$job->addNotice("NagiosImportEngine queueing up resources importer until dependencies are valid.");
			}
			else {
				if(!$importer->import()) {
					if(!$config->getVar('continue_error')) {
						$job->addError("Failed to import.");
						return false;
					}
				}
			}
		}

		$job->addNotice("Beginning to process " . count($this->objectFiles) . " object files.");
		foreach($this->objectFiles as $fileName) {
			$job->addNotice("Parsing file: " . $fileName);
			if(!$this->parse_object_file($fileName, $job)) {
				return false;
			}
			$job->addNotice("Finished Parsing file: " . $fileName);
		}

		if(count($this->queuedImporters)) {
			$completed = false;
			while(!$completed) {
				$completedOne = false;
				$job->addNotice("After initial pass, we have " . count($this->queuedImporters) . " queued importer(s).");
				foreach($this->queuedImporters as $key => $importer) {
					if($importer->valid()) {
						if($importer->import() === false) {
							return false;
						}
						unset($this->queuedImporters[$key]);
						$completedOne = true;
					}
				}
				if(!$completedOne) {
					// We were unable to finish any of the importers that were
					// queued.
					break;
				}
				if(count($this->queuedImporters) === 0) {
					$completed = true;
				}

			}
			if(!$completed) {
				$job->addError("None of the Queued Importers were able to validate.");
				return false;
			}
		}
		$job->addNotice("NagiosImportEngine finished importing.");
		return true;
	}

	private function buildSegmentFromConfigFile($fp, $fileName) {
		$segment = new NagiosImportFileSegment($fileName);
		$counter = 0;
		while ($line = fgets($fp)) {		// Lines better not be over 1024 characters in length
			$counter++;
			if (preg_match('/^\s*(|#.*)$/', $line)) {
				// We read a comment, so let's hop to the next line
				continue;
			}
			if (preg_match('/^\s*([^=]+)\s*=\s*([^#;]+)/', $line, $regs)) {
				if ( "check_command" != trim($regs[1]) ) {
					$values = explode(',', $regs[2]);
				} else {
					$values = array($regs[2]);
				}

				foreach($values as $val) {
					if(trim($val) != '') {
						$segment->add($counter, trim($regs[1]), trim($val), $line);
					}
				}
			}
			else {
				$segment->add($counter, null, null, $line);
			}
			continue;
		}
		return $segment;
	}


	public function addObjectFile($fileName) {
		$job = $this->getJob();
		$this->objectFiles[] = $fileName;
		$job->addNotice("NagiosImportEngine: Added " . $fileName . " to list of object config files to parse.");
	}

	private function parse_object_file($fileName, $importJob) {
		$fp = @fopen($fileName, 'r');
		$config = unserialize($importJob->getConfig());
		if(!$fp ) {
			$importJob->addLogEntry("Failed to open object file: " . $fileName, ImportLogEntry::TYPE_ERROR);
			if(!$config->getVar('continue_error')) {
				return false;
			}
		}
		$lineNumber = 0;
		while ($line = fgets($fp)) {
			$lineNumber++;
			$line = trim($line);
			if(preg_match('/^\s*(|#.*)$/', $line)) {
				// This is a comment
				continue;
			}

			// Need to merge lines that have a \ at the end
			if(preg_match('/\\\$/', $line)) {
				// We need to merge, so remove the last character of the line,
				// then merge with next
				$newLine = substr($line, 0, strlen($line) - 2);
				do {
					$line = fgets($fp);
					$line = trim($line);
					$newLine .= $line;
					if(preg_match('/\\\$/', $newLine)) {
						// Chop off the \ again
						$newLine = substr($newLine, 0, strlen($newLine) - 2);
					}
				} while(preg_match('/\\\$/', $line));
				$line = $newLine;
			}

			if (preg_match('/^\s*define\s+(\S+)\s*{\s*$/', $line, $regs)) {
				// Setup object name
				$objectName = $regs[1];
				$segment = new NagiosImportFileSegment($fileName);
				continue;
			}

			if (preg_match('/\s*(\S+)\s+([^#;]+)/', $line, $regs)) {
				if($regs[1] != ";") {		// Check for a blank line (this is ugly, should fix the regex)
					// See if the line has a \ on the end
					if ( "check_command" != trim($regs[1]) ) {
						$values = explode(',', $regs[2]);
					} else {
						$values = array($regs[2]);
					}

					foreach($values as $val) {
						if(trim($val) != "") {
							$segment->add($lineNumber, trim($regs[1]), trim($val), $line);
						}
					}
				}
				continue;
			}

			if (preg_match('/^\s*}/', $line)) { //Completed object End curley bracket must be on it's own line
				switch($objectName) {
					case 'contactgroup':
						$importer = new NagiosContactGroupImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'contact':
						$importer = new NagiosContactImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'host':
						$importer = new NagiosHostImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'hostgroup':
						$importer = new NagiosHostGroupImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'timeperiod':
						$importer = new NagiosTimeperiodImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;

					case 'command':
						$importer = new NagiosCommandImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'service':
						$importer = new NagiosServiceImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'servicegroup':
						$importer = new NagiosServiceGroupImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'hostextinfo':
						$importer = new NagiosHostExtInfoImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'serviceextinfo':
						$importer = new NagiosServiceExtInfoImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'hostdependency':
						$importer = new NagiosHostDependencyImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'servicedependency':
						$importer = new NagiosServiceDependencyImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'hostescalation':
						$importer = new NagiosHostEscalationImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
					case 'serviceescalation':
						$importer = new NagiosServiceEscalationImporter($this, $segment);
						if(!$importer->init()) {
							return false;
						}
						if(!$importer->valid()) {
							$this->addQueuedImporter($importer);
						}
						else {
							if(!$importer->import()) {
								return false;
							}
						}
						break;
				} // switch
				$objectName = '';
				$importLines = array();
				continue;
			}

		}
		return true;
	}

}

$path = dirname(__FILE__) . "/../../";

// Include our importers
require_once($path . 'importers/nagios/NagiosMainImporter.php');
require_once($path . 'importers/nagios/NagiosCgiImporter.php');
require_once($path . 'importers/nagios/NagiosResourceImporter.php');
require_once($path . 'importers/nagios/NagiosTimeperiodImporter.php');
require_once($path . 'importers/nagios/NagiosCommandImporter.php');
require_once($path . 'importers/nagios/NagiosContactImporter.php');
require_once($path . 'importers/nagios/NagiosContactGroupImporter.php');
require_once($path . 'importers/nagios/NagiosHostImporter.php');
require_once($path . 'importers/nagios/NagiosHostGroupImporter.php');
require_once($path . 'importers/nagios/NagiosServiceImporter.php');
require_once($path . 'importers/nagios/NagiosServiceGroupImporter.php');
require_once($path . 'importers/nagios/NagiosHostDependencyImporter.php');
require_once($path . 'importers/nagios/NagiosServiceDependencyImporter.php');
require_once($path . 'importers/nagios/NagiosHostEscalationImporter.php');
require_once($path . 'importers/nagios/NagiosServiceEscalationImporter.php');
require_once($path . 'importers/nagios/NagiosHostExtInfoImporter.php');
require_once($path . 'importers/nagios/NagiosServiceExtInfoImporter.php');
?>
