<?php

class FruityHostTemplateImporter extends FruityImporter {

	private $totalImported;

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityHostTemplateImporter beginning to import Host Template Configuration.");
		// Host templates
		$queuedHostTemplates = array();
		foreach($this->dbConn->query("SELECT * FROM nagios_host_templates", PDO::FETCH_ASSOC) as $hostTemplate) {
			if(!$this->importHostTemplate($hostTemplate)) {
				$queuedHostTemplates[] = $hostTemplate;
			}
		}
		while(count($queuedHostTemplates)) {
			for($counter = 0; $counter < count($queuedHostTemplates); $counter++) {
				if($this->importHostTemplate($queuedHostTemplates[$counter])) {
					unset($queuedHostTemplates[$counter]);
				}
			}
		}
		// Host Template Check Command Parameters
		foreach($this->dbConn->query("SELECT * FROM nagios_hosts_check_command_parameters WHERE host_template_id IS NOT NULL", PDO::FETCH_ASSOC) as $commandParameterInfo) {
			$hostTemplateName = $this->getHostTemplateNameById($commandParameterInfo['host_template_id']);
			if(!$hostTemplateName) {
				$job->addNotice("Fruity Host Template Check Command Parameter Importer: Could not find host template with id " . $commandParameterInfo['host_template_id']);
				continue;
			}
			// Get the template
			$hostTemplate = NagiosHostTemplatePeer::getByName($hostTemplateName);
			if(!$hostTemplate) {
				$job->addNotice("Fruity Host Template Check Command Parameter Importer: Could not find host template with name " . $hostTemplateName);
				continue;
			}
			$newParameter = new NagiosHostCheckCommandParameter();
			$newParameter->setTemplate($hostTemplate->getId());
			$newParameter->setParameter($commandParameterInfo['parameter']);
			$newParameter->save();
		}
		// Host Template Contact Groups
		foreach($this->dbConn->query("SELECT * FROM nagios_host_template_contactgroups", PDO::FETCH_ASSOC) as $membershipInfo) {
			$hostTemplateName = $this->getHostTemplateNameById($membershipInfo['host_template_id']);
			if(!$hostTemplateName) {
				$job->addNotice("Fruity Host Template Contact Group Importer: Could not find host template with id " . $membershipInfo['host_template_id']);
				continue;
			}
			// Get the template
			$hostTemplate = NagiosHostTemplatePeer::getByName($hostTemplateName);
			if(!$hostTemplate) {
				$job->addNotice("Fruity Host Template Contact Group Importer: Could not find host template with name " . $hostTemplateName);
				continue;
			}
			// Now get Contact Group Name
			$contactGroupName = $this->getContactGroupNameById($membershipInfo['contactgroup_id']);
			if(!$contactGroupName) {
				$job->addNotice("Fruity Host Template Contact Group Importer: Could not find contact group with id: " . $membershipInfo['contactgroup_id']);
				continue;
			}
			$contactGroup = NagiosContactGroupPeer::getByName($contactGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Host Template Contact Group Importer: Could not find contact group with name: " . $contactGroupName);
				continue;
			}
			$membership = new NagiosHostContactGroup();
			$membership->setHostTemplate($hostTemplate->getId());
			$membership->setNagiosContactGroup($contactGroup);
			$membership->save();
		}
		// Host Template Extended Information
		foreach($this->dbConn->query("SELECT * FROM nagios_host_template_extended_info", PDO::FETCH_ASSOC) as $extInfo) {
			$hostTemplateName = $this->getHostTemplateNameById($extInfo['host_template_id']);
			if(!$hostTemplateName) {
				$job->addNotice("Fruity Host Template Extended Info Importer: Could not find host template with id " . $extInfo['host_template_id']);
				continue;
			}
			// Get the template
			$hostTemplate = NagiosHostTemplatePeer::getByName($hostTemplateName);
			if(!$hostTemplate) {
				$job->addNotice("Fruity Host Template Extended Info Importer: Could not find host template with name " . $hostTemplateName);
				continue;
			}
			// Go through the extended info, and set it on the template.
			$hostTemplate->setNotes($extInfo['notes']);
			$hostTemplate->setNotesUrl($extInfo['notes_url']);
			$hostTemplate->setActionUrl($extInfo['action_url']);
			$hostTemplate->setIconImage($extInfo['icon_image']);
			$hostTemplate->setIconImageAlt($extInfo['icon_image_alt']);
			$hostTemplate->setVrmlImage($extInfo['vrml_image']);
			$hostTemplate->setStatusmapImage($extInfo['statusmap_image']);
			$hostTemplate->setTwoDCoords($extInfo['two_d_coords']);
			$hostTemplate->setThreeDCoords($extInfo['three_d_coords']);
			$hostTemplate->save();
		}
		// Host group template memberships
		foreach($this->dbConn->query("SELECT * FROM nagios_hostgroup_template_membership", PDO::FETCH_ASSOC) as $membershipInfo) {
			$hostTemplateName = $this->getHostTemplateNameById($membershipInfo['host_template_id']);
			if(!$hostTemplateName) {
				$job->addNotice("Fruity Host Template Host Group Importer: Could not find host template with id " . $membershipInfo['host_template_id']);
				continue;
			}
			// Get the template
			$hostTemplate = NagiosHostTemplatePeer::getByName($hostTemplateName);
			if(!$hostTemplate) {
				$job->addNotice("Fruity Host Template Host Group Importer: Could not find host template with name " . $hostTemplateName);
				continue;
			}
			// Now get Contact Group Name
			$hostGroupName = $this->getHostGroupNameById($membershipInfo['hostgroup_id']);
			if(!$hostGroupName) {
				$job->addNotice("Fruity Host Template Host Group Importer: Could not find host group with id: " . $membershipInfo['hostgroup_id']);
				continue;
			}
			$hostGroup = NagiosHostgroupPeer::getByName($hostGroupName);
			if(!$hostGroup) {
				$job->addNotice("Fruity Host Template Host Group Importer: Could not find host group with name: " . $hostGroupName);
				continue;
			}
			$membership = new NagiosHostgroupMembership();
			$membership->setHostTemplate($hostTemplate->getId());
			$membership->setNagiosHostgroup($hostGroup);
			$membership->save();
		}
		$job->addNotice("FruityHostTemplateImporter finished importing Host Template Configuration.");

		$job->addNotice("FruityHostTemplateImporter: Finished importing a total of " . $this->totalImported . " host templates.");
	}

	private function importHostTemplate($templateData) {
		$job = $this->getEngine()->getJob();
		// check to see if we have a template by that name
		if(NagiosHostTemplatePeer::getByName($templateData['template_name'])) {
			$job->addNotice("Fruity Host Template Importer: Template " . $templateData['template_name'] . " already exists.  Aborting it's import.");
			return true;
		}
		$newTemplate = new NagiosHostTemplate();
		$newTemplate->setName($templateData['template_name']);
		// Check to see if we need the template
		if(!empty($templateData['use_template_id'])) {
			$name = $this->getHostTemplateNameById($templateData['use_template_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Host Template Importer:  Could not find template with id: " . $templateData['use_template_id'] . ". Aborting it's import.");
				return false;
			}	
			else {
				// Okay, we got the name, does this template exist?
				$template = NagiosHostTemplatePeer::getByName($name);
				if(!$template) {
					return false;
				}
				else {
					// Create a new inheritance relationship
					$inheritance = new NagiosHostTemplateInheritance();
					$inheritance->setNagiosHostTemplateRelatedByTargetTemplate($template);
					$inheritance->setNagiosHostTemplateRelatedBySourceTemplate($newTemplate);
					try {
						$inheritance->save();
					} catch(Exception $e) {
						$job->addNotice("Fruity Host Template Importer:  Cannot add inheritance from " . $template->getName() . " to " . $newTemplate->getName());
					}
				}
			}
		}
		// Okay, start 'er up!
		foreach($templateData as $key => $val) {
			unset($name);
			if($key == "host_template_id" || $key == "use_template_id" || $key == "template_name")
				continue;
			if($key == "template_description")
				$key = "description";
			if($key == "notification_options_down")
				$key = "notification_on_down";
			if($key == "notification_options_unreachable")
				$key = "notification_on_unreachable";
			if($key == "notification_options_recovery")
				$key = "notification_on_recovery";
			if($key == "notification_options_flapping")
				$key = "notification_on_flapping";
			if($key == "stalking_options_up")
				$key = "stalking_on_up";
			if($key == "stalking_options_down")
				$key = "stalking_on_down";
			if($key == "stalking_options_unreachable")
				$key = "stalking_on_unreachable";
			if($key == "max_check_attempts")
				$key = "maximum_check_attempts";
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
				$name = NagiosHostTemplatePeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Fruity Host Template Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$newTemplate->$method($val);
			}
		}
		$newTemplate->save();
		$this->totalImported++;
		return true;
	}

}


