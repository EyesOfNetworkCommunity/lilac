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
Lilac Auto Discovery Page
*/


include_once('includes/config.inc');

include_once('autodiscovery/classes.inc.php');
include_once('AutodiscoveryJob.php');
include_once('AutodiscoveryLogEntry.php');

require_once("Net/Traceroute.php");

if(isset($_GET['id'])) {
	$autodiscoveryJob = AutodiscoveryJobPeer::retrieveByPK($_GET['id']);
	if(!$autodiscoveryJob) {
		unset($autodiscoveryJob);
	}

	
	if(isset($_GET['action']) && $_GET['action'] == "restart") {
		$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_STARTING);
		$autodiscoveryJob->save();
		exec("php autodiscovery/autodiscover.php " . $autodiscoveryJob->getId() . " > /dev/null", $tempOutput, $retVal);
		if($retVal != 42) {
			$error = "Failed to run external autodiscovery script. Return value: " . $retVal . "<br /> Error:";
			foreach($tempOutput as $output) {
				$error .= $output . "<br />";
			}
		}
		else {
			// No need to show
			//$success = "Restarted AutoDiscovery Job";
		}
	}
	if(isset($_GET['delete'])) {
		// We want to delete the job!
		$autodiscoveryJob->delete();
		unset($_GET['id']);
		unset($autodiscoveryJob);
		$success = "Removed Job and associated devices.";
	}
}


if(isset($_GET['deviceId'])) {
	// We want to review a specific device
	$device = AutodiscoveryDevicePeer::retrieveByPK($_GET['deviceId']);
	if(!$device) {
		header("Location: autodiscovery.php");
		exit();
	}
	
	
	if(isset($_GET['request']) && $_GET['request'] == 'recalc') {
		// We want to recalculate template matches
		$config = unserialize($autodiscoveryJob->getConfig());
		$defaultTemplateId = $config->getVar("default_template");
		if(!empty($defaultTemplateId)) {
			$defaultTemplate = NagiosHostTemplatePeer::retrieveByPK($defaultTemplateId);
		}
		if(empty($defaultTemplate)) {
			$defaultTemplate = null;
		}
		AutodiscoveryMatchMaker::match($device, $defaultTemplate);
		$success = "Recalculated Matching Templates.";
	}
}

if(isset($_GET['request']) && $_GET['request'] == 'status') {
	// We're our AJAX client wanting status information
	$result = array();
	$autodiscoveryJob = AutodiscoveryJobPeer::retrieveByPK($_GET['id']);
	if(!$autodiscoveryJob) {
		$result['error'] = "Invalid job specified.";
		print(json_encode($result));
		exit();
	}
	// Okay, let's populate the status
	$result['start_time'] = $autodiscoveryJob->getStartTime();
	$result['status_code'] = $autodiscoveryJob->getStatusCode();
	$result['status_text'] = $autodiscoveryJob->getStatus();
	$result['status_change_time'] = $autodiscoveryJob->getStatusChangeTime();
	
	// Build elapsed time
	if(!in_array($autodiscoveryJob->getStatusCode(), array(AutoDiscoveryJob::STATUS_FAILED, AutoDiscoveryJob::STATUS_FINISHED))) {
		$target = time();
	}
	else {
		$target = strtotime($result['status_change_time']);
	}
	$start = strtotime($result['start_time']);
	$total = $target - $start;
	$hours = (int)($total / 3600);
	$total = $total % 3600;
	$minutes = (int)($total / 60);
	$seconds = $total % 60;
	
	$result['elapsed_time'] = $hours . " Hours " . $minutes . " Minutes " . $seconds . " Seconds";

	print(json_encode($result));
	exit();
}


if(isset($_GET['request']) && $_GET['request'] == 'fetch') {
	// We're our AJAX client wanting to get new log data
	$result = array();
	$c = new Criteria();
	$c->add(AutodiscoveryLogEntryPeer::JOB, $_GET['id']);
	$c->setLimit($_POST['rp']);
	$c->setOffset(isset($_POST['page']) ? ($_POST['page'] - 1) * $_POST['rp'] : 0);
	$c->addDescendingOrderByColumn(AutodiscoveryLogEntryPeer::ID);
	$entries = $autodiscoveryJob->getAutodiscoveryLogEntrys($c);
	foreach($entries as $entry) {
		$results['rows'][] = array('id' => $entry->getId(), 'cell' => array( $entry->getTime(),
									  $entry->getReadableType($entry->getType()),
									  $entry->getText()));
	}
	$c = new Criteria();
	$c->add(AutodiscoveryLogEntryPeer::JOB, $autodiscoveryJob->getId());
	$results['page'] = $_POST['page'];
	$results['total'] = AutodiscoveryLogEntryPeer::doCount($c);
	?>

	<?php
	print(json_encode($results));
	

	exit();
}

if(isset($_POST['request'])) {
	if($_POST['request'] == "autodiscover") {

		if(!strlen(trim($_POST['job_name']))) {
			$error = "Job name must be provided.";
		}
		else {
			if(count($_POST['target']) == 0) {
				$error = "You must provide at least one target.";
			}
			else {
				ksort($_POST['target']);
				$config = new AutodiscoveryConfig("NmapAutoDiscoveryEngine");		
	
				$config->setVar("targets", $_POST['target']);
				$config->setVar("nmap_binary", $_POST['nmap_binary']);
				$config->setVar("traceroute_enabled", (empty($_POST['traceroute_enabled'])) ? true : true);
				$config->setVar("default_template", $_POST['default_template']);
	
				$autodiscoveryJob = new AutodiscoveryJob();
				$autodiscoveryJob->setName($_POST['job_name']);
				$autodiscoveryJob->setDescription($_POST['job_description']);
				$autodiscoveryJob->setCmd(AutodiscoveryJob::CMD_START);
				$autodiscoveryJob->setConfig(serialize($config));
				$autodiscoveryJob->setStatus("Starting...");
				$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_STARTING);
				$autodiscoveryJob->save();
				
				// Attempt to execute the external auto-discovery script, fork it, and love it.
				exec("php autodiscovery/autodiscover.php " . $autodiscoveryJob->getId() . " > /dev/null", $tempOutput, $retVal);
				if($retVal != 42) {
					$status_msg = "Failed to run external Autodiscovery script. Return value: " . $retVal . "<br /> Error:";
					foreach($tempOutput as $output) {
						$status_msg .= $output . "<br />";
					}
				}	
			}
		}
	}
	else if($_POST['request'] == "updateGeneral") {
		if(trim($_POST['name']) != '' && trim($_POST['description']) != '') {
		// Check to see first if a host or auto discovery device has that potential name
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, trim($_POST['name']));
			$c->setIgnoreCase(true);
			$host = NagiosHostPeer::doSelectOne($c);
			if(!$host) {
				// Try a autodiscovery device?
			$c = new Criteria();
			$c->add(AutodiscoveryDevicePeer::NAME, trim($_POST['name']));
			$c->setIgnoreCase(true);
			$host = AutodiscoveryDevicePeer::doSelectOne($c);
			}
			if($host) {
				$error = "A host already exists with that name.  Must choose a unique name.";
			}
			else {
				// Assign name and description
				$device->setName(trim($_POST['name']));
				$device->setDescription(trim($_POST['description']));
				$device->save();
				$success = "Updated discovered device's information.";
			}
		}
		else {
			$error = "Name and Description cannot be blank.";
		}
	}
	else if($_POST['request'] == "assignTemplate") {
		$hostTemplate = NagiosHostTemplatePeer::retrieveByPK($_POST['template']);
		if(!$hostTemplate) {
			$error = "That template no longer exists.";
		}
		else {
			$device->setNagiosHostTemplate($hostTemplate);
			$device->save();
			$success = "Template assigned.";
		}
	}
	else {
		// We want to process our device list!
		// First we check to see if there's any hosts now with the same name
		foreach($_POST['selectedDevices'] as $deviceId) {
			$device = AutodiscoveryDevicePeer::retrieveByPK($deviceId);
			if(!$device) {
				$error = "One of the devices provided no longer exists.";
				continue;
			}
			$c = new Criteria();
			$c->add(NagiosHostPeer::NAME, $device->getName());
			$c->setIgnoreCase(true);
			$host = NagiosHostPeer::doSelectOne($c);
			if(!$host) {
				$c = new Criteria();
				$c->add(AutodiscoveryDevicePeer::NAME, $device->getName());
				$c->setIgnoreCase(true);
				$host = AutodiscoveryDevicePeer::doSelectOne($c);
				if($host->getId() == $device->getId()) {
					unset($host);
				}
			}
			if(!empty($host)) {
				$error = "A host already exists with the name of " . $device->getName() . ".  Change the device's name before importing.";
			}
		}
		if(empty($error)) {
			$totalSuccess = 0;
			// Okay, no errors, let's create our hosts!
			foreach($_POST['selectedDevices'] as $deviceId) {
				$device = AutodiscoveryDevicePeer::retrieveByPK($deviceId);
				$tempHost = new NagiosHost();
				$tempHost->setAddress($device->getAddress());
				$tempHost->setName($device->getName());
				$tempHost->setAlias($device->getDescription());
				$tempHost->save();
				// Now assign a template, if wanted
				$template = $device->getNagiosHostTemplate();
				if(!empty($template)) {
					$inheritance = new NagiosHostTemplateInheritance();
					$inheritance->setNagiosHost($tempHost);
					$inheritance->setNagiosHostTemplateRelatedByTargetTemplate($template);
					$inheritance->save();
				}
				// Now parent
				$parent = $device->getNagiosHost();
				if(!empty($parent)) {
					$parentRelationship = new NagiosHostParent();
					$parentRelationship->setNagiosHostRelatedByChildHost($tempHost);
					$parentRelationship->setNagiosHostRelatedByParentHost($parent);
					$parentRelationship->save();
				}
				$totalSuccess++;
				$device->delete();
			}
			$success = $totalSuccess . " Device(s) Imported.";
		}
	}
}


print_header("AutoDiscovery");

if(isset($autodiscoveryJob)) {
	?>
    <script type="text/javascript">    
		$(document).ready(function() {
    	$("#joblog").flexigrid({
    		url: 'autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>&request=fetch',
			dataType: 'json', // type of data loaded
			errormsg: 'There was a problem retrieving the error log.  Refresh and try again',
    		colModel: [
    		{display: 'Time', name: 'name', width: 100, sortable: true, align: 'left'},
    		{display: 'Type', name: 'type', width: 100, sortable: true, align: 'left'},
    		{display: 'Text', name: 'text', width: 1000, sortable: true, align: 'left'}
    			],
    		resizable: false, //resizable table
    		sortname: "time", 
    		sortorder: 'asc',
    		usepager: true,
    		procmsg: 'Grabbing Log Entries, please wait ...',
    		title: false,
    		showToggleBtn: false, //show or hide column toggle popup
    		useRp: true,
    		rp: 20,
    		height: 200
    	});
    
    	<?php
    	if(!in_array($autodiscoveryJob->getStatusCode(), array(AutodiscoveryJob::STATUS_FINISHED, AutodiscoveryJob::STATUS_FAILED))) {
    	    // Add check timer
    		?>
    		var timer = 0;
    		$(document).everyTime(2000, "status", function() {
    			// Call ajax
				$.getJSON("autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>&request=status&tok=" + Math.random() , function(data) {
					$("#jobstatus").html(data.status_text);
					$("#elapsedtime").html(data.elapsed_time);
					
					if(data.status_code == <?php echo AutodiscoveryJob::STATUS_FINISHED;?> || data.status_code == <?php echo AutodiscoveryJob::STATUS_FAILED;?>) {
						if(data.status_code == <?php echo AutodiscoveryJob::STATUS_FINISHED;?>) {
							$("#completemsg").show("slow").fadeIn("slow");
						}
						$(document).stopTime("status");
					}
				});
    		}, 0, true);
    		<?php
    	}
		?>
    	
    });

    </script>
	<?php
}
else {
	// We're setting up an autodiscovery job
	?>
	<script type="text/javascript">
	var targetcount = 1;
	$(function() {
		// Find the enter keypress
		if ($.browser.mozilla) {
		$("#activetarget").keypress(function(event) {
			if(event.keyCode == 13) {
				$("#addtargetlink").click();
				event.preventDefault();
				event.stopPropagation();
				return false;
			}
		});
		} else {
		$("#activetarget").keydown(function(event) {
			if(event.keyCode == 13) {
				$("#addtargetlink").click();
				event.preventDefault();
				event.stopPropagation();
				return false;
			}
		});
		}
		
		
		$("#addtargetlink").click(function(event) {
			targetcount = targetcount + 1;
			event.preventDefault();
			// Add new row to the table before this row, showing the 
			var content = $("<tr><td>" + $("#activetarget").attr("value") + "<input type='hidden' name='target[" + targetcount + "]' value='" + $("#activetarget").attr("value") + "'/></td><td><a class=\"btn btn-danger btn-xs\" href=''>Delete This Target</a></td></tr>");
			// Add link to remove
			$("a", content).click(function(event) {
				event.preventDefault();
				$(this).parents("tr").remove();
				if($(this).parents("tr").length == 1) {
					$("#jobSubmitButton").attr("disabled", true).attr("value", "You Must Provide At Least One Target");
				}
			});
			$("#targetinputrow").before(content);
			$("#activetarget").attr("value", "");
			
			// Automatically set the button and enable the form
			$("#jobSubmitButton").attr("disabled", false).attr("value", "Begin Auto-Discovery Job");
			
		});
		
		
	});
	</script>
	<?php
}


?>
<style type="text/css">
fieldset {
border:1px solid #CCCCCC;
margin:1em 0pt;
padding:1em;
}
legend {
font-weight:bold;
}
label {
display:block;
}

.checks label {
width:15em;
display: inline;
float: none;
}

.checks p {
padding: 2px;
}
</style>
<?php
if(!isset($autodiscoveryJob))	{
	$c = new Criteria();
	$c->add(AutodiscoveryJobPeer::END_TIME, null);
	$autodiscoveryJobs = autodiscoveryJobPeer::doSelect($c);
	if($autodiscoveryJobs) {
		print_window_header("Jobs In Progress", "100%");
		?>
		There appears to be running autodiscovery jobs.  There should only be one running.  If there are multiple showing as running, you should cancel them or purge them.  Click on a job to 
		view it's progress and it's log.
		<table class="jobs">
		<tr>
			<td><strong>Name</strong></td>
			<td><strong>Description</strong></td>
			<td><strong>Start Time</strong></td>
			<td><strong>Status</strong></td>
			<td colspan="2"><strong>Actions</strong></td>
		</tr>
		<?php
		foreach($autodiscoveryJobs as $job) {
			?>
			<tr>
				<td><?php echo $job->getName();?></td>
				<td><?php echo $job->getDescription();?></td>
				<td><?php echo $job->getStartTime();?></td>
				<td><?php echo $job->getStatus();?></td>
				<td><a href="autodiscovery.php?id=<?php echo $job->getId();?>">View Job</a></td>
				<td><a href="autodiscovery.php?id=<?php echo $job->getId();?>&action=restart">Restart</a></td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php
		print_window_footer();	
	}
	
	
	
	print_window_header("Create New Auto Discovery Job", "100%", "center");
	?>
	To begin an auto-discovery of your configuration, an Auto Discovery Job must be defined.  Configure your auto discovery job below.  Once created, your auto discovery 
	job will begin in the background.  You will be able to check on the status of your job and view it's log as it continues running.  You are advised to NOT edit anything 
	in Lilac while your job is running.
	<br />
	<form name="autodiscovery_job" method="post" action="autodiscovery.php">
	<input type="hidden" name="request" value="autodiscover" />
	<p>
	<fieldset>
		<legend>Job Definition</legend>
		<label for="job_name">Job Name</label>
		<input id="job_name" name="job_name" type="text" size="100" maxlength="255" />
		<label for="job_description">Job Description</label>
		<textarea id="job_description" name="job_description" name="job_description" rows="5" cols="80" /></textarea>
	</fieldset>
	</p>
	<p>
	<fieldset>
		<legend>Discovery Options</legend>
		<p>
		<label for="nmap_binary">NMAP Binary Location</label>
		<input id="nmap_binary" name="nmap_binary" type="text" size="100" maxlength="255" value="/usr/bin/nmap" />
		</p>
		<p>
		<input id="traceroute_enabled" name="traceroute_enabled" type="checkbox" checked="checked" /> Enable Traceroute to Determine Parent Host<br />
		</p>
		<p>
		<label for="default_template">Default Template If No Templates Match</label>
		<?php
		$templates = NagiosHostTemplatePeer::doSelect(new Criteria());
		$options[] = array(
			'option' => 'None',
			'value' => ''
		);
		foreach($templates as $template) {
			$options[] = array(
				'option' => $template->getName(),
				'value' => $template->getId()
			);
		}
		print_select("default_template", $options, "value" , "option", '');
		?>
		</p>
	</fieldset>
	</p>
	<p>
	<fieldset>
		<legend>Target Specification</legend>
		<p>
		<table id="targets">
			<tr id="targetinputrow">
				<td>
				<input id="activetarget" type="text"size="40"></td><td><a class="btn btn-primary btn-xs" id="addtargetlink" href="">Add Target</a>
				</td>
			</tr>
		</table>
		Provide an IP address or range of ip addresses in NMAP-accepted style. See <a target="_blank" href="http://insecure.org/nmap/man/man-target-specification.html">Target Specification</a> for examples. 
		</p>
	</fieldset>
	</p>
	<input class="btn btn-primary" id="jobSubmitButton" type="submit" disabled="disabled" value="You Must Provide At Least One Target" />
	<?php
	print_window_footer();
}
else if(!isset($_GET['review'])) {
	?>
	<?php
	$stats = $autodiscoveryJob->getStats();
	if($stats) {
		$stats = unserialize($stats);
	}
	
	print_window_header("Job Details", "100%");
	?>
	<strong>Job Name:</strong> <?php echo $autodiscoveryJob->getName();?><br />
	<?php echo $autodiscoveryJob->getDescription();?>
	<br />
	<br />
	<strong>Start Time:</strong> <?php echo $autodiscoveryJob->getStartTime();?><br />
	<br />
	<?php
	if(!in_array($autodiscoveryJob->getStatusCode(), array(AutodiscoveryJob::STATUS_FAILED, AutodiscoveryJob::STATUS_FINISHED) )) {
		?>
		<strong>Elapsed Time:</strong> <span id="elapsedtime">Unknown</span>
		<?php
	}
	else {
		if($autodiscoveryJob->getStatusCode() == AutodiscoveryJob::STATUS_FAILED) {
			?>
			<strong>Time of Failure:</strong> <?php echo $autodiscoveryJob->getStatusChangeTime();?>
			<?php
		}
		else {
			?>
			<strong>Time When Completed:</strong> <?php echo $autodiscoveryJob->getStatusChangeTime();?>
			<?php
		}
	}
	?>
	<br />
	<strong>Current Status:</strong> <span id="jobstatus"><?php echo $autodiscoveryJob->getStatus();?></span><br />
	<?php
	$config = unserialize($autodiscoveryJob->getConfig());
	?>
	<a id="completemsg" href="autodiscovery.php?id=<?php echo $autodiscoveryJob->getid();?>&review=1" <?php if($autodiscoveryJob->getStatusCode() != AutodiscoveryJob::STATUS_FINISHED ) { ?>style="display: none;"<?php } ?>>
	<div  class="roundedcorner_success_box">
	   <div class="roundedcorner_success_top"><div></div></div>
	      <div class="roundedcorner_success_content">
	      Auto-Discovery Complete.  Click to Continue To Reviewing Found Devices
	      </div>
	   <div class="roundedcorner_success_bottom"><div></div></div>
	</div></a>
	
	<a href="autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>&action=restart">Restart Job</a> | <a href="autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>&delete=1" onclick="javascript:return confirmDelete();">Remove Job</a> | <a href="autodiscovery.php">Return To AutoDiscovery Menu</a>
	<?php
	print_window_footer();
	print_window_header("Job Log");
	?>
		<div id="joblog">
		
		</div>
	<?php
	print_window_footer();
	
}
else if(!isset($_GET['deviceId'])) {
	// We're going to review
	print_window_header("Auto-Discovery Results");
	?>
	<script type="text/javascript">
	$(function() {
		$(".checkAllLink").click(function(event){
			event.preventDefault();
			$(".autodiscoveryCheckbox").attr("checked", true);
		});
		
		$(".uncheckAllLink").click(function(event){
			event.preventDefault();
			$(".autodiscoveryCheckbox").attr("checked", false);
		});		
		$(".autodiscoveryCheckbox").attr("checked", false);
	});
	
	
	</script>
	<a href="autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>">Return To Auto-Discovery Job</a>
	<div>
	<?php
	$c = new Criteria();
	$c->add(AutodiscoveryDevicePeer::JOB_ID, $autodiscoveryJob->getId());
	$devices = AutodiscoveryDevicePeer::doSelect($c);
	if(empty($devices)) {
		?>
		<br />
		<h3>No Devices Available For Import</h3>
		<?php
	}
	else {
		?>
		<br />
		<h3><?php echo count($devices);?> Device(s) Available For Import</h3>
		<br />
		<form action="autodiscovery.php?id=<?php echo $_GET['id'];?>&review=1" method="post">
		<input type="hidden" name="request" value="process" />

		<table class="tablelist">
		<thead>
			<tr>
			<td>
			</td>
			<td>
			Address
			</td>
			<td>Name</td>
			<td>
			Description
			</td>
			<td>Parent</td>
			<td>Hostname</td>

			<td>
			Template Assigned
			</td>
			<td>
			Actions
			</td>
			</tr>
		</thead>
		<?php
		foreach($devices as $device) {
			?>
			<tr class="alt">
				<td><input class="autodiscoveryCheckbox" type="checkbox" name="selectedDevices[]" value="<?php echo $device->getId();?>" /></td>
				<td>
				<?php echo $device->getAddress();?> 
				</td>
				<td>
				<?php echo $device->getName();?>
				</td>
				<td>
				<?php echo $device->getDescription();?>
				</td>
				<td>
				<?php
				$parent = $device->getNagiosHost();
				if(empty($parent)) {
					?>Top-Level<?php
				}
				else {
					print($parent->getName());
				}
				?>
				</td>
				
				<td>
				<?php echo $device->getHostname();?>
				</td>

				<td>
				<?php
				if(!$device->getHostTemplate()) {
					?>None Assigned<?php
				}
				else {
					$hostTemplate = NagiosHostTemplatePeer::retrieveByPK($device->getHostTemplate());
					if(!empty($hostTemplate)) {
						print($hostTemplate->getName());
					}
					else {
						print("Template Not Found");
					}
				}
				?>
				</td>
				<td>
				<a href="autodiscovery.php?id=<?php echo $autodiscoveryJob->getId();?>&review=1&deviceId=<?php echo $device->getId();?>">Modify Details</a>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
		<a class="checkAllLink" href="#">Check All</a> / <a class="uncheckAllLink" href="#">Un-Check All</a> With Selected: <select>
		<option value="accept">Import</option>
		<option value="remove">Remove</option>
		</select> <input p: type="submit" value="Process" />		</form>
		<?php
	}
	?>
	</div>
	<?php
	print_window_footer();
}
else {
	print_window_header("Device Details");
	?>
	<a class="btn btn-default" href="autodiscovery.php?id=<?php echo $device->getAutodiscoveryJob()->getId();?>&review=1">Return To Device List</a>
	<br />
	<br />
	<h3>General Information</h3>
	<table class="tablelist">
	<thead>
		<tr>
			<td>Address</td>
			<td>Name</td>
			<td>Description</td>
			<td>Parent</td>
			<td>Hostname</td>
			<td>OS Family</td>
			<td>OS Generation</td>
			<td>OS Vendor</td>
			<td>Template Assigned</td>
		</tr>
	</thead>
	<tr>
		<td><?php echo $device->getAddress(); ?></td>
		<td><?php echo $device->getName(); ?></td>
		<td><?php echo $device->getDescription(); ?></td>
		
		<td>
		<?php
		$parent = $device->getNagiosHost();
		if(empty($parent)) {
			?>Top-Level<?php
		}
		else {
			print($parent->getName());
		}
		?>
		</td>		
		
		<td><?php echo $device->getHostname(); ?></td>

		<td><?php echo $device->getOsfamily(); ?></td>
		<td><?php echo $device->getOsgen(); ?></td>
		<td><?php echo $device->getOsvendor(); ?></td>
		<td>				<?php
				if(!$device->getHostTemplate()) {
					?>None Assigned<?php
				}
				else {
					$hostTemplate = NagiosHostTemplatePeer::retrieveByPK($device->getHostTemplate());
					if(!empty($hostTemplate)) {
						print($hostTemplate->getName());
					}
					else {
						print("Template Not Found");
					}
				}
				?></td>
	</tr>
	</table>
	<br />
	<h3>Update General Information</h3>
	<form action="autodiscovery.php?id=<?php echo $_GET['id'];?>&review=1&deviceId=<?php echo $device->getId();?>" method="post">
	<input type="hidden" name="request" value="updateGeneral" />
	<strong>Name: </strong><input type="text" value="<?php echo $device->getName();?>" name="name" size="40" maxlength="255" /> <strong>Description: </strong><input value="<?php echo $device->getDescription();?>" type="text" name="description" size="40" maxlength="255" /> 
	<input class="btn btn-primary" type="submit" value="Update General" />	
	
	</form>
	<br />
	<h3>Change Template Assignment</h3>
	<form action="autodiscovery.php?id=<?php echo $_GET['id'];?>&review=1&deviceId=<?php echo $device->getId();?>" method="post">
	<input type="hidden" name="request" value="assignTemplate" />
	<?php
		$matchedTemplates = $device->getTemplateMatches();
		$options = array();
		$options[] = array(
			'option' => 'None',
			'value' => ''
		);
		$searchArray = array();
		foreach($matchedTemplates as $match) {
			$options[] = array(
				'option' => $match->getNagiosHostTemplate()->getName() . " - " . $match->getPercent() . "%",
				'value' => $match->getNagiosHostTemplate()->getId()
			);
			$searchArray[] = $match->getNagiosHostTemplate()->getId();
		}
		// Add the rest of the templates
                $c = new Criteria();
                $c->addAscendingOrderByColumn(NagiosHostTemplatePeer::NAME);
                $templates = NagiosHostTemplatePeer::doSelect($c);
		foreach($templates as $template) {
			if(!in_array($template->getId(), $searchArray)) {
				$options[] = array(
					'option' => $template->getName() . " - n/a",
					'value' => $template->getId()
				);
			}
		}
		print_select("template", $options, "value", "option", $device->getHostTemplate());
	?> <input class="btn btn-primary" type="submit" value="Assign Template" /> <a class="btn btn-primary" href="autodiscovery.php?id=<?php echo $_GET['id'];?>&review=1&deviceId=<?php echo $device->getId();?>&request=recalc">Recalculate Template Matches</a>
	</form>
	<br />
	<br />
	<?php
	$c = new Criteria();
	$c->add(AutodiscoveryDeviceServicePeer::DEVICE_ID, $device->getId());
	$services = AutodiscoveryDeviceServicePeer::doSelect($c);
	if(empty($services)) {
		?>
		<p>
		<h3>No Services Were Found On This Device</h3>
		</p>
		<?php
	}
	else {
		?>
		<h3>Found <?php echo count($services);?> Service(s)</h3>
		<table class="tablelist">
		<?php
		$tmp = 0;
		foreach($services as $service) {
			?>
			<tr>
				<td <?php if($tmp++ % 2) echo "class=\"alt\"";?>>
				<h3><?php echo $service->getName();?> on port <?php echo $service->getProtocol();?>/<?php echo $service->getPort(); ?></h3>
				<strong>Product: </strong><?php echo $service->getProduct(); ?><br />
				<strong>Version: </strong><?php echo $service->getVersion(); ?><br />
				<strong>Extra Information: </strong><?php echo $service->getExtraInfo(); ?>
				</td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php
	}
	
	print_window_footer();
}

print_footer();

?>
