<?php

class FruityHostImporter extends FruityImporter {

	private $totalImported;

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityHostImporter beginning to import Host Configuration.");
		// Hosts
		foreach($this->dbConn->query("SELECT * FROM nagios_hosts", PDO::FETCH_ASSOC) as $hostData) {
			$this->importHost($hostData);
		}
		// Host parents
		// go through, check if the host actually exists in our system 
		// now, then add the parents, if it's found.
		// First the host table,
		foreach($this->dbConn->query("SELECT * FROM nagios_hosts", PDO::FETCH_ASSOC) as $hostData) {
			if(empty($hostData['parents'])) {
				continue;
			}	
			// Okay, there's actually an parent in here.
			// Get the name.
			$name = $this->getHostNameById($hostData['parents'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Host Importer: Could not find host with id: " . $hostData['parents'] . " to add as parent.");
			}
			else {
				// Okay, $name is equal to the parent host name.  Let's get the name 
				// of the host this parent belongs to
				$childName = $this->getHostNameById($hostData['host_id'], $this->dbConn);
				// Okay, fetch our host which should have this name.
				$host = NagiosHostPeer::getByName($childName);
				if(!$host) {
					$job->addWarning("Fruity Host Importer: Could not find host in Lilac with name: " . $childName);
				}
				else {
					$host->addParentByName($name);
					$host->save();	
				}
			}
		}
		// then the nagios_host_parents table
		foreach($this->dbConn->query("SELECT * FROM nagios_host_parents", PDO::FETCH_ASSOC) as $hostData) {
			// Get the name.
			$name = $this->getHostNameById($hostData['parent_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Host Importer: Could not find host with id: " . $hostData['parents'] . " to add as parent.");
			}
			else {
				// Okay, $name is equal to the parent host name.  Let's get the name 
				// of the host this parent belongs to
				$childName = $this->getHostNameById($hostData['child_id'], $this->dbConn);
				// Okay, fetch our host which should have this name.
				$host = NagiosHostPeer::getByName($childName);
				if(!$host) {
					$job->addWarning("Fruity Host Importer: Could not find host in Lilac with name: " . $childName);
				}
				else {
					$host->addParentByName($name);
					$host->save();	
				}
			}
		}
		// Host Check Command Parameters
		foreach($this->dbConn->query("SELECT * FROM nagios_hosts_check_command_parameters WHERE host_id IS NOT NULL", PDO::FETCH_ASSOC) as $commandParameterInfo) {
			$hostName = $this->getHostNameById($commandParameterInfo['host_id']);
			if(!$hostName) {
				$job->addNotice("Fruity Host Check Command Parameter Importer: Could not find host with id " . $commandParameterInfo['host_id']);
				continue;
			}
			// Get the host
			$host = NagiosHostPeer::getByName($hostName);
			if(!$host) {
				$job->addNotice("Fruity Host Check Command Parameter Importer: Could not find host with name " . $hostTemplateName);
				continue;
			}
			$newParameter = new NagiosHostCheckCommandParameter();
			$newParameter->setHost($host->getId());
			$newParameter->setParameter($commandParameterInfo['parameter']);
			$newParameter->save();
		}
		// Host Contact Groups
		foreach($this->dbConn->query("SELECT * FROM nagios_host_contactgroups", PDO::FETCH_ASSOC) as $membershipInfo) {
			$hostName = $this->getHostNameById($membershipInfo['host_id']);
			if(!$hostName) {
				$job->addNotice("Fruity Host Contact Group Importer: Could not find host with id " . $membershipInfo['host_id']);
				continue;
			}
			// Get the template
			$host = NagiosHostPeer::getByName($hostName);
			if(!$host) {
				$job->addNotice("Fruity Host Contact Group Importer: Could not find host with name " . $hostName);
				continue;
			}
			// Now get Contact Group Name
			$contactGroupName = $this->getContactGroupNameById($membershipInfo['contactgroup_id']);
			if(!$contactGroupName) {
				$job->addNotice("Fruity Host Contact Group Importer: Could not find contact group with id: " . $membershipInfo['contactgroup_id']);
				continue;
			}
			$contactGroup = NagiosContactGroupPeer::getByName($contactGroupName);
			if(!$contactGroup) {
				$job->addNotice("Fruity Host Contact Group Importer: Could not find contact group with name: " . $contactGroupName);
				continue;
			}
			$membership = new NagiosHostContactGroup();
			$membership->setHost($host->getId());
			$membership->setNagiosContactGroup($contactGroup);
			$membership->save();
		}
		// Host Extended Information
		foreach($this->dbConn->query("SELECT * FROM nagios_hosts_extended_info", PDO::FETCH_ASSOC) as $extInfo) {
			$hostName = $this->getHostNameById($extInfo['host_id']);
			if(!$hostName) {
				$job->addNotice("Fruity Host Extended Info Importer: Could not find host with id " . $extInfo['host_id']);
				continue;
			}
			// Get the host
			$host = NagiosHostPeer::getByName($hostName);
			if(!$host) {
				$job->addNotice("Fruity Host Extended Info Importer: Could not find host with name " . $hostTemplateName);
				continue;
			}
			// Go through the extended info, and set it on the template.
			$host->setNotes($extInfo['notes']);
			$host->setNotesUrl($extInfo['notes_url']);
			$host->setActionUrl($extInfo['action_url']);
			$host->setIconImage($extInfo['icon_image']);
			$host->setIconImageAlt($extInfo['icon_image_alt']);
			$host->setVrmlImage($extInfo['vrml_image']);
			$host->setStatusmapImage($extInfo['statusmap_image']);
			$host->setTwoDCoords($extInfo['two_d_coords']);
			$host->setThreeDCoords($extInfo['three_d_coords']);

			$host->save();
		}
		// Host group memberships
		foreach($this->dbConn->query("SELECT * FROM nagios_hostgroup_membership", PDO::FETCH_ASSOC) as $membershipInfo) {
			$hostName = $this->getHostNameById($membershipInfo['host_id']);
			if(!$hostName) {
				$job->addNotice("Fruity Host Host Group Importer: Could not find host with id " . $membershipInfo['host_id']);
				continue;
			}
			// Get the template
			$host = NagiosHostPeer::getByName($hostName);
			if(!$host) {
				$job->addNotice("Fruity Host Host Group Importer: Could not find host with name " . $hostName);
				continue;
			}
			// Now get Host Group Name
			$hostGroupName = $this->getHostGroupNameById($membershipInfo['hostgroup_id']);
			if(!$hostGroupName) {
				$job->addNotice("Fruity Host Host Group Importer: Could not find host group with id: " . $membershipInfo['hostgroup_id']);
				continue;
			}
			$hostGroup = NagiosHostGroupPeer::getByName($hostGroupName);
			if(!$hostGroup) {
				$job->addNotice("Fruity Host Host Group Importer: Could not find host group with name: " . $hostGroupName);
				continue;
			}
			$membership = new NagiosHostgroupMembership();
			$membership->setHost($host->getId());
			$membership->setNagiosHostGroup($hostGroup);
			$membership->save();
		}

		$job->addNotice("FruityHostImported: Finished importing a total of " . $this->totalImported . " hosts.");

	}

	private function importHost($hostData) {
		$job = $this->getEngine()->getJob();
		// check to see if we have a host by that name
		if(NagiosHostPeer::getByName($hostData['host_name'])) {
			$job->addNotice("Fruity Host Importer: Host " . $hostData['host_name'] . " already exists.  Aborting it's import.");
			return true;
		}
		$newHost = new NagiosHost();
		$newHost->setName($hostData['host_name']);
		// Check to see if we need the template
		if(!empty($hostData['use_template_id'])) {
			$name = $this->getHostTemplateNameById($hostData['use_template_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Host Importer:  Could not find template with id: " . $hostData['use_template_id'] . ". Aborting it's import.");
				return false;
			}	
			else {
				// Okay, we got the name, does this template exist?
				$template = NagiosHostTemplatePeer::getByName($name);
				if(!$template) {
					$job->addNotice("Fruity Host Importer: Could not find a template in the system with the name of: " . $name . ". Aborting it's import.");
					return false;
				}
				else {
					// Create a new inheritance relationship
					$inheritance = new NagiosHostTemplateInheritance();
					$inheritance->setNagiosHostTemplateRelatedByTargetTemplate($template);
					$inheritance->setNagiosHost($newHost);
					try {
						$inheritance->save();
					} catch(Exception $e) {
						$job->addNotice("Fruity Host Importer:  Cannot add inheritance from " . $template->getName() . " to " . $newHost->getName());
					}
				}
			}
		}
		// Okay, start 'er up!
		foreach($hostData as $key => $val) {
			unset($name);
			if($key == "host_id" || $key == "use_template_id" || $key == "host_name")
				continue;
			if($key == "parents")
				// we're gonna do parents after this
				continue;
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
			if($key == "retry_check_interval")
				$key = "retry_interval";
			if($key == "check_command") {
				$name = $this->getCommandNameById($val);
				if($name) {
					$command = NagiosCommandPeer::getByName($name);
					if($command)
						$newHost->setCheckCommand($command->getId());
				}
				continue;
			}
			if($key == "check_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newHost->setCheckPeriod($timeperiod->getId());
				}
				continue;
			}
			if($key == "event_handler") {
				$name = $this->getCommandNameById($val);
				if($name) {
					$command = NagiosCommandPeer::getByName($name);
					if($command)
						$newHost->setEventHandler($command->getId());
				}
				continue;
			}
			if($key == "notification_period") {
				$name = $this->getTimeperiodNameById($val);
				if($name) {
					$timeperiod = NagiosTimeperiodPeer::getByName($name);
					if($timeperiod)
						$newHost->setNotificationPeriod($timeperiod->getId());
				}
				continue;
			}
			try {
				$name = NagiosHostPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Fruity Host Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$newHost->$method($val);
			}
		}
		$newHost->save();
		$job->addNotice("FruityHostImporter: Imported new host: " . $newHost->getName());
		$this->totalImported++;
		return true;
	}

}


