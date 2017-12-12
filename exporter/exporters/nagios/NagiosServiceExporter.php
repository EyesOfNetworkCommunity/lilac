<?php

/*
 lilac-reloaded - A Nagios Configuration Tool
Copyright (C) 2013 Rene Hadler

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
 Filename: NagiosServiceExporter.php
Description:
The class definition and methods for the NagiosServiceExporter class
*/

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

				$ignoreHosts = array();
				//error_log("Children for ". $targetObj->getName());
				foreach($targetObj->getMembers() as $childHost) {
					//error_log($childHost->getName());
					foreach($childHost->getNagiosServices() as $childService) {
						//error_log($childService->getDescription() ." compare to ". $service->getDescription());
						if($childService->getDescription() == $service->getDescription()) {
							//error_log("Overriding service ". $service->getDescription() ." in template ". $targetObj->getName() ." for host ". $childHost->getName());
							array_push($ignoreHosts, "!". $childHost->getName());
						}
					}
				}
				if(count($ignoreHosts) > 0) {
					fputs($fp, "\thost_name\t" . implode(",",$ignoreHosts) . "\n");
				}

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
		//if(isset($values['notification_on_warning']['value'])) {
			if(!$values['notification_on_warning']['value'] && !$values['notification_on_unknown']['value'] && !$values['notification_on_critical']['value'] && !$values['notification_on_recovery']['value'] && !$values['notification_on_flapping']['value']) {
				fputs($fp, "\tnotification_options\tn\n");
			}
			else {
				fputs($fp, "\tnotification_options\t");
				$tempValues = array();
				if(isset($values['notification_on_warning']['value']) && $values['notification_on_warning']['value']) $tempValues[] = "w";
				if(isset($values['notification_on_unknown']['value']) && $values['notification_on_unknown']['value']) $tempValues[] = "u";
				if(isset($values['notification_on_critical']['value']) && $values['notification_on_critical']['value']) $tempValues[] = "c";
				if(isset($values['notification_on_recovery']['value']) && $values['notification_on_recovery']['value']) $tempValues[] = "r";
				if(isset($values['notification_on_flapping']['value']) && $values['notification_on_flapping']['value']) $tempValues[] = "f";
				if(isset($values['notification_on_scheduled_downtime']['value']) && $values['notification_on_scheduled_downtime']['value']) $tempValues[] = "s";
				fputs($fp, implode(",", $tempValues));
				fputs($fp, "\n");
			}
		//}

		// Stalking
		if(isset($values['flap_detection_on_ok']['value']) || isset($values['flap_detection_on_warning']['value']) || isset($values['flap_detection_on_unknown']['value']) || isset($values['flap_detection_on_critical']['value'])) {
			fputs($fp, "\tflap_detection_options\t");
			if(isset($values['flap_detection_on_ok']['value']) && $values['flap_detection_on_ok']['value']) {
				fputs($fp, "o");
				if((isset($values['flap_detection_on_warning']['value']) && $values['flap_detection_on_warning']['value']) ||
                   (isset($values['flap_detection_on_unknown']['value']) && $values['flap_detection_on_unknown']['value']) ||
                   (isset($values['flap_detection_on_critical']['value']) && $values['flap_detection_on_critical']['value']))
					fputs($fp, ",");
			}
			if(isset($values['flap_detection_on_warning']['value']) && $values['flap_detection_on_warning']['value']) {
				fputs($fp, "w");
				if((isset($values['flap_detection_on_unknown']['value']) && $values['flap_detection_on_unknown']['value']) ||
                   (isset($values['flap_detection_on_critical']['value']) && $values['flap_detection_on_critical']['value']))
					fputs($fp, ",");
			}
			if(isset($values['flap_detection_on_unknown']['value']) && $values['flap_detection_on_unknown']['value']) {
				fputs($fp, "u");
				if(isset($values['flap_detection_on_critical']['value']) && $values['flap_detection_on_critical']['value'])
					fputs($fp, ",");
			}
			if(isset($values['flap_detection_on_critical']['value']) && $values['flap_detection_on_critical']['value']) {
				fputs($fp, "c");
			}
			fputs($fp, "\n");
		}


		
		// Stalking
		if(isset($values['stalking_on_ok']['value']) || isset($values['stalking_on_warning']['value']) || isset($values['stalking_on_unknown']['value']) || isset($values['stalking_on_critical']['value'])) {
			fputs($fp, "\tstalking_options\t");
			if(isset($values['stalking_on_ok']['value']) && $values['stalking_on_ok']['value']) {
				fputs($fp, "o");
				if((isset($values['stalking_on_warning']['value']) && $values['stalking_on_warning']['value']) ||
                   (isset($values['stalking_on_unknown']['value']) && $values['stalking_on_unknown']['value']) ||
                   (isset($values['stalking_on_critical']['value']) && $values['stalking_on_critical']['value']))
					fputs($fp, ",");
			}
			if(isset($values['stalking_on_warning']['value']) && $values['stalking_on_warning']['value']) {
				fputs($fp, "w");
				if((isset($values['stalking_on_unknown']['value']) && $values['stalking_on_unknown']['value']) ||
                   (isset($values['stalking_on_critical']['value']) && $values['stalking_on_critical']['value']))
					fputs($fp, ",");
			}
			if(isset($values['stalking_on_unknown']['value']) && $values['stalking_on_unknown']['value']) {
				fputs($fp, "u");
				if(isset($values['stalking_on_critical']['value']) && $values['stalking_on_critical']['value'])
					fputs($fp, ",");
			}
			if(isset($values['stalking_on_critical']['value']) && $values['stalking_on_critical']['value']) {
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
		fputs($fp, "\tcontacts\t");
		if(count($contactList)) {
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
		}
		fputs($fp, "\n");

	

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
		if(count($groupList) || count($contactList)) {
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
		
		// Custom Object Variables
		$cov_list = $service->getInheritedCustomObjectVariables();
		$servicecov_list = $service->getNagiosServiceCustomObjectVariables();
		foreach($servicecov_list as $cov)
			$cov_list[] = $cov;
			
		if(count($cov_list) > 0)
		{
			foreach($cov_list as $customObjectVariable)
			{
				$name = strtoupper($customObjectVariable->getVarName());
				if($name[0] != "_")
					$name = "_" . $name;
					
				fputs($fp, sprintf("\t%s\t%s\n", $name, $customObjectVariable->getVarValue()));
			}
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
		
		//$hosts = NagiosHostPeer::doSelect(new Criteria());
		$hosts = NagiosHostQuery::create()->find();
		$job->addNotice("Total hosts found: " . count($hosts));
		foreach($hosts as $host) {
			// Got hosts
			// Get our inherited services first
			$job->addNotice("Processing services for host: " . $host->getName());
			$inheritedServices = $host->getInheritedServices();
			$job->addNotice("Total inherited services found for host " . $host->getName() . ": " . count($inheritedServices));
			foreach($inheritedServices as $service) {
				// If service belongs to a hostgroup dont add it again to a host
				$hostgroupID = $service->getHostgroup();
				if(!empty($hostgroupID))
					continue;
				
				$job->addNotice("Processing service " . $service->getDescription());
				$this->_exportService($service, "host", $host);
			}
			$services = $host->getNagiosServices();
			$job->addNotice("Total services found for host " . $host->getName() . ": " . count($services));
			foreach($services as $service) {
				// If service belongs to a hostgroup dont add it again to a host
				$hostgroupID = $service->getHostgroup();
				if(!empty($hostgroupID))
					continue;
				
				$job->addNotice("Processing service " . $service->getDescription());
				$this->_exportService($service, "host", $host);
			}
			$job->addNotice("Completed services export for host: " . $host->getName());
		}
		
		$hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());
		$job->addNotice("Total hostgroups found: " . count($hostgroups));
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
