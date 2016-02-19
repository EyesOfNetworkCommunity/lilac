<?php

class NagiosHostGroupExporter extends NagiosExporter {
	
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
		$job->addNotice("NagiosHostGroupExporter attempting to export host group configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosHostGroupExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());

		foreach($hostgroups as $hostgroup) {
			fputs($fp, "define hostgroup {\n");
			$finalArray = array();
			$values = $hostgroup->toArray(BasePeer::TYPE_FIELDNAME);
			foreach($values as $key => $value) {
				if($key == 'id') {
					continue;
				}
				if($value === null) {
					continue;
				}
				if($value === false)
					$value = '0';
				if($key == "name") {
					$key = "hostgroup_name";
				}
				$finalArray[$key] = $value;
			}
			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosHostGroupExporter complete.");
		return true;
	}
	
}

?>
