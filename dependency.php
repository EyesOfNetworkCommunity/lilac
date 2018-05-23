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
 * dependency.php
 * Author:	EyesOfNetwork Team (eyesofnetwork@eyesofnetwork.com)
 * Description:
 * 	Provides interface to maintain dependencies
 *
*/
 


include_once('includes/config.inc');

// AJAX behavior
if(isset($_GET['request']) && $_GET['request'] == "search") {
	$results = array();
	switch($_GET['type']) {
		case 'host':
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $_GET['q']."%", Criteria::LIKE);
			$c->setIgnoreCase(true);
			$results = NagiosHostPeer::doSelect($c);
			break;
		case 'hostgroup':
			$c = new Criteria();
			$c->add(NagiosHostgroupPeer::NAME, $_GET['q']."%", Criteria::LIKE);
			$c->setIgnoreCase(true);
			$results = NagiosHostgroupPeer::doSelect($c);
		case 'service':
			// Get the host
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $_GET['host']);
			$c->setIgnoreCase(true);
			$host = NagiosHostPeer::doSelectOne($c);
			$returnObj = array();
			if(!$host) {
				$returnObj['error'] = "Host " . $_GET['host'] . " not found.";
				print(json_encode($returnObj));
				exit();
			}
			else {
				$returnObj['services'] = array();
				// Okay, let's get services.
				$services = $host->getNagiosServices();
				foreach($services as $service) {
					if(!in_array($service->getDescription(), $returnObj['services']))
					$returnObj['services'][] = $service->getDescription();
				}
				$inherited_services = $host->getInheritedServices();
				foreach($inherited_services as $service) {
					if(!in_array($service->getDescription(), $returnObj['services']))
					$returnObj['services'][] = $service->getDescription();
				}

				if(count($returnObj['services']) == 0) {
					$returnObj['error'] = "No services for that host.";
				}
				print(json_encode($returnObj));
				exit();
			}

	}

	foreach($results as $result) {
		print($result->getName() . "\n");
	}	
	exit();
}


// Data preparation
if(!isset($_GET['section']))
	$_GET['section'] = 'general';

// If we're going to modify dependency data
if(isset($_GET['id'])) {
	$dependency = NagiosDependencyPeer::retrieveByPK($_GET['id']);
	if(!$dependency) {
		header("Location: welcome.php");
	}
}


	
// Action Handlers
if(isset($_GET['request'])) {
	if($_GET['request'] == "delete" && $_GET['section'] == "targets") {
		$target = NagiosDependencyTargetPeer::retrieveByPK($_GET['target_id']);
		if(!$target) {
			$error = "That target was not found.";
		}
		else if($target->getNagiosDependency()->getId() != $dependency->getId()) {
			$error = "That target does not belong to this dependency.";
		}
		else {
			// Okay, let's delete.
			$target->delete();
			$success = "Target deleted.";
		}
	}

}
if(isset($_POST['request'])) {
	if($_POST['request'] == 'dependency_modify_general') {
		// Field Error Checking
		
		if(isset($_POST['dependency_manage']['inherits_parent'])) {
			$dependency->setInheritsParent(true);	
		}
		else {
			$dependency->setInheritsParent(false);
		}
		if($_POST['dependency_manage']['dependency_period'] == '') {
			$dependency->setDependencyPeriod(null);
		}
		else {
			$dependency->setDependencyPeriod($_POST['dependency_manage']['dependency_period']);
		}
		// Execution criteria
		if(isset($_POST['dependency_manage']['execution_failure_criteria_up'])) {
			$dependency->setExecutionFailureCriteriaUp(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaUp(false);
		}
		if(isset($_POST['dependency_manage']['execution_failure_criteria_down'])) {
			$dependency->setExecutionFailureCriteriaDown(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaDown(false);
		}

		if(isset($_POST['dependency_manage']['execution_failure_criteria_unreachable'])) {
			$dependency->setExecutionFailureCriteriaUnreachable(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaUnreachable(false);
		}

		if(isset($_POST['dependency_manage']['execution_failure_criteria_pending'])) {
			$dependency->setExecutionFailureCriteriaPending(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaPending(false);
		}
		if(isset($_POST['dependency_manage']['execution_failure_criteria_ok'])) {
			$dependency->setExecutionFailureCriteriaOk(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaOk(false);
		}
		if(isset($_POST['dependency_manage']['execution_failure_criteria_warning'])) {
			$dependency->setExecutionFailureCriteriaWarning(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaWarning(false);
		}
		if(isset($_POST['dependency_manage']['execution_failure_criteria_unknown'])) {
			$dependency->setExecutionFailureCriteriaUnknown(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaUnknown(false);
		}
		if(isset($_POST['dependency_manage']['execution_failure_criteria_critical'])) {
			$dependency->setExecutionFailureCriteriaCritical(true);
		}
		else {
			$dependency->setExecutionFailureCriteriaCritical(false);
		}


		
		// Notification criteria
		if(isset($_POST['dependency_manage']['notification_failure_criteria_up'])) {
			$dependency->setNotificationFailureCriteriaUp(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaUp(false);
		}
		if(isset($_POST['dependency_manage']['notification_failure_criteria_down'])) {
			$dependency->setNotificationFailureCriteriaDown(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaDown(false);
		}

		if(isset($_POST['dependency_manage']['notification_failure_criteria_unreachable'])) {
			$dependency->setNotificationFailureCriteriaUnreachable(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaUnreachable(false);
		}

		if(isset($_POST['dependency_manage']['notification_failure_criteria_pending'])) {
			$dependency->setNotificationFailureCriteriaPending(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaPending(false);
		}
		if(isset($_POST['dependency_manage']['notification_failure_criteria_ok'])) {
			$dependency->setNotificationFailureCriteriaOk(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaOk(false);
		}
		if(isset($_POST['dependency_manage']['notification_failure_criteria_warning'])) {
			$dependency->setNotificationFailureCriteriaWarning(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaWarning(false);
		}
		if(isset($_POST['dependency_manage']['notification_failure_criteria_unknown'])) {
			$dependency->setNotificationFailureCriteriaUnknown(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaUnknown(false);
		}
		if(isset($_POST['dependency_manage']['notification_failure_criteria_critical'])) {
			$dependency->setNotificationFailureCriteriaCritical(true);
		}
		else {
			$dependency->setNotificationFailureCriteriaCritical(false);
		}
			
		$dependency->save();
		$success = "Dependency modified.";
		unset($_GET['edit']);
	}
	else if($_POST['request'] == 'add_target') {
		$type = $dependency->getType();
		if($type == "host" || $type == "hosttemplate" || $type == "hostgroup") {
			if($_POST['typeselect'] == "host") {
				// First find the host
				$c = new Criteria();
				$c->add(NagiosHostPeer::NAME, $_POST['name']);
				$c->setIgnoreCase(true);
				$tempHost = NagiosHostPeer::doSelectOne($c);
				if(!$tempHost) {
					$error = "The host specified by name " . $_POST['name'] . " was not found.";
				}
				else {
					// Check for target existence
					$c = new Criteria();
					$c->add(NagiosDependencyTargetPeer::DEPENDENCY, $dependency->getId());
					$c->add(NagiosDependencyTargetPeer::TARGET_HOST, $tempHost->getId());
					$target = NagiosDependencyTargetPeer::doSelectOne($c);
					if($target) {
						$error = "That target already exists.";
					}
					else {
						// Add the target.
						$target = new NagiosDependencyTarget();
						$target->setNagiosDependency($dependency);
						$target->setNagiosHost($tempHost);
						$target->save();
						$success = "Created target.";
					}
				}
			}
			else if($_POST['typeselect'] == "hostgroup") {
				// First find the hostgroup
				$c = new Criteria();
				$c->add(NagiosHostgroupPeer::NAME, $_POST['name']);
				$c->setIgnoreCase(true);
				$tempHostgroup = NagiosHostgroupPeer::doSelectOne($c);
				if(!$tempHostgroup) {
					$error = "The hostgroup specified by name " . $_POST['name'] . " was not found.";
				}
				else {
					// Check for target existence
					$c = new Criteria();
					$c->add(NagiosDependencyTargetPeer::DEPENDENCY, $dependency->getId());
					$c->add(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, $tempHostgroup->getId());
					$target = NagiosDependencyTargetPeer::doSelectOne($c);
					if($target) {
						$error = "That target already exists.";
					}
					else {
						// Add the target.
						$target = new NagiosDependencyTarget();
						$target->setNagiosDependency($dependency);
						$target->setNagiosHostgroup($tempHostgroup);
						$target->save();
						$success = "Created target.";
					}
				}
			}
		}
		else {
			// Get the host
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $_POST['hostname']);
			$c->setIgnoreCase(true);
			$host = NagiosHostPeer::doSelectOne($c);
			if(!$host) {
				$error = "The host specified by name " . $_POST['hostname'] . " was not found.";
			}
			else {
				// Okay, let's find the service
				$services = $host->getNagiosServices();
				$found = false;
				foreach($services as $service) {
					if($service->getDescription() == $_POST['service_select']) {
						// We found it!  Regular service target.
						// Check for existence
						$c = new Criteria();
						$c->add(NagiosDependencyTargetPeer::DEPENDENCY, $dependency->getId());
						$c->add(NagiosDependencyTargetPeer::TARGET_HOST, $host->getId());
						$c->add(NagiosDependencyTargetPeer::TARGET_SERVICE, $service->getId());
						$target = NagiosDependencyTargetPeer::doSelectOne($c);
						if($target) {
							$error = "That target already exists.";
						}
						else {
							$target = new NagiosDependencyTarget();
							$target->setNagiosDependency($dependency);
							$target->setNagiosHost($host);
							$target->setNagiosService($service);
							$target->save();
							$success = "Created target.";
							$found = true;
							break;
						}
					}
				}
				if(!$found) {
					// Check inherited services
					$inheritedServices = $host->getInheritedServices();
					foreach($inheritedServices as $service) {
						if($service->getDescription() == $_POST['service_select']) {
							// We found it!  
							// Check for existence
							$c = new Criteria();
							$c->add(NagiosDependencyTargetPeer::DEPENDENCY, $dependency->getId());
							$c->add(NagiosDependencyTargetPeer::TARGET_HOST, $host->getId());
							$c->add(NagiosDependencyTargetPeer::TARGET_SERVICE, $service->getId());
							$target = NagiosDependencyTargetPeer::doSelectOne($c);
							if($target) {
								$error = "That target already exists.";
							}
							else {
								$target = new NagiosDependencyTarget();
								$target->setNagiosDependency($dependency);
								$target->setNagiosHost($host);
								$target->setNagiosService($service);
								$target->save();
								$success = "Created target.";
								$found = true;
								break;
							}
						}
					}
				}
			}
		}
	}

}

$period_list = array();
$lilac->return_period_list($tempList);
$period_list[] = array("timeperiod_id" => '', "timeperiod_name" => 'Active Always');
foreach($tempList as $period) {
	$period_list[] = array("timeperiod_id" => $period->getId(), "timeperiod_name" => $period->getName());
}


$title = '';
if($dependency->getNagiosService() || $dependency->getNagiosServiceTemplate()) {
	$title .= "Service ";
	if($dependency->getNagiosServiceTemplate()) {
		$title .= "Template <i>" . $dependency->getNagiosServiceTemplate()->getName() . "</i>";
		$sublink = "service_template.php?id=" . $dependency->getNagiosServiceTemplate()->getId();
		$subText = "Return To Service Template " . $dependency->getNagiosServiceTemplate()->getName();
	}
	else {
		$title .= "<i>" . $dependency->getNagiosService()->getDescription() . "</i> On ";
		if($dependency->getNagiosService()->getNagiosHostTemplate()) {
			$title .= " Host Template <i>" . $dependency->getNagiosService()->getNagiosHostTemplate()->getName() . "</i>";
		}
		else if($dependency->getNagiosService()->getNagiosHost()) {
			$title .= "Host " . "<i>" . $dependency->getNagiosService()->getNagiosHost()->getName() . "</i>";
		}
		$sublink = "service.php?id=" . $dependency->getNagiosService()->getId();
		$subText = "Return To Service " . $dependency->getNagiosService()->getDescription();
	}
}
else {	
	if($dependency->getNagiosHostTemplate()) {
		$title .= "Host Template <i>" . $dependency->getNagiosHostTemplate()->getName() . "</i>";
		$sublink = "host_template.php?id=" . $dependency->getNagiosHostTemplate()->getId();
		$subText = "Return To Host Template " . $dependency->getNagiosHostTemplate()->getName();
	}
	else if($dependency->getNagiosHost()) {
		$title .= "Host <i>" . $dependency->getNagiosHost()->getName() . "</i>";
		$sublink = "hosts.php?id=" . $dependency->getNagiosHost()->getId();
		$subText = "Return To Host " . $dependency->getNagiosHost()->getName();
	}
	else if($dependency->getNagiosHostgroup()) {
		$title .= "Hostgroup <i>" . $dependency->getNagiosHostgroup()->getName() . "</i>";
		$sublink = "hostgroups.php?id=" . $dependency->getNagiosHostgroup()->getId();
		$subText = "Return To Hostgroup " . $dependency->getNagiosHostgroup()->getName();
	}

}

	
print_header("Dependency Editor for " . strip_tags($title));
?>
<script language="javascript">
function form_element_switch(element, checkbox) {
        if(checkbox.checked) {
                element.readOnly = false;
                element.disabled = false;
        }
        else {
                element.readOnly = true;
                element.disabled = true;
        }
}

function enabler_switch(enabler) {
	if(enabler.value == '0') {
		enabler.value = '1';
	}
	else {
		enabler.value = '0';
	}
}
</script>
<?php
	
	// Show service information table if selected
	if($_GET['id']) {	
		// Should set service dependency titlebar stuff here


		$titlebar = $title . "'s Dependency: " . $dependency->getName();

		// Build subnav
		$subnav = array(
				'general' => 'General',
				'targets' => 'Targets'
			);
		
		print_window_header($titlebar, "100%");	
		print_subnav($subnav, $_GET['section'], "section", $_SERVER['PHP_SELF'] . "?id=" . $_GET['id']);
		if($_GET['section'] == 'general') {
			if(!$dependency->getNagiosService())
				$dependency_image = $path_config['image_root'] . "server.gif";
			else
				$dependency_image = $path_config['image_root'] . "services.gif";
			?>
			<table width="100%" border="0">
			<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $dependency_image;?>" />
				</td>
				<td valign="top">
				<?php
				if(isset($_GET['edit'])) {	// We're editing general information					
					?>
					<form name="dependency_manage" method="post" action="dependency.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">
					<input type="hidden" name="request" value="dependency_modify_general" />
					<input type="hidden" name="dependency_manage[dependency_id]" value="<?php echo $_GET['id'];?>">
					<table width="100%" border="0">
					<tr>
						<td width="150" valign="top">
						<input type="checkbox" <?php echo  (($dependency->getInheritsParent() == 1) ? "CHECKED" : '');?> name="dependency_manage[inherits_parent]" value="1">Inherits Parents<br />
						</td>
						<td valign="middle"><?php echo $lilac->element_desc("inherits_parent", "nagios_dependency_desc"); ?></td>
					</tr>
					</table>
					<?php

					if($dependency->getService() !== null || $dependency->getServiceTemplate() !== null)	{ // It's a service dependency
						?>
						<table width="100%" border="0">
						<tr>
							<td colspan="2">
							<b>Execution Failure Criteria</b>
							</td>
						</tr>
						<tr>
							<td width="150" valign="top">
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaOk() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_ok]" value="1">Ok<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaWarning() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_warning]" value="1">Warning<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaUnknown() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_unknown]" value="1">Unknown<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaCritical() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_critical]" value="1">Critical<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaPending() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_pending]" value="1">Pending<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("service_execution_failure_criteria", "nagios_dependency_desc"); ?></td>
						</tr>
						</table>
						
						<table width="100%" border="0">
						<tr>
							<td colspan="2">
							<b>Notification Failure Criteria</b>
							</td>
						</tr>
						<tr>
							<td width="150" valign="top">
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaOk() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_ok]" value="1">Ok<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaWarning() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_warning]" value="1">Warning<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaUnknown() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_unknown]" value="1">Unknown<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaCritical() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_critical]" value="1">Critical<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaPending() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_pending]" value="1">Pending<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("service_execution_failure_criteria", "nagios_dependency_desc"); ?></td>
						</tr>
						</table>
						
						<?php
					}
					else {
						?>
						<table width="100%" border="0">
						<tr>
							<td colspan="2">
							<b>Execution Failure Criteria</b>
							</td>
						</tr>
						<tr>
							<td width="150" valign="top">
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaUp() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_up]" value="1">Up<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaDown() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_down]" value="1">Down<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaUnreachable() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_unreachable]" value="1">Unreachable<br />
							<input type="checkbox" <?php echo  (($dependency->getExecutionFailureCriteriaPending() == 1) ? "CHECKED" : '');?> name="dependency_manage[execution_failure_criteria_pending]" value="1">Pending<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("host_execution_failure_criteria", "nagios_dependency_desc"); ?></td>
						</tr>
						</table>
						
						<table width="100%" border="0">
						<tr>
							<td colspan="2">
							<b>Notification Failure Criteria</b>
							</td>
						</tr>
						<tr>
							<td width="150" valign="top">
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaUp() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_up]" value="1">Up<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaDown() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_down]" value="1">Down<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaUnreachable() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_unreachable]" value="1">Unreachable<br />
							<input type="checkbox" <?php echo  (($dependency->getNotificationFailureCriteriaPending() == 1) ? "CHECKED" : '');?> name="dependency_manage[notification_failure_criteria_pending]" value="1">Pending<br />
							</td>
							<td valign="middle"><?php echo $lilac->element_desc("host_execution_failure_criteria", "nagios_dependency_desc"); ?></td>
						</tr>
						</table>
						
						<?php
					}
					?>
					<b>Dependency Period</b><br />
					<?php print_select("dependency_manage[dependency_period]", $period_list, "timeperiod_id", "timeperiod_name", $dependency->getDependencyPeriod()); ?><br />
					<?php print($lilac->element_desc("dependency_period", "nagios_dependency_desc")); ?>	
					

					<br />
					<br />
					<input class="btn btn-primary" type="submit" value="Update General" /> <a class="btn btn-default" href="dependency.php?id=<?php echo $_GET['id'];?>&section=general">Cancel</a>
					<?php
				}
				else {
					?>
					<b>Included In Definition:</b><br />
					<?php
					if($dependency->getInheritsParent() !== null) {
						?>
						<b>Inherits Parent:</b> <?php if($dependency->getInheritsParent()) print("Yes"); else print("No");?><br />
						<?php
					}
					if($dependency->getExecutionFailureCriteriaUp() !== null || $dependency->getExecutionFailureCriteriaOk() !== null) {
						?>
						<b>Execution Failure Criteria On:</b>
						<?php
						if($dependency->getExecutionFailureCriteriaUp()) {
							print("Up");
							if($dependency->getExecutionFailureCriteriaDown() || $dependency->getExecutionFailureCriteriaUnreachable() || $dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical()  || $dependency->getExecutionFailureCriteriaPending())
								print(",");
						}
						if($dependency->getExecutionFailureCriteriaDown()) {
							print("Down");
							if($dependency->getExecutionFailureCriteriaUnreachable() || $dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
								print(",");
						}
						if($dependency->getExecutionFailureCriteriaUnreachable()) {
							print("Unreachable");
							if($dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
								print(",");
						}
						if($dependency->getExecutionFailureCriteriaOk()) {
							print("Ok");
								if($dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
									print(",");
						}
						if($dependency->getExecutionFailureCriteriaWarning()) {
							print("Warning");
								if($dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
									print(",");
						}
						if($dependency->getExecutionFailureCriteriaUnknown()) {
							print("Unknown");
								if($dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
									print(",");
						}
						if($dependency->getExecutionFailureCriteriaCritical()) {
							print("Critical");
								if($dependency->getExecutionFailureCriteriaPending())
									print(",");
						}
						if($dependency->getExecutionFailureCriteriaPending()) {
							print("Pending");
						}
						print("<br />");
					}
					if($dependency->getNotificationFailureCriteriaUp() !== null || $dependency->getExecutionFailureCriteriaOk() !== null) {
						?>
						<b>Notification Failure Criteria On:</b>
						<?php
						if($dependency->getNotificationFailureCriteriaUp()) {
							print("Up");
							if($dependency->getNotificationFailureCriteriaDown() || $dependency->getNotificationFailureCriteriaUnreachable() || $dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
								print(",");
						}
						if($dependency->getNotificationFailureCriteriaDown()) {
							print("Down");
							if($dependency->getNotificationFailureCriteriaUnreachable() || $dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
								print(",");
						}
						if($dependency->getNotificationFailureCriteriaUnreachable()) {
							print("Unreachable");
							if($dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
								print(",");
						}
						if($dependency->getNotificationFailureCriteriaOk()) {
							print("Ok");
								if($dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
									print(",");
						}
						if($dependency->getNotificationFailureCriteriaWarning()) {
							print("Warning");
								if($dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
									print(",");
						}
						if($dependency->getNotificationFailureCriteriaUnknown()) {
							print("Unknown");
								if($dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
									print(",");
						}
						if($dependency->getNotificationFailureCriteriaCritical()) {
							print("Critical");
								if($dependency->getNotificationFailureCriteriaPending())
									print(",");
						}
						if($dependency->getNotificationFailureCriteriaPending()) {
							print("Pending");
						}
						print("<br />");
					}
					if(!$dependency->getDependencyPeriod()) {
						print("<b>Dependency Period:</b> Always Active");
					}
					else {
						print("<b>Dependency Period:</b> " . $dependency->getNagiosTimeperiod()->getName());
					}	
					?>
					<br />
					<a class="btn btn-primary" href="dependency.php?id=<?php echo $_GET['id'];?>&section=general&edit=1">Edit</a>
					<?php
				}
				?>
				</td>
			</tr>
			</table>
			<br />
			
			<?php				
		}
		else if($_GET['section'] == 'targets') {
			$targets_list = $dependency->getNagiosDependencyTargets();
			$numOfTargets = count($targets_list);
			?>
				<table width="100%" border="0">
				<tr>
				<td width="100" align="center" valign="top">
				<img src="<?php echo $path_config['image_root'];?>contact.gif" />
				</td>
				<td valign="top">
				<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
				<tr class="altTop">
				<td colspan="2">Targets for this Dependency:</td>
				</tr>
				<?php
				$counter = 0;
			if($numOfTargets) {
				foreach($targets_list as $target) {
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
						<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger btn-xs" href="dependency.php?id=<?php echo $_GET['id'];?>&section=targets&request=delete&target_id=<?php echo $target->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
						<td height="20" class="altRight"><?php
					   		switch($target->getType()) {
								case 'host':
									print("<strong>Host:</strong> " . $target->getNagiosHost()->getName());	
									break;
								case 'hostgroup':
									print("<strong>Hostgroup:</strong> " . $target->getNagiosHostgroup()->getName());
									break;
								case 'service':
									print("<strong>Service:</strong> " . $target->getNagiosHost()->getName() . " - " . $target->getNagiosService()->getDescription());
									break;
							
							};?>						
						</tr>
						<?php
						$counter++;
				}
			}
			?>
				</table>
				<br />
				<br />
				<h3>Add A Target:</h3>
				<?php
				$type = $dependency->getType();
				if(in_array($type, array("host", "hosttemplate", "hostgroup"))) {
					?>
					<form name="add_target" action="dependency.php?id=<?php echo $_GET['id'];?>&section=targets" method="post">
					<input type="hidden" name="request" value="add_target" />
					<table>
						<tr>
							<td>Type</td><td>Name</td><td></td>	
						</tr>
						<tr>
							<td>
								<select id="typeselect" name="typeselect">
									<option value="host">Host</option>
									<option value="hostgroup">Hostgroup</option>
								</select>
							</td>
							<td>
								<input type="text" id="targetname" size="30" name="name" value='' />
							</td>
							<td>
								<input class="btn btn-primary" type="submit" value="Add Target" />
							</td>
						</tr>
					</table>
					</form>
					Select either Host or Hostgroup from the Type dropdown, and begin typing the name of the host/hostgroup.  Select the matched host/hostgroup you want to be dependent on and click on Add Target.
					<?php
				}
				else {
					// This is a service target
					?>
					<form name="add_target" action="dependency.php?id=<?php echo $_GET['id'];?>&section=targets" method="post">
					<input type="hidden" name="request" value="add_target" />
					<table>
						<tr>
							<td>Host Name</td><td>Service Name</td><td></td>
						</tr>
						<tr>
							<td>
								<input type="text" id="hostname" size="30" name="hostname" value='' />
							</td>
							<td>
								<select name="service_select" id="service_select" disabled="disabled">
									<option>Enter a valid hostname to the left.</option>
								</select>
							</td>
							<td><input class="btn btn-primary" type="submit" id="targetsubmit" value="Add Target" disabled="disabled" /></td>
						</tr>

					</table>
					</form>	
					<?php
				}

				?>
				</td>
				</tr>
				</table>
				<br />
				<script type="text/javascript">
					<?php
					if(in_array($type, array("host", "hosttemplate", "hostgroup"))) {
						?>
							$(function() {
							  $("#targetname").autocomplete("dependency.php?request=search&type=host");

							  $("#typeselect").change(function(event) 
													  {
													  $("#targetname").autocomplete("dependency.php?request=search&type=" 
																					+ 
																					$("#typeselect").get(0).value);	
													  });
					<?php
					}
					else {
						?>
						$(function() {
							$("#hostname").autocomplete("dependency.php?request=search&type=host");

							function updateservicelist(event) {
								$.getJSON("dependency.php?request=search&type=service&host=" + $("#hostname").get(0).value, function(data) {
											if(data['error'] != undefined) {
												$("#service_select").html("<option>" + data['error'] + "</option");	
												$("#targetsubmit").attr("disabled", true);
												$("#service_select").attr("disabled", true);
											}
											else {
												html = '';
												for(counter = 0; counter < data['services'].length; counter++) {
													html += "<option value='" + data['services'][counter] + "'>" + data['services'][counter] + "</option>";
												}
												$("#service_select").html(html);
												$("#service_select").attr("disabled", false);
												$("#targetsubmit").attr("disabled", false);
											}
										  });
							}

							$("#hostname").bind("keyup result change", updateservicelist);

						  });
						<?php	
					}
					?>
				</script>
				<?php
		}

		?>
<a href="<?php echo $sublink;?>"><?php echo $subText;?></a>
<?php
		print_window_footer();
		?>
		<br />
		<br />
		<?php
	}
	?>
	<br />
	<?php
print_footer();
?>
