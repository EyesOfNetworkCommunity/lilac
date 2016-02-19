<?php

class NagiosDependencyExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	private function _exportDependency($dependency, $type, $target, $targetObj, $subObj = null) {
		global $lilac;
		$fp = $this->getOutputFile();
		
		if($type == "host") {
			$host = $targetObj;
			fputs($fp, "define hostdependency {\n");
			fputs($fp, "\tdependent_host_name\t" . $host->getName() . "\n");
		}
		else if($type == 'service') {
			$host = $subObj;
			$service = $targetObj;
			fputs($fp, "define servicedependency {\n");
			fputs($fp, "\tdependent_host_name\t" . $host->getName() . "\n");
			fputs($fp, "\tdependent_service_description\t" . $service->getDescription() . "\n");
		}
		else if($type = 'hostgroup') {
			$hostgroup = $targetObj;
			fputs($fp, "define hostdependency {\n");
			fputs($fp, "\tdependent_hostgroup_name\t" . $hostgroup->getName() . "\n");
		}
		// Target output
		switch($target->getType()) {
			case 'host':
				fputs($fp, "\thost_name\t" . $target->getNagiosHost()->getName() . "\n");
				break;
			case 'service':
				fputs($fp, "\thost_name\t" . $target->getNagiosHost()->getName() . "\n");
				fputs($fp, "\tservice_description\t" . $target->getNagiosService()->getDescription() . "\n");
				break;
			case 'hostgroup':
				fputs($fp, "\thostgroup_name\t" . $target->getNagiosHostgroup()->getName() . "\n");
				break;
		}
        if($dependency->getDependencyPeriod() !== null) {
            fputs($fp, "\tdependency_period\t" . $dependency->getNagiosTimeperiod()->getName() . "\n");
        }
		
		if($dependency->getInheritsParent() !== null) {
			fputs($fp, "\tinherits_parent\t1\n");
		}

		if($dependency->getExecutionFailureCriteriaUp() !== null) {
			fputs($fp, "\texecution_failure_criteria\t");
			if($dependency->getExecutionFailureCriteriaUp()) {
				fputs($fp, "o");
				if($dependency->getExecutionFailureCriteriaDown() || $dependency->getExecutionFailureCriteriaUnreachable() || $dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical()  || $dependency->getExecutionFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaDown()) {
				fputs($fp, "d");
				if($dependency->getExecutionFailureCriteriaUnreachable() || $dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaUnreachable()) {
				fputs($fp, "u");
				if($dependency->getExecutionFailureCriteriaOk() || $dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaOk()) {
				fputs($fp, "Ok");
					if($dependency->getExecutionFailureCriteriaWarning() || $dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaWarning()) {
				fputs($fp, "w");
					if($dependency->getExecutionFailureCriteriaUnknown() || $dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaUnknown()) {
				fputs($fp, "u");
					if($dependency->getExecutionFailureCriteriaCritical() || $dependency->getExecutionFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaCritical()) {
				fputs($fp, "c");
					if($dependency->getExecutionFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getExecutionFailureCriteriaPending()) {
				fputs($fp, "p");
			}
			fputs($fp, "\n");
		}
		
		if($dependency->getNotificationFailureCriteriaUp() !== null) {
			fputs($fp, "\tnotification_failure_criteria\t");
			if($dependency->getNotificationFailureCriteriaUp()) {
				fputs($fp, "o");
				if($dependency->getNotificationFailureCriteriaDown() || $dependency->getNotificationFailureCriteriaUnreachable() || $dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaDown()) {
				fputs($fp, "d");
				if($dependency->getNotificationFailureCriteriaUnreachable() || $dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaUnreachable()) {
				fputs($fp, "u");
				if($dependency->getNotificationFailureCriteriaOk() || $dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
					fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaOk()) {
				fputs($fp, "o");
					if($dependency->getNotificationFailureCriteriaWarning() || $dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaWarning()) {
				fputs($fp, "w");
					if($dependency->getNotificationFailureCriteriaUnknown() || $dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaUnknown()) {
				fputs($fp, "u");
					if($dependency->getNotificationFailureCriteriaCritical() || $dependency->getNotificationFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaCritical()) {
				fputs($fp, "c");
					if($dependency->getNotificationFailureCriteriaPending())
						fputs($fp, ",");
			}
			if($dependency->getNotificationFailureCriteriaPending()) {
				fputs($fp, "p");
			}
			fputs($fp, "\n");
		}
		
		fputs($fp, "}\n");
		fputs($fp, "\n");
	}
	
	public function export() {
		global $lilac;
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosDependencyExporter attempting to export dependency configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosDependencyExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$hosts = NagiosHostPeer::doSelect(new Criteria());
		
		foreach($hosts as $host) {
			// Got hosts
			// Get inherited dependencies first
			$job->addNotice("Processing dependencies for host: " . $host->getName());
			$inheritedDependencies = $host->getInheritedDependencies();
			foreach($inheritedDependencies as $dependency) {
				$targets = $dependency->getNagiosDependencyTargets();
				foreach($targets as $target) {
					$this->_exportDependency($dependency, "host", $target, $host);
				}
			}
			$dependencies = $host->getNagiosDependencys();
			foreach($dependencies as $dependency) {
				$targets = $dependency->getNagiosDependencyTargets();
				foreach($targets as $target) {
					$this->_exportDependency($dependency, "host", $target, $host);
				}
			}
			// Get our services
			$inheritedServices = $host->getInheritedServices();
			foreach($inheritedServices as $service) {
				$job->addNotice("Processing dependencies for service: " . $service->getDescription() . " on " . $host->getName());
				$serviceInheritedDependencies = $service->getInheritedDependencies();
				foreach($serviceInheritedDependencies as $dependency) {
					$targets = $dependency->getNagiosDependencyTargets();
					foreach($targets as $target) {
						$this->_exportDependency($dependency, "service", $target, $service, $host);
					}
				}
				$c = new Criteria();
				$c->add(NagiosDependencyPeer::HOST, $host->getId());
				$c->add(NagiosDependencyPeer::SERVICE, $service->getId());
				$serviceDependencies = NagiosDependencyPeer::doSelect($c);
				foreach($serviceDependencies as $dependency) {
					$targets = $dependency->getNagiosDependencyTargets();
					foreach($targets as $target) {
						$this->_exportDependency($dependency, "service", $target, $service, $host);
					}
				}
			}
			$services = $host->getNagiosServices();
			foreach($services as $service) {
				$job->addNotice("Processing dependencies for service: " . $service->getDescription() . " on " . $host->getName());
				$serviceInheritedDependencies = $service->getInheritedDependencies();
				foreach($serviceInheritedDependencies as $dependency) {
					$targets = $dependency->getNagiosDependencyTargets();
					foreach($targets as $target) {
						$this->_exportDependency($dependency, "service", $target, $service, $host);
					}
				}
				$serviceDependencies = $service->getNagiosDependencys();
				foreach($serviceDependencies as $dependency) {
					$targets = $dependency->getNagiosDependencyTargets();
					foreach($targets as $target) {
						$this->_exportDependency($dependency, "service", $target, $service, $host);
					}
				}
			}
			$job->addNotice("Completed dependencies export for host: " . $host->getName());
		}
		// Get hostgroup dependencies
		$hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());
		foreach($hostgroups as $hostgroup) {
			$dependencies = $hostgroup->getNagiosDependencys();
			foreach($dependencies as $dependency) {
				$targets = $dependency->getNagiosDependencyTargets();
				foreach($targets as $target) {
					$this->_exportDependency($dependency, "hostgroup", $target, $hostgroup);
				}
			}
			$job->addNotice("Completed dependencies export for hostgroup: " . $hostgroup->getName());
		}
		$job->addNotice("NagiosDependencyExporter complete.");
		return true;
	}
	
}

?>
