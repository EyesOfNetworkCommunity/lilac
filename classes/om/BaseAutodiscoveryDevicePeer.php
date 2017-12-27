<?php


/**
 * Base static class for performing query and update operations on the 'autodiscovery_device' table.
 *
 * AutoDiscovery Found Device
 *
 * @package    propel.generator..om
 */
abstract class BaseAutodiscoveryDevicePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'autodiscovery_device';

	/** the related Propel class for this table */
	const OM_CLASS = 'AutodiscoveryDevice';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'AutodiscoveryDevice';

	/** the related TableMap class for this table */
	const TM_CLASS = 'AutodiscoveryDeviceTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 11;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 11;

	/** the column name for the ID field */
	const ID = 'autodiscovery_device.ID';

	/** the column name for the JOB_ID field */
	const JOB_ID = 'autodiscovery_device.JOB_ID';

	/** the column name for the ADDRESS field */
	const ADDRESS = 'autodiscovery_device.ADDRESS';

	/** the column name for the NAME field */
	const NAME = 'autodiscovery_device.NAME';

	/** the column name for the HOSTNAME field */
	const HOSTNAME = 'autodiscovery_device.HOSTNAME';

	/** the column name for the DESCRIPTION field */
	const DESCRIPTION = 'autodiscovery_device.DESCRIPTION';

	/** the column name for the OSVENDOR field */
	const OSVENDOR = 'autodiscovery_device.OSVENDOR';

	/** the column name for the OSFAMILY field */
	const OSFAMILY = 'autodiscovery_device.OSFAMILY';

	/** the column name for the OSGEN field */
	const OSGEN = 'autodiscovery_device.OSGEN';

	/** the column name for the HOST_TEMPLATE field */
	const HOST_TEMPLATE = 'autodiscovery_device.HOST_TEMPLATE';

	/** the column name for the PROPOSED_PARENT field */
	const PROPOSED_PARENT = 'autodiscovery_device.PROPOSED_PARENT';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of AutodiscoveryDevice objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array AutodiscoveryDevice[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'JobId', 'Address', 'Name', 'Hostname', 'Description', 'Osvendor', 'Osfamily', 'Osgen', 'HostTemplate', 'ProposedParent', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'jobId', 'address', 'name', 'hostname', 'description', 'osvendor', 'osfamily', 'osgen', 'hostTemplate', 'proposedParent', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::JOB_ID, self::ADDRESS, self::NAME, self::HOSTNAME, self::DESCRIPTION, self::OSVENDOR, self::OSFAMILY, self::OSGEN, self::HOST_TEMPLATE, self::PROPOSED_PARENT, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'JOB_ID', 'ADDRESS', 'NAME', 'HOSTNAME', 'DESCRIPTION', 'OSVENDOR', 'OSFAMILY', 'OSGEN', 'HOST_TEMPLATE', 'PROPOSED_PARENT', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'job_id', 'address', 'name', 'hostname', 'description', 'osvendor', 'osfamily', 'osgen', 'host_template', 'proposed_parent', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'JobId' => 1, 'Address' => 2, 'Name' => 3, 'Hostname' => 4, 'Description' => 5, 'Osvendor' => 6, 'Osfamily' => 7, 'Osgen' => 8, 'HostTemplate' => 9, 'ProposedParent' => 10, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'jobId' => 1, 'address' => 2, 'name' => 3, 'hostname' => 4, 'description' => 5, 'osvendor' => 6, 'osfamily' => 7, 'osgen' => 8, 'hostTemplate' => 9, 'proposedParent' => 10, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::JOB_ID => 1, self::ADDRESS => 2, self::NAME => 3, self::HOSTNAME => 4, self::DESCRIPTION => 5, self::OSVENDOR => 6, self::OSFAMILY => 7, self::OSGEN => 8, self::HOST_TEMPLATE => 9, self::PROPOSED_PARENT => 10, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'JOB_ID' => 1, 'ADDRESS' => 2, 'NAME' => 3, 'HOSTNAME' => 4, 'DESCRIPTION' => 5, 'OSVENDOR' => 6, 'OSFAMILY' => 7, 'OSGEN' => 8, 'HOST_TEMPLATE' => 9, 'PROPOSED_PARENT' => 10, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'job_id' => 1, 'address' => 2, 'name' => 3, 'hostname' => 4, 'description' => 5, 'osvendor' => 6, 'osfamily' => 7, 'osgen' => 8, 'host_template' => 9, 'proposed_parent' => 10, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, )
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
	 * @param      string $column The column name for current table. (i.e. AutodiscoveryDevicePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(AutodiscoveryDevicePeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::ID);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::JOB_ID);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::ADDRESS);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::NAME);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::HOSTNAME);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::DESCRIPTION);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::OSVENDOR);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::OSFAMILY);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::OSGEN);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::HOST_TEMPLATE);
			$criteria->addSelectColumn(AutodiscoveryDevicePeer::PROPOSED_PARENT);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.JOB_ID');
			$criteria->addSelectColumn($alias . '.ADDRESS');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.HOSTNAME');
			$criteria->addSelectColumn($alias . '.DESCRIPTION');
			$criteria->addSelectColumn($alias . '.OSVENDOR');
			$criteria->addSelectColumn($alias . '.OSFAMILY');
			$criteria->addSelectColumn($alias . '.OSGEN');
			$criteria->addSelectColumn($alias . '.HOST_TEMPLATE');
			$criteria->addSelectColumn($alias . '.PROPOSED_PARENT');
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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     AutodiscoveryDevice
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = AutodiscoveryDevicePeer::doSelect($critcopy, $con);
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
		return AutodiscoveryDevicePeer::populateObjects(AutodiscoveryDevicePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
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
	 * @param      AutodiscoveryDevice $value A AutodiscoveryDevice object.
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
	 * @param      mixed $value A AutodiscoveryDevice object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof AutodiscoveryDevice) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or AutodiscoveryDevice object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     AutodiscoveryDevice Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to autodiscovery_device
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in AutodiscoveryDeviceServicePeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		AutodiscoveryDeviceServicePeer::clearInstancePool();
		// Invalidate objects in AutodiscoveryDeviceTemplateMatchPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		AutodiscoveryDeviceTemplateMatchPeer::clearInstancePool();
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
		$cls = AutodiscoveryDevicePeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = AutodiscoveryDevicePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				AutodiscoveryDevicePeer::addInstanceToPool($obj, $key);
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
	 * @return     array (AutodiscoveryDevice object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = AutodiscoveryDevicePeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = AutodiscoveryDevicePeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			AutodiscoveryDevicePeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related AutodiscoveryJob table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAutodiscoveryJob(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

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
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with their AutodiscoveryJob objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAutodiscoveryJob(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;
		AutodiscoveryJobPeer::addSelectColumns($criteria);

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = AutodiscoveryJobPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = AutodiscoveryJobPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = AutodiscoveryJobPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					AutodiscoveryJobPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (AutodiscoveryDevice) to $obj2 (AutodiscoveryJob)
				$obj2->addAutodiscoveryDevice($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with their NagiosHostTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
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

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;
		NagiosHostTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (AutodiscoveryDevice) to $obj2 (NagiosHostTemplate)
				$obj2->addAutodiscoveryDevice($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with their NagiosHost objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
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

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;
		NagiosHostPeer::addSelectColumns($criteria);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (AutodiscoveryDevice) to $obj2 (NagiosHost)
				$obj2->addAutodiscoveryDevice($obj1);

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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

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
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
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

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol2 = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;

		AutodiscoveryJobPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AutodiscoveryJobPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined AutodiscoveryJob rows

			$key2 = AutodiscoveryJobPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = AutodiscoveryJobPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = AutodiscoveryJobPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AutodiscoveryJobPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj2 (AutodiscoveryJob)
				$obj2->addAutodiscoveryDevice($obj1);
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

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addAutodiscoveryDevice($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHost rows

			$key4 = NagiosHostPeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosHostPeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = NagiosHostPeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosHostPeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj4 (NagiosHost)
				$obj4->addAutodiscoveryDevice($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related AutodiscoveryJob table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptAutodiscoveryJob(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			AutodiscoveryDevicePeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

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
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with all related objects except AutodiscoveryJob.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptAutodiscoveryJob(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol2 = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addAutodiscoveryDevice($obj1);

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

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj3 (NagiosHost)
				$obj3->addAutodiscoveryDevice($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with all related objects except NagiosHostTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
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

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol2 = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;

		AutodiscoveryJobPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AutodiscoveryJobPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::PROPOSED_PARENT, NagiosHostPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined AutodiscoveryJob rows

				$key2 = AutodiscoveryJobPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = AutodiscoveryJobPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = AutodiscoveryJobPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AutodiscoveryJobPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj2 (AutodiscoveryJob)
				$obj2->addAutodiscoveryDevice($obj1);

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

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj3 (NagiosHost)
				$obj3->addAutodiscoveryDevice($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of AutodiscoveryDevice objects pre-filled with all related objects except NagiosHost.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of AutodiscoveryDevice objects.
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

		AutodiscoveryDevicePeer::addSelectColumns($criteria);
		$startcol2 = AutodiscoveryDevicePeer::NUM_HYDRATE_COLUMNS;

		AutodiscoveryJobPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + AutodiscoveryJobPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostTemplatePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostTemplatePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(AutodiscoveryDevicePeer::JOB_ID, AutodiscoveryJobPeer::ID, $join_behavior);

		$criteria->addJoin(AutodiscoveryDevicePeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = AutodiscoveryDevicePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = AutodiscoveryDevicePeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = AutodiscoveryDevicePeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				AutodiscoveryDevicePeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined AutodiscoveryJob rows

				$key2 = AutodiscoveryJobPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = AutodiscoveryJobPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = AutodiscoveryJobPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					AutodiscoveryJobPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj2 (AutodiscoveryJob)
				$obj2->addAutodiscoveryDevice($obj1);

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

				// Add the $obj1 (AutodiscoveryDevice) to the collection in $obj3 (NagiosHostTemplate)
				$obj3->addAutodiscoveryDevice($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseAutodiscoveryDevicePeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseAutodiscoveryDevicePeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new AutodiscoveryDeviceTableMap());
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
		return $withPrefix ? AutodiscoveryDevicePeer::CLASS_DEFAULT : AutodiscoveryDevicePeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a AutodiscoveryDevice or Criteria object.
	 *
	 * @param      mixed $values Criteria or AutodiscoveryDevice object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from AutodiscoveryDevice object
		}

		if ($criteria->containsKey(AutodiscoveryDevicePeer::ID) && $criteria->keyContainsValue(AutodiscoveryDevicePeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.AutodiscoveryDevicePeer::ID.')');
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
	 * Performs an UPDATE on the database, given a AutodiscoveryDevice or Criteria object.
	 *
	 * @param      mixed $values Criteria or AutodiscoveryDevice object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(AutodiscoveryDevicePeer::ID);
			$value = $criteria->remove(AutodiscoveryDevicePeer::ID);
			if ($value) {
				$selectCriteria->add(AutodiscoveryDevicePeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(AutodiscoveryDevicePeer::TABLE_NAME);
			}

		} else { // $values is AutodiscoveryDevice object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the autodiscovery_device table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += AutodiscoveryDevicePeer::doOnDeleteCascade(new Criteria(AutodiscoveryDevicePeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(AutodiscoveryDevicePeer::TABLE_NAME, $con, AutodiscoveryDevicePeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			AutodiscoveryDevicePeer::clearInstancePool();
			AutodiscoveryDevicePeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a AutodiscoveryDevice or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or AutodiscoveryDevice object or primary key or array of primary keys
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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof AutodiscoveryDevice) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(AutodiscoveryDevicePeer::ID, (array) $values, Criteria::IN);
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
			$affectedRows += AutodiscoveryDevicePeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				AutodiscoveryDevicePeer::clearInstancePool();
			} elseif ($values instanceof AutodiscoveryDevice) { // it's a model object
				AutodiscoveryDevicePeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					AutodiscoveryDevicePeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			AutodiscoveryDevicePeer::clearRelatedInstancePool();
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
		$objects = AutodiscoveryDevicePeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related AutodiscoveryDeviceService objects
			$criteria = new Criteria(AutodiscoveryDeviceServicePeer::DATABASE_NAME);
			
			$criteria->add(AutodiscoveryDeviceServicePeer::DEVICE_ID, $obj->getId());
			$affectedRows += AutodiscoveryDeviceServicePeer::doDelete($criteria, $con);

			// delete related AutodiscoveryDeviceTemplateMatch objects
			$criteria = new Criteria(AutodiscoveryDeviceTemplateMatchPeer::DATABASE_NAME);
			
			$criteria->add(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $obj->getId());
			$affectedRows += AutodiscoveryDeviceTemplateMatchPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given AutodiscoveryDevice object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      AutodiscoveryDevice $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(AutodiscoveryDevicePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(AutodiscoveryDevicePeer::TABLE_NAME);

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

		return BasePeer::doValidate(AutodiscoveryDevicePeer::DATABASE_NAME, AutodiscoveryDevicePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     AutodiscoveryDevice
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = AutodiscoveryDevicePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(AutodiscoveryDevicePeer::DATABASE_NAME);
		$criteria->add(AutodiscoveryDevicePeer::ID, $pk);

		$v = AutodiscoveryDevicePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(AutodiscoveryDevicePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(AutodiscoveryDevicePeer::DATABASE_NAME);
			$criteria->add(AutodiscoveryDevicePeer::ID, $pks, Criteria::IN);
			$objs = AutodiscoveryDevicePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseAutodiscoveryDevicePeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseAutodiscoveryDevicePeer::buildTableMap();

