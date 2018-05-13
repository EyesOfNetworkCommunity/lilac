<?php
require_once('NagiosTimeperiod.php');

class NagiosTimeperiodImporter extends NagiosImporter {

	private $regexValidators = array('name' => '',
								'use' => '',
								'timeperiod_name' => '',
								'register' => '',
								'alias' => '');
								
	private $fieldMethods = array('name' => 'setName',
								'timeperiod_name' => 'setName',
								'use' => '',
								'register' => '',
								'alias' => 'setAlias');
								
	// We should gather all the cfg_file and cfg_dir directives and add them to our NagiosImportEngine's object files
	public function init() {
		$config = $this->getEngine()->getConfig();
		$job = $this->getEngine()->getJob();
		$segment = $this->getSegment();
		
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if($key == "exclude") {
					// Ignore excludes during init.
					continue;
				}
				


				if(!key_exists($key, $this->regexValidators)) {
					
					// Check to see if it's a valid entry, normal or exception
					if($this->isValidTimePeriodEntryDefinition($key . " " . $value)) {
						continue;
					}					
					
					$job->addLogEntry("Variable in timeperiod object file not supported: " . $key . " on line " . $lineNum . ".", ImportLogEntry::TYPE_NOTICE);
					if(!$config->getVar('continue_error')) {
						return false;
					}
				}
				else {
					// Key exists, let's check the regexp
					if($this->regexValidators[$key] != '' && !preg_match($this->regexValidators[$key], $value)) {
						// Failed the regular expression match (which was provided)!!!
						$job->addLogEntry("Variable '" . $key . "' failed the regular expression sanity check of: " . $this->regexValidators[$key] . " on line " . $linenum);
						if(!$config->getVar('continue_error')) {
							return false;
						}
					}
				}
			}
		}
		$job->addNotice("NagiosTimeperiodImporter finished initializing.");
		return true;
	}
	
	public function valid() {
		$segment = $this->getSegment();
		$useTemplate = $segment->get("use");
		if($useTemplate) {
			// Okay, we need to check to see if we have an existing dependency
			$val = $useTemplate[0]['value'];
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$timeperiod = NagiosTimeperiodPeer::doSelectOne($c);
			if(!$timeperiod) {
				return false;
			}
			$timeperiod->clearAllReferences(true);
		}
		$excludes = $segment->get("exclude");
		if($excludes) {
			$val = $excludes[0]['value'];
			// Multiple timeperiods are seperated by a comma
			$timeperiods = explode(",", $val);
			if(count($timeperiods)) {
				foreach($timeperiods as $timeperiod) {
					$timeperiod = trim($timeperiod);
					$c = new Criteria();
					$c->add(NagiosTimeperiodPeer::NAME, $val);
					$c->setIgnoreCase(true);
					$target = NagiosTimeperiodPeer::doSelectOne($c);
					if(!$target) {
						return false;
					}
					$target->clearAllReferences(true);
				}
			}
			
		}
		
		
		return true;
	}
	
	private function superscanf($source, $pattern) {
		$results = sscanf($source, $pattern);
		foreach($results as $res) {
			if($res === null) {
				return null;
			}
		}
		return $results;
	}
	
	private function isValidTimePeriodEntryDefinition($definition) {
		// 2007-03-04 - 2008-03-04 / 2 
		if(count($this->superscanf($definition,"%4d-%2d-%2d - %4d-%2d-%2d / %d %[0-9:, -]"))==8) {
			return true;
		}
		if(count($this->superscanf($definition,"%4d-%2d-%2d / %d %[0-9:, -]"))==5) {
			return true;
		}
		if(count($this->superscanf($definition,"%4d-%2d-%2d - %4d-%2d-%2d %[0-9:, -]"))==7) {
			return true;
		}
		if(count($this->superscanf($definition,"%4d-%2d-%2d %[0-9:, -]"))==4) {
			return true;
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d %[a-z] - %[a-z] %d %[a-z] / %d %[0-9:, -]"))==8) {
			// $items contains our array
			if($this->isValidWeekday($items[0]) && $this->isValidMonth($items[2]) && $this->isValidWeekday($items[3]) && $this->isValidMonth($items[5])) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d - %[a-z] %d / %d %[0-9:, -]"))==6) {
			/* february 1 - march 15 / 3 */
			/* monday 2 - thursday 3 / 2 */
			/* day 4 - day 6 / 2 */
			if($this->isValidWeekday($items[0]) && $this->isValidWeekday($items[2])) {
				return true;
			}
			if($this->isValidMonth($items[0]) && $this->isValidMonth($items[2])) {
				return true;
			}
			if(!strcmp($items[0], "day") && strcmp($items[2], "day")) {
				return true;
			}	
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d - %d / %d %[0-9:, -]"))==5) {
			/* february 1 - 15 / 3 */
			/* monday 2 - 3 / 2 */
			/* day 1 - 25 / 4 */
			if($this->isValidWeekday($items[0])) {
				return true;
			}
			if($this->isValidMonth($items[0])) {
				return true;
			}
			if(!strcmp($items[0], "day")) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d %[a-z] - %[a-z] %d %[a-z] %[0-9:, -]"))==7) {
			/* wednesday 1 january - thursday 2 july */
			if($this->isValidWeekday($items[0]) && $this->isValidMonth($items[2]) && $this->isValidWeekday($items[3]) && $this->isValidMonth($items[5])) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d - %d %[0-9:, -]"))==4) {
			/* february 3 - 5 */
			/* thursday 2 - 4 */
			/* day 1 - 4 */
			if($this->isValidWeekday($items[0])) {
				return true;
			}
			if($this->isValidMonth($items[0])) {
				return true;
			}
			if(!strcmp($items[0], "day")) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d - %[a-z] %d %[0-9:, -]"))==5) {
			if($this->isValidWeekday($items[0]) && $this->isValidWeekday($items[2])) {
				/* monday 2 - thursday 3 */
				return true;
			}
			if($this->isValidMonth($items[0]) && $this->isValidMonth($items[2])) {
				/* february 1 - march 15 */
				return true;
			}
			if(!strcmp($items[0],"day")  && !strcmp($items[2],"day")){
				/* day 1 - day 5 */
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d%*[ \t]%[0-9:, -]"))==3) {
			/* february 3 */
			/* thursday 2 */
			/* day 1 */
			if($this->isValidWeekday($items[0])) {
				/* thursday 2 */
				return true;
			}
			if($this->isValidMonth($items[0])) {
				/* february 3 */
				return true;
			}
			if(!strcmp($items[0], "day")) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %d %[a-z] %[0-9:, -]"))==4) {
			/* thursday 3 february */
			if($this->isValidWeekday($items[0]) && $this->isValidMonth($items[2])) {
				return true;
			}
		}
		if(count($items = $this->superscanf($definition,"%[a-z] %[0-9:, -]"))==2) {
			// Normal sunday value
			if($this->isValidWeekday($items[0])) {
				return true;
			}
		}
		return false;	//OMG, no valid entry!
	}
	
	private function isValidWeekday($string) {
		return in_array(strtolower($string), array(
					'monday',
					'tuesday',
					'wednesday',
					'thursday',
					'friday',
					'saturday',
					'sunday'
				));
				

	}
	
	private function isValidMonth($string) {
		return in_array(strtolower($string), array(
				'january',
				'february',
				'march',
				'april',
				'may',
				'june',
				'july',
				'august',
				'september',
				'october',
				'november',
				'december'
			));
	}
	
	public function import() {

		$job = $this->getEngine()->getJob();
		
		$config = $this->getEngine()->getConfig();
		
		$timePeriod = new NagiosTimeperiod();
		
		$segment = $this->getSegment();
				
	
		// First check if we have a use
		$useTemplate = $segment->get("use");
		if($useTemplate) {
			// Okay, we need to check to see if we have an existing dependency
			$val = $useTemplate[0]['value'];
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$dependant = NagiosTimeperiodPeer::doSelectOne($c);
			if($dependant) {
				// We need to add all the entries from that time period to ours.
				$entries = $dependant->getNagiosTimeperiodEntrys();
				foreach($entries as $entry) {
					$tempEntry = new NagiosTimeperiodEntry();
					$tempEntry->setEntry($entry->getEntry());
					$tempEntry->setValue($entry->getValue());
					$timePeriod->addNagiosTimeperiodEntry($tempEntry);
				}
				$exclusions = $dependant->getNagiosTimeperiodExcludesRelatedByTimeperiodId();
				foreach($exclusions as $exclusion) {
					$tempExclusion = new NagiosTimeperiodExclude();
					$tempExclusion->setNagiosTimeperiodRelatedByTimeperiodId($timePeriod);
					$tempExclusion->setNagiosTimeperiodRelatedByExcludedTimeperiod($exclusion->getNagiosTimeperiodRelatedByExcludedTimePeriod);
				}
				$dependant->clearAllReferences(true);
			}
		}
				
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				if($key == "exclude") {
					continue;
				}
				$value = $entry['value'];
				$lineNum = $entry['line'];
				
				if($key == "use") {
					continue;
				}
				
					if(key_exists($key, $this->fieldMethods) && $this->fieldMethods[$key] != '') {
						// Okay, let's check that the method DOES exist
						if(!method_exists($timePeriod, $this->fieldMethods[$key])) {
							$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
							if(!$config->getVar('continue_error')) {
								return false;
							}	
						}
						else {
							call_user_func(array($timePeriod, $this->fieldMethods[$key]), $value);
						}
					}
					else {
						// It's an entry. Let's rebuild the string and grab the entry and value
						// This is pretty hackish
						$pos = $this->preg_pos("/[0-9]{1,2}:[0-9]{1,2}/", $entry['text']);	// Look for the first 00:00
						$tempLabel = trim(substr($entry['text'], 0, $pos - 1));
						
						$commentPos = strpos($entry['text'], ";");
						if(($commentPos === false)) {
							$commentLength = 0;
						}
						else {
							$commentLength = strlen(substr($entry['text'], $commentPos));
						}
						$valLength = strlen($entry['text']) - ($commentLength + $pos);
						$tempValue = trim(substr($entry['text'], $pos, $valLength));
						$tempEntry = new NagiosTimeperiodEntry();
						$tempEntry->setEntry($tempLabel);
						$tempEntry->setValue($tempValue);
						$timePeriod->addNagiosTimeperiodEntry($tempEntry);
						
						/*
						 * Must not be set, otherwise reference to NagiosTimeperiod() is also cleared 
						 */
						//$tempEntry->clearAllReferences(true);
					}
			}
		}
		
		// Check to see if there is an exclusion
		$excludes = $segment->get("exclude");
		if($excludes) {
			$val = $excludes[0]['value'];
			// Multiple timeperiods are seperated by a comma
			$timeperiods = explode(",", $val);
			if(count($timeperiods)) {
				foreach($timeperiods as $timeperiod) {
					$timeperiod = trim($timeperiod);
					$c = new Criteria();
					$c->add(NagiosTimeperiodPeer::NAME, $val);
					$c->setIgnoreCase(true);
					$target = NagiosTimeperiodPeer::doSelectOne($c);
					if(!$target) {
						$job->addLogEntry("Dependent exclude timeperiod " . $timeperiod . " not found. ", ImportLogEntry::TYPE_NOTICE );
						return false;
					}
					else {
						$exclusion = new NagiosTimeperiodExclude();
						$exclusion->setNagiosTimeperiodRelatedByTimeperiodId($timePeriod);
						$exclusion->setNagiosTimeperiodRelatedByExcludedTimeperiod($target);
						$exclusion->clearAllReferences(true);
						
						/*
						 * Must not be set, otherwise reference to NagiosTimeperiod() is also cleared
						 */
						//$target->clearAllReferences(true);
					}
				}
			}
			
		}		
				
		$timePeriod->save();

		
		$timePeriod->clearAllReferences(true);
		$job->addNotice("NagiosTimePeriodImporter finished importing timeperiod: " . $timePeriod->getName());
		return true;
	}
	
	private function preg_pos($hs_pattern, $hs_subject, &$hs_foundstring = null, $hn_offset = 0) {
		$hs_foundstring = NULL;

		if (preg_match($hs_pattern, $hs_subject, $ha_matches, PREG_OFFSET_CAPTURE, $hn_offset)) {
			if($hs_foundstring == null)
				$hs_foundstring = $ha_matches[0][0];
			return $ha_matches[0][1];
		}
		else {
			return FALSE;
		}
	}
}

?>
