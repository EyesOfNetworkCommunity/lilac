<?php
require_once('NagiosServiceGroup.php');

class NagiosServiceGroupImporter extends NagiosImporter {

	private $regexValidators = array('servicegroup_name' => '',
									 'alias' => '',
									 'servicegroup_members' => '',
									 'notes',
									 'notes_url',
									 'action_url',
									 'members' => '');
								
	private $fieldMethods = array('servicegroup_name' => 'setName',
								  'alias' => 'setAlias',
								  'servicegroup_members' => 'addMembersByServiceGroup',
								  'notes' => 'setNotes',
								  'notes_url' => 'setNotesUrl',
								  'action_url' => 'setActionUrl',
								  'members' => 'addMemberByName');
								
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
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in servicegroup object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosServiceGroupImporter finished initializing.");
		return true;
	}

	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		// Check contact existence
		if(isset($values['members'])) {
			$members = explode(",",$values['members'][0]['value']);
			for($counter = 0; $counter < count($members); $counter += 2) {
				// Get Service
				$service = NagiosServicePeer::getByHostAndDescription($members[$counter], $members[$counter + 1]);
				if(!$service) {
					$job->addNotice("The member specified by " . $members[$counter] . ":" . $members[$counter+1] . " was not found.  Setting this service group as queued.");
					return false;
				}
			}
		}
		if(isset($values['servicegroup_members'])) {
			foreach($values['servicegroup_members'] as $serviceGroupValues) {
				$c = new Criteria();
				$c->add(NagiosServiceGroupPeer::NAME, $serviceGroupValues['value']);
				$servicegroup = NagiosServiceGroupPeer::doSelectOne($c);
				if(empty($servicegroup)) {
					$job->addNotice("The service group specified by " . $serviceGroupValues['value'] . " was not found.  Setting this service group as queued.");
					return false;
				}
			}
		}

		return true;

	}

	public function import() {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		$servicegroup = new NagiosServiceGroup();

		if(isset($values['members'])) {
			$members = explode(",",$values['members'][0]['value']);
			for($counter = 0; $counter < count($members); $counter +=2) {
				// Get Service
				$service = NagiosServicePeer::getByHostAndDescription($members[$counter], $members[$counter + 1]);
				$servicegroup->addService($service);	
				$service->clearAllReferences(true);
			}
		}
	
        foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];

				if($key == 'members') {
					// Already did it above
					continue;
				}

				// Okay, let's check that the method DOES exist
				if(!method_exists($servicegroup, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_func(array($servicegroup, $this->fieldMethods[$key]), $value);
				}
		
			}

		}
		$servicegroup->save();
		$servicegroup->clearAllReferences(true);
			
		$job->addNotice("NagiosServiceGroupImporter finished importing service group: " . $servicegroup->getName());
		return true;
	}
}

?>
