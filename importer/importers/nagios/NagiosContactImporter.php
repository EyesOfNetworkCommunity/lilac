<?php
require_once('NagiosContact.php');

class NagiosContactImporter extends NagiosImporter {

	private static $templates = array();	// Used to support template inheritance when importing this type of obj

	private $regexValidators = array('contact_name' => '',
									 'alias' => '',
									 'email' => '',
                                     'contactgroups' => '',
									 'host_notifications_enabled' => '',
									 'service_notifications_enabled' => '',
									 'service_notification_period' => '',
									 'service_notification_options' => '',
									 'host_notification_options' => '',
									 'host_notification_period' => '',
									 'service_notification_commands' => '',
									 'host_notification_commands' => '',
									 'pager' => '',
									 'can_submit_commands' => '',
									 'retain_status_information' => '',
									 'retain_nonstatus_information' => '',
									 'name' => '',
									'use' => '',
									'register' => '');
								
	private $fieldMethods = array('contact_name' => 'setName',
								  'alias' => 'setAlias',
								  'email' => 'setEmail',
                                  'contactgroups' => 'joinNagiosContactGroupByName',
									 'host_notifications_enabled' => 'setHostNotificationsEnabled',
									 'service_notifications_enabled' => 'setServiceNotificationsEnabled',
									 'service_notification_period' => 'setServiceNotificationPeriodByName',
									 'host_notification_period' => 'setHostNotificationPeriodByName',
									 'service_notification_commands' => 'addServiceNotificationCommandByName',
									 'host_notification_commands' => 'addHostNotificationCommandByName',
									 'pager' => 'setPager',
									 'retain_status_information' => 'setRetainStatusInformation',
									 'retain_nonstatus_information' => 'setRetainNonstatusInformation',
									 'can_submit_commands' => 'setCanSubmitCommands');
								
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
		$job->addNotice("NagiosContactImporter finished initializing.");
		return true;
	}

	public static function getTemplateByName($name) {
		if(!key_exists($name, NagiosContactImporter::$templates)) {
			return false;
		}
		return NagiosContactImporter::$templates[$name];
	}
	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Contact uses a template: " . $values['use'][0]['value']);	
			$template = NagiosContactImporter::getTemplateByName($values['use'][0]['value']);
			if(empty($template)) {
				$job->addNotice("That template is not found yet. Setting this contact as queued.");
				return false;
			}
		}
		// Check time period existence
		if(isset($values['host_notification_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['host_notification_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['host_notification_period'][0]['value'] . " was not found.  Setting this contact as queued.");
				return false;
			}
			$timePeriod->clearAllReferences(true);
		}
		if(isset($values['service_notification_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['service_notification_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['service_notification_period'][0]['value'] . " was not found.  Setting this contact as queued.");
				return false;
			}
			$timePeriod->clearAllReferences(true);
		}
		// Check command existence
		if(isset($values['service_notification_commands'])) {
			foreach($values['service_notification_commands'] as $commandValues) {
				$c = new Criteria();
				$c->add(NagiosCommandPeer::NAME, $commandValues['value']);
				$command = NagiosCommandPeer::doSelectOne($c);
				if(empty($command)) {
					$job->addNotice("The command specified by " . $commandValues['value'] . " was not found.  Setting this contact as queued.");
					return false;
				}
				$command->clearAllReferences(true);
			
			}
		}
		if(isset($values['host_notification_commands'])) {
			foreach($values['host_notification_commands'] as $commandValues) {
				$c = new Criteria();
				$c->add(NagiosCommandPeer::NAME, $commandValues['value']);
				$command = NagiosCommandPeer::doSelectOne($c);
				if(empty($command)) {
					$job->addNotice("The command specified by " . $commandValues['value'] . " was not found.  Setting this contact as queued.");
					return false;
				}
				$command->clearAllReferences(true);
			}
		}

		// Check contact groups
		if(isset($values['contactgroups'])) {
			foreach($values['contactgroups'] as $contactGroupValues) {
				$c = new Criteria();
				$c->add(NagiosContactGroupPeer::NAME, $contactGroupValues['value']);
				$contactgroup = NagiosContactGroupPeer::doSelectOne($c);
				if(empty($contactgroup)) {
					$job->addNotice("The contact group specified by " . $contactGroupValues['value'] . " was not found.  Setting this contact as queued.");
					return false;
				}
				$contactgroup->clearAllReferences(true);
			}
		}
		return true;

	}

	private function getTemplateValues($name) {
		$job = $this->getEngine()->getJob();
		$template = NagiosContactImporter::getTemplateByName($name);
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
		NagiosContactImporter::$templates[$name] = $segment;
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
			$job->addNotice("Saving internal contact template: " . $values['name'][0]['value']);
			NagiosContactImporter::saveTemplate($values['name'][0]['value'], $segment);
			return true;
		}		
		$contact = new NagiosContact();
		// Check if we need to bring in values from a template
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
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
				if($key == 'use' || $key == 'name' || $key == 'register')
					continue;

				// Address
				if(strpos($key, "address") === 0) {
					$contact->addAddress($value);
					continue;
				}

				if($key == 'service_notification_options') {
					$options = explode(",",$entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'w':
								$contact->setServiceNotificationOnWarning(true);
								break;
							case 'u':
								$contact->setServiceNotificationOnUnknown(true);
								break;
							case 'c':
								$contact->setServiceNotificationOnCritical(true);
								break;
							case 'r':
								$contact->setServiceNotificationOnRecovery(true);
								break;
							case 'f':
								$contact->setServiceNotificationOnFlapping(true);
								break;
						}

					}
					continue;
				}
				if($key == 'host_notification_options') {
					$options = explode(",", $entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'd':
								$contact->setHostNotificationOnDown(true);
								break;
							case 'u':
								$contact->setHostNotificationOnUnreachable(true);
								break;
							case 'r':
								$contact->setHostNotificationOnRecovery(true);
								break;
							case 'f':
								$contact->setHostNotificationOnFlapping(true);
								break;
							case 's':
								$contact->setHostNotificationOnScheduledDowntime(true);
								break;
						}
					}
					continue;
				}
				// Okay, let's check that the method DOES exist
				if(!method_exists($contact, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_method($this->fieldMethods[$key], $contact, $value);
				}
		
			}

		}
        $contact->save();
		$contact->clearAllReferences(true);
			
		$job->addNotice("NagiosContactImporter finished importing contact: " . $contact->getName());
		return true;
	}
}

?>
