<?php

class NagiosContactGroupExporter extends NagiosExporter {
	
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
		$job->addNotice("NagiosContactGroupExporter attempting to export contact configuration.");

		$fp = $this->getOutputFile();
		
		if(!$objectDiff){
			fputs($fp, "# Written by NagiosContactGroupExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
			$contactgroups = NagiosContactGroupPeer::doSelect(new Criteria());
		} else {
			$contactgroups[] = $objectDiff;
		}
		
		foreach($contactgroups as $contactgroup) {
			fputs($fp, "define contactgroup {\n");
			$finalArray = array();
			$values = $contactgroup->toArray(BasePeer::TYPE_FIELDNAME);
			foreach($values as $key => $value) {
				if($key == 'id') {
					continue;
				}
				if($key == 'name') {
					$key = 'contactgroup_name';
				}
				if($value === null) {
					continue;
				}
				if($value === false) {
					$value = '0';
				}
				$finalArray[$key] = $value;
			}

			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			
			// Members
			$memberships = $contactgroup->getNagiosContactGroupMembers();
			if(count($memberships)) {
				fputs($fp, "\tmembers\t");
				$first = true;
				foreach($memberships as $membership) {
					if(!$first) {
						fputs($fp, ",");
					}
					else {
						$first = false;
					}
					fputs($fp, $membership->getNagiosContact()->getName());
				}
				fputs($fp, "\n");
			}
			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosContactGroupExporter complete.");
		return true;
	}
	
}

?>
