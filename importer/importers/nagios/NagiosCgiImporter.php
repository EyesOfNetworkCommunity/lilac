<?php
require_once('NagiosCgiConfiguration.php');

class NagiosCgiImporter extends NagiosImporter {

	private $regexValidators = array('physical_html_path' => '',
								'main_config_file' => '',
								'url_html_path' => '',
								'use_authentication' => '',
								'default_user_name' => '',
								'authorized_for_system_information' => '',
								'authorized_for_system_commands' => '',
								'authorized_for_configuration_information' => '',
								'authorized_for_all_hosts' => '',
								'authorized_for_all_host_commands' => '',
								'authorized_for_all_services' => '',
								'authorized_for_all_service_commands' => '',
								'statusmap_background_image' => '',
								'default_statusmap_layout' => '',
								'statuswrl_include' => '',
								'default_statuswrl_layout' => '',
								'refresh_rate' => '',
								'host_unreachable_sound' => '',
								'host_down_sound' => '',
								'service_critical_sound' => '',
								'service_warning_sound' => '',
								'service_unknown_sound' => '',
								'ping_syntax' => '');
	
	private $fieldMethods = array('physical_html_path' => 'setPhysicalHtmlPath',
								'url_html_path' => 'setUrlHtmlPath',
								'main_config_file' => '',
								'use_authentication' => 'setUseAuthentication',
								'default_user_name' => 'setDefaultUserName',
								'authorized_for_system_information' => 'setAuthorizedForSystemInformation',
								'authorized_for_system_commands' => 'setAuthorizedForSystemCommands',
								'authorized_for_configuration_information' => 'setAuthorizedForConfigurationInformation',
								'authorized_for_all_hosts' => 'setAuthorizedForAllHosts',
								'authorized_for_all_host_commands' => 'setAuthorizedForAllHostCommands',
								'authorized_for_all_services' => 'setAuthorizedForAllServices',
								'authorized_for_all_service_commands' => 'setAuthorizedForAllServiceCommands',
								'statusmap_background_image' => 'setStatusmapBackgroundImage',
								'default_statusmap_layout' => 'setDefaultStatusmapLayout',
								'statuswrl_include' => 'setStatuswrlInclude',
								'default_statuswrl_layout' => 'setDefaultStatuswrlLayout',
								'refresh_rate' => 'setRefreshRate',
								'host_unreachable_sound' => 'setHostUnreachableSound',
								'host_down_sound' => 'setHostDownSound',
								'service_critical_sound' => 'setServiceCriticalSound',
								'service_warning_sound' => 'setServiceWarningSound',
								'service_unknown_sound' => 'setServiceUnknownSound',
								'ping_syntax' => 'setPingSyntax');
								
	// We should gather all the cfg_file and cfg_dir directives and add them to our NagiosImportEngine's object files
	public function init() {

		
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in cgi configuration file not supported: " . $key . " on line " . $linenum);
					if(!$config->get('continue_error')) {
						return false;
					}
				}
				else {
					// Key exists, let's check the regexp
					if($this->regexValidators[$key] != '' && !preg_match($this->regexValidators[$key], $value)) {
						// Failed the regular expression match (which was provided)!!!
						$job->addLogEntry("Variable '" . $key . "' failed the regular expression sanity check of: " . $this->regexValidators[$key] . " on line " . $linenum);
						if(!$config->get('continue_error')) {
							return false;
						}
					}
				}
			}
		}
		$job->addNotice("NagiosCgiImporter finished initializing.");
	}
	
	public function valid() {
		$this->getEngine()->getJob()->addNotice("NagiosCgiImporter has nothing to validate.");
		return true;
	}
	
	public function import() {

		$job = $this->getEngine()->getJob();
		
		$config = $this->getEngine()->getConfig();
		
		$cgiCfg = new NagiosCgiConfiguration();
		
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		
		foreach($values as $key => $entries) {
			if(preg_match("/^authorized_for/i", $key)) {
				// We need to pass the entire value over.
				// Collect the entries
				$value = array();
				foreach($entries as $entry) {
					$value[] = $entry['value'];
				}
				$value = implode(",", $value);
				if(!method_exists($cgiCfg, $this->fieldMethods[$key])) {
					$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $entries[0]['line'] . " in file " . $fileName);
					if(!$config->getVar('continue_error')) {
						return false;
					}	
				}
				else {
					call_user_method($this->fieldMethods[$key], $cgiCfg, $value);
				}
				continue;
			}
			foreach($entries as $entry) {
				$value = $entry['value'];
				$lineNum = $entry['line'];
					if(key_exists($key, $this->fieldMethods) && $this->fieldMethods[$key] != '') {
						// Okay, let's check that the method DOES exist
						if(!method_exists($cgiCfg, $this->fieldMethods[$key])) {
							$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
							if(!$config->getVar('continue_error')) {
								return false;
							}	
						}
						else {
							call_user_method($this->fieldMethods[$key], $cgiCfg, $value);
						}
					}
			}
		}
		
		// If we got here, it's safe to delete the existing main config and save the new one
		$oldConfig = NagiosCgiConfigurationPeer::doSelectOne(new Criteria());
		if($oldConfig) {
			$oldConfig->clearAllReferences(true);
			$oldConfig->delete();
		}
		
		$cgiCfg->save();
		$cgiCfg->clearAllReferences(true);
		$job->addNotice("NagiosCgiImporter finished importing cgi configuration.");
		return true;
	}
}

?>
