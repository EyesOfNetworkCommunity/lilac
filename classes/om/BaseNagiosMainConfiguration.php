<?php

/**
 * Base class that represents a row from the 'nagios_main_configuration' table.
 *
 * Nagios Main Configuration
 *
 * @package    .om
 */
abstract class BaseNagiosMainConfiguration extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosMainConfigurationPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the config_dir field.
	 * @var        string
	 */
	protected $config_dir;

	/**
	 * The value for the log_file field.
	 * @var        string
	 */
	protected $log_file;

	/**
	 * The value for the temp_file field.
	 * @var        string
	 */
	protected $temp_file;

	/**
	 * The value for the status_file field.
	 * @var        string
	 */
	protected $status_file;

	/**
	 * The value for the status_update_interval field.
	 * @var        int
	 */
	protected $status_update_interval;

	/**
	 * The value for the nagios_user field.
	 * @var        string
	 */
	protected $nagios_user;

	/**
	 * The value for the nagios_group field.
	 * @var        string
	 */
	protected $nagios_group;

	/**
	 * The value for the enable_notifications field.
	 * @var        boolean
	 */
	protected $enable_notifications;

	/**
	 * The value for the execute_service_checks field.
	 * @var        boolean
	 */
	protected $execute_service_checks;

	/**
	 * The value for the accept_passive_service_checks field.
	 * @var        boolean
	 */
	protected $accept_passive_service_checks;

	/**
	 * The value for the enable_event_handlers field.
	 * @var        boolean
	 */
	protected $enable_event_handlers;

	/**
	 * The value for the log_rotation_method field.
	 * @var        string
	 */
	protected $log_rotation_method;

	/**
	 * The value for the log_archive_path field.
	 * @var        string
	 */
	protected $log_archive_path;

	/**
	 * The value for the check_external_commands field.
	 * @var        boolean
	 */
	protected $check_external_commands;

	/**
	 * The value for the command_check_interval field.
	 * @var        string
	 */
	protected $command_check_interval;

	/**
	 * The value for the command_file field.
	 * @var        string
	 */
	protected $command_file;

	/**
	 * The value for the lock_file field.
	 * @var        string
	 */
	protected $lock_file;

	/**
	 * The value for the retain_state_information field.
	 * @var        boolean
	 */
	protected $retain_state_information;

	/**
	 * The value for the state_retention_file field.
	 * @var        string
	 */
	protected $state_retention_file;

	/**
	 * The value for the retention_update_interval field.
	 * @var        int
	 */
	protected $retention_update_interval;

	/**
	 * The value for the use_retained_program_state field.
	 * @var        boolean
	 */
	protected $use_retained_program_state;

	/**
	 * The value for the use_syslog field.
	 * @var        boolean
	 */
	protected $use_syslog;

	/**
	 * The value for the log_notifications field.
	 * @var        boolean
	 */
	protected $log_notifications;

	/**
	 * The value for the log_service_retries field.
	 * @var        boolean
	 */
	protected $log_service_retries;

	/**
	 * The value for the log_host_retries field.
	 * @var        boolean
	 */
	protected $log_host_retries;

	/**
	 * The value for the log_event_handlers field.
	 * @var        boolean
	 */
	protected $log_event_handlers;

	/**
	 * The value for the log_initial_states field.
	 * @var        boolean
	 */
	protected $log_initial_states;

	/**
	 * The value for the log_external_commands field.
	 * @var        boolean
	 */
	protected $log_external_commands;

	/**
	 * The value for the log_passive_checks field.
	 * @var        boolean
	 */
	protected $log_passive_checks;

	/**
	 * The value for the global_host_event_handler field.
	 * @var        int
	 */
	protected $global_host_event_handler;

	/**
	 * The value for the global_service_event_handler field.
	 * @var        int
	 */
	protected $global_service_event_handler;

	/**
	 * The value for the external_command_buffer_slots field.
	 * @var        int
	 */
	protected $external_command_buffer_slots;

	/**
	 * The value for the sleep_time field.
	 * @var        double
	 */
	protected $sleep_time;

	/**
	 * The value for the service_interleave_factor field.
	 * @var        string
	 */
	protected $service_interleave_factor;

	/**
	 * The value for the max_concurrent_checks field.
	 * @var        int
	 */
	protected $max_concurrent_checks;

	/**
	 * The value for the service_reaper_frequency field.
	 * @var        int
	 */
	protected $service_reaper_frequency;

	/**
	 * The value for the interval_length field.
	 * @var        int
	 */
	protected $interval_length;

	/**
	 * The value for the use_aggressive_host_checking field.
	 * @var        boolean
	 */
	protected $use_aggressive_host_checking;

	/**
	 * The value for the enable_flap_detection field.
	 * @var        boolean
	 */
	protected $enable_flap_detection;

	/**
	 * The value for the low_service_flap_threshold field.
	 * @var        double
	 */
	protected $low_service_flap_threshold;

	/**
	 * The value for the high_service_flap_threshold field.
	 * @var        double
	 */
	protected $high_service_flap_threshold;

	/**
	 * The value for the low_host_flap_threshold field.
	 * @var        double
	 */
	protected $low_host_flap_threshold;

	/**
	 * The value for the high_host_flap_threshold field.
	 * @var        double
	 */
	protected $high_host_flap_threshold;

	/**
	 * The value for the soft_state_dependencies field.
	 * @var        boolean
	 */
	protected $soft_state_dependencies;

	/**
	 * The value for the service_check_timeout field.
	 * @var        int
	 */
	protected $service_check_timeout;

	/**
	 * The value for the host_check_timeout field.
	 * @var        int
	 */
	protected $host_check_timeout;

	/**
	 * The value for the event_handler_timeout field.
	 * @var        int
	 */
	protected $event_handler_timeout;

	/**
	 * The value for the notification_timeout field.
	 * @var        int
	 */
	protected $notification_timeout;

	/**
	 * The value for the ocsp_timeout field.
	 * @var        int
	 */
	protected $ocsp_timeout;

	/**
	 * The value for the ohcp_timeout field.
	 * @var        int
	 */
	protected $ohcp_timeout;

	/**
	 * The value for the perfdata_timeout field.
	 * @var        int
	 */
	protected $perfdata_timeout;

	/**
	 * The value for the obsess_over_services field.
	 * @var        boolean
	 */
	protected $obsess_over_services;

	/**
	 * The value for the ocsp_command field.
	 * @var        int
	 */
	protected $ocsp_command;

	/**
	 * The value for the process_performance_data field.
	 * @var        boolean
	 */
	protected $process_performance_data;

	/**
	 * The value for the check_for_orphaned_services field.
	 * @var        boolean
	 */
	protected $check_for_orphaned_services;

	/**
	 * The value for the check_service_freshness field.
	 * @var        boolean
	 */
	protected $check_service_freshness;

	/**
	 * The value for the freshness_check_interval field.
	 * @var        int
	 */
	protected $freshness_check_interval;

	/**
	 * The value for the date_format field.
	 * @var        string
	 */
	protected $date_format;

	/**
	 * The value for the illegal_object_name_chars field.
	 * @var        string
	 */
	protected $illegal_object_name_chars;

	/**
	 * The value for the illegal_macro_output_chars field.
	 * @var        string
	 */
	protected $illegal_macro_output_chars;

	/**
	 * The value for the admin_email field.
	 * @var        string
	 */
	protected $admin_email;

	/**
	 * The value for the admin_pager field.
	 * @var        string
	 */
	protected $admin_pager;

	/**
	 * The value for the execute_host_checks field.
	 * @var        boolean
	 */
	protected $execute_host_checks;

	/**
	 * The value for the service_inter_check_delay_method field.
	 * @var        string
	 */
	protected $service_inter_check_delay_method;

	/**
	 * The value for the use_retained_scheduling_info field.
	 * @var        boolean
	 */
	protected $use_retained_scheduling_info;

	/**
	 * The value for the accept_passive_host_checks field.
	 * @var        boolean
	 */
	protected $accept_passive_host_checks;

	/**
	 * The value for the max_service_check_spread field.
	 * @var        int
	 */
	protected $max_service_check_spread;

	/**
	 * The value for the host_inter_check_delay_method field.
	 * @var        string
	 */
	protected $host_inter_check_delay_method;

	/**
	 * The value for the max_host_check_spread field.
	 * @var        int
	 */
	protected $max_host_check_spread;

	/**
	 * The value for the auto_reschedule_checks field.
	 * @var        boolean
	 */
	protected $auto_reschedule_checks;

	/**
	 * The value for the auto_rescheduling_interval field.
	 * @var        int
	 */
	protected $auto_rescheduling_interval;

	/**
	 * The value for the auto_rescheduling_window field.
	 * @var        int
	 */
	protected $auto_rescheduling_window;

	/**
	 * The value for the ochp_timeout field.
	 * @var        int
	 */
	protected $ochp_timeout;

	/**
	 * The value for the obsess_over_hosts field.
	 * @var        boolean
	 */
	protected $obsess_over_hosts;

	/**
	 * The value for the ochp_command field.
	 * @var        int
	 */
	protected $ochp_command;

	/**
	 * The value for the check_host_freshness field.
	 * @var        boolean
	 */
	protected $check_host_freshness;

	/**
	 * The value for the host_freshness_check_interval field.
	 * @var        int
	 */
	protected $host_freshness_check_interval;

	/**
	 * The value for the service_freshness_check_interval field.
	 * @var        int
	 */
	protected $service_freshness_check_interval;

	/**
	 * The value for the use_regexp_matching field.
	 * @var        boolean
	 */
	protected $use_regexp_matching;

	/**
	 * The value for the use_true_regexp_matching field.
	 * @var        boolean
	 */
	protected $use_true_regexp_matching;

	/**
	 * The value for the event_broker_options field.
	 * @var        string
	 */
	protected $event_broker_options;

	/**
	 * The value for the daemon_dumps_core field.
	 * @var        boolean
	 */
	protected $daemon_dumps_core;

	/**
	 * The value for the host_perfdata_command field.
	 * @var        int
	 */
	protected $host_perfdata_command;

	/**
	 * The value for the service_perfdata_command field.
	 * @var        int
	 */
	protected $service_perfdata_command;

	/**
	 * The value for the host_perfdata_file field.
	 * @var        string
	 */
	protected $host_perfdata_file;

	/**
	 * The value for the host_perfdata_file_template field.
	 * @var        string
	 */
	protected $host_perfdata_file_template;

	/**
	 * The value for the service_perfdata_file field.
	 * @var        string
	 */
	protected $service_perfdata_file;

	/**
	 * The value for the service_perfdata_file_template field.
	 * @var        string
	 */
	protected $service_perfdata_file_template;

	/**
	 * The value for the host_perfdata_file_mode field.
	 * @var        string
	 */
	protected $host_perfdata_file_mode;

	/**
	 * The value for the service_perfdata_file_mode field.
	 * @var        string
	 */
	protected $service_perfdata_file_mode;

	/**
	 * The value for the host_perfdata_file_processing_command field.
	 * @var        int
	 */
	protected $host_perfdata_file_processing_command;

	/**
	 * The value for the service_perfdata_file_processing_command field.
	 * @var        int
	 */
	protected $service_perfdata_file_processing_command;

	/**
	 * The value for the host_perfdata_file_processing_interval field.
	 * @var        int
	 */
	protected $host_perfdata_file_processing_interval;

	/**
	 * The value for the service_perfdata_file_processing_interval field.
	 * @var        int
	 */
	protected $service_perfdata_file_processing_interval;

	/**
	 * The value for the object_cache_file field.
	 * @var        string
	 */
	protected $object_cache_file;

	/**
	 * The value for the precached_object_file field.
	 * @var        string
	 */
	protected $precached_object_file;

	/**
	 * The value for the retained_host_attribute_mask field.
	 * @var        int
	 */
	protected $retained_host_attribute_mask;

	/**
	 * The value for the retained_service_attribute_mask field.
	 * @var        int
	 */
	protected $retained_service_attribute_mask;

	/**
	 * The value for the retained_process_host_attribute_mask field.
	 * @var        int
	 */
	protected $retained_process_host_attribute_mask;

	/**
	 * The value for the retained_process_service_attribute_mask field.
	 * @var        int
	 */
	protected $retained_process_service_attribute_mask;

	/**
	 * The value for the retained_contact_host_attribute_mask field.
	 * @var        int
	 */
	protected $retained_contact_host_attribute_mask;

	/**
	 * The value for the retained_contact_service_attribute_mask field.
	 * @var        int
	 */
	protected $retained_contact_service_attribute_mask;

	/**
	 * The value for the check_result_reaper_frequency field.
	 * @var        int
	 */
	protected $check_result_reaper_frequency;

	/**
	 * The value for the max_check_result_reaper_time field.
	 * @var        int
	 */
	protected $max_check_result_reaper_time;

	/**
	 * The value for the check_result_path field.
	 * @var        string
	 */
	protected $check_result_path;

	/**
	 * The value for the max_check_result_file_age field.
	 * @var        int
	 */
	protected $max_check_result_file_age;

	/**
	 * The value for the translate_passive_host_checks field.
	 * @var        boolean
	 */
	protected $translate_passive_host_checks;

	/**
	 * The value for the passive_host_checks_are_soft field.
	 * @var        boolean
	 */
	protected $passive_host_checks_are_soft;

	/**
	 * The value for the enable_predictive_host_dependency_checks field.
	 * @var        boolean
	 */
	protected $enable_predictive_host_dependency_checks;

	/**
	 * The value for the enable_predictive_service_dependency_checks field.
	 * @var        boolean
	 */
	protected $enable_predictive_service_dependency_checks;

	/**
	 * The value for the cached_host_check_horizon field.
	 * @var        int
	 */
	protected $cached_host_check_horizon;

	/**
	 * The value for the cached_service_check_horizon field.
	 * @var        int
	 */
	protected $cached_service_check_horizon;

	/**
	 * The value for the use_large_installation_tweaks field.
	 * @var        boolean
	 */
	protected $use_large_installation_tweaks;

	/**
	 * The value for the free_child_process_memory field.
	 * @var        boolean
	 */
	protected $free_child_process_memory;

	/**
	 * The value for the child_processes_fork_twice field.
	 * @var        boolean
	 */
	protected $child_processes_fork_twice;

	/**
	 * The value for the enable_environment_macros field.
	 * @var        boolean
	 */
	protected $enable_environment_macros;

	/**
	 * The value for the additional_freshness_latency field.
	 * @var        int
	 */
	protected $additional_freshness_latency;

	/**
	 * The value for the enable_embedded_perl field.
	 * @var        boolean
	 */
	protected $enable_embedded_perl;

	/**
	 * The value for the use_embedded_perl_implicitly field.
	 * @var        boolean
	 */
	protected $use_embedded_perl_implicitly;

	/**
	 * The value for the p1_file field.
	 * @var        string
	 */
	protected $p1_file;

	/**
	 * The value for the use_timezone field.
	 * @var        string
	 */
	protected $use_timezone;

	/**
	 * The value for the debug_file field.
	 * @var        string
	 */
	protected $debug_file;

	/**
	 * The value for the debug_level field.
	 * @var        int
	 */
	protected $debug_level;

	/**
	 * The value for the debug_verbosity field.
	 * @var        int
	 */
	protected $debug_verbosity;

	/**
	 * The value for the max_debug_file_size field.
	 * @var        int
	 */
	protected $max_debug_file_size;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByOcspCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByOchpCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByHostPerfdataCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByServicePerfdataCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByHostPerfdataFileProcessingCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByServicePerfdataFileProcessingCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByGlobalServiceEventHandler;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByGlobalHostEventHandler;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Initializes internal state of BaseNagiosMainConfiguration object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [config_dir] column value.
	 * 
	 * @return     string
	 */
	public function getConfigDir()
	{
		return $this->config_dir;
	}

	/**
	 * Get the [log_file] column value.
	 * 
	 * @return     string
	 */
	public function getLogFile()
	{
		return $this->log_file;
	}

	/**
	 * Get the [temp_file] column value.
	 * 
	 * @return     string
	 */
	public function getTempFile()
	{
		return $this->temp_file;
	}

	/**
	 * Get the [status_file] column value.
	 * 
	 * @return     string
	 */
	public function getStatusFile()
	{
		return $this->status_file;
	}

	/**
	 * Get the [status_update_interval] column value.
	 * 
	 * @return     int
	 */
	public function getStatusUpdateInterval()
	{
		return $this->status_update_interval;
	}

	/**
	 * Get the [nagios_user] column value.
	 * 
	 * @return     string
	 */
	public function getNagiosUser()
	{
		return $this->nagios_user;
	}

	/**
	 * Get the [nagios_group] column value.
	 * 
	 * @return     string
	 */
	public function getNagiosGroup()
	{
		return $this->nagios_group;
	}

	/**
	 * Get the [enable_notifications] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableNotifications()
	{
		return $this->enable_notifications;
	}

	/**
	 * Get the [execute_service_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecuteServiceChecks()
	{
		return $this->execute_service_checks;
	}

	/**
	 * Get the [accept_passive_service_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getAcceptPassiveServiceChecks()
	{
		return $this->accept_passive_service_checks;
	}

	/**
	 * Get the [enable_event_handlers] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableEventHandlers()
	{
		return $this->enable_event_handlers;
	}

	/**
	 * Get the [log_rotation_method] column value.
	 * 
	 * @return     string
	 */
	public function getLogRotationMethod()
	{
		return $this->log_rotation_method;
	}

	/**
	 * Get the [log_archive_path] column value.
	 * 
	 * @return     string
	 */
	public function getLogArchivePath()
	{
		return $this->log_archive_path;
	}

	/**
	 * Get the [check_external_commands] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckExternalCommands()
	{
		return $this->check_external_commands;
	}

	/**
	 * Get the [command_check_interval] column value.
	 * 
	 * @return     string
	 */
	public function getCommandCheckInterval()
	{
		return $this->command_check_interval;
	}

	/**
	 * Get the [command_file] column value.
	 * 
	 * @return     string
	 */
	public function getCommandFile()
	{
		return $this->command_file;
	}

	/**
	 * Get the [lock_file] column value.
	 * 
	 * @return     string
	 */
	public function getLockFile()
	{
		return $this->lock_file;
	}

	/**
	 * Get the [retain_state_information] column value.
	 * 
	 * @return     boolean
	 */
	public function getRetainStateInformation()
	{
		return $this->retain_state_information;
	}

	/**
	 * Get the [state_retention_file] column value.
	 * 
	 * @return     string
	 */
	public function getStateRetentionFile()
	{
		return $this->state_retention_file;
	}

	/**
	 * Get the [retention_update_interval] column value.
	 * 
	 * @return     int
	 */
	public function getRetentionUpdateInterval()
	{
		return $this->retention_update_interval;
	}

	/**
	 * Get the [use_retained_program_state] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseRetainedProgramState()
	{
		return $this->use_retained_program_state;
	}

	/**
	 * Get the [use_syslog] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseSyslog()
	{
		return $this->use_syslog;
	}

	/**
	 * Get the [log_notifications] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogNotifications()
	{
		return $this->log_notifications;
	}

	/**
	 * Get the [log_service_retries] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogServiceRetries()
	{
		return $this->log_service_retries;
	}

	/**
	 * Get the [log_host_retries] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogHostRetries()
	{
		return $this->log_host_retries;
	}

	/**
	 * Get the [log_event_handlers] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogEventHandlers()
	{
		return $this->log_event_handlers;
	}

	/**
	 * Get the [log_initial_states] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogInitialStates()
	{
		return $this->log_initial_states;
	}

	/**
	 * Get the [log_external_commands] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogExternalCommands()
	{
		return $this->log_external_commands;
	}

	/**
	 * Get the [log_passive_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getLogPassiveChecks()
	{
		return $this->log_passive_checks;
	}

	/**
	 * Get the [global_host_event_handler] column value.
	 * 
	 * @return     int
	 */
	public function getGlobalHostEventHandler()
	{
		return $this->global_host_event_handler;
	}

	/**
	 * Get the [global_service_event_handler] column value.
	 * 
	 * @return     int
	 */
	public function getGlobalServiceEventHandler()
	{
		return $this->global_service_event_handler;
	}

	/**
	 * Get the [external_command_buffer_slots] column value.
	 * 
	 * @return     int
	 */
	public function getExternalCommandBufferSlots()
	{
		return $this->external_command_buffer_slots;
	}

	/**
	 * Get the [sleep_time] column value.
	 * 
	 * @return     double
	 */
	public function getSleepTime()
	{
		return $this->sleep_time;
	}

	/**
	 * Get the [service_interleave_factor] column value.
	 * 
	 * @return     string
	 */
	public function getServiceInterleaveFactor()
	{
		return $this->service_interleave_factor;
	}

	/**
	 * Get the [max_concurrent_checks] column value.
	 * 
	 * @return     int
	 */
	public function getMaxConcurrentChecks()
	{
		return $this->max_concurrent_checks;
	}

	/**
	 * Get the [service_reaper_frequency] column value.
	 * 
	 * @return     int
	 */
	public function getServiceReaperFrequency()
	{
		return $this->service_reaper_frequency;
	}

	/**
	 * Get the [interval_length] column value.
	 * 
	 * @return     int
	 */
	public function getIntervalLength()
	{
		return $this->interval_length;
	}

	/**
	 * Get the [use_aggressive_host_checking] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseAggressiveHostChecking()
	{
		return $this->use_aggressive_host_checking;
	}

	/**
	 * Get the [enable_flap_detection] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableFlapDetection()
	{
		return $this->enable_flap_detection;
	}

	/**
	 * Get the [low_service_flap_threshold] column value.
	 * 
	 * @return     double
	 */
	public function getLowServiceFlapThreshold()
	{
		return $this->low_service_flap_threshold;
	}

	/**
	 * Get the [high_service_flap_threshold] column value.
	 * 
	 * @return     double
	 */
	public function getHighServiceFlapThreshold()
	{
		return $this->high_service_flap_threshold;
	}

	/**
	 * Get the [low_host_flap_threshold] column value.
	 * 
	 * @return     double
	 */
	public function getLowHostFlapThreshold()
	{
		return $this->low_host_flap_threshold;
	}

	/**
	 * Get the [high_host_flap_threshold] column value.
	 * 
	 * @return     double
	 */
	public function getHighHostFlapThreshold()
	{
		return $this->high_host_flap_threshold;
	}

	/**
	 * Get the [soft_state_dependencies] column value.
	 * 
	 * @return     boolean
	 */
	public function getSoftStateDependencies()
	{
		return $this->soft_state_dependencies;
	}

	/**
	 * Get the [service_check_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getServiceCheckTimeout()
	{
		return $this->service_check_timeout;
	}

	/**
	 * Get the [host_check_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getHostCheckTimeout()
	{
		return $this->host_check_timeout;
	}

	/**
	 * Get the [event_handler_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getEventHandlerTimeout()
	{
		return $this->event_handler_timeout;
	}

	/**
	 * Get the [notification_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationTimeout()
	{
		return $this->notification_timeout;
	}

	/**
	 * Get the [ocsp_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getOcspTimeout()
	{
		return $this->ocsp_timeout;
	}

	/**
	 * Get the [ohcp_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getOhcpTimeout()
	{
		return $this->ohcp_timeout;
	}

	/**
	 * Get the [perfdata_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getPerfdataTimeout()
	{
		return $this->perfdata_timeout;
	}

	/**
	 * Get the [obsess_over_services] column value.
	 * 
	 * @return     boolean
	 */
	public function getObsessOverServices()
	{
		return $this->obsess_over_services;
	}

	/**
	 * Get the [ocsp_command] column value.
	 * 
	 * @return     int
	 */
	public function getOcspCommand()
	{
		return $this->ocsp_command;
	}

	/**
	 * Get the [process_performance_data] column value.
	 * 
	 * @return     boolean
	 */
	public function getProcessPerformanceData()
	{
		return $this->process_performance_data;
	}

	/**
	 * Get the [check_for_orphaned_services] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckForOrphanedServices()
	{
		return $this->check_for_orphaned_services;
	}

	/**
	 * Get the [check_service_freshness] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckServiceFreshness()
	{
		return $this->check_service_freshness;
	}

	/**
	 * Get the [freshness_check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getFreshnessCheckInterval()
	{
		return $this->freshness_check_interval;
	}

	/**
	 * Get the [date_format] column value.
	 * 
	 * @return     string
	 */
	public function getDateFormat()
	{
		return $this->date_format;
	}

	/**
	 * Get the [illegal_object_name_chars] column value.
	 * 
	 * @return     string
	 */
	public function getIllegalObjectNameChars()
	{
		return $this->illegal_object_name_chars;
	}

	/**
	 * Get the [illegal_macro_output_chars] column value.
	 * 
	 * @return     string
	 */
	public function getIllegalMacroOutputChars()
	{
		return $this->illegal_macro_output_chars;
	}

	/**
	 * Get the [admin_email] column value.
	 * 
	 * @return     string
	 */
	public function getAdminEmail()
	{
		return $this->admin_email;
	}

	/**
	 * Get the [admin_pager] column value.
	 * 
	 * @return     string
	 */
	public function getAdminPager()
	{
		return $this->admin_pager;
	}

	/**
	 * Get the [execute_host_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getExecuteHostChecks()
	{
		return $this->execute_host_checks;
	}

	/**
	 * Get the [service_inter_check_delay_method] column value.
	 * 
	 * @return     string
	 */
	public function getServiceInterCheckDelayMethod()
	{
		return $this->service_inter_check_delay_method;
	}

	/**
	 * Get the [use_retained_scheduling_info] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseRetainedSchedulingInfo()
	{
		return $this->use_retained_scheduling_info;
	}

	/**
	 * Get the [accept_passive_host_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getAcceptPassiveHostChecks()
	{
		return $this->accept_passive_host_checks;
	}

	/**
	 * Get the [max_service_check_spread] column value.
	 * 
	 * @return     int
	 */
	public function getMaxServiceCheckSpread()
	{
		return $this->max_service_check_spread;
	}

	/**
	 * Get the [host_inter_check_delay_method] column value.
	 * 
	 * @return     string
	 */
	public function getHostInterCheckDelayMethod()
	{
		return $this->host_inter_check_delay_method;
	}

	/**
	 * Get the [max_host_check_spread] column value.
	 * 
	 * @return     int
	 */
	public function getMaxHostCheckSpread()
	{
		return $this->max_host_check_spread;
	}

	/**
	 * Get the [auto_reschedule_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getAutoRescheduleChecks()
	{
		return $this->auto_reschedule_checks;
	}

	/**
	 * Get the [auto_rescheduling_interval] column value.
	 * 
	 * @return     int
	 */
	public function getAutoReschedulingInterval()
	{
		return $this->auto_rescheduling_interval;
	}

	/**
	 * Get the [auto_rescheduling_window] column value.
	 * 
	 * @return     int
	 */
	public function getAutoReschedulingWindow()
	{
		return $this->auto_rescheduling_window;
	}

	/**
	 * Get the [ochp_timeout] column value.
	 * 
	 * @return     int
	 */
	public function getOchpTimeout()
	{
		return $this->ochp_timeout;
	}

	/**
	 * Get the [obsess_over_hosts] column value.
	 * 
	 * @return     boolean
	 */
	public function getObsessOverHosts()
	{
		return $this->obsess_over_hosts;
	}

	/**
	 * Get the [ochp_command] column value.
	 * 
	 * @return     int
	 */
	public function getOchpCommand()
	{
		return $this->ochp_command;
	}

	/**
	 * Get the [check_host_freshness] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckHostFreshness()
	{
		return $this->check_host_freshness;
	}

	/**
	 * Get the [host_freshness_check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getHostFreshnessCheckInterval()
	{
		return $this->host_freshness_check_interval;
	}

	/**
	 * Get the [service_freshness_check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getServiceFreshnessCheckInterval()
	{
		return $this->service_freshness_check_interval;
	}

	/**
	 * Get the [use_regexp_matching] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseRegexpMatching()
	{
		return $this->use_regexp_matching;
	}

	/**
	 * Get the [use_true_regexp_matching] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseTrueRegexpMatching()
	{
		return $this->use_true_regexp_matching;
	}

	/**
	 * Get the [event_broker_options] column value.
	 * 
	 * @return     string
	 */
	public function getEventBrokerOptions()
	{
		return $this->event_broker_options;
	}

	/**
	 * Get the [daemon_dumps_core] column value.
	 * 
	 * @return     boolean
	 */
	public function getDaemonDumpsCore()
	{
		return $this->daemon_dumps_core;
	}

	/**
	 * Get the [host_perfdata_command] column value.
	 * 
	 * @return     int
	 */
	public function getHostPerfdataCommand()
	{
		return $this->host_perfdata_command;
	}

	/**
	 * Get the [service_perfdata_command] column value.
	 * 
	 * @return     int
	 */
	public function getServicePerfdataCommand()
	{
		return $this->service_perfdata_command;
	}

	/**
	 * Get the [host_perfdata_file] column value.
	 * 
	 * @return     string
	 */
	public function getHostPerfdataFile()
	{
		return $this->host_perfdata_file;
	}

	/**
	 * Get the [host_perfdata_file_template] column value.
	 * 
	 * @return     string
	 */
	public function getHostPerfdataFileTemplate()
	{
		return $this->host_perfdata_file_template;
	}

	/**
	 * Get the [service_perfdata_file] column value.
	 * 
	 * @return     string
	 */
	public function getServicePerfdataFile()
	{
		return $this->service_perfdata_file;
	}

	/**
	 * Get the [service_perfdata_file_template] column value.
	 * 
	 * @return     string
	 */
	public function getServicePerfdataFileTemplate()
	{
		return $this->service_perfdata_file_template;
	}

	/**
	 * Get the [host_perfdata_file_mode] column value.
	 * 
	 * @return     string
	 */
	public function getHostPerfdataFileMode()
	{
		return $this->host_perfdata_file_mode;
	}

	/**
	 * Get the [service_perfdata_file_mode] column value.
	 * 
	 * @return     string
	 */
	public function getServicePerfdataFileMode()
	{
		return $this->service_perfdata_file_mode;
	}

	/**
	 * Get the [host_perfdata_file_processing_command] column value.
	 * 
	 * @return     int
	 */
	public function getHostPerfdataFileProcessingCommand()
	{
		return $this->host_perfdata_file_processing_command;
	}

	/**
	 * Get the [service_perfdata_file_processing_command] column value.
	 * 
	 * @return     int
	 */
	public function getServicePerfdataFileProcessingCommand()
	{
		return $this->service_perfdata_file_processing_command;
	}

	/**
	 * Get the [host_perfdata_file_processing_interval] column value.
	 * 
	 * @return     int
	 */
	public function getHostPerfdataFileProcessingInterval()
	{
		return $this->host_perfdata_file_processing_interval;
	}

	/**
	 * Get the [service_perfdata_file_processing_interval] column value.
	 * 
	 * @return     int
	 */
	public function getServicePerfdataFileProcessingInterval()
	{
		return $this->service_perfdata_file_processing_interval;
	}

	/**
	 * Get the [object_cache_file] column value.
	 * 
	 * @return     string
	 */
	public function getObjectCacheFile()
	{
		return $this->object_cache_file;
	}

	/**
	 * Get the [precached_object_file] column value.
	 * 
	 * @return     string
	 */
	public function getPrecachedObjectFile()
	{
		return $this->precached_object_file;
	}

	/**
	 * Get the [retained_host_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedHostAttributeMask()
	{
		return $this->retained_host_attribute_mask;
	}

	/**
	 * Get the [retained_service_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedServiceAttributeMask()
	{
		return $this->retained_service_attribute_mask;
	}

	/**
	 * Get the [retained_process_host_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedProcessHostAttributeMask()
	{
		return $this->retained_process_host_attribute_mask;
	}

	/**
	 * Get the [retained_process_service_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedProcessServiceAttributeMask()
	{
		return $this->retained_process_service_attribute_mask;
	}

	/**
	 * Get the [retained_contact_host_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedContactHostAttributeMask()
	{
		return $this->retained_contact_host_attribute_mask;
	}

	/**
	 * Get the [retained_contact_service_attribute_mask] column value.
	 * 
	 * @return     int
	 */
	public function getRetainedContactServiceAttributeMask()
	{
		return $this->retained_contact_service_attribute_mask;
	}

	/**
	 * Get the [check_result_reaper_frequency] column value.
	 * 
	 * @return     int
	 */
	public function getCheckResultReaperFrequency()
	{
		return $this->check_result_reaper_frequency;
	}

	/**
	 * Get the [max_check_result_reaper_time] column value.
	 * 
	 * @return     int
	 */
	public function getMaxCheckResultReaperTime()
	{
		return $this->max_check_result_reaper_time;
	}

	/**
	 * Get the [check_result_path] column value.
	 * 
	 * @return     string
	 */
	public function getCheckResultPath()
	{
		return $this->check_result_path;
	}

	/**
	 * Get the [max_check_result_file_age] column value.
	 * 
	 * @return     int
	 */
	public function getMaxCheckResultFileAge()
	{
		return $this->max_check_result_file_age;
	}

	/**
	 * Get the [translate_passive_host_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getTranslatePassiveHostChecks()
	{
		return $this->translate_passive_host_checks;
	}

	/**
	 * Get the [passive_host_checks_are_soft] column value.
	 * 
	 * @return     boolean
	 */
	public function getPassiveHostChecksAreSoft()
	{
		return $this->passive_host_checks_are_soft;
	}

	/**
	 * Get the [enable_predictive_host_dependency_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnablePredictiveHostDependencyChecks()
	{
		return $this->enable_predictive_host_dependency_checks;
	}

	/**
	 * Get the [enable_predictive_service_dependency_checks] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnablePredictiveServiceDependencyChecks()
	{
		return $this->enable_predictive_service_dependency_checks;
	}

	/**
	 * Get the [cached_host_check_horizon] column value.
	 * 
	 * @return     int
	 */
	public function getCachedHostCheckHorizon()
	{
		return $this->cached_host_check_horizon;
	}

	/**
	 * Get the [cached_service_check_horizon] column value.
	 * 
	 * @return     int
	 */
	public function getCachedServiceCheckHorizon()
	{
		return $this->cached_service_check_horizon;
	}

	/**
	 * Get the [use_large_installation_tweaks] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseLargeInstallationTweaks()
	{
		return $this->use_large_installation_tweaks;
	}

	/**
	 * Get the [free_child_process_memory] column value.
	 * 
	 * @return     boolean
	 */
	public function getFreeChildProcessMemory()
	{
		return $this->free_child_process_memory;
	}

	/**
	 * Get the [child_processes_fork_twice] column value.
	 * 
	 * @return     boolean
	 */
	public function getChildProcessesForkTwice()
	{
		return $this->child_processes_fork_twice;
	}

	/**
	 * Get the [enable_environment_macros] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableEnvironmentMacros()
	{
		return $this->enable_environment_macros;
	}

	/**
	 * Get the [additional_freshness_latency] column value.
	 * 
	 * @return     int
	 */
	public function getAdditionalFreshnessLatency()
	{
		return $this->additional_freshness_latency;
	}

	/**
	 * Get the [enable_embedded_perl] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableEmbeddedPerl()
	{
		return $this->enable_embedded_perl;
	}

	/**
	 * Get the [use_embedded_perl_implicitly] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseEmbeddedPerlImplicitly()
	{
		return $this->use_embedded_perl_implicitly;
	}

	/**
	 * Get the [p1_file] column value.
	 * 
	 * @return     string
	 */
	public function getP1File()
	{
		return $this->p1_file;
	}

	/**
	 * Get the [use_timezone] column value.
	 * 
	 * @return     string
	 */
	public function getUseTimezone()
	{
		return $this->use_timezone;
	}

	/**
	 * Get the [debug_file] column value.
	 * 
	 * @return     string
	 */
	public function getDebugFile()
	{
		return $this->debug_file;
	}

	/**
	 * Get the [debug_level] column value.
	 * 
	 * @return     int
	 */
	public function getDebugLevel()
	{
		return $this->debug_level;
	}

	/**
	 * Get the [debug_verbosity] column value.
	 * 
	 * @return     int
	 */
	public function getDebugVerbosity()
	{
		return $this->debug_verbosity;
	}

	/**
	 * Get the [max_debug_file_size] column value.
	 * 
	 * @return     int
	 */
	public function getMaxDebugFileSize()
	{
		return $this->max_debug_file_size;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [config_dir] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setConfigDir($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->config_dir !== $v) {
			$this->config_dir = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CONFIG_DIR;
		}

		return $this;
	} // setConfigDir()

	/**
	 * Set the value of [log_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->log_file !== $v) {
			$this->log_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_FILE;
		}

		return $this;
	} // setLogFile()

	/**
	 * Set the value of [temp_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setTempFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->temp_file !== $v) {
			$this->temp_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::TEMP_FILE;
		}

		return $this;
	} // setTempFile()

	/**
	 * Set the value of [status_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setStatusFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->status_file !== $v) {
			$this->status_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::STATUS_FILE;
		}

		return $this;
	} // setStatusFile()

	/**
	 * Set the value of [status_update_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setStatusUpdateInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->status_update_interval !== $v) {
			$this->status_update_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL;
		}

		return $this;
	} // setStatusUpdateInterval()

	/**
	 * Set the value of [nagios_user] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setNagiosUser($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nagios_user !== $v) {
			$this->nagios_user = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::NAGIOS_USER;
		}

		return $this;
	} // setNagiosUser()

	/**
	 * Set the value of [nagios_group] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setNagiosGroup($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nagios_group !== $v) {
			$this->nagios_group = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::NAGIOS_GROUP;
		}

		return $this;
	} // setNagiosGroup()

	/**
	 * Set the value of [enable_notifications] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnableNotifications($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_notifications !== $v) {
			$this->enable_notifications = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_NOTIFICATIONS;
		}

		return $this;
	} // setEnableNotifications()

	/**
	 * Set the value of [execute_service_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setExecuteServiceChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->execute_service_checks !== $v) {
			$this->execute_service_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::EXECUTE_SERVICE_CHECKS;
		}

		return $this;
	} // setExecuteServiceChecks()

	/**
	 * Set the value of [accept_passive_service_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAcceptPassiveServiceChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->accept_passive_service_checks !== $v) {
			$this->accept_passive_service_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ACCEPT_PASSIVE_SERVICE_CHECKS;
		}

		return $this;
	} // setAcceptPassiveServiceChecks()

	/**
	 * Set the value of [enable_event_handlers] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnableEventHandlers($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_event_handlers !== $v) {
			$this->enable_event_handlers = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_EVENT_HANDLERS;
		}

		return $this;
	} // setEnableEventHandlers()

	/**
	 * Set the value of [log_rotation_method] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogRotationMethod($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->log_rotation_method !== $v) {
			$this->log_rotation_method = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_ROTATION_METHOD;
		}

		return $this;
	} // setLogRotationMethod()

	/**
	 * Set the value of [log_archive_path] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogArchivePath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->log_archive_path !== $v) {
			$this->log_archive_path = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_ARCHIVE_PATH;
		}

		return $this;
	} // setLogArchivePath()

	/**
	 * Set the value of [check_external_commands] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckExternalCommands($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_external_commands !== $v) {
			$this->check_external_commands = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_EXTERNAL_COMMANDS;
		}

		return $this;
	} // setCheckExternalCommands()

	/**
	 * Set the value of [command_check_interval] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCommandCheckInterval($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->command_check_interval !== $v) {
			$this->command_check_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::COMMAND_CHECK_INTERVAL;
		}

		return $this;
	} // setCommandCheckInterval()

	/**
	 * Set the value of [command_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCommandFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->command_file !== $v) {
			$this->command_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::COMMAND_FILE;
		}

		return $this;
	} // setCommandFile()

	/**
	 * Set the value of [lock_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLockFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->lock_file !== $v) {
			$this->lock_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOCK_FILE;
		}

		return $this;
	} // setLockFile()

	/**
	 * Set the value of [retain_state_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainStateInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_state_information !== $v) {
			$this->retain_state_information = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAIN_STATE_INFORMATION;
		}

		return $this;
	} // setRetainStateInformation()

	/**
	 * Set the value of [state_retention_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setStateRetentionFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->state_retention_file !== $v) {
			$this->state_retention_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::STATE_RETENTION_FILE;
		}

		return $this;
	} // setStateRetentionFile()

	/**
	 * Set the value of [retention_update_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetentionUpdateInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retention_update_interval !== $v) {
			$this->retention_update_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL;
		}

		return $this;
	} // setRetentionUpdateInterval()

	/**
	 * Set the value of [use_retained_program_state] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseRetainedProgramState($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_retained_program_state !== $v) {
			$this->use_retained_program_state = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_RETAINED_PROGRAM_STATE;
		}

		return $this;
	} // setUseRetainedProgramState()

	/**
	 * Set the value of [use_syslog] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseSyslog($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_syslog !== $v) {
			$this->use_syslog = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_SYSLOG;
		}

		return $this;
	} // setUseSyslog()

	/**
	 * Set the value of [log_notifications] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogNotifications($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_notifications !== $v) {
			$this->log_notifications = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_NOTIFICATIONS;
		}

		return $this;
	} // setLogNotifications()

	/**
	 * Set the value of [log_service_retries] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogServiceRetries($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_service_retries !== $v) {
			$this->log_service_retries = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_SERVICE_RETRIES;
		}

		return $this;
	} // setLogServiceRetries()

	/**
	 * Set the value of [log_host_retries] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogHostRetries($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_host_retries !== $v) {
			$this->log_host_retries = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_HOST_RETRIES;
		}

		return $this;
	} // setLogHostRetries()

	/**
	 * Set the value of [log_event_handlers] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogEventHandlers($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_event_handlers !== $v) {
			$this->log_event_handlers = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_EVENT_HANDLERS;
		}

		return $this;
	} // setLogEventHandlers()

	/**
	 * Set the value of [log_initial_states] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogInitialStates($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_initial_states !== $v) {
			$this->log_initial_states = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_INITIAL_STATES;
		}

		return $this;
	} // setLogInitialStates()

	/**
	 * Set the value of [log_external_commands] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogExternalCommands($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_external_commands !== $v) {
			$this->log_external_commands = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_EXTERNAL_COMMANDS;
		}

		return $this;
	} // setLogExternalCommands()

	/**
	 * Set the value of [log_passive_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLogPassiveChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->log_passive_checks !== $v) {
			$this->log_passive_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOG_PASSIVE_CHECKS;
		}

		return $this;
	} // setLogPassiveChecks()

	/**
	 * Set the value of [global_host_event_handler] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setGlobalHostEventHandler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->global_host_event_handler !== $v) {
			$this->global_host_event_handler = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER;
		}

		if ($this->aNagiosCommandRelatedByGlobalHostEventHandler !== null && $this->aNagiosCommandRelatedByGlobalHostEventHandler->getId() !== $v) {
			$this->aNagiosCommandRelatedByGlobalHostEventHandler = null;
		}

		return $this;
	} // setGlobalHostEventHandler()

	/**
	 * Set the value of [global_service_event_handler] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setGlobalServiceEventHandler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->global_service_event_handler !== $v) {
			$this->global_service_event_handler = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER;
		}

		if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler !== null && $this->aNagiosCommandRelatedByGlobalServiceEventHandler->getId() !== $v) {
			$this->aNagiosCommandRelatedByGlobalServiceEventHandler = null;
		}

		return $this;
	} // setGlobalServiceEventHandler()

	/**
	 * Set the value of [external_command_buffer_slots] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setExternalCommandBufferSlots($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->external_command_buffer_slots !== $v) {
			$this->external_command_buffer_slots = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS;
		}

		return $this;
	} // setExternalCommandBufferSlots()

	/**
	 * Set the value of [sleep_time] column.
	 * 
	 * @param      double $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setSleepTime($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->sleep_time !== $v) {
			$this->sleep_time = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SLEEP_TIME;
		}

		return $this;
	} // setSleepTime()

	/**
	 * Set the value of [service_interleave_factor] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServiceInterleaveFactor($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_interleave_factor !== $v) {
			$this->service_interleave_factor = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_INTERLEAVE_FACTOR;
		}

		return $this;
	} // setServiceInterleaveFactor()

	/**
	 * Set the value of [max_concurrent_checks] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxConcurrentChecks($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_concurrent_checks !== $v) {
			$this->max_concurrent_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS;
		}

		return $this;
	} // setMaxConcurrentChecks()

	/**
	 * Set the value of [service_reaper_frequency] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServiceReaperFrequency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_reaper_frequency !== $v) {
			$this->service_reaper_frequency = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY;
		}

		return $this;
	} // setServiceReaperFrequency()

	/**
	 * Set the value of [interval_length] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setIntervalLength($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->interval_length !== $v) {
			$this->interval_length = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::INTERVAL_LENGTH;
		}

		return $this;
	} // setIntervalLength()

	/**
	 * Set the value of [use_aggressive_host_checking] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseAggressiveHostChecking($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_aggressive_host_checking !== $v) {
			$this->use_aggressive_host_checking = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_AGGRESSIVE_HOST_CHECKING;
		}

		return $this;
	} // setUseAggressiveHostChecking()

	/**
	 * Set the value of [enable_flap_detection] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnableFlapDetection($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_flap_detection !== $v) {
			$this->enable_flap_detection = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_FLAP_DETECTION;
		}

		return $this;
	} // setEnableFlapDetection()

	/**
	 * Set the value of [low_service_flap_threshold] column.
	 * 
	 * @param      double $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLowServiceFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->low_service_flap_threshold !== $v) {
			$this->low_service_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD;
		}

		return $this;
	} // setLowServiceFlapThreshold()

	/**
	 * Set the value of [high_service_flap_threshold] column.
	 * 
	 * @param      double $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHighServiceFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->high_service_flap_threshold !== $v) {
			$this->high_service_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD;
		}

		return $this;
	} // setHighServiceFlapThreshold()

	/**
	 * Set the value of [low_host_flap_threshold] column.
	 * 
	 * @param      double $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setLowHostFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->low_host_flap_threshold !== $v) {
			$this->low_host_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD;
		}

		return $this;
	} // setLowHostFlapThreshold()

	/**
	 * Set the value of [high_host_flap_threshold] column.
	 * 
	 * @param      double $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHighHostFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (double) $v;
		}

		if ($this->high_host_flap_threshold !== $v) {
			$this->high_host_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD;
		}

		return $this;
	} // setHighHostFlapThreshold()

	/**
	 * Set the value of [soft_state_dependencies] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setSoftStateDependencies($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->soft_state_dependencies !== $v) {
			$this->soft_state_dependencies = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SOFT_STATE_DEPENDENCIES;
		}

		return $this;
	} // setSoftStateDependencies()

	/**
	 * Set the value of [service_check_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServiceCheckTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_check_timeout !== $v) {
			$this->service_check_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT;
		}

		return $this;
	} // setServiceCheckTimeout()

	/**
	 * Set the value of [host_check_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostCheckTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_check_timeout !== $v) {
			$this->host_check_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT;
		}

		return $this;
	} // setHostCheckTimeout()

	/**
	 * Set the value of [event_handler_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEventHandlerTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->event_handler_timeout !== $v) {
			$this->event_handler_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT;
		}

		return $this;
	} // setEventHandlerTimeout()

	/**
	 * Set the value of [notification_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setNotificationTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_timeout !== $v) {
			$this->notification_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT;
		}

		return $this;
	} // setNotificationTimeout()

	/**
	 * Set the value of [ocsp_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setOcspTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ocsp_timeout !== $v) {
			$this->ocsp_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OCSP_TIMEOUT;
		}

		return $this;
	} // setOcspTimeout()

	/**
	 * Set the value of [ohcp_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setOhcpTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ohcp_timeout !== $v) {
			$this->ohcp_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OHCP_TIMEOUT;
		}

		return $this;
	} // setOhcpTimeout()

	/**
	 * Set the value of [perfdata_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setPerfdataTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->perfdata_timeout !== $v) {
			$this->perfdata_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::PERFDATA_TIMEOUT;
		}

		return $this;
	} // setPerfdataTimeout()

	/**
	 * Set the value of [obsess_over_services] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setObsessOverServices($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->obsess_over_services !== $v) {
			$this->obsess_over_services = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OBSESS_OVER_SERVICES;
		}

		return $this;
	} // setObsessOverServices()

	/**
	 * Set the value of [ocsp_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setOcspCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ocsp_command !== $v) {
			$this->ocsp_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OCSP_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByOcspCommand !== null && $this->aNagiosCommandRelatedByOcspCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByOcspCommand = null;
		}

		return $this;
	} // setOcspCommand()

	/**
	 * Set the value of [process_performance_data] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setProcessPerformanceData($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->process_performance_data !== $v) {
			$this->process_performance_data = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::PROCESS_PERFORMANCE_DATA;
		}

		return $this;
	} // setProcessPerformanceData()

	/**
	 * Set the value of [check_for_orphaned_services] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckForOrphanedServices($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_for_orphaned_services !== $v) {
			$this->check_for_orphaned_services = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_SERVICES;
		}

		return $this;
	} // setCheckForOrphanedServices()

	/**
	 * Set the value of [check_service_freshness] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckServiceFreshness($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_service_freshness !== $v) {
			$this->check_service_freshness = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_SERVICE_FRESHNESS;
		}

		return $this;
	} // setCheckServiceFreshness()

	/**
	 * Set the value of [freshness_check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setFreshnessCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->freshness_check_interval !== $v) {
			$this->freshness_check_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL;
		}

		return $this;
	} // setFreshnessCheckInterval()

	/**
	 * Set the value of [date_format] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setDateFormat($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->date_format !== $v) {
			$this->date_format = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::DATE_FORMAT;
		}

		return $this;
	} // setDateFormat()

	/**
	 * Set the value of [illegal_object_name_chars] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setIllegalObjectNameChars($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->illegal_object_name_chars !== $v) {
			$this->illegal_object_name_chars = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ILLEGAL_OBJECT_NAME_CHARS;
		}

		return $this;
	} // setIllegalObjectNameChars()

	/**
	 * Set the value of [illegal_macro_output_chars] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setIllegalMacroOutputChars($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->illegal_macro_output_chars !== $v) {
			$this->illegal_macro_output_chars = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ILLEGAL_MACRO_OUTPUT_CHARS;
		}

		return $this;
	} // setIllegalMacroOutputChars()

	/**
	 * Set the value of [admin_email] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAdminEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->admin_email !== $v) {
			$this->admin_email = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ADMIN_EMAIL;
		}

		return $this;
	} // setAdminEmail()

	/**
	 * Set the value of [admin_pager] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAdminPager($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->admin_pager !== $v) {
			$this->admin_pager = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ADMIN_PAGER;
		}

		return $this;
	} // setAdminPager()

	/**
	 * Set the value of [execute_host_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setExecuteHostChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->execute_host_checks !== $v) {
			$this->execute_host_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::EXECUTE_HOST_CHECKS;
		}

		return $this;
	} // setExecuteHostChecks()

	/**
	 * Set the value of [service_inter_check_delay_method] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServiceInterCheckDelayMethod($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_inter_check_delay_method !== $v) {
			$this->service_inter_check_delay_method = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_INTER_CHECK_DELAY_METHOD;
		}

		return $this;
	} // setServiceInterCheckDelayMethod()

	/**
	 * Set the value of [use_retained_scheduling_info] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseRetainedSchedulingInfo($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_retained_scheduling_info !== $v) {
			$this->use_retained_scheduling_info = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_RETAINED_SCHEDULING_INFO;
		}

		return $this;
	} // setUseRetainedSchedulingInfo()

	/**
	 * Set the value of [accept_passive_host_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAcceptPassiveHostChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->accept_passive_host_checks !== $v) {
			$this->accept_passive_host_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ACCEPT_PASSIVE_HOST_CHECKS;
		}

		return $this;
	} // setAcceptPassiveHostChecks()

	/**
	 * Set the value of [max_service_check_spread] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxServiceCheckSpread($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_service_check_spread !== $v) {
			$this->max_service_check_spread = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD;
		}

		return $this;
	} // setMaxServiceCheckSpread()

	/**
	 * Set the value of [host_inter_check_delay_method] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostInterCheckDelayMethod($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_inter_check_delay_method !== $v) {
			$this->host_inter_check_delay_method = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_INTER_CHECK_DELAY_METHOD;
		}

		return $this;
	} // setHostInterCheckDelayMethod()

	/**
	 * Set the value of [max_host_check_spread] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxHostCheckSpread($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_host_check_spread !== $v) {
			$this->max_host_check_spread = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD;
		}

		return $this;
	} // setMaxHostCheckSpread()

	/**
	 * Set the value of [auto_reschedule_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAutoRescheduleChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->auto_reschedule_checks !== $v) {
			$this->auto_reschedule_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::AUTO_RESCHEDULE_CHECKS;
		}

		return $this;
	} // setAutoRescheduleChecks()

	/**
	 * Set the value of [auto_rescheduling_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAutoReschedulingInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auto_rescheduling_interval !== $v) {
			$this->auto_rescheduling_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL;
		}

		return $this;
	} // setAutoReschedulingInterval()

	/**
	 * Set the value of [auto_rescheduling_window] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAutoReschedulingWindow($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->auto_rescheduling_window !== $v) {
			$this->auto_rescheduling_window = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW;
		}

		return $this;
	} // setAutoReschedulingWindow()

	/**
	 * Set the value of [ochp_timeout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setOchpTimeout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ochp_timeout !== $v) {
			$this->ochp_timeout = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OCHP_TIMEOUT;
		}

		return $this;
	} // setOchpTimeout()

	/**
	 * Set the value of [obsess_over_hosts] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setObsessOverHosts($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->obsess_over_hosts !== $v) {
			$this->obsess_over_hosts = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OBSESS_OVER_HOSTS;
		}

		return $this;
	} // setObsessOverHosts()

	/**
	 * Set the value of [ochp_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setOchpCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->ochp_command !== $v) {
			$this->ochp_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OCHP_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByOchpCommand !== null && $this->aNagiosCommandRelatedByOchpCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByOchpCommand = null;
		}

		return $this;
	} // setOchpCommand()

	/**
	 * Set the value of [check_host_freshness] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckHostFreshness($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_host_freshness !== $v) {
			$this->check_host_freshness = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_HOST_FRESHNESS;
		}

		return $this;
	} // setCheckHostFreshness()

	/**
	 * Set the value of [host_freshness_check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostFreshnessCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_freshness_check_interval !== $v) {
			$this->host_freshness_check_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL;
		}

		return $this;
	} // setHostFreshnessCheckInterval()

	/**
	 * Set the value of [service_freshness_check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServiceFreshnessCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_freshness_check_interval !== $v) {
			$this->service_freshness_check_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL;
		}

		return $this;
	} // setServiceFreshnessCheckInterval()

	/**
	 * Set the value of [use_regexp_matching] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseRegexpMatching($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_regexp_matching !== $v) {
			$this->use_regexp_matching = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_REGEXP_MATCHING;
		}

		return $this;
	} // setUseRegexpMatching()

	/**
	 * Set the value of [use_true_regexp_matching] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseTrueRegexpMatching($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_true_regexp_matching !== $v) {
			$this->use_true_regexp_matching = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_TRUE_REGEXP_MATCHING;
		}

		return $this;
	} // setUseTrueRegexpMatching()

	/**
	 * Set the value of [event_broker_options] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEventBrokerOptions($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->event_broker_options !== $v) {
			$this->event_broker_options = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::EVENT_BROKER_OPTIONS;
		}

		return $this;
	} // setEventBrokerOptions()

	/**
	 * Set the value of [daemon_dumps_core] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setDaemonDumpsCore($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->daemon_dumps_core !== $v) {
			$this->daemon_dumps_core = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::DAEMON_DUMPS_CORE;
		}

		return $this;
	} // setDaemonDumpsCore()

	/**
	 * Set the value of [host_perfdata_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_perfdata_command !== $v) {
			$this->host_perfdata_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByHostPerfdataCommand !== null && $this->aNagiosCommandRelatedByHostPerfdataCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByHostPerfdataCommand = null;
		}

		return $this;
	} // setHostPerfdataCommand()

	/**
	 * Set the value of [service_perfdata_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_perfdata_command !== $v) {
			$this->service_perfdata_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByServicePerfdataCommand !== null && $this->aNagiosCommandRelatedByServicePerfdataCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByServicePerfdataCommand = null;
		}

		return $this;
	} // setServicePerfdataCommand()

	/**
	 * Set the value of [host_perfdata_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_perfdata_file !== $v) {
			$this->host_perfdata_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_FILE;
		}

		return $this;
	} // setHostPerfdataFile()

	/**
	 * Set the value of [host_perfdata_file_template] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataFileTemplate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_perfdata_file_template !== $v) {
			$this->host_perfdata_file_template = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_TEMPLATE;
		}

		return $this;
	} // setHostPerfdataFileTemplate()

	/**
	 * Set the value of [service_perfdata_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_perfdata_file !== $v) {
			$this->service_perfdata_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE;
		}

		return $this;
	} // setServicePerfdataFile()

	/**
	 * Set the value of [service_perfdata_file_template] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataFileTemplate($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_perfdata_file_template !== $v) {
			$this->service_perfdata_file_template = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_TEMPLATE;
		}

		return $this;
	} // setServicePerfdataFileTemplate()

	/**
	 * Set the value of [host_perfdata_file_mode] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataFileMode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_perfdata_file_mode !== $v) {
			$this->host_perfdata_file_mode = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_MODE;
		}

		return $this;
	} // setHostPerfdataFileMode()

	/**
	 * Set the value of [service_perfdata_file_mode] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataFileMode($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_perfdata_file_mode !== $v) {
			$this->service_perfdata_file_mode = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_MODE;
		}

		return $this;
	} // setServicePerfdataFileMode()

	/**
	 * Set the value of [host_perfdata_file_processing_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataFileProcessingCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_perfdata_file_processing_command !== $v) {
			$this->host_perfdata_file_processing_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand !== null && $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = null;
		}

		return $this;
	} // setHostPerfdataFileProcessingCommand()

	/**
	 * Set the value of [service_perfdata_file_processing_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataFileProcessingCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_perfdata_file_processing_command !== $v) {
			$this->service_perfdata_file_processing_command = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand !== null && $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = null;
		}

		return $this;
	} // setServicePerfdataFileProcessingCommand()

	/**
	 * Set the value of [host_perfdata_file_processing_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setHostPerfdataFileProcessingInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_perfdata_file_processing_interval !== $v) {
			$this->host_perfdata_file_processing_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL;
		}

		return $this;
	} // setHostPerfdataFileProcessingInterval()

	/**
	 * Set the value of [service_perfdata_file_processing_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setServicePerfdataFileProcessingInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_perfdata_file_processing_interval !== $v) {
			$this->service_perfdata_file_processing_interval = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL;
		}

		return $this;
	} // setServicePerfdataFileProcessingInterval()

	/**
	 * Set the value of [object_cache_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setObjectCacheFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->object_cache_file !== $v) {
			$this->object_cache_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::OBJECT_CACHE_FILE;
		}

		return $this;
	} // setObjectCacheFile()

	/**
	 * Set the value of [precached_object_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setPrecachedObjectFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->precached_object_file !== $v) {
			$this->precached_object_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::PRECACHED_OBJECT_FILE;
		}

		return $this;
	} // setPrecachedObjectFile()

	/**
	 * Set the value of [retained_host_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedHostAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_host_attribute_mask !== $v) {
			$this->retained_host_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedHostAttributeMask()

	/**
	 * Set the value of [retained_service_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedServiceAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_service_attribute_mask !== $v) {
			$this->retained_service_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedServiceAttributeMask()

	/**
	 * Set the value of [retained_process_host_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedProcessHostAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_process_host_attribute_mask !== $v) {
			$this->retained_process_host_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedProcessHostAttributeMask()

	/**
	 * Set the value of [retained_process_service_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedProcessServiceAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_process_service_attribute_mask !== $v) {
			$this->retained_process_service_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedProcessServiceAttributeMask()

	/**
	 * Set the value of [retained_contact_host_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedContactHostAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_contact_host_attribute_mask !== $v) {
			$this->retained_contact_host_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedContactHostAttributeMask()

	/**
	 * Set the value of [retained_contact_service_attribute_mask] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setRetainedContactServiceAttributeMask($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retained_contact_service_attribute_mask !== $v) {
			$this->retained_contact_service_attribute_mask = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK;
		}

		return $this;
	} // setRetainedContactServiceAttributeMask()

	/**
	 * Set the value of [check_result_reaper_frequency] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckResultReaperFrequency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_result_reaper_frequency !== $v) {
			$this->check_result_reaper_frequency = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY;
		}

		return $this;
	} // setCheckResultReaperFrequency()

	/**
	 * Set the value of [max_check_result_reaper_time] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxCheckResultReaperTime($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_check_result_reaper_time !== $v) {
			$this->max_check_result_reaper_time = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME;
		}

		return $this;
	} // setMaxCheckResultReaperTime()

	/**
	 * Set the value of [check_result_path] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCheckResultPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->check_result_path !== $v) {
			$this->check_result_path = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHECK_RESULT_PATH;
		}

		return $this;
	} // setCheckResultPath()

	/**
	 * Set the value of [max_check_result_file_age] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxCheckResultFileAge($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_check_result_file_age !== $v) {
			$this->max_check_result_file_age = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE;
		}

		return $this;
	} // setMaxCheckResultFileAge()

	/**
	 * Set the value of [translate_passive_host_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setTranslatePassiveHostChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->translate_passive_host_checks !== $v) {
			$this->translate_passive_host_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::TRANSLATE_PASSIVE_HOST_CHECKS;
		}

		return $this;
	} // setTranslatePassiveHostChecks()

	/**
	 * Set the value of [passive_host_checks_are_soft] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setPassiveHostChecksAreSoft($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->passive_host_checks_are_soft !== $v) {
			$this->passive_host_checks_are_soft = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::PASSIVE_HOST_CHECKS_ARE_SOFT;
		}

		return $this;
	} // setPassiveHostChecksAreSoft()

	/**
	 * Set the value of [enable_predictive_host_dependency_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnablePredictiveHostDependencyChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_predictive_host_dependency_checks !== $v) {
			$this->enable_predictive_host_dependency_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS;
		}

		return $this;
	} // setEnablePredictiveHostDependencyChecks()

	/**
	 * Set the value of [enable_predictive_service_dependency_checks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnablePredictiveServiceDependencyChecks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_predictive_service_dependency_checks !== $v) {
			$this->enable_predictive_service_dependency_checks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS;
		}

		return $this;
	} // setEnablePredictiveServiceDependencyChecks()

	/**
	 * Set the value of [cached_host_check_horizon] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCachedHostCheckHorizon($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cached_host_check_horizon !== $v) {
			$this->cached_host_check_horizon = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON;
		}

		return $this;
	} // setCachedHostCheckHorizon()

	/**
	 * Set the value of [cached_service_check_horizon] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setCachedServiceCheckHorizon($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->cached_service_check_horizon !== $v) {
			$this->cached_service_check_horizon = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON;
		}

		return $this;
	} // setCachedServiceCheckHorizon()

	/**
	 * Set the value of [use_large_installation_tweaks] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseLargeInstallationTweaks($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_large_installation_tweaks !== $v) {
			$this->use_large_installation_tweaks = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_LARGE_INSTALLATION_TWEAKS;
		}

		return $this;
	} // setUseLargeInstallationTweaks()

	/**
	 * Set the value of [free_child_process_memory] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setFreeChildProcessMemory($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->free_child_process_memory !== $v) {
			$this->free_child_process_memory = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::FREE_CHILD_PROCESS_MEMORY;
		}

		return $this;
	} // setFreeChildProcessMemory()

	/**
	 * Set the value of [child_processes_fork_twice] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setChildProcessesForkTwice($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->child_processes_fork_twice !== $v) {
			$this->child_processes_fork_twice = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::CHILD_PROCESSES_FORK_TWICE;
		}

		return $this;
	} // setChildProcessesForkTwice()

	/**
	 * Set the value of [enable_environment_macros] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnableEnvironmentMacros($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_environment_macros !== $v) {
			$this->enable_environment_macros = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_ENVIRONMENT_MACROS;
		}

		return $this;
	} // setEnableEnvironmentMacros()

	/**
	 * Set the value of [additional_freshness_latency] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setAdditionalFreshnessLatency($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->additional_freshness_latency !== $v) {
			$this->additional_freshness_latency = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY;
		}

		return $this;
	} // setAdditionalFreshnessLatency()

	/**
	 * Set the value of [enable_embedded_perl] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setEnableEmbeddedPerl($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->enable_embedded_perl !== $v) {
			$this->enable_embedded_perl = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::ENABLE_EMBEDDED_PERL;
		}

		return $this;
	} // setEnableEmbeddedPerl()

	/**
	 * Set the value of [use_embedded_perl_implicitly] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseEmbeddedPerlImplicitly($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->use_embedded_perl_implicitly !== $v) {
			$this->use_embedded_perl_implicitly = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_EMBEDDED_PERL_IMPLICITLY;
		}

		return $this;
	} // setUseEmbeddedPerlImplicitly()

	/**
	 * Set the value of [p1_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setP1File($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->p1_file !== $v) {
			$this->p1_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::P1_FILE;
		}

		return $this;
	} // setP1File()

	/**
	 * Set the value of [use_timezone] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setUseTimezone($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->use_timezone !== $v) {
			$this->use_timezone = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::USE_TIMEZONE;
		}

		return $this;
	} // setUseTimezone()

	/**
	 * Set the value of [debug_file] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setDebugFile($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->debug_file !== $v) {
			$this->debug_file = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::DEBUG_FILE;
		}

		return $this;
	} // setDebugFile()

	/**
	 * Set the value of [debug_level] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setDebugLevel($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->debug_level !== $v) {
			$this->debug_level = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::DEBUG_LEVEL;
		}

		return $this;
	} // setDebugLevel()

	/**
	 * Set the value of [debug_verbosity] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setDebugVerbosity($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->debug_verbosity !== $v) {
			$this->debug_verbosity = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::DEBUG_VERBOSITY;
		}

		return $this;
	} // setDebugVerbosity()

	/**
	 * Set the value of [max_debug_file_size] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 */
	public function setMaxDebugFileSize($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->max_debug_file_size !== $v) {
			$this->max_debug_file_size = $v;
			$this->modifiedColumns[] = NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE;
		}

		return $this;
	} // setMaxDebugFileSize()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->config_dir = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->log_file = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->temp_file = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->status_file = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->status_update_interval = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->nagios_user = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->nagios_group = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->enable_notifications = ($row[$startcol + 8] !== null) ? (boolean) $row[$startcol + 8] : null;
			$this->execute_service_checks = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->accept_passive_service_checks = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->enable_event_handlers = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->log_rotation_method = ($row[$startcol + 12] !== null) ? (string) $row[$startcol + 12] : null;
			$this->log_archive_path = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->check_external_commands = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->command_check_interval = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->command_file = ($row[$startcol + 16] !== null) ? (string) $row[$startcol + 16] : null;
			$this->lock_file = ($row[$startcol + 17] !== null) ? (string) $row[$startcol + 17] : null;
			$this->retain_state_information = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
			$this->state_retention_file = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->retention_update_interval = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->use_retained_program_state = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->use_syslog = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->log_notifications = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->log_service_retries = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->log_host_retries = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
			$this->log_event_handlers = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
			$this->log_initial_states = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->log_external_commands = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->log_passive_checks = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
			$this->global_host_event_handler = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->global_service_event_handler = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
			$this->external_command_buffer_slots = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
			$this->sleep_time = ($row[$startcol + 33] !== null) ? (double) $row[$startcol + 33] : null;
			$this->service_interleave_factor = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->max_concurrent_checks = ($row[$startcol + 35] !== null) ? (int) $row[$startcol + 35] : null;
			$this->service_reaper_frequency = ($row[$startcol + 36] !== null) ? (int) $row[$startcol + 36] : null;
			$this->interval_length = ($row[$startcol + 37] !== null) ? (int) $row[$startcol + 37] : null;
			$this->use_aggressive_host_checking = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->enable_flap_detection = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->low_service_flap_threshold = ($row[$startcol + 40] !== null) ? (double) $row[$startcol + 40] : null;
			$this->high_service_flap_threshold = ($row[$startcol + 41] !== null) ? (double) $row[$startcol + 41] : null;
			$this->low_host_flap_threshold = ($row[$startcol + 42] !== null) ? (double) $row[$startcol + 42] : null;
			$this->high_host_flap_threshold = ($row[$startcol + 43] !== null) ? (double) $row[$startcol + 43] : null;
			$this->soft_state_dependencies = ($row[$startcol + 44] !== null) ? (boolean) $row[$startcol + 44] : null;
			$this->service_check_timeout = ($row[$startcol + 45] !== null) ? (int) $row[$startcol + 45] : null;
			$this->host_check_timeout = ($row[$startcol + 46] !== null) ? (int) $row[$startcol + 46] : null;
			$this->event_handler_timeout = ($row[$startcol + 47] !== null) ? (int) $row[$startcol + 47] : null;
			$this->notification_timeout = ($row[$startcol + 48] !== null) ? (int) $row[$startcol + 48] : null;
			$this->ocsp_timeout = ($row[$startcol + 49] !== null) ? (int) $row[$startcol + 49] : null;
			$this->ohcp_timeout = ($row[$startcol + 50] !== null) ? (int) $row[$startcol + 50] : null;
			$this->perfdata_timeout = ($row[$startcol + 51] !== null) ? (int) $row[$startcol + 51] : null;
			$this->obsess_over_services = ($row[$startcol + 52] !== null) ? (boolean) $row[$startcol + 52] : null;
			$this->ocsp_command = ($row[$startcol + 53] !== null) ? (int) $row[$startcol + 53] : null;
			$this->process_performance_data = ($row[$startcol + 54] !== null) ? (boolean) $row[$startcol + 54] : null;
			$this->check_for_orphaned_services = ($row[$startcol + 55] !== null) ? (boolean) $row[$startcol + 55] : null;
			$this->check_service_freshness = ($row[$startcol + 56] !== null) ? (boolean) $row[$startcol + 56] : null;
			$this->freshness_check_interval = ($row[$startcol + 57] !== null) ? (int) $row[$startcol + 57] : null;
			$this->date_format = ($row[$startcol + 58] !== null) ? (string) $row[$startcol + 58] : null;
			$this->illegal_object_name_chars = ($row[$startcol + 59] !== null) ? (string) $row[$startcol + 59] : null;
			$this->illegal_macro_output_chars = ($row[$startcol + 60] !== null) ? (string) $row[$startcol + 60] : null;
			$this->admin_email = ($row[$startcol + 61] !== null) ? (string) $row[$startcol + 61] : null;
			$this->admin_pager = ($row[$startcol + 62] !== null) ? (string) $row[$startcol + 62] : null;
			$this->execute_host_checks = ($row[$startcol + 63] !== null) ? (boolean) $row[$startcol + 63] : null;
			$this->service_inter_check_delay_method = ($row[$startcol + 64] !== null) ? (string) $row[$startcol + 64] : null;
			$this->use_retained_scheduling_info = ($row[$startcol + 65] !== null) ? (boolean) $row[$startcol + 65] : null;
			$this->accept_passive_host_checks = ($row[$startcol + 66] !== null) ? (boolean) $row[$startcol + 66] : null;
			$this->max_service_check_spread = ($row[$startcol + 67] !== null) ? (int) $row[$startcol + 67] : null;
			$this->host_inter_check_delay_method = ($row[$startcol + 68] !== null) ? (string) $row[$startcol + 68] : null;
			$this->max_host_check_spread = ($row[$startcol + 69] !== null) ? (int) $row[$startcol + 69] : null;
			$this->auto_reschedule_checks = ($row[$startcol + 70] !== null) ? (boolean) $row[$startcol + 70] : null;
			$this->auto_rescheduling_interval = ($row[$startcol + 71] !== null) ? (int) $row[$startcol + 71] : null;
			$this->auto_rescheduling_window = ($row[$startcol + 72] !== null) ? (int) $row[$startcol + 72] : null;
			$this->ochp_timeout = ($row[$startcol + 73] !== null) ? (int) $row[$startcol + 73] : null;
			$this->obsess_over_hosts = ($row[$startcol + 74] !== null) ? (boolean) $row[$startcol + 74] : null;
			$this->ochp_command = ($row[$startcol + 75] !== null) ? (int) $row[$startcol + 75] : null;
			$this->check_host_freshness = ($row[$startcol + 76] !== null) ? (boolean) $row[$startcol + 76] : null;
			$this->host_freshness_check_interval = ($row[$startcol + 77] !== null) ? (int) $row[$startcol + 77] : null;
			$this->service_freshness_check_interval = ($row[$startcol + 78] !== null) ? (int) $row[$startcol + 78] : null;
			$this->use_regexp_matching = ($row[$startcol + 79] !== null) ? (boolean) $row[$startcol + 79] : null;
			$this->use_true_regexp_matching = ($row[$startcol + 80] !== null) ? (boolean) $row[$startcol + 80] : null;
			$this->event_broker_options = ($row[$startcol + 81] !== null) ? (string) $row[$startcol + 81] : null;
			$this->daemon_dumps_core = ($row[$startcol + 82] !== null) ? (boolean) $row[$startcol + 82] : null;
			$this->host_perfdata_command = ($row[$startcol + 83] !== null) ? (int) $row[$startcol + 83] : null;
			$this->service_perfdata_command = ($row[$startcol + 84] !== null) ? (int) $row[$startcol + 84] : null;
			$this->host_perfdata_file = ($row[$startcol + 85] !== null) ? (string) $row[$startcol + 85] : null;
			$this->host_perfdata_file_template = ($row[$startcol + 86] !== null) ? (string) $row[$startcol + 86] : null;
			$this->service_perfdata_file = ($row[$startcol + 87] !== null) ? (string) $row[$startcol + 87] : null;
			$this->service_perfdata_file_template = ($row[$startcol + 88] !== null) ? (string) $row[$startcol + 88] : null;
			$this->host_perfdata_file_mode = ($row[$startcol + 89] !== null) ? (string) $row[$startcol + 89] : null;
			$this->service_perfdata_file_mode = ($row[$startcol + 90] !== null) ? (string) $row[$startcol + 90] : null;
			$this->host_perfdata_file_processing_command = ($row[$startcol + 91] !== null) ? (int) $row[$startcol + 91] : null;
			$this->service_perfdata_file_processing_command = ($row[$startcol + 92] !== null) ? (int) $row[$startcol + 92] : null;
			$this->host_perfdata_file_processing_interval = ($row[$startcol + 93] !== null) ? (int) $row[$startcol + 93] : null;
			$this->service_perfdata_file_processing_interval = ($row[$startcol + 94] !== null) ? (int) $row[$startcol + 94] : null;
			$this->object_cache_file = ($row[$startcol + 95] !== null) ? (string) $row[$startcol + 95] : null;
			$this->precached_object_file = ($row[$startcol + 96] !== null) ? (string) $row[$startcol + 96] : null;
			$this->retained_host_attribute_mask = ($row[$startcol + 97] !== null) ? (int) $row[$startcol + 97] : null;
			$this->retained_service_attribute_mask = ($row[$startcol + 98] !== null) ? (int) $row[$startcol + 98] : null;
			$this->retained_process_host_attribute_mask = ($row[$startcol + 99] !== null) ? (int) $row[$startcol + 99] : null;
			$this->retained_process_service_attribute_mask = ($row[$startcol + 100] !== null) ? (int) $row[$startcol + 100] : null;
			$this->retained_contact_host_attribute_mask = ($row[$startcol + 101] !== null) ? (int) $row[$startcol + 101] : null;
			$this->retained_contact_service_attribute_mask = ($row[$startcol + 102] !== null) ? (int) $row[$startcol + 102] : null;
			$this->check_result_reaper_frequency = ($row[$startcol + 103] !== null) ? (int) $row[$startcol + 103] : null;
			$this->max_check_result_reaper_time = ($row[$startcol + 104] !== null) ? (int) $row[$startcol + 104] : null;
			$this->check_result_path = ($row[$startcol + 105] !== null) ? (string) $row[$startcol + 105] : null;
			$this->max_check_result_file_age = ($row[$startcol + 106] !== null) ? (int) $row[$startcol + 106] : null;
			$this->translate_passive_host_checks = ($row[$startcol + 107] !== null) ? (boolean) $row[$startcol + 107] : null;
			$this->passive_host_checks_are_soft = ($row[$startcol + 108] !== null) ? (boolean) $row[$startcol + 108] : null;
			$this->enable_predictive_host_dependency_checks = ($row[$startcol + 109] !== null) ? (boolean) $row[$startcol + 109] : null;
			$this->enable_predictive_service_dependency_checks = ($row[$startcol + 110] !== null) ? (boolean) $row[$startcol + 110] : null;
			$this->cached_host_check_horizon = ($row[$startcol + 111] !== null) ? (int) $row[$startcol + 111] : null;
			$this->cached_service_check_horizon = ($row[$startcol + 112] !== null) ? (int) $row[$startcol + 112] : null;
			$this->use_large_installation_tweaks = ($row[$startcol + 113] !== null) ? (boolean) $row[$startcol + 113] : null;
			$this->free_child_process_memory = ($row[$startcol + 114] !== null) ? (boolean) $row[$startcol + 114] : null;
			$this->child_processes_fork_twice = ($row[$startcol + 115] !== null) ? (boolean) $row[$startcol + 115] : null;
			$this->enable_environment_macros = ($row[$startcol + 116] !== null) ? (boolean) $row[$startcol + 116] : null;
			$this->additional_freshness_latency = ($row[$startcol + 117] !== null) ? (int) $row[$startcol + 117] : null;
			$this->enable_embedded_perl = ($row[$startcol + 118] !== null) ? (boolean) $row[$startcol + 118] : null;
			$this->use_embedded_perl_implicitly = ($row[$startcol + 119] !== null) ? (boolean) $row[$startcol + 119] : null;
			$this->p1_file = ($row[$startcol + 120] !== null) ? (string) $row[$startcol + 120] : null;
			$this->use_timezone = ($row[$startcol + 121] !== null) ? (string) $row[$startcol + 121] : null;
			$this->debug_file = ($row[$startcol + 122] !== null) ? (string) $row[$startcol + 122] : null;
			$this->debug_level = ($row[$startcol + 123] !== null) ? (int) $row[$startcol + 123] : null;
			$this->debug_verbosity = ($row[$startcol + 124] !== null) ? (int) $row[$startcol + 124] : null;
			$this->max_debug_file_size = ($row[$startcol + 125] !== null) ? (int) $row[$startcol + 125] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 126; // 126 = NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosMainConfiguration object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

		if ($this->aNagiosCommandRelatedByGlobalHostEventHandler !== null && $this->global_host_event_handler !== $this->aNagiosCommandRelatedByGlobalHostEventHandler->getId()) {
			$this->aNagiosCommandRelatedByGlobalHostEventHandler = null;
		}
		if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler !== null && $this->global_service_event_handler !== $this->aNagiosCommandRelatedByGlobalServiceEventHandler->getId()) {
			$this->aNagiosCommandRelatedByGlobalServiceEventHandler = null;
		}
		if ($this->aNagiosCommandRelatedByOcspCommand !== null && $this->ocsp_command !== $this->aNagiosCommandRelatedByOcspCommand->getId()) {
			$this->aNagiosCommandRelatedByOcspCommand = null;
		}
		if ($this->aNagiosCommandRelatedByOchpCommand !== null && $this->ochp_command !== $this->aNagiosCommandRelatedByOchpCommand->getId()) {
			$this->aNagiosCommandRelatedByOchpCommand = null;
		}
		if ($this->aNagiosCommandRelatedByHostPerfdataCommand !== null && $this->host_perfdata_command !== $this->aNagiosCommandRelatedByHostPerfdataCommand->getId()) {
			$this->aNagiosCommandRelatedByHostPerfdataCommand = null;
		}
		if ($this->aNagiosCommandRelatedByServicePerfdataCommand !== null && $this->service_perfdata_command !== $this->aNagiosCommandRelatedByServicePerfdataCommand->getId()) {
			$this->aNagiosCommandRelatedByServicePerfdataCommand = null;
		}
		if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand !== null && $this->host_perfdata_file_processing_command !== $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->getId()) {
			$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = null;
		}
		if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand !== null && $this->service_perfdata_file_processing_command !== $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->getId()) {
			$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = null;
		}
	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosMainConfigurationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosCommandRelatedByOcspCommand = null;
			$this->aNagiosCommandRelatedByOchpCommand = null;
			$this->aNagiosCommandRelatedByHostPerfdataCommand = null;
			$this->aNagiosCommandRelatedByServicePerfdataCommand = null;
			$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = null;
			$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = null;
			$this->aNagiosCommandRelatedByGlobalServiceEventHandler = null;
			$this->aNagiosCommandRelatedByGlobalHostEventHandler = null;
		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosMainConfigurationPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosMainConfigurationPeer::addInstanceToPool($this);
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosCommandRelatedByOcspCommand !== null) {
				if ($this->aNagiosCommandRelatedByOcspCommand->isModified() || $this->aNagiosCommandRelatedByOcspCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByOcspCommand->save($con);
				}
				$this->setNagiosCommandRelatedByOcspCommand($this->aNagiosCommandRelatedByOcspCommand);
			}

			if ($this->aNagiosCommandRelatedByOchpCommand !== null) {
				if ($this->aNagiosCommandRelatedByOchpCommand->isModified() || $this->aNagiosCommandRelatedByOchpCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByOchpCommand->save($con);
				}
				$this->setNagiosCommandRelatedByOchpCommand($this->aNagiosCommandRelatedByOchpCommand);
			}

			if ($this->aNagiosCommandRelatedByHostPerfdataCommand !== null) {
				if ($this->aNagiosCommandRelatedByHostPerfdataCommand->isModified() || $this->aNagiosCommandRelatedByHostPerfdataCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByHostPerfdataCommand->save($con);
				}
				$this->setNagiosCommandRelatedByHostPerfdataCommand($this->aNagiosCommandRelatedByHostPerfdataCommand);
			}

			if ($this->aNagiosCommandRelatedByServicePerfdataCommand !== null) {
				if ($this->aNagiosCommandRelatedByServicePerfdataCommand->isModified() || $this->aNagiosCommandRelatedByServicePerfdataCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByServicePerfdataCommand->save($con);
				}
				$this->setNagiosCommandRelatedByServicePerfdataCommand($this->aNagiosCommandRelatedByServicePerfdataCommand);
			}

			if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand !== null) {
				if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->isModified() || $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->save($con);
				}
				$this->setNagiosCommandRelatedByHostPerfdataFileProcessingCommand($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand);
			}

			if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand !== null) {
				if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->isModified() || $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->save($con);
				}
				$this->setNagiosCommandRelatedByServicePerfdataFileProcessingCommand($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand);
			}

			if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler !== null) {
				if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler->isModified() || $this->aNagiosCommandRelatedByGlobalServiceEventHandler->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByGlobalServiceEventHandler->save($con);
				}
				$this->setNagiosCommandRelatedByGlobalServiceEventHandler($this->aNagiosCommandRelatedByGlobalServiceEventHandler);
			}

			if ($this->aNagiosCommandRelatedByGlobalHostEventHandler !== null) {
				if ($this->aNagiosCommandRelatedByGlobalHostEventHandler->isModified() || $this->aNagiosCommandRelatedByGlobalHostEventHandler->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByGlobalHostEventHandler->save($con);
				}
				$this->setNagiosCommandRelatedByGlobalHostEventHandler($this->aNagiosCommandRelatedByGlobalHostEventHandler);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosMainConfigurationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosMainConfigurationPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosMainConfigurationPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosCommandRelatedByOcspCommand !== null) {
				if (!$this->aNagiosCommandRelatedByOcspCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByOcspCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByOchpCommand !== null) {
				if (!$this->aNagiosCommandRelatedByOchpCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByOchpCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByHostPerfdataCommand !== null) {
				if (!$this->aNagiosCommandRelatedByHostPerfdataCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByHostPerfdataCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByServicePerfdataCommand !== null) {
				if (!$this->aNagiosCommandRelatedByServicePerfdataCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByServicePerfdataCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand !== null) {
				if (!$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand !== null) {
				if (!$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler !== null) {
				if (!$this->aNagiosCommandRelatedByGlobalServiceEventHandler->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByGlobalServiceEventHandler->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByGlobalHostEventHandler !== null) {
				if (!$this->aNagiosCommandRelatedByGlobalHostEventHandler->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByGlobalHostEventHandler->getValidationFailures());
				}
			}


			if (($retval = NagiosMainConfigurationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosMainConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getConfigDir();
				break;
			case 2:
				return $this->getLogFile();
				break;
			case 3:
				return $this->getTempFile();
				break;
			case 4:
				return $this->getStatusFile();
				break;
			case 5:
				return $this->getStatusUpdateInterval();
				break;
			case 6:
				return $this->getNagiosUser();
				break;
			case 7:
				return $this->getNagiosGroup();
				break;
			case 8:
				return $this->getEnableNotifications();
				break;
			case 9:
				return $this->getExecuteServiceChecks();
				break;
			case 10:
				return $this->getAcceptPassiveServiceChecks();
				break;
			case 11:
				return $this->getEnableEventHandlers();
				break;
			case 12:
				return $this->getLogRotationMethod();
				break;
			case 13:
				return $this->getLogArchivePath();
				break;
			case 14:
				return $this->getCheckExternalCommands();
				break;
			case 15:
				return $this->getCommandCheckInterval();
				break;
			case 16:
				return $this->getCommandFile();
				break;
			case 17:
				return $this->getLockFile();
				break;
			case 18:
				return $this->getRetainStateInformation();
				break;
			case 19:
				return $this->getStateRetentionFile();
				break;
			case 20:
				return $this->getRetentionUpdateInterval();
				break;
			case 21:
				return $this->getUseRetainedProgramState();
				break;
			case 22:
				return $this->getUseSyslog();
				break;
			case 23:
				return $this->getLogNotifications();
				break;
			case 24:
				return $this->getLogServiceRetries();
				break;
			case 25:
				return $this->getLogHostRetries();
				break;
			case 26:
				return $this->getLogEventHandlers();
				break;
			case 27:
				return $this->getLogInitialStates();
				break;
			case 28:
				return $this->getLogExternalCommands();
				break;
			case 29:
				return $this->getLogPassiveChecks();
				break;
			case 30:
				return $this->getGlobalHostEventHandler();
				break;
			case 31:
				return $this->getGlobalServiceEventHandler();
				break;
			case 32:
				return $this->getExternalCommandBufferSlots();
				break;
			case 33:
				return $this->getSleepTime();
				break;
			case 34:
				return $this->getServiceInterleaveFactor();
				break;
			case 35:
				return $this->getMaxConcurrentChecks();
				break;
			case 36:
				return $this->getServiceReaperFrequency();
				break;
			case 37:
				return $this->getIntervalLength();
				break;
			case 38:
				return $this->getUseAggressiveHostChecking();
				break;
			case 39:
				return $this->getEnableFlapDetection();
				break;
			case 40:
				return $this->getLowServiceFlapThreshold();
				break;
			case 41:
				return $this->getHighServiceFlapThreshold();
				break;
			case 42:
				return $this->getLowHostFlapThreshold();
				break;
			case 43:
				return $this->getHighHostFlapThreshold();
				break;
			case 44:
				return $this->getSoftStateDependencies();
				break;
			case 45:
				return $this->getServiceCheckTimeout();
				break;
			case 46:
				return $this->getHostCheckTimeout();
				break;
			case 47:
				return $this->getEventHandlerTimeout();
				break;
			case 48:
				return $this->getNotificationTimeout();
				break;
			case 49:
				return $this->getOcspTimeout();
				break;
			case 50:
				return $this->getOhcpTimeout();
				break;
			case 51:
				return $this->getPerfdataTimeout();
				break;
			case 52:
				return $this->getObsessOverServices();
				break;
			case 53:
				return $this->getOcspCommand();
				break;
			case 54:
				return $this->getProcessPerformanceData();
				break;
			case 55:
				return $this->getCheckForOrphanedServices();
				break;
			case 56:
				return $this->getCheckServiceFreshness();
				break;
			case 57:
				return $this->getFreshnessCheckInterval();
				break;
			case 58:
				return $this->getDateFormat();
				break;
			case 59:
				return $this->getIllegalObjectNameChars();
				break;
			case 60:
				return $this->getIllegalMacroOutputChars();
				break;
			case 61:
				return $this->getAdminEmail();
				break;
			case 62:
				return $this->getAdminPager();
				break;
			case 63:
				return $this->getExecuteHostChecks();
				break;
			case 64:
				return $this->getServiceInterCheckDelayMethod();
				break;
			case 65:
				return $this->getUseRetainedSchedulingInfo();
				break;
			case 66:
				return $this->getAcceptPassiveHostChecks();
				break;
			case 67:
				return $this->getMaxServiceCheckSpread();
				break;
			case 68:
				return $this->getHostInterCheckDelayMethod();
				break;
			case 69:
				return $this->getMaxHostCheckSpread();
				break;
			case 70:
				return $this->getAutoRescheduleChecks();
				break;
			case 71:
				return $this->getAutoReschedulingInterval();
				break;
			case 72:
				return $this->getAutoReschedulingWindow();
				break;
			case 73:
				return $this->getOchpTimeout();
				break;
			case 74:
				return $this->getObsessOverHosts();
				break;
			case 75:
				return $this->getOchpCommand();
				break;
			case 76:
				return $this->getCheckHostFreshness();
				break;
			case 77:
				return $this->getHostFreshnessCheckInterval();
				break;
			case 78:
				return $this->getServiceFreshnessCheckInterval();
				break;
			case 79:
				return $this->getUseRegexpMatching();
				break;
			case 80:
				return $this->getUseTrueRegexpMatching();
				break;
			case 81:
				return $this->getEventBrokerOptions();
				break;
			case 82:
				return $this->getDaemonDumpsCore();
				break;
			case 83:
				return $this->getHostPerfdataCommand();
				break;
			case 84:
				return $this->getServicePerfdataCommand();
				break;
			case 85:
				return $this->getHostPerfdataFile();
				break;
			case 86:
				return $this->getHostPerfdataFileTemplate();
				break;
			case 87:
				return $this->getServicePerfdataFile();
				break;
			case 88:
				return $this->getServicePerfdataFileTemplate();
				break;
			case 89:
				return $this->getHostPerfdataFileMode();
				break;
			case 90:
				return $this->getServicePerfdataFileMode();
				break;
			case 91:
				return $this->getHostPerfdataFileProcessingCommand();
				break;
			case 92:
				return $this->getServicePerfdataFileProcessingCommand();
				break;
			case 93:
				return $this->getHostPerfdataFileProcessingInterval();
				break;
			case 94:
				return $this->getServicePerfdataFileProcessingInterval();
				break;
			case 95:
				return $this->getObjectCacheFile();
				break;
			case 96:
				return $this->getPrecachedObjectFile();
				break;
			case 97:
				return $this->getRetainedHostAttributeMask();
				break;
			case 98:
				return $this->getRetainedServiceAttributeMask();
				break;
			case 99:
				return $this->getRetainedProcessHostAttributeMask();
				break;
			case 100:
				return $this->getRetainedProcessServiceAttributeMask();
				break;
			case 101:
				return $this->getRetainedContactHostAttributeMask();
				break;
			case 102:
				return $this->getRetainedContactServiceAttributeMask();
				break;
			case 103:
				return $this->getCheckResultReaperFrequency();
				break;
			case 104:
				return $this->getMaxCheckResultReaperTime();
				break;
			case 105:
				return $this->getCheckResultPath();
				break;
			case 106:
				return $this->getMaxCheckResultFileAge();
				break;
			case 107:
				return $this->getTranslatePassiveHostChecks();
				break;
			case 108:
				return $this->getPassiveHostChecksAreSoft();
				break;
			case 109:
				return $this->getEnablePredictiveHostDependencyChecks();
				break;
			case 110:
				return $this->getEnablePredictiveServiceDependencyChecks();
				break;
			case 111:
				return $this->getCachedHostCheckHorizon();
				break;
			case 112:
				return $this->getCachedServiceCheckHorizon();
				break;
			case 113:
				return $this->getUseLargeInstallationTweaks();
				break;
			case 114:
				return $this->getFreeChildProcessMemory();
				break;
			case 115:
				return $this->getChildProcessesForkTwice();
				break;
			case 116:
				return $this->getEnableEnvironmentMacros();
				break;
			case 117:
				return $this->getAdditionalFreshnessLatency();
				break;
			case 118:
				return $this->getEnableEmbeddedPerl();
				break;
			case 119:
				return $this->getUseEmbeddedPerlImplicitly();
				break;
			case 120:
				return $this->getP1File();
				break;
			case 121:
				return $this->getUseTimezone();
				break;
			case 122:
				return $this->getDebugFile();
				break;
			case 123:
				return $this->getDebugLevel();
				break;
			case 124:
				return $this->getDebugVerbosity();
				break;
			case 125:
				return $this->getMaxDebugFileSize();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
		$keys = NagiosMainConfigurationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getConfigDir(),
			$keys[2] => $this->getLogFile(),
			$keys[3] => $this->getTempFile(),
			$keys[4] => $this->getStatusFile(),
			$keys[5] => $this->getStatusUpdateInterval(),
			$keys[6] => $this->getNagiosUser(),
			$keys[7] => $this->getNagiosGroup(),
			$keys[8] => $this->getEnableNotifications(),
			$keys[9] => $this->getExecuteServiceChecks(),
			$keys[10] => $this->getAcceptPassiveServiceChecks(),
			$keys[11] => $this->getEnableEventHandlers(),
			$keys[12] => $this->getLogRotationMethod(),
			$keys[13] => $this->getLogArchivePath(),
			$keys[14] => $this->getCheckExternalCommands(),
			$keys[15] => $this->getCommandCheckInterval(),
			$keys[16] => $this->getCommandFile(),
			$keys[17] => $this->getLockFile(),
			$keys[18] => $this->getRetainStateInformation(),
			$keys[19] => $this->getStateRetentionFile(),
			$keys[20] => $this->getRetentionUpdateInterval(),
			$keys[21] => $this->getUseRetainedProgramState(),
			$keys[22] => $this->getUseSyslog(),
			$keys[23] => $this->getLogNotifications(),
			$keys[24] => $this->getLogServiceRetries(),
			$keys[25] => $this->getLogHostRetries(),
			$keys[26] => $this->getLogEventHandlers(),
			$keys[27] => $this->getLogInitialStates(),
			$keys[28] => $this->getLogExternalCommands(),
			$keys[29] => $this->getLogPassiveChecks(),
			$keys[30] => $this->getGlobalHostEventHandler(),
			$keys[31] => $this->getGlobalServiceEventHandler(),
			$keys[32] => $this->getExternalCommandBufferSlots(),
			$keys[33] => $this->getSleepTime(),
			$keys[34] => $this->getServiceInterleaveFactor(),
			$keys[35] => $this->getMaxConcurrentChecks(),
			$keys[36] => $this->getServiceReaperFrequency(),
			$keys[37] => $this->getIntervalLength(),
			$keys[38] => $this->getUseAggressiveHostChecking(),
			$keys[39] => $this->getEnableFlapDetection(),
			$keys[40] => $this->getLowServiceFlapThreshold(),
			$keys[41] => $this->getHighServiceFlapThreshold(),
			$keys[42] => $this->getLowHostFlapThreshold(),
			$keys[43] => $this->getHighHostFlapThreshold(),
			$keys[44] => $this->getSoftStateDependencies(),
			$keys[45] => $this->getServiceCheckTimeout(),
			$keys[46] => $this->getHostCheckTimeout(),
			$keys[47] => $this->getEventHandlerTimeout(),
			$keys[48] => $this->getNotificationTimeout(),
			$keys[49] => $this->getOcspTimeout(),
			$keys[50] => $this->getOhcpTimeout(),
			$keys[51] => $this->getPerfdataTimeout(),
			$keys[52] => $this->getObsessOverServices(),
			$keys[53] => $this->getOcspCommand(),
			$keys[54] => $this->getProcessPerformanceData(),
			$keys[55] => $this->getCheckForOrphanedServices(),
			$keys[56] => $this->getCheckServiceFreshness(),
			$keys[57] => $this->getFreshnessCheckInterval(),
			$keys[58] => $this->getDateFormat(),
			$keys[59] => $this->getIllegalObjectNameChars(),
			$keys[60] => $this->getIllegalMacroOutputChars(),
			$keys[61] => $this->getAdminEmail(),
			$keys[62] => $this->getAdminPager(),
			$keys[63] => $this->getExecuteHostChecks(),
			$keys[64] => $this->getServiceInterCheckDelayMethod(),
			$keys[65] => $this->getUseRetainedSchedulingInfo(),
			$keys[66] => $this->getAcceptPassiveHostChecks(),
			$keys[67] => $this->getMaxServiceCheckSpread(),
			$keys[68] => $this->getHostInterCheckDelayMethod(),
			$keys[69] => $this->getMaxHostCheckSpread(),
			$keys[70] => $this->getAutoRescheduleChecks(),
			$keys[71] => $this->getAutoReschedulingInterval(),
			$keys[72] => $this->getAutoReschedulingWindow(),
			$keys[73] => $this->getOchpTimeout(),
			$keys[74] => $this->getObsessOverHosts(),
			$keys[75] => $this->getOchpCommand(),
			$keys[76] => $this->getCheckHostFreshness(),
			$keys[77] => $this->getHostFreshnessCheckInterval(),
			$keys[78] => $this->getServiceFreshnessCheckInterval(),
			$keys[79] => $this->getUseRegexpMatching(),
			$keys[80] => $this->getUseTrueRegexpMatching(),
			$keys[81] => $this->getEventBrokerOptions(),
			$keys[82] => $this->getDaemonDumpsCore(),
			$keys[83] => $this->getHostPerfdataCommand(),
			$keys[84] => $this->getServicePerfdataCommand(),
			$keys[85] => $this->getHostPerfdataFile(),
			$keys[86] => $this->getHostPerfdataFileTemplate(),
			$keys[87] => $this->getServicePerfdataFile(),
			$keys[88] => $this->getServicePerfdataFileTemplate(),
			$keys[89] => $this->getHostPerfdataFileMode(),
			$keys[90] => $this->getServicePerfdataFileMode(),
			$keys[91] => $this->getHostPerfdataFileProcessingCommand(),
			$keys[92] => $this->getServicePerfdataFileProcessingCommand(),
			$keys[93] => $this->getHostPerfdataFileProcessingInterval(),
			$keys[94] => $this->getServicePerfdataFileProcessingInterval(),
			$keys[95] => $this->getObjectCacheFile(),
			$keys[96] => $this->getPrecachedObjectFile(),
			$keys[97] => $this->getRetainedHostAttributeMask(),
			$keys[98] => $this->getRetainedServiceAttributeMask(),
			$keys[99] => $this->getRetainedProcessHostAttributeMask(),
			$keys[100] => $this->getRetainedProcessServiceAttributeMask(),
			$keys[101] => $this->getRetainedContactHostAttributeMask(),
			$keys[102] => $this->getRetainedContactServiceAttributeMask(),
			$keys[103] => $this->getCheckResultReaperFrequency(),
			$keys[104] => $this->getMaxCheckResultReaperTime(),
			$keys[105] => $this->getCheckResultPath(),
			$keys[106] => $this->getMaxCheckResultFileAge(),
			$keys[107] => $this->getTranslatePassiveHostChecks(),
			$keys[108] => $this->getPassiveHostChecksAreSoft(),
			$keys[109] => $this->getEnablePredictiveHostDependencyChecks(),
			$keys[110] => $this->getEnablePredictiveServiceDependencyChecks(),
			$keys[111] => $this->getCachedHostCheckHorizon(),
			$keys[112] => $this->getCachedServiceCheckHorizon(),
			$keys[113] => $this->getUseLargeInstallationTweaks(),
			$keys[114] => $this->getFreeChildProcessMemory(),
			$keys[115] => $this->getChildProcessesForkTwice(),
			$keys[116] => $this->getEnableEnvironmentMacros(),
			$keys[117] => $this->getAdditionalFreshnessLatency(),
			$keys[118] => $this->getEnableEmbeddedPerl(),
			$keys[119] => $this->getUseEmbeddedPerlImplicitly(),
			$keys[120] => $this->getP1File(),
			$keys[121] => $this->getUseTimezone(),
			$keys[122] => $this->getDebugFile(),
			$keys[123] => $this->getDebugLevel(),
			$keys[124] => $this->getDebugVerbosity(),
			$keys[125] => $this->getMaxDebugFileSize(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosMainConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setConfigDir($value);
				break;
			case 2:
				$this->setLogFile($value);
				break;
			case 3:
				$this->setTempFile($value);
				break;
			case 4:
				$this->setStatusFile($value);
				break;
			case 5:
				$this->setStatusUpdateInterval($value);
				break;
			case 6:
				$this->setNagiosUser($value);
				break;
			case 7:
				$this->setNagiosGroup($value);
				break;
			case 8:
				$this->setEnableNotifications($value);
				break;
			case 9:
				$this->setExecuteServiceChecks($value);
				break;
			case 10:
				$this->setAcceptPassiveServiceChecks($value);
				break;
			case 11:
				$this->setEnableEventHandlers($value);
				break;
			case 12:
				$this->setLogRotationMethod($value);
				break;
			case 13:
				$this->setLogArchivePath($value);
				break;
			case 14:
				$this->setCheckExternalCommands($value);
				break;
			case 15:
				$this->setCommandCheckInterval($value);
				break;
			case 16:
				$this->setCommandFile($value);
				break;
			case 17:
				$this->setLockFile($value);
				break;
			case 18:
				$this->setRetainStateInformation($value);
				break;
			case 19:
				$this->setStateRetentionFile($value);
				break;
			case 20:
				$this->setRetentionUpdateInterval($value);
				break;
			case 21:
				$this->setUseRetainedProgramState($value);
				break;
			case 22:
				$this->setUseSyslog($value);
				break;
			case 23:
				$this->setLogNotifications($value);
				break;
			case 24:
				$this->setLogServiceRetries($value);
				break;
			case 25:
				$this->setLogHostRetries($value);
				break;
			case 26:
				$this->setLogEventHandlers($value);
				break;
			case 27:
				$this->setLogInitialStates($value);
				break;
			case 28:
				$this->setLogExternalCommands($value);
				break;
			case 29:
				$this->setLogPassiveChecks($value);
				break;
			case 30:
				$this->setGlobalHostEventHandler($value);
				break;
			case 31:
				$this->setGlobalServiceEventHandler($value);
				break;
			case 32:
				$this->setExternalCommandBufferSlots($value);
				break;
			case 33:
				$this->setSleepTime($value);
				break;
			case 34:
				$this->setServiceInterleaveFactor($value);
				break;
			case 35:
				$this->setMaxConcurrentChecks($value);
				break;
			case 36:
				$this->setServiceReaperFrequency($value);
				break;
			case 37:
				$this->setIntervalLength($value);
				break;
			case 38:
				$this->setUseAggressiveHostChecking($value);
				break;
			case 39:
				$this->setEnableFlapDetection($value);
				break;
			case 40:
				$this->setLowServiceFlapThreshold($value);
				break;
			case 41:
				$this->setHighServiceFlapThreshold($value);
				break;
			case 42:
				$this->setLowHostFlapThreshold($value);
				break;
			case 43:
				$this->setHighHostFlapThreshold($value);
				break;
			case 44:
				$this->setSoftStateDependencies($value);
				break;
			case 45:
				$this->setServiceCheckTimeout($value);
				break;
			case 46:
				$this->setHostCheckTimeout($value);
				break;
			case 47:
				$this->setEventHandlerTimeout($value);
				break;
			case 48:
				$this->setNotificationTimeout($value);
				break;
			case 49:
				$this->setOcspTimeout($value);
				break;
			case 50:
				$this->setOhcpTimeout($value);
				break;
			case 51:
				$this->setPerfdataTimeout($value);
				break;
			case 52:
				$this->setObsessOverServices($value);
				break;
			case 53:
				$this->setOcspCommand($value);
				break;
			case 54:
				$this->setProcessPerformanceData($value);
				break;
			case 55:
				$this->setCheckForOrphanedServices($value);
				break;
			case 56:
				$this->setCheckServiceFreshness($value);
				break;
			case 57:
				$this->setFreshnessCheckInterval($value);
				break;
			case 58:
				$this->setDateFormat($value);
				break;
			case 59:
				$this->setIllegalObjectNameChars($value);
				break;
			case 60:
				$this->setIllegalMacroOutputChars($value);
				break;
			case 61:
				$this->setAdminEmail($value);
				break;
			case 62:
				$this->setAdminPager($value);
				break;
			case 63:
				$this->setExecuteHostChecks($value);
				break;
			case 64:
				$this->setServiceInterCheckDelayMethod($value);
				break;
			case 65:
				$this->setUseRetainedSchedulingInfo($value);
				break;
			case 66:
				$this->setAcceptPassiveHostChecks($value);
				break;
			case 67:
				$this->setMaxServiceCheckSpread($value);
				break;
			case 68:
				$this->setHostInterCheckDelayMethod($value);
				break;
			case 69:
				$this->setMaxHostCheckSpread($value);
				break;
			case 70:
				$this->setAutoRescheduleChecks($value);
				break;
			case 71:
				$this->setAutoReschedulingInterval($value);
				break;
			case 72:
				$this->setAutoReschedulingWindow($value);
				break;
			case 73:
				$this->setOchpTimeout($value);
				break;
			case 74:
				$this->setObsessOverHosts($value);
				break;
			case 75:
				$this->setOchpCommand($value);
				break;
			case 76:
				$this->setCheckHostFreshness($value);
				break;
			case 77:
				$this->setHostFreshnessCheckInterval($value);
				break;
			case 78:
				$this->setServiceFreshnessCheckInterval($value);
				break;
			case 79:
				$this->setUseRegexpMatching($value);
				break;
			case 80:
				$this->setUseTrueRegexpMatching($value);
				break;
			case 81:
				$this->setEventBrokerOptions($value);
				break;
			case 82:
				$this->setDaemonDumpsCore($value);
				break;
			case 83:
				$this->setHostPerfdataCommand($value);
				break;
			case 84:
				$this->setServicePerfdataCommand($value);
				break;
			case 85:
				$this->setHostPerfdataFile($value);
				break;
			case 86:
				$this->setHostPerfdataFileTemplate($value);
				break;
			case 87:
				$this->setServicePerfdataFile($value);
				break;
			case 88:
				$this->setServicePerfdataFileTemplate($value);
				break;
			case 89:
				$this->setHostPerfdataFileMode($value);
				break;
			case 90:
				$this->setServicePerfdataFileMode($value);
				break;
			case 91:
				$this->setHostPerfdataFileProcessingCommand($value);
				break;
			case 92:
				$this->setServicePerfdataFileProcessingCommand($value);
				break;
			case 93:
				$this->setHostPerfdataFileProcessingInterval($value);
				break;
			case 94:
				$this->setServicePerfdataFileProcessingInterval($value);
				break;
			case 95:
				$this->setObjectCacheFile($value);
				break;
			case 96:
				$this->setPrecachedObjectFile($value);
				break;
			case 97:
				$this->setRetainedHostAttributeMask($value);
				break;
			case 98:
				$this->setRetainedServiceAttributeMask($value);
				break;
			case 99:
				$this->setRetainedProcessHostAttributeMask($value);
				break;
			case 100:
				$this->setRetainedProcessServiceAttributeMask($value);
				break;
			case 101:
				$this->setRetainedContactHostAttributeMask($value);
				break;
			case 102:
				$this->setRetainedContactServiceAttributeMask($value);
				break;
			case 103:
				$this->setCheckResultReaperFrequency($value);
				break;
			case 104:
				$this->setMaxCheckResultReaperTime($value);
				break;
			case 105:
				$this->setCheckResultPath($value);
				break;
			case 106:
				$this->setMaxCheckResultFileAge($value);
				break;
			case 107:
				$this->setTranslatePassiveHostChecks($value);
				break;
			case 108:
				$this->setPassiveHostChecksAreSoft($value);
				break;
			case 109:
				$this->setEnablePredictiveHostDependencyChecks($value);
				break;
			case 110:
				$this->setEnablePredictiveServiceDependencyChecks($value);
				break;
			case 111:
				$this->setCachedHostCheckHorizon($value);
				break;
			case 112:
				$this->setCachedServiceCheckHorizon($value);
				break;
			case 113:
				$this->setUseLargeInstallationTweaks($value);
				break;
			case 114:
				$this->setFreeChildProcessMemory($value);
				break;
			case 115:
				$this->setChildProcessesForkTwice($value);
				break;
			case 116:
				$this->setEnableEnvironmentMacros($value);
				break;
			case 117:
				$this->setAdditionalFreshnessLatency($value);
				break;
			case 118:
				$this->setEnableEmbeddedPerl($value);
				break;
			case 119:
				$this->setUseEmbeddedPerlImplicitly($value);
				break;
			case 120:
				$this->setP1File($value);
				break;
			case 121:
				$this->setUseTimezone($value);
				break;
			case 122:
				$this->setDebugFile($value);
				break;
			case 123:
				$this->setDebugLevel($value);
				break;
			case 124:
				$this->setDebugVerbosity($value);
				break;
			case 125:
				$this->setMaxDebugFileSize($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NagiosMainConfigurationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setConfigDir($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setLogFile($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setTempFile($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setStatusFile($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setStatusUpdateInterval($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setNagiosUser($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNagiosGroup($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setEnableNotifications($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setExecuteServiceChecks($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAcceptPassiveServiceChecks($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEnableEventHandlers($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLogRotationMethod($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setLogArchivePath($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCheckExternalCommands($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCommandCheckInterval($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setCommandFile($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setLockFile($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setRetainStateInformation($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setStateRetentionFile($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setRetentionUpdateInterval($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setUseRetainedProgramState($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setUseSyslog($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setLogNotifications($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setLogServiceRetries($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setLogHostRetries($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setLogEventHandlers($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setLogInitialStates($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setLogExternalCommands($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setLogPassiveChecks($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setGlobalHostEventHandler($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setGlobalServiceEventHandler($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setExternalCommandBufferSlots($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setSleepTime($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setServiceInterleaveFactor($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setMaxConcurrentChecks($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setServiceReaperFrequency($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setIntervalLength($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setUseAggressiveHostChecking($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setEnableFlapDetection($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setLowServiceFlapThreshold($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setHighServiceFlapThreshold($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setLowHostFlapThreshold($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setHighHostFlapThreshold($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setSoftStateDependencies($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setServiceCheckTimeout($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setHostCheckTimeout($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setEventHandlerTimeout($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setNotificationTimeout($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setOcspTimeout($arr[$keys[49]]);
		if (array_key_exists($keys[50], $arr)) $this->setOhcpTimeout($arr[$keys[50]]);
		if (array_key_exists($keys[51], $arr)) $this->setPerfdataTimeout($arr[$keys[51]]);
		if (array_key_exists($keys[52], $arr)) $this->setObsessOverServices($arr[$keys[52]]);
		if (array_key_exists($keys[53], $arr)) $this->setOcspCommand($arr[$keys[53]]);
		if (array_key_exists($keys[54], $arr)) $this->setProcessPerformanceData($arr[$keys[54]]);
		if (array_key_exists($keys[55], $arr)) $this->setCheckForOrphanedServices($arr[$keys[55]]);
		if (array_key_exists($keys[56], $arr)) $this->setCheckServiceFreshness($arr[$keys[56]]);
		if (array_key_exists($keys[57], $arr)) $this->setFreshnessCheckInterval($arr[$keys[57]]);
		if (array_key_exists($keys[58], $arr)) $this->setDateFormat($arr[$keys[58]]);
		if (array_key_exists($keys[59], $arr)) $this->setIllegalObjectNameChars($arr[$keys[59]]);
		if (array_key_exists($keys[60], $arr)) $this->setIllegalMacroOutputChars($arr[$keys[60]]);
		if (array_key_exists($keys[61], $arr)) $this->setAdminEmail($arr[$keys[61]]);
		if (array_key_exists($keys[62], $arr)) $this->setAdminPager($arr[$keys[62]]);
		if (array_key_exists($keys[63], $arr)) $this->setExecuteHostChecks($arr[$keys[63]]);
		if (array_key_exists($keys[64], $arr)) $this->setServiceInterCheckDelayMethod($arr[$keys[64]]);
		if (array_key_exists($keys[65], $arr)) $this->setUseRetainedSchedulingInfo($arr[$keys[65]]);
		if (array_key_exists($keys[66], $arr)) $this->setAcceptPassiveHostChecks($arr[$keys[66]]);
		if (array_key_exists($keys[67], $arr)) $this->setMaxServiceCheckSpread($arr[$keys[67]]);
		if (array_key_exists($keys[68], $arr)) $this->setHostInterCheckDelayMethod($arr[$keys[68]]);
		if (array_key_exists($keys[69], $arr)) $this->setMaxHostCheckSpread($arr[$keys[69]]);
		if (array_key_exists($keys[70], $arr)) $this->setAutoRescheduleChecks($arr[$keys[70]]);
		if (array_key_exists($keys[71], $arr)) $this->setAutoReschedulingInterval($arr[$keys[71]]);
		if (array_key_exists($keys[72], $arr)) $this->setAutoReschedulingWindow($arr[$keys[72]]);
		if (array_key_exists($keys[73], $arr)) $this->setOchpTimeout($arr[$keys[73]]);
		if (array_key_exists($keys[74], $arr)) $this->setObsessOverHosts($arr[$keys[74]]);
		if (array_key_exists($keys[75], $arr)) $this->setOchpCommand($arr[$keys[75]]);
		if (array_key_exists($keys[76], $arr)) $this->setCheckHostFreshness($arr[$keys[76]]);
		if (array_key_exists($keys[77], $arr)) $this->setHostFreshnessCheckInterval($arr[$keys[77]]);
		if (array_key_exists($keys[78], $arr)) $this->setServiceFreshnessCheckInterval($arr[$keys[78]]);
		if (array_key_exists($keys[79], $arr)) $this->setUseRegexpMatching($arr[$keys[79]]);
		if (array_key_exists($keys[80], $arr)) $this->setUseTrueRegexpMatching($arr[$keys[80]]);
		if (array_key_exists($keys[81], $arr)) $this->setEventBrokerOptions($arr[$keys[81]]);
		if (array_key_exists($keys[82], $arr)) $this->setDaemonDumpsCore($arr[$keys[82]]);
		if (array_key_exists($keys[83], $arr)) $this->setHostPerfdataCommand($arr[$keys[83]]);
		if (array_key_exists($keys[84], $arr)) $this->setServicePerfdataCommand($arr[$keys[84]]);
		if (array_key_exists($keys[85], $arr)) $this->setHostPerfdataFile($arr[$keys[85]]);
		if (array_key_exists($keys[86], $arr)) $this->setHostPerfdataFileTemplate($arr[$keys[86]]);
		if (array_key_exists($keys[87], $arr)) $this->setServicePerfdataFile($arr[$keys[87]]);
		if (array_key_exists($keys[88], $arr)) $this->setServicePerfdataFileTemplate($arr[$keys[88]]);
		if (array_key_exists($keys[89], $arr)) $this->setHostPerfdataFileMode($arr[$keys[89]]);
		if (array_key_exists($keys[90], $arr)) $this->setServicePerfdataFileMode($arr[$keys[90]]);
		if (array_key_exists($keys[91], $arr)) $this->setHostPerfdataFileProcessingCommand($arr[$keys[91]]);
		if (array_key_exists($keys[92], $arr)) $this->setServicePerfdataFileProcessingCommand($arr[$keys[92]]);
		if (array_key_exists($keys[93], $arr)) $this->setHostPerfdataFileProcessingInterval($arr[$keys[93]]);
		if (array_key_exists($keys[94], $arr)) $this->setServicePerfdataFileProcessingInterval($arr[$keys[94]]);
		if (array_key_exists($keys[95], $arr)) $this->setObjectCacheFile($arr[$keys[95]]);
		if (array_key_exists($keys[96], $arr)) $this->setPrecachedObjectFile($arr[$keys[96]]);
		if (array_key_exists($keys[97], $arr)) $this->setRetainedHostAttributeMask($arr[$keys[97]]);
		if (array_key_exists($keys[98], $arr)) $this->setRetainedServiceAttributeMask($arr[$keys[98]]);
		if (array_key_exists($keys[99], $arr)) $this->setRetainedProcessHostAttributeMask($arr[$keys[99]]);
		if (array_key_exists($keys[100], $arr)) $this->setRetainedProcessServiceAttributeMask($arr[$keys[100]]);
		if (array_key_exists($keys[101], $arr)) $this->setRetainedContactHostAttributeMask($arr[$keys[101]]);
		if (array_key_exists($keys[102], $arr)) $this->setRetainedContactServiceAttributeMask($arr[$keys[102]]);
		if (array_key_exists($keys[103], $arr)) $this->setCheckResultReaperFrequency($arr[$keys[103]]);
		if (array_key_exists($keys[104], $arr)) $this->setMaxCheckResultReaperTime($arr[$keys[104]]);
		if (array_key_exists($keys[105], $arr)) $this->setCheckResultPath($arr[$keys[105]]);
		if (array_key_exists($keys[106], $arr)) $this->setMaxCheckResultFileAge($arr[$keys[106]]);
		if (array_key_exists($keys[107], $arr)) $this->setTranslatePassiveHostChecks($arr[$keys[107]]);
		if (array_key_exists($keys[108], $arr)) $this->setPassiveHostChecksAreSoft($arr[$keys[108]]);
		if (array_key_exists($keys[109], $arr)) $this->setEnablePredictiveHostDependencyChecks($arr[$keys[109]]);
		if (array_key_exists($keys[110], $arr)) $this->setEnablePredictiveServiceDependencyChecks($arr[$keys[110]]);
		if (array_key_exists($keys[111], $arr)) $this->setCachedHostCheckHorizon($arr[$keys[111]]);
		if (array_key_exists($keys[112], $arr)) $this->setCachedServiceCheckHorizon($arr[$keys[112]]);
		if (array_key_exists($keys[113], $arr)) $this->setUseLargeInstallationTweaks($arr[$keys[113]]);
		if (array_key_exists($keys[114], $arr)) $this->setFreeChildProcessMemory($arr[$keys[114]]);
		if (array_key_exists($keys[115], $arr)) $this->setChildProcessesForkTwice($arr[$keys[115]]);
		if (array_key_exists($keys[116], $arr)) $this->setEnableEnvironmentMacros($arr[$keys[116]]);
		if (array_key_exists($keys[117], $arr)) $this->setAdditionalFreshnessLatency($arr[$keys[117]]);
		if (array_key_exists($keys[118], $arr)) $this->setEnableEmbeddedPerl($arr[$keys[118]]);
		if (array_key_exists($keys[119], $arr)) $this->setUseEmbeddedPerlImplicitly($arr[$keys[119]]);
		if (array_key_exists($keys[120], $arr)) $this->setP1File($arr[$keys[120]]);
		if (array_key_exists($keys[121], $arr)) $this->setUseTimezone($arr[$keys[121]]);
		if (array_key_exists($keys[122], $arr)) $this->setDebugFile($arr[$keys[122]]);
		if (array_key_exists($keys[123], $arr)) $this->setDebugLevel($arr[$keys[123]]);
		if (array_key_exists($keys[124], $arr)) $this->setDebugVerbosity($arr[$keys[124]]);
		if (array_key_exists($keys[125], $arr)) $this->setMaxDebugFileSize($arr[$keys[125]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosMainConfigurationPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosMainConfigurationPeer::ID)) $criteria->add(NagiosMainConfigurationPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CONFIG_DIR)) $criteria->add(NagiosMainConfigurationPeer::CONFIG_DIR, $this->config_dir);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_FILE)) $criteria->add(NagiosMainConfigurationPeer::LOG_FILE, $this->log_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::TEMP_FILE)) $criteria->add(NagiosMainConfigurationPeer::TEMP_FILE, $this->temp_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::STATUS_FILE)) $criteria->add(NagiosMainConfigurationPeer::STATUS_FILE, $this->status_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL, $this->status_update_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::NAGIOS_USER)) $criteria->add(NagiosMainConfigurationPeer::NAGIOS_USER, $this->nagios_user);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::NAGIOS_GROUP)) $criteria->add(NagiosMainConfigurationPeer::NAGIOS_GROUP, $this->nagios_group);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_NOTIFICATIONS)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_NOTIFICATIONS, $this->enable_notifications);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::EXECUTE_SERVICE_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::EXECUTE_SERVICE_CHECKS, $this->execute_service_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_SERVICE_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_SERVICE_CHECKS, $this->accept_passive_service_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_EVENT_HANDLERS)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_EVENT_HANDLERS, $this->enable_event_handlers);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_ROTATION_METHOD)) $criteria->add(NagiosMainConfigurationPeer::LOG_ROTATION_METHOD, $this->log_rotation_method);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_ARCHIVE_PATH)) $criteria->add(NagiosMainConfigurationPeer::LOG_ARCHIVE_PATH, $this->log_archive_path);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_EXTERNAL_COMMANDS)) $criteria->add(NagiosMainConfigurationPeer::CHECK_EXTERNAL_COMMANDS, $this->check_external_commands);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::COMMAND_CHECK_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::COMMAND_CHECK_INTERVAL, $this->command_check_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::COMMAND_FILE)) $criteria->add(NagiosMainConfigurationPeer::COMMAND_FILE, $this->command_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOCK_FILE)) $criteria->add(NagiosMainConfigurationPeer::LOCK_FILE, $this->lock_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAIN_STATE_INFORMATION)) $criteria->add(NagiosMainConfigurationPeer::RETAIN_STATE_INFORMATION, $this->retain_state_information);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::STATE_RETENTION_FILE)) $criteria->add(NagiosMainConfigurationPeer::STATE_RETENTION_FILE, $this->state_retention_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL, $this->retention_update_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_RETAINED_PROGRAM_STATE)) $criteria->add(NagiosMainConfigurationPeer::USE_RETAINED_PROGRAM_STATE, $this->use_retained_program_state);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_SYSLOG)) $criteria->add(NagiosMainConfigurationPeer::USE_SYSLOG, $this->use_syslog);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_NOTIFICATIONS)) $criteria->add(NagiosMainConfigurationPeer::LOG_NOTIFICATIONS, $this->log_notifications);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_SERVICE_RETRIES)) $criteria->add(NagiosMainConfigurationPeer::LOG_SERVICE_RETRIES, $this->log_service_retries);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_HOST_RETRIES)) $criteria->add(NagiosMainConfigurationPeer::LOG_HOST_RETRIES, $this->log_host_retries);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_EVENT_HANDLERS)) $criteria->add(NagiosMainConfigurationPeer::LOG_EVENT_HANDLERS, $this->log_event_handlers);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_INITIAL_STATES)) $criteria->add(NagiosMainConfigurationPeer::LOG_INITIAL_STATES, $this->log_initial_states);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_EXTERNAL_COMMANDS)) $criteria->add(NagiosMainConfigurationPeer::LOG_EXTERNAL_COMMANDS, $this->log_external_commands);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOG_PASSIVE_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::LOG_PASSIVE_CHECKS, $this->log_passive_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER)) $criteria->add(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER, $this->global_host_event_handler);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER)) $criteria->add(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER, $this->global_service_event_handler);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS)) $criteria->add(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS, $this->external_command_buffer_slots);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SLEEP_TIME)) $criteria->add(NagiosMainConfigurationPeer::SLEEP_TIME, $this->sleep_time);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_INTERLEAVE_FACTOR)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_INTERLEAVE_FACTOR, $this->service_interleave_factor);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS, $this->max_concurrent_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY, $this->service_reaper_frequency);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::INTERVAL_LENGTH)) $criteria->add(NagiosMainConfigurationPeer::INTERVAL_LENGTH, $this->interval_length);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_AGGRESSIVE_HOST_CHECKING)) $criteria->add(NagiosMainConfigurationPeer::USE_AGGRESSIVE_HOST_CHECKING, $this->use_aggressive_host_checking);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_FLAP_DETECTION)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_FLAP_DETECTION, $this->enable_flap_detection);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD)) $criteria->add(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD, $this->low_service_flap_threshold);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD)) $criteria->add(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD, $this->high_service_flap_threshold);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD)) $criteria->add(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD, $this->low_host_flap_threshold);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD)) $criteria->add(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD, $this->high_host_flap_threshold);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SOFT_STATE_DEPENDENCIES)) $criteria->add(NagiosMainConfigurationPeer::SOFT_STATE_DEPENDENCIES, $this->soft_state_dependencies);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT, $this->service_check_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT, $this->host_check_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT, $this->event_handler_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT, $this->notification_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OCSP_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::OCSP_TIMEOUT, $this->ocsp_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OHCP_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::OHCP_TIMEOUT, $this->ohcp_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT, $this->perfdata_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OBSESS_OVER_SERVICES)) $criteria->add(NagiosMainConfigurationPeer::OBSESS_OVER_SERVICES, $this->obsess_over_services);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OCSP_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::OCSP_COMMAND, $this->ocsp_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::PROCESS_PERFORMANCE_DATA)) $criteria->add(NagiosMainConfigurationPeer::PROCESS_PERFORMANCE_DATA, $this->process_performance_data);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_SERVICES)) $criteria->add(NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_SERVICES, $this->check_for_orphaned_services);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_SERVICE_FRESHNESS)) $criteria->add(NagiosMainConfigurationPeer::CHECK_SERVICE_FRESHNESS, $this->check_service_freshness);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL, $this->freshness_check_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::DATE_FORMAT)) $criteria->add(NagiosMainConfigurationPeer::DATE_FORMAT, $this->date_format);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ILLEGAL_OBJECT_NAME_CHARS)) $criteria->add(NagiosMainConfigurationPeer::ILLEGAL_OBJECT_NAME_CHARS, $this->illegal_object_name_chars);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ILLEGAL_MACRO_OUTPUT_CHARS)) $criteria->add(NagiosMainConfigurationPeer::ILLEGAL_MACRO_OUTPUT_CHARS, $this->illegal_macro_output_chars);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ADMIN_EMAIL)) $criteria->add(NagiosMainConfigurationPeer::ADMIN_EMAIL, $this->admin_email);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ADMIN_PAGER)) $criteria->add(NagiosMainConfigurationPeer::ADMIN_PAGER, $this->admin_pager);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::EXECUTE_HOST_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::EXECUTE_HOST_CHECKS, $this->execute_host_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_INTER_CHECK_DELAY_METHOD)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_INTER_CHECK_DELAY_METHOD, $this->service_inter_check_delay_method);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_RETAINED_SCHEDULING_INFO)) $criteria->add(NagiosMainConfigurationPeer::USE_RETAINED_SCHEDULING_INFO, $this->use_retained_scheduling_info);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_HOST_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_HOST_CHECKS, $this->accept_passive_host_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD)) $criteria->add(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD, $this->max_service_check_spread);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_INTER_CHECK_DELAY_METHOD)) $criteria->add(NagiosMainConfigurationPeer::HOST_INTER_CHECK_DELAY_METHOD, $this->host_inter_check_delay_method);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD)) $criteria->add(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD, $this->max_host_check_spread);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::AUTO_RESCHEDULE_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::AUTO_RESCHEDULE_CHECKS, $this->auto_reschedule_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL, $this->auto_rescheduling_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW)) $criteria->add(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW, $this->auto_rescheduling_window);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OCHP_TIMEOUT)) $criteria->add(NagiosMainConfigurationPeer::OCHP_TIMEOUT, $this->ochp_timeout);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OBSESS_OVER_HOSTS)) $criteria->add(NagiosMainConfigurationPeer::OBSESS_OVER_HOSTS, $this->obsess_over_hosts);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OCHP_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::OCHP_COMMAND, $this->ochp_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_HOST_FRESHNESS)) $criteria->add(NagiosMainConfigurationPeer::CHECK_HOST_FRESHNESS, $this->check_host_freshness);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL, $this->host_freshness_check_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL, $this->service_freshness_check_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_REGEXP_MATCHING)) $criteria->add(NagiosMainConfigurationPeer::USE_REGEXP_MATCHING, $this->use_regexp_matching);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_TRUE_REGEXP_MATCHING)) $criteria->add(NagiosMainConfigurationPeer::USE_TRUE_REGEXP_MATCHING, $this->use_true_regexp_matching);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::EVENT_BROKER_OPTIONS)) $criteria->add(NagiosMainConfigurationPeer::EVENT_BROKER_OPTIONS, $this->event_broker_options);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::DAEMON_DUMPS_CORE)) $criteria->add(NagiosMainConfigurationPeer::DAEMON_DUMPS_CORE, $this->daemon_dumps_core);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND, $this->host_perfdata_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND, $this->service_perfdata_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE, $this->host_perfdata_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_TEMPLATE)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_TEMPLATE, $this->host_perfdata_file_template);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE, $this->service_perfdata_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_TEMPLATE)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_TEMPLATE, $this->service_perfdata_file_template);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_MODE)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_MODE, $this->host_perfdata_file_mode);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_MODE)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_MODE, $this->service_perfdata_file_mode);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND, $this->host_perfdata_file_processing_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, $this->service_perfdata_file_processing_command);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL, $this->host_perfdata_file_processing_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL)) $criteria->add(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL, $this->service_perfdata_file_processing_interval);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::OBJECT_CACHE_FILE)) $criteria->add(NagiosMainConfigurationPeer::OBJECT_CACHE_FILE, $this->object_cache_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::PRECACHED_OBJECT_FILE)) $criteria->add(NagiosMainConfigurationPeer::PRECACHED_OBJECT_FILE, $this->precached_object_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK, $this->retained_host_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK, $this->retained_service_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK, $this->retained_process_host_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK, $this->retained_process_service_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK, $this->retained_contact_host_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK)) $criteria->add(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK, $this->retained_contact_service_attribute_mask);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY)) $criteria->add(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY, $this->check_result_reaper_frequency);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME)) $criteria->add(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME, $this->max_check_result_reaper_time);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHECK_RESULT_PATH)) $criteria->add(NagiosMainConfigurationPeer::CHECK_RESULT_PATH, $this->check_result_path);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE)) $criteria->add(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE, $this->max_check_result_file_age);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::TRANSLATE_PASSIVE_HOST_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::TRANSLATE_PASSIVE_HOST_CHECKS, $this->translate_passive_host_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::PASSIVE_HOST_CHECKS_ARE_SOFT)) $criteria->add(NagiosMainConfigurationPeer::PASSIVE_HOST_CHECKS_ARE_SOFT, $this->passive_host_checks_are_soft);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS, $this->enable_predictive_host_dependency_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS, $this->enable_predictive_service_dependency_checks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON)) $criteria->add(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON, $this->cached_host_check_horizon);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON)) $criteria->add(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON, $this->cached_service_check_horizon);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_LARGE_INSTALLATION_TWEAKS)) $criteria->add(NagiosMainConfigurationPeer::USE_LARGE_INSTALLATION_TWEAKS, $this->use_large_installation_tweaks);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::FREE_CHILD_PROCESS_MEMORY)) $criteria->add(NagiosMainConfigurationPeer::FREE_CHILD_PROCESS_MEMORY, $this->free_child_process_memory);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::CHILD_PROCESSES_FORK_TWICE)) $criteria->add(NagiosMainConfigurationPeer::CHILD_PROCESSES_FORK_TWICE, $this->child_processes_fork_twice);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_ENVIRONMENT_MACROS)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_ENVIRONMENT_MACROS, $this->enable_environment_macros);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY)) $criteria->add(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY, $this->additional_freshness_latency);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::ENABLE_EMBEDDED_PERL)) $criteria->add(NagiosMainConfigurationPeer::ENABLE_EMBEDDED_PERL, $this->enable_embedded_perl);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_EMBEDDED_PERL_IMPLICITLY)) $criteria->add(NagiosMainConfigurationPeer::USE_EMBEDDED_PERL_IMPLICITLY, $this->use_embedded_perl_implicitly);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::P1_FILE)) $criteria->add(NagiosMainConfigurationPeer::P1_FILE, $this->p1_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::USE_TIMEZONE)) $criteria->add(NagiosMainConfigurationPeer::USE_TIMEZONE, $this->use_timezone);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::DEBUG_FILE)) $criteria->add(NagiosMainConfigurationPeer::DEBUG_FILE, $this->debug_file);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::DEBUG_LEVEL)) $criteria->add(NagiosMainConfigurationPeer::DEBUG_LEVEL, $this->debug_level);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::DEBUG_VERBOSITY)) $criteria->add(NagiosMainConfigurationPeer::DEBUG_VERBOSITY, $this->debug_verbosity);
		if ($this->isColumnModified(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE)) $criteria->add(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE, $this->max_debug_file_size);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NagiosMainConfigurationPeer::DATABASE_NAME);

		$criteria->add(NagiosMainConfigurationPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosMainConfiguration (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setConfigDir($this->config_dir);

		$copyObj->setLogFile($this->log_file);

		$copyObj->setTempFile($this->temp_file);

		$copyObj->setStatusFile($this->status_file);

		$copyObj->setStatusUpdateInterval($this->status_update_interval);

		$copyObj->setNagiosUser($this->nagios_user);

		$copyObj->setNagiosGroup($this->nagios_group);

		$copyObj->setEnableNotifications($this->enable_notifications);

		$copyObj->setExecuteServiceChecks($this->execute_service_checks);

		$copyObj->setAcceptPassiveServiceChecks($this->accept_passive_service_checks);

		$copyObj->setEnableEventHandlers($this->enable_event_handlers);

		$copyObj->setLogRotationMethod($this->log_rotation_method);

		$copyObj->setLogArchivePath($this->log_archive_path);

		$copyObj->setCheckExternalCommands($this->check_external_commands);

		$copyObj->setCommandCheckInterval($this->command_check_interval);

		$copyObj->setCommandFile($this->command_file);

		$copyObj->setLockFile($this->lock_file);

		$copyObj->setRetainStateInformation($this->retain_state_information);

		$copyObj->setStateRetentionFile($this->state_retention_file);

		$copyObj->setRetentionUpdateInterval($this->retention_update_interval);

		$copyObj->setUseRetainedProgramState($this->use_retained_program_state);

		$copyObj->setUseSyslog($this->use_syslog);

		$copyObj->setLogNotifications($this->log_notifications);

		$copyObj->setLogServiceRetries($this->log_service_retries);

		$copyObj->setLogHostRetries($this->log_host_retries);

		$copyObj->setLogEventHandlers($this->log_event_handlers);

		$copyObj->setLogInitialStates($this->log_initial_states);

		$copyObj->setLogExternalCommands($this->log_external_commands);

		$copyObj->setLogPassiveChecks($this->log_passive_checks);

		$copyObj->setGlobalHostEventHandler($this->global_host_event_handler);

		$copyObj->setGlobalServiceEventHandler($this->global_service_event_handler);

		$copyObj->setExternalCommandBufferSlots($this->external_command_buffer_slots);

		$copyObj->setSleepTime($this->sleep_time);

		$copyObj->setServiceInterleaveFactor($this->service_interleave_factor);

		$copyObj->setMaxConcurrentChecks($this->max_concurrent_checks);

		$copyObj->setServiceReaperFrequency($this->service_reaper_frequency);

		$copyObj->setIntervalLength($this->interval_length);

		$copyObj->setUseAggressiveHostChecking($this->use_aggressive_host_checking);

		$copyObj->setEnableFlapDetection($this->enable_flap_detection);

		$copyObj->setLowServiceFlapThreshold($this->low_service_flap_threshold);

		$copyObj->setHighServiceFlapThreshold($this->high_service_flap_threshold);

		$copyObj->setLowHostFlapThreshold($this->low_host_flap_threshold);

		$copyObj->setHighHostFlapThreshold($this->high_host_flap_threshold);

		$copyObj->setSoftStateDependencies($this->soft_state_dependencies);

		$copyObj->setServiceCheckTimeout($this->service_check_timeout);

		$copyObj->setHostCheckTimeout($this->host_check_timeout);

		$copyObj->setEventHandlerTimeout($this->event_handler_timeout);

		$copyObj->setNotificationTimeout($this->notification_timeout);

		$copyObj->setOcspTimeout($this->ocsp_timeout);

		$copyObj->setOhcpTimeout($this->ohcp_timeout);

		$copyObj->setPerfdataTimeout($this->perfdata_timeout);

		$copyObj->setObsessOverServices($this->obsess_over_services);

		$copyObj->setOcspCommand($this->ocsp_command);

		$copyObj->setProcessPerformanceData($this->process_performance_data);

		$copyObj->setCheckForOrphanedServices($this->check_for_orphaned_services);

		$copyObj->setCheckServiceFreshness($this->check_service_freshness);

		$copyObj->setFreshnessCheckInterval($this->freshness_check_interval);

		$copyObj->setDateFormat($this->date_format);

		$copyObj->setIllegalObjectNameChars($this->illegal_object_name_chars);

		$copyObj->setIllegalMacroOutputChars($this->illegal_macro_output_chars);

		$copyObj->setAdminEmail($this->admin_email);

		$copyObj->setAdminPager($this->admin_pager);

		$copyObj->setExecuteHostChecks($this->execute_host_checks);

		$copyObj->setServiceInterCheckDelayMethod($this->service_inter_check_delay_method);

		$copyObj->setUseRetainedSchedulingInfo($this->use_retained_scheduling_info);

		$copyObj->setAcceptPassiveHostChecks($this->accept_passive_host_checks);

		$copyObj->setMaxServiceCheckSpread($this->max_service_check_spread);

		$copyObj->setHostInterCheckDelayMethod($this->host_inter_check_delay_method);

		$copyObj->setMaxHostCheckSpread($this->max_host_check_spread);

		$copyObj->setAutoRescheduleChecks($this->auto_reschedule_checks);

		$copyObj->setAutoReschedulingInterval($this->auto_rescheduling_interval);

		$copyObj->setAutoReschedulingWindow($this->auto_rescheduling_window);

		$copyObj->setOchpTimeout($this->ochp_timeout);

		$copyObj->setObsessOverHosts($this->obsess_over_hosts);

		$copyObj->setOchpCommand($this->ochp_command);

		$copyObj->setCheckHostFreshness($this->check_host_freshness);

		$copyObj->setHostFreshnessCheckInterval($this->host_freshness_check_interval);

		$copyObj->setServiceFreshnessCheckInterval($this->service_freshness_check_interval);

		$copyObj->setUseRegexpMatching($this->use_regexp_matching);

		$copyObj->setUseTrueRegexpMatching($this->use_true_regexp_matching);

		$copyObj->setEventBrokerOptions($this->event_broker_options);

		$copyObj->setDaemonDumpsCore($this->daemon_dumps_core);

		$copyObj->setHostPerfdataCommand($this->host_perfdata_command);

		$copyObj->setServicePerfdataCommand($this->service_perfdata_command);

		$copyObj->setHostPerfdataFile($this->host_perfdata_file);

		$copyObj->setHostPerfdataFileTemplate($this->host_perfdata_file_template);

		$copyObj->setServicePerfdataFile($this->service_perfdata_file);

		$copyObj->setServicePerfdataFileTemplate($this->service_perfdata_file_template);

		$copyObj->setHostPerfdataFileMode($this->host_perfdata_file_mode);

		$copyObj->setServicePerfdataFileMode($this->service_perfdata_file_mode);

		$copyObj->setHostPerfdataFileProcessingCommand($this->host_perfdata_file_processing_command);

		$copyObj->setServicePerfdataFileProcessingCommand($this->service_perfdata_file_processing_command);

		$copyObj->setHostPerfdataFileProcessingInterval($this->host_perfdata_file_processing_interval);

		$copyObj->setServicePerfdataFileProcessingInterval($this->service_perfdata_file_processing_interval);

		$copyObj->setObjectCacheFile($this->object_cache_file);

		$copyObj->setPrecachedObjectFile($this->precached_object_file);

		$copyObj->setRetainedHostAttributeMask($this->retained_host_attribute_mask);

		$copyObj->setRetainedServiceAttributeMask($this->retained_service_attribute_mask);

		$copyObj->setRetainedProcessHostAttributeMask($this->retained_process_host_attribute_mask);

		$copyObj->setRetainedProcessServiceAttributeMask($this->retained_process_service_attribute_mask);

		$copyObj->setRetainedContactHostAttributeMask($this->retained_contact_host_attribute_mask);

		$copyObj->setRetainedContactServiceAttributeMask($this->retained_contact_service_attribute_mask);

		$copyObj->setCheckResultReaperFrequency($this->check_result_reaper_frequency);

		$copyObj->setMaxCheckResultReaperTime($this->max_check_result_reaper_time);

		$copyObj->setCheckResultPath($this->check_result_path);

		$copyObj->setMaxCheckResultFileAge($this->max_check_result_file_age);

		$copyObj->setTranslatePassiveHostChecks($this->translate_passive_host_checks);

		$copyObj->setPassiveHostChecksAreSoft($this->passive_host_checks_are_soft);

		$copyObj->setEnablePredictiveHostDependencyChecks($this->enable_predictive_host_dependency_checks);

		$copyObj->setEnablePredictiveServiceDependencyChecks($this->enable_predictive_service_dependency_checks);

		$copyObj->setCachedHostCheckHorizon($this->cached_host_check_horizon);

		$copyObj->setCachedServiceCheckHorizon($this->cached_service_check_horizon);

		$copyObj->setUseLargeInstallationTweaks($this->use_large_installation_tweaks);

		$copyObj->setFreeChildProcessMemory($this->free_child_process_memory);

		$copyObj->setChildProcessesForkTwice($this->child_processes_fork_twice);

		$copyObj->setEnableEnvironmentMacros($this->enable_environment_macros);

		$copyObj->setAdditionalFreshnessLatency($this->additional_freshness_latency);

		$copyObj->setEnableEmbeddedPerl($this->enable_embedded_perl);

		$copyObj->setUseEmbeddedPerlImplicitly($this->use_embedded_perl_implicitly);

		$copyObj->setP1File($this->p1_file);

		$copyObj->setUseTimezone($this->use_timezone);

		$copyObj->setDebugFile($this->debug_file);

		$copyObj->setDebugLevel($this->debug_level);

		$copyObj->setDebugVerbosity($this->debug_verbosity);

		$copyObj->setMaxDebugFileSize($this->max_debug_file_size);


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     NagiosMainConfiguration Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NagiosMainConfigurationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosMainConfigurationPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByOcspCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setOcspCommand(NULL);
		} else {
			$this->setOcspCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByOcspCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByOcspCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByOcspCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByOcspCommand === null && ($this->ocsp_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->ocsp_command);
			$this->aNagiosCommandRelatedByOcspCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByOcspCommand->addNagiosMainConfigurationsRelatedByOcspCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByOcspCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByOchpCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setOchpCommand(NULL);
		} else {
			$this->setOchpCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByOchpCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByOchpCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByOchpCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByOchpCommand === null && ($this->ochp_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->ochp_command);
			$this->aNagiosCommandRelatedByOchpCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByOchpCommand->addNagiosMainConfigurationsRelatedByOchpCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByOchpCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByHostPerfdataCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setHostPerfdataCommand(NULL);
		} else {
			$this->setHostPerfdataCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByHostPerfdataCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByHostPerfdataCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByHostPerfdataCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByHostPerfdataCommand === null && ($this->host_perfdata_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->host_perfdata_command);
			$this->aNagiosCommandRelatedByHostPerfdataCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByHostPerfdataCommand->addNagiosMainConfigurationsRelatedByHostPerfdataCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByHostPerfdataCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByServicePerfdataCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setServicePerfdataCommand(NULL);
		} else {
			$this->setServicePerfdataCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByServicePerfdataCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByServicePerfdataCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByServicePerfdataCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByServicePerfdataCommand === null && ($this->service_perfdata_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->service_perfdata_command);
			$this->aNagiosCommandRelatedByServicePerfdataCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByServicePerfdataCommand->addNagiosMainConfigurationsRelatedByServicePerfdataCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByServicePerfdataCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByHostPerfdataFileProcessingCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setHostPerfdataFileProcessingCommand(NULL);
		} else {
			$this->setHostPerfdataFileProcessingCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByHostPerfdataFileProcessingCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand === null && ($this->host_perfdata_file_processing_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->host_perfdata_file_processing_command);
			$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand->addNagiosMainConfigurationsRelatedByHostPerfdataFileProcessingCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByServicePerfdataFileProcessingCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setServicePerfdataFileProcessingCommand(NULL);
		} else {
			$this->setServicePerfdataFileProcessingCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByServicePerfdataFileProcessingCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand === null && ($this->service_perfdata_file_processing_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->service_perfdata_file_processing_command);
			$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand->addNagiosMainConfigurationsRelatedByServicePerfdataFileProcessingCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByGlobalServiceEventHandler(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setGlobalServiceEventHandler(NULL);
		} else {
			$this->setGlobalServiceEventHandler($v->getId());
		}

		$this->aNagiosCommandRelatedByGlobalServiceEventHandler = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByGlobalServiceEventHandler($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByGlobalServiceEventHandler(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByGlobalServiceEventHandler === null && ($this->global_service_event_handler !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->global_service_event_handler);
			$this->aNagiosCommandRelatedByGlobalServiceEventHandler = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByGlobalServiceEventHandler->addNagiosMainConfigurationsRelatedByGlobalServiceEventHandler($this);
			 */
		}
		return $this->aNagiosCommandRelatedByGlobalServiceEventHandler;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosMainConfiguration The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByGlobalHostEventHandler(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setGlobalHostEventHandler(NULL);
		} else {
			$this->setGlobalHostEventHandler($v->getId());
		}

		$this->aNagiosCommandRelatedByGlobalHostEventHandler = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosMainConfigurationRelatedByGlobalHostEventHandler($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByGlobalHostEventHandler(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByGlobalHostEventHandler === null && ($this->global_host_event_handler !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->global_host_event_handler);
			$this->aNagiosCommandRelatedByGlobalHostEventHandler = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByGlobalHostEventHandler->addNagiosMainConfigurationsRelatedByGlobalHostEventHandler($this);
			 */
		}
		return $this->aNagiosCommandRelatedByGlobalHostEventHandler;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

			$this->aNagiosCommandRelatedByOcspCommand = null;
			$this->aNagiosCommandRelatedByOchpCommand = null;
			$this->aNagiosCommandRelatedByHostPerfdataCommand = null;
			$this->aNagiosCommandRelatedByServicePerfdataCommand = null;
			$this->aNagiosCommandRelatedByHostPerfdataFileProcessingCommand = null;
			$this->aNagiosCommandRelatedByServicePerfdataFileProcessingCommand = null;
			$this->aNagiosCommandRelatedByGlobalServiceEventHandler = null;
			$this->aNagiosCommandRelatedByGlobalHostEventHandler = null;
	}

} // BaseNagiosMainConfiguration
