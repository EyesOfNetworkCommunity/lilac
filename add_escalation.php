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
 * host_template.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain host templates
 *
*/
include_once('includes/config.inc');

if(isset($_GET['host_template_id'])) {
	$tempSource = NagiosHostTemplatePeer::retrieveByPK($_GET['host_template_id']);
	$link = "host_template.php";
	$fieldName = "host_template_id";
	if(!$tempSource) {
		header("Location: welcome.php");
	}
	$type = "hosttemplate";	
	$title = "Host Template";
}
else if(isset($_GET['host_id'])) {
	$tempSource = NagiosHostPeer::retrieveByPK($_GET['host_id']);
	$fieldName = "host_id";
	$link = "hosts.php";
	if(!$tempSource) {
		header("Location: welcome.php");
	}
	$type = "host";
	$title = "Host";
}
else if(isset($_GET['hostgroup_id'])) {
	$tempSource = NagiosHostgroupPeer::retrieveByPK($_GET['hostgroup_id']);
	$fieldName = "hostgroup_id";
	$link = "hostgroups.php";
	if(!$tempSource) {
		header("Location: welcome.php");
	}
	$type = "hostgroup";
	$title = "Hostgroup";

}
else if(isset($_GET['service_template_id'])) {
	$tempSource = NagiosServiceTemplatePeer::retrieveByPK($_GET['service_template_id']);
	$fieldName = "service_template_id";
	$link = "service_template.php";
	if(!$tempSource) {
		header("Location: welcome.php");
	}
	$type = "servicetemplate";
	$title = "Service Template";
}
else if(isset($_GET['service_id'])) {
	$tempSource = NagiosServicePeer::retrieveByPK($_GET['service_id']);
	$fieldName = "service_id";
	$link = "service.php";
	if(!$tempSource) {
		header("Location: welcome.php");
	}
	$type = "service";
	$title = "Service";
}
if(isset($_POST['request']) && $_POST['request'] == 'add_escalation') {
	// Check to see what kind of escalation we've got
	if(trim($_POST['escalation_description']) == '') {
		$errorMsg = "Description cannot be blank.";
	}
	else {
		$escalation = new NagiosEscalation();
		if($type == "host") {
			$escalation->setHost($tempSource->getId());
		}
		if($type == "hostgroup") {
			$escalation->setHostgroup($tempSource->getId());
		}
		else if($type == "hosttemplate") {
			$escalation->setHostTemplate($tempSource->getId());
		}
		else if($type == "service") {
			$escalation->setService($tempSource->getId());
		}
		else if($type == "servicetemplate") {
			$escalation->setServiceTemplate($tempSource->getId());
		}
		$escalation->setDescription(trim($_POST['escalation_description']));
		$escalation->save();
		header("Location: escalation.php?id=" . $escalation->getId());
		die();
	}	
}

if($type == "service") {
	$textTitle = $tempSource->getNagiosHost()->getName() . " : " . $tempSource->getDescription();
}
else {
	$textTitle = $tempSource->getName();
}

print_header("Add Escalation To " . $title . " " . $textTitle);

print_window_header("Add A Escalation", "100%");



?>
<a class="btn btn-default" href="<?php echo $link;?>?id=<?php echo $tempSource->getId();?>">Return To <?php echo $title;?> <?php echo $textTitle;?></a>
<?php
	if(isset($errorMsg)) {
		?>
		<div style="color: red;"><?php echo $errorMsg;?></div>
		<?php
	}
?>
<br />
<br />
<form name="escalation_add_form" method="post" action="add_escalation.php?<?php echo $fieldName;?>=<?php echo $tempSource->getId();?>">
<input type="hidden" name="request" value="add_escalation" />
<?php
double_pane_form_window_start(); ?>
<tr bgcolor="eeeeee">
	<td colspan="2" class="formcell">
	<b>Description:</b><br />
	<input type="text" size="40" name="escalation_description" value="" />
	<?php echo $lilac->element_desc("escalation_description", "nagios_escalations_desc"); ?><br />
	<br />
	</td>
</tr>
<?php double_pane_form_window_finish(); ?>
<input class="btn btn-primary" type="submit" value="Add Escalation" />
<br /><br />
</form>
<?php
print_window_footer();
?>
<br />
<?php

print_footer();

?>
