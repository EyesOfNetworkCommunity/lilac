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
Lilac Host Groups Management Page
*/
include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("Hostgroup");

if(!isset($_GET['section']) && isset($_GET['id']))
	$_GET['section'] = 'general';


if(isset($_GET['id'])) {
	$hostgroup = NagiosHostgroupPeer::retrieveByPK($_GET['id']);
	if(!$hostgroup) {
		header("Location: hostgroups.php");
		die();
	}
}
	
	
// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete" && $_GET['section'] == 'services') {
			$service = NagiosServicePeer::retrieveByPK($_GET['service_id']);
			if($service) {
				$service->delete();
				$success = "Service Deleted";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'dependencies') {
			$dependency = NagiosDependencyPeer::retrieveByPK($_GET['dependency_id']);
			if($dependency) {
				$dependency->delete();
				$success = "Dependency Deleted";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'escalations') {
			$escalation = NagiosEscalationPeer::retrieveByPK($_GET['escalation']);
			if($escalation) {
				$escalation->delete();
				$success = "Escalation Deleted";
			}
		}
		else if($_GET['request'] == "delete" && $_GET['section'] == 'general') {
			$hostgroup->delete();
			$success = "Hostgroup Deleted.";
			unset($hostgroup);
			unset($_GET['request']);
			unset($_GET['id']);
		}

}

if(isset($_POST['request'])) {
	if($_POST['request'] == 'add_hostgroup') {
		// Check for pre-existing contact with same name
		if($lilac->hostgroup_exists($_POST['hostgroup_name'])) {
			$error = "A host group with that name already exists!";
		}
		else {
			// Field Error Checking
			if(trim($_POST['hostgroup_name']) == '' || trim($_POST['alias']) == '') {
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				// All is well for error checking, add the hostgroup into the db.
				$hostGroup = new NagiosHostgroup();
				$hostGroup->setAlias($_POST['alias']);
				$hostGroup->setName($_POST['hostgroup_name']);				
				$hostGroup->save();				
				header("Location: hostgroups.php?id=" . $hostGroup->getId());
				die();
			}
		}
	}
	else if($_POST['request'] == 'modify_hostgroup') {
		if($_POST['hostgroup_name'] != $hostgroup->getName() && $lilac->hostgroup_exists($_POST['hostgroup_name'])) {
			$error = "A host group with that name already exists!";
		}
		else {
			// Error check!
			// Field Error Checking
			if(trim($_POST['hostgroup_name']) == '' || trim($_POST['alias']) == '') {
				$addError = 1;
				$error = "Fields shown are required and cannot be left blank.";
			}
			else {
				// All is well for error checking, modify the group.
				$hostgroup->setName($_POST['hostgroup_name']);
				$hostgroup->setAlias($_POST['alias']);
				$hostgroup->save();
				$success = "Host group modified.";
				unset($_GET['edit']);
			}
		}
	}
	else if($_POST['request'] == 'modify_hostgroup_extended') {
		$hostgroup->setNotes($_POST['notes']);
		$hostgroup->setNotesUrl($_POST['notes_url']);
		$hostgroup->setActionUrl($_POST['action_url']);
		$hostgroup->save();
		$success = "Host group modified.";
		unset($_GET['edit']);
	}
}

// Get list of host groups
$lilac->get_hostgroup_list($hostgroups_list);
$numOfHostGroups = count($hostgroups_list);

if(isset($_GET['id']) && !isset($_GET['edit'])) {
	$hostgroup = NagiosHostgroupPeer::retrieveByPK($_GET['id']);
	if(!$hostgroup) {
		unset($_GET['id']);
	}
}

	
print_header("Host Group Editor");
?>
<?php
	if(isset($_GET['id'])) {
		// Build subnav
		$subnav = array(
				'general' => 'General',
				'members' => 'Members',
				'extended' => 'Extended Information',
				'dependencies' => 'Dependencies',
				'escalations' => 'Escalations',
				'services' => 'Services'
			);
		
		// PLACEHOLDER TO PUT CONTACT GROUP INFO
		print_window_header("Group Info for " . $hostgroup->getName(), "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		if($_GET['section'] == 'general') {
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
					<form name="command_form" method="post" action="hostgroups.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
						<input type="hidden" name="request" value="modify_hostgroup" />
						<b>Host Group Name:</b> <input type="text" name="hostgroup_name" value="<?php echo $hostgroup->getName();?>">
						<?php echo $lilac->element_desc("hostgroup_name", "nagios_hostgroups_desc"); ?><br />
						<br />
						<b>Description:</b><br />
						<input type="text" size="80" name="alias" value="<?php echo $hostgroup->getAlias();?>">
						<?php echo $lilac->element_desc("alias", "nagios_hostgroups_desc"); ?><br />
						<br />
						<br />
						<input class="btn btn-primary" type="submit" value="Modify Host Group" /> <a class="btn btn-default" href="hostgroups.php">Cancel</a>
					</form>
					<?php
				}
				else {
					?>
					<b>Host Group Name:</b> <?php echo $hostgroup->getName();?><br />
					<b>Description:</b> <?php echo $hostgroup->getAlias();?><br />
					<br />
					<a class="btn btn-primary" href="hostgroups.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="hostgroups.php?id=<?php echo $_GET['id'];?>&request=delete" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete This Host Group</a>
			<?php
		}
		if($_GET['section'] == 'members') {
			$members = $hostgroup->getMembers();
			?>
				<table width="100%" border="0">
				<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>servergroup.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Hosts Members of this Hostgroup (Either Explicitly or through a host templates):</td>
				</tr>
				<?php
				$counter = 0;
			if(count($members)) {
				foreach($members as $host) {
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
					<td height="20" class="altRight"><b><a href="hosts.php?id=<?php echo $host->getId();?>"><?php echo $host->getName();?></a></b></td>
						</tr>
						<?php
						$counter++;
				}
			}
			?>
				</table>
				</td>
				</tr>
				</table>
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
					<form name="command_form" method="post" action="hostgroups.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">
						<input type="hidden" name="request" value="modify_hostgroup_extended" />
						<b>Notes:</b> <input type="text" name="notes" value="<?php echo $hostgroup->getNotes();?>">
						<?php echo $lilac->element_desc("notes", "nagios_hostgroups_desc"); ?><br />
						<br />
						<b>Notes URL:</b> <input type="text" name="notes_url" value="<?php echo $hostgroup->getNotesUrl();?>">
						<?php echo $lilac->element_desc("notes", "nagios_hostgroups_desc"); ?><br />
						<br />
						<b>Action URL:</b> <input type="text" name="action_url" value="<?php echo $hostgroup->getActionUrl();?>">
						<?php echo $lilac->element_desc("notes", "nagios_hostgroups_desc"); ?><br />
						<br />
						<br />
						<input class="btn btn-primary" type="submit" value="Modify Host Group Extended Information" /> <a class="btn btn-default" href="hostgroups.php">Cancel</a>
					</form>
					<?php
				}
				else {
					if($hostgroup->getNotes() != '') {
						?>
						<b>Notes:</b> <?php echo $hostgroup->getNotes();?><br />
						<?php
					}
					if($hostgroup->getNotesUrl() != '') {
						?>
							<b>Notes URL:</b> <?php echo $hostgroup->getNotesUrl();?><br />
						<?php
					}
					if($hostgroup->getActionUrl() != '') {
						?>
						<b>Action URL:</b> <?php echo $hostgroup->getActionUrl();?><br />
						<?php
					}
					?>
					<br />
					<a class="btn btn-primary" href="hostgroups.php?id=<?php echo $_GET['id'];?>&section=extended&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			<a class="btn btn-danger" href="hostgroups.php?id=<?php echo $_GET['id'];?>&request=delete" onClick="javascript:return confirmDelete();" onClick="javascript:return confirmDelete();">Delete This Host Group</a>
			<?php
		}
		else if($_GET['section'] == 'dependencies') {
			$dependencies_list = $hostgroup->getNagiosDependencys();
			$numOfDependencies = count($dependencies_list);
			?>
				<table width="100%" border="0">
				<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Depdendencies Explicitly Linked to This Hostgroup:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hostgroups.php?id=<?php echo $_GET['id'];?>&section=dependencies&request=delete&dependency_id=<?php echo $dependency->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
				<a class="btn btn-primary" href="add_dependency.php?hostgroup_id=<?php echo $_GET['id'];?>">Create A New Dependency For This Hostgroup</a>
				</td>
				</tr>
				</table>
				<?php
		}

		else if($_GET['section'] == 'services') {
			$c = new Criteria();
			$c->add(NagiosServicePeer::HOSTGROUP, $_GET['id']);
			$hostgroupServiceList = NagiosServicePeer::doSelect($c);
			
			$numOfServices = count($hostgroupServiceList);
			
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>services.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Services Explicitly Linked to This Hostgroup:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hostgroups.php?id=<?php echo $_GET['id'];?>&section=services&request=delete&service_id=<?php echo $hostgroupServiceList[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><b><a href="service.php?id=<?php echo $hostgroupServiceList[$counter]->getId();?>"><?php echo $hostgroupServiceList[$counter]->getDescription();?></a></b></td>
						</tr>
						<?php
					}
					?>
				</table>
				<br />
				<br />
				<a class="btn btn-primary" href="add_service.php?hostgroup_id=<?php echo $_GET['id'];?>">Create A New Service For This Hostgroup</a>
				<br />
				</td>
			</tr>
			</table>
			<?php
		}
		else if($_GET['section'] == 'escalations') {
			$escalations_list = $hostgroup->getNagiosEscalations();
			$numOfEscalations = count($escalations_list);
			?>
				<table width="100%" border="0">
				<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Escalations Explicitly Linked to This Hostgroup:</td>
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="hostgroups.php?id=<?php echo $_GET['id'];?>&section=escalations&request=delete&escalation_id=<?php echo $escalation->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
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
				<a class="btn btn-primary" href="add_escalation.php?hostgroup_id=<?php echo $_GET['id'];?>">Create A New Escalation For This Hostgroup</a>
				</td>
				</tr>
				</table>
				<?php
		}

		print_window_footer();
	}
	if(!isset($_GET['hostgroup_add'])) {
		print_window_header("Host Group Listing", "100%");
		?>
		<a class="sublink btn btn-success" href="hostgroups.php?hostgroup_add=1">Add A New Host Group</a><br />
		<br />
		<?php
		
		if($numOfHostGroups) {
			?>
                        <form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("Hostgroup");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Group Name</td>
			<td>Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_Hostgroup');">ALL</a></td>		
			</tr>
			<?php
			for($counter = 0; $counter < $numOfHostGroups; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="hostgroups.php?id=<?php echo $hostgroups_list[$counter]->getId();?>"><?php echo $hostgroups_list[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $hostgroups_list[$counter]->getAlias();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_Hostgroup[]" value="<?php echo $hostgroups_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<div class="statusmsg">No Host Groups Exist</div>
			<?php
		}
		print_window_footer();
		print("<br /><br />");
	}
	if(isset($_GET['hostgroup_add'])) {	
		print_window_header("Add A Host Group", "100%");
		?>
		<form name="command_form" method="post" action="hostgroups.php?hostgroup_add=1">
			<input type="hidden" name="request" value="add_hostgroup" />
			<b>Host Group Name:</b> <input type="text" name="hostgroup_name" value="">
			<?php echo $lilac->element_desc("hostgroup_name", "nagios_hostgroups_desc"); ?><br />
			<br />
			<b>Description:</b><br />
			<input type="text" size="80" name="alias" value="">
			<?php echo $lilac->element_desc("alias", "nagios_hostgroups_desc"); ?><br />
			<br />
			<br />
			<input class="btn btn-primary" type="submit" value="Add Host Group" /> <a class="btn btn-default" href="hostgroups.php">Cancel</a>
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
