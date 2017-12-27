<?php


/**
 * Base static class for performing query and update operations on the 'nagios_dependency_target' table.
 *
 * Targets for a Dependency
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependencyTargetPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_dependency_target';

	/** the related Propel class for this table */
	const OM_CLASS = 'NagiosDependencyTarget';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosDependencyTarget';

	/** the related TableMap class for this table */
	const TM_CLASS = 'NagiosDependencyTargetTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 5;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 5;

	/** the column name for the ID field */
	const ID = 'nagios_dependency_target.ID';

	/** the column name for the DEPENDENCY field */
	const DEPENDENCY = 'nagios_dependency_target.DEPENDENCY';

	/** the column name for the TARGET_HOST field */
	const TARGET_HOST = 'nagios_dependency_target.TARGET_HOST';

	/** the column name for the TARGET_SERVICE field */
	const TARGET_SERVICE = 'nagios_dependency_target.TARGET_SERVICE';

	/** the column name for the TARGET_HOSTGROUP field */
	const TARGET_HOSTGROUP = 'nagios_dependency_target.TARGET_HOSTGROUP';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of NagiosDependencyTarget objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosDependencyTarget[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'Dependency', 'TargetHost', 'TargetService', 'TargetHostgroup', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'dependency', 'targetHost', 'targetService', 'targetHostgroup', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::DEPENDENCY, self::TARGET_HOST, self::TARGET_SERVICE, self::TARGET_HOSTGROUP, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'DEPENDENCY', 'TARGET_HOST', 'TARGET_SERVICE', 'TARGET_HOSTGROUP', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'dependency', 'target_host', 'target_service', 'target_hostgroup', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'Dependency' => 1, 'TargetHost' => 2, 'TargetService' => 3, 'TargetHostgroup' => 4, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'dependency' => 1, 'targetHost' => 2, 'targetService' => 3, 'targetHostgroup' => 4, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::DEPENDENCY => 1, self::TARGET_HOST => 2, self::TARGET_SERVICE => 3, self::TARGET_HOSTGROUP => 4, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'DEPENDENCY' => 1, 'TARGET_HOST' => 2, 'TARGET_SERVICE' => 3, 'TARGET_HOSTGROUP' => 4, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'dependency' => 1, 'target_host' => 2, 'target_service' => 3, 'target_hostgroup' => 4, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, )
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
	 * @param      string $column The column name for current table. (i.e. NagiosDependencyTargetPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosDependencyTargetPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(NagiosDependencyTargetPeer::ID);
			$criteria->addSelectColumn(NagiosDependencyTargetPeer::DEPENDENCY);
			$criteria->addSelectColumn(NagiosDependencyTargetPeer::TARGET_HOST);
			$criteria->addSelectColumn(NagiosDependencyTargetPeer::TARGET_SERVICE);
			$criteria->addSelectColumn(NagiosDependencyTargetPeer::TARGET_HOSTGROUP);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.DEPENDENCY');
			$criteria->addSelectColumn($alias . '.TARGET_HOST');
			$criteria->addSelectColumn($alias . '.TARGET_SERVICE');
			$criteria->addSelectColumn($alias . '.TARGET_HOSTGROUP');
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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosDependencyTarget
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosDependencyTargetPeer::doSelect($critcopy, $con);
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
		return NagiosDependencyTargetPeer::populateObjects(NagiosDependencyTargetPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
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
	 * @param      NagiosDependencyTarget $value A NagiosDependencyTarget object.
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
	 * @param      mixed $value A NagiosDependencyTarget object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosDependencyTarget) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosDependencyTarget object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosDependencyTarget Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to nagios_dependency_target
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
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
		$cls = NagiosDependencyTargetPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosDependencyTargetPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosDependencyTargetPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (NagiosDependencyTarget object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = NagiosDependencyTargetPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = NagiosDependencyTargetPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			NagiosDependencyTargetPeer::addInstanceToPool($obj, $key);
		}
		return array($obj, $col);
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosDependency table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinNagiosDependency(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with their NagiosDependency objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinNagiosDependency(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;
		NagiosDependencyPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
			} // if $obj1 already loaded

			$key2 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol);
			if ($key2 !== null) {
				$obj2 = NagiosDependencyPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosDependencyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol);
					NagiosDependencyPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to $obj2 (NagiosDependency)
				$obj2->addNagiosDependencyTarget($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with their NagiosHost objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependencyTarget) to $obj2 (NagiosHost)
				$obj2->addNagiosDependencyTarget($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with their NagiosService objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;
		NagiosServicePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependencyTarget) to $obj2 (NagiosService)
				$obj2->addNagiosDependencyTarget($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with their NagiosHostgroup objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostgroupPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependencyTarget) to $obj2 (NagiosHostgroup)
				$obj2->addNagiosDependencyTarget($obj1);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol6 = $startcol5 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

			// Add objects for joined NagiosDependency rows

			$key2 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
			if ($key2 !== null) {
				$obj2 = NagiosDependencyPeer::getInstanceFromPool($key2);
				if (!$obj2) {

					$cls = NagiosDependencyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosDependencyPeer::addInstanceToPool($obj2, $key2);
				} // if obj2 loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj2 (NagiosDependency)
				$obj2->addNagiosDependencyTarget($obj1);
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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependencyTarget($obj1);
			} // if joined row not null

			// Add objects for joined NagiosService rows

			$key4 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol4);
			if ($key4 !== null) {
				$obj4 = NagiosServicePeer::getInstanceFromPool($key4);
				if (!$obj4) {

					$cls = NagiosServicePeer::getOMClass(false);

					$obj4 = new $cls();
					$obj4->hydrate($row, $startcol4);
					NagiosServicePeer::addInstanceToPool($obj4, $key4);
				} // if obj4 loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosDependencyTarget($obj1);
			} // if joined row not null

			// Add objects for joined NagiosHostgroup rows

			$key5 = NagiosHostgroupPeer::getPrimaryKeyHashFromRow($row, $startcol5);
			if ($key5 !== null) {
				$obj5 = NagiosHostgroupPeer::getInstanceFromPool($key5);
				if (!$obj5) {

					$cls = NagiosHostgroupPeer::getOMClass(false);

					$obj5 = new $cls();
					$obj5->hydrate($row, $startcol5);
					NagiosHostgroupPeer::addInstanceToPool($obj5, $key5);
				} // if obj5 loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosDependencyTarget($obj1);
			} // if joined row not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Returns the number of rows matching criteria, joining the related NagiosDependency table
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     int Number of matching rows.
	 */
	public static function doCountJoinAllExceptNagiosDependency(Criteria $criteria, $distinct = false, PropelPDO $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		// we're going to modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyTargetPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with all related objects except NagiosDependency.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectJoinAllExceptNagiosDependency(Criteria $criteria, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$criteria = clone $criteria;

		// Set the correct dbName if it has not been overridden
		// $criteria->getDbName() will return the same object if not set to another value
		// so == check is okay and faster
		if ($criteria->getDbName() == Propel::getDefaultDB()) {
			$criteria->setDbName(self::DATABASE_NAME);
		}

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosDependencyTarget($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key3 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosServicePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosServicePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj3 (NagiosService)
				$obj3->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosDependencyTarget($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with all related objects except NagiosHost.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosDependency rows

				$key2 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosDependencyPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosDependencyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosDependencyPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj2 (NagiosDependency)
				$obj2->addNagiosDependencyTarget($obj1);

			} // if joined row is not null

				// Add objects for joined NagiosService rows

				$key3 = NagiosServicePeer::getPrimaryKeyHashFromRow($row, $startcol3);
				if ($key3 !== null) {
					$obj3 = NagiosServicePeer::getInstanceFromPool($key3);
					if (!$obj3) {
	
						$cls = NagiosServicePeer::getOMClass(false);

					$obj3 = new $cls();
					$obj3->hydrate($row, $startcol3);
					NagiosServicePeer::addInstanceToPool($obj3, $key3);
				} // if $obj3 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj3 (NagiosService)
				$obj3->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosDependencyTarget($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with all related objects except NagiosService.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostgroupPeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosHostgroupPeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosDependency rows

				$key2 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosDependencyPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosDependencyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosDependencyPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj2 (NagiosDependency)
				$obj2->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj4 (NagiosHostgroup)
				$obj4->addNagiosDependencyTarget($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependencyTarget objects pre-filled with all related objects except NagiosHostgroup.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependencyTarget objects.
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

		NagiosDependencyTargetPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyTargetPeer::NUM_HYDRATE_COLUMNS;

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol3 = $startcol2 + NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

		NagiosHostPeer::addSelectColumns($criteria);
		$startcol4 = $startcol3 + NagiosHostPeer::NUM_HYDRATE_COLUMNS;

		NagiosServicePeer::addSelectColumns($criteria);
		$startcol5 = $startcol4 + NagiosServicePeer::NUM_HYDRATE_COLUMNS;

		$criteria->addJoin(NagiosDependencyTargetPeer::DEPENDENCY, NagiosDependencyPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyTargetPeer::TARGET_SERVICE, NagiosServicePeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyTargetPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyTargetPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyTargetPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyTargetPeer::addInstanceToPool($obj1, $key1);
			} // if obj1 already loaded

				// Add objects for joined NagiosDependency rows

				$key2 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol2);
				if ($key2 !== null) {
					$obj2 = NagiosDependencyPeer::getInstanceFromPool($key2);
					if (!$obj2) {
	
						$cls = NagiosDependencyPeer::getOMClass(false);

					$obj2 = new $cls();
					$obj2->hydrate($row, $startcol2);
					NagiosDependencyPeer::addInstanceToPool($obj2, $key2);
				} // if $obj2 already loaded

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj2 (NagiosDependency)
				$obj2->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependencyTarget($obj1);

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

				// Add the $obj1 (NagiosDependencyTarget) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosDependencyTarget($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseNagiosDependencyTargetPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseNagiosDependencyTargetPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new NagiosDependencyTargetTableMap());
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
		return $withPrefix ? NagiosDependencyTargetPeer::CLASS_DEFAULT : NagiosDependencyTargetPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a NagiosDependencyTarget or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosDependencyTarget object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosDependencyTarget object
		}

		if ($criteria->containsKey(NagiosDependencyTargetPeer::ID) && $criteria->keyContainsValue(NagiosDependencyTargetPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosDependencyTargetPeer::ID.')');
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
	 * Performs an UPDATE on the database, given a NagiosDependencyTarget or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosDependencyTarget object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosDependencyTargetPeer::ID);
			$value = $criteria->remove(NagiosDependencyTargetPeer::ID);
			if ($value) {
				$selectCriteria->add(NagiosDependencyTargetPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(NagiosDependencyTargetPeer::TABLE_NAME);
			}

		} else { // $values is NagiosDependencyTarget object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the nagios_dependency_target table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(NagiosDependencyTargetPeer::TABLE_NAME, $con, NagiosDependencyTargetPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			NagiosDependencyTargetPeer::clearInstancePool();
			NagiosDependencyTargetPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a NagiosDependencyTarget or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosDependencyTarget object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosDependencyTargetPeer::clearInstancePool();
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosDependencyTarget) { // it's a model object
			// invalidate the cache for this single object
			NagiosDependencyTargetPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosDependencyTargetPeer::ID, (array) $values, Criteria::IN);
			// invalidate the cache for this object(s)
			foreach ((array) $values as $singleval) {
				NagiosDependencyTargetPeer::removeInstanceFromPool($singleval);
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
			NagiosDependencyTargetPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given NagiosDependencyTarget object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosDependencyTarget $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosDependencyTargetPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosDependencyTargetPeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosDependencyTargetPeer::DATABASE_NAME, NagiosDependencyTargetPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosDependencyTarget
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosDependencyTargetPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
		$criteria->add(NagiosDependencyTargetPeer::ID, $pk);

		$v = NagiosDependencyTargetPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosDependencyTargetPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
			$criteria->add(NagiosDependencyTargetPeer::ID, $pks, Criteria::IN);
			$objs = NagiosDependencyTargetPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosDependencyTargetPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNagiosDependencyTargetPeer::buildTableMap();

