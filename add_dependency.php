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
	$title = ""; // This can be ignored later on.
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

if(isset($_POST['request'])) {
	if($_POST['request'] == "add_dependency") {
		// Error checking
		if(trim($_POST['name']) == '') {
			$error = "Dependency name cannot be blank.";
		}
		else {
			// Creating dependency.
			$dependency = new NagiosDependency();
			switch($type) {
				case 'host':
					$dependency->setNagiosHost($tempSource);
					break;
				case 'service':
					$dependency->setNagiosService($tempSource);
					break;
				case 'hostgroup':
					$dependency->setNagiosHostgroup($tempSource);
					break;
			}
			$dependency->setName($_POST['name']);
			$dependency->save();
			header("Location: dependency.php?id= " . $dependency->getId());
			exit();
		}
	}
}


if($type == "service") {
	$textTitle = $tempSource->getOwnerDescription() . " : " . $tempSource->getDescription();
}
else {
	$textTitle = $tempSource->getName();
}

print_header("Add Dependency To " . $title . " " . $textTitle);

print_window_header("Add Dependency To " . $title . " " . $textTitle, "100%");
	?>
	<strong>Provide A Name for this Dependency</strong>
		<form action="add_dependency.php?<?php echo $fieldName;?>=<?php echo $tempSource->getId();?>" method="post">
		<input type="hidden" name="request" value="add_dependency" />
		<input id="name" type="text" size="20" name="name" value="" /><br /><br />
		<input class="btn btn-primary" type="submit" value="Create Dependency" /> 
		<br />
		<br /><a class="btn btn-default" href="<?php echo $link;?>?id=<?php echo $tempSource->getId();?>">Cancel And Return To <?php echo $title;?> <?php echo $textTitle;?></a>
		</form>
		<?php
print_window_footer();

?>
