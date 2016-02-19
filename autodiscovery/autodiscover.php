<?php
// Run as background process
/**
 * Lilac Nagios Configuration Auto Discovery Script
 */
// This is a dirty hack to allow calling from command line and from cli.  I'd like to figure out 
// a better way to do this.

$webcall = false;

if(file_exists('autodiscovery')) {
	chdir('autodiscovery');
	$webcall = true;
}

print(getcwd());

include_once('../includes/config.inc');
require_once('classes.inc.php');
require_once('engines/nmap/NmapAutoDiscoveryEngine.php');
include_once('AutodiscoveryJob.php');
include_once('AutodiscoveryLogEntry.php');


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

if(isset($argv[1]) && is_numeric($argv[1])) {
	$autodiscoveryJob = AutodiscoveryJobPeer::retrieveByPK($argv[1]);
	if(!$autodiscoveryJob) {
		print "Job with id: " . $argv[1] . " not found.\n";
		exit(20);
	}
	
	$autodiscoveryJob->setStartTime(time());	
	$autodiscoveryJob->clearLog();
	$autodiscoveryJob->save();

	
	// Okay, let's get the AutodiscoveryConfig
	$config = $autodiscoveryJob->getConfig();
	$config = unserialize($config);
	
	$engineClass = $config->getEngineClass();
	
	if(!class_exists($engineClass) || !is_subclass_of($engineClass, "AutodiscoveryEngine")) {
		$autodiscoveryJob->addError("Autodiscovery Engine of type " . $engineClass . " not found.");
		exit(30);
	}
}
else {
	print "No job id provided.\n";
	exit(10);
	
}

$autodiscoveryJob->addNotice("Starting Background Auto Discovery Process for Job: " . $autodiscoveryJob->getName());
$autodiscoveryJob->setStatus("Running");
$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_RUNNING);
$autodiscoveryJob->save();

$autodiscoveryJob->addNotice("Removing old devices found in this job.");
$devices = $autodiscoveryJob->getAutodiscoveryDevices();
foreach($devices as $device) {
	$device->delete();
}

$defaultTemplateId = $config->getVar("default_template");
if(!empty($defaultTemplateId)) {
	$autodiscoveryJob->addNotice("Fetching Default Template...");
	$defaultTemplate = NagiosHostTemplatePeer::retrieveByPK($defaultTemplateId);
	if(!$defaultTemplate) {
		$autodiscoveryJob->addNotice("Failed to find default template requested.  Will not be able to assign a default template.");
	}
}

$autodiscoveryJob->addNotice("Initializing Auto Discovery Engine: " . $engineClass);

$engine = new $engineClass($autodiscoveryJob);
if(!$engine->init()) {
	$autodiscoveryJob->addError("Engine failed to initialize.");
	$importJob->addError("Auto Discovery Engine of type " . $engineClass . " not found.");
	$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_FAILED);
	$autodiscoveryJob->save();
	exit(40);
}

if(!$engine->discover()) {
	$autodiscoveryJob->addError("Engine autodiscovery process failed to complete successfully.");
	$autodiscoveryJob->setStatus("Failed");
	$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_FAILED);
	$autodiscoveryJob->save();
	exit(40);
}
$autodiscoveryJob->addNotice("Engine completed discovering devices");

$tracerouteEnabled = $config->getVar("traceroute_enabled");

$tracerouteEnabled = false;

if(!$tracerouteEnabled) {
	$autodiscoveryJob->addNotice("Tracerouting skipped.  Hosts will be set as top-level.");
}
else {
	$autodiscoveryJob->addNotice("Beginning Traceroute for found hosts.");
	$c = new Criteria();
	$c->add(AutodiscoveryDevicePeer::JOB_ID, $autodiscoveryJob->getId());
	$devices = AutodiscoveryDevicePeer::doSelect($c);
	foreach($devices as $device) {
		$autodiscoveryJob->addNotice("Attempting Traceroute to " . $device->getAddress());
		$tr = Net_Traceroute::factory();
		if(!PEAR::isError($tr)) {
			$response = $tr->traceroute($device->getAddress());
			$hops = $response->getHops();
			$numOfHops = count($hops);
			$found = false;
			for($counter = $numOfHops - 1; $counter >= 0; $counter--) {
				
				// Check the farthest hop first
				$c = new Criteria();
				$c1 = $c->getNewCriterion(NagiosHostPeer::ADDRESS, $hops[$counter]['ip']);
				$c2 = $c->getNewCriterion(NagiosHostPeer::ADDRESS, $hops[$counter['machine']]);
				$c1->addOr($c2);
				$c->add($c1);
				$host = NagiosHostPeer::doSelectOne($c);
				if($host) {
					// Found parent
					$autodiscoveryJob->addNotice("Found parent: " . $host->getName());
					$device->setProposedParent($host->getId());
					$device->save();
					$found = true;
				}
			}
			if(!$found) {
				$autodiscoveryJob->addNotice("Could not find a suitable parent.  Setting as a top-level device.");
			}
		}
		else {
			$autodiscoveryJob->addNotce("Failed to run Traceroute.  Not using it.");
		}	
	}		
}

// Okay, now we start doing the magic.

$c = new Criteria();
$c->add(AutodiscoveryDevicePeer::JOB_ID, $autodiscoveryJob->getId());
$devices = AutodiscoveryDevicePeer::doSelect($c);

foreach($devices as $device) {
	$autodiscoveryJob->addNotice("Performing template matching for device: " . $device->getAddress());
	AutodiscoveryMatchMaker::match($device, $defaultTemplate);
}

$autodiscoveryJob->addNotice("Completed Auto Discovery.");
$autodiscoveryJob->setStatus("Finished.");
$autodiscoveryJob->setStatusCode(AutodiscoveryJob::STATUS_FINISHED);
$autodiscoveryJob->save();

?>
