<?php


/**
 * This class adds structure of 'nagios_main_configuration' table to 'lilac' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    .map
 */
class NagiosMainConfigurationMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosMainConfigurationMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NagiosMainConfigurationPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosMainConfigurationPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosMainConfiguration');
		$tMap->setClassname('NagiosMainConfiguration');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('CONFIG_DIR', 'ConfigDir', 'VARCHAR', false, 255);

		$tMap->addColumn('LOG_FILE', 'LogFile', 'VARCHAR', false, 255);

		$tMap->addColumn('TEMP_FILE', 'TempFile', 'VARCHAR', false, 255);

		$tMap->addColumn('STATUS_FILE', 'StatusFile', 'VARCHAR', false, 255);

		$tMap->addColumn('STATUS_UPDATE_INTERVAL', 'StatusUpdateInterval', 'INTEGER', false, null);

		$tMap->addColumn('NAGIOS_USER', 'NagiosUser', 'VARCHAR', false, 255);

		$tMap->addColumn('NAGIOS_GROUP', 'NagiosGroup', 'VARCHAR', false, 255);

		$tMap->addColumn('ENABLE_NOTIFICATIONS', 'EnableNotifications', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTE_SERVICE_CHECKS', 'ExecuteServiceChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('ACCEPT_PASSIVE_SERVICE_CHECKS', 'AcceptPassiveServiceChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('ENABLE_EVENT_HANDLERS', 'EnableEventHandlers', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_ROTATION_METHOD', 'LogRotationMethod', 'CHAR', false, null);

		$tMap->addColumn('LOG_ARCHIVE_PATH', 'LogArchivePath', 'VARCHAR', false, 255);

		$tMap->addColumn('CHECK_EXTERNAL_COMMANDS', 'CheckExternalCommands', 'BOOLEAN', false, null);

		$tMap->addColumn('COMMAND_CHECK_INTERVAL', 'CommandCheckInterval', 'VARCHAR', false, 255);

		$tMap->addColumn('COMMAND_FILE', 'CommandFile', 'VARCHAR', false, 255);

		$tMap->addColumn('LOCK_FILE', 'LockFile', 'VARCHAR', false, 255);

		$tMap->addColumn('RETAIN_STATE_INFORMATION', 'RetainStateInformation', 'BOOLEAN', false, null);

		$tMap->addColumn('STATE_RETENTION_FILE', 'StateRetentionFile', 'VARCHAR', false, 255);

		$tMap->addColumn('RETENTION_UPDATE_INTERVAL', 'RetentionUpdateInterval', 'INTEGER', false, null);

		$tMap->addColumn('USE_RETAINED_PROGRAM_STATE', 'UseRetainedProgramState', 'BOOLEAN', false, null);

		$tMap->addColumn('USE_SYSLOG', 'UseSyslog', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_NOTIFICATIONS', 'LogNotifications', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_SERVICE_RETRIES', 'LogServiceRetries', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_HOST_RETRIES', 'LogHostRetries', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_EVENT_HANDLERS', 'LogEventHandlers', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_INITIAL_STATES', 'LogInitialStates', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_EXTERNAL_COMMANDS', 'LogExternalCommands', 'BOOLEAN', false, null);

		$tMap->addColumn('LOG_PASSIVE_CHECKS', 'LogPassiveChecks', 'BOOLEAN', false, null);

		$tMap->addForeignKey('GLOBAL_HOST_EVENT_HANDLER', 'GlobalHostEventHandler', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addForeignKey('GLOBAL_SERVICE_EVENT_HANDLER', 'GlobalServiceEventHandler', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('EXTERNAL_COMMAND_BUFFER_SLOTS', 'ExternalCommandBufferSlots', 'INTEGER', false, null);

		$tMap->addColumn('SLEEP_TIME', 'SleepTime', 'FLOAT', false, null);

		$tMap->addColumn('SERVICE_INTERLEAVE_FACTOR', 'ServiceInterleaveFactor', 'CHAR', false, null);

		$tMap->addColumn('MAX_CONCURRENT_CHECKS', 'MaxConcurrentChecks', 'INTEGER', false, null);

		$tMap->addColumn('SERVICE_REAPER_FREQUENCY', 'ServiceReaperFrequency', 'INTEGER', false, null);

		$tMap->addColumn('INTERVAL_LENGTH', 'IntervalLength', 'INTEGER', false, null);

		$tMap->addColumn('USE_AGGRESSIVE_HOST_CHECKING', 'UseAggressiveHostChecking', 'BOOLEAN', false, null);

		$tMap->addColumn('ENABLE_FLAP_DETECTION', 'EnableFlapDetection', 'BOOLEAN', false, null);

		$tMap->addColumn('LOW_SERVICE_FLAP_THRESHOLD', 'LowServiceFlapThreshold', 'FLOAT', false, null);

		$tMap->addColumn('HIGH_SERVICE_FLAP_THRESHOLD', 'HighServiceFlapThreshold', 'FLOAT', false, null);

		$tMap->addColumn('LOW_HOST_FLAP_THRESHOLD', 'LowHostFlapThreshold', 'FLOAT', false, null);

		$tMap->addColumn('HIGH_HOST_FLAP_THRESHOLD', 'HighHostFlapThreshold', 'FLOAT', false, null);

		$tMap->addColumn('SOFT_STATE_DEPENDENCIES', 'SoftStateDependencies', 'BOOLEAN', false, null);

		$tMap->addColumn('SERVICE_CHECK_TIMEOUT', 'ServiceCheckTimeout', 'INTEGER', false, null);

		$tMap->addColumn('HOST_CHECK_TIMEOUT', 'HostCheckTimeout', 'INTEGER', false, null);

		$tMap->addColumn('EVENT_HANDLER_TIMEOUT', 'EventHandlerTimeout', 'INTEGER', false, null);

		$tMap->addColumn('NOTIFICATION_TIMEOUT', 'NotificationTimeout', 'INTEGER', false, null);

		$tMap->addColumn('OCSP_TIMEOUT', 'OcspTimeout', 'INTEGER', false, null);

		$tMap->addColumn('OHCP_TIMEOUT', 'OhcpTimeout', 'INTEGER', false, null);

		$tMap->addColumn('PERFDATA_TIMEOUT', 'PerfdataTimeout', 'INTEGER', false, null);

		$tMap->addColumn('OBSESS_OVER_SERVICES', 'ObsessOverServices', 'BOOLEAN', false, null);

		$tMap->addForeignKey('OCSP_COMMAND', 'OcspCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('PROCESS_PERFORMANCE_DATA', 'ProcessPerformanceData', 'BOOLEAN', false, null);

		$tMap->addColumn('CHECK_FOR_ORPHANED_SERVICES', 'CheckForOrphanedServices', 'BOOLEAN', false, null);

		$tMap->addColumn('CHECK_SERVICE_FRESHNESS', 'CheckServiceFreshness', 'BOOLEAN', false, null);

		$tMap->addColumn('FRESHNESS_CHECK_INTERVAL', 'FreshnessCheckInterval', 'INTEGER', false, null);

		$tMap->addColumn('DATE_FORMAT', 'DateFormat', 'VARCHAR', false, 255);

		$tMap->addColumn('ILLEGAL_OBJECT_NAME_CHARS', 'IllegalObjectNameChars', 'VARCHAR', false, 255);

		$tMap->addColumn('ILLEGAL_MACRO_OUTPUT_CHARS', 'IllegalMacroOutputChars', 'VARCHAR', false, 255);

		$tMap->addColumn('ADMIN_EMAIL', 'AdminEmail', 'VARCHAR', false, 255);

		$tMap->addColumn('ADMIN_PAGER', 'AdminPager', 'VARCHAR', false, 255);

		$tMap->addColumn('EXECUTE_HOST_CHECKS', 'ExecuteHostChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('SERVICE_INTER_CHECK_DELAY_METHOD', 'ServiceInterCheckDelayMethod', 'VARCHAR', false, 255);

		$tMap->addColumn('USE_RETAINED_SCHEDULING_INFO', 'UseRetainedSchedulingInfo', 'BOOLEAN', false, null);

		$tMap->addColumn('ACCEPT_PASSIVE_HOST_CHECKS', 'AcceptPassiveHostChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('MAX_SERVICE_CHECK_SPREAD', 'MaxServiceCheckSpread', 'INTEGER', false, null);

		$tMap->addColumn('HOST_INTER_CHECK_DELAY_METHOD', 'HostInterCheckDelayMethod', 'VARCHAR', false, 255);

		$tMap->addColumn('MAX_HOST_CHECK_SPREAD', 'MaxHostCheckSpread', 'INTEGER', false, null);

		$tMap->addColumn('AUTO_RESCHEDULE_CHECKS', 'AutoRescheduleChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('AUTO_RESCHEDULING_INTERVAL', 'AutoReschedulingInterval', 'INTEGER', false, null);

		$tMap->addColumn('AUTO_RESCHEDULING_WINDOW', 'AutoReschedulingWindow', 'INTEGER', false, null);

		$tMap->addColumn('OCHP_TIMEOUT', 'OchpTimeout', 'INTEGER', false, null);

		$tMap->addColumn('OBSESS_OVER_HOSTS', 'ObsessOverHosts', 'BOOLEAN', false, null);

		$tMap->addForeignKey('OCHP_COMMAND', 'OchpCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('CHECK_HOST_FRESHNESS', 'CheckHostFreshness', 'BOOLEAN', false, null);

		$tMap->addColumn('HOST_FRESHNESS_CHECK_INTERVAL', 'HostFreshnessCheckInterval', 'INTEGER', false, null);

		$tMap->addColumn('SERVICE_FRESHNESS_CHECK_INTERVAL', 'ServiceFreshnessCheckInterval', 'INTEGER', false, null);

		$tMap->addColumn('USE_REGEXP_MATCHING', 'UseRegexpMatching', 'BOOLEAN', false, null);

		$tMap->addColumn('USE_TRUE_REGEXP_MATCHING', 'UseTrueRegexpMatching', 'BOOLEAN', false, null);

		$tMap->addColumn('EVENT_BROKER_OPTIONS', 'EventBrokerOptions', 'VARCHAR', false, 255);

		$tMap->addColumn('DAEMON_DUMPS_CORE', 'DaemonDumpsCore', 'BOOLEAN', false, null);

		$tMap->addForeignKey('HOST_PERFDATA_COMMAND', 'HostPerfdataCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addForeignKey('SERVICE_PERFDATA_COMMAND', 'ServicePerfdataCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('HOST_PERFDATA_FILE', 'HostPerfdataFile', 'VARCHAR', false, 255);

		$tMap->addColumn('HOST_PERFDATA_FILE_TEMPLATE', 'HostPerfdataFileTemplate', 'VARCHAR', false, 255);

		$tMap->addColumn('SERVICE_PERFDATA_FILE', 'ServicePerfdataFile', 'VARCHAR', false, 255);

		$tMap->addColumn('SERVICE_PERFDATA_FILE_TEMPLATE', 'ServicePerfdataFileTemplate', 'VARCHAR', false, 255);

		$tMap->addColumn('HOST_PERFDATA_FILE_MODE', 'HostPerfdataFileMode', 'CHAR', false, null);

		$tMap->addColumn('SERVICE_PERFDATA_FILE_MODE', 'ServicePerfdataFileMode', 'CHAR', false, null);

		$tMap->addForeignKey('HOST_PERFDATA_FILE_PROCESSING_COMMAND', 'HostPerfdataFileProcessingCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addForeignKey('SERVICE_PERFDATA_FILE_PROCESSING_COMMAND', 'ServicePerfdataFileProcessingCommand', 'INTEGER', 'nagios_command', 'ID', false, null);

		$tMap->addColumn('HOST_PERFDATA_FILE_PROCESSING_INTERVAL', 'HostPerfdataFileProcessingInterval', 'INTEGER', false, null);

		$tMap->addColumn('SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL', 'ServicePerfdataFileProcessingInterval', 'INTEGER', false, null);

		$tMap->addColumn('OBJECT_CACHE_FILE', 'ObjectCacheFile', 'VARCHAR', false, 255);

		$tMap->addColumn('PRECACHED_OBJECT_FILE', 'PrecachedObjectFile', 'VARCHAR', false, 255);

		$tMap->addColumn('RETAINED_HOST_ATTRIBUTE_MASK', 'RetainedHostAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('RETAINED_SERVICE_ATTRIBUTE_MASK', 'RetainedServiceAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('RETAINED_PROCESS_HOST_ATTRIBUTE_MASK', 'RetainedProcessHostAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK', 'RetainedProcessServiceAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('RETAINED_CONTACT_HOST_ATTRIBUTE_MASK', 'RetainedContactHostAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK', 'RetainedContactServiceAttributeMask', 'INTEGER', false, null);

		$tMap->addColumn('CHECK_RESULT_REAPER_FREQUENCY', 'CheckResultReaperFrequency', 'INTEGER', false, null);

		$tMap->addColumn('MAX_CHECK_RESULT_REAPER_TIME', 'MaxCheckResultReaperTime', 'INTEGER', false, null);

		$tMap->addColumn('CHECK_RESULT_PATH', 'CheckResultPath', 'VARCHAR', false, 255);

		$tMap->addColumn('MAX_CHECK_RESULT_FILE_AGE', 'MaxCheckResultFileAge', 'INTEGER', false, null);

		$tMap->addColumn('TRANSLATE_PASSIVE_HOST_CHECKS', 'TranslatePassiveHostChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('PASSIVE_HOST_CHECKS_ARE_SOFT', 'PassiveHostChecksAreSoft', 'BOOLEAN', false, null);

		$tMap->addColumn('ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS', 'EnablePredictiveHostDependencyChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS', 'EnablePredictiveServiceDependencyChecks', 'BOOLEAN', false, null);

		$tMap->addColumn('CACHED_HOST_CHECK_HORIZON', 'CachedHostCheckHorizon', 'INTEGER', false, null);

		$tMap->addColumn('CACHED_SERVICE_CHECK_HORIZON', 'CachedServiceCheckHorizon', 'INTEGER', false, null);

		$tMap->addColumn('USE_LARGE_INSTALLATION_TWEAKS', 'UseLargeInstallationTweaks', 'BOOLEAN', false, null);

		$tMap->addColumn('FREE_CHILD_PROCESS_MEMORY', 'FreeChildProcessMemory', 'BOOLEAN', false, null);

		$tMap->addColumn('CHILD_PROCESSES_FORK_TWICE', 'ChildProcessesForkTwice', 'BOOLEAN', false, null);

		$tMap->addColumn('ENABLE_ENVIRONMENT_MACROS', 'EnableEnvironmentMacros', 'BOOLEAN', false, null);

		$tMap->addColumn('ADDITIONAL_FRESHNESS_LATENCY', 'AdditionalFreshnessLatency', 'INTEGER', false, null);

		$tMap->addColumn('ENABLE_EMBEDDED_PERL', 'EnableEmbeddedPerl', 'BOOLEAN', false, null);

		$tMap->addColumn('USE_EMBEDDED_PERL_IMPLICITLY', 'UseEmbeddedPerlImplicitly', 'BOOLEAN', false, null);

		$tMap->addColumn('P1_FILE', 'P1File', 'VARCHAR', false, 255);

		$tMap->addColumn('USE_TIMEZONE', 'UseTimezone', 'VARCHAR', false, 255);

		$tMap->addColumn('DEBUG_FILE', 'DebugFile', 'VARCHAR', false, 255);

		$tMap->addColumn('DEBUG_LEVEL', 'DebugLevel', 'INTEGER', false, null);

		$tMap->addColumn('DEBUG_VERBOSITY', 'DebugVerbosity', 'INTEGER', false, null);

		$tMap->addColumn('MAX_DEBUG_FILE_SIZE', 'MaxDebugFileSize', 'INTEGER', false, null);

	} // doBuild()

} // NagiosMainConfigurationMapBuilder
