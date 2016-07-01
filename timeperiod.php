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
Time Period Editor
*/

include_once('includes/config.inc');

if(!isset($_GET['section']) && isset($_GET['timeperiod_id']))
	$_GET['section'] = 'general';

if(isset($_GET['timeperiod_id'])) {
	$timeperiod = NagiosTimeperiodPeer::retrieveByPK($_GET['timeperiod_id']);
	if(!$timeperiod) {
		header("Location: timeperiods.php");
	}
}
else {
	header("Location: timeperiods.php");
}

// Dummy values for entry form.
$entry = '';
$value = '';

if(isset($_GET['request'])) {
	if($_GET['request'] == "removeentry") {
		$tempEntry = NagiosTimeperiodEntryPeer::retrieveByPK($_GET['entry_id']);
		if(!$tempEntry || $tempEntry->getTimeperiodId() != $timeperiod->getId()) {
			$error = "That entry either does not exist or does not belong to that timeperiod.";
		}
		else {
			$tempEntry->delete();
			$success = "Entry deleted.";
		}
	}
	if($_GET['request'] == "delete" && $_GET['section'] == "exclusions") {
		$exclusion = NagiosTimeperiodExcludePeer::retrieveByPK($_GET['exclude_id']);
		if(!$exclusion) {
			$error = "That exclusion does not exist.";
		}
		else {
			if($exclusion->getNagiosTimeperiodRelatedByTimeperiodId()->getId() != $timeperiod->getId()) {
				$error = "That exclusion does not belong to this timeperiod.";
			}
			else {
				$exclusion->delete();
				$success = "Exclusion deleted.";
			}
		}
	}
}

if(isset($_POST['request'])) {
	if($_POST['request'] == 'modify_period') {
	
		if($_POST['timeperiod_manage']['timeperiod_name'] != $timeperiod->getName() && $lilac->timeperiod_exists($_POST['timeperiod_manage']['timeperiod_name'])) {
			$error = "A time period with that name already exists!";
		}
		else {
			// All is well for error checking, modify the timeperiod.
			
			$timeperiod->setName($_POST['timeperiod_manage']['timeperiod_name']);
			$timeperiod->setAlias($_POST['timeperiod_manage']['alias']);
			$timeperiod->save();
			$success = "Time period modified.";
		}
	}
	else if($_POST['request'] == 'add_entry') {
		if(empty($_POST['entry']) || empty($_POST['value'])) {
			$error = "Both fields must be filled in.";
		}
		else {
			// We should really do some error checking here on valid values
			$entry = trim($_POST['entry']);
			/*@todo DO ERROR CHECKING HERE*/
			$value = trim($_POST['value']);
			$values = explode(",", $value);
			if(count($values) == 0 && $value != '') {
				$error = "Entry value must be comma-delimited list of proper values.";
			}
			else {
				$err = false;
				if($value != '') {
					foreach($values as $val) {
						if(!preg_match("/\d\d:\d\d-\d\d:\d\d/", trim($val))) {
							$err = true;
						}
					}
				}
				if($err) {
					$error = "Entry value must be comma-delimited list of proper values.";
				}
				else {
				
					// Check for existing entry with that name!
					$c = new Criteria();
					$c->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $timeperiod->getId());
					$c->add(NagiosTimeperiodEntryPeer::ENTRY, $entry);
					$foundEntry = NagiosTimeperiodEntryPeer::doSelectOne($c);
					if($foundEntry) {
						$error = "That entry already exists.  Remove it then add it with the new value.";
					}
					else {
						// Okay, let's add.
						$newEntry = new NagiosTimeperiodEntry();
						$newEntry->setTimeperiodId($timeperiod->getId());
						$newEntry->setEntry($entry);
						$newEntry->setValue($value);
						$newEntry->save();
						$success = "Entry added.";
						$entry = '';
						$value = '';
					}
				}
			}
		}
	}
	else if($_POST['request'] == 'exclusion_add') {
		// first hceck to see if the exclusion exists.
		$c = new Criteria();
		$c->add(NagiosTimeperiodExcludePeer::TIMEPERIOD_ID, $timeperiod->getId());
		$c->add(NagiosTimeperiodExcludePeer::EXCLUDED_TIMEPERIOD, $_POST['timeperiod_manage']['exclusion_add']['timeperiod_id']);
		$tempExclusion = NagiosTimeperiodExcludePeer::doSelectOne($c);
		if($tempExclusion) {
			$error = "That exclusion already exists.";
		}
		else {
			$targetTimeperiod = NagiosTimeperiodPeer::retrieveByPK($_POST['timeperiod_manage']['exclusion_add']['timeperiod_id']);
			if(!$targetTimeperiod) {
				$error = "That timeperiod is not in the system.";
			}
			else {
				$tempExclusion = new NagiosTimeperiodExclude();
				$tempExclusion->setNagiosTimeperiodRelatedByExcludedTimeperiod($targetTimeperiod);
				$tempExclusion->setNagiosTimeperiodRelatedByTimeperiodId($timeperiod);
				$tempExclusion->save();
				$success = "Exclusion added.";
			}
		}
	}
}

// Create subnav
$subnav = array(
	'general' => 'General',
	'entries' => 'Time Entries',
	'exclusions' => 'Exclusions'
	
	);

print_header("Time Period Editor");
?>
<?php
	print_window_header("Modify A Time Period - " . $timeperiod->getName(), "100%");
	print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?timeperiod_id=" . $timeperiod->getId());
	if($_GET['section'] == 'general') {
		?>
		<form name="timeperiod_form" method="post" action="timeperiod.php?timeperiod_id=<?php echo $timeperiod->getId();?>">
			<input type="hidden" name="request" value="modify_period" />
			<input type="hidden" name="timeperiod_manage[timeperiod_id]" value="<?php echo $timeperiod->getId();?>">
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
					<a class="btn btn-danger" href="timeperiods.php?timeperiod_id=<?php echo $_GET['timeperiod_id'];?>&request=delete">Delete</a> <input class="btn btn-primary" type="submit" value="Modify Period" /> <a class="btn btn-default" href="timeperiods.php">Cancel</a>
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
	}
	else if($_GET['section'] == 'entries') {
		?>
		<b>Time Period Entries:</b><br />
		<?php
		$c = new Criteria();
		$c->add(NagiosTimeperiodEntryPeer::TIMEPERIOD_ID, $timeperiod->getId());
		$timeperiodEntries = NagiosTimeperiodEntryPeer::doSelect($c);
		if(!count($timeperiodEntries)) {
			?>
			<div style="text-align: center;">No entries defined for this timeperiod.</div>
			<?php
		}
		else {
			?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>&nbsp;</td>
			<td><b>Weekday / Exception</b></td>
			<td><b>Time Ranges</b></td>
			</tr>
	
			<?php
			for($counter = 0; $counter < count($timeperiodEntries); $counter++) {
				$tempEntry = $timeperiodEntries[$counter];
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
					<td><a class="btn btn-danger btn-xs" href="timeperiod.php?timeperiod_id=<?php echo $timeperiod->getId();?>&request=removeentry&entry_id=<?php echo $tempEntry->getId();?>&section=entries">Delete</a></td>
					<td><?php echo $tempEntry->getEntry();?></td>
					<td><?php echo $tempEntry->getValue();?></td>
				</tr>
				<?php
			}
			?>
			</table>
			<?php
		}
		?>
		<div style="margin: 10px;">
		<b>Add A New Entry:</b><br />
		<form name="timeperiod_form" method="post" action="timeperiod.php?timeperiod_id=<?php echo $timeperiod->getId();?>&section=entries">
			<input type="hidden" name="request" value="add_entry" />		
		<b>Weekday / Exception: </b><input name="entry" value="<?php echo $entry;?>" type="text" size="50" maxlength="255" />
		<?php echo $lilac->element_desc("timeperiod_weekday_exception", "nagios_timeperiods_desc"); ?><br />
		<br />
		<b>Value: </b><input type="text" name="value" value="<?php echo $value;?>" size="50" maxlength="255" />
		<?php echo $lilac->element_desc("timeperiod_value", "nagios_timeperiods_desc"); ?><br />
		<input class="btn btn-primary" type="submit" value="Add Entry" />
		</div>
		<?php
	}
	else if($_GET['section'] == 'exclusions') {
		// Need to get list of exclusions
		$exclusions = $timeperiod->getNagiosTimeperiodExcludesRelatedByTimeperiodId();
		// This is our list of exclusions
		$timeperiods = NagiosTimePeriodPeer::doSelect(new Criteria());
		?>
		<table width="100%" border="0">
		<tr>
			<td width="100" align="center" valign="top">
			<img src="images/icons/clock_delete.png" />
			</td>
			<td valign="top">
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Excluded Time Periods:</td>
				</tr>
				<?php
				for($counter = 0; $counter < count($exclusions); $counter++) {
					$excludedTimeperiod = $exclusions[$counter]->getNagiosTimeperiodRelatedByExcludedTimeperiod();
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
					<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="timeperiod.php?timeperiod_id=<?php echo $_GET['timeperiod_id'];?>&section=exclusions&request=delete&exclude_id=<?php echo $exclusions[$counter]->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<td height="20" class="altRight"><b><?php echo $excludedTimeperiod->getName();?>:</b> <?php echo $excludedTimeperiod->getAlias();?></td>
					</tr>
					<?php
				}
				?>
			</table>
			<br />
			<br />
			<form name="contactgroup_member_add" method="post" action="timeperiod.php?timeperiod_id=<?php echo $_GET['timeperiod_id'];?>&section=exclusions">
			<input type="hidden" name="request" value="exclusion_add" />
			<b>Add New Timeperiod Exclusion:</b> <?php print_object_select("timeperiod_manage[exclusion_add][timeperiod_id]", $timeperiods, "getId", "getName", "0", true, array($timeperiod->getId()));?> <input class="btn btn-primary" type="submit" value="Add Exclusion">
			<?php echo $lilac->element_desc("exclusion", "nagios_timeperiods_desc"); ?><br />
			<br />
			</form>
			</td>
		</tr>
		</table>
		<?php
	}	
	
	
	print_window_footer();

print_footer();
