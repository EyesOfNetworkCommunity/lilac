<?php
/*
Lilac - A Nagios Configuration Tool
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

/*
Lilac Service Groups Management Page
*/
include_once('includes/config.inc');
require_once('NagiosServiceGroupMember.php');

// EoN_Actions
EoN_Actions_Process("ServiceGroup");

if(!isset($_GET['section']) && isset($_GET['id']))
	$_GET['section'] = 'general';

// If we're going to modify servicegroup data
if(isset($_GET['id'])) {
			
	$serviceGroup = NagiosServiceGroupPeer::retrieveByPK($_GET['id']);
	if(!$serviceGroup) {
		header("Location: welcome.php");
		die();
	}

}
	

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'members') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$membership = NagiosServiceGroupMemberPeer::retrieveByPK($_GET['member_id']);
			if($membership) {
				$membership->delete();
				$success = "Member Deleted";
			}
		}
		if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			$serviceGroup->delete();
			$success = "Service Group Deleted.";
			unset($serviceGroup);
			unset($_GET['id']);
		}
}

if(isset($_POST['request'])) {
	if($_POST['request'] == 'add_servicegroup') {
		// Check for pre-existing contact with same name
		if($lilac->servicegroup_exists($_POST['servicegroup_name'])) {
			$error = "A service group with that name already exists!";
		}
		else {
			// Field Error Checking
			if($_POST['servicegroup_name'] == '' || $_POST['alias'] == '') {
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				// All is well for error checking, add the servicegroup into the db.
				$serviceGroup = new NagiosServiceGroup();
				$serviceGroup->setName($_POST['servicegroup_name']);
				$serviceGroup->setAlias($_POST['alias']);
				$serviceGroup->save();
				header("Location: servicegroups.php?id=" . $serviceGroup->getId());
				die();
			}
		}
	}
	else if($_POST['request'] == 'modify_servicegroup') {
		if($_POST['servicegroup_name'] != $serviceGroup->getName() && $lilac->servicegroup_exists($_POST['servicegroup_name'])) {
			$error = "A service group with that name already exists!";
		}
		else {
			// Error check!
			// Field Error Checking
			if($_POST['servicegroup_name'] == '' || $_POST['alias'] == '') {
				$addError = 1;
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				// All is well for error checking, modify the group.
				$serviceGroup->setName($_POST['servicegroup_name']);
				$serviceGroup->setAlias($_POST['alias']);
				$serviceGroup->save();
				$success = "Service group modified.";
				unset($_GET['edit']);
			}
		}
		$_GET['section'] = "general";
	}
	else if($_POST['request'] == 'modify_servicegroup_extended') {
		$serviceGroup->setNotes($_POST['notes']);
		$serviceGroup->setNotesUrl($_POST['notes_url']);
		$serviceGroup->setActionUrl($_POST['action_url']);
		$serviceGroup->save();
		$success = "Service group modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'add_contactgroup_command') {
		if($lilac->hostgroup_has_contactgroup($_GET['id'], $serviceGroup['contactgroup_add']['contactgroup_id'])) {
			$error = "That contact group already exists in that list!";
			unset($serviceGroup);
		}
		else {
			$lilac->add_hostgroup_contactgroup($_GET['id'], $serviceGroup['contactgroup_add']['contactgroup_id']);
			$success = "New Host Group Contact Group Link added.";
			unset($serviceGroup);
		}
	}	
}

// Get list of service groups
$lilac->get_servicegroup_list($servicegroups_list);
$numOfServiceGroups = count($servicegroups_list);


print_header("Service Group Editor");
?>
<?php
	if(isset($_GET['id'])) {
		// Build subnav
		$subnav = array(
				'general' => 'General',
				'extended' => 'Extended Information',
				'members' => 'Members'
			);
		
		// PLACEHOLDER TO PUT CONTACT GROUP INFO
		print_window_header("Group Info for " . $serviceGroup->getName(), "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		if($_GET['section'] == 'general') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>services.gif" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {
					?>
					<form name="servicegroup_form" method="post" action="servicegroups.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
						<input type="hidden" name="request" value="modify_servicegroup" />
						<input type="hidden" name="servicegroup_id" value="<?php echo $_GET['id'];?>">

						<b>Service Group Name:</b> <input type="text" name="servicegroup_name" value="<?php echo $serviceGroup->getName();?>">
						<?php echo $lilac->element_desc("servicegroup_name", "nagios_servicegroups_desc"); ?><br />
						<br />
						<b>Description:</b><br />
						<input type="text" size="80" name="alias" value="<?php echo $serviceGroup->getAlias();?>">
						<?php echo $lilac->element_desc("alias", "nagios_servicegroups_desc"); ?><br />
						<input class="btn btn-primary" type="submit" value="Modify Service Group" /> <a class="btn btn-default" href="servicegroups.php?id=<?php echo $_GET['id'];?>">Cancel</a>
					</form>
			<?php
				}
				else {
					?>
					<b>Service Group Name:</b> <?php echo $serviceGroup->getName();?><br />
					<b>Description:</b> <?php echo $serviceGroup->getAlias();?><br />
					<br />
					<a class="btn btn-primary" href="servicegroups.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="servicegroups.php?id=<?php echo $_GET['id'];?>&request=delete" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete This Service Group</a>
			<?php
		}
		if($_GET['section'] == 'extended') {
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>servergroup.gif" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {
					?>
					<form name="command_form" method="post" action="servicegroups.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">
						<input type="hidden" name="request" value="modify_servicegroup_extended" />
						<b>Notes:</b> <input type="text" name="notes" value="<?php echo $serviceGroup->getNotes();?>">
						<?php echo $lilac->element_desc("notes", "nagios_servicegroups_desc"); ?><br />
						<br />
						<b>Notes URL:</b> <input type="text" name="notes_url" value="<?php echo $serviceGroup->getNotesUrl();?>">
						<?php echo $lilac->element_desc("notes", "nagios_servicegroups_desc"); ?><br />
						<br />
						<b>Action URL:</b> <input type="text" name="action_url" value="<?php echo $serviceGroup->getActionUrl();?>">
						<?php echo $lilac->element_desc("notes", "nagios_servicegroups_desc"); ?><br />
						<br />
						<br />
						<input class="btn btn-primary" type="submit" value="Modify Host Group Extended Information" /> <a class="btn btn-default" href="servicegroups.php">Cancel</a>
					</form>
					<?php
				}
				else {
					if($serviceGroup->getNotes() != '') {
						?>
						<b>Notes:</b> <?php echo $serviceGroup->getNotes();?><br />
						<?php
					}
					if($serviceGroup->getNotesUrl() != '') {
						?>
							<b>Notes URL:</b> <?php echo $serviceGroup->getNotesUrl();?><br />
						<?php
					}
					if($serviceGroup->getActionUrl() != '') {
						?>
						<b>Action URL:</b> <?php echo $serviceGroup->getActionUrl();?><br />
						<?php
					}
					?>
					<br />
					<a class="btn btn-primary" href="servicegroups.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<?php
		}
		else if($_GET['section'] == 'members') {
			$c = new Criteria();
			$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP , $_GET['id']);
			
			$member_list = NagiosServiceGroupMemberPeer::doSelect($c);
			
			$numOfMembers = count($member_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>services.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Members:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfMembers; $counter++) {
						$member = $member_list[$counter];
						if($member->getTemplate()) {
							$text = "Service Template " . $member->getNagiosServiceTemplate()->getName();
						}
						else if($member->getService()) {
							if($member->getNagiosService()->getHostTemplate()) {
								// For host template
								$text = $member->getNagiosService()->getDescription() . " for Host Template " . $member->getNagiosService()->getNagiosHostTemplate()->getName();
							}
							else if($member->getNagiosService()->getHost()) {
								$text = $member->getNagiosService()->getDescription() . " for Host " . $member->getNagiosService()->getNagiosHost()->getName();
							}
						}
						
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="servicegroups.php?id=<?php echo $_GET['id'];?>&section=members&request=delete&member_id=<?php echo $member->getId();?>" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $text;?></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				</td>
			</tr>
			</table>
			<?php
		}
		print_window_footer();

		?>
		<?php
	}
	if(!isset($_GET['servicegroup_add'])) {	
		print_window_header("Service Group Listing", "100%");
		?>
		<a class="sublink btn btn-success" href="servicegroups.php?servicegroup_add=1">Add A New Service Group</a><br />
		<br />
		<?php
		if($numOfServiceGroups) {
			?>
                        <form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("ServiceGroup");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Group Name</td>
			<td>Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_ServiceGroup');">ALL</a></td>
			</tr>
	
			<?php
			for($counter = 0; $counter < $numOfServiceGroups; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="servicegroups.php?id=<?php echo $servicegroups_list[$counter]->getId();?>"><?php echo $servicegroups_list[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $servicegroups_list[$counter]->getAlias();?></td>
                <td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_ServiceGroup[]" value="<?php echo $servicegroups_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<div class="statusmsg">No Service Groups Exist</div>
			<?php
		}
		print_window_footer();
		print("<br /><br />");
	}


	if(isset($_GET['servicegroup_add'])) {	
		print_window_header("Add A Service Group", "100%");
		?>
		<form name="servicegroup_form" method="post" action="servicegroups.php">
			<input type="hidden" name="request" value="add_servicegroup" />
			<b>Service Group Name:</b> <input type="text" name="servicegroup_name" value="">
			<?php echo $lilac->element_desc("servicegroup_name", "nagios_servicegroups_desc"); ?><br />
			<br />
			<b>Description:</b><br />
			<input type="text" size="80" name="alias" value="">
			<?php echo $lilac->element_desc("alias", "nagios_servicegroups_desc"); ?><br />
			<br />
			<br />
			<input class="btn btn-primary" type="submit" value="Add Service Group" /> <a class="btn btn-default" href="servicegroups.php">Cancel</a>
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
