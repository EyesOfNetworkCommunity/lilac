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
	Filename:	add_host.php
*/
include_once('includes/config.inc');
session_start();	//Add a session for the template thing

if(isset($_POST['request']) && $_POST['request'] == 'add_host') {
	// Check for pre-existing host template with same name
	if($lilac->host_exists($_POST['host_manage']['host_name'])) {
		$error = "A host with that name already exists!";
	}
	else {
		// Field Error Checking
		if(count($_POST['host_manage'])) {
			foreach($_POST['host_manage'] as $tempVariable)
				$tempVariable = trim($tempVariable);
		}
		if($_POST['host_manage']['host_name'] == '' || $_POST['host_manage']['alias'] == '' || $_POST['host_manage']['address'] == '') {
			$error = "Fields shown are required and cannot be left blank.";
		}
		else {
			// All is well for error checking, add the host into the db.
			$tempHost = new NagiosHost();
			$tempHost->setName($_POST['host_manage']['host_name']);
			$tempHost->setAlias($_POST['host_manage']['alias']);
			if(isset($_GET['parent_id'])) {
				// Get the host by that parent_id
				$host = NagiosHostPeer::retrieveByPk($_GET['parent_id']);
				if($host) {
					// valid host, add parent
					$tempHost->addParentByName($host->getName());
				}
			}
			$tempHost->setAddress($_POST['host_manage']['address']);
			if(isset($_POST['host_manage']['display_name'])) {
				$tempVariable = trim($_POST['host_manage']['display_name']);
				if ( ! empty($tempVariable) ) {
					$tempHost->setDisplayName($tempVariable);
				} else {
					$tempHost->setDisplayName(null);
				}
			} else {
				$tempHost->setDisplayName(null);
			}
			$tempHost->save();
			//Host is save, now attach the template to it.
			foreach($_SESSION['templates'] as $pk){
				$template = NagiosHostTemplatePeer::retrieveByPK($pk);
				if(!$template) {
					$error = "That host template is not found.";
				}
				else {
					// We need to get the count of templates already inherited
					$templateList = $tempHost->getNagiosHostTemplateInheritances();
					foreach($templateList as $tempTemplate) {
						if($tempTemplate->getId() == $pk) {
							$error = "That template already exists in the inheritance chain.";
						}
					}
					if(empty($error)) {
						$newInheritance = new NagiosHostTemplateInheritance();
						$newInheritance->setNagiosHost($tempHost);
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
			unset($_SESSION['templates']);	//Kill the Template we just save.
			header("Location: hosts.php?id=" . $tempHost->getId());
			die();
		}
	}
}

unset($_SESSION['templates']); //Kill any existing Template

$add_template_list[] = array("host_template_id" => '', "template_name" => "None");
$lilac->get_host_template_list( $template_list);

if(count($template_list)) {
	foreach($template_list as $tempTemplate) {
		$add_template_list[] = array('host_template_id' => $tempTemplate->getId(), 'template_name' => $tempTemplate->getName());
	}
}

print_header("Add New Host");


$title = "Add A Top-Level Host";
if(isset($_GET['parent_id'])) {
	$tempHostInfo = NagiosHostPeer::retrieveByPK($_GET['parent_id']);
	if($tempHostInfo) {
		$title = "Add A Host Under " . $tempHostInfo->getName();
	}
}



print_window_header($title, "100%");
?>
<form name="host_add_form" method="post" action="add_host.php<?php if(isset($_GET['parent_id'])) print("?parent_id=" . $_GET['parent_id']);?>">
<input type="hidden" name="request" value="add_host" />
<?php
if(isset($_GET['parent_id']) && $_GET['parent_id'] != 0) {
	?>
	<input type="hidden" name="host_manage[parents]" value="<?php echo $_GET['parent_id'];?>">
	<?php
}
?>
<?php double_pane_form_window_start(); ?>
<tr bgcolor="f0f0f0">
	<td colspan="2" class="formcell">
	<b>Host Name:</b><br />
	<input type="text" size="40" name="host_manage[host_name]" value="">
	<?php echo $lilac->element_desc("host_name", "nagios_hosts_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="eeeeee">
	<td colspan="2" class="formcell">
	<b>Host Description:</b><br />
	<input type="text" size="40" name="host_manage[alias]" value="">
	<?php echo $lilac->element_desc("alias", "nagios_hosts_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="f0f0f0">
	<td colspan="2" class="formcell">
	<b>Address:</b><br />
	<input type="text" size="40" name="host_manage[address]" value="">
	<?php echo $lilac->element_desc("address", "nagios_hosts_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="f0f0f0">
	<td colspan="2" class="formcell">
	<b>Display Name (Optional):</b><br />
	<input type="text" size="40" name="host_manage[display_name]" value="">
	<?php echo $lilac->element_desc("display_name", "nagios_hosts_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="f0f0f0">
	<span id="output"></span>	
</tr>
<?php double_pane_form_window_finish(); ?>
<input class="btn btn-primary" type="submit" value="Add Host" /> <a class="btn btn-default" href="hosts.php">Cancel</a>
<br /><br />
</form>
<script type="text/javascript">
	function appel(id,option) {
		params = "id="+id+"&option="+option;
		$.post("add_host_ajax.php", params, result, "html");
	}

	function result(datas){
		$("#output").html(datas);
	}

	function getID() {
		appel($("select[name='<?php echo 'hostmanage[template_add][template_id]';?>']")[0].value);
	}
	appel(null);
</script>

<?php
print_window_footer();
?>
<br />
<?php
print_footer();
?>
