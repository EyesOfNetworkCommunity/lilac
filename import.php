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
Lilac Import Page, Displays Menu, and Statistics
*/


include_once('includes/config.inc');

include_once('importer/classes.inc.php');
include_once('ImportJob.php');
include_once('ImportLogEntry.php');

// Better to load our engines!
$availableEngines = ImportEngine::getAvailableEngines();

if(isset($_GET['action']) && $_GET['action'] == "engineConfig") {
	// Need to send over engine configuration
	$engineClass = $_GET['className'];
	$engine = new $engineClass(null); // Wonky, I know.
	$engine->renderConfig();
	die();
}

if(isset($_GET['id'])) {
	$importJob = ImportJobPeer::retrieveByPK($_GET['id']);
	if(!$importJob) {
		unset($importJob);
	}
	
	if(isset($_GET['action']) && $_GET['action'] == "restart") {
		$importJob->setStatusCode(ImportJob::STATUS_STARTING);
		$importJob->setStartTime(time());
		$importJob->setStatus("Starting...");
		$importJob->save();
		exec("php importer/import.php " . $importJob->getId() . " > /dev/null", $tempOutput, $retVal);
		if($retVal != 42) {
			$error = "Failed to run external importer script. Return value: " . $retVal . "<br /> Error:";
			foreach($tempOutput as $output) {
				$error .= $output . "<br />";
			}
		}
		else {
			// No need to show
			//$success = "Restarted Import Job";
		}
	}
	if(isset($_GET['delete'])) {
		// We want to delete the job!
		$importJob->delete();
		unset($_GET['id']);
		unset($importJob);
		$success = "Removed Job";
	}
}

if(isset($_GET['request']) && $_GET['request'] == 'status') {
	// We're our AJAX client wanting status information
	$result = array();
	$importJob = ImportJobPeer::retrieveByPK($_GET['id']);
	if(!$importJob) {
		$result['error'] = "Invalid job specified.";
		print(json_encode($result));
		exit();
	}
	// Okay, let's populate the status
	$result['start_time'] = $importJob->getStartTime();
	$result['status_code'] = $importJob->getStatusCode();
	$result['status_text'] = $importJob->getStatus();
	$result['status_change_time'] = $importJob->getStatusChangeTime();
	
	// Build elapsed time
	if(!in_array($importJob->getStatusCode(), array(ImportJob::STATUS_FAILED, ImportJob::STATUS_FINISHED))) {
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
	$c->add(ImportLogEntryPeer::JOB, $_GET['id']);
	$c->setLimit($_POST['rp']);
	$c->setOffset(isset($_POST['page']) ? ($_POST['page'] - 1) * $_POST['rp'] : 0);
	$c->addDescendingOrderByColumn(ImportLogEntryPeer::ID);
	$entries = $importJob->getImportLogEntrys($c);
	foreach($entries as $entry) {
		$results['rows'][] = array('id' => $entry->getId(), 'cell' => array( $entry->getTime(),
									  $entry->getReadableType($entry->getType()),
									  $entry->getText()));
	}
	$c = new Criteria();
	$c->add(ImportLogEntryPeer::JOB, $importJob->getId());
	$results['page'] = $_POST['page'];
	$results['total'] = ImportLogEntryPeer::doCount($c);
	?>

	<?php
	print(json_encode($results));
	

	exit();
}


if(isset($_POST['request'])) {
	if(!strlen(trim($_POST['job_name']))) {
		$error = "Job name must be provided.";
	}
	else  {
		// Instantiate an engine
		$engineClass = $_POST['job_engine'];
		$engine = new $engineClass(null); // Wonky, I know.
		$error = $engine->validateConfig();
	}
	if(empty($error)) {
		// All is good.  let's create our job.
		$config = new ImportConfig($engineClass);
		$engine->buildConfig($config);
		$importJob = new ImportJob();
		$importJob->setName($_POST['job_name']);
		$importJob->setDescription($_POST['job_description']);
		$importJob->setCmd(ImportJob::CMD_START);
		$importJob->setConfig(serialize($config));
		$importJob->setStartTime(time());
		$importJob->setStatus("Starting...");
		$importJob->setStatusCode(ImportJob::STATUS_STARTING);
		$importJob->save();
		
		// Attempt to execute the external importer script, fork it, and love it.
		exec("php importer/import.php " . $importJob->getId() . " > /dev/null", $tempOutput, $retVal);
		if($retVal != 42) {
			$error = "Failed to run external importer script. Return value: " . $retVal . "<br /> Error:";
			foreach($tempOutput as $output) {
				$error .= $output . "<br />";
			}
		}	
	}
}

print_header("Importer");

if(isset($importJob)) {
	?>
    <script type="text/javascript">    
		$(document).ready(function() {
    	$("#joblog").flexigrid({
    		url: 'import.php?id=<?php echo $importJob->getId();?>&request=fetch',
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
    	if(!in_array($importJob->getStatusCode(), array(ImportJob::STATUS_FINISHED, ImportJob::STATUS_FAILED))) {
    	    // Add check timer
    		?>
    		var timer = 0;
    		$(document).everyTime(2000, "status", function() {
    			// Call ajax
				$.getJSON("import.php?id=<?php echo $importJob->getId();?>&request=status&tok=" + Math.random() , function(data) {
					$("#jobstatus").html(data.status_text);
					$("#elapsedtime").html(data.elapsed_time);
					
					if(data.status_code == <?php echo ImportJob::STATUS_FINISHED;?> || data.status_code == <?php echo ImportJob::STATUS_FAILED;?>) {
						if(data.status_code == <?php echo ImportJob::STATUS_FINISHED;?>) {
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
if(isset($status_msg)) {
	?>
	<div align="center" class="statusmsg"><?php echo $status_msg;?></div><br />
	<?php
}
if(!isset($importJob))	{
	$c = new Criteria();
	$importJobs = ImportJobPeer::doSelect($c);
	if($importJobs) {
		print_window_header("Defined Import Jobs", "100%");
		?>
		There appears to be existing import jobs.  There should only be one running.  If there are multiple showing as running, you should cancel them or purge them.  Click on a job to 
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
		foreach($importJobs as $job) {
			?>
			<tr>
				<td><?php echo $job->getName();?></td>
				<td><?php echo $job->getDescription();?></td>
				<td><?php echo $job->getStartTime();?></td>
				<td><?php echo $job->getStatus();?></td>
				<td><a href="import.php?id=<?php echo $job->getId();?>">View Job</a></td>
				<td><a href="import.php?id=<?php echo $job->getId();?>&action=restart">Restart</a></td>
			</tr>
			<?php
		}
		?>
		</table>
		<?php
		print_window_footer();	
	}
	
	
	
	print_window_header("Create New Import Job", "100%", "center");
	?>
	<script type="text/javascript">
		$(function() {
		  	$("#job_engine_select").attr("value", ""); 	// Force the user to make a choice.

			$("#job_engine_select").change(function() {
										   if(this.value == "") {
										   	$("#engine_config").html("Choose an Engine to use for your Import Job from Above.");
											$("#import_submit").css("display", "none");
											}
											else {	
										   $("#engine_config").html("Loading Engine Configuration...");
										   $("#engine_config").load("import.php?action=engineConfig&className=" + this.value, null, function() {
												  $("#import_submit").css("display", "inline");

												  });
										   }

										   });

		  });

	</script>
	To begin an import of existing configuration files, a Import Job must be defined.  Configure your import job below.  Once created, your import job will begin in the background.  
	You will be able to check on the status of your import and view it's log as it continues running.  You are advised to NOT edit anything in Lilac while your import is 
	running.
	<br />
	<form name="import_job" method="post" action="import.php">
	<input type="hidden" name="request" value="import" />
	<p>
<?php
// Get Next Job Id
include("/srv/eyesofnetwork/eonweb/include/config.php");
$link = mysql_connect( $databas_host, $database_username, $database_password );
mysql_select_db( $database_lilac );
$query = mysql_query( "SHOW TABLE STATUS LIKE 'import_job';" );
$result = mysql_fetch_object( $query );
mysql_close( $link );
?>
        <fieldset>
                <legend>Job Definition ID : <?php echo $result->Auto_increment; ?> </legend>
		<label for="job_name">Job Name</label>
		<input id="job_name" name="job_name" type="text" size="100" maxlength="255" />
		<label for="job_description">Job Description</label>
		<textarea id="job_description" name="job_description" name="job_description" rows="5" cols="80" /></textarea>
		<label for="job_engine">Import Engine To Use</label>
		<select id="job_engine_select" name="job_engine">
			<option value="">Select An Engine To Use </option>
			<?php
				foreach($availableEngines as $engine) {
					?>
						<option value="<?php echo $engine['class'];?>"><?php echo $engine['name'] . " - " . $engine['description'];?></option>
					<?php
				}	
			?>
		</select>
	</fieldset>
	</p>
	<div id="engine_config">
	Choose an Engine to use for your Import Job from Above.
	</div>
	<input id="import_submit" style="display: none;" type="submit" value="Begin Import" />
	<?php
	print_window_footer();
}
else {
	?>
	<?php
	$stats = $importJob->getStats();
	if($stats) {
		$stats = unserialize($stats);
	}
	
	print_window_header("Job Details", "100%");
	?>
	<strong>Job Name:</strong> <?php echo $importJob->getName();?><br />
	<strong>Job Id:</strong> <?php echo $importJob->getId();?><br />
	<?php echo $importJob->getDescription();?>
	<br />
	<br />
	<strong>Start Time:</strong> <?php echo $importJob->getStartTime();?><br />
	<br />
	<?php
	if(!in_array($importJob->getStatusCode(), array(ImportJob::STATUS_FAILED, ImportJob::STATUS_FINISHED) )) {
		?>
		<strong>Elapsed Time:</strong> <span id="elapsedtime">Unknown</span>
		<?php
	}
	else {
		if($importJob->getStatusCode() == ImportJob::STATUS_FAILED) {
			?>
			<strong>Time of Failure:</strong> <?php echo $importJob->getStatusChangeTime();?>
			<?php
		}
		else {
			?>
			<strong>Time When Completed:</strong> <?php echo $importJob->getStatusChangeTime();?>
			<?php
		}
	}
	?>
	<br />
	<strong>Current Status:</strong> <span id="jobstatus"><?php echo $importJob->getStatus();?></span><br />
	<br />
	<strong>Job Supplemental:</strong>
	<ul>
	<?php
	$config = unserialize($importJob->getConfig());
	$engineClass = $config->getEngineClass();
	$engine = new $engineClass($importJob);
	$engine->showJobSupplemental();
	?>
	<div id="completemsg" class="roundedcorner_success_box" <?php if($importJob->getStatusCode() != ImportJob::STATUS_FINISHED ) { ?>style="display: none;"<?php } ?>>
	   <div  class="roundedcorner_success_top"><div></div></div>
	      <div class="roundedcorner_success_content">
	      Import Job Complete.  Content Imported Successfully.
	      </div>
	   <div class="roundedcorner_success_bottom"><div></div></div>
	</div>
	<a href="import.php?id=<?php echo $importJob->getId();?>&action=restart">Restart Job</a> | <a href="import.php?id=<?php echo $importJob->getId();?>&delete=1" onclick="javascript:return confirmDelete();">Remove Job</a> | <a href="import.php">Return To Import Menu</a>
	<?php
	print_window_footer();
	print_window_header("Job Log");
	?>
		<div id="joblog">
		
		</div>
	<?php
	print_window_footer();
	
}
?>
<br />
<br />
<?php
print_footer();
?>
