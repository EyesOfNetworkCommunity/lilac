<?php
require_once('NagiosServiceTemplate.php');
require_once('NagiosService.php');
require_once('NagiosServiceTemplateInheritance.php');

class NagiosServiceImporter extends NagiosImporter {

	private $regexValidators = array('host_name' => '',
									 'hostgroup_name' => '',
									 'hostgroup' => '',
									 'service_description' => '',
									 'display_name' => '',
                                     'address' => '',
									 'servicegroups' => '',
									 'is_volatile' => '',
									 'check_command' => '',
									 'initial_state' => '',
									 'max_check_attempts' => '',
									 'check_interval' => '',
									 'retry_interval' => '',
									 'first_notification_delay' => '',
									 'active_checks_enabled' => '',
									 'passive_checks_enabled' => '',
									 'check_period' => '',
									 'obsess_over_service' => '',
									 'check_freshness' => '',
									 'freshness_threshold' => '',
									 'event_handler' => '',
									 'event_handler_enabled' => '',
									 'low_flap_threshold' => '',
									 'high_flap_threshold' => '',
									 'flap_detection_enabled' => '',
									 'flap_detection_options' => '',
									 'process_perf_data' => '',
									 'retain_status_information' => '',
									 'retain_nonstatus_information' => '',
									 'contacts' => '',
									 'contact_groups' => '',
									 'notification_interval' => '',
                                     'first_notification_delay' => '',
									 'notification_period' => '',
									 'notification_options' => '',
									 'notifications_enabled' => '',
									 'stalking_options' => '',
                                     'failure_prediction_enabled' => '',
									 'parallelize_check' => '',
									 'normal_check_interval' => '',
									 'retry_check_interval' => '',
									 'notes' => '',
									 'notes_url' => '',
									 'action_url' => '',
									 'icon_image' => '',
									 'icon_image_alt' => '',
									 'vrml_image' => '',
									 'name' => '',
									 'use' => '',
									 'register' => '');
								
	private $fieldMethods = array('name' => 'setName',
								  'service_description' => 'setDescription',
								  'display_name' => 'setDisplayName',
								  'address' => 'setAddress',
								  'is_volatile' => 'setIsVolatile',
								  'servicegroups' => 'addServicegroupByName',
								  'check_command' => 'setCheckCommandByName',
								  'initial_state' => 'setInitialState',
								  'max_check_attempts' => 'setMaximumCheckAttempts',
								  'check_interval' => 'setNormalCheckInterval',
								  'retry_interval' => 'setRetryInterval',
								  'first_notification_delay' => 'setFirstNotificationDelay',
								  'active_checks_enabled' => 'setActiveChecksEnabled',
								  'passive_checks_enabled' => 'setPassiveChecksEnabled',
								  'check_period' => 'setCheckPeriodByName',
								  'obsess_over_service' => 'setObsessOverService',
								  'check_freshness' => 'setCheckFreshness',
								  'freshness_threshold' => 'setFreshnessThreshold',
								  'event_handler' => 'setEventHandlerByName',
								  'event_handler_enabled' => 'setEventHandlerEnabled',
								  'low_flap_threshold' => 'setLowFlapThreshold',
								  'high_flap_threshold' => 'setHighFlapThreshold',
								  'flap_detection_enabled' => 'setFlapDetectionEnabled',
								  'flap_detection_options' => 'setFlapDetectionOptions',
								  'process_perf_data' => 'setProcessPerfData',
								  'retain_status_information' => 'setRetainStatusInformation',
								  'retain_nonstatus_information' => 'setRetainNonstatusInformation',
								  'contacts' => 'addContactByName',
								  'contact_groups' => 'addContactGroupByName',
								  'notification_interval' => 'setNotificationInterval',
								  'first_notification_delay' => 'setFirstNotificationDelay',
								  'notification_period' => 'setNotificationPeriodByName',
								  'notification_options' => 'setNotificationOptions',
								  'notifications_enabled' => 'setNotificationsEnabled',
								  'stalking_options' => 'setStalkingOptions',
                                  'failure_prediction_enabled' => 'setFailurePredictionEnabled',
								  'parallelize_check' => 'setParallelizeCheck',
								  'normal_check_interval' => 'setNormalCheckInterval',
								  'retry_check_interval' => 'setRetryInterval',
								  'notes' => 'setNotes',
								  'notes_url' => 'setNotesUrl',
								  'action_url' => 'setActionUrl',
								  'icon_image' => 'setIconImage',
								  'icon_image_alt' => 'setIconImageAlt');
								
	public function init() {
		$config = $this->getEngine()->getConfig();
		$job = $this->getEngine()->getJob();
		$segment = $this->getSegment();
		
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if($key[0] == "_")
					continue;
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in service object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosServiceImporter finished initializing.");
		return true;
	}

	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Service uses a template: " . $values['use'][0]['value']);	
            $template = NagiosServiceTemplatePeer::getByName($values['use'][0]['value']);
			if(empty($template)) {
				$job->addNotice("That template is not found yet. Setting this service as queued.");
				return false;
			}
			$template->clearAllReferences(true);
		}
		// Check time period existence
		if(isset($values['check_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['check_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['check_period'][0]['value'] . " was not found.  Setting this service as queued.");
				return false;
			}
			$timePeriod->clearAllReferences(true);
		}
		if(isset($values['notification_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['notification_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['notification_period'][0]['value'] . " was not found.  Setting this service as queued.");
				return false;
			}
			$timePeriod->clearAllReferences(true);
		}
		// Check command existence
		if(isset($values['check_command'])) {
			$params = explode('!', $values['check_command'][0]['value']);
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $params[0]);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(empty($command)) {
				$job->addNotice("The command specified by " . $params[0] . " was not found.  Setting this service as queued.");
				return false;
			}
			$command->clearAllReferences(true);
		}
		if(isset($values['event_handler'])) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $values['event_handler'][0]['value']);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(empty($command)) {
				$job->addNotice("The command specified by " . $values['event_handler'][0]['value'] . " was not found.  Setting this service as queued.");
				return false;
			}
			$command->clearAllReferences(true);
		}

		// Check contact groups
		if(isset($values['contact_groups'])) {
			foreach($values['contact_groups'] as $contactGroupValues) {
				$c = new Criteria();
				$c->add(NagiosContactGroupPeer::NAME, $contactGroupValues['value']);
				$contactgroup = NagiosContactGroupPeer::doSelectOne($c);
				if(empty($contactgroup)) {
					$job->addNotice("The contact group specified by " . $contactGroupValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$contactgroup->clearAllReferences(true);
			}
		}
        if(isset($values['contacts'])) {
			foreach($values['contacts'] as $contactValues) {
				$c = new Criteria();
				$c->add(NagiosContactPeer::NAME, $contactValues['value']);
				$contactgroup = NagiosContactPeer::doSelectOne($c);
				if(empty($contactgroup)) {
					$job->addNotice("The contact specified by " . $contactValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$contactgroup->clearAllReferences(true);
			}
		}
		// Check host groups
		if(isset($values['servicegroups'])) {
			foreach($values['servicegroups'] as $serviceGroupValues) {
				$c = new Criteria();
				$c->add(NagiosServiceGroupPeer::NAME, $serviceGroupValues['value']);
				$servicegroup = NagiosServiceGroupPeer::doSelectOne($c);
				if(empty($servicegroup)) {
					$job->addNotice("The service group specified by " . $serviceGroupValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$servicegroup->clearAllReferences(true);
			}
		}
		// Check for hosts
		if(isset($values['host_name'])) {
			foreach($values['host_name'] as $hostValues) {
				$host = NagiosHostPeer::getByName($hostValues['value']);
				if(empty($host)) {
					$job->addNotice("The host specified by " . $hostValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$host->clearAllReferences(true);
			}
		}
		// Check for hostgroup_name
		if(isset($values['hostgroup_name'])) {
			foreach($values['hostgroup_name'] as $hostgroupValues) {
				$hostgroup = NagiosHostgroupPeer::getByName($hostgroupValues['value']);
				if(empty($hostgroup)) {
					$job->addNotice("The host group specified by " . $hostgroupValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$hostgroup->clearAllReferences(true);
			}
		}
		// Check for hostgroup_name
		if(isset($values['hostgroup'])) {
			foreach($values['hostgroup'] as $hostgroupValues) {
				$hostgroup = NagiosHostgroupPeer::getByName($hostgroupValues['value']);
				if(empty($hostgroup)) {
					$job->addNotice("The host group specified by " . $hostgroupValues['value'] . " was not found.  Setting this service as queued.");
					return false;
				}
				$hostgroup->clearAllReferences(true);
			}
		}

		return true;

	}

	private function __process($obj) {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		// First let's go and re-merge the check_commands
		foreach($values as $key => $entries) {
			if($key == "check_command") {
				foreach($entries as $entry) {
					if(empty($newEntry)) {
						$newEntry = $entry;
					}
					else {
						$newEntry['value'] .= "," . $entry['value'];
					}
				}
				$entries = array($newEntry);
			}
		}
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
				if($key == 'register' || $key == 'host_name' )
					continue;
				
				// Custom object variables
				if($key[0] == "_")
				{
					$cov = new NagiosServiceCustomObjectVar();
					$cov->setVarName(substr($key, 1));
					$cov->setVarValue($value);
						
					$obj->addNagiosServiceCustomObjectVar($cov);
					continue;
				}

				if($key == 'use') {
					// We need to add a template inheritance
					$obj->addTemplateInheritance($entry['value']);
					continue;
				}

				if($key == 'check_command') {
					$options = explode("!", $entry['value']);
					// Okay, first we add the check command parameter.
					$obj->setCheckCommandByName($options[0]);
					if(count($options > 0)) {
						for($counter = 1; $counter < count($options); $counter++) {
							$obj->addCheckCommandParameter($options[$counter]);
						}
					}
					continue;
				}

				if($key == 'flap_detection_options') {
					$options = explode(",",$entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'o':
								$obj->setFlapDetectionOnOk(true);
								break;
							case 'w':
								$obj->setFlapDetectionOnWarning(true);
								break;
							case 'c':
								$obj->setFlapDetectionOnCritical(true);
								break;
							case 'u':
								$obj->setFlapDetectionOnUnknown(true);
								break;
						}
					}
					continue;
				}
				if($key == 'stalking_options') {
					$options = explode(",",$entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'o':
								$obj->setStalkingOnOk(true);
								break;
							case 'w':
								$obj->setStalkingOnWarning(true);
								break;
							case 'c':
								$obj->setStalkingOnCritical(true);
								break;
							case 'u':
								$obj->setStalkingOnUnknown(true);
								break;
						}
					}
					continue;
				}

				if($key == 'notification_options') {
					$options = explode(",", $entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'd':
								$obj->setNotificationOnWarning(true);
								break;
							case 'u':
								$obj->setNotificationOnUnknown(true);
								break;
							case 'c':
								$obj->setNotificationOnCritical(true);
								break;
							case 'r':
								$obj->setNotificationOnRecovery(true);
								break;
							case 'f':
								$obj->setNotificationOnFlapping(true);
								break;
							case 's':
								$obj->setNotificationOnScheduledDowntime(true);
								break;
						}
					}
					continue;
				}
				
				if($key == 'hostgroup_name' || $key == 'hostgroup') {
					$options = explode(",",$entry['value']);
					foreach($options as $hostGroupValue) {
						$hostgroup = NagiosHostgroupPeer::getByName($hostGroupValue);
						if(!$hostgroup)
							continue;
						// Okay, we got a proper hostgroup
						$srv = new NagiosService();
						$srv->setDescription($obj->getDescription());
						$srv->setHostgroup($hostgroup->getId());
						$obj->save();
						$inh= new NagiosServiceTemplateInheritance();
						$inh->setTargetTemplate( $obj->getId());
						$srv->addNagiosServiceTemplateInheritance($inh);
						$srv->save();
						$hostgroup->clearAllReferences(true);
						$srv->clearAllReferences(true);
						$inh->clearAllReferences(true);
					}
				}
				
				// Okay, let's check that the method DOES exist
				if(empty($this->fieldMethods[$key]))
				{
					// No method defined for field
					continue;
				}
				elseif(!method_exists($obj, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_func(array($obj, $this->fieldMethods[$key]), $value);
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
		// We need to determine if we are a template
        $isTemplate = false;
		if(isset($values['name'])) {
			// We're a template, just do a template process.
            $obj = new NagiosServiceTemplate();
			$ret = $this->__process($obj);
			if(!$ret) {
				return false;
			}
			$obj->save();
			$obj->clearAllReferences(true);
			$job->addNotice("NagiosServiceImporter finished importing service template: " . $obj->getName());
			return true;
        }
        else {
			// Okay, we need to create new Services for each type
			if(isset($values['host_name'])) {
				foreach($values['host_name'] as $hostNameValues) {
					$obj = new NagiosService();
					$host = NagiosHostPeer::getByName($hostNameValues['value']);
					if(!$host)
						return false;
					// Okay, we got a proper host
					$obj->setNagiosHost($host);
					$ret = $this->__process($obj);
					if(!$ret) {
						return false;
					}
					$obj->save();
					$host->clearAllReferences(true);
					$job->addNotice("NagiosServiceImporter finished importing service : " . $obj->getDescription() . " for host: " . $host->getName());
				}
			}
			// Okay, now search for hostgroups
			if(isset($values['hostgroup_name'])) {
				foreach($values['hostgroup_name'] as $hostGroupValues) {
					$obj = new NagiosService();
					$hostgroup = NagiosHostgroupPeer::getByName($hostGroupValues['value']);
					if(!$hostgroup)
						return false;
					// Okay, we got a proper hostgroup
					$obj->setNagiosHostgroup($hostgroup);
					$ret = $this->__process($obj);
					if(!$ret) {
						return false;
					}
					$obj->save();
					$hostgroup->clearAllReferences(true);
				}
			}
			// Okay, now search for hostgroups
			if(isset($values['hostgroup'])) {
				foreach($values['hostgroup'] as $hostGroupValues) {
					$obj = new NagiosService();
					$hostgroup = NagiosHostgroupPeer::getByName($hostGroupValues['value']);
					if(!$hostgroup)
						return false;
					// Okay, we got a proper hostgroup
					$obj->setNagiosHostgroup($hostgroup);
					$ret = $this->__process($obj);
					if(!$ret) {
						return false;
					}
					$obj->save();
					$hostgroup->clearAllReferences(true);
				}
			}

        }
		$obj->clearAllReferences(true);
		return true;
	}
}

?>
