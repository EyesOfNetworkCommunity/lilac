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
	Filename:	hosts.php
*/
include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("Host");

// AJAX behavior
if(isset($_GET['request']) && $_GET['request'] == "search") {
	$results = array();
	switch($_GET['type']) {
		case 'host':
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $_GET['q']."%", Criteria::LIKE);
			$c->setIgnoreCase(true);
			$results = NagiosHostPeer::doSelect($c);
			break;
		case 'hostgroup':
			$c = new Criteria();
			$c->add(NagiosHostgroupPeer::NAME, $_GET['q']."%", Criteria::LIKE);
			$c->setIgnoreCase(true);
			$results = NagiosHostgroupPeer::doSelect($c);
      break;
		case 'hosttemplate':
      $c = new Criteria();
      $c->add(NagiosHostTemplatePeer::NAME, $_GET['q']."%", Criteria::LIKE);
      $c->setIgnoreCase(true);
      $results = NagiosHostTemplatePeer::doSelect($c);
      break;
		case 'service':
			// Get the host
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $_GET['host']);
			$c->setIgnoreCase(true);
			$host = NagiosHostPeer::doSelectOne($c);
			$returnObj = array();
			if(!$host) {
				$returnObj['error'] = "Host " . $_GET['host'] . " not found.";
				print(json_encode($returnObj));
				exit();
			}
			else {
				$returnObj['services'] = array();
				// Okay, let's get services.
				$services = $host->getNagiosServices();
				foreach($services as $service) {
					if(!in_array($service->getDescription(), $returnObj['services']))
					$returnObj['services'][] = $service->getDescription();
				}
				$inherited_services = $host->getInheritedServices();
				foreach($inherited_services as $service) {
					if(!in_array($service->getDescription(), $returnObj['services']))
					$returnObj['services'][] = $service->getDescription();
				}

				if(count($returnObj['services']) == 0) {
					$returnObj['error'] = "No services for that host.";
				}
				print(json_encode($returnObj));
				exit();
			}

	}

	foreach($results as $result) {
		print($result->getName() . "\n");
	}	
	exit();
}


if(!isset($_GET['section']))
	$_GET['section'] = 'general';

function build_navbar($host_id, &$navbar) {
	global $path_config;
	global $sys_config;
	global $lilac;
	$tempID = $host_id;
	$tempNavBar = '';
	while($tempID <> 0) {	// If anything other than the network object
		$host = NagiosHostPeer::retrieveByPK($tempID);
		$tempNavBar = "<a href=\"hosts.php?id=".$tempID."\">".$host->getName() ."</a> > " . $tempNavBar;
		$tempID = $host->getParentHost();
	}
	$tempNavBar = $tempNavBar;
	$navbar = $tempNavBar;
}

if(isset($_GET['id'])) {
	// Load template.
	$host = NagiosHostPeer::retrieveByPK($_GET['id']);
	if(!$host) {
		header("Location: hosts.php");
		die();
	}
	else {
		// GET VALUES
		$hostValues = $host->getValues();

	}
}

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'groups') {
			$c = new Criteria();
			$c->add(NagiosHostgroupMembershipPeer::HOST, $_GET['id']);
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
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			if(!$host->delete()) {
				$error = "Unable to delete Host.  Something depends on it.";
			}
			else {
				$status_msg = "Deleted Host.";
				unset($_GET['request']);
				unset($_GET['id']);
			}
		}
		
		else if($_GET['request'] == "delete" && $_GET['section'] == 'inheritance') {
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $host->getId());
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
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $host->getId());
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
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $host->getId());
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
               $membership = NagiosHostContactgroupPeer::retrieveByPK($_GET['contactgroup_id']);
               if($membership) {
                    $membership->delete();
                    $success = "Contact Group Deleted";
               }			
			}
			else if(!empty($_GET['contact_id'])) {
				$c = new Criteria();
				$c->add(NagiosHostContactMemberPeer::HOST, $_GET['id']);
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
			unset($host);
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
   
		if($_GET['request'] == "delete" && $_GET['section'] == 'parents') {
			$c = new Criteria();
			$c->add(NagiosHostParentPeer::CHILD_HOST , $host->getId());
			$c->add(NagiosHostParentPeer::PARENT_HOST, $_GET['parent_id']);
			
			$parentRelationship = NagiosHostParentPeer::doSelectOne($c);
			if(!$parentRelationship) {
				$error = "That parent relationship was not found.";
			}
			else {
				$parentRelationship->delete();
				$success = "Parent relationship removed.";
			}
		}
		
		
}

if(isset($_POST['request'])) {
	$modifiedData = array();
	
	if(isset($_POST['host_manage']) && count($_POST['host_manage'])) {
		foreach( $_POST['host_manage'] as $key=>$value) {
			if( is_array( $value)) {
				$modifiedData[$key] = $value;
			} else {
				$modifiedData[$key] = (string)$value;
			}
		}
	}
	if($_POST['request'] == 'host_modify_general') {
		if($_POST['host_manage']['host_name'] != $host->getName() && $lilac->host_exists($_POST['host_manage']['host_name'])) {
			$error = "A host with that name already exists!";
		}
		else {
			// Field Error Checking
			if(count($host)) {
				foreach($host as $tempVariable)
					$tempVariable = trim($tempVariable);
			}
			if($_POST['host_manage']['host_name'] == '' || $_POST['host_manage']['alias'] == '' || $_POST['host_manage']['address'] == '') {
				$error = "Incorrect values for fields.  Please verify.";
			}
			// All is well for error checking, modify the host.
			else {
				$host->setName($_POST['host_manage']['host_name']);
				$host->setAlias($_POST['host_manage']['alias']);
				$host->setAddress($_POST['host_manage']['address']);
                                if ( isset($_POST['host_manage']['display_name']) ) {
                                        $tempVariable = trim($_POST['host_manage']['display_name']);
                                        if ( ! empty($tempVariable) ) {
                                                $host->setDisplayName($tempVariable);
                                        } else {
                                                $host->setDisplayName(null);
                                        }
                                } else {
                                        $host->setDisplayName(null);
                                }
				if(!empty($_POST['host_manage']['parents'])) {
					$host->setParentHost($parentHost->getId());
				}
				if($host->save()) {
					$success = "Host modified.";
					unset($_GET['edit']);
				}
				else {
					$error = "Error: modify_host failed.";
				}
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
			$templateList = $host->getNagiosHostTemplateInheritances();
			foreach($templateList as $tempTemplate) {
				if($tempTemplate->getId() == $_POST['hostmanage']['template_add']['template_id']) {
					$error = "That template already exists in the inheritance chain.";
				}
			}
			if(empty($error)) {
				$newInheritance = new NagiosHostTemplateInheritance();
				$newInheritance->setNagiosHost($host);
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
				$host->setInitialState($modifiedData['initial_state']);
			}
			else {
				$host->setInitialState(null);
			}
			if(isset($modifiedData['active_checks_enabled'])) {
				$host->setActiveChecksEnabled($modifiedData['active_checks_enabled']);	
			}
			else {
				$host->setActiveChecksEnabled(null);
			}
			if(isset($modifiedData['passive_checks_enabled'])) {
				$host->setPassiveChecksEnabled($modifiedData['passive_checks_enabled']);	
			}
			else {
				$host->setPassiveChecksEnabled(null);	
			}
			if(isset($modifiedData['check_period']) && $modifiedData['check_period'] != 0) {
				$host->setCheckPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['check_period'])->getId());
			}
			else {
				$host->setCheckPeriod(null);
			}
			if(isset($modifiedData['check_command']) && $modifiedData['check_command'] != 0) {
				$host->setCheckCommand(NagiosCommandPeer::retrieveByPK($modifiedData['check_command'])->getId());
			}
			else {
				$host->setCheckCommand(null);	
			}
			if(isset($modifiedData['max_check_attempts'])) {		
				$host->setMaximumCheckAttempts($modifiedData['max_check_attempts']);
			}
			else {
				$host->setMaximumCheckAttempts(null);	
			}
			if(isset($modifiedData['check_interval'])) {		
				$host->setCheckInterval($modifiedData['check_interval']);
			}
			else {
				$host->setCheckInterval(null);	
			}
			if(isset($modifiedData['retry_interval'])) {		
				$host->setRetryInterval($modifiedData['retry_interval']);
			}
			else {
				$host->setRetryInterval(null);	
			}
			if(isset($modifiedData['obsess_over_host'])) {		
				$host->setObsessOverHost($modifiedData['obsess_over_host']);
			}
			else {
				$host->setObsessOverHost(null);	
			}
			if(isset($modifiedData['check_freshness'])) {		
				$host->setCheckFreshness($modifiedData['check_freshness']);
			}
			else {
				$host->setCheckFreshness(null);	
			}
			if(isset($modifiedData['freshness_threshold'])) {		
				$host->setFreshnessThreshold($modifiedData['freshness_threshold']);
			}
			else {
				$host->setFreshnessThreshold(null);	
			}
			if(isset($modifiedData['event_handler']) && $modifiedData['event_handler'] !=0) {
				$host->setEventHandler(NagiosCommandPeer::retrieveByPK($modifiedData['event_handler'])->getId());
			}
			else {
				$host->setEventHandler(null);	
			}
			if(isset($modifiedData['event_handler_enabled'])) {
				$host->setEventHandlerEnabled($modifiedData['event_handler_enabled']);
			}
			else {
				$host->setEventHandlerEnabled(null);	
			}
			if(isset($modifiedData['failure_prediction_enabled'])) {		
				$host->setFailurePredictionEnabled($modifiedData['failure_prediction_enabled']);
			}
			else {
				$host->setFailurePredictionEnabled(null);	
			}
			$host->save();
			unset($_GET['edit']);
			$success = "Host modified";
		}
	}
	else if($_POST['request'] == 'host_modify_flapping') {
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
				$host->setFlapDetectionEnabled($modifiedData['flap_detection_enabled']);
			}
			else {
				$host->setFlapDetectionEnabled(null);	
			}
			if(!isset($_POST['host_manage_checkboxes']) || !isset($_POST['host_manage_checkboxes']['flap_detection_options'])) {
				$host->setFlapDetectionOnUp(null);
				$host->setFlapDetectionOnDown(null);
				$host->setFlapDetectionOnUnreachable(null);
			}
			else {
				if(isset($_POST['host_manage']['flap_detection_on_up'])) {
					$host->setFlapDetectionOnUp(true);
				}
				else {
					$host->setFlapDetectionOnUp(false);
				}
				if(isset($_POST['host_manage']['flap_detection_on_down'])) {
					$host->setFlapDetectionOnDown(true);
				}
				else {
					$host->setFlapDetectionOnDown(false);
				}
				if(isset($_POST['host_manage']['flap_detection_on_unreachable'])) {
					$host->setFlapDetectionOnUnreachable(true);
				}
				else {
					$host->setFlapDetectionOnUnreachable(false);
				}
			}
	    	if(isset($modifiedData['low_flap_threshold'])) {
				$host->setLowFlapThreshold($modifiedData['low_flap_threshold']);
			}
			else {
				$host->setLowFlapThreshold(null);	
			}
			if(isset($modifiedData['high_flap_threshold'])) {
				$host->setHighFlapThreshold($modifiedData['high_flap_threshold']);
			}
			else {
				$host->setHighFlapThreshold(null);	
			}
			$host->save();
			
			unset($modifiedData);
			$success = "Host modified.";
			unset($_GET['edit']);
		}
	}
	else if($_POST['request'] == 'host_modify_logging') {
		// Field Error Checking
		// None required for this process
		// All is well for error checking, modify the host template.
		if(isset($modifiedData['process_perf_data'])) {
			$host->setProcessPerfData($modifiedData['process_perf_data']);
		}
		else {
			$host->setProcessPerfData(null);	
		}
		if(isset($modifiedData['retain_status_information'])) {
			$host->setRetainStatusInformation($modifiedData['retain_status_information']);
		}
		else {
			$host->setRetainStatusInformation(null);	
		}
		if(isset($modifiedData['retain_nonstatus_information'])) {
			$host->setRetainNonstatusInformation($modifiedData['retain_nonstatus_information']);
		}
		else {
			$host->setRetainNonstatusInformation(null);	
		}
		$host->save();
		
		unset($modifiedData);
		$success = "Host modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'host_modify_notifications') {
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
				$host->setNotificationOnDown(null);
				$host->setNotificationOnUnreachable(null);
				$host->setNotificationOnRecovery(null);
				$host->setNotificationOnFlapping(null);
                $host->setNotificationOnScheduledDowntime(null);
			}
			else {
				if(isset($_POST['host_manage']['notification_on_down'])) {
					$host->setNotificationOnDown(true);
				}
				else {
					$host->setNotificationOnDown(false);
				}
				if(isset($_POST['host_manage']['notification_on_unreachable'])) {
					$host->setNotificationOnUnreachable(true);
				}
				else {
					$host->setNotificationOnUnreachable(false);
				}
				if(isset($_POST['host_manage']['notification_on_recovery'])) {
					$host->setNotificationOnRecovery(true);
				}
				else {
					$host->setNotificationOnRecovery(false);
				}
				if(isset($_POST['host_manage']['notification_on_flapping'])) {
					$host->setNotificationOnFlapping(true);
				}
				else {
					$host->setNotificationOnFlapping(false);
				}
				if(isset($_POST['host_manage']['notification_on_scheduled_downtime'])) {
					$host->setNotificationOnScheduledDowntime(true);
				}
				else {
					$host->setNotificationOnScheduledDowntime(false);
				}

			}
			if(!isset($_POST['host_manage_checkboxes']) || !isset($_POST['host_manage_checkboxes']['stalking_options'])) {
				$host->setStalkingOnUp(null);
				$host->setStalkingOnDown(null);
				$host->setStalkingOnUnreachable(null);
			}
			else {
				if(isset($_POST['host_manage']['stalking_on_up'])) {
					$host->setStalkingOnUp(true);
				}
				else {
					$host->setStalkingOnUp(false);
				}
				if(isset($_POST['host_manage']['stalking_on_down'])) {
					$host->setStalkingOnDown(true);
				}
				else {
					$host->setStalkingOnDown(false);
				}
				if(isset($_POST['host_manage']['stalking_on_unreachable'])) {
					$host->setStalkingOnUnreachable(true);
				}
				else {
					$host->setStalkingOnUnreachable(false);
				}
			}
			if(isset($modifiedData['first_notification_delay'])) {
				$host->setFirstNotificationDelay($modifiedData['first_notification_delay']);
			}
			else {
				$host->setFirstNotificationDelay(null);	
			}
			if(isset($modifiedData['notifications_enabled'])) {
				$host->setNotificationsEnabled($modifiedData['notifications_enabled']);
			}
			else {
				$host->setNotificationsEnabled(null);	
			}
			if(isset($modifiedData['notification_interval'])) {
				$host->setNotificationInterval($modifiedData['notification_interval']);
			}
			else {
				$host->setNotificationInterval(null);	
			}
			if(isset($modifiedData['notification_period'])) {
				$host->setNotificationPeriod(NagiosTimeperiodPeer::retrieveByPK($modifiedData['notification_period'])->getId());
			}
			else {
				$host->setNotificationPeriod(null);
			}			
			$host->save();
			
			// Remove session data
			unset($modifiedData);
			$success = "Host modified.";
			unset($_GET['edit']);
		}
	}	
	else if($_POST['request'] == 'add_member_command') {
		$c = new Criteria();
		$c->add(NagiosHostgroupMembershipPeer::HOST, $_GET['id']);
		$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $modifiedData['hostgroup_id']);
		$tempMembership = NagiosHostgroupMembershipPeer::doSelectOne($c);		
		if($tempMembership) {
			$error = "That host group already exists in that list!";
		}
		else {
			$membership = new NagiosHostgroupMembership();
			$membership->setNagiosHost($host);
			$membership->setHostgroup($modifiedData['hostgroup_id']);
			$membership->save();
			$success = "Host Added To Host Group.";
			unset($modifiedData);
		}
	}
	else if($_POST['request'] == 'command_parameter_add') {
		// All is well for error checking, modify the command.
		$lilac->add_host_command_parameter($_GET['id'], $modifiedData);
		// Remove session data
		unset($host);
		$success = "Command Parameter added.";
	}
	if($_POST['request'] == 'update_host_extended') {
		// We properly got an host.	
		if(isset($modifiedData['notes'])) {
			$host->setNotes($modifiedData['notes']);
		}
		else {
			$host->setNotes(null);	
		}
		if(isset($modifiedData['notes_url'])) {
			$host->setNotesUrl($modifiedData['notes_url']);
		}
		else {
			$host->setNotesUrl(null);	
		}
		if(isset($modifiedData['action_url'])) {
			$host->setActionUrl($modifiedData['action_url']);
		}
		else {
			$host->setActionUrl(null);	
		}
		if(isset($modifiedData['icon_image'])) {
			$host->setIconImage($modifiedData['icon_image']);
		}
		else {
			$host->setIconImage(null);	
		}
		if(isset($modifiedData['icon_image_alt'])) {
			$host->setIconImageAlt($modifiedData['icon_image_alt']);
		}
		else {
			$host->setIconImageAlt(null);	
		}
		if(isset($modifiedData['vrml_image'])) {
			$host->setVrmlImage($modifiedData['vrml_image']);
		}
		else {
			$host->setVrmlImage(null);	
		}
		if(isset($modifiedData['statusmap_image'])) {
			$host->setStatusmapImage($modifiedData['statusmap_image']);
		}
		else {
			$host->setStatusmapImage(null);	
		}
		if(isset($modifiedData['two_d_coords'])) {
			$host->setTwoDCoords($modifiedData['two_d_coords']);
		}
		else {
			$host->setTwoDCoords(null);	
		}
		if(isset($modifiedData['three_d_coords'])) {
			$host->setThreeDCoords($modifiedData['three_d_coords']);
		}
		else {
			$host->setThreeDCoords(null);	
		}
		$host->save();
		$success = "Updated Host Extended Information";
	}
	else if($_POST['request'] == 'add_contact_command') {
		$c = new Criteria();
		$c->add(NagiosHostContactMemberPeer::HOST, $_GET['id']);
		$c->add(NagiosHostContactMemberPeer::CONTACT, $_POST['host_manage']['contact_add']['contact_id']);
		$membership = NagiosHostContactMemberPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact already exists in that list!";
		}
		else {
			$tempContact = NagiosContactPeer::retrieveByPk($_POST['host_manage']['contact_add']['contact_id']);
			if($tempContact) {
				$membership = new NagiosHostContactMember();
				$membership->setHost($_GET['id']);
				$membership->setNagiosContact($tempContact);
				$membership->save();
				$success = "New Host Contact Link added.";				
			}
			else {
				$error = "That contact is not found.";
			}
		}
	}	

	else if($_POST['request'] == 'add_contactgroup_command') {
		$c = new Criteria();
		$c->add(NagiosHostContactgroupPeer::HOST, $_GET['id']);
		$c->add(NagiosHostContactgroupPeer::CONTACTGROUP, $_POST['host_manage']['contactgroup_add']['contactgroup_id']);
		$membership = NagiosHostContactgroupPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact group already exists in that list!";
		}
		else {
			$tempGroup = NagiosContactGroupPeer::retrieveByPk($_POST['host_manage']['contactgroup_add']['contactgroup_id']);
			if($tempGroup) {
				$membership = new NagiosHostContactgroup();
				$membership->setHost($_GET['id']);
				$membership->setNagiosContactGroup($tempGroup);
				$membership->save();
				$success = "New Host Contact Group Link added.";				
			}
		}
	}	
	else if($_POST['request'] == 'parent_add') {
		// Wants to add a parent
		$c = new Criteria();
		$c->add(NagiosHostPeer::NAME, $_POST['parenthost']);
		$c->setIgnoreCase(true);
		$parentHost = NagiosHostPeer::doSelectOne($c);
		if(!$parentHost) {
			$error = "The host named " . $_POST['parenthost'] . " was not found.";
		}
		elseif($_GET['id']==$parentHost->getId()){
			$error = "The host cannot be the parent.";
		}
		else {
			$tempParent = new NagiosHostParent();
			$tempParent->setChildHost($host->getId());
			$tempParent->setParentHost($parentHost->getId());
			$tempParent->save();
			$success = "Parent added";
		}
	}
}

if(isset($_GET['id'])) {
	// Load template.
	$host = NagiosHostPeer::retrieveByPK($_GET['id']);
	if(!$host) {
		header("Location: hosts.php");
		die();
	}
	else {
		// GET VALUES
		$hostValues = $host->getValues();

	}
}

if(isset($host)) {
	// We got successful host information
	// Load up the data required.
	print_header("Host Editor");
	build_navbar($_GET['id'], $navbar);
}
else {
	print_header("Host Browser");
	build_navbar(0, $navbar);
}


if(isset($host)) {
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

	// End creating select lists

	
	// Build subnav
	$subnav = array(
		'general' => 'General',
		'parents' => 'Parents',
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
		'escalations' => 'Escalations',
		);
		
	if(isset($hostValues['check_command'])) {
		$subnav['checkcommand'] = 'Check Command Parameters';
	}	
	
	print_window_header("Host Info for " . $host->getName(), "100%");
	print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
	$host_icon_image = $path_config['image_root'] . "server.gif";
	
	if($_GET['section'] == 'general') {
		?>
		<table width="100%" border="0">
		<tr>
			<td width="100" align="center" valign="top">
			<img src="<?php echo $host_icon_image;?>" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {	// We're editing general information
				?>
				<form name="host_manage" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
				<input type="hidden" name="request" value="host_modify_general" />
				<input type="hidden" name="host_id" value="<?php echo $_GET['id'];?>">
				<b>Host Name:</b><br />
				<input type="text" size="40" name="host_manage[host_name]" value="<?php echo $host->getName();?>">
				<?php echo $lilac->element_desc("host_name", "nagios_hosts_desc"); ?><br />
				<br />
				<b>Address:</b><br />
				<input type="text" size="40" name="host_manage[address]" value="<?php echo $host->getAddress();?>">
				<?php echo $lilac->element_desc("address", "nagios_hosts_desc"); ?><br />
				<br />
				<b>Description:</b><br />
				<input type="text" size="80" name="host_manage[alias]" value="<?php echo $host->getAlias();?>"><br />
				<br />
				<b>Display Name (Optional):</b><br />
				<input type="text" size="80" name="host_manage[display_name]" value="<?php echo $host->getDisplayName();?>">
			<?php echo $lilac->element_desc("display_name", "nagios_hosts_desc"); ?><br />
				<br />
				<input class="btn btn-primary" type="submit" value="Update General" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
				<?php
			}
			else {
				?>
				<b>Host Name:</b> <?php echo $host->getName();?><br />
				<b>Address:</b> <?php echo $host->getAddress();?><br />
				<b>Description:</b> <?php echo $host->getAlias();?><br />
				<?php
				$displayName = $host->getDisplayName();
				if(!empty($displayName)) {
					?>
					<b>Display Name:</b> <?php echo $host->getDisplayName();?><br />
					<?php
				}
				if(isset($host->tempHostInfo['use_template_id'])) {
					?>
					<b>Inherits From:</b> <?php echo $lilac->return_host_template_name($host->getTemplate());?><br />
					<?php
				}
				?>
				<br />
				<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
				<?php
			}
			?>
			</td>
		</tr>
		</table>
		<br />
		<a class="btn btn-danger" href="hosts.php?id=<?php echo $_GET['id'];?>&request=delete" onClick="javascript:return confirmDelete();">Delete This Host</a>
		<?php
	}
	if($_GET['section'] == 'inheritance') {
		$templateInheritances = $host->getNagiosHostTemplateInheritances();
		
		$numOfTemplates = count($templateInheritances);
		$exclude_list = array();
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
			<img src="<?php echo $host_icon_image;?>" />
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
					<td height="20" width="80" class="altLeft"><?php if($numOfTemplates > 1 && $counter > 0) { ?><a class="btn btn-primary btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=moveup&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Up</a><?php }?></td>
					<td height="20" width="100" class="altLeft"><?php if($numOfTemplates > 1 && $counter < ($numOfTemplates -1)) { ?><a class="btn btn-primary btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=movedown&template_id=<?php echo $templateInheritances[$counter]->getId();?>">Move Down</a><?php }?></td>
					<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=inheritance&request=delete&template_id=<?php echo $templateInheritances[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<td height="20" class="altRight"><b><?php echo $templateInheritances[$counter]->getName();?></b></td>
					</tr>
					<?php
				}
				?>
			</table>
			<br />
			<br />
			<form name="template_add" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=inheritance">
			<input type="hidden" name="request" value="add_template_command" />
			<b>Add Template To Inherit From:</b> <?php
			if(!count($templateList)) {
				?><strong>No Templates Available</strong><br /><?php
			}
			else {
				print_object_select("hostmanage[template_add][template_id]", $templateList, "getId", "getName", NULL, true, $exclude_list);?> <input class="btn btn-primary" type="submit" value="Add Template"><br /><?php
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
		$cmdObj = $host->getInheritedCommandWithParameters();
		?>
		<table width="100%" border="0">
		<tr>
			<td width="100" align="center" valign="top">
			<img src="<?php echo $host_icon_image;?>" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {	// We're editing checks information
				?>
				<form name="host_manage" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">
				<input type="hidden" name="request" value="host_template_modify_checks" />
				<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
				<?php 
				double_pane_form_window_start();

					form_select_element_with_enabler($initialState_list, "value", "label", "host_manage", "initial_state", "Initial State", $lilac->element_desc("initial_state", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "active_checks_enabled", "Active Checks", $lilac->element_desc("active_checks_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "passive_checks_enabled", "Passive Checks", $lilac->element_desc("passive_checks_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "host_manage", "check_period", "Check Period", $lilac->element_desc("check_period", "nagios_hosts_desc"), $hostValues, $_GET['id']);					
				form_select_element_with_enabler($command_list, "command_id", "command_name", "host_manage", "check_command", "Check Command", $lilac->element_desc("check_command", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(4, 4, "host_manage", "retry_interval", "Retry Interval", $lilac->element_desc("retry_interval", "nagios_hosts_desc"), $hostValues, $_GET['id']);

				form_text_element_with_enabler(4, 4, "host_manage", "max_check_attempts", "Maximum Check Attempts", $lilac->element_desc("max_check_attempts", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(8, 8, "host_manage", "check_interval", "Check Interval In Time-Units", $lilac->element_desc("check_interval", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "obsess_over_host", "Obsess Over Host", $lilac->element_desc("obsess_over_host", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "check_freshness", "Check Freshness", $lilac->element_desc("check_freshness", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(8, 8, "host_manage", "freshness_threshold", "Freshness Threshold in Seconds", $lilac->element_desc("freshness_threshold", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "event_handler_enabled", "Event Handler Enabled", $lilac->element_desc("event_handler_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($command_list, "command_id", "command_name", "host_manage", "event_handler", "Event Handler", $lilac->element_desc("event_handler", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "failure_prediction_enabled", "Failure Prediction", $lilac->element_desc("failure_prediction_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);					
				double_pane_form_window_finish();
				?>					
				<br />
				<input class="btn btn-primary" type="submit" value="Update Checks" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
				<?php
			}
			else {
				?>
				<b>Included In Definition:</b><br />
				<?php
				print_initialstate_display_field("Initial State", $hostValues, "initial_state", $_GET['id']);
				print_enabled_display_field("Active Checks", $hostValues, "active_checks_enabled", $_GET['id']);
				print_enabled_display_field("Passive Checks", $hostValues, "passive_checks_enabled", $_GET['id']);
				print_timeperiod_display_field("Check Period", $hostValues, "check_period", $_GET['id']);
				print_cmd_obj_display_field("Check Command", $cmdObj);
				print_display_field("Retry Interval", $hostValues, "retry_interval", $_GET['id']);
				print_display_field("Maximum Check Attempts", $hostValues, "max_check_attempts", $_GET['id']);
				print_display_field("Check Interval", $hostValues, "check_interval", $_GET['id']);
				print_enabled_display_field("Obsess Over Host", $hostValues, "obsess_over_host", $_GET['id']);
				print_enabled_display_field("Check Freshness", $hostValues, "check_freshness", $_GET['id']);
				print_display_field("Freshness Threshold", $hostValues, "freshness_threshold", $_GET['id']);
				print_command_display_field("Event Handler Command", $hostValues, "event_handler", $_GET['id']);
				print_enabled_display_field("Event Handler", $hostValues, "event_handler_enabled", $_GET['id']);
				print_enabled_display_field("Failure Prediction", $hostValues, "failure_prediction_enabled", $_GET['id']);
				?>
				<br />
				<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=checks&edit=1">Edit</a>
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
			<img src="<?php echo $host_icon_image;?>" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {	// We're editing general information
             $flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_up", 'label' => "Up");
             $flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_down", 'label' => "Down");
             $flap_detection_options_checkbox_group[] =  array('field' => "flap_detection_on_unreachable", 'label' => "Unreachable");
             ?>
				<form name="host_manage" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">
				<input type="hidden" name="request" value="host_modify_flapping" />
				<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
				<?php
				double_pane_form_window_start();
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "flap_detection_enabled", "Flap Detection", $lilac->element_desc("flap_detection_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_checkbox_group_with_enabler($flap_detection_options_checkbox_group, "host_manage", "flap_detection_options", "Flap Detection Options", $lilac->element_desc("flap_detection_options", "nagios_hosts_desc"), $hostValues, $_GET['id']);
	    		form_text_element_with_enabler(4, 4, "host_manage", "low_flap_threshold", "Low Flap Threshold", $lilac->element_desc("low_flap_threshold", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(4, 4, "host_manage", "high_flap_threshold", "High Flap Threshold", $lilac->element_desc("high_flap_threshold", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				double_pane_form_window_finish();
				?>
				<input class="btn btn-primary" type="submit" value="Update Flapping" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
				<?php
			}
			else {
				?>
				<h3>Included In Template:</h3>
				<?php
				print_enabled_display_field("Flap Detection", $hostValues, "flap_detection_enabled", $_GET['id']);
				if($host->getFlapDetectionOnUp() !== null) {
						?>
						<b>Flap Detection On:</b> 
						<?php
						if($host->getFlapDetectionOnUp() || $host->getFlapDetectionOnDown() || $host->getFlapDetectionOnUnreachable()) {
								if($host->getFlapDetectionOnUp()) {
									print("Up");
									if($host->getFlapDetectionOnDown() || $host->getFlapDetectionOnUnreachable())
										print(",");
								}
								if($host->getFlapDetectionOnDown()) {
									print("Down");
									if($host->getFlapDetectionOnUnreachable())
										print(",");
								}
								if($host->getFlapDetectionOnUnreachable()) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<br />");
					}
					elseif(isset($hostValues['flap_detection_on_up'])) {
						?>
						<b>Flap Detection On:</b> 
						<?php
						if($hostValues['flap_detection_on_up']['value'] || $hostValues['flap_detection_on_down']['value'] || $hostValues['flap_detection_on_unreachable']['value']) {
								if($hostValues['flap_detection_on_up']['value']) {
									print("Up");
									if($hostValues['flap_detection_on_down']['value'] || $hostValues['flap_detection_on_unreachable']['value'])
										print(",");
								}
								if($hostValues['flap_detection_on_down']['value']) {
									print("Down");
									if($hostValues['flap_detection_on_unreachable']['value'])
										print(",");
								}
								if($hostValues['flap_detection_on_unreachable']['value']) {
									print("Unreachable");
								}
						}
						else {
							print("None");
						}
						print("<b> - Inherited From: </b><i>".$hostValues['flap_detection_on_up']['source']['name']."</i>");
						print("<br />");
				}					
	    		print_display_field("Low Flap Threshold", $hostValues, "low_flap_threshold", $_GET['id']);
				print_display_field("High Flap Threshold", $hostValues, "high_flap_threshold", $_GET['id']);
				?>
				<br />
				<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=flapping&edit=1">Edit</a>
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
			<img src="<?php echo $host_icon_image;?>" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {	// We're editing general information
				?>
				<form name="host_manage" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">
				<input type="hidden" name="request" value="host_modify_logging" />
				<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
				<?php
				double_pane_form_window_start();
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "process_perf_data", "Process Performance Data", $lilac->element_desc("process_perf_data", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "retain_status_information", "Retain Status Information", $lilac->element_desc("retain_status_information", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "retain_nonstatus_information", "Retain Non-Status Information", $lilac->element_desc("retain_nonstatus_information", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				double_pane_form_window_finish();
				?>
				<input class="btn btn-primary" type="submit" value="Update Logging" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
				<?php
			}
			else {
				?>
				<h3>Included In Template:</h3>
				<?php
				print_enabled_display_field("Process Performance Data", $hostValues, "process_perf_data", $_GET['id']);
				print_enabled_display_field("Retain Status Information", $hostValues, "retain_status_information", $_GET['id']);
				print_enabled_display_field("Retain Non-Status Information", $hostValues, "retain_nonstatus_information", $_GET['id']);				
				?>
				<br />
				<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=logging&edit=1">Edit</a>
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
			<img src="<?php echo $host_icon_image;?>" />
			</td>
			<td valign="top">
			<?php
			if(isset($_GET['edit'])) {	// We're editing general information
				$notification_options_checkbox_group[] = array('field' => "notification_on_down", 'label' => "Down");
				$notification_options_checkbox_group[] = array('field' => "notification_on_unreachable", 'label' => "Unreachable");
				$notification_options_checkbox_group[] = array('field' => "notification_on_recovery", 'label' => "Recovery");
				$notification_options_checkbox_group[] = array('field' => "notification_on_flapping", 'label' => "Flapping");
				$notification_options_checkbox_group[] = array('field' => "notification_on_flapping", 'label' => "Flapping");
				$notification_options_checkbox_group[] = array('field' => "notification_on_scheduled_downtime", 'label' => "Scheduled Downtime");

				$stalking_options_checkbox_group[] =  array('field' => "stalking_on_up", 'label' => "Up");
				$stalking_options_checkbox_group[] =  array('field' => "stalking_on_down", 'label' => "Down");
				$stalking_options_checkbox_group[] =  array('field' => "stalking_on_unreachable", 'label' => "Unreachable");
				
				?>
				<form name="host_manage" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">
				<input type="hidden" name="request" value="host_modify_notifications" />
				<input type="hidden" name="host_template_id" value="<?php echo $_GET['id'];?>">
				<?php
				double_pane_form_window_start();
				form_select_element_with_enabler($enable_list, "values", "text", "host_manage", "notifications_enabled", "Notifications", $lilac->element_desc("notifications_enabled", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(4, 4, "host_manage", "first_notification_delay", "First Notification Delay", $lilac->element_desc("first_notification_delay", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_text_element_with_enabler(8, 8, "host_manage", "notification_interval", "Notification Interval in Time-Units", $lilac->element_desc("notification_interval", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_select_element_with_enabler($period_list, "timeperiod_id", "timeperiod_name", "host_manage", "notification_period", "Notification Period", $lilac->element_desc("notification_period", "nagios_hosts_desc"), $hostValues, $_GET['id']);					
				form_checkbox_group_with_enabler($notification_options_checkbox_group, "host_manage", "notification_options", "Notification Options", $lilac->element_desc("notification_options", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				form_checkbox_group_with_enabler($stalking_options_checkbox_group, "host_manage", "stalking_options", "Stalking Options", $lilac->element_desc("stalking_options", "nagios_hosts_desc"), $hostValues, $_GET['id']);
				double_pane_form_window_finish();
				?>
				<br />
				<input class="btn btn-primary" type="submit" value="Update Notifications" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
				<?php
			}
			else {
				?>
				<h3>Included In Template:</h3>
				<?php
				print_enabled_display_field("Notifications", $hostValues, "notifications_enabled", $_GET['id']);
				print_display_field("First Notification Delay", $hostValues, "first_notification_delay", $_GET['id']);
				print_display_field("Notification Interval", $hostValues, "notification_interval", $_GET['id']);
				print_timeperiod_display_field("Notification Period", $hostValues, "notification_period", $_GET['id']);
				if($host->getNotificationOnDown() !== null) {
					?>
					<b>Notification On:</b>
					<?php
					if(!$host->getNotificationOnDown() && !$host->getNotificationOnUnreachable() && !$host->getNotificationOnRecovery() && !$host->getNotificationOnFlapping()) {
						print("None");
					}
					else {
                     $values = array();
                     if($host->getNotificationOnDown()) $values[] = "Down";
                     if($host->getNotificationOnUnreachable()) $values[] = "Unreachable";
                     if($host->getNotificationOnRecovery()) $values[] = "Recovery";
                     if($host->getNotificationOnFlapping()) $values[] = "Flapping";
                     if($host->getNotificationOnScheduledDowntime()) $values[] = "Scheduled Downtime";
                     print(implode(",", $values));
                    }
					print("<br />");
				}
				elseif(isset($hostValues['notification_on_down'])) {
					?>
					<b>Notification On:</b>
					<?php
					if(!$hostValues['notification_on_down']['value'] && !$hostValues['notification_on_unreachable']['value'] && !$hostValues['notification_on_recovery']['value'] && !$hostValues['notification_on_flapping']['value']) {
						print("None");
					}
					else {
                     $values = array();
                     if($hostValues['notification_on_down']['value']) $values[] = "Down";
                     if($hostValues['notification_on_unreachable']['value']) $values[] = "Unreachable";
                     if($hostValues['notification_on_recovery']['value']) $values[] = "Recovery";
                     if($hostValues['notification_on_flapping']['value']) $values[] = "Flapping";
                     if($hostValues['notification_on_scheduled_downtime']['value']) $values[] = "Scheduled Downtime";
                     print(implode(",", $values));
                    }
					print("<b> - Inherited From: </b><i>".$hostValues['notification_on_down']['source']['name']."</i>");
					print("<br />");
				}
				if($host->getStalkingOnUp() !== null) {
					?>
					<b>Stalking On:</b> 
					<?php
					if($host->getStalkingOnUp() || $host->getStalkingOnDown() || $host->getStalkingOnUnreachable()) {
							if($host->getStalkingOnUp()) {
								print("Up");
								if($host->getStalkingOnDown() || $host->getStalkingOnUnreachable())
									print(",");
							}
							if($host->getStalkingOnDown()) {
								print("Down");
								if($host->getStalkingOnUnreachable())
									print(",");
							}
							if($host->getStalkingOnUnreachable()) {
								print("Unreachable");
							}
					}
					else {
						print("None");
					}
					print("<br />");
				}
				elseif(isset($hostValues['stalking_on_up'])) {
					?>
					<b>Stalking On:</b> 
					<?php
					if($hostValues['stalking_on_up']['value'] || $hostValues['stalking_on_down']['value'] || $hostValues['stalking_on_unreachable']['value']) {
							if($hostValues['stalking_on_up']['value']) {
								print("Up");
								if($hostValues['stalking_on_down']['value'] || $hostValues['stalking_on_unreachable']['value'])
									print(",");
							}
							if($hostValues['stalking_on_down']['value']) {
								print("Down");
								if($hostValues['stalking_on_unreachable']['value'])
									print(",");
							}
							if($hostValues['stalking_on_unreachable']['value']) {
								print("Unreachable");
							}
					}
					else {
						print("None");
					}
					print("<b> - Inherited From: </b><i>".$hostValues['stalking_on_up']['source']['name']."</i>");
					print("<br />");
				}					
				?>
				<br />
				<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=notifications&edit=1">Edit</a>
				<?php
			}
			?>
			</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == 'groups') {
		$inherited_list = $host->getInheritedHostGroups();
		$numOfInheritedGroups = count($inherited_list);

		$group_list = $host->getNagiosHostgroupMemberships();
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
						<td height="20" class="altRight"><a href="hostgroups.php?id=<?php echo $inherited_list[$counter]->getId();?>"><b><?php echo $inherited_list[$counter]->getName();?>:</b></a> <?php echo $inherited_list[$counter]->getAlias();?></td>
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
					<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=groups&request=delete&hostgroup_id=<?php echo $group_list[$counter]->getNagiosHostgroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<td height="20" class="altRight"><a href="hostgroups.php?id=<?php echo $group_list[$counter]->getNagiosHostgroup()->getId();?>"><b><?php echo $group_list[$counter]->getNagiosHostgroup()->getName();?>:</b></a> <?php echo $group_list[$counter]->getNagiosHostgroup()->getAlias();?></td>
					</tr>
					<?php
				}
				?>
			</table>
			<br />
			<br />
			<form name="hostgroup_member_add" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=groups">
			<input type="hidden" name="request" value="add_member_command" />
			<b>Add New Host Group Membership:</b> <?php
		   if(!count($hostgroups_list)) {
		   ?><strong>No Hostgroups Available</strong><br /><?php
		   }
		   else {
	   		   print_select("host_manage[hostgroup_id]", $hostgroups_list, "hostgroup_id", "hostgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Group"><br /><?php
		   }
				?>
			<?php echo $lilac->element_desc("members", "nagios_contactgroups_desc"); ?><br />
			<br />
			</form>
			</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == 'services') {
		$inherited_list = $host->getInheritedServices();
		$numOfInheritedServices = count($inherited_list);

		$lilac->get_host_services_list($_GET['id'], $hostServiceList);
		
		$numOfServices = count($hostServiceList);
		
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
					<td colspan="2">Services Inherited By Templates:</td>
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
				<td colspan="2">Services Explicitly Linked to This Host:</td>
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
					<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=services&request=delete&service_id=<?php echo $hostServiceList[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<td height="20" class="altRight"><b><a href="service.php?id=<?php echo $hostServiceList[$counter]->getId();?>"><?php echo $hostServiceList[$counter]->getDescription();?></a></b></td>
					</tr>
					<?php
				}
				?>
			</table>
			<br />
			<br />
			<a class="btn btn-primary" href="add_service.php?host_id=<?php echo $_GET['id'];?>">Create A New Service For This Host</a>
			<br />
			</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == "checkcommand") {
		$inherited_list = $host->getInheritedCommandParameters();
		$numOfInheritedCommandParameters = count($inherited_list);
		
		// Get List Of Parameters for this service and check
		$checkCommandParameters = $host->getNagiosHostCheckCommandParameters();
		$lilac->get_host_check_command_parameters($_GET['id'], $checkCommandParameters);
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
					<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=checkcommand&request=delete&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<form name="set_check_command_paramter<?php echo ++$parameterCounter;?>" method="post" action="hosts.php?section=checkcommand&id=<?php echo $_GET['id'];?>&request=update&checkcommandparameter_id=<?php echo $checkCommandParameters[$counter]->getId();?>">
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
		<form name="add_check_command_paramter" method="post" action="hosts.php?section=checkcommand&id=<?php echo $_GET['id'];?>">
		<input type="hidden" name="request" value="command_parameter_add" />
		Value for $ARG<?php echo ($counter+1);?>$: <input type="text" name="host_manage[parameter]" /> <input class="btn btn-primary" type="submit" value="Add Parameter" />
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
		<td valign="top">
		<?php
		if(isset($_GET['edit'])) {
			?>
			<form name="host_manage" action="hosts.php?id=<?php echo $_GET['id'];?>&section=extended" method="post">
			<input type="hidden" name="request" value="update_host_extended" />
			<input type="hidden" name="host_manage[host_template_id]" value="<?php echo $_GET['id'];?>">
			<?php
			double_pane_form_window_start();
			form_text_element_with_enabler(60, 255, "host_manage", "notes", "Notes", $lilac->element_desc("notes", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_text_element_with_enabler(60, 255, "host_manage", "notes_url", "Notes URL", $lilac->element_desc("notes_url", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_text_element_with_enabler(60, 255, "host_manage", "action_url", "Action URL", $lilac->element_desc("action_url", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "icon_image", "Icon Image", $lilac->element_desc("icon_image", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);				
			form_text_element_with_enabler(60, 255, "host_manage", "icon_image_alt", "Icon Image Alt Text", $lilac->element_desc("icon_image_alt", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "vrml_image", "VRML Image", $lilac->element_desc("vrml_image", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_select_element_with_enabler($directory_list, "value", "text", "host_manage", "statusmap_image", "Statusmap Image", $lilac->element_desc("statusmap_image", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_text_element_with_enabler(30, 30, "host_manage", "two_d_coords", "2D Coordinates", $lilac->element_desc("two_d_coords", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			form_text_element_with_enabler(30, 30, "host_manage", "three_d_coords", "3D Coordinates", $lilac->element_desc("three_d_coords", "nagios_services_extended_info_desc"), $hostValues, $_GET['id']);
			double_pane_form_window_finish();
			?>
			<br />
			<input class="btn btn-primary" type="submit" value="Update Extended Information" /> <a class="btn btn-default" href="hosts.php?id=<?php echo $_GET['id'];?>&section=extended">Cancel</a>
			</form>
			<?php
		} else {
			print "<b>Included in definition:</b><br />\n";
			print_display_field("Notes", $hostValues, "notes", $_GET['id']);
			print_display_field("Notes URL", $hostValues, "notes_url", $_GET['id']);
			print_display_field("Action URL", $hostValues, "action_url", $_GET['id']);
			print_display_field("Icon Image", $hostValues, "icon_image", $_GET['id']);
			print_display_field("Icon Image Alt Text", $hostValues, "icon_image_alt", $_GET['id']);
			print_display_field("VRML Image", $hostValues, "vrml_image", $_GET['id']);
			print_display_field("Statusmap Image", $hostValues, "statusmap_image", $_GET['id']);
			print_display_field("2D Coordinates", $hostValues, "two_d_coords", $_GET['id']);
			print_display_field("3D Coordinates", $hostValues, "three_d_coords", $_GET['id']);
			?>
			<br />
			<a class="btn btn-primary" href="hosts.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">Edit</a>
			<?php
		}
		?>
		</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == 'contacts') {
		$inherited_list = $host->getInheritedContacts();
		$numOfInheritedContacts = count($inherited_list);

		$contacts_list = $host->getNagiosHostContactMembers();

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
			<td colspan="2">Contacts Explicitly Linked to This Host:</td>
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
					<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contact_id=<?php echo $contacts_list[$counter]->getNagiosContact()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
			<form name="host_contact_add" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=contacts">
			<input type="hidden" name="request" value="add_contact_command" />
			<b>Add New Contact:</b> <?php
		   if(!count($contacts_list)) {
		   ?><strong>No Contacts Available</strong><br /><?php
		   }
		   else {
	   		   print_select("host_manage[contact_add][contact_id]", $contacts_list, "contact_id", "contact_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact"><br /><?php
		   }
		?>
			<?php echo $lilac->element_desc("contact_groups", "nagios_hosts_desc"); ?><br />
			<br />
			</form>
			</td>
			</tr>
			</table>
			<?php


		$inherited_list = $host->getInheritedContactGroups();
				
		$numOfInheritedContactGroups = count($inherited_list);

		$lilac->return_host_contactgroups_list($_GET['id'], $contactgroups_list);			
		$numOfContactGroups = count($contactgroups_list);
		?>
		<table width="100%" border="0">
		<tr>
			<td width="100" align="center" valign="top">
			<img src="<?php echo $path_config['image_root'];?>contact.gif" />
			</td>
			<td valign="top">
					<?php
					if($numOfInheritedContactGroups) {
						?>
						<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
							<tr class="altTop">
							<td colspan="2">Contact Groups Inherited By Templates:</td>
							</tr>
							<?php
							for($counter = 0; $counter < $numOfInheritedContactGroups; $counter++) {
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
						<td colspan="2">Contact Groups Explicitly Linked to This Host:</td>
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
							<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contactgroup_id=<?php echo $contactgroups_list[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
			<form name="host_template_contactgroup_add" method="post" action="hosts.php?id=<?php echo $_GET['id'];?>&section=contacts">
			<input type="hidden" name="request" value="add_contactgroup_command" />
			<input type="hidden" name="host_manage[contactgroup_add][host_id]" value="<?php echo $_GET['id'];?>" />
			<b>Add New Contact Group:</b> <?php
			if(!count($contactgroups_list)) {
				?><strong>No Contact Groups Available</strong><br /><?php
			}
			else {
				print_select("host_manage[contactgroup_add][contactgroup_id]", $contactgroups_list, "contactgroup_id", "contactgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact Group"><br /><?php
			}
				?>
			<?php echo $lilac->element_desc("contact_groups", "nagios_hosts_desc"); ?><br />
			<br />
			</form>
			</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == 'dependencies') {
		$inherited_list = $host->getInheritedDependencies();
		$numOfInheritedDepdendencies = count($inherited_list);

		$dependencies_list = $host->getNagiosDependencys();
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
						<td colspan="2">Depdendencies Explicitly Linked to This Host:</td>
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=dependencies&request=delete&dependency_id=<?php echo $dependency->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
					<a class="btn btn-primary" href="add_dependency.php?host_id=<?php echo $_GET['id'];?>">Create A New Host Dependency For This Host</a>
			</td>
		</tr>
		</table>
		<?php
	}
	else if($_GET['section'] == 'escalations') {
		$inherited_list = $host->getInheritedEscalations();
		$numOfInheritedEscalations = count($inherited_list);

		$escalations_list = $host->getNagiosEscalations();
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
						<td colspan="2">Escalations Explicitly Linked to This Host:</td>
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=escalations&request=delete&escalation_id=<?php echo $escalation->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
					<a class="btn btn-primary" href="add_escalation.php?host_id=<?php echo $_GET['id'];?>">Create A New Escalation For This Host</a>
			</td>
		</tr>
		</table>
		<?php
	}
	
	else if($_GET['section'] == 'parents') {
		$parents_list = $host->getNagiosHostParentsRelatedByChildHost();
		$numOfParents = count($parents_list);
		?>
		<table width="100%" border="0">
		<tr>
			<td width="100" align="center" valign="top">
			<img src="<?php echo $path_config['image_root'];?>servergroup.gif" />
			</td>
			<td valign="top">
					<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
						<tr class="altTop">
						<td colspan="2">Parents For This Host:</td>
						</tr>
						<?php
						$counter = 0;
						if($numOfParents) {
							foreach($parents_list as $parent) {
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
								<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hosts.php?id=<?php echo $_GET['id'];?>&section=parents&request=delete&parent_id=<?php echo $parent->getNagiosHostRelatedByParentHost()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
								<td height="20" class="altRight"><b><?php echo $parent->getNagiosHostRelatedByParentHost()->getName();?></b></td>
								</tr>
								<?php
								$counter++;
							}
						}
						?>
					</table>
					<br />
					<br />
					<b>Add Parent:</b>
					<form action="<?php echo $_SERVER['PHP_SELF'];?>?id=<?php echo $_GET['id'];?>&section=parents" method="post">
					<input type="hidden" name="request" value="parent_add" />
					Host Name:<input id="targetname" name="parenthost" type="text" /> <input class="btn btn-primary" type="submit" value="Add Parent" />
					</form>
					<script type="text/javascript">
					$(function() {
					  $("#targetname").autocomplete("hosts.php?request=search&type=host");
					  });
					</script>
							</td>
		</tr>
		</table>
		<?php
	}

	
	
	print_window_footer();
	
	
	
	
}

// Get list of children hosts
if(!isset($host)) {
	$children_list = NagiosHostPeer::getTopLevelHosts();
}
else {
	$children_list = $host->getChildrenHosts();
}
$numOfChildren = count($children_list);
	
if(isset($host)) {
	$title = "Children Hosts for " . $host->getName();
}
else {
	$title = "Top Level Network Hosts";
}
print_window_header($title, "100%");
?>
<a style="float: left;" class="networkadd sublink btn btn-success" href="add_host.php<?php if(isset($host)) print("?parent_id=" . $host->getId());?>">Add A New Child Host</a>
<br /><br />
<?php
print($navbar);
?><br /><br />
<?php
if($numOfChildren) {
	?>
	<form name="EoN_Actions_Form" method="post">
	<?php echo EoN_Actions("Host");?>
	<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
	<tr class="altTop">
	<td>Host Name</td>
	<td>Address</td>
	<td>Description</td>
	<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_Host');">ALL</a></td>
	</tr>
	<?php
	for($counter = 0; $counter < $numOfChildren; $counter++) {
		if($counter % 2) {
			?>
			<tr class="altRow1" id="line<?php echo $counter?>">
			<?php
		}
		else {
			?>
			<tr class="altRow2" id="line<?php echo $counter?>">
			<?php
		}
		?>
		<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="hosts.php?id=<?php echo $children_list[$counter]->getId();?>"><?php echo $children_list[$counter]->getName();?></a> <?php $numOfSubChildren = $children_list[$counter]->getNumberOfChildren(); if($numOfSubChildren) print("(".$numOfSubChildren.")");?></td>
		<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $children_list[$counter]->getAddress();?></td>
		<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $children_list[$counter]->getAlias();?></td>
		<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_Host[]" value="<?php echo $children_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
		</tr>
		<?php
	}
	?>
	</table>
	</form>
	<?php
}
else {
	?>
	<div class="statusmsg">No Children Hosts Exists</div>
	<?php
}
print_window_footer();
print("<br /><br />");
?>
<br />
<?php
print_footer();
?>
