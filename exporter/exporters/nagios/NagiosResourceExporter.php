<?php

class NagiosResourceExporter extends NagiosExporter {
	
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
		$job->addNotice("NagiosResourceExporter attempting to export resource configuration.");
		
		// Grab our cgi config
		$resources = NagiosResourcePeer::doSelectOne(new Criteria());
		if(!$resources) {
			$job->addError("Unable to get Nagios Resources.  Your Lilac database is corrupt.");
			return false;
		}

		$finalArray = array();
		
		$values = $resources->toArray(BasePeer::TYPE_FIELDNAME);
		foreach($values as $key => $value) {
			if($key == 'id') {
				continue;
			}
			if(empty($value)) {
				continue;
			}
			$finalArray[$key] = $value;
		}
		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosResourceExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");
		foreach($finalArray as $key => $val) {
			fputs($fp, "$" . strtoupper($key) . "$" . "=" . $val . "\n");
		}
		
		$job->addNotice("NagiosResourceExporter complete.");
		return true;
	}
	
}

?>