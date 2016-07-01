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
Lilac Contacts Management Page
*/
include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("Contact");

if(!isset($_GET['section']) && isset($_GET['contact_id'])) {
	$_GET['section'] = 'general';
}

// If we're going to modify host data
if(isset($_GET['contact_id']) && 
		$_GET['section'] == "general" &&
		isset($_GET['edit'])) {
			$tempContactInfo = NagiosContactPeer::retrieveByPK($_GET['contact_id']);
}
 

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'notification') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$lilac->delete_contact_notification_command($_GET['contact_notification_command_id']);
			$success = "Command Deleted";
			unset($_GET['command_id']);
			unset($tempData);
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'groups') {
			$lilac->get_contact_membership_list($_GET['contact_id'], $tempGroupList);
			$numOfGroups = count($tempGroupList);
			if($numOfGroups > 1) {
				$c = new Criteria();
				$c->add(NagiosContactGroupMemberPeer::CONTACT, $_GET['contact_id']);
				$c->add(NagiosContactGroupMemberPeer::CONTACTGROUP, $_GET['contactgroup_id']);
				$membership = NagiosContactGroupMemberPeer::doSelectOne($c);
				if($membership) {
					$membership->delete();
					$success = "Membership Deleted.";
				}
			}
			else {
				$error = "There must be at least one contact group!";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			$lilac->get_contact_list($tempList);
			$numOfContacts = count($tempList);
			if($numOfContacts > 1) {
				$lilac->delete_contact($_GET['contact_id']);
				$success = "Contact deleted.";
				unset($tempData);
				unset($_GET['contact_id']);
			}
			else {
				$error = "There must be at least one contact in the system.";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'addresses') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$lilac->delete_contact_address($_GET['contactaddress_id']);
			$success = "Contact address deleted.";
			unset($tempData);
		}
		
}

if(isset($_POST['request'])) {
	// Load Up The Session Data
	if(count($_POST['contact_manage'])) {
		foreach($_POST['contact_manage'] as $key=>$value) {
			$tempData[$key] = $value;
		}
	}
	if($_POST['request'] == 'add_contact') {
		// Error check!
		if(count($tempData)) {
			foreach($tempData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		// We have checkboxes, let's verify the data against POST
		if(!isset($_POST['contact_manage']['host_notification_options_down']))
			$tempData['host_notification_options_down'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_unreachable']))
			$tempData['host_notification_options_unreachable'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_recovery']))
			$tempData['host_notification_options_recovery'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_flapping']))
			$tempData['host_notification_options_flapping'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_scheduled_downtime']))
			$tempData['host_notification_options_scheduled_downtime'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_warning']))
			$tempData['service_notification_options_warning'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_unknown']))
			$tempData['service_notification_options_unknown'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_critical']))
			$tempData['service_notification_options_critical'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_recovery']))
			$tempData['service_notification_options_recovery'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_flapping']))
			$tempData['service_notification_options_flapping'] = 0;
			
		if(!isset($_POST['contact_manage']['can_submit_commands']))
			$tempData['can_submit_commands'] = 0;
		if(!isset($_POST['contact_manage']['retain_status_information']))
			$tempData['retain_status_information'] = 0;
		if(!isset($_POST['contact_manage']['retain_nonstatus_information']))
			$tempData['retain_nonstatus_information'] = 0;			
			
		if(!isset($_POST['contact_manage']['host_notifications_enabled']))
			$tempData['host_notifications_enabled'] = 0;
		if(!isset($_POST['contact_manage']['service_notifications_enabled']))
			$tempData['service_notifications_enabled'] = 0;		
			
		// Field Error Checking
		if($tempData['contact_name'] == '' || $tempData['alias'] == '') {
			$addError = 1;
			$error = "Fields shown are required and cannot be left blank.";
		}
		else {
			// Check for pre-existing contact with same name
			if($lilac->contact_exists($tempData['contact_name'])) {
				$error = "A contact with that name already exists!";
			}
			else {
				$tempContactGroup = $tempData['contact_group'];
				unset($tempData['contact_group']);
				// All is well for error checking, add the contact into the db.
				
				$contact = $lilac->add_contact($tempData);
				
				$success = "Contact added";
				if( $tempContactGroup && $tempContactGroup != 0) {
					$contactGroup = NagiosContactGroupPeer::retrieveByPK($tempContactGroup);
					if($contactGroup && $contact) {
						$contactGroupMember = new NagiosContactGroupMember();
						$contactGroupMember->setContact($contact->getId());
						$contactGroupMember->setContactgroup($contactGroup->getId());
						$contactGroupMember->save();
					}
				}
				unset($_GET['contact_add']);

			}
		}
	}
	else if($_POST['request'] == 'modify_contact') {
		// Error check!
		if(count($tempData)) {
			foreach($tempData as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		// We have checkboxes, let's verify the data against POST
		if(!isset($_POST['contact_manage']['host_notification_options_down']))
			$tempData['host_notification_options_down'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_unreachable']))
			$tempData['host_notification_options_unreachable'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_recovery']))
			$tempData['host_notification_options_recovery'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_flapping']))
			$tempData['host_notification_options_flapping'] = 0;
		if(!isset($_POST['contact_manage']['host_notification_options_scheduled_downtime']))
			$tempData['host_notification_options_scheduled_downtime'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_warning']))
			$tempData['service_notification_options_warning'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_unknown']))
			$tempData['service_notification_options_unknown'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_critical']))
			$tempData['service_notification_options_critical'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_recovery']))
			$tempData['service_notification_options_recovery'] = 0;
		if(!isset($_POST['contact_manage']['service_notification_options_flapping']))
			$tempData['service_notification_options_flapping'] = 0;
		if(!isset($_POST['contact_manage']['can_submit_commands']))
			$tempData['can_submit_commands'] = 0;
		if(!isset($_POST['contact_manage']['retain_status_information']))
			$tempData['retain_status_information'] = 0;
		if(!isset($_POST['contact_manage']['retain_nonstatus_information']))
			$tempData['retain_nonstatus_information'] = 0;			
			
		if(!isset($_POST['contact_manage']['host_notifications_enabled']))
			$tempData['host_notifications_enabled'] = 0;
		if(!isset($_POST['contact_manage']['service_notifications_enabled']))
			$tempData['service_notifications_enabled'] = 0;					
			
		// Field Error Checking
		if($tempData['contact_name'] == '' || $tempData['alias'] == '') {
			$addError = 1;
			$error = "Fields shown are required and cannot be left blank.";
		}
		else {
			if($tempData['contact_name'] != $tempContactInfo->getName() && $lilac->contact_exists($tempData['contact_name'])) {
				$error = "A contact with that name already exists!";
			}
			else {
				// All is well for error checking, modify the contact.
				$lilac->modify_contact($_POST['contact_id'], $tempData);
				// Remove session data
				unset($tempData);
				$success = "Contact modified.";
				unset($_GET['edit']);
			}
			$_GET['section'] = "general";
		}
	}
	else if($_POST['request'] == 'add_notification_command') {
		if($lilac->contact_has_notification_command($_GET['contact_id'], $tempData['notification_add'])) {
			$error = "That notification command already exists in that list!";
			unset($tempData);
		}
		else {
			$lilac->add_contacts_notification_command($_GET['contact_id'], $tempData['notification_add']);
			$success = "Notification Command added.";
			unset($tempData);
		}
	}
	else if($_POST['request'] == 'add_member_command') {
		if($lilac->contactgroup_has_member($tempData['group_add']['contactgroup_id'], $_GET['contact_id'])) {
			$error = "That member already exists in that list!";
			unset($tempData);
		}
		else {
			$lilac->add_contactgroup_member($tempData['group_add']['contactgroup_id'], $_GET['contact_id']);
			$success = "New Group membership added.";
			unset($tempData);
		}
	}
	else if($_POST['request'] == 'contact_address_add') {
		// All is well for error checking, modify the contact.
		$lilac->add_contact_address($_GET['contact_id'], $tempData);
		// Remove session data
		unset($tempData);
		$success = "Contact Address added.";
	}
}

if(isset($_GET['contact_id'])) {
	$tempContactInfo = NagiosContactPeer::retrieveByPK($_GET['contact_id']);
	if(!$tempContactInfo) {
		header("Location: welcome.php");
	}
}


$lilac->get_contact_list($contact_list);
$numOfContacts = count($contact_list);

$lilac->return_period_list($tempList);
$period_list = array();
foreach($tempList as $tempPeriod) {
	$period_list[] = array("timeperiod_id" => $tempPeriod->getId(), "timeperiod_name" => $tempPeriod->getName());
}



print_header("Contact Editor");
?>
<?php
	if(isset($_GET['contact_id'])) {
		
		// Build subnav
		$subnav = array(
			'general' => 'General',
			'notification' => 'Notification Commands',
			'groups' => 'Group Membership',
			'addresses' => 'Addresses'
			
			);
		
	// PLACEHOLDER TO PUT CONTACT INFO
		print_window_header("Contact Info for " . $tempContactInfo->getName(), "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?contact_id=" . $tempContactInfo->getId());
		if($_GET['section'] == 'general') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing checks information
					?>
					<form name="command_form" method="post" action="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=general&edit=1">
						<?php 
							if(isset($_GET['edit']))	{
								?>
								<input type="hidden" name="request" value="modify_contact" />
								<input type="hidden" name="contact_id" value="<?php echo $_GET['contact_id'];?>">
								<?php
							}
							else {
								?>
								<input type="hidden" name="request" value="add_contact" />
								<?php
							}
						?>
						<b>Contact Name:</b> <input type="text" name="contact_manage[contact_name]" value="<?php echo $tempContactInfo->getName();?>">
						<?php echo $lilac->element_desc("contact_name", "nagios_contacts_desc"); ?><br />
						<br />
						<b>Description:</b><br />
						<input type="text" size="80" name="contact_manage[alias]" value="<?php echo $tempContactInfo->getAlias();?>">
						<?php echo $lilac->element_desc("alias", "nagios_contacts_desc"); ?><br />
						<br />
						<input type="checkbox" name="contact_manage[can_submit_commands]" <?php echo  (($tempContactInfo->getCanSubmitCommands() == 1) ? "CHECKED" : '');?>><b>Can Submit Commands</b><br />
						<br />
						<input type="checkbox" name="contact_manage[retain_status_information]" <?php echo  (($tempContactInfo->getRetainStatusInformation() == 1) ? "CHECKED" : '');?>><b>Retain Status Information</b><br />
						<br />
						<input type="checkbox" name="contact_manage[retain_nonstatus_information]" <?php echo  (($tempContactInfo->getRetainNonstatusInformation() == 1) ? "CHECKED" : '');?>><b>Retain Non-Status Information</b><br />
						<br />

						<input type="checkbox" name="contact_manage[host_notifications_enabled]" <?php echo  (($tempContactInfo->getHostNotificationsEnabled() == 1) ? "CHECKED" : '');?>><b>Host Notifications Enabled</b><br />
						<br />
						<input type="checkbox" name="contact_manage[service_notifications_enabled]" <?php echo  (($tempContactInfo->getServiceNotificationsEnabled() == 1) ? "CHECKED" : '');?>><b>Service Notifications Enabled</b><br />
						<br />
						<b>Host Notification Period:</b> <?php print_select("contact_manage[host_notification_period]", $period_list, "timeperiod_id", "timeperiod_name",($tempContactInfo->getHostNotificationPeriod() != null) ? $tempContactInfo->getHostNotificationPeriod() : '');?>
						<?php echo $lilac->element_desc("host_notification_period", "nagios_contacts_desc"); ?><br />
						<br />
						<b>Service Notification Period:</b> <?php print_select("contact_manage[service_notification_period]", $period_list, "timeperiod_id", "timeperiod_name",($tempContactInfo->getHostNotificationPeriod() != null) ? $tempContactInfo->getServiceNotificationPeriod() : '');?>
						<?php echo $lilac->element_desc("service_notification_period", "nagios_contacts_desc"); ?><br />
						<br />
						<b>Host Notification Options:</b>
						<table width="100%" border="0">
						<tr>
							<td width="100" valign="top">
							<input type="checkbox" <?php echo  (($tempContactInfo->getHostNotificationOnDown() == 1) ? "CHECKED" : '');?> name="contact_manage[host_notification_options_down]" value="1">Down<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getHostNotificationOnUnreachable() == 1) ? "CHECKED" : '');?> name="contact_manage[host_notification_options_unreachable]" value="1">Unreachable<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getHostNotificationOnRecovery() == 1) ? "CHECKED" : '');?> name="contact_manage[host_notification_options_recovery]" value="1">Recovery<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getHostNotificationOnFlapping() == 1) ? "CHECKED" : '');?> name="contact_manage[host_notification_options_flapping]" value="1">Flapping<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getHostNotificationOnScheduledDowntime() == 1) ? "CHECKED" : '');?> name="contact_manage[host_notification_options_scheduled_downtime]" value="1">Scheduled Downtime<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("host_notification_options", "nagios_contacts_desc"); ?></td>
						</tr>
						</table>
						<br />
						<b>Service Notification Options:</b>
						<table width="100%" border="0">
						<tr>
							<td width="100" valign="top">
							<input type="checkbox" <?php echo  (($tempContactInfo->getServiceNotificationOnWarning() == 1) ? "CHECKED" : '');?> name="contact_manage[service_notification_options_warning]" value="1">Warning<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getServiceNotificationOnUnknown() == 1) ? "CHECKED" : '');?> name="contact_manage[service_notification_options_unknown]" value="1">Unknown<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getServiceNotificationOnCritical() == 1) ? "CHECKED" : '');?> name="contact_manage[service_notification_options_critical]" value="1">Critical<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getServiceNotificationOnRecovery() == 1) ? "CHECKED" : '');?> name="contact_manage[service_notification_options_recovery]" value="1">Recovery<br />
							<input type="checkbox" <?php echo  (($tempContactInfo->getServiceNotificationOnFlapping() == 1) ? "CHECKED" : '');?> name="contact_manage[service_notification_options_flapping]" value="1">Flapping<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("service_notification_options", "nagios_contacts_desc"); ?></td>
						</tr>
						</table>
						<br />
			
						<b>Email:</b><br />
						<input type="text" size="80" name="contact_manage[email]" value="<?php echo $tempContactInfo->getEmail();?>">
						<?php echo $lilac->element_desc("email", "nagios_contacts_desc"); ?><br />
						<br />
						<b>Pager:</b><br />
						<input type="text" size="80" name="contact_manage[pager]" value="<?php echo $tempContactInfo->getPager();?>"><br /><br />
						<input class="btn btn-primary" type="submit" value="Modify Contact" /> <a class="btn btn-default" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>">Cancel</a>
						</form>
					<?php
				}
				else {
					?>				
					<b>Contact Name:</b> <?php echo $tempContactInfo->getName();?><br />
					<b>Description:</b> <?php echo $tempContactInfo->getAlias();?><br />
					<b>Email:</b> <?php echo $tempContactInfo->getEmail();?><br />
					<b>Pager:</b> <?php echo $tempContactInfo->getPager();?><br />
					<br />
					<b>Can Submit Commands:</b><?php echo ($tempContactInfo->getCanSubmitCommands()) ? "Yes" : "No";?><br />
					<b>Retain Status Information:</b><?php echo ($tempContactInfo->getRetainStatusInformation()) ? "Yes" : "No";?><br />
					<b>Retain Non-Status Information:</b><?php echo ($tempContactInfo->getRetainNonstatusInformation()) ? "Yes" : "No";?><br />
					<br />
					<b>Host Notifications Enabled:</b><?php echo ($tempContactInfo->getHostNotificationsEnabled()) ? "Yes" : "No";?><br />
					<b>Service Notifications Enabled:</b><?php echo ($tempContactInfo->getServiceNotificationsEnabled()) ? "Yes" : "No";?><br />
					<br />
					<b>Host Notification Period:</b> <?php echo $lilac->return_period_name($tempContactInfo->getHostNotificationPeriod());?><br />
					<b>Service Notification Period:</b> <?php echo $lilac->return_period_name($tempContactInfo->getServiceNotificationPeriod());?><br />
					<b>Host Notification On:</b>
						<?php
						if(!$tempContactInfo->getHostNotificationOnDown() && !$tempContactInfo->getHostNotificationOnUnreachable() && !$tempContactInfo->getHostNotificationOnRecovery() && !$tempContactInfo->getHostNotificationOnFlapping() && !$tempContactInfo->getHostNotificationOnScheduledDowntime()) {
							print("None");
						}
						else {
							if($tempContactInfo->getHostNotificationOnDown()) {
								print("Down");
								if($tempContactInfo->getHostNotificationOnUnreachable() || $tempContactInfo->getHostNotificationOnRecovery() || $tempContactInfo->getHostNotificationOnFlapping() || $tempContactInfo->getHostNotificationOnScheduledDowntime())
									print(",");
							}
							if($tempContactInfo->getHostNotificationOnUnreachable()) {
								print("Unreachable");
								if($tempContactInfo->getHostNotificationOnRecovery() || $tempContactInfo->getHostNotificationOnFlapping() || $tempContactInfo->getHostNotificationOnScheduledDowntime())
									print(",");
							}
							if($tempContactInfo->getHostNotificationOnRecovery()) {
								print("Recovery");
									if($tempContactInfo->getHostNotificationOnFlapping() || $tempContactInfo->getHostNotificationOnScheduledDowntime())
										print(",");
							}
							if($tempContactInfo->getHostNotificationOnFlapping()) {
								print("Flapping");
									if($tempContactInfo->getHostNotificationOnScheduledDowntime())
										print(",");
							}
							if($tempContactInfo->getHostNotificationOnScheduledDowntime()) {
								print("Scheduled Downtime");
							}
						}
						?>
						<br />
						<b>Service Notification On:</b>
						<?php
						if(!$tempContactInfo->getServiceNotificationOnWarning() && !$tempContactInfo->getServiceNotificationOnUnknown() && !$tempContactInfo->getServiceNotificationOnCritical() && !$tempContactInfo->getServiceNotificationOnRecovery())
							print("None");
						else {
							if($tempContactInfo->getServiceNotificationOnWarning()) {
								print("Warning");
								if($tempContactInfo->getServiceNotificationOnUnknown() || $tempContactInfo->getServiceNotificationOnCritical() || $tempContactInfo->getServiceNotificationOnRecovery())
									print(",");
							}
							if($tempContactInfo->getServiceNotificationOnUnknown()) {
								print("Unknown");
								if($tempContactInfo->getServiceNotificationOnCritical() || $tempContactInfo->getServiceNotificationOnRecovery())
									print(",");
							}
							if($tempContactInfo->getServiceNotificationOnCritical()) {
								print("Critical");
								if($tempContactInfo->getServiceNotificationOnRecovery() || $tempContactInfo->getServiceNotificationOnFlapping())
									print(",");
							}
							if($tempContactInfo->getServiceNotificationOnRecovery()) {
								print("Recovery");
								if($tempContactInfo->getServiceNotificationOnFlapping())
									print(",");
							}
							if($tempContactInfo->getServiceNotificationOnFlapping()) {
								print("Flapping");
							}
						}
						?>
					<br />
					<br />
					<a class="btn btn-primary" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&request=delete" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete This Contact</a>
			<?php
		}
		else if($_GET['section'] == 'notification') {
			$command_list = array();
			$lilac->return_command_list($tempList);
			foreach($tempList as $command) {
				$command_list[] = array("command_id" => $command->getId(), "command_name" => $command->getName());
			}

			$numOfHostCommands = 0;
			$numOfServiceCommands = 0;
			$lilac->get_contacts_notification_commands($_GET['contact_id'], $contactNotificationCommands);
			if(isset($contactNotificationCommands['host']))
				$numOfHostCommands = count($contactNotificationCommands['host']);
			if(isset($contactNotificationCommands['service']))
				$numOfServiceCommands = count($contactNotificationCommands['service']);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>notification.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
						<td colspan="2">Host Notification Commands:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfHostCommands; $counter++) {
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;<a class="btn btn-danger" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=notification&request=delete&contact_notification_command_id=<?php echo $contactNotificationCommands['host'][$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $contactNotificationCommands['host'][$counter]->getNagiosCommand()->getName();?></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="notification_add" method="post" action="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=notification">
				<input type="hidden" name="request" value="add_notification_command" />
				<input type="hidden" name="contact_manage[notification_add][contact_id]" value="<?php echo $_GET['contact_id'];?>" />
				<input type="hidden" name="contact_manage[notification_add][notification_type]" value="host" />
				<b>Add New Host Notification Command:</b> <?php
				if(!count($command_list)) {
			 		?><strong>No Commands Available</strong><br /><?php
				}
				else {		
					print_select("contact_manage[notification_add][command_id]", $command_list, "command_id", "command_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Command"><br /><?php
				}
				?>
				<?php echo $lilac->element_desc("host_notification_commands", "nagios_contacts_desc"); ?><br />
				<br />
				</form>
				<br />
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Service Notification Commands:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfServiceCommands; $counter++) {
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=notification&request=delete&contact_notification_command_id=<?php echo $contactNotificationCommands['service'][$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $contactNotificationCommands['service'][$counter]->getNagiosCommand()->getName();?></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="notification_add" method="post" action="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=notification">
				<input type="hidden" name="request" value="add_notification_command" />
				<input type="hidden" name="contact_manage[notification_add][contact_id]" value="<?php echo $_GET['contact_id'];?>" />
				<input type="hidden" name="contact_manage[notification_add][notification_type]" value="service" />
				<b>Add New Service Notification Command:</b> <?php
				if(!count($command_list)) {
			 		?><strong>No Commands Available</strong><br /><?php
				}
				else {		
					print_select("contact_manage[notification_add][command_id]", $command_list, "command_id", "command_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Command"><br /><?php
				}
				?>
				<?php echo $lilac->element_desc("service_notification_commands", "nagios_contacts_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'groups') {
			$lilac->get_contact_membership_list($_GET['contact_id'], $group_list);
			$numOfGroups = count($group_list);
			// Get list of contact groups
			$lilac->get_contactgroup_list($tempList);
			$contactgroups_list = array();
			foreach($tempList as $contactgroup) {
				$contactgroups_list[] = array('contactgroup_id' => $contactgroup->getId(), 'contactgroup_name' => $contactgroup->getName());
			}
			$numOfContactGroups = count($contactgroups_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Contact Group Membership:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"> <a class="btn btn-danger btn-xs" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=groups&request=delete&contactgroup_id=<?php echo $group_list[$counter]->getNagiosContactGroup()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $group_list[$counter]->getNagiosContactGroup()->getName();?>:</b> <?php echo $group_list[$counter]->getNagiosContactGroup()->getAlias();?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<form name="contactgroup_member_add" method="post" action="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=groups">
				<input type="hidden" name="request" value="add_member_command" />
				<input type="hidden" name="contact_manage[group_add][contact_id]" value="<?php echo $_GET['contact_id'];?>" />
				<b>Add New Group Membership:</b> <?php
				if(!count($contactgroups_list)) {
					?><strong>No Contact Groups Available</strong><br /><?php
				}
				else {
					print_select("contact_manage[group_add][contactgroup_id]", $contactgroups_list, "contactgroup_id", "contactgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Group"><br /><?php
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
		else if($_GET['section'] == "addresses") {
			// This is a Nagios v2.0 feature only
			// Get List Of Addresses For This Contact
			$lilac->get_contact_addresses($_GET['contact_id'], $contactAddresses);
			$numOfAddresses = count($contactAddresses);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>mail.gif" />
				</td>
				<td valign="top">
					<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
						<tr class="altTop">
						<td colspan="2">Additional Addresses:</td>
						</tr>
						<?php
						for($counter = 0; $counter < $numOfAddresses; $counter++) {
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
							<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=addresses&request=delete&contactaddress_id=<?php echo $contactAddresses[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
							<td height="20" class="altRight"><b>$CONTACTADDRESS<?php echo ($counter+1);?>$:</b> <?php echo $contactAddresses[$counter]->getAddress();?></td>
							</tr>
							<?php
						}
						?>
					</table>
					<?php
					if($numOfAddresses < 6) {
						?>
						<br />
						<br />
						<form name="add_contact_address" method="post" action="contacts.php?contact_id=<?php echo $_GET['contact_id'];?>&section=addresses">
						<input type="hidden" name="request" value="contact_address_add" />
						<input type="hidden" name="contact_manage[contact_id]" value="<?php echo $_GET['contact_id'];?>" />
						Value for $CONTACTADDRESS<?php echo ($counter+1);?>$: <input type="text" name="contact_manage[address]" /> <input class="btn btn-primary" type="submit" value="Add Address" />
						<?php echo $lilac->element_desc("address", "nagios_contacts_desc"); ?><br />
						</form>
						<?php
					}
					?>
					<br />
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

	if(!isset($_GET['contact_add'])) {
		print_window_header("Contacts", "100%");
		?>
		<a class="sublink btn btn-success" href="contacts.php?contact_add=1">Add A New Contact</a><br />
		<br />
		<?php
		if($numOfContacts) {
			?>
			<form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("Contact");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Contact Name</td>
			<td>Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_Contact');">ALL</a></td>
			</tr>
			<?php
			for($counter = 0; $counter < $numOfContacts; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="contacts.php?contact_id=<?php echo $contact_list[$counter]->getId();?>"><?php echo $contact_list[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $contact_list[$counter]->getAlias();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_Contact[]" value="<?php echo $contact_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<div class="statusmsg">No Contacts Exist</div>
			<?php
		}
		print_window_footer();
	}

	if(isset($_GET['contact_add'])) {	
		$lilac->get_contactgroup_list($tempList);
		$contactgroups_list = array();
		foreach($tempList as $contactgroup) {
			$contactgroups_list[] = array('contactgroup_id' => $contactgroup->getId(), 'contactgroup_name' => $contactgroup->getName());
		}
		
		
		
		$contactgroups_list = array_merge( array( array( 'contactgroup_id'=>0, 'contactgroup_name'=>"None")), $contactgroups_list);
		print_window_header("Add A Contact", "100%");
		?>
		<form name="command_form" method="post" action="contacts.php?contact_add=1">
			<?php 
				if(isset($_GET['edit']))	{
					?>
					<input type="hidden" name="request" value="modify_contact" />
					<input type="hidden" name="contact_id" value="<?php echo $_GET['contact_id'];?>">
					<?php
				}
				else {
					?>
					<input type="hidden" name="request" value="add_contact" />
					<?php
				}
			?>
			<b>Contact Name:</b> <input type="text" name="contact_manage[contact_name]" value="">
			<?php echo $lilac->element_desc("contact_name", "nagios_contacts_desc"); ?><br />
			<br />
			<b>Description:</b><br />
			<input type="text" size="80" name="contact_manage[alias]" value="">
			<?php echo $lilac->element_desc("alias", "nagios_contacts_desc"); ?><br />
			<br />
			<b>Host Notification Period:</b> <?php print_select("contact_manage[host_notification_period]", $period_list, "timeperiod_id", "timeperiod_name");?>
			<?php echo $lilac->element_desc("host_notification_period", "nagios_contacts_desc"); ?><br />
			<br />
			<b>Service Notification Period:</b> <?php print_select("contact_manage[service_notification_period]", $period_list, "timeperiod_id", "timeperiod_name");?>
			<?php echo $lilac->element_desc("service_notification_period", "nagios_contacts_desc"); ?><br />
			<br />
			<input type="checkbox" name="contact_manage[can_submit_commands]" value="1"><b>Can Submit Commands</b><br />
			<br />
			<input type="checkbox" name="contact_manage[retain_status_information]" value="1"><b>Retain Status Information</b><br />
			<br />
			<input type="checkbox" name="contact_manage[retain_nonstatus_information]" value="1"><b>Retain Non-Status Information</b><br />
			
			<br />
			<input type="checkbox" name="contact_manage[host_notifications_enabled]" value="1"><b>Host Notifications Enabled</b><br />
			<br />
			<input type="checkbox" name="contact_manage[service_notifications_enabled]" value="1"><b>Service Notifications Enabled</b><br />
			<br />
			
			<b>Host Notification Options:</b>
			<table width="100%" border="0">
			<tr>
				<td width="100" valign="top">
				<input type="checkbox" name="contact_manage[host_notification_options_down]" value="1">Down<br />
				<input type="checkbox" name="contact_manage[host_notification_options_unreachable]" value="1">Unreachable<br />
				<input type="checkbox"  name="contact_manage[host_notification_options_recovery]" value="1">Recovery<br />
				<input type="checkbox"  name="contact_manage[host_notification_options_flapping]" value="1">Flapping<br />
				<input type="checkbox"  name="contact_manage[host_notification_options_scheduled_downtime]" value="1">Scheduled Downtime<br />
				</td>
				<td valign="middle"><?php echo $lilac->element_desc("host_notification_options", "nagios_contacts_desc"); ?></td>
			</tr>
			</table>
			<br />
			<b>Service Notification Options:</b>
			<table width="100%" border="0">
			<tr>
				<td width="100" valign="top">
				<input type="checkbox"  name="contact_manage[service_notification_options_warning]" value="1">Warning<br />
				<input type="checkbox"  name="contact_manage[service_notification_options_unknown]" value="1">Unknown<br />
				<input type="checkbox"  name="contact_manage[service_notification_options_critical]" value="1">Critical<br />
				<input type="checkbox"  name="contact_manage[service_notification_options_recovery]" value="1">Recovery<br />
				<input type="checkbox"  name="contact_manage[service_notification_options_flapping]" value="1">Flapping<br />
				</td>
				<td valign="middle"><?php echo $lilac->element_desc("service_notification_options", "nagios_contacts_desc"); ?></td>
			</tr>
			</table>
			<br />
			<b>Initial Contact Group:</b> <?php print_select("contact_manage[contact_group]", $contactgroups_list, "contactgroup_id", "contactgroup_name");?>
			<?php echo $lilac->element_desc("members", "nagios_contactgroups_desc"); ?><br />
			<br />
			<b>Email:</b><br />
			<input type="text" size="80" name="contact_manage[email]" value="">
			<?php echo $lilac->element_desc("email", "nagios_contacts_desc"); ?><br />
			<br />
			<b>Pager:</b><br />
			<input type="text" size="80" name="contact_manage[pager]" value="">
			<?php echo $lilac->element_desc("pager", "nagios_contacts_desc"); ?><br />
			<br />
			<br />
			<input class="btn btn-primary" type="submit" value="Add Contact" /> <a class="btn btn-default" href="contacts.php">Cancel</a>
			</form>
			<br /><br />
		<?php
		print_window_footer();
	}
	?>
	<br />
	<?php
print_footer();
?>
