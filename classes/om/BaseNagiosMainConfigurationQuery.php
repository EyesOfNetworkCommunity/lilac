<?php


/**
 * Base class that represents a query for the 'nagios_main_configuration' table.
 *
 * Nagios Main Configuration
 *
 * @method     NagiosMainConfigurationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosMainConfigurationQuery orderByConfigDir($order = Criteria::ASC) Order by the config_dir column
 * @method     NagiosMainConfigurationQuery orderByLogFile($order = Criteria::ASC) Order by the log_file column
 * @method     NagiosMainConfigurationQuery orderByTempFile($order = Criteria::ASC) Order by the temp_file column
 * @method     NagiosMainConfigurationQuery orderByStatusFile($order = Criteria::ASC) Order by the status_file column
 * @method     NagiosMainConfigurationQuery orderByStatusUpdateInterval($order = Criteria::ASC) Order by the status_update_interval column
 * @method     NagiosMainConfigurationQuery orderByNagiosUser($order = Criteria::ASC) Order by the nagios_user column
 * @method     NagiosMainConfigurationQuery orderByNagiosGroup($order = Criteria::ASC) Order by the nagios_group column
 * @method     NagiosMainConfigurationQuery orderByEnableNotifications($order = Criteria::ASC) Order by the enable_notifications column
 * @method     NagiosMainConfigurationQuery orderByExecuteServiceChecks($order = Criteria::ASC) Order by the execute_service_checks column
 * @method     NagiosMainConfigurationQuery orderByAcceptPassiveServiceChecks($order = Criteria::ASC) Order by the accept_passive_service_checks column
 * @method     NagiosMainConfigurationQuery orderByEnableEventHandlers($order = Criteria::ASC) Order by the enable_event_handlers column
 * @method     NagiosMainConfigurationQuery orderByLogRotationMethod($order = Criteria::ASC) Order by the log_rotation_method column
 * @method     NagiosMainConfigurationQuery orderByLogArchivePath($order = Criteria::ASC) Order by the log_archive_path column
 * @method     NagiosMainConfigurationQuery orderByCheckExternalCommands($order = Criteria::ASC) Order by the check_external_commands column
 * @method     NagiosMainConfigurationQuery orderByCommandCheckInterval($order = Criteria::ASC) Order by the command_check_interval column
 * @method     NagiosMainConfigurationQuery orderByCommandFile($order = Criteria::ASC) Order by the command_file column
 * @method     NagiosMainConfigurationQuery orderByLockFile($order = Criteria::ASC) Order by the lock_file column
 * @method     NagiosMainConfigurationQuery orderByRetainStateInformation($order = Criteria::ASC) Order by the retain_state_information column
 * @method     NagiosMainConfigurationQuery orderByStateRetentionFile($order = Criteria::ASC) Order by the state_retention_file column
 * @method     NagiosMainConfigurationQuery orderByRetentionUpdateInterval($order = Criteria::ASC) Order by the retention_update_interval column
 * @method     NagiosMainConfigurationQuery orderByUseRetainedProgramState($order = Criteria::ASC) Order by the use_retained_program_state column
 * @method     NagiosMainConfigurationQuery orderByUseSyslog($order = Criteria::ASC) Order by the use_syslog column
 * @method     NagiosMainConfigurationQuery orderByLogNotifications($order = Criteria::ASC) Order by the log_notifications column
 * @method     NagiosMainConfigurationQuery orderByLogServiceRetries($order = Criteria::ASC) Order by the log_service_retries column
 * @method     NagiosMainConfigurationQuery orderByLogHostRetries($order = Criteria::ASC) Order by the log_host_retries column
 * @method     NagiosMainConfigurationQuery orderByLogEventHandlers($order = Criteria::ASC) Order by the log_event_handlers column
 * @method     NagiosMainConfigurationQuery orderByLogInitialStates($order = Criteria::ASC) Order by the log_initial_states column
 * @method     NagiosMainConfigurationQuery orderByLogExternalCommands($order = Criteria::ASC) Order by the log_external_commands column
 * @method     NagiosMainConfigurationQuery orderByLogPassiveChecks($order = Criteria::ASC) Order by the log_passive_checks column
 * @method     NagiosMainConfigurationQuery orderByGlobalHostEventHandler($order = Criteria::ASC) Order by the global_host_event_handler column
 * @method     NagiosMainConfigurationQuery orderByGlobalServiceEventHandler($order = Criteria::ASC) Order by the global_service_event_handler column
 * @method     NagiosMainConfigurationQuery orderByExternalCommandBufferSlots($order = Criteria::ASC) Order by the external_command_buffer_slots column
 * @method     NagiosMainConfigurationQuery orderBySleepTime($order = Criteria::ASC) Order by the sleep_time column
 * @method     NagiosMainConfigurationQuery orderByServiceInterleaveFactor($order = Criteria::ASC) Order by the service_interleave_factor column
 * @method     NagiosMainConfigurationQuery orderByMaxConcurrentChecks($order = Criteria::ASC) Order by the max_concurrent_checks column
 * @method     NagiosMainConfigurationQuery orderByServiceReaperFrequency($order = Criteria::ASC) Order by the service_reaper_frequency column
 * @method     NagiosMainConfigurationQuery orderByIntervalLength($order = Criteria::ASC) Order by the interval_length column
 * @method     NagiosMainConfigurationQuery orderByUseAggressiveHostChecking($order = Criteria::ASC) Order by the use_aggressive_host_checking column
 * @method     NagiosMainConfigurationQuery orderByEnableFlapDetection($order = Criteria::ASC) Order by the enable_flap_detection column
 * @method     NagiosMainConfigurationQuery orderByLowServiceFlapThreshold($order = Criteria::ASC) Order by the low_service_flap_threshold column
 * @method     NagiosMainConfigurationQuery orderByHighServiceFlapThreshold($order = Criteria::ASC) Order by the high_service_flap_threshold column
 * @method     NagiosMainConfigurationQuery orderByLowHostFlapThreshold($order = Criteria::ASC) Order by the low_host_flap_threshold column
 * @method     NagiosMainConfigurationQuery orderByHighHostFlapThreshold($order = Criteria::ASC) Order by the high_host_flap_threshold column
 * @method     NagiosMainConfigurationQuery orderBySoftStateDependencies($order = Criteria::ASC) Order by the soft_state_dependencies column
 * @method     NagiosMainConfigurationQuery orderByServiceCheckTimeout($order = Criteria::ASC) Order by the service_check_timeout column
 * @method     NagiosMainConfigurationQuery orderByHostCheckTimeout($order = Criteria::ASC) Order by the host_check_timeout column
 * @method     NagiosMainConfigurationQuery orderByEventHandlerTimeout($order = Criteria::ASC) Order by the event_handler_timeout column
 * @method     NagiosMainConfigurationQuery orderByNotificationTimeout($order = Criteria::ASC) Order by the notification_timeout column
 * @method     NagiosMainConfigurationQuery orderByOcspTimeout($order = Criteria::ASC) Order by the ocsp_timeout column
 * @method     NagiosMainConfigurationQuery orderByOhcpTimeout($order = Criteria::ASC) Order by the ohcp_timeout column
 * @method     NagiosMainConfigurationQuery orderByPerfdataTimeout($order = Criteria::ASC) Order by the perfdata_timeout column
 * @method     NagiosMainConfigurationQuery orderByObsessOverServices($order = Criteria::ASC) Order by the obsess_over_services column
 * @method     NagiosMainConfigurationQuery orderByOcspCommand($order = Criteria::ASC) Order by the ocsp_command column
 * @method     NagiosMainConfigurationQuery orderByProcessPerformanceData($order = Criteria::ASC) Order by the process_performance_data column
 * @method     NagiosMainConfigurationQuery orderByCheckForOrphanedServices($order = Criteria::ASC) Order by the check_for_orphaned_services column
 * @method     NagiosMainConfigurationQuery orderByCheckServiceFreshness($order = Criteria::ASC) Order by the check_service_freshness column
 * @method     NagiosMainConfigurationQuery orderByFreshnessCheckInterval($order = Criteria::ASC) Order by the freshness_check_interval column
 * @method     NagiosMainConfigurationQuery orderByDateFormat($order = Criteria::ASC) Order by the date_format column
 * @method     NagiosMainConfigurationQuery orderByIllegalObjectNameChars($order = Criteria::ASC) Order by the illegal_object_name_chars column
 * @method     NagiosMainConfigurationQuery orderByIllegalMacroOutputChars($order = Criteria::ASC) Order by the illegal_macro_output_chars column
 * @method     NagiosMainConfigurationQuery orderByAdminEmail($order = Criteria::ASC) Order by the admin_email column
 * @method     NagiosMainConfigurationQuery orderByAdminPager($order = Criteria::ASC) Order by the admin_pager column
 * @method     NagiosMainConfigurationQuery orderByExecuteHostChecks($order = Criteria::ASC) Order by the execute_host_checks column
 * @method     NagiosMainConfigurationQuery orderByServiceInterCheckDelayMethod($order = Criteria::ASC) Order by the service_inter_check_delay_method column
 * @method     NagiosMainConfigurationQuery orderByUseRetainedSchedulingInfo($order = Criteria::ASC) Order by the use_retained_scheduling_info column
 * @method     NagiosMainConfigurationQuery orderByAcceptPassiveHostChecks($order = Criteria::ASC) Order by the accept_passive_host_checks column
 * @method     NagiosMainConfigurationQuery orderByMaxServiceCheckSpread($order = Criteria::ASC) Order by the max_service_check_spread column
 * @method     NagiosMainConfigurationQuery orderByHostInterCheckDelayMethod($order = Criteria::ASC) Order by the host_inter_check_delay_method column
 * @method     NagiosMainConfigurationQuery orderByMaxHostCheckSpread($order = Criteria::ASC) Order by the max_host_check_spread column
 * @method     NagiosMainConfigurationQuery orderByAutoRescheduleChecks($order = Criteria::ASC) Order by the auto_reschedule_checks column
 * @method     NagiosMainConfigurationQuery orderByAutoReschedulingInterval($order = Criteria::ASC) Order by the auto_rescheduling_interval column
 * @method     NagiosMainConfigurationQuery orderByAutoReschedulingWindow($order = Criteria::ASC) Order by the auto_rescheduling_window column
 * @method     NagiosMainConfigurationQuery orderByOchpTimeout($order = Criteria::ASC) Order by the ochp_timeout column
 * @method     NagiosMainConfigurationQuery orderByObsessOverHosts($order = Criteria::ASC) Order by the obsess_over_hosts column
 * @method     NagiosMainConfigurationQuery orderByOchpCommand($order = Criteria::ASC) Order by the ochp_command column
 * @method     NagiosMainConfigurationQuery orderByCheckHostFreshness($order = Criteria::ASC) Order by the check_host_freshness column
 * @method     NagiosMainConfigurationQuery orderByHostFreshnessCheckInterval($order = Criteria::ASC) Order by the host_freshness_check_interval column
 * @method     NagiosMainConfigurationQuery orderByServiceFreshnessCheckInterval($order = Criteria::ASC) Order by the service_freshness_check_interval column
 * @method     NagiosMainConfigurationQuery orderByUseRegexpMatching($order = Criteria::ASC) Order by the use_regexp_matching column
 * @method     NagiosMainConfigurationQuery orderByUseTrueRegexpMatching($order = Criteria::ASC) Order by the use_true_regexp_matching column
 * @method     NagiosMainConfigurationQuery orderByEventBrokerOptions($order = Criteria::ASC) Order by the event_broker_options column
 * @method     NagiosMainConfigurationQuery orderByDaemonDumpsCore($order = Criteria::ASC) Order by the daemon_dumps_core column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataCommand($order = Criteria::ASC) Order by the host_perfdata_command column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataCommand($order = Criteria::ASC) Order by the service_perfdata_command column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataFile($order = Criteria::ASC) Order by the host_perfdata_file column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataFileTemplate($order = Criteria::ASC) Order by the host_perfdata_file_template column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataFile($order = Criteria::ASC) Order by the service_perfdata_file column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataFileTemplate($order = Criteria::ASC) Order by the service_perfdata_file_template column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataFileMode($order = Criteria::ASC) Order by the host_perfdata_file_mode column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataFileMode($order = Criteria::ASC) Order by the service_perfdata_file_mode column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataFileProcessingCommand($order = Criteria::ASC) Order by the host_perfdata_file_processing_command column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataFileProcessingCommand($order = Criteria::ASC) Order by the service_perfdata_file_processing_command column
 * @method     NagiosMainConfigurationQuery orderByHostPerfdataFileProcessingInterval($order = Criteria::ASC) Order by the host_perfdata_file_processing_interval column
 * @method     NagiosMainConfigurationQuery orderByServicePerfdataFileProcessingInterval($order = Criteria::ASC) Order by the service_perfdata_file_processing_interval column
 * @method     NagiosMainConfigurationQuery orderByObjectCacheFile($order = Criteria::ASC) Order by the object_cache_file column
 * @method     NagiosMainConfigurationQuery orderByPrecachedObjectFile($order = Criteria::ASC) Order by the precached_object_file column
 * @method     NagiosMainConfigurationQuery orderByRetainedHostAttributeMask($order = Criteria::ASC) Order by the retained_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByRetainedServiceAttributeMask($order = Criteria::ASC) Order by the retained_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByRetainedProcessHostAttributeMask($order = Criteria::ASC) Order by the retained_process_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByRetainedProcessServiceAttributeMask($order = Criteria::ASC) Order by the retained_process_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByRetainedContactHostAttributeMask($order = Criteria::ASC) Order by the retained_contact_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByRetainedContactServiceAttributeMask($order = Criteria::ASC) Order by the retained_contact_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery orderByCheckResultReaperFrequency($order = Criteria::ASC) Order by the check_result_reaper_frequency column
 * @method     NagiosMainConfigurationQuery orderByMaxCheckResultReaperTime($order = Criteria::ASC) Order by the max_check_result_reaper_time column
 * @method     NagiosMainConfigurationQuery orderByCheckResultPath($order = Criteria::ASC) Order by the check_result_path column
 * @method     NagiosMainConfigurationQuery orderByMaxCheckResultFileAge($order = Criteria::ASC) Order by the max_check_result_file_age column
 * @method     NagiosMainConfigurationQuery orderByTranslatePassiveHostChecks($order = Criteria::ASC) Order by the translate_passive_host_checks column
 * @method     NagiosMainConfigurationQuery orderByPassiveHostChecksAreSoft($order = Criteria::ASC) Order by the passive_host_checks_are_soft column
 * @method     NagiosMainConfigurationQuery orderByEnablePredictiveHostDependencyChecks($order = Criteria::ASC) Order by the enable_predictive_host_dependency_checks column
 * @method     NagiosMainConfigurationQuery orderByEnablePredictiveServiceDependencyChecks($order = Criteria::ASC) Order by the enable_predictive_service_dependency_checks column
 * @method     NagiosMainConfigurationQuery orderByCachedHostCheckHorizon($order = Criteria::ASC) Order by the cached_host_check_horizon column
 * @method     NagiosMainConfigurationQuery orderByCachedServiceCheckHorizon($order = Criteria::ASC) Order by the cached_service_check_horizon column
 * @method     NagiosMainConfigurationQuery orderByUseLargeInstallationTweaks($order = Criteria::ASC) Order by the use_large_installation_tweaks column
 * @method     NagiosMainConfigurationQuery orderByFreeChildProcessMemory($order = Criteria::ASC) Order by the free_child_process_memory column
 * @method     NagiosMainConfigurationQuery orderByChildProcessesForkTwice($order = Criteria::ASC) Order by the child_processes_fork_twice column
 * @method     NagiosMainConfigurationQuery orderByEnableEnvironmentMacros($order = Criteria::ASC) Order by the enable_environment_macros column
 * @method     NagiosMainConfigurationQuery orderByAdditionalFreshnessLatency($order = Criteria::ASC) Order by the additional_freshness_latency column
 * @method     NagiosMainConfigurationQuery orderByEnableEmbeddedPerl($order = Criteria::ASC) Order by the enable_embedded_perl column
 * @method     NagiosMainConfigurationQuery orderByUseEmbeddedPerlImplicitly($order = Criteria::ASC) Order by the use_embedded_perl_implicitly column
 * @method     NagiosMainConfigurationQuery orderByP1File($order = Criteria::ASC) Order by the p1_file column
 * @method     NagiosMainConfigurationQuery orderByUseTimezone($order = Criteria::ASC) Order by the use_timezone column
 * @method     NagiosMainConfigurationQuery orderByDebugFile($order = Criteria::ASC) Order by the debug_file column
 * @method     NagiosMainConfigurationQuery orderByDebugLevel($order = Criteria::ASC) Order by the debug_level column
 * @method     NagiosMainConfigurationQuery orderByDebugVerbosity($order = Criteria::ASC) Order by the debug_verbosity column
 * @method     NagiosMainConfigurationQuery orderByMaxDebugFileSize($order = Criteria::ASC) Order by the max_debug_file_size column
 * @method     NagiosMainConfigurationQuery orderByTempPath($order = Criteria::ASC) Order by the temp_path column
 * @method     NagiosMainConfigurationQuery orderByCheckForUpdates($order = Criteria::ASC) Order by the check_for_updates column
 * @method     NagiosMainConfigurationQuery orderByCheckForOrphanedHosts($order = Criteria::ASC) Order by the check_for_orphaned_hosts column
 * @method     NagiosMainConfigurationQuery orderByBareUpdateCheck($order = Criteria::ASC) Order by the bare_update_check column
 * @method     NagiosMainConfigurationQuery orderByLogCurrentStates($order = Criteria::ASC) Order by the log_current_states column
 * @method     NagiosMainConfigurationQuery orderByCheckWorkers($order = Criteria::ASC) Order by the check_workers column
 * @method     NagiosMainConfigurationQuery orderByQuerySocket($order = Criteria::ASC) Order by the query_socket column
 *
 * @method     NagiosMainConfigurationQuery groupById() Group by the id column
 * @method     NagiosMainConfigurationQuery groupByConfigDir() Group by the config_dir column
 * @method     NagiosMainConfigurationQuery groupByLogFile() Group by the log_file column
 * @method     NagiosMainConfigurationQuery groupByTempFile() Group by the temp_file column
 * @method     NagiosMainConfigurationQuery groupByStatusFile() Group by the status_file column
 * @method     NagiosMainConfigurationQuery groupByStatusUpdateInterval() Group by the status_update_interval column
 * @method     NagiosMainConfigurationQuery groupByNagiosUser() Group by the nagios_user column
 * @method     NagiosMainConfigurationQuery groupByNagiosGroup() Group by the nagios_group column
 * @method     NagiosMainConfigurationQuery groupByEnableNotifications() Group by the enable_notifications column
 * @method     NagiosMainConfigurationQuery groupByExecuteServiceChecks() Group by the execute_service_checks column
 * @method     NagiosMainConfigurationQuery groupByAcceptPassiveServiceChecks() Group by the accept_passive_service_checks column
 * @method     NagiosMainConfigurationQuery groupByEnableEventHandlers() Group by the enable_event_handlers column
 * @method     NagiosMainConfigurationQuery groupByLogRotationMethod() Group by the log_rotation_method column
 * @method     NagiosMainConfigurationQuery groupByLogArchivePath() Group by the log_archive_path column
 * @method     NagiosMainConfigurationQuery groupByCheckExternalCommands() Group by the check_external_commands column
 * @method     NagiosMainConfigurationQuery groupByCommandCheckInterval() Group by the command_check_interval column
 * @method     NagiosMainConfigurationQuery groupByCommandFile() Group by the command_file column
 * @method     NagiosMainConfigurationQuery groupByLockFile() Group by the lock_file column
 * @method     NagiosMainConfigurationQuery groupByRetainStateInformation() Group by the retain_state_information column
 * @method     NagiosMainConfigurationQuery groupByStateRetentionFile() Group by the state_retention_file column
 * @method     NagiosMainConfigurationQuery groupByRetentionUpdateInterval() Group by the retention_update_interval column
 * @method     NagiosMainConfigurationQuery groupByUseRetainedProgramState() Group by the use_retained_program_state column
 * @method     NagiosMainConfigurationQuery groupByUseSyslog() Group by the use_syslog column
 * @method     NagiosMainConfigurationQuery groupByLogNotifications() Group by the log_notifications column
 * @method     NagiosMainConfigurationQuery groupByLogServiceRetries() Group by the log_service_retries column
 * @method     NagiosMainConfigurationQuery groupByLogHostRetries() Group by the log_host_retries column
 * @method     NagiosMainConfigurationQuery groupByLogEventHandlers() Group by the log_event_handlers column
 * @method     NagiosMainConfigurationQuery groupByLogInitialStates() Group by the log_initial_states column
 * @method     NagiosMainConfigurationQuery groupByLogExternalCommands() Group by the log_external_commands column
 * @method     NagiosMainConfigurationQuery groupByLogPassiveChecks() Group by the log_passive_checks column
 * @method     NagiosMainConfigurationQuery groupByGlobalHostEventHandler() Group by the global_host_event_handler column
 * @method     NagiosMainConfigurationQuery groupByGlobalServiceEventHandler() Group by the global_service_event_handler column
 * @method     NagiosMainConfigurationQuery groupByExternalCommandBufferSlots() Group by the external_command_buffer_slots column
 * @method     NagiosMainConfigurationQuery groupBySleepTime() Group by the sleep_time column
 * @method     NagiosMainConfigurationQuery groupByServiceInterleaveFactor() Group by the service_interleave_factor column
 * @method     NagiosMainConfigurationQuery groupByMaxConcurrentChecks() Group by the max_concurrent_checks column
 * @method     NagiosMainConfigurationQuery groupByServiceReaperFrequency() Group by the service_reaper_frequency column
 * @method     NagiosMainConfigurationQuery groupByIntervalLength() Group by the interval_length column
 * @method     NagiosMainConfigurationQuery groupByUseAggressiveHostChecking() Group by the use_aggressive_host_checking column
 * @method     NagiosMainConfigurationQuery groupByEnableFlapDetection() Group by the enable_flap_detection column
 * @method     NagiosMainConfigurationQuery groupByLowServiceFlapThreshold() Group by the low_service_flap_threshold column
 * @method     NagiosMainConfigurationQuery groupByHighServiceFlapThreshold() Group by the high_service_flap_threshold column
 * @method     NagiosMainConfigurationQuery groupByLowHostFlapThreshold() Group by the low_host_flap_threshold column
 * @method     NagiosMainConfigurationQuery groupByHighHostFlapThreshold() Group by the high_host_flap_threshold column
 * @method     NagiosMainConfigurationQuery groupBySoftStateDependencies() Group by the soft_state_dependencies column
 * @method     NagiosMainConfigurationQuery groupByServiceCheckTimeout() Group by the service_check_timeout column
 * @method     NagiosMainConfigurationQuery groupByHostCheckTimeout() Group by the host_check_timeout column
 * @method     NagiosMainConfigurationQuery groupByEventHandlerTimeout() Group by the event_handler_timeout column
 * @method     NagiosMainConfigurationQuery groupByNotificationTimeout() Group by the notification_timeout column
 * @method     NagiosMainConfigurationQuery groupByOcspTimeout() Group by the ocsp_timeout column
 * @method     NagiosMainConfigurationQuery groupByOhcpTimeout() Group by the ohcp_timeout column
 * @method     NagiosMainConfigurationQuery groupByPerfdataTimeout() Group by the perfdata_timeout column
 * @method     NagiosMainConfigurationQuery groupByObsessOverServices() Group by the obsess_over_services column
 * @method     NagiosMainConfigurationQuery groupByOcspCommand() Group by the ocsp_command column
 * @method     NagiosMainConfigurationQuery groupByProcessPerformanceData() Group by the process_performance_data column
 * @method     NagiosMainConfigurationQuery groupByCheckForOrphanedServices() Group by the check_for_orphaned_services column
 * @method     NagiosMainConfigurationQuery groupByCheckServiceFreshness() Group by the check_service_freshness column
 * @method     NagiosMainConfigurationQuery groupByFreshnessCheckInterval() Group by the freshness_check_interval column
 * @method     NagiosMainConfigurationQuery groupByDateFormat() Group by the date_format column
 * @method     NagiosMainConfigurationQuery groupByIllegalObjectNameChars() Group by the illegal_object_name_chars column
 * @method     NagiosMainConfigurationQuery groupByIllegalMacroOutputChars() Group by the illegal_macro_output_chars column
 * @method     NagiosMainConfigurationQuery groupByAdminEmail() Group by the admin_email column
 * @method     NagiosMainConfigurationQuery groupByAdminPager() Group by the admin_pager column
 * @method     NagiosMainConfigurationQuery groupByExecuteHostChecks() Group by the execute_host_checks column
 * @method     NagiosMainConfigurationQuery groupByServiceInterCheckDelayMethod() Group by the service_inter_check_delay_method column
 * @method     NagiosMainConfigurationQuery groupByUseRetainedSchedulingInfo() Group by the use_retained_scheduling_info column
 * @method     NagiosMainConfigurationQuery groupByAcceptPassiveHostChecks() Group by the accept_passive_host_checks column
 * @method     NagiosMainConfigurationQuery groupByMaxServiceCheckSpread() Group by the max_service_check_spread column
 * @method     NagiosMainConfigurationQuery groupByHostInterCheckDelayMethod() Group by the host_inter_check_delay_method column
 * @method     NagiosMainConfigurationQuery groupByMaxHostCheckSpread() Group by the max_host_check_spread column
 * @method     NagiosMainConfigurationQuery groupByAutoRescheduleChecks() Group by the auto_reschedule_checks column
 * @method     NagiosMainConfigurationQuery groupByAutoReschedulingInterval() Group by the auto_rescheduling_interval column
 * @method     NagiosMainConfigurationQuery groupByAutoReschedulingWindow() Group by the auto_rescheduling_window column
 * @method     NagiosMainConfigurationQuery groupByOchpTimeout() Group by the ochp_timeout column
 * @method     NagiosMainConfigurationQuery groupByObsessOverHosts() Group by the obsess_over_hosts column
 * @method     NagiosMainConfigurationQuery groupByOchpCommand() Group by the ochp_command column
 * @method     NagiosMainConfigurationQuery groupByCheckHostFreshness() Group by the check_host_freshness column
 * @method     NagiosMainConfigurationQuery groupByHostFreshnessCheckInterval() Group by the host_freshness_check_interval column
 * @method     NagiosMainConfigurationQuery groupByServiceFreshnessCheckInterval() Group by the service_freshness_check_interval column
 * @method     NagiosMainConfigurationQuery groupByUseRegexpMatching() Group by the use_regexp_matching column
 * @method     NagiosMainConfigurationQuery groupByUseTrueRegexpMatching() Group by the use_true_regexp_matching column
 * @method     NagiosMainConfigurationQuery groupByEventBrokerOptions() Group by the event_broker_options column
 * @method     NagiosMainConfigurationQuery groupByDaemonDumpsCore() Group by the daemon_dumps_core column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataCommand() Group by the host_perfdata_command column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataCommand() Group by the service_perfdata_command column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataFile() Group by the host_perfdata_file column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataFileTemplate() Group by the host_perfdata_file_template column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataFile() Group by the service_perfdata_file column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataFileTemplate() Group by the service_perfdata_file_template column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataFileMode() Group by the host_perfdata_file_mode column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataFileMode() Group by the service_perfdata_file_mode column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataFileProcessingCommand() Group by the host_perfdata_file_processing_command column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataFileProcessingCommand() Group by the service_perfdata_file_processing_command column
 * @method     NagiosMainConfigurationQuery groupByHostPerfdataFileProcessingInterval() Group by the host_perfdata_file_processing_interval column
 * @method     NagiosMainConfigurationQuery groupByServicePerfdataFileProcessingInterval() Group by the service_perfdata_file_processing_interval column
 * @method     NagiosMainConfigurationQuery groupByObjectCacheFile() Group by the object_cache_file column
 * @method     NagiosMainConfigurationQuery groupByPrecachedObjectFile() Group by the precached_object_file column
 * @method     NagiosMainConfigurationQuery groupByRetainedHostAttributeMask() Group by the retained_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByRetainedServiceAttributeMask() Group by the retained_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByRetainedProcessHostAttributeMask() Group by the retained_process_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByRetainedProcessServiceAttributeMask() Group by the retained_process_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByRetainedContactHostAttributeMask() Group by the retained_contact_host_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByRetainedContactServiceAttributeMask() Group by the retained_contact_service_attribute_mask column
 * @method     NagiosMainConfigurationQuery groupByCheckResultReaperFrequency() Group by the check_result_reaper_frequency column
 * @method     NagiosMainConfigurationQuery groupByMaxCheckResultReaperTime() Group by the max_check_result_reaper_time column
 * @method     NagiosMainConfigurationQuery groupByCheckResultPath() Group by the check_result_path column
 * @method     NagiosMainConfigurationQuery groupByMaxCheckResultFileAge() Group by the max_check_result_file_age column
 * @method     NagiosMainConfigurationQuery groupByTranslatePassiveHostChecks() Group by the translate_passive_host_checks column
 * @method     NagiosMainConfigurationQuery groupByPassiveHostChecksAreSoft() Group by the passive_host_checks_are_soft column
 * @method     NagiosMainConfigurationQuery groupByEnablePredictiveHostDependencyChecks() Group by the enable_predictive_host_dependency_checks column
 * @method     NagiosMainConfigurationQuery groupByEnablePredictiveServiceDependencyChecks() Group by the enable_predictive_service_dependency_checks column
 * @method     NagiosMainConfigurationQuery groupByCachedHostCheckHorizon() Group by the cached_host_check_horizon column
 * @method     NagiosMainConfigurationQuery groupByCachedServiceCheckHorizon() Group by the cached_service_check_horizon column
 * @method     NagiosMainConfigurationQuery groupByUseLargeInstallationTweaks() Group by the use_large_installation_tweaks column
 * @method     NagiosMainConfigurationQuery groupByFreeChildProcessMemory() Group by the free_child_process_memory column
 * @method     NagiosMainConfigurationQuery groupByChildProcessesForkTwice() Group by the child_processes_fork_twice column
 * @method     NagiosMainConfigurationQuery groupByEnableEnvironmentMacros() Group by the enable_environment_macros column
 * @method     NagiosMainConfigurationQuery groupByAdditionalFreshnessLatency() Group by the additional_freshness_latency column
 * @method     NagiosMainConfigurationQuery groupByEnableEmbeddedPerl() Group by the enable_embedded_perl column
 * @method     NagiosMainConfigurationQuery groupByUseEmbeddedPerlImplicitly() Group by the use_embedded_perl_implicitly column
 * @method     NagiosMainConfigurationQuery groupByP1File() Group by the p1_file column
 * @method     NagiosMainConfigurationQuery groupByUseTimezone() Group by the use_timezone column
 * @method     NagiosMainConfigurationQuery groupByDebugFile() Group by the debug_file column
 * @method     NagiosMainConfigurationQuery groupByDebugLevel() Group by the debug_level column
 * @method     NagiosMainConfigurationQuery groupByDebugVerbosity() Group by the debug_verbosity column
 * @method     NagiosMainConfigurationQuery groupByMaxDebugFileSize() Group by the max_debug_file_size column
 * @method     NagiosMainConfigurationQuery groupByTempPath() Group by the temp_path column
 * @method     NagiosMainConfigurationQuery groupByCheckForUpdates() Group by the check_for_updates column
 * @method     NagiosMainConfigurationQuery groupByCheckForOrphanedHosts() Group by the check_for_orphaned_hosts column
 * @method     NagiosMainConfigurationQuery groupByBareUpdateCheck() Group by the bare_update_check column
 * @method     NagiosMainConfigurationQuery groupByLogCurrentStates() Group by the log_current_states column
 * @method     NagiosMainConfigurationQuery groupByCheckWorkers() Group by the check_workers column
 * @method     NagiosMainConfigurationQuery groupByQuerySocket() Group by the query_socket column
 *
 * @method     NagiosMainConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosMainConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosMainConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByOcspCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByOcspCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByOcspCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByOcspCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByOcspCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByOcspCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByOchpCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByOchpCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByOchpCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByOchpCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByOchpCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByOchpCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByHostPerfdataCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByHostPerfdataCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByHostPerfdataCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByServicePerfdataCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByServicePerfdataCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByServicePerfdataCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataFileProcessingCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataFileProcessingCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByHostPerfdataFileProcessingCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataFileProcessingCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataFileProcessingCommand relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataFileProcessingCommand relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByServicePerfdataFileProcessingCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataFileProcessingCommand relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByGlobalServiceEventHandler relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByGlobalServiceEventHandler relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByGlobalServiceEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByGlobalServiceEventHandler relation
 *
 * @method     NagiosMainConfigurationQuery leftJoinNagiosCommandRelatedByGlobalHostEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByGlobalHostEventHandler relation
 * @method     NagiosMainConfigurationQuery rightJoinNagiosCommandRelatedByGlobalHostEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByGlobalHostEventHandler relation
 * @method     NagiosMainConfigurationQuery innerJoinNagiosCommandRelatedByGlobalHostEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByGlobalHostEventHandler relation
 *
 * @method     NagiosMainConfiguration findOne(PropelPDO $con = null) Return the first NagiosMainConfiguration matching the query
 * @method     NagiosMainConfiguration findOneOrCreate(PropelPDO $con = null) Return the first NagiosMainConfiguration matching the query, or a new NagiosMainConfiguration object populated from the query conditions when no match is found
 *
 * @method     NagiosMainConfiguration findOneById(int $id) Return the first NagiosMainConfiguration filtered by the id column
 * @method     NagiosMainConfiguration findOneByConfigDir(string $config_dir) Return the first NagiosMainConfiguration filtered by the config_dir column
 * @method     NagiosMainConfiguration findOneByLogFile(string $log_file) Return the first NagiosMainConfiguration filtered by the log_file column
 * @method     NagiosMainConfiguration findOneByTempFile(string $temp_file) Return the first NagiosMainConfiguration filtered by the temp_file column
 * @method     NagiosMainConfiguration findOneByStatusFile(string $status_file) Return the first NagiosMainConfiguration filtered by the status_file column
 * @method     NagiosMainConfiguration findOneByStatusUpdateInterval(int $status_update_interval) Return the first NagiosMainConfiguration filtered by the status_update_interval column
 * @method     NagiosMainConfiguration findOneByNagiosUser(string $nagios_user) Return the first NagiosMainConfiguration filtered by the nagios_user column
 * @method     NagiosMainConfiguration findOneByNagiosGroup(string $nagios_group) Return the first NagiosMainConfiguration filtered by the nagios_group column
 * @method     NagiosMainConfiguration findOneByEnableNotifications(boolean $enable_notifications) Return the first NagiosMainConfiguration filtered by the enable_notifications column
 * @method     NagiosMainConfiguration findOneByExecuteServiceChecks(boolean $execute_service_checks) Return the first NagiosMainConfiguration filtered by the execute_service_checks column
 * @method     NagiosMainConfiguration findOneByAcceptPassiveServiceChecks(boolean $accept_passive_service_checks) Return the first NagiosMainConfiguration filtered by the accept_passive_service_checks column
 * @method     NagiosMainConfiguration findOneByEnableEventHandlers(boolean $enable_event_handlers) Return the first NagiosMainConfiguration filtered by the enable_event_handlers column
 * @method     NagiosMainConfiguration findOneByLogRotationMethod(string $log_rotation_method) Return the first NagiosMainConfiguration filtered by the log_rotation_method column
 * @method     NagiosMainConfiguration findOneByLogArchivePath(string $log_archive_path) Return the first NagiosMainConfiguration filtered by the log_archive_path column
 * @method     NagiosMainConfiguration findOneByCheckExternalCommands(boolean $check_external_commands) Return the first NagiosMainConfiguration filtered by the check_external_commands column
 * @method     NagiosMainConfiguration findOneByCommandCheckInterval(string $command_check_interval) Return the first NagiosMainConfiguration filtered by the command_check_interval column
 * @method     NagiosMainConfiguration findOneByCommandFile(string $command_file) Return the first NagiosMainConfiguration filtered by the command_file column
 * @method     NagiosMainConfiguration findOneByLockFile(string $lock_file) Return the first NagiosMainConfiguration filtered by the lock_file column
 * @method     NagiosMainConfiguration findOneByRetainStateInformation(boolean $retain_state_information) Return the first NagiosMainConfiguration filtered by the retain_state_information column
 * @method     NagiosMainConfiguration findOneByStateRetentionFile(string $state_retention_file) Return the first NagiosMainConfiguration filtered by the state_retention_file column
 * @method     NagiosMainConfiguration findOneByRetentionUpdateInterval(int $retention_update_interval) Return the first NagiosMainConfiguration filtered by the retention_update_interval column
 * @method     NagiosMainConfiguration findOneByUseRetainedProgramState(boolean $use_retained_program_state) Return the first NagiosMainConfiguration filtered by the use_retained_program_state column
 * @method     NagiosMainConfiguration findOneByUseSyslog(boolean $use_syslog) Return the first NagiosMainConfiguration filtered by the use_syslog column
 * @method     NagiosMainConfiguration findOneByLogNotifications(boolean $log_notifications) Return the first NagiosMainConfiguration filtered by the log_notifications column
 * @method     NagiosMainConfiguration findOneByLogServiceRetries(boolean $log_service_retries) Return the first NagiosMainConfiguration filtered by the log_service_retries column
 * @method     NagiosMainConfiguration findOneByLogHostRetries(boolean $log_host_retries) Return the first NagiosMainConfiguration filtered by the log_host_retries column
 * @method     NagiosMainConfiguration findOneByLogEventHandlers(boolean $log_event_handlers) Return the first NagiosMainConfiguration filtered by the log_event_handlers column
 * @method     NagiosMainConfiguration findOneByLogInitialStates(boolean $log_initial_states) Return the first NagiosMainConfiguration filtered by the log_initial_states column
 * @method     NagiosMainConfiguration findOneByLogExternalCommands(boolean $log_external_commands) Return the first NagiosMainConfiguration filtered by the log_external_commands column
 * @method     NagiosMainConfiguration findOneByLogPassiveChecks(boolean $log_passive_checks) Return the first NagiosMainConfiguration filtered by the log_passive_checks column
 * @method     NagiosMainConfiguration findOneByGlobalHostEventHandler(int $global_host_event_handler) Return the first NagiosMainConfiguration filtered by the global_host_event_handler column
 * @method     NagiosMainConfiguration findOneByGlobalServiceEventHandler(int $global_service_event_handler) Return the first NagiosMainConfiguration filtered by the global_service_event_handler column
 * @method     NagiosMainConfiguration findOneByExternalCommandBufferSlots(int $external_command_buffer_slots) Return the first NagiosMainConfiguration filtered by the external_command_buffer_slots column
 * @method     NagiosMainConfiguration findOneBySleepTime(double $sleep_time) Return the first NagiosMainConfiguration filtered by the sleep_time column
 * @method     NagiosMainConfiguration findOneByServiceInterleaveFactor(string $service_interleave_factor) Return the first NagiosMainConfiguration filtered by the service_interleave_factor column
 * @method     NagiosMainConfiguration findOneByMaxConcurrentChecks(int $max_concurrent_checks) Return the first NagiosMainConfiguration filtered by the max_concurrent_checks column
 * @method     NagiosMainConfiguration findOneByServiceReaperFrequency(int $service_reaper_frequency) Return the first NagiosMainConfiguration filtered by the service_reaper_frequency column
 * @method     NagiosMainConfiguration findOneByIntervalLength(int $interval_length) Return the first NagiosMainConfiguration filtered by the interval_length column
 * @method     NagiosMainConfiguration findOneByUseAggressiveHostChecking(boolean $use_aggressive_host_checking) Return the first NagiosMainConfiguration filtered by the use_aggressive_host_checking column
 * @method     NagiosMainConfiguration findOneByEnableFlapDetection(boolean $enable_flap_detection) Return the first NagiosMainConfiguration filtered by the enable_flap_detection column
 * @method     NagiosMainConfiguration findOneByLowServiceFlapThreshold(double $low_service_flap_threshold) Return the first NagiosMainConfiguration filtered by the low_service_flap_threshold column
 * @method     NagiosMainConfiguration findOneByHighServiceFlapThreshold(double $high_service_flap_threshold) Return the first NagiosMainConfiguration filtered by the high_service_flap_threshold column
 * @method     NagiosMainConfiguration findOneByLowHostFlapThreshold(double $low_host_flap_threshold) Return the first NagiosMainConfiguration filtered by the low_host_flap_threshold column
 * @method     NagiosMainConfiguration findOneByHighHostFlapThreshold(double $high_host_flap_threshold) Return the first NagiosMainConfiguration filtered by the high_host_flap_threshold column
 * @method     NagiosMainConfiguration findOneBySoftStateDependencies(boolean $soft_state_dependencies) Return the first NagiosMainConfiguration filtered by the soft_state_dependencies column
 * @method     NagiosMainConfiguration findOneByServiceCheckTimeout(int $service_check_timeout) Return the first NagiosMainConfiguration filtered by the service_check_timeout column
 * @method     NagiosMainConfiguration findOneByHostCheckTimeout(int $host_check_timeout) Return the first NagiosMainConfiguration filtered by the host_check_timeout column
 * @method     NagiosMainConfiguration findOneByEventHandlerTimeout(int $event_handler_timeout) Return the first NagiosMainConfiguration filtered by the event_handler_timeout column
 * @method     NagiosMainConfiguration findOneByNotificationTimeout(int $notification_timeout) Return the first NagiosMainConfiguration filtered by the notification_timeout column
 * @method     NagiosMainConfiguration findOneByOcspTimeout(int $ocsp_timeout) Return the first NagiosMainConfiguration filtered by the ocsp_timeout column
 * @method     NagiosMainConfiguration findOneByOhcpTimeout(int $ohcp_timeout) Return the first NagiosMainConfiguration filtered by the ohcp_timeout column
 * @method     NagiosMainConfiguration findOneByPerfdataTimeout(int $perfdata_timeout) Return the first NagiosMainConfiguration filtered by the perfdata_timeout column
 * @method     NagiosMainConfiguration findOneByObsessOverServices(boolean $obsess_over_services) Return the first NagiosMainConfiguration filtered by the obsess_over_services column
 * @method     NagiosMainConfiguration findOneByOcspCommand(int $ocsp_command) Return the first NagiosMainConfiguration filtered by the ocsp_command column
 * @method     NagiosMainConfiguration findOneByProcessPerformanceData(boolean $process_performance_data) Return the first NagiosMainConfiguration filtered by the process_performance_data column
 * @method     NagiosMainConfiguration findOneByCheckForOrphanedServices(boolean $check_for_orphaned_services) Return the first NagiosMainConfiguration filtered by the check_for_orphaned_services column
 * @method     NagiosMainConfiguration findOneByCheckServiceFreshness(boolean $check_service_freshness) Return the first NagiosMainConfiguration filtered by the check_service_freshness column
 * @method     NagiosMainConfiguration findOneByFreshnessCheckInterval(int $freshness_check_interval) Return the first NagiosMainConfiguration filtered by the freshness_check_interval column
 * @method     NagiosMainConfiguration findOneByDateFormat(string $date_format) Return the first NagiosMainConfiguration filtered by the date_format column
 * @method     NagiosMainConfiguration findOneByIllegalObjectNameChars(string $illegal_object_name_chars) Return the first NagiosMainConfiguration filtered by the illegal_object_name_chars column
 * @method     NagiosMainConfiguration findOneByIllegalMacroOutputChars(string $illegal_macro_output_chars) Return the first NagiosMainConfiguration filtered by the illegal_macro_output_chars column
 * @method     NagiosMainConfiguration findOneByAdminEmail(string $admin_email) Return the first NagiosMainConfiguration filtered by the admin_email column
 * @method     NagiosMainConfiguration findOneByAdminPager(string $admin_pager) Return the first NagiosMainConfiguration filtered by the admin_pager column
 * @method     NagiosMainConfiguration findOneByExecuteHostChecks(boolean $execute_host_checks) Return the first NagiosMainConfiguration filtered by the execute_host_checks column
 * @method     NagiosMainConfiguration findOneByServiceInterCheckDelayMethod(string $service_inter_check_delay_method) Return the first NagiosMainConfiguration filtered by the service_inter_check_delay_method column
 * @method     NagiosMainConfiguration findOneByUseRetainedSchedulingInfo(boolean $use_retained_scheduling_info) Return the first NagiosMainConfiguration filtered by the use_retained_scheduling_info column
 * @method     NagiosMainConfiguration findOneByAcceptPassiveHostChecks(boolean $accept_passive_host_checks) Return the first NagiosMainConfiguration filtered by the accept_passive_host_checks column
 * @method     NagiosMainConfiguration findOneByMaxServiceCheckSpread(int $max_service_check_spread) Return the first NagiosMainConfiguration filtered by the max_service_check_spread column
 * @method     NagiosMainConfiguration findOneByHostInterCheckDelayMethod(string $host_inter_check_delay_method) Return the first NagiosMainConfiguration filtered by the host_inter_check_delay_method column
 * @method     NagiosMainConfiguration findOneByMaxHostCheckSpread(int $max_host_check_spread) Return the first NagiosMainConfiguration filtered by the max_host_check_spread column
 * @method     NagiosMainConfiguration findOneByAutoRescheduleChecks(boolean $auto_reschedule_checks) Return the first NagiosMainConfiguration filtered by the auto_reschedule_checks column
 * @method     NagiosMainConfiguration findOneByAutoReschedulingInterval(int $auto_rescheduling_interval) Return the first NagiosMainConfiguration filtered by the auto_rescheduling_interval column
 * @method     NagiosMainConfiguration findOneByAutoReschedulingWindow(int $auto_rescheduling_window) Return the first NagiosMainConfiguration filtered by the auto_rescheduling_window column
 * @method     NagiosMainConfiguration findOneByOchpTimeout(int $ochp_timeout) Return the first NagiosMainConfiguration filtered by the ochp_timeout column
 * @method     NagiosMainConfiguration findOneByObsessOverHosts(boolean $obsess_over_hosts) Return the first NagiosMainConfiguration filtered by the obsess_over_hosts column
 * @method     NagiosMainConfiguration findOneByOchpCommand(int $ochp_command) Return the first NagiosMainConfiguration filtered by the ochp_command column
 * @method     NagiosMainConfiguration findOneByCheckHostFreshness(boolean $check_host_freshness) Return the first NagiosMainConfiguration filtered by the check_host_freshness column
 * @method     NagiosMainConfiguration findOneByHostFreshnessCheckInterval(int $host_freshness_check_interval) Return the first NagiosMainConfiguration filtered by the host_freshness_check_interval column
 * @method     NagiosMainConfiguration findOneByServiceFreshnessCheckInterval(int $service_freshness_check_interval) Return the first NagiosMainConfiguration filtered by the service_freshness_check_interval column
 * @method     NagiosMainConfiguration findOneByUseRegexpMatching(boolean $use_regexp_matching) Return the first NagiosMainConfiguration filtered by the use_regexp_matching column
 * @method     NagiosMainConfiguration findOneByUseTrueRegexpMatching(boolean $use_true_regexp_matching) Return the first NagiosMainConfiguration filtered by the use_true_regexp_matching column
 * @method     NagiosMainConfiguration findOneByEventBrokerOptions(string $event_broker_options) Return the first NagiosMainConfiguration filtered by the event_broker_options column
 * @method     NagiosMainConfiguration findOneByDaemonDumpsCore(boolean $daemon_dumps_core) Return the first NagiosMainConfiguration filtered by the daemon_dumps_core column
 * @method     NagiosMainConfiguration findOneByHostPerfdataCommand(int $host_perfdata_command) Return the first NagiosMainConfiguration filtered by the host_perfdata_command column
 * @method     NagiosMainConfiguration findOneByServicePerfdataCommand(int $service_perfdata_command) Return the first NagiosMainConfiguration filtered by the service_perfdata_command column
 * @method     NagiosMainConfiguration findOneByHostPerfdataFile(string $host_perfdata_file) Return the first NagiosMainConfiguration filtered by the host_perfdata_file column
 * @method     NagiosMainConfiguration findOneByHostPerfdataFileTemplate(string $host_perfdata_file_template) Return the first NagiosMainConfiguration filtered by the host_perfdata_file_template column
 * @method     NagiosMainConfiguration findOneByServicePerfdataFile(string $service_perfdata_file) Return the first NagiosMainConfiguration filtered by the service_perfdata_file column
 * @method     NagiosMainConfiguration findOneByServicePerfdataFileTemplate(string $service_perfdata_file_template) Return the first NagiosMainConfiguration filtered by the service_perfdata_file_template column
 * @method     NagiosMainConfiguration findOneByHostPerfdataFileMode(string $host_perfdata_file_mode) Return the first NagiosMainConfiguration filtered by the host_perfdata_file_mode column
 * @method     NagiosMainConfiguration findOneByServicePerfdataFileMode(string $service_perfdata_file_mode) Return the first NagiosMainConfiguration filtered by the service_perfdata_file_mode column
 * @method     NagiosMainConfiguration findOneByHostPerfdataFileProcessingCommand(int $host_perfdata_file_processing_command) Return the first NagiosMainConfiguration filtered by the host_perfdata_file_processing_command column
 * @method     NagiosMainConfiguration findOneByServicePerfdataFileProcessingCommand(int $service_perfdata_file_processing_command) Return the first NagiosMainConfiguration filtered by the service_perfdata_file_processing_command column
 * @method     NagiosMainConfiguration findOneByHostPerfdataFileProcessingInterval(int $host_perfdata_file_processing_interval) Return the first NagiosMainConfiguration filtered by the host_perfdata_file_processing_interval column
 * @method     NagiosMainConfiguration findOneByServicePerfdataFileProcessingInterval(int $service_perfdata_file_processing_interval) Return the first NagiosMainConfiguration filtered by the service_perfdata_file_processing_interval column
 * @method     NagiosMainConfiguration findOneByObjectCacheFile(string $object_cache_file) Return the first NagiosMainConfiguration filtered by the object_cache_file column
 * @method     NagiosMainConfiguration findOneByPrecachedObjectFile(string $precached_object_file) Return the first NagiosMainConfiguration filtered by the precached_object_file column
 * @method     NagiosMainConfiguration findOneByRetainedHostAttributeMask(int $retained_host_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_host_attribute_mask column
 * @method     NagiosMainConfiguration findOneByRetainedServiceAttributeMask(int $retained_service_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_service_attribute_mask column
 * @method     NagiosMainConfiguration findOneByRetainedProcessHostAttributeMask(int $retained_process_host_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_process_host_attribute_mask column
 * @method     NagiosMainConfiguration findOneByRetainedProcessServiceAttributeMask(int $retained_process_service_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_process_service_attribute_mask column
 * @method     NagiosMainConfiguration findOneByRetainedContactHostAttributeMask(int $retained_contact_host_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_contact_host_attribute_mask column
 * @method     NagiosMainConfiguration findOneByRetainedContactServiceAttributeMask(int $retained_contact_service_attribute_mask) Return the first NagiosMainConfiguration filtered by the retained_contact_service_attribute_mask column
 * @method     NagiosMainConfiguration findOneByCheckResultReaperFrequency(int $check_result_reaper_frequency) Return the first NagiosMainConfiguration filtered by the check_result_reaper_frequency column
 * @method     NagiosMainConfiguration findOneByMaxCheckResultReaperTime(int $max_check_result_reaper_time) Return the first NagiosMainConfiguration filtered by the max_check_result_reaper_time column
 * @method     NagiosMainConfiguration findOneByCheckResultPath(string $check_result_path) Return the first NagiosMainConfiguration filtered by the check_result_path column
 * @method     NagiosMainConfiguration findOneByMaxCheckResultFileAge(int $max_check_result_file_age) Return the first NagiosMainConfiguration filtered by the max_check_result_file_age column
 * @method     NagiosMainConfiguration findOneByTranslatePassiveHostChecks(boolean $translate_passive_host_checks) Return the first NagiosMainConfiguration filtered by the translate_passive_host_checks column
 * @method     NagiosMainConfiguration findOneByPassiveHostChecksAreSoft(boolean $passive_host_checks_are_soft) Return the first NagiosMainConfiguration filtered by the passive_host_checks_are_soft column
 * @method     NagiosMainConfiguration findOneByEnablePredictiveHostDependencyChecks(boolean $enable_predictive_host_dependency_checks) Return the first NagiosMainConfiguration filtered by the enable_predictive_host_dependency_checks column
 * @method     NagiosMainConfiguration findOneByEnablePredictiveServiceDependencyChecks(boolean $enable_predictive_service_dependency_checks) Return the first NagiosMainConfiguration filtered by the enable_predictive_service_dependency_checks column
 * @method     NagiosMainConfiguration findOneByCachedHostCheckHorizon(int $cached_host_check_horizon) Return the first NagiosMainConfiguration filtered by the cached_host_check_horizon column
 * @method     NagiosMainConfiguration findOneByCachedServiceCheckHorizon(int $cached_service_check_horizon) Return the first NagiosMainConfiguration filtered by the cached_service_check_horizon column
 * @method     NagiosMainConfiguration findOneByUseLargeInstallationTweaks(boolean $use_large_installation_tweaks) Return the first NagiosMainConfiguration filtered by the use_large_installation_tweaks column
 * @method     NagiosMainConfiguration findOneByFreeChildProcessMemory(boolean $free_child_process_memory) Return the first NagiosMainConfiguration filtered by the free_child_process_memory column
 * @method     NagiosMainConfiguration findOneByChildProcessesForkTwice(boolean $child_processes_fork_twice) Return the first NagiosMainConfiguration filtered by the child_processes_fork_twice column
 * @method     NagiosMainConfiguration findOneByEnableEnvironmentMacros(boolean $enable_environment_macros) Return the first NagiosMainConfiguration filtered by the enable_environment_macros column
 * @method     NagiosMainConfiguration findOneByAdditionalFreshnessLatency(int $additional_freshness_latency) Return the first NagiosMainConfiguration filtered by the additional_freshness_latency column
 * @method     NagiosMainConfiguration findOneByEnableEmbeddedPerl(boolean $enable_embedded_perl) Return the first NagiosMainConfiguration filtered by the enable_embedded_perl column
 * @method     NagiosMainConfiguration findOneByUseEmbeddedPerlImplicitly(boolean $use_embedded_perl_implicitly) Return the first NagiosMainConfiguration filtered by the use_embedded_perl_implicitly column
 * @method     NagiosMainConfiguration findOneByP1File(string $p1_file) Return the first NagiosMainConfiguration filtered by the p1_file column
 * @method     NagiosMainConfiguration findOneByUseTimezone(string $use_timezone) Return the first NagiosMainConfiguration filtered by the use_timezone column
 * @method     NagiosMainConfiguration findOneByDebugFile(string $debug_file) Return the first NagiosMainConfiguration filtered by the debug_file column
 * @method     NagiosMainConfiguration findOneByDebugLevel(int $debug_level) Return the first NagiosMainConfiguration filtered by the debug_level column
 * @method     NagiosMainConfiguration findOneByDebugVerbosity(int $debug_verbosity) Return the first NagiosMainConfiguration filtered by the debug_verbosity column
 * @method     NagiosMainConfiguration findOneByMaxDebugFileSize(int $max_debug_file_size) Return the first NagiosMainConfiguration filtered by the max_debug_file_size column
 * @method     NagiosMainConfiguration findOneByTempPath(string $temp_path) Return the first NagiosMainConfiguration filtered by the temp_path column
 * @method     NagiosMainConfiguration findOneByCheckForUpdates(boolean $check_for_updates) Return the first NagiosMainConfiguration filtered by the check_for_updates column
 * @method     NagiosMainConfiguration findOneByCheckForOrphanedHosts(boolean $check_for_orphaned_hosts) Return the first NagiosMainConfiguration filtered by the check_for_orphaned_hosts column
 * @method     NagiosMainConfiguration findOneByBareUpdateCheck(boolean $bare_update_check) Return the first NagiosMainConfiguration filtered by the bare_update_check column
 * @method     NagiosMainConfiguration findOneByLogCurrentStates(boolean $log_current_states) Return the first NagiosMainConfiguration filtered by the log_current_states column
 * @method     NagiosMainConfiguration findOneByCheckWorkers(int $check_workers) Return the first NagiosMainConfiguration filtered by the check_workers column
 * @method     NagiosMainConfiguration findOneByQuerySocket(string $query_socket) Return the first NagiosMainConfiguration filtered by the query_socket column
 *
 * @method     array findById(int $id) Return NagiosMainConfiguration objects filtered by the id column
 * @method     array findByConfigDir(string $config_dir) Return NagiosMainConfiguration objects filtered by the config_dir column
 * @method     array findByLogFile(string $log_file) Return NagiosMainConfiguration objects filtered by the log_file column
 * @method     array findByTempFile(string $temp_file) Return NagiosMainConfiguration objects filtered by the temp_file column
 * @method     array findByStatusFile(string $status_file) Return NagiosMainConfiguration objects filtered by the status_file column
 * @method     array findByStatusUpdateInterval(int $status_update_interval) Return NagiosMainConfiguration objects filtered by the status_update_interval column
 * @method     array findByNagiosUser(string $nagios_user) Return NagiosMainConfiguration objects filtered by the nagios_user column
 * @method     array findByNagiosGroup(string $nagios_group) Return NagiosMainConfiguration objects filtered by the nagios_group column
 * @method     array findByEnableNotifications(boolean $enable_notifications) Return NagiosMainConfiguration objects filtered by the enable_notifications column
 * @method     array findByExecuteServiceChecks(boolean $execute_service_checks) Return NagiosMainConfiguration objects filtered by the execute_service_checks column
 * @method     array findByAcceptPassiveServiceChecks(boolean $accept_passive_service_checks) Return NagiosMainConfiguration objects filtered by the accept_passive_service_checks column
 * @method     array findByEnableEventHandlers(boolean $enable_event_handlers) Return NagiosMainConfiguration objects filtered by the enable_event_handlers column
 * @method     array findByLogRotationMethod(string $log_rotation_method) Return NagiosMainConfiguration objects filtered by the log_rotation_method column
 * @method     array findByLogArchivePath(string $log_archive_path) Return NagiosMainConfiguration objects filtered by the log_archive_path column
 * @method     array findByCheckExternalCommands(boolean $check_external_commands) Return NagiosMainConfiguration objects filtered by the check_external_commands column
 * @method     array findByCommandCheckInterval(string $command_check_interval) Return NagiosMainConfiguration objects filtered by the command_check_interval column
 * @method     array findByCommandFile(string $command_file) Return NagiosMainConfiguration objects filtered by the command_file column
 * @method     array findByLockFile(string $lock_file) Return NagiosMainConfiguration objects filtered by the lock_file column
 * @method     array findByRetainStateInformation(boolean $retain_state_information) Return NagiosMainConfiguration objects filtered by the retain_state_information column
 * @method     array findByStateRetentionFile(string $state_retention_file) Return NagiosMainConfiguration objects filtered by the state_retention_file column
 * @method     array findByRetentionUpdateInterval(int $retention_update_interval) Return NagiosMainConfiguration objects filtered by the retention_update_interval column
 * @method     array findByUseRetainedProgramState(boolean $use_retained_program_state) Return NagiosMainConfiguration objects filtered by the use_retained_program_state column
 * @method     array findByUseSyslog(boolean $use_syslog) Return NagiosMainConfiguration objects filtered by the use_syslog column
 * @method     array findByLogNotifications(boolean $log_notifications) Return NagiosMainConfiguration objects filtered by the log_notifications column
 * @method     array findByLogServiceRetries(boolean $log_service_retries) Return NagiosMainConfiguration objects filtered by the log_service_retries column
 * @method     array findByLogHostRetries(boolean $log_host_retries) Return NagiosMainConfiguration objects filtered by the log_host_retries column
 * @method     array findByLogEventHandlers(boolean $log_event_handlers) Return NagiosMainConfiguration objects filtered by the log_event_handlers column
 * @method     array findByLogInitialStates(boolean $log_initial_states) Return NagiosMainConfiguration objects filtered by the log_initial_states column
 * @method     array findByLogExternalCommands(boolean $log_external_commands) Return NagiosMainConfiguration objects filtered by the log_external_commands column
 * @method     array findByLogPassiveChecks(boolean $log_passive_checks) Return NagiosMainConfiguration objects filtered by the log_passive_checks column
 * @method     array findByGlobalHostEventHandler(int $global_host_event_handler) Return NagiosMainConfiguration objects filtered by the global_host_event_handler column
 * @method     array findByGlobalServiceEventHandler(int $global_service_event_handler) Return NagiosMainConfiguration objects filtered by the global_service_event_handler column
 * @method     array findByExternalCommandBufferSlots(int $external_command_buffer_slots) Return NagiosMainConfiguration objects filtered by the external_command_buffer_slots column
 * @method     array findBySleepTime(double $sleep_time) Return NagiosMainConfiguration objects filtered by the sleep_time column
 * @method     array findByServiceInterleaveFactor(string $service_interleave_factor) Return NagiosMainConfiguration objects filtered by the service_interleave_factor column
 * @method     array findByMaxConcurrentChecks(int $max_concurrent_checks) Return NagiosMainConfiguration objects filtered by the max_concurrent_checks column
 * @method     array findByServiceReaperFrequency(int $service_reaper_frequency) Return NagiosMainConfiguration objects filtered by the service_reaper_frequency column
 * @method     array findByIntervalLength(int $interval_length) Return NagiosMainConfiguration objects filtered by the interval_length column
 * @method     array findByUseAggressiveHostChecking(boolean $use_aggressive_host_checking) Return NagiosMainConfiguration objects filtered by the use_aggressive_host_checking column
 * @method     array findByEnableFlapDetection(boolean $enable_flap_detection) Return NagiosMainConfiguration objects filtered by the enable_flap_detection column
 * @method     array findByLowServiceFlapThreshold(double $low_service_flap_threshold) Return NagiosMainConfiguration objects filtered by the low_service_flap_threshold column
 * @method     array findByHighServiceFlapThreshold(double $high_service_flap_threshold) Return NagiosMainConfiguration objects filtered by the high_service_flap_threshold column
 * @method     array findByLowHostFlapThreshold(double $low_host_flap_threshold) Return NagiosMainConfiguration objects filtered by the low_host_flap_threshold column
 * @method     array findByHighHostFlapThreshold(double $high_host_flap_threshold) Return NagiosMainConfiguration objects filtered by the high_host_flap_threshold column
 * @method     array findBySoftStateDependencies(boolean $soft_state_dependencies) Return NagiosMainConfiguration objects filtered by the soft_state_dependencies column
 * @method     array findByServiceCheckTimeout(int $service_check_timeout) Return NagiosMainConfiguration objects filtered by the service_check_timeout column
 * @method     array findByHostCheckTimeout(int $host_check_timeout) Return NagiosMainConfiguration objects filtered by the host_check_timeout column
 * @method     array findByEventHandlerTimeout(int $event_handler_timeout) Return NagiosMainConfiguration objects filtered by the event_handler_timeout column
 * @method     array findByNotificationTimeout(int $notification_timeout) Return NagiosMainConfiguration objects filtered by the notification_timeout column
 * @method     array findByOcspTimeout(int $ocsp_timeout) Return NagiosMainConfiguration objects filtered by the ocsp_timeout column
 * @method     array findByOhcpTimeout(int $ohcp_timeout) Return NagiosMainConfiguration objects filtered by the ohcp_timeout column
 * @method     array findByPerfdataTimeout(int $perfdata_timeout) Return NagiosMainConfiguration objects filtered by the perfdata_timeout column
 * @method     array findByObsessOverServices(boolean $obsess_over_services) Return NagiosMainConfiguration objects filtered by the obsess_over_services column
 * @method     array findByOcspCommand(int $ocsp_command) Return NagiosMainConfiguration objects filtered by the ocsp_command column
 * @method     array findByProcessPerformanceData(boolean $process_performance_data) Return NagiosMainConfiguration objects filtered by the process_performance_data column
 * @method     array findByCheckForOrphanedServices(boolean $check_for_orphaned_services) Return NagiosMainConfiguration objects filtered by the check_for_orphaned_services column
 * @method     array findByCheckServiceFreshness(boolean $check_service_freshness) Return NagiosMainConfiguration objects filtered by the check_service_freshness column
 * @method     array findByFreshnessCheckInterval(int $freshness_check_interval) Return NagiosMainConfiguration objects filtered by the freshness_check_interval column
 * @method     array findByDateFormat(string $date_format) Return NagiosMainConfiguration objects filtered by the date_format column
 * @method     array findByIllegalObjectNameChars(string $illegal_object_name_chars) Return NagiosMainConfiguration objects filtered by the illegal_object_name_chars column
 * @method     array findByIllegalMacroOutputChars(string $illegal_macro_output_chars) Return NagiosMainConfiguration objects filtered by the illegal_macro_output_chars column
 * @method     array findByAdminEmail(string $admin_email) Return NagiosMainConfiguration objects filtered by the admin_email column
 * @method     array findByAdminPager(string $admin_pager) Return NagiosMainConfiguration objects filtered by the admin_pager column
 * @method     array findByExecuteHostChecks(boolean $execute_host_checks) Return NagiosMainConfiguration objects filtered by the execute_host_checks column
 * @method     array findByServiceInterCheckDelayMethod(string $service_inter_check_delay_method) Return NagiosMainConfiguration objects filtered by the service_inter_check_delay_method column
 * @method     array findByUseRetainedSchedulingInfo(boolean $use_retained_scheduling_info) Return NagiosMainConfiguration objects filtered by the use_retained_scheduling_info column
 * @method     array findByAcceptPassiveHostChecks(boolean $accept_passive_host_checks) Return NagiosMainConfiguration objects filtered by the accept_passive_host_checks column
 * @method     array findByMaxServiceCheckSpread(int $max_service_check_spread) Return NagiosMainConfiguration objects filtered by the max_service_check_spread column
 * @method     array findByHostInterCheckDelayMethod(string $host_inter_check_delay_method) Return NagiosMainConfiguration objects filtered by the host_inter_check_delay_method column
 * @method     array findByMaxHostCheckSpread(int $max_host_check_spread) Return NagiosMainConfiguration objects filtered by the max_host_check_spread column
 * @method     array findByAutoRescheduleChecks(boolean $auto_reschedule_checks) Return NagiosMainConfiguration objects filtered by the auto_reschedule_checks column
 * @method     array findByAutoReschedulingInterval(int $auto_rescheduling_interval) Return NagiosMainConfiguration objects filtered by the auto_rescheduling_interval column
 * @method     array findByAutoReschedulingWindow(int $auto_rescheduling_window) Return NagiosMainConfiguration objects filtered by the auto_rescheduling_window column
 * @method     array findByOchpTimeout(int $ochp_timeout) Return NagiosMainConfiguration objects filtered by the ochp_timeout column
 * @method     array findByObsessOverHosts(boolean $obsess_over_hosts) Return NagiosMainConfiguration objects filtered by the obsess_over_hosts column
 * @method     array findByOchpCommand(int $ochp_command) Return NagiosMainConfiguration objects filtered by the ochp_command column
 * @method     array findByCheckHostFreshness(boolean $check_host_freshness) Return NagiosMainConfiguration objects filtered by the check_host_freshness column
 * @method     array findByHostFreshnessCheckInterval(int $host_freshness_check_interval) Return NagiosMainConfiguration objects filtered by the host_freshness_check_interval column
 * @method     array findByServiceFreshnessCheckInterval(int $service_freshness_check_interval) Return NagiosMainConfiguration objects filtered by the service_freshness_check_interval column
 * @method     array findByUseRegexpMatching(boolean $use_regexp_matching) Return NagiosMainConfiguration objects filtered by the use_regexp_matching column
 * @method     array findByUseTrueRegexpMatching(boolean $use_true_regexp_matching) Return NagiosMainConfiguration objects filtered by the use_true_regexp_matching column
 * @method     array findByEventBrokerOptions(string $event_broker_options) Return NagiosMainConfiguration objects filtered by the event_broker_options column
 * @method     array findByDaemonDumpsCore(boolean $daemon_dumps_core) Return NagiosMainConfiguration objects filtered by the daemon_dumps_core column
 * @method     array findByHostPerfdataCommand(int $host_perfdata_command) Return NagiosMainConfiguration objects filtered by the host_perfdata_command column
 * @method     array findByServicePerfdataCommand(int $service_perfdata_command) Return NagiosMainConfiguration objects filtered by the service_perfdata_command column
 * @method     array findByHostPerfdataFile(string $host_perfdata_file) Return NagiosMainConfiguration objects filtered by the host_perfdata_file column
 * @method     array findByHostPerfdataFileTemplate(string $host_perfdata_file_template) Return NagiosMainConfiguration objects filtered by the host_perfdata_file_template column
 * @method     array findByServicePerfdataFile(string $service_perfdata_file) Return NagiosMainConfiguration objects filtered by the service_perfdata_file column
 * @method     array findByServicePerfdataFileTemplate(string $service_perfdata_file_template) Return NagiosMainConfiguration objects filtered by the service_perfdata_file_template column
 * @method     array findByHostPerfdataFileMode(string $host_perfdata_file_mode) Return NagiosMainConfiguration objects filtered by the host_perfdata_file_mode column
 * @method     array findByServicePerfdataFileMode(string $service_perfdata_file_mode) Return NagiosMainConfiguration objects filtered by the service_perfdata_file_mode column
 * @method     array findByHostPerfdataFileProcessingCommand(int $host_perfdata_file_processing_command) Return NagiosMainConfiguration objects filtered by the host_perfdata_file_processing_command column
 * @method     array findByServicePerfdataFileProcessingCommand(int $service_perfdata_file_processing_command) Return NagiosMainConfiguration objects filtered by the service_perfdata_file_processing_command column
 * @method     array findByHostPerfdataFileProcessingInterval(int $host_perfdata_file_processing_interval) Return NagiosMainConfiguration objects filtered by the host_perfdata_file_processing_interval column
 * @method     array findByServicePerfdataFileProcessingInterval(int $service_perfdata_file_processing_interval) Return NagiosMainConfiguration objects filtered by the service_perfdata_file_processing_interval column
 * @method     array findByObjectCacheFile(string $object_cache_file) Return NagiosMainConfiguration objects filtered by the object_cache_file column
 * @method     array findByPrecachedObjectFile(string $precached_object_file) Return NagiosMainConfiguration objects filtered by the precached_object_file column
 * @method     array findByRetainedHostAttributeMask(int $retained_host_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_host_attribute_mask column
 * @method     array findByRetainedServiceAttributeMask(int $retained_service_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_service_attribute_mask column
 * @method     array findByRetainedProcessHostAttributeMask(int $retained_process_host_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_process_host_attribute_mask column
 * @method     array findByRetainedProcessServiceAttributeMask(int $retained_process_service_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_process_service_attribute_mask column
 * @method     array findByRetainedContactHostAttributeMask(int $retained_contact_host_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_contact_host_attribute_mask column
 * @method     array findByRetainedContactServiceAttributeMask(int $retained_contact_service_attribute_mask) Return NagiosMainConfiguration objects filtered by the retained_contact_service_attribute_mask column
 * @method     array findByCheckResultReaperFrequency(int $check_result_reaper_frequency) Return NagiosMainConfiguration objects filtered by the check_result_reaper_frequency column
 * @method     array findByMaxCheckResultReaperTime(int $max_check_result_reaper_time) Return NagiosMainConfiguration objects filtered by the max_check_result_reaper_time column
 * @method     array findByCheckResultPath(string $check_result_path) Return NagiosMainConfiguration objects filtered by the check_result_path column
 * @method     array findByMaxCheckResultFileAge(int $max_check_result_file_age) Return NagiosMainConfiguration objects filtered by the max_check_result_file_age column
 * @method     array findByTranslatePassiveHostChecks(boolean $translate_passive_host_checks) Return NagiosMainConfiguration objects filtered by the translate_passive_host_checks column
 * @method     array findByPassiveHostChecksAreSoft(boolean $passive_host_checks_are_soft) Return NagiosMainConfiguration objects filtered by the passive_host_checks_are_soft column
 * @method     array findByEnablePredictiveHostDependencyChecks(boolean $enable_predictive_host_dependency_checks) Return NagiosMainConfiguration objects filtered by the enable_predictive_host_dependency_checks column
 * @method     array findByEnablePredictiveServiceDependencyChecks(boolean $enable_predictive_service_dependency_checks) Return NagiosMainConfiguration objects filtered by the enable_predictive_service_dependency_checks column
 * @method     array findByCachedHostCheckHorizon(int $cached_host_check_horizon) Return NagiosMainConfiguration objects filtered by the cached_host_check_horizon column
 * @method     array findByCachedServiceCheckHorizon(int $cached_service_check_horizon) Return NagiosMainConfiguration objects filtered by the cached_service_check_horizon column
 * @method     array findByUseLargeInstallationTweaks(boolean $use_large_installation_tweaks) Return NagiosMainConfiguration objects filtered by the use_large_installation_tweaks column
 * @method     array findByFreeChildProcessMemory(boolean $free_child_process_memory) Return NagiosMainConfiguration objects filtered by the free_child_process_memory column
 * @method     array findByChildProcessesForkTwice(boolean $child_processes_fork_twice) Return NagiosMainConfiguration objects filtered by the child_processes_fork_twice column
 * @method     array findByEnableEnvironmentMacros(boolean $enable_environment_macros) Return NagiosMainConfiguration objects filtered by the enable_environment_macros column
 * @method     array findByAdditionalFreshnessLatency(int $additional_freshness_latency) Return NagiosMainConfiguration objects filtered by the additional_freshness_latency column
 * @method     array findByEnableEmbeddedPerl(boolean $enable_embedded_perl) Return NagiosMainConfiguration objects filtered by the enable_embedded_perl column
 * @method     array findByUseEmbeddedPerlImplicitly(boolean $use_embedded_perl_implicitly) Return NagiosMainConfiguration objects filtered by the use_embedded_perl_implicitly column
 * @method     array findByP1File(string $p1_file) Return NagiosMainConfiguration objects filtered by the p1_file column
 * @method     array findByUseTimezone(string $use_timezone) Return NagiosMainConfiguration objects filtered by the use_timezone column
 * @method     array findByDebugFile(string $debug_file) Return NagiosMainConfiguration objects filtered by the debug_file column
 * @method     array findByDebugLevel(int $debug_level) Return NagiosMainConfiguration objects filtered by the debug_level column
 * @method     array findByDebugVerbosity(int $debug_verbosity) Return NagiosMainConfiguration objects filtered by the debug_verbosity column
 * @method     array findByMaxDebugFileSize(int $max_debug_file_size) Return NagiosMainConfiguration objects filtered by the max_debug_file_size column
 * @method     array findByTempPath(string $temp_path) Return NagiosMainConfiguration objects filtered by the temp_path column
 * @method     array findByCheckForUpdates(boolean $check_for_updates) Return NagiosMainConfiguration objects filtered by the check_for_updates column
 * @method     array findByCheckForOrphanedHosts(boolean $check_for_orphaned_hosts) Return NagiosMainConfiguration objects filtered by the check_for_orphaned_hosts column
 * @method     array findByBareUpdateCheck(boolean $bare_update_check) Return NagiosMainConfiguration objects filtered by the bare_update_check column
 * @method     array findByLogCurrentStates(boolean $log_current_states) Return NagiosMainConfiguration objects filtered by the log_current_states column
 * @method     array findByCheckWorkers(int $check_workers) Return NagiosMainConfiguration objects filtered by the check_workers column
 * @method     array findByQuerySocket(string $query_socket) Return NagiosMainConfiguration objects filtered by the query_socket column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosMainConfigurationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosMainConfigurationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosMainConfiguration', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosMainConfigurationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosMainConfigurationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosMainConfigurationQuery) {
			return $criteria;
		}
		$query = new NagiosMainConfigurationQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    NagiosMainConfiguration|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosMainConfigurationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the config_dir column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByConfigDir('fooValue');   // WHERE config_dir = 'fooValue'
	 * $query->filterByConfigDir('%fooValue%'); // WHERE config_dir LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $configDir The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByConfigDir($configDir = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($configDir)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $configDir)) {
				$configDir = str_replace('*', '%', $configDir);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CONFIG_DIR, $configDir, $comparison);
	}

	/**
	 * Filter the query on the log_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogFile('fooValue');   // WHERE log_file = 'fooValue'
	 * $query->filterByLogFile('%fooValue%'); // WHERE log_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $logFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogFile($logFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($logFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $logFile)) {
				$logFile = str_replace('*', '%', $logFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_FILE, $logFile, $comparison);
	}

	/**
	 * Filter the query on the temp_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTempFile('fooValue');   // WHERE temp_file = 'fooValue'
	 * $query->filterByTempFile('%fooValue%'); // WHERE temp_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tempFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByTempFile($tempFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tempFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tempFile)) {
				$tempFile = str_replace('*', '%', $tempFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::TEMP_FILE, $tempFile, $comparison);
	}

	/**
	 * Filter the query on the status_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusFile('fooValue');   // WHERE status_file = 'fooValue'
	 * $query->filterByStatusFile('%fooValue%'); // WHERE status_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $statusFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByStatusFile($statusFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statusFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statusFile)) {
				$statusFile = str_replace('*', '%', $statusFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::STATUS_FILE, $statusFile, $comparison);
	}

	/**
	 * Filter the query on the status_update_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusUpdateInterval(1234); // WHERE status_update_interval = 1234
	 * $query->filterByStatusUpdateInterval(array(12, 34)); // WHERE status_update_interval IN (12, 34)
	 * $query->filterByStatusUpdateInterval(array('min' => 12)); // WHERE status_update_interval > 12
	 * </code>
	 *
	 * @param     mixed $statusUpdateInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByStatusUpdateInterval($statusUpdateInterval = null, $comparison = null)
	{
		if (is_array($statusUpdateInterval)) {
			$useMinMax = false;
			if (isset($statusUpdateInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL, $statusUpdateInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($statusUpdateInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL, $statusUpdateInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL, $statusUpdateInterval, $comparison);
	}

	/**
	 * Filter the query on the nagios_user column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNagiosUser('fooValue');   // WHERE nagios_user = 'fooValue'
	 * $query->filterByNagiosUser('%fooValue%'); // WHERE nagios_user LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nagiosUser The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosUser($nagiosUser = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nagiosUser)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nagiosUser)) {
				$nagiosUser = str_replace('*', '%', $nagiosUser);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::NAGIOS_USER, $nagiosUser, $comparison);
	}

	/**
	 * Filter the query on the nagios_group column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNagiosGroup('fooValue');   // WHERE nagios_group = 'fooValue'
	 * $query->filterByNagiosGroup('%fooValue%'); // WHERE nagios_group LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nagiosGroup The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosGroup($nagiosGroup = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nagiosGroup)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nagiosGroup)) {
				$nagiosGroup = str_replace('*', '%', $nagiosGroup);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::NAGIOS_GROUP, $nagiosGroup, $comparison);
	}

	/**
	 * Filter the query on the enable_notifications column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableNotifications(true); // WHERE enable_notifications = true
	 * $query->filterByEnableNotifications('yes'); // WHERE enable_notifications = true
	 * </code>
	 *
	 * @param     boolean|string $enableNotifications The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableNotifications($enableNotifications = null, $comparison = null)
	{
		if (is_string($enableNotifications)) {
			$enable_notifications = in_array(strtolower($enableNotifications), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_NOTIFICATIONS, $enableNotifications, $comparison);
	}

	/**
	 * Filter the query on the execute_service_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecuteServiceChecks(true); // WHERE execute_service_checks = true
	 * $query->filterByExecuteServiceChecks('yes'); // WHERE execute_service_checks = true
	 * </code>
	 *
	 * @param     boolean|string $executeServiceChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByExecuteServiceChecks($executeServiceChecks = null, $comparison = null)
	{
		if (is_string($executeServiceChecks)) {
			$execute_service_checks = in_array(strtolower($executeServiceChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::EXECUTE_SERVICE_CHECKS, $executeServiceChecks, $comparison);
	}

	/**
	 * Filter the query on the accept_passive_service_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAcceptPassiveServiceChecks(true); // WHERE accept_passive_service_checks = true
	 * $query->filterByAcceptPassiveServiceChecks('yes'); // WHERE accept_passive_service_checks = true
	 * </code>
	 *
	 * @param     boolean|string $acceptPassiveServiceChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAcceptPassiveServiceChecks($acceptPassiveServiceChecks = null, $comparison = null)
	{
		if (is_string($acceptPassiveServiceChecks)) {
			$accept_passive_service_checks = in_array(strtolower($acceptPassiveServiceChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_SERVICE_CHECKS, $acceptPassiveServiceChecks, $comparison);
	}

	/**
	 * Filter the query on the enable_event_handlers column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableEventHandlers(true); // WHERE enable_event_handlers = true
	 * $query->filterByEnableEventHandlers('yes'); // WHERE enable_event_handlers = true
	 * </code>
	 *
	 * @param     boolean|string $enableEventHandlers The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableEventHandlers($enableEventHandlers = null, $comparison = null)
	{
		if (is_string($enableEventHandlers)) {
			$enable_event_handlers = in_array(strtolower($enableEventHandlers), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_EVENT_HANDLERS, $enableEventHandlers, $comparison);
	}

	/**
	 * Filter the query on the log_rotation_method column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogRotationMethod('fooValue');   // WHERE log_rotation_method = 'fooValue'
	 * $query->filterByLogRotationMethod('%fooValue%'); // WHERE log_rotation_method LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $logRotationMethod The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogRotationMethod($logRotationMethod = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($logRotationMethod)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $logRotationMethod)) {
				$logRotationMethod = str_replace('*', '%', $logRotationMethod);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_ROTATION_METHOD, $logRotationMethod, $comparison);
	}

	/**
	 * Filter the query on the log_archive_path column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogArchivePath('fooValue');   // WHERE log_archive_path = 'fooValue'
	 * $query->filterByLogArchivePath('%fooValue%'); // WHERE log_archive_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $logArchivePath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogArchivePath($logArchivePath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($logArchivePath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $logArchivePath)) {
				$logArchivePath = str_replace('*', '%', $logArchivePath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_ARCHIVE_PATH, $logArchivePath, $comparison);
	}

	/**
	 * Filter the query on the check_external_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckExternalCommands(true); // WHERE check_external_commands = true
	 * $query->filterByCheckExternalCommands('yes'); // WHERE check_external_commands = true
	 * </code>
	 *
	 * @param     boolean|string $checkExternalCommands The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckExternalCommands($checkExternalCommands = null, $comparison = null)
	{
		if (is_string($checkExternalCommands)) {
			$check_external_commands = in_array(strtolower($checkExternalCommands), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_EXTERNAL_COMMANDS, $checkExternalCommands, $comparison);
	}

	/**
	 * Filter the query on the command_check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCommandCheckInterval('fooValue');   // WHERE command_check_interval = 'fooValue'
	 * $query->filterByCommandCheckInterval('%fooValue%'); // WHERE command_check_interval LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $commandCheckInterval The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCommandCheckInterval($commandCheckInterval = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commandCheckInterval)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commandCheckInterval)) {
				$commandCheckInterval = str_replace('*', '%', $commandCheckInterval);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::COMMAND_CHECK_INTERVAL, $commandCheckInterval, $comparison);
	}

	/**
	 * Filter the query on the command_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCommandFile('fooValue');   // WHERE command_file = 'fooValue'
	 * $query->filterByCommandFile('%fooValue%'); // WHERE command_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $commandFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCommandFile($commandFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($commandFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $commandFile)) {
				$commandFile = str_replace('*', '%', $commandFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::COMMAND_FILE, $commandFile, $comparison);
	}

	/**
	 * Filter the query on the lock_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLockFile('fooValue');   // WHERE lock_file = 'fooValue'
	 * $query->filterByLockFile('%fooValue%'); // WHERE lock_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $lockFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLockFile($lockFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($lockFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $lockFile)) {
				$lockFile = str_replace('*', '%', $lockFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOCK_FILE, $lockFile, $comparison);
	}

	/**
	 * Filter the query on the retain_state_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainStateInformation(true); // WHERE retain_state_information = true
	 * $query->filterByRetainStateInformation('yes'); // WHERE retain_state_information = true
	 * </code>
	 *
	 * @param     boolean|string $retainStateInformation The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainStateInformation($retainStateInformation = null, $comparison = null)
	{
		if (is_string($retainStateInformation)) {
			$retain_state_information = in_array(strtolower($retainStateInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAIN_STATE_INFORMATION, $retainStateInformation, $comparison);
	}

	/**
	 * Filter the query on the state_retention_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStateRetentionFile('fooValue');   // WHERE state_retention_file = 'fooValue'
	 * $query->filterByStateRetentionFile('%fooValue%'); // WHERE state_retention_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $stateRetentionFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByStateRetentionFile($stateRetentionFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($stateRetentionFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $stateRetentionFile)) {
				$stateRetentionFile = str_replace('*', '%', $stateRetentionFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::STATE_RETENTION_FILE, $stateRetentionFile, $comparison);
	}

	/**
	 * Filter the query on the retention_update_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetentionUpdateInterval(1234); // WHERE retention_update_interval = 1234
	 * $query->filterByRetentionUpdateInterval(array(12, 34)); // WHERE retention_update_interval IN (12, 34)
	 * $query->filterByRetentionUpdateInterval(array('min' => 12)); // WHERE retention_update_interval > 12
	 * </code>
	 *
	 * @param     mixed $retentionUpdateInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetentionUpdateInterval($retentionUpdateInterval = null, $comparison = null)
	{
		if (is_array($retentionUpdateInterval)) {
			$useMinMax = false;
			if (isset($retentionUpdateInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL, $retentionUpdateInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retentionUpdateInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL, $retentionUpdateInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL, $retentionUpdateInterval, $comparison);
	}

	/**
	 * Filter the query on the use_retained_program_state column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseRetainedProgramState(true); // WHERE use_retained_program_state = true
	 * $query->filterByUseRetainedProgramState('yes'); // WHERE use_retained_program_state = true
	 * </code>
	 *
	 * @param     boolean|string $useRetainedProgramState The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseRetainedProgramState($useRetainedProgramState = null, $comparison = null)
	{
		if (is_string($useRetainedProgramState)) {
			$use_retained_program_state = in_array(strtolower($useRetainedProgramState), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_RETAINED_PROGRAM_STATE, $useRetainedProgramState, $comparison);
	}

	/**
	 * Filter the query on the use_syslog column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseSyslog(true); // WHERE use_syslog = true
	 * $query->filterByUseSyslog('yes'); // WHERE use_syslog = true
	 * </code>
	 *
	 * @param     boolean|string $useSyslog The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseSyslog($useSyslog = null, $comparison = null)
	{
		if (is_string($useSyslog)) {
			$use_syslog = in_array(strtolower($useSyslog), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_SYSLOG, $useSyslog, $comparison);
	}

	/**
	 * Filter the query on the log_notifications column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogNotifications(true); // WHERE log_notifications = true
	 * $query->filterByLogNotifications('yes'); // WHERE log_notifications = true
	 * </code>
	 *
	 * @param     boolean|string $logNotifications The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogNotifications($logNotifications = null, $comparison = null)
	{
		if (is_string($logNotifications)) {
			$log_notifications = in_array(strtolower($logNotifications), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_NOTIFICATIONS, $logNotifications, $comparison);
	}

	/**
	 * Filter the query on the log_service_retries column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogServiceRetries(true); // WHERE log_service_retries = true
	 * $query->filterByLogServiceRetries('yes'); // WHERE log_service_retries = true
	 * </code>
	 *
	 * @param     boolean|string $logServiceRetries The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogServiceRetries($logServiceRetries = null, $comparison = null)
	{
		if (is_string($logServiceRetries)) {
			$log_service_retries = in_array(strtolower($logServiceRetries), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_SERVICE_RETRIES, $logServiceRetries, $comparison);
	}

	/**
	 * Filter the query on the log_host_retries column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogHostRetries(true); // WHERE log_host_retries = true
	 * $query->filterByLogHostRetries('yes'); // WHERE log_host_retries = true
	 * </code>
	 *
	 * @param     boolean|string $logHostRetries The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogHostRetries($logHostRetries = null, $comparison = null)
	{
		if (is_string($logHostRetries)) {
			$log_host_retries = in_array(strtolower($logHostRetries), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_HOST_RETRIES, $logHostRetries, $comparison);
	}

	/**
	 * Filter the query on the log_event_handlers column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogEventHandlers(true); // WHERE log_event_handlers = true
	 * $query->filterByLogEventHandlers('yes'); // WHERE log_event_handlers = true
	 * </code>
	 *
	 * @param     boolean|string $logEventHandlers The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogEventHandlers($logEventHandlers = null, $comparison = null)
	{
		if (is_string($logEventHandlers)) {
			$log_event_handlers = in_array(strtolower($logEventHandlers), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_EVENT_HANDLERS, $logEventHandlers, $comparison);
	}

	/**
	 * Filter the query on the log_initial_states column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogInitialStates(true); // WHERE log_initial_states = true
	 * $query->filterByLogInitialStates('yes'); // WHERE log_initial_states = true
	 * </code>
	 *
	 * @param     boolean|string $logInitialStates The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogInitialStates($logInitialStates = null, $comparison = null)
	{
		if (is_string($logInitialStates)) {
			$log_initial_states = in_array(strtolower($logInitialStates), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_INITIAL_STATES, $logInitialStates, $comparison);
	}

	/**
	 * Filter the query on the log_external_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogExternalCommands(true); // WHERE log_external_commands = true
	 * $query->filterByLogExternalCommands('yes'); // WHERE log_external_commands = true
	 * </code>
	 *
	 * @param     boolean|string $logExternalCommands The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogExternalCommands($logExternalCommands = null, $comparison = null)
	{
		if (is_string($logExternalCommands)) {
			$log_external_commands = in_array(strtolower($logExternalCommands), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_EXTERNAL_COMMANDS, $logExternalCommands, $comparison);
	}

	/**
	 * Filter the query on the log_passive_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogPassiveChecks(true); // WHERE log_passive_checks = true
	 * $query->filterByLogPassiveChecks('yes'); // WHERE log_passive_checks = true
	 * </code>
	 *
	 * @param     boolean|string $logPassiveChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogPassiveChecks($logPassiveChecks = null, $comparison = null)
	{
		if (is_string($logPassiveChecks)) {
			$log_passive_checks = in_array(strtolower($logPassiveChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_PASSIVE_CHECKS, $logPassiveChecks, $comparison);
	}

	/**
	 * Filter the query on the global_host_event_handler column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByGlobalHostEventHandler(1234); // WHERE global_host_event_handler = 1234
	 * $query->filterByGlobalHostEventHandler(array(12, 34)); // WHERE global_host_event_handler IN (12, 34)
	 * $query->filterByGlobalHostEventHandler(array('min' => 12)); // WHERE global_host_event_handler > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByGlobalHostEventHandler()
	 *
	 * @param     mixed $globalHostEventHandler The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByGlobalHostEventHandler($globalHostEventHandler = null, $comparison = null)
	{
		if (is_array($globalHostEventHandler)) {
			$useMinMax = false;
			if (isset($globalHostEventHandler['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $globalHostEventHandler['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($globalHostEventHandler['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $globalHostEventHandler['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $globalHostEventHandler, $comparison);
	}

	/**
	 * Filter the query on the global_service_event_handler column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByGlobalServiceEventHandler(1234); // WHERE global_service_event_handler = 1234
	 * $query->filterByGlobalServiceEventHandler(array(12, 34)); // WHERE global_service_event_handler IN (12, 34)
	 * $query->filterByGlobalServiceEventHandler(array('min' => 12)); // WHERE global_service_event_handler > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByGlobalServiceEventHandler()
	 *
	 * @param     mixed $globalServiceEventHandler The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByGlobalServiceEventHandler($globalServiceEventHandler = null, $comparison = null)
	{
		if (is_array($globalServiceEventHandler)) {
			$useMinMax = false;
			if (isset($globalServiceEventHandler['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $globalServiceEventHandler['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($globalServiceEventHandler['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $globalServiceEventHandler['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $globalServiceEventHandler, $comparison);
	}

	/**
	 * Filter the query on the external_command_buffer_slots column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExternalCommandBufferSlots(1234); // WHERE external_command_buffer_slots = 1234
	 * $query->filterByExternalCommandBufferSlots(array(12, 34)); // WHERE external_command_buffer_slots IN (12, 34)
	 * $query->filterByExternalCommandBufferSlots(array('min' => 12)); // WHERE external_command_buffer_slots > 12
	 * </code>
	 *
	 * @param     mixed $externalCommandBufferSlots The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByExternalCommandBufferSlots($externalCommandBufferSlots = null, $comparison = null)
	{
		if (is_array($externalCommandBufferSlots)) {
			$useMinMax = false;
			if (isset($externalCommandBufferSlots['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS, $externalCommandBufferSlots['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($externalCommandBufferSlots['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS, $externalCommandBufferSlots['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS, $externalCommandBufferSlots, $comparison);
	}

	/**
	 * Filter the query on the sleep_time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySleepTime(1234); // WHERE sleep_time = 1234
	 * $query->filterBySleepTime(array(12, 34)); // WHERE sleep_time IN (12, 34)
	 * $query->filterBySleepTime(array('min' => 12)); // WHERE sleep_time > 12
	 * </code>
	 *
	 * @param     mixed $sleepTime The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterBySleepTime($sleepTime = null, $comparison = null)
	{
		if (is_array($sleepTime)) {
			$useMinMax = false;
			if (isset($sleepTime['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SLEEP_TIME, $sleepTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($sleepTime['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SLEEP_TIME, $sleepTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SLEEP_TIME, $sleepTime, $comparison);
	}

	/**
	 * Filter the query on the service_interleave_factor column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceInterleaveFactor('fooValue');   // WHERE service_interleave_factor = 'fooValue'
	 * $query->filterByServiceInterleaveFactor('%fooValue%'); // WHERE service_interleave_factor LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $serviceInterleaveFactor The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceInterleaveFactor($serviceInterleaveFactor = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($serviceInterleaveFactor)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $serviceInterleaveFactor)) {
				$serviceInterleaveFactor = str_replace('*', '%', $serviceInterleaveFactor);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_INTERLEAVE_FACTOR, $serviceInterleaveFactor, $comparison);
	}

	/**
	 * Filter the query on the max_concurrent_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxConcurrentChecks(1234); // WHERE max_concurrent_checks = 1234
	 * $query->filterByMaxConcurrentChecks(array(12, 34)); // WHERE max_concurrent_checks IN (12, 34)
	 * $query->filterByMaxConcurrentChecks(array('min' => 12)); // WHERE max_concurrent_checks > 12
	 * </code>
	 *
	 * @param     mixed $maxConcurrentChecks The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxConcurrentChecks($maxConcurrentChecks = null, $comparison = null)
	{
		if (is_array($maxConcurrentChecks)) {
			$useMinMax = false;
			if (isset($maxConcurrentChecks['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS, $maxConcurrentChecks['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxConcurrentChecks['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS, $maxConcurrentChecks['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS, $maxConcurrentChecks, $comparison);
	}

	/**
	 * Filter the query on the service_reaper_frequency column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceReaperFrequency(1234); // WHERE service_reaper_frequency = 1234
	 * $query->filterByServiceReaperFrequency(array(12, 34)); // WHERE service_reaper_frequency IN (12, 34)
	 * $query->filterByServiceReaperFrequency(array('min' => 12)); // WHERE service_reaper_frequency > 12
	 * </code>
	 *
	 * @param     mixed $serviceReaperFrequency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceReaperFrequency($serviceReaperFrequency = null, $comparison = null)
	{
		if (is_array($serviceReaperFrequency)) {
			$useMinMax = false;
			if (isset($serviceReaperFrequency['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY, $serviceReaperFrequency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceReaperFrequency['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY, $serviceReaperFrequency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY, $serviceReaperFrequency, $comparison);
	}

	/**
	 * Filter the query on the interval_length column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIntervalLength(1234); // WHERE interval_length = 1234
	 * $query->filterByIntervalLength(array(12, 34)); // WHERE interval_length IN (12, 34)
	 * $query->filterByIntervalLength(array('min' => 12)); // WHERE interval_length > 12
	 * </code>
	 *
	 * @param     mixed $intervalLength The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByIntervalLength($intervalLength = null, $comparison = null)
	{
		if (is_array($intervalLength)) {
			$useMinMax = false;
			if (isset($intervalLength['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::INTERVAL_LENGTH, $intervalLength['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($intervalLength['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::INTERVAL_LENGTH, $intervalLength['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::INTERVAL_LENGTH, $intervalLength, $comparison);
	}

	/**
	 * Filter the query on the use_aggressive_host_checking column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseAggressiveHostChecking(true); // WHERE use_aggressive_host_checking = true
	 * $query->filterByUseAggressiveHostChecking('yes'); // WHERE use_aggressive_host_checking = true
	 * </code>
	 *
	 * @param     boolean|string $useAggressiveHostChecking The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseAggressiveHostChecking($useAggressiveHostChecking = null, $comparison = null)
	{
		if (is_string($useAggressiveHostChecking)) {
			$use_aggressive_host_checking = in_array(strtolower($useAggressiveHostChecking), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_AGGRESSIVE_HOST_CHECKING, $useAggressiveHostChecking, $comparison);
	}

	/**
	 * Filter the query on the enable_flap_detection column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableFlapDetection(true); // WHERE enable_flap_detection = true
	 * $query->filterByEnableFlapDetection('yes'); // WHERE enable_flap_detection = true
	 * </code>
	 *
	 * @param     boolean|string $enableFlapDetection The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableFlapDetection($enableFlapDetection = null, $comparison = null)
	{
		if (is_string($enableFlapDetection)) {
			$enable_flap_detection = in_array(strtolower($enableFlapDetection), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_FLAP_DETECTION, $enableFlapDetection, $comparison);
	}

	/**
	 * Filter the query on the low_service_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLowServiceFlapThreshold(1234); // WHERE low_service_flap_threshold = 1234
	 * $query->filterByLowServiceFlapThreshold(array(12, 34)); // WHERE low_service_flap_threshold IN (12, 34)
	 * $query->filterByLowServiceFlapThreshold(array('min' => 12)); // WHERE low_service_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $lowServiceFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLowServiceFlapThreshold($lowServiceFlapThreshold = null, $comparison = null)
	{
		if (is_array($lowServiceFlapThreshold)) {
			$useMinMax = false;
			if (isset($lowServiceFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD, $lowServiceFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lowServiceFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD, $lowServiceFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD, $lowServiceFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the high_service_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHighServiceFlapThreshold(1234); // WHERE high_service_flap_threshold = 1234
	 * $query->filterByHighServiceFlapThreshold(array(12, 34)); // WHERE high_service_flap_threshold IN (12, 34)
	 * $query->filterByHighServiceFlapThreshold(array('min' => 12)); // WHERE high_service_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $highServiceFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHighServiceFlapThreshold($highServiceFlapThreshold = null, $comparison = null)
	{
		if (is_array($highServiceFlapThreshold)) {
			$useMinMax = false;
			if (isset($highServiceFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD, $highServiceFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($highServiceFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD, $highServiceFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD, $highServiceFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the low_host_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLowHostFlapThreshold(1234); // WHERE low_host_flap_threshold = 1234
	 * $query->filterByLowHostFlapThreshold(array(12, 34)); // WHERE low_host_flap_threshold IN (12, 34)
	 * $query->filterByLowHostFlapThreshold(array('min' => 12)); // WHERE low_host_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $lowHostFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLowHostFlapThreshold($lowHostFlapThreshold = null, $comparison = null)
	{
		if (is_array($lowHostFlapThreshold)) {
			$useMinMax = false;
			if (isset($lowHostFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD, $lowHostFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lowHostFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD, $lowHostFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD, $lowHostFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the high_host_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHighHostFlapThreshold(1234); // WHERE high_host_flap_threshold = 1234
	 * $query->filterByHighHostFlapThreshold(array(12, 34)); // WHERE high_host_flap_threshold IN (12, 34)
	 * $query->filterByHighHostFlapThreshold(array('min' => 12)); // WHERE high_host_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $highHostFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHighHostFlapThreshold($highHostFlapThreshold = null, $comparison = null)
	{
		if (is_array($highHostFlapThreshold)) {
			$useMinMax = false;
			if (isset($highHostFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD, $highHostFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($highHostFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD, $highHostFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD, $highHostFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the soft_state_dependencies column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySoftStateDependencies(true); // WHERE soft_state_dependencies = true
	 * $query->filterBySoftStateDependencies('yes'); // WHERE soft_state_dependencies = true
	 * </code>
	 *
	 * @param     boolean|string $softStateDependencies The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterBySoftStateDependencies($softStateDependencies = null, $comparison = null)
	{
		if (is_string($softStateDependencies)) {
			$soft_state_dependencies = in_array(strtolower($softStateDependencies), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SOFT_STATE_DEPENDENCIES, $softStateDependencies, $comparison);
	}

	/**
	 * Filter the query on the service_check_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceCheckTimeout(1234); // WHERE service_check_timeout = 1234
	 * $query->filterByServiceCheckTimeout(array(12, 34)); // WHERE service_check_timeout IN (12, 34)
	 * $query->filterByServiceCheckTimeout(array('min' => 12)); // WHERE service_check_timeout > 12
	 * </code>
	 *
	 * @param     mixed $serviceCheckTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceCheckTimeout($serviceCheckTimeout = null, $comparison = null)
	{
		if (is_array($serviceCheckTimeout)) {
			$useMinMax = false;
			if (isset($serviceCheckTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT, $serviceCheckTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceCheckTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT, $serviceCheckTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT, $serviceCheckTimeout, $comparison);
	}

	/**
	 * Filter the query on the host_check_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostCheckTimeout(1234); // WHERE host_check_timeout = 1234
	 * $query->filterByHostCheckTimeout(array(12, 34)); // WHERE host_check_timeout IN (12, 34)
	 * $query->filterByHostCheckTimeout(array('min' => 12)); // WHERE host_check_timeout > 12
	 * </code>
	 *
	 * @param     mixed $hostCheckTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostCheckTimeout($hostCheckTimeout = null, $comparison = null)
	{
		if (is_array($hostCheckTimeout)) {
			$useMinMax = false;
			if (isset($hostCheckTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT, $hostCheckTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostCheckTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT, $hostCheckTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT, $hostCheckTimeout, $comparison);
	}

	/**
	 * Filter the query on the event_handler_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEventHandlerTimeout(1234); // WHERE event_handler_timeout = 1234
	 * $query->filterByEventHandlerTimeout(array(12, 34)); // WHERE event_handler_timeout IN (12, 34)
	 * $query->filterByEventHandlerTimeout(array('min' => 12)); // WHERE event_handler_timeout > 12
	 * </code>
	 *
	 * @param     mixed $eventHandlerTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEventHandlerTimeout($eventHandlerTimeout = null, $comparison = null)
	{
		if (is_array($eventHandlerTimeout)) {
			$useMinMax = false;
			if (isset($eventHandlerTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT, $eventHandlerTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($eventHandlerTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT, $eventHandlerTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT, $eventHandlerTimeout, $comparison);
	}

	/**
	 * Filter the query on the notification_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationTimeout(1234); // WHERE notification_timeout = 1234
	 * $query->filterByNotificationTimeout(array(12, 34)); // WHERE notification_timeout IN (12, 34)
	 * $query->filterByNotificationTimeout(array('min' => 12)); // WHERE notification_timeout > 12
	 * </code>
	 *
	 * @param     mixed $notificationTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNotificationTimeout($notificationTimeout = null, $comparison = null)
	{
		if (is_array($notificationTimeout)) {
			$useMinMax = false;
			if (isset($notificationTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT, $notificationTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT, $notificationTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT, $notificationTimeout, $comparison);
	}

	/**
	 * Filter the query on the ocsp_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOcspTimeout(1234); // WHERE ocsp_timeout = 1234
	 * $query->filterByOcspTimeout(array(12, 34)); // WHERE ocsp_timeout IN (12, 34)
	 * $query->filterByOcspTimeout(array('min' => 12)); // WHERE ocsp_timeout > 12
	 * </code>
	 *
	 * @param     mixed $ocspTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByOcspTimeout($ocspTimeout = null, $comparison = null)
	{
		if (is_array($ocspTimeout)) {
			$useMinMax = false;
			if (isset($ocspTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_TIMEOUT, $ocspTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ocspTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_TIMEOUT, $ocspTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_TIMEOUT, $ocspTimeout, $comparison);
	}

	/**
	 * Filter the query on the ohcp_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOhcpTimeout(1234); // WHERE ohcp_timeout = 1234
	 * $query->filterByOhcpTimeout(array(12, 34)); // WHERE ohcp_timeout IN (12, 34)
	 * $query->filterByOhcpTimeout(array('min' => 12)); // WHERE ohcp_timeout > 12
	 * </code>
	 *
	 * @param     mixed $ohcpTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByOhcpTimeout($ohcpTimeout = null, $comparison = null)
	{
		if (is_array($ohcpTimeout)) {
			$useMinMax = false;
			if (isset($ohcpTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OHCP_TIMEOUT, $ohcpTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ohcpTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OHCP_TIMEOUT, $ohcpTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OHCP_TIMEOUT, $ohcpTimeout, $comparison);
	}

	/**
	 * Filter the query on the perfdata_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPerfdataTimeout(1234); // WHERE perfdata_timeout = 1234
	 * $query->filterByPerfdataTimeout(array(12, 34)); // WHERE perfdata_timeout IN (12, 34)
	 * $query->filterByPerfdataTimeout(array('min' => 12)); // WHERE perfdata_timeout > 12
	 * </code>
	 *
	 * @param     mixed $perfdataTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPerfdataTimeout($perfdataTimeout = null, $comparison = null)
	{
		if (is_array($perfdataTimeout)) {
			$useMinMax = false;
			if (isset($perfdataTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT, $perfdataTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($perfdataTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT, $perfdataTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT, $perfdataTimeout, $comparison);
	}

	/**
	 * Filter the query on the obsess_over_services column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByObsessOverServices(true); // WHERE obsess_over_services = true
	 * $query->filterByObsessOverServices('yes'); // WHERE obsess_over_services = true
	 * </code>
	 *
	 * @param     boolean|string $obsessOverServices The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByObsessOverServices($obsessOverServices = null, $comparison = null)
	{
		if (is_string($obsessOverServices)) {
			$obsess_over_services = in_array(strtolower($obsessOverServices), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OBSESS_OVER_SERVICES, $obsessOverServices, $comparison);
	}

	/**
	 * Filter the query on the ocsp_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOcspCommand(1234); // WHERE ocsp_command = 1234
	 * $query->filterByOcspCommand(array(12, 34)); // WHERE ocsp_command IN (12, 34)
	 * $query->filterByOcspCommand(array('min' => 12)); // WHERE ocsp_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByOcspCommand()
	 *
	 * @param     mixed $ocspCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByOcspCommand($ocspCommand = null, $comparison = null)
	{
		if (is_array($ocspCommand)) {
			$useMinMax = false;
			if (isset($ocspCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_COMMAND, $ocspCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ocspCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_COMMAND, $ocspCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OCSP_COMMAND, $ocspCommand, $comparison);
	}

	/**
	 * Filter the query on the process_performance_data column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByProcessPerformanceData(true); // WHERE process_performance_data = true
	 * $query->filterByProcessPerformanceData('yes'); // WHERE process_performance_data = true
	 * </code>
	 *
	 * @param     boolean|string $processPerformanceData The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByProcessPerformanceData($processPerformanceData = null, $comparison = null)
	{
		if (is_string($processPerformanceData)) {
			$process_performance_data = in_array(strtolower($processPerformanceData), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::PROCESS_PERFORMANCE_DATA, $processPerformanceData, $comparison);
	}

	/**
	 * Filter the query on the check_for_orphaned_services column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckForOrphanedServices(true); // WHERE check_for_orphaned_services = true
	 * $query->filterByCheckForOrphanedServices('yes'); // WHERE check_for_orphaned_services = true
	 * </code>
	 *
	 * @param     boolean|string $checkForOrphanedServices The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckForOrphanedServices($checkForOrphanedServices = null, $comparison = null)
	{
		if (is_string($checkForOrphanedServices)) {
			$check_for_orphaned_services = in_array(strtolower($checkForOrphanedServices), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_SERVICES, $checkForOrphanedServices, $comparison);
	}

	/**
	 * Filter the query on the check_service_freshness column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckServiceFreshness(true); // WHERE check_service_freshness = true
	 * $query->filterByCheckServiceFreshness('yes'); // WHERE check_service_freshness = true
	 * </code>
	 *
	 * @param     boolean|string $checkServiceFreshness The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckServiceFreshness($checkServiceFreshness = null, $comparison = null)
	{
		if (is_string($checkServiceFreshness)) {
			$check_service_freshness = in_array(strtolower($checkServiceFreshness), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_SERVICE_FRESHNESS, $checkServiceFreshness, $comparison);
	}

	/**
	 * Filter the query on the freshness_check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFreshnessCheckInterval(1234); // WHERE freshness_check_interval = 1234
	 * $query->filterByFreshnessCheckInterval(array(12, 34)); // WHERE freshness_check_interval IN (12, 34)
	 * $query->filterByFreshnessCheckInterval(array('min' => 12)); // WHERE freshness_check_interval > 12
	 * </code>
	 *
	 * @param     mixed $freshnessCheckInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByFreshnessCheckInterval($freshnessCheckInterval = null, $comparison = null)
	{
		if (is_array($freshnessCheckInterval)) {
			$useMinMax = false;
			if (isset($freshnessCheckInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL, $freshnessCheckInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($freshnessCheckInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL, $freshnessCheckInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL, $freshnessCheckInterval, $comparison);
	}

	/**
	 * Filter the query on the date_format column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDateFormat('fooValue');   // WHERE date_format = 'fooValue'
	 * $query->filterByDateFormat('%fooValue%'); // WHERE date_format LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $dateFormat The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDateFormat($dateFormat = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($dateFormat)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $dateFormat)) {
				$dateFormat = str_replace('*', '%', $dateFormat);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::DATE_FORMAT, $dateFormat, $comparison);
	}

	/**
	 * Filter the query on the illegal_object_name_chars column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIllegalObjectNameChars('fooValue');   // WHERE illegal_object_name_chars = 'fooValue'
	 * $query->filterByIllegalObjectNameChars('%fooValue%'); // WHERE illegal_object_name_chars LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $illegalObjectNameChars The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByIllegalObjectNameChars($illegalObjectNameChars = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($illegalObjectNameChars)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $illegalObjectNameChars)) {
				$illegalObjectNameChars = str_replace('*', '%', $illegalObjectNameChars);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ILLEGAL_OBJECT_NAME_CHARS, $illegalObjectNameChars, $comparison);
	}

	/**
	 * Filter the query on the illegal_macro_output_chars column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIllegalMacroOutputChars('fooValue');   // WHERE illegal_macro_output_chars = 'fooValue'
	 * $query->filterByIllegalMacroOutputChars('%fooValue%'); // WHERE illegal_macro_output_chars LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $illegalMacroOutputChars The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByIllegalMacroOutputChars($illegalMacroOutputChars = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($illegalMacroOutputChars)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $illegalMacroOutputChars)) {
				$illegalMacroOutputChars = str_replace('*', '%', $illegalMacroOutputChars);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ILLEGAL_MACRO_OUTPUT_CHARS, $illegalMacroOutputChars, $comparison);
	}

	/**
	 * Filter the query on the admin_email column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAdminEmail('fooValue');   // WHERE admin_email = 'fooValue'
	 * $query->filterByAdminEmail('%fooValue%'); // WHERE admin_email LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $adminEmail The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAdminEmail($adminEmail = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($adminEmail)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $adminEmail)) {
				$adminEmail = str_replace('*', '%', $adminEmail);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ADMIN_EMAIL, $adminEmail, $comparison);
	}

	/**
	 * Filter the query on the admin_pager column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAdminPager('fooValue');   // WHERE admin_pager = 'fooValue'
	 * $query->filterByAdminPager('%fooValue%'); // WHERE admin_pager LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $adminPager The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAdminPager($adminPager = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($adminPager)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $adminPager)) {
				$adminPager = str_replace('*', '%', $adminPager);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ADMIN_PAGER, $adminPager, $comparison);
	}

	/**
	 * Filter the query on the execute_host_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByExecuteHostChecks(true); // WHERE execute_host_checks = true
	 * $query->filterByExecuteHostChecks('yes'); // WHERE execute_host_checks = true
	 * </code>
	 *
	 * @param     boolean|string $executeHostChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByExecuteHostChecks($executeHostChecks = null, $comparison = null)
	{
		if (is_string($executeHostChecks)) {
			$execute_host_checks = in_array(strtolower($executeHostChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::EXECUTE_HOST_CHECKS, $executeHostChecks, $comparison);
	}

	/**
	 * Filter the query on the service_inter_check_delay_method column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceInterCheckDelayMethod('fooValue');   // WHERE service_inter_check_delay_method = 'fooValue'
	 * $query->filterByServiceInterCheckDelayMethod('%fooValue%'); // WHERE service_inter_check_delay_method LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $serviceInterCheckDelayMethod The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceInterCheckDelayMethod($serviceInterCheckDelayMethod = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($serviceInterCheckDelayMethod)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $serviceInterCheckDelayMethod)) {
				$serviceInterCheckDelayMethod = str_replace('*', '%', $serviceInterCheckDelayMethod);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_INTER_CHECK_DELAY_METHOD, $serviceInterCheckDelayMethod, $comparison);
	}

	/**
	 * Filter the query on the use_retained_scheduling_info column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseRetainedSchedulingInfo(true); // WHERE use_retained_scheduling_info = true
	 * $query->filterByUseRetainedSchedulingInfo('yes'); // WHERE use_retained_scheduling_info = true
	 * </code>
	 *
	 * @param     boolean|string $useRetainedSchedulingInfo The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseRetainedSchedulingInfo($useRetainedSchedulingInfo = null, $comparison = null)
	{
		if (is_string($useRetainedSchedulingInfo)) {
			$use_retained_scheduling_info = in_array(strtolower($useRetainedSchedulingInfo), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_RETAINED_SCHEDULING_INFO, $useRetainedSchedulingInfo, $comparison);
	}

	/**
	 * Filter the query on the accept_passive_host_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAcceptPassiveHostChecks(true); // WHERE accept_passive_host_checks = true
	 * $query->filterByAcceptPassiveHostChecks('yes'); // WHERE accept_passive_host_checks = true
	 * </code>
	 *
	 * @param     boolean|string $acceptPassiveHostChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAcceptPassiveHostChecks($acceptPassiveHostChecks = null, $comparison = null)
	{
		if (is_string($acceptPassiveHostChecks)) {
			$accept_passive_host_checks = in_array(strtolower($acceptPassiveHostChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_HOST_CHECKS, $acceptPassiveHostChecks, $comparison);
	}

	/**
	 * Filter the query on the max_service_check_spread column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxServiceCheckSpread(1234); // WHERE max_service_check_spread = 1234
	 * $query->filterByMaxServiceCheckSpread(array(12, 34)); // WHERE max_service_check_spread IN (12, 34)
	 * $query->filterByMaxServiceCheckSpread(array('min' => 12)); // WHERE max_service_check_spread > 12
	 * </code>
	 *
	 * @param     mixed $maxServiceCheckSpread The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxServiceCheckSpread($maxServiceCheckSpread = null, $comparison = null)
	{
		if (is_array($maxServiceCheckSpread)) {
			$useMinMax = false;
			if (isset($maxServiceCheckSpread['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD, $maxServiceCheckSpread['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxServiceCheckSpread['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD, $maxServiceCheckSpread['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD, $maxServiceCheckSpread, $comparison);
	}

	/**
	 * Filter the query on the host_inter_check_delay_method column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostInterCheckDelayMethod('fooValue');   // WHERE host_inter_check_delay_method = 'fooValue'
	 * $query->filterByHostInterCheckDelayMethod('%fooValue%'); // WHERE host_inter_check_delay_method LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostInterCheckDelayMethod The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostInterCheckDelayMethod($hostInterCheckDelayMethod = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostInterCheckDelayMethod)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostInterCheckDelayMethod)) {
				$hostInterCheckDelayMethod = str_replace('*', '%', $hostInterCheckDelayMethod);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_INTER_CHECK_DELAY_METHOD, $hostInterCheckDelayMethod, $comparison);
	}

	/**
	 * Filter the query on the max_host_check_spread column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxHostCheckSpread(1234); // WHERE max_host_check_spread = 1234
	 * $query->filterByMaxHostCheckSpread(array(12, 34)); // WHERE max_host_check_spread IN (12, 34)
	 * $query->filterByMaxHostCheckSpread(array('min' => 12)); // WHERE max_host_check_spread > 12
	 * </code>
	 *
	 * @param     mixed $maxHostCheckSpread The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxHostCheckSpread($maxHostCheckSpread = null, $comparison = null)
	{
		if (is_array($maxHostCheckSpread)) {
			$useMinMax = false;
			if (isset($maxHostCheckSpread['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD, $maxHostCheckSpread['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxHostCheckSpread['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD, $maxHostCheckSpread['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD, $maxHostCheckSpread, $comparison);
	}

	/**
	 * Filter the query on the auto_reschedule_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAutoRescheduleChecks(true); // WHERE auto_reschedule_checks = true
	 * $query->filterByAutoRescheduleChecks('yes'); // WHERE auto_reschedule_checks = true
	 * </code>
	 *
	 * @param     boolean|string $autoRescheduleChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAutoRescheduleChecks($autoRescheduleChecks = null, $comparison = null)
	{
		if (is_string($autoRescheduleChecks)) {
			$auto_reschedule_checks = in_array(strtolower($autoRescheduleChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULE_CHECKS, $autoRescheduleChecks, $comparison);
	}

	/**
	 * Filter the query on the auto_rescheduling_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAutoReschedulingInterval(1234); // WHERE auto_rescheduling_interval = 1234
	 * $query->filterByAutoReschedulingInterval(array(12, 34)); // WHERE auto_rescheduling_interval IN (12, 34)
	 * $query->filterByAutoReschedulingInterval(array('min' => 12)); // WHERE auto_rescheduling_interval > 12
	 * </code>
	 *
	 * @param     mixed $autoReschedulingInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAutoReschedulingInterval($autoReschedulingInterval = null, $comparison = null)
	{
		if (is_array($autoReschedulingInterval)) {
			$useMinMax = false;
			if (isset($autoReschedulingInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL, $autoReschedulingInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($autoReschedulingInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL, $autoReschedulingInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL, $autoReschedulingInterval, $comparison);
	}

	/**
	 * Filter the query on the auto_rescheduling_window column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAutoReschedulingWindow(1234); // WHERE auto_rescheduling_window = 1234
	 * $query->filterByAutoReschedulingWindow(array(12, 34)); // WHERE auto_rescheduling_window IN (12, 34)
	 * $query->filterByAutoReschedulingWindow(array('min' => 12)); // WHERE auto_rescheduling_window > 12
	 * </code>
	 *
	 * @param     mixed $autoReschedulingWindow The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAutoReschedulingWindow($autoReschedulingWindow = null, $comparison = null)
	{
		if (is_array($autoReschedulingWindow)) {
			$useMinMax = false;
			if (isset($autoReschedulingWindow['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW, $autoReschedulingWindow['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($autoReschedulingWindow['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW, $autoReschedulingWindow['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW, $autoReschedulingWindow, $comparison);
	}

	/**
	 * Filter the query on the ochp_timeout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOchpTimeout(1234); // WHERE ochp_timeout = 1234
	 * $query->filterByOchpTimeout(array(12, 34)); // WHERE ochp_timeout IN (12, 34)
	 * $query->filterByOchpTimeout(array('min' => 12)); // WHERE ochp_timeout > 12
	 * </code>
	 *
	 * @param     mixed $ochpTimeout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByOchpTimeout($ochpTimeout = null, $comparison = null)
	{
		if (is_array($ochpTimeout)) {
			$useMinMax = false;
			if (isset($ochpTimeout['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_TIMEOUT, $ochpTimeout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ochpTimeout['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_TIMEOUT, $ochpTimeout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_TIMEOUT, $ochpTimeout, $comparison);
	}

	/**
	 * Filter the query on the obsess_over_hosts column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByObsessOverHosts(true); // WHERE obsess_over_hosts = true
	 * $query->filterByObsessOverHosts('yes'); // WHERE obsess_over_hosts = true
	 * </code>
	 *
	 * @param     boolean|string $obsessOverHosts The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByObsessOverHosts($obsessOverHosts = null, $comparison = null)
	{
		if (is_string($obsessOverHosts)) {
			$obsess_over_hosts = in_array(strtolower($obsessOverHosts), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OBSESS_OVER_HOSTS, $obsessOverHosts, $comparison);
	}

	/**
	 * Filter the query on the ochp_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByOchpCommand(1234); // WHERE ochp_command = 1234
	 * $query->filterByOchpCommand(array(12, 34)); // WHERE ochp_command IN (12, 34)
	 * $query->filterByOchpCommand(array('min' => 12)); // WHERE ochp_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByOchpCommand()
	 *
	 * @param     mixed $ochpCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByOchpCommand($ochpCommand = null, $comparison = null)
	{
		if (is_array($ochpCommand)) {
			$useMinMax = false;
			if (isset($ochpCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_COMMAND, $ochpCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($ochpCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_COMMAND, $ochpCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OCHP_COMMAND, $ochpCommand, $comparison);
	}

	/**
	 * Filter the query on the check_host_freshness column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckHostFreshness(true); // WHERE check_host_freshness = true
	 * $query->filterByCheckHostFreshness('yes'); // WHERE check_host_freshness = true
	 * </code>
	 *
	 * @param     boolean|string $checkHostFreshness The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckHostFreshness($checkHostFreshness = null, $comparison = null)
	{
		if (is_string($checkHostFreshness)) {
			$check_host_freshness = in_array(strtolower($checkHostFreshness), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_HOST_FRESHNESS, $checkHostFreshness, $comparison);
	}

	/**
	 * Filter the query on the host_freshness_check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostFreshnessCheckInterval(1234); // WHERE host_freshness_check_interval = 1234
	 * $query->filterByHostFreshnessCheckInterval(array(12, 34)); // WHERE host_freshness_check_interval IN (12, 34)
	 * $query->filterByHostFreshnessCheckInterval(array('min' => 12)); // WHERE host_freshness_check_interval > 12
	 * </code>
	 *
	 * @param     mixed $hostFreshnessCheckInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostFreshnessCheckInterval($hostFreshnessCheckInterval = null, $comparison = null)
	{
		if (is_array($hostFreshnessCheckInterval)) {
			$useMinMax = false;
			if (isset($hostFreshnessCheckInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL, $hostFreshnessCheckInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostFreshnessCheckInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL, $hostFreshnessCheckInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL, $hostFreshnessCheckInterval, $comparison);
	}

	/**
	 * Filter the query on the service_freshness_check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceFreshnessCheckInterval(1234); // WHERE service_freshness_check_interval = 1234
	 * $query->filterByServiceFreshnessCheckInterval(array(12, 34)); // WHERE service_freshness_check_interval IN (12, 34)
	 * $query->filterByServiceFreshnessCheckInterval(array('min' => 12)); // WHERE service_freshness_check_interval > 12
	 * </code>
	 *
	 * @param     mixed $serviceFreshnessCheckInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceFreshnessCheckInterval($serviceFreshnessCheckInterval = null, $comparison = null)
	{
		if (is_array($serviceFreshnessCheckInterval)) {
			$useMinMax = false;
			if (isset($serviceFreshnessCheckInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL, $serviceFreshnessCheckInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($serviceFreshnessCheckInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL, $serviceFreshnessCheckInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL, $serviceFreshnessCheckInterval, $comparison);
	}

	/**
	 * Filter the query on the use_regexp_matching column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseRegexpMatching(true); // WHERE use_regexp_matching = true
	 * $query->filterByUseRegexpMatching('yes'); // WHERE use_regexp_matching = true
	 * </code>
	 *
	 * @param     boolean|string $useRegexpMatching The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseRegexpMatching($useRegexpMatching = null, $comparison = null)
	{
		if (is_string($useRegexpMatching)) {
			$use_regexp_matching = in_array(strtolower($useRegexpMatching), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_REGEXP_MATCHING, $useRegexpMatching, $comparison);
	}

	/**
	 * Filter the query on the use_true_regexp_matching column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseTrueRegexpMatching(true); // WHERE use_true_regexp_matching = true
	 * $query->filterByUseTrueRegexpMatching('yes'); // WHERE use_true_regexp_matching = true
	 * </code>
	 *
	 * @param     boolean|string $useTrueRegexpMatching The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseTrueRegexpMatching($useTrueRegexpMatching = null, $comparison = null)
	{
		if (is_string($useTrueRegexpMatching)) {
			$use_true_regexp_matching = in_array(strtolower($useTrueRegexpMatching), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_TRUE_REGEXP_MATCHING, $useTrueRegexpMatching, $comparison);
	}

	/**
	 * Filter the query on the event_broker_options column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEventBrokerOptions('fooValue');   // WHERE event_broker_options = 'fooValue'
	 * $query->filterByEventBrokerOptions('%fooValue%'); // WHERE event_broker_options LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $eventBrokerOptions The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEventBrokerOptions($eventBrokerOptions = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($eventBrokerOptions)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $eventBrokerOptions)) {
				$eventBrokerOptions = str_replace('*', '%', $eventBrokerOptions);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::EVENT_BROKER_OPTIONS, $eventBrokerOptions, $comparison);
	}

	/**
	 * Filter the query on the daemon_dumps_core column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDaemonDumpsCore(true); // WHERE daemon_dumps_core = true
	 * $query->filterByDaemonDumpsCore('yes'); // WHERE daemon_dumps_core = true
	 * </code>
	 *
	 * @param     boolean|string $daemonDumpsCore The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDaemonDumpsCore($daemonDumpsCore = null, $comparison = null)
	{
		if (is_string($daemonDumpsCore)) {
			$daemon_dumps_core = in_array(strtolower($daemonDumpsCore), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::DAEMON_DUMPS_CORE, $daemonDumpsCore, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataCommand(1234); // WHERE host_perfdata_command = 1234
	 * $query->filterByHostPerfdataCommand(array(12, 34)); // WHERE host_perfdata_command IN (12, 34)
	 * $query->filterByHostPerfdataCommand(array('min' => 12)); // WHERE host_perfdata_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByHostPerfdataCommand()
	 *
	 * @param     mixed $hostPerfdataCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataCommand($hostPerfdataCommand = null, $comparison = null)
	{
		if (is_array($hostPerfdataCommand)) {
			$useMinMax = false;
			if (isset($hostPerfdataCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $hostPerfdataCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostPerfdataCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $hostPerfdataCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $hostPerfdataCommand, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataCommand(1234); // WHERE service_perfdata_command = 1234
	 * $query->filterByServicePerfdataCommand(array(12, 34)); // WHERE service_perfdata_command IN (12, 34)
	 * $query->filterByServicePerfdataCommand(array('min' => 12)); // WHERE service_perfdata_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByServicePerfdataCommand()
	 *
	 * @param     mixed $servicePerfdataCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataCommand($servicePerfdataCommand = null, $comparison = null)
	{
		if (is_array($servicePerfdataCommand)) {
			$useMinMax = false;
			if (isset($servicePerfdataCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $servicePerfdataCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($servicePerfdataCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $servicePerfdataCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $servicePerfdataCommand, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataFile('fooValue');   // WHERE host_perfdata_file = 'fooValue'
	 * $query->filterByHostPerfdataFile('%fooValue%'); // WHERE host_perfdata_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostPerfdataFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataFile($hostPerfdataFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostPerfdataFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostPerfdataFile)) {
				$hostPerfdataFile = str_replace('*', '%', $hostPerfdataFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE, $hostPerfdataFile, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_file_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataFileTemplate('fooValue');   // WHERE host_perfdata_file_template = 'fooValue'
	 * $query->filterByHostPerfdataFileTemplate('%fooValue%'); // WHERE host_perfdata_file_template LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostPerfdataFileTemplate The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataFileTemplate($hostPerfdataFileTemplate = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostPerfdataFileTemplate)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostPerfdataFileTemplate)) {
				$hostPerfdataFileTemplate = str_replace('*', '%', $hostPerfdataFileTemplate);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_TEMPLATE, $hostPerfdataFileTemplate, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataFile('fooValue');   // WHERE service_perfdata_file = 'fooValue'
	 * $query->filterByServicePerfdataFile('%fooValue%'); // WHERE service_perfdata_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $servicePerfdataFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataFile($servicePerfdataFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($servicePerfdataFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $servicePerfdataFile)) {
				$servicePerfdataFile = str_replace('*', '%', $servicePerfdataFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE, $servicePerfdataFile, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_file_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataFileTemplate('fooValue');   // WHERE service_perfdata_file_template = 'fooValue'
	 * $query->filterByServicePerfdataFileTemplate('%fooValue%'); // WHERE service_perfdata_file_template LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $servicePerfdataFileTemplate The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataFileTemplate($servicePerfdataFileTemplate = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($servicePerfdataFileTemplate)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $servicePerfdataFileTemplate)) {
				$servicePerfdataFileTemplate = str_replace('*', '%', $servicePerfdataFileTemplate);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_TEMPLATE, $servicePerfdataFileTemplate, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_file_mode column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataFileMode('fooValue');   // WHERE host_perfdata_file_mode = 'fooValue'
	 * $query->filterByHostPerfdataFileMode('%fooValue%'); // WHERE host_perfdata_file_mode LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostPerfdataFileMode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataFileMode($hostPerfdataFileMode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostPerfdataFileMode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostPerfdataFileMode)) {
				$hostPerfdataFileMode = str_replace('*', '%', $hostPerfdataFileMode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_MODE, $hostPerfdataFileMode, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_file_mode column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataFileMode('fooValue');   // WHERE service_perfdata_file_mode = 'fooValue'
	 * $query->filterByServicePerfdataFileMode('%fooValue%'); // WHERE service_perfdata_file_mode LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $servicePerfdataFileMode The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataFileMode($servicePerfdataFileMode = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($servicePerfdataFileMode)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $servicePerfdataFileMode)) {
				$servicePerfdataFileMode = str_replace('*', '%', $servicePerfdataFileMode);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_MODE, $servicePerfdataFileMode, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_file_processing_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataFileProcessingCommand(1234); // WHERE host_perfdata_file_processing_command = 1234
	 * $query->filterByHostPerfdataFileProcessingCommand(array(12, 34)); // WHERE host_perfdata_file_processing_command IN (12, 34)
	 * $query->filterByHostPerfdataFileProcessingCommand(array('min' => 12)); // WHERE host_perfdata_file_processing_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByHostPerfdataFileProcessingCommand()
	 *
	 * @param     mixed $hostPerfdataFileProcessingCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataFileProcessingCommand($hostPerfdataFileProcessingCommand = null, $comparison = null)
	{
		if (is_array($hostPerfdataFileProcessingCommand)) {
			$useMinMax = false;
			if (isset($hostPerfdataFileProcessingCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $hostPerfdataFileProcessingCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostPerfdataFileProcessingCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $hostPerfdataFileProcessingCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $hostPerfdataFileProcessingCommand, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_file_processing_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataFileProcessingCommand(1234); // WHERE service_perfdata_file_processing_command = 1234
	 * $query->filterByServicePerfdataFileProcessingCommand(array(12, 34)); // WHERE service_perfdata_file_processing_command IN (12, 34)
	 * $query->filterByServicePerfdataFileProcessingCommand(array('min' => 12)); // WHERE service_perfdata_file_processing_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByServicePerfdataFileProcessingCommand()
	 *
	 * @param     mixed $servicePerfdataFileProcessingCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataFileProcessingCommand($servicePerfdataFileProcessingCommand = null, $comparison = null)
	{
		if (is_array($servicePerfdataFileProcessingCommand)) {
			$useMinMax = false;
			if (isset($servicePerfdataFileProcessingCommand['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $servicePerfdataFileProcessingCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($servicePerfdataFileProcessingCommand['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $servicePerfdataFileProcessingCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $servicePerfdataFileProcessingCommand, $comparison);
	}

	/**
	 * Filter the query on the host_perfdata_file_processing_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostPerfdataFileProcessingInterval(1234); // WHERE host_perfdata_file_processing_interval = 1234
	 * $query->filterByHostPerfdataFileProcessingInterval(array(12, 34)); // WHERE host_perfdata_file_processing_interval IN (12, 34)
	 * $query->filterByHostPerfdataFileProcessingInterval(array('min' => 12)); // WHERE host_perfdata_file_processing_interval > 12
	 * </code>
	 *
	 * @param     mixed $hostPerfdataFileProcessingInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostPerfdataFileProcessingInterval($hostPerfdataFileProcessingInterval = null, $comparison = null)
	{
		if (is_array($hostPerfdataFileProcessingInterval)) {
			$useMinMax = false;
			if (isset($hostPerfdataFileProcessingInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL, $hostPerfdataFileProcessingInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostPerfdataFileProcessingInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL, $hostPerfdataFileProcessingInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL, $hostPerfdataFileProcessingInterval, $comparison);
	}

	/**
	 * Filter the query on the service_perfdata_file_processing_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServicePerfdataFileProcessingInterval(1234); // WHERE service_perfdata_file_processing_interval = 1234
	 * $query->filterByServicePerfdataFileProcessingInterval(array(12, 34)); // WHERE service_perfdata_file_processing_interval IN (12, 34)
	 * $query->filterByServicePerfdataFileProcessingInterval(array('min' => 12)); // WHERE service_perfdata_file_processing_interval > 12
	 * </code>
	 *
	 * @param     mixed $servicePerfdataFileProcessingInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServicePerfdataFileProcessingInterval($servicePerfdataFileProcessingInterval = null, $comparison = null)
	{
		if (is_array($servicePerfdataFileProcessingInterval)) {
			$useMinMax = false;
			if (isset($servicePerfdataFileProcessingInterval['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL, $servicePerfdataFileProcessingInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($servicePerfdataFileProcessingInterval['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL, $servicePerfdataFileProcessingInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL, $servicePerfdataFileProcessingInterval, $comparison);
	}

	/**
	 * Filter the query on the object_cache_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByObjectCacheFile('fooValue');   // WHERE object_cache_file = 'fooValue'
	 * $query->filterByObjectCacheFile('%fooValue%'); // WHERE object_cache_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $objectCacheFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByObjectCacheFile($objectCacheFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($objectCacheFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $objectCacheFile)) {
				$objectCacheFile = str_replace('*', '%', $objectCacheFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::OBJECT_CACHE_FILE, $objectCacheFile, $comparison);
	}

	/**
	 * Filter the query on the precached_object_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPrecachedObjectFile('fooValue');   // WHERE precached_object_file = 'fooValue'
	 * $query->filterByPrecachedObjectFile('%fooValue%'); // WHERE precached_object_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $precachedObjectFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrecachedObjectFile($precachedObjectFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($precachedObjectFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $precachedObjectFile)) {
				$precachedObjectFile = str_replace('*', '%', $precachedObjectFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::PRECACHED_OBJECT_FILE, $precachedObjectFile, $comparison);
	}

	/**
	 * Filter the query on the retained_host_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedHostAttributeMask(1234); // WHERE retained_host_attribute_mask = 1234
	 * $query->filterByRetainedHostAttributeMask(array(12, 34)); // WHERE retained_host_attribute_mask IN (12, 34)
	 * $query->filterByRetainedHostAttributeMask(array('min' => 12)); // WHERE retained_host_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedHostAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedHostAttributeMask($retainedHostAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedHostAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedHostAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK, $retainedHostAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedHostAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK, $retainedHostAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK, $retainedHostAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the retained_service_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedServiceAttributeMask(1234); // WHERE retained_service_attribute_mask = 1234
	 * $query->filterByRetainedServiceAttributeMask(array(12, 34)); // WHERE retained_service_attribute_mask IN (12, 34)
	 * $query->filterByRetainedServiceAttributeMask(array('min' => 12)); // WHERE retained_service_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedServiceAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedServiceAttributeMask($retainedServiceAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedServiceAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedServiceAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK, $retainedServiceAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedServiceAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK, $retainedServiceAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK, $retainedServiceAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the retained_process_host_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedProcessHostAttributeMask(1234); // WHERE retained_process_host_attribute_mask = 1234
	 * $query->filterByRetainedProcessHostAttributeMask(array(12, 34)); // WHERE retained_process_host_attribute_mask IN (12, 34)
	 * $query->filterByRetainedProcessHostAttributeMask(array('min' => 12)); // WHERE retained_process_host_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedProcessHostAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedProcessHostAttributeMask($retainedProcessHostAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedProcessHostAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedProcessHostAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK, $retainedProcessHostAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedProcessHostAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK, $retainedProcessHostAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK, $retainedProcessHostAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the retained_process_service_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedProcessServiceAttributeMask(1234); // WHERE retained_process_service_attribute_mask = 1234
	 * $query->filterByRetainedProcessServiceAttributeMask(array(12, 34)); // WHERE retained_process_service_attribute_mask IN (12, 34)
	 * $query->filterByRetainedProcessServiceAttributeMask(array('min' => 12)); // WHERE retained_process_service_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedProcessServiceAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedProcessServiceAttributeMask($retainedProcessServiceAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedProcessServiceAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedProcessServiceAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK, $retainedProcessServiceAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedProcessServiceAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK, $retainedProcessServiceAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK, $retainedProcessServiceAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the retained_contact_host_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedContactHostAttributeMask(1234); // WHERE retained_contact_host_attribute_mask = 1234
	 * $query->filterByRetainedContactHostAttributeMask(array(12, 34)); // WHERE retained_contact_host_attribute_mask IN (12, 34)
	 * $query->filterByRetainedContactHostAttributeMask(array('min' => 12)); // WHERE retained_contact_host_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedContactHostAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedContactHostAttributeMask($retainedContactHostAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedContactHostAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedContactHostAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK, $retainedContactHostAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedContactHostAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK, $retainedContactHostAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK, $retainedContactHostAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the retained_contact_service_attribute_mask column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainedContactServiceAttributeMask(1234); // WHERE retained_contact_service_attribute_mask = 1234
	 * $query->filterByRetainedContactServiceAttributeMask(array(12, 34)); // WHERE retained_contact_service_attribute_mask IN (12, 34)
	 * $query->filterByRetainedContactServiceAttributeMask(array('min' => 12)); // WHERE retained_contact_service_attribute_mask > 12
	 * </code>
	 *
	 * @param     mixed $retainedContactServiceAttributeMask The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRetainedContactServiceAttributeMask($retainedContactServiceAttributeMask = null, $comparison = null)
	{
		if (is_array($retainedContactServiceAttributeMask)) {
			$useMinMax = false;
			if (isset($retainedContactServiceAttributeMask['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK, $retainedContactServiceAttributeMask['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retainedContactServiceAttributeMask['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK, $retainedContactServiceAttributeMask['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK, $retainedContactServiceAttributeMask, $comparison);
	}

	/**
	 * Filter the query on the check_result_reaper_frequency column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckResultReaperFrequency(1234); // WHERE check_result_reaper_frequency = 1234
	 * $query->filterByCheckResultReaperFrequency(array(12, 34)); // WHERE check_result_reaper_frequency IN (12, 34)
	 * $query->filterByCheckResultReaperFrequency(array('min' => 12)); // WHERE check_result_reaper_frequency > 12
	 * </code>
	 *
	 * @param     mixed $checkResultReaperFrequency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckResultReaperFrequency($checkResultReaperFrequency = null, $comparison = null)
	{
		if (is_array($checkResultReaperFrequency)) {
			$useMinMax = false;
			if (isset($checkResultReaperFrequency['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY, $checkResultReaperFrequency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkResultReaperFrequency['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY, $checkResultReaperFrequency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY, $checkResultReaperFrequency, $comparison);
	}

	/**
	 * Filter the query on the max_check_result_reaper_time column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxCheckResultReaperTime(1234); // WHERE max_check_result_reaper_time = 1234
	 * $query->filterByMaxCheckResultReaperTime(array(12, 34)); // WHERE max_check_result_reaper_time IN (12, 34)
	 * $query->filterByMaxCheckResultReaperTime(array('min' => 12)); // WHERE max_check_result_reaper_time > 12
	 * </code>
	 *
	 * @param     mixed $maxCheckResultReaperTime The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxCheckResultReaperTime($maxCheckResultReaperTime = null, $comparison = null)
	{
		if (is_array($maxCheckResultReaperTime)) {
			$useMinMax = false;
			if (isset($maxCheckResultReaperTime['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME, $maxCheckResultReaperTime['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxCheckResultReaperTime['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME, $maxCheckResultReaperTime['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME, $maxCheckResultReaperTime, $comparison);
	}

	/**
	 * Filter the query on the check_result_path column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckResultPath('fooValue');   // WHERE check_result_path = 'fooValue'
	 * $query->filterByCheckResultPath('%fooValue%'); // WHERE check_result_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $checkResultPath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckResultPath($checkResultPath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($checkResultPath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $checkResultPath)) {
				$checkResultPath = str_replace('*', '%', $checkResultPath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_RESULT_PATH, $checkResultPath, $comparison);
	}

	/**
	 * Filter the query on the max_check_result_file_age column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxCheckResultFileAge(1234); // WHERE max_check_result_file_age = 1234
	 * $query->filterByMaxCheckResultFileAge(array(12, 34)); // WHERE max_check_result_file_age IN (12, 34)
	 * $query->filterByMaxCheckResultFileAge(array('min' => 12)); // WHERE max_check_result_file_age > 12
	 * </code>
	 *
	 * @param     mixed $maxCheckResultFileAge The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxCheckResultFileAge($maxCheckResultFileAge = null, $comparison = null)
	{
		if (is_array($maxCheckResultFileAge)) {
			$useMinMax = false;
			if (isset($maxCheckResultFileAge['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE, $maxCheckResultFileAge['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxCheckResultFileAge['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE, $maxCheckResultFileAge['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE, $maxCheckResultFileAge, $comparison);
	}

	/**
	 * Filter the query on the translate_passive_host_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTranslatePassiveHostChecks(true); // WHERE translate_passive_host_checks = true
	 * $query->filterByTranslatePassiveHostChecks('yes'); // WHERE translate_passive_host_checks = true
	 * </code>
	 *
	 * @param     boolean|string $translatePassiveHostChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByTranslatePassiveHostChecks($translatePassiveHostChecks = null, $comparison = null)
	{
		if (is_string($translatePassiveHostChecks)) {
			$translate_passive_host_checks = in_array(strtolower($translatePassiveHostChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::TRANSLATE_PASSIVE_HOST_CHECKS, $translatePassiveHostChecks, $comparison);
	}

	/**
	 * Filter the query on the passive_host_checks_are_soft column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPassiveHostChecksAreSoft(true); // WHERE passive_host_checks_are_soft = true
	 * $query->filterByPassiveHostChecksAreSoft('yes'); // WHERE passive_host_checks_are_soft = true
	 * </code>
	 *
	 * @param     boolean|string $passiveHostChecksAreSoft The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPassiveHostChecksAreSoft($passiveHostChecksAreSoft = null, $comparison = null)
	{
		if (is_string($passiveHostChecksAreSoft)) {
			$passive_host_checks_are_soft = in_array(strtolower($passiveHostChecksAreSoft), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::PASSIVE_HOST_CHECKS_ARE_SOFT, $passiveHostChecksAreSoft, $comparison);
	}

	/**
	 * Filter the query on the enable_predictive_host_dependency_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnablePredictiveHostDependencyChecks(true); // WHERE enable_predictive_host_dependency_checks = true
	 * $query->filterByEnablePredictiveHostDependencyChecks('yes'); // WHERE enable_predictive_host_dependency_checks = true
	 * </code>
	 *
	 * @param     boolean|string $enablePredictiveHostDependencyChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnablePredictiveHostDependencyChecks($enablePredictiveHostDependencyChecks = null, $comparison = null)
	{
		if (is_string($enablePredictiveHostDependencyChecks)) {
			$enable_predictive_host_dependency_checks = in_array(strtolower($enablePredictiveHostDependencyChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS, $enablePredictiveHostDependencyChecks, $comparison);
	}

	/**
	 * Filter the query on the enable_predictive_service_dependency_checks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnablePredictiveServiceDependencyChecks(true); // WHERE enable_predictive_service_dependency_checks = true
	 * $query->filterByEnablePredictiveServiceDependencyChecks('yes'); // WHERE enable_predictive_service_dependency_checks = true
	 * </code>
	 *
	 * @param     boolean|string $enablePredictiveServiceDependencyChecks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnablePredictiveServiceDependencyChecks($enablePredictiveServiceDependencyChecks = null, $comparison = null)
	{
		if (is_string($enablePredictiveServiceDependencyChecks)) {
			$enable_predictive_service_dependency_checks = in_array(strtolower($enablePredictiveServiceDependencyChecks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS, $enablePredictiveServiceDependencyChecks, $comparison);
	}

	/**
	 * Filter the query on the cached_host_check_horizon column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCachedHostCheckHorizon(1234); // WHERE cached_host_check_horizon = 1234
	 * $query->filterByCachedHostCheckHorizon(array(12, 34)); // WHERE cached_host_check_horizon IN (12, 34)
	 * $query->filterByCachedHostCheckHorizon(array('min' => 12)); // WHERE cached_host_check_horizon > 12
	 * </code>
	 *
	 * @param     mixed $cachedHostCheckHorizon The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCachedHostCheckHorizon($cachedHostCheckHorizon = null, $comparison = null)
	{
		if (is_array($cachedHostCheckHorizon)) {
			$useMinMax = false;
			if (isset($cachedHostCheckHorizon['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON, $cachedHostCheckHorizon['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cachedHostCheckHorizon['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON, $cachedHostCheckHorizon['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON, $cachedHostCheckHorizon, $comparison);
	}

	/**
	 * Filter the query on the cached_service_check_horizon column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCachedServiceCheckHorizon(1234); // WHERE cached_service_check_horizon = 1234
	 * $query->filterByCachedServiceCheckHorizon(array(12, 34)); // WHERE cached_service_check_horizon IN (12, 34)
	 * $query->filterByCachedServiceCheckHorizon(array('min' => 12)); // WHERE cached_service_check_horizon > 12
	 * </code>
	 *
	 * @param     mixed $cachedServiceCheckHorizon The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCachedServiceCheckHorizon($cachedServiceCheckHorizon = null, $comparison = null)
	{
		if (is_array($cachedServiceCheckHorizon)) {
			$useMinMax = false;
			if (isset($cachedServiceCheckHorizon['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON, $cachedServiceCheckHorizon['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($cachedServiceCheckHorizon['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON, $cachedServiceCheckHorizon['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON, $cachedServiceCheckHorizon, $comparison);
	}

	/**
	 * Filter the query on the use_large_installation_tweaks column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseLargeInstallationTweaks(true); // WHERE use_large_installation_tweaks = true
	 * $query->filterByUseLargeInstallationTweaks('yes'); // WHERE use_large_installation_tweaks = true
	 * </code>
	 *
	 * @param     boolean|string $useLargeInstallationTweaks The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseLargeInstallationTweaks($useLargeInstallationTweaks = null, $comparison = null)
	{
		if (is_string($useLargeInstallationTweaks)) {
			$use_large_installation_tweaks = in_array(strtolower($useLargeInstallationTweaks), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_LARGE_INSTALLATION_TWEAKS, $useLargeInstallationTweaks, $comparison);
	}

	/**
	 * Filter the query on the free_child_process_memory column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFreeChildProcessMemory(true); // WHERE free_child_process_memory = true
	 * $query->filterByFreeChildProcessMemory('yes'); // WHERE free_child_process_memory = true
	 * </code>
	 *
	 * @param     boolean|string $freeChildProcessMemory The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByFreeChildProcessMemory($freeChildProcessMemory = null, $comparison = null)
	{
		if (is_string($freeChildProcessMemory)) {
			$free_child_process_memory = in_array(strtolower($freeChildProcessMemory), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::FREE_CHILD_PROCESS_MEMORY, $freeChildProcessMemory, $comparison);
	}

	/**
	 * Filter the query on the child_processes_fork_twice column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByChildProcessesForkTwice(true); // WHERE child_processes_fork_twice = true
	 * $query->filterByChildProcessesForkTwice('yes'); // WHERE child_processes_fork_twice = true
	 * </code>
	 *
	 * @param     boolean|string $childProcessesForkTwice The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByChildProcessesForkTwice($childProcessesForkTwice = null, $comparison = null)
	{
		if (is_string($childProcessesForkTwice)) {
			$child_processes_fork_twice = in_array(strtolower($childProcessesForkTwice), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHILD_PROCESSES_FORK_TWICE, $childProcessesForkTwice, $comparison);
	}

	/**
	 * Filter the query on the enable_environment_macros column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableEnvironmentMacros(true); // WHERE enable_environment_macros = true
	 * $query->filterByEnableEnvironmentMacros('yes'); // WHERE enable_environment_macros = true
	 * </code>
	 *
	 * @param     boolean|string $enableEnvironmentMacros The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableEnvironmentMacros($enableEnvironmentMacros = null, $comparison = null)
	{
		if (is_string($enableEnvironmentMacros)) {
			$enable_environment_macros = in_array(strtolower($enableEnvironmentMacros), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_ENVIRONMENT_MACROS, $enableEnvironmentMacros, $comparison);
	}

	/**
	 * Filter the query on the additional_freshness_latency column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAdditionalFreshnessLatency(1234); // WHERE additional_freshness_latency = 1234
	 * $query->filterByAdditionalFreshnessLatency(array(12, 34)); // WHERE additional_freshness_latency IN (12, 34)
	 * $query->filterByAdditionalFreshnessLatency(array('min' => 12)); // WHERE additional_freshness_latency > 12
	 * </code>
	 *
	 * @param     mixed $additionalFreshnessLatency The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAdditionalFreshnessLatency($additionalFreshnessLatency = null, $comparison = null)
	{
		if (is_array($additionalFreshnessLatency)) {
			$useMinMax = false;
			if (isset($additionalFreshnessLatency['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY, $additionalFreshnessLatency['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($additionalFreshnessLatency['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY, $additionalFreshnessLatency['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY, $additionalFreshnessLatency, $comparison);
	}

	/**
	 * Filter the query on the enable_embedded_perl column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableEmbeddedPerl(true); // WHERE enable_embedded_perl = true
	 * $query->filterByEnableEmbeddedPerl('yes'); // WHERE enable_embedded_perl = true
	 * </code>
	 *
	 * @param     boolean|string $enableEmbeddedPerl The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableEmbeddedPerl($enableEmbeddedPerl = null, $comparison = null)
	{
		if (is_string($enableEmbeddedPerl)) {
			$enable_embedded_perl = in_array(strtolower($enableEmbeddedPerl), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::ENABLE_EMBEDDED_PERL, $enableEmbeddedPerl, $comparison);
	}

	/**
	 * Filter the query on the use_embedded_perl_implicitly column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseEmbeddedPerlImplicitly(true); // WHERE use_embedded_perl_implicitly = true
	 * $query->filterByUseEmbeddedPerlImplicitly('yes'); // WHERE use_embedded_perl_implicitly = true
	 * </code>
	 *
	 * @param     boolean|string $useEmbeddedPerlImplicitly The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseEmbeddedPerlImplicitly($useEmbeddedPerlImplicitly = null, $comparison = null)
	{
		if (is_string($useEmbeddedPerlImplicitly)) {
			$use_embedded_perl_implicitly = in_array(strtolower($useEmbeddedPerlImplicitly), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_EMBEDDED_PERL_IMPLICITLY, $useEmbeddedPerlImplicitly, $comparison);
	}

	/**
	 * Filter the query on the p1_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByP1File('fooValue');   // WHERE p1_file = 'fooValue'
	 * $query->filterByP1File('%fooValue%'); // WHERE p1_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $p1File The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByP1File($p1File = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($p1File)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $p1File)) {
				$p1File = str_replace('*', '%', $p1File);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::P1_FILE, $p1File, $comparison);
	}

	/**
	 * Filter the query on the use_timezone column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseTimezone('fooValue');   // WHERE use_timezone = 'fooValue'
	 * $query->filterByUseTimezone('%fooValue%'); // WHERE use_timezone LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $useTimezone The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseTimezone($useTimezone = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($useTimezone)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $useTimezone)) {
				$useTimezone = str_replace('*', '%', $useTimezone);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::USE_TIMEZONE, $useTimezone, $comparison);
	}

	/**
	 * Filter the query on the debug_file column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDebugFile('fooValue');   // WHERE debug_file = 'fooValue'
	 * $query->filterByDebugFile('%fooValue%'); // WHERE debug_file LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $debugFile The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDebugFile($debugFile = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($debugFile)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $debugFile)) {
				$debugFile = str_replace('*', '%', $debugFile);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_FILE, $debugFile, $comparison);
	}

	/**
	 * Filter the query on the debug_level column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDebugLevel(1234); // WHERE debug_level = 1234
	 * $query->filterByDebugLevel(array(12, 34)); // WHERE debug_level IN (12, 34)
	 * $query->filterByDebugLevel(array('min' => 12)); // WHERE debug_level > 12
	 * </code>
	 *
	 * @param     mixed $debugLevel The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDebugLevel($debugLevel = null, $comparison = null)
	{
		if (is_array($debugLevel)) {
			$useMinMax = false;
			if (isset($debugLevel['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_LEVEL, $debugLevel['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($debugLevel['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_LEVEL, $debugLevel['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_LEVEL, $debugLevel, $comparison);
	}

	/**
	 * Filter the query on the debug_verbosity column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDebugVerbosity(1234); // WHERE debug_verbosity = 1234
	 * $query->filterByDebugVerbosity(array(12, 34)); // WHERE debug_verbosity IN (12, 34)
	 * $query->filterByDebugVerbosity(array('min' => 12)); // WHERE debug_verbosity > 12
	 * </code>
	 *
	 * @param     mixed $debugVerbosity The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDebugVerbosity($debugVerbosity = null, $comparison = null)
	{
		if (is_array($debugVerbosity)) {
			$useMinMax = false;
			if (isset($debugVerbosity['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_VERBOSITY, $debugVerbosity['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($debugVerbosity['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_VERBOSITY, $debugVerbosity['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::DEBUG_VERBOSITY, $debugVerbosity, $comparison);
	}

	/**
	 * Filter the query on the max_debug_file_size column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaxDebugFileSize(1234); // WHERE max_debug_file_size = 1234
	 * $query->filterByMaxDebugFileSize(array(12, 34)); // WHERE max_debug_file_size IN (12, 34)
	 * $query->filterByMaxDebugFileSize(array('min' => 12)); // WHERE max_debug_file_size > 12
	 * </code>
	 *
	 * @param     mixed $maxDebugFileSize The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByMaxDebugFileSize($maxDebugFileSize = null, $comparison = null)
	{
		if (is_array($maxDebugFileSize)) {
			$useMinMax = false;
			if (isset($maxDebugFileSize['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE, $maxDebugFileSize['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maxDebugFileSize['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE, $maxDebugFileSize['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE, $maxDebugFileSize, $comparison);
	}

	/**
	 * Filter the query on the temp_path column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTempPath('fooValue');   // WHERE temp_path = 'fooValue'
	 * $query->filterByTempPath('%fooValue%'); // WHERE temp_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $tempPath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByTempPath($tempPath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($tempPath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $tempPath)) {
				$tempPath = str_replace('*', '%', $tempPath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::TEMP_PATH, $tempPath, $comparison);
	}

	/**
	 * Filter the query on the check_for_updates column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckForUpdates(true); // WHERE check_for_updates = true
	 * $query->filterByCheckForUpdates('yes'); // WHERE check_for_updates = true
	 * </code>
	 *
	 * @param     boolean|string $checkForUpdates The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckForUpdates($checkForUpdates = null, $comparison = null)
	{
		if (is_string($checkForUpdates)) {
			$check_for_updates = in_array(strtolower($checkForUpdates), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_FOR_UPDATES, $checkForUpdates, $comparison);
	}

	/**
	 * Filter the query on the check_for_orphaned_hosts column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckForOrphanedHosts(true); // WHERE check_for_orphaned_hosts = true
	 * $query->filterByCheckForOrphanedHosts('yes'); // WHERE check_for_orphaned_hosts = true
	 * </code>
	 *
	 * @param     boolean|string $checkForOrphanedHosts The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckForOrphanedHosts($checkForOrphanedHosts = null, $comparison = null)
	{
		if (is_string($checkForOrphanedHosts)) {
			$check_for_orphaned_hosts = in_array(strtolower($checkForOrphanedHosts), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_HOSTS, $checkForOrphanedHosts, $comparison);
	}

	/**
	 * Filter the query on the bare_update_check column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByBareUpdateCheck(true); // WHERE bare_update_check = true
	 * $query->filterByBareUpdateCheck('yes'); // WHERE bare_update_check = true
	 * </code>
	 *
	 * @param     boolean|string $bareUpdateCheck The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByBareUpdateCheck($bareUpdateCheck = null, $comparison = null)
	{
		if (is_string($bareUpdateCheck)) {
			$bare_update_check = in_array(strtolower($bareUpdateCheck), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::BARE_UPDATE_CHECK, $bareUpdateCheck, $comparison);
	}

	/**
	 * Filter the query on the log_current_states column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLogCurrentStates(true); // WHERE log_current_states = true
	 * $query->filterByLogCurrentStates('yes'); // WHERE log_current_states = true
	 * </code>
	 *
	 * @param     boolean|string $logCurrentStates The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLogCurrentStates($logCurrentStates = null, $comparison = null)
	{
		if (is_string($logCurrentStates)) {
			$log_current_states = in_array(strtolower($logCurrentStates), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::LOG_CURRENT_STATES, $logCurrentStates, $comparison);
	}

	/**
	 * Filter the query on the check_workers column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckWorkers(1234); // WHERE check_workers = 1234
	 * $query->filterByCheckWorkers(array(12, 34)); // WHERE check_workers IN (12, 34)
	 * $query->filterByCheckWorkers(array('min' => 12)); // WHERE check_workers > 12
	 * </code>
	 *
	 * @param     mixed $checkWorkers The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByCheckWorkers($checkWorkers = null, $comparison = null)
	{
		if (is_array($checkWorkers)) {
			$useMinMax = false;
			if (isset($checkWorkers['min'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_WORKERS, $checkWorkers['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkWorkers['max'])) {
				$this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_WORKERS, $checkWorkers['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::CHECK_WORKERS, $checkWorkers, $comparison);
	}

	/**
	 * Filter the query on the query_socket column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByQuerySocket('fooValue');   // WHERE query_socket = 'fooValue'
	 * $query->filterByQuerySocket('%fooValue%'); // WHERE query_socket LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $querySocket The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByQuerySocket($querySocket = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($querySocket)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $querySocket)) {
				$querySocket = str_replace('*', '%', $querySocket);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosMainConfigurationPeer::QUERY_SOCKET, $querySocket, $comparison);
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByOcspCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::OCSP_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::OCSP_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByOcspCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByOcspCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByOcspCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByOcspCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByOcspCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByOcspCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByOcspCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByOcspCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByOcspCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByOchpCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::OCHP_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::OCHP_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByOchpCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByOchpCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByOchpCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByOchpCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByOchpCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByOchpCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByOchpCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByOchpCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByOchpCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByHostPerfdataCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByHostPerfdataCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByHostPerfdataCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByHostPerfdataCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByHostPerfdataCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByHostPerfdataCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByHostPerfdataCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByHostPerfdataCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByHostPerfdataCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByServicePerfdataCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByServicePerfdataCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByServicePerfdataCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByServicePerfdataCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByServicePerfdataCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByServicePerfdataCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByServicePerfdataCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByServicePerfdataCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByServicePerfdataCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByHostPerfdataFileProcessingCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByHostPerfdataFileProcessingCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByHostPerfdataFileProcessingCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByHostPerfdataFileProcessingCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByHostPerfdataFileProcessingCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByHostPerfdataFileProcessingCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByHostPerfdataFileProcessingCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByHostPerfdataFileProcessingCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByHostPerfdataFileProcessingCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByHostPerfdataFileProcessingCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByServicePerfdataFileProcessingCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByServicePerfdataFileProcessingCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByServicePerfdataFileProcessingCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByServicePerfdataFileProcessingCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByServicePerfdataFileProcessingCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByServicePerfdataFileProcessingCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByServicePerfdataFileProcessingCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByServicePerfdataFileProcessingCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByServicePerfdataFileProcessingCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByServicePerfdataFileProcessingCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByGlobalServiceEventHandler($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByGlobalServiceEventHandler() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByGlobalServiceEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByGlobalServiceEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByGlobalServiceEventHandler');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByGlobalServiceEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByGlobalServiceEventHandler relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByGlobalServiceEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByGlobalServiceEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByGlobalServiceEventHandler', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByGlobalHostEventHandler($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByGlobalHostEventHandler() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByGlobalHostEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByGlobalHostEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByGlobalHostEventHandler');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByGlobalHostEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByGlobalHostEventHandler relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByGlobalHostEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByGlobalHostEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByGlobalHostEventHandler', 'NagiosCommandQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosMainConfiguration $nagiosMainConfiguration Object to remove from the list of results
	 *
	 * @return    NagiosMainConfigurationQuery The current query, for fluid interface
	 */
	public function prune($nagiosMainConfiguration = null)
	{
		if ($nagiosMainConfiguration) {
			$this->addUsingAlias(NagiosMainConfigurationPeer::ID, $nagiosMainConfiguration->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosMainConfigurationQuery
