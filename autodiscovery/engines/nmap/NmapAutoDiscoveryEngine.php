<?php
require_once('Net/Traceroute.php');

class NmapAutoDiscoveryEngine extends AutoDiscoveryEngine {
	
	private $xmlFile;
	
	public function init() {
		$job = $this->getJob();
		
		$this->xmlFile = "/tmp/"  . $job->getId() . "-nmap.xml";
		
		$job->addNotice("Removing potential old job files.");
		@unlink($xmlFile);
		
		return true;
	}
	
	public function discover() {
		$job = $this->getJob();
		$job->addNotice("Starting discovery...");

		$config = unserialize($job->getConfig());
		
		$targets = $config->getVar("targets");
		
		// Each target is valid		
	
		// We have a list of targets
		$nmap_flags = "--max-rtt-timeout 100ms --max-retries 1 -sS -O -A -v --open -oX " . $this->xmlFile;
		
		$exec_line = "sudo " . $config->getVar("nmap_binary") . " " . $nmap_flags . " ";
		foreach($targets as $target) {
			$exec_line .= $target . " ";
		}
		$job->addNotice("Executing nmap via: " . $exec_line . "\n");
		
		$completed = false;
		// Open the process
		$handle = popen($exec_line, 'r');	// Only need it for reading
		while(!feof($handle)) {
			// nmap is running!
			$line = fgets($handle);
			if(strlen(trim($line))) $job->addNotice("NMAP: " . $line);
			if(strpos($line, "Nmap done") === 0 || strpos($line, "Nmap finished") === 0) {
				// Nmap is finished
				$completed = true;
			}
		}
		if(!$completed) {
			$job->addError("Nmap failed to complete successfully. Could be permissions issue (check sudo access).  Aborting discovery.");
			return false;
		}
		$job->addNotice("Nmap finished discovery.  Now reading in result XML.");
		$nmapXML = simplexml_load_file($this->xmlFile);
		// Read in hosts
		$job->addNotice("Number of hosts: " . count($nmapXML->host));
		
		foreach($nmapXML->host as $host) {
			$job->addNotice('Found ' . $host->address[0]['addr'] . ':' . $host->hostnames[0]->hostname[0]['name'] . '.');
			
			$c = new Criteria();
			$c1 = $c->getNewCriterion(NagiosHostPeer::ADDRESS, $host->address[0]['addr']);
			$c2 = $c->getNewCriterion(NagiosHostPeer::ADDRESS, $host->hostnames[0]->hostname[0]['name']);
			$c1->addOr($c2);
			$c->add($c1);
			$tempHost = NagiosHostPeer::doSelectOne($c);
			if($tempHost) {
				$job->addNotice("Device appears to already be in configuration under hostname: " . $host->getName() . ". Skipping.");
				continue;
			}
			$device = new AutodiscoveryDevice();
			$device->setAutodiscoveryJob($job);
			$device->setAddress($host->address[0]['addr']);
			if(empty($host->hostnames[0]->hostname[0]['name'])) {
				$device->setName($host->address[0]['addr']);
				$device->setDescription($host->address[0]['addr']);
			}
			else {
				$device->setName($host->hostnames[0]->hostname[0]['name']);
				$device->setDescription($host->hostnames[0]->hostname[0]['name']);
			}
			$device->setHostname($host->hostnames[0]->hostname[0]['name']);
			// Right now, if it exists, we pick the top-level matching os string (since it's the highest scored)
			if(!empty($host->os[0]->osclass[0]['osfamily'])) {
				// We found os family data
				$device->setOsfamily($host->os[0]->osclass[0]['osfamily']);
			}
			if(!empty($host->os[0]->osclass[0]['osgen'])) {
				// We found os family data
				$device->setOsgen($host->os[0]->osclass[0]['osgen']);
			}
			if(!empty($host->os[0]->osclass[0]['vendor'])) {
				// We found os family data
				$device->setOsvendor($host->os[0]->osclass[0]['vendor']);
			}
			$device->save();
			// Add services
			$job->addNotice("Number of ports for this host: " . count($host->ports[0]->port));
			
			foreach($host->ports[0]->port as $port) {
				// $port signifies as port / possible service, we'll grab that
				$service = new AutodiscoveryDeviceService();
				$service->setProtocol($port['protocol']);
				$service->setPort($port['portid']);
				if(!empty($port->service[0]['name'])) {
					$service->setName($port->service[0]['name']);
				}
				if(!empty($port->service[0]['product'])) {
					$service->setProduct($port->service[0]['product']);
				}
				if(!empty($port->service[0]['version'])) {
					$service->setVersion($port->service[0]['version']);
				}
				if(!empty($port->service[0]['extrainfo'])) {
					$service->setExtrainfo($port->service[0]['extrainfo']);
				}
				$service->setAutodiscoveryDevice($device);
				$service->save();
			}
			
		}
		$job->addNotice("Added devices and services.");

		return true;
	}
}
