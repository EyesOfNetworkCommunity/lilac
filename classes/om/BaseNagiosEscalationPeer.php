<?php


/**
 * Base static class for performing query and update operations on the 'nagios_escalation' table.
 *
 * Nagios Escalation
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosEscalationPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_escalation';

	/** the related Propel class for this table */
	const OM_CLASS = 'NagiosEscalation';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosEscalation';

	/** the related TableMap class for this table */
	const TM_CLASS = 'NagiosEscalationTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 18;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 18;

	/** the column name for the ID field */
	const ID = 'nagios_escalation.ID';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'nagios_escalation.DESCRIPTION';

	/** the column name for the HOST_TEMPLATE field */
	const HOST_TEMPLATE = 'nagios_escalation.HOST_TEMPLATE';

	/** the column name for the HOST field */
	const HOST = 'nagios_escalation.HOST';

	/** the column name for the HOSTGROUP field */
	const HOSTGROUP = 'nagios_escalation.HOSTGROUP';

	/** the column name for the SERVICE_TEMPLATE field */
	const SERVICE_TEMPLATE = 'nagios_escalation.SERVICE_TEMPLATE';

	/** the column name for the SERVICE field */
	const SERVICE = 'nagios_escalation.SERVICE';

	/** the column name for the FIRST_NOTIFICATION field */
	const FIRST_NOTIFICATION = 'nagios_escalation.FIRST_NOTIFICATION';

	/** the column name for the LAST_NOTIFICATION field */
	const LAST_NOTIFICATION = 'nagios_escalation.LAST_NOTIFICATION';

	/** the column name for the NOTIFICATION_INTERVAL field */
	const NOTIFICATION_INTERVAL = 'nagios_escalation.NOTIFICATION_INTERVAL';

	/** the column name for the ESCALATION_PERIOD field */
	const ESCALATION_PERIOD = 'nagios_escalation.ESCALATION_PERIOD';

	/** the column name for the ESCALATION_OPTIONS_UP field */
	const ESCALATION_OPTIONS_UP = 'nagios_escalation.ESCALATION_OPTIONS_UP';

	/** the column name for the ESCALATION_OPTIONS_DOWN field */
	const ESCALATION_OPTIONS_DOWN = 'nagios_escalation.ESCALATION_OPTIONS_DOWN';

	/** the column name for the ESCALATION_OPTIONS_UNREACHABLE field */
	const ESCALATION_OPTIONS_UNREACHABLE = 'nagios_escalation.ESCALATION_OPTIONS_UNREACHABLE';

	/** the column name for the ESCALATION_OPTIONS_OK field */
	const ESCALATION_OPTIONS_OK = 'nagios_escalation.ESCALATION_OPTIONS_OK';

	/** the column name for the ESCALATION_OPTIONS_WARNING field */
	const ESCALATION_OPTIONS_WARNING = 'nagios_escalation.ESCALATION_OPTIONS_WARNING';

	/** the column name for the ESCALATION_OPTIONS_UNKNOWN field */
	const ESCALATION_OPTIONS_UNKNOWN = 'nagios_escalation.ESCALATION_OPTIONS_UNKNOWN';

	/** the column name for the ESCALATION_OPTIONS_CRITICAL field */
	const ESCALATION_OPTIONS_CRITICAL = 'nagios_escalation.ESCALATION_OPTIONS_CRITICAL';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of NagiosEscalation objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosEscalation[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Description', 'HostTemplate', 'Host', 'Hostgroup', 'ServiceTemplate', 'Service', 'FirstNotification', 'LastNotification', 'NotificationInterval', 'EscalationPeriod', 'EscalationOptionsUp', 'EscalationOptionsDown', 'EscalationOptionsUnreachable', 'EscalationOptionsOk', 'EscalationOptionsWarning', 'EscalationOptionsUnknown', 'EscalationOptionsCritical', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'description', 'hostTemplate', 'host', 'hostgroup', 'serviceTemplate', 'service', 'firstNotification', 'lastNotification', 'notificationInterval', 'escalationPeriod', 'escalationOptionsUp', 'escalationOptionsDown', 'escalationOptionsUnreachable', 'escalationOptionsOk', 'escalationOptionsWarning', 'escalationOptionsUnknown', 'escalationOptionsCritical', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DESCRIPTION, self::HOST_TEMPLATE, self::HOST, self::HOSTGROUP, self::SERVICE_TEMPLATE, self::SERVICE, self::FIRST_NOTIFICATION, self::LAST_NOTIFICATION, self::NOTIFICATION_INTERVAL, self::ESCALATION_PERIOD, self::ESCALATION_OPTIONS_UP, self::ESCALATION_OPTIONS_DOWN, self::ESCALATION_OPTIONS_UNREACHABLE, self::ESCALATION_OPTIONS_OK, self::ESCALATION_OPTIONS_WARNING, self::ESCALATION_OPTIONS_UNKNOWN, self::ESCALATION_OPTIONS_CRITICAL, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DESCRIPTION', 'HOST_TEMPLATE', 'HOST', 'HOSTGROUP', 'SERVICE_TEMPLATE', 'SERVICE', 'FIRST_NOTIFICATION', 'LAST_NOTIFICATION', 'NOTIFICATION_INTERVAL', 'ESCALATION_PERIOD', 'ESCALATION_OPTIONS_UP', 'ESCALATION_OPTIONS_DOWN', 'ESCALATION_OPTIONS_UNREACHABLE', 'ESCALATION_OPTIONS_OK', 'ESCALATION_OPTIONS_WARNING', 'ESCALATION_OPTIONS_UNKNOWN', 'ESCALATION_OPTIONS_CRITICAL', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'description', 'host_template', 'host', 'hostgroup', 'service_template', 'service', 'first_notification', 'last_notification', 'notification_interval', 'escalation_period', 'escalation_options_up', 'escalation_options_down', 'escalation_options_unreachable', 'escalation_options_ok', 'escalation_options_warning', 'escalation_options_unknown', 'escalation_options_critical', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Description' => 1, 'HostTemplate' => 2, 'Host' => 3, 'Hostgroup' => 4, 'ServiceTemplate' => 5, 'Service' => 6, 'FirstNotification' => 7, 'LastNotification' => 8, 'NotificationInterval' => 9, 'EscalationPeriod' => 10, 'EscalationOptionsUp' => 11, 'EscalationOptionsDown' => 12, 'EscalationOptionsUnreachable' => 13, 'EscalationOptionsOk' => 14, 'EscalationOptionsWarning' => 15, 'EscalationOptionsUnknown' => 16, 'EscalationOptionsCritical' => 17, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'description' => 1, 'hostTemplate' => 2, 'host' => 3, 'hostgroup' => 4, 'serviceTemplate' => 5, 'service' => 6, 'firstNotification' => 7, 'lastNotification' => 8, 'notificationInterval' => 9, 'escalationPeriod' => 10, 'escalationOptionsUp' => 11, 'escalationOptionsDown' => 12, 'escalationOptionsUnreachable' => 13, 'escalationOptionsOk' => 14, 'escalationOptionsWarning' => 15, 'escalationOptionsUnknown' => 16, 'escalationOptionsCritical' => 17, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DESCRIPTION => 1, self::HOST_TEMPLATE => 2, self::HOST => 3, self::HOSTGROUP => 4, self::SERVICE_TEMPLATE => 5, self::SERVICE => 6, self::FIRST_NOTIFICATION => 7, self::LAST_NOTIFICATION => 8, self::NOTIFICATION_INTERVAL => 9, self::ESCALATION_PERIOD => 10, self::ESCALATION_OPTIONS_UP => 11, self::ESCALATION_OPTIONS_DOWN => 12, self::ESCALATION_OPTIONS_UNREACHABLE => 13, self::ESCALATION_OPTIONS_OK => 14, self::ESCALATION_OPTIONS_WARNING => 15, self::ESCALATION_OPTIONS_UNKNOWN => 16, self::ESCALATION_OPTIONS_CRITICAL => 17, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DESCRIPTION' => 1, 'HOST_TEMPLATE' => 2, 'HOST' => 3, 'HOSTGROUP' => 4, 'SERVICE_TEMPLATE' => 5, 'SERVICE' => 6, 'FIRST_NOTIFICATION' => 7, 'LAST_NOTIFICATION' => 8, 'NOTIFICATION_INTERVAL' => 9, 'ESCALATION_PERIOD' => 10, 'ESCALATION_OPTIONS_UP' => 11, 'ESCALATION_OPTIONS_DOWN' => 12, 'ESCALATION_OPTIONS_UNREACHABLE' => 13, 'ESCALATION_OPTIONS_OK' => 14, 'ESCALATION_OPTIONS_WARNING' => 15, 'ESCALATION_OPTIONS_UNKNOWN' => 16, 'ESCALATION_OPTIONS_CRITICAL' => 17, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'description' => 1, 'host_template' => 2, 'host' => 3, 'hostgroup' => 4, 'service_template' => 5, 'service' => 6, 'first_notification' => 7, 'last_notification' => 8, 'notification_interval' => 9, 'escalation_period' => 10, 'escalation_options_up' => 11, 'escalation_options_down' => 12, 'escalation_options_unreachable' => 13, 'escalation_options_ok' => 14, 'escalation_options_warning' => 15, 'escalation_options_unknown' => 16, 'escalation_options_critical' => 17, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, )
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
	 * @param      string $column The column name for current table. (i.e. NagiosEscalationPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosEscalationPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(NagiosEscalationPeer::ID);
			$criteria->addSelectColumn(NagiosEscalationPeer::DESCRIPTION);
			$criteria->addSelectColumn(NagiosEscalationPeer::HOST_TEMPLATE);
			$criteria->addSelectColumn(NagiosEscalationPeer::HOST);
			$criteria->addSelectColumn(NagiosEscalationPeer::HOSTGROUP);
			$criteria->addSelectColumn(NagiosEscalationPeer::SERVICE_TEMPLATE);
			$criteria->addSelectColumn(NagiosEscalationPeer::SERVICE);
			$criteria->addSelectColumn(NagiosEscalationPeer::FIRST_NOTIFICATION);
			$criteria->addSelectColumn(NagiosEscalationPeer::LAST_NOTIFICATION);
			$criteria->addSelectColumn(NagiosEscalationPeer::NOTIFICATION_INTERVAL);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_PERIOD);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_UP);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_DOWN);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_UNREACHABLE);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_OK);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_WARNING);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_UNKNOWN);
			$criteria->addSelectColumn(NagiosEscalationPeer::ESCALATION_OPTIONS_CRITICAL);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.HOST_TEMPLATE');
			$criteria->addSelectColumn($alias . '.HOST');
			$criteria->addSelectColumn($alias . '.HOSTGROUP');
			$criteria->addSelectColumn($alias . '.SERVICE_TEMPLATE');
			$criteria->addSelectColumn($alias . '.SERVICE');
			$criteria->addSelectColumn($alias . '.FIRST_NOTIFICATION');
			$criteria->addSelectColumn($alias . '.LAST_NOTIFICATION');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_INTERVAL');
			$criteria->addSelectColumn($alias . '.ESCALATION_PERIOD');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_UP');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_DOWN');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_UNREACHABLE');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_OK');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_WARNING');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_UNKNOWN');
			$criteria->addSelectColumn($alias . '.ESCALATION_OPTIONS_CRITICAL');
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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosEscalation
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosEscalationPeer::doSelect($critcopy, $con);
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
		return NagiosEscalationPeer::populateObjects(NagiosEscalationPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosEscalationPeer::addSelectColumns($criteria);
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
	 * @param      NagiosEscalation $value A NagiosEscalation object.
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
	 * @param      mixed $value A NagiosEscalation object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosEscalation) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosEscalation object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosEscalation Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to nagios_escalation
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in NagiosEscalationContactPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosEscalationContactPeer::clearInstancePool();
		// Invalidate objects in NagiosEscalationContactgroupPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosEscalationContactgroupPeer::clearInstancePool();
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
		$cls = NagiosEscalationPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosEscalationPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosEscalationPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (NagiosEscalation object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = NagiosEscalationPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = NagiosEscalationPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			NagiosEscalationPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosServiceTemplate table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosServiceTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosService table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosService(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosTimeperiod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosHostTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosHost objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosHost)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosServiceTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosServiceTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosServiceTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosServiceTemplatePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosServiceTemplatePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosServiceTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosService objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosService(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosServicePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosServicePeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosServicePeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosServicePeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosService)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosHostgroup objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostgroupPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosHostgroup)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosTimeperiod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;
		NagiosTimeperiodPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosEscalation($obj1);

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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol8 = $startcol7 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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
				} // if obj2 loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHost rows

			$key3 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol3);
			if ($key3 !== null) {
				$obj3 = NagiosHostPeer::getInstanceFromPool($key3);
				if (!$obj3) {

					$cls = NagiosHostPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostPeer::addInstanceToPool($obj3, $key3);
				} // if obj3 loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosEscalation($obj1);
			} // if joined row not null

			// Add objects for joined NagiosServiceTemplate rows

			$key4 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosServiceTemplatePeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServiceTemplatePeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosEscalation($obj1);
			} // if joined row not null

			// Add objects for joined NagiosService rows

			$key5 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NagiosServicePeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = NagiosServicePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosServicePeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosEscalation($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHostgroup rows

			$key6 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol6);
			if ($key6 !== null) {
				$obj6 = NagiosHostgroupPeer::getInstanceFromPool($key6);
				if (!$obj6) {

					$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosHostgroupPeer::addInstanceToPool($obj6, $key6);
				} // if obj6 loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosHostgroup)
				$obj6->addNagiosEscalation($obj1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosEscalation($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosServiceTemplate table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosServiceTemplate(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosService table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosService(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Returns the number of rows matching criteria, joining the related NagiosTimeperiod table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosTimeperiod(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosEscalationPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosHostTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosServiceTemplate rows

				$key3 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosServiceTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosServiceTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosServiceTemplate)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key4 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServicePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServicePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key5 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosHostgroupPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosHostgroupPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosEscalation($obj1);

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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosEscalation($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosHost.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosServiceTemplate rows

				$key3 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosServiceTemplatePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosServiceTemplatePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosServiceTemplate)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key4 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServicePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServicePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key5 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosHostgroupPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosHostgroupPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosEscalation($obj1);

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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosEscalation($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosServiceTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosServiceTemplate(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHost rows

				$key3 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key4 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServicePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServicePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key5 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosHostgroupPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosHostgroupPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosEscalation($obj1);

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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosEscalation($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosService.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosService(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHost rows

				$key3 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosServiceTemplate rows

				$key4 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServiceTemplatePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServiceTemplatePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key5 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosHostgroupPeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosHostgroupPeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosEscalation($obj1);

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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosEscalation($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosHostgroup.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
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

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosTimeperiodPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosTimeperiodPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::ESCALATION_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHost rows

				$key3 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosServiceTemplate rows

				$key4 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServiceTemplatePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServiceTemplatePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key5 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosServicePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosServicePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosEscalation($obj1);

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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosEscalation($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosEscalation objects pre-filled with all related objects except NagiosTimeperiod.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosEscalation objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosTimeperiod(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosEscalationPeer::addSelectColumns($criteria);
		$startcol2 = NagiosEscalationPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServiceTemplatePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServiceTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol7 = $startcol6 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosEscalationPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosEscalationPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosEscalationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosEscalationPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosEscalationPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosEscalationPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosEscalation) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHost rows

				$key3 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosHostPeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosHostPeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosHostPeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosServiceTemplate rows

				$key4 = NagiosServiceTemplatePeer::getPrimaryKeyHashFromRow($row, $startcol4);
				if ($key4 !== null) {
					$obj4 = NagiosServiceTemplatePeer::getInstanceFromPool($key4);
					if (!$obj4) {
	
						$cls = NagiosServiceTemplatePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServiceTemplatePeer::addInstanceToPool($obj4, $key4);
				} // if $obj4 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key5 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol5);
				if ($key5 !== null) {
					$obj5 = NagiosServicePeer::getInstanceFromPool($key5);
					if (!$obj5) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosServicePeer::addInstanceToPool($obj5, $key5);
				} // if $obj5 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosEscalation($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosHostgroup rows

				$key6 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol6);
				if ($key6 !== null) {
					$obj6 = NagiosHostgroupPeer::getInstanceFromPool($key6);
					if (!$obj6) {
	
						$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj6 = new $cls();
					$obj6->hydrate($row, $startcol6);
					NagiosHostgroupPeer::addInstanceToPool($obj6, $key6);
				} // if $obj6 already loaded

				// Add the $obj1 (NagiosEscalation) to the collection in $obj6 (NagiosHostgroup)
				$obj6->addNagiosEscalation($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseNagiosEscalationPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseNagiosEscalationPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new NagiosEscalationTableMap());
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
		return $withPrefix ? NagiosEscalationPeer::CLASS_DEFAULT : NagiosEscalationPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a NagiosEscalation or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosEscalation object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosEscalation object
		}

		if ($criteria->containsKey(NagiosEscalationPeer::ID) && $criteria->keyContainsValue(NagiosEscalationPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosEscalationPeer::ID.')');
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
	 * Performs an UPDATE on the database, given a NagiosEscalation or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosEscalation object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosEscalationPeer::ID);
			$value = $criteria->remove(NagiosEscalationPeer::ID);
			if ($value) {
				$selectCriteria->add(NagiosEscalationPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(NagiosEscalationPeer::TABLE_NAME);
			}

		} else { // $values is NagiosEscalation object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the nagios_escalation table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosEscalationPeer::doOnDeleteCascade(new Criteria(NagiosEscalationPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosEscalationPeer::TABLE_NAME, $con, NagiosEscalationPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			NagiosEscalationPeer::clearInstancePool();
			NagiosEscalationPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a NagiosEscalation or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosEscalation object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosEscalation) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosEscalationPeer::ID, (array) $values, Criteria::IN);
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
			$affectedRows += NagiosEscalationPeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				NagiosEscalationPeer::clearInstancePool();
			} elseif ($values instanceof NagiosEscalation) { // it's a model object
				NagiosEscalationPeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					NagiosEscalationPeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			NagiosEscalationPeer::clearRelatedInstancePool();
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
		$objects = NagiosEscalationPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosEscalationContact objects
			$criteria = new Criteria(NagiosEscalationContactPeer::DATABASE_NAME);
			
			$criteria->add(NagiosEscalationContactPeer::ESCALATION, $obj->getId());
			$affectedRows += NagiosEscalationContactPeer::doDelete($criteria, $con);

			// delete related NagiosEscalationContactgroup objects
			$criteria = new Criteria(NagiosEscalationContactgroupPeer::DATABASE_NAME);
			
			$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $obj->getId());
			$affectedRows += NagiosEscalationContactgroupPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given NagiosEscalation object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosEscalation $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosEscalationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosEscalationPeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosEscalationPeer::DATABASE_NAME, NagiosEscalationPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosEscalation
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosEscalationPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		$criteria->add(NagiosEscalationPeer::ID, $pk);

		$v = NagiosEscalationPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
			$criteria->add(NagiosEscalationPeer::ID, $pks, Criteria::IN);
			$objs = NagiosEscalationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosEscalationPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNagiosEscalationPeer::buildTableMap();

