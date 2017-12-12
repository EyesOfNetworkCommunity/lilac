<?php

class FruityServiceTemplateImporter extends FruityImporter {

	private $totalImported = 0;

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityServiceTemplateImporter beginning to import Service Template Configuration.");
		// Service templates
		$queuedServiceTemplates = array();
		foreach($this->dbConn->query("SELECT * FROM nagios_service_templates", PDO::FETCH_ASSOC) as $serviceTemplate) {
			if(!$this->importServiceTemplate($serviceTemplate)) {
				$queuedServiceTemplates[] = $serviceTemplate;
			}
		}
		if(count($queuedServiceTemplates)) {
			$job->addNotice("FruityServiceTemplateImporter is now processing queued service templates.");
		}
		while(count($queuedServiceTemplates)) {
			for($counter = 0; $counter < count($queuedServiceTemplates); $counter++) {
				if($this->importServiceTemplate($queuedServiceTemplates[$counter])) {
					unset($queuedServiceTemplates[$counter]);
				}
			}
		}
		// Service template check commands
		$job->addNotice("FruityServiceTemplateImporter now processing Service Template Check Commands.");
		foreach($this->dbConn->query("SELECT * FROM nagios_services_check_command_parameters WHERE service_template_id IS NOT NULL ORDER BY checkcommandparameter_id ASC", PDO::FETCH_ASSOC) as $commandParameterInfo) {
			$serviceTemplateName = $this->getServiceTemplateNameById($commandParameterInfo['service_template_id']);
			if(!$serviceTemplateName) {
				$job->addNotice("Fruity Service Template Check Command Parameter Importer: Could not find service template with id " . $commandParameterInfo['service_template_id']);
				continue;
			}
			// Get the template
			$serviceTemplate = NagiosServiceTemplatePeer::getByName($serviceTemplateName);
			if(!$serviceTemplate) {
				$job->addNotice("Fruity Service Template Check Command Parameter Importer: Could not find service template with name " . $serviceTemplateName);
				continue;
			}
			$newParameter = new NagiosServiceCheckCommandParameter();
			$newParameter->setTemplate($serviceTemplate->getId());
			$newParameter->setParameter($commandParameterInfo['parameter']);
			$newParameter->save();
		}
		// Service template extended information
		$job->addNotice("FruityServiceTemplateImporter now processing Service Template Extended Information.");
		foreach($this->dbConn->query("SELECT * FROM nagios_service_template_extended_info", PDO::FETCH_ASSOC) as $extInfo) {
			$serviceTemplateName = $this->getServiceTemplateNameById($extInfo['service_template_id']);
			if(!$serviceTemplateName) {
				$job->addNotice("Fruity Service Template Extended Info Importer: Could not find service template with id " . $extInfo['service_template_id']);
				continue;
			}
			// Get the template
			$serviceTemplate = NagiosServiceTemplatePeer::getByName($serviceTemplateName);
			if(!$serviceTemplate) {
				$job->addNotice("Fruity Service Template Extended Info Importer: Could not find service template with name " . $serviceTemplateName);
				continue;
			}
			// Go through the extended info, and set it on the template.
			$serviceTemplate->setNotes($extInfo['notes']);
			$serviceTemplate->setNotesUrl($extInfo['notes_url']);
			$serviceTemplate->setActionUrl($extInfo['action_url']);
			$serviceTemplate->setIconImage($extInfo['icon_image']);
			$serviceTemplate->setIconImageAlt($extInfo['icon_image_alt']);
			$serviceTemplate->save();
		}
		// Service template contact group memberships
		$job->addNotice("FruityServiceTemplateImporter now processing Service Template Contact Group Memberships.");
		foreach($this->dbConn->query("SELECT * FROM nagios_service_template_contactgroups", PDO::FETCH_ASSOC) as $membershipInfo) {
			$serviceTemplateName = $this->getServiceTemplateNameById($membershipInfo['service_template_id']);
			if(!$serviceTemplateName) {
				$job->addNotice( "Fruity Service Template Contact Group Importer: Could not find service template with id " . $membershipInfo['service_template_id']);
				continue;
			}
			// Get the template
			$serviceTemplate = NagiosServiceTemplatePeer::getByName($serviceTemplateName);
			if(!$serviceTemplate) {
				$job->addNotice("Fruity Service Template Contact Group Importer: Could not find service template with name " . $serviceTemplateName);
				continue;
			}
			// Now get Contact Group Name
			$contactGroupName = $this->getContactGroupNameById($membershipInfo['contactgroup_id']);
			if(!$contactGroupName) {
				$job->addNotice("Fruity Service Template Contact Group Importer: Could not find contact group with id: " . $membershipInfo['contactgroup_id']);
				continue;
			}
			$contactGroup = NagiosContactGroupPeer::getByName($contactGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Service Template Contact Group Importer: Could not find contact group with name: " . $contactGroupName);
				continue;
			}
			$membership = new NagiosServiceContactGroupMember();
			$membership->setTemplate($serviceTemplate->getId());
			$membership->setNagiosContactGroup($contactGroup);
			$membership->save();
		}
		// Service template service group memberships
		$job->addNotice("FruityServiceTemplateImporter now processing Service Template Service Group Memberships.");
		foreach($this->dbConn->query("SELECT * FROM nagios_servicegroup_template_membership", PDO::FETCH_ASSOC) as $membershipInfo) {
			$serviceTemplateName = $this->getServiceTemplateNameById($membershipInfo['service_template_id']);
			if(!$serviceTemplateName) {
				$job->addNotice("Fruity Service Template Service Group Importer: Could not find service template with id " . $membershipInfo['service_template_id']);
				continue;
			}
			// Get the template
			$serviceTemplate = NagiosServiceTemplatePeer::getByName($serviceTemplateName);
			if(!$serviceTemplate) {
				$job->addNotice("Fruity Service Template Service Group Importer: Could not find service template with name " . $serviceTemplateName);
				continue;
			}
			// Now get Contact Group Name
			$serviceGroupName = $this->getServiceGroupNameById($membershipInfo['servicegroup_id']);
			if(!$serviceGroupName) {
				$job->addNotice("Fruity Service Template Service Group Importer: Could not find service group with id: " . $membershipInfo['servicegroup_id']);
				continue;
			}
			$serviceGroup = NagiosServiceGroupPeer::getByName($serviceGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Service Template Service Group Importer: Could not find service group with name: " . $serviceGroupName);
				continue;
			}
			$membership = new NagiosServiceGroupMember();
			$membership->setTemplate($serviceTemplate->getId());
			$membership->setNagiosServiceGroup($serviceGroup);
			$membership->save();
		}
		$job->addNotice("FruityServiceTemplateImporter finished importing Service Group Configuration.");

		$job->addNotice("FruityServiceImported: Finished importing a total of " . $this->totalImported . " Service Templates.");
	}

	private function importServiceTemplate($templateData) {
		$job = $this->getEngine()->getJob();
		// check to see if we have a template by that name
		if(NagiosServiceTemplatePeer::getByName($templateData['template_name'])) {
			$job->addNotice("Fruity Service Template Importer: Template " . $templateData['template_name'] . " already exists.  Aborting it's import.");
			return true;
		}
		$newTemplate = new NagiosServiceTemplate();
		$newTemplate->setName($templateData['template_name']);
		// Check to see if we need the template
		if(!empty($templateData['use_template_id'])) {
			$name = $this->getServiceTemplateNameById($templateData['use_template_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Service Template Importer:  Could not find template with id: " . $templateData['use_template_id'] . ". Aborting it's import.");
				return false;
			}	
			else {
				// Okay, we got the name, does this template exist?
				$template = NagiosServiceTemplatePeer::getByName($name);
				if(!$template) {
					return false;
				}
				else {
					// Create a new inheritance relationship
					$inheritance = new NagiosServiceTemplateInheritance();
					$inheritance->setNagiosServiceTemplateRelatedByTargetTemplate($template);
					$inheritance->setNagiosServiceTemplateRelatedBySourceTemplate($newTemplate);
					try {
						$inheritance->save();
					} catch(Exception $e) {
						$job->addNotice("Fruity Service Template Importer:  Cannot add inheritance from " . $template->getName() . " to " . $newTemplate->getName());
					}
				}
			}
		}
		// Okay, start 'er up!
		foreach($templateData as $key => $val) {
			unset($name);
			if($key == "service_template_id" || $key == "use_template_id" || $key == "template_name")
				continue;
			if($key == "template_description")
				$key = "description";
			if($key == "notification_options_warning")
				$key = "notification_on_warning";
			if($key == "notification_options_unknown")
				$key = "notification_on_unknown";
			if($key == "notification_options_critical")
				$key = "notification_on_critical";
			if($key == "notification_options_recovery")
				$key = "notification_on_recovery";
			if($key == "notification_options_flapping")
				$key = "notification_on_flapping";
			if($key == "stalking_options_warning")
				$key = "stalking_on_warning";
			if($key == "stalking_options_unknown")
				$key = "stalking_on_unknown";
			if($key == "stalking_options_critical")
				$key = "stalking_on_critical";
			if($key == "stalking_options_ok")
				$key = "stalking_on_ok";
			if($key == "max_check_attempts")
				$key = "maximum_check_attempts";
			if($key == "retry_check_interval")
				$key = "retry_interval";
			if($key == "check_command") {
				$name = $this->getCommandNameById($val);
				if($name) {
					$command = NagiosCommandPeer::getByName($name);
					if($command)
						$newTemplate->setCheckCommand($command->getId());
				}
				continue;
			}
			if($key == "check_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newTemplate->setCheckPeriod($timeperiod->getId());
				}
				continue;
			}
			if($key == "event_handler") {
				$name = $this->getCommandNameById($val);
				if($name) {
					$command = NagiosCommandPeer::getByName($name);
					if($command)
						$newTemplate->setEventHandler($command->getId());
				}
				continue;
			}
			if($key == "notification_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newTemplate->setNotificationPeriod($timeperiod->getId());
				}
				continue;
			}
			try {
				$name = NagiosServiceTemplatePeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Fruity Service Template Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$newTemplate->$method($val);
			}
		}
		$job->addNotice("Fruity Service Template Importer: Saved service template: " . $newTemplate->getName());
		$newTemplate->save();
		$this->totalImported++;
		return true;
		
	}


}


