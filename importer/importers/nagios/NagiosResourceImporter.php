<?php
require_once('NagiosResource.php');

class NagiosResourceImporter extends NagiosImporter {

	private $regexValidators = array('$USER1$' => '',
								'$USER2$' => '',
								'$USER3$' => '',
								'$USER4$' => '',
								'$USER5$' => '',
								'$USER6$' => '',
								'$USER7$' => '',
								'$USER8$' => '',
								'$USER9$' => '',
								'$USER10$' => '',
								'$USER11$' => '',
								'$USER12$' => '',
								'$USER13$' => '',
								'$USER14$' => '',
								'$USER15$' => '',
								'$USER16$' => '',
								'$USER17$' => '',
								'$USER18$' => '',
								'$USER19$' => '',
								'$USER20$' => '',
								'$USER21$' => '',
								'$USER22$' => '',
								'$USER23$' => '',
								'$USER24$' => '',
								'$USER25$' => '',
								'$USER26$' => '',
								'$USER27$' => '',
								'$USER28$' => '',
								'$USER29$' => '',
								'$USER30$' => '',
								'$USER31$' => '',
								'$USER31$' => '');
	
	
	private $fieldMethods = array('$USER1$' => 'setUser1',
								'$USER2$' => 'setUser2',
								'$USER3$' => 'setUser3',
								'$USER4$' => 'setUser4',
								'$USER5$' => 'setUser5',
								'$USER6$' => 'setUser6',
								'$USER7$' => 'setUser7',
								'$USER8$' => 'setUser8',
								'$USER9$' => 'setUser9',
								'$USER10$' => 'setUser10',
								'$USER11$' => 'setUser11',
								'$USER12$' => 'setUser12',
								'$USER13$' => 'setUser13',
								'$USER14$' => 'setUser14',
								'$USER15$' => 'setUser15',
								'$USER16$' => 'setUser16',
								'$USER17$' => 'setUser17',
								'$USER18$' => 'setUser18',
								'$USER19$' => 'setUser19',
								'$USER20$' => 'setUser20',
								'$USER21$' => 'setUser21',
								'$USER22$' => 'setUser22',
								'$USER23$' => 'setUser23',
								'$USER24$' => 'setUser24',
								'$USER25$' => 'setUser25',
								'$USER26$' => 'setUser26',
								'$USER27$' => 'setUser27',
								'$USER28$' => 'setUser28',
								'$USER29$' => 'setUser29',
								'$USER30$' => 'setUser30',
								'$USER31$' => 'setUser31',
								'$USER31$' => 'setUser32');
								
	// We should gather all the cfg_file and cfg_dir directives and add them to our NagiosImportEngine's object files
	public function init() {
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in resources configuration file not supported: " . $key . " on line " . $linenum);
					if(!$config->get('continue_error')) {
						return false;
					}
				}
				else {
					// Key exists, let's check the regexp
					if($this->regexValidators[$key] != '' && !preg_match($this->regexValidators[$key], $value)) {
						// Failed the regular expression match (which was provided)!!!
						$job->addLogEntry("Variable '" . $key . "' failed the regular expression sanity check of: " . $this->regexValidators[$key] . " on line " . $linenum);
						if(!$config->get('continue_error')) {
							return false;
						}
					}
				}
			}
		}
		$job->addNotice("NagiosResourceImporter finished initializing.");
	}
	
	public function valid() {
		$this->getEngine()->getJob()->addNotice("NagiosResourceImporter has nothing to validate.");
		return true;
	}
	
	public function import() {

		$job = $this->getEngine()->getJob();
		
		$config = $this->getEngine()->getConfig();
		
		$resourcesCfg = new NagiosResource();
		
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				$value = $entry['value'];
				$lineNum = $entry['line'];
					if(key_exists($key, $this->fieldMethods) && $this->fieldMethods[$key] != '') {
						// Okay, let's check that the method DOES exist
						if(!method_exists($resourcesCfg, $this->fieldMethods[$key])) {
							$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
							if(!$config->getVar('continue_error')) {
								return false;
							}	
						}
						else {
							call_user_method($this->fieldMethods[$key], $resourcesCfg, $value);
						}
					}
			}
		}
		
		// If we got here, it's safe to delete the existing main config and save the new one
		$oldConfig = NagiosResourcePeer::doSelectOne(new Criteria());
		if($oldConfig) {
			$oldConfig->delete();
		}
		
		$resourcesCfg->save();
		$job->addNotice("NagiosResourceImporter finished importing resources configuration.");
		return true;
	}
}

?>