<?php
// Run as background process
/**
 * Lilac Nagios Configuration File Importer
 */
// This is a dirty hack to allow calling from command line and from cli.  I'd like to figure out 
// a better way to do this.

$webcall = false;

if(file_exists('importer')) {
	chdir('importer');
	$webcall = true;
}

require_once('../includes/config.inc');
require_once('engines/nagios/NagiosImportEngine.php');
include_once('ImportJob.php');
include_once('ImportLogEntry.php');


/**
 * Potential Errors
 * 10 - No job id provided on command line
 * 20 - Job not found in database
 * 30 - Import Engine not found (name provided in ImportConfig)
 * 40 - Some error failure.  View import job logs.
 * 42 - SUCCESS WHEN FORKING SCRIPT
 */

set_time_limit(0);   // Remove time limit 


if($webcall) {
if (pcntl_fork()) {  // Fork process
	exit(42);		// This marks a successful fork, so we should return success to the caller
}

posix_setsid();    // Make child process session leader

}

// Okay, we're now in our own execution space.  Let's begin
// We need to restart Propel to regain access to the DB
Propel::init(LILAC_FS_ROOT . "includes/lilac-conf.php");

// disable instance pooling.  Should reduce memory footprint required for this 
// job.
Propel::disableInstancePooling();

// Load engines
ImportEngine::getAvailableEngines();


if(isset($argv[1]) && is_numeric($argv[1])) {
	$importJob = ImportJobPeer::retrieveByPK($argv[1]);
	if(!$importJob) {
		print "Job with id: " . $argv[1] . " not found.\n";
		exit(20);
	}
	$importJob->setStartTime(time());
	$importJob->clearLog();
	$importJob->save();

	// Okay, let's get the ImportConfig
	$config = $importJob->getConfig();
	$config = unserialize($config);

	$engineClass = $config->getEngineClass();
	if(!class_exists($engineClass) || !is_subclass_of($engineClass, "ImportEngine")) {
		$importJob->addError("Import Engine of type " . $engineClass . " not found.");
		$importJob->setStatus("Failed - Import Engine does not exist (${engineClass})");
		$importJob->setStatusCode(ImportJob::STATUS_FAILED);
		$importJob->save();
		exit(30);
	}
}
else {
	print "No job id provided.\n";
	exit(10);
	
}

$importJob->addNotice("Starting Background Import Process for Job: " . $importJob->getName());
$importJob->setStatus("Running");
$importJob->setStatusCode(ImportJob::STATUS_RUNNING);
$importJob->save();



$importJob->addNotice("Initializing Import Engine: " . $engineClass);
$engine = new $engineClass($importJob);
if(!$engine->init()) {
	$importJob->addError("Engine failed to initialize.");
	$importJob->setStatus("Failed - Engined failed to initialize.");
	$importJob->setStatusCode(ImportJob::STATUS_FAILED);
	$importJob->save();
	print("Peak memory usage with import: " . memory_get_peak_usage() . "\n");
	print("Memory usage at end of import: " . memory_get_usage() . "\n");
	exit(40);
}
else {
	if(!$engine->import()) {
		$importJob->addError("Engine import process failed to complete successfully.");
		$importJob->setStatus("Failed - Engine import process failed to complete successfully.");
		$importJob->setStatusCode(ImportJob::STATUS_FAILED);
		$importJob->save();
		print("Peak memory usage with import: " . memory_get_peak_usage() . "\n");
		print("Memory usage at end of import: " . memory_get_usage() . "\n");
		exit(40);
	}
	else {
		$importJob->setStatusCode(ImportJob::STATUS_FINISHED);
		$importJob->setStatus("Complete");
		$importJob->setEndTime(time());
		$importJob->save();
		print("Peak memory usage with import: " . memory_get_peak_usage() . "\n");
		print("Memory usage at end of import: " . memory_get_usage() . "\n");
	}
}


?>
