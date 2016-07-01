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
 * escalation.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain escalations
 *
*/
 


include_once('includes/config.inc');

if(!isset($_GET['id'])) {
	header("Location: welcome.php");
	exit();
}
else {
	$escalation = NagiosEscalationPeer::retrieveByPK($_GET['id']);
	if(!$escalation) {
		header("Location: welcome.php");
		exit();
	}
}


// Data preparation
if(!isset($_GET['section']))
	$_GET['section'] = 'general';

if(isset($_GET['temp_host_id'])) {
	$tempData['escalation_manage']['target_host_id'] = NULL;
}

if(isset($_GET['escalation_add'])) {
	$sublink = "?escalation_add=1";
	if(isset($_GET['host_id']))
		$sublink .= "&host_id=".$_GET['host_id'];
	if(isset($_GET['hostgroup_id']))
		$sublink .= "&hostgroup_id=".$_GET['hostgroup_id'];
	if(isset($_GET['host_template_id']))
		$sublink .= "&host_template_id=".$_GET['host_template_id'];
	if(isset($_GET['service_id']))
		$sublink .= "&service_id=".$_GET['service_id'];
	if(isset($_GET['service_template_id']))
		$sublink .= "&service_template_id=".$_GET['service_template_id'];
}

$period_list = array();
$lilac->return_period_list($tempList);
foreach($tempList as $period) {
	$period_list[] = array("timeperiod_id" => $period->getId(), "timeperiod_name" => $period->getName());
}


if(isset($_GET['request'])) {
	if($_GET['request'] == "delete" && $_GET['section'] == 'contacts') {
		if(!empty($_GET['contactgroup_id'])) {
			$membership = NagiosEscalationContactgroupPeer::retrieveByPK($_GET['contactgroup_id']);
			if($membership) {
				$membership->delete();
				$success = "Contact Group Deleted";
			}			
		}
		else if(!empty($_GET['contact_id'])) {
			$c = new Criteria();
			$c->add(NagiosEscalationContactPeer::ESCALATION, $_GET['id']);
			$c->add(NagiosEscalationContactPeer::CONTACT, $_GET['contact_id']);
			$membership = NagiosEscalationContactPeer::doSelectOne($c);
			if($membership) {
				$membership->delete();
				$success = "Contact deleted.";
			}
		}
		unset($_GET['request']);
	}
}
	
// Action Handlers
if(isset($_POST['request'])) {

	
	if($_POST['request'] == 'escalation_modify_general') {
		// Field Error Checking
		if(count($_POST['escalation_manage'])) {
			foreach($_POST['escalation_manage'] as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if((isset($_POST['escalation_manage_enablers']['first_notification']) && !is_numeric($_POST['escalation_manage']['first_notification'])) || 
		(isset($_POST['escalation_manage_enablers']['first_notification']) && !($_POST['escalation_manage']['first_notification'] >= 1)) ||
		(isset($_POST['escalation_manage_enablers']['last_notification']) && !is_numeric($_POST['escalation_manage']['last_notification'])) || 
		(isset($_POST['escalation_manage_enablers']['last_notification']) && !($tempData['service_manage']['last_notification'] >= 1)) ||
		(isset($_POST['escalation_manage_enablers']['notification_interval']) && !is_numeric($tempData['service_manage']['notification_interval'])) || 
		(isset($_POST['escalation_manage_enablers']['notification_interval']) && !($tempData['service_manage']['notification_interval'] >= 1)) ) {
			$error = "Incorrect values for fields.  Please verify.";
		}

		
		if($escalation) {
			$escalation->setDescription($_POST['escalation_manage']['escalation_description']);
			$escalation->setFirstNotification($_POST['escalation_manage']['first_notification']);
			$escalation->setLastNotification($_POST['escalation_manage']['last_notification']);
			$escalation->setNotificationInterval($_POST['escalation_manage']['notification_interval']);
			$escalation->setEscalationPeriod($_POST['escalation_manage']['escalation_period']);
			
			if(isset($_POST['escalation_manage']['escalation_options_down'])) {
				$escalation->setEscalationOptionsDown(true);
			}
			else {
				$escalation->setEscalationOptionsDown(false);
			}
			if(isset($_POST['escalation_manage']['escalation_options_unreachable'])) {
				$escalation->setEscalationOptionsUnreachable(true);
			}
			else {
				$escalation->setEscalationOptionsUnreachable(false);
			}
			if(isset($_POST['escalation_manage']['escalation_options_ok'])) {
				$escalation->setEscalationOptionsOk(true);
			}
			else {
				$escalation->setEscalationOptionsOk(false);
			}			
			if(isset($_POST['escalation_manage']['escalation_options_up'])) {
				$escalation->setEscalationOptionsUp(true);
			}
			else {
				$escalation->setEscalationOptionsUp(false);
			}			
			if(isset($_POST['escalation_manage']['escalation_options_warning'])) {
				$escalation->setEscalationOptionsWarning(true);
			}
			else {
				$escalation->setEscalationOptionsWarning(false);
			}
			if(isset($_POST['escalation_manage']['escalation_options_unknown'])) {
				$escalation->setEscalationOptionsUnknown(true);
			}
			else {
				$escalation->setEscalationOptionsUnknown(false);
			}
			if(isset($_POST['escalation_manage']['escalation_options_critical'])) {
				$escalation->setEscalationOptionsCritical(true);
			}
			else {
				$escalation->setEscalationOptionsCritical(false);
			}
			$escalation->save();
			$success = "Escalation modified.";
			unset($_GET['edit']);
		}
	}
	else if($_POST['request'] == 'add_contactgroup_command') {
		if($lilac->escalation_has_contactgroup($_GET['id'], $_POST['escalation_manage']['contactgroup_add']['contactgroup_id'])) {
			$error = "That contact group already exists in that list!";
			unset($_POST['escalation_manage']);
		}
		else {
			$membership = new NagiosEscalationContactgroup();
			$membership->setNagiosEscalation($escalation);
			$membership->setContactgroup($_POST['escalation_manage']['contactgroup_add']['contactgroup_id']);
			$membership->save();
			$success = "New Escalation Contact Group Link added.";
			unset($_POST['escalation_manage']);
		}
	}
	else if($_POST['request'] == 'add_contact_command') {
		$c = new Criteria();
		$c->add(NagiosEscalationContactPeer::ESCALATION, $_GET['id']);
		$c->add(NagiosEscalationContactPeer::CONTACT, $_POST['escalation_manage']['contact_add']['contact_id']);
		$membership = NagiosEscalationContactPeer::doSelectOne($c);
		if($membership) {
			$error = "That contact already exists in that list!";
		}
		else {
			$tempContact = NagiosContactPeer::retrieveByPk($_POST['escalation_manage']['contact_add']['contact_id']);
			if($tempContact) {
				$membership = new NagiosEscalationContact();
				$membership->setEscalation($_GET['id']);
				$membership->setNagiosContact($tempContact);
				$membership->save();
				$success = "New Escalation Contact Link added.";				
			}
			else {
				$error = "That contact is not found.";
			}
		}
	}	

}

if(isset($_GET['id'])) {
	if(!$lilac->get_escalation($_GET['id'], $escalation)) {
		header("Location: welcome.php");
		die();
	}
}
	
$title = '';
if($escalation->getNagiosService() || $escalation->getNagiosServiceTemplate()) {
	$title .= "Service ";
	if($escalation->getNagiosServiceTemplate()) {
		$title .= "Template <i>" . $escalation->getNagiosServiceTemplate()->getName() . "</i>";
		$sublink = "service_template.php?id=" . $escalation->getNagiosServiceTemplate()->getId();
		$subText = "Return To Service Template " . $escalation->getNagiosServiceTemplate()->getName();
	}
	else {
		$title .= "<i>" . $escalation->getNagiosService()->getDescription() . "</i> On ";
		if($escalation->getNagiosService()->getNagiosHostTemplate()) {
			$title .= " Host Template <i>" . $escalation->getNagiosService()->getNagiosHostTemplate()->getName() . "</i>";
		}
		else if($escalation->getNagiosService()->getNagiosHost()) {
			$title .= "Host " . "<i>" . $escalation->getNagiosService()->getNagiosHost()->getName() . "</i>";
		}
		$sublink = "service.php?id=" . $escalation->getNagiosService()->getId();
		$subText = "Return To Service " . $escalation->getNagiosService()->getDescription();
	}
}
else {	
	if($escalation->getNagiosHostTemplate()) {
		$title .= "Host Template <i>" . $escalation->getNagiosHostTemplate()->getName() . "</i>";
		$sublink = "host_template.php?id=" . $escalation->getNagiosHostTemplate()->getId();
		$subText = "Return To Host Template " . $escalation->getNagiosHostTemplate()->getName();
	}
	else if($escalation->getNagiosHost()) {
		$title .= "Host <i>" . $escalation->getNagiosHost()->getName() . "</i>";
		$sublink = "hosts.php?id=" . $escalation->getNagiosHost()->getId();
		$subText = "Return To Host " . $escalation->getNagiosHost()->getName();
	}
	else if($escalation->getNagiosHostgroup()) {
		$title .= "Hostgroup <i>" . $escalation->getNagiosHostgroup()->getName() . "</i>";
		$sublink = "hostgroups.php?id=" . $escalation->getNagiosHostgroup()->getId();
		$subText = "Return To Hostgroup " . $escalation->getNagiosHostgroup()->getName();
	}

}
	
// Build subnav
$subnav = array(
	'general' => 'General',
	'contacts' => 'Contacts'
	);	


print_header("Escalation Editor for " . $title);
?>
<?php
	// Show service information table if selected
	if($_GET['id']) {	
		print_window_header($escalation->getDescription() . " Escalation Information", "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		if($_GET['section'] == 'general') {
			if(!$escalation->getService() && !$escalation->getServiceTemplate())
				$escalation_image = $path_config['image_root'] . "server.gif";
			else
				$escalation_image = $path_config['image_root'] . "services.gif";
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $escalation_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information					
					?>
					<form name="escalation_manage" method="post" action="escalation.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
					<input type="hidden" name="request" value="escalation_modify_general" />
					
					<b>Escalation Description:</b> <input type="text" name="escalation_manage[escalation_description]" value="<?php echo $escalation->getDescription();?>" />
					<?php echo $lilac->element_desc("escalation_description", "nagios_escalations_desc"); ?><br />
					<br />
					<b>First Notification:</b> <input type="text" name="escalation_manage[first_notification]" value="<?php echo $escalation->getFirstNotification();?>" size="2" maxlength="2" />
					<?php echo $lilac->element_desc("first_notification", "nagios_escalations_desc"); ?><br />
					<br />
					<b>Last Notification:</b> <input type="text" name="escalation_manage[last_notification]" value="<?php echo $escalation->getLastNotification();?>" size="2" maxlength="2" />
					<?php echo $lilac->element_desc("last_notification", "nagios_escalations_desc"); ?><br />
					<br />
					<b>Notification Interval:</b> <input type="text" name="escalation_manage[notification_interval]" value="<?php echo $escalation->getNotificationInterval();?>" size="8" maxlength="8" />
					<?php echo $lilac->element_desc("notification_interval", "nagios_escalations_desc"); ?><br />
					<br />
					<b>Escalation Period:</b> <?php print_select("escalation_manage[escalation_period]", $period_list, "timeperiod_id", "timeperiod_name",($escalation->getEscalationPeriod() != null) ? $escalation->getEscalationPeriod() : '');?>
					<?php echo $lilac->element_desc("escalation_period", "nagios_escalations_desc"); ?><br />
					<br />
					<?php
						?>
						<table width="100%" border="0">
						<tr>
							<td colspan="2">
							<b>Execution Failure Criteria</b>
							</td>
						</tr>
						<tr>
							<td width="150" valign="top">
							<?php
					if(($escalation->getService()) || $escalation->getServiceTemplate())	{ // It's a service escalation
						?>
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsOk() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_ok]" value="1">Ok<br />
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsWarning() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_warning]" value="1">Warning<br />
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsUnknown() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_unknown]" value="1">Unknown<br />
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsCritical() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_critical]" value="1">Critical<br />
						<?php
					}
					else {
						?>
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsUp() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_up]" value="1">Up<br />
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsDown() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_down]" value="1">Down<br />
							<input type="checkbox" <?php echo  (($escalation->getEscalationOptionsUnreachable() == 1) ? "CHECKED" : '');?> name="escalation_manage[escalation_options_unreachable]" value="1">Unreachable<br />
						<?php
					}
					?>
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("escalation_options", "nagios_escalations_desc"); ?></td>
						</tr>
						</table>

					<br />
					<br />
					<input class="btn btn-primary" type="submit" value="Update General" /> <a class="btn btn-default" href="escalation.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Attached To <?php
					if($escalation->getHost() !== null && !($escalation->getService() !== null))
						print("Host:</b> " . $escalation->getNagiosHost()->getName());
					else if($escalation->getHostTemplate())
						print("Host Template:</b> " . $escalation->getNagiosHostTemplate()->getName());
					else if($escalation->getService()) {
						if($escalation->getNagiosService()->getNagiosHost() !== null)
							print("Service:</b> " . $escalation->getNagiosService()->getDescription() . " On " . $escalation->getNagiosService()->getNagiosHost()->getName());
						else 
							print("Service:</b> " . $escalation->getNagiosService()->getDescription() . " On Host Template " . $escalation->getNagiosService()->getNagiosHostTemplate()->getName());
					}
					else if($escalation->getServiceTemplate()) {
						print("Service Template:</b> " . $escalation->getNagiosServiceTemplate()->getName());
					}
					else if($escalation->getHostgroup() !== null) {
						print("Hostgroup:</b> " . $escalation->getNagiosHostgroup()->getName());
					}
					?><br />
					<b>Description:</b> <?php echo $escalation->getDescription();?><br />
					<br />
					<b>Included In Definition:</b></br >
					<?php
					if($escalation->getFirstNotification() != null) {
						?>
						<b>First Notification:</b> #<?php echo $escalation->getFirstNotification();?> Notification<br />
						<?php
					}
					if($escalation->getLastNotification() != null) {
						?>
						<b>Last Notification:</b> #<?php echo $escalation->getLastNotification();?> Notification<br />
						<?php
					}
					if($escalation->getNotificationInterval() != null) {
						?>
						<b>Notification Interval:</b> <?php echo $escalation->getNotificationInterval();?> Time-Units<br />
						<?php
					}
					if($escalation->getEscalationPeriod()) {
						?>
						<b>Escalation Period:</b> <?php echo $lilac->return_period_name($escalation->getEscalationPeriod());?><br />
						<?php
					}
					if($escalation->getEscalationOptionsUp() != null || $escalation->getEscalationOptionsDown() != null || $escalation->getEscalationOptionsUnreachable() != null || $escalation->getEscalationOptionsOk() != null || $escalation->getEscalationOptionsWarning() != null || $escalation->getEscalationOptionsUnknown() != null || $escalation->getEscalationOptionsCritical() != null) {
						?>
						<b>Escalation Options:</b>
						<?php
						if($escalation->getEscalationOptionsUp()) {
							print("Up");
							if($escalation->getEscalationOptionsDown() || $escalation->getEscalationOptionsUnreachable() || $escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
								print(",");
						}
						if($escalation->getEscalationOptionsDown()) {
							print("Down");
							if($escalation->getEscalationOptionsUnreachable() || $escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
								print(",");
						}
						if($escalation->getEscalationOptionsUnreachable()) {
							print("Unreachable");
							if($escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
								print(",");
						}
						if($escalation->getEscalationOptionsOk()) {
							print("Ok");
								if($escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
									print(",");
						}
						if($escalation->getEscalationOptionsWarning()) {
							print("Warning");
								if($escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
									print(",");
						}
						if($escalation->getEscalationOptionsUnknown()) {
							print("Unknown");
								if($escalation->getEscalationOptionsCritical() )
									print(",");
						}
						if($escalation->getEscalationOptionsCritical()) {
							print("Critical");
						}
						print("<br />");
					}
					?>
					<br />
					<a class="btn btn-primary" href="escalation.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<?php				
		}
		else if($_GET['section'] == "contacts") {
			$contacts_list = $escalation->getNagiosEscalationContacts();

			$numOfContacts = count($contacts_list);
			?>
				<table width="100%" border="0">
				<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Contacts Explicitly Linked to This Escalation:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="escalation.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contact_id=<?php echo $contacts_list[$counter]->getNagiosContact()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
				<form name="escalation_contact_add" method="post" action="escalation.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contact_command" />
				<b>Add New Contact:</b> <?php
			   if(!count($contacts_list)) {
			   ?><strong>No Contacts Available</strong><br /><?php
			   }
			   else {
		   		   print_select("escalation_manage[contact_add][contact_id]", $contacts_list, "contact_id", "contact_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact"><br /><?php
			   }
			?>
				<?php echo $lilac->element_desc("contact_groups", "nagios_escalations_desc"); ?><br />
				<br />
				</form>
				</td>
				</tr>
				</table>
				<?php




			$contactgroups_list = array();
			$lilac->return_escalation_contactgroups_list($_GET['id'], $tempList);
			foreach($tempList as $contactgroup) {
				$contactgroups_list[] = array("contactgroup_id" => $contactgroup->getId(), "contactgroup_name" => $contactgroup->getName());
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
					<td colspan="2">Contact Groups Explicitly Linked to This Escalation:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="escalation.php?id=<?php echo $_GET['id'];?>&section=contacts&request=delete&contactgroup_id=<?php echo $contactgroups_list[$counter]['contactgroup_id'];?>">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $lilac->return_contactgroup_name($contactgroups_list[$counter]['contactgroup_id']);?>:</b> <?php echo $lilac->return_contactgroup_alias($contactgroups_list[$counter]['contactgroup_id']);?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php	
				$contactgroups_list = array();
				$lilac->get_contactgroup_list($tempList);
				foreach($tempList as $contactgroup) {
					$contactgroups_list[] = array("contactgroup_id" => $contactgroup->getId(), "contactgroup_name" => $contactgroup->getName());
				}
				?>
				<br />
				<br />
				<form name="service_template_contactgroup_add" method="post" action="escalation.php?id=<?php echo $_GET['id'];?>&section=contacts">
				<input type="hidden" name="request" value="add_contactgroup_command" />
				<input type="hidden" name="escalation_manage[contactgroup_add][escalation_id]" value="<?php echo $_GET['id'];?>" />
				<b>Add New Contact Group:</b> <?php
			   if(!count($contactgroups_list)) {
			   ?><strong>No Contact Groups Available</strong><br /><?php
			   }
			   else {
		   		   print_select("escalation_manage[contactgroup_add][contactgroup_id]", $contactgroups_list, "contactgroup_id", "contactgroup_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Contact Group"><br /><?php
			   }
				?>
				<?php echo $lilac->element_desc("contact_groups", "nagios_escalations_desc"); ?><br />
				<br />
				</form>
				</td>
			</tr>
			</table>
			<?php
		}
		?>
		<a href="<?php echo $sublink;?>"><?php echo $subText;?></a>
		<?php
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
