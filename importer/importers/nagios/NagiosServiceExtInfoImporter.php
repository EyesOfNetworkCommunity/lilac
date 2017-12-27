<?php
require_once('NagiosService.php');

class NagiosServiceExtInfoImporter extends NagiosImporter {

	private static $templates = array();	// Used to support template inheritance when importing this type of obj

	private $regexValidators = array('host_name' => '',
									 'service_description' => '',
									 'notes' => '',
									 'notes_url' => '',
                                     'action_url' => '',
									 'icon_image' => '',
									 'icon_image_alt' => '',
									 'name' => '',
									'use' => '',
									'register' => '');
								
	private $fieldMethods = array('notes' => 'setNotes',
								  'notes_url' => 'setNotesUrl',
								  'action_url' => 'setActionUrl',
                                  'icon_image' => 'setIconImage',
								  'icon_image_alt' => 'setIconImageAlt');
								
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
				
				if(strpos($key, "address") === 0) {
					// It's an address value, we'll accept it for now.
					continue;
				}

				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in service ext object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosServiceExtInfoImporter finished initializing.");
		return true;
	}

	public static function getTemplateByName($name) {
		if(!key_exists($name, NagiosServiceExtInfoImporter::$templates)) {
			return false;
		}
		return NagiosServiceExtInfoImporter::$templates[$name];
	}
	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Service Ext Info uses a template: " . $values['use'][0]['value']);	
			$template = NagiosServiceExtInfoImporter::getTemplateByName($values['use'][0]['value']);
			if(empty($template)) {
				$job->addNotice("That template is not found yet. Setting this host ext info as queued.");
				return false;
			}
		}

		// Check for service existence
		if(!isset($values['host_name']) || !isset($values['service_description'])) {
			$job->addNotice("The host or service for this service ext info is blank.  Service ext Info requires a host name.");
			return false;
		}
		$service = NagiosServicePeer::getByHostAndDescription($values['host_name'][0]['value'], $values['service_description'][0]['value']);
		if(empty($service)) {
			// Okay, so it's not assigned by hostname, last ditch effort, look 
			// through hostgroups
			$host = NagiosHostPeer::getByName($values['host_name'][0]['value']);
			if(!$host) {
				$job->addNotice("The service specified by " . $values['host_name'][0]['value'] . ":" . $values['service_description'][0]['value'] . " was not found.  Setting this service ext info as queued.");
				return false;
			}
			// Go through the hostgroups for the host
			$memberships = $host->getNagiosHostgroupMemberships();
			foreach($memberships as $membership) {
				$hostgroup = $membership->getNagiosHostgroup();
				$service = NagiosServicePeer::getByHostgroupAndDescription($hostgroup->getName(), $values['service_description'][0]['value']);
				if($service) {
					break;
				}
			}
		}
		if($service) {
			$service->clearAllReferences(true);
		}
		if(!$service) {
			$job->addNotice("The service specified by " . $values['host_name'][0]['value'] . ":" . $values['service_description'][0]['value'] . " was not found.  Setting this service ext info as queued.");
			return false;
		}
		return true;

	}

	private function getTemplateValues($name) {
		$job = $this->getEngine()->getJob();
		$template = NagiosServiceExtInfoImporter::getTemplateByName($name);
		if(!$template) {
			$job->addNotice("FATAL ERROR: Failed to get template by name: " . $name);
		}
		// $template is a segment instance
		$values = $template->getValues();
		if(isset($values['use'])) {
			// Multiple levels!
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}
		return $values;
	}

	static function saveTemplate($name, $segment) {
		NagiosServiceExtInfoImporter::$templates[$name] = $segment;
	}
	
	public function import() {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		// We need to determine if we are a template
		if(isset($values['name'])) {
			// We are a template
			$job->addNotice("Saving internal service ext info template: " . $values['name'][0]['value']);
			NagiosServiceExtInfoImporter::saveTemplate($values['name'][0]['value'], $segment);
			return true;
		}		

		// Get our host obj
		if(isset($values['use'])) {
			// We sure are using a template!
			// Okay, hokey multi-inheritance support for the importer
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}
		$service = NagiosServicePeer::getByHostAndDescription($values['host_name'][0]['value'], $values['service_description'][0]['value']);
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
				if($key == 'use' || $key == 'name' || $key == 'register' || $key == 'host_name' || $key == 'service_description')
					continue;

				// Okay, let's check that the method DOES exist
				if(!method_exists($service, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_func(array($service, $this->fieldMethods[$key]), $value);
				}
		
			}

		}
        $service->save();
		$service->clearAllReferences(true);
			
		$job->addNotice("NagiosServiceExtInfo finished importing extended info for: " . $service->getNagiosHost()->getName() . ":" . $service->getDescription());
		return true;
	}
}

?>
