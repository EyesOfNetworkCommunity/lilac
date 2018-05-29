<?php
/*
Lilac - A Nagios Configuration Tool
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
Lilac Index Page, Displays Menu, and Statistics
*/
include_once('includes/config.inc');

require_once('classes/NagiosMainConfiguration.php');

// Get Existing Main Configuration
$mainConfig = $lilac->get_main_conf();



if(isset($_GET['request'])) {
	if($_GET['request'] == "delete" && $_GET['section'] == "broker") {
		// We want to delete an event broker module
		$module = NagiosBrokerModulePeer::retrieveByPK($_GET['module_id']);
		if($module) {
			$module->delete();
			$success = "Deleted event broker module.";	
		}
	}
}

if(isset($_POST['request'])) {
	$modifiedData = array();
	if(isset($_POST['main_config']) && count($_POST['main_config'])) {
		foreach($_POST['main_config'] as $key=> $value) {
			if(is_array($value)) {
				$modifiedData[$key] = $value;
			} else {
				$modifiedData[$key] = (string)$value;
			}
		}
	}
	if($_POST['request'] == 'main_modify_paths') {
		// Field Error Checking
		if($_POST['main_config']['config_dir'] == '') {
			$error = "You must at least provide a Configuration Directory";
		}
		else {
			$mainConfig->setConfigDir($_POST['main_config']['config_dir']);
			if(isset($_POST['main_config']['log_file'])) {
				$mainConfig->setLogFile($_POST['main_config']['log_file']);
			}
			else {
				$mainConfig->setLogFile(null);
			}
			if(isset($_POST['main_config']['object_cache_file'])) {
				$mainConfig->setObjectCacheFile($_POST['main_config']['object_cache_file']);
			}
			else {
				$mainConfig->setObjectCacheFile(null);
			}
			if(isset($_POST['main_config']['precached_object_file'])) {
				$mainConfig->setPrecachedObjectFile($_POST['main_config']['precached_object_file']);
			}
			else {
				$mainConfig->setPrecachedObjectFile(null);
			}
			if(isset($_POST['main_config']['temp_file'])) {
				$mainConfig->setTempFile($_POST['main_config']['temp_file']);
			}
			else {
				$mainConfig->setTempFile(null);
			}
			if(isset($_POST['main_config']['temp_path'])) {
				$mainConfig->setTempPath($_POST['main_config']['temp_path']);
			}
			else {
				$mainConfig->setTempPath(null);
			}
			if(isset($_POST['main_config']['status_file'])) {
				$mainConfig->setStatusFile($_POST['main_config']['status_file']);
			}
			else {
				$mainConfig->setStatusFile(null);
			}
			if(isset($_POST['main_config']['log_archive_path'])) {
				$mainConfig->setLogArchivePath($_POST['main_config']['log_archive_path']);
			}
			else {
				$mainConfig->setLogArchivePath(null);
			}
			if(isset($_POST['main_config']['command_file'])) {
				$mainConfig->setCommandFile($_POST['main_config']['command_file']);
			}
			else {
				$mainConfig->setCommandFile(null);
			}
			if(isset($_POST['main_config']['lock_file'])) {
				$mainConfig->setLockFile($_POST['main_config']['lock_file']);
			}
			else {
				$mainConfig->setLockFile(null);
			}
			if(isset($_POST['main_config']['state_retention_file'])) {
				$mainConfig->setStateRetentionFile($_POST['main_config']['state_retention_file']);
			}
			else {
				$mainConfig->setStateRetentionFile(null);
			}
			if(isset($_POST['main_config']['check_result_path'])) {
				$mainConfig->setCheckResultPath($_POST['main_config']['check_result_path']);
			}
			else {
				$mainConfig->setCheckResultPath(null);
			}
			$mainConfig->save();
			$success = "Modified Main Paths Configuration";
		}
	}
	if($_POST['request'] == 'main_modify_status') {
		// Field Error Checking
		if(isset($_POST['main_config']['status_update_interval'])) {
			$mainConfig->setStatusUpdateInterval($_POST['main_config']['status_update_interval']);
		}
		else {
			$mainConfig->setStatusUpdateInterval(null);
		}
		if(isset($_POST['main_config']['translate_passive_host_checks'])) {
			$mainConfig->setTranslatePassiveHostChecks($_POST['main_config']['translate_passive_host_checks']);
		}
		else {
			$mainConfig->setTranslatePassiveHostChecks(null);
		}
		if(isset($_POST['main_config']['passive_host_checks_are_soft'])) {
			$mainConfig->setPassiveHostChecksAreSoft($_POST['main_config']['passive_host_checks_are_soft']);
		}
		else {
			$mainConfig->setPassiveHostChecksAreSoft(null);
		}
		if(isset($_POST['main_config']['soft_state_dependencies'])) {
			$mainConfig->setSoftStateDependencies($_POST['main_config']['soft_state_dependencies']);
		}
		else {
			$mainConfig->setSoftStateDependencies(null);
		}
		if(isset($_POST['main_config']['enable_predictive_host_dependency_checks'])) {
			$mainConfig->setEnablePredictiveHostDependencyChecks($_POST['main_config']['enable_predictive_host_dependency_checks']);
		}
		else {
			$mainConfig->setEnablePredictiveHostDependencyChecks(null);
		}
		if(isset($_POST['main_config']['enable_predictive_service_dependency_checks'])) {
			$mainConfig->setEnablePredictiveServiceDependencyChecks($_POST['main_config']['enable_predictive_service_dependency_checks']);
		}
		else {
			$mainConfig->setEnablePredictiveServiceDependencyChecks(null);
		}
		if(isset($_POST['main_config']['cached_host_check_horizon'])) {
			$mainConfig->setCachedHostCheckHorizon($_POST['main_config']['cached_host_check_horizon']);
		}
		else {
			$mainConfig->setCachedHostCheckHorizon(null);
		}
		if(isset($_POST['main_config']['cached_service_check_horizon'])) {
			$mainConfig->setCachedServiceCheckHorizon($_POST['main_config']['cached_service_check_horizon']);
		}
		else {
			$mainConfig->setCachedServiceCheckHorizon(null);
		}
		if(isset($_POST['main_config']['check_for_orphaned_hosts'])) {
			$mainConfig->setCheckForOrphanedHosts($_POST['main_config']['check_for_orphaned_hosts']);
		}
		else {
			$mainConfig->setCheckForOrphanedHosts(null);
		}
		$mainConfig->save();
		$success = "Modified Main Status Configuration";

	}
	if($_POST['request'] == 'main_modify_security') {
		// Field Error Checking
		if(isset($_POST['main_config']['nagios_user'])) {
			$mainConfig->setNagiosUser($_POST['main_config']['nagios_user']);
		}
		else {
			$mainConfig->setNagiosUser(null);
		}
		if(isset($_POST['main_config']['nagios_group'])) {
			$mainConfig->setNagiosGroup($_POST['main_config']['nagios_group']);
		}
		else {
			$mainConfig->setNagiosGroup(null);
		}
		$mainConfig->save();
		$success = "Modified Main Security Configuration";
	}
	if($_POST['request'] == 'main_modify_restart') {
		// Field Error Checking
		if(isset($_POST['main_config']['enable_notifications'])) {
			$mainConfig->setEnableNotifications($_POST['main_config']['enable_notifications']);
		}
		else {
			$mainConfig->setEnableNotifications(null);
		}
		if(isset($_POST['main_config']['execute_service_checks'])) {
			$mainConfig->setExecuteServiceChecks($_POST['main_config']['execute_service_checks']);
		}
		else {
			$mainConfig->setExecuteServiceChecks(null);
		}
		if(isset($_POST['main_config']['accept_passive_service_checks'])) {
			$mainConfig->setAcceptPassiveServiceChecks($_POST['main_config']['accept_passive_service_checks']);
		}
		else {
			$mainConfig->setAcceptPassiveServiceChecks(null);
		}
		if(isset($_POST['main_config']['execute_host_checks'])) {
			$mainConfig->setExecuteHostChecks($_POST['main_config']['execute_host_checks']);
		}
		else {
			$mainConfig->setExecuteHostChecks(null);
		}
		if(isset($_POST['main_config']['accept_passive_host_checks'])) {
			$mainConfig->setAcceptPassiveHostChecks($_POST['main_config']['accept_passive_host_checks']);
		}
		else {
			$mainConfig->setAcceptPassiveHostChecks(null);
		}
		if(isset($_POST['main_config']['enable_event_handlers'])) {
			$mainConfig->setEnableEventHandlers($_POST['main_config']['enable_event_handlers']);
		}
		else {
			$mainConfig->setEnableEventHandlers(null);
		}
		$mainConfig->save();
		$success = "Modified Main Restart Actions Configuration";
	}
	if($_POST['request'] == 'main_modify_logging') {
		if(isset($_POST['main_config']['log_rotation_method'])) {
			$mainConfig->setLogRotationMethod($_POST['main_config']['log_rotation_method']);
		}
		else {
			$mainConfig->setLogRotationMethod(null);
		}
		if(isset($_POST['main_config']['use_syslog'])) {
			$mainConfig->setUseSyslog($_POST['main_config']['use_syslog']);
		}
		else {
			$mainConfig->setUseSyslog(null);
		}
		if(isset($_POST['main_config']['log_notifications'])) {
			$mainConfig->setLogNotifications($_POST['main_config']['log_notifications']);
		}
		else {
			$mainConfig->setLogNotifications(null);
		}
		if(isset($_POST['main_config']['log_service_retries'])) {
			$mainConfig->setLogServiceRetries($_POST['main_config']['log_service_retries']);
		}
		else {
			$mainConfig->setLogServiceRetries(null);
		}
		if(isset($_POST['main_config']['log_host_retries'])) {
			$mainConfig->setLogHostRetries($_POST['main_config']['log_host_retries']);
		}
		else {
			$mainConfig->setLogHostRetries(null);
		}
		if(isset($_POST['main_config']['log_event_handlers'])) {
			$mainConfig->setLogEventHandlers($_POST['main_config']['log_event_handlers']);
		}
		else {
			$mainConfig->setLogEventHandlers(null);
		}
		if(isset($_POST['main_config']['log_initial_states'])) {
			$mainConfig->setLogInitialStates($_POST['main_config']['log_initial_states']);
		}
		else {
			$mainConfig->setLogInitialStates(null);
		}
		if(isset($_POST['main_config']['log_external_commands'])) {
			$mainConfig->setLogExternalCommands($_POST['main_config']['log_external_commands']);
		}
		else {
			$mainConfig->setLogExternalCommands(null);
		}
		if(isset($_POST['main_config']['log_passive_checks'])) {
			$mainConfig->setLogPassiveChecks($_POST['main_config']['log_passive_checks']);
		}
		else {
			$mainConfig->setLogPassiveChecks(null);
		}
		$mainConfig->save();
		$success = "Modified Main Logging Configuration";
	}
	if($_POST['request'] == 'main_modify_external') {
		if(isset($_POST['main_config']['check_external_commands'])) {
			$mainConfig->setCheckExternalCommands($_POST['main_config']['check_external_commands']);
		}
		else {
			$mainConfig->setCheckExternalCommands(null);
		}
		if(isset($_POST['main_config']['command_check_interval'])) {
			$mainConfig->setCommandCheckInterval($_POST['main_config']['command_check_interval']);
		}
		else {
			$mainConfig->setCommandCheckInterval(null);
		}
		if(isset($_POST['main_config']['external_command_buffer_slots'])) {
			$mainConfig->setExternalCommandBufferSlots($_POST['main_config']['external_command_buffer_slots']);
		}
		else {
			$mainConfig->setExternalCommandBufferSlots(null);
		}
		$mainConfig->save();
		$success = "Modified Main Logging Configuration";
	}
	if($_POST['request'] == 'main_modify_retention') {
		if(isset($_POST['main_config']['retain_state_information'])) {
			$mainConfig->setRetainStateInformation($_POST['main_config']['retain_state_information']);
		}
		else {
			$mainConfig->setRetainStateInformation(null);
		}
		if(isset($_POST['main_config']['retention_update_interval'])) {
			$mainConfig->setRetentionUpdateInterval($_POST['main_config']['retention_update_interval']);
		}
		else {
			$mainConfig->setRetentionUpdateInterval(null);
		}
		if(isset($_POST['main_config']['use_retained_program_state'])) {
			$mainConfig->setUseRetainedProgramState($_POST['main_config']['use_retained_program_state']);
		}
		else {
			$mainConfig->setUseRetainedProgramState(null);
		}
		if(isset($_POST['main_config']['use_retained_scheduling_info'])) {
			$mainConfig->setUseRetainedSchedulingInfo($_POST['main_config']['use_retained_scheduling_info']);
		}
		else {
			$mainConfig->setUseRetainedSchedulingInfo(null);
		}
		if(isset($_POST['main_config']['retained_host_attribute_mask'])) {
			$mainConfig->setRetainedHostAttributeMask($_POST['main_config']['retained_host_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedHostAttributeMask(null);
		}
		if(isset($_POST['main_config']['retained_service_attribute_mask'])) {
			$mainConfig->setRetainedServiceAttributeMask($_POST['main_config']['retained_service_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedServiceAttributeMask(null);
		}
		if(isset($_POST['main_config']['retained_process_host_attribute_mask'])) {
			$mainConfig->setRetainedProcessHostAttributeMask($_POST['main_config']['retained_process_host_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedProcessHostAttributeMask(null);
		}
		if(isset($_POST['main_config']['retained_process_service_attribute_mask'])) {
			$mainConfig->setRetainedProcessServiceAttributeMask($_POST['main_config']['retained_process_service_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedProcessServiceAttributeMask(null);
		}
		if(isset($_POST['main_config']['retained_contact_host_attribute_mask'])) {
			$mainConfig->setRetainedContactHostAttributeMask($_POST['main_config']['retained_contact_host_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedContactHostAttributeMask(null);
		}
		if(isset($_POST['main_config']['retained_contact_service_attribute_mask'])) {
			$mainConfig->setRetainedContactServiceAttributeMask($_POST['main_config']['retained_contact_service_attribute_mask']);
		}
		else {
			$mainConfig->setRetainedContactServiceAttributeMask(null);
		}
		if(isset($_POST['main_config']['max_check_result_file_age'])) {
			$mainConfig->setMaxCheckResultFileAge($_POST['main_config']['max_check_result_file_age']);
		}
		else {
			$mainConfig->setMaxCheckResultFileAge(null);
		}
		$mainConfig->save();
		$success = "Modified Main Retention Configuration";
	}
	if($_POST['request'] == 'main_modify_global') {
		if(isset($_POST['main_config']['global_host_event_handler'])) {
			$mainConfig->setGlobalHostEventHandler($_POST['main_config']['global_host_event_handler']);
		}
		else {
			$mainConfig->setGlobalHostEventHandler(null);
		}
		if(isset($_POST['main_config']['global_service_event_handler'])) {
			$mainConfig->setGlobalServiceEventHandler($_POST['main_config']['global_service_event_handler']);
		}
		else {
			$mainConfig->setGlobalServiceEventHandler(null);
		}
		if(isset($_POST['main_config']['check_for_updates'])) {
			$mainConfig->setCheckForUpdates($_POST['main_config']['check_for_updates']);
		}
		else {
			$mainConfig->setCheckForUpdates(null);
		}
		if(isset($_POST['main_config']['bare_update_check'])) {
			$mainConfig->setBareUpdateCheck($_POST['main_config']['bare_update_check']);
		}
		else {
			$mainConfig->setBareUpdateCheck(null);
		}
		$mainConfig->save();
		$success = "Modified Main Global Configuration";
	}
	if($_POST['request'] == 'main_modify_intervals') {
		if(isset($_POST['main_config']['sleep_time'])) {
			$mainConfig->setSleepTime($_POST['main_config']['sleep_time']);
		}
		else {
			$mainConfig->setSleepTime(null);
		}
		if(isset($_POST['main_config']['service_inter_check_delay_method'])) {
			$mainConfig->setServiceInterCheckDelayMethod($_POST['main_config']['service_inter_check_delay_method']);
		}
		else {
			$mainConfig->setServiceInterCheckDelayMethod(null);
		}
		if(isset($_POST['main_config']['max_service_check_spread'])) {
			$mainConfig->setMaxServiceCheckSpread($_POST['main_config']['max_service_check_spread']);
		}
		else {
			$mainConfig->setMaxServiceCheckSpread(null);
		}
		if(isset($_POST['main_config']['host_inter_check_delay_method'])) {
			$mainConfig->setHostInterCheckDelayMethod($_POST['main_config']['host_inter_check_delay_method']);
		}
		else {
			$mainConfig->setHostInterCheckDelayMethod(null);
		}
		if(isset($_POST['main_config']['max_host_check_spread'])) {
			$mainConfig->setMaxHostCheckSpread($_POST['main_config']['max_host_check_spread']);
		}
		else {
			$mainConfig->setMaxHostCheckSpread(null);
		}
		if(isset($_POST['main_config']['service_interleave_factor'])) {
			$mainConfig->setServiceInterleaveFactor($_POST['main_config']['service_interleave_factor']);
		}
		else {
			$mainConfig->setServiceInterleaveFactor(null);
		}
		if(isset($_POST['main_config']['max_concurrent_checks'])) {
			$mainConfig->setMaxConcurrentChecks($_POST['main_config']['max_concurrent_checks']);
		}
		else {
			$mainConfig->setMaxConcurrentChecks(null);
		}
		if(isset($_POST['main_config']['service_reaper_frequency'])) {
			$mainConfig->setServiceReaperFrequency($_POST['main_config']['service_reaper_frequency']);
		}
		else {
			$mainConfig->setServiceReaperFrequency(null);
		}
		if(isset($_POST['main_config']['interval_length'])) {
			$mainConfig->setIntervalLength($_POST['main_config']['interval_length']);
		}
		else {
			$mainConfig->setIntervalLength(null);
		}
		if(isset($_POST['main_config']['auto_reschedule_checks'])) {
			$mainConfig->setAutoRescheduleChecks($_POST['main_config']['auto_reschedule_checks']);
		}
		else {
			$mainConfig->setAutoRescheduleChecks(null);
		}
		if(isset($_POST['main_config']['auto_rescheduling_interval'])) {
			$mainConfig->setAutoReschedulingInterval($_POST['main_config']['auto_rescheduling_interval']);
		}
		else {
			$mainConfig->setAutoReschedulingInterval(null);
		}
		if(isset($_POST['main_config']['auto_rescheduling_window'])) {
			$mainConfig->setAutoReschedulingWindow($_POST['main_config']['auto_rescheduling_window']);
		}
		else {
			$mainConfig->setAutoReschedulingWindow(null);
		}
		if(isset($_POST['main_config']['use_aggressive_host_checking'])) {
			$mainConfig->setUseAggressiveHostChecking($_POST['main_config']['use_aggressive_host_checking']);
		}
		else {
			$mainConfig->setUseAggressiveHostChecking(null);
		}
		if(isset($_POST['main_config']['check_result_reaper_frequency'])) {
			$mainConfig->setCheckResultReaperFrequency($_POST['main_config']['check_result_reaper_frequency']);
		}
		else {
			$mainConfig->setCheckResultReaperFrequency(null);
		}
		if(isset($_POST['main_config']['max_check_result_reaper_time'])) {
			$mainConfig->setMaxCheckResultReaperTime($_POST['main_config']['max_check_result_reaper_time']);
		}
		else {
			$mainConfig->setMaxCheckResultReaperTime(null);
		}
		if(isset($_POST['main_config']['additional_freshness_latency'])) {
			$mainConfig->setAdditionalFreshnessLatency($_POST['main_config']['additional_freshness_latency']);
		}
		else {
			$mainConfig->setAdditionalFreshnessLatency(null);
		}
		$mainConfig->save();
		$success = "Modified Main Intervals Configuration";
	}
	if($_POST['request'] == 'main_modify_flap') {
		if(isset($_POST['main_config']['enable_flap_detection'])) {
			$mainConfig->setEnableFlapDetection($_POST['main_config']['enable_flap_detection']);
		}
		else {
			$mainConfig->setEnableFlapDetection(null);
		}
		if(isset($_POST['main_config']['low_service_flap_threshold'])) {
			$mainConfig->setLowServiceFlapThreshold($_POST['main_config']['low_service_flap_threshold']);
		}
		else {
			$mainConfig->setLowServiceFlapThreshold(null);
		}
		if(isset($_POST['main_config']['high_service_flap_threshold'])) {
			$mainConfig->setHighServiceFlapThreshold($_POST['main_config']['high_service_flap_threshold']);
		}
		else {
			$mainConfig->setHighServiceFlapThreshold(null);
		}
		if(isset($_POST['main_config']['low_host_flap_threshold'])) {
			$mainConfig->setLowHostFlapThreshold($_POST['main_config']['low_host_flap_threshold']);
		}
		else {
			$mainConfig->setLowHostFlapThreshold(null);
		}
		if(isset($_POST['main_config']['high_host_flap_threshold'])) {
			$mainConfig->setHighHostFlapThreshold($_POST['main_config']['high_host_flap_threshold']);
		}
		else {
			$mainConfig->setHighHostFlapThreshold(null);
		}
		$mainConfig->save();
		$success = "Modified Main Flapping Configuration";
	}
	if($_POST['request'] == 'main_modify_timeouts') {
		if(isset($_POST['main_config']['service_check_timeout'])) {
			$mainConfig->setServiceCheckTimeout($_POST['main_config']['service_check_timeout']);
		}
		else {
			$mainConfig->setServiceCheckTimeout(null);
		}
		if(isset($_POST['main_config']['host_check_timeout'])) {
			$mainConfig->setHostCheckTimeout($_POST['main_config']['host_check_timeout']);
		}
		else {
			$mainConfig->setHostCheckTimeout(null);
		}
		if(isset($_POST['main_config']['event_handler_timeout'])) {
			$mainConfig->setEventHandlerTimeout($_POST['main_config']['event_handler_timeout']);
		}
		else {
			$mainConfig->setEventHandlerTimeout(null);
		}
		if(isset($_POST['main_config']['notification_timeout'])) {
			$mainConfig->setNotificationTimeout($_POST['main_config']['notification_timeout']);
		}
		else {
			$mainConfig->setNotificationTimeout(null);
		}
		if(isset($_POST['main_config']['ocsp_timeout'])) {
			$mainConfig->setOcspTimeout($_POST['main_config']['ocsp_timeout']);
		}
		else {
			$mainConfig->setOcspTimeout(null);
		}
		if(isset($_POST['main_config']['ochp_timeout'])) {
			$mainConfig->setOchpTimeout($_POST['main_config']['ochp_timeout']);
		}
		else {
			$mainConfig->setOchpTimeout(null);
		}
		if(isset($_POST['main_config']['perfdata_timeout'])) {
			$mainConfig->setPerfdataTimeout($_POST['main_config']['perfdata_timeout']);
		}
		else {
			$mainConfig->setPerfdataTimeout(null);
		}
		$mainConfig->save();
		$success = "Modified Main Timeouts Configuration";
	}
	if($_POST['request'] == 'main_modify_obsess') {
		if(isset($_POST['main_config']['obsess_over_services'])) {
			$mainConfig->setObsessOverServices($_POST['main_config']['obsess_over_services']);
		}
		else {
			$mainConfig->setObsessOverServices(null);
		}
		if(isset($_POST['main_config']['ocsp_command'])) {
			$mainConfig->setOcspCommand($_POST['main_config']['ocsp_command']);
		}
		else {
			$mainConfig->setOcspCommand(null);
		}
		if(isset($_POST['main_config']['obsess_over_hosts'])) {
			$mainConfig->setObsessOverHosts($_POST['main_config']['obsess_over_hosts']);
		}
		else {
			$mainConfig->setObsessOverHosts(null);
		}
		if(isset($_POST['main_config']['ochp_command'])) {
			$mainConfig->setOchpCommand($_POST['main_config']['ochp_command']);
		}
		else {
			$mainConfig->setOchpCommand(null);
		}
		$mainConfig->save();
		$success = "Modified Main Obsession Configuration";
	}
	if($_POST['request'] == 'main_modify_freshness') {
		if(isset($_POST['main_config']['check_service_freshness'])) {
			$mainConfig->setCheckServiceFreshness($_POST['main_config']['check_service_freshness']);
		}
		else {
			$mainConfig->setCheckServiceFreshness(null);
		}
		if(isset($_POST['main_config']['service_freshness_check_interval'])) {
			$mainConfig->setServiceFreshnessCheckInterval($_POST['main_config']['service_freshness_check_interval']);
		}
		else {
			$mainConfig->setServiceFreshnessCheckInterval(null);
		}
		if(isset($_POST['main_config']['check_host_freshness'])) {
			$mainConfig->setCheckHostFreshness($_POST['main_config']['check_host_freshness']);
		}
		else {
			$mainConfig->setCheckHostFreshness(null);
		}
		if(isset($_POST['main_config']['host_freshness_check_interval'])) {
			$mainConfig->setHostFreshnessCheckInterval($_POST['main_config']['host_freshness_check_interval']);
		}
		else {
			$mainConfig->setHostFreshnessCheckInterval(null);
		}
		$mainConfig->save();
		$success = "Modified Main Freshness Configuration";
	}
	if($_POST['request'] == 'main_modify_debug') {
		if(isset($_POST['main_config']['debug_file'])) {
			$mainConfig->setDebugFile($_POST['main_config']['debug_file']);
		}
		else {
			$mainConfig->setDebugFile(null);
		}
		if(isset($_POST['main_config']['debug_verbosity'])) {
			$mainConfig->setDebugVerbosity($_POST['main_config']['debug_verbosity']);
		}
		else {
			$mainConfig->setDebugVerbosity(null);
		}
		if(isset($_POST['main_config']['max_debug_file_size'])) {
			$mainConfig->setMaxDebugFileSize($_POST['main_config']['max_debug_file_size']);
		}
		else {
			$mainConfig->setMaxDebugFileSize(null);
		}
		$newDebugLevel = 0;
		if(isset($_POST['main_config']['debug_level_everything'])) {
			$newDebugLevel = -1;
		}
		else {
			if(isset($_POST['main_config']['debug_level_function'])) $newDebugLevel += 1;
			if(isset($_POST['main_config']['debug_level_config'])) $newDebugLevel += 2;
			if(isset($_POST['main_config']['debug_level_process'])) $newDebugLevel += 4;
			if(isset($_POST['main_config']['debug_level_event'])) $newDebugLevel += 8;
			if(isset($_POST['main_config']['debug_level_check'])) $newDebugLevel += 16;
			if(isset($_POST['main_config']['debug_level_notification'])) $newDebugLevel += 32;
			if(isset($_POST['main_config']['debug_level_broker'])) $newDebugLevel += 64;
		}
		$mainConfig->setDebugLevel($newDebugLevel);
		$mainConfig->save();
		$success = "Modified Main Debug Configuration";
	}
	if($_POST['request'] == 'main_modify_other') {
		if(isset($_POST['main_config']['use_large_installation_tweaks'])) {
			$mainConfig->setUseLargeInstallationTweaks($_POST['main_config']['use_large_installation_tweaks']);
		}
		else {
			$mainConfig->setUseLargeInstallationTweaks(null);
		}
		if(isset($_POST['main_config']['free_child_process_memory'])) {
			$mainConfig->setFreeChildProcessMemory($_POST['main_config']['free_child_process_memory']);
		}
		else {
			$mainConfig->setFreeChildProcessMemory(null);
		}
		if(isset($_POST['main_config']['child_processes_fork_twice'])) {
			$mainConfig->setChildProcessesForkTwice($_POST['main_config']['child_processes_fork_twice']);
		}
		else {
			$mainConfig->setChildProcessesForkTwice(null);
		}
		if(isset($_POST['main_config']['enable_environment_macros'])) {
			$mainConfig->setEnableEnvironmentMacros($_POST['main_config']['enable_environment_macros']);
		}
		else {
			$mainConfig->setEnableEnvironmentMacros(null);
		}
		if(isset($_POST['main_config']['process_performance_data'])) {
			$mainConfig->setProcessPerformanceData($_POST['main_config']['process_performance_data']);
		}
		else {
			$mainConfig->setProcessPerformanceData(null);
		}
		if(isset($_POST['main_config']['host_perfdata_command'])) {
			$mainConfig->setHostPerfdataCommand($_POST['main_config']['host_perfdata_command']);
		}
		else {
			$mainConfig->setHostPerfdataCommand(null);
		}
		if(isset($_POST['main_config']['host_perfdata_file_mode'])) {
			$mainConfig->setHostPerfdataFileMode($_POST['main_config']['host_perfdata_file_mode']);
		}
		else {
			$mainConfig->setHostPerfdataFileMode(null);
		}

		if(isset($_POST['main_config']['host_perfdata_file'])) {
			$mainConfig->setHostPerfdataFile($_POST['main_config']['host_perfdata_file']);
		}
		else {
			$mainConfig->setHostPerfdataFile(null);
		}
		if(isset($_POST['main_config']['host_perfdata_file_template'])) {
			$mainConfig->setHostPerfdataFileTemplate($_POST['main_config']['host_perfdata_file_template']);
		}
		else {
			$mainConfig->setHostPerfdataFileTemplate(null);
		}
		if(isset($_POST['main_config']['host_perfdata_file_processing_interval'])) {
			$mainConfig->setHostPerfdataFileProcessingInterval($_POST['main_config']['host_perfdata_file_processing_interval']);
		}
		else {
			$mainConfig->setHostPerfdataFileProcessingInterval(null);
		}

		if(isset($_POST['main_config']['host_perfdata_file_processing_command'])) {
			$mainConfig->setHostPerfdataFileProcessingCommand($_POST['main_config']['host_perfdata_file_processing_command']);
		}
		else {
			$mainConfig->setHostPerfdataFileProcessingCommand(null);
		}
		if(isset($_POST['main_config']['service_perfdata_command'])) {
			$mainConfig->setServicePerfdataCommand($_POST['main_config']['service_perfdata_command']);
		}
		else {
			$mainConfig->setServicePerfdataCommand(null);
		}
		if(isset($_POST['main_config']['service_perfdata_file'])) {
			$mainConfig->setServicePerfdataFile($_POST['main_config']['service_perfdata_file']);
		}
		else {
			$mainConfig->setServicePerfdataFile(null);
		}
		if(isset($_POST['main_config']['service_perfdata_file_mode'])) {
			$mainConfig->setServicePerfdataFileMode($_POST['main_config']['service_perfdata_file_mode']);
		}
		else {
			$mainConfig->setServicePerfdataFileMode(null);
		}

		if(isset($_POST['main_config']['service_perfdata_file_template'])) {
			$mainConfig->setServicePerfdataFileTemplate($_POST['main_config']['service_perfdata_file_template']);
		}
		else {
			$mainConfig->setServicePerfdataFileTemplate(null);
		}
		if(isset($_POST['main_config']['service_perfdata_file_processing_interval'])) {
			$mainConfig->setServicePerfdataFileProcessingInterval($_POST['main_config']['service_perfdata_file_processing_interval']);
		}
		else {
			$mainConfig->setServicePerfdataFileProcessingInterval(null);
		}

		if(isset($_POST['main_config']['service_perfdata_file_processing_command'])) {
			$mainConfig->setServicePerfdataFileProcessingCommand($_POST['main_config']['service_perfdata_file_processing_command']);
		}
		else {
			$mainConfig->setServicePerfdataFileProcessingCommand(null);
		}


		if(isset($_POST['main_config']['check_for_orphaned_services'])) {
			$mainConfig->setCheckForOrphanedServices($_POST['main_config']['check_for_orphaned_services']);
		}
		else {
			$mainConfig->setCheckForOrphanedServices(null);
		}
		if(isset($_POST['main_config']['date_format'])) {
			$mainConfig->setDateFormat($_POST['main_config']['date_format']);
		}
		else {
			$mainConfig->setDateFormat(null);
		}
		if(isset($_POST['main_config']['illegal_object_name_chars'])) {
			$mainConfig->setIllegalObjectNameChars($_POST['main_config']['illegal_object_name_chars']);
		}
		else {
			$mainConfig->setIllegalObjectNameChars(null);
		}
		if(isset($_POST['main_config']['illegal_macro_output_chars'])) {
			$mainConfig->setIllegalMacroOutputChars($_POST['main_config']['illegal_macro_output_chars']);
		}
		else {
			$mainConfig->setIllegalMacroOutputChars(null);
		}
		if(isset($_POST['main_config']['use_regexp_matching'])) {
			$mainConfig->setUseRegexpMatching($_POST['main_config']['use_regexp_matching']);
		}
		else {
			$mainConfig->setUseRegexpMatching(null);
		}
		if(isset($_POST['main_config']['use_true_regexp_matching'])) {
			$mainConfig->setUseTrueRegexpMatching($_POST['main_config']['use_true_regexp_matching']);
		}
		else {
			$mainConfig->setUseTrueRegexpMatching(null);
		}

		if(isset($_POST['main_config']['enable_embedded_perl'])) {
			$mainConfig->setEnableEmbeddedPerl($_POST['main_config']['enable_embedded_perl']);
		}
		else {
			$mainConfig->setEnableEmbeddedPerl(null);
		}
		if(isset($_POST['main_config']['use_embedded_perl_implicitly'])) {
			$mainConfig->setUseEmbeddedPerlImplicitly($_POST['main_config']['use_embedded_perl_implicitly']);
		}
		else {
			$mainConfig->setUseEmbeddedPerlImplicitly(null);
		}
		if(isset($_POST['main_config']['p1_file'])) {
			$mainConfig->setP1File($_POST['main_config']['p1_file']);
		}
		else {
			$mainConfig->setP1File(null);
		}

		if(isset($_POST['main_config']['daemon_dumps_core'])) {
			$mainConfig->setDaemonDumpsCore($_POST['main_config']['daemon_dumps_core']);
		}
		else {
			$mainConfig->setDaemonDumpsCore(null);
		}
		if(isset($_POST['main_config']['admin_email'])) {
			$mainConfig->setAdminEmail($_POST['main_config']['admin_email']);
		}
		else {
			$mainConfig->setAdminEmail(null);
		}
		if(isset($_POST['main_config']['admin_pager'])) {
			$mainConfig->setAdminPager($_POST['main_config']['admin_pager']);
		}
		else {
			$mainConfig->setAdminPager(null);
		}
		if(isset($_POST['main_config']['use_timezone'])) {
			$mainConfig->setUseTimezone($_POST['main_config']['use_timezone']);
		}
		else {
			$mainConfig->setUseTimezone(null);
		}
		$mainConfig->save();
		$success = "Modified Main Debug Configuration";
	}
	if($_POST['request'] == 'main_modify_nagios4') {
		// Field Error Checking
		if(isset($_POST['main_config']['log_current_states'])) {
			$mainConfig->setLogCurrentStates($_POST['main_config']['log_current_states']);
		}
		else {
			$mainConfig->setLogCurrentStates(null);
		}
		if(isset($_POST['main_config']['check_workers'])) {
			$mainConfig->setCheckWorkers($_POST['main_config']['check_workers']);
		}
		else {
			$mainConfig->setCheckWorkers(null);
		}
		if(isset($_POST['main_config']['query_socket'])) {
			$mainConfig->setQuerySocket($_POST['main_config']['query_socket']);
		}
		else {
			$mainConfig->setQuerySocket(null);
		}
		$mainConfig->save();
		$success = "Modified Main Nagios4 Configuration";
	}
	if($_POST['request'] == "main_modify_broker") {
		$mainConfig->setEventBrokerOptions($_POST['main_config']['event_broker_options']);
		$mainConfig->save();
		$success = "Modified Main Broker Configuration";	
	}
	else if($_POST['request'] == "module_add") {
		if(!isset($_POST['module_line']) || !strlen(trim($_POST['module_line']))) {
			$error = "Broker module line cannot be blank.";
		}
		else {
			// We want to add an event broker module
			$module = new NagiosBrokerModule();
			$module->setLine($_POST['module_line']);
			$module->save();
			$success = "Added Broker Module";
		}
	}
}

$mainValues = array();
$mainValues = $mainConfig->getValues();

// To create a "default" command
$lilac->return_command_list($tempList);
$command_list[] = array("command_id" => '', "command_name" => "None");
foreach($tempList as $tempCommand) {
	$command_list[] = array("command_id" => $tempCommand->getId(), "command_name" => $tempCommand->getName());
}

// Let's create the date format select list
$date_format_list[] = array("values" => "us", "text" => "us - MM/DD/YYYY HH:MM:SS");
$date_format_list[] = array("values" => "euro", "text" => "euro - DD/MM/YYYY HH:MM:SS");
$date_format_list[] = array("values" => "iso8601", "text" => "iso8601 - YYYY-MM-DD HH:MM:SS");
$date_format_list[] = array("values" => "strict-iso8601", "text" => "strict-iso8601 - YYYY-MM-DDTHH:MM:SS");

// Let's make the log rotation select list
$log_rotate_list[] = array("values" => "n", "text" => "None");
$log_rotate_list[] = array("values" => "h", "text" => "Hourly");
$log_rotate_list[] = array("values" => "d", "text" => "Daily");
$log_rotate_list[] = array("values" => "w", "text" => "Weekly");
$log_rotate_list[] = array("values" => "m", "text" => "Monthly");


if(!isset($_GET['section']))
	$_GET['section'] = 'paths';

	
// Build subnavigation
$subnav = array(
	'paths' => 'Paths',
	'status' => 'Status',
	'security' => 'Security',
	'restart' => 'Restart Actions',
	'logging' => 'Logging',
	'external' => 'External Commands',
	'retention' => 'Retention',
	'global' => 'Global',
	'intervals' => 'Intervals',
	'flap' => 'Flap',
	'timeouts' => 'Timeouts',
	'obsess' => 'Obsess',
	'freshness' => 'Freshness',
	'broker' => 'Broker',
	'debug' => 'Debug',
	'other' => 'Other',
	'nagios4' => 'Nagios 4'
	);


print_header("Main Configuration File Editor", "main");

	print_window_header("Nagios Daemon Configuration", "100%", "center");
	print_subnav($subnav, $_GET['section'], "section");
	if($_GET['section'] == 'paths') {
		?>
		<form name="main_config" method="post" action="main.php?section=paths">
		<input type="hidden" name="request" value="main_modify_paths" />
		<?php
		double_pane_form_window_start();
		?>
		<div class="formbox">
			<b>Configuration Directory</b><br />
			<input type="text" size="80" maxlength="255" name="main_config[config_dir]" value="<?php echo $mainConfig->getConfigDir();?>">
			<?php echo $lilac->element_desc("config_dir", "nagios_main_desc"); ?><br />
		</div>
			<?php
			form_text_element_with_enabler(60, 255, "main_config", "log_file", "Log File", $lilac->element_desc("log_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "object_cache_file", "Object Cache File", $lilac->element_desc("object_cache_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "precached_object_file", "Precached Object File", $lilac->element_desc("precached_object_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "temp_file", "Temporary File", $lilac->element_desc("temp_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "temp_path", "Temporary Path", $lilac->element_desc("temp_path", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "status_file", "Status File", $lilac->element_desc("status_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "log_archive_path", "Log Archive Path", $lilac->element_desc("log_archive_path", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "command_file", "Command File", $lilac->element_desc("command_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "lock_file", "Lock File", $lilac->element_desc("lock_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "state_retention_file", "State Retention File", $lilac->element_desc("state_retention_file", "nagios_main_desc"), $mainValues, null);
			form_text_element_with_enabler(60, 255, "main_config", "check_result_path", "Check Result Path", $lilac->element_desc("check_result_path", "nagios_main_desc"), $mainValues, null);
			double_pane_form_window_finish();
			?>
			<div class="formbox">
			<input class="btn btn-primary" type="submit" value="Update Path Configuration" />
			</div>
			</form>
			<?php
	}
	else if($_GET['section'] == 'status') {
		?>
		<form name="main_config" method="post" action="main.php?section=status">
		<input type="hidden" name="request" value="main_modify_status" />
		<?php
		double_pane_form_window_start();
		form_text_element_with_enabler(2, 4, "main_config", "status_update_interval", "Aggregated Status Update Interval", $lilac->element_desc("status_update_interval", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_for_orphaned_hosts", "Check For Orphaned Hosts", $lilac->element_desc("check_for_orphaned_hosts", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "translate_passive_host_checks", "Translate Passive Host Checks", $lilac->element_desc("translate_passive_host_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "passive_host_checks_are_soft", "Passive Host Checks Are Soft", $lilac->element_desc("passive_host_checks_are_soft", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "soft_state_dependencies", "Soft State Dependencies", $lilac->element_desc("soft_state_dependencies", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_predictive_host_dependency_checks", "Enable Predictive Host Dependency Checks", $lilac->element_desc("enable_predictive_host_dependency_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_predictive_service_dependency_checks", "Enable Predictive Service Dependency Checks", $lilac->element_desc("enable_predictive_service_dependency_checks", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "cached_host_check_horizon", "Cached Host Check Horizon", $lilac->element_desc("cached_host_check_horizon", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "cached_service_check_horizon", "Cached Service Check Horizon", $lilac->element_desc("cached_service_check_horizon", "nagios_main_desc"), $mainValues, null);

		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Status Configuration" />
		</div>
		</form>
		<?php
		
	}
	else if($_GET['section'] == 'security') {
		?>
		<form name="main_config" method="post" action="main.php?section=security">
		<input type="hidden" name="request" value="main_modify_security" />
		<?php
		double_pane_form_window_start();
		form_text_element_with_enabler(20, 255, "main_config", "nagios_user", "Nagios User", $lilac->element_desc("nagios_user", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(20, 255, "main_config", "nagios_group", "Nagios Group", $lilac->element_desc("nagios_group", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Security Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'restart') {
		?>
		<form name="main_config" method="post" action="main.php?section=restart">
		<input type="hidden" name="request" value="main_modify_restart" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_notifications", "Notifications", $lilac->element_desc("enable_notifications", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "execute_service_checks", "Execute Service Checks", $lilac->element_desc("execute_service_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "accept_passive_service_checks", "Accept Passive Service Checks", $lilac->element_desc("accept_passive_service_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "execute_host_checks", "Execute Host Checks", $lilac->element_desc("execute_host_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "accept_passive_host_checks", "Accept Passive Host Checks", $lilac->element_desc("accept_passive_host_checks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_event_handlers", "Enable Event Handlers", $lilac->element_desc("enable_event_handlers", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Restart Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'logging') {
		?>
		<form name="main_config" method="post" action="main.php?section=logging">
		<input type="hidden" name="request" value="main_modify_logging" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($log_rotate_list, "values", "text", "main_config", "log_rotation_method", "Log Rotation Method", $lilac->element_desc("log_rotation_method", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_syslog", "Use Syslog", $lilac->element_desc("use_syslog", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_notifications", "Log Notifications", $lilac->element_desc("log_notifications", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_service_retries", "Log Service Retries", $lilac->element_desc("log_service_retries", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_host_retries", "Log Host Retries", $lilac->element_desc("log_host_retries", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_event_handlers", "Log Event Handlers", $lilac->element_desc("log_event_handlers", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_initial_states", "Log Initial States", $lilac->element_desc("log_initial_states", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_external_commands", "Log External Commands", $lilac->element_desc("log_external_commands", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_passive_checks", "Log Passive Checks", $lilac->element_desc("log_passive_checks", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Logging Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'external') {
		?>
		<form name="main_config" method="post" action="main.php?section=external">
		<input type="hidden" name="request" value="main_modify_external" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_external_commands", "Check External Commands", $lilac->element_desc("check_external_commands", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(3, 40, "main_config", "command_check_interval", "Command Check Interval <span style='color: red;'>(Deprecated in Nagios 4)</span>", $lilac->element_desc("command_check_interval", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "external_command_buffer_slots", "External Command Buffer Slots <span style='color: red;'>(Deprecated in Nagios 4)</span>", $lilac->element_desc("external_command_buffer_slots", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update External Command Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'retention') {
		?>
		<form name="main_config" method="post" action="main.php?section=retention">
		<input type="hidden" name="request" value="main_modify_retention" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "retain_state_information", "Retain State Information", $lilac->element_desc("retain_state_information", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(3, 40, "main_config", "retention_update_interval", "Retention Update Interval", $lilac->element_desc("retention_update_interval", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_retained_program_state", "Use Retained Program State", $lilac->element_desc("use_retained_program_state", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_retained_scheduling_info", "Use Retained Scheduling Info", $lilac->element_desc("use_retained_scheduling_info", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_host_attribute_mask", "Retained Host Attribute Mask", $lilac->element_desc("retained_host_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_service_attribute_mask", "Retained Service Attribute Mask", $lilac->element_desc("retained_service_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_process_host_attribute_mask", "Retained Process Host Attribute Mask", $lilac->element_desc("retained_process_host_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_process_service_attribute_mask", "Retained Process Service Attribute Mask", $lilac->element_desc("retained_process_service_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_contact_host_attribute_mask", "Retained Contact Host Attribute Mask", $lilac->element_desc("retained_contact_host_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "retained_contact_service_attribute_mask", "Retained Contact Service Attribute Mask", $lilac->element_desc("retained_contact_service_attribute_mask", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(5, 40, "main_config", "max_check_result_file_age", "Maximum Check Result File Age", $lilac->element_desc("max_check_result_file_age", "nagios_main_desc"), $mainValues, null);

		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Retention Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'global') {
		?>
		<form name="main_config" method="post" action="main.php?section=global">
		<input type="hidden" name="request" value="main_modify_global" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "global_host_event_handler", "Global Host Event Handler", $lilac->element_desc("global_host_event_handler", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "global_service_event_handler", "Global Service Event Handler", $lilac->element_desc("global_service_event_handler", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_for_updates", "Check For Updates", $lilac->element_desc("check_for_updates", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "bare_update_check", "Bare Update Check", $lilac->element_desc("bare_update_check", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Global Handlers Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'intervals') {
		?>
		<form name="main_config" method="post" action="main.php?section=intervals">
		<input type="hidden" name="request" value="main_modify_intervals" />
		<?php
		double_pane_form_window_start();
		form_text_element_with_enabler(6, 6, "main_config", "sleep_time", "Sleep Time <span style='color: red;'>(Deprecated in Nagios 4)</span>", $lilac->element_desc("sleep_time", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(6, 6, "main_config", "service_inter_check_delay_method", "Service Inter Check Delay Method", $lilac->element_desc("service_inter_check_delay_method", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(6, 6, "main_config", "max_service_check_spread", "Max Service Check Spread", $lilac->element_desc("max_service_check_spread", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(6, 6, "main_config", "host_inter_check_delay_method", "Host Inter Check Delay Method", $lilac->element_desc("host_inter_check_delay_method", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(6, 6, "main_config", "max_host_check_spread", "Max Host Check Spread", $lilac->element_desc("max_host_check_spread", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(6, 6, "main_config", "service_interleave_factor", "Service Interleave Factor", $lilac->element_desc("service_interleave_factor", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "max_concurrent_checks", "Maximum Concurrent Checks", $lilac->element_desc("max_concurrent_checks", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "service_reaper_frequency", "Service Reaper Frequency", $lilac->element_desc("service_reaper_frequency", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "interval_length", "Interval Length", $lilac->element_desc("interval_length", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "auto_reschedule_checks", "Auto Reschedule Checks", $lilac->element_desc("auto_reschedule_checks", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(2, 4, "main_config", "auto_rescheduling_interval", "Auto Rescheduling Interval", $lilac->element_desc("auto_rescheduling_interval", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "auto_rescheduling_window", "Auto Rescheduling Window", $lilac->element_desc("auto_rescheduling_window", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_aggressive_host_checking", "Use Aggressive Host Checking", $lilac->element_desc("use_aggressive_host_checking", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "check_result_reaper_frequency", "Check Result Reaper Frequency", $lilac->element_desc("check_result_reaper_frequency", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "max_check_result_reaper_time", "Maximum Check Result Reaper Time", $lilac->element_desc("max_check_result_reaper_time", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "additional_freshness_latency", "Additional Freshness Latency", $lilac->element_desc("additional_freshness_latency", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Interval Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'flap') {
		?>
		<form name="main_config" method="post" action="main.php?section=flap">
		<input type="hidden" name="request" value="main_modify_flap" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_flap_detection", "Enable Flap Detection", $lilac->element_desc("enable_flap_detection", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "low_service_flap_threshold", "Low Service Flap Threshold", $lilac->element_desc("low_service_flap_threshold", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "high_service_flap_threshold", "High Service Flap Threshold", $lilac->element_desc("high_service_flap_threshold", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "low_host_flap_threshold", "Low Host Flap Threshold", $lilac->element_desc("low_host_flap_threshold", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "high_host_flap_threshold", "High Host Flap Threshold", $lilac->element_desc("high_host_flap_threshold", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Interval Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'timeouts') {
		?>
		<form name="main_config" method="post" action="main.php?section=timeouts">
		<input type="hidden" name="request" value="main_modify_timeouts" />
		<?php
		double_pane_form_window_start();
		form_text_element_with_enabler(8, 8, "main_config", "service_check_timeout", "Service Check Timeout", $lilac->element_desc("service_check_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "host_check_timeout", "Host Check Timeout", $lilac->element_desc("host_check_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "event_handler_timeout", "Event Handler Timeout", $lilac->element_desc("event_handler_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "notification_timeout", "Notification Timeout", $lilac->element_desc("notification_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "ocsp_timeout", "Obsessive Compulsive Service Processor Timeout", $lilac->element_desc("ocsp_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "ochp_timeout", "Obsessive Compulsive Host Processor Timeout", $lilac->element_desc("ochp_timeout", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 8, "main_config", "perfdata_timeout", "Performance Data Processor Command Timeout", $lilac->element_desc("perfdata_timeout", "nagios_main_desc"), $mainValues, null);

		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Timeout Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'obsess') {
		?>
		<form name="main_config" method="post" action="main.php?section=obsess">
		<input type="hidden" name="request" value="main_modify_obsess" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "obsess_over_services", "Obsess Over Services", $lilac->element_desc("obsess_over_services", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "ocsp_command", "Obsessive Compulsive Service Processor Command", $lilac->element_desc("ocsp_command", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "obsess_over_hosts", "Obsess Over Hosts", $lilac->element_desc("obsess_over_hosts", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "ochp_command", "Obsessive Compulsive Host Processor Command", $lilac->element_desc("ochp_command", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Obsession Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'freshness') {
		?>
		<form name="main_config" method="post" action="main.php?section=freshness">
		<input type="hidden" name="request" value="main_modify_freshness" />
		<?php
		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_service_freshness", "Check Service Freshness", $lilac->element_desc("check_service_freshness", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(4, 8, "main_config", "service_freshness_check_interval", "Service Freshness Check Interval", $lilac->element_desc("service_freshness_check_interval", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_host_freshness", "Check Host Freshness", $lilac->element_desc("check_host_freshness", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(4, 8, "main_config", "host_freshness_check_interval", "Host Freshness Check Interval", $lilac->element_desc("host_freshness_check_interval", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Obsession Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'debug') {
		$debug_verbosity_list[] = array("values" => 0, "text" => "Basic Information");
		$debug_verbosity_list[] = array("values" => 1, "text" => "More Detailed Information");
		$debug_verbosity_list[] = array("values" => 2, "text" => "Highly Detailed Information");
		?>
		<form name="main_config" method="post" action="main.php?section=debug">
		<input type="hidden" name="request" value="main_modify_debug" />
		<input type="hidden" name="main_config[debug_level]" value="1" />
		<?php
		double_pane_form_window_start();
		form_text_element_with_enabler(60, 255, "main_config", "debug_file", "Debug File", $lilac->element_desc("debug_file", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($debug_verbosity_list, "values", "text", "main_config", "debug_verbosity", "Debug Verbosity", $lilac->element_desc("debug_verbosity", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 40, "main_config", "max_debug_file_size", "Maximum Debug File Size", $lilac->element_desc("max_debug_file_size", "nagios_main_desc"), $mainValues, null);
		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input type="checkbox" name="main_config[debug_level_everything]" <?php echo  ($mainConfig->getDebugLevel() == -1 ? "CHECKED" : '');?>><b>Log Everything</b><br />
		<input type="checkbox" name="main_config[debug_level_function]" <?php echo  (1 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Function Enter/Exit Information</b><br />
		<input type="checkbox" name="main_config[debug_level_config]" <?php echo  (2 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Config Information</b><br />
		<input type="checkbox" name="main_config[debug_level_process]" <?php echo  (4 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Process Information</b><br />
		<input type="checkbox" name="main_config[debug_level_event]" <?php echo  (8 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Scheduled Event Information</b><br />
		<input type="checkbox" name="main_config[debug_level_check]" <?php echo  (16 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Host/Service Check Event Information</b><br />
		<input type="checkbox" name="main_config[debug_level_notification]" <?php echo  (32 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Notification Information</b><br />
		<input type="checkbox" name="main_config[debug_level_broker]" <?php echo  (64 & $mainConfig->getDebugLevel() ? "CHECKED" : '');?>><b>Event Broker Information</b><br />
		</div>

		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Debug Configuration" />
		</div>
		</form>
		<?php
	}

	else if($_GET['section'] == 'other') {
		?>
		<form name="main_config" method="post" action="main.php?section=other">
		<input type="hidden" name="request" value="main_modify_other" />
		<?php
		$file_mode_array[] = array("values" => 'a', "text" => "Append");
		$file_mode_array[] = array("values" => 'w', "text" => "Write");

		double_pane_form_window_start();
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_large_installation_tweaks", "Use Large Installation Tweaks", $lilac->element_desc("use_large_installation_tweaks", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "free_child_process_memory", "Free Child Process Memory", $lilac->element_desc("free_child_process_memory", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "child_processes_fork_twice", "Child Processes Fork Twice <span style='color: red;'>(Deprecated in Nagios 4)</span>", $lilac->element_desc("child_processes_fork_twice", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_environment_macros", "Enable Environment Macros", $lilac->element_desc("enable_environment_macros", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "process_performance_data", "Process Performance Data", $lilac->element_desc("Process Performance Data", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "host_perfdata_command", "Host Performance Data Command", $lilac->element_desc("host_perfdata_command", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "host_perfdata_file", "Host Performance Data File", $lilac->element_desc("host_perfdata_file", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($file_mode_array, "values", "text", "main_config", "host_perfdata_file_mode", "Host Performance Data File Mode", $lilac->element_desc("host_perfdata_file_mode", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "host_perfdata_file_template", "Host Performance Template", $lilac->element_desc("host_perfdata_file_template", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 40, "main_config", "host_perfdata_file_processing_interval", "Host Performance Data File Processing Interval", $lilac->element_desc("host_perfdata_file_processing_interval", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "host_perfdata_file_processing_command", "Host Performance Data File Processing Command", $lilac->element_desc("host_perfdata_file_processing_command", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "service_perfdata_command", "Service Performance Data Command", $lilac->element_desc("service_perfdata_command", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "service_perfdata_file", "Service Performance Data File", $lilac->element_desc("service_perfdata_file", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($file_mode_array, "values", "text", "main_config", "service_perfdata_file_mode", "Service Performance Data File Mode", $lilac->element_desc("service_perfdata_file_mode", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "service_perfdata_file_template", "Service Performance Template", $lilac->element_desc("service_perfdata_file_template", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(8, 40, "main_config", "service_perfdata_file_processing_interval", "Service Performance Data File Processing Interval", $lilac->element_desc("service_perfdata_file_processing_interval", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($command_list, "command_id", "command_name", "main_config", "service_perfdata_file_processing_command", "Service Performance Data File Processing Command", $lilac->element_desc("service_perfdata_file_processing_command", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "check_for_orphaned_services", "Check For Orphaned Services", $lilac->element_desc("check_for_orphaned_services", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($date_format_list, "values", "text", "main_config", "date_format", "Date Format", $lilac->element_desc("date_format", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "illegal_object_name_chars", "Illegal Object Name Characters", $lilac->element_desc("illegal_object_name_chars", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "illegal_macro_output_chars", "Illegal Macro Output Characters", $lilac->element_desc("illegal_macro_output_chars", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_regexp_matching", "Use Regexp Matching", $lilac->element_desc("use_regexp_matching", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_true_regexp_matching", "Use True Regexp Matching", $lilac->element_desc("use_true_regexp_matching", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "enable_embedded_perl", "Use Embedded Perl", $lilac->element_desc("enable_embedded_perl", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "use_embedded_perl_implicitly", "Use Embedded Perl Implicitly", $lilac->element_desc("use_embedded_perl_implicitly", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "p1_file", "P1 File", $lilac->element_desc("p1_file", "nagios_main_desc"), $mainValues, null);
		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "daemon_dumps_core", "Daemon Dumps Core", $lilac->element_desc("daemon_dumps_core", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "admin_email", "Admin Email", $lilac->element_desc("admin_email", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "admin_pager", "Admin Pager", $lilac->element_desc("admin_pager", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "use_timezone", "use_timezone", $lilac->element_desc("use_timezone", "nagios_main_desc"), $mainValues, null);

		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Other Configuration" />
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'broker') {
		$module_list = NagiosBrokerModulePeer::doSelect(new Criteria());
		$numOfModules = count($module_list);
		
		
		$broker_list = array();
		$broker_list[] = array("value" => "0", "label" => "Broker nothing");
		$broker_list[] = array("value" => "-1", "label" => "Broker everything");
		
		?>
		<form name="main_broker_config" method="post" action="main.php?section=broker">
		<input type="hidden" name="request" value="main_modify_broker" />
		<div class="formbox">
			<b>Event Broker Options:</b> <?php print_select("main_config[event_broker_options]", $broker_list, "value", "label", $mainConfig->getEventBrokerOptions());?>
			<?php echo $lilac->element_desc("event_broker_options", "nagios_main_desc"); ?><br />
		</div>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Event Broker Configuration" />
		</div>
		</form>
		<br />
		<br />	
		<table width="100%" align="center" cellspacing="0" cellpadding="2" border="0">
			<tr class="altTop">
			<td colspan="2">Event Broker Modules:</td>
			</tr>
			<?php
			$counter = 0;
			if($numOfModules) {
				foreach($module_list as $module) {
					if($counter % 2) {
						?>
						<tr class="altRow1">
						<?php
					}
					else {
						?>
						<tr class="altRow2">
						<?php
					}
					?>
					<td height="20" width="80" nowrap="nowrap" class="altLeft"><a class="btn btn-danger" href="main.php?section=broker&request=delete&module_id=<?php echo $module->getId();?>" onClick="javascript:return confirmDelete();">Delete</a></td>
					<td height="20" class="altRight"><b><?php echo $module->getLine();?></b></td>
					</tr>
					<?php
					$counter++;
				}
			}
			?>
		</table>
		<br />
		<div class="formbox">
		<b>Add Event Broker Module:</b>
		<form action="<?php echo $_SERVER['PHP_SELF'];?>?&section=broker" method="post">
		<input type="hidden" name="request" value="module_add" />
		Module Path And Any Arguments:<input type="text" size="50" maxsize="255" name="module_line" /> <input class="btn btn-primary" type="submit" value="Add Module" /><br />
		<i>Example:</i> /usr/lib/module.so arg1 arg2 arg3
		</div>
		</form>
		<?php
	}
	else if($_GET['section'] == 'nagios4') {
	?>
		<form name="main_config" method="post" action="main.php?section=nagios4">
		<input type="hidden" name="request" value="main_modify_nagios4" />
		<?php
		$file_mode_array[] = array("values" => 'a', "text" => "Append");
		$file_mode_array[] = array("values" => 'w', "text" => "Write");

		double_pane_form_window_start();

		form_select_element_with_enabler($enable_list, "values", "text", "main_config", "log_current_states", "Log Current States", $lilac->element_desc("log_current_states", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(60, 255, "main_config", "query_socket", "Query Socket", $lilac->element_desc("query_socket", "nagios_main_desc"), $mainValues, null);
		form_text_element_with_enabler(10, 10, "main_config", "check_workers", "Check Workers", $lilac->element_desc("check_workers", "nagios_main_desc"), $mainValues, null);

		double_pane_form_window_finish();
		?>
		<div class="formbox">
		<input class="btn btn-primary" type="submit" value="Update Nagios Configuration" />
		</div>
		</form>
	<?php
	}

	print_window_footer();
	?>
	<br />
	<?php
print_footer();
?>
