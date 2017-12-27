<?php

abstract class FruityImporter extends Importer {
	
	protected $dbConn;
	
	public function __construct($engine, $dbConn) {
		$this->dbConn = $dbConn;
		parent::__construct($engine);

	}

	abstract function import();
	
	protected function getServiceTemplateNameById($id) {
		$res = $this->dbConn->query("select template_name from nagios_service_templates where service_template_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['template_name'];
		}
		return false;
	}

	protected function getHostTemplateNameById($id) {
		$res = $this->dbConn->query("select template_name from nagios_host_templates where host_template_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['template_name'];
		}
		return false;
	}


	protected function getTimeperiodNameById($id) {
		$res = $this->dbConn->query("select timeperiod_name from nagios_timeperiods where timeperiod_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['timeperiod_name'];
		}
		return false;
	}

	protected function getCommandNameById($id) {
		$res = $this->dbConn->query("select command_name from nagios_commands where command_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['command_name'];
		}
		return false;
	}


	protected function getContactNameById($id) {
		$res = $this->dbConn->query("select contact_name from nagios_contacts where contact_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['contact_name'];
		}
		return false;
	}

	protected function getContactGroupNameById($id) {
		$res = $this->dbConn->query("select contactgroup_name from nagios_contactgroups where contactgroup_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['contactgroup_name'];
		}
		return false;
	}
	
	protected function getServiceGroupNameById($id) {
		$res = $this->dbConn->query("select servicegroup_name from nagios_servicegroups where servicegroup_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['servicegroup_name'];
		}
		return false;
	}

	protected function getHostNameById($id) {
		$res = $this->dbConn->query("select host_name from nagios_hosts where host_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['host_name'];
		}
		return false;
	}

	protected function getHostGroupNameById($id) {
		$res = $this->dbConn->query("select hostgroup_name from nagios_hostgroups where hostgroup_id = " . $id);
		if($res) {
			$row = $res->fetch();
			return $row['hostgroup_name'];
		}
		return false;
	}

	protected function getLilacServiceById($id) {
		// Get service info
		$res = $this->dbConn->query("select * from nagios_services where service_id = " . $id);
		if($res) {
			$row = $res->fetch();
			// Okay, let's see
			if(!empty($row['host_id'])) {
				$hostName = $this->getHostNameById($row['host_id']);
				return NagiosServicePeer::getByHostAndDescription($hostName, $row['service_description']);
			}
			if(!empty($row['host_template_id'])) {
				$hostTemplateName = $this->getHostTemplateNameById($row['host_template_id']);
				return NagiosServicePeer::getByHostTemplateAndDescription($hostTemplateName, $row['service_description']);
			}
			if(!empty($row['hostgroup_id'])) {
				$hostgroupName = $this->getHostGroupNameById($row['hostgroup_id']);
				return NagiosServicePeer::getByHostgroupAndDescription($hostgroupName, $row['service_description']);
			}
		}
		return false;
	}

}

class FruityImportEngine extends ImportEngine {
	
	private $dbConn; 	// Our db connection to fruity.
	
	public function getDisplayName() {
		return "Fruity Importer";
	}

	public function getDescription() {
		return "Imports existing configurations from Fruity 1.0a1";
	}

	public function renderConfig() {
		?>
		<p>
		<fieldset>
			<legend>Fruity Importing Notice</legend>
			<p>
			Be aware that importing from an existing Fruity installation will clear all data from your lilac installation.
			</p>
		</fieldset>
		<fieldset>
			<legend>Fruity Connection Parameters</legend>
			<p>
			<label for="fruity_database_host">Database Host</label>
			<input id="fruity_database_host" type="text" size="100" maxlength="255" name="fruity_database_host" />
			</p>
			<p>
			<label for="fruity_database_name">Database Name</label>
			<input id="fruity_database_name" type="text" size="100" maxlength="255" name="fruity_database_name" />
			</p>
			<p>
			<label for="fruity_database_user">Database User</label>
			<input id="fruity_database_user" type="text" size="100" maxlength="255" name="fruity_database_user" />
			</p>
			<p>
			<label for="fruity_database_password">Database Password</label>
			<input id="fruity_database_password" type="text" size="100" maxlength="255" name="fruity_database_password" />
			</p>

		</fieldset>
		</p>
		<?php

	}

	public function validateConfig() {
		$error = false;
		if(empty($_POST['fruity_database_host']) || 
		   empty($_POST['fruity_database_name']) ||
		   empty($_POST['fruity_database_user'])) {
			$error = "Database host,name and user cannot be blank.";
		}
		return $error;
	}

	public function buildConfig($config) {
		$config->setVar("database_host", $_POST['fruity_database_host']);
		$config->setVar("database_name", $_POST['fruity_database_name']);
		$config->setVar("database_user", $_POST['fruity_database_user']);
		$config->setVar("database_password", $_POST['fruity_database_password']);
	}

	public function showJobSupplemental() {
		// Really nothing to show here.
	}

	public function init() {
		$job = $this->getJob();
		

		$job->addNotice("FruityImportEngine Starting...");
		$config = $this->getConfig();

		try {
			$this->dbConn = new PDO("mysql:dbname=" . $config->getVar("database_name") . 
									";host=" . $config->getVar("database_host"),
									$config->getVar("database_user"),
									$config->getVar("database_password"));
		} catch(PDOException $e) {
			$job->addError("Failed to connect to Fruity database.  Check your connection parameters and try again.");
			return false;
		}
		$job->addNotice("Fruity Database connection made.  Finished initializing.");
		return true;
	}
	
	public function import() {
		$job = $this->getJob();
		$job->addNotice("FruityImportEngine beginning import...");
		$config = $this->getConfig();
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
		NagiosBrokerModulePeer::doDeleteAll();
		NagiosMainConfigurationPeer::doDeleteAll();
		NagiosCgiConfigurationPeer::doDeleteAll();
		$importer = new FruityResourceImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityCgiImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityCommandImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityTimeperiodImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityContactImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityServiceGroupImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityServiceTemplateImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityHostTemplateImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityHostGroupImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityHostImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityServiceImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityDependencyImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityEscalationImporter($this, $this->dbConn);
		$importer->import();
		$importer = new FruityMainImporter($this, $this->dbConn);
		$importer->import();
		$job->addNotice("FruityImportEngine completed job.");
		return true;
	}
	
}

$path = dirname(__FILE__) . "/../../";

require_once($path . "importers/fruity/FruityResourceImporter.php");
require_once($path . "importers/fruity/FruityCgiImporter.php");
require_once($path . "importers/fruity/FruityCommandImporter.php");
require_once($path . "importers/fruity/FruityTimeperiodImporter.php");
require_once($path . "importers/fruity/FruityContactImporter.php");
require_once($path . "importers/fruity/FruityServiceGroupImporter.php");
require_once($path . "importers/fruity/FruityServiceTemplateImporter.php");
require_once($path . "importers/fruity/FruityHostTemplateImporter.php");
require_once($path . "importers/fruity/FruityHostGroupImporter.php");
require_once($path . "importers/fruity/FruityHostImporter.php");
require_once($path . "importers/fruity/FruityServiceImporter.php");
require_once($path . "importers/fruity/FruityDependencyImporter.php");
require_once($path . "importers/fruity/FruityEscalationImporter.php");
require_once($path . "importers/fruity/FruityMainImporter.php");
?>
