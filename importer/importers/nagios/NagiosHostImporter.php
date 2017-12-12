<?php
require_once('NagiosHostTemplate.php');
require_once('NagiosHost.php');

class NagiosHostImporter extends NagiosImporter {

	private $regexValidators = array('host_name' => '',
			'alias' => '',
			'description' => '',
			'display_name' => '',
			'address' => '',
			'parents' => '',
			'hostgroups' => '',
			'check_command' => '',
			'initial_state' => '',
			'max_check_attempts' => '',
			'check_interval' => '',
			'retry_interval' => '',
			'active_checks_enabled' => '',
			'passive_checks_enabled' => '',
			'check_period' => '',
			'obsess_over_host' => '',
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
			'notes' => '',
			'notes_url' => '',
			'action_url' => '',
			'icon_image' => '',
			'icon_image_alt' => '',
			'vrml_image' => '',
			'statusmap_image' => '',
			'2d_coords' => '',
			'3d_coords' => '',
			'name' => '',
			'use' => '',
			'register' => '');

	private $fieldMethods = array('host_name' => 'setName',
			'name' => 'setName',
			'alias' => 'setAlias',
			'description' => 'setDescription',
			'display_name' => 'setDisplayName',
			'address' => 'setAddress',
			'parents' => 'addParentByName',
			'hostgroups' => 'addHostgroupByName',
			'check_command' => 'setCheckCommandByName',
			'initial_state' => 'setInitialState',
			'max_check_attempts' => 'setMaximumCheckAttempts',
			'check_interval' => 'setCheckInterval',
			'retry_interval' => 'setRetryInterval',
			'active_checks_enabled' => 'setActiveChecksEnabled',
			'passive_checks_enabled' => 'setPassiveChecksEnabled',
			'check_period' => 'setCheckPeriodByName',
			'obsess_over_host' => 'setObsessOverHost',
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
			'notes' => 'setNotes',
			'notes_url' => 'setNotesUrl',
			'action_url' => 'setActionUrl',
			'icon_image' => 'setIconImage',
			'icon_image_alt' => 'setIconImageAlt',
			'vrml_image' => 'setVrmlImage',
			'statusmap_image' => 'setStatusmapImage',
			'2d_coords' => 'set2dCoords',
			'3d_coords' => 'set3dCoords');

	public function init() {
		$config = $this->getEngine()->getConfig();
		$job = $this->getEngine()->getJob();
		$segment = $this->getSegment();

		$values = $segment->getValues();
		if(isset($values['name'])) {
			$job->addNotice("This Importer is for a Host Template: " . $values['name'][0]['value']);
		}
		else if(isset($values['host_name'])) {
			$job->addNotice("This Importer is for a Host: " . $values['host_name'][0]['value']);
		}
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if($key[0] == "_")
					continue;
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in host object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosHostImporter finished initializing.");
		return true;
	}

	public function valid() {
		$config = $this->getEngine()->getConfig();
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();

		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Host uses a template: " . $values['use'][0]['value']);
			$template = NagiosHostTemplatePeer::getByName($values['use'][0]['value']);
			if(empty($template)) {
				if(!isset($values['name'][0]['value'])) {
					$job->addNotice("That template is not found yet. Setting this host (" . $values['host_name'][0]['value'] . ") as queued.");
				}
				else {
					$job->addNotice("That template is not found yet. Setting this host template (" . $values['name'][0]['value'] . ") as queued.");
				}
				return false;
			}
		}

		// Check time period existence
		if(isset($values['check_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['check_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['check_period'][0]['value'] . " was not found for host " . $values["name"][0]["value"] . ".");
					
				if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
					return false;
			}
			else {
				$timePeriod->clearAllReferences(true);
			}
		}
		if(isset($values['notification_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['notification_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['notification_period'][0]['value'] . " was not found for host " . $values["name"][0]["value"] . ".");
					
				if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
					return false;
			}
			else {
				$timePeriod->clearAllReferences(true);
			}
		}
		// Check command existence
		if(isset($values['check_command'])) {
			$params = explode("!", $values['check_command'][0]['value']);
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $params[0]);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(empty($command)) {
				$job->addNotice("The command specified by " . $params[0] . " was not found for host " . $values["name"][0]["value"] . ".");
					
				if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
					return false;
			}
			else {
				$command->clearAllReferences(true);
			}
		}
		if(isset($values['event_handler'])) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $values['event_handler'][0]['value']);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(empty($command)) {
				$job->addNotice("The command specified by " . $values['event_handler'][0]['value'] . " was not found for host " . $values["name"][0]["value"] . ".");
					
				if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
					return false;
			}
			else {
				$command->clearAllReferences(true);
			}
		}

		// Check contact groups
		if(isset($values['contact_groups'])) {
			foreach($values['contact_groups'] as $contactGroupValues) {
				$c = new Criteria();
				$c->add(NagiosContactGroupPeer::NAME, $contactGroupValues['value']);
				$contactgroup = NagiosContactGroupPeer::doSelectOne($c);
				if(empty($contactgroup)) {
					$job->addNotice("The contact group specified by " . $contactGroupValues['value'] . " was not found for host " . $values["name"][0]["value"] . ".");

					if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
						return false;
				}
				else {
					$contactgroup->clearAllReferences();
				}
			}
		}
		if(isset($values['contacts'])) {
			foreach($values['contacts'] as $contactValues) {
				$c = new Criteria();
				$c->add(NagiosContactPeer::NAME, $contactValues['value']);
				$contactgroup = NagiosContactPeer::doSelectOne($c);
				if(empty($contactgroup)) {
					$job->addNotice("The contact specified by " . $contactValues['value'] . " was not found for host " . $values["name"][0]["value"] . ".");

					if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
						return false;
				}
				else {
					$contactgroup->clearAllReferences();
				}
			}
		}
		// Check host groups
		if(isset($values['hostgroups'])) {
			foreach($values['hostgroups'] as $hostGroupValues) {
				$c = new Criteria();
				$c->add(NagiosHostgroupPeer::NAME, $hostGroupValues['value']);
				$hostgroup = NagiosHostgroupPeer::doSelectOne($c);
				if(empty($hostgroup)) {
					$job->addNotice("The host group specified by " . $hostGroupValues['value'] . " was not found for host " . $values["name"][0]["value"] . ".");

					if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
						return false;
				}
				else {
					$hostgroup->clearAllReferences();
				}
			}
		}
		// Check parents
		if(isset($values['parents'])) {
			foreach($values['parents'] as $parentValues) {
				$c = new Criteria();
				$c->add(NagiosHostPeer::NAME, $parentValues['value']);
				$host = NagiosHostPeer::doSelectOne($c);
				if(empty($host)) {
					$job->addNotice("The host specified by " . $parentValues['value'] . " was not found for host " . $values["name"][0]["value"] . ".");

					if((!$config->getVar('skip_missing_template_values') && $values["register"][0]["value"] == 0) || $values["register"][0]["value"] == 1)
						return false;
				}
				else {
					$host->clearAllReferences();
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
			$obj = new NagiosHostTemplate();
			$isTemplate = true;
		}
		else {
			$obj = new NagiosHost();
			$isTemplate = false;
		}
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
				if($key == 'register')
					continue;
				
				// Custom object variables
				if($key[0] == "_")
				{
					$cov = new NagiosHostCustomObjectVar();
					$cov->setVarName(substr($key, 1));
					$cov->setVarValue($value);
				
					$obj->addNagiosHostCustomObjectVar($cov);
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
								$obj->setFlapDetectionOnUp(true);
								break;
							case 'd':
								$obj->setFlapDetectionOnDown(true);
								break;
							case 'u':
								$obj->setFlapDetectionOnUnreachable(true);
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
								$obj->setStalkingOnUp(true);
								break;
							case 'd':
								$obj->setStalkingOnDown(true);
								break;
							case 'u':
								$obj->setStalkingOnUnreachable(true);
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
								$obj->setNotificationOnDown(true);
								break;
							case 'u':
								$obj->setNotificationOnUnreachable(true);
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
				
				if($isTemplate && $key == "alias")
					$key = "description";
				
				// Okay, let's check that the method DOES exist
				if(!method_exists($obj, $this->fieldMethods[$key])) {
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
		$obj->save();
		$obj->clearAllReferences(true);
		if($isTemplate) {
			$job->addNotice("NagiosHostImporter finished importing host template: " . $obj->getName());
		}
		else {
			$job->addNotice("NagiosHostImporter finished importing host: " . $obj->getName());
		}
		return true;
	}
}

?>
