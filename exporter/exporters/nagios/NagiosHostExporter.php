<?php

class NagiosHostExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export() {
		global $lilac;
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosHostExporter attempting to export host configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosHostExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$hosts = NagiosHostPeer::doSelect(new Criteria());
		
		foreach($hosts as $host) {
			
			fputs($fp, "define host {\n");
			$finalArray = array();
			
			$values = $host->getValues();		
			foreach($values as $key => $valArray) {
				$value = $valArray['value'];
				
				if($key == 'id' || 
					$key == 'notification_on_down' ||
					$key == 'notification_on_unreachable' ||
					$key == 'notification_on_recovery' ||
					$key == 'notification_on_flapping' ||
					$key == 'notification_on_scheduled_downtime' ||
					$key == 'stalking_on_up' ||
					$key == 'stalking_on_down' ||
					$key == 'stalking_on_unreachable' ||
					$key == 'flap_detection_on_up' ||
					$key == 'flap_detection_on_down' ||
					$key == 'flap_detection_on_unreachable' ||
					$key == '' || 
					$key == "autodiscovery_address_filter" || 
					$key == "autodiscovery_hostname_filter" || 
					$key == "autodiscovery_os_family_filter" || 
					$key == "autodiscovery_os_generation_filter" || 
					$key == "autodiscovery_os_vendor_filter" || 
					$key == "description") {
					continue;
				}
				if($key == 'name') {
					$key = 'host_name';
				}
				if($key == 'maximum_check_attempts') {
					$key = 'max_check_attempts';
				}

				if($key == 'two_d_coords')
					$key = '2d_coords';
				if($key == 'three_d_coords')
					$key = '3d_coords';
				
				if($value === null) {
					continue;
				}
				if($value === false) 
					$value = '0';

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
						$cmdObj = $host->getInheritedCommandWithParameters();
						foreach($cmdObj['parameters'] as $parameterArray) {
								$value .= "!" . $parameterArray['parameter']->getParameter();
						}						
						
					}
				}
				$finalArray[$key] = $value;
			}
			
			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			
			// Notifications
			if(isset($values['notification_on_down']['value'])) {
				if(!$values['notification_on_down']['value'] && !$values['notification_on_unreachable']['value'] && !$values['notification_on_recovery']['value'] && !$values['notification_on_flapping']['value']) {
					fputs($fp, "\tnotification_options\tn\n");	
				}
				else {
					fputs($fp, "\tnotification_options\t");
					$tempValues = array();
					if($values['notification_on_down']['value']) $tempValues[] = "d";
					if($values['notification_on_unreachable']['value']) $tempValues[] = "u";
					if($values['notification_on_recovery']['value']) $tempValues[] = "r";
					if($values['notification_on_flapping']['value']) $tempValues[] = "f";
					if($values['notification_on_scheduled_downtime']['value']) $tempValues[] = "s";
					fputs($fp, implode(",", $tempValues));
					fputs($fp, "\n");
				}
			}

			
			// Stalking
			if($values['stalking_on_up']['value'] || $values['stalking_on_down']['value'] || $values['stalking_on_unreachable']['value']) {
				fputs($fp, "\tstalking_options\t");
					if($values['stalking_on_up']['value']) {
						fputs($fp, "o");
						if($values['stalking_on_down']['value'] || $values['stalking_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if($values['stalking_on_down']['value']) {
						fputs($fp, "d");
						if($values['stalking_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if($values['stalking_on_unreachable']['value']) {
						fputs($fp, "u");
					}
				fputs($fp, "\n");
			}
			
			// Flap Detection
			if($values['flap_detection_on_up']['value'] || $values['flap_detection_on_down']['value'] || $values['flap_detection_on_unreachable']['value']) {
				fputs($fp, "\tflap_detection_options\t");
					if($values['flap_detection_on_up']['value']) {
						fputs($fp, "o");
						if($values['flap_detection_on_down']['value'] || $values['flap_detection_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if($values['flap_detection_on_down']['value']) {
						fputs($fp, "d");
						if($values['flap_detection_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if($values['flap_detection_on_unreachable']['value']) {
						fputs($fp, "u");
					}
				fputs($fp, "\n");
			}


			// Parents
			$c = new Criteria();
			$c->add(NagiosHostParentPeer::CHILD_HOST, $host->getId());
			$parents = NagiosHostParentPeer::doSelectJoinNagiosHostRelatedByParentHost($c);

			if(count($parents)) {
				fputs($fp, "\tparents\t");
				$first = true;
				foreach($parents as $parent) {
					if(!$first) {
						fputs($fp, ",");
					}
					else {
						$first = false;
					}
					fputs($fp, $parent->getNagiosHostRelatedByParentHost()->getName());
				}
				fputs($fp, "\n");
			}

			// Contact Groups
			$groupList = array();
			$inherited_list = $host->getInheritedContactGroups();
			$lilac->return_host_contactgroups_list($host->getId(), $contactgroups_list);		
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
			
			// Contacts
			$contactList = array();
			$inherited_list = $host->getInheritedContacts();
			$contact_list = $host->getNagiosHostContactMembers();
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


			// Host Groups
			$groupList = array();
			$inherited_list = $host->getInheritedHostGroups();
			$hostgroups_list = $host->getNagiosHostgroupMemberships();
			foreach($inherited_list as $group) {
				if(!key_exists($group->getName(), $groupList)) {
					$groupList[$group->getName()] = $group;
				}
			}
			foreach($hostgroups_list as $group) {
				$group = $group->getNagiosHostgroup();
				if(!key_exists($group->getName(), $groupList)) {
					$groupList[$group->getName()] = $group;
				}
			}
			if(count($groupList)) {
				fputs($fp, "\thostgroups\t");
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
		
		$job->addNotice("NagiosHostExporter complete.");
		return true;
	}
	
}

?>
