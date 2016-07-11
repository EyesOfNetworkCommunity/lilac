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
Lilac Index Page, Displays Menu, and Statistics
*/
include_once('includes/config.inc');

// EoN_Actions
EoN_Actions_Process("Command");

if(isset($_GET['command_id'])) {
	$command = NagiosCommandPeer::retrieveByPK($_GET['command_id']);
	if(!$command) {
		header("Location: welcome.php");
		die();
	}
}


// Action Handlers
if(isset($_GET['request'])) {
		if($_GET['request'] == "delete") {
			$command->delete();
			$success = "Command Deleted";
			unset($command);
		}
}

if(isset($_POST['request'])) {
	// Load Up The Session Data

	
	if($_POST['request'] == 'add_command') {
		// Error check for required fields
		if($_POST['command_manage']['command_name']=='' or $_POST['command_manage']['command_line']=='') {
			$error = "You must provide a command name and a command line.";
			$_GET['command_add'] = 1;
		}
		else {
			// Check for pre-existing command with same name
			if($lilac->command_exists($_POST['command_manage']['command_name'])) {
				$error = "A command with that name already exists!";
				$_GET['command_add'] = 1;
			}
			else {
				// All is well for error checking, add the command into the db.
				$lilac->add_command($_POST['command_manage']);
				// Remove session data
				unset($command);
				$success = "Command added.";
			}
		}
	}
	else if($_POST['request'] == 'modify_command') {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME, $_POST['command_manage']['command_name']);
		$c->setIgnoreCase(true);
		$c->add(NagiosCommandPeer::ID, $command->getId(), "!=");
		
		$duplicate = NagiosCommandPeer::doSelectOne($c);
		
		if($_POST['command_manage']['command_name']=='' or $_POST['command_manage']['command_line']=='') {
			$error = "You must provide a command name and a command line.";
			$_GET['command_add'] = 1;
		}
		else if($duplicate && $command->getId() != $duplicate->getId()) {
			$error = "A command with that name already exists!";
		}
		else {
			// All is well for error checking, modify the command.
			$command->updateFromArray($_POST['command_manage']);
			$command->save();
			$success = "Command modified.";
			unset($command);
		}
	}
}

// Get list of commands
$lilac->return_command_list($command_list);
$numOfCommands = count($command_list);

print_header("Nagios Command Editor");
?>
<?php
	if(isset($command) || isset($_GET['command_add'])) {
		if(isset($command)) {
			print_window_header("Modify A Command", "100%");
			?>		<form name="command_form" method="post" action="commands.php?command_id=<?php echo $command->getId();?>"><?php
			
		}
		else {
			print_window_header("Add A Command", "100%");
			?>		<form name="command_form" method="post" action="commands.php"><?php
		}
		?>

			<?php 
				if(isset($command))	{
					?>
					<input type="hidden" name="request" value="modify_command" />
					<input type="hidden" name="command_id" value="<?php echo $command->getId();?>">
					<?php
				}
				else {
					?>
					<input type="hidden" name="request" value="add_command" />
					<?php
				}
			?>
			<b>Command Name:</b><br />
			<input type="text" size="40" name="command_manage[command_name]" value="<?php echo isset($command) ? $command->getName() : '';?>">
			<?php echo $lilac->element_desc("command_name", "nagios_commands_desc"); ?><br />
			<br />
			<b>Command Line:</b><br />
			<input type="text" size="100" name="command_manage[command_line]" value="<?php echo isset($command) ? htmlentities($command->getLine()) : '';?>">
			<?php echo $lilac->element_desc("command_line", "nagios_commands_desc"); ?><br />
			<br />
			<b>Command Description:</b><br />
			<input type="text" size="100" name="command_manage[command_desc]" value="<?php echo isset($command) ? $command->getDescription(): '';?>">
			<?php echo $lilac->element_desc("command_desc", "nagios_commands_desc"); ?><br />
			<br />		
			<br />
			<?php 
				if(isset($command)) {
					?>
					<a class="btn btn-danger" href="commands.php?command_id=<?php echo $command->getId();?>&request=delete">Delete</a> <input class="btn btn-primary" type="submit" value="Modify Command" /> <a class="btn btn-default" href="commands.php">Cancel</a>
					<?php
				}
				else {
					?>
					<input class="btn btn-primary" type="submit" value="Create Command" /> <a class="btn btn-default" href="commands.php">Cancel</a>
					<?php
				}
			?>
			<br /><br />
		<?php
		print_window_footer();
	}
	else {
		print_window_header("Nagios Commands", "100%");
		?>
		<a class="sublink btn btn-success" href="commands.php?command_add=1">Add A New Command</a><br />
		<?php
		if($numOfCommands) {
			?>
			<br />
			<form name="EoN_Actions_Form" method="post">
		        <?php echo EoN_Actions("Command");?>
			<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td>Command Name</td>
			<td>Command Description</td>
			<td align="center"><a href="#" onClick="checkUncheckAll('EoN_Actions_Checks_Command');">ALL</a></td>
			</tr>
			<?php
			for($counter = 0; $counter < $numOfCommands; $counter++) {
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
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<a href="commands.php?command_id=<?php echo $command_list[$counter]->getId();?>"><?php echo $command_list[$counter]->getName();?></a></td>
				<td height="20" class="altLeft" onclick="checkLine('line<?php echo $counter?>','check<?php echo $counter?>');">&nbsp;<?php echo $command_list[$counter]->getDescription();?></td>
				<td align="center"><input type="checkbox" id="check<?php echo $counter?>" class="checkbox" name="EoN_Actions_Checks_Command[]" value="<?php echo $command_list[$counter]->getId();?>" onclick="checkBox('line<?php echo $counter?>','check<?php echo $counter?>');"></td>
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
			<div class="statusmsg">No Commands Exist</div>
			<?php
		}
		print_window_footer();
	}
	
print_footer();
?>
