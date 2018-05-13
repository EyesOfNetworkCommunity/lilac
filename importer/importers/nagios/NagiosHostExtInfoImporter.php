<?php
require_once('NagiosHost.php');

class NagiosHostExtInfoImporter extends NagiosImporter {

	private static $templates = array();	// Used to support template inheritance when importing this type of obj

	private $regexValidators = array('host_name' => '',
									 'hostgroup_name' => '',	// Time-saving support
									 'notes' => '',
									 'notes_url' => '',
                                     'action_url' => '',
									 'icon_image' => '',
									 'icon_image_alt' => '',
									 'vrml_image' => '',
									 'statusmap_image' => '',
									 '2d_coords' => '',
									 '3d_coords' => '',
									 'name' => '',
									'use' => '',
									'register' => '');
								
	private $fieldMethods = array('notes' => 'setNotes',
								  'notes_url' => 'setNotesUrl',
								  'action_url' => 'setActionUrl',
                                  'icon_image' => 'setIconImage',
								  'icon_image_alt' => 'setIconImageAlt',
								  'vrml_image' => 'setVrmlImage',
								  'statusmap_image' => 'setStatusmapImage',
								  '2d_coords' => 'setTwoDCoords',
								  '3d_coords' => 'setThreeDCoords');
								
	// We should gather all the cfg_file and cfg_dir directives and add them to our NagiosImportEngine's object files
	public function init() {
		$config = $this->getEngine()->getConfig();
		$job = $this->getEngine()->getJob();
		$segment = $this->getSegment();
		
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if(strpos($key, "address") === 0) {
					// It's an address value, we'll accept it for now.
					continue;
				}

				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in host ext object file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosHostExtInfoImporter finished initializing.");
		return true;
	}

	public static function getTemplateByName($name) {
		if(!key_exists($name, NagiosHostExtInfoImporter::$templates)) {
			return false;
		}
		return NagiosHostExtInfoImporter::$templates[$name];
	}
	
	public function valid() {
		$values = $this->getSegment()->getValues();
		$job = $this->getEngine()->getJob();
		if(isset($values['use'])) {
			// We need to use a template
			$job->addNotice("This Host Ext Info uses a template: " . $values['use'][0]['value']);	
			$template = NagiosHostExtInfoImporter::getTemplateByName($values['use'][0]['value']);
			if(empty($template)) {
				$job->addNotice("That template is not found yet. Setting this host ext info as queued.");
				return false;
			}
		}
		if($this->getAppliedHosts(empty($values['host_name']) ? array() : $values['host_name'], empty($values['hostgroup_name']) ? array() : $values['hostgroup_name']) === false) {
			return false;
		}

		return true;

	}

	// Return a list of valid NagiosHost objects which this importer will apply 
	// this to.
	private function getAppliedHosts($hostValues, $hostgroupValues) {
		$appliedHosts = array();
		foreach($hostValues as $val) {
			$val = $val['value'];
			if($val == "*") {
				// Get all hosts 
				$tempHosts = NagiosHostPeer::doSelect(new Criteria());
				foreach($tempHosts as $tempHost) {
					if(!array_key_exists($tempHost->getName(), $appliedHosts)) {
						$appliedHosts[] = $tempHost;
					}
				}
			}
			else if(preg_match("/^!/", $val))
				continue;	// We'll do exclusions later
			else {
				$host = NagiosHostPeer::getByName($val);
				if(!$host) {
					// Give error
					$values = $this->getSegment()->getValues();
					$job = $this->getEngine()->getJob();
					$job->addError("The host specified by name: " . $val . " was not found.  Setting this host ext info as queued.");
					return false;
				}
				else {
					if(!array_key_exists($host->getName(), $appliedHosts)) {
						$appliedHosts[] = $host;
					}
				}
			}
		}
		foreach($hostgroupValues as $val) {
			$val = $val['value'];
			// First check for *
			// then check for each hostgroup existence, then
			// each additional hostgroup
			if($val == "*") {
				// Get all hostgroups
				$hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());
				foreach($hostgroups as $hg) {
					$hosts = $hostgroup->getNagiosHosts();
					foreach($hosts as $tempHost) {
						if(!array_key_exists($tempHost->getName(), $appliedHosts)) {
							$appliedHosts[] = $tempHost;
						}
					}
				}
			}
			else if(preg_match("/^!/", $val))
				continue;
			else {
				$hg = NagiosHostgroupPeer::getByName($val);
				if(!$hg) {
					// Give error
					$values = $this->getSegment()->getValues();
					$job = $this->getEngine()->getJob();
					$job->addError("The hostgroup specified by name: " . $val . " was not found.  Setting this host ext info as queued.");
					return false;
				}
				else {
					$hosts = $hg->getMembers();
					foreach($hosts as $tempHost) {
						if(!array_key_exists($tempHost->getName(), $appliedHosts)) {
							$appliedHosts[] = $tempHost;
						}
					}
				}
			}	
		}
		// Okay, do exclusions
		foreach($hostValues as $val) {
			$val = $val['value'];
			if(preg_match("/^!/", $val)) {
				unset($appliedHosts[$val]);
			}
		}
		foreach($hostgroupValues as $val) {
			$val = $val['value'];
			if(preg_match("/^!/", $val)) {
				$hg = NagiosHostgroupPeer::getByName($val);
				if(!$hg) {
					// Do nothing
				}
				else {
					$hosts = $hg->getMembers();
					foreach($hosts as $tempHost) {
						unset($appliedHosts[$tempHost->getName()]);
					}
				}
			}
		}
		return $appliedHosts;
	}

	private function getTemplateValues($name) {
		$job = $this->getEngine()->getJob();
		$template = NagiosHostExtInfoImporter::getTemplateByName($name);
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
		NagiosHostExtInfoImporter::$templates[$name] = $segment;
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
			$job->addNotice("Saving internal host ext info template: " . $values['name'][0]['value']);
			NagiosHostExtInfoImporter::saveTemplate($values['name'][0]['value'], $segment);
			return true;
		}		

		// Get our host obj
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
		$appliedHosts = $this->getAppliedHosts(empty($values['host_name']) ? array() : $values['host_name'], empty($values['hostgroup_name']) ? array() : $values['hostgroup_name']);
		foreach($appliedHosts as $host) {
			foreach($values as $key => $entries) {
				foreach($entries as $entry) {
					// Skips
					$value = $entry['value'];
					$lineNum = $entry['line'];
					if($key == 'use' || $key == 'name' || $key == 'register' || $key == 'host_name' || $key == 'hostgroup_name')
						continue;

					// Okay, let's check that the method DOES exist
					if(!method_exists($host, $this->fieldMethods[$key])) {
						$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
						if(!$config->getVar('continue_error')) {
							return false;
						}	
					}
					else {
						call_user_func(array($host, $this->fieldMethods[$key]), $value);
					}

				}

			}
			$host->save();
			$job->addNotice("NagiosHostExtInfo finished importing extended info for :" . $host->getName());
		}
		return true;
	}
}

?>
