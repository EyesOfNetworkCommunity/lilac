<?php


/**
 * Base static class for performing query and update operations on the 'nagios_service' table.
 *
 * Nagios Service
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServicePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_service';

	/** the related Propel class for this table */
	const OM_CLASS = 'NagiosService';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosService';

	/** the related TableMap class for this table */
	const TM_CLASS = 'NagiosServiceTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 51;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 51;

	/** the column name for the ID field */
	const ID = 'nagios_service.ID';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'nagios_service.DESCRIPTION';

	/** the column name for the DISPLAY_NAME field */
	const DISPLAY_NAME = 'nagios_service.DISPLAY_NAME';

	/** the column name for the HOST field */
	const HOST = 'nagios_service.HOST';

	/** the column name for the HOST_TEMPLATE field */
	const HOST_TEMPLATE = 'nagios_service.HOST_TEMPLATE';

	/** the column name for the HOSTGROUP field */
	const HOSTGROUP = 'nagios_service.HOSTGROUP';

	/** the column name for the INITIAL_STATE field */
	const INITIAL_STATE = 'nagios_service.INITIAL_STATE';

	/** the column name for the IS_VOLATILE field */
	const IS_VOLATILE = 'nagios_service.IS_VOLATILE';

	/** the column name for the CHECK_COMMAND field */
	const CHECK_COMMAND = 'nagios_service.CHECK_COMMAND';

	/** the column name for the MAXIMUM_CHECK_ATTEMPTS field */
	const MAXIMUM_CHECK_ATTEMPTS = 'nagios_service.MAXIMUM_CHECK_ATTEMPTS';

	/** the column name for the NORMAL_CHECK_INTERVAL field */
	const NORMAL_CHECK_INTERVAL = 'nagios_service.NORMAL_CHECK_INTERVAL';

	/** the column name for the RETRY_INTERVAL field */
	const RETRY_INTERVAL = 'nagios_service.RETRY_INTERVAL';

	/** the column name for the FIRST_NOTIFICATION_DELAY field */
	const FIRST_NOTIFICATION_DELAY = 'nagios_service.FIRST_NOTIFICATION_DELAY';

	/** the column name for the ACTIVE_CHECKS_ENABLED field */
	const ACTIVE_CHECKS_ENABLED = 'nagios_service.ACTIVE_CHECKS_ENABLED';

	/** the column name for the PASSIVE_CHECKS_ENABLED field */
	const PASSIVE_CHECKS_ENABLED = 'nagios_service.PASSIVE_CHECKS_ENABLED';

	/** the column name for the CHECK_PERIOD field */
	const CHECK_PERIOD = 'nagios_service.CHECK_PERIOD';

	/** the column name for the PARALLELIZE_CHECK field */
	const PARALLELIZE_CHECK = 'nagios_service.PARALLELIZE_CHECK';

	/** the column name for the OBSESS_OVER_SERVICE field */
	const OBSESS_OVER_SERVICE = 'nagios_service.OBSESS_OVER_SERVICE';

	/** the column name for the CHECK_FRESHNESS field */
	const CHECK_FRESHNESS = 'nagios_service.CHECK_FRESHNESS';

	/** the column name for the FRESHNESS_THRESHOLD field */
	const FRESHNESS_THRESHOLD = 'nagios_service.FRESHNESS_THRESHOLD';

	/** the column name for the EVENT_HANDLER field */
	const EVENT_HANDLER = 'nagios_service.EVENT_HANDLER';

	/** the column name for the EVENT_HANDLER_ENABLED field */
	const EVENT_HANDLER_ENABLED = 'nagios_service.EVENT_HANDLER_ENABLED';

	/** the column name for the LOW_FLAP_THRESHOLD field */
	const LOW_FLAP_THRESHOLD = 'nagios_service.LOW_FLAP_THRESHOLD';

	/** the column name for the HIGH_FLAP_THRESHOLD field */
	const HIGH_FLAP_THRESHOLD = 'nagios_service.HIGH_FLAP_THRESHOLD';

	/** the column name for the FLAP_DETECTION_ENABLED field */
	const FLAP_DETECTION_ENABLED = 'nagios_service.FLAP_DETECTION_ENABLED';

	/** the column name for the FLAP_DETECTION_ON_OK field */
	const FLAP_DETECTION_ON_OK = 'nagios_service.FLAP_DETECTION_ON_OK';

	/** the column name for the FLAP_DETECTION_ON_WARNING field */
	const FLAP_DETECTION_ON_WARNING = 'nagios_service.FLAP_DETECTION_ON_WARNING';

	/** the column name for the FLAP_DETECTION_ON_CRITICAL field */
	const FLAP_DETECTION_ON_CRITICAL = 'nagios_service.FLAP_DETECTION_ON_CRITICAL';

	/** the column name for the FLAP_DETECTION_ON_UNKNOWN field */
	const FLAP_DETECTION_ON_UNKNOWN = 'nagios_service.FLAP_DETECTION_ON_UNKNOWN';

	/** the column name for the PROCESS_PERF_DATA field */
	const PROCESS_PERF_DATA = 'nagios_service.PROCESS_PERF_DATA';

	/** the column name for the RETAIN_STATUS_INFORMATION field */
	const RETAIN_STATUS_INFORMATION = 'nagios_service.RETAIN_STATUS_INFORMATION';

	/** the column name for the RETAIN_NONSTATUS_INFORMATION field */
	const RETAIN_NONSTATUS_INFORMATION = 'nagios_service.RETAIN_NONSTATUS_INFORMATION';

	/** the column name for the NOTIFICATION_INTERVAL field */
	const NOTIFICATION_INTERVAL = 'nagios_service.NOTIFICATION_INTERVAL';

	/** the column name for the NOTIFICATION_PERIOD field */
	const NOTIFICATION_PERIOD = 'nagios_service.NOTIFICATION_PERIOD';

	/** the column name for the NOTIFICATION_ON_WARNING field */
	const NOTIFICATION_ON_WARNING = 'nagios_service.NOTIFICATION_ON_WARNING';

	/** the column name for the NOTIFICATION_ON_UNKNOWN field */
	const NOTIFICATION_ON_UNKNOWN = 'nagios_service.NOTIFICATION_ON_UNKNOWN';

	/** the column name for the NOTIFICATION_ON_CRITICAL field */
	const NOTIFICATION_ON_CRITICAL = 'nagios_service.NOTIFICATION_ON_CRITICAL';

	/** the column name for the NOTIFICATION_ON_RECOVERY field */
	const NOTIFICATION_ON_RECOVERY = 'nagios_service.NOTIFICATION_ON_RECOVERY';

	/** the column name for the NOTIFICATION_ON_FLAPPING field */
	const NOTIFICATION_ON_FLAPPING = 'nagios_service.NOTIFICATION_ON_FLAPPING';

	/** the column name for the NOTIFICATION_ON_SCHEDULED_DOWNTIME field */
	const NOTIFICATION_ON_SCHEDULED_DOWNTIME = 'nagios_service.NOTIFICATION_ON_SCHEDULED_DOWNTIME';

	/** the column name for the NOTIFICATIONS_ENABLED field */
	const NOTIFICATIONS_ENABLED = 'nagios_service.NOTIFICATIONS_ENABLED';

	/** the column name for the STALKING_ON_OK field */
	const STALKING_ON_OK = 'nagios_service.STALKING_ON_OK';

	/** the column name for the STALKING_ON_WARNING field */
	const STALKING_ON_WARNING = 'nagios_service.STALKING_ON_WARNING';

	/** the column name for the STALKING_ON_UNKNOWN field */
	const STALKING_ON_UNKNOWN = 'nagios_service.STALKING_ON_UNKNOWN';

	/** the column name for the STALKING_ON_CRITICAL field */
	const STALKING_ON_CRITICAL = 'nagios_service.STALKING_ON_CRITICAL';

	/** the column name for the FAILURE_PREDICTION_ENABLED field */
	const FAILURE_PREDICTION_ENABLED = 'nagios_service.FAILURE_PREDICTION_ENABLED';

	/** the column name for the NOTES field */
	const NOTES = 'nagios_service.NOTES';

	/** the column name for the NOTES_URL field */
	const NOTES_URL = 'nagios_service.NOTES_URL';

	/** the column name for the ACTION_URL field */
	const ACTION_URL = 'nagios_service.ACTION_URL';

	/** the column name for the ICON_IMAGE field */
	const ICON_IMAGE = 'nagios_service.ICON_IMAGE';

	/** the column name for the ICON_IMAGE_ALT field */
	const ICON_IMAGE_ALT = 'nagios_service.ICON_IMAGE_ALT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of NagiosService objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosService[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Description', 'DisplayName', 'Host', 'HostTemplate', 'Hostgroup', 'InitialState', 'IsVolatile', 'CheckCommand', 'MaximumCheckAttempts', 'NormalCheckInterval', 'RetryInterval', 'FirstNotificationDelay', 'ActiveChecksEnabled', 'PassiveChecksEnabled', 'CheckPeriod', 'ParallelizeCheck', 'ObsessOverService', 'CheckFreshness', 'FreshnessThreshold', 'EventHandler', 'EventHandlerEnabled', 'LowFlapThreshold', 'HighFlapThreshold', 'FlapDetectionEnabled', 'FlapDetectionOnOk', 'FlapDetectionOnWarning', 'FlapDetectionOnCritical', 'FlapDetectionOnUnknown', 'ProcessPerfData', 'RetainStatusInformation', 'RetainNonstatusInformation', 'NotificationInterval', 'NotificationPeriod', 'NotificationOnWarning', 'NotificationOnUnknown', 'NotificationOnCritical', 'NotificationOnRecovery', 'NotificationOnFlapping', 'NotificationOnScheduledDowntime', 'NotificationsEnabled', 'StalkingOnOk', 'StalkingOnWarning', 'StalkingOnUnknown', 'StalkingOnCritical', 'FailurePredictionEnabled', 'Notes', 'NotesUrl', 'ActionUrl', 'IconImage', 'IconImageAlt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'description', 'displayName', 'host', 'hostTemplate', 'hostgroup', 'initialState', 'isVolatile', 'checkCommand', 'maximumCheckAttempts', 'normalCheckInterval', 'retryInterval', 'firstNotificationDelay', 'activeChecksEnabled', 'passiveChecksEnabled', 'checkPeriod', 'parallelizeCheck', 'obsessOverService', 'checkFreshness', 'freshnessThreshold', 'eventHandler', 'eventHandlerEnabled', 'lowFlapThreshold', 'highFlapThreshold', 'flapDetectionEnabled', 'flapDetectionOnOk', 'flapDetectionOnWarning', 'flapDetectionOnCritical', 'flapDetectionOnUnknown', 'processPerfData', 'retainStatusInformation', 'retainNonstatusInformation', 'notificationInterval', 'notificationPeriod', 'notificationOnWarning', 'notificationOnUnknown', 'notificationOnCritical', 'notificationOnRecovery', 'notificationOnFlapping', 'notificationOnScheduledDowntime', 'notificationsEnabled', 'stalkingOnOk', 'stalkingOnWarning', 'stalkingOnUnknown', 'stalkingOnCritical', 'failurePredictionEnabled', 'notes', 'notesUrl', 'actionUrl', 'iconImage', 'iconImageAlt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DESCRIPTION, self::DISPLAY_NAME, self::HOST, self::HOST_TEMPLATE, self::HOSTGROUP, self::INITIAL_STATE, self::IS_VOLATILE, self::CHECK_COMMAND, self::MAXIMUM_CHECK_ATTEMPTS, self::NORMAL_CHECK_INTERVAL, self::RETRY_INTERVAL, self::FIRST_NOTIFICATION_DELAY, self::ACTIVE_CHECKS_ENABLED, self::PASSIVE_CHECKS_ENABLED, self::CHECK_PERIOD, self::PARALLELIZE_CHECK, self::OBSESS_OVER_SERVICE, self::CHECK_FRESHNESS, self::FRESHNESS_THRESHOLD, self::EVENT_HANDLER, self::EVENT_HANDLER_ENABLED, self::LOW_FLAP_THRESHOLD, self::HIGH_FLAP_THRESHOLD, self::FLAP_DETECTION_ENABLED, self::FLAP_DETECTION_ON_OK, self::FLAP_DETECTION_ON_WARNING, self::FLAP_DETECTION_ON_CRITICAL, self::FLAP_DETECTION_ON_UNKNOWN, self::PROCESS_PERF_DATA, self::RETAIN_STATUS_INFORMATION, self::RETAIN_NONSTATUS_INFORMATION, self::NOTIFICATION_INTERVAL, self::NOTIFICATION_PERIOD, self::NOTIFICATION_ON_WARNING, self::NOTIFICATION_ON_UNKNOWN, self::NOTIFICATION_ON_CRITICAL, self::NOTIFICATION_ON_RECOVERY, self::NOTIFICATION_ON_FLAPPING, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME, self::NOTIFICATIONS_ENABLED, self::STALKING_ON_OK, self::STALKING_ON_WARNING, self::STALKING_ON_UNKNOWN, self::STALKING_ON_CRITICAL, self::FAILURE_PREDICTION_ENABLED, self::NOTES, self::NOTES_URL, self::ACTION_URL, self::ICON_IMAGE, self::ICON_IMAGE_ALT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DESCRIPTION', 'DISPLAY_NAME', 'HOST', 'HOST_TEMPLATE', 'HOSTGROUP', 'INITIAL_STATE', 'IS_VOLATILE', 'CHECK_COMMAND', 'MAXIMUM_CHECK_ATTEMPTS', 'NORMAL_CHECK_INTERVAL', 'RETRY_INTERVAL', 'FIRST_NOTIFICATION_DELAY', 'ACTIVE_CHECKS_ENABLED', 'PASSIVE_CHECKS_ENABLED', 'CHECK_PERIOD', 'PARALLELIZE_CHECK', 'OBSESS_OVER_SERVICE', 'CHECK_FRESHNESS', 'FRESHNESS_THRESHOLD', 'EVENT_HANDLER', 'EVENT_HANDLER_ENABLED', 'LOW_FLAP_THRESHOLD', 'HIGH_FLAP_THRESHOLD', 'FLAP_DETECTION_ENABLED', 'FLAP_DETECTION_ON_OK', 'FLAP_DETECTION_ON_WARNING', 'FLAP_DETECTION_ON_CRITICAL', 'FLAP_DETECTION_ON_UNKNOWN', 'PROCESS_PERF_DATA', 'RETAIN_STATUS_INFORMATION', 'RETAIN_NONSTATUS_INFORMATION', 'NOTIFICATION_INTERVAL', 'NOTIFICATION_PERIOD', 'NOTIFICATION_ON_WARNING', 'NOTIFICATION_ON_UNKNOWN', 'NOTIFICATION_ON_CRITICAL', 'NOTIFICATION_ON_RECOVERY', 'NOTIFICATION_ON_FLAPPING', 'NOTIFICATION_ON_SCHEDULED_DOWNTIME', 'NOTIFICATIONS_ENABLED', 'STALKING_ON_OK', 'STALKING_ON_WARNING', 'STALKING_ON_UNKNOWN', 'STALKING_ON_CRITICAL', 'FAILURE_PREDICTION_ENABLED', 'NOTES', 'NOTES_URL', 'ACTION_URL', 'ICON_IMAGE', 'ICON_IMAGE_ALT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'description', 'display_name', 'host', 'host_template', 'hostgroup', 'initial_state', 'is_volatile', 'check_command', 'maximum_check_attempts', 'normal_check_interval', 'retry_interval', 'first_notification_delay', 'active_checks_enabled', 'passive_checks_enabled', 'check_period', 'parallelize_check', 'obsess_over_service', 'check_freshness', 'freshness_threshold', 'event_handler', 'event_handler_enabled', 'low_flap_threshold', 'high_flap_threshold', 'flap_detection_enabled', 'flap_detection_on_ok', 'flap_detection_on_warning', 'flap_detection_on_critical', 'flap_detection_on_unknown', 'process_perf_data', 'retain_status_information', 'retain_nonstatus_information', 'notification_interval', 'notification_period', 'notification_on_warning', 'notification_on_unknown', 'notification_on_critical', 'notification_on_recovery', 'notification_on_flapping', 'notification_on_scheduled_downtime', 'notifications_enabled', 'stalking_on_ok', 'stalking_on_warning', 'stalking_on_unknown', 'stalking_on_critical', 'failure_prediction_enabled', 'notes', 'notes_url', 'action_url', 'icon_image', 'icon_image_alt', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Description' => 1, 'DisplayName' => 2, 'Host' => 3, 'HostTemplate' => 4, 'Hostgroup' => 5, 'InitialState' => 6, 'IsVolatile' => 7, 'CheckCommand' => 8, 'MaximumCheckAttempts' => 9, 'NormalCheckInterval' => 10, 'RetryInterval' => 11, 'FirstNotificationDelay' => 12, 'ActiveChecksEnabled' => 13, 'PassiveChecksEnabled' => 14, 'CheckPeriod' => 15, 'ParallelizeCheck' => 16, 'ObsessOverService' => 17, 'CheckFreshness' => 18, 'FreshnessThreshold' => 19, 'EventHandler' => 20, 'EventHandlerEnabled' => 21, 'LowFlapThreshold' => 22, 'HighFlapThreshold' => 23, 'FlapDetectionEnabled' => 24, 'FlapDetectionOnOk' => 25, 'FlapDetectionOnWarning' => 26, 'FlapDetectionOnCritical' => 27, 'FlapDetectionOnUnknown' => 28, 'ProcessPerfData' => 29, 'RetainStatusInformation' => 30, 'RetainNonstatusInformation' => 31, 'NotificationInterval' => 32, 'NotificationPeriod' => 33, 'NotificationOnWarning' => 34, 'NotificationOnUnknown' => 35, 'NotificationOnCritical' => 36, 'NotificationOnRecovery' => 37, 'NotificationOnFlapping' => 38, 'NotificationOnScheduledDowntime' => 39, 'NotificationsEnabled' => 40, 'StalkingOnOk' => 41, 'StalkingOnWarning' => 42, 'StalkingOnUnknown' => 43, 'StalkingOnCritical' => 44, 'FailurePredictionEnabled' => 45, 'Notes' => 46, 'NotesUrl' => 47, 'ActionUrl' => 48, 'IconImage' => 49, 'IconImageAlt' => 50, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'description' => 1, 'displayName' => 2, 'host' => 3, 'hostTemplate' => 4, 'hostgroup' => 5, 'initialState' => 6, 'isVolatile' => 7, 'checkCommand' => 8, 'maximumCheckAttempts' => 9, 'normalCheckInterval' => 10, 'retryInterval' => 11, 'firstNotificationDelay' => 12, 'activeChecksEnabled' => 13, 'passiveChecksEnabled' => 14, 'checkPeriod' => 15, 'parallelizeCheck' => 16, 'obsessOverService' => 17, 'checkFreshness' => 18, 'freshnessThreshold' => 19, 'eventHandler' => 20, 'eventHandlerEnabled' => 21, 'lowFlapThreshold' => 22, 'highFlapThreshold' => 23, 'flapDetectionEnabled' => 24, 'flapDetectionOnOk' => 25, 'flapDetectionOnWarning' => 26, 'flapDetectionOnCritical' => 27, 'flapDetectionOnUnknown' => 28, 'processPerfData' => 29, 'retainStatusInformation' => 30, 'retainNonstatusInformation' => 31, 'notificationInterval' => 32, 'notificationPeriod' => 33, 'notificationOnWarning' => 34, 'notificationOnUnknown' => 35, 'notificationOnCritical' => 36, 'notificationOnRecovery' => 37, 'notificationOnFlapping' => 38, 'notificationOnScheduledDowntime' => 39, 'notificationsEnabled' => 40, 'stalkingOnOk' => 41, 'stalkingOnWarning' => 42, 'stalkingOnUnknown' => 43, 'stalkingOnCritical' => 44, 'failurePredictionEnabled' => 45, 'notes' => 46, 'notesUrl' => 47, 'actionUrl' => 48, 'iconImage' => 49, 'iconImageAlt' => 50, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DESCRIPTION => 1, self::DISPLAY_NAME => 2, self::HOST => 3, self::HOST_TEMPLATE => 4, self::HOSTGROUP => 5, self::INITIAL_STATE => 6, self::IS_VOLATILE => 7, self::CHECK_COMMAND => 8, self::MAXIMUM_CHECK_ATTEMPTS => 9, self::NORMAL_CHECK_INTERVAL => 10, self::RETRY_INTERVAL => 11, self::FIRST_NOTIFICATION_DELAY => 12, self::ACTIVE_CHECKS_ENABLED => 13, self::PASSIVE_CHECKS_ENABLED => 14, self::CHECK_PERIOD => 15, self::PARALLELIZE_CHECK => 16, self::OBSESS_OVER_SERVICE => 17, self::CHECK_FRESHNESS => 18, self::FRESHNESS_THRESHOLD => 19, self::EVENT_HANDLER => 20, self::EVENT_HANDLER_ENABLED => 21, self::LOW_FLAP_THRESHOLD => 22, self::HIGH_FLAP_THRESHOLD => 23, self::FLAP_DETECTION_ENABLED => 24, self::FLAP_DETECTION_ON_OK => 25, self::FLAP_DETECTION_ON_WARNING => 26, self::FLAP_DETECTION_ON_CRITICAL => 27, self::FLAP_DETECTION_ON_UNKNOWN => 28, self::PROCESS_PERF_DATA => 29, self::RETAIN_STATUS_INFORMATION => 30, self::RETAIN_NONSTATUS_INFORMATION => 31, self::NOTIFICATION_INTERVAL => 32, self::NOTIFICATION_PERIOD => 33, self::NOTIFICATION_ON_WARNING => 34, self::NOTIFICATION_ON_UNKNOWN => 35, self::NOTIFICATION_ON_CRITICAL => 36, self::NOTIFICATION_ON_RECOVERY => 37, self::NOTIFICATION_ON_FLAPPING => 38, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME => 39, self::NOTIFICATIONS_ENABLED => 40, self::STALKING_ON_OK => 41, self::STALKING_ON_WARNING => 42, self::STALKING_ON_UNKNOWN => 43, self::STALKING_ON_CRITICAL => 44, self::FAILURE_PREDICTION_ENABLED => 45, self::NOTES => 46, self::NOTES_URL => 47, self::ACTION_URL => 48, self::ICON_IMAGE => 49, self::ICON_IMAGE_ALT => 50, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DESCRIPTION' => 1, 'DISPLAY_NAME' => 2, 'HOST' => 3, 'HOST_TEMPLATE' => 4, 'HOSTGROUP' => 5, 'INITIAL_STATE' => 6, 'IS_VOLATILE' => 7, 'CHECK_COMMAND' => 8, 'MAXIMUM_CHECK_ATTEMPTS' => 9, 'NORMAL_CHECK_INTERVAL' => 10, 'RETRY_INTERVAL' => 11, 'FIRST_NOTIFICATION_DELAY' => 12, 'ACTIVE_CHECKS_ENABLED' => 13, 'PASSIVE_CHECKS_ENABLED' => 14, 'CHECK_PERIOD' => 15, 'PARALLELIZE_CHECK' => 16, 'OBSESS_OVER_SERVICE' => 17, 'CHECK_FRESHNESS' => 18, 'FRESHNESS_THRESHOLD' => 19, 'EVENT_HANDLER' => 20, 'EVENT_HANDLER_ENABLED' => 21, 'LOW_FLAP_THRESHOLD' => 22, 'HIGH_FLAP_THRESHOLD' => 23, 'FLAP_DETECTION_ENABLED' => 24, 'FLAP_DETECTION_ON_OK' => 25, 'FLAP_DETECTION_ON_WARNING' => 26, 'FLAP_DETECTION_ON_CRITICAL' => 27, 'FLAP_DETECTION_ON_UNKNOWN' => 28, 'PROCESS_PERF_DATA' => 29, 'RETAIN_STATUS_INFORMATION' => 30, 'RETAIN_NONSTATUS_INFORMATION' => 31, 'NOTIFICATION_INTERVAL' => 32, 'NOTIFICATION_PERIOD' => 33, 'NOTIFICATION_ON_WARNING' => 34, 'NOTIFICATION_ON_UNKNOWN' => 35, 'NOTIFICATION_ON_CRITICAL' => 36, 'NOTIFICATION_ON_RECOVERY' => 37, 'NOTIFICATION_ON_FLAPPING' => 38, 'NOTIFICATION_ON_SCHEDULED_DOWNTIME' => 39, 'NOTIFICATIONS_ENABLED' => 40, 'STALKING_ON_OK' => 41, 'STALKING_ON_WARNING' => 42, 'STALKING_ON_UNKNOWN' => 43, 'STALKING_ON_CRITICAL' => 44, 'FAILURE_PREDICTION_ENABLED' => 45, 'NOTES' => 46, 'NOTES_URL' => 47, 'ACTION_URL' => 48, 'ICON_IMAGE' => 49, 'ICON_IMAGE_ALT' => 50, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'description' => 1, 'display_name' => 2, 'host' => 3, 'host_template' => 4, 'hostgroup' => 5, 'initial_state' => 6, 'is_volatile' => 7, 'check_command' => 8, 'maximum_check_attempts' => 9, 'normal_check_interval' => 10, 'retry_interval' => 11, 'first_notification_delay' => 12, 'active_checks_enabled' => 13, 'passive_checks_enabled' => 14, 'check_period' => 15, 'parallelize_check' => 16, 'obsess_over_service' => 17, 'check_freshness' => 18, 'freshness_threshold' => 19, 'event_handler' => 20, 'event_handler_enabled' => 21, 'low_flap_threshold' => 22, 'high_flap_threshold' => 23, 'flap_detection_enabled' => 24, 'flap_detection_on_ok' => 25, 'flap_detection_on_warning' => 26, 'flap_detection_on_critical' => 27, 'flap_detection_on_unknown' => 28, 'process_perf_data' => 29, 'retain_status_information' => 30, 'retain_nonstatus_information' => 31, 'notification_interval' => 32, 'notification_period' => 33, 'notification_on_warning' => 34, 'notification_on_unknown' => 35, 'notification_on_critical' => 36, 'notification_on_recovery' => 37, 'notification_on_flapping' => 38, 'notification_on_scheduled_downtime' => 39, 'notifications_enabled' => 40, 'stalking_on_ok' => 41, 'stalking_on_warning' => 42, 'stalking_on_unknown' => 43, 'stalking_on_critical' => 44, 'failure_prediction_enabled' => 45, 'notes' => 46, 'notes_url' => 47, 'action_url' => 48, 'icon_image' => 49, 'icon_image_alt' => 50, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, 50, )
	);

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
	 * @param      string $column The column name for current table. (i.e. NagiosServicePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosServicePeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      Criteria $criteria object containing the columns to add.
	 * @param      string   $alias    optional table alias
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria, $alias = null)
	{
		if (null === $alias) {
			$criteria->addSelectColumn(NagiosServicePeer::ID);
			$criteria->addSelectColumn(NagiosServicePeer::DESCRIPTION);
			$criteria->addSelectColumn(NagiosServicePeer::DISPLAY_NAME);
			$criteria->addSelectColumn(NagiosServicePeer::HOST);
			$criteria->addSelectColumn(NagiosServicePeer::HOST_TEMPLATE);
			$criteria->addSelectColumn(NagiosServicePeer::HOSTGROUP);
			$criteria->addSelectColumn(NagiosServicePeer::INITIAL_STATE);
			$criteria->addSelectColumn(NagiosServicePeer::IS_VOLATILE);
			$criteria->addSelectColumn(NagiosServicePeer::CHECK_COMMAND);
			$criteria->addSelectColumn(NagiosServicePeer::MAXIMUM_CHECK_ATTEMPTS);
			$criteria->addSelectColumn(NagiosServicePeer::NORMAL_CHECK_INTERVAL);
			$criteria->addSelectColumn(NagiosServicePeer::RETRY_INTERVAL);
			$criteria->addSelectColumn(NagiosServicePeer::FIRST_NOTIFICATION_DELAY);
			$criteria->addSelectColumn(NagiosServicePeer::ACTIVE_CHECKS_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::PASSIVE_CHECKS_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::CHECK_PERIOD);
			$criteria->addSelectColumn(NagiosServicePeer::PARALLELIZE_CHECK);
			$criteria->addSelectColumn(NagiosServicePeer::OBSESS_OVER_SERVICE);
			$criteria->addSelectColumn(NagiosServicePeer::CHECK_FRESHNESS);
			$criteria->addSelectColumn(NagiosServicePeer::FRESHNESS_THRESHOLD);
			$criteria->addSelectColumn(NagiosServicePeer::EVENT_HANDLER);
			$criteria->addSelectColumn(NagiosServicePeer::EVENT_HANDLER_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::LOW_FLAP_THRESHOLD);
			$criteria->addSelectColumn(NagiosServicePeer::HIGH_FLAP_THRESHOLD);
			$criteria->addSelectColumn(NagiosServicePeer::FLAP_DETECTION_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::FLAP_DETECTION_ON_OK);
			$criteria->addSelectColumn(NagiosServicePeer::FLAP_DETECTION_ON_WARNING);
			$criteria->addSelectColumn(NagiosServicePeer::FLAP_DETECTION_ON_CRITICAL);
			$criteria->addSelectColumn(NagiosServicePeer::FLAP_DETECTION_ON_UNKNOWN);
			$criteria->addSelectColumn(NagiosServicePeer::PROCESS_PERF_DATA);
			$criteria->addSelectColumn(NagiosServicePeer::RETAIN_STATUS_INFORMATION);
			$criteria->addSelectColumn(NagiosServicePeer::RETAIN_NONSTATUS_INFORMATION);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_INTERVAL);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_PERIOD);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_WARNING);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_UNKNOWN);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_CRITICAL);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_RECOVERY);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_FLAPPING);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME);
			$criteria->addSelectColumn(NagiosServicePeer::NOTIFICATIONS_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::STALKING_ON_OK);
			$criteria->addSelectColumn(NagiosServicePeer::STALKING_ON_WARNING);
			$criteria->addSelectColumn(NagiosServicePeer::STALKING_ON_UNKNOWN);
			$criteria->addSelectColumn(NagiosServicePeer::STALKING_ON_CRITICAL);
			$criteria->addSelectColumn(NagiosServicePeer::FAILURE_PREDICTION_ENABLED);
			$criteria->addSelectColumn(NagiosServicePeer::NOTES);
			$criteria->addSelectColumn(NagiosServicePeer::NOTES_URL);
			$criteria->addSelectColumn(NagiosServicePeer::ACTION_URL);
			$criteria->addSelectColumn(NagiosServicePeer::ICON_IMAGE);
			$criteria->addSelectColumn(NagiosServicePeer::ICON_IMAGE_ALT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.DISPLAY_NAME');
			$criteria->addSelectColumn($alias . '.HOST');
			$criteria->addSelectColumn($alias . '.HOST_TEMPLATE');
			$criteria->addSelectColumn($alias . '.HOSTGROUP');
			$criteria->addSelectColumn($alias . '.INITIAL_STATE');
			$criteria->addSelectColumn($alias . '.IS_VOLATILE');
			$criteria->addSelectColumn($alias . '.CHECK_COMMAND');
			$criteria->addSelectColumn($alias . '.MAXIMUM_CHECK_ATTEMPTS');
			$criteria->addSelectColumn($alias . '.NORMAL_CHECK_INTERVAL');
			$criteria->addSelectColumn($alias . '.RETRY_INTERVAL');
			$criteria->addSelectColumn($alias . '.FIRST_NOTIFICATION_DELAY');
			$criteria->addSelectColumn($alias . '.ACTIVE_CHECKS_ENABLED');
			$criteria->addSelectColumn($alias . '.PASSIVE_CHECKS_ENABLED');
			$criteria->addSelectColumn($alias . '.CHECK_PERIOD');
			$criteria->addSelectColumn($alias . '.PARALLELIZE_CHECK');
			$criteria->addSelectColumn($alias . '.OBSESS_OVER_SERVICE');
			$criteria->addSelectColumn($alias . '.CHECK_FRESHNESS');
			$criteria->addSelectColumn($alias . '.FRESHNESS_THRESHOLD');
			$criteria->addSelectColumn($alias . '.EVENT_HANDLER');
			$criteria->addSelectColumn($alias . '.EVENT_HANDLER_ENABLED');
			$criteria->addSelectColumn($alias . '.LOW_FLAP_THRESHOLD');
			$criteria->addSelectColumn($alias . '.HIGH_FLAP_THRESHOLD');
			$criteria->addSelectColumn($alias . '.FLAP_DETECTION_ENABLED');
			$criteria->addSelectColumn($alias . '.FLAP_DETECTION_ON_OK');
			$criteria->addSelectColumn($alias . '.FLAP_DETECTION_ON_WARNING');
			$criteria->addSelectColumn($alias . '.FLAP_DETECTION_ON_CRITICAL');
			$criteria->addSelectColumn($alias . '.FLAP_DETECTION_ON_UNKNOWN');
			$criteria->addSelectColumn($alias . '.PROCESS_PERF_DATA');
			$criteria->addSelectColumn($alias . '.RETAIN_STATUS_INFORMATION');
			$criteria->addSelectColumn($alias . '.RETAIN_NONSTATUS_INFORMATION');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_INTERVAL');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_PERIOD');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_WARNING');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_UNKNOWN');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_CRITICAL');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_RECOVERY');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_FLAPPING');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_ON_SCHEDULED_DOWNTIME');
			$criteria->addSelectColumn($alias . '.NOTIFICATIONS_ENABLED');
			$criteria->addSelectColumn($alias . '.STALKING_ON_OK');
			$criteria->addSelectColumn($alias . '.STALKING_ON_WARNING');
			$criteria->addSelectColumn($alias . '.STALKING_ON_UNKNOWN');
			$criteria->addSelectColumn($alias . '.STALKING_ON_CRITICAL');
			$criteria->addSelectColumn($alias . '.FAILURE_PREDICTION_ENABLED');
			$criteria->addSelectColumn($alias . '.NOTES');
			$criteria->addSelectColumn($alias . '.NOTES_URL');
			$criteria->addSelectColumn($alias . '.ACTION_URL');
			$criteria->addSelectColumn($alias . '.ICON_IMAGE');
			$criteria->addSelectColumn($alias . '.ICON_IMAGE_ALT');
		}
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
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * Selects one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     NagiosService
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosServicePeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Selects several row from the DB.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return NagiosServicePeer::populateObjects(NagiosServicePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosServicePeer::addSelectColumns($criteria);
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
	 * @param      NagiosService $value A NagiosService object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool($obj, $key = null)
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
	 * @param      mixed $value A NagiosService object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosService) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosService object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosService Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to nagios_service
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in NagiosServiceCheckCommandParameterPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceCheckCommandParameterPeer::clearInstancePool();
		// Invalidate objects in NagiosServiceGroupMemberPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceGroupMemberPeer::clearInstancePool();
		// Invalidate objects in NagiosServiceContactMemberPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceContactMemberPeer::clearInstancePool();
		// Invalidate objects in NagiosServiceContactGroupMemberPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceContactGroupMemberPeer::clearInstancePool();
		// Invalidate objects in NagiosDependencyPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosDependencyPeer::clearInstancePool();
		// Invalidate objects in NagiosDependencyTargetPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosDependencyTargetPeer::clearInstancePool();
		// Invalidate objects in NagiosEscalationPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosEscalationPeer::clearInstancePool();
		// Invalidate objects in NagiosServiceTemplateInheritancePeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceTemplateInheritancePeer::clearInstancePool();
		// Invalidate objects in NagiosServiceCustomObjectVarPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosServiceCustomObjectVarPeer::clearInstancePool();
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
		if ($row[$startcol] === null) {
			return null;
		}
		return (string) $row[$startcol];
	}

	/**
	 * Retrieves the primary key from the DB resultset row 
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, an array of the primary key columns will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     mixed The primary key of the row
	 */
	public static function getPrimaryKeyFromRow($row, $startcol = 0)
	{
		return (int) $row[$startcol];
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
		$cls = NagiosServicePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosServicePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosServicePeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Populates an object of the default type or an object that inherit from the default.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     array (NagiosService object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = NagiosServicePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = NagiosServicePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			NagiosServicePeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosHost table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosHost(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosHostTemplate table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosHostTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosHostgroup table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosHostgroup(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByCheckCommand table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByCheckCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByEventHandler table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosCommandRelatedByEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByCheckPeriod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosTimeperiodRelatedByCheckPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByNotificationPeriod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosTimeperiodRelatedByNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosService objects pre-filled with their NagiosHost objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosHost(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosHostPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosHostTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosHostTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosHostTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosHostTemplatePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosHostTemplatePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosHostTemplate)
				$obj2->addNagiosService($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosHostgroup objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosHostgroup(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosHostgroupPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosHostgroupPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosHostgroupPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosHostgroup)
				$obj2->addNagiosService($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByCheckCommand(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosCommandPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosCommandPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosCommand)
				$obj2->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByEventHandler(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosCommandPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosCommandPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosCommandPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosCommandPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosCommand)
				$obj2->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByCheckPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosTimeperiodPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol = NagiosServicePeer::NUM_HYDRATE_COLUMNS;
		NagiosTimeperiodPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosService) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining all related tables
	 *
	 * @param      Criteria $criteria
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
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosService objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAll(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol9 = $startcol8 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined NagiosHost rows

			$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHostTemplate rows

			$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHostgroup rows

			$key4 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosHostgroupPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostgroupPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosService($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByCheckCommand($obj1);
			} // if joined row not null

			// Add objects for joined NagiosCommand rows

			$key6 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = NagiosCommandPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = NagiosCommandPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosCommandPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosCommand)
				$obj6->addNagiosServiceRelatedByEventHandler($obj1);
			} // if joined row not null

			// Add objects for joined NagiosTimeperiod rows

			$key7 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol7);
			if ($key7 !== null) {
				$obj7 = NagiosTimeperiodPeer::getInstanceFromPool($key7);
				if (!$obj7) {

					$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					NagiosTimeperiodPeer::addInstanceToPool($obj7, $key7);
				} // if obj7 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosServiceRelatedByCheckPeriod($obj1);
			} // if joined row not null

			// Add objects for joined NagiosTimeperiod rows

			$key8 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol8);
			if ($key8 !== null) {
				$obj8 = NagiosTimeperiodPeer::getInstanceFromPool($key8);
				if (!$obj8) {

					$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj8 = new $cls();
					$obj8->hydrate($row, $startcol8);
					NagiosTimeperiodPeer::addInstanceToPool($obj8, $key8);
				} // if obj8 loaded

				// Add the $obj1 (NagiosService) to the collection in $obj8 (NagiosTimeperiod)
				$obj8->addNagiosServiceRelatedByNotificationPeriod($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosHost table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosHost(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosHostTemplate table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosHostTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosHostgroup table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosHostgroup(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByCheckCommand table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByCheckCommand(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByEventHandler table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosCommandRelatedByEventHandler(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByCheckPeriod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosTimeperiodRelatedByCheckPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByNotificationPeriod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosTimeperiodRelatedByNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosHost.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosHost(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHostTemplate rows

				$key2 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostTemplatePeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostTemplatePeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key3 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostgroupPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostgroupPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostgroup)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key4 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosCommandPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosCommandPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosCommand)
				$obj4->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key6 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosTimeperiodPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosTimeperiodPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key7 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = NagiosTimeperiodPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					NagiosTimeperiodPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosHostTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosHostTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key3 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostgroupPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostgroupPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostgroup)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key4 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosCommandPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosCommandPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosCommand)
				$obj4->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key6 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosTimeperiodPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosTimeperiodPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key7 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = NagiosTimeperiodPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					NagiosTimeperiodPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosHostgroup.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosHostgroup(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostTemplate rows

				$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key4 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosCommandPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosCommandPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosCommand)
				$obj4->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key6 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosTimeperiodPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosTimeperiodPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key7 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol7);
				if ($key7 !== null) {
					$obj7 = NagiosTimeperiodPeer::getInstanceFromPool($key7);
					if (!$obj7) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj7 = new $cls();
					$obj7->hydrate($row, $startcol7);
					NagiosTimeperiodPeer::addInstanceToPool($obj7, $key7);
				} // if $obj7 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosCommandRelatedByCheckCommand.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByCheckCommand(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostTemplate rows

				$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key4 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosHostgroupPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostgroupPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key5 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosTimeperiodPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosTimeperiodPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosTimeperiod)
				$obj5->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key6 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosTimeperiodPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosTimeperiodPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosCommandRelatedByEventHandler.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByEventHandler(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::NOTIFICATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostTemplate rows

				$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key4 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosHostgroupPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostgroupPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key5 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosTimeperiodPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosTimeperiodPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosTimeperiod)
				$obj5->addNagiosServiceRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key6 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosTimeperiodPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosTimeperiodPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosTimeperiodPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosServiceRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosTimeperiodRelatedByCheckPeriod.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByCheckPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostTemplate rows

				$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key4 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosHostgroupPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostgroupPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key6 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosCommandPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosCommandPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosCommand)
				$obj6->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosService objects pre-filled with all related objects except NagiosTimeperiodRelatedByNotificationPeriod.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosService objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByNotificationPeriod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol2 = NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		NagiosCommandPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosCommandPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosServicePeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::CHECK_COMMAND, NagiosCommandPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosServicePeer::EVENT_HANDLER, NagiosCommandPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosServicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosHost rows

				$key2 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosHostPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosHostPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostTemplate rows

				$key3 = NagiosHostTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key4 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosHostgroupPeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostgroupPeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosService($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key5 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosCommandPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosCommandPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj5 (NagiosCommand)
				$obj5->addNagiosServiceRelatedByCheckCommand($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosCommand rows

				$key6 = NagiosCommandPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosCommandPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosCommandPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosCommandPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosService) to the collection in $obj6 (NagiosCommand)
				$obj6->addNagiosServiceRelatedByEventHandler($obj1);

			} // if joined row is not null

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
	 * Add a TableMap instance to the database for this peer class.
	 */
	public static function buildTableMap()
	{
	  $dbMap = Propel::getDatabaseMap(BaseNagiosServicePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseNagiosServicePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new NagiosServiceTableMap());
	  }
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * If $withPrefix is true, the returned path
	 * uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @param      boolean $withPrefix Whether or not to return the path with the class name
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass($withPrefix = true)
	{
		return $withPrefix ? NagiosServicePeer::CLASS_DEFAULT : NagiosServicePeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a NagiosService or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosService object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosService object
		}

		if ($criteria->containsKey(NagiosServicePeer::ID) && $criteria->keyContainsValue(NagiosServicePeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosServicePeer::ID.')');
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
	 * Performs an UPDATE on the database, given a NagiosService or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosService object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosServicePeer::ID);
			$value = $criteria->remove(NagiosServicePeer::ID);
			if ($value) {
				$selectCriteria->add(NagiosServicePeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(NagiosServicePeer::TABLE_NAME);
			}

		} else { // $values is NagiosService object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the nagios_service table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosServicePeer::doOnDeleteCascade(new Criteria(NagiosServicePeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosServicePeer::TABLE_NAME, $con, NagiosServicePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			NagiosServicePeer::clearInstancePool();
			NagiosServicePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a NagiosService or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosService object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosService) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosServicePeer::ID, (array) $values, Criteria::IN);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			// cloning the Criteria in case it's modified by doSelect() or doSelectStmt()
			$c = clone $criteria;
			$affectedRows += NagiosServicePeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				NagiosServicePeer::clearInstancePool();
			} elseif ($values instanceof NagiosService) { // it's a model object
				NagiosServicePeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					NagiosServicePeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			NagiosServicePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * This is a method for emulating ON DELETE CASCADE for DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	protected static function doOnDeleteCascade(Criteria $criteria, PropelPDO $con)
	{
		// initialize var to track total num of affected rows
		$affectedRows = 0;

		// first find the objects that are implicated by the $criteria
		$objects = NagiosServicePeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosServiceCheckCommandParameter objects
			$criteria = new Criteria(NagiosServiceCheckCommandParameterPeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceCheckCommandParameterPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosServiceCheckCommandParameterPeer::doDelete($criteria, $con);

			// delete related NagiosServiceGroupMember objects
			$criteria = new Criteria(NagiosServiceGroupMemberPeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceGroupMemberPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosServiceGroupMemberPeer::doDelete($criteria, $con);

			// delete related NagiosServiceContactMember objects
			$criteria = new Criteria(NagiosServiceContactMemberPeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceContactMemberPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosServiceContactMemberPeer::doDelete($criteria, $con);

			// delete related NagiosServiceContactGroupMember objects
			$criteria = new Criteria(NagiosServiceContactGroupMemberPeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceContactGroupMemberPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosServiceContactGroupMemberPeer::doDelete($criteria, $con);

			// delete related NagiosDependency objects
			$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
			
			$criteria->add(NagiosDependencyPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosDependencyPeer::doDelete($criteria, $con);

			// delete related NagiosDependencyTarget objects
			$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
			
			$criteria->add(NagiosDependencyTargetPeer::TARGET_SERVICE, $obj->getId());
			$affectedRows += NagiosDependencyTargetPeer::doDelete($criteria, $con);

			// delete related NagiosEscalation objects
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
			
			$criteria->add(NagiosEscalationPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosEscalationPeer::doDelete($criteria, $con);

			// delete related NagiosServiceTemplateInheritance objects
			$criteria = new Criteria(NagiosServiceTemplateInheritancePeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $obj->getId());
			$affectedRows += NagiosServiceTemplateInheritancePeer::doDelete($criteria, $con);

			// delete related NagiosServiceCustomObjectVar objects
			$criteria = new Criteria(NagiosServiceCustomObjectVarPeer::DATABASE_NAME);
			
			$criteria->add(NagiosServiceCustomObjectVarPeer::SERVICE, $obj->getId());
			$affectedRows += NagiosServiceCustomObjectVarPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given NagiosService object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosService $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosServicePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosServicePeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosServicePeer::DATABASE_NAME, NagiosServicePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosService
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosServicePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosServicePeer::DATABASE_NAME);
		$criteria->add(NagiosServicePeer::ID, $pk);

		$v = NagiosServicePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosServicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosServicePeer::DATABASE_NAME);
			$criteria->add(NagiosServicePeer::ID, $pks, Criteria::IN);
			$objs = NagiosServicePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosServicePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNagiosServicePeer::buildTableMap();

