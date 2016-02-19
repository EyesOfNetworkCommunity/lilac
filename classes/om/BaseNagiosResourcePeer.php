<?php

/**
 * Base static class for performing query and update operations on the 'nagios_resource' table.
 *
 * Nagios Resource
 *
 * @package    .om
 */
abstract class BaseNagiosResourcePeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_resource';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosResource';

	/** The total number of columns. */
	const NUM_COLUMNS = 33;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_resource.ID';

	/** the column name for the USER1 field */
	const USER1 = 'nagios_resource.USER1';

	/** the column name for the USER2 field */
	const USER2 = 'nagios_resource.USER2';

	/** the column name for the USER3 field */
	const USER3 = 'nagios_resource.USER3';

	/** the column name for the USER4 field */
	const USER4 = 'nagios_resource.USER4';

	/** the column name for the USER5 field */
	const USER5 = 'nagios_resource.USER5';

	/** the column name for the USER6 field */
	const USER6 = 'nagios_resource.USER6';

	/** the column name for the USER7 field */
	const USER7 = 'nagios_resource.USER7';

	/** the column name for the USER8 field */
	const USER8 = 'nagios_resource.USER8';

	/** the column name for the USER9 field */
	const USER9 = 'nagios_resource.USER9';

	/** the column name for the USER10 field */
	const USER10 = 'nagios_resource.USER10';

	/** the column name for the USER11 field */
	const USER11 = 'nagios_resource.USER11';

	/** the column name for the USER12 field */
	const USER12 = 'nagios_resource.USER12';

	/** the column name for the USER13 field */
	const USER13 = 'nagios_resource.USER13';

	/** the column name for the USER14 field */
	const USER14 = 'nagios_resource.USER14';

	/** the column name for the USER15 field */
	const USER15 = 'nagios_resource.USER15';

	/** the column name for the USER16 field */
	const USER16 = 'nagios_resource.USER16';

	/** the column name for the USER17 field */
	const USER17 = 'nagios_resource.USER17';

	/** the column name for the USER18 field */
	const USER18 = 'nagios_resource.USER18';

	/** the column name for the USER19 field */
	const USER19 = 'nagios_resource.USER19';

	/** the column name for the USER20 field */
	const USER20 = 'nagios_resource.USER20';

	/** the column name for the USER21 field */
	const USER21 = 'nagios_resource.USER21';

	/** the column name for the USER22 field */
	const USER22 = 'nagios_resource.USER22';

	/** the column name for the USER23 field */
	const USER23 = 'nagios_resource.USER23';

	/** the column name for the USER24 field */
	const USER24 = 'nagios_resource.USER24';

	/** the column name for the USER25 field */
	const USER25 = 'nagios_resource.USER25';

	/** the column name for the USER26 field */
	const USER26 = 'nagios_resource.USER26';

	/** the column name for the USER27 field */
	const USER27 = 'nagios_resource.USER27';

	/** the column name for the USER28 field */
	const USER28 = 'nagios_resource.USER28';

	/** the column name for the USER29 field */
	const USER29 = 'nagios_resource.USER29';

	/** the column name for the USER30 field */
	const USER30 = 'nagios_resource.USER30';

	/** the column name for the USER31 field */
	const USER31 = 'nagios_resource.USER31';

	/** the column name for the USER32 field */
	const USER32 = 'nagios_resource.USER32';

	/**
	 * An identiy map to hold any loaded instances of NagiosResource objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosResource[]
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
		BasePeer::TYPE_PHPNAME => array ('Id', 'User1', 'User2', 'User3', 'User4', 'User5', 'User6', 'User7', 'User8', 'User9', 'User10', 'User11', 'User12', 'User13', 'User14', 'User15', 'User16', 'User17', 'User18', 'User19', 'User20', 'User21', 'User22', 'User23', 'User24', 'User25', 'User26', 'User27', 'User28', 'User29', 'User30', 'User31', 'User32', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'user1', 'user2', 'user3', 'user4', 'user5', 'user6', 'user7', 'user8', 'user9', 'user10', 'user11', 'user12', 'user13', 'user14', 'user15', 'user16', 'user17', 'user18', 'user19', 'user20', 'user21', 'user22', 'user23', 'user24', 'user25', 'user26', 'user27', 'user28', 'user29', 'user30', 'user31', 'user32', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::USER1, self::USER2, self::USER3, self::USER4, self::USER5, self::USER6, self::USER7, self::USER8, self::USER9, self::USER10, self::USER11, self::USER12, self::USER13, self::USER14, self::USER15, self::USER16, self::USER17, self::USER18, self::USER19, self::USER20, self::USER21, self::USER22, self::USER23, self::USER24, self::USER25, self::USER26, self::USER27, self::USER28, self::USER29, self::USER30, self::USER31, self::USER32, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'user1', 'user2', 'user3', 'user4', 'user5', 'user6', 'user7', 'user8', 'user9', 'user10', 'user11', 'user12', 'user13', 'user14', 'user15', 'user16', 'user17', 'user18', 'user19', 'user20', 'user21', 'user22', 'user23', 'user24', 'user25', 'user26', 'user27', 'user28', 'user29', 'user30', 'user31', 'user32', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'User1' => 1, 'User2' => 2, 'User3' => 3, 'User4' => 4, 'User5' => 5, 'User6' => 6, 'User7' => 7, 'User8' => 8, 'User9' => 9, 'User10' => 10, 'User11' => 11, 'User12' => 12, 'User13' => 13, 'User14' => 14, 'User15' => 15, 'User16' => 16, 'User17' => 17, 'User18' => 18, 'User19' => 19, 'User20' => 20, 'User21' => 21, 'User22' => 22, 'User23' => 23, 'User24' => 24, 'User25' => 25, 'User26' => 26, 'User27' => 27, 'User28' => 28, 'User29' => 29, 'User30' => 30, 'User31' => 31, 'User32' => 32, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'user1' => 1, 'user2' => 2, 'user3' => 3, 'user4' => 4, 'user5' => 5, 'user6' => 6, 'user7' => 7, 'user8' => 8, 'user9' => 9, 'user10' => 10, 'user11' => 11, 'user12' => 12, 'user13' => 13, 'user14' => 14, 'user15' => 15, 'user16' => 16, 'user17' => 17, 'user18' => 18, 'user19' => 19, 'user20' => 20, 'user21' => 21, 'user22' => 22, 'user23' => 23, 'user24' => 24, 'user25' => 25, 'user26' => 26, 'user27' => 27, 'user28' => 28, 'user29' => 29, 'user30' => 30, 'user31' => 31, 'user32' => 32, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::USER1 => 1, self::USER2 => 2, self::USER3 => 3, self::USER4 => 4, self::USER5 => 5, self::USER6 => 6, self::USER7 => 7, self::USER8 => 8, self::USER9 => 9, self::USER10 => 10, self::USER11 => 11, self::USER12 => 12, self::USER13 => 13, self::USER14 => 14, self::USER15 => 15, self::USER16 => 16, self::USER17 => 17, self::USER18 => 18, self::USER19 => 19, self::USER20 => 20, self::USER21 => 21, self::USER22 => 22, self::USER23 => 23, self::USER24 => 24, self::USER25 => 25, self::USER26 => 26, self::USER27 => 27, self::USER28 => 28, self::USER29 => 29, self::USER30 => 30, self::USER31 => 31, self::USER32 => 32, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'user1' => 1, 'user2' => 2, 'user3' => 3, 'user4' => 4, 'user5' => 5, 'user6' => 6, 'user7' => 7, 'user8' => 8, 'user9' => 9, 'user10' => 10, 'user11' => 11, 'user12' => 12, 'user13' => 13, 'user14' => 14, 'user15' => 15, 'user16' => 16, 'user17' => 17, 'user18' => 18, 'user19' => 19, 'user20' => 20, 'user21' => 21, 'user22' => 22, 'user23' => 23, 'user24' => 24, 'user25' => 25, 'user26' => 26, 'user27' => 27, 'user28' => 28, 'user29' => 29, 'user30' => 30, 'user31' => 31, 'user32' => 32, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31, 32, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosResourceMapBuilder();
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
	 * @param      string $column The column name for current table. (i.e. NagiosResourcePeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosResourcePeer::TABLE_NAME.'.', $alias.'.', $column);
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

		$criteria->addSelectColumn(NagiosResourcePeer::ID);

		$criteria->addSelectColumn(NagiosResourcePeer::USER1);

		$criteria->addSelectColumn(NagiosResourcePeer::USER2);

		$criteria->addSelectColumn(NagiosResourcePeer::USER3);

		$criteria->addSelectColumn(NagiosResourcePeer::USER4);

		$criteria->addSelectColumn(NagiosResourcePeer::USER5);

		$criteria->addSelectColumn(NagiosResourcePeer::USER6);

		$criteria->addSelectColumn(NagiosResourcePeer::USER7);

		$criteria->addSelectColumn(NagiosResourcePeer::USER8);

		$criteria->addSelectColumn(NagiosResourcePeer::USER9);

		$criteria->addSelectColumn(NagiosResourcePeer::USER10);

		$criteria->addSelectColumn(NagiosResourcePeer::USER11);

		$criteria->addSelectColumn(NagiosResourcePeer::USER12);

		$criteria->addSelectColumn(NagiosResourcePeer::USER13);

		$criteria->addSelectColumn(NagiosResourcePeer::USER14);

		$criteria->addSelectColumn(NagiosResourcePeer::USER15);

		$criteria->addSelectColumn(NagiosResourcePeer::USER16);

		$criteria->addSelectColumn(NagiosResourcePeer::USER17);

		$criteria->addSelectColumn(NagiosResourcePeer::USER18);

		$criteria->addSelectColumn(NagiosResourcePeer::USER19);

		$criteria->addSelectColumn(NagiosResourcePeer::USER20);

		$criteria->addSelectColumn(NagiosResourcePeer::USER21);

		$criteria->addSelectColumn(NagiosResourcePeer::USER22);

		$criteria->addSelectColumn(NagiosResourcePeer::USER23);

		$criteria->addSelectColumn(NagiosResourcePeer::USER24);

		$criteria->addSelectColumn(NagiosResourcePeer::USER25);

		$criteria->addSelectColumn(NagiosResourcePeer::USER26);

		$criteria->addSelectColumn(NagiosResourcePeer::USER27);

		$criteria->addSelectColumn(NagiosResourcePeer::USER28);

		$criteria->addSelectColumn(NagiosResourcePeer::USER29);

		$criteria->addSelectColumn(NagiosResourcePeer::USER30);

		$criteria->addSelectColumn(NagiosResourcePeer::USER31);

		$criteria->addSelectColumn(NagiosResourcePeer::USER32);

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
		$criteria->setPrimaryTableName(NagiosResourcePeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosResourcePeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosResource
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosResourcePeer::doSelect($critcopy, $con);
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
		return NagiosResourcePeer::populateObjects(NagiosResourcePeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosResourcePeer::addSelectColumns($criteria);
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
	 * @param      NagiosResource $value A NagiosResource object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosResource $obj, $key = null)
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
	 * @param      mixed $value A NagiosResource object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosResource) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosResource object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosResource Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
		$cls = NagiosResourcePeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosResourcePeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosResourcePeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosResourcePeer::addInstanceToPool($obj, $key);
			} // if key exists
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
		return NagiosResourcePeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosResource or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosResource object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosResource object
		}

		if ($criteria->containsKey(NagiosResourcePeer::ID) && $criteria->keyContainsValue(NagiosResourcePeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosResourcePeer::ID.')');
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
	 * Method perform an UPDATE on the database, given a NagiosResource or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosResource object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosResourcePeer::ID);
			$selectCriteria->add(NagiosResourcePeer::ID, $criteria->remove(NagiosResourcePeer::ID), $comparison);

		} else { // $values is NagiosResource object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_resource table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(NagiosResourcePeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosResource or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosResource object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosResourcePeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosResource) {
			// invalidate the cache for this single object
			NagiosResourcePeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosResourcePeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosResourcePeer::removeInstanceFromPool($singleval);
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
	 * Validates all modified columns of given NagiosResource object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosResource $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosResource $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosResourcePeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosResourcePeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosResourcePeer::DATABASE_NAME, NagiosResourcePeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosResource
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosResourcePeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosResourcePeer::DATABASE_NAME);
		$criteria->add(NagiosResourcePeer::ID, $pk);

		$v = NagiosResourcePeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosResourcePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosResourcePeer::DATABASE_NAME);
			$criteria->add(NagiosResourcePeer::ID, $pks, Criteria::IN);
			$objs = NagiosResourcePeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosResourcePeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosResourcePeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosResourcePeer class:
//
// Propel::getDatabaseMap(NagiosResourcePeer::DATABASE_NAME)->addTableBuilder(NagiosResourcePeer::TABLE_NAME, NagiosResourcePeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosResourcePeer::DATABASE_NAME)->addTableBuilder(BaseNagiosResourcePeer::TABLE_NAME, BaseNagiosResourcePeer::getMapBuilder());

