<?php

class NagiosTimePeriodExporter extends NagiosExporter {
	
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
		$job->addNotice("NagiosTimePeriodExporter attempting to export time period configuration.");

		$fp = $this->getOutputFile();

		if(!$objectDiff){
			fputs($fp, "# Written by NagiosTimePeriodExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
			$timeperiods = NagiosTimeperiodPeer::doSelect(new Criteria());
		}else{
			$timeperiods[] = $objectDiff;
		}
		
		foreach($timeperiods as $timeperiod) {
			fputs($fp, "define timeperiod {\n");
			$finalArray = array();
			$values = $timeperiod->toArray(BasePeer::TYPE_FIELDNAME);
			foreach($values as $key => $value) {
				if($key == 'id' || $key == 'description') {
					continue;
				}
				if($key == 'name') {
					$key = 'timeperiod_name';
				}
				if($value === null) {
					continue;
				}	
				if($value === false) 
					$value = '0';
				$finalArray[$key] = $value;
			}
			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			
			// Get entries
			$entries = $timeperiod->getNagiosTimeperiodEntrys();
			foreach($entries as $entry) {
				fputs($fp, "\t" . $entry->getEntry() . "\t" . $entry->getValue() . "\n");
			}
			
			// Get exclusions
			
			$exclusions = $timeperiod->getNagiosTimeperiodExcludesRelatedByTimeperiodId();
			if(count($exclusions)) {
				fputs($fp, "\texclude\t");
				$first = true;
				foreach($exclusions as $exclude) {
					if(!$first) {
						fputs($fp, ",");
					}
					else $first = false;
					fputs($fp, $exclude->getNagiosTimeperiodRelatedByExcludedTimeperiod()->getName());
				}
				fputs($fp, "\n");
			}

			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosTimePeriodExporter complete.");
		return true;
	}
	
}

?>
