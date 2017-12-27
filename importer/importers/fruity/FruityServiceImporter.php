<?php

class FruityServiceImporter extends FruityImporter {

	private $totalImported = 0;

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityServiceImporter beginning to import Service Configuration.");
		// Services 
		foreach($this->dbConn->query("SELECT * FROM nagios_services", PDO::FETCH_ASSOC) as $service) {
			$this->importService($service);
		}
		// Service template check commands
		$job->addNotice("FruityServiceImporter now processing Service Check Commands.");
		foreach($this->dbConn->query("SELECT * FROM nagios_services_check_command_parameters WHERE service_id IS NOT NULL ORDER BY checkcommandparameter_id ASC", PDO::FETCH_ASSOC) as $commandParameterInfo) {
			$service = $this->getLilacServiceById($commandParameterInfo['service_id']);
			if(!$service) {
				$job->addNotice("Fruity Service Check Command Parameter Importer: Could not find service with id: " . $commandParameterInfo['service_id']);
				continue;
			}
			$newParameter = new NagiosServiceCheckCommandParameter();
			$newParameter->setService($service->getId());
			$newParameter->setParameter($commandParameterInfo['parameter']);
			$newParameter->save();
		}
		// Service extended information
		$job->addNotice("FruityServiceImporter now processing Service Extended Information.");
		foreach($this->dbConn->query("SELECT * FROM nagios_services_extended_info", PDO::FETCH_ASSOC) as $extInfo) {
			$service = $this->getLilacServiceById($extInfo['service_id']);
			if(!$service) {
				$job->addNotice("Fruity Service Check Command Parameter Importer: Could not find service with id " . $extInfo['service_id']);
				continue;
			}
			// Go through the extended info, and set it on the template.
			$service->setNotes($extInfo['notes']);
			$service->setNotesUrl($extInfo['notes_url']);
			$service->setActionUrl($extInfo['action_url']);
			$service->setIconImage($extInfo['icon_image']);
			$service->setIconImageAlt($extInfo['icon_image_alt']);
			$service->save();
		}
		// Service contact group memberships
		$job->addNotice("FruityServiceImporter now processing Service Contact Group Memberships.");
		foreach($this->dbConn->query("SELECT * FROM nagios_service_contactgroups", PDO::FETCH_ASSOC) as $membershipInfo) {
			$service = $this->getLilacServiceById($membershipInfo['service_id']);
			if(!$service) {
				$job->addNotice("Fruity Service Check Command Parameter Importer: Could not find service with id " . $membershipInfo['service_id']);
				continue;
			}
			// Now get Contact Group Name
			$contactGroupName = $this->getContactGroupNameById($membershipInfo['contactgroup_id']);
			if(!$contactGroupName) {
				$job->addNotice("Fruity Service Contact Group Importer: Could not find contact group with id: " . $membershipInfo['contactgroup_id']);
				continue;
			}
			$contactGroup = NagiosContactGroupPeer::getByName($contactGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Service Contact Group Importer: Could not find contact group with name: " . $contactGroupName);
				continue;
			}
			$membership = new NagiosServiceContactGroupMember();
			$membership->setService($service->getId());
			$membership->setNagiosContactGroup($contactGroup);
			$membership->save();
		}
		// Service service group memberships
		$job->addNotice("FruityServiceImporter now processing Service Service Group Memberships.");
		foreach($this->dbConn->query("SELECT * FROM nagios_servicegroup_membership", PDO::FETCH_ASSOC) as $membershipInfo) {
			$service = $this->getLilacServiceById($membershipInfo['service_id']);
			if(!$service) {
				$job->addNotice("Fruity Service Check Command Parameter Importer: Could not find service with id " . $membershipInfo['service_id']);
				continue;
			}
			// Now get Contact Group Name
			$serviceGroupName = $this->getServiceGroupNameById($membershipInfo['servicegroup_id']);
			if(!$serviceGroupName) {
				$job->addNotice("Fruity Service Service Group Importer: Could not find service group with id: " . $membershipInfo['servicegroup_id']);
				continue;
			}
			$serviceGroup = NagiosServiceGroupPeer::getByName($serviceGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Service Service Group Importer: Could not find service group with name: " . $serviceGroupName);
				continue;
			}
			$membership = new NagiosServiceGroupMember();
			$membership->setService($service->getId());
			$membership->setNagiosServiceGroup($serviceGroup);
			$membership->save();
		}
		$job->addNotice("FruityServiceImporter finished importing Service Group Configuration.");

		$job->addNotice("FruityServiceImporter imported a total of " . $this->totalImported . " services.");
	}

	private function importService($serviceData) {
		$job = $this->getEngine()->getJob();
		$newService = new NagiosService();
		// Check to see if host or host template exists first
		if(!empty($serviceData['host_id'])) {
			$hostName = $this->getHostNameById($serviceData['host_id']);
			if(!$hostName) {
				$job->addNotice("Fruity Service Importer: Failed to find host with id: " . $serviceData['host_id']);
				return true;
			}
			$host = NagiosHostPeer::getByName($hostName);
			if(!$host) {
				$job->addNotice("Fruity Service Importer: Failed to find host with name: " . $hostName);
				return true;
			}
			$newService->setHost($host->getId());

		}
		else if(!empty($serviceData['host_template_id'])) {
			$hostTemplateName = $this->getHostTemplateNameById($serviceData['host_template_id']);
			if(!$hostTemplateName) {
				$job->addNotice("Fruity Service Importer: Failed to find host template with id: " . $serviceData['host_template_id']);
				return true;
			}
			$hostTemplate = NagiosHostTemplatePeer::getByName($hostTemplateName);
			if(!$hostTemplate) {
				$job->addNotice("Fruity Service Importer: Failed to find host template with name: " . $hostTemplateName);
				return true;
			}
			$newService->setHostTemplate($hostTemplate->getId());
		}
		else if(!empty($serviceData['hostgroup_id'])) {
			$hostgroupName = $this->getHostGroupNameById($serviceData['hostgroup_id']);
			if(!$hostgroupName) {
				$job->addNotice("Fruity Service Importer: Failed to find host group with id: " . $serviceData['host_template_id']);
				return true;
			}
			$hostgroup = NagiosHostGroupPeer::getByName($hostgroupName);
			if(!$hostgroup) {
				$job->addNotice("Fruity Service Importer: Failed to find host group with name: " . $hostGroupName);
				return true;
			}
			$newService->setHostgroup($hostgroup->getId());
		}
		// Check to see if we need the template
		if(!empty($serviceData['use_template_id'])) {
			$name = $this->getServiceTemplateNameById($serviceData['use_template_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Service Importer:  Could not find template with id: " . $serviceData['use_template_id'] . ". Aborting it's import.");
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
					$inheritance->setNagiosService($newService);
					try {
						$inheritance->save();
					} catch(Exception $e) {
						$job->addNotice("Fruity Service Template Importer:  Cannot add inheritance from " . $template->getName() . " to " . $newService->getName());
					}
				}
			}
		}
		// Okay, start 'er up!
		foreach($serviceData as $key => $val) {
			unset($name);
			if($key == "service_template_id" || $key == "use_template_id" || $key == "template_name" || $key == "host_id" || $key == "hostgroup_id" || $key == "host_template_id" || $key == "service_id")
				continue;
			if($key == "service_description")
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
						$newService->setCheckCommand($command->getId());
				}
				continue;
			}
			if($key == "check_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newService->setCheckPeriod($timeperiod->getId());
				}
				continue;
			}
			if($key == "event_handler") {
				$name = $this->getCommandNameById($val);
				if($name) {
					$command = NagiosCommandPeer::getByName($name);
					if($command)
						$newService->setEventHandler($command->getId());
				}
				continue;
			}
			if($key == "notification_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newService->setNotificationPeriod($timeperiod->getId());
				}
				continue;
			}
			try {
				$name = NagiosServiceTemplatePeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Fruity Service Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$newService->$method($val);
			}
		}
		$job->addNotice("Fruity Service Importer: Saved service: " . $newService->getDescription() . " on " . $newService->getOwnerDescription());
		$newService->save();
		$this->totalImported++;
		return true;
	}

}


