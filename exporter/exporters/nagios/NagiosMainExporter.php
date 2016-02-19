<?php

class NagiosMainExporter extends NagiosExporter {

	private $configDir = null;
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}

	public function setConfigDir($dir) {
		$this->configDir = $dir;
	}
	
	public function export() {
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosMainExporter attempting to export main configuration.");
		
		// Grab our main config
		$mainConfig = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		if(!$mainConfig) {
			$job->addError("Unable to get Main Configuration object.  Your Lilac database is corrupt.");
			return false;
		}

		$finalArray = array();
		
		$commandLookupArray = array(
			'global_host_event_handler',
			'global_service_event_handler',
			'ocsp_command',
			'ochp_command',
			'host_perfdata_command',
			'service_perfdata_command',
			'host_perfdata_file_processing_command',
			'service_perfdata_command',
			'service_perfdata_file_processing_command'
		);
		$values = $mainConfig->toArray(BasePeer::TYPE_FIELDNAME);
		foreach($values as $key => $value) {
			if($key == 'id' || $key == 'config_dir') {
				continue;
			}
			if($value === null) {
				continue;
			}
			if($value === false) {
				$value = '0';
			}
			if(in_array($key, $commandLookupArray)) {
				$command = NagiosCommandPeer::retrieveByPK($value);
				if(!$command) {
					$job->addError("Unable to find command with id:" . $value . " for " . $key);
					return false;
				}
				else {
					$value = $command->getName();
				}
			}

			$finalArray[$key] = $value;
		}
		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosMainExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");
		foreach($finalArray as $key => $val) {
			fputs($fp, $key . "=" . $val . "\n");
		}
		// Get list of broker modules
		$modules = NagiosBrokerModulePeer::doSelect(new Criteria());
		foreach($modules as $mod) {
			fputs($fp, "broker_module=" . $mod->getLine() . "\n");
		}
		if(!empty($this->configDir)) {
			fputs($fp, "resource_file=" . $this->configDir . "/resource.cfg\n");
		}
		else {
			fputs($fp, "resource_file=" . $mainConfig->getConfigDir() . "/resource.cfg\n");
		}
		if(!empty($this->configDir)) {
			fputs($fp, "cfg_dir=" . $this->configDir . "/objects\n");
		}
		else {
			fputs($fp, "cfg_dir=" . $mainConfig->getConfigDir() . "/objects\n");
		}
		$job->addNotice("NagiosMainExporter complete.");
		return true;
	}
	
}

?>
