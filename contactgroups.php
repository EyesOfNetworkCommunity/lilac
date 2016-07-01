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
Lilac Contact Groups Management Page
*/
include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("ContactGroup");

if(!isset($_GET['section']) && isset($_GET['contactgroup_id']))
	$_GET['section'] = 'general';

if(isset($_GET['contactgroup_id'])) {
	$contactGroupInfo = NagiosContactGroupPeer::retrieveByPK($_GET['contactgroup_id']);
	if(!$contactGroupInfo) {
		header("Location: contactgroups.php");
		die();
	}
}

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'members') {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$c = new Criteria();
			$c->add(NagiosContactGroupMemberPeer::CONTACT, $_GET['contact_id']);
			$c->add(NagiosContactGroupMemberPeer::CONTACTGROUP, $contactGroupInfo->getId());
			$membership = NagiosContactGroupMemberPeer::doSelectOne($c);
			if($membership) {
				$membership->delete();	
				$success = "Member Deleted";
			}
		}
		if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			$contactGroupInfo->delete();
			$success = "Contact Group Deleted";
			unset($_GET['contactgroup_id']);
		}
}

if(isset($_POST['request'])) {

	if($_POST['request'] == 'add_contactgroup') {
		// Check for pre-existing contact with same name
		if($lilac->contactgroup_exists($_POST['contactgroup_manage']['contactgroup_name'])) {
			$error = "A contact group with that name already exists!";
		}
		else {
			// Field Error Checking
			if(count($_POST['contactgroup_manage'])) {
				foreach($_POST['contactgroup_manage'] as $tempVariable)
					$tempVariable = trim($tempVariable);
			}
			if($_POST['contactgroup_manage']['contactgroup_name'] == '' || $_POST['contactgroup_manage']['alias'] == '') {
				$addError = 1;
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				$lilac->add_contactgroup($_POST['contactgroup_manage']);
				$success = "Contact group added.";
			}
		}
	}
	else if($_POST['request'] == 'modify_contactgroup') {
		if($_POST['contactgroup_manage']['contactgroup_name'] != $contactGroupInfo->getName() && $lilac->contactgroup_exists($_POST['contactgroup_manage']['contactgroup_name'])) {
			$error = "A contact group with that name already exists!";
		}
		else {
			// Field Error Checking
			if(count($_POST['contactgroup_manage'])) {
				foreach($_POST['contactgroup_manage'] as $tempVariable)
					$tempVariable = trim($tempVariable);
			}
			if($_POST['contactgroup_manage']['contactgroup_name'] == '' || $_POST['contactgroup_manage']['alias'] == '') {
				$addError = 1;
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				// All is well for error checking, modify the contact.
				$contactGroupInfo->setName($_POST['contactgroup_manage']['contactgroup_name']);
				$contactGroupInfo->setAlias($_POST['contactgroup_manage']['alias']);
				$contactGroupInfo->save();
				$success = "Contact group modified.";
				unset($_GET['edit']);
			}
		}
		$_GET['section'] = "general";
	}
	else if($_POST['request'] == 'add_member_command') {
		$c = new Criteria();
		$c->add(NagiosContactGroupMemberPeer::CONTACT, $_POST['contactgroup_manage']['member_add']['contact_id']);
		$c->add(NagiosContactGroupMemberPeer::CONTACTGROUP, $contactGroupInfo->getId());
		if(NagiosContactGroupMemberPeer::doSelectOne($c)) {
			$error = "That member already exists in that list!";			
		}
		else {
			$membership = new NagiosContactGroupMember();
			$membership->setContact($_POST['contactgroup_manage']['member_add']['contact_id']);
			$membership->setContactgroup($contactGroupInfo->getId());
			$membership->save();
			$success = "New Contact Group Member added.";
		}
	}		
}

// Get list of contact groups
$lilac->get_contactgroup_list($contactgroups_list);
$numOfContactGroups = count($contactgroups_list);


print_header("Contact Group Editor");
	if(isset($_GET['contactgroup_id'])) {
		// Build subnav
		$subnav = array(
			'general' => 'General',
			'members' => 'Members'
			);
		
		// PLACEHOLDER TO PUT CONTACT GROUP INFO
		print_window_header("Group Info for " . $contactGroupInfo->getName(), "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?contactgroup_id=" . $_GET['contactgroup_id']);
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
					<form name="command_form" method="post" action="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>&edit=1">
						<input type="hidden" name="request" value="modify_contactgroup" />
						<b>Contact Group Name:</b> <input type="text" name="contactgroup_manage[contactgroup_name]" value="<?php echo $contactGroupInfo->getName();?>">
						<?php echo $lilac->element_desc("contactgroup_name", "nagios_contactgroups_desc"); ?><br />
						<br />
						<b>Description:</b><br />
						<input type="text" size="80" name="contactgroup_manage[alias]" value="<?php echo $contactGroupInfo->getAlias();?>">
						<?php echo $lilac->element_desc("alias", "nagios_contactgroups_desc"); ?><br />
						<br />
						<br />
						<input class="btn btn-primary" type="submit" value="Modify Contact Group" /> <a class="btn btn-default" href="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>">Cancel</a>
					</form>
					<?php
				}
				else {
					?>
					<b>Contact Group Name:</b> <?php echo $contactGroupInfo->getName();?><br />
					<b>Description:</b> <?php echo $contactGroupInfo->getAlias();?><br />
					<br />
					<a class="btn btn-primary" href="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>				
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>&request=delete" onClick="javascript:return confirmDelete();">Delete This Contact Group</a>
			<?php
		}
		else if($_GET['section'] == 'members') {
			$c = new Criteria();
			$c->add(NagiosContactGroupMemberPeer::CONTACTGROUP, $contactGroupInfo->getId());
			$c->addAscendingOrderByColumn(NagiosContactPeer::NAME);
			$member_list = NagiosContactGroupMemberPeer::doSelectJoinNagiosContact($c);
						
			$numOfMembers = count($member_list);
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>notification.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Members:</td>
					</tr>
					<?php
					for($counter = 0; $counter < $numOfMembers; $counter++) {
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;<a class="btn btn-danger btn-xs" href="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>&section=members&request=delete&contact_id=<?php echo $member_list[$counter]->getNagiosContact()->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><?php echo $member_list[$counter]->getNagiosContact()->getName();?>:</b> <?php echo $member_list[$counter]->getNagiosContact()->getAlias();?></td>
						</tr>
						<?php
					}
					?>
				</table>
				<?php
				$lilac->get_contact_list($tempList);
				$contact_list = array();
				foreach($tempList as $contact) {
					$contact_list[] = array('contact_id' => $contact->getId(), 'contact_name' => $contact->getName());
				}
				?>
				<br />
				<br />
				<form name="contactgroup_member_add" method="post" action="contactgroups.php?contactgroup_id=<?php echo $_GET['contactgroup_id'];?>&section=members">
				<input type="hidden" name="request" value="add_member_command" />
				<input type="hidden" name="contactgroup_manage[member_add][contactgroup_id]" value="<?php echo $_GET['contactgroup_id'];?>" />
				<b>Add New Member:</b> <?php
				if(!count($contact_list)) {
					?><strong>No Contacts Available</strong><br /><?php
				}
				else {
					print_select("contactgroup_manage[member_add][contact_id]", $contact_list, "contact_id", "contact_name", "0");?> <input class="btn btn-primary" type="submit" value="Add Member"><br /><?php
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
		print_window_footer();
		?>
		<?php
	}
	if(!isset($_GET['contactgroup_add'])) {	
		print_window_header("Contact Group Listings", "100%");
		?>
		<a class="sublink btn btn-success" href="contactgroups.php?contactgroup_add=1">Add A New Contact Group</a><br />
		<br />
		<?php
		if($numOfContactGroups) {
			?>
			<form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("ContactGroup");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Group Name</td>
			<td>Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_ContactGroup');">ALL</a></td>
			</tr>
			<?php
			for($counter = 0; $counter < $numOfContactGroups; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="contactgroups.php?contactgroup_id=<?php echo $contactgroups_list[$counter]->getId();?>"><?php echo $contactgroups_list[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $contactgroups_list[$counter]->getAlias();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_ContactGroup[]" value="<?php echo $contactgroups_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<div class="statusmsg">No Contact Groups Exist</div>
			<?php
		}
		print_window_footer();
		print("<br /><br />");
	}


	if(isset($_GET['contactgroup_add'])) {	
		print_window_header("Add A Contact Group", "100%");
		?>
		<form name="command_form" method="post" action="contactgroups.php">
			<input type="hidden" name="request" value="add_contactgroup" />
			<b>Contact Group Name:</b> <input type="text" name="contactgroup_manage[contactgroup_name]" value="">
			<?php echo $lilac->element_desc("contactgroup_name", "nagios_contactgroups_desc"); ?><br />
			<br />
			<b>Description:</b><br />
			<input type="text" size="80" name="contactgroup_manage[alias]" value="">
			<?php echo $lilac->element_desc("alias", "nagios_contactgroups_desc"); ?><br />
			<br />
			<br />
			<input class="btn btn-primary" type="submit" value="Add Contact Group" /> <a class="btn btn-default" href="contactgroups.php">Cancel</a>
			<br /><br />
		</form>
		<?php
		print_window_footer();
	}
	?>
	<br />
	<?php
print_footer();
?>
