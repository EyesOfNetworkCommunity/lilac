<?php

class NagiosServiceExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	private function _exportService($service, $type, $targetObj) {
		global $lilac;
		$fp = $this->getOutputFile();
		
		fputs($fp, "define service {\n");
		$finalArray = array();
		
		switch($type) {
			case 'host':
				fputs($fp, "\thost_name\t" . $targetObj->getName() . "\n");
				break;
			
			case 'hostgroup':
				fputs($fp, "\thostgroup_name\t" . $targetObj->getName() . "\n");
				break;
		}
		
		$values = $service->getValues();		

		foreach($values as $key => $valArray) {
			$value = $valArray['value'];

			if($key == 'id' || 
			   $key == 'name' ||
				$key == 'host' || 
				$key == 'host_template' || 
				$key == 'hostgroup' ||
				$key == 'notification_on_warning' ||
				$key == 'notification_on_unknown' ||
				$key == 'notification_on_critical' ||
				$key == 'notification_on_recovery' ||
				$key == 'notification_on_flapping' ||
				$key == 'notification_on_scheduled_downtime' ||
				$key == 'flap_detection_on_ok' ||
				$key == 'flap_detection_on_warning' ||
				$key == 'flap_detection_on_unknown' ||
				$key == 'flap_detection_on_critical' ||
				$key == 'stalking_on_ok' ||
				$key == 'stalking_on_warning' ||
				$key == 'stalking_on_unknown' ||
				$key == 'stalking_on_critical' ||
				$key == '' || 
				$key == "parent_host") {
				continue;
			}
			if($key == 'description') {
				$key = 'service_description';
			}
			if($key == 'maximum_check_attempts') {
				$key = 'max_check_attempts';
			}			

			if($key == "check_period" || $key == "notification_period") {
				$timeperiod = NagiosTimeperiodPeer::retrieveByPK($value);
				if(!$timeperiod) {
					$job->addError("Unable to find timeperiod with id: " . $value . " for " . $key);
					return false;
				}
				$value = $timeperiod->getName();
			}
			if($key == "check_command" || $key == "event_handler") {
				$command = NagiosCommandPeer::retrieveByPK($value);
				if(!$command) {
					$job->addError("Unable to find command with id: " . $value . " for " . $key);
				}
				$value = $command->getName();
				
				if($key == "check_command") {
					$cmdObj = $service->getInheritedCommandWithParameters();
					foreach($cmdObj['parameters'] as $parameterArray) {
							$value .= "!" . $parameterArray['parameter']->getParameter();
					}						
					
				}
			}

			if($value === null) 
				continue;
			if($value === false)
				$value = '0';

			$finalArray[$key] = $value;
		}
		
		foreach($finalArray as $key => $val) {
			fputs($fp, "\t" . $key . "\t" . (string)$val . "\n");
		}
		
		// Notifications
		if(isset($values['notification_on_warning']['value'])) {
			if(!$values['notification_on_warning']['value'] && !$values['notification_on_unknown']['value'] && !$values['notification_on_critical']['value'] && !$values['notification_on_recovery']['value'] && !$values['notification_on_flapping']['value']) {
				fputs($fp, "\tnotification_options\tn\n");
			}
			else {
				fputs($fp, "\tnotification_options\t");
				$tempValues = array();
				if($values['notification_on_warning']['value']) $tempValues[] = "w";
				if($values['notification_on_unknown']['value']) $tempValues[] = "u";
				if($values['notification_on_critical']['value']) $tempValues[] = "c";
				if($values['notification_on_recovery']['value']) $tempValues[] = "r";
				if($values['notification_on_flapping']['value']) $tempValues[] = "f";
				if($values['notification_on_scheduled_downtime']['value']) $tempValues[] = "s";
				fputs($fp, implode(",", $tempValues));
				fputs($fp, "\n");
			}
		}

		// Stalking
		if($values['flap_detection_on_ok']['value'] || $values['flap_detection_on_warning']['value'] || $values['flap_detection_on_unknown']['value'] || $values['flap_detection_on_critical']['value']) {
			fputs($fp, "\tflap_detection_options\t");
			if($values['flap_detection_on_ok']['value']) {
				fputs($fp, "o");
				if($values['flap_detection_on_warning']['value'] || $values['flap_detection_on_unknown']['value'] || $values['flap_detection_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['flap_detection_on_warning']['value']) {
				fputs($fp, "w");
				if($values['flap_detection_on_unknown']['value'] || $values['flap_detection_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['flap_detection_on_unknown']['value']) {
				fputs($fp, "u");
				if($values['flap_detection_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['flap_detection_on_critical']['value']) {
				fputs($fp, "c");
			}
			fputs($fp, "\n");
		}


		
		// Stalking
		if($values['stalking_on_ok']['value'] || $values['stalking_on_warning']['value'] || $values['stalking_on_unknown']['value'] || $values['stalking_on_critical']['value']) {
			fputs($fp, "\tstalking_options\t");
			if($values['stalking_on_ok']['value']) {
				fputs($fp, "o");
				if($values['stalking_on_warning']['value'] || $values['stalking_on_unknown']['value'] || $values['stalking_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['stalking_on_warning']['value']) {
				fputs($fp, "w");
				if($values['stalking_on_unknown']['value'] || $values['stalking_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['stalking_on_unknown']['value']) {
				fputs($fp, "u");
				if($values['stalking_on_critical']['value'])
					fputs($fp, ",");
			}
			if($values['stalking_on_critical']['value']) {
				fputs($fp, "c");
			}
			fputs($fp, "\n");
		}


		// Contacts
		$contactList = array();
		$inherited_list = $service->getInheritedContacts();
		$contact_list = $service->getNagiosServiceContactMembers();
		foreach($inherited_list as $group) {
			if(!key_exists($group->getName(), $contactList)) {
				$contactList[$group->getName()] = $group;
			}
		}
		foreach($contact_list as $contact) {
			$contact = $contact->getNagiosContact();
			if(!key_exists($contact->getName(), $contactList)) {
				$contactList[$contact->getName()] = $contact;
			}
		}
		if(count($contactList)) {
			fputs($fp, "\tcontacts\t");
			$first = true;
			foreach($contactList as $contact) {
				if(!$first) {
					fputs($fp, ",");
				}
				else {
					$first = false;
				}
				fputs($fp, $contact->getName());
			}
			fputs($fp, "\n");
		}

	

		// Contact Groups
		$groupList = array();
		$inherited_list = $service->getInheritedContactGroups();
		$c = new Criteria();
		$c->add(NagiosServiceContactGroupMemberPeer::SERVICE, $service->getId());
		$contactgroups_list = NagiosServiceContactGroupMemberPeer::doSelect($c);
		foreach($inherited_list as $group) {
			if(!key_exists($group->getName(), $groupList)) {
				$groupList[$group->getName()] = $group;
			}
		}
		foreach($contactgroups_list as $group) {
			$group = $group->getNagiosContactgroup();
			if(!key_exists($group->getName(), $groupList)) {
				$groupList[$group->getName()] = $group;
			}
		}
		if(count($groupList)) {
			fputs($fp, "\tcontact_groups\t");
			$first = true;
			foreach($groupList as $group) {
				if(!$first) {
					fputs($fp, ",");
				}
				else {
					$first = false;
				}
				fputs($fp, $group->getName());
			}
			fputs($fp, "\n");
		}
		
		// Service Groups
		$groupList = array();
		$inherited_list = $service->getInheritedServiceGroups();
		$hostgroups_list = $service->getNagiosServiceGroupMembers();
		foreach($inherited_list as $group) {
			if(!key_exists($group->getName(), $groupList)) {
				$groupList[$group->getName()] = $group;
			}
		}
		foreach($hostgroups_list as $group) {
			$group = $group->getNagiosServiceGroup();
			if(!key_exists($group->getName(), $groupList)) {
				$groupList[$group->getName()] = $group;
			}
		}
		if(count($groupList)) {
			fputs($fp, "\tservicegroups\t");
			$first = true;
			foreach($groupList as $group) {
				if(!$first) {
					fputs($fp, ",");
				}
				else {
					$first = false;
				}
				fputs($fp, $group->getName());
			}
			fputs($fp, "\n");
		}
		
		fputs($fp, "}\n");
		fputs($fp, "\n");
	}
	
	public function export() {
		global $lilac;
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosServiceExporter attempting to export service configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosServiceExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$hosts = NagiosHostPeer::doSelect(new Criteria());
		
		foreach($hosts as $host) {
			// Got hosts
			// Get our inherited services first
			$job->addNotice("Processing services for host: " . $host->getName());
			$inheritedServices = $host->getInheritedServices();
			foreach($inheritedServices as $service) {
				$job->addNotice("Processing service " . $service->getDescription());
				$this->_exportService($service, "host", $host);
			}
			$services = $host->getNagiosServices();
			foreach($services as $service) {
				$job->addNotice("Processing service " . $service->getDescription());
				$this->_exportService($service, "host", $host);
			}
			$job->addNotice("Completed services export for host: " . $host->getName());
		}
		
		$hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());
		foreach($hostgroups as $hostgroup) {
			$job->addNotice("Processing services for hostgroup: " . $hostgroup->getName());
			$services = $hostgroup->getNagiosServices();
			foreach($services as $service) {
				$job->addNotice("Processing service " . $service->getDescription());
				$this->_exportService($service, "hostgroup", $hostgroup);
			}
		}

		$job->addNotice("NagiosServiceExporter complete.");
		return true;
	}
	
}

?>
