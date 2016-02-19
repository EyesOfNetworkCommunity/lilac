<?php

/**
 * Base static class for performing query and update operations on the 'nagios_contact' table.
 *
 * Nagios Contact
 *
 * @package    .om
 */
abstract class BaseNagiosContactPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_contact';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosContact';

	/** The total number of columns. */
	const NUM_COLUMNS = 22;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_contact.ID';

	/** the column name for the NAME field */
	const NAME = 'nagios_contact.NAME';

	/** the column name for the ALIAS field */
	const ALIAS = 'nagios_contact.ALIAS';

	/** the column name for the EMAIL field */
	const EMAIL = 'nagios_contact.EMAIL';

	/** the column name for the PAGER field */
	const PAGER = 'nagios_contact.PAGER';

	/** the column name for the HOST_NOTIFICATIONS_ENABLED field */
	const HOST_NOTIFICATIONS_ENABLED = 'nagios_contact.HOST_NOTIFICATIONS_ENABLED';

	/** the column name for the SERVICE_NOTIFICATIONS_ENABLED field */
	const SERVICE_NOTIFICATIONS_ENABLED = 'nagios_contact.SERVICE_NOTIFICATIONS_ENABLED';

	/** the column name for the HOST_NOTIFICATION_PERIOD field */
	const HOST_NOTIFICATION_PERIOD = 'nagios_contact.HOST_NOTIFICATION_PERIOD';

	/** the column name for the SERVICE_NOTIFICATION_PERIOD field */
	const SERVICE_NOTIFICATION_PERIOD = 'nagios_contact.SERVICE_NOTIFICATION_PERIOD';

	/** the column name for the HOST_NOTIFICATION_ON_DOWN field */
	const HOST_NOTIFICATION_ON_DOWN = 'nagios_contact.HOST_NOTIFICATION_ON_DOWN';

	/** the column name for the HOST_NOTIFICATION_ON_UNREACHABLE field */
	const HOST_NOTIFICATION_ON_UNREACHABLE = 'nagios_contact.HOST_NOTIFICATION_ON_UNREACHABLE';

	/** the column name for the HOST_NOTIFICATION_ON_RECOVERY field */
	const HOST_NOTIFICATION_ON_RECOVERY = 'nagios_contact.HOST_NOTIFICATION_ON_RECOVERY';

	/** the column name for the HOST_NOTIFICATION_ON_FLAPPING field */
	const HOST_NOTIFICATION_ON_FLAPPING = 'nagios_contact.HOST_NOTIFICATION_ON_FLAPPING';

	/** the column name for the HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME field */
	const HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME = 'nagios_contact.HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME';

	/** the column name for the SERVICE_NOTIFICATION_ON_WARNING field */
	const SERVICE_NOTIFICATION_ON_WARNING = 'nagios_contact.SERVICE_NOTIFICATION_ON_WARNING';

	/** the column name for the SERVICE_NOTIFICATION_ON_UNKNOWN field */
	const SERVICE_NOTIFICATION_ON_UNKNOWN = 'nagios_contact.SERVICE_NOTIFICATION_ON_UNKNOWN';

	/** the column name for the SERVICE_NOTIFICATION_ON_CRITICAL field */
	const SERVICE_NOTIFICATION_ON_CRITICAL = 'nagios_contact.SERVICE_NOTIFICATION_ON_CRITICAL';

	/** the column name for the SERVICE_NOTIFICATION_ON_RECOVERY field */
	const SERVICE_NOTIFICATION_ON_RECOVERY = 'nagios_contact.SERVICE_NOTIFICATION_ON_RECOVERY';

	/** the column name for the SERVICE_NOTIFICATION_ON_FLAPPING field */
	const SERVICE_NOTIFICATION_ON_FLAPPING = 'nagios_contact.SERVICE_NOTIFICATION_ON_FLAPPING';

	/** the column name for the CAN_SUBMIT_COMMANDS field */
	const CAN_SUBMIT_COMMANDS = 'nagios_contact.CAN_SUBMIT_COMMANDS';

	/** the column name for the RETAIN_STATUS_INFORMATION field */
	const RETAIN_STATUS_INFORMATION = 'nagios_contact.RETAIN_STATUS_INFORMATION';

	/** the column name for the RETAIN_NONSTATUS_INFORMATION field */
	const RETAIN_NONSTATUS_INFORMATION = 'nagios_contact.RETAIN_NONSTATUS_INFORMATION';

	/**
	 * An identiy map to hold any loaded instances of NagiosContact objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosContact[]
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
		BasePeer::TYPE_PHPNAME => array ('Id', 'Name', 'Alias', 'Email', 'Pager', 'HostNotificationsEnabled', 'ServiceNotificationsEnabled', 'HostNotificationPeriod', 'ServiceNotificationPeriod', 'HostNotificationOnDown', 'HostNotificationOnUnreachable', 'HostNotificationOnRecovery', 'HostNotificationOnFlapping', 'HostNotificationOnScheduledDowntime', 'ServiceNotificationOnWarning', 'ServiceNotificationOnUnknown', 'ServiceNotificationOnCritical', 'ServiceNotificationOnRecovery', 'ServiceNotificationOnFlapping', 'CanSubmitCommands', 'RetainStatusInformation', 'RetainNonstatusInformation', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'name', 'alias', 'email', 'pager', 'hostNotificationsEnabled', 'serviceNotificationsEnabled', 'hostNotificationPeriod', 'serviceNotificationPeriod', 'hostNotificationOnDown', 'hostNotificationOnUnreachable', 'hostNotificationOnRecovery', 'hostNotificationOnFlapping', 'hostNotificationOnScheduledDowntime', 'serviceNotificationOnWarning', 'serviceNotificationOnUnknown', 'serviceNotificationOnCritical', 'serviceNotificationOnRecovery', 'serviceNotificationOnFlapping', 'canSubmitCommands', 'retainStatusInformation', 'retainNonstatusInformation', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::NAME, self::ALIAS, self::EMAIL, self::PAGER, self::HOST_NOTIFICATIONS_ENABLED, self::SERVICE_NOTIFICATIONS_ENABLED, self::HOST_NOTIFICATION_PERIOD, self::SERVICE_NOTIFICATION_PERIOD, self::HOST_NOTIFICATION_ON_DOWN, self::HOST_NOTIFICATION_ON_UNREACHABLE, self::HOST_NOTIFICATION_ON_RECOVERY, self::HOST_NOTIFICATION_ON_FLAPPING, self::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME, self::SERVICE_NOTIFICATION_ON_WARNING, self::SERVICE_NOTIFICATION_ON_UNKNOWN, self::SERVICE_NOTIFICATION_ON_CRITICAL, self::SERVICE_NOTIFICATION_ON_RECOVERY, self::SERVICE_NOTIFICATION_ON_FLAPPING, self::CAN_SUBMIT_COMMANDS, self::RETAIN_STATUS_INFORMATION, self::RETAIN_NONSTATUS_INFORMATION, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'name', 'alias', 'email', 'pager', 'host_notifications_enabled', 'service_notifications_enabled', 'host_notification_period', 'service_notification_period', 'host_notification_on_down', 'host_notification_on_unreachable', 'host_notification_on_recovery', 'host_notification_on_flapping', 'host_notification_on_scheduled_downtime', 'service_notification_on_warning', 'service_notification_on_unknown', 'service_notification_on_critical', 'service_notification_on_recovery', 'service_notification_on_flapping', 'can_submit_commands', 'retain_status_information', 'retain_nonstatus_information', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Name' => 1, 'Alias' => 2, 'Email' => 3, 'Pager' => 4, 'HostNotificationsEnabled' => 5, 'ServiceNotificationsEnabled' => 6, 'HostNotificationPeriod' => 7, 'ServiceNotificationPeriod' => 8, 'HostNotificationOnDown' => 9, 'HostNotificationOnUnreachable' => 10, 'HostNotificationOnRecovery' => 11, 'HostNotificationOnFlapping' => 12, 'HostNotificationOnScheduledDowntime' => 13, 'ServiceNotificationOnWarning' => 14, 'ServiceNotificationOnUnknown' => 15, 'ServiceNotificationOnCritical' => 16, 'ServiceNotificationOnRecovery' => 17, 'ServiceNotificationOnFlapping' => 18, 'CanSubmitCommands' => 19, 'RetainStatusInformation' => 20, 'RetainNonstatusInformation' => 21, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, 'email' => 3, 'pager' => 4, 'hostNotificationsEnabled' => 5, 'serviceNotificationsEnabled' => 6, 'hostNotificationPeriod' => 7, 'serviceNotificationPeriod' => 8, 'hostNotificationOnDown' => 9, 'hostNotificationOnUnreachable' => 10, 'hostNotificationOnRecovery' => 11, 'hostNotificationOnFlapping' => 12, 'hostNotificationOnScheduledDowntime' => 13, 'serviceNotificationOnWarning' => 14, 'serviceNotificationOnUnknown' => 15, 'serviceNotificationOnCritical' => 16, 'serviceNotificationOnRecovery' => 17, 'serviceNotificationOnFlapping' => 18, 'canSubmitCommands' => 19, 'retainStatusInformation' => 20, 'retainNonstatusInformation' => 21, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::NAME => 1, self::ALIAS => 2, self::EMAIL => 3, self::PAGER => 4, self::HOST_NOTIFICATIONS_ENABLED => 5, self::SERVICE_NOTIFICATIONS_ENABLED => 6, self::HOST_NOTIFICATION_PERIOD => 7, self::SERVICE_NOTIFICATION_PERIOD => 8, self::HOST_NOTIFICATION_ON_DOWN => 9, self::HOST_NOTIFICATION_ON_UNREACHABLE => 10, self::HOST_NOTIFICATION_ON_RECOVERY => 11, self::HOST_NOTIFICATION_ON_FLAPPING => 12, self::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME => 13, self::SERVICE_NOTIFICATION_ON_WARNING => 14, self::SERVICE_NOTIFICATION_ON_UNKNOWN => 15, self::SERVICE_NOTIFICATION_ON_CRITICAL => 16, self::SERVICE_NOTIFICATION_ON_RECOVERY => 17, self::SERVICE_NOTIFICATION_ON_FLAPPING => 18, self::CAN_SUBMIT_COMMANDS => 19, self::RETAIN_STATUS_INFORMATION => 20, self::RETAIN_NONSTATUS_INFORMATION => 21, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'name' => 1, 'alias' => 2, 'email' => 3, 'pager' => 4, 'host_notifications_enabled' => 5, 'service_notifications_enabled' => 6, 'host_notification_period' => 7, 'service_notification_period' => 8, 'host_notification_on_down' => 9, 'host_notification_on_unreachable' => 10, 'host_notification_on_recovery' => 11, 'host_notification_on_flapping' => 12, 'host_notification_on_scheduled_downtime' => 13, 'service_notification_on_warning' => 14, 'service_notification_on_unknown' => 15, 'service_notification_on_critical' => 16, 'service_notification_on_recovery' => 17, 'service_notification_on_flapping' => 18, 'can_submit_commands' => 19, 'retain_status_information' => 20, 'retain_nonstatus_information' => 21, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosContactMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. NagiosContactPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosContactPeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(NagiosContactPeer::ID);

		$criteria->addSelectColumn(NagiosContactPeer::NAME);

		$criteria->addSelectColumn(NagiosContactPeer::ALIAS);

		$criteria->addSelectColumn(NagiosContactPeer::EMAIL);

		$criteria->addSelectColumn(NagiosContactPeer::PAGER);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATIONS_ENABLED);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_PERIOD);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING);

		$criteria->addSelectColumn(NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY);

		$criteria->addSelectColumn(NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING);

		$criteria->addSelectColumn(NagiosContactPeer::CAN_SUBMIT_COMMANDS);

		$criteria->addSelectColumn(NagiosContactPeer::RETAIN_STATUS_INFORMATION);

		$criteria->addSelectColumn(NagiosContactPeer::RETAIN_NONSTATUS_INFORMATION);

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
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosContact
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosContactPeer::doSelect($critcopy, $con);
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
		return NagiosContactPeer::populateObjects(NagiosContactPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosContactPeer::addSelectColumns($criteria);
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
	 * @param      NagiosContact $value A NagiosContact object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosContact $obj, $key = null)
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
	 * @param      mixed $value A NagiosContact object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosContact) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosContact object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosContact Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = NagiosContactPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosContactPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosContactPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}

	/**
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByHostNotificationPeriod table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosTimeperiodRelatedByHostNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosContactPeer::HOST_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByServiceNotificationPeriod table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosTimeperiodRelatedByServiceNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosContact objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosContact objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByHostNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosContactPeer::addSelectColumns($c);
		$startcol = (NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosContactPeer::HOST_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosContactPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosContactPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosContactPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosContact) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosContactRelatedByHostNotificationPeriod($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosContact objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosContact objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiodRelatedByServiceNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosContactPeer::addSelectColumns($c);
		$startcol = (NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS);
		NagiosTimeperiodPeer::addSelectColumns($c);

		$c->addJoin(array(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosContactPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$omClass = NagiosContactPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosContactPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosContact) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosContactRelatedByServiceNotificationPeriod($obj1);

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
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(array(NagiosContactPeer::HOST_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$criteria->addJoin(array(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
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
	 * Selects a collection of NagiosContact objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosContact objects.
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

		NagiosContactPeer::addSelectColumns($c);
		$startcol2 = (NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol3 = $startcol2 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		NagiosTimeperiodPeer::addSelectColumns($c);
		$startcol4 = $startcol3 + (NagiosTimeperiodPeer::NUM_COLUMNS - NagiosTimeperiodPeer::NUM_LAZY_LOAD_COLUMNS);

		$c->addJoin(array(NagiosContactPeer::HOST_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$c->addJoin(array(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD,), array(NagiosTimeperiodPeer::ID,), $join_behavior);
		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosContactPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosContactPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosContactPeer::addInstanceToPool($obj1, $key1);
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
				} // if obj2 loaded

				// Add the $obj1 (NagiosContact) to the collection in $obj2 (NagiosTimeperiod)
				$obj2->addNagiosContactRelatedByHostNotificationPeriod($obj1);
			} // if joined row not null

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
				} // if obj3 loaded

				// Add the $obj1 (NagiosContact) to the collection in $obj3 (NagiosTimeperiod)
				$obj3->addNagiosContactRelatedByServiceNotificationPeriod($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByHostNotificationPeriod table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosTimeperiodRelatedByHostNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiodRelatedByServiceNotificationPeriod table
	 *
	 * @param      Criteria $c
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosTimeperiodRelatedByServiceNotificationPeriod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosContactPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosContactPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * Selects a collection of NagiosContact objects pre-filled with all related objects except NagiosTimeperiodRelatedByHostNotificationPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosContact objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByHostNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosContactPeer::addSelectColumns($c);
		$startcol2 = (NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosContactPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosContactPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosContactPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosContact objects pre-filled with all related objects except NagiosTimeperiodRelatedByServiceNotificationPeriod.
	 *
	 * @param      Criteria  $c
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosContact objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiodRelatedByServiceNotificationPeriod(Criteria $c, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$c = clone $c;

		// Set the correct dbName if it has not been overridden
		// $c->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($c->getDbName() == Propel::getDefaultDB()) {
			$c->setDbName(self::DATABASE_NAME);
		}

		NagiosContactPeer::addSelectColumns($c);
		$startcol2 = (NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS);


		$stmt = BasePeer::doSelect($c, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosContactPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosContactPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$omClass = NagiosContactPeer::getOMClass();

				$cls = substr('.'.$omClass, strrpos('.'.$omClass, '.') + 1);
				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosContactPeer::addInstanceToPool($obj1, $key1);
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
		return NagiosContactPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosContact or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosContact object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosContact object
		}

		if ($criteria->containsKey(NagiosContactPeer::ID) && $criteria->keyContainsValue(NagiosContactPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosContactPeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a NagiosContact or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosContact object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosContactPeer::ID);
			$selectCriteria->add(NagiosContactPeer::ID, $criteria->remove(NagiosContactPeer::ID), $comparison);

		} else { // $values is NagiosContact object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_contact table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosContactPeer::doOnDeleteCascade(new Criteria(NagiosContactPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosContactPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosContact or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosContact object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosContactPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosContact) {
			// invalidate the cache for this single object
			NagiosContactPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosContactPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosContactPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosContactPeer::doOnDeleteCascade($criteria, $con);
			
				// Because this db requires some delete cascade/set null emulation, we have to
				// clear the cached instance *after* the emulation has happened (since
				// instances get re-added by the select statement contained therein).
				if ($values instanceof Criteria) {
					NagiosContactPeer::clearInstancePool();
				} else { // it's a PK or object
					NagiosContactPeer::removeInstanceFromPool($values);
				}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			// invalidate objects in NagiosContactAddressPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosContactAddressPeer::clearInstancePool();

			// invalidate objects in NagiosContactGroupMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosContactGroupMemberPeer::clearInstancePool();

			// invalidate objects in NagiosContactNotificationCommandPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosContactNotificationCommandPeer::clearInstancePool();

			// invalidate objects in NagiosHostContactMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosHostContactMemberPeer::clearInstancePool();

			// invalidate objects in NagiosServiceContactMemberPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosServiceContactMemberPeer::clearInstancePool();

			// invalidate objects in NagiosEscalationContactPeer instance pool, since one or more of them may be deleted by ON DELETE CASCADE rule.
			NagiosEscalationContactPeer::clearInstancePool();

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
		$objects = NagiosContactPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosContactAddress objects
			$c = new Criteria(NagiosContactAddressPeer::DATABASE_NAME);
			
			$c->add(NagiosContactAddressPeer::CONTACT, $obj->getId());
			$affectedRows += NagiosContactAddressPeer::doDelete($c, $con);

			// delete related NagiosContactGroupMember objects
			$c = new Criteria(NagiosContactGroupMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosContactGroupMemberPeer::CONTACT, $obj->getId());
			$affectedRows += NagiosContactGroupMemberPeer::doDelete($c, $con);

			// delete related NagiosContactNotificationCommand objects
			$c = new Criteria(NagiosContactNotificationCommandPeer::DATABASE_NAME);
			
			$c->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $obj->getId());
			$affectedRows += NagiosContactNotificationCommandPeer::doDelete($c, $con);

			// delete related NagiosHostContactMember objects
			$c = new Criteria(NagiosHostContactMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosHostContactMemberPeer::CONTACT, $obj->getId());
			$affectedRows += NagiosHostContactMemberPeer::doDelete($c, $con);

			// delete related NagiosServiceContactMember objects
			$c = new Criteria(NagiosServiceContactMemberPeer::DATABASE_NAME);
			
			$c->add(NagiosServiceContactMemberPeer::CONTACT, $obj->getId());
			$affectedRows += NagiosServiceContactMemberPeer::doDelete($c, $con);

			// delete related NagiosEscalationContact objects
			$c = new Criteria(NagiosEscalationContactPeer::DATABASE_NAME);
			
			$c->add(NagiosEscalationContactPeer::CONTACT, $obj->getId());
			$affectedRows += NagiosEscalationContactPeer::doDelete($c, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given NagiosContact object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosContact $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosContact $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosContactPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosContactPeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosContactPeer::DATABASE_NAME, NagiosContactPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosContact
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosContactPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		$criteria->add(NagiosContactPeer::ID, $pk);

		$v = NagiosContactPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
			$criteria->add(NagiosContactPeer::ID, $pks, Criteria::IN);
			$objs = NagiosContactPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosContactPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosContactPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosContactPeer class:
//
// Propel::getDatabaseMap(NagiosContactPeer::DATABASE_NAME)->addTableBuilder(NagiosContactPeer::TABLE_NAME, NagiosContactPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosContactPeer::DATABASE_NAME)->addTableBuilder(BaseNagiosContactPeer::TABLE_NAME, BaseNagiosContactPeer::getMapBuilder());

