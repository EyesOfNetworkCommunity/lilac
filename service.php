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
 * service.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain service template
 *
*/
include_once('includes/config.inc');
include_once('classes/NagiosServiceGroupMember.php');
include_once('classes/NagiosServiceGroup.php');


if(!isset($_GET['section']))
	$_GET['section'] = 'general';

if(isset($_GET['id'])) {
	// Load template.
	$service = NagiosServicePeer::retrieveByPK($_GET['id']);
	if(!$service) {
		header("Location: welcome.php");
		die();
	}
	else {
		// GET VALUES
		$serviceValues = $service->getValues();
	}
}
// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'contacts') {
			if(!empty($_GET['contactgroup_id'])) {
				$c = new Criteria();
				$c->add(NagiosServiceContactGroupMemberPeer::SERVICE, $_GET['id']);
				$c->add(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $_GET['contactgroup_id']);
				$membership = NagiosServiceContactGroupMemberPeer::doSelectOne($c);
				if($membership) {
					$membership->delete();
					$success = "Contact Group Deleted";
				}
			}
			else if(!empty($_GET['contact_id'])) {
				$c = new Criteria();
				$c->add(NagiosServiceContactMemberPeer::SERVICE, $_GET['id']);
				$c->add(NagiosServiceContactMemberPeer::CONTACT, $_GET['contact_id']);
				$membership = NagiosServiceContactMemberPeer::doSelectOne($c);
				if($membership) {
					$membership->delete();
					$success = "Contact deleted.";
				}
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'inheritance') {
			$c = new Criteria();
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $service->getId());
			$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosServiceTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosServiceTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
					// Omg, we found it!
					// Delete the inheritance
					$inheritanceList[$counter]->delete();
					// Okay, regrab the list
					$newList = NagiosServiceTemplateInheritancePeer::doSelect($c);
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
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $service->getId());
			$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosServiceTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosServiceTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
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
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $service->getId());
			$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
			$inheritanceList = NagiosServiceTemplateInheritancePeer::doSelect($c);
			
			$found = false;
			for($counter = 0; $counter < count($inheritanceList); $counter++) {
				if($inheritanceList[$counter]->getNagiosServiceTemplateRelatedByTargetTemplate()->getId() == $_GET['template_id']) {
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
		if($_GET['request'] == "delete" && $_GET['section'] == 'servicegroups') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$c = new Criteria();
			$c->add(NagiosServiceGroupMemberPeer::SERVICE, $_GET['id']);
			$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $_GET['servicegroup_id']);
			$membership = NagiosServiceGroupMemberPeer::doSelectOne($c);
			if($membership) {
				$membership->delete();
				$success = "Service Group Deleted";
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
		}
		if($_GET['request'] == "delete" && $_GET['section'] == 'checkcommand') {
			$param = NagiosServiceCheckCommandParameterPeer::retrieveByPK($_GET['checkcommandparameter_id']);
			if($param) {
				$param->delete();
				$success = "Check Command Parameter Deleted.";
			}			
		}
		if($_GET['request'] == "update" && $_GET['section'] == 'checkcommand') {
			$commandParameter = NagiosServiceCheckCommandParameterPeer::retrieveByPK($_GET['checkcommandparameter_id']);
			$commandParameter->setParameter($_POST['param']);
			$commandParameter->save();
			$success = "Check Command Parameter Updated.";
		}
}

if(isset($_POST['request'])) {
	$modifiedData = array();
	
	if(isset($_POST['service_manage']) && count($_POST['service_manage'])) {
		foreach( $_POST['service_manage'] as $key=>$value) {
			if( is_array( $value)) {
				$modifiedData[$key] = $value;
			} else {
				$modifiedData[$key] = (string)$value;
			}
		}
	}
	
	if(empty($modifiedData['display_name'])) {
		$modifiedData['display_name']=NULL;
	}

	if($_POST['request'] == 'service_template_modify_general') {
		if($modifiedData['service_description'] != $service->getDescription()) {
			// Now check to see if we belong to a host or template, and if that service already exists for that name.
			$c = new Criteria();
			$c->add(NagiosServicePeer::DESCRIPTION, $modifiedData['service_description']);
			if($service->getHost()) {
				$c->add(NagiosServicePeer::HOST, $service->getHost());
			}
			else if($service->getHostTemplate()) {
				$c->add(NagiosServicePeer::HOST_TEMPLATE, $service->getHostTemplate());
			}
			$tempService = NagiosServicePeer::doSelectOne($c);
			if($tempService) {
				$error = "A service with that name already exists!";
			}
			else {
				$service->setDescription($modifiedData['service_description']);
                $service->setDisplayName($modifiedData['display_name']);
				$service->save();
				unset($_GET['edit']);
				$success = "Service modified.";
			}
		}
		else {
			// Field Error Checking
			if(count($modifiedData)) {
				foreach($modifiedData as $tempVariable)
					$tempVariable = trim($tempVariable);
			}
			if($modifiedData['service_description'] == '') {
				$addError = 1;
				$error = "Incorrect values for fields.  Please verify.";
			}
			// All is well for error checking, modify the template.
			else {
				$service->setDescription($modifiedData['service_description']);
                $service->setDisplayName($modifiedData['display_name']);
				$service->save();
				unset($_GET['edit']);
				$success = "Service modified.";
			}
		}
	}
	else if($_POST['request'] == "add_template_command") {
		$template = NagiosServiceTemplatePeer::retrieveByPK($_POST['servicemanage']['template_add']['template_id']);
		if(!$template) {
			$error = "That service template is not found.";
		}
		else {
			// We need to get the count of templates already inherited
			$templateList = $service->getNagiosServiceTemplateInheritances();
			foreach($templateList as $tempTemplate) {
				if($tempTemplate->getId() == $_POST['servicemanage']['template_add']['template_id']) {
					$error = "That template already exists in the inheritance chain.";
				}
			}
			if(empty($error)) {
				$newInheritance = new NagiosServiceTemplateInheritance();
				$newInheritance->setNagiosService($service);
				$newInheritance->setNagiosServiceTemplateRelatedByTargetTemplate($template);
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
	else if($_POST['request'] == 'service_template_modify_checks') {		
		if((isset($modifiedData['max_check_attempts']) && !is_numeric($modifiedData['max_check_attempts'])) || 
			(isset($modifiedData['max_check_attempts']) && !($modifiedData['max_check_attempts'] >= 1)) ||
			(isset($modifiedData['normal_check_interval']) && !is_numeric($modifiedData['normal_check_interval'])) || 
			(isset($modifiedData['normal_check_interval']) && !($modifiedData['normal_check_interval'] >= 1)) ||
			(isset($modifiedData['retry_interval']) && !is_numeric($modifiedData['retry_interval'])) || 
			(isset($modifiedData['retry_interval']) && !($modifiedData['retry_interval'] >= 1)) ||
			(isset($modifiedData['retry_interval']) && !is_numeric($modifiedData['retry_interval'])) || 
			(isset($modifiedData['first_notification_delay']) && !is_numeric($modifiedData['first_notification_delay'])) || 
			(isset($modifiedData['freshness_threshold']) && !($modifiedData['freshness_threshold'] >= 0))) {
			$addError = 1;
			$error = "Incorrect values for fields.  Please verify.";
		}
		else {
			// Let's modify our host template
			if(isset($modifiedData['initial_state'])) {
				$service->setInitialState($modifiedData['initial_state']);
			}
			else {
				$service->setInitialState(null);
			}

			if(isset($modifiedData['is_volatile'])) {
				$service->setIsVolatile($modifiedData['is_volatile']);	
			}
			else {
				$service->setIsVolatile(null);
			}
			if(isset($modifiedData['is_volatile'])) {
				$service->setIsVolatile($modifiedData['is_volatile']);	
			}
			else {
				$service->setIsVolatile(null);
			}
			if(isset($modifiedData['check_command']) && $modifiedData['check_command'] != 0) {
				$service->setCheckCommand(NagiosCommandPeer::retrieveByPK($modifiedData['check_command'])->getId());
			}
			else {
				$service->setCheckCommand(null);	
			}
			if(isset($modifiedData['max_check_attempts'])) {
				$service->setMaximumCheckAttempts($modifiedData['max_check_attempts']);	
			}
			else {
				$service->setMaximumCheckAttempts(null);
			}
			if(isset($modifiedData['normal_check_interval'])) {
				$service->setNormalCheckInterval($modifiedData['normal_check_interval']);	
			}
			else {
				$service->setNormalCheckInterval(null);
			}
			if(isset($modifiedData['retry_interval'])) {
				$service->setRetryInterval($modifiedData['retry_interval']);	
			}
			else {
				$service->setRetryInterval(null);
			}
			if(isset($modifiedData['first_notification_delay'])) {
				$service->setFirstNotificationDelay($modifiedData['first_notification_delay']);	
			}
			else {
				$service->setFirstNotificationDelay(null);
			}

			if(isset($modifiedData['active_checks_enabled'])) {
				$service->setActiveChecksEnabled($modifiedData['active_checks_enabled']);	
			}
			else {
				$service->setActiveChecksEnabled(null);
			}
			if(isset($modifiedData['passive_checks_enabled'])) {
				$service->setPassiveChecksEnabled($modifiedData['passive_checks_enabled']);	
			}
			else {
				$service->setPassiveChecksEnabled(null);
			}
			if(isset($modifiedData['normal_check_interval'])) {
				$service->setNormalCheckInterval($modifiedData['normal_check_interval']);	
			}
			else {
				$service->setNormalCheckInterval(null);
			}
			if(isset($modifiedData['check_period']) && $modifiedData['check_period'] != 0) {
				$service->setCheckPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['check_period'])->getId());
			}
			else {
				$service->setCheckPeriod(null);
			}
			if(isset($modifiedData['parallelize_check'])) {
				$service->setParallelizeCheck($modifiedData['parallelize_check']);	
			}
			else {
				$service->setParallelizeCheck(null);
			}
			if(isset($modifiedData['obsess_over_service'])) {
				$service->setObsessOverService($modifiedData['obsess_over_service']);	
			}
			else {
				$service->setObsessOverService(null);
			}
			if(isset($modifiedData['check_freshness'])) {
				$service->setCheckFreshness($modifiedData['check_freshness']);	
			}
			else {
				$service->setCheckFreshness(null);
			}
			if(isset($modifiedData['freshness_threshold'])) {
				$service->setFreshnessThreshold($modifiedData['freshness_threshold']);	
			}
			else {
				$service->setFreshnessThreshold(null);
			}
			if(isset($modifiedData['event_handler_enabled'])) {
				$service->setEventHandlerEnabled($modifiedData['event_handler_enabled']);	
			}
			else {
				$service->setEventHandlerEnabled(null);
			}
			if(isset($modifiedData['event_handler']) && $modifiedData['event_handler'] != 0) {
				$service->setEventHandler(NagiosCommandPeer::retrieveByPK($modifiedData['event_handler'])->getId());
			}
			else {
				$service->setEventHandler(null);	
			}			
			if(isset($modifiedData['failure_prediction_enabled'])) {
				$service->setFailurePredictionEnabled($modifiedData['failure_prediction_enabled']);	
			}
			else {
				$service->setFailurePredictionEnabled(null);
			}
			$service->save();
			unset($_GET['edit']);
			$success = "Service modified";
		}

		
		
	}
	else if($_POST['request'] == 'service_template_modify_flapping') {
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
				$service->setFlapDetectionEnabled($modifiedData['flap_detection_enabled']);
			}
			else {
				$service->setFlapDetectionEnabled(null);	
			}
			if(!isset($_POST['service_manage_checkboxes']) || !isset($_POST['service_manage_checkboxes']['flap_detection_options'])) {
				$service->setFlapDetectionOnOk(null);
				$service->setFlapDetectionOnUnknown(null);
				$service->setFlapDetectionOnWarning(null);
				$service->setFlapDetectionOnCritical(null);
			}
			else {
				if(isset($_POST['service_manage']['flap_detection_on_ok'])) {
					$service->setFlapDetectionOnOk(true);
				}
				else {
					$service->setFlapDetectionOnOk(false);
				}
				if(isset($_POST['service_manage']['flap_detection_on_unknown'])) {
					$service->setFlapDetectionOnUnknown(true);
				}
				else {
					$service->setFlapDetectionOnUnknown(false);
				}
				if(isset($_POST['service_manage']['flap_detection_on_warning'])) {
					$service->setFlapDetectionOnWarning(true);
				}
				else {
					$service->setFlapDetectionOnWarning(false);
				}
				if(isset($_POST['service_manage']['flap_detection_on_critical'])) {
					$service->setFlapDetectionOnCritical(true);
				}
				else {
					$service->setFlapDetectionOnCritical(false);
				}

			}

			if(isset($modifiedData['low_flap_threshold'])) {
				$service->setLowFlapThreshold($modifiedData['low_flap_threshold']);
			}
			else {
				$service->setLowFlapThreshold(null);	
			}
			if(isset($modifiedData['high_flap_threshold'])) {
				$service->setHighFlapThreshold($modifiedData['high_flap_threshold']);
			}
			else {
				$service->setHighFlapThreshold(null);	
			}
			$service->save();
			
			unset($modifiedData);
			$success = "Service modified.";
			unset($_GET['edit']);
		}
	}
	else if($_POST['request'] == 'service_template_modify_logging') {
		// Field Error Checking
		// None required for this process
		// All is well for error checking, modify the host template.
		if(isset($modifiedData['process_perf_data'])) {
			$service->setProcessPerfData($modifiedData['process_perf_data']);
		}
		else {
			$service->setProcessPerfData(null);	
		}
		if(isset($modifiedData['retain_status_information'])) {
			$service->setRetainStatusInformation($modifiedData['retain_status_information']);
		}
		else {
			$service->setRetainStatusInformation(null);	
		}
		if(isset($modifiedData['retain_nonstatus_information'])) {
			$service->setRetainNonstatusInformation($modifiedData['retain_nonstatus_information']);
		}
		else {
			$service->setRetainNonstatusInformation(null);	
		}
		$service->save();
		
		unset($modifiedData);
		$success = "Service modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'service_template_modify_notifications') {
		// Field Error Checking
		if(count($modifiedData)) {
			foreach($modifiedData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
			

		
		if(isset($_POST['service_manage_enablers']['notification_interval']) && 
			($modifiedData['notification_interval'] == '' || $modifiedData['notification_interval'] < 0 || !is_numeric($modifiedData['notification_interval']))) {
			$error = "Incorrect values for fields.  Please verify.";
		}
		// All is well for error checking, modify the command.
		else {
			if(!isset($_POST['service_manage_checkboxes']) || !isset($_POST['service_manage_checkboxes']['notification_options'])) {
				$service->setNotificationOnCritical(null);
				$service->setNotificationOnFlapping(null);
				$service->setNotificationOnRecovery(null);
				$service->setNotificationOnUnknown(null);
				$service->setNotificationOnWarning(null);
                $service->setNotificationOnScheduledDowntime(null);
			}
			else {
				if(isset($_POST['service_manage']['notification_on_critical'])) {
					$service->setNotificationOnCritical(true);
				}
				else {
					$service->setNotificationOnCritical(false);
				}
				if(isset($_POST['service_manage']['notification_on_flapping'])) {
					$service->setNotificationOnFlapping(true);
				}
				else {
					$service->setNotificationOnFlapping(false);
				}
				if(isset($_POST['service_manage']['notification_on_recovery'])) {
					$service->setNotificationOnRecovery(true);
				}
				else {
					$service->setNotificationOnRecovery(false);
				}
				if(isset($_POST['service_manage']['notification_on_unknown'])) {
					$service->setNotificationOnUnknown(true);
				}
				else {
					$service->setNotificationOnUnknown(false);
				}
				if(isset($_POST['service_manage']['notification_on_warning'])) {
					$service->setNotificationOnWarning(true);
				}
				else {
					$service->setNotificationOnWarning(false);
				}
				if(isset($_POST['service_manage']['notification_on_scheduled_downtime'])) {
					$service->setNotificationOnScheduledDowntime(true);
				}
				else {
					$service->setNotificationOnScheduledDowntime(false);
				}

			}
			if(!isset($_POST['service_manage_checkboxes']) || !isset($_POST['service_manage_checkboxes']['stalking_options'])) {
				$service->setStalkingOnOk(null);
				$service->setStalkingOnWarning(null);
				$service->setStalkingOnUnknown(null);
				$service->setStalkingOnCritical(null);
			}
			else {
				if(isset($_POST['service_manage']['stalking_on_ok'])) {
					$service->setStalkingOnOk(true);
				}
				else {
					$service->setStalkingOnOk(false);
				}
				if(isset($_POST['service_manage']['stalking_on_warning'])) {
					$service->setStalkingOnWarning(true);
				}
				else {
					$service->setStalkingOnWarning(false);
				}
				if(isset($_POST['service_manage']['stalking_on_unknown'])) {
					$service->setStalkingOnUnknown(true);
				}
				else {
					$service->setStalkingOnUnknown(false);
				}
				if(isset($_POST['service_manage']['stalking_on_critical'])) {
					$service->setStalkingOnCritical(true);
				}
				else {
					$service->setStalkingOnCritical(false);
				}
			}
			if(isset($modifiedData['notifications_enabled'])) {
				$service->setNotificationsEnabled($modifiedData['notifications_enabled']);
			}
			else {
				$service->setNotificationsEnabled(null);	
			}
			if(isset($modifiedData['notification_interval'])) {
				$service->setNotificationInterval($modifiedData['notification_interval']);
			}
			else {
				$service->setNotificationInterval(null);	
			}
			if(isset($modifiedData['notification_period'])) {
				$service->setNotificationPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['notification_period'])->getId());
			}
			else {
				$service->setNotificationPeriod(null);
			}			
			$service->save();
			
			// Remove session data
			unset($modifiedData);
			$success = "Service modified.";
			unset($_GET['edit']);
		}
	}	
	if($_POST['request'] == 'update_service_extended') {
		// We properly got an service.	
		if(isset($modifiedData['notes'])) {
			$service->setNotes($modifiedData['notes']);
		}
		else {
			$service->setNotes(null);	
		}
		if(isset($modifiedData['notes_url'])) {
			$service->setNotesUrl($modifiedData['notes_url']);
		}
		else {
			$service->setNotesUrl(null);	
		}
		if(isset($modifiedData['action_url'])) {
			$service->setActionUrl($modifiedData['action_url']);
		}
		else {
			$service->setActionUrl(null);	
		}
		if(isset($modifiedData['icon_image'])) {
			$service->setIconImage($modifiedData['icon_image']);
		}
		else {
			$service->setIconImage(null);	
		}
		if(isset($modifiedData['icon_image_alt'])) {
			$service->setIconImageAlt($modifiedData['icon_image_alt']);
		}
		else {
			$service->setIconImageAlt(null);	
		}
		$service->save();
		$success = "Updated Service Extended Information";
	}
	else if($_POST['request'] == 'add_contact_command') {
		$c = new Criteria();
		$c->add(NagiosServiceContactMemberPeer::SERVICE, $_GET['id']);
		$c->add(NagiosServiceContactMemberPeer::CONTACT, $_POST['service_manage']['contact_add']['contact_id']);
		$membership = NagiosServiceContactMemberPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact already exists in that list!";
		}
		else {
			$tempContact = NagiosContactPeer::retrieveByPk($_POST['service_manage']['contact_add']['contact_id']);
			if($tempContact) {
				$membership = new NagiosServiceContactMember();
				$membership->setService($_GET['id']);
				$membership->setNagiosContact($tempContact);
				$membership->save();
				$success = "New Service Template Contact Link added.";				
			}
			else {
				$error = "That contact is not found.";
			}
		}
	}	

	else if($_POST['request'] == 'add_contactgroup_command') {
		$c = new Criteria();
		$c->add(NagiosServiceContactGroupMemberPeer::SERVICE, $_GET['id']);
		$c->add(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $_POST['contactgroup_id']);
		$membership = NagiosServiceContactGroupMemberPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact group already exists in that list!";
		}
		else {
			$tempGroup = NagiosContactGroupPeer::retrieveByPk($_POST['contactgroup_id']);
			if($tempGroup) {
				$membership = new NagiosServiceContactGroupMember();
				$membership->setService($_GET['id']);
				$membership->setNagiosContactGroup($tempGroup);
				$membership->save();
				$success = "New Service Contact Group Link added.";				
			}
		}
	}
	else if($_POST['request'] == 'add_servicegroup_command') {
		$c = new Criteria();
		$c->add(NagiosServiceGroupMemberPeer::SERVICE, $service->getId());
		$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $_POST['servicegroup_id']);
		$tempMembership = NagiosServiceGroupMemberPeer::doSelectOne($c);
		if($tempMembership) {
			$error = "That service group already exists in that list!";
		}
		else {
			$membership = new NagiosServiceGroupMember();
			$membership->setService($service->getId());
			$membership->setServiceGroup($_POST['servicegroup_id']);
			$membership->save();
			$success = "New Service Group Link added.";
		}
	}
	else if($_POST['request'] == 'command_parameter_add') {
		if(trim($_POST['service_manage']['parameter']) == "") {
			$error = "Parameter cannot be blank.";
		}
		else {
			// All is well for error checking, modify the command.
			$param = new NagiosServiceCheckCommandParameter();
			$param->setService($service->getId());
			$param->setParameter($_POST['service_manage']['parameter']);
			$param->save();
			$success = "Command Parameter added.";
		}
	}
	
	
}

if(isset($_GET['id'])) {
	// Load template.
	$service = NagiosServicePeer::retrieveByPK($_GET['id']);
	if(!$service) {
		header("Location: welcome.php");
		die();
	}
	else {
		// GET VALUES
		$serviceValues = $service->getValues();
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

$volatile_list[] = array("value" => 0, "label" => "Not Volatile");
$volatile_list[] = array("value" => 1, "label" => "Volatile");

$initialState_list = array();
$initialState_list[] = array('value' => 'o', 'label' => 'Ok');
$initialState_list[] = array('value' => 'w', 'label' => 'Warning');
$initialState_list[] = array('value' => 'c', 'label' => 'Critical');
$initialState_list[] = array('value' => 'u', 'label' => 'Unknown');



if($service->getNagiosHostTemplate()) {
	$subtitle = " for Host Template " . $service->getNagiosHostTemplate()->getName();
	$sublinktitle = "Back To Host Template " . $service->getNagiosHostTemplate()->getName();
	$sublink = "host_template.php?id=" . $service->getNagiosHostTemplate()->getId() . "&section=services";
}
else if($service->getNagiosHost()) {
	$subtitle = " for Host " . $service->getNagiosHost()->getName();
	$sublinktitle = "Back To Host " . $service->getNagiosHost()->getName();
	$sublink = "hosts.php?id=" . $service->getNagiosHost()->getId() . "&section=services";
}
else if($service->getNagiosHostgroup()) {
	$subtitle = " for Hostgroup " . $service->getNagiosHostgroup()->getName();
	$sublinktitle = "Back To Hostgroup " . $service->getNagiosHostgroup()->getName();
	$sublink = "hostgroups.php?id=" . $service->getNagiosHostgroup()->getId() . "&section=services";
}

// Build subnav
$subnav = array(
	'general' => 'General',
	'inheritance' => 'Inheritance',
	'checks' => 'Checks',
	'flapping' => 'Flapping',
	'logging' => 'Logging',
	'notifications' => 'Notifications',
	'servicegroups' => 'Group Membership',
	'contacts' => 'Contacts',
	'extended' => 'Extended Information',
	'dependencies' => 'Dependencies',
	'escalations' => 'Escalations'
	);
if(isset($tempServiceTemplateInfo['check_command']) || isset($serviceValues['check_command'])) {
	$subnav['checkcommand'] = "Check Command Parameters";
}

print_header("Service Editor");

	print_window_header("Service Info for " . $service->getDescription() . $subtitle, "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		$service_icon_image = $path_config['image_root'] . "services.gif";
		if($_GET['section'] == 'general') {

			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					?>
					<form name="service_manage" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
					<input type="hidden" name="request" value="service_template_modify_general" />
					<input type="hidden" name="service_template_id" value="<?php echo $_GET['id'];?>">
					<b>Description:</b><br />
					<input type="text" size="80" name="service_manage[service_description]" value="<?php echo $service->getDescription();?>">
					<?php echo $lilac->element_desc("service_description", "nagios_service_template_desc"); ?><br />
					<br />
                    <b>Display Name: (Optional)</b><br />
                    <input type="text" size="80" name="service_manage[display_name]" value="<?php echo $service->getDisplayName();?>"><br />
                    <?php echo $lilac->element_desc("display_name", "nagios_service_template_desc"); ?><br />
                    <br />
                    <br />
					<input class="btn btn-primary" type="submit" value="Update General" /> <a class="btn btn-default" href="service.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Description:</b> <?php echo $service->getDescription();?><br />
                    <?php
                    $displayName = $service->getDisplayName();
                    if(!empty($displayName)) {
                     ?>
                      <b>Display Name:</b> <?php echo $service->getDisplayName();?><br />
                     <?php
                    }
                    ?>
					<br />
					<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'inheritance') {
			$templateInheritances = $service->getNagiosServiceTemplateInheritances();
			
			$numOfTemplates = count($templateInheritances);
			$exclude_list = array();
			if($numOfTemplates) {
				foreach($templateInheritances as $template) {
					$exclude_list[] = $template->getId();
				}
			}
			
                        $c=new Criteria();
                        $c->addAscendingOrderByColumn(NagiosServiceTemplatePeer::NAME);
                        $templateList = NagiosServiceTemplatePeer::doSelect($c);
			
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="4">Service Templates To Inherit From (Top to Bottom):</td>
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
						<td height="20" width="80" class="altLeft"><?php if($numOfTemplates > 1 && $counter > 0) { ?><a class="btn btn-primary btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=moveup&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Up</a><?php }?></td>
						<td height="20" width="100" class="altLeft"><?php if($numOfTemplates > 1 && $counter < ($numOfTemplates -1)) { ?><a class="btn btn-primary btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=movedown&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Down</a><?php }?></td>
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=delete&template_id=<?php echo $templateInheritances[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $templateInheritances[$counter]->getName();?></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="template_add" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=inheritance">
				<input type="hidden" name="request" value="add_template_command" />
				<b>Add Template To Inherit From:</b> <?php
				if(!count($templateList)) {
					?><strong>No Service Templates Available</strong><br /><?php
				}
				else {
					print_object_select("servicemanage[template_add][template_id]", $templateList, "getId", "getName", NULL, true, $exclude_list);?> <input class="btn btn-primary" type="submit" value="Add Template"><br /><?php
				}
					?>
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		if($_GET['section'] == 'checks') {
			$cmdObj = $service->getInheritedCommandWithParameters();
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing checks information
					$lilac->return_command_list($check_command_list);					
					?>
					<form name="service_manage" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">
					<input type="hidden" name="request" value="service_template_modify_checks" />
					<input type="hidden" name="service_template_id" value="<?php echo $_GET['id'];?>">
					<?php 
					double_pane_form_window_start();
					form_select_element_with_enabler($initialState_list, "value", "label", "service_manage", "initial_state", "Initial State", $lilac->element_desc("initial_state", "nagios_services_desc"), $serviceValues, $_GET['id']);

					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "is_volatile", "Is Volatile", $lilac->element_desc("is_volatile", "nagios_services_desc"), $serviceValues, $_GET['id']);

					form_select_element_with_enabler($command_list, "command_id", "command_name", "service_manage", "check_command", "Check Command", $lilac->element_desc("check_command", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(4, 4, "service_manage", "max_check_attempts", "Maximum Check Attempts", $lilac->element_desc("max_check_attempts", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "service_manage", "normal_check_interval", "Normal Check Interval In Time-Units", $lilac->element_desc("normal_check_interval", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "service_manage", "retry_interval", "Retry Interval In Time-Units", $lilac->element_desc("retry_check_interval", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "service_manage", "first_notification_delay", "First Notification Delay", $lilac->element_desc("first_notification_delay", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "active_checks_enabled", "Active Checks", $lilac->element_desc("active_checks_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "passive_checks_enabled", "Passive Checks", $lilac->element_desc("passive_checks_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "service_manage", "check_period", "Check Period", $lilac->element_desc("check_period", "nagios_services_desc"), $serviceValues, $_GET['id']);					
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "parallelize_check", "Parallelize Check", $lilac->element_desc("parallelize_check", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "obsess_over_service", "Obsess Over Service", $lilac->element_desc("obsess_over_service", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "check_freshness", "Check Freshness", $lilac->element_desc("check_freshness", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "service_manage", "freshness_threshold", "Freshness Threshold", $lilac->element_desc("freshness_threshold", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "event_handler_enabled", "Event Handler", $lilac->element_desc("event_handler_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($command_list, "command_id", "command_name", "service_manage", "event_handler", "Event Handler Command", $lilac->element_desc("event_handler", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "failure_prediction_enabled", "Failure Prediction Enabled", $lilac->element_desc("failure_prediction_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					double_pane_form_window_finish();
					?>					
					<br />
					<input class="btn btn-primary" type="submit" value="Update Checks" /> <a class="btn btn-default" href="service.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Included in Definition:</b><br />
					<?php
					print_service_initialstate_display_field("Initial State", $serviceValues, "initial_state", $_GET['id']);
					print_enabled_display_field("Is Volatile", $serviceValues, "is_volatile", $_GET['id'], "Volatile", "Not Volatile");
					print_cmd_obj_display_field("Check Command", $cmdObj);
					print_display_field("Maximum Check Attempts", $serviceValues, "max_check_attempts", $_GET['id']);
					print_display_field("Normal Check Interval", $serviceValues, "normal_check_interval", $_GET['id']);
					print_display_field("Retry Interval", $serviceValues, "retry_interval", $_GET['id']);
					print_display_field("First Notification Delay", $serviceValues, "first_notification_delay", $_GET['id']);
					print_enabled_display_field("Active Checks", $serviceValues, "active_checks_enabled", $_GET['id']);
					print_enabled_display_field("Passive Checks", $serviceValues, "passive_checks_enabled", $_GET['id']);
					print_timeperiod_display_field("Check Period", $serviceValues, "check_period", $_GET['id']);
					print_enabled_display_field("Parallize Checks", $serviceValues, "parallelize_check", $_GET['id']);
					print_enabled_display_field("Obsess Over Service", $serviceValues, "obsess_over_service", $_GET['id']);
					print_enabled_display_field("Check Freshness", $serviceValues, "check_freshness", $_GET['id']);
					print_display_field("Freshness Threshold", $serviceValues, "freshness_threshold", $_GET['id']);
					print_enabled_display_field("Event Handler", $serviceValues, "event_handler_enabled", $_GET['id']);
					print_command_display_field("Event Handler Command", $serviceValues, "event_handler", $_GET['id']);
					print_enabled_display_field("Failure Prediction", $serviceValues, "failure_prediction_enabled", $_GET['id']);
					?>
					<br />
					<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">Edit</a>
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
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_ok", 'label' => "Ok");
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_warning", 'label' => "Warning");
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_unknown", 'label' => "Unknown");
					$flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_critical", 'label' => "Critical");
					?>
					<form name="service_manage" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">
					<input type="hidden" name="request" value="service_template_modify_flapping" />
					<input type="hidden" name="service_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "flap_detection_enabled", "Flap Detection", $lilac->element_desc("flap_detection_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_checkbox_group_with_enabler($flap_detection_options_checkbox_group, "service_manage", "flap_detection_options", "Flap Detection Options", $lilac->element_desc("flap_detection_options", "nagios_services_desc"), $serviceValues, $_GET['id']);

					form_text_element_with_enabler(4, 4, "service_manage", "low_flap_threshold", "Low Flap Threshold", $lilac->element_desc("low_flap_threshold", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(4, 4, "service_manage", "high_flap_threshold", "High Flap Threshold", $lilac->element_desc("high_flap_threshold", "nagios_services_desc"), $serviceValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<input class="btn btn-primary" type="submit" value="Update Flapping" /> <a class="btn btn-default" href="service.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Included in Definition:</b><br />
					<?php
					print_enabled_display_field("Flap Detection", $serviceValues, "flap_detection_enabled", $_GET['id']);
					if($service->getFlapDetectionOnOk() !== null) {
						$values = array();
						if($service->getFlapDetectionOnOk()) $values[] = "Ok";
						if($service->getFlapDetectionOnWarning()) $values[] = "Warning";
						if($service->getFlapDetectionOnUnknown()) $values[] = "Unknown";
						if($service->getFlapDetectionOnCritical()) $values[] = "Critical";
						if(count($values)) {
							print("<b>Flap Detection On:</b> ". implode(",", $values));
							print("<br />");
						}
					}
					else if(isset($serviceValues['flap_detection_on_ok'])) {
						$values = array();
						if($serviceValues['flap_detection_on_ok']['value']) $values[] = "Ok";
						if($serviceValues['flap_detection_on_warning']['value']) $values[] = "Warning";
						if($serviceValues['flap_detection_on_unknown']['value']) $values[] = "Unknown";
						if($serviceValues['flap_detection_on_critical']['value']) $values[] = "Critical";
						if(count($values)) {
							print("<b>Flap Detection On:</b> ". implode(",", $values));
							print("<b> - Inherited From: </b><i>".$serviceValues['flap_detection_on_ok']['source']['name']."</i>");
							print("<br />");
						}
	
					}

					print_display_field("Low Flap Threshold", $serviceValues, "low_flap_threshold", $_GET['id']);
					print_display_field("High Flap Threshold", $serviceValues, "high_flap_threshold", $_GET['id']);			
					?>
					<br />
					<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">Edit</a>
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
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					?>
					<form name="service_manage" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">
					<input type="hidden" name="request" value="service_template_modify_logging" />
					<input type="hidden" name="service_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "process_perf_data", "Process Performance Data", $lilac->element_desc("process_perf_data", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "retain_status_information", "Retain Status Information", $lilac->element_desc("retain_status_information", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "retain_nonstatus_information", "Retain Non-Status Information", $lilac->element_desc("retain_nonstatus_information", "nagios_services_desc"), $serviceValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<input class="btn btn-primary" type="submit" value="Update Logging" /> <a class="btn btn-default" href="service.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Included in Definition:</b><br />
					<?php
					print_enabled_display_field("Process Performance Data", $serviceValues, "process_perf_data", $_GET['id']);
					print_enabled_display_field("Retain Status Information", $serviceValues, "retain_status_information", $_GET['id']);
					print_enabled_display_field("Retain Non-Status Information", $serviceValues, "retain_nonstatus_information", $_GET['id']);				
					?>
					<br />
					<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">Edit</a>
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
				<img src="<?php echo $service_icon_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information
					$notification_options_checkbox_group[] = array('field' => "notification_on_warning", 'label' => "Warning");
					$notification_options_checkbox_group[] = array('field' => "notification_on_unknown", 'label' => "Unknown");
					$notification_options_checkbox_group[] = array('field' => "notification_on_critical", 'label' => "Critical");
					$notification_options_checkbox_group[] = array('field' => "notification_on_recovery", 'label' => "Recovery");
					$notification_options_checkbox_group[] = array('field' => "notification_on_flapping", 'label' => "Flapping");
					$notification_options_checkbox_group[] = array('field' => "notification_on_scheduled_downtime", 'label' => "Scheduled Downtime");
								
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_ok", 'label' => "Ok");
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_warning", 'label' => "Warning");
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_unknown", 'label' => "Unknown");
					$stalking_options_checkbox_group[] =  array('field' => "stalking_on_critical", 'label' => "Critical");
					?>
					<form name="service_manage" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">
					<input type="hidden" name="request" value="service_template_modify_notifications" />
					<input type="hidden" name="service_template_id" value="<?php echo $_GET['id'];?>">
					<?php
					double_pane_form_window_start();
					
					form_select_element_with_enabler($enable_list, "values", "text", "service_manage", "notifications_enabled", "Notifications", $lilac->element_desc("notifications_enabled", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_text_element_with_enabler(8, 8, "service_manage", "notification_interval", "Notification Interval in Time-Units", $lilac->element_desc("notification_interval", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "service_manage", "notification_period", "Notification Period", $lilac->element_desc("notification_period", "nagios_services_desc"), $serviceValues, $_GET['id']);					
					form_checkbox_group_with_enabler($notification_options_checkbox_group, "service_manage", "notification_options", "Notification Options", $lilac->element_desc("notification_options", "nagios_services_desc"), $serviceValues, $_GET['id']);
					form_checkbox_group_with_enabler($stalking_options_checkbox_group, "service_manage", "stalking_options", "Stalking Options", $lilac->element_desc("stalking_options", "nagios_services_desc"), $serviceValues, $_GET['id']);
					double_pane_form_window_finish();
					?>
					<br />
					<input class="btn btn-primary" type="submit" value="Update Notifications" /> <a class="btn btn-default" href="service.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Included in Definition:</b><br />
					<?php
					print_enabled_display_field("Notifications", $serviceValues, "notifications_enabled", $_GET['id']);
					print_display_field("Notification Interval", $serviceValues, "notification_interval", $_GET['id']);
					print_timeperiod_display_field("Notification Period", $serviceValues, "notification_period", $_GET['id']);			
					if($service->getNotificationOnWarning() !== null) {
						?>
						<b>Notification On:</b>
						<?php
						if($service->getNotificationOnWarning() != null&& !$service->getNotificationOnUnknown() && !$service->getNotificationOnCritical() && !$service->getNotificationOnRecovery() && !$service->getNotificationOnFlapping() && !$service->getNotificationOnScheduledDowntime()) {
							print("None");
						}
						else {
                            $values = array();
                            if($service->getNotificationOnWarning()) $values[] = "Warning";
                            if($service->getNotificationOnUnknown()) $values[] = "Unknown";
                            if($service->getNotificationOnCritical()) $values[] = "Critical";
                            if($service->getNotificationOnRecovery()) $values[] = "Recovery";
                            if($service->getNotificationOnFlapping()) $values[] = "Flapping";
                            if($service->getNotificationOnScheduledDowntime()) $values[] = "Scheduled Downtime";
                            print(implode(",", $values));
                        }
                        print("<br />");
					}
					elseif(isset($serviceValues['notification_on_warning'])) {
						?>
						<b>Notification On:</b>
						<?php
						if(!$serviceValues['notification_on_warning']['value'] && !$serviceValues['notification_on_unknown']['value'] && !$serviceValues['notification_on_critical']['value'] && !$serviceValues['notification_on_recovery']['value'] && !$serviceValues['notification_on_flapping']['value'] && !$serviceValues['notification_on_scheduled_dowtime']['value']) {
							print("None");
						}
						else {
                            $values = array();
                            if($serviceValues['notification_on_warning']['value']) $values[] = "Warning";
                            if($serviceValues['notification_on_unknown']['value']) $values[] = "Unknown";
                            if($serviceValues['notification_on_critical']['value']) $values[] = "Critical";
                            if($serviceValues['notification_on_recovery']['value']) $values[] = "Recovery";
                            if($serviceValues['notification_on_flapping']['value']) $values[] = "Flapping";
                            if($serviceValues['notification_on_scheduled_downtime']['value']) $values[] = "Scheduled Downtime";
                            print(implode(",", $values));
   						}
						print("<b> - Inherited From: </b><i>".$serviceValues['notification_on_warning']['source']['name']."</i>");
						print("<br />");
					}
					if($service->getStalkingOnOk() !== null) {
						?>
						<b>Stalking On:</b> 
						<?php
						if($service->getStalkingOnOk() || $service->getStalkingOnWarning() || $service->getStalkingOnUnknown() || $service->getStalkingOnCritical()) {
								if($service->getStalkingOnOk()) {
									print("Ok");
									if($service->getStalkingOnWarning() || $service->getStalkingOnUnknown() || $service->getStalkingOnCritical())
										print(",");
								}
								if($service->getStalkingOnWarning()) {
									print("Warning");
									if($service->getStalkingOnUnknown() || $service->getStalkingOnCritical())
										print(",");
								}
								if($service->getStalkingOnUnknown()) {
									print("Unknown");
									if($service->getStalkingOnCritical())
										print(",");
								}
								if($service->getStalkingOnCritical()) {
									print("Critical");
								}
						}
						else {
							print("None");
						}
						print("<br />");
					}
					elseif(isset($serviceValues['stalking_on_ok'])) {
						?>
						<b>Stalking On:</b> 
						<?php
						if($serviceValues['stalking_on_ok']['value'] || $serviceValues['stalking_on_warning']['value'] || $serviceValues['stalking_on_unknown']['value'] || $serviceValues['stalking_on_critical']['value']) {
								if($serviceValues['stalking_on_ok']['value']) {
									print("Ok");
									if($serviceValues['stalking_on_warning']['value'] || $serviceValues['stalking_on_unknown']['value'] || $serviceValues['stalking_on_critical']['value'])
										print(",");
								}
								if($serviceValues['stalking_on_warning']['value']) {
									print("Warning");
									if($serviceValues['stalking_on_unknown']['value'] || $serviceValues['stalking_on_critical']['value'])
										print(",");
								}
								if($serviceValues['stalking_on_unknown']['value']) {
									print("Unknown");
									if($serviceValues['stalking_on_critical']['value'])
										print(",");
								}
								if($serviceValues['stalking_on_critical']['value']) {
									print("Critical");
								}
						}
						else {
							print("None");
						}
						print("<b> - Inherited From: </b><i>".$serviceValues['stalking_on_ok']['source']['name']."</i>");
						print("<br />");
					}					
					?>
					<br />
					<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == "checkcommand") {
			$inherited_list = $service->getInheritedCommandParameters();
			$numOfInheritedCommandParameters = count($inherited_list);
			// Get List Of Parameters for this service and check
			$lilac->get_service_check_command_parameters($_GET['id'], $checkCommandParameters);
			$numOfCheckCommandParameters = count($checkCommandParameters);

			// Get command description
			$cmdObj = $service->getInheritedCommandWithParameters();
			?>
                        	<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
                        	<tr class="altTop">
	                        <td colspan="2">Command Description:</td>
        	                </tr>
				<tr class="altRow2">
				<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
				<td height="20" class="altRight"><?php echo $cmdObj['command']['command']->getDescription();?></td>
                                </tr>
				</table>
				<br><br>
			<?php
			// END Get command description
			
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
						if($numOfInheritedCommandParameters) {
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
								<td height="20" class="altRight"><b>$ARG<?php echo ++$parameterCounter;?>$:</b> <?php echo $parameter['parameter'];?></td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=checkcommand&request=delete&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete</a></td>
				<form name="set_check_command_paramter<?php echo ++$parameterCounter;?>" method="post" action="service.php?section=checkcommand&id=<?php echo $_GET['id'];?>&request=update&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>">
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
			<form name="add_check_command_paramter" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=checkcommand">
			<input type="hidden" name="request" value="command_parameter_add" />
			Value for $ARG<?php echo ($parameterCounter+1);?>$: <input type="text" name="service_manage[parameter]" /> <input class="btn btn-primary" type="submit" value="Add Parameter" />
			</form>
			</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'extended') {
			$tempDir = array();
			$directory_list[] = array("value" => '', "text" => 'None');
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
				<td valign="top"><?php
			if(isset($_GET['edit'])) {
				?>
				<form name="service_manage" action="service.php?id=<?php echo $_GET['id'];?>&section=extended" method="post">
				<input type="hidden" name="request" value="update_service_extended" />
				<input type="hidden" name="service_manage[service_template_id]" value="<?php echo $_GET['id'];?>">
				<?php
				double_pane_form_window_start();
				form_text_element_with_enabler(60, 255, "service_manage", "notes", "Notes", $lilac->element_desc("notes", "nagios_services_extended_info_desc"), $serviceValues, $_GET['id']);
				form_text_element_with_enabler(60, 255, "service_manage", "notes_url", "Notes URL", $lilac->element_desc("notes_url", "nagios_services_extended_info_desc"), $serviceValues, $_GET['id']);
				form_text_element_with_enabler(60, 255, "service_manage", "action_url", "Action URL", $lilac->element_desc("action_url", "nagios_services_extended_info_desc"), $serviceValues, $_GET['id']);
				form_select_element_with_enabler($directory_list, "value", "text", "service_manage", "icon_image", "Icon Image", $lilac->element_desc("icon_image", "nagios_services_extended_info_desc"), $serviceValues, $_GET['id']);				
				form_text_element_with_enabler(60, 255, "service_manage", "icon_image_alt", "Icon Image Alt Text", $lilac->element_desc("icon_image_alt", "nagios_services_extended_info_desc"), $serviceValues, $_GET['id']);
				double_pane_form_window_finish();
				?>
				<br />
				<input class="btn btn-primary" type="submit" value="Update Extended Information" /> <a href="service.php?id=<?php echo $_GET['id'];?>&section=extended">Cancel</a>
				</form>
				<?php
			} else {
				print "<b>Included in definition:</b><br />\n";
				print_display_field("Notes", $serviceValues, "notes", $_GET['id']);
				print_display_field("Notes URL", $serviceValues, "notes_url", $_GET['id']);
				print_display_field("Action URL", $serviceValues, "action_url", $_GET['id']);
				print_display_field("Icon Image", $serviceValues, "icon_image", $_GET['id']);
				print_display_field("Icon Image Alt Text", $serviceValues, "icon_image_alt", $_GET['id']);
				?>
				<br />
				<a class="btn btn-primary" href="service.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">Edit</a>
				<?php
			}
			?>
				</td>
			</tr>
			</table>
			<?php
		}		
		else if($_GET['section'] == 'contacts') {
			$inherited_list = $service->getInheritedContacts();
			$numOfInheritedContacts = count($inherited_list);

			$contacts_list = $service->getNagiosServiceContactMembers();

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
							<td colspan="2">Contacts Explicitly Linked to This Service:</td>
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contact_id=<?php echo $contacts_list[$counter]->getNagiosContact()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
				<form name="service_template_contact_add" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contact_command" />
				<b>Add New Contact:</b> <?php
			   if(!count($contacts_list)) {
			   ?><strong>No Contacts Available</strong><br /><?php
			   }
			   else {
		   		   print_select("service_manage[contact_add][contact_id]", $contacts_list, "contact_id", "contact_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact"><br /><?php
			   }
				?>
				<?php echo $lilac->element_desc("contact_groups", "nagios_hosts_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php

			$inherited_list = $service->getInheritedContactGroups();
			$numOfInheritedGroups = count($inherited_list);

			$c = new Criteria();
			$c->add(NagiosServiceContactGroupMemberPeer::SERVICE, $_GET['id']);
			$contactgroups_list = NagiosServiceContactGroupMemberPeer::doSelect($c);
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
							<td colspan="2">Contact Groups Explicitly Linked to This Service Template:</td>
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contactgroup_id=<?php echo $contactgroups_list[$counter]->getNagiosContactgroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
				<form name="service_template_contactgroup_add" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contactgroup_command" />
				<b>Add New Contact Group:</b> <?php
			   if(!count($contactgroups_list)) {
			   ?><strong>No Contact Groups Available</strong><br /><?php
			   }
			   else {
		   		   print_select("contactgroup_id", $contactgroups_list, "contactgroup_id", "contactgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact Group"><br /><?php
			   }
				?>
				<?php echo $lilac->element_desc("contact_groups", "nagios_services_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php

		}
		else if($_GET['section'] == 'servicegroups') {
			$inherited_list = $service->getInheritedServiceGroups();
			$numOfInheritedGroups = count($inherited_list);
			

			$c = new Criteria();
			$c->add(NagiosServiceGroupMemberPeer::SERVICE, $service->getId());
			$servicegroups_list = NagiosServiceGroupMemberPeer::doSelect($c);
			$numOfServiceGroups = count($servicegroups_list);
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
								<td colspan="2">Service Groups Inherited By Templates:</td>
								</tr>
								<?php
								if(count($inherited_list)) {
									$counter = 1;
									foreach($inherited_list as $servicegroup) {
										
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
										<td height="20" class="altRight"><b><?php echo $servicegroup->getName();?>:</b> <?php echo $servicegroup->getAlias();?></td>
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
							<td colspan="2">Service Groups Explicitly Linked to This Service Template:</td>
							</tr>
							<?php
							for($counter = 0; $counter < $numOfServiceGroups; $counter++) {
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=servicegroups&request=delete&servicegroup_id=<?php echo $servicegroups_list[$counter]->getNagiosServiceGroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
								<td height="20" class="altRight"><b><?php echo $servicegroups_list[$counter]->getNagiosServiceGroup()->getName();?>:</b> <?php echo $servicegroups_list[$counter]->getNagiosServiceGroup()->getAlias();?></td>
								</tr>
								<?php
							}
							?>
						</table>
				<?php	
				$servicegroups_list = array();
				$lilac->get_servicegroup_list( $tempList); 
				foreach($tempList as $tempServiceGroup) {
					$servicegroups_list[] = array('servicegroup_id' => $tempServiceGroup->getId(), 'servicegroup_name' => $tempServiceGroup->getName());
				}
				?>
				<br />
				<br />
				<form name="service_template_servicegroup_add" method="post" action="service.php?id=<?php echo $_GET['id'];?>&section=servicegroups">
				<input type="hidden" name="request" value="add_servicegroup_command" />
				<b>Add New Service Group:</b> <?php
				if(!count($servicegroups_list)) {
					?><strong>No Service Groups Available</strong><br /><?php
				}
				else {
					print_select("servicegroup_id", $servicegroups_list, "servicegroup_id", "servicegroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Service Group"><br /><?php
				}
				?>
				<?php echo $lilac->element_desc("service_groups", "nagios_services_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
			
		}
		else if($_GET['section'] == 'dependencies') {
			$inherited_list = $service->getInheritedDependencies();
			$numOfInheritedDepdendencies = count($inherited_list);

			$dependencies_list = $service->getNagiosDependencys();
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
										<td height="20" class="altRight"><b><?php echo $dependency->getName();?></td>
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
							<td colspan="2">Depdendencies Explicitly Linked to This Service Template:</td>
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
									<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=dependencies&request=delete&dependency_id=<?php echo $dependency->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
						<a class="btn btn-success" href="add_dependency.php?service_id=<?php echo $_GET['id'];?>">Create A New Service Dependency For This Service</a>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'escalations') {
			$inherited_list = $service->getInheritedEscalations();
			$numOfInheritedEscalations = count($inherited_list);
			
			$escalations_list = $service->getNagiosEscalations();
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
										<td height="20" class="altRight"><b><a href="escalation.php?id=<?php echo $escalation->getId();?>"><?php echo $escalation->getDescription();?></a></b></td>
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
							<td colspan="2">Escalations Explicitly Linked to This Service Template:</td>
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
									<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="service.php?id=<?php echo $_GET['id'];?>&section=escalations&request=delete&escalation_id=<?php echo $escalation->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
						<a class="btn btn-success" href="add_escalation.php?service_id=<?php echo $_GET['id'];?>">Create A New Escalation For This Template</a>
				</td>
			</tr>
			</table>
			<?php
		}
		?>
		<br />
		<a class="sublink" href="<?php echo $sublink;?>"><?php echo $sublinktitle;?></a>
		<?php
		print_window_footer();
		?>
		<br />
	<?php

print_footer();
?>
