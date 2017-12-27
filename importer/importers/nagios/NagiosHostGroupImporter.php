<?php
require_once('NagiosHostgroup.php');

class NagiosHostGroupImporter extends NagiosImporter {

	private $regexValidators = array('hostgroup_name' => '',
									 'alias' => '',
									 'hostgroup_members' => '',
									 'notes' => '',
									 'notes_url' => '',
									 'action_url' => '',
									 'members' => '');
								
	private $fieldMethods = array('hostgroup_name' => 'setName',
								  'alias' => 'setAlias',
								  'hostgroup_members' => 'addMembersByHostgroup',
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
					$job->addLogEntry("Variable in hostgroup object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosHostGroupImporter finished initializing.");
		return true;
	}

	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		// Check contact existence
		if(isset($values['members'])) {
			foreach($values['members'] as $hostValues) {
				if($hostValues['value'] == "*") {
					// Means every host
					continue;
				}
				$c = new Criteria();
				$c->add(NagiosHostPeer::NAME, $hostValues['value']);
				$host = NagiosHostPeer::doSelectOne($c);
				if(empty($host)) {
					$job->addNotice("The host specified by " . $hostValues['value'] . " was not found.  Setting this host group as queued.");
					return false;
				}
				$host->clearAllReferences(true);	
			}
		}
		if(isset($values['hostgroup_members'])) {
			foreach($values['hostgroup_members'] as $hostGroupValues) {
				$c = new Criteria();
				$c->add(NagiosHostgroupPeer::NAME, $hostGroupValues['value']);
				$host = NagiosHostgroupPeer::doSelectOne($c);
				if(empty($host)) {
					$job->addNotice("The host group specified by " . $hostValues['value'] . " was not found.  Setting this host group as queued.");
					return false;
				}
				$host->clearAllReferences(true);	
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
		$hostgroup = new NagiosHostgroup();
        foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
						// Okay, let's check that the method DOES exist
				if(!method_exists($hostgroup, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_func(array($hostgroup, $this->fieldMethods[$key]), $value);
				}
		
			}

		}
		$hostgroup->save();
		$hostgroup->clearAllReferences(true);
			
		$job->addNotice("NagiosHostGroupImporter finished importing host group: " . $hostgroup->getName());
		return true;
	}
}

?>
