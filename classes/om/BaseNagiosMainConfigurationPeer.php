<?php

/**
 * Base static class for performing query and update operations on the 'nagios_main_configuration' table.
 *
 * Nagios Main Configuration
 *
 * @package    .om
 */
abstract class BaseNagiosMainConfigurationPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_main_configuration';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosMainConfiguration';

	/** The total number of columns. */
	const NUM_COLUMNS = 126;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_main_configuration.ID';

	/** the column name for the CONFIG_DIR field */
	const CONFIG_DIR = 'nagios_main_configuration.CONFIG_DIR';

	/** the column name for the LOG_FILE field */
	const LOG_FILE = 'nagios_main_configuration.LOG_FILE';

	/** the column name for the TEMP_FILE field */
	const TEMP_FILE = 'nagios_main_configuration.TEMP_FILE';

	/** the column name for the STATUS_FILE field */
	const STATUS_FILE = 'nagios_main_configuration.STATUS_FILE';

	/** the column name for the STATUS_UPDATE_INTERVAL field */
	const STATUS_UPDATE_INTERVAL = 'nagios_main_configuration.STATUS_UPDATE_INTERVAL';

	/** the column name for the NAGIOS_USER field */
	const NAGIOS_USER = 'nagios_main_configuration.NAGIOS_USER';

	/** the column name for the NAGIOS_GROUP field */
	const NAGIOS_GROUP = 'nagios_main_configuration.NAGIOS_GROUP';

	/** the column name for the ENABLE_NOTIFICATIONS field */
	const ENABLE_NOTIFICATIONS = 'nagios_main_configuration.ENABLE_NOTIFICATIONS';

	/** the column name for the EXECUTE_SERVICE_CHECKS field */
	const EXECUTE_SERVICE_CHECKS = 'nagios_main_configuration.EXECUTE_SERVICE_CHECKS';

	/** the column name for the ACCEPT_PASSIVE_SERVICE_CHECKS field */
	const ACCEPT_PASSIVE_SERVICE_CHECKS = 'nagios_main_configuration.ACCEPT_PASSIVE_SERVICE_CHECKS';

	/** the column name for the ENABLE_EVENT_HANDLERS field */
	const ENABLE_EVENT_HANDLERS = 'nagios_main_configuration.ENABLE_EVENT_HANDLERS';

	/** the column name for the LOG_ROTATION_METHOD field */
	const LOG_ROTATION_METHOD = 'nagios_main_configuration.LOG_ROTATION_METHOD';

	/** the column name for the LOG_ARCHIVE_PATH field */
	const LOG_ARCHIVE_PATH = 'nagios_main_configuration.LOG_ARCHIVE_PATH';

	/** the column name for the CHECK_EXTERNAL_COMMANDS field */
	const CHECK_EXTERNAL_COMMANDS = 'nagios_main_configuration.CHECK_EXTERNAL_COMMANDS';

	/** the column name for the COMMAND_CHECK_INTERVAL field */
	const COMMAND_CHECK_INTERVAL = 'nagios_main_configuration.COMMAND_CHECK_INTERVAL';

	/** the column name for the COMMAND_FILE field */
	const COMMAND_FILE = 'nagios_main_configuration.COMMAND_FILE';

	/** the column name for the LOCK_FILE field */
	const LOCK_FILE = 'nagios_main_configuration.LOCK_FILE';

	/** the column name for the RETAIN_STATE_INFORMATION field */
	const RETAIN_STATE_INFORMATION = 'nagios_main_configuration.RETAIN_STATE_INFORMATION';

	/** the column name for the STATE_RETENTION_FILE field */
	const STATE_RETENTION_FILE = 'nagios_main_configuration.STATE_RETENTION_FILE';

	/** the column name for the RETENTION_UPDATE_INTERVAL field */
	const RETENTION_UPDATE_INTERVAL = 'nagios_main_configuration.RETENTION_UPDATE_INTERVAL';

	/** the column name for the USE_RETAINED_PROGRAM_STATE field */
	const USE_RETAINED_PROGRAM_STATE = 'nagios_main_configuration.USE_RETAINED_PROGRAM_STATE';

	/** the column name for the USE_SYSLOG field */
	const USE_SYSLOG = 'nagios_main_configuration.USE_SYSLOG';

	/** the column name for the LOG_NOTIFICATIONS field */
	const LOG_NOTIFICATIONS = 'nagios_main_configuration.LOG_NOTIFICATIONS';

	/** the column name for the LOG_SERVICE_RETRIES field */
	const LOG_SERVICE_RETRIES = 'nagios_main_configuration.LOG_SERVICE_RETRIES';

	/** the column name for the LOG_HOST_RETRIES field */
	const LOG_HOST_RETRIES = 'nagios_main_configuration.LOG_HOST_RETRIES';

	/** the column name for the LOG_EVENT_HANDLERS field */
	const LOG_EVENT_HANDLERS = 'nagios_main_configuration.LOG_EVENT_HANDLERS';

	/** the column name for the LOG_INITIAL_STATES field */
	const LOG_INITIAL_STATES = 'nagios_main_configuration.LOG_INITIAL_STATES';

	/** the column name for the LOG_EXTERNAL_COMMANDS field */
	const LOG_EXTERNAL_COMMANDS = 'nagios_main_configuration.LOG_EXTERNAL_COMMANDS';

	/** the column name for the LOG_PASSIVE_CHECKS field */
	const LOG_PASSIVE_CHECKS = 'nagios_main_configuration.LOG_PASSIVE_CHECKS';

	/** the column name for the GLOBAL_HOST_EVENT_HANDLER field */
	const GLOBAL_HOST_EVENT_HANDLER = 'nagios_main_configuration.GLOBAL_HOST_EVENT_HANDLER';

	/** the column name for the GLOBAL_SERVICE_EVENT_HANDLER field */
	const GLOBAL_SERVICE_EVENT_HANDLER = 'nagios_main_configuration.GLOBAL_SERVICE_EVENT_HANDLER';

	/** the column name for the EXTERNAL_COMMAND_BUFFER_SLOTS field */
	const EXTERNAL_COMMAND_BUFFER_SLOTS = 'nagios_main_configuration.EXTERNAL_COMMAND_BUFFER_SLOTS';

	/** the column name for the SLEEP_TIME field */
	const SLEEP_TIME = 'nagios_main_configuration.SLEEP_TIME';

	/** the column name for the SERVICE_INTERLEAVE_FACTOR field */
	const SERVICE_INTERLEAVE_FACTOR = 'nagios_main_configuration.SERVICE_INTERLEAVE_FACTOR';

	/** the column name for the MAX_CONCURRENT_CHECKS field */
	const MAX_CONCURRENT_CHECKS = 'nagios_main_configuration.MAX_CONCURRENT_CHECKS';

	/** the column name for the SERVICE_REAPER_FREQUENCY field */
	const SERVICE_REAPER_FREQUENCY = 'nagios_main_configuration.SERVICE_REAPER_FREQUENCY';

	/** the column name for the INTERVAL_LENGTH field */
	const INTERVAL_LENGTH = 'nagios_main_configuration.INTERVAL_LENGTH';

	/** the column name for the USE_AGGRESSIVE_HOST_CHECKING field */
	const USE_AGGRESSIVE_HOST_CHECKING = 'nagios_main_configuration.USE_AGGRESSIVE_HOST_CHECKING';

	/** the column name for the ENABLE_FLAP_DETECTION field */
	const ENABLE_FLAP_DETECTION = 'nagios_main_configuration.ENABLE_FLAP_DETECTION';

	/** the column name for the LOW_SERVICE_FLAP_THRESHOLD field */
	const LOW_SERVICE_FLAP_THRESHOLD = 'nagios_main_configuration.LOW_SERVICE_FLAP_THRESHOLD';

	/** the column name for the HIGH_SERVICE_FLAP_THRESHOLD field */
	const HIGH_SERVICE_FLAP_THRESHOLD = 'nagios_main_configuration.HIGH_SERVICE_FLAP_THRESHOLD';

	/** the column name for the LOW_HOST_FLAP_THRESHOLD field */
	const LOW_HOST_FLAP_THRESHOLD = 'nagios_main_configuration.LOW_HOST_FLAP_THRESHOLD';

	/** the column name for the HIGH_HOST_FLAP_THRESHOLD field */
	const HIGH_HOST_FLAP_THRESHOLD = 'nagios_main_configuration.HIGH_HOST_FLAP_THRESHOLD';

	/** the column name for the SOFT_STATE_DEPENDENCIES field */
	const SOFT_STATE_DEPENDENCIES = 'nagios_main_configuration.SOFT_STATE_DEPENDENCIES';

	/** the column name for the SERVICE_CHECK_TIMEOUT field */
	const SERVICE_CHECK_TIMEOUT = 'nagios_main_configuration.SERVICE_CHECK_TIMEOUT';

	/** the column name for the HOST_CHECK_TIMEOUT field */
	const HOST_CHECK_TIMEOUT = 'nagios_main_configuration.HOST_CHECK_TIMEOUT';

	/** the column name for the EVENT_HANDLER_TIMEOUT field */
	const EVENT_HANDLER_TIMEOUT = 'nagios_main_configuration.EVENT_HANDLER_TIMEOUT';

	/** the column name for the NOTIFICATION_TIMEOUT field */
	const NOTIFICATION_TIMEOUT = 'nagios_main_configuration.NOTIFICATION_TIMEOUT';

	/** the column name for the OCSP_TIMEOUT field */
	const OCSP_TIMEOUT = 'nagios_main_configuration.OCSP_TIMEOUT';

	/** the column name for the OHCP_TIMEOUT field */
	const OHCP_TIMEOUT = 'nagios_main_configuration.OHCP_TIMEOUT';

	/** the column name for the PERFDATA_TIMEOUT field */
	const PERFDATA_TIMEOUT = 'nagios_main_configuration.PERFDATA_TIMEOUT';

	/** the column name for the OBSESS_OVER_SERVICES field */
	const OBSESS_OVER_SERVICES = 'nagios_main_configuration.OBSESS_OVER_SERVICES';

	/** the column name for the OCSP_COMMAND field */
	const OCSP_COMMAND = 'nagios_main_configuration.OCSP_COMMAND';

	/** the column name for the PROCESS_PERFORMANCE_DATA field */
	const PROCESS_PERFORMANCE_DATA = 'nagios_main_configuration.PROCESS_PERFORMANCE_DATA';

	/** the column name for the CHECK_FOR_ORPHANED_SERVICES field */
	const CHECK_FOR_ORPHANED_SERVICES = 'nagios_main_configuration.CHECK_FOR_ORPHANED_SERVICES';

	/** the column name for the CHECK_SERVICE_FRESHNESS field */
	const CHECK_SERVICE_FRESHNESS = 'nagios_main_configuration.CHECK_SERVICE_FRESHNESS';

	/** the column name for the FRESHNESS_CHECK_INTERVAL field */
	const FRESHNESS_CHECK_INTERVAL = 'nagios_main_configuration.FRESHNESS_CHECK_INTERVAL';

	/** the column name for the DATE_FORMAT field */
	const DATE_FORMAT = 'nagios_main_configuration.DATE_FORMAT';

	/** the column name for the ILLEGAL_OBJECT_NAME_CHARS field */
	const ILLEGAL_OBJECT_NAME_CHARS = 'nagios_main_configuration.ILLEGAL_OBJECT_NAME_CHARS';

	/** the column name for the ILLEGAL_MACRO_OUTPUT_CHARS field */
	const ILLEGAL_MACRO_OUTPUT_CHARS = 'nagios_main_configuration.ILLEGAL_MACRO_OUTPUT_CHARS';

	/** the column name for the ADMIN_EMAIL field */
	const ADMIN_EMAIL = 'nagios_main_configuration.ADMIN_EMAIL';

	/** the column name for the ADMIN_PAGER field */
	const ADMIN_PAGER = 'nagios_main_configuration.ADMIN_PAGER';

	/** the column name for the EXECUTE_HOST_CHECKS field */
	const EXECUTE_HOST_CHECKS = 'nagios_main_configuration.EXECUTE_HOST_CHECKS';

	/** the column name for the SERVICE_INTER_CHECK_DELAY_METHOD field */
	const SERVICE_INTER_CHECK_DELAY_METHOD = 'nagios_main_configuration.SERVICE_INTER_CHECK_DELAY_METHOD';

	/** the column name for the USE_RETAINED_SCHEDULING_INFO field */
	const USE_RETAINED_SCHEDULING_INFO = 'nagios_main_configuration.USE_RETAINED_SCHEDULING_INFO';

	/** the column name for the ACCEPT_PASSIVE_HOST_CHECKS field */
	const ACCEPT_PASSIVE_HOST_CHECKS = 'nagios_main_configuration.ACCEPT_PASSIVE_HOST_CHECKS';

	/** the column name for the MAX_SERVICE_CHECK_SPREAD field */
	const MAX_SERVICE_CHECK_SPREAD = 'nagios_main_configuration.MAX_SERVICE_CHECK_SPREAD';

	/** the column name for the HOST_INTER_CHECK_DELAY_METHOD field */
	const HOST_INTER_CHECK_DELAY_METHOD = 'nagios_main_configuration.HOST_INTER_CHECK_DELAY_METHOD';

	/** the column name for the MAX_HOST_CHECK_SPREAD field */
	const MAX_HOST_CHECK_SPREAD = 'nagios_main_configuration.MAX_HOST_CHECK_SPREAD';

	/** the column name for the AUTO_RESCHEDULE_CHECKS field */
	const AUTO_RESCHEDULE_CHECKS = 'nagios_main_configuration.AUTO_RESCHEDULE_CHECKS';

	/** the column name for the AUTO_RESCHEDULING_INTERVAL field */
	const AUTO_RESCHEDULING_INTERVAL = 'nagios_main_configuration.AUTO_RESCHEDULING_INTERVAL';

	/** the column name for the AUTO_RESCHEDULING_WINDOW field */
	const AUTO_RESCHEDULING_WINDOW = 'nagios_main_configuration.AUTO_RESCHEDULING_WINDOW';

	/** the column name for the OCHP_TIMEOUT field */
	const OCHP_TIMEOUT = 'nagios_main_configuration.OCHP_TIMEOUT';

	/** the column name for the OBSESS_OVER_HOSTS field */
	const OBSESS_OVER_HOSTS = 'nagios_main_configuration.OBSESS_OVER_HOSTS';

	/** the column name for the OCHP_COMMAND field */
	const OCHP_COMMAND = 'nagios_main_configuration.OCHP_COMMAND';

	/** the column name for the CHECK_HOST_FRESHNESS field */
	const CHECK_HOST_FRESHNESS = 'nagios_main_configuration.CHECK_HOST_FRESHNESS';

	/** the column name for the HOST_FRESHNESS_CHECK_INTERVAL field */
	const HOST_FRESHNESS_CHECK_INTERVAL = 'nagios_main_configuration.HOST_FRESHNESS_CHECK_INTERVAL';

	/** the column name for the SERVICE_FRESHNESS_CHECK_INTERVAL field */
	const SERVICE_FRESHNESS_CHECK_INTERVAL = 'nagios_main_configuration.SERVICE_FRESHNESS_CHECK_INTERVAL';

	/** the column name for the USE_REGEXP_MATCHING field */
	const USE_REGEXP_MATCHING = 'nagios_main_configuration.USE_REGEXP_MATCHING';

	/** the column name for the USE_TRUE_REGEXP_MATCHING field */
	const USE_TRUE_REGEXP_MATCHING = 'nagios_main_configuration.USE_TRUE_REGEXP_MATCHING';

	/** the column name for the EVENT_BROKER_OPTIONS field */
	const EVENT_BROKER_OPTIONS = 'nagios_main_configuration.EVENT_BROKER_OPTIONS';

	/** the column name for the DAEMON_DUMPS_CORE field */
	const DAEMON_DUMPS_CORE = 'nagios_main_configuration.DAEMON_DUMPS_CORE';

	/** the column name for the HOST_PERFDATA_COMMAND field */
	const HOST_PERFDATA_COMMAND = 'nagios_main_configuration.HOST_PERFDATA_COMMAND';

	/** the column name for the SERVICE_PERFDATA_COMMAND field */
	const SERVICE_PERFDATA_COMMAND = 'nagios_main_configuration.SERVICE_PERFDATA_COMMAND';

	/** the column name for the HOST_PERFDATA_FILE field */
	const HOST_PERFDATA_FILE = 'nagios_main_configuration.HOST_PERFDATA_FILE';

	/** the column name for the HOST_PERFDATA_FILE_TEMPLATE field */
	const HOST_PERFDATA_FILE_TEMPLATE = 'nagios_main_configuration.HOST_PERFDATA_FILE_TEMPLATE';

	/** the column name for the SERVICE_PERFDATA_FILE field */
	const SERVICE_PERFDATA_FILE = 'nagios_main_configuration.SERVICE_PERFDATA_FILE';

	/** the column name for the SERVICE_PERFDATA_FILE_TEMPLATE field */
	const SERVICE_PERFDATA_FILE_TEMPLATE = 'nagios_main_configuration.SERVICE_PERFDATA_FILE_TEMPLATE';

	/** the column name for the HOST_PERFDATA_FILE_MODE field */
	const HOST_PERFDATA_FILE_MODE = 'nagios_main_configuration.HOST_PERFDATA_FILE_MODE';

	/** the column name for the SERVICE_PERFDATA_FILE_MODE field */
	const SERVICE_PERFDATA_FILE_MODE = 'nagios_main_configuration.SERVICE_PERFDATA_FILE_MODE';

	/** the column name for the HOST_PERFDATA_FILE_PROCESSING_COMMAND field */
	const HOST_PERFDATA_FILE_PROCESSING_COMMAND = 'nagios_main_configuration.HOST_PERFDATA_FILE_PROCESSING_COMMAND';

	/** the column name for the SERVICE_PERFDATA_FILE_PROCESSING_COMMAND field */
	const SERVICE_PERFDATA_FILE_PROCESSING_COMMAND = 'nagios_main_configuration.SERVICE_PERFDATA_FILE_PROCESSING_COMMAND';

	/** the column name for the HOST_PERFDATA_FILE_PROCESSING_INTERVAL field */
	const HOST_PERFDATA_FILE_PROCESSING_INTERVAL = 'nagios_main_configuration.HOST_PERFDATA_FILE_PROCESSING_INTERVAL';

	/** the column name for the SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL field */
	const SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL = 'nagios_main_configuration.SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL';

	/** the column name for the OBJECT_CACHE_FILE field */
	const OBJECT_CACHE_FILE = 'nagios_main_configuration.OBJECT_CACHE_FILE';

	/** the column name for the PRECACHED_OBJECT_FILE field */
	const PRECACHED_OBJECT_FILE = 'nagios_main_configuration.PRECACHED_OBJECT_FILE';

	/** the column name for the RETAINED_HOST_ATTRIBUTE_MASK field */
	const RETAINED_HOST_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_HOST_ATTRIBUTE_MASK';

	/** the column name for the RETAINED_SERVICE_ATTRIBUTE_MASK field */
	const RETAINED_SERVICE_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_SERVICE_ATTRIBUTE_MASK';

	/** the column name for the RETAINED_PROCESS_HOST_ATTRIBUTE_MASK field */
	const RETAINED_PROCESS_HOST_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_PROCESS_HOST_ATTRIBUTE_MASK';

	/** the column name for the RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK field */
	const RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK';

	/** the column name for the RETAINED_CONTACT_HOST_ATTRIBUTE_MASK field */
	const RETAINED_CONTACT_HOST_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_CONTACT_HOST_ATTRIBUTE_MASK';

	/** the column name for the RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK field */
	const RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK = 'nagios_main_configuration.RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK';

	/** the column name for the CHECK_RESULT_REAPER_FREQUENCY field */
	const CHECK_RESULT_REAPER_FREQUENCY = 'nagios_main_configuration.CHECK_RESULT_REAPER_FREQUENCY';

	/** the column name for the MAX_CHECK_RESULT_REAPER_TIME field */
	const MAX_CHECK_RESULT_REAPER_TIME = 'nagios_main_configuration.MAX_CHECK_RESULT_REAPER_TIME';

	/** the column name for the CHECK_RESULT_PATH field */
	const CHECK_RESULT_PATH = 'nagios_main_configuration.CHECK_RESULT_PATH';

	/** the column name for the MAX_CHECK_RESULT_FILE_AGE field */
	const MAX_CHECK_RESULT_FILE_AGE = 'nagios_main_configuration.MAX_CHECK_RESULT_FILE_AGE';

	/** the column name for the TRANSLATE_PASSIVE_HOST_CHECKS field */
	const TRANSLATE_PASSIVE_HOST_CHECKS = 'nagios_main_configuration.TRANSLATE_PASSIVE_HOST_CHECKS';

	/** the column name for the PASSIVE_HOST_CHECKS_ARE_SOFT field */
	const PASSIVE_HOST_CHECKS_ARE_SOFT = 'nagios_main_configuration.PASSIVE_HOST_CHECKS_ARE_SOFT';

	/** the column name for the ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS field */
	const ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS = 'nagios_main_configuration.ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS';

	/** the column name for the ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS field */
	const ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS = 'nagios_main_configuration.ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS';

	/** the column name for the CACHED_HOST_CHECK_HORIZON field */
	const CACHED_HOST_CHECK_HORIZON = 'nagios_main_configuration.CACHED_HOST_CHECK_HORIZON';

	/** the column name for the CACHED_SERVICE_CHECK_HORIZON field */
	const CACHED_SERVICE_CHECK_HORIZON = 'nagios_main_configuration.CACHED_SERVICE_CHECK_HORIZON';

	/** the column name for the USE_LARGE_INSTALLATION_TWEAKS field */
	const USE_LARGE_INSTALLATION_TWEAKS = 'nagios_main_configuration.USE_LARGE_INSTALLATION_TWEAKS';

	/** the column name for the FREE_CHILD_PROCESS_MEMORY field */
	const FREE_CHILD_PROCESS_MEMORY = 'nagios_main_configuration.FREE_CHILD_PROCESS_MEMORY';

	/** the column name for the CHILD_PROCESSES_FORK_TWICE field */
	const CHILD_PROCESSES_FORK_TWICE = 'nagios_main_configuration.CHILD_PROCESSES_FORK_TWICE';

	/** the column name for the ENABLE_ENVIRONMENT_MACROS field */
	const ENABLE_ENVIRONMENT_MACROS = 'nagios_main_configuration.ENABLE_ENVIRONMENT_MACROS';

	/** the column name for the ADDITIONAL_FRESHNESS_LATENCY field */
	const ADDITIONAL_FRESHNESS_LATENCY = 'nagios_main_configuration.ADDITIONAL_FRESHNESS_LATENCY';

	/** the column name for the ENABLE_EMBEDDED_PERL field */
	const ENABLE_EMBEDDED_PERL = 'nagios_main_configuration.ENABLE_EMBEDDED_PERL';

	/** the column name for the USE_EMBEDDED_PERL_IMPLICITLY field */
	const USE_EMBEDDED_PERL_IMPLICITLY = 'nagios_main_configuration.USE_EMBEDDED_PERL_IMPLICITLY';

	/** the column name for the P1_FILE field */
	const P1_FILE = 'nagios_main_configuration.P1_FILE';

	/** the column name for the USE_TIMEZONE field */
	const USE_TIMEZONE = 'nagios_main_configuration.USE_TIMEZONE';

	/** the column name for the DEBUG_FILE field */
	const DEBUG_FILE = 'nagios_main_configuration.DEBUG_FILE';

	/** the column name for the DEBUG_LEVEL field */
	const DEBUG_LEVEL = 'nagios_main_configuration.DEBUG_LEVEL';

	/** the column name for the DEBUG_VERBOSITY field */
	const DEBUG_VERBOSITY = 'nagios_main_configuration.DEBUG_VERBOSITY';

	/** the column name for the MAX_DEBUG_FILE_SIZE field */
	const MAX_DEBUG_FILE_SIZE = 'nagios_main_configuration.MAX_DEBUG_FILE_SIZE';

	/**
	 * An identiy map to hold any loaded instances of NagiosMainConfiguration objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosMainConfiguration[]
	 */
	public static $instances = array();

	/**
	 * The MapBuilder instance for this peer.
	 * @var        MapBuilder
	 */
	private static $mapBuilder = null;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'ConfigDir', 'LogFile', 'TempFile', 'StatusFile', 'StatusUpdateInterval', 'NagiosUser', 'NagiosGroup', 'EnableNotifications', 'ExecuteServiceChecks', 'AcceptPassiveServiceChecks', 'EnableEventHandlers', 'LogRotationMethod', 'LogArchivePath', 'CheckExternalCommands', 'CommandCheckInterval', 'CommandFile', 'LockFile', 'RetainStateInformation', 'StateRetentionFile', 'RetentionUpdateInterval', 'UseRetainedProgramState', 'UseSyslog', 'LogNotifications', 'LogServiceRetries', 'LogHostRetries', 'LogEventHandlers', 'LogInitialStates', 'LogExternalCommands', 'LogPassiveChecks', 'GlobalHostEventHandler', 'GlobalServiceEventHandler', 'ExternalCommandBufferSlots', 'SleepTime', 'ServiceInterleaveFactor', 'MaxConcurrentChecks', 'ServiceReaperFrequency', 'IntervalLength', 'UseAggressiveHostChecking', 'EnableFlapDetection', 'LowServiceFlapThreshold', 'HighServiceFlapThreshold', 'LowHostFlapThreshold', 'HighHostFlapThreshold', 'SoftStateDependencies', 'ServiceCheckTimeout', 'HostCheckTimeout', 'EventHandlerTimeout', 'NotificationTimeout', 'OcspTimeout', 'OhcpTimeout', 'PerfdataTimeout', 'ObsessOverServices', 'OcspCommand', 'ProcessPerformanceData', 'CheckForOrphanedServices', 'CheckServiceFreshness', 'FreshnessCheckInterval', 'DateFormat', 'IllegalObjectNameChars', 'IllegalMacroOutputChars', 'AdminEmail', 'AdminPager', 'ExecuteHostChecks', 'ServiceInterCheckDelayMethod', 'UseRetainedSchedulingInfo', 'AcceptPassiveHostChecks', 'MaxServiceCheckSpread', 'HostInterCheckDelayMethod', 'MaxHostCheckSpread', 'AutoRescheduleChecks', 'AutoReschedulingInterval', 'AutoReschedulingWindow', 'OchpTimeout', 'ObsessOverHosts', 'OchpCommand', 'CheckHostFreshness', 'HostFreshnessCheckInterval', 'ServiceFreshnessCheckInterval', 'UseRegexpMatching', 'UseTrueRegexpMatching', 'EventBrokerOptions', 'DaemonDumpsCore', 'HostPerfdataCommand', 'ServicePerfdataCommand', 'HostPerfdataFile', 'HostPerfdataFileTemplate', 'ServicePerfdataFile', 'ServicePerfdataFileTemplate', 'HostPerfdataFileMode', 'ServicePerfdataFileMode', 'HostPerfdataFileProcessingCommand', 'ServicePerfdataFileProcessingCommand', 'HostPerfdataFileProcessingInterval', 'ServicePerfdataFileProcessingInterval', 'ObjectCacheFile', 'PrecachedObjectFile', 'RetainedHostAttributeMask', 'RetainedServiceAttributeMask', 'RetainedProcessHostAttributeMask', 'RetainedProcessServiceAttributeMask', 'RetainedContactHostAttributeMask', 'RetainedContactServiceAttributeMask', 'CheckResultReaperFrequency', 'MaxCheckResultReaperTime', 'CheckResultPath', 'MaxCheckResultFileAge', 'TranslatePassiveHostChecks', 'PassiveHostChecksAreSoft', 'EnablePredictiveHostDependencyChecks', 'EnablePredictiveServiceDependencyChecks', 'CachedHostCheckHorizon', 'CachedServiceCheckHorizon', 'UseLargeInstallationTweaks', 'FreeChildProcessMemory', 'ChildProcessesForkTwice', 'EnableEnvironmentMacros', 'AdditionalFreshnessLatency', 'EnableEmbeddedPerl', 'UseEmbeddedPerlImplicitly', 'P1File', 'UseTimezone', 'DebugFile', 'DebugLevel', 'DebugVerbosity', 'MaxDebugFileSize', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'configDir', 'logFile', 'tempFile', 'statusFile', 'statusUpdateInterval', 'nagiosUser', 'nagiosGroup', 'enableNotifications', 'executeServiceChecks', 'acceptPassiveServiceChecks', 'enableEventHandlers', 'logRotationMethod', 'logArchivePath', 'checkExternalCommands', 'commandCheckInterval', 'commandFile', 'lockFile', 'retainStateInformation', 'stateRetentionFile', 'retentionUpdateInterval', 'useRetainedProgramState', 'useSyslog', 'logNotifications', 'logServiceRetries', 'logHostRetries', 'logEventHandlers', 'logInitialStates', 'logExternalCommands', 'logPassiveChecks', 'globalHostEventHandler', 'globalServiceEventHandler', 'externalCommandBufferSlots', 'sleepTime', 'serviceInterleaveFactor', 'maxConcurrentChecks', 'serviceReaperFrequency', 'intervalLength', 'useAggressiveHostChecking', 'enableFlapDetection', 'lowServiceFlapThreshold', 'highServiceFlapThreshold', 'lowHostFlapThreshold', 'highHostFlapThreshold', 'softStateDependencies', 'serviceCheckTimeout', 'hostCheckTimeout', 'eventHandlerTimeout', 'notificationTimeout', 'ocspTimeout', 'ohcpTimeout', 'perfdataTimeout', 'obsessOverServices', 'ocspCommand', 'processPerformanceData', 'checkForOrphanedServices', 'checkServiceFreshness', 'freshnessCheckInterval', 'dateFormat', 'illegalObjectNameChars', 'illegalMacroOutputChars', 'adminEmail', 'adminPager', 'executeHostChecks', 'serviceInterCheckDelayMethod', 'useRetainedSchedulingInfo', 'acceptPassiveHostChecks', 'maxServiceCheckSpread', 'hostInterCheckDelayMethod', 'maxHostCheckSpread', 'autoRescheduleChecks', 'autoReschedulingInterval', 'autoReschedulingWindow', 'ochpTimeout', 'obsessOverHosts', 'ochpCommand', 'checkHostFreshness', 'hostFreshnessCheckInterval', 'serviceFreshnessCheckInterval', 'useRegexpMatching', 'useTrueRegexpMatching', 'eventBrokerOptions', 'daemonDumpsCore', 'hostPerfdataCommand', 'servicePerfdataCommand', 'hostPerfdataFile', 'hostPerfdataFileTemplate', 'servicePerfdataFile', 'servicePerfdataFileTemplate', 'hostPerfdataFileMode', 'servicePerfdataFileMode', 'hostPerfdataFileProcessingCommand', 'servicePerfdataFileProcessingCommand', 'hostPerfdataFileProcessingInterval', 'servicePerfdataFileProcessingInterval', 'objectCacheFile', 'precachedObjectFile', 'retainedHostAttributeMask', 'retainedServiceAttributeMask', 'retainedProcessHostAttributeMask', 'retainedProcessServiceAttributeMask', 'retainedContactHostAttributeMask', 'retainedContactServiceAttributeMask', 'checkResultReaperFrequency', 'maxCheckResultReaperTime', 'checkResultPath', 'maxCheckResultFileAge', 'translatePassiveHostChecks', 'passiveHostChecksAreSoft', 'enablePredictiveHostDependencyChecks', 'enablePredictiveServiceDependencyChecks', 'cachedHostCheckHorizon', 'cachedServiceCheckHorizon', 'useLargeInstallationTweaks', 'freeChildProcessMemory', 'childProcessesForkTwice', 'enableEnvironmentMacros', 'additionalFreshnessLatency', 'enableEmbeddedPerl', 'useEmbeddedPerlImplicitly', 'p1File', 'useTimezone', 'debugFile', 'debugLevel', 'debugVerbosity', 'maxDebugFileSize', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::CONFIG_DIR, self::LOG_FILE, self::TEMP_FILE, self::STATUS_FILE, self::STATUS_UPDATE_INTERVAL, self::NAGIOS_USER, self::NAGIOS_GROUP, self::ENABLE_NOTIFICATIONS, self::EXECUTE_SERVICE_CHECKS, self::ACCEPT_PASSIVE_SERVICE_CHECKS, self::ENABLE_EVENT_HANDLERS, self::LOG_ROTATION_METHOD, self::LOG_ARCHIVE_PATH, self::CHECK_EXTERNAL_COMMANDS, self::COMMAND_CHECK_INTERVAL, self::COMMAND_FILE, self::LOCK_FILE, self::RETAIN_STATE_INFORMATION, self::STATE_RETENTION_FILE, self::RETENTION_UPDATE_INTERVAL, self::USE_RETAINED_PROGRAM_STATE, self::USE_SYSLOG, self::LOG_NOTIFICATIONS, self::LOG_SERVICE_RETRIES, self::LOG_HOST_RETRIES, self::LOG_EVENT_HANDLERS, self::LOG_INITIAL_STATES, self::LOG_EXTERNAL_COMMANDS, self::LOG_PASSIVE_CHECKS, self::GLOBAL_HOST_EVENT_HANDLER, self::GLOBAL_SERVICE_EVENT_HANDLER, self::EXTERNAL_COMMAND_BUFFER_SLOTS, self::SLEEP_TIME, self::SERVICE_INTERLEAVE_FACTOR, self::MAX_CONCURRENT_CHECKS, self::SERVICE_REAPER_FREQUENCY, self::INTERVAL_LENGTH, self::USE_AGGRESSIVE_HOST_CHECKING, self::ENABLE_FLAP_DETECTION, self::LOW_SERVICE_FLAP_THRESHOLD, self::HIGH_SERVICE_FLAP_THRESHOLD, self::LOW_HOST_FLAP_THRESHOLD, self::HIGH_HOST_FLAP_THRESHOLD, self::SOFT_STATE_DEPENDENCIES, self::SERVICE_CHECK_TIMEOUT, self::HOST_CHECK_TIMEOUT, self::EVENT_HANDLER_TIMEOUT, self::NOTIFICATION_TIMEOUT, self::OCSP_TIMEOUT, self::OHCP_TIMEOUT, self::PERFDATA_TIMEOUT, self::OBSESS_OVER_SERVICES, self::OCSP_COMMAND, self::PROCESS_PERFORMANCE_DATA, self::CHECK_FOR_ORPHANED_SERVICES, self::CHECK_SERVICE_FRESHNESS, self::FRESHNESS_CHECK_INTERVAL, self::DATE_FORMAT, self::ILLEGAL_OBJECT_NAME_CHARS, self::ILLEGAL_MACRO_OUTPUT_CHARS, self::ADMIN_EMAIL, self::ADMIN_PAGER, self::EXECUTE_HOST_CHECKS, self::SERVICE_INTER_CHECK_DELAY_METHOD, self::USE_RETAINED_SCHEDULING_INFO, self::ACCEPT_PASSIVE_HOST_CHECKS, self::MAX_SERVICE_CHECK_SPREAD, self::HOST_INTER_CHECK_DELAY_METHOD, self::MAX_HOST_CHECK_SPREAD, self::AUTO_RESCHEDULE_CHECKS, self::AUTO_RESCHEDULING_INTERVAL, self::AUTO_RESCHEDULING_WINDOW, self::OCHP_TIMEOUT, self::OBSESS_OVER_HOSTS, self::OCHP_COMMAND, self::CHECK_HOST_FRESHNESS, self::HOST_FRESHNESS_CHECK_INTERVAL, self::SERVICE_FRESHNESS_CHECK_INTERVAL, self::USE_REGEXP_MATCHING, self::USE_TRUE_REGEXP_MATCHING, self::EVENT_BROKER_OPTIONS, self::DAEMON_DUMPS_CORE, self::HOST_PERFDATA_COMMAND, self::SERVICE_PERFDATA_COMMAND, self::HOST_PERFDATA_FILE, self::HOST_PERFDATA_FILE_TEMPLATE, self::SERVICE_PERFDATA_FILE, self::SERVICE_PERFDATA_FILE_TEMPLATE, self::HOST_PERFDATA_FILE_MODE, self::SERVICE_PERFDATA_FILE_MODE, self::HOST_PERFDATA_FILE_PROCESSING_COMMAND, self::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND, self::HOST_PERFDATA_FILE_PROCESSING_INTERVAL, self::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL, self::OBJECT_CACHE_FILE, self::PRECACHED_OBJECT_FILE, self::RETAINED_HOST_ATTRIBUTE_MASK, self::RETAINED_SERVICE_ATTRIBUTE_MASK, self::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK, self::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK, self::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK, self::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK, self::CHECK_RESULT_REAPER_FREQUENCY, self::MAX_CHECK_RESULT_REAPER_TIME, self::CHECK_RESULT_PATH, self::MAX_CHECK_RESULT_FILE_AGE, self::TRANSLATE_PASSIVE_HOST_CHECKS, self::PASSIVE_HOST_CHECKS_ARE_SOFT, self::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS, self::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS, self::CACHED_HOST_CHECK_HORIZON, self::CACHED_SERVICE_CHECK_HORIZON, self::USE_LARGE_INSTALLATION_TWEAKS, self::FREE_CHILD_PROCESS_MEMORY, self::CHILD_PROCESSES_FORK_TWICE, self::ENABLE_ENVIRONMENT_MACROS, self::ADDITIONAL_FRESHNESS_LATENCY, self::ENABLE_EMBEDDED_PERL, self::USE_EMBEDDED_PERL_IMPLICITLY, self::P1_FILE, self::USE_TIMEZONE, self::DEBUG_FILE, self::DEBUG_LEVEL, self::DEBUG_VERBOSITY, self::MAX_DEBUG_FILE_SIZE, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'config_dir', 'log_file', 'temp_file', 'status_file', 'status_update_interval', 'nagios_user', 'nagios_group', 'enable_notifications', 'execute_service_checks', 'accept_passive_service_checks', 'enable_event_handlers', 'log_rotation_method', 'log_archive_path', 'check_external_commands', 'command_check_interval', 'command_file', 'lock_file', 'retain_state_information', 'state_retention_file', 'retention_update_interval', 'use_retained_program_state', 'use_syslog', 'log_notifications', 'log_service_retries', 'log_host_retries', 'log_event_handlers', 'log_initial_states', 'log_external_commands', 'log_passive_checks', 'global_host_event_handler', 'global_service_event_handler', 'external_command_buffer_slots', 'sleep_time', 'service_interleave_factor', 'max_concurrent_checks', 'service_reaper_frequency', 'interval_length', 'use_aggressive_host_checking', 'enable_flap_detection', 'low_service_flap_threshold', 'high_service_flap_threshold', 'low_host_flap_threshold', 'high_host_flap_threshold', 'soft_state_dependencies', 'service_check_timeout', 'host_check_timeout', 'event_handler_timeout', 'notification_timeout', 'ocsp_timeout', 'ohcp_timeout', 'perfdata_timeout', 'obsess_over_services', 'ocsp_command', 'process_performance_data', 'check_for_orphaned_services', 'check_service_freshness', 'freshness_check_interval', 'date_format', 'illegal_object_name_chars', 'illegal_macro_output_chars', 'admin_email', 'admin_pager', 'execute_host_checks', 'service_inter_check_delay_method', 'use_retained_scheduling_info', 'accept_passive_host_checks', 'max_service_check_spread', 'host_inter_check_delay_method', 'max_host_check_spread', 'auto_reschedule_checks', 'auto_rescheduling_interval', 'auto_rescheduling_window', 'ochp_timeout', 'obsess_over_hosts', 'ochp_command', 'check_host_freshness', 'host_freshness_check_interval', 'service_freshness_check_interval', 'use_regexp_matching', 'use_true_regexp_matching', 'event_broker_options', 'daemon_dumps_core', 'host_perfdata_command', 'service_perfdata_command', 'host_perfdata_file', 'host_perfdata_file_template', 'service_perfdata_file', 'service_perfdata_file_template', 'host_perfdata_file_mode', 'service_perfdata_file_mode', 'host_perfdata_file_processing_command', 'service_perfdata_file_processing_command', 'host_perfdata_file_processing_interval', 'service_perfdata_file_processing_interval', 'object_cache_file', 'precached_object_file', 'retained_host_attribute_mask', 'retained_service_attribute_mask', 'retained_process_host_attribute_mask', 'retained_process_service_attribute_mask', 'retained_contact_host_attribute_mask', 'retained_contact_service_attribute_mask', 'check_result_reaper_frequency', 'max_check_result_reaper_time', 'check_result_path', 'max_check_result_file_age', 'translate_passive_host_checks', 'passive_host_checks_are_soft', 'enable_predictive_host_dependency_checks', 'enable_predictive_service_dependency_checks', 'cached_host_check_horizon', 'cached_service_check_horizon', 'use_large_installation_tweaks', 'free_child_process_memory', 'child_processes_fork_twice', 'enable_environment_macros', 'additional_freshness_latency', 'enable_embedded_perl', 'use_embedded_perl_implicitly', 'p1_file', 'use_timezone', 'debug_file', 'debug_level', 'debug_verbosity', 'max_debug_file_size', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'ConfigDir' => 1, 'LogFile' => 2, 'TempFile' => 3, 'StatusFile' => 4, 'StatusUpdateInterval' => 5, 'NagiosUser' => 6, 'NagiosGroup' => 7, 'EnableNotifications' => 8, 'ExecuteServiceChecks' => 9, 'AcceptPassiveServiceChecks' => 10, 'EnableEventHandlers' => 11, 'LogRotationMethod' => 12, 'LogArchivePath' => 13, 'CheckExternalCommands' => 14, 'CommandCheckInterval' => 15, 'CommandFile' => 16, 'LockFile' => 17, 'RetainStateInformation' => 18, 'StateRetentionFile' => 19, 'RetentionUpdateInterval' => 20, 'UseRetainedProgramState' => 21, 'UseSyslog' => 22, 'LogNotifications' => 23, 'LogServiceRetries' => 24, 'LogHostRetries' => 25, 'LogEventHandlers' => 26, 'LogInitialStates' => 27, 'LogExternalCommands' => 28, 'LogPassiveChecks' => 29, 'GlobalHostEventHandler' => 30, 'GlobalServiceEventHandler' => 31, 'ExternalCommandBufferSlots' => 32, 'SleepTime' => 33, 'ServiceInterleaveFactor' => 34, 'MaxConcurrentChecks' => 35, 'ServiceReaperFrequency' => 36, 'IntervalLength' => 37, 'UseAggressiveHostChecking' => 38, 'EnableFlapDetection' => 39, 'LowServiceFlapThreshold' => 40, 'HighServiceFlapThreshold' => 41, 'LowHostFlapThreshold' => 42, 'HighHostFlapThreshold' => 43, 'SoftStateDependencies' => 44, 'ServiceCheckTimeout' => 45, 'HostCheckTimeout' => 46, 'EventHandlerTimeout' => 47, 'NotificationTimeout' => 48, 'OcspTimeout' => 49, 'OhcpTimeout' => 50, 'PerfdataTimeout' => 51, 'ObsessOverServices' => 52, 'OcspCommand' => 53, 'ProcessPerformanceData' => 54, 'CheckForOrphanedServices' => 55, 'CheckServiceFreshness' => 56, 'FreshnessCheckInterval' => 57, 'DateFormat' => 58, 'IllegalObjectNameChars' => 59, 'IllegalMacroOutputChars' => 60, 'AdminEmail' => 61, 'AdminPager' => 62, 'ExecuteHostChecks' => 63, 'ServiceInterCheckDelayMethod' => 64, 'UseRetainedSchedulingInfo' => 65, 'AcceptPassiveHostChecks' => 66, 'MaxServiceCheckSpread' => 67, 'HostInterCheckDelayMethod' => 68, 'MaxHostCheckSpread' => 69, 'AutoRescheduleChecks' => 70, 'AutoReschedulingInterval' => 71, 'AutoReschedulingWindow' => 72, 'OchpTimeout' => 73, 'ObsessOverHosts' => 74, 'OchpCommand' => 75, 'CheckHostFreshness' => 76, 'HostFreshnessCheckInterval' => 77, 'ServiceFreshnessCheckInterval' => 78, 'UseRegexpMatching' => 79, 'UseTrueRegexpMatching' => 80, 'EventBrokerOptions' => 81, 'DaemonDumpsCore' => 82, 'HostPerfdataCommand' => 83, 'ServicePerfdataCommand' => 84, 'HostPerfdataFile' => 85, 'HostPerfdataFileTemplate' => 86, 'ServicePerfdataFile' => 87, 'ServicePerfdataFileTemplate' => 88, 'HostPerfdataFileMode' => 89, 'ServicePerfdataFileMode' => 90, 'HostPerfdataFileProcessingCommand' => 91, 'ServicePerfdataFileProcessingCommand' => 92, 'HostPerfdataFileProcessingInterval' => 93, 'ServicePerfdataFileProcessingInterval' => 94, 'ObjectCacheFile' => 95, 'PrecachedObjectFile' => 96, 'RetainedHostAttributeMask' => 97, 'RetainedServiceAttributeMask' => 98, 'RetainedProcessHostAttributeMask' => 99, 'RetainedProcessServiceAttributeMask' => 100, 'RetainedContactHostAttributeMask' => 101, 'RetainedContactServiceAttributeMask' => 102, 'CheckResultReaperFrequency' => 103, 'MaxCheckResultReaperTime' => 104, 'CheckResultPath' => 105, 'MaxCheckResultFileAge' => 106, 'TranslatePassiveHostChecks' => 107, 'PassiveHostChecksAreSoft' => 108, 'EnablePredictiveHostDependencyChecks' => 109, 'EnablePredictiveServiceDependencyChecks' => 110, 'CachedHostCheckHorizon' => 111, 'CachedServiceCheckHorizon' => 112, 'UseLargeInstallationTweaks' => 113, 'FreeChildProcessMemory' => 114, 'ChildProcessesForkTwice' => 115, 'EnableEnvironmentMacros' => 116, 'AdditionalFreshnessLatency' => 117, 'EnableEmbeddedPerl' => 118, 'UseEmbeddedPerlImplicitly' => 119, 'P1File' => 120, 'UseTimezone' => 121, 'DebugFile' => 122, 'DebugLevel' => 123, 'DebugVerbosity' => 124, 'MaxDebugFileSize' => 125, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'configDir' => 1, 'logFile' => 2, 'tempFile' => 3, 'statusFile' => 4, 'statusUpdateInterval' => 5, 'nagiosUser' => 6, 'nagiosGroup' => 7, 'enableNotifications' => 8, 'executeServiceChecks' => 9, 'acceptPassiveServiceChecks' => 10, 'enableEventHandlers' => 11, 'logRotationMethod' => 12, 'logArchivePath' => 13, 'checkExternalCommands' => 14, 'commandCheckInterval' => 15, 'commandFile' => 16, 'lockFile' => 17, 'retainStateInformation' => 18, 'stateRetentionFile' => 19, 'retentionUpdateInterval' => 20, 'useRetainedProgramState' => 21, 'useSyslog' => 22, 'logNotifications' => 23, 'logServiceRetries' => 24, 'logHostRetries' => 25, 'logEventHandlers' => 26, 'logInitialStates' => 27, 'logExternalCommands' => 28, 'logPassiveChecks' => 29, 'globalHostEventHandler' => 30, 'globalServiceEventHandler' => 31, 'externalCommandBufferSlots' => 32, 'sleepTime' => 33, 'serviceInterleaveFactor' => 34, 'maxConcurrentChecks' => 35, 'serviceReaperFrequency' => 36, 'intervalLength' => 37, 'useAggressiveHostChecking' => 38, 'enableFlapDetection' => 39, 'lowServiceFlapThreshold' => 40, 'highServiceFlapThreshold' => 41, 'lowHostFlapThreshold' => 42, 'highHostFlapThreshold' => 43, 'softStateDependencies' => 44, 'serviceCheckTimeout' => 45, 'hostCheckTimeout' => 46, 'eventHandlerTimeout' => 47, 'notificationTimeout' => 48, 'ocspTimeout' => 49, 'ohcpTimeout' => 50, 'perfdataTimeout' => 51, 'obsessOverServices' => 52, 'ocspCommand' => 53, 'processPerformanceData' => 54, 'checkForOrphanedServices' => 55, 'checkServiceFreshness' => 56, 'freshnessCheckInterval' => 57, 'dateFormat' => 58, 'illegalObjectNameChars' => 59, 'illegalMacroOutputChars' => 60, 'adminEmail' => 61, 'adminPager' => 62, 'executeHostChecks' => 63, 'serviceInterCheckDelayMethod' => 64, 'useRetainedSchedulingInfo' => 65, 'acceptPassiveHostChecks' => 66, 'maxServiceCheckSpread' => 67, 'hostInterCheckDelayMethod' => 68, 'maxHostCheckSpread' => 69, 'autoRescheduleChecks' => 70, 'autoReschedulingInterval' => 71, 'autoReschedulingWindow' => 72, 'ochpTimeout' => 73, 'obsessOverHosts' => 74, 'ochpCommand' => 75, 'checkHostFreshness' => 76, 'hostFreshnessCheckInterval' => 77, 'serviceFreshnessCheckInterval' => 78, 'useRegexpMatching' => 79, 'useTrueRegexpMatching' => 80, 'eventBrokerOptions' => 81, 'daemonDumpsCore' => 82, 'hostPerfdataCommand' => 83, 'servicePerfdataCommand' => 84, 'hostPerfdataFile' => 85, 'hostPerfdataFileTemplate' => 86, 'servicePerfdataFile' => 87, 'servicePerfdataFileTemplate' => 88, 'hostPerfdataFileMode' => 89, 'servicePerfdataFileMode' => 90, 'hostPerfdataFileProcessingCommand' => 91, 'servicePerfdataFileProcessingCommand' => 92, 'hostPerfdataFileProcessingInterval' => 93, 'servicePerfdataFileProcessingInterval' => 94, 'objectCacheFile' => 95, 'precachedObjectFile' => 96, 'retainedHostAttributeMask' => 97, 'retainedServiceAttributeMask' => 98, 'retainedProcessHostAttributeMask' => 99, 'retainedProcessServiceAttributeMask' => 100, 'retainedContactHostAttributeMask' => 101, 'retainedContactServiceAttributeMask' => 102, 'checkResultReaperFrequency' => 103, 'maxCheckResultReaperTime' => 104, 'checkResultPath' => 105, 'maxCheckResultFileAge' => 106, 'translatePassiveHostChecks' => 107, 'passiveHostChecksAreSoft' => 108, 'enablePredictiveHostDependencyChecks' => 109, 'enablePredictiveServiceDependencyChecks' => 110, 'cachedHostCheckHorizon' => 111, 'cachedServiceCheckHorizon' => 112, 'useLargeInstallationTweaks' => 113, 'freeChildProcessMemory' => 114, 'childProcessesForkTwice' => 115, 'enableEnvironmentMacros' => 116, 'additionalFreshnessLatency' => 117, 'enableEmbeddedPerl' => 118, 'useEmbeddedPerlImplicitly' => 119, 'p1File' => 120, 'useTimezone' => 121, 'debugFile' => 122, 'debugLevel' => 123, 'debugVerbosity' => 124, 'maxDebugFileSize' => 125, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::CONFIG_DIR => 1, self::LOG_FILE => 2, self::TEMP_FILE => 3, self::STATUS_FILE => 4, self::STATUS_UPDATE_INTERVAL => 5, self::NAGIOS_USER => 6, self::NAGIOS_GROUP => 7, self::ENABLE_NOTIFICATIONS => 8, self::EXECUTE_SERVICE_CHECKS => 9, self::ACCEPT_PASSIVE_SERVICE_CHECKS => 10, self::ENABLE_EVENT_HANDLERS => 11, self::LOG_ROTATION_METHOD => 12, self::LOG_ARCHIVE_PATH => 13, self::CHECK_EXTERNAL_COMMANDS => 14, self::COMMAND_CHECK_INTERVAL => 15, self::COMMAND_FILE => 16, self::LOCK_FILE => 17, self::RETAIN_STATE_INFORMATION => 18, self::STATE_RETENTION_FILE => 19, self::RETENTION_UPDATE_INTERVAL => 20, self::USE_RETAINED_PROGRAM_STATE => 21, self::USE_SYSLOG => 22, self::LOG_NOTIFICATIONS => 23, self::LOG_SERVICE_RETRIES => 24, self::LOG_HOST_RETRIES => 25, self::LOG_EVENT_HANDLERS => 26, self::LOG_INITIAL_STATES => 27, self::LOG_EXTERNAL_COMMANDS => 28, self::LOG_PASSIVE_CHECKS => 29, self::GLOBAL_HOST_EVENT_HANDLER => 30, self::GLOBAL_SERVICE_EVENT_HANDLER => 31, self::EXTERNAL_COMMAND_BUFFER_SLOTS => 32, self::SLEEP_TIME => 33, self::SERVICE_INTERLEAVE_FACTOR => 34, self::MAX_CONCURRENT_CHECKS => 35, self::SERVICE_REAPER_FREQUENCY => 36, self::INTERVAL_LENGTH => 37, self::USE_AGGRESSIVE_HOST_CHECKING => 38, self::ENABLE_FLAP_DETECTION => 39, self::LOW_SERVICE_FLAP_THRESHOLD => 40, self::HIGH_SERVICE_FLAP_THRESHOLD => 41, self::LOW_HOST_FLAP_THRESHOLD => 42, self::HIGH_HOST_FLAP_THRESHOLD => 43, self::SOFT_STATE_DEPENDENCIES => 44, self::SERVICE_CHECK_TIMEOUT => 45, self::HOST_CHECK_TIMEOUT => 46, self::EVENT_HANDLER_TIMEOUT => 47, self::NOTIFICATION_TIMEOUT => 48, self::OCSP_TIMEOUT => 49, self::OHCP_TIMEOUT => 50, self::PERFDATA_TIMEOUT => 51, self::OBSESS_OVER_SERVICES => 52, self::OCSP_COMMAND => 53, self::PROCESS_PERFORMANCE_DATA => 54, self::CHECK_FOR_ORPHANED_SERVICES => 55, self::CHECK_SERVICE_FRESHNESS => 56, self::FRESHNESS_CHECK_INTERVAL => 57, self::DATE_FORMAT => 58, self::ILLEGAL_OBJECT_NAME_CHARS => 59, self::ILLEGAL_MACRO_OUTPUT_CHARS => 60, self::ADMIN_EMAIL => 61, self::ADMIN_PAGER => 62, self::EXECUTE_HOST_CHECKS => 63, self::SERVICE_INTER_CHECK_DELAY_METHOD => 64, self::USE_RETAINED_SCHEDULING_INFO => 65, self::ACCEPT_PASSIVE_HOST_CHECKS => 66, self::MAX_SERVICE_CHECK_SPREAD => 67, self::HOST_INTER_CHECK_DELAY_METHOD => 68, self::MAX_HOST_CHECK_SPREAD => 69, self::AUTO_RESCHEDULE_CHECKS => 70, self::AUTO_RESCHEDULING_INTERVAL => 71, self::AUTO_RESCHEDULING_WINDOW => 72, self::OCHP_TIMEOUT => 73, self::OBSESS_OVER_HOSTS => 74, self::OCHP_COMMAND => 75, self::CHECK_HOST_FRESHNESS => 76, self::HOST_FRESHNESS_CHECK_INTERVAL => 77, self::SERVICE_FRESHNESS_CHECK_INTERVAL => 78, self::USE_REGEXP_MATCHING => 79, self::USE_TRUE_REGEXP_MATCHING => 80, self::EVENT_BROKER_OPTIONS => 81, self::DAEMON_DUMPS_CORE => 82, self::HOST_PERFDATA_COMMAND => 83, self::SERVICE_PERFDATA_COMMAND => 84, self::HOST_PERFDATA_FILE => 85, self::HOST_PERFDATA_FILE_TEMPLATE => 86, self::SERVICE_PERFDATA_FILE => 87, self::SERVICE_PERFDATA_FILE_TEMPLATE => 88, self::HOST_PERFDATA_FILE_MODE => 89, self::SERVICE_PERFDATA_FILE_MODE => 90, self::HOST_PERFDATA_FILE_PROCESSING_COMMAND => 91, self::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND => 92, self::HOST_PERFDATA_FILE_PROCESSING_INTERVAL => 93, self::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL => 94, self::OBJECT_CACHE_FILE => 95, self::PRECACHED_OBJECT_FILE => 96, self::RETAINED_HOST_ATTRIBUTE_MASK => 97, self::RETAINED_SERVICE_ATTRIBUTE_MASK => 98, self::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK => 99, self::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK => 100, self::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK => 101, self::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK => 102, self::CHECK_RESULT_REAPER_FREQUENCY => 103, self::MAX_CHECK_RESULT_REAPER_TIME => 104, self::CHECK_RESULT_PATH => 105, self::MAX_CHECK_RESULT_FILE_AGE => 106, self::TRANSLATE_PASSIVE_HOST_CHECKS => 107, self::PASSIVE_HOST_CHECKS_ARE_SOFT => 108, self::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS => 109, self::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS => 110, self::CACHED_HOST_CHECK_HORIZON => 111, self::CACHED_SERVICE_CHECK_HORIZON => 112, self::USE_LARGE_INSTALLATION_TWEAKS => 113, self::FREE_CHILD_PROCESS_MEMORY => 114, self::CHILD_PROCESSES_FORK_TWICE => 115, self::ENABLE_ENVIRONMENT_MACROS => 116, self::ADDITIONAL_FRESHNESS_LATENCY => 117, self::ENABLE_EMBEDDED_PERL => 118, self::USE_EMBEDDED_PERL_IMPLICITLY => 119, self::P1_FILE => 120, self::USE_TIMEZONE => 121, self::DEBUG_FILE => 122, self::DEBUG_LEVEL => 123, self::DEBUG_VERBOSITY => 124, self::MAX_DEBUG_FILE_SIZE => 125, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'config_dir' => 1, 'log_file' => 2, 'temp_file' => 3, 'status_file' => 4, 'status_update_interval' => 5, 'nagios_user' => 6, 'nagios_group' => 7, 'enable_notifications' => 8, 'execute_service_checks' => 9, 'accept_passive_service_checks' => 10, 'enable_event_handlers' => 11, 'log_rotation_method' => 12, 'log_archive_path' => 13, 'check_external_commands' => 14, 'command_check_interval' => 15, 'command_file' => 16, 'lock_file' => 17, 'retain_state_information' => 18, 'state_retention_file' => 19, 'retention_update_interval' => 20, 'use_retained_program_state' => 21, 'use_syslog' => 22, 'log_notifications' => 23, 'log_service_retries' => 24, 'log_host_retries' => 25, 'log_event_handlers' => 26, 'log_initial_states' => 27, 'log_external_commands' => 28, 'log_passive_checks' => 29, 'global_host_event_handler' => 30, 'global_service_event_handler' => 31, 'external_command_buffer_slots' => 32, 'sleep_time' => 33, 'service_interleave_factor' => 34, 'max_concurrent_checks' => 35, 'service_reaper_frequency' => 36, 'interval_length' => 37, 'use_aggressive_host_checking' => 38, 'enable_flap_detection' => 39, 'low_service_flap_threshold' => 40, 'high_service_flap_threshold' => 41, 'low_host_flap_threshold' => 42, 'high_host_flap_threshold' => 43, 'soft_state_dependencies' => 44, 'service_check_timeout' => 45, 'host_check_timeout' => 46, 'event_handler_timeout' => 47, 'notification_timeout' => 48, 'ocsp_timeout' => 49, 'ohcp_timeout' => 50, 'perfdata_timeout' => 51, 'obsess_over_services' => 52, 'ocsp_command' => 53, 'process_performance_data' => 54, 'check_for_orphaned_services' => 55, 'check_service_freshness' => 56, 'freshness_check_interval' => 57, 'date_format' => 58, 'illegal_object_name_chars' => 59, 'illegal_macro_output_chars' => 60, 'admin_email' => 61, 'admin_pager' => 62, 'execute_host_checks' => 63, 'service_inter_check_delay_method' => 64, 'use_retained_scheduling_info' => 65, 'accept_passive_host_checks' => 66, 'max_service_check_spread' => 67, 'host_inter_check_delay_method' => 68, 'max_host_check_spread' => 69, 'auto_reschedule_checks' => 70, 'auto_rescheduling_interval' => 71, 'auto_rescheduling_window' => 72, 'ochp_timeout' => 73, 'obsess_over_hosts' => 74, 'ochp_command' => 75, 'check_host_freshness' => 76, 'host_freshness_check_interval' => 77, 'service_freshness_check_interval' => 78, 'use_regexp_matching' => 79, 'use_true_regexp_matching' => 80, 'event_broker_options' => 81, 'daemon_dumps_core' => 82, 'host_perfdata_command' => 83, 'service_perfdata_command' => 84, 'host_perfdata_file' => 85, 'host_perfdata_file_template' => 86, 'service_perfdata_file' => 87, 'service_perfdata_file_template' => 88, 'host_perfdata_file_mode' => 89, 'service_perfdata_file_mode' => 90, 'host_perfdata_file_processing_command' => 91, 'service_perfdata_file_processing_command' => 92, 'host_perfdata_file_processing_interval' => 93, 'service_perfdata_file_processing_interval' => 94, 'object_cache_file' => 95, 'precached_object_file' => 96, 'retained_host_attribute_mask' => 97, 'retained_service_attribute_mask' => 98, 'retained_process_host_attribute_mask' => 99, 'retained_process_service_attribute_mask' => 100, 'retained_contact_host_attribute_mask' => 101, 'retained_contact_service_attribute_mask' => 102, 'check_result_reaper_frequency' => 103, 'max_check_result_reaper_time' => 104, 'check_result_path' => 105, 'max_check_result_file_age' => 106, 'translate_passive_host_checks' => 107, 'passive_host_checks_are_soft' => 108, 'enable_predictive_host_dependency_checks' => 109, 'enable_predictive_service_dependency_checks' => 110, 'cached_host_check_horizon' => 111, 'cached_service_check_horizon' => 112, 'use_large_installation_tweaks' => 113, 'free_child_process_memory' => 114, 'child_processes_fork_twice' => 115, 'enable_environment_macros' => 116, 'additional_freshness_latency' => 117, 'enable_embedded_perl' => 118, 'use_embedded_perl_implicitly' => 119, 'p1_file' => 120, 'use_timezone' => 121, 'debug_file' => 122, 'debug_level' => 123, 'debug_verbosity' => 124, 'max_debug_file_size' => 125, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, 51, 52, 53, 54, 55, 56, 57, 58, 59, 60, 61, 62, 63, 64, 65, 66, 67, 68, 69, 70, 71, 72, 73, 74, 75, 76, 77, 78, 79, 80, 81, 82, 83, 84, 85, 86, 87, 88, 89, 90, 91, 92, 93, 94, 95, 96, 97, 98, 99, 100, 101, 102, 103, 104, 105, 106, 107, 108, 109, 110, 111, 112, 113, 114, 115, 116, 117, 118, 119, 120, 121, 122, 123, 124, 125, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosMainConfigurationMapBuilder();
		}
		return self::$mapBuilder;
	}
	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. NagiosMainConfigurationPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosMainConfigurationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ID);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CONFIG_DIR);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::TEMP_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::STATUS_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::STATUS_UPDATE_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::NAGIOS_USER);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::NAGIOS_GROUP);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_NOTIFICATIONS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::EXECUTE_SERVICE_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_SERVICE_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_EVENT_HANDLERS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_ROTATION_METHOD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_ARCHIVE_PATH);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_EXTERNAL_COMMANDS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::COMMAND_CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::COMMAND_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOCK_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAIN_STATE_INFORMATION);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::STATE_RETENTION_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETENTION_UPDATE_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_RETAINED_PROGRAM_STATE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_SYSLOG);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_NOTIFICATIONS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_SERVICE_RETRIES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_HOST_RETRIES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_EVENT_HANDLERS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_INITIAL_STATES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_EXTERNAL_COMMANDS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOG_PASSIVE_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::EXTERNAL_COMMAND_BUFFER_SLOTS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SLEEP_TIME);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_INTERLEAVE_FACTOR);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_CONCURRENT_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_REAPER_FREQUENCY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::INTERVAL_LENGTH);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_AGGRESSIVE_HOST_CHECKING);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_FLAP_DETECTION);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOW_SERVICE_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HIGH_SERVICE_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::LOW_HOST_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HIGH_HOST_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SOFT_STATE_DEPENDENCIES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_CHECK_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_CHECK_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::EVENT_HANDLER_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::NOTIFICATION_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OCSP_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OHCP_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::PERFDATA_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OBSESS_OVER_SERVICES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OCSP_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::PROCESS_PERFORMANCE_DATA);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_FOR_ORPHANED_SERVICES);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_SERVICE_FRESHNESS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::FRESHNESS_CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::DATE_FORMAT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ILLEGAL_OBJECT_NAME_CHARS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ILLEGAL_MACRO_OUTPUT_CHARS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ADMIN_EMAIL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ADMIN_PAGER);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::EXECUTE_HOST_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_INTER_CHECK_DELAY_METHOD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_RETAINED_SCHEDULING_INFO);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ACCEPT_PASSIVE_HOST_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_SERVICE_CHECK_SPREAD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_INTER_CHECK_DELAY_METHOD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_HOST_CHECK_SPREAD);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::AUTO_RESCHEDULE_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::AUTO_RESCHEDULING_WINDOW);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OCHP_TIMEOUT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OBSESS_OVER_HOSTS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OCHP_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_HOST_FRESHNESS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_FRESHNESS_CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_FRESHNESS_CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_REGEXP_MATCHING);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_TRUE_REGEXP_MATCHING);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::EVENT_BROKER_OPTIONS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::DAEMON_DUMPS_CORE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_TEMPLATE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_TEMPLATE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_MODE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_MODE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_INTERVAL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::OBJECT_CACHE_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::PRECACHED_OBJECT_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_HOST_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_SERVICE_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_PROCESS_HOST_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_PROCESS_SERVICE_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_CONTACT_HOST_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::RETAINED_CONTACT_SERVICE_ATTRIBUTE_MASK);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_RESULT_REAPER_FREQUENCY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_REAPER_TIME);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHECK_RESULT_PATH);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_CHECK_RESULT_FILE_AGE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::TRANSLATE_PASSIVE_HOST_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::PASSIVE_HOST_CHECKS_ARE_SOFT);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_HOST_DEPENDENCY_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_PREDICTIVE_SERVICE_DEPENDENCY_CHECKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CACHED_HOST_CHECK_HORIZON);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CACHED_SERVICE_CHECK_HORIZON);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_LARGE_INSTALLATION_TWEAKS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::FREE_CHILD_PROCESS_MEMORY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::CHILD_PROCESSES_FORK_TWICE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_ENVIRONMENT_MACROS);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ADDITIONAL_FRESHNESS_LATENCY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::ENABLE_EMBEDDED_PERL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_EMBEDDED_PERL_IMPLICITLY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::P1_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::USE_TIMEZONE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::DEBUG_FILE);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::DEBUG_LEVEL);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::DEBUG_VERBOSITY);

		$criteria->addSelectColumn(NagiosMainConfigurationPeer::MAX_DEBUG_FILE_SIZE);

	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     NagiosMainConfiguration
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosMainConfigurationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return NagiosMainConfigurationPeer::populateObjects(NagiosMainConfigurationPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      NagiosMainConfiguration $value A NagiosMainConfiguration object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosMainConfiguration $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A NagiosMainConfiguration object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosMainConfiguration) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosMainConfiguration object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     NagiosMainConfiguration Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 0] === null) {
			return null;
		}
		return (string) $row[$startcol + 0];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = NagiosMainConfigurationPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosMainConfigurationPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosMainConfigurationPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByOcspCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByOcspCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::OCSP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByOchpCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByOchpCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::OCHP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByHostPerfdataCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByHostPerfdataCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByServicePerfdataCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByServicePerfdataCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByHostPerfdataFileProcessingCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByHostPerfdataFileProcessingCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByServicePerfdataFileProcessingCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByServicePerfdataFileProcessingCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByGlobalServiceEventHandler table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByGlobalServiceEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByGlobalHostEventHandler table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByGlobalHostEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByOcspCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::OCSP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByOcspCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByOchpCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::OCHP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByOchpCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByHostPerfdataCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByHostPerfdataCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByServicePerfdataCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByServicePerfdataCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByHostPerfdataFileProcessingCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByServicePerfdataFileProcessingCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByGlobalServiceEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByGlobalServiceEventHandler($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByGlobalHostEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosMainConfiguration) to $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByGlobalHostEventHandler($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAll(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosMainConfigurationPeer::OCSP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::OCHP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}

	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol7 = $startcol6 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol8 = $startcol7 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol9 = $startcol8 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol10 = $startcol9 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		$c->addJoin(array(NagiosMainConfigurationPeer::OCSP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::OCHP_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::HOST_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::SERVICE_PERFDATA_FILE_PROCESSING_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_SERVICE_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosMainConfigurationPeer::GLOBAL_HOST_EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined NagiosCommand rows

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosMainConfigurationRelatedByOcspCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key3 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = NagiosCommandPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosCommandPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosMainConfigurationRelatedByOchpCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key4 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosCommandPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosCommandPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj4 (NagiosCommand)
				$obj4->addNagiosMainConfigurationRelatedByHostPerfdataCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosMainConfigurationRelatedByServicePerfdataCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key6 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = NagiosCommandPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosCommandPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj6 (NagiosCommand)
				$obj6->addNagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key7 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = NagiosCommandPeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					NagiosCommandPeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj7 (NagiosCommand)
				$obj7->addNagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key8 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol8);
			if ($key8 !== null) {
				$obj8 = NagiosCommandPeer::getInstanceFromPool($key8);
				if (!$obj8) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					NagiosCommandPeer::addInstanceToPool($obj8, $key8);
				} // if obj8 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj8 (NagiosCommand)
				$obj8->addNagiosMainConfigurationRelatedByGlobalServiceEventHandler($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key9 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol9);
			if ($key9 !== null) {
				$obj9 = NagiosCommandPeer::getInstanceFromPool($key9);
				if (!$obj9) {

					$omClass = NagiosCommandPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj9 = new $cls();
					$obj9->hydrate($row, $startcol9);
					NagiosCommandPeer::addInstanceToPool($obj9, $key9);
				} // if obj9 loaded

				// Add the $obj1 (NagiosMainConfiguration) to the collection in $obj9 (NagiosCommand)
				$obj9->addNagiosMainConfigurationRelatedByGlobalHostEventHandler($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByOcspCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByOcspCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByOchpCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByOchpCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByHostPerfdataCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByHostPerfdataCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByServicePerfdataCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByServicePerfdataCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByHostPerfdataFileProcessingCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByHostPerfdataFileProcessingCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByServicePerfdataFileProcessingCommand table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByServicePerfdataFileProcessingCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByGlobalServiceEventHandler table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByGlobalServiceEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByGlobalHostEventHandler table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByGlobalHostEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosMainConfigurationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosMainConfigurationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByOcspCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByOcspCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByOchpCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByOchpCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByHostPerfdataCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByHostPerfdataCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByServicePerfdataCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByServicePerfdataCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByHostPerfdataFileProcessingCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByHostPerfdataFileProcessingCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByServicePerfdataFileProcessingCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByServicePerfdataFileProcessingCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByGlobalServiceEventHandler.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByGlobalServiceEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosMainConfiguration objects pre-filled with all related objects except NagiosCommandRelatedByGlobalHostEventHandler.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosMainConfiguration objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByGlobalHostEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosMainConfigurationPeer::addSelectColumns($c);
		$startcol2 = (NagiosMainConfigurationPeer::NUM_COLUMNS - NagiosMainConfigurationPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosMainConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosMainConfigurationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosMainConfigurationPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosMainConfigurationPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * This uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass()
	{
		return NagiosMainConfigurationPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosMainConfiguration or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosMainConfiguration object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosMainConfiguration object
		}

		if ($criteria->containsKey(NagiosMainConfigurationPeer::ID) && $criteria->keyContainsValue(NagiosMainConfigurationPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosMainConfigurationPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a NagiosMainConfiguration or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosMainConfiguration object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosMainConfigurationPeer::ID);
			$selectCriteria->add(NagiosMainConfigurationPeer::ID, $criteria->remove(NagiosMainConfigurationPeer::ID), $comparison);

		} else { // $values is NagiosMainConfiguration object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_main_configuration table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(NagiosMainConfigurationPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosMainConfiguration or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosMainConfiguration object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosMainConfigurationPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosMainConfiguration) {
			// invalidate the cache for this single object
			NagiosMainConfigurationPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosMainConfigurationPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosMainConfigurationPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given NagiosMainConfiguration object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosMainConfiguration $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosMainConfiguration $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosMainConfigurationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosMainConfigurationPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(NagiosMainConfigurationPeer::DATABASE_NAME, NagiosMainConfigurationPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosMainConfiguration
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosMainConfigurationPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosMainConfigurationPeer::DATABASE_NAME);
		$criteria->add(NagiosMainConfigurationPeer::ID, $pk);

		$v = NagiosMainConfigurationPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosMainConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosMainConfigurationPeer::DATABASE_NAME);
			$criteria->add(NagiosMainConfigurationPeer::ID, $pks, Criteria::IN);
			$objs = NagiosMainConfigurationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosMainConfigurationPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosMainConfigurationPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosMainConfigurationPeer class:
//
// Propel::getDatabaseMap(NagiosMainConfigurationPeer::DATABASE_NAME)->addTableBuilder(NagiosMainConfigurationPeer::TABLE_NAME, NagiosMainConfigurationPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosMainConfigurationPeer::DATABASE_NAME)->addTableBuilder(BaseNagiosMainConfigurationPeer::TABLE_NAME, BaseNagiosMainConfigurationPeer::getMapBuilder());

