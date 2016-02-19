<?php

/**
 * Base static class for performing query and update operations on the 'nagios_host' table.
 *
 * Nagios Host
 *
 * @package    .om
 */
abstract class BaseNagiosHostPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_host';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosHost';

	/** The total number of columns. */
	const NUM_COLUMNS = 50;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_host.ID';

	/** the column name for the NAME field */
	const NAME = 'nagios_host.NAME';

	/** the column name for the ALIAS field */
	const ALIAS = 'nagios_host.ALIAS';

	/** the column name for the DISPLAY_NAME field */
	const DISPLAY_NAME = 'nagios_host.DISPLAY_NAME';

	/** the column name for the INITIAL_STATE field */
	const INITIAL_STATE = 'nagios_host.INITIAL_STATE';

	/** the column name for the ADDRESS field */
	const ADDRESS = 'nagios_host.ADDRESS';

	/** the column name for the CHECK_COMMAND field */
	const CHECK_COMMAND = 'nagios_host.CHECK_COMMAND';

	/** the column name for the RETRY_INTERVAL field */
	const RETRY_INTERVAL = 'nagios_host.RETRY_INTERVAL';

	/** the column name for the FIRST_NOTIFICATION_DELAY field */
	const FIRST_NOTIFICATION_DELAY = 'nagios_host.FIRST_NOTIFICATION_DELAY';

	/** the column name for the MAXIMUM_CHECK_ATTEMPTS field */
	const MAXIMUM_CHECK_ATTEMPTS = 'nagios_host.MAXIMUM_CHECK_ATTEMPTS';

	/** the column name for the CHECK_INTERVAL field */
	const CHECK_INTERVAL = 'nagios_host.CHECK_INTERVAL';

	/** the column name for the PASSIVE_CHECKS_ENABLED field */
	const PASSIVE_CHECKS_ENABLED = 'nagios_host.PASSIVE_CHECKS_ENABLED';

	/** the column name for the CHECK_PERIOD field */
	const CHECK_PERIOD = 'nagios_host.CHECK_PERIOD';

	/** the column name for the OBSESS_OVER_HOST field */
	const OBSESS_OVER_HOST = 'nagios_host.OBSESS_OVER_HOST';

	/** the column name for the CHECK_FRESHNESS field */
	const CHECK_FRESHNESS = 'nagios_host.CHECK_FRESHNESS';

	/** the column name for the FRESHNESS_THRESHOLD field */
	const FRESHNESS_THRESHOLD = 'nagios_host.FRESHNESS_THRESHOLD';

	/** the column name for the ACTIVE_CHECKS_ENABLED field */
	const ACTIVE_CHECKS_ENABLED = 'nagios_host.ACTIVE_CHECKS_ENABLED';

	/** the column name for the CHECKS_ENABLED field */
	const CHECKS_ENABLED = 'nagios_host.CHECKS_ENABLED';

	/** the column name for the EVENT_HANDLER field */
	const EVENT_HANDLER = 'nagios_host.EVENT_HANDLER';

	/** the column name for the EVENT_HANDLER_ENABLED field */
	const EVENT_HANDLER_ENABLED = 'nagios_host.EVENT_HANDLER_ENABLED';

	/** the column name for the LOW_FLAP_THRESHOLD field */
	const LOW_FLAP_THRESHOLD = 'nagios_host.LOW_FLAP_THRESHOLD';

	/** the column name for the HIGH_FLAP_THRESHOLD field */
	const HIGH_FLAP_THRESHOLD = 'nagios_host.HIGH_FLAP_THRESHOLD';

	/** the column name for the FLAP_DETECTION_ENABLED field */
	const FLAP_DETECTION_ENABLED = 'nagios_host.FLAP_DETECTION_ENABLED';

	/** the column name for the PROCESS_PERF_DATA field */
	const PROCESS_PERF_DATA = 'nagios_host.PROCESS_PERF_DATA';

	/** the column name for the RETAIN_STATUS_INFORMATION field */
	const RETAIN_STATUS_INFORMATION = 'nagios_host.RETAIN_STATUS_INFORMATION';

	/** the column name for the RETAIN_NONSTATUS_INFORMATION field */
	const RETAIN_NONSTATUS_INFORMATION = 'nagios_host.RETAIN_NONSTATUS_INFORMATION';

	/** the column name for the NOTIFICATION_INTERVAL field */
	const NOTIFICATION_INTERVAL = 'nagios_host.NOTIFICATION_INTERVAL';

	/** the column name for the NOTIFICATION_PERIOD field */
	const NOTIFICATION_PERIOD = 'nagios_host.NOTIFICATION_PERIOD';

	/** the column name for the NOTIFICATIONS_ENABLED field */
	const NOTIFICATIONS_ENABLED = 'nagios_host.NOTIFICATIONS_ENABLED';

	/** the column name for the NOTIFICATION_ON_DOWN field */
	const NOTIFICATION_ON_DOWN = 'nagios_host.NOTIFICATION_ON_DOWN';

	/** the column name for the NOTIFICATION_ON_UNREACHABLE field */
	const NOTIFICATION_ON_UNREACHABLE = 'nagios_host.NOTIFICATION_ON_UNREACHABLE';

	/** the column name for the NOTIFICATION_ON_RECOVERY field */
	const NOTIFICATION_ON_RECOVERY = 'nagios_host.NOTIFICATION_ON_RECOVERY';

	/** the column name for the NOTIFICATION_ON_FLAPPING field */
	const NOTIFICATION_ON_FLAPPING = 'nagios_host.NOTIFICATION_ON_FLAPPING';

	/** the column name for the NOTIFICATION_ON_SCHEDULED_DOWNTIME field */
	const NOTIFICATION_ON_SCHEDULED_DOWNTIME = 'nagios_host.NOTIFICATION_ON_SCHEDULED_DOWNTIME';

	/** the column name for the STALKING_ON_UP field */
	const STALKING_ON_UP = 'nagios_host.STALKING_ON_UP';

	/** the column name for the STALKING_ON_DOWN field */
	const STALKING_ON_DOWN = 'nagios_host.STALKING_ON_DOWN';

	/** the column name for the STALKING_ON_UNREACHABLE field */
	const STALKING_ON_UNREACHABLE = 'nagios_host.STALKING_ON_UNREACHABLE';

	/** the column name for the FAILURE_PREDICTION_ENABLED field */
	const FAILURE_PREDICTION_ENABLED = 'nagios_host.FAILURE_PREDICTION_ENABLED';

	/** the column name for the FLAP_DETECTION_ON_UP field */
	const FLAP_DETECTION_ON_UP = 'nagios_host.FLAP_DETECTION_ON_UP';

	/** the column name for the FLAP_DETECTION_ON_DOWN field */
	const FLAP_DETECTION_ON_DOWN = 'nagios_host.FLAP_DETECTION_ON_DOWN';

	/** the column name for the FLAP_DETECTION_ON_UNREACHABLE field */
	const FLAP_DETECTION_ON_UNREACHABLE = 'nagios_host.FLAP_DETECTION_ON_UNREACHABLE';

	/** the column name for the NOTES field */
	const NOTES = 'nagios_host.NOTES';

	/** the column name for the NOTES_URL field */
	const NOTES_URL = 'nagios_host.NOTES_URL';

	/** the column name for the ACTION_URL field */
	const ACTION_URL = 'nagios_host.ACTION_URL';

	/** the column name for the ICON_IMAGE field */
	const ICON_IMAGE = 'nagios_host.ICON_IMAGE';

	/** the column name for the ICON_IMAGE_ALT field */
	const ICON_IMAGE_ALT = 'nagios_host.ICON_IMAGE_ALT';

	/** the column name for the VRML_IMAGE field */
	const VRML_IMAGE = 'nagios_host.VRML_IMAGE';

	/** the column name for the STATUSMAP_IMAGE field */
	const STATUSMAP_IMAGE = 'nagios_host.STATUSMAP_IMAGE';

	/** the column name for the TWO_D_COORDS field */
	const TWO_D_COORDS = 'nagios_host.TWO_D_COORDS';

	/** the column name for the THREE_D_COORDS field */
	const THREE_D_COORDS = 'nagios_host.THREE_D_COORDS';

	/**
	 * An identiy map to hold any loaded instances of NagiosHost objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosHost[]
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
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Alias', 'DisplayName', 'InitialState', 'Address', 'CheckCommand', 'RetryInterval', 'FirstNotificationDelay', 'MaximumCheckAttempts', 'CheckInterval', 'PassiveChecksEnabled', 'CheckPeriod', 'ObsessOverHost', 'CheckFreshness', 'FreshnessThreshold', 'ActiveChecksEnabled', 'ChecksEnabled', 'EventHandler', 'EventHandlerEnabled', 'LowFlapThreshold', 'HighFlapThreshold', 'FlapDetectionEnabled', 'ProcessPerfData', 'RetainStatusInformation', 'RetainNonstatusInformation', 'NotificationInterval', 'NotificationPeriod', 'NotificationsEnabled', 'NotificationOnDown', 'NotificationOnUnreachable', 'NotificationOnRecovery', 'NotificationOnFlapping', 'NotificationOnScheduledDowntime', 'StalkingOnUp', 'StalkingOnDown', 'StalkingOnUnreachable', 'FailurePredictionEnabled', 'FlapDetectionOnUp', 'FlapDetectionOnDown', 'FlapDetectionOnUnreachable', 'Notes', 'NotesUrl', 'ActionUrl', 'IconImage', 'IconImageAlt', 'VrmlImage', 'StatusmapImage', 'TwoDCoords', 'ThreeDCoords', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'alias', 'displayName', 'initialState', 'address', 'checkCommand', 'retryInterval', 'firstNotificationDelay', 'maximumCheckAttempts', 'checkInterval', 'passiveChecksEnabled', 'checkPeriod', 'obsessOverHost', 'checkFreshness', 'freshnessThreshold', 'activeChecksEnabled', 'checksEnabled', 'eventHandler', 'eventHandlerEnabled', 'lowFlapThreshold', 'highFlapThreshold', 'flapDetectionEnabled', 'processPerfData', 'retainStatusInformation', 'retainNonstatusInformation', 'notificationInterval', 'notificationPeriod', 'notificationsEnabled', 'notificationOnDown', 'notificationOnUnreachable', 'notificationOnRecovery', 'notificationOnFlapping', 'notificationOnScheduledDowntime', 'stalkingOnUp', 'stalkingOnDown', 'stalkingOnUnreachable', 'failurePredictionEnabled', 'flapDetectionOnUp', 'flapDetectionOnDown', 'flapDetectionOnUnreachable', 'notes', 'notesUrl', 'actionUrl', 'iconImage', 'iconImageAlt', 'vrmlImage', 'statusmapImage', 'twoDCoords', 'threeDCoords', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::ALIAS, self::DISPLAY_NAME, self::INITIAL_STATE, self::ADDRESS, self::CHECK_COMMAND, self::RETRY_INTERVAL, self::FIRST_NOTIFICATION_DELAY, self::MAXIMUM_CHECK_ATTEMPTS, self::CHECK_INTERVAL, self::PASSIVE_CHECKS_ENABLED, self::CHECK_PERIOD, self::OBSESS_OVER_HOST, self::CHECK_FRESHNESS, self::FRESHNESS_THRESHOLD, self::ACTIVE_CHECKS_ENABLED, self::CHECKS_ENABLED, self::EVENT_HANDLER, self::EVENT_HANDLER_ENABLED, self::LOW_FLAP_THRESHOLD, self::HIGH_FLAP_THRESHOLD, self::FLAP_DETECTION_ENABLED, self::PROCESS_PERF_DATA, self::RETAIN_STATUS_INFORMATION, self::RETAIN_NONSTATUS_INFORMATION, self::NOTIFICATION_INTERVAL, self::NOTIFICATION_PERIOD, self::NOTIFICATIONS_ENABLED, self::NOTIFICATION_ON_DOWN, self::NOTIFICATION_ON_UNREACHABLE, self::NOTIFICATION_ON_RECOVERY, self::NOTIFICATION_ON_FLAPPING, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME, self::STALKING_ON_UP, self::STALKING_ON_DOWN, self::STALKING_ON_UNREACHABLE, self::FAILURE_PREDICTION_ENABLED, self::FLAP_DETECTION_ON_UP, self::FLAP_DETECTION_ON_DOWN, self::FLAP_DETECTION_ON_UNREACHABLE, self::NOTES, self::NOTES_URL, self::ACTION_URL, self::ICON_IMAGE, self::ICON_IMAGE_ALT, self::VRML_IMAGE, self::STATUSMAP_IMAGE, self::TWO_D_COORDS, self::THREE_D_COORDS, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'alias', 'display_name', 'initial_state', 'address', 'check_command', 'retry_interval', 'first_notification_delay', 'maximum_check_attempts', 'check_interval', 'passive_checks_enabled', 'check_period', 'obsess_over_host', 'check_freshness', 'freshness_threshold', 'active_checks_enabled', 'checks_enabled', 'event_handler', 'event_handler_enabled', 'low_flap_threshold', 'high_flap_threshold', 'flap_detection_enabled', 'process_perf_data', 'retain_status_information', 'retain_nonstatus_information', 'notification_interval', 'notification_period', 'notifications_enabled', 'notification_on_down', 'notification_on_unreachable', 'notification_on_recovery', 'notification_on_flapping', 'notification_on_scheduled_downtime', 'stalking_on_up', 'stalking_on_down', 'stalking_on_unreachable', 'failure_prediction_enabled', 'flap_detection_on_up', 'flap_detection_on_down', 'flap_detection_on_unreachable', 'notes', 'notes_url', 'action_url', 'icon_image', 'icon_image_alt', 'vrml_image', 'statusmap_image', 'two_d_coords', 'three_d_coords', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Alias' => 2, 'DisplayName' => 3, 'InitialState' => 4, 'Address' => 5, 'CheckCommand' => 6, 'RetryInterval' => 7, 'FirstNotificationDelay' => 8, 'MaximumCheckAttempts' => 9, 'CheckInterval' => 10, 'PassiveChecksEnabled' => 11, 'CheckPeriod' => 12, 'ObsessOverHost' => 13, 'CheckFreshness' => 14, 'FreshnessThreshold' => 15, 'ActiveChecksEnabled' => 16, 'ChecksEnabled' => 17, 'EventHandler' => 18, 'EventHandlerEnabled' => 19, 'LowFlapThreshold' => 20, 'HighFlapThreshold' => 21, 'FlapDetectionEnabled' => 22, 'ProcessPerfData' => 23, 'RetainStatusInformation' => 24, 'RetainNonstatusInformation' => 25, 'NotificationInterval' => 26, 'NotificationPeriod' => 27, 'NotificationsEnabled' => 28, 'NotificationOnDown' => 29, 'NotificationOnUnreachable' => 30, 'NotificationOnRecovery' => 31, 'NotificationOnFlapping' => 32, 'NotificationOnScheduledDowntime' => 33, 'StalkingOnUp' => 34, 'StalkingOnDown' => 35, 'StalkingOnUnreachable' => 36, 'FailurePredictionEnabled' => 37, 'FlapDetectionOnUp' => 38, 'FlapDetectionOnDown' => 39, 'FlapDetectionOnUnreachable' => 40, 'Notes' => 41, 'NotesUrl' => 42, 'ActionUrl' => 43, 'IconImage' => 44, 'IconImageAlt' => 45, 'VrmlImage' => 46, 'StatusmapImage' => 47, 'TwoDCoords' => 48, 'ThreeDCoords' => 49, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, 'displayName' => 3, 'initialState' => 4, 'address' => 5, 'checkCommand' => 6, 'retryInterval' => 7, 'firstNotificationDelay' => 8, 'maximumCheckAttempts' => 9, 'checkInterval' => 10, 'passiveChecksEnabled' => 11, 'checkPeriod' => 12, 'obsessOverHost' => 13, 'checkFreshness' => 14, 'freshnessThreshold' => 15, 'activeChecksEnabled' => 16, 'checksEnabled' => 17, 'eventHandler' => 18, 'eventHandlerEnabled' => 19, 'lowFlapThreshold' => 20, 'highFlapThreshold' => 21, 'flapDetectionEnabled' => 22, 'processPerfData' => 23, 'retainStatusInformation' => 24, 'retainNonstatusInformation' => 25, 'notificationInterval' => 26, 'notificationPeriod' => 27, 'notificationsEnabled' => 28, 'notificationOnDown' => 29, 'notificationOnUnreachable' => 30, 'notificationOnRecovery' => 31, 'notificationOnFlapping' => 32, 'notificationOnScheduledDowntime' => 33, 'stalkingOnUp' => 34, 'stalkingOnDown' => 35, 'stalkingOnUnreachable' => 36, 'failurePredictionEnabled' => 37, 'flapDetectionOnUp' => 38, 'flapDetectionOnDown' => 39, 'flapDetectionOnUnreachable' => 40, 'notes' => 41, 'notesUrl' => 42, 'actionUrl' => 43, 'iconImage' => 44, 'iconImageAlt' => 45, 'vrmlImage' => 46, 'statusmapImage' => 47, 'twoDCoords' => 48, 'threeDCoords' => 49, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::ALIAS => 2, self::DISPLAY_NAME => 3, self::INITIAL_STATE => 4, self::ADDRESS => 5, self::CHECK_COMMAND => 6, self::RETRY_INTERVAL => 7, self::FIRST_NOTIFICATION_DELAY => 8, self::MAXIMUM_CHECK_ATTEMPTS => 9, self::CHECK_INTERVAL => 10, self::PASSIVE_CHECKS_ENABLED => 11, self::CHECK_PERIOD => 12, self::OBSESS_OVER_HOST => 13, self::CHECK_FRESHNESS => 14, self::FRESHNESS_THRESHOLD => 15, self::ACTIVE_CHECKS_ENABLED => 16, self::CHECKS_ENABLED => 17, self::EVENT_HANDLER => 18, self::EVENT_HANDLER_ENABLED => 19, self::LOW_FLAP_THRESHOLD => 20, self::HIGH_FLAP_THRESHOLD => 21, self::FLAP_DETECTION_ENABLED => 22, self::PROCESS_PERF_DATA => 23, self::RETAIN_STATUS_INFORMATION => 24, self::RETAIN_NONSTATUS_INFORMATION => 25, self::NOTIFICATION_INTERVAL => 26, self::NOTIFICATION_PERIOD => 27, self::NOTIFICATIONS_ENABLED => 28, self::NOTIFICATION_ON_DOWN => 29, self::NOTIFICATION_ON_UNREACHABLE => 30, self::NOTIFICATION_ON_RECOVERY => 31, self::NOTIFICATION_ON_FLAPPING => 32, self::NOTIFICATION_ON_SCHEDULED_DOWNTIME => 33, self::STALKING_ON_UP => 34, self::STALKING_ON_DOWN => 35, self::STALKING_ON_UNREACHABLE => 36, self::FAILURE_PREDICTION_ENABLED => 37, self::FLAP_DETECTION_ON_UP => 38, self::FLAP_DETECTION_ON_DOWN => 39, self::FLAP_DETECTION_ON_UNREACHABLE => 40, self::NOTES => 41, self::NOTES_URL => 42, self::ACTION_URL => 43, self::ICON_IMAGE => 44, self::ICON_IMAGE_ALT => 45, self::VRML_IMAGE => 46, self::STATUSMAP_IMAGE => 47, self::TWO_D_COORDS => 48, self::THREE_D_COORDS => 49, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, 'display_name' => 3, 'initial_state' => 4, 'address' => 5, 'check_command' => 6, 'retry_interval' => 7, 'first_notification_delay' => 8, 'maximum_check_attempts' => 9, 'check_interval' => 10, 'passive_checks_enabled' => 11, 'check_period' => 12, 'obsess_over_host' => 13, 'check_freshness' => 14, 'freshness_threshold' => 15, 'active_checks_enabled' => 16, 'checks_enabled' => 17, 'event_handler' => 18, 'event_handler_enabled' => 19, 'low_flap_threshold' => 20, 'high_flap_threshold' => 21, 'flap_detection_enabled' => 22, 'process_perf_data' => 23, 'retain_status_information' => 24, 'retain_nonstatus_information' => 25, 'notification_interval' => 26, 'notification_period' => 27, 'notifications_enabled' => 28, 'notification_on_down' => 29, 'notification_on_unreachable' => 30, 'notification_on_recovery' => 31, 'notification_on_flapping' => 32, 'notification_on_scheduled_downtime' => 33, 'stalking_on_up' => 34, 'stalking_on_down' => 35, 'stalking_on_unreachable' => 36, 'failure_prediction_enabled' => 37, 'flap_detection_on_up' => 38, 'flap_detection_on_down' => 39, 'flap_detection_on_unreachable' => 40, 'notes' => 41, 'notes_url' => 42, 'action_url' => 43, 'icon_image' => 44, 'icon_image_alt' => 45, 'vrml_image' => 46, 'statusmap_image' => 47, 'two_d_coords' => 48, 'three_d_coords' => 49, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, 33, 34, 35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48, 49, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosHostMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. NagiosHostPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosHostPeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(NagiosHostPeer::ID);

		$criteria->addSelectColumn(NagiosHostPeer::NAME);

		$criteria->addSelectColumn(NagiosHostPeer::ALIAS);

		$criteria->addSelectColumn(NagiosHostPeer::DISPLAY_NAME);

		$criteria->addSelectColumn(NagiosHostPeer::INITIAL_STATE);

		$criteria->addSelectColumn(NagiosHostPeer::ADDRESS);

		$criteria->addSelectColumn(NagiosHostPeer::CHECK_COMMAND);

		$criteria->addSelectColumn(NagiosHostPeer::RETRY_INTERVAL);

		$criteria->addSelectColumn(NagiosHostPeer::FIRST_NOTIFICATION_DELAY);

		$criteria->addSelectColumn(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS);

		$criteria->addSelectColumn(NagiosHostPeer::CHECK_INTERVAL);

		$criteria->addSelectColumn(NagiosHostPeer::PASSIVE_CHECKS_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::CHECK_PERIOD);

		$criteria->addSelectColumn(NagiosHostPeer::OBSESS_OVER_HOST);

		$criteria->addSelectColumn(NagiosHostPeer::CHECK_FRESHNESS);

		$criteria->addSelectColumn(NagiosHostPeer::FRESHNESS_THRESHOLD);

		$criteria->addSelectColumn(NagiosHostPeer::ACTIVE_CHECKS_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::CHECKS_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::EVENT_HANDLER);

		$criteria->addSelectColumn(NagiosHostPeer::EVENT_HANDLER_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::LOW_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosHostPeer::HIGH_FLAP_THRESHOLD);

		$criteria->addSelectColumn(NagiosHostPeer::FLAP_DETECTION_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::PROCESS_PERF_DATA);

		$criteria->addSelectColumn(NagiosHostPeer::RETAIN_STATUS_INFORMATION);

		$criteria->addSelectColumn(NagiosHostPeer::RETAIN_NONSTATUS_INFORMATION);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_INTERVAL);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_PERIOD);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATIONS_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_ON_DOWN);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_ON_UNREACHABLE);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_ON_RECOVERY);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_ON_FLAPPING);

		$criteria->addSelectColumn(NagiosHostPeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME);

		$criteria->addSelectColumn(NagiosHostPeer::STALKING_ON_UP);

		$criteria->addSelectColumn(NagiosHostPeer::STALKING_ON_DOWN);

		$criteria->addSelectColumn(NagiosHostPeer::STALKING_ON_UNREACHABLE);

		$criteria->addSelectColumn(NagiosHostPeer::FAILURE_PREDICTION_ENABLED);

		$criteria->addSelectColumn(NagiosHostPeer::FLAP_DETECTION_ON_UP);

		$criteria->addSelectColumn(NagiosHostPeer::FLAP_DETECTION_ON_DOWN);

		$criteria->addSelectColumn(NagiosHostPeer::FLAP_DETECTION_ON_UNREACHABLE);

		$criteria->addSelectColumn(NagiosHostPeer::NOTES);

		$criteria->addSelectColumn(NagiosHostPeer::NOTES_URL);

		$criteria->addSelectColumn(NagiosHostPeer::ACTION_URL);

		$criteria->addSelectColumn(NagiosHostPeer::ICON_IMAGE);

		$criteria->addSelectColumn(NagiosHostPeer::ICON_IMAGE_ALT);

		$criteria->addSelectColumn(NagiosHostPeer::VRML_IMAGE);

		$criteria->addSelectColumn(NagiosHostPeer::STATUSMAP_IMAGE);

		$criteria->addSelectColumn(NagiosHostPeer::TWO_D_COORDS);

		$criteria->addSelectColumn(NagiosHostPeer::THREE_D_COORDS);

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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosHost
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosHostPeer::doSelect($critcopy, $con);
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
		return NagiosHostPeer::populateObjects(NagiosHostPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosHostPeer::addSelectColumns($criteria);
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
	 * @param      NagiosHost $value A NagiosHost object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosHost $obj, $key = null)
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
	 * @param      mixed $value A NagiosHost object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosHost) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosHost object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosHost Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = NagiosHostPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosHostPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosHostPeer::addInstanceToPool($obj, $key);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosHost objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to $obj2 (NagiosCommand)
				$obj2->addNagiosHostRelatedByCheckCommand($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with their NagiosCommand objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosCommandPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to $obj2 (NagiosCommand)
				$obj2->addNagiosHostRelatedByEventHandler($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosHostRelatedByCheckPeriod($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosHostRelatedByNotificationPeriod($obj1);

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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosHost objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol2 = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol5 = $startcol4 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol6 = $startcol5 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		$c->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosHostRelatedByCheckCommand($obj1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosHostRelatedByEventHandler($obj1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj4 (NagiosTimeperiod)
				$obj4->addNagiosHostRelatedByCheckPeriod($obj1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj5 (NagiosTimeperiod)
				$obj5->addNagiosHostRelatedByNotificationPeriod($obj1);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
		$criteria->setPrimaryTableName(NagiosHostPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosHostPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
				$criteria->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$criteria->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosHost objects pre-filled with all related objects except NagiosCommandRelatedByCheckCommand.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol2 = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj2 (NagiosTimeperiod)
				$obj2->addNagiosHostRelatedByCheckPeriod($obj1);

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

				// Add the $obj1 (NagiosHost) to the collection in $obj3 (NagiosTimeperiod)
				$obj3->addNagiosHostRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with all related objects except NagiosCommandRelatedByEventHandler.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol2 = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosHostPeer::CHECK_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosHostPeer::NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj2 (NagiosTimeperiod)
				$obj2->addNagiosHostRelatedByCheckPeriod($obj1);

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

				// Add the $obj1 (NagiosHost) to the collection in $obj3 (NagiosTimeperiod)
				$obj3->addNagiosHostRelatedByNotificationPeriod($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with all related objects except NagiosTimeperiodRelatedByCheckPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol2 = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosHostRelatedByCheckCommand($obj1);

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

				// Add the $obj1 (NagiosHost) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosHostRelatedByEventHandler($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosHost objects pre-filled with all related objects except NagiosTimeperiodRelatedByNotificationPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosHost objects.
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

		NagiosHostPeer::addSelectColumns($c);
		$startcol2 = (NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosCommandPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosCommandPeer::NUM_COLUMNS - NagiosCommandPeer::NUM_LAZY_LOAD_COLUMNS);

				$c->addJoin(array(NagiosHostPeer::CHECK_COMMAND,), array(NagiosCommandPeer::ID,), $join_behavior);
				$c->addJoin(array(NagiosHostPeer::EVENT_HANDLER,), array(NagiosCommandPeer::ID,), $join_behavior);

		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosHostPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosHostPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosHostPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosHost) to the collection in $obj2 (NagiosCommand)
				$obj2->addNagiosHostRelatedByCheckCommand($obj1);

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

				// Add the $obj1 (NagiosHost) to the collection in $obj3 (NagiosCommand)
				$obj3->addNagiosHostRelatedByEventHandler($obj1);

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
		return NagiosHostPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosHost or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosHost object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosHost object
		}

		if ($criteria->containsKey(NagiosHostPeer::ID) && $criteria->keyContainsValue(NagiosHostPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosHostPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a NagiosHost or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosHost object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosHostPeer::ID);
			$selectCriteria->add(NagiosHostPeer::ID, $criteria->remove(NagiosHostPeer::ID), $comparison);

		} else { // $values is NagiosHost object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_host table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosHostPeer::doOnDeleteCascade(new Criteria(NagiosHostPeer::DATABASE_NAME), $con);
			NagiosHostPeer::doOnDeleteSetNull(new Criteria(NagiosHostPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosHostPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosHost or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosHost object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosHostPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosHost) {
			// invalidate the cache for this single object
			NagiosHostPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosHostPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosHostPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosHostPeer::doOnDeleteCascade($criteria, $con);
			NagiosHostPeer::doOnDeleteSetNull($criteria, $con);
			
				// Because this db requires some delete cascade/set null emulation, we have to
				// clear the cached instance *after* the emulation has happened (since
				// instances get re-added by the select statement contained therein).
				if ($values instanceof Criteria) {
					NagiosHostPeer::clearInstancePool();
				} else { // it's a PK or object
					NagiosHostPeer::removeInstanceFromPool($values);
				}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			// invalidate objects in NagiosServicePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServicePeer::clearInstancePool();

			// invalidate objects in NagiosHostContactMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostContactMemberPeer::clearInstancePool();

			// invalidate objects in NagiosDependencyPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosDependencyPeer::clearInstancePool();

			// invalidate objects in NagiosDependencyTargetPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosDependencyTargetPeer::clearInstancePool();

			// invalidate objects in NagiosEscalationPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosEscalationPeer::clearInstancePool();

			// invalidate objects in NagiosHostContactgroupPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostContactgroupPeer::clearInstancePool();

			// invalidate objects in NagiosHostgroupMembershipPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostgroupMembershipPeer::clearInstancePool();

			// invalidate objects in NagiosHostCheckCommandParameterPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostCheckCommandParameterPeer::clearInstancePool();

			// invalidate objects in NagiosHostParentPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostParentPeer::clearInstancePool();

			// invalidate objects in NagiosHostParentPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostParentPeer::clearInstancePool();

			// invalidate objects in NagiosHostTemplateInheritancePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostTemplateInheritancePeer::clearInstancePool();

			// invalidate objects in AutodiscoveryDevicePeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			AutodiscoveryDevicePeer::clearInstancePool();

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
		$objects = NagiosHostPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosService objects
			$c = new Criteria(NagiosServicePeer::DATABASE_NAME);
			
			$c->add(NagiosServicePeer::HOST, $obj->getId());
			$affectedRows += NagiosServicePeer::doDelete($c, $con);

			// delete related NagiosHostContactMember objects
			$c = new Criteria(NagiosHostContactMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosHostContactMemberPeer::HOST, $obj->getId());
			$affectedRows += NagiosHostContactMemberPeer::doDelete($c, $con);

			// delete related NagiosDependency objects
			$c = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
			
			$c->add(NagiosDependencyPeer::HOST, $obj->getId());
			$affectedRows += NagiosDependencyPeer::doDelete($c, $con);

			// delete related NagiosDependencyTarget objects
			$c = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
			
			$c->add(NagiosDependencyTargetPeer::TARGET_HOST, $obj->getId());
			$affectedRows += NagiosDependencyTargetPeer::doDelete($c, $con);

			// delete related NagiosEscalation objects
			$c = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
			
			$c->add(NagiosEscalationPeer::HOST, $obj->getId());
			$affectedRows += NagiosEscalationPeer::doDelete($c, $con);

			// delete related NagiosHostContactgroup objects
			$c = new Criteria(NagiosHostContactgroupPeer::DATABASE_NAME);
			
			$c->add(NagiosHostContactgroupPeer::HOST, $obj->getId());
			$affectedRows += NagiosHostContactgroupPeer::doDelete($c, $con);

			// delete related NagiosHostgroupMembership objects
			$c = new Criteria(NagiosHostgroupMembershipPeer::DATABASE_NAME);
			
			$c->add(NagiosHostgroupMembershipPeer::HOST, $obj->getId());
			$affectedRows += NagiosHostgroupMembershipPeer::doDelete($c, $con);

			// delete related NagiosHostCheckCommandParameter objects
			$c = new Criteria(NagiosHostCheckCommandParameterPeer::DATABASE_NAME);
			
			$c->add(NagiosHostCheckCommandParameterPeer::HOST, $obj->getId());
			$affectedRows += NagiosHostCheckCommandParameterPeer::doDelete($c, $con);

			// delete related NagiosHostParent objects
			$c = new Criteria(NagiosHostParentPeer::DATABASE_NAME);
			
			$c->add(NagiosHostParentPeer::CHILD_HOST, $obj->getId());
			$affectedRows += NagiosHostParentPeer::doDelete($c, $con);

			// delete related NagiosHostParent objects
			$c = new Criteria(NagiosHostParentPeer::DATABASE_NAME);
			
			$c->add(NagiosHostParentPeer::PARENT_HOST, $obj->getId());
			$affectedRows += NagiosHostParentPeer::doDelete($c, $con);

			// delete related NagiosHostTemplateInheritance objects
			$c = new Criteria(NagiosHostTemplateInheritancePeer::DATABASE_NAME);
			
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $obj->getId());
			$affectedRows += NagiosHostTemplateInheritancePeer::doDelete($c, $con);
		}
		return $affectedRows;
	}

	/**
	 * This is a method for emulating ON DELETE SET NULL DBs that don't support this
	 * feature (like MySQL or SQLite).
	 *
	 * This method is not very speedy because it must perform a query first to get
	 * the implicated records and then perform the deletes by calling those Peer classes.
	 *
	 * This method should be used within a transaction if possible.
	 *
	 * @param      Criteria $criteria
	 * @param      PropelPDO $con
	 * @return     void
	 */
	protected static function doOnDeleteSetNull(Criteria $criteria, PropelPDO $con)
	{

		// first find the objects that are implicated by the $criteria
		$objects = NagiosHostPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {

			// set fkey col in related AutodiscoveryDevice rows to NULL
			$selectCriteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
			$updateValues = new Criteria(NagiosHostPeer::DATABASE_NAME);
			$selectCriteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $obj->getId());
			$updateValues->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, null);

					BasePeer::doUpdate($selectCriteria, $updateValues, $con); // use BasePeer because generated Peer doUpdate() methods only update using pkey

		}
	}

	/**
	 * Validates all modified columns of given NagiosHost object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosHost $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosHost $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosHostPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosHostPeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosHostPeer::DATABASE_NAME, NagiosHostPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosHost
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosHostPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		$criteria->add(NagiosHostPeer::ID, $pk);

		$v = NagiosHostPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
			$criteria->add(NagiosHostPeer::ID, $pks, Criteria::IN);
			$objs = NagiosHostPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosHostPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosHostPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosHostPeer class:
//
// Propel::getDatabaseMap(NagiosHostPeer::DATABASE_NAME)->addTableBuilder(NagiosHostPeer::TABLE_NAME, NagiosHostPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosHostPeer::DATABASE_NAME)->addTableBuilder(BaseNagiosHostPeer::TABLE_NAME, BaseNagiosHostPeer::getMapBuilder());

