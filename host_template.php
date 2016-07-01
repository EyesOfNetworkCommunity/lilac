<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2007 Taylor Dondich

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
 * host_template.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain host templates
 *
*/
include_once('includes/config.inc');

if(!isset($_GET['section']))
	$_GET['section'] = 'general';

if(isset($_GET['id'])) {
	// Load template.
	
	if(!$lilac->get_host_template_info($_GET['id'], $hostTemplate)) {
		header("Location: templates.php");
		die();
	}
	else {
		
		// GET VALUES
		$templateValues = $hostTemplate->getValues();
	}
}

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'autodiscovery') {
			$filter = NagiosHostTemplateAutodiscoveryServicePeer::retrieveByPK($_GET['filter']);
			if(!$filter || $filter->getHostTemplate() != $hostTemplate->getId()) {
				$error = "That filter no longer exists.";
			}
			else {
				$filter->delete();
				$success = "Service filter deleted.";
			}
		}
	
		if($_GET['request'] == "delete" && $_GET['section'] == 'groups') {
			$c = new Criteria();
			$c->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $_GET['id']);
			$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $_GET['hostgroup_id']);
			$membership = NagiosHostgroupMembershipPeer::doSelectOne($c);
			if($membership) {
				$membership->delete();
				$success = "Membership Deleted";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'services') {
			$service = NagiosServicePeer::retrieveByPK($_GET['service_id']);
			if($service) {
				$service->delete();
				$success = "Service Deleted";
			}
			else {
				$error = "That service does not exist.";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			$template = NagiosHostTemplatePeer::retrieveByPK($_GET['id']);
			if($template) {
				$template->delete();
				$success = "Host template deleted.";
				unset($_GET['id']);
				header("Location: templates.php");
				die();
			}
			else {
				$error = "Host template does not exist.";	
			}			
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'inheritance') {
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $hostTemplate->getId());
			$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosHostTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosHostTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
					// Omg, we found it!
					// Delete the inheritance
					$inheritanceList[$counter]->delete();
					// Okay, regrab the list
					$newList = NagiosHostTemplateInheritancePeer::doSelect($c);
					for($counter = 0; $counter < count($newList); $counter++) {
						// Reordering
						$newList[$counter]->setOrder($counter);
						$newList[$counter]->save();
					}
					$success = "Removed template from inheritance list.";
				}
			}
			if(empty($error)) {
				$error = "Could not find that template specified.";
			}	
		}
		else if($_GET['request'] == "movedown" && $_GET['section'] == "inheritance") {
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $hostTemplate->getId());
			$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosHostTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosHostTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
					// Omg, we found it!
					if($counter == (count($inheritanceList) -1)) {
						// We're at the end of the array, we couldn't possibly move down more!
						$error = "Cannot move that template down any further.";
						break;
					}
					else {
						$tempTemplate = $inheritanceList[$counter + 1];
						$inheritanceList[$counter]->setOrder($inheritanceList[$counter]->getOrder() + 1);
						$tempTemplate->setOrder($tempTemplate->getOrder() - 1);
						$inheritanceList[$counter]->save();
						$tempTemplate->save();
						$success = "Template moved down in inheritance chain.";
						$found = true;
						break;
					}
				}
			}
			if(empty($error)) {
				$error = "Could not find that template specified.";
			}
		}
		else if($_GET['request'] == "moveup" && $_GET['section'] == "inheritance") {
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $hostTemplate->getId());
			$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosHostTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosHostTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
					// Omg, we found it!
					if($counter == 0) {
						// We're at the end of the array, we couldn't possibly move down more!
						$error = "Cannot move that template up any further.";
						break;
					}
					else {
						$tempTemplate = $inheritanceList[$counter - 1];
						$inheritanceList[$counter]->setOrder($inheritanceList[$counter]->getOrder() - 1);
						$tempTemplate->setOrder($tempTemplate->getOrder() + 1);
						$inheritanceList[$counter]->save();
						$tempTemplate->save();
						$success = "Template moved up in inheritance chain.";
						$found = true;
						break;
					}
				}
			}
			if(empty($error)) {
				$error = "Could not find that template specified.";
			}
		}
		
		if($_GET['request'] == "delete" && $_GET['section'] == 'contacts') {
			if(!empty($_GET['contactgroup_id'])) {	
				$c = new Criteria();
				$c->add(NagiosHostContactgroupPeer::HOST_TEMPLATE, $_GET['id']);
				$c->add(NagiosHostcontactgroupPeer::CONTACTGROUP, $_GET['contactgroup_id']);
				$membership = NagiosHostContactgroupPeer::doSelectOne($c);
				if($membership) {
					$membership->delete();
					$success = "Contact Group Deleted";
				}			
			}
			else if(!empty($_GET['contact_id'])) {
				$c = new Criteria();
				$c->add(NagiosHostContactMemberPeer::TEMPLATE, $_GET['id']);
				$c->add(NagiosHostcontactMemberPeer::CONTACT, $_GET['contact_id']);
				$membership = NagiosHostContactMemberPeer::doSelectOne($c);
				if($membership) {
					$membership->delete();
					$success = "Contact deleted.";
				}
			}
		}
		if($_GET['request'] == "delete" && $_GET['section'] == 'dependencies') {
			$dependency = NagiosDependencyPeer::retrieveByPK($_GET['dependency_id']);
			if($dependency) {
				$dependency->delete();
				$success = "Dependency deleted.";
			}
		}
		if($_GET['request'] == "delete" && $_GET['section'] == 'escalations') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$lilac->delete_escalation($_GET['escalation_id']);
			$success = "Escalation Deleted";
			unset($tempData);
		}	
		if($_GET['request'] == "delete" && $_GET['section'] == 'checkcommand') {
			
			$commandParameter = NagiosHostCheckCommandParameterPeer::retrieveByPK($_GET['checkcommandparameter_id']);
			if($commandParameter) {
				$commandParameter->delete();
			}
			$success = "Check Command Parameter Deleted.";
		}
		if($_GET['request'] == "update" && $_GET['section'] == 'checkcommand') {
			$commandParameter = NagiosHostCheckCommandParameterPeer::retrieveByPK($_GET['checkcommandparameter_id']);
			$commandParameter->setParameter($_POST['param']);
			$commandParameter->save();
			$success = "Check Command Parameter Updated.";
		}
}

if(isset($_POST['request'])) {
	$modifiedData = array();
	
	if(isset($_POST['host_manage']) && count($_POST['host_manage'])) {
		foreach( $_POST['host_manage'] as $key=>$value) {
			if( is_array( $value)) {
				$modifiedData[$key] = $value;
			} else {
				$modifiedData[$key] = (string)trim($value);
			}
		}
	}
	
	if($_POST['request'] == 'host_template_modify_general') {
		if($modifiedData['template_name'] != $hostTemplate->getName() && $lilac->hosttemplate_exists($modifiedData['template_name'])) {
			$error = "A host template with that name already exists!";
		}
		else {
			// Field Error Checking
			if(count($modifiedData)) {
				foreach($modifiedData as $tempVariable)
					$tempVariable = trim($tempVariable);
			}
			if($modifiedData['template_name'] == '' || $modifiedData['template_description'] == '') {
				$addError = 1;
				$error = "Incorrect values for fields.  Please verify.";
			}
			// All is well for error checking, modify the template.
			else {
				$hostTemplate->setName($modifiedData['template_name']);
				$hostTemplate->setDescription($modifiedData['template_description']);
				$hostTemplate->save();
				$success = "Template modified.";
				unset($_GET['edit']);
			}
		}
	}
	else if($_POST['request'] == "add_template_command") {
		$template = NagiosHostTemplatePeer::retrieveByPK($_POST['hostmanage']['template_add']['template_id']);
		if(!$template) {
			$error = "That host template is not found.";
		}
		else {
			// We need to get the count of templates already inherited
			$templateList = $hostTemplate->getNagiosHostTemplateInheritances();
			foreach($templateList as $tempTemplate) {
				if($tempTemplate->getId() == $_POST['hostmanage']['template_add']['template_id']) {
					$error = "That template already exists in the inheritance chain.";
				}
			}
			if(empty($error)) {
				$newInheritance = new NagiosHostTemplateInheritance();
				$newInheritance->setNagiosHostTemplateRelatedBySourceTemplate($hostTemplate);
				$newInheritance->setNagiosHostTemplateRelatedByTargetTemplate($template);
				$newInheritance->setOrder(count($templateList));
				try {
					$newInheritance->save();
					$success = "Template added to inheritance chain.";				
				}
				catch(Exception $e) {
					$error = $e->getMessage();
				}
				

			}
		}
	}
	else if($_POST['request'] == 'host_template_modify_checks') {
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if((isset($modifiedData['max_check_attempts_include']) && !is_numeric($modifiedData['max_check_attempts'])) || (isset($modifiedData['max_check_attempts_include']) && !($modifiedData['max_check_attempts'] >= 1)) || (isset($modifiedData['freshness_threshold_include']) && !($modifiedData['freshness_threshold'] >= 0))) {
			$addError = 1;
			$error = "Incorrect values for fields.  Please verify.";
		}
		// All is well for error checking, modify the template.
		
		else {
			// Let's modify our host template
			if(isset($modifiedData['initial_state'])) {
				$hostTemplate->setInitialState($modifiedData['initial_state']);
			}
			else {
				$hostTemplate->setInitialState(null);
			}

			if(isset($modifiedData['active_checks_enabled'])) {
				$hostTemplate->setActiveChecksEnabled($modifiedData['active_checks_enabled']);	
			}
			else {
				$hostTemplate->setActiveChecksEnabled(null);
			}
			if(isset($modifiedData['passive_checks_enabled'])) {
				$hostTemplate->setPassiveChecksEnabled($modifiedData['passive_checks_enabled']);	
			}
			else {
				$hostTemplate->setPassiveChecksEnabled(null);	
			}
			if(isset($modifiedData['check_period']) && $modifiedData['check_period'] != 0) {
				$hostTemplate->setCheckPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['check_period'])->getId());
			}
			else {
				$hostTemplate->setCheckPeriod(null);
			}
			if(isset($modifiedData['check_command']) && $modifiedData['check_command'] != 0) {
				$hostTemplate->setCheckCommand(NagiosCommandPeer::retrieveByPK($modifiedData['check_command'])->getId());
			}
			else {
				$hostTemplate->setCheckCommand(null);	
			}

			if(isset($modifiedData['retry_interval'])) {		
				$hostTemplate->setRetryInterval($modifiedData['retry_interval']);
			}
			else {
				$hostTemplate->setRetryInterval(null);	
			}

			if(isset($modifiedData['max_check_attempts'])) {		
				$hostTemplate->setMaximumCheckAttempts($modifiedData['max_check_attempts']);
			}
			else {
				$hostTemplate->setMaximumCheckAttempts(null);	
			}
			if(isset($modifiedData['check_interval'])) {		
				$hostTemplate->setCheckInterval($modifiedData['check_interval']);
			}
			else {
				$hostTemplate->setCheckInterval(null);	
			}
			if(isset($modifiedData['obsess_over_host'])) {		
				$hostTemplate->setObsessOverHost($modifiedData['obsess_over_host']);
			}
			else {
				$hostTemplate->setObsessOverHost(null);	
			}
			if(isset($modifiedData['check_freshness'])) {		
				$hostTemplate->setCheckFreshness($modifiedData['check_freshness']);
			}
			else {
				$hostTemplate->setCheckFreshness(null);	
			}
			if(isset($modifiedData['freshness_threshold'])) {		
				$hostTemplate->setFreshnessThreshold($modifiedData['freshness_threshold']);
			}
			else {
				$hostTemplate->setFreshnessThreshold(null);	
			}
			if(isset($modifiedData['event_handler']) && $modifiedData['event_handler'] !=0) {
				$hostTemplate->setEventHandler(NagiosCommandPeer::retrieveByPK($modifiedData['event_handler'])->getId());
			}
			else {
				$hostTemplate->setEventHandler(null);	
			}
			if(isset($modifiedData['event_handler_enabled'])) {
				$hostTemplate->setEventHandlerEnabled($modifiedData['event_handler_enabled']);
			}
			else {
				$hostTemplate->setEventHandlerEnabled(null);	
			}
			if(isset($modifiedData['failure_prediction_enabled'])) {		
				$hostTemplate->setFailurePredictionEnabled($modifiedData['failure_prediction_enabled']);
			}
			else {
				$hostTemplate->setFailurePredictionEnabled(null);	
			}
			$hostTemplate->save();
			unset($_GET['edit']);
			$success = "Host template modified";
		}
	}
	else if($_POST['request'] == 'host_template_modify_flapping') {
		// Field Error Checking
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if((isset($modifiedData['low_flap_threshold']) && $modifiedData['low_flap_threshold'] < 0) || (isset($modifiedData['high_flap_threshold']) && $modifiedData['high_flap_threshold'] < 0)) {
			$addError = 1;
			$error = "Incorrect values for fields.  Please verify.";
		}
		// All is well for error checking, modify the command.
		else {
			// Modify flapping information
			if(isset($modifiedData['flap_detection_enabled'])) {
				$hostTemplate->setFlapDetectionEnabled($modifiedData['flap_detection_enabled']);
			}
			else {
				$hostTemplate->setFlapDetectionEnabled(null);	
			}
			if(!isset($_POST['host_manage_checkboxes']) || !isset($_POST['host_manage_checkboxes']['flap_detection_options'])) {
				$hostTemplate->setFlapDetectionOnUp(null);
				$hostTemplate->setFlapDetectionOnDown(null);
				$hostTemplate->setFlapDetectionOnUnreachable(null);
			}
			else {
				if(isset($_POST['host_manage']['flap_detection_on_up'])) {
					$hostTemplate->setFlapDetectionOnUp(true);
				}
				else {
					$hostTemplate->setFlapDetectionOnUp(false);
				}
				if(isset($_POST['host_manage']['flap_detection_on_down'])) {
					$hostTemplate->setFlapDetectionOnDown(true);
				}
				else {
					$hostTemplate->setFlapDetectionOnDown(false);
				}
				if(isset($_POST['host_manage']['flap_detection_on_unreachable'])) {
					$hostTemplate->setFlapDetectionOnUnreachable(true);
				}
				else {
					$hostTemplate->setFlapDetectionOnUnreachable(false);
				}
			}
			if(isset($modifiedData['low_flap_threshold'])) {
				$hostTemplate->setLowFlapThreshold($modifiedData['low_flap_threshold']);
			}
			else {
				$hostTemplate->setLowFlapThreshold(null);	
			}
			if(isset($modifiedData['high_flap_threshold'])) {
				$hostTemplate->setHighFlapThreshold($modifiedData['high_flap_threshold']);
			}
			else {
				$hostTemplate->setHighFlapThreshold(null);	
			}
			$hostTemplate->save();
			
			unset($modifiedData);
			$success = "Host template modified.";
			unset($_GET['edit']);
		}
	}
	else if($_POST['request'] == 'host_template_modify_logging') {
		// Field Error Checking
		// None required for this process
		// All is well for error checking, modify the host template.
		if(isset($modifiedData['process_perf_data'])) {
			$hostTemplate->setProcessPerfData($modifiedData['process_perf_data']);
		}
		else {
			$hostTemplate->setProcessPerfData(null);	
		}
		if(isset($modifiedData['retain_status_information'])) {
			$hostTemplate->setRetainStatusInformation($modifiedData['retain_status_information']);
		}
		else {
			$hostTemplate->setRetainStatusInformation(null);	
		}
		if(isset($modifiedData['retain_nonstatus_information'])) {
			$hostTemplate->setRetainNonstatusInformation($modifiedData['retain_nonstatus_information']);
		}
		else {
			$hostTemplate->setRetainNonstatusInformation(null);	
		}
		$hostTemplate->save();
		
		unset($modifiedData);
		$success = "Host template modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'host_template_modify_notifications') {
		// Field Error Checking
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if(isset($_POST['host_manage_enablers']['notification_interval']) && 
			($modifiedData['notification_interval'] == '' || $modifiedData['notification_interval'] < 0 || !is_numeric($modifiedData['notification_interval']))) {
			$error = "Incorrect values for fields.  Please verify.";
		}
		// All is well for error checking, modify the command.
		else {
			if(!isset($_POST['host_manage_checkboxes']) || !isset($_POST['host_manage_checkboxes']['notification_options'])) {
				$hostTemplate->setNotificationOnDown(null);
				$hostTemplate->setNotificationOnUnreachable(null);
				$hostTemplate->setNotificationOnRecovery(null);
				$hostTemplate->setNotificationOnFlapping(null);
                $hostTemplate->setNotificationOnScheduledDowntime(null);
			}
			else {
				if(isset($_POST['host_manage']['notification_on_down'])) {
					$hostTemplate->setNotificationOnDown(true);
				}
				else {
					$hostTemplate->setNotificationOnDown(false);
				}
				if(isset($_POST['host_manage']['notification_on_unreachable'])) {
					$hostTemplate->setNotificationOnUnreachable(true);
				}
				else {
					$hostTemplate->setNotificationOnUnreachable(false);
				}
				if(isset($_POST['host_manage']['notification_on_recovery'])) {
					$hostTemplate->setNotificationOnRecovery(true);
				}
				else {
					$hostTemplate->setNotificationOnRecovery(false);
				}
				if(isset($_POST['host_manage']['notification_on_flapping'])) {
					$hostTemplate->setNotificationOnFlapping(true);
				}
				else {
					$hostTemplate->setNotificationOnFlapping(false);
				}
				if(isset($_POST['host_manage']['notification_on_scheduled_downtime'])) {
					$hostTemplate->setNotificationOnScheduledDowntime(true);
				}
				else {
					$hostTemplate->setNotificationOnScheduledDowntime(false);
				}

			}
			if(!isset($_POST['host_manage_checkboxes']) || !isset($_POST['host_manage_checkboxes']['stalking_options'])) {
				$hostTemplate->setStalkingOnUp(null);
				$hostTemplate->setStalkingOnDown(null);
				$hostTemplate->setStalkingOnUnreachable(null);
			}
			else {
				if(isset($_POST['host_manage']['stalking_on_up'])) {
					$hostTemplate->setStalkingOnUp(true);
				}
				else {
					$hostTemplate->setStalkingOnUp(false);
				}
				if(isset($_POST['host_manage']['stalking_on_down'])) {
					$hostTemplate->setStalkingOnDown(true);
				}
				else {
					$hostTemplate->setStalkingOnDown(false);
				}
				if(isset($_POST['host_manage']['stalking_on_unreachable'])) {
					$hostTemplate->setStalkingOnUnreachable(true);
				}
				else {
					$hostTemplate->setStalkingOnUnreachable(false);
				}
			}
			if(isset($modifiedData['first_notification_delay'])) {
				$hostTemplate->setFirstNotificationDelay($modifiedData['first_notification_delay']);
			}
			else {
				$hostTemplate->setFirstNotificationDelay(null);	
			}

			if(isset($modifiedData['notifications_enabled'])) {
				$hostTemplate->setNotificationsEnabled($modifiedData['notifications_enabled']);
			}
			else {
				$hostTemplate->setNotificationsEnabled(null);	
			}
			if(isset($modifiedData['notification_interval'])) {
				$hostTemplate->setNotificationInterval($modifiedData['notification_interval']);
			}
			else {
				$hostTemplate->setNotificationInterval(null);	
			}
			if(isset($modifiedData['notification_period'])) {
				$hostTemplate->setNotificationPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['notification_period'])->getId());
			}
			else {
				$hostTemplate->setNotificationPeriod(null);
			}			
			$hostTemplate->save();
			
			// Remove session data
			unset($modifiedData);
			$success = "Host template modified.";
			unset($_GET['edit']);
		}
	}	
	else if($_POST['request'] == 'add_member_command') {
		if($lilac->host_template_has_hostgroup($_GET['id'], $modifiedData['group_add']['hostgroup_id'])) {
			$error = "That host group already exists in that list!";
		}
		else {
			$lilac->add_hostgroup_template_member($modifiedData['group_add']['hostgroup_id'], $modifiedData['group_add']['host_id']);
			$success = "Host Template Added To Host Group.";
			unset($modifiedData);
		}
	}
	else if($_POST['request'] == 'command_parameter_add') {
		// All is well for error checking, modify the command.
		$lilac->add_host_template_command_parameter($_GET['id'], $modifiedData);
		// Remove session data
		unset($modifiedData);
		$success = "Command Parameter added.";
	}
	if($_POST['request'] == 'update_host_extended') {
		if(isset($modifiedData['notes'])) {
			$hostTemplate->setNotes($modifiedData['notes']);
		}
		else {
			$hostTemplate->setNotes(null);	
		}
		if(isset($modifiedData['notes_url'])) {
			$hostTemplate->setNotesUrl($modifiedData['notes_url']);
		}
		else {
			$hostTemplate->setNotesUrl(null);	
		}
		if(isset($modifiedData['action_url'])) {
			$hostTemplate->setActionUrl($modifiedData['action_url']);
		}
		else {
			$hostTemplate->setActionUrl(null);	
		}
		if(isset($modifiedData['icon_image'])) {
			$hostTemplate->setIconImage($modifiedData['icon_image']);
		}
		else {
			$hostTemplate->setIconImage(null);	
		}
		if(isset($modifiedData['icon_image_alt'])) {
			$hostTemplate->setIconImageAlt($modifiedData['icon_image_alt']);
		}
		else {
			$hostTemplate->setIconImageAlt(null);	
		}
		if(isset($modifiedData['vrml_image'])) {
			$hostTemplate->setVrmlImage($modifiedData['vrml_image']);
		}
		else {
			$hostTemplate->setVrmlImage(null);	
		}
		if(isset($modifiedData['statusmap_image'])) {
			$hostTemplate->setStatusmapImage($modifiedData['statusmap_image']);
		}
		else {
			$hostTemplate->setStatusmapImage(null);	
		}
		if(isset($modifiedData['two_d_coords'])) {
			$hostTemplate->setTwoDCoords($modifiedData['two_d_coords']);
		}
		else {
			$hostTemplate->setTwoDCoords(null);	
		}
		if(isset($modifiedData['three_d_coords'])) {
			$hostTemplate->setThreeDCoords($modifiedData['three_d_coords']);
		}
		else {
			$hostTemplate->setThreeDCoords(null);	
		}
		$hostTemplate->save();
		$success = "Updated Host Template Extended Information";
		
	}
	else if($_POST['request'] == 'add_contact_command') {
		$c = new Criteria();
		$c->add(NagiosHostContactMemberPeer::TEMPLATE, $_GET['id']);
		$c->add(NagiosHostContactMemberPeer::CONTACT, $_POST['host_manage']['contact_add']['contact_id']);
		$membership = NagiosHostContactMemberPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact already exists in that list!";
		}
		else {
			$tempContact = NagiosContactPeer::retrieveByPk($_POST['host_manage']['contact_add']['contact_id']);
			if($tempContact) {
				$membership = new NagiosHostContactMember();
				$membership->setTemplate($_GET['id']);
				$membership->setNagiosContact($tempContact);
				$membership->save();
				$success = "New Host Template Contact Link added.";				
			}
			else {
				$error = "That contact is not found.";
			}
		}
	}	

	else if($_POST['request'] == 'add_contactgroup_command') {
		$c = new Criteria();
		$c->add(NagiosHostContactgroupPeer::HOST_TEMPLATE, $_GET['id']);
		$c->add(NagiosHostContactgroupPeer::CONTACTGROUP, $_POST['host_manage']['contactgroup_add']['contactgroup_id']);
		$membership = NagiosHostContactgroupPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact group already exists in that list!";
		}
		else {
			$tempGroup = NagiosContactGroupPeer::retrieveByPk($_POST['host_manage']['contactgroup_add']['contactgroup_id']);
			if($tempGroup) {
				$membership = new NagiosHostContactgroup();
				$membership->setHostTemplate($_GET['id']);
				$membership->setNagiosContactGroup($tempGroup);
				$membership->save();
				$success = "New Host Template Contact Group Link added.";				
			}
			else {
				$error = "That contact group is not found.";
			}
		}
	}	
	else if($_POST['request'] == 'host_template_modify_autodiscovery') {
		// Field Error Checking
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		// All is well for error checking, modify the command.
		if(isset($modifiedData['autodiscovery_address_filter'])) {		
			$hostTemplate->setAutodiscoveryAddressFilter($modifiedData['autodiscovery_address_filter']);
		}
		else {
			$hostTemplate->setAutodiscoveryAddressFilter(null);	
		}
		if(isset($modifiedData['autodiscovery_hostname_filter'])) {		
			$hostTemplate->setAutodiscoveryHostnameFilter($modifiedData['autodiscovery_hostname_filter']);
		}
		else {
			$hostTemplate->setAutodiscoveryHostnameFilter(null);	
		}
		if(isset($modifiedData['autodiscovery_os_family_filter'])) {		
			$hostTemplate->setAutodiscoveryOsFamilyFilter($modifiedData['autodiscovery_os_family_filter']);
		}
		else {
			$hostTemplate->setAutodiscoveryOsFamilyFilter(null);	
		}
		if(isset($modifiedData['autodiscovery_os_generation_filter'])) {		
			$hostTemplate->setAutodiscoveryOsGenerationFilter($modifiedData['autodiscovery_os_generation_filter']);
		}
		else {
			$hostTemplate->setAutodiscoveryOsGenerationFilter(null);	
		}
		if(isset($modifiedData['autodiscovery_os_vendor_filter'])) {		
			$hostTemplate->setAutodiscoveryOsVendorFilter($modifiedData['autodiscovery_os_vendor_filter']);
		}
		else {
			$hostTemplate->setAutodiscoveryOsVendorFilter(null);	
		}
		$hostTemplate->save();
		
		unset($modifiedData);
		$success = "Host template modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'host_template_add_autodiscovery_service') {
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if(empty($modifiedData['protocol']) || empty($modifiedData['port']) || !is_numeric($modifiedData['port'])) {
			$error = "Port is required and must be numeric for Auto-Discovery service filter.";
		}
		else {
			// Error checking is good, let's create a service filter
			$serviceFilter = new NagiosHostTemplateAutodiscoveryService();
			$serviceFilter->setExtraInformation($modifiedData['extra_information']);
			$serviceFilter->setNagiosHostTemplate($hostTemplate);
			$serviceFilter->setName($modifiedData['name']);
			$serviceFilter->setPort($modifiedData['port']);
			$serviceFilter->setProduct($modifiedData['product']);
			$serviceFilter->setProtocol($modifiedData['protocol']);
			$serviceFilter->setVersion($modifiedData['version']);
			$serviceFilter->save();
			$success = "Auto-Discovery Service Filter Created";
		}
	}
}

if(isset($_GET['id'])) {
	// Load template.
	
	if(!$lilac->get_host_template_info($_GET['id'], $hostTemplate)) {
		header("Location: templates.php");
		die();
	}
	else {
		
		// GET VALUES
		$templateValues = $hostTemplate->getValues();
		// Check to see if we inherit from another template
		
		

	}
}

// To create a "default" command
$command_list[] = array("command_id" => 0, "command_name" => "None");
$lilac->return_command_list($tempList);
foreach($tempList as $command) {
	$command_list[] = array("command_id" => $command->getId(), "command_name" => $command->getName());
}

$period_list = array();
$lilac->return_period_list($tempList);
foreach($tempList as $period) {
	$period_list[] = array("timeperiod_id" => $period->getId(), "timeperiod_name" => $period->getName());
}
$initialState_list = array();
$initialState_list[] = array('value' => 'o', 'label' => 'Up');
$initialState_list[] = array('value' => 'd', 'label' => 'Down');
$initialState_list[] = array('value' => 'u', 'label' => 'Unreachable');

// Build subnav
$subnav = array(
	'general' => 'General',
	'inheritance' => 'Inheritance',
	'checks' => 'Checks',
	'flapping' => 'Flapping',
	'logging' => 'Logging',
	'notifications' => 'Notifications',
	'services' => 'Services',
	'groups' => 'Group Memberships',
	'contacts' => 'Contacts',
	'extended' => 'Extended Information',
	'dependencies' => 'Dependencies',
	'escalations' => 'Escalations'

	);
	
	
if(isset($templateValues['check_command'])) {
	$subnav['checkcommand'] = 'Check Command Parameters';
}

$subnav['autodiscovery'] = 'Auto-Discovery Filters';

print_header("Host Template Editor");
	if(isset($_GET['id'])) {
	print_window_header("Template Info for " . $hostTemplate->getName(), "100%");	
	print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		$host_template_icon_image = $path_config['image_root'] . "server.gif";
		if($_GET['section'] == 'general') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
					<input type="hidden" name="request" value="host_template_modify_general" />
					<input type="hidden" name="host_template_id" value="<?php echo $hostTemplate->getId();?>">
					<b>Template Name:</b><br />
					<input type="text" size="40" name="host_manage[template_name]" value="<?php echo $hostTemplate->getName();?>">
					<?php echo $lilac->element_desc("template_name", "nagios_host_template_desc"); ?><br />
					<br />		
					<b>Description:</b><br />
					<input type="text" size="80" name="host_manage[template_description]" value="<?php echo $hostTemplate->getDescription();?>">
					<?php echo $lilac->element_desc("template_description", "nagios_host_template_desc"); ?><br />
					<br />
					<br />
					<input class="btn btn-primary" type="submit" value="Update General" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $hostTemplate->getId();?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Template Name:</b> <?php echo $hostTemplate->getName();?><br />
					<b>Description:</b> <?php echo $hostTemplate->getDescription();?><br />
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="host_template.php?id=<?php echo $_GET['id'];?>&request=delete" onClick="javascript:return confirmDelete();">Delete This Host Template</a>
			<?php
		}
		if($_GET['section'] == 'inheritance') {
			$templateInheritances = $hostTemplate->getNagiosHostTemplateInheritances();
			
			$numOfTemplates = count($templateInheritances);
			$exclude_list = array();
			$exclude_list[] = $hostTemplate->getId();
			if($numOfTemplates) {
				foreach($templateInheritances as $template) {
					$exclude_list[] = $template->getId();
				}
			}
		
                	$c=new Criteria();
        	        $c->addAscendingOrderByColumn(NagiosHostTemplatePeer::NAME);
	                $templateList = NagiosHostTemplatePeer::doSelect($c);
			
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="4">Host Templates To Inherit From (Top to Bottom):</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfTemplates; $counter++) {
						if($counter % 2) {
							?>
							<tr class="altRow1">
							<?php
						}
						else {
							?>
							<tr class="altRow2">
							<?php
						}
						?>
						<td height="20" width="80" class="altLeft"><?php if($numOfTemplates > 1 && $counter > 0) { ?><a class="btn btn-primary btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=moveup&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Up</a><?php }?></td>
						<td height="20" width="100" class="altLeft"><?php if($numOfTemplates > 1 && $counter < ($numOfTemplates -1)) { ?><a class="btn btn-primary btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=movedown&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Down</a><?php }?></td>
						<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=delete&template_id=<?php echo $templateInheritances[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $templateInheritances[$counter]->getName();?></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="template_add" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=inheritance">
				<input type="hidden" name="request" value="add_template_command" />
				<b>Add Template To Inherit From:</b> <?php print_object_select("hostmanage[template_add][template_id]", $templateList, "getId", "getName", NULL, true, $exclude_list);?> <input class="btn btn-primary" type="submit" value="Add Template"><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'checks') {
			$cmdObj = $hostTemplate->getInheritedCommandWithParameters();
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing checks information
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">
					<input type="hidden" name="request" value="host_template_modify_checks" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
					<?php 
					double_pane_form_window_start();

						form_select_element_with_enabler($initialState_list, "value", "label", "host_manage", "initial_state", "Initial State", $lilac->element_desc("initial_state", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "active_checks_enabled", "Active Checks", $lilac->element_desc("active_checks_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "passive_checks_enabled", "Passive Checks", $lilac->element_desc("passive_checks_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "host_manage", "check_period", "Check Period", $lilac->element_desc("check_period", "nagios_hosts_desc"), $templateValues, $_GET['id']);					
					form_select_element_with_enabler($command_list, "command_id", "command_name", "host_manage", "check_command", "Check Command", $lilac->element_desc("check_command", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(4, 4, "host_manage", "retry_interval", "Retry Interval", $lilac->element_desc("retry_interval", "nagios_hosts_desc"), $templateValues, $_GET['id']);
				form_text_element_with_enabler(4, 4, "host_manage", "max_check_attempts", "Maximum Check Attempts", $lilac->element_desc("max_check_attempts", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "host_manage", "check_interval", "Check Interval In Time-Units", $lilac->element_desc("check_interval", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "obsess_over_host", "Obsess Over Host", $lilac->element_desc("obsess_over_host", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "check_freshness", "Check Freshness", $lilac->element_desc("check_freshness", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "host_manage", "freshness_threshold", "Freshness Threshold in Seconds", $lilac->element_desc("freshness_threshold", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "event_handler_enabled", "Event Handler Enabled", $lilac->element_desc("event_handler_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($command_list, "command_id", "command_name", "host_manage", "event_handler", "Event Handler", $lilac->element_desc("event_handler", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "failure_prediction_enabled", "Failure Prediction", $lilac->element_desc("failure_prediction_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);					
					double_pane_form_window_finish();
					?>					
					<br />
					<input class="btn btn-primary" type="submit" value="Update Checks" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<h3>Included In Template:</h3>
					<?php
					print_initialstate_display_field("Initial State", $templateValues, "initial_state", $_GET['id']);
				print_enabled_display_field("Active Checks", $templateValues, "active_checks_enabled", $_GET['id']);
					print_enabled_display_field("Passive Checks", $templateValues, "passive_checks_enabled", $_GET['id']);
					print_timeperiod_display_field("Check Period", $templateValues, "check_period", $_GET['id']);
					print_cmd_obj_display_field("Check Command", $cmdObj);
					print_display_field("Retry Interval", $templateValues, "retry_interval", $_GET['id']);
					print_display_field("Maximum Check Attempts", $templateValues, "max_check_attempts", $_GET['id']);
					print_display_field("Check Interval", $templateValues, "check_interval", $_GET['id']);
					print_enabled_display_field("Obsess Over Host", $templateValues, "obsess_over_host", $_GET['id']);
					print_enabled_display_field("Check Freshness", $templateValues, "check_freshness", $_GET['id']);
					print_display_field("Freshness Threshold", $templateValues, "freshness_threshold", $_GET['id']);
					print_command_display_field("Event Handler Command", $templateValues, "event_handler", $_GET['id']);
					print_enabled_display_field("Event Handler", $templateValues, "event_handler_enabled", $_GET['id']);
					print_enabled_display_field("Failure Prediction", $templateValues, "failure_prediction_enabled", $_GET['id']);
					?>
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'flapping') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_up", 'label' => "Up");
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_down", 'label' => "Down");
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_unreachable", 'label' => "Unreachable");
	
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">
					<input type="hidden" name="request" value="host_template_modify_flapping" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "flap_detection_enabled", "Flap Detection", $lilac->element_desc("flap_detection_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_checkbox_group_with_enabler($flap_detection_options_checkbox_group, "host_manage", "flap_detection_options", "Flap Detection Options", $lilac->element_desc("flap_detection_options", "nagios_hosts_desc"), $templateValues, $_GET['id']);

					form_text_element_with_enabler(4, 4, "host_manage", "low_flap_threshold", "Low Flap Threshold", $lilac->element_desc("low_flap_threshold", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(4, 4, "host_manage", "high_flap_threshold", "High Flap Threshold", $lilac->element_desc("high_flap_threshold", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<input class="btn btn-primary" type="submit" value="Update Flapping" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<h3>Included In Template:</h3>
					<?php
					print_enabled_display_field("Flap Detection", $templateValues, "flap_detection_enabled", $_GET['id']);
					if($hostTemplate->getFlapDetectionOnUp() !== null) {
						?>
						<b>Flap Detection On:</b> 
						<?php
						if($hostTemplate->getFlapDetectionOnUp() || $hostTemplate->getFlapDetectionOnDown() || $hostTemplate->getFlapDetectionOnUnreachable()) {
								if($hostTemplate->getFlapDetectionOnUp()) {
									print("Up");
									if($hostTemplate->getFlapDetectionOnDown() || $hostTemplate->getFlapDetectionOnUnreachable())
										print(",");
								}
								if($hostTemplate->getFlapDetectionOnDown()) {
									print("Down");
									if($hostTemplate->getFlapDetectionOnUnreachable())
										print(",");
								}
								if($hostTemplate->getFlapDetectionOnUnreachable()) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<br />");
					}
					elseif(isset($templateValues['flap_detection_on_up'])) {
						?>
						<b>Flap Detection On:</b> 
						<?php
						if($templateValues['flap_detection_on_up']['value'] || $templateValues['flap_detection_on_down']['value'] || $templateValues['flap_detection_on_unreachable']['value']) {
								if($templateValues['flap_detection_on_up']['value']) {
									print("Up");
									if($templateValues['flap_detection_on_down']['value'] || $templateValues['flap_detection_on_unreachable']['value'])
										print(",");
								}
								if($templateValues['flap_detection_on_down']['value']) {
									print("Down");
									if($templateValues['flap_detection_on_unreachable']['value'])
										print(",");
								}
								if($templateValues['flap_detection_on_unreachable']['value']) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<b> - Inherited From: </b><i>".$templateValues['flap_detection_on_up']['source']['name']."</i>");
						print("<br />");
					}					

					print_display_field("Low Flap Threshold", $templateValues, "low_flap_threshold", $_GET['id']);
					print_display_field("High Flap Threshold", $templateValues, "high_flap_threshold", $_GET['id']);
					?>
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'logging') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">
					<input type="hidden" name="request" value="host_template_modify_logging" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "process_perf_data", "Process Performance Data", $lilac->element_desc("process_perf_data", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "retain_status_information", "Retain Status Information", $lilac->element_desc("retain_status_information", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "retain_nonstatus_information", "Retain Non-Status Information", $lilac->element_desc("retain_nonstatus_information", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<input class="btn btn-primary" type="submit" value="Update Logging" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<h3>Included In Template:</h3>
					<?php
					print_enabled_display_field("Process Performance Data", $templateValues, "process_perf_data", $_GET['id']);
					print_enabled_display_field("Retain Status Information", $templateValues, "retain_status_information", $_GET['id']);
					print_enabled_display_field("Retain Non-Status Information", $templateValues, "retain_nonstatus_information", $_GET['id']);				
					?>
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'notifications') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					$notification_options_checkbox_group[] = array('field' => "notification_on_down", 'label' => "Down");
					$notification_options_checkbox_group[] = array('field' => "notification_on_unreachable", 'label' => "Unreachable");
					$notification_options_checkbox_group[] = array('field' => "notification_on_recovery", 'label' => "Recovery");
					$notification_options_checkbox_group[] = array('field' => "notification_on_flapping", 'label' => "Flapping");
					$notification_options_checkbox_group[] = array('field' => "notification_on_scheduled_downtime", 'label' => "Scheduled Downtime");

									
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_up", 'label' => "Up");
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_down", 'label' => "Down");
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_unreachable", 'label' => "Unreachable");
					
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">
					<input type="hidden" name="request" value="host_template_modify_notifications" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "notifications_enabled", "Notifications", $lilac->element_desc("notifications_enabled", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(4, 4, "host_manage", "first_notification_delay", "First Notification Delay", $lilac->element_desc("first_notification_delay", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "host_manage", "notification_interval", "Notification Interval in Time-Units", $lilac->element_desc("notification_interval", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "host_manage", "notification_period", "Notification Period", $lilac->element_desc("notification_period", "nagios_hosts_desc"), $templateValues, $_GET['id']);					
					form_checkbox_group_with_enabler($notification_options_checkbox_group, "host_manage", "notification_options", "Notification Options", $lilac->element_desc("notification_options", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					form_checkbox_group_with_enabler($stalking_options_checkbox_group, "host_manage", "stalking_options", "Stalking Options", $lilac->element_desc("stalking_options", "nagios_hosts_desc"), $templateValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<br />
					<input class="btn btn-primary" type="submit" value="Update Notifications" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<h3>Included In Template:</h3>
					<?php
					print_enabled_display_field("Notifications", $templateValues, "notifications_enabled", $_GET['id']);
					print_display_field("First Notification Delay", $templateValues, "first_notification_delay", $_GET['id']);
					print_display_field("Notification Interval", $templateValues, "notification_interval", $_GET['id']);
					print_timeperiod_display_field("Notification Period", $templateValues, "notification_period", $_GET['id']);
					if($hostTemplate->getNotificationOnDown() !== null) {
						?>
						<b>Notification On:</b>
						<?php
						if(!$hostTemplate->getNotificationOnDown() && !$hostTemplate->getNotificationOnUnreachable() && !$hostTemplate->getNotificationOnRecovery() && !$hostTemplate->getNotificationOnFlapping()) {
							print("None");
						}
						else {
                            $values = array();
                            if($hostTemplate->getNotificationOnDown()) $values[] = "Down";
                            if($hostTemplate->getNotificationOnUnreachable()) $values[] = "Unreachable";
                            if($hostTemplate->getNotificationOnRecovery()) $values[] = "Recovery";
                            if($hostTemplate->getNotificationOnFlapping()) $values[] = "Flapping";
                            if($hostTemplate->getNotificationOnScheduledDowntime()) $values[] = "Scheduled Downtime";
                            print(implode(",", $values));
						}
						print("<br />");
					}
					elseif(isset($templateValues['notification_on_down'])) {
						?>
						<b>Notification On:</b>
						<?php
						if(!$templateValues['notification_on_down']['value'] && !$templateValues['notification_on_unreachable']['value'] && !$templateValues['notification_on_recovery']['value'] && !$templateValues['notification_on_flapping']['value']) {
							print("None");
						}
						else {
                            $values = array();
                            if($templateValues['notification_on_down']['value']) $values[] = "Down";
                            if($templateValues['notification_on_unreachable']['value']) $values[] = "Unreachable";
                            if($templateValues['notification_on_recovery']['value']) $values[] = "Recovery";
                            if($templateValues['notification_on_flapping']['value']) $values[] = "Flapping";
                            if($templateValues['notification_on_scheduled_downtime']['value']) $values[] = "Scheduled Downtime";
                            print(implode(",", $values));
						}
						print("<b> - Inherited From: </b><i>".$templateValues['notification_on_down']['source']['name']."</i>");
						print("<br />");
					}
					if($hostTemplate->getStalkingOnUp() !== null) {
						?>
						<b>Stalking On:</b> 
						<?php
						if($hostTemplate->getStalkingOnUp() || $hostTemplate->getStalkingOnDown() || $hostTemplate->getStalkingOnUnreachable()) {
								if($hostTemplate->getStalkingOnUp()) {
									print("Up");
									if($hostTemplate->getStalkingOnDown() || $hostTemplate->getStalkingOnUnreachable())
										print(",");
								}
								if($hostTemplate->getStalkingOnDown()) {
									print("Down");
									if($hostTemplate->getStalkingOnUnreachable())
										print(",");
								}
								if($hostTemplate->getStalkingOnUnreachable()) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<br />");
					}
					elseif(isset($templateValues['stalking_on_up'])) {
						?>
						<b>Stalking On:</b> 
						<?php
						if($templateValues['stalking_on_up']['value'] || $templateValues['stalking_on_down']['value'] || $templateValues['stalking_on_unreachable']['value']) {
								if($templateValues['stalking_on_up']['value']) {
									print("Up");
									if($templateValues['stalking_on_down']['value'] || $templateValues['stalking_on_unreachable']['value'])
										print(",");
								}
								if($templateValues['stalking_on_down']['value']) {
									print("Down");
									if($templateValues['stalking_on_unreachable']['value'])
										print(",");
								}
								if($templateValues['stalking_on_unreachable']['value']) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<b> - Inherited From: </b><i>".$templateValues['stalking_on_up']['source']['name']."</i>");
						print("<br />");
					}					
					?>
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'groups') {
			$inherited_list = $hostTemplate->getInheritedHostGroups();
			$numOfInheritedGroups = count($inherited_list);
			
			$lilac->get_host_template_membership_list($_GET['id'], $group_list);
			$numOfGroups = count($group_list);
			// Get list of host groups
			$lilac->get_hostgroup_list($tempList);
			
			
			$hostgroups_list = array();
			foreach($tempList as $hostgroup) {
				$hostgroups_list[] = array("hostgroup_id" => $hostgroup->getId(), "hostgroup_name" => $hostgroup->getName());
			}

			
			$numOfHostGroups = count($hostgroups_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>servergroup.gif" />
				</td>
				<td valign="top">
				<?php
				if($numOfInheritedGroups) {
					?>
					<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
						<tr class="altTop">
						<td colspan="2">Host Groups Inherited By Templates:</td>
						</tr>
						<?php
						sort( $inherited_list);
						for($counter = 0; $counter < $numOfInheritedGroups; $counter++) {
							if($counter % 2) {
								?>
								<tr class="altRow1">
								<?php
							}
							else {
								?>
								<tr class="altRow2">
								<?php
							}
							?>
							<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
							<td height="20" class="altRight"><a href="hostgroups.php?id=<?php echo $inherited_list[$counter]->getId();?>"><b><?php echo $inherited_list[$counter]->getName();?>:</b></a> <?php echo $inherited_list[$counter]->getName();?></td>
							</tr>
							<?php
						}
						?>
					</table>
					<br />
					<?php
				}
				?>
				
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Host Group Membership:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfGroups; $counter++) {
						if($counter % 2) {
							?>
							<tr class="altRow1">
							<?php
						}
						else {
							?>
							<tr class="altRow2">
							<?php
						}
						?>
						<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=groups&request=delete&hostgroup_id=<?php echo $group_list[$counter]->getNagiosHostgroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><a href="hostgroups.php?id=<?php echo $group_list[$counter]->getNagiosHostgroup()->getId();?>"><b><?php echo $group_list[$counter]->getNagiosHostgroup()->getName();?>:</b></a> <?php echo $group_list[$counter]->getNagiosHostgroup()->getAlias();?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="hostgroup_member_add" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=groups">
				<input type="hidden" name="request" value="add_member_command" />
				<input type="hidden" name="host_manage[group_add][host_id]" value="<?php echo $_GET['id'];?>" />
				<b>Add New Host Group Membership:</b> <?php print_select("host_manage[group_add][hostgroup_id]", $hostgroups_list, "hostgroup_id", "hostgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Group">
				<?php echo $lilac->element_desc("members", "nagios_contactgroups_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'services') {
			
			$inherited_list = $hostTemplate->getInheritedServices();
			$numOfInheritedServices = count($inherited_list);
			
			
			$lilac->get_host_template_services_list($_GET['id'], $hostTemplateServiceList);
			
			$command_list[] = array("value" => 0, "text" => "None");
			
			$numOfServices = count($hostTemplateServiceList);
			
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>services.gif" />
				</td>
				<td valign="top">
				<?php
				if($numOfInheritedServices) {
					?>
					<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
						<tr class="altTop">
						<td colspan="2">Services Inherited By Inherited Templates:</td>
						</tr>
						<?php
						$counter = 0;
						if($numOfInheritedServices) {
							foreach($inherited_list as $service) {
								if($counter % 2) {
									?>
									<tr class="altRow1">
									<?php
								}
								else {
									?>
									<tr class="altRow2">
									<?php
								}
								?>
								<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
								<td height="20" class="altRight"><b><a href="service.php?id=<?php echo $service->getId();?>"><?php echo $service->getDescription();?></a></b> from <b><?php echo $service->getNagiosHostTemplate()->getName();?></b></td>
								</tr>
								<?php
								$counter++;
							}
						}
						?>
					</table>
					<br />
					<?php
				}
				?>
				
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Services Explicitly Linked to This Host Template:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfServices; $counter++) {
						if($counter % 2) {
							?>
							<tr class="altRow1">
							<?php
						}
						else {
							?>
							<tr class="altRow2">
							<?php
						}
						?>
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=services&request=delete&service_id=<?php echo $hostTemplateServiceList[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><a href="service.php?id=<?php echo $hostTemplateServiceList[$counter]->getId();?>"><?php echo $hostTemplateServiceList[$counter]->getDescription();?></a></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<a class="btn btn-success" href="add_service.php?host_template_id=<?php echo $_GET['id'];?>">Create A New Service For This Template</a>
				<br />
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == "checkcommand") {
			$inherited_list = $hostTemplate->getInheritedCommandParameters();
			$numOfInheritedCommandParameters = count($inherited_list);

			// Get List Of Parameters for this service and check
			$checkCommandParameters = $hostTemplate->getNagiosHostCheckCommandParameters();
			$numOfCheckCommandParameters = count($checkCommandParameters);
			$parameterCounter = 0;
			?>
			<table width="90%" align="center" border="0">
			<tr>
			<td>
				<?php
				if($numOfInheritedCommandParameters) {
					?>
					<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
						<tr class="altTop">
						<td colspan="2">Parameters Inherited By Templates:</td>
						</tr>
						<?php
						if(count($inherited_list)) {
							$counter = 1;
							foreach($inherited_list as $parameter) {
								if($counter % 2) {
									?>
									<tr class="altRow1">
									<?php
								}
								else {
									?>
									<tr class="altRow2">
									<?php
								}
								?>
								<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
								<td height="20" class="altRight"><b>$ARG<?php echo ++$parameterCounter;?>$:</b> <?php echo $parameter->getParameter();?></td>
								</tr>
								<?php
							}
						}
						?>
					</table>
					<br />
					<?php
				}
				?>
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Check Command Parameters:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfCheckCommandParameters; $counter++) {
						if($counter % 2) {
							?>
							<tr class="altRow1">
							<?php
						}
						else {
							?>
							<tr class="altRow2">
							<?php
						}
						?>
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=checkcommand&request=delete&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<form name="set_check_command_paramter<?php echo ++$parameterCounter;?>" method="post" action="host_template.php?section=checkcommand&id=<?php echo $_GET['id'];?>&request=update&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>">
                    <td height="20" class="altRight"><b>$ARG<?php echo $parameterCounter;?>$:</b><input type="text" <?php
             					echo 'name="param"';
             					echo ' style="width:300px;"';
             					echo ' value=\''.$checkCommandParameters[$counter]->getParameter().'\'';
             					?>
                    >
                                <input class="nicebutton" type="submit" value="Update" />
                   </td>
  					</form>
						</tr>
						<?php
					}
					?>
				</table>
			<br />
			<br />
			<form name="add_check_command_paramter" method="post" action="host_template.php?section=checkcommand&id=<?php echo $_GET['id'];?>">
			<input type="hidden" name="request" value="command_parameter_add" />
			<input type="hidden" name="host_manage[host_template_id]" value="<?php echo $_GET['id'];?>" />
			Value for $ARG<?php echo ($counter+1);?>$: <input type="text" name="host_manage[parameter]" /> <input class="btn btn-primary" type="submit" value="Add Parameter" />
			</form>
			</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'extended') {
			$directory_list[] = array("value" => '', "text" => 'None');
			$tempDir = array();
			if ($handle = @opendir($sys_config['logos_path'])) {
			   while (false !== ($file = readdir($handle))) {
			       if ($file != "." && $file != "..") {
			           $tempDir[] = $file;
			       }
			   }
			   closedir($handle);
			   asort($tempDir);
				foreach($tempDir as $value) {
					if(!is_dir($sys_config['logos_path'] ."/". $value))
						$directory_list[] = array("value" => $value, "text" => $value);
				}
			}
			$numOfImages = count($directory_list) - 1;			
						
			?>
			<table width="100%" border="0">
			<tr>
			<td width="100" align="center" valign="top">
			<img src="<?php echo $path_config['image_root'];?>info.gif" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {
				?>
				<form name="host_manage" action="host_template.php?id=<?php echo $_GET['id'];?>&section=extended" method="post">
				<input type="hidden" name="request" value="update_host_extended" />
				<input type="hidden" name="host_manage[host_template_id]" value="<?php echo $_GET['id'];?>">
				<?php
				double_pane_form_window_start();
				form_text_element_with_enabler(60, 255, "host_manage", "notes", "Notes", $lilac->element_desc("notes", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_text_element_with_enabler(60, 255, "host_manage", "notes_url", "Notes URL", $lilac->element_desc("notes_url", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_text_element_with_enabler(60, 255, "host_manage", "action_url", "Action URL", $lilac->element_desc("action_url", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "icon_image", "Icon Image", $lilac->element_desc("icon_image", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);				
				form_text_element_with_enabler(60, 255, "host_manage", "icon_image_alt", "Icon Image Alt Text", $lilac->element_desc("icon_image_alt", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "vrml_image", "VRML Image", $lilac->element_desc("vrml_image", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "statusmap_image", "Statusmap Image", $lilac->element_desc("statusmap_image", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_text_element_with_enabler(30, 30, "host_manage", "two_d_coords", "2D Coordinates", $lilac->element_desc("two_d_coords", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				form_text_element_with_enabler(30, 30, "host_manage", "three_d_coords", "3D Coordinates", $lilac->element_desc("three_d_coords", "nagios_services_extended_info_desc"), $templateValues, $_GET['id']);
				double_pane_form_window_finish();
				?>
				<br />
				<input class="btn btn-primary" type="submit" value="Update Extended Information" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=extended">Cancel</a>
				</form>
				<?php
			} else {
				print "<b>Included in definition:</b><br />\n";
				print_display_field("Notes", $templateValues, "notes", $_GET['id']);
				print_display_field("Notes URL", $templateValues, "notes_url", $_GET['id']);
				print_display_field("Action URL", $templateValues, "action_url", $_GET['id']);
				print_display_field("Icon Image", $templateValues, "icon_image", $_GET['id']);
				print_display_field("Icon Image Alt Text", $templateValues, "icon_image_alt", $_GET['id']);
				print_display_field("VRML Image", $templateValues, "vrml_image", $_GET['id']);
				print_display_field("Statusmap Image", $templateValues, "statusmap_image", $_GET['id']);
				print_display_field("2D Coordinates", $templateValues, "two_d_coords", $_GET['id']);
				print_display_field("3D Coordinates", $templateValues, "three_d_coords", $_GET['id']);
				?>
				<br />
				<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">Edit</a>
				<?php
			}
			?>
			</td>
			</tr>
			</table>
			<?php
		}		
		else if($_GET['section'] == 'contacts') {
			$inherited_list = $hostTemplate->getInheritedContacts();
			$numOfInheritedContacts = count($inherited_list);

			$contacts_list = $hostTemplate->getNagiosHostContactMembers();

			$numOfContacts = count($contacts_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
						<?php
						if($numOfInheritedContacts) {
							?>
							<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
								<tr class="altTop">
								<td colspan="2">Contacts Inherited By Templates:</td>
								</tr>
								<?php
								$inherited_list = array_values( $inherited_list);
								for($counter = 0; $counter < $numOfInheritedContacts; $counter++) {
									if($counter % 2) {
										?>
										<tr class="altRow1">
										<?php
									}
									else {
										?>
										<tr class="altRow2">
										<?php
									}
									?>
									<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
									<td height="20" class="altRight"><b><?php echo $inherited_list[$counter]->getName();?>:</b> <?php echo $inherited_list[$counter]->getAlias();?></td>
									</tr>
									<?php
								}
								?>
							</table>
							<br />
							<?php
						}
						?>
						<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
							<tr class="altTop">
							<td colspan="2">Contacts Explicitly Linked to This Host Template:</td>
							</tr>
							<?php
							for($counter = 0; $counter < $numOfContacts; $counter++) {
								if($counter % 2) {
									?>
									<tr class="altRow1">
									<?php
								}
								else {
									?>
									<tr class="altRow2">
									<?php
								}
								?>
								<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contact_id=<?php echo $contacts_list[$counter]->getNagiosContact()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
								<td height="20" class="altRight"><b><?php echo $contacts_list[$counter]->getNagiosContact()->getName();?>:</b> <?php echo $contacts_list[$counter]->getNagiosContact()->getAlias();?></td>
								</tr>
								<?php
							}
							?>
						</table>
				<?php	
				$lilac->get_contact_list($temp_list); 
				$contacts_list = array();
				foreach($temp_list as $tempContact) {
					$contacts_list[] = array('contact_name' => $tempContact->getName(), 'contact_id' => $tempContact->getId());
				}
				?>
				<br />
				<br />
				<form name="host_template_contact_add" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contact_command" />
				<b>Add New Contact:</b> <?php print_select("host_manage[contact_add][contact_id]", $contacts_list, "contact_id", "contact_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact">
				<?php echo $lilac->element_desc("contact_groups", "nagios_hosts_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php

			$inherited_list = $hostTemplate->getInheritedContactGroups();
			$numOfInheritedGroups = count($inherited_list);

			$lilac->return_host_template_contactgroups_list($_GET['id'], $contactgroups_list);			
			$numOfContactGroups = count($contactgroups_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
						<?php
						if($numOfInheritedGroups) {
							?>
							<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
								<tr class="altTop">
								<td colspan="2">Contact Groups Inherited By Templates:</td>
								</tr>
								<?php
								$inherited_list = array_values( $inherited_list);
								for($counter = 0; $counter < $numOfInheritedGroups; $counter++) {
									if($counter % 2) {
										?>
										<tr class="altRow1">
										<?php
									}
									else {
										?>
										<tr class="altRow2">
										<?php
									}
									?>
									<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
									<td height="20" class="altRight"><b><?php echo $lilac->return_contactgroup_name($inherited_list[$counter]->getId());?>:</b> <?php echo $lilac->return_contactgroup_alias($inherited_list[$counter]->getId());?></td>
									</tr>
									<?php
								}
								?>
							</table>
							<br />
							<?php
						}
						?>
						<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
							<tr class="altTop">
							<td colspan="2">Contact Groups Explicitly Linked to This Host Template:</td>
							</tr>
							<?php
							for($counter = 0; $counter < $numOfContactGroups; $counter++) {
								if($counter % 2) {
									?>
									<tr class="altRow1">
									<?php
								}
								else {
									?>
									<tr class="altRow2">
									<?php
								}
								?>
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contactgroup_id=<?php echo $contactgroups_list[$counter]->getNagiosContactgroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
								<td height="20" class="altRight"><b><?php echo $contactgroups_list[$counter]->getNagiosContactgroup()->getName();?>:</b> <?php echo $contactgroups_list[$counter]->getNagiosContactgroup()->getAlias();?></td>
								</tr>
								<?php
							}
							?>
						</table>
				<?php	
				$lilac->get_contactgroup_list($temp_list); 
				$contactgroups_list = array();
				foreach($temp_list as $tempGroup) {
					$contactgroups_list[] = array('contactgroup_name' => $tempGroup->getName(), 'contactgroup_id' => $tempGroup->getId());
				}
				?>
				<br />
				<br />
				<form name="host_template_contactgroup_add" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contactgroup_command" />
				<input type="hidden" name="host_manage[contactgroup_add][host_id]" value="<?php echo $_GET['id'];?>" />
				<b>Add New Contact Group:</b> <?php print_select("host_manage[contactgroup_add][contactgroup_id]", $contactgroups_list, "contactgroup_id", "contactgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact Group">
				<?php echo $lilac->element_desc("contact_groups", "nagios_hosts_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'dependencies') {
			$inherited_list = $hostTemplate->getInheritedDependencies();
			$numOfInheritedDepdendencies = count($inherited_list);
			
			$dependencies_list = $hostTemplate->getNagiosDependencys();

			$numOfDependencies = count($dependencies_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
						<?php
						if($numOfInheritedDepdendencies) {
							?>
							<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
								<tr class="altTop">
								<td colspan="2">Depdendencies Inherited By Templates:</td>
								</tr>
								<?php
								$counter = 0;
								if($numOfInheritedDepdendencies) {
									foreach($inherited_list as $dependency) {
										if($counter % 2) {
											?>
											<tr class="altRow1">
											<?php
										}
										else {
											?>
											<tr class="altRow2">
											<?php
										}
										?>
										<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
										<td height="20" class="altRight"><b><?php echo $dependency->getName();?> - Inherited from <?php echo $dependency->getNagiosHostTemplate()->getName();?></td>
										</tr>
										<?php
										$counter++;
									}
								}
								?>
							</table>
							<br />
							<?php
						}
						?>
						<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
							<tr class="altTop">
							<td colspan="2">Depdendencies Explicitly Linked to This Host Template:</td>
							</tr>
							<?php
							$counter = 0;
							if($numOfDependencies) {
								foreach($dependencies_list as $dependency) {
									if($counter % 2) {
										?>
										<tr class="altRow1">
										<?php
									}
									else {
										?>
										<tr class="altRow2">
										<?php
									}
									?>
									<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=dependencies&request=delete&dependency_id=<?php echo $dependency->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
									<td height="20" class="altRight"><b><a href="dependency.php?id=<?php echo $dependency->getId();?>"><?php echo $dependency->getName();?></a></b></td>
									</tr>
									<?php
									$counter++;
								}
							}
							?>
						</table>
						<br />
						<br />
						<a class="btn btn-success" href="add_dependency.php?dependency_add=1&host_template_id=<?php echo $_GET['id'];?>">Create A New Host Dependency For This Template</a>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'escalations') {
			$inherited_list = $hostTemplate->getInheritedEscalations();
			$numOfInheritedEscalations = count($inherited_list);
			
			$escalations_list = $hostTemplate->getNagiosEscalations();
			$numOfEscalations = count($escalations_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
						<?php
						if($numOfInheritedEscalations) {
							?>
							<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
								<tr class="altTop">
								<td colspan="2">Escalations Inherited By Templates:</td>
								</tr>
								<?php
								$counter = 0;
								if($numOfInheritedEscalations) {
									foreach($inherited_list as $escalation) {
										if($counter % 2) {
											?>
											<tr class="altRow1">
											<?php
										}
										else {
											?>
											<tr class="altRow2">
											<?php
										}
										?>
										<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
										<td height="20" class="altRight"><b><a href="escalation.php?id=<?php echo $escalation->getId();?>"><?php echo $escalation->getDescription();?></a> - Inherited From <?php echo $escalation->getNagiosHostTemplate()->getName();?></b></td>
										</tr>
										<?php
										$counter++;
									}
								}
								?>
							</table>
							<br />
							<?php
						}
						?>
						<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
							<tr class="altTop">
							<td colspan="2">Escalations Explicitly Linked to This Host Template</td>
							</tr>
							<?php
							$counter = 0;
							if($numOfEscalations) {
								foreach($escalations_list as $escalation) {
									if($counter % 2) {
										?>
										<tr class="altRow1">
										<?php
									}
									else {
										?>
										<tr class="altRow2">
										<?php
									}
									?>
									<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="host_template.php?id=<?php echo $_GET['id'];?>&section=escalations&request=delete&escalation_id=<?php echo $escalation->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
									<td height="20" class="altRight"><b><a href="escalation.php?id=<?php echo $escalation->getId();?>"><?php echo $escalation->getDescription();?></a></b></td>
									</tr>
									<?php
									$counter++;
								}
							}
							?>
						</table>
						<br />
						<br />
						<a class="btn btn-success" href="add_escalation.php?host_template_id=<?php echo $_GET['id'];?>">Create A New Escalation For This Template</a>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'autodiscovery') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $host_template_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					?>
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=autodiscovery&edit=1">
					<input type="hidden" name="request" value="host_template_modify_autodiscovery" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_text_element_with_enabler(40, 255, "host_manage", "autodiscovery_address_filter", "Address Filter", $lilac->element_desc("autodiscovery_address_filter", "host_template_autodiscovery"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(40, 255, "host_manage", "autodiscovery_hostname_filter", "Hostname Filter", $lilac->element_desc("autodiscovery_hostname_filter", "host_template_autodiscovery"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(40, 255, "host_manage", "autodiscovery_os_family_filter", "Operating System Family Filter", $lilac->element_desc("autodiscovery_os_family_filter", "host_template_autodiscovery"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(40, 255, "host_manage", "autodiscovery_os_generation_filter", "Operating System Generation Filter", $lilac->element_desc("autodiscovery_os_generation_filter", "host_template_autodiscovery"), $templateValues, $_GET['id']);
					form_text_element_with_enabler(40, 255, "host_manage", "autodiscovery_os_vendor_filter", "Operating system Vendor Filter", $lilac->element_desc("autodiscovery_os_vendor_filter", "host_template_autodiscovery"), $templateValues, $_GET['id']);					
					double_pane_form_window_finish();
					?>
					<br />
					<input class="btn btn-primary" type="submit" value="Update Filters" /> <a class="btn btn-default" href="host_template.php?id=<?php echo $_GET['id'];?>&section=autodiscovery">Cancel</a>
					<?php
				}
				else {
					?>
					<h3>Included In Template:</h3>
					<?php
					print_display_field("Address Filter", $templateValues, "autodiscovery_address_filter", $_GET['id']);
					print_display_field("Hostname Filter", $templateValues, "autodiscovery_hostname_filter", $_GET['id']);
					print_display_field("Operating System Family Filter", $templateValues, "autodiscovery_os_family_filter", $_GET['id']);
					print_display_field("Operating System Generation Filter", $templateValues, "autodiscovery_os_generation_filter", $_GET['id']);
					print_display_field("Operating system Vendor Filter", $templateValues, "autodiscovery_os_vendor_filter", $_GET['id']);
					?>
					<br />
					<a class="btn btn-primary" href="host_template.php?id=<?php echo $_GET['id'];?>&section=autodiscovery&edit=1">Edit</a><br />
					<br />
					<?php
					$inherited_list = $hostTemplate->getInheritedNagiosAutodiscoveryServiceFilters();
					$numOfInheritedFilters = count($inherited_list);
					
					$filter_list = $hostTemplate->getNagiosHostTemplateAutodiscoveryServices();
					$numOfFilters = count($filter_list);
					
					if($numOfInheritedFilters) {
						?>
						<p>
						<h3>Inherited Service Filters</h3>
						<?php
						foreach($inherited_list as $filter) {
							?>
							<div class="shaded">
							<em>Inherited From: </em><?php echo $filter->getNagiosHostTemplate()->getName();?>
							<p>
							<strong>Port: </strong><?php echo strtoupper($filter->getProtocol()); ?>/<?php echo $filter->getPort();?>
							</p>
							<?php
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Name: </strong><?php echo $filter->getName(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Port: </strong><?php echo $filter->getProtocol(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Product: </strong><?php echo $filter->getProduct(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Version: </strong><?php echo $filter->getVersion(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Extra Information: </strong><?php echo $filter->getExtraInformation(); ?>
								</p>
								<?php
							}
							?>
							</div>
							<?php
						}
						?></p><?php
					}
					?>
					<p>
					<h3>Defined Service Filters</h3>
					<?php
					if(!$numOfFilters) {
						?>
						No Defined Filters For This Host Template
						<?php
					}
					else {
						foreach($filter_list as $filter) {
							?>
							<div class="shaded">
							<p>
							<strong>Port: </strong><?php echo strtoupper($filter->getProtocol()); ?>/<?php echo $filter->getPort();?>
							</p>
							<?php
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Name: </strong><?php echo $filter->getName(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Port: </strong><?php echo $filter->getProtocol(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Product: </strong><?php echo $filter->getProduct(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Version: </strong><?php echo $filter->getVersion(); ?>
								</p>
								<?php
							}
							if($filter->getName() != '') {
								?>
								<p>
								<strong>Extra Information: </strong><?php echo $filter->getExtraInformation(); ?>
								</p>
								<?php
							}
							?>
							<a class="btn btn-danger" href="host_template.php?id=<?php echo $hostTemplate->getId();?>&section=autodiscovery&request=delete&filter=<?php echo $filter->getId();?>"  onClick="javascript:return confirmDelete();">Delete</a>
							</div>
							<?php
						}
					}
					?>
					</p>
					<br />


					<?php
					$protocol_select = array();
					$protocol_select[] = array(
						'option' => 'TCP',
						'value' => 'tcp'
					);
					$protocol_select[] = array(
						'option' => 'UDP',
						'value' => 'udp'
					);
					?>
					<h3>Add A Service Filter</h3>
					<div class="shaded">
					<form name="host_manage" method="post" action="host_template.php?id=<?php echo $_GET['id'];?>&section=autodiscovery">
					<input type="hidden" name="request" value="host_template_add_autodiscovery_service" />
					<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">

					<p>
					 <strong>Protocol: </strong><?php print_select("host_manage[protocol]", $protocol_select, "value", "option");?> <strong>Port: (Required) </strong><input type="text" size="4" maxlength="40" name="host_manage[port]" />
					</p>
					<p>
					<strong>Name: </strong><input type="text" name="host_manage[name]" size="40" maxlength="255" />
					<?php echo $lilac->element_desc("autodiscovery_service_filter_name", "host_template_autodiscovery");?>
					</p>
					<p>
					<strong>Product: </strong><input type="text" name="host_manage[product]" size="40" maxlength="255" /> <strong>Version: </strong><input type="text" name="host_manage[version]" size="4" maxlength="255" />
					<?php echo $lilac->element_desc("autodiscovery_service_filter_product", "host_template_autodiscovery");?>
					</p>
					<p>
					<strong>Extra Information: </strong><input type="text" name="host_manage[extra_information]" size="40" maxlength="255" />
					<?php echo $lilac->element_desc("autodiscovery_service_filter_extra_information", "host_template_autodiscovery");?>
					</p>
					<p>
					<input class="btn btn-primary" type="submit" value="Add Service Filter" />
					</p>
					</form>
					</div>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		print_window_footer();
		?>
		<br />
		<br />
		<?php
	}
	?>
	<br />
	<?php
print_footer();
?>
