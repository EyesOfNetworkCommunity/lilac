<?php

class NagiosServiceGroupExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export($objectDiff=false) {
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosServiceGroupExporter attempting to export host group configuration.");

		$fp = $this->getOutputFile();
		
		if(!$objectDiff){
			fputs($fp, "# Written by NagiosServiceGroupExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
			$servicegroups = NagiosServiceGroupPeer::doSelect(new Criteria());
		} else {
			$servicegroups[] = $objectDiff;
		}
		
		foreach($servicegroups as $servicegroup) {
			fputs($fp, "define servicegroup {\n");
			$finalArray = array();
			$values = $servicegroup->toArray(BasePeer::TYPE_FIELDNAME);
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
				if($key == "name") {
					$key = "servicegroup_name";
				}
				$finalArray[$key] = $value;
			}
			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosServiceGroupExporter complete.");
		return true;
	}
	
}

?>
