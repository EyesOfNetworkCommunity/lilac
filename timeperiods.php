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
Time Period Manager
*/

include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("Timeperiod");

// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete") {
			// !!!!!!!!!!!!!! This is where we do dependency error checking
			$lilac->delete_period($_GET['timeperiod_id']);
			$success = "Period Deleted";
			unset($_GET['timeperiod_id']);
		}
}

if(isset($_POST['request'])) {
	// Load Up The Session Data
	
	if($_POST['request'] == 'add_period') {
		// Check for valid field entry
		if(trim($_POST['timeperiod_manage']['timeperiod_name']) == '' || trim($_POST['timeperiod_manage']['alias']) == '') {
			$error = "Fields must be filled in.";
		}
		else {
			
			// Check for pre-existing command with same name
			if($lilac->period_exists($_POST['timeperiod_manage']['timeperiod_name'])) {
				$error = "A time period with that name already exists!";
			}
			else {
				// All is well for error checking, add the command into the db.
				$timeperiod = new NagiosTimeperiod();
				$timeperiod->setName($_POST['timeperiod_manage']['timeperiod_name']);
				$timeperiod->setAlias($_POST['timeperiod_manage']['alias']);
				$timeperiod->save();
				// Remove session data
				unset($_GET['timeperiod_add']);
				$success = "Time period added.";
			}
		}
	}
}
if(isset($_GET['timeperiod_id'])) {
	$timeperiod = NagiosTimeperiodPeer::retrieveByPK($_GET['timeperiod_id']);
}

// Get list of commands
$lilac->return_period_list($period_list);
$numOfPeriods = count($period_list);

print_header("Time Period Editor");

	if(isset($_GET['timeperiod_id']) || isset($_GET['timeperiod_add'])) {
		if(isset($_GET['timeperiod_id'])) {
			print_window_header("Modify A Time Period", "100%");
		}
		else {
			print_window_header("Add A Time Period", "100%");
		}
		?>
		<form name="timeperiod_form" method="post" action="timeperiods.php?timeperiod_add=1">
			<?php 
				if(isset($timeperiod))	{
					?>
					<input type="hidden" name="request" value="modify_period" />
					<input type="hidden" name="timeperiod_manage[timeperiod_id]" value="<?php echo $timeperiod->getId();?>">
					<?php
				}
				else {
					?>
					<input type="hidden" name="request" value="add_period" />
					<?php
				}
			?>
			<b>Time Period Name:</b><br />
			<input type="text" name="timeperiod_manage[timeperiod_name]" value="<?php echo isset($timeperiod) ? $timeperiod->getName() : '';?>">
			<?php echo $lilac->element_desc("timeperiod_name", "nagios_timeperiods_desc"); ?><br />
			<br />
			<b>Description:</b><br />
			<input type="text" size="80" name="timeperiod_manage[alias]" value="<?php echo isset($timeperiod) ? $timeperiod->getAlias() : '';?>">
			<?php echo $lilac->element_desc("alias", "nagios_timeperiods_desc"); ?><br />
			<br />
			<?php 
				if(isset($_GET['timeperiod_id'])) {
					?>
					<a class="btn btn-danger" href="timeperiods.php?timeperiod_id=<?php echo $_GET['timeperiod_id'];?>&request=delete">Delete</a> <input class="btn btn-primary" type="submit" value="Modify Period" />&nbsp;<a href="timeperiods.php">Cancel</a>
					<?php
				}
				else {
					?>
					<input class="btn btn-primary" type="submit" value="Create Period" /> <a class="btn btn-default" href="timeperiods.php">Cancel</a>
					<?php
				}
			?>
			<br /><br />
		<?php
		print_window_footer();
	}
	else {
		print_window_header("Time Period Listings", "100%");
		?>
		<a class="sublink btn btn-success" href="timeperiods.php?timeperiod_add=1">Add A New Time Period</a><br />
		<?php
		if($numOfPeriods) {
			?>
			<br />
                        <form name="EoN_Actions_Form" method="post">
                        <?php echo EoN_Actions("Timeperiod");?>
			<table class="listing">
			<tr class="altTop">
			<td>Period Name</td>
			<td>Period Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_Timeperiod');">ALL</a></td>
			</tr>
			<?php
			for($counter = 0; $counter < $numOfPeriods; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="timeperiod.php?timeperiod_id=<?php echo $period_list[$counter]->getId();?>"><?php echo $period_list[$counter]->getName();?></a></td>
				<td height="20" class="altRight" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');"><?php echo $period_list[$counter]->getAlias();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_Timeperiod[]" value="<?php echo $period_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<br />
			<div class="statusmsg">No Periods Exist</div>
			<?php
		}
		print_window_footer();
	}
	
print_footer();
?>
