<?php
require_once('NagiosDependency.php');

class NagiosServiceDependencyImporter extends NagiosImporter {

	private static $templates = array();	// Used to support template inheritance when importing this type of obj

	private $regexValidators = array('dependent_host_name' => '',
									 'dependent_hostgroup_name' => '',
									 'dependent_service_description' => '',
									 'host_name' => '',
                                     'hostgroup_name' => '',
									 'service_description' => '',
									 'inherits_parent' => '',
									 'execution_failure_criteria' => '',
									 'notification_failure_criteria' => '',
									 'dependency_period' => '',
									 'name' => '',
									'use' => '',
									'register' => '');
								
	private $fieldMethods = array('inherits_parent' => 'setInheritsParent',
								  'dependency_period' => 'setDependencyPeriodByName');
								
	public function init() {
		$config = $this->getEngine()->getConfig();
		$job = $this->getEngine()->getJob();
		$segment = $this->getSegment();
		
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
	
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in host depenendecy object file not supported: " . $key . " on line " . $lineNum);
					if(!$config->getVar('continue_error')) {
						return false;
					}
				}
				else {
					// Key exists, let's check the regexp
					if($this->regexValidators[$key] != '' && !preg_match($this->regexValidators[$key], $value)) {
						// Failed the regular expression match (which was provided)!!!
						$job->addLogEntry("Variable '" . $key . "' failed the regular expression sanity check of: " . $this->regexValidators[$key] . " on line " . $linenum);
						if(!$config->getVar('continue_error')) {
							return false;
						}
					}
				}
			}
		}
		$job->addNotice("NagiosServiceDependencyImpoter finished initializing.");
		return true;
	}

	public static function getTemplateByName($name) {
		if(!key_exists($name, NagiosServiceDependencyImporter::$templates)) {
			return false;
		}
		return NagiosServiceDependencyImporter::$templates[$name];
	}
	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Service Dependency uses a template: " . $values['use'][0]['value']);	
			$template = NagiosServiceDependencyImporter::getTemplateByName($values['use'][0]['value']);
			if(empty($template)) {
				$job->addNotice("That template is not found yet. Setting this service dependency as queued.");
				return false;
			}
		}
	
		// Check for hosts
		//
		
		if(!isset($values['service_description']) || !isset($values['dependent_service_description'])) {
			$job->addNotice("The service dependency does not have a service desciption assigned to it.");
			return false;
		}

		if(isset($values['dependent_host_name'])) {
			foreach($values['dependent_host_name'] as $hostValues) {
				$service = NagiosServicePeer::getByHostAndDescription($hostValues['value'], $values['dependent_service_description'][0]['value']);
				if(empty($service)) {
					$job->addNotice("The service specified by " . $hostValues['value'] . ":" . $values['dependent_service_description'][0]['value'] . " was not found.  Setting this service dependency as queued.");
					return false;
				}
				$service->clearAllReferences(true);

			}
		}
		if(isset($values['host_name'])) {
			foreach($values['host_name'] as $hostValues) {
				$service = NagiosServicePeer::getByHostAndDescription($hostValues['value'], $values['dependent_service_description'][0]['value']);
				if(empty($service)) {
					$job->addNotice("The service specified by " . $hostValues['value'] . ":" . $values['dependent_service_description'][0]['value'] . " was not found.  Setting this service dependency as queued.");
					return false;
				}
				$service->clearAllReferences(true);
			}
		}

		// Check for hostgroup_name
		if(isset($values['hostgroup_name'])) {
			foreach($values['hostgroup_name'] as $hostgroupValues) {
				$service = NagiosServicePeer::getByHostgroupAndDescription($hostgroupValues['value'], $values['dependent_service_description'][0]['value']);
				if(empty($service)) {
					$job->addNotice("The service specified by hostgroup " . $hostgroupValues['value'] . ":" . $values['dependent_service_description'][0]['value'] . " was not found.  Setting this service dependency as queued.");
					return false;
				}
				$service->clearAllReferences(true);
			}
		}
		if(isset($values['dependent_hostgroup_name'])) {
			foreach($values['dependent_hostgroup_name'] as $hostgroupValues) {
				$service = NagiosServicePeer::getByHostgroupAndDescription($hostgroupValues['value'], $values['dependent_service_description'][0]['value']);
				if(empty($service)) {
					$job->addNotice("The service specified by hostgroup " . $hostgroupValues['value'] . ":" . $values['dependent_service_description'][0]['value'] . " was not found.  Setting this service dependency as queued.");
					return false;
				}
				$service->clearAllReferences(true);
			}
		}

		// Check time period existence
		if(isset($values['dependency_period'])) {
			$c = new Criteria();
			$c->add(NagiosTimeperiodPeer::NAME, $values['dependency_period'][0]['value']);
			$timePeriod = NagiosTimeperiodPeer::doSelectOne($c);
			if(empty($timePeriod)) {
				$job->addNotice("The time period specified by " . $values['dependency_period'][0]['value'] . " was not found.  Setting this host dependency as queued.");
				return false;
			}
			$timePeriod->clearAllReferences(true);
		}
		return true;

	}

	private function getTemplateValues($name) {
		$job = $this->getEngine()->getJob();
		$template = NagiosServiceDependencyImporter::getTemplateByName($name);
		if(!$template) {
			$job->addNotice("FATAL ERROR: Failed to get template by name: " . $name);
		}
		// $template is a segment instance
		$values = $template->getValues();
		if(isset($values['use'])) {
			// Multiple levels!
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}
		return $values;
	}

	static function saveTemplate($name, $segment) {
		NagiosServiceDependencyImporter::$templates[$name] = $segment;
	}

	private function __process($dependency) {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		if(isset($values['use'])) {
			// We sure are using a template!
			// Okay, hokey multi-inheritance support for the importer
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}

		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				// Skips
				$value = $entry['value'];
				$lineNum = $entry['line'];
				if($key == 'use' || $key == 'name' || $key == 'register' || $key == 'dependent_host_name' || $key == 'dependent_hostgroup_name' || $key == 'host_name' || $key == 'hostgroup_name' || $key == 'dependent_service_description' || $key == 'service_description')
					continue;

				if($key == 'execution_failure_criteria') {
					$options = explode(",",$entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'o':
								$dependency->setExecutionFailureCriteriaOk(true);
								break;
							case 'w':
								$dependency->setExecutionFailureCriteriaWarning(true);
								break;
							case 'u':
								$dependency->setExecutionFailureCriteriaUnknown(true);
								break;
							case 'c':
								$dependency->setExecutionFailureCriteriaCritical(true);
								break;
							case 'p':
								$dependency->setExecutionFailureCriteriaPending(true);
								break;
						}

					}
					continue;
				}
				if($key == 'notification_failure_criteria') {
					$options = explode(",", $entry['value']);
					foreach($options as $option) {
						switch(strtolower(trim($option))) {
							case 'o':
								$dependency->setNotificationFailureCriteriaOk(true);
								break;
							case 'w':
								$dependency->setNotificationFailureCriteriaWarning(true);
								break;
							case 'u':
								$dependency->setNotificationFailureCriteriaUnknown(true);
								break;
							case 'c':
								$dependency->setNotificationFailureCriteriaCritical(true);
								break;
							case 'p':
								$dependency->setNotificationFailureCriteriaPending(true);
								break;
						}
					}
					continue;
				}
				// Okay, let's check that the method DOES exist
				if(!method_exists($dependency, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_func(array($dependency, $this->fieldMethods[$key]), $value);
				}
		
			}

		}
		$dependency->save();
		$dependency->clearAllReferences(true);

		return true;
	}

	public function __addTargets($dependency) {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		if(isset($values['use'])) {
			// We sure are using a template!
			// Okay, hokey multi-inheritance support for the importer
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}

		if(isset($values['host_name'])) {
			$host_names = explode(",", $values['host_name'][0]['value']);
			foreach($host_names as $host_name) {
				$service = NagiosServicePeer::getByHostAndDescription($host_name, $values['service_description'][0]['value']);
				if(!$service)
					return false;
				// Create target
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($dependency);
				$target->setNagiosHost($service->getNagiosHost());
				$target->setNagiosService($service);
				$target->save();
				$target->clearAllReferences(true);
				$service->clearAllReferences(true);
			}
		}
		if(isset($values['hostgroup_name'])) {
			$hostgroup_names = explode(",", $values['hostgroup_name'][0]['value']);
			foreach($hostgroup_names as $hostgroup_name) {
				$service = NagiosServicePeer::getByHostgroupAndDescription($hostgroup_name, $values['service_description'][0]['value']);
				if(!$service)
					return false;
				// Create target
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($dependency);
				$target->setNagiosHostgroup($service->getNagiosHostgroup());
				$target->setNagiosService($service);
				$target->save();
				$target->clearAllReferences(true);
				$service->clearAllReferences(true);
			}
		}
		return true;
	}
	
	public function import() {
		$job = $this->getEngine()->getJob();
		$config = $this->getEngine()->getConfig();
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		// We need to determine if we are a template
		if(isset($values['name'])) {
			// We are a template
			$job->addNotice("Saving internal host dependency template: " . $values['name'][0]['value']);
			NagiosHostDependencyImporter::saveTemplate($values['name'][0]['value'], $segment);
			return true;
		}		

		if(isset($values['use'])) {
			// We sure are using a template!
			// Okay, hokey multi-inheritance support for the importer
			$tempValues = $this->getTemplateValues($values['use'][0]['value']);
			// Okay, go through each
			foreach($tempValues as $key => $val) {
				if(!isset($values[$key])) {
					$values[$key] = $val;
				}
			}	
		}

		// Okay, we first iterate through any possible dependent_host_name's
		if(isset($values['dependent_host_name'])) {
			$host_names = explode(",", $values['dependent_host_name'][0]['value']);
			foreach($host_names as $host_name) {
				$dependency = new NagiosDependency();
				$service = NagiosServicePeer::getByHostAndDescription($host_name, $values['dependent_service_description'][0]['value']);
				if(!$service)
					return false;
				$dependency->setNagiosService($service);
				$ret = $this->__process($dependency);
				if(!$ret)
					return false;
				$ret = $this->__addTargets($dependency);
				if(!$ret)
					return false;
				// Need to give it a temp name
				$dependency->save();
				$dependency->setName("Imported Dependency #" . $dependency->getId());
				$dependency->save();
				$dependency->clearAllReferences(true);
				$service->clearAllReferences(true);
				$job->addNotice("NagiosServiceDependencyImporter finished importing Service Dependency for " . $host_name); 
			}
		}
		if(isset($values['dependent_hostgroup_name'])) {
			$hostgroup_names = explode(",", $values['dependent_hostgroup_name'][0]['value']);
			foreach($hostgroup_names as $hostgroup_name) {
				$dependency = new NagiosDependency();
				$service = NagiosServicePeer::getByHostgroupAndDescription($hostgroup_name, $values['dependent_service_description'][0]['value']);
				if(!$service)
					return false;
				$dependency->setNagiosService($service);
				$ret = $this->__process($dependency);
				if(!$ret)
					return false;
				$ret = $this->__addTargets($dependency);
				if(!$ret)
					return false;
				$dependency->save();
				$dependency->setName("Imported Dependency #" . $dependency->getId());
				$dependency->save();
				$dependency->clearAllReferences(true);
				$service->clearAllReferences(true);
				$job->addNotice("NagiosServiceDependencyImporter finished importing Service Dependency for hostgroup " . $hostgroup_name);
			}
		}
		return true;
	}
}

?>
