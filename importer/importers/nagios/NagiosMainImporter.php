<?php
include_once('NagiosMainConfiguration.php');


class NagiosMainImporter extends NagiosImporter {

	private $regexValidators = array('log_file' => '',
								'cfg_file' => '',
								'cfg_dir' => '',
								'external_command_buffer_slots' => '',
								'object_cache_file' => '',
								'precached_object_file' => '',
								'resource_file' => '',
								'temp_file' => '',
								'status_file' => '',
								'status_update_interval' => '',
								'nagios_user' => '',
								'nagios_group' => '',
								'enable_notifications' => '',
								'event_broker_options' => '',
								'execute_service_checks' => '',
								'accept_passive_service_checks' => '',
								'execute_host_checks' => '',
								'accept_passive_host_checks' => '',
								'enable_event_handlers' => '',
								'log_rotation_method' => '',
								'log_archive_path' => '',
								'check_external_commands' => '',
								'command_check_interval' => '',
								'command_file' => '',
								'lock_file' => '',
								'retain_state_information' => '',
								'state_retention_file' => '',
								'retention_update_interval' => '',
								'use_retained_program_state' => '',
								'use_retained_scheduling_info' => '',
								'retained_host_attribute_mask' => '',
								'retained_service_attribute_mask' => '',
								'use_syslog' => '',
								'log_notifications' => '',
								'log_service_retries' => '',
								'log_host_retries' => '',
								'log_event_handlers' => '',
								'log_initial_states' => '',
								'log_external_commands' => '',
								'log_passive_checks' => '',
								'global_host_event_handler' => '',
								'global_service_event_handler' => '',
								'sleep_time' => '',
								'service_inter_check_delay_method' => '',
								'max_service_check_spread' => '',
								'service_interleave_factor' => '',
								'max_concurrent_checks' => '',
								'service_reaper_frequency' => '',
								'host_inter_check_delay_method' => '',
								'max_host_check_spread' => '',
								'interval_length' => '',
								'auto_reschedule_checks' => '',
								'auto_rescheduling_interval' => '',
								'auto_rescheduling_window' => '',
								'use_aggressive_host_checking' => '',
								'enable_flap_detection' => '',
								'low_service_flap_threshold' => '',
								'high_service_flap_threshold' => '',
								'low_host_flap_threshold' => '',
								'high_host_flap_threshold' => '',
								'soft_state_dependencies' => '',
								'service_check_timeout' => '',
								'host_check_timeout' => '',
								'event_handler_timeout' => '',
								'notification_timeout' => '',
								'ocsp_timeout' => '',
								'ohcp_timeout' => '',
								'perfdata_timeout' => '',
								'obsess_over_services' => '',
								'ocsp_command' => '', 
								'obsess_over_hosts' => '',
								'ochp_command' => '',
								'process_performance_data' => '',
								'host_perfdata_command' => '',
								'service_perfdata_command' => '',
								'host_perfdata_file' => '',
								'service_perfdata_file' => '',
								'host_perfdata_file_template' => '',
								'service_perfdata_file_template' => '',
								'host_perfdata_file_mode' => '',
								'service_perfdata_file_mode' => '',
								'host_perfdata_file_processing_interval' => '',
								'service_perfdata_file_processing_interval' => '',
								'host_perfdata_file_processing_command' => '',
								'service_perfdata_file_processing_command' => '',
								'check_for_orphaned_services' => '',
								'check_service_freshness' => '',
								'service_freshness_check_interval' => '',
								'check_host_freshness' => '',
								'host_freshness_check_interval' => '',
								'date_format' => '',
								'illegal_object_name_chars' => '',
								'illegal_macro_output_chars' => '',
								'use_regexp_matching' => '',
								'use_true_regexp_matching' => '',
								'admin_email' => '',
								'retained_process_host_attribute_mask' => '',
								'retained_process_service_attribute_mask' => '',
								'retained_contact_host_attribute_mask' => '',
								'retained_contact_service_attribute_mask' => '',
								'check_result_reaper_frequency' => '',
								'max_check_result_reaper_time' => '',
								'check_result_path' => '',
								'max_check_result_file_age' => '',
								'translate_passive_host_checks' => '',
								'passive_host_checks_are_soft' => '',
								'enable_predictive_host_dependency_checks' => '',
								'enable_predictive_service_dependency_checks' => '',
								'cached_host_check_horizon' => '',
								'cached_service_check_horizon' => '',
								'use_large_installation_tweaks' => '',
								'free_child_process_memory' => '',
								'child_processes_fork_twice' => '',
								'enable_environment_macros' => '',
								'additional_freshness_latency' => '',
								'enable_embedded_perl' => '',
								'use_embedded_perl_implicitly' => '',
								'p1_file' => '',
								'use_timezone' => '',
								'debug_file' => '',
								'debug_level' => '',
								'debug_verbosity' => '',
								'max_debug_file_size' => '',
								'admin_pager' => '',
								'daemon_dumps_core' => '');
	
	private $fieldMethods = array('log_file' => 'setLogFile',
								'daemon_dumps_core' => 'setDaemonDumpsCore',
								'object_cache_file' => 'setObjectCacheFile',
								'precached_object_file' => 'setPrecachedObjectFile',
								'temp_file' => 'setTempFile',
								'status_file' => 'setStatusFile',
								'external_command_buffer_slots' => 'setExternalCommandBufferSlots',
								'status_update_interval' => 'setStatusUpdateInterval',
								'nagios_user' => 'setNagiosUser',
								'nagios_group' => 'setNagiosGroup',
								'event_broker_options' => 'setEventBrokerOptions',
								'enable_notifications' => 'setEnableNotifications',
								'execute_service_checks' => 'setExecuteServiceChecks',
								'accept_passive_service_checks' => 'setAcceptPassiveServiceChecks',
								'execute_host_checks' => 'setExecuteHostChecks',
								'accept_passive_host_checks' => 'setAcceptPassiveHostChecks',
								'enable_event_handlers' => 'setEnableEventHandlers',
								'log_rotation_method' => 'setLogRotationMethod',
								'log_archive_path' => 'setLogArchivePath',
								'check_external_commands' => 'setCheckExternalCommands',
								'command_check_interval' => 'setCommandCheckInterval',
								'command_file' => 'setCommandFile',
								'lock_file' => 'setLockFile',
								'retain_state_information' => 'setRetainStateInformation',
								'state_retention_file' => 'setStateRetentionFile',
								'retention_update_interval' => 'setRetentionUpdateInterval',
								'use_retained_program_state' => 'setUseRetainedProgramState',
								'retained_host_attribute_mask' => 'setRetainedHostAttributeMask',
								'retained_service_attribute_mask' => 'setRetainedServiceAttributeMask',
								'use_retained_scheduling_info' => 'setUseRetainedSchedulingInfo',
								'use_syslog' => 'setUseSyslog',
								'log_notifications' => 'setLogNotifications',
								'log_service_retries' => 'setLogServiceRetries',
								'log_host_retries' => 'setLogHostRetries',
								'log_event_handlers' => 'setLogEventHandlers',
								'log_initial_states' => 'setLogInitialStates',
								'log_external_commands' => 'setLogExternalCommands',
								'log_passive_checks' => 'setLogPassiveChecks',
								'global_host_event_handler' => 'setGlobalHostEventHandlerByName',
								'global_service_event_handler' => 'setGlobalServiceEventHandlerByName',
								'sleep_time' => 'setSleepTime',
								'service_inter_check_delay_method' => 'setServiceInterCheckDelayMethod',
								'max_service_check_spread' => 'setMaxServiceCheckSpread',
								'service_interleave_factor' => 'setServiceInterleaveFactor',
								'max_concurrent_checks' => 'setMaxConcurrentChecks',
								'service_reaper_frequency' => 'setServiceReaperFrequency',
								'host_inter_check_delay_method' => 'setHostInterCheckDelayMethod',
								'max_host_check_spread' => 'setMaxHostCheckSpread',
								'interval_length' => 'setIntervalLength',
								'auto_reschedule_checks' => 'setAutoRescheduleChecks',
								'auto_rescheduling_interval' => 'setAutoReschedulingInterval',
								'auto_rescheduling_window' => 'setAutoReschedulingWindow',
								'use_aggressive_host_checking' => 'setUseAggressiveHostChecking',
								'enable_flap_detection' => 'setEnableFlapDetection',
								'low_service_flap_threshold' => 'setLowServiceFlapThreshold',
								'high_service_flap_threshold' => 'setHighServiceFlapThreshold',
								'low_host_flap_threshold' => 'setLowHostFlapThreshold',
								'high_host_flap_threshold' => 'setHighHostFlapThreshold',
								'soft_state_dependencies' => 'setSoftStateDependencies',
								'service_check_timeout' => 'setServiceCheckTimeout',
								'host_check_timeout' => 'setHostCheckTimeout',
								'event_handler_timeout' => 'setEventHandlerTimeout',
								'notification_timeout' => 'setNotificationTimeout',
								'ocsp_timeout' => 'setOcspTimeout',
								'ohcp_timeout' => 'setOhcpTimeout',
								'perfdata_timeout' => 'setPerfdataTimeout',
								'obsess_over_services' => 'setObsessOverServices',
								'ocsp_command' => 'setOcspCommand', 
								'obsess_over_hosts' => 'setObsessOverHosts',
								'ochp_command' => 'setOchpCommand',
								'process_performance_data' => 'setProcessPerformanceData',
								'host_perfdata_command' => 'setHostPerfdataCommandByName',
								'service_perfdata_command' => 'setServicePerfdataCommandByName',
								'host_perfdata_file' => 'setHostPerfdataFile',
								'service_perfdata_file' => 'setServicePerfdataFile',
								'host_perfdata_file_template' => 'setHostPerfdataFileTemplate',
								'service_perfdata_file_template' => 'setServicePerfdataFileTemplate',
								'host_perfdata_file_mode' => 'setHostPerfdataFileMode',
								'service_perfdata_file_mode' => 'setServicePerfdataFileMode',
								'host_perfdata_file_processing_interval' => 'setHostPerfdataFileProcessingInterval',
								'service_perfdata_file_processing_interval' => 'setServicePerfdataFileProcessingInterval',
								'host_perfdata_file_processing_command' => 'setHostPerfdataFileProcessingCommandByName',
								'service_perfdata_file_processing_command' => 'setServicePerfdataFileProcessingCommandByName',
								'check_for_orphaned_services' => 'setCheckForOrphanedServices',
								'check_service_freshness' => 'setCheckServiceFreshness',
								'service_freshness_check_interval' => 'setServiceFreshnessCheckInterval',
								'check_host_freshness' => 'setCheckHostFreshness',
								'host_freshness_check_interval' => 'setHostFreshnessCheckInterval',
								'date_format' => 'setDateFormat',
								'illegal_object_name_chars' => 'setIllegalObjectNameChars',
								'illegal_macro_output_chars' => 'setIllegalMacroOutputChars',
								'use_regexp_matching' => 'setUseRegexpMatching',
								'use_true_regexp_matching' => 'setUseTrueRegexpMatching',
								'admin_email' => 'setAdminEmail',
								'admin_pager' => 'setAdminPager',
								'retained_process_host_attribute_mask' => 'setRetainedProcessHostAttributeMask',
								'retained_process_service_attribute_mask' => 'setRetainedProcessServiceAttributeMask',
								'retained_contact_host_attribute_mask' => 'setRetainedContactHostAttributeMask',
								'retained_contact_service_attribute_mask' => 'setRetainedContactServiceAttributeMask',
								'check_result_reaper_frequency' => 'setCheckResultReaperFrequency',
								'max_check_result_reaper_time' => 'setMaxCheckResultReaperTime',
								'check_result_path' => 'setCheckResultPath',
								'max_check_result_file_age' => 'setMaxCheckResultFileAge',
								'translate_passive_host_checks' => 'setTranslatePassiveHostChecks',
								'passive_host_checks_are_soft' => 'setPassiveHostChecksAreSoft',
								'enable_predictive_host_dependency_checks' => 'setEnablePredictiveHostDependencyChecks',
								'enable_predictive_service_dependency_checks' => 'setEnablePredictiveServiceDependencyChecks',
								'cached_host_check_horizon' => 'setCachedHostCheckHorizon',
								'cached_service_check_horizon' => 'setCachedServiceCheckHorizon',
								'use_large_installation_tweaks' => 'setUseLargeInstallationTweaks',
								'free_child_process_memory' => 'setFreeChildProcessMemory',
								'child_processes_fork_twice' => 'setChildProcessesForkTwice',
								'enable_environment_macros' => 'setEnableEnvironmentMacros',
								'additional_freshness_latency' => 'setAdditionalFreshnessLatency',
								'enable_embedded_perl' => 'setEnableEmbeddedPerl',
								'use_embedded_perl_implicitly' => 'setUseEmbeddedPerlImplicitly',
								'p1_file' => 'setP1File',
								'use_timezone' => 'setUseTimezone',
								'debug_file' => 'setDebugFile',
								'debug_level' => 'setDebugLevel',
								'debug_verbosity' => 'setDebugVerbosity',
								'max_debug_file_size' => 'setMaxDebugFileSize',
								'admin_pager' => 'setAdminPager');
	
	// We should gather all the cfg_file and cfg_dir directives and add them to our NagiosImportEngine's object files
	public function init() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$config = $engine->getConfig();
		$job->addNotice("NagiosMainImporter initializing.");
		$job->addNotice("NagiosMainImporter searching for cfg_file variables...");
		$segment = $this->getSegment();
		$fileValues = $segment->get("cfg_file");
		if(!empty($fileValues)) {
			foreach($fileValues as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				$engine->addObjectFile($value);
			}
		}
		$job->addNotice("NagiosMainImporter searching for cfg_dir variables...");
		$dirValues = $segment->get("cfg_dir");
		if(count($dirValues)) {
			foreach($dirValues as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				if(!$this->addCfgDir($value, $engine)) {
					$job->addError("NagiosMainImporter failed to recursively add cfg_dir: " . $value);
					if(!$config->getVar('continue_error')) {
						return false;
					}
				}
			}
		}
		$values = $segment->getValues();
		foreach($values as $key => $entry) {
			foreach($entry as $lineValue) {
				$value = $lineValue['value'];
				$lineNum = $lineValue['line'];
				
				if(!key_exists($key, $this->regexValidators)) {
					$job->addLogEntry("Variable in main configuration file not supported: " . $key . " on line " . $lineNum);
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
		$job->addNotice("NagiosMainImporter finished initializing.");
	}
	
	public function valid() {
		// We need to check to see if we have dependency issues, if so, state we are invalid at this time
		$segment = $this->getSegment();
		$job = $this->getEngine()->getJob();
		$val = $segment->get("ocsp_command");
		$val = $val[0]['value'];
		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find ocsp_command command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("ohcp_command");
		$val = $val[0]['value'];
		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find ohcp_command command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("host_perfdata_command");
		$val = $val[0]['value'];
		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find host_perfdata_command command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("service_perfdata_command");
		$val = $val[0]['value'];
		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find service_perfdata_command command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("host_perfdata_file_processing_command");
		$val = $val[0]['value'];
		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find host_perfdata_file_processing_command command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("service_perfdata_file_processing_command");
		$val = $val[0]['value'];

		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find service_perfdata_file_processing command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("global_service_event_handler");
		$val = $val[0]['value'];

		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find global_service_event_handler command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		$val = $segment->get("global_host_event_handler");
		$val = $val[0]['value'];

		if($val) {
			$c = new Criteria();
			$c->add(NagiosCommandPeer::NAME, $val);
			$c->setIgnoreCase(true);
			$command = NagiosCommandPeer::doSelectOne($c);
			if(!$command) {
				$job->addNotice("Main Configuration not yet valid.  Could not find global_host_event_handler command: " . $val);
				return false;
			}
			$command->clearAllReferences(true);
		}
		return true;
	}
	
	public function import() {

		$job = $this->getEngine()->getJob();
		
		$config = $this->getEngine()->getConfig();
		
		$mainCfg = new NagiosMainConfiguration();
		
		$segment = $this->getSegment();
		$values = $segment->getValues();
		$fileName = $segment->getFilename();
		
		
		// Setup the configuration directory for the new config file to match the file we imported
		$mainCfg->setConfigDir(dirname(realpath($fileName)));

                // First let's go and re-merge the coords
                foreach($values as $key => $entries) {
                	if($key == "illegal_object_name_chars" || $key == "illegal_macro_output_chars") {
                        	foreach($entries as $entry) {
                                	if(empty($newEntry) || $newEntry['value']=="") {
                                        	$newEntry = $entry;
                                        }
                                        else {
                                                $newEntry['value'] .= "," . $entry['value'];
                                        }
                                }
                                call_user_method($this->fieldMethods[$key], $mainCfg, $newEntry['value']);
                                unset($newEntry['value']);
                                continue;
                	}
                }
		foreach($values as $key => $entries) {
			foreach($entries as $entry) {
				$value = $entry['value'];
				$lineNum = $entry['line'];

                		if($key == "illegal_object_name_chars" || $key == "illegal_macro_output_chars") 
					continue;

				if(key_exists($key, $this->fieldMethods) && $this->fieldMethods[$key] != '') {
					// Okay, let's check that the method DOES exist
					if(!method_exists($mainCfg, $this->fieldMethods[$key])) {
						$job->addError("Method " . $this->fieldMethods[$key] . " does not exist for variable: " . $key . " on line " . $lineNum . " in file " . $fileName);
						if(!$config->getVar('continue_error')) {
							return false;
						}	
					}
					else {
						call_user_method($this->fieldMethods[$key], $mainCfg, $value);
					}
				}
			}
		}
		
		// If we got here, it's safe to delete the existing main config and save the new one
		$oldConfig = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		if($oldConfig) {
			$oldConfig->delete();
		}
		
		$mainCfg->save();
		$mainCfg->clearAllReferences(true);
		$job->addNotice("NagiosMainImporter finished importing main configuration.");
		return true;
	}
	
	
	/**
	 * Enter description here...
	 *
	 * @param string $configDir
	 * @param ImportJob $importJob
	 * @return unknown
	 */
	private function addCfgDir($configDir, $engine) {
		$importJob = $engine->getJob();
		$config = $engine->getConfig();
		// Syntax check, if there is no trailing slash at the end of the dir name, let's add it
		if(!preg_match('/\/$/', $configDir))
			$configDir .= '/';
		// Function to go through a directory and iterate through all object config files and directories
		if(($dirPtr = @opendir($configDir)) == false) {
			$importJob->addError("Cannot open configuration directory: " . $configDir);
			return false;
		}
		// If we got here, no problems, let's go through the directory.  :)
		while (($file = readdir($dirPtr)) !== false) {
		   if($file != '.' && $file != '..') {
		       if(preg_match('/.cfg$/', $file)) {
			       // Then this is a configuration file
			       $engine->addObjectFile($configDir . $file);
			       continue;
		       }
		       if(filetype($configDir . $file) == 'dir') {
				if(!$this->addCfgDir($configDir . $file, $engine)) {
					if(!$config['continue_error']) {
						return false;
					}
				}
				continue;
		       }
		   }		
		}
		closedir($dirPtr);
		return true;
	}
	
}

?>
