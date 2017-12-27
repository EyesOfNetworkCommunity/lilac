<?php
require_once('NagiosCommand.php');

class NagiosCommandImporter extends NagiosImporter {

	private $regexValidators = array('command_name' => '',
								'use',
								'register',
								'command_line' => '');
								
	private $fieldMethods = array('command_name' => 'setName',
								'name' => 'setName',
								'command_line' => 'setLine');
								
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
					$job->addLogEntry("Variable in command object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosCommandImporter finished initializing.");
		return true;
	}
	
	public function valid() {
		$segment = $this->getSegment();
		$useTemplate = $segment->get("use");
		if($useTemplate) {
			// Okay, we need to check to see if we have an existing dependency
			$val = $useTemplate[0]['value'];
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$timeperiod = NagiosCommandPeer::doSelectOne($c);
			if(!$timePeriod) {
				return false;
			}
			$timeperiod->clearAllReferences(true);
		}
		return true;
	}
	
	public function import() {

		$job = $this->getEngine()->getJob();
		
		$config = $this->getEngine()->getConfig();
		
		$command = new NagiosCommand();
		
		$segment = $this->getSegment();
				
	
		// First check if we have a use
		$useTemplate = $segment->get("use");
		if($useTemplate) {
			// Okay, we need to check to see if we have an existing dependency
			$val = $useTemplate[0]['value'];
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$dependant = NagiosCommandPeer::doSelectOne($c);
			if($dependant) {
				$command->setLine($dependant->getLine());
			}
			$dependant->clearAllReferences(true);
		}
				
		$values = $segment->getValues();
		$fileName = $segment->getFilename();

		$commandLine = array();
		
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				$value = $entry['value'];
				$lineNum = $entry['line'];
					if(key_exists($key, $this->fieldMethods) && $this->fieldMethods[$key] != '') {

						if($key == "command_line") {
							// Combine into our line array
							$commandLine[] = $value;
							continue;
						}


						// Okay, let's check that the method DOES exist
						if(!method_exists($command, $this->fieldMethods[$key])) {
							$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
							if(!$config->getVar('continue_error')) {
								return false;
							}	
						}
						else {
							call_user_func(array($command, $this->fieldMethods[$key]), $value);
						}
					}
			}
		}
		// re-assemble command
		$commandLine = implode(',', $commandLine);
		$command->setLine($commandLine);
				
		$command->save();

		$command->clearAllReferences(true);
		
		$job->addNotice("NagiosCommandImporter finished importing command: " . $command->getName());
		return true;
	}
}

?>
