<?php
require_once('NagiosContactGroup.php');

class NagiosContactGroupImporter extends NagiosImporter {

	private $regexValidators = array('contactgroup_name' => '',
									 'alias' => '',
									 'email' => '',
									 'members' => '');
								
	private $fieldMethods = array('contactgroup_name' => 'setName',
								  'alias' => 'setAlias',
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
					$job->addLogEntry("Variable in contact object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosContactGroupImporter finished initializing.");
		return true;
	}

	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		// Check contact existence
		if(isset($values['members'])) {
			foreach($values['members'] as $contactValues) {
				$c = new Criteria();
				$c->add(NagiosContactPeer::NAME, $contactValues['value']);
				$contact = NagiosContactPeer::doSelectOne($c);
				if(empty($contact)) {
					$job->addNotice("The contact specified by " . $contactValues['value'] . " was not found.  Setting this contact group as queued.");
					return false;
				}
				$contact->clearAllReferences(true);
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
		$contactgroup = new NagiosContactGroup();
        foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
						// Okay, let's check that the method DOES exist
				if(!method_exists($contactgroup, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_method($this->fieldMethods[$key], $contactgroup, $value);
				}
		
			}

		}
		$contactgroup->save();
		$contactgroup->clearAllReferences(true);
			
		$job->addNotice("NagiosContactGroupImporter finished importing contact group: " . $contactgroup->getName());
		return true;
	}
}

?>
