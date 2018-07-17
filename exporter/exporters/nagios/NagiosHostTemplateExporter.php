<?php

/*
 Lilac - A Nagios Configuration Tool
Copyright (C) 2013 Rene Hadler
Copyright (C) 2018 EyesOfNetwork Team

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

class NagiosHostTemplateExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export($objectDiff=false) {
		global $lilac;
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosHostTemplateExporter attempting to export hosttemplate configuration.");

		$fp = $this->getOutputFile();
		
		if(!$objectDiff){
			fputs($fp, "# Written by NagiosHostTemplateExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
			$hosttemplates = NagiosHostTemplatePeer::doSelect(new Criteria());
		} else {
			$hosttemplates[] = $objectDiff;
		}
		
		foreach($hosttemplates as $hosttemplate) {
			
			fputs($fp, "define host {\n");
			$finalArray = array();
			$finalArray['register'] = '0';
			$finalArray['use'] = null;
			
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $hosttemplate->getId());
			$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
			$inheritanceTemplates = NagiosHostTemplateInheritancePeer::doSelect($c);
			if(count($inheritanceTemplates)) {
				// This template has inherited templates, let's bring their values in
				foreach($inheritanceTemplates as $inheritanceItem) {
					$hostTemplateTMP = $inheritanceItem->getNagiosHostTemplateRelatedByTargetTemplate();
					$finalArray['use'] = $hostTemplateTMP->getName().','.$finalArray['use'];
				}
			}
			if($finalArray['use'] !== null) {
				$finalArray['use'] = substr($finalArray['use'], 0, -1);
			} else {
				unset($finalArray['use']);
			}
			
			$values = $hosttemplate->getValues(false,true);		
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
                if($key == 'display_name' && empty($value))
                    continue;

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
						$cmdObj = $hosttemplate->getInheritedCommandWithParameters();
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
					if(isset($values['notification_on_down']['value']) && $values['notification_on_down']['value']) $tempValues[] = "d";
					if(isset($values['notification_on_unreachable']['value']) && $values['notification_on_unreachable']['value']) $tempValues[] = "u";
					if(isset($values['notification_on_recovery']['value']) && $values['notification_on_recovery']['value']) $tempValues[] = "r";
					if(isset($values['notification_on_flapping']['value']) && $values['notification_on_flapping']['value']) $tempValues[] = "f";
					if(isset($values['notification_on_scheduled_downtime']['value']) && $values['notification_on_scheduled_downtime']['value']) $tempValues[] = "s";
					fputs($fp, implode(",", $tempValues));
					fputs($fp, "\n");
				}
			}

			
			// Stalking
			if(isset($values['stalking_on_up']['value']) || isset($values['stalking_on_down']['value']) || isset($values['stalking_on_unreachable']['value'])) {
				fputs($fp, "\tstalking_options\t");
					if(isset($values['stalking_on_up']['value']) && $values['stalking_on_up']['value']) {
						fputs($fp, "o");
						if((isset($values['stalking_on_down']['value']) && $values['stalking_on_down']['value']) ||
                           (isset($values['stalking_on_unreachable']['value']) && $values['stalking_on_unreachable']['value']))
							fputs($fp, ",");
					}
					if(isset($values['stalking_on_down']['value']) && $values['stalking_on_down']['value']) {
						fputs($fp, "d");
						if(isset($values['stalking_on_unreachable']['value']) && $values['stalking_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if(isset($values['stalking_on_unreachable']['value']) && $values['stalking_on_unreachable']['value']) {
						fputs($fp, "u");
					}
				fputs($fp, "\n");
			}
			
			// Flap Detection
			if(isset($values['flap_detection_on_up']['value']) || isset($values['flap_detection_on_down']['value']) || isset($values['flap_detection_on_unreachable']['value'])) {
				fputs($fp, "\tflap_detection_options\t");
					if(isset($values['flap_detection_on_up']['value']) && $values['flap_detection_on_up']['value']) {
						fputs($fp, "o");
						if((isset($values['flap_detection_on_down']['value']) && $values['flap_detection_on_down']['value']) ||
                           (isset($values['flap_detection_on_unreachable']['value']) && $values['flap_detection_on_unreachable']['value']))
							fputs($fp, ",");
					}
					if(isset($values['flap_detection_on_down']['value']) && $values['flap_detection_on_down']['value']) {
						fputs($fp, "d");
						if(isset($values['flap_detection_on_unreachable']['value']) && $values['flap_detection_on_unreachable']['value'])
							fputs($fp, ",");
					}
					if(isset($values['flap_detection_on_unreachable']['value']) && $values['flap_detection_on_unreachable']['value']) {
						fputs($fp, "u");
					}
				fputs($fp, "\n");
			}
			
			// Contact Groups
			$groupList = array();
			$lilac->return_host_template_contactgroups_list($hosttemplate->getId(), $contactgroups_list);
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
						fputs($fp, '+');
						$first = false;
					}
					fputs($fp, $group->getName());
				}
				fputs($fp, "\n");
			}
			
			// Contacts
			$contactList = array();
			$contact_list = $hosttemplate->getNagiosHostContactMembers();
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
						fputs($fp, '+');
						$first = false;
					}
					fputs($fp, $contact->getName());
				}
				fputs($fp, "\n");
			}


			// Host Groups
			$groupList = array();
			$hostgroups_list = null;
			$lilac->get_host_template_membership_list($hosttemplate->getId(),$hostgroups_list);
			if(count($hostgroups_list)) {
				foreach($hostgroups_list as $group) {
					$group = $group->getNagiosHostgroup();
					if(!key_exists($group->getName(), $groupList)) {
						$groupList[$group->getName()] = $group;
					}
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
						fputs($fp, '+');
						$first = false;
					}
					fputs($fp, $group->getName());
				}
				fputs($fp, "\n");
			}
			
			// Custom Object Variables
			$hostcov_list = $hosttemplate->getNagiosHostTemplateCustomObjectVariables();
			$cov_list = array();
			foreach($hostcov_list as $cov)
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
		
		$job->addNotice("NagiosHostTemplateExporter complete.");
		return true;
	}
	
}

?>
