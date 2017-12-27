<?php



/**
 * This class defines the structure of the 'nagios_main_configuration' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class NagiosMainConfigurationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosMainConfigurationTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('nagios_main_configuration');
		$this->setPhpName('NagiosMainConfiguration');
		$this->setClassname('NagiosMainConfiguration');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('CONFIG_DIR', 'ConfigDir', 'VARCHAR', false, 255, null);
		$this->addColumn('LOG_FILE', 'LogFile', 'VARCHAR', false, 255, null);
		$this->addColumn('TEMP_FILE', 'TempFile', 'VARCHAR', false, 255, null);
		$this->addColumn('STATUS_FILE', 'StatusFile', 'VARCHAR', false, 255, null);
		$this->addColumn('STATUS_UPDATE_INTERVAL', 'StatusUpdateInterval', 'INTEGER', false, null, null);
		$this->addColumn('NAGIOS_USER', 'NagiosUser', 'VARCHAR', false, 255, null);
		$this->addColumn('NAGIOS_GROUP', 'NagiosGroup', 'VARCHAR', false, 255, null);
		$this->addColumn('ENABLE_NOTIFICATIONS', 'EnableNotifications', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTE_SERVICE_CHECKS', 'ExecuteServiceChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('ACCEPT_PASSIVE_SERVICE_CHECKS', 'AcceptPassiveServiceChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('ENABLE_EVENT_HANDLERS', 'EnableEventHandlers', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_ROTATION_METHOD', 'LogRotationMethod', 'CHAR', false, null, null);
		$this->addColumn('LOG_ARCHIVE_PATH', 'LogArchivePath', 'VARCHAR', false, 255, null);
		$this->addColumn('CHECK_EXTERNAL_COMMANDS', 'CheckExternalCommands', 'BOOLEAN', false, null, null);
		$this->addColumn('COMMAND_CHECK_INTERVAL', 'CommandCheckInterval', 'VARCHAR', false, 255, null);
		$this->addColumn('COMMAND_FILE', 'CommandFile', 'VARCHAR', false, 255, null);
		$this->addColumn('LOCK_FILE', 'LockFile', 'VARCHAR', false, 255, null);
		$this->addColumn('RETAIN_STATE_INFORMATION', 'RetainStateInformation', 'BOOLEAN', false, null, null);
		$this->addColumn('STATE_RETENTION_FILE', 'StateRetentionFile', 'VARCHAR', false, 255, null);
		$this->addColumn('RETENTION_UPDATE_INTERVAL', 'RetentionUpdateInterval', 'INTEGER', false, null, null);
		$this->addColumn('USE_RETAINED_PROGRAM_STATE', 'UseRetainedProgramState', 'BOOLEAN', false, null, null);
		$this->addColumn('USE_SYSLOG', 'UseSyslog', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_NOTIFICATIONS', 'LogNotifications', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_SERVICE_RETRIES', 'LogServiceRetries', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_HOST_RETRIES', 'LogHostRetries', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_EVENT_HANDLERS', 'LogEventHandlers', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_INITIAL_STATES', 'LogInitialStates', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_EXTERNAL_COMMANDS', 'LogExternalCommands', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_PASSIVE_CHECKS', 'LogPassiveChecks', 'BOOLEAN', false, null, null);
		$this->addForeignKey('GLOBAL_HOST_EVENT_HANDLER', 'GlobalHostEventHandler', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addForeignKey('GLOBAL_SERVICE_EVENT_HANDLER', 'GlobalServiceEventHandler', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('EXTERNAL_COMMAND_BUFFER_SLOTS', 'ExternalCommandBufferSlots', 'INTEGER', false, null, null);
		$this->addColumn('SLEEP_TIME', 'SleepTime', 'FLOAT', false, null, null);
		$this->addColumn('SERVICE_INTERLEAVE_FACTOR', 'ServiceInterleaveFactor', 'CHAR', false, null, null);
		$this->addColumn('MAX_CONCURRENT_CHECKS', 'MaxConcurrentChecks', 'INTEGER', false, null, null);
		$this->addColumn('SERVICE_REAPER_FREQUENCY', 'ServiceReaperFrequency', 'INTEGER', false, null, null);
		$this->addColumn('INTERVAL_LENGTH', 'IntervalLength', 'INTEGER', false, null, null);
		$this->addColumn('USE_AGGRESSIVE_HOST_CHECKING', 'UseAggressiveHostChecking', 'BOOLEAN', false, null, null);
		$this->addColumn('ENABLE_FLAP_DETECTION', 'EnableFlapDetection', 'BOOLEAN', false, null, null);
		$this->addColumn('LOW_SERVICE_FLAP_THRESHOLD', 'LowServiceFlapThreshold', 'FLOAT', false, null, null);
		$this->addColumn('HIGH_SERVICE_FLAP_THRESHOLD', 'HighServiceFlapThreshold', 'FLOAT', false, null, null);
		$this->addColumn('LOW_HOST_FLAP_THRESHOLD', 'LowHostFlapThreshold', 'FLOAT', false, null, null);
		$this->addColumn('HIGH_HOST_FLAP_THRESHOLD', 'HighHostFlapThreshold', 'FLOAT', false, null, null);
		$this->addColumn('SOFT_STATE_DEPENDENCIES', 'SoftStateDependencies', 'BOOLEAN', false, null, null);
		$this->addColumn('SERVICE_CHECK_TIMEOUT', 'ServiceCheckTimeout', 'INTEGER', false, null, null);
		$this->addColumn('HOST_CHECK_TIMEOUT', 'HostCheckTimeout', 'INTEGER', false, null, null);
		$this->addColumn('EVENT_HANDLER_TIMEOUT', 'EventHandlerTimeout', 'INTEGER', false, null, null);
		$this->addColumn('NOTIFICATION_TIMEOUT', 'NotificationTimeout', 'INTEGER', false, null, null);
		$this->addColumn('OCSP_TIMEOUT', 'OcspTimeout', 'INTEGER', false, null, null);
		$this->addColumn('OHCP_TIMEOUT', 'OhcpTimeout', 'INTEGER', false, null, null);
		$this->addColumn('PERFDATA_TIMEOUT', 'PerfdataTimeout', 'INTEGER', false, null, null);
		$this->addColumn('OBSESS_OVER_SERVICES', 'ObsessOverServices', 'BOOLEAN', false, null, null);
		$this->addForeignKey('OCSP_COMMAND', 'OcspCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('PROCESS_PERFORMANCE_DATA', 'ProcessPerformanceData', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECK_FOR_ORPHANED_SERVICES', 'CheckForOrphanedServices', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECK_SERVICE_FRESHNESS', 'CheckServiceFreshness', 'BOOLEAN', false, null, null);
		$this->addColumn('FRESHNESS_CHECK_INTERVAL', 'FreshnessCheckInterval', 'INTEGER', false, null, null);
		$this->addColumn('DATE_FORMAT', 'DateFormat', 'VARCHAR', false, 255, null);
		$this->addColumn('ILLEGAL_OBJECT_NAME_CHARS', 'IllegalObjectNameChars', 'VARCHAR', false, 255, null);
		$this->addColumn('ILLEGAL_MACRO_OUTPUT_CHARS', 'IllegalMacroOutputChars', 'VARCHAR', false, 255, null);
		$this->addColumn('ADMIN_EMAIL', 'AdminEmail', 'VARCHAR', false, 255, null);
		$this->addColumn('ADMIN_PAGER', 'AdminPager', 'VARCHAR', false, 255, null);
		$this->addColumn('EXECUTE_HOST_CHECKS', 'ExecuteHostChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('SERVICE_INTER_CHECK_DELAY_METHOD', 'ServiceInterCheckDelayMethod', 'VARCHAR', false, 255, null);
		$this->addColumn('USE_RETAINED_SCHEDULING_INFO', 'UseRetainedSchedulingInfo', 'BOOLEAN', false, null, null);
		$this->addColumn('ACCEPT_PASSIVE_HOST_CHECKS', 'AcceptPassiveHostChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('MAX_SERVICE_CHECK_SPREAD', 'MaxServiceCheckSpread', 'INTEGER', false, null, null);
		$this->addColumn('HOST_INTER_CHECK_DELAY_METHOD', 'HostInterCheckDelayMethod', 'VARCHAR', false, 255, null);
		$this->addColumn('MAX_HOST_CHECK_SPREAD', 'MaxHostCheckSpread', 'INTEGER', false, null, null);
		$this->addColumn('AUTO_RESCHEDULE_CHECKS', 'AutoRescheduleChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('AUTO_RESCHEDULING_INTERVAL', 'AutoReschedulingInterval', 'INTEGER', false, null, null);
		$this->addColumn('AUTO_RESCHEDULING_WINDOW', 'AutoReschedulingWindow', 'INTEGER', false, null, null);
		$this->addColumn('OCHP_TIMEOUT', 'OchpTimeout', 'INTEGER', false, null, null);
		$this->addColumn('OBSESS_OVER_HOSTS', 'ObsessOverHosts', 'BOOLEAN', false, null, null);
		$this->addForeignKey('OCHP_COMMAND', 'OchpCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('CHECK_HOST_FRESHNESS', 'CheckHostFreshness', 'BOOLEAN', false, null, null);
		$this->addColumn('HOST_FRESHNESS_CHECK_INTERVAL', 'HostFreshnessCheckInterval', 'INTEGER', false, null, null);
		$this->addColumn('SERVICE_FRESHNESS_CHECK_INTERVAL', 'ServiceFreshnessCheckInterval', 'INTEGER', false, null, null);
		$this->addColumn('USE_REGEXP_MATCHING', 'UseRegexpMatching', 'BOOLEAN', false, null, null);
		$this->addColumn('USE_TRUE_REGEXP_MATCHING', 'UseTrueRegexpMatching', 'BOOLEAN', false, null, null);
		$this->addColumn('EVENT_BROKER_OPTIONS', 'EventBrokerOptions', 'VARCHAR', false, 255, null);
		$this->addColumn('DAEMON_DUMPS_CORE', 'DaemonDumpsCore', 'BOOLEAN', false, null, null);
		$this->addForeignKey('HOST_PERFDATA_COMMAND', 'HostPerfdataCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_PERFDATA_COMMAND', 'ServicePerfdataCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('HOST_PERFDATA_FILE', 'HostPerfdataFile', 'VARCHAR', false, 255, null);
		$this->addColumn('HOST_PERFDATA_FILE_TEMPLATE', 'HostPerfdataFileTemplate', 'VARCHAR', false, 255, null);
		$this->addColumn('SERVICE_PERFDATA_FILE', 'ServicePerfdataFile', 'VARCHAR', false, 255, null);
		$this->addColumn('SERVICE_PERFDATA_FILE_TEMPLATE', 'ServicePerfdataFileTemplate', 'VARCHAR', false, 255, null);
		$this->addColumn('HOST_PERFDATA_FILE_MODE', 'HostPerfdataFileMode', 'CHAR', false, null, null);
		$this->addColumn('SERVICE_PERFDATA_FILE_MODE', 'ServicePerfdataFileMode', 'CHAR', false, null, null);
		$this->addForeignKey('HOST_PERFDATA_FILE_PROCESSING_COMMAND', 'HostPerfdataFileProcessingCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_PERFDATA_FILE_PROCESSING_COMMAND', 'ServicePerfdataFileProcessingCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('HOST_PERFDATA_FILE_PROCESSING_INTERVAL', 'HostPerfdataFileProcessingInterval', 'INTEGER', false, null, null);
		$this->addColumn('SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL', 'ServicePerfdataFileProcessingInterval', 'INTEGER', false, null, null);
		$this->addColumn('OBJECT_CACHE_FILE', 'ObjectCacheFile', 'VARCHAR', false, 255, null);
		$this->addColumn('PRECACHED_OBJECT_FILE', 'PrecachedObjectFile', 'VARCHAR', false, 255, null);
		$this->addColumn('RETAINED_HOST_ATTRIBUTE_MASK', 'RetainedHostAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('RETAINED_SERVICE_ATTRIBUTE_MASK', 'RetainedServiceAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('RETAINED_PROCESS_HOST_ATTRIBUTE_MASK', 'RetainedProcessHostAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK', 'RetainedProcessServiceAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('RETAINED_CONTACT_HOST_ATTRIBUTE_MASK', 'RetainedContactHostAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK', 'RetainedContactServiceAttributeMask', 'INTEGER', false, null, null);
		$this->addColumn('CHECK_RESULT_REAPER_FREQUENCY', 'CheckResultReaperFrequency', 'INTEGER', false, null, null);
		$this->addColumn('MAX_CHECK_RESULT_REAPER_TIME', 'MaxCheckResultReaperTime', 'INTEGER', false, null, null);
		$this->addColumn('CHECK_RESULT_PATH', 'CheckResultPath', 'VARCHAR', false, 255, null);
		$this->addColumn('MAX_CHECK_RESULT_FILE_AGE', 'MaxCheckResultFileAge', 'INTEGER', false, null, null);
		$this->addColumn('TRANSLATE_PASSIVE_HOST_CHECKS', 'TranslatePassiveHostChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('PASSIVE_HOST_CHECKS_ARE_SOFT', 'PassiveHostChecksAreSoft', 'BOOLEAN', false, null, null);
		$this->addColumn('ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS', 'EnablePredictiveHostDependencyChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS', 'EnablePredictiveServiceDependencyChecks', 'BOOLEAN', false, null, null);
		$this->addColumn('CACHED_HOST_CHECK_HORIZON', 'CachedHostCheckHorizon', 'INTEGER', false, null, null);
		$this->addColumn('CACHED_SERVICE_CHECK_HORIZON', 'CachedServiceCheckHorizon', 'INTEGER', false, null, null);
		$this->addColumn('USE_LARGE_INSTALLATION_TWEAKS', 'UseLargeInstallationTweaks', 'BOOLEAN', false, null, null);
		$this->addColumn('FREE_CHILD_PROCESS_MEMORY', 'FreeChildProcessMemory', 'BOOLEAN', false, null, null);
		$this->addColumn('CHILD_PROCESSES_FORK_TWICE', 'ChildProcessesForkTwice', 'BOOLEAN', false, null, null);
		$this->addColumn('ENABLE_ENVIRONMENT_MACROS', 'EnableEnvironmentMacros', 'BOOLEAN', false, null, null);
		$this->addColumn('ADDITIONAL_FRESHNESS_LATENCY', 'AdditionalFreshnessLatency', 'INTEGER', false, null, null);
		$this->addColumn('ENABLE_EMBEDDED_PERL', 'EnableEmbeddedPerl', 'BOOLEAN', false, null, null);
		$this->addColumn('USE_EMBEDDED_PERL_IMPLICITLY', 'UseEmbeddedPerlImplicitly', 'BOOLEAN', false, null, null);
		$this->addColumn('P1_FILE', 'P1File', 'VARCHAR', false, 255, null);
		$this->addColumn('USE_TIMEZONE', 'UseTimezone', 'VARCHAR', false, 255, null);
		$this->addColumn('DEBUG_FILE', 'DebugFile', 'VARCHAR', false, 255, null);
		$this->addColumn('DEBUG_LEVEL', 'DebugLevel', 'INTEGER', false, null, null);
		$this->addColumn('DEBUG_VERBOSITY', 'DebugVerbosity', 'INTEGER', false, null, null);
		$this->addColumn('MAX_DEBUG_FILE_SIZE', 'MaxDebugFileSize', 'INTEGER', false, null, null);
		$this->addColumn('TEMP_PATH', 'TempPath', 'VARCHAR', false, 255, null);
		$this->addColumn('CHECK_FOR_UPDATES', 'CheckForUpdates', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECK_FOR_ORPHANED_HOSTS', 'CheckForOrphanedHosts', 'BOOLEAN', false, null, null);
		$this->addColumn('BARE_UPDATE_CHECK', 'BareUpdateCheck', 'BOOLEAN', false, null, null);
		$this->addColumn('LOG_CURRENT_STATES', 'LogCurrentStates', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECK_WORKERS', 'CheckWorkers', 'INTEGER', false, null, null);
		$this->addColumn('QUERY_SOCKET', 'QuerySocket', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosCommandRelatedByOcspCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('ocsp_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByOchpCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('ochp_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByHostPerfdataCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('host_perfdata_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByServicePerfdataCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('service_perfdata_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByHostPerfdataFileProcessingCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('host_perfdata_file_processing_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByServicePerfdataFileProcessingCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('service_perfdata_file_processing_command' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByGlobalServiceEventHandler', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('global_service_event_handler' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommandRelatedByGlobalHostEventHandler', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('global_host_event_handler' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosMainConfigurationTableMap
