<?php

/**
 * Base static class for performing query and update operations on the 'nagios_service_template' table.
 *
 * Nagios Service Template
 *
 * @package    .om
 */
abstract class BaseNagiosServiceTemplatePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_service_template';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosServiceTemplate';

	/** The total number of columns. */
	const NUM_COLUMNS = 48;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_service_template.ID';

	/** the column name for the NAME field */
	const NAME = 'nagios_service_template.NAME';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'nagios_service_template.DESCRIPTION';

	/** the column name for the INITIAL_STATE field */
	const INITIAL_STATE = 'nagios_service_template.INITIAL_STATE';

	/** the column name for the IS_VOLATILE field */
	const IS_VOLATILE = 'nagios_service_template.IS_VOLATILE';

	/** the column name for the CHECK_COMMAND field */
	const CHECK_COMMAND = 'nagios_service_template.CHECK_COMMAND';

	/** the column name for the MAXIMUM_CHECK_ATTEMPTS field */
	const MAXIMUM_CHECK_ATTEMPTS = 'nagios_service_template.MAXIMUM_CHECK_ATTEMPTS';

	/** the column name for the NORMAL_CHECK_INTERVAL field */
	const NORMAL_CHECK_INTERVAL = 'nagios_service_template.NORMAL_CHECK_INTERVAL';

	/** the column name for the RETRY_INTERVAL field */
	const RETRY_INTERVAL = 'nagios_service_template.RETRY_INTERVAL';

	/** the column name for the FIRST_NOTIFICATION_DELAY field */
	const FIRST_NOTIFICATION_DELAY = 'nagios_service_template.FIRST_NOTIFICATION_DELAY';

	/** the column name for the ACTIVE_CHECKS_ENABLED field */
	const ACTIVE_CHECKS_ENABLED = 'nagios_service_template.ACTIVE_CHECKS_ENABLED';

	/** the column name for the PASSIVE_CHECKS_ENABLED field */
	const PASSIVE_CHECKS_ENABLED = 'nagios_service_template.PASSIVE_CHECKS_ENABLED';

	/** the column name for the CHECK_PERIOD field */
	const CHECK_PERIOD = 'nagios_service_template.CHECK_PERIOD';

	/** the column name for the PARALLELIZE_CHECK field */
	const PARALLELIZE_CHECK = 'nagios_service_template.PARALLELIZE_CHECK';

	/** the column name for the OBSESS_OVER_SERVICE field */
	const OBSESS_OVER_SERVICE = 'nagios_service_template.OBSESS_OVER_SERVICE';

	/** the column name for the CHECK_FRESHNESS field */
	const CHECK_FRESHNESS = 'nagios_service_template.CHECK_FRESHNESS';

	/** the column name for the FRESHNESS_THRESHOLD field */
	const FRESHNESS_THRESHOLD = 'nagios_service_template.FRESHNESS_THRESHOLD';

	/** the column name for the EVENT_HANDLER field */
	const EVENT_HANDLER = 'nagios_service_template.EVENT_HANDLER';

	/** the column name for the EVENT_HANDLER_ENABLED field */
	const EVENT_HANDLER_ENABLED = 'nagios_service_template.EVENT_HANDLER_ENABLED';

	/** the column name for the LOW_FLAP_THRESHOLD field */
	const LOW_FLAP_THRESHOLD = 'nagios_service_template.LOW_FLAP_THRESHOLD';

	/** the column name for the HIGH_FLAP_THRESHOLD field */
	const HIGH_FLAP_THRESHOLD = 'nagios_service_template.HIGH_FLAP_THRESHOLD';

	/** the column name for the FLAP_DETECTION_ENABLED field */
	const FLAP_DETECTION_ENABLED = 'nagios_service_template.FLAP_DETECTION_ENABLED';

	/** the column name for the FLAP_DETECTION_ON_OK field */
	const FLAP_DETECTION_ON_OK = 'nagios_service_template.FLAP_DETECTION_ON_OK';

	/** the column name for the FLAP_DETECTION_ON_WARNING field */
	const FLAP_DETECTION_ON_WARNING = 'nagios_service_template.FLAP_DETECTION_ON_WARNING';

	/** the column name for the FLAP_DETECTION_ON_CRITICAL field */
	const FLAP_DETECTION_ON_CRITICAL = 'nagios_service_template.FLAP_DETECTION_ON_CRITICAL';

	/** the column name for the FLAP_DETECTION_ON_UNKNOWN field */
	const FLAP_DETECTION_ON_UNKNOWN = 'nagios_service_template.FLAP_DETECTION_ON_UNKNOWN';

	/** the column name for the PROCESS_PERF_DATA field */
	const PROCESS_PERF_DATA = 'nagios_service_template.PROCESS_PERF_DATA';

	/** the column name for the RETAIN_STATUS_INFORMATION field */
	const RETAIN_STATUS_INFORMATION = 'nagios_service_template.RETAIN_STATUS_INFORMATION';

	/** the column name for the RETAIN_NONSTATUS_INFORMATION field */
	const RETAIN_NONSTATUS_INFORMATION = 'nagios_service_template.RETAIN_NONSTATUS_INFORMATION';

	/** the column name for the NOTIFICATION_INTERVAL field */
	const NOTIFICATION_INTERVAL = 'nagios_service_template.NOTIFICATION_INTERVAL';

	/** the column name for the NOTIFICATION_PERIOD field */
	const NOTIFICATION_PERIOD = 'nagios_service_template.NOTIFICATION_PERIOD';

	/** the column name for the NOTIFICATION_ON_WARNING field */
	const NOTIFICATION_ON_WARNING = 'nagios_service_template.NOTIFICATION_ON_WARNING';

	/** the column name for the NOTIFICATION_ON_UNKNOWN field */
	const NOTIFICATION_ON_UNKNOWN = 'nagios_service_template.NOTIFICATION_ON_UNKNOWN';

	/** the column name for the NOTIFICATION_ON_CRITICAL field */
	const NOTIFICATION_ON_CRITICAL = 'nagios_service_template.NOTIFICATION_ON_CRITICAL';

	/** the column name for the NOTIFICATION_ON_RECOVERY field */
	const NOTIFICATION_ON_RECOVERY = 'nagios_service_template.NOTIFICATION_ON_RECOVERY';

	/** the column name for the NOTIFICATION_ON_FLAPPING field */
	const NOTIFICATION_ON_FLAPPING = 'nagios_service_template.NOTIFICATION_ON_FLAPPING';

	/** the column name for the NOTIFICATION_ON_SCHEDULED_DOWNTIME field */
	const NOTIFICATION_ON_SCHEDULED_DOWNTIME = 'nagios_service_template.NOTIFICATION_ON_SCHEDULED_DOWNTIME';

	/** the column name for the NOTIFICATIONS_ENABLED field */
	const NOTIFICATIONS_ENABLED = 'nagios_service_template.NOTIFICATIONS_ENABLED';

	/** the column name for the STALKING_ON_OK field */
	const STALKING_ON_OK = 'nagios_service_template.STALKING_ON_OK';

	/** the column name for the STALKING_ON_WARNING field */
	const STALKING_ON_WARNING = 'nagios_service_template.STALKING_ON_WARNING';

	/** the column name for the STALKING_ON_UNKNOWN field */
	const STALKING_ON_UNKNOWN = 'nagios_service_template.STALKING_ON_UNKNOWN';

	/** the column name for the STALKING_ON_CRITICAL field */
	const STALKING_ON_CRITICAL = 'nagios_service_template.STALKING_ON_CRITICAL';

	/** the column name for the FAILURE_PREDICTION_ENABLED field */
	const FAILURE_PREDICTION_ENABLED = 'nagios_service_template.FAILURE_PREDICTION_ENABLED';

	/** the column name for the NOTES field */
	const NOTES = 'nagios_service_template.NOTES';

	/** the column name for the NOTES_URL field */
	const NOTES_URL = 'nagios_service_template.NOTES_URL';

	/** the column name for the ACTION_URL field */
	const ACTION_URL = 'nagios_service_template.ACTION_URL';

	/** the column name for the ICON_IMAGE field */
	const ICON_IMAGE = 'nagios_service_template.ICON_IMAGE';

	/** the column name for the ICON_IMAGE_ALT field */
	const ICON_IMAGE_ALT = 'nagios_service_template.ICON_IMAGE_ALT';

	/**
	 * An identiy map to hold any loaded instances of NagiosServiceTemplate objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosServiceTemplate[]
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
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Description', 'InitialState', 'IsVolatile', 'CheckCommand', 'MaximumCheckAttempts', 'NormalCheckInterval', 'RetryInterval', 'FirstNotificationDelay', 'ActiveChecksEnabled', 'PassiveChecksEnabled', 'CheckPeriod', 'ParallelizeCheck', 'ObsessOverService', 'CheckFreshness', 'FreshnessThreshold', 'EventHandler', 'EventHandlerEnabled', 'LowFlapThreshold', 'HighFlapThreshold', 'FlapDetectionEnabled', 'FlapDetectionOnOk', 'FlapDetectionOnWarning', 'FlapDetectionOnCritical', 'FlapDetectionOnUnknown', 'ProcessPerfData', 'RetainStatusInformation', 'RetainNonstatusInformation', 'NotificationInterval', 'NotificationPeriod', 'NotificationOnWarning', 'NotificationOnUnknown', 'NotificationOnCritical', 'NotificationOnRecovery', 'NotificationOnFlapping', 'NotificationOnScheduledDowntime', 'NotificationsEnabled', 'StalkingOnOk', 'StalkingOnWarning', 'StalkingOnUnknown', 'StalkingOnCritical', 'FailurePredictionEnabled', 'Notes', 'NotesUrl', 'ActionUrl', 'IconImage', 'IconImageAlt', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'description', 'initialState', 'isVolatile', 'checkCommand', 'maximumCheckAttempts', 'normalCheckInterval', 'retryInterval', 'firstNotificationDelay', 'activeChecksEnabled', 'passiveChecksEnabled', 'checkPeriod', 'parallelizeCheck', 'obsessOverService', 'checkFreshness', 'freshnessThreshold', 'eventHandler', 'eventHandlerEnabled', 'lowFlapThreshold', 'highFlapThreshold', 'flapDetectionEnabled', 'flapDetectionOnOk', 'flapDetectionOnWarning', 'flapDetectionOnCritical', 'flapDetectionOnUnknown', 'processPerfData', 'retainStatusInformation', 'retainNonstatusInformation', 'notificationInterval', 'notificationPeriod', 'notificationOnWarning', 'notificationOnUnknown', 'notificationOnCritical', 'notificationOnRecovery', 'notificationOnFlapping', 'notificationOnScheduledDowntime', 'notificationsEnabled', 'stalkingOnOk', 'stalkingOnWarning', 'stalkingOnUnknown', 'stalkingOnCritical', 'failurePredictionEnabled', 'notes', 'notesUrl', 'actionUrl', 'iconImage', 'iconImageAlt', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::DESCRIPTION, self::INITIAL_STATE, self::IS_VOLATILE, self::CHECK_COMMAND, self::MAXIMUM_CHECK_ATTEMPTS, self::NORMAL_CHECK_INTERVAL, self::RETRY_INTERVAL, self::FIRST_NOTIFICATION_DELAY, self::ACTIVE_CHECKS_ENABLED, self::PASSIVE_CHECKS_ENABLED, self::CHECK_PERIOD, self::PARALLELIZE_CHECK, self::OBSESS_OVER_SERVICE, self::CHECK_FRESHNESS, self::FRESHNESS_THRESHOLD, self::EVENT_HANDLER, self::EVENT_HANDLER_ENABLED, self::LOW_FLAP_THRESHOLD, self::HIGH_FLAP_THRESHOLD, self::FLAP_DETECTION_ENABLED, self::FLAP_DETECTION_ON_OK, self::FLAP_DETECTION_ON_WARNING, self::FLAP_DETECTION_ON_CRITICAL, self::FLAP_DETECTION_ON_UNKNOWN, self::PROCESS_PERF_DATA, self::RETAIN_STATUS_INFORMATION, self::RETAIN_NONSTATUS_INFORMATION, self::NOTIFICATION_INTERVAL, self::NOTIFICATION_PERIOD, self::NOTIFICATION_ON_WARNING, self::NOTIFICATION_ON_UNKNOWN, self::NOTIFICATION_ON_CRITICAL, self::NOTIFICATION_ON_RECOVERY, self::NOTIFICATION_ON_FLAPPING, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME, self::NOTIFICATIONS_ENABLED, self::STALKING_ON_OK, self::STALKING_ON_WARNING, self::STALKING_ON_UNKNOWN, self::STALKING_ON_CRITICAL, self::FAILURE_PREDICTION_ENABLED, self::NOTES, self::NOTES_URL, self::ACTION_URL, self::ICON_IMAGE, self::ICON_IMAGE_ALT, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'description', 'initial_state', 'is_volatile', 'check_command', 'maximum_check_attempts', 'normal_check_interval', 'retry_interval', 'first_notification_delay', 'active_checks_enabled', 'passive_checks_enabled', 'check_period', 'parallelize_check', 'obsess_over_service', 'check_freshness', 'freshness_threshold', 'event_handler', 'event_handler_enabled', 'low_flap_threshold', 'high_flap_threshold', 'flap_detection_enabled', 'flap_detection_on_ok', 'flap_detection_on_warning', 'flap_detection_on_critical', 'flap_detection_on_unknown', 'process_perf_data', 'retain_status_information', 'retain_nonstatus_information', 'notification_interval', 'notification_period', 'notification_on_warning', 'notification_on_unknown', 'notification_on_critical', 'notification_on_recovery', 'notification_on_flapping', 'notification_on_scheduled_downtime', 'notifications_enabled', 'stalking_on_ok', 'stalking_on_warning', 'stalking_on_unknown', 'stalking_on_critical', 'failure_prediction_enabled', 'notes', 'notes_url', 'action_url', 'icon_image', 'icon_image_alt', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Description' => 2, 'InitialState' => 3, 'IsVolatile' => 4, 'CheckCommand' => 5, 'MaximumCheckAttempts' => 6, 'NormalCheckInterval' => 7, 'RetryInterval' => 8, 'FirstNotificationDelay' => 9, 'ActiveChecksEnabled' => 10, 'PassiveChecksEnabled' => 11, 'CheckPeriod' => 12, 'ParallelizeCheck' => 13, 'ObsessOverService' => 14, 'CheckFreshness' => 15, 'FreshnessThreshold' => 16, 'EventHandler' => 17, 'EventHandlerEnabled' => 18, 'LowFlapThreshold' => 19, 'HighFlapThreshold' => 20, 'FlapDetectionEnabled' => 21, 'FlapDetectionOnOk' => 22, 'FlapDetectionOnWarning' => 23, 'FlapDetectionOnCritical' => 24, 'FlapDetectionOnUnknown' => 25, 'ProcessPerfData' => 26, 'RetainStatusInformation' => 27, 'RetainNonstatusInformation' => 28, 'NotificationInterval' => 29, 'NotificationPeriod' => 30, 'NotificationOnWarning' => 31, 'NotificationOnUnknown' => 32, 'NotificationOnCritical' => 33, 'NotificationOnRecovery' => 34, 'NotificationOnFlapping' => 35, 'NotificationOnScheduledDowntime' => 36, 'NotificationsEnabled' => 37, 'StalkingOnOk' => 38, 'StalkingOnWarning' => 39, 'StalkingOnUnknown' => 40, 'StalkingOnCritical' => 41, 'FailurePredictionEnabled' => 42, 'Notes' => 43, 'NotesUrl' => 44, 'ActionUrl' => 45, 'IconImage' => 46, 'IconImageAlt' => 47, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'description' => 2, 'initialState' => 3, 'isVolatile' => 4, 'checkCommand' => 5, 'maximumCheckAttempts' => 6, 'normalCheckInterval' => 7, 'retryInterval' => 8, 'firstNotificationDelay' => 9, 'activeChecksEnabled' => 10, 'passiveChecksEnabled' => 11, 'checkPeriod' => 12, 'parallelizeCheck' => 13, 'obsessOverService' => 14, 'checkFreshness' => 15, 'freshnessThreshold' => 16, 'eventHandler' => 17, 'eventHandlerEnabled' => 18, 'lowFlapThreshold' => 19, 'highFlapThreshold' => 20, 'flapDetectionEnabled' => 21, 'flapDetectionOnOk' => 22, 'flapDetectionOnWarning' => 23, 'flapDetectionOnCritical' => 24, 'flapDetectionOnUnknown' => 25, 'processPerfData' => 26, 'retainStatusInformation' => 27, 'retainNonstatusInformation' => 28, 'notificationInterval' => 29, 'notificationPeriod' => 30, 'notificationOnWarning' => 31, 'notificationOnUnknown' => 32, 'notificationOnCritical' => 33, 'notificationOnRecovery' => 34, 'notificationOnFlapping' => 35, 'notificationOnScheduledDowntime' => 36, 'notificationsEnabled' => 37, 'stalkingOnOk' => 38, 'stalkingOnWarning' => 39, 'stalkingOnUnknown' => 40, 'stalkingOnCritical' => 41, 'failurePredictionEnabled' => 42, 'notes' => 43, 'notesUrl' => 44, 'actionUrl' => 45, 'iconImage' => 46, 'iconImageAlt' => 47, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::DESCRIPTION => 2, self::INITIAL_STATE => 3, self::IS_VOLATILE => 4, self::CHECK_COMMAND => 5, self::MAXIMUM_CHECK_ATTEMPTS => 6, self::NORMAL_CHECK_INTERVAL => 7, self::RETRY_INTERVAL => 8, self::FIRST_NOTIFICATION_DELAY => 9, self::ACTIVE_CHECKS_ENABLED => 10, self::PASSIVE_CHECKS_ENABLED => 11, self::CHECK_PERIOD => 12, self::PARALLELIZE_CHECK => 13, self::OBSESS_OVER_SERVICE => 14, self::CHECK_FRESHNESS => 15, self::FRESHNESS_THRESHOLD => 16, self::EVENT_HANDLER => 17, self::EVENT_HANDLER_ENABLED => 18, self::LOW_FLAP_THRESHOLD => 19, self::HIGH_FLAP_THRESHOLD => 20, self::FLAP_DETECTION_ENABLED => 21, self::FLAP_DETECTION_ON_OK => 22, self::FLAP_DETECTION_ON_WARNING => 23, self::FLAP_DETECTION_ON_CRITICAL => 24, self::FLAP_DETECTION_ON_UNKNOWN => 25, self::PROCESS_PERF_DATA => 26, self::RETAIN_STATUS_INFORMATION => 27, self::RETAIN_NONSTATUS_INFORMATION => 28, self::NOTIFICATION_INTERVAL => 29, self::NOTIFICATION_PERIOD => 30, self::NOTIFICATION_ON_WARNING => 31, self::NOTIFICATION_ON_UNKNOWN => 32, self::NOTIFICATION_ON_CRITICAL => 33, self::NOTIFICATION_ON_RECOVERY => 34, self::NOTIFICATION_ON_FLAPPING => 35, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME => 36, self::NOTIFICATIONS_ENABLED => 37, self::STALKING_ON_OK => 38, self::STALKING_ON_WARNING => 39, self::STALKING_ON_UNKNOWN => 40, self::STALKING_ON_CRITICAL => 41, self::FAILURE_PREDICTION_ENABLED => 42, self::NOTES => 43, self::NOTES_URL => 44, self::ACTION_URL => 45, self::ICON_IMAGE => 46, self::ICON_IMAGE_ALT => 47, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'description' => 2, 'initial_state' => 3, 'is_volatile' => 4, 'check_command' => 5, 'maximum_check_attempts' => 6, 'normal_check_interval' => 7, 'retry_interval' => 8, 'first_notification_delay' => 9, 'active_checks_enabled' => 10, 'passive_checks_enabled' => 11, 'check_period' => 12, 'parallelize_check' => 13, 'obsess_over_service' => 14, 'check_freshness' => 15, 'freshness_threshold' => 16, 'event_handler' => 17, 'event_handler_enabled' => 18, 'low_flap_threshold' => 19, 'high_flap_threshold' => 20, 'flap_detection_enabled' => 21, 'flap_detection_on_ok' => 22, 'flap_detection_on_warning' => 23, 'flap_detection_on_critical' => 24, 'flap_detection_on_unknown' => 25, 'process_perf_data' => 26, 'retain_status_information' => 27, 'retain_nonstatus_information' => 28, 'notification_interval' => 29, 'notification_period' => 30, 'notification_on_warning' => 31, 'notification_on_unknown' => 32, 'notification_on_critical' => 33, 'notification_on_recovery' => 34, 'notification_on_flapping' => 35, 'notification_on_scheduled_downtime' => 36, 'notifications_enabled' => 37, 'stalking_on_ok' => 38, 'stalking_on_warning' => 39, 'stalking_on_unknown' => 40, 'stalking_on_critical' => 41, 'failure_prediction_enabled' => 42, 'notes' => 43, 'notes_url' => 44, 'action_url' => 45, 'icon_image' => 46, 'icon_image_alt' => 47, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosServiceTemplateMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. NagiosServiceTemplatePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosServiceTemplatePeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::ID);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NAME);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::DESCRIPTION);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::INITIAL_STATE);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::IS_VOLATILE);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::CHECK_COMMAND);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::RETRY_INTERVAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::CHECK_PERIOD);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::PARALLELIZE_CHECK);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::CHECK_FRESHNESS);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::EVENT_HANDLER);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::PROCESS_PERF_DATA);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::STALKING_ON_OK);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::STALKING_ON_WARNING);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::STALKING_ON_CRITICAL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTES);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::NOTES_URL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::ACTION_URL);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::ICON_IMAGE);

		$criteria->addSelectColumn(NagiosServiceTemplatePeer::ICON_IMAGE_ALT);

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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosServiceTemplate
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosServiceTemplatePeer::doSelect($critcopy, $con);
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
		return NagiosServiceTemplatePeer::populateObjects(NagiosServiceTemplatePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
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
	 * @param      NagiosServiceTemplate $value A NagiosServiceTemplate object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosServiceTemplate $obj, $key = null)
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
	 * @param      mixed $value A NagiosServiceTemplate object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosServiceTemplate) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosServiceTemplate object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosServiceTemplate Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = NagiosServiceTemplatePeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosServiceTemplatePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosServiceTemplatePeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByCheckCommand table
	 *
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByCheckCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosServiceTemplate) to $obj2 (NagiosCommand)
				$obj2->addNagiosServiceTemplateRelatedByCheckCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosCommandRelatedByEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosServiceTemplate) to $obj2 (NagiosCommand)
				$obj2->addNagiosServiceTemplateRelatedByEventHandler($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByCheckPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosTimeperiodPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceTemplateRelatedByCheckPeriod($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$omClass = NagiosTimeperiodPeer::getOMClass();

					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceTemplateRelatedByNotificationPeriod($obj1);

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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
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

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol2 = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosServiceTemplateRelatedByCheckCommand($obj1);
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

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosServiceTemplateRelatedByEventHandler($obj1);
			} // if joined row not null

			// Add objects for joined NagiosTimeperiod rows

			$key4 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosTimeperiodPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosTimeperiodPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj4 (NagiosTimeperiod)
				$obj4->addNagiosServiceTemplateRelatedByCheckPeriod($obj1);
			} // if joined row not null

			// Add objects for joined NagiosTimeperiod rows

			$key5 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NagiosTimeperiodPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosTimeperiodPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj5 (NagiosTimeperiod)
				$obj5->addNagiosServiceTemplateRelatedByNotificationPeriod($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosCommandRelatedByCheckCommand table
	 *
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
	 * @param      Criteria $c
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
		$criteria->setPrimaryTableName(NagiosServiceTemplatePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosServiceTemplatePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with all related objects except NagiosCommandRelatedByCheckCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByCheckCommand(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol2 = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosTimeperiod rows

				$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceTemplateRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key3 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosTimeperiodPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosTimeperiodPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj3 (NagiosTimeperiod)
				$obj3->addNagiosServiceTemplateRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with all related objects except NagiosCommandRelatedByEventHandler.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosCommandRelatedByEventHandler(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol2 = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosTimeperiod rows

				$key2 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosTimeperiodPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosTimeperiodPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj2 (NagiosTimeperiod)
				$obj2->addNagiosServiceTemplateRelatedByCheckPeriod($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosTimeperiod rows

				$key3 = NagiosTimeperiodPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosTimeperiodPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$omClass = NagiosTimeperiodPeer::getOMClass();


					$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosTimeperiodPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj3 (NagiosTimeperiod)
				$obj3->addNagiosServiceTemplateRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with all related objects except NagiosTimeperiodRelatedByCheckPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByCheckPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol2 = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
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
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosServiceTemplateRelatedByCheckCommand($obj1);

			} // if joined row is not null

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
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosServiceTemplateRelatedByEventHandler($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosServiceTemplate objects pre-filled with all related objects except NagiosTimeperiodRelatedByNotificationPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosServiceTemplate objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosServiceTemplatePeer::addSelectColumns($c);
		$startcol2 = (NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosServiceTemplatePeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosServiceTemplatePeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosServiceTemplatePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosServiceTemplatePeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosServiceTemplatePeer::addInstanceToPool($obj1, $key1);
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
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosServiceTemplateRelatedByCheckCommand($obj1);

			} // if joined row is not null

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
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosServiceTemplate) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosServiceTemplateRelatedByEventHandler($obj1);

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
		return NagiosServiceTemplatePeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosServiceTemplate or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosServiceTemplate object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosServiceTemplate object
		}

		if ($criteria->containsKey(NagiosServiceTemplatePeer::ID) && $criteria->keyContainsValue(NagiosServiceTemplatePeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosServiceTemplatePeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a NagiosServiceTemplate or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosServiceTemplate object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosServiceTemplatePeer::ID);
			$selectCriteria->add(NagiosServiceTemplatePeer::ID, $criteria->remove(NagiosServiceTemplatePeer::ID), $comparison);

		} else { // $values is NagiosServiceTemplate object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_service_template table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosServiceTemplatePeer::doOnDeleteCascade(new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosServiceTemplatePeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosServiceTemplate or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosServiceTemplate object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosServiceTemplatePeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosServiceTemplate) {
			// invalidate the cache for this single object
			NagiosServiceTemplatePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosServiceTemplatePeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosServiceTemplatePeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosServiceTemplatePeer::doOnDeleteCascade($criteria, $con);
			
				// Because this db requires some delete cascade/set null emulation, we have to
				// clear the cached instance *after* the emulation has happened (since
				// instances get re-added by the select statement contained therein).
				if ($values instanceof Criteria) {
					NagiosServiceTemplatePeer::clearInstancePool();
				} else { // it's a PK or object
					NagiosServiceTemplatePeer::removeInstanceFromPool($values);
				}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			// invalidate objects in NagiosServiceCheckCommandParameterPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceCheckCommandParameterPeer::clearInstancePool();

			// invalidate objects in NagiosServiceGroupMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceGroupMemberPeer::clearInstancePool();

			// invalidate objects in NagiosServiceContactMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceContactMemberPeer::clearInstancePool();

			// invalidate objects in NagiosServiceContactGroupMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceContactGroupMemberPeer::clearInstancePool();

			// invalidate objects in NagiosDependencyPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosDependencyPeer::clearInstancePool();

			// invalidate objects in NagiosEscalationPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosEscalationPeer::clearInstancePool();

			// invalidate objects in NagiosServiceTemplateInheritancePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceTemplateInheritancePeer::clearInstancePool();

			// invalidate objects in NagiosServiceTemplateInheritancePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceTemplateInheritancePeer::clearInstancePool();

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
		$objects = NagiosServiceTemplatePeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosServiceCheckCommandParameter objects
			$c = new Criteria(NagiosServiceCheckCommandParameterPeer::DATABASE_NAME);
			
			$c->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceCheckCommandParameterPeer::doDelete($c, $con);

			// delete related NagiosServiceGroupMember objects
			$c = new Criteria(NagiosServiceGroupMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosServiceGroupMemberPeer::TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceGroupMemberPeer::doDelete($c, $con);

			// delete related NagiosServiceContactMember objects
			$c = new Criteria(NagiosServiceContactMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosServiceContactMemberPeer::TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceContactMemberPeer::doDelete($c, $con);

			// delete related NagiosServiceContactGroupMember objects
			$c = new Criteria(NagiosServiceContactGroupMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceContactGroupMemberPeer::doDelete($c, $con);

			// delete related NagiosDependency objects
			$c = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
			
			$c->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $obj->getId());
			$affectedRows += NagiosDependencyPeer::doDelete($c, $con);

			// delete related NagiosEscalation objects
			$c = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
			
			$c->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $obj->getId());
			$affectedRows += NagiosEscalationPeer::doDelete($c, $con);

			// delete related NagiosServiceTemplateInheritance objects
			$c = new Criteria(NagiosServiceTemplateInheritancePeer::DATABASE_NAME);
			
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceTemplateInheritancePeer::doDelete($c, $con);

			// delete related NagiosServiceTemplateInheritance objects
			$c = new Criteria(NagiosServiceTemplateInheritancePeer::DATABASE_NAME);
			
			$c->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $obj->getId());
			$affectedRows += NagiosServiceTemplateInheritancePeer::doDelete($c, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given NagiosServiceTemplate object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosServiceTemplate $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosServiceTemplate $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosServiceTemplatePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosServiceTemplatePeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosServiceTemplatePeer::DATABASE_NAME, NagiosServiceTemplatePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosServiceTemplate
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosServiceTemplatePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		$criteria->add(NagiosServiceTemplatePeer::ID, $pk);

		$v = NagiosServiceTemplatePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
			$criteria->add(NagiosServiceTemplatePeer::ID, $pks, Criteria::IN);
			$objs = NagiosServiceTemplatePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosServiceTemplatePeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosServiceTemplatePeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosServiceTemplatePeer class:
//
// Propel::getDatabaseMap(NagiosServiceTemplatePeer::DATABASE_NAME)->addTableBuilder(NagiosServiceTemplatePeer::TABLE_NAME, NagiosServiceTemplatePeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosServiceTemplatePeer::DATABASE_NAME)->addTableBuilder(BaseNagiosServiceTemplatePeer::TABLE_NAME, BaseNagiosServiceTemplatePeer::getMapBuilder());

