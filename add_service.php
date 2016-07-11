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
 * add_service_template.php
 * Author:	Taylor Dondich (tdondich at gmail.com)
 * Description:
 * 	Provides interface to maintain service templates
 *
*/
include_once('includes/config.inc');
session_start();	//Add a session for the template thing

if(isset($_GET['host_template_id'])) {
	$hostTemplate = NagiosHostTemplatePeer::retrieveByPK($_GET['host_template_id']);
	if(!$hostTemplate) {
		header("Location: welcome.php");
		die();
	}
	else {
		$title = " for Host Template " . $hostTemplate->getName();
		$sublink = "?host_template_id=" . $hostTemplate->getId();
		$cancelLink = "host_template.php?id=" . $hostTemplate->getId() . "&section=services";
		$inherited_list = $hostTemplate->getInheritedCommandParameters();
		$numOfInheritedCommandParameters = count($inherited_list);
	}
}
else if(isset($_GET['host_id'])) {
	$host = NagiosHostPeer::retrieveByPK($_GET['host_id']);
	if(!$host) {
		header("Location: welcome.php");
		die();
	}
	else {
		$title = " for Host " . $host->getName();
		$sublink = "?host_id=" . $host->getId();
		$cancelLink = "hosts.php?id=" . $host->getId() . "&section=services";
		$inherited_list = $host->getInheritedCommandParameters();
		$numOfInheritedCommandParameters = count($inherited_list);
	}
}
else if(isset($_GET['hostgroup_id'])) {
	$hostgroup = NagiosHostgroupPeer::retrieveByPK($_GET['hostgroup_id']);
	if(!$hostgroup) {
		header("Location: welcome.php");
		die();
	}
	else {
		$title = " for Hostgroup " . $hostgroup->getName();
		$sublink = "?hostgroup_id=" . $hostgroup->getId();
		$cancelLink = "hostgroups.php?id=" . $hostgroup->getId() . "&section=services";
	}
}

else {
	header("Location: welcome.php");
	die();
}

if(isset($_POST['request'])) {

	if(empty($_POST['display_name'])) {
		$_POST['display_name']=NULL;
	}

	if($_POST['request'] == 'add_service') {
		if(isset($hostTemplate)) {
			// Template logic
			$c = new Criteria();
			$c->add(NagiosServicePeer::DESCRIPTION, $_POST['service_description']);
			$c->add(NagiosServicePeer::HOST_TEMPLATE, $hostTemplate->getId());
			$c->setIgnoreCase(true);
			$service = NagiosServicePeer::doSelectOne($c);
			if($service) {
				$error = "A service with that description already exists for that host template.";
			}
			else {
				// Let's add.
				$service = new NagiosService();
				$service->setDescription($_POST['service_description']);
                $service->setDisplayName($_POST['display_name']);
				$service->setHostTemplate($hostTemplate->getId());
				$service->save();
				//Service is save, add the command
				foreach( $_SESSION['services'] as $pk){
					$template = NagiosServiceTemplatePeer::retrieveByPK($pk);
					if(!$template) {
						$error = "That service template is not found.";
					}
					else {
						// We need to get the count of templates already inherited
						$templateList = $service->getNagiosServiceTemplateInheritances();
						foreach($templateList as $tempTemplate) {
							if($tempTemplate->getId() == $pk) {
								$error = "That template already exists in the inheritance chain.";
							}
						}
						if(empty($error)) {
							$newInheritance = new NagiosServiceTemplateInheritance();
							$newInheritance->setNagiosService($service);
							$newInheritance->setNagiosServiceTemplateRelatedByTargetTemplate($template);
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
				$service = NagiosServicePeer::doSelectOne($c);
				//Template are saved, add command.
				if(isset($_POST['service_template_add_form']['check_command']) && $_POST['service_template_add_form']['check_command'] != 0) {
					$service->setCheckCommand(NagiosCommandPeer::retrieveByPK($_POST['service_template_add_form']['check_command'])->getId());
				}
				else {
					$service->setCheckCommand(null);	
				}
				$service->save();
				//The command is saved, add the parameters
				foreach($_SESSION['params'] as $command){
					$param = new NagiosServiceCheckCommandParameter();
					$param->setService($service->getId());
					$param->setParameter($command);
					$param->save();
					$success = "Command Parameter added.";
				}
				unset($_SESSION['services']); //Kill any existing Service
				unset($_SESSION['command']);
				unset($_SESSION['params']);
				unset($_SESSION['num_cmd']);
				header("Location: service.php?id=" . $service->getId());
				die();	
			}
		}
		else if(isset($host)) {
			// Host logic
			$c = new Criteria();
			$c->add(NagiosServicePeer::DESCRIPTION, $_POST['service_description']);
			$c->add(NagiosServicePeer::HOST, $host->getId());
			$c->setIgnoreCase(true);
			$service = NagiosServicePeer::doSelectOne($c);
			if($service) {
				$error = "A service with that description already exists for that host.";
			}
			else {
				// Let's add.
				$service = new NagiosService();
				$service->setDescription($_POST['service_description']);
                $service->setDisplayName($_POST['display_name']);
				$service->setHost($host->getId());
				$service->save();
				//Service is saved, add the templates
				foreach( $_SESSION['services'] as $pk){
					$template = NagiosServiceTemplatePeer::retrieveByPK($pk);
					if(!$template) {
						$error = "That service template is not found.";
					}
					else {
						// We need to get the count of templates already inherited
						$templateList = $service->getNagiosServiceTemplateInheritances();
						foreach($templateList as $tempTemplate) {
							if($tempTemplate->getId() == $pk) {
								$error = "That template already exists in the inheritance chain.";
							}
						}
						if(empty($error)) {
							$newInheritance = new NagiosServiceTemplateInheritance();
							$newInheritance->setNagiosService($service);
							$newInheritance->setNagiosServiceTemplateRelatedByTargetTemplate($template);
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
				//Template are saved, add command.
				if(isset($_POST['service_template_add_form']['check_command']) && $_POST['service_template_add_form']['check_command'] != 0) {
					$service->setCheckCommand(NagiosCommandPeer::retrieveByPK($_POST['service_template_add_form']['check_command'])->getId());
				}
				else {
					$service->setCheckCommand(null);
				}
				$service->save();
				//The command is saved, add the parameters
				foreach($_SESSION['params'] as $command){
					$param = new NagiosServiceCheckCommandParameter();
					$param->setService($service->getId());
					$param->setParameter($command);
					$param->save();
					$success = "Command Parameter added.";
				}
				unset($_SESSION['services']); //Kill any existing Service
				unset($_SESSION['command']);
				unset($_SESSION['params']);
				unset($_SESSION['num_cmd']);
				header("Location: service.php?id=" . $service->getId());
				die();
			}
		}
		else if(isset($hostgroup)) {
			// Host logic
			$c = new Criteria();
			$c->add(NagiosServicePeer::DESCRIPTION, $_POST['service_description']);
			$c->add(NagiosServicePeer::HOSTGROUP, $hostgroup->getId());
			$c->setIgnoreCase(true);
			$service = NagiosServicePeer::doSelectOne($c);
			if($service) {
				$error = "A service with that description already exists for that hostgroup.";
			}
			else {
				// Let's add.
				$service = new NagiosService();
				$service->setDescription($_POST['service_description']);
                $service->setDisplayName($_POST['display_name']);
				$service->setHostgroup($hostgroup->getId());
				$service->save();
				header("Location: service.php?id=" . $service->getId());
				die();
			}
		}
		
		
	}
}

unset($_SESSION['services']); //Kill any existing Service
unset($_SESSION['command']);
unset($_SESSION['params']);
unset($_SESSION['num_cmd']);

print_header("Service Editor");

// Get list of service templates
$lilac->get_service_template_list($tempList);
$template_list[] = array("service_template_id" => '', "template_name" => "None");
foreach($tempList as $tempTemplate)
	$template_list[] = array('service_template_id' => $tempTemplate->getId(), 'template_name' => $tempTemplate->getName());

	

	
print_window_header("Add Service " . $title, "100%");
?>
<form name="service_template_add_form" method="post" action="add_service.php<?php echo $sublink;?>">
<input type="hidden" name="request" value="add_service" />
<?php double_pane_form_window_start(); ?>
<tr bgcolor="eeeeee">
	<td colspan="2" class="formcell">
	<b>Service Description:</b><br />
	<input type="text" size="40" name="service_description" value="">
	<?php echo $lilac->element_desc("service_description", "nagios_services_desc"); ?><br />
	<br />
	</td>
</tr>
<tr bgcolor="eeeeee">
	<td colspan="2" class="formcell">
	<b>Display Name: (Optional)</b><br />
	<input type="text" size="40" name="display_name" value="">
	<?php echo $lilac->element_desc("display_name", "nagios_services_desc"); ?><br />
	<br />
	</td>
</tr>
<?php if(isset($host) || isset($hostTemplate)) { ?>
	<tr bgcolor="eeeeee">
		<td colspan="2" class="formcell">
		<span id="output"></span>	
		</td>
	</tr>
	<tr bgcolor="eeeeee">
		<td colspan="2" class="formcell">
			<?php 
			// To create a "default" command
			$command_list[] = array("command_id" => 0, "command_name" => "None");
			$lilac->return_command_list($tempList);
			foreach($tempList as $command) {
				$command_list[] = array("command_id" => $command->getId(), "command_name" => $command->getName());
			}
			form_select_element_with_enabler($command_list, "command_id", "command_name", "service_template_add_form", "check_command", "Check Command", $lilac->element_desc("check_command", "nagios_services_desc"), null);
			?>
		<br />
		</td>	
	</tr>
	<tr bgcolor="eeeeee">
		<td colspan="2" class="formcell">
			<?php $_SESSION['num_cmd'] = 0;
			if($numOfInheritedCommandParameters) {
				echo '<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
					<tr class="altTop">
					<td colspan="2">Parameters Inherited By Templates:</td>
					</tr>';
					if(count($inherited_list)) {
						$counter = 1;
						foreach($inherited_list as $parameter) {
							if($counter % 2) echo '<tr class="altRow1">';
							else echo '<tr class="altRow2">';
							echo '<td height="20" width="80" nowrap="nowrap" class="altLeft">&nbsp;</td>
							<td height="20" class="altRight"><b>$ARG'.(++$_SESSION['num_cmd']).'$:</b> '.$parameter->getParameter().'</td></tr>';
						}
					}
				echo '</table><br />';
			}
		echo '</td></tr>';?>
	<tr bgcolor="eeeeee">
		<td colspan="2" class="formcell">
		<span id="output2"></span>	
		</td>
	</tr>
<?php } ?>
<?php double_pane_form_window_finish(); ?>
<input class="btn btn-primary" type="submit" value="Add Service" /> <a class="btn btn-default" href="<?php echo $cancelLink;?>">Cancel</a>
<br /><br />
</form>
<script type="text/javascript">
	function appel(id,option,option2,cmd) {
		params = "id="+id+"&option="+option+"&option2="+option2+"&cmd="+cmd;
		$.post("add_service_ajax.php", params, result, "html");
	}

	function result(datas){
		data = datas.split(";;");
		$("#output").html(data[0]);
		if (data[1] != "" && data[1] != undefined) selOption(data[1]);
		$("#output2").html(data[2]);
	}

	function getID() {
		appel($("select[name='<?php echo 'servmanage[serv_add][serv_id]';?>']")[0].value,null,null,null);
	}

	function getValue(){
		if ($.trim($("input[name='host_manage[parameter]']")[0].value) != "" )
			appel("undefined",null,"add",$("input[name='host_manage[parameter]']")[0].value);
		else $("input[name='host_manage[parameter]']")[0].value = "";
	}

	function selOption(value){
		$("select[name='service_template_add_form[check_command]'] option[value="+value+"]").attr("selected","true");
	}
	appel(null,null,null,null);
</script>
<?php
print_window_footer();
?>
<br />
<?php
print_footer();
?>
