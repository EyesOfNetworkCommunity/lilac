<?php

/*
 Lilac - A Nagios Configuration Tool
Copyright (C) 2013 Rene Hadler
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
 Lilac Auto Discovery Classes
*/

abstract class AutoDiscoverer {
	private $engine;
	
	public function __construct($engine) {
		$this->engine = $engine;
		
	}
	
	/**
	 * Enter description here...
	 *
	 * @return AutoDiscoveryEngine
	 */
	public function getEngine() {
		return $this->engine;
	}
	
}

abstract class AutoDiscoveryEngine {
	// Currently empty, but used to potentially employ rules later on
	private $job;
	
	/**
	 * Enter description here...
	 *
	 * @param ImportJob $importJob
	 */
	public function __construct($importJob) {
		$this->job = $importJob;
		
	}
	
	/**
	 * Enter description here...
	 *
	 * @return AutodiscoveryJob
	 */
	public function getJob() {
		return $this->job;
	}
	
	public function getConfig() {
		return unserialize($this->job->getConfig());
	}
	
	public function getStats() {
		$stats =  $this->job->getStats();
		if(!$stats) {
			// Create stats on the fly
			$stats = new ImportStats();
			
		}
		else {
			$stats = unserialize($stats);
		}
		$stats->setJob($this->job);
		return $stats;
	}
	
	/**
	 * Should be used for any startup
	 *
	 */
	abstract function init();
	
	abstract function discover();
	
	
}

/**
 * Currently implemented using a hash map, but we could potentially do more than this?
 *
 */
class AutodiscoveryConfig {
	private $configVars;
	
	private $engineClass;
	
	public function __construct($engine) {
		$this->engineClass = $engine;
		$this->configVars = array();
	}
	
	public function getEngineClass() {
		return $this->engineClass;
	}
	
	public function setVar($name, $val) {
		$this->configVars[$name] = $val;
	}
	
	public function getVar($name) {
		if(isset($this->configVars[$name]))
			return $this->configVars[$name];
		return null;
	}
}

/**
 * Currently implemented using a hash map, but we could potentially do more than this?
 *
 */
class AutodiscoveryStats {
	private $stats;
	private $job;	// Won't be serialized since it will be a reference
	
	public function __construct() {
		$this->stats = array();
	}
	
	public function setJob($importJob) {
		$this->job = $importJob;
	}
	
	public function setStat($name, $val) {
		$this->stats[$name] = $val;
		$this->save();
	}
	
	public function getStat($name) {
		return $this->stats[$name];
	}
	
	public function save() {
		if(isset($job)) {
			$job->setStats(serialize($his));
			$this->job->save();
		}
	}
}

final class AutodiscoveryMatchMaker {
	
	private function __construct() {
		// We don't allow instances of this class
	}
	
	public static function match(AutodiscoveryDevice $device, NagiosHostTemplate $defaultTemplate = null) {
		
		// Delete previous matches
		$c = new Criteria();
		$c->add(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $device->getId());
		AutodiscoveryDeviceTemplateMatchPeer::doDelete($c);
		
		$templates = NagiosHostTemplatePeer::doSelect(new Criteria());
		$templateMatches = array();
		foreach($templates as $template) {
			$serviceFilters = array();
			$templateValues = $template->getValues();			
			$complexity = 0;
			$match = 0;
			$serviceFilterObjects = $template->getNagiosHostTemplateAutodiscoveryServices();
			foreach($serviceFilterObjects as $serviceFilterObject)
				$serviceFilters[] = $serviceFilterObject;
			
			$inheritedServiceFilters = $template->getInheritedNagiosAutodiscoveryServiceFilters();
			$serviceFilters = array_merge($serviceFilters, $inheritedServiceFilters);
			
			if(!empty($templateValues['autodiscovery_address_filter']) && $templateValues['autodiscovery_address_filter']['value'] != '') {
				$complexity++;
				if(preg_match($templateValues['autodiscovery_address_filter']['value'], $device->getAddress())) {
					$match++;
				}
			}
			if(!empty($templateValues['autodiscovery_hostname_filter']) && $templateValues['autodiscovery_hostname_filter']['value'] != '') {
				$complexity++;
				if(preg_match($templateValues['autodiscovery_hostname_filter']['value'], $device->getHostname())) {
					$match++;
				}
			}
			if(!empty($templateValues['autodiscovery_os_family_filter']) && $templateValues['autodiscovery_os_family_filter']['value'] != '') {
				$complexity++;
				if(preg_match($templateValues['autodiscovery_os_family_filter']['value'], $device->getOsfamily())) {
					$match++;
				}
			}
			if(!empty($templateValues['autodiscovery_os_generation_filter']) && $templateValues['autodiscovery_os_generation_filter']['value'] != '') {
				$complexity++;
				if(preg_match($templateValues['autodiscovery_os_generation_filter']['value'], $device->getOsgen())) {
					$match++;
				}
			}
			if(!empty($templateValues['autodiscovery_os_vendor_filter']) && $templateValues['autodiscovery_os_vendor_filter']['value'] != '') {
				$complexity++;
				if(preg_match($templateValues['autodiscovery_os_vendor_filter']['value'], $device->getOsvendor())) {
					$match++;
				}
			}
			
			// Checked bases, let's now check service filters
			$complexity += count($serviceFilters);
			foreach($serviceFilters as $filter) {
			
				foreach($device->getAutodiscoveryDeviceServices() as $service) {
					
					if($filter->getPort() == $service->getPort() && $filter->getProtocol() == $service->getProtocol()) {
						// Okay, we're ALMOST found...let's see if we have any other additional filters.
						$tempMatch = true;					
						if($filter->getName() != '') {
							if(!preg_match($filter->getName(), $service->getName())) {
								$tempMatch = false;
							}
						}
						if($filter->getProduct() != '') {
							if(!preg_match($filter->getProduct(), $service->getProduct())) {
								$tempMatch = false;
							}
						}
						if($filter->getVersion() != '') {
							if(!preg_match($filter->getVersion(), $service->getVersion())) {
								$tempMatch = false;
							}
						}
						if($filter->getExtraInformation() != '') {
							if(!preg_match($filter->getExtraInformation(), $service->getExtraInformation())) {
								$tempMatch = false;
							}
						}
						if($tempMatch) {
							$match++;
						}
					}
				}
			}
			
			// Okay, we got everything, let's determine the percentage.
			if($complexity == 0) {
				// Blank template, no auto-discovery features used.
				$percentage = 0;
				continue;
			}
			else {
				$percentage = (int)(((float)$match / (float)$complexity)*100);
			}
			if($percentage == 0) {
				continue;
			}
			
			// Store the template into the array
			$templateMatches[$percentage][$complexity][] = $template;
		}
		
		// Okay, let's now create the matches
		$percentages = array_keys($templateMatches);
		$assigned = false;
		for($percentageCounter = 0; $percentageCounter < count($percentages); $percentageCounter++) {
			$complexities = array_keys($templateMatches[$percentages[$percentageCounter]]);
			$complexities = array_reverse($complexities);
			for($complexityCount = 0; $complexityCount < count($complexities); $complexityCount++) {
				foreach($templateMatches[$percentages[$percentageCounter]][$complexities[$complexityCount]] as $template) {
					$match = new AutodiscoveryDeviceTemplateMatch();
					$match->setAutodiscoveryDevice($device);
					$match->setNagiosHostTemplate($template);
					$match->setPercent($percentages[$percentageCounter]);
					$match->setComplexity($complexities[$complexityCount]);
					$match->save();
					// Add the highest match as the template to assign
					if(!$assigned) {
						$assigned = true;
						$device->setNagiosHostTemplate($template);
					}
				}
			}
		}	
		// If Not assigned, assign default template
		if(!$assigned && !empty($defaultTemplate)) {
			$device->setNagiosHostTemplate($defaultTemplate);
		}
		$device->save();
	}
}

?>