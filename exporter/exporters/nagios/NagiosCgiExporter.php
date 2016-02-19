<?php

class NagiosCgiExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export() {
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosCgiExporter attempting to export cgi configuration.");
		
		// Grab our cgi config
		$cgiConfig = NagiosCgiConfigurationPeer::doSelectOne(new Criteria());
		if(!$cgiConfig) {
			$job->addError("Unable to get CGI Configuration object.  Your Lilac database is corrupt.");
			return false;
		}

		$finalArray = array();
		
		$values = $cgiConfig->toArray(BasePeer::TYPE_FIELDNAME);
		foreach($values as $key => $value) {
			if($key == 'id') {
				continue;
			}
			if($value === null) {
				continue;
			}
			if($value === false) {
				$value = '0';
			}
			$finalArray[$key] = $value;
		}

		// get our main config
		$mainConfig = NagiosMainConfigurationPeer::doSelectOne(new Criteria());

		$configdir = $mainConfig->getConfigDir();

		$finalArray['main_config_file'] = $configdir . "/nagios.cfg";

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosCgiExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");
		foreach($finalArray as $key => $val) {
			fputs($fp, $key . "=" . $val . "\n");
		}
		
		$job->addNotice("NagiosCgiExporter complete.");
		return true;
	}
	
}

?>
