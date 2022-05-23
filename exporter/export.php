<?php
// Run as background process
/**
 * Lilac Exporter
 */
// This is a dirty hack to allow calling from command line and from cli.  I'd like to figure out 
// a better way to do this.

if(file_exists('exporter')) {
	chdir('exporter');
}

include_once(dirname(__FILE__).'/../includes/config.inc');
include_once('ExportJob.php');
include_once('ExportLogEntry.php');
include_once('dashboards/dash.php');
include_once("/srv/eyesofnetwork/eonweb/include/config.php");
include_once("/srv/eyesofnetwork/eonweb/include/function.php");
ExportEngine::getAvailableEngines();


/**
 * Potential Errors
 * 10 - No job id provided on command line
 * 20 - Job not found in database
 * 30 - Import Engine not found (name provided in ImportConfig)
 * 40 - Some error failure.  View import job logs.
 * 42 - SUCCESS WHEN FORKING SCRIPT
 */

set_time_limit(0);   // Remove time limit 


if (pcntl_fork()) {  // Fork process
	exit(42);		// This marks a successful fork, so we should return success to the caller
}

posix_setsid();    // Make child process session leader

// Okay, we're now in our own execution space.  Let's begin
// We need to restart Propel to regain access to the DB
Propel::init(LILAC_FS_ROOT . "includes/lilac-conf.php");

if(isset($argv[1]) && is_numeric($argv[1])) {
	$exportJob = ExportJobPeer::retrieveByPK($argv[1]);
	if(!$exportJob) {
		print "Job with id: " . $argv[1] . " not found.\n";
		exit(20);
	}
	$exportJob->clearLog();
	// Okay, let's get the ExportConfig
	$config = $exportJob->getConfig();
	$config = unserialize($config);

	$engineClass = $config->getEngineClass();
	if(!class_exists($engineClass) || !is_subclass_of($engineClass, "ExportEngine")) {
		$exportJob->addError("Export Engine of type " . $engineClass . " not found.");
		exit(30);
	}
}
else {
	print "No job id provided.\n";
	exit(10);
	
}

$exportJob->addNotice("Starting Background Export Process for Job: " . $exportJob->getName());
$exportJob->setStatus("Running");
$exportJob->setStatusCode(ExportJob::STATUS_RUNNING);
$exportJob->save();
$exportJob->addNotice("Initializing Export Engine: " . $engineClass);

$engine = new $engineClass($exportJob);
if(!$engine->init()) {
	$exportJob->addError("Engine failed to initialize.");
	$exportJob->setStatus("Failed - Engine failed to initialize.");
	$exportJob->setEndTime(time());
	$exportJob->setStatusCode(ExportJob::STATUS_FAILED);
	$exportJob->save();
	exit(40);
}
if($config->getVar('export_diff')) {
	$export_result = $engine->exportDiff();
} else {
	$export_result = $engine->export();

	// API URL
	$url = 'https://127.0.0.1/eonapi/listNagiosObjects?username=admin&apiKey=' . $eon_api_token;
	// Create a new cURL resource
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	// Setup request to send json via POST
	$payload_host = '{"object" : "hosts","columns" : ["name"]}';
	// Attach encoded JSON string to the POST fields
	curl_setopt($ch, CURLOPT_POSTFIELDS, $payload_host);
	// Set the content type to application/json
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	// Return response instead of outputting
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// Execute the POST request
	$result = curl_exec($ch);
	$arr_host = json_decode($result, true);
	// Close cURL resource
	curl_close($ch);
	
	
	foreach($arr_host["result"]["default"] as $host) {
		$date = new DateTime();
		$timestamp = $date->getTimestamp();
		$CommandFile="/srv/eyesofnetwork/nagios/var/log/rw/nagios.cmd";
		$cmdline = '['.$timestamp.'] SCHEDULE_FORCED_HOST_SVC_CHECKS;'.$host["name"].';0;'.PHP_EOL;
		
		file_put_contents($CommandFile, $cmdline,FILE_APPEND);
	}
	create_dashboard();
	$export_result = $engine->export();
}
if(!$export_result) {
	$exportJob->addError("Engine export process failed to complete successfully.");
	$exportJob->setEndTime(time());
	$exportJob->setStatus("Engine export process failed to complete successfully.");
	$exportJob->setStatusCode(ExportJob::STATUS_FAILED);
	$exportJob->save();
	exit(40);
}
else {
	//reinitialize DB of ExportDiff
	sql('lilac', "DELETE FROM export_job_history");
	
	$exportJob->setStatusCode(ExportJob::STATUS_FINISHED);
	$exportJob->setEndTime(time());
	$exportJob->setStatus("Complete");
	$exportJob->addNotice("Completed Export.");
	$exportJob->save();
}

?>
