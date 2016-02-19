<?php

class FruityContactImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityContactImporter beginning to import Contact Configuration.");
		// Contacts
		foreach($this->dbConn->query("SELECT * FROM nagios_contacts", PDO::FETCH_ASSOC) as $contact) {
			// Check for existing
			if(NagiosContactPeer::getByName($contact['contact_name'])) {
				$job->addNotice("Fruity Contact Importer: Contact " . $contact['contact_name'] . " already exists.  Aborting it's import.");
				continue;
			}
			$newContact = new NagiosContact();
			foreach($contact as $key => $val) {
				unset($name);
				if($key == "contact_id")
					continue;
				if($key == "contact_name")
					$key = "name";
				if($key == "host_notification_options_down")
					$key = "host_notification_on_down";
				if($key == "host_notification_options_unreachable")
					$key = "host_notification_on_unreachable";
				if($key == "host_notification_options_recovery")
					$key = "host_notification_on_recovery";
				if($key == "host_notification_options_flapping")
					$key = "host_notification_on_flapping";
				if($key == "service_notification_options_warning")
					$key = "service_notification_on_warning";
				if($key == "service_notification_options_unknown")
					$key = "service_notification_on_unknown";
				if($key == "service_notification_options_critical")
					$key = "service_notification_on_critical";
				if($key == "service_notification_options_recovery")
					$key = "service_notification_on_recovery";
				if($key == "service_notification_options_flapping")
					$key = "service_notification_on_flapping";
				if($key == "host_notification_period") {
					$name = $this->getTimeperiodNameById($val, $this->dbConn);
					if($name) {
						$newContact->setHostNotificationPeriodByName($name);
					}
					continue;
				}
				if($key == "service_notification_period") {
					$name = $this->getTimeperiodNameById($val, $this->dbConn);
					if($name) {
						$newContact->setServiceNotificationPeriodByName($name);
					}
					continue;
				}
				try {
					$name = NagiosContactPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
				} catch(Exception $e) {
					$job->addNotice("Fruity Contact Importer: Was unable to store unsupported value: " . $key);
				}
				if(!empty($name)) {
					$method = "set" .$name;
					$newContact->$method($val);
				}
			}
			$newContact->save();
		}
		// Contact Addresses
		foreach($this->dbConn->query("SELECT * FROM nagios_contact_addresses", PDO::FETCH_ASSOC) as $address) {
			// Check for required contact
			$name = $this->getContactNameById($address['contact_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Contact Address Importer: Could not find contact with id: " . $address['contact_id']);
				continue;
			}
			$contact = NagiosContactPeer::getByName($name);
			if(!$contact) {
				$job->addNotice("Fruity Contact Address Importer: Could not find contact with name: " . $name);
				continue;
			}
			$newContactAddress = new NagiosContactAddress();
			$newContactAddress->setNagiosContact($contact);
			$newContactAddress->setAddress($address['address']);
			$newContactAddress->save();
		}
		// Contact Notification Commands
		foreach($this->dbConn->query("SELECT * FROM nagios_contacts_notification_commands", PDO::FETCH_ASSOC) as $notificationCommand) {
			// Check for required contact
			$name = $this->getContactNameById($notificationCommand['contact_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Contact Notification Command Importer: Could not find contact with id: " . $notificationCommand['contact_id']);
				continue;
			}
			$contact = NagiosContactPeer::getByName($name);
			if(!$contact) {
				$job->addNotice("Fruity Contact Notification Command Importer: Could not find contact with name: " . $name);
				continue;
			}
			// Okay, now get the required command
			$name = $this->getCommandNameById($notificationCommand['command_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Crontact Notification Command Importer: Could not find command with id: " . $notificationCommand['contact_id']);
				continue;
			}
			$command = NagiosCommandPeer::getByName($name);
			if(!$contact) {
				$job->addNotice("Fruity Contact Notification Command Importer: Could not find command with name: " . $name);
				continue;
			}
			$newNotificationCommand = new NagiosContactNotificationCommand();
			$newNotificationCommand->setNagiosContact($contact);
			$newNotificationCommand->setNagiosCommand($command);
			$newNotificationCommand->setType($notificationCommand['notification_type']);
			$newNotificationCommand->save();
		}
		// Contact Groups
		foreach($this->dbConn->query("SELECT * FROM nagios_contactgroups", PDO::FETCH_ASSOC) as $contactGroup) {
			if(NagiosContactGroupPeer::getByName($contactGroup['contactgroup_name'])) {
				$job->addNotice("Fruity Contact Group Importer: Group " . $contactGroup['contactgroup_name'] . "already exists.  Aborting it's import.");
				continue;
			}
			$newContactGroup = new NagiosContactGroup();
			$newContactGroup->setName($contactGroup['contactgroup_name']);
			$newContactGroup->setAlias($contactGroup['alias']);
			$newContactGroup->save();
		}
		// Contact Group Members
		foreach($this->dbConn->query("SELECT * FROM nagios_contactgroup_membership", PDO::FETCH_ASSOC) as $membership) {
			// Check for required contact
			$name = $this->getContactNameById($membership['contact_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Contact Group Membership Importer: Could not find contact with id: " . $membership['contact_id']);
				continue;
			}
			$contact = NagiosContactPeer::getByName($name);
			if(!$contact) {
				$job->addNotice("Fruity Contact Group Membership Importer: Could not find contact with name: " . $name);
				continue;
			}
			// Okay, now get the required contact group
			$name = $this->getContactGroupNameById($membership['contactgroup_id'], $this->dbConn);
			if(!$name) {
				$job->addNotice("Fruity Contact Group Membership Importer: Could not find contact group with id: " . $membership['contactgroup_id']);
				continue;
			}
			$contactgroup = NagiosContactGroupPeer::getByName($name);
			if(!$contactgroup) {
				$job->addNotice("Fruity Contact Group Membership Importer: Could not find contact group with name: " . $name);
				continue;
			}
			$newMembership = new NagiosContactGroupMember();
			$newMembership->setNagiosContact($contact);
			$newMembership->setNagiosContactGroup($contactgroup);
			$newMembership->save();
		}
		$job->addNotice("FruityContactImporter finished importing Contact Configuration.");
	}
}


