<?php


/**
 * Base static class for performing query and update operations on the 'nagios_dependency' table.
 *
 * Nagios Dependency
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosDependencyPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_dependency';

	/** the related Propel class for this table */
	const OM_CLASS = 'NagiosDependency';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosDependency';

	/** the related TableMap class for this table */
	const TM_CLASS = 'NagiosDependencyTableMap';
	
	/** The total number of columns. */
	const NUM_COLUMNS = 25;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** The number of columns to hydrate (NUM_COLUMNS - NUM_LAZY_LOAD_COLUMNS) */
	const NUM_HYDRATE_COLUMNS = 25;

	/** the column name for the ID field */
	const ID = 'nagios_dependency.ID';

	/** the column name for the HOST_TEMPLATE field */
	const HOST_TEMPLATE = 'nagios_dependency.HOST_TEMPLATE';

	/** the column name for the HOST field */
	const HOST = 'nagios_dependency.HOST';

	/** the column name for the SERVICE_TEMPLATE field */
	const SERVICE_TEMPLATE = 'nagios_dependency.SERVICE_TEMPLATE';

	/** the column name for the SERVICE field */
	const SERVICE = 'nagios_dependency.SERVICE';

	/** the column name for the HOSTGROUP field */
	const HOSTGROUP = 'nagios_dependency.HOSTGROUP';

	/** the column name for the NAME field */
	const NAME = 'nagios_dependency.NAME';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_UP field */
	const EXECUTION_FAILURE_CRITERIA_UP = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_UP';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_DOWN field */
	const EXECUTION_FAILURE_CRITERIA_DOWN = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_DOWN';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_UNREACHABLE field */
	const EXECUTION_FAILURE_CRITERIA_UNREACHABLE = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_UNREACHABLE';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_PENDING field */
	const EXECUTION_FAILURE_CRITERIA_PENDING = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_PENDING';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_OK field */
	const EXECUTION_FAILURE_CRITERIA_OK = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_OK';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_WARNING field */
	const EXECUTION_FAILURE_CRITERIA_WARNING = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_WARNING';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_UNKNOWN field */
	const EXECUTION_FAILURE_CRITERIA_UNKNOWN = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_UNKNOWN';

	/** the column name for the EXECUTION_FAILURE_CRITERIA_CRITICAL field */
	const EXECUTION_FAILURE_CRITERIA_CRITICAL = 'nagios_dependency.EXECUTION_FAILURE_CRITERIA_CRITICAL';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_OK field */
	const NOTIFICATION_FAILURE_CRITERIA_OK = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_OK';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_WARNING field */
	const NOTIFICATION_FAILURE_CRITERIA_WARNING = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_WARNING';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_UNKNOWN field */
	const NOTIFICATION_FAILURE_CRITERIA_UNKNOWN = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_UNKNOWN';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_CRITICAL field */
	const NOTIFICATION_FAILURE_CRITERIA_CRITICAL = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_CRITICAL';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_PENDING field */
	const NOTIFICATION_FAILURE_CRITERIA_PENDING = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_PENDING';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_UP field */
	const NOTIFICATION_FAILURE_CRITERIA_UP = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_UP';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_DOWN field */
	const NOTIFICATION_FAILURE_CRITERIA_DOWN = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_DOWN';

	/** the column name for the NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE field */
	const NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE = 'nagios_dependency.NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE';

	/** the column name for the INHERITS_PARENT field */
	const INHERITS_PARENT = 'nagios_dependency.INHERITS_PARENT';

	/** the column name for the DEPENDENCY_PERIOD field */
	const DEPENDENCY_PERIOD = 'nagios_dependency.DEPENDENCY_PERIOD';

	/** The default string format for model objects of the related table **/
	const DEFAULT_STRING_FORMAT = 'YAML';
	
	/**
	 * An identiy map to hold any loaded instances of NagiosDependency objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosDependency[]
	 */
	public static $instances = array();


	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	protected static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'HostTemplate', 'Host', 'ServiceTemplate', 'Service', 'Hostgroup', 'Name', 'ExecutionFailureCriteriaUp', 'ExecutionFailureCriteriaDown', 'ExecutionFailureCriteriaUnreachable', 'ExecutionFailureCriteriaPending', 'ExecutionFailureCriteriaOk', 'ExecutionFailureCriteriaWarning', 'ExecutionFailureCriteriaUnknown', 'ExecutionFailureCriteriaCritical', 'NotificationFailureCriteriaOk', 'NotificationFailureCriteriaWarning', 'NotificationFailureCriteriaUnknown', 'NotificationFailureCriteriaCritical', 'NotificationFailureCriteriaPending', 'NotificationFailureCriteriaUp', 'NotificationFailureCriteriaDown', 'NotificationFailureCriteriaUnreachable', 'InheritsParent', 'DependencyPeriod', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'hostTemplate', 'host', 'serviceTemplate', 'service', 'hostgroup', 'name', 'executionFailureCriteriaUp', 'executionFailureCriteriaDown', 'executionFailureCriteriaUnreachable', 'executionFailureCriteriaPending', 'executionFailureCriteriaOk', 'executionFailureCriteriaWarning', 'executionFailureCriteriaUnknown', 'executionFailureCriteriaCritical', 'notificationFailureCriteriaOk', 'notificationFailureCriteriaWarning', 'notificationFailureCriteriaUnknown', 'notificationFailureCriteriaCritical', 'notificationFailureCriteriaPending', 'notificationFailureCriteriaUp', 'notificationFailureCriteriaDown', 'notificationFailureCriteriaUnreachable', 'inheritsParent', 'dependencyPeriod', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::HOST_TEMPLATE, self::HOST, self::SERVICE_TEMPLATE, self::SERVICE, self::HOSTGROUP, self::NAME, self::EXECUTION_FAILURE_CRITERIA_UP, self::EXECUTION_FAILURE_CRITERIA_DOWN, self::EXECUTION_FAILURE_CRITERIA_UNREACHABLE, self::EXECUTION_FAILURE_CRITERIA_PENDING, self::EXECUTION_FAILURE_CRITERIA_OK, self::EXECUTION_FAILURE_CRITERIA_WARNING, self::EXECUTION_FAILURE_CRITERIA_UNKNOWN, self::EXECUTION_FAILURE_CRITERIA_CRITICAL, self::NOTIFICATION_FAILURE_CRITERIA_OK, self::NOTIFICATION_FAILURE_CRITERIA_WARNING, self::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN, self::NOTIFICATION_FAILURE_CRITERIA_CRITICAL, self::NOTIFICATION_FAILURE_CRITERIA_PENDING, self::NOTIFICATION_FAILURE_CRITERIA_UP, self::NOTIFICATION_FAILURE_CRITERIA_DOWN, self::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE, self::INHERITS_PARENT, self::DEPENDENCY_PERIOD, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID', 'HOST_TEMPLATE', 'HOST', 'SERVICE_TEMPLATE', 'SERVICE', 'HOSTGROUP', 'NAME', 'EXECUTION_FAILURE_CRITERIA_UP', 'EXECUTION_FAILURE_CRITERIA_DOWN', 'EXECUTION_FAILURE_CRITERIA_UNREACHABLE', 'EXECUTION_FAILURE_CRITERIA_PENDING', 'EXECUTION_FAILURE_CRITERIA_OK', 'EXECUTION_FAILURE_CRITERIA_WARNING', 'EXECUTION_FAILURE_CRITERIA_UNKNOWN', 'EXECUTION_FAILURE_CRITERIA_CRITICAL', 'NOTIFICATION_FAILURE_CRITERIA_OK', 'NOTIFICATION_FAILURE_CRITERIA_WARNING', 'NOTIFICATION_FAILURE_CRITERIA_UNKNOWN', 'NOTIFICATION_FAILURE_CRITERIA_CRITICAL', 'NOTIFICATION_FAILURE_CRITERIA_PENDING', 'NOTIFICATION_FAILURE_CRITERIA_UP', 'NOTIFICATION_FAILURE_CRITERIA_DOWN', 'NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE', 'INHERITS_PARENT', 'DEPENDENCY_PERIOD', ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'host_template', 'host', 'service_template', 'service', 'hostgroup', 'name', 'execution_failure_criteria_up', 'execution_failure_criteria_down', 'execution_failure_criteria_unreachable', 'execution_failure_criteria_pending', 'execution_failure_criteria_ok', 'execution_failure_criteria_warning', 'execution_failure_criteria_unknown', 'execution_failure_criteria_critical', 'notification_failure_criteria_ok', 'notification_failure_criteria_warning', 'notification_failure_criteria_unknown', 'notification_failure_criteria_critical', 'notification_failure_criteria_pending', 'notification_failure_criteria_up', 'notification_failure_criteria_down', 'notification_failure_criteria_unreachable', 'inherits_parent', 'dependency_period', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	protected static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'HostTemplate' => 1, 'Host' => 2, 'ServiceTemplate' => 3, 'Service' => 4, 'Hostgroup' => 5, 'Name' => 6, 'ExecutionFailureCriteriaUp' => 7, 'ExecutionFailureCriteriaDown' => 8, 'ExecutionFailureCriteriaUnreachable' => 9, 'ExecutionFailureCriteriaPending' => 10, 'ExecutionFailureCriteriaOk' => 11, 'ExecutionFailureCriteriaWarning' => 12, 'ExecutionFailureCriteriaUnknown' => 13, 'ExecutionFailureCriteriaCritical' => 14, 'NotificationFailureCriteriaOk' => 15, 'NotificationFailureCriteriaWarning' => 16, 'NotificationFailureCriteriaUnknown' => 17, 'NotificationFailureCriteriaCritical' => 18, 'NotificationFailureCriteriaPending' => 19, 'NotificationFailureCriteriaUp' => 20, 'NotificationFailureCriteriaDown' => 21, 'NotificationFailureCriteriaUnreachable' => 22, 'InheritsParent' => 23, 'DependencyPeriod' => 24, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'hostTemplate' => 1, 'host' => 2, 'serviceTemplate' => 3, 'service' => 4, 'hostgroup' => 5, 'name' => 6, 'executionFailureCriteriaUp' => 7, 'executionFailureCriteriaDown' => 8, 'executionFailureCriteriaUnreachable' => 9, 'executionFailureCriteriaPending' => 10, 'executionFailureCriteriaOk' => 11, 'executionFailureCriteriaWarning' => 12, 'executionFailureCriteriaUnknown' => 13, 'executionFailureCriteriaCritical' => 14, 'notificationFailureCriteriaOk' => 15, 'notificationFailureCriteriaWarning' => 16, 'notificationFailureCriteriaUnknown' => 17, 'notificationFailureCriteriaCritical' => 18, 'notificationFailureCriteriaPending' => 19, 'notificationFailureCriteriaUp' => 20, 'notificationFailureCriteriaDown' => 21, 'notificationFailureCriteriaUnreachable' => 22, 'inheritsParent' => 23, 'dependencyPeriod' => 24, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::HOST_TEMPLATE => 1, self::HOST => 2, self::SERVICE_TEMPLATE => 3, self::SERVICE => 4, self::HOSTGROUP => 5, self::NAME => 6, self::EXECUTION_FAILURE_CRITERIA_UP => 7, self::EXECUTION_FAILURE_CRITERIA_DOWN => 8, self::EXECUTION_FAILURE_CRITERIA_UNREACHABLE => 9, self::EXECUTION_FAILURE_CRITERIA_PENDING => 10, self::EXECUTION_FAILURE_CRITERIA_OK => 11, self::EXECUTION_FAILURE_CRITERIA_WARNING => 12, self::EXECUTION_FAILURE_CRITERIA_UNKNOWN => 13, self::EXECUTION_FAILURE_CRITERIA_CRITICAL => 14, self::NOTIFICATION_FAILURE_CRITERIA_OK => 15, self::NOTIFICATION_FAILURE_CRITERIA_WARNING => 16, self::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN => 17, self::NOTIFICATION_FAILURE_CRITERIA_CRITICAL => 18, self::NOTIFICATION_FAILURE_CRITERIA_PENDING => 19, self::NOTIFICATION_FAILURE_CRITERIA_UP => 20, self::NOTIFICATION_FAILURE_CRITERIA_DOWN => 21, self::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE => 22, self::INHERITS_PARENT => 23, self::DEPENDENCY_PERIOD => 24, ),
		BasePeer::TYPE_RAW_COLNAME => array ('ID' => 0, 'HOST_TEMPLATE' => 1, 'HOST' => 2, 'SERVICE_TEMPLATE' => 3, 'SERVICE' => 4, 'HOSTGROUP' => 5, 'NAME' => 6, 'EXECUTION_FAILURE_CRITERIA_UP' => 7, 'EXECUTION_FAILURE_CRITERIA_DOWN' => 8, 'EXECUTION_FAILURE_CRITERIA_UNREACHABLE' => 9, 'EXECUTION_FAILURE_CRITERIA_PENDING' => 10, 'EXECUTION_FAILURE_CRITERIA_OK' => 11, 'EXECUTION_FAILURE_CRITERIA_WARNING' => 12, 'EXECUTION_FAILURE_CRITERIA_UNKNOWN' => 13, 'EXECUTION_FAILURE_CRITERIA_CRITICAL' => 14, 'NOTIFICATION_FAILURE_CRITERIA_OK' => 15, 'NOTIFICATION_FAILURE_CRITERIA_WARNING' => 16, 'NOTIFICATION_FAILURE_CRITERIA_UNKNOWN' => 17, 'NOTIFICATION_FAILURE_CRITERIA_CRITICAL' => 18, 'NOTIFICATION_FAILURE_CRITERIA_PENDING' => 19, 'NOTIFICATION_FAILURE_CRITERIA_UP' => 20, 'NOTIFICATION_FAILURE_CRITERIA_DOWN' => 21, 'NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE' => 22, 'INHERITS_PARENT' => 23, 'DEPENDENCY_PERIOD' => 24, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'host_template' => 1, 'host' => 2, 'service_template' => 3, 'service' => 4, 'hostgroup' => 5, 'name' => 6, 'execution_failure_criteria_up' => 7, 'execution_failure_criteria_down' => 8, 'execution_failure_criteria_unreachable' => 9, 'execution_failure_criteria_pending' => 10, 'execution_failure_criteria_ok' => 11, 'execution_failure_criteria_warning' => 12, 'execution_failure_criteria_unknown' => 13, 'execution_failure_criteria_critical' => 14, 'notification_failure_criteria_ok' => 15, 'notification_failure_criteria_warning' => 16, 'notification_failure_criteria_unknown' => 17, 'notification_failure_criteria_critical' => 18, 'notification_failure_criteria_pending' => 19, 'notification_failure_criteria_up' => 20, 'notification_failure_criteria_down' => 21, 'notification_failure_criteria_unreachable' => 22, 'inherits_parent' => 23, 'dependency_period' => 24, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, )
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
	 * @param      string $column The column name for current table. (i.e. NagiosDependencyPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosDependencyPeer::TABLE_NAME.'.', $alias.'.', $column);
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
			$criteria->addSelectColumn(NagiosDependencyPeer::ID);
			$criteria->addSelectColumn(NagiosDependencyPeer::HOST_TEMPLATE);
			$criteria->addSelectColumn(NagiosDependencyPeer::HOST);
			$criteria->addSelectColumn(NagiosDependencyPeer::SERVICE_TEMPLATE);
			$criteria->addSelectColumn(NagiosDependencyPeer::SERVICE);
			$criteria->addSelectColumn(NagiosDependencyPeer::HOSTGROUP);
			$criteria->addSelectColumn(NagiosDependencyPeer::NAME);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UP);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_DOWN);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNREACHABLE);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_PENDING);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_OK);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_WARNING);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_UNKNOWN);
			$criteria->addSelectColumn(NagiosDependencyPeer::EXECUTION_FAILURE_CRITERIA_CRITICAL);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_OK);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_WARNING);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNKNOWN);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_CRITICAL);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_PENDING);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UP);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_DOWN);
			$criteria->addSelectColumn(NagiosDependencyPeer::NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE);
			$criteria->addSelectColumn(NagiosDependencyPeer::INHERITS_PARENT);
			$criteria->addSelectColumn(NagiosDependencyPeer::DEPENDENCY_PERIOD);
		} else {
			$criteria->addSelectColumn($alias . '.ID');
			$criteria->addSelectColumn($alias . '.HOST_TEMPLATE');
			$criteria->addSelectColumn($alias . '.HOST');
			$criteria->addSelectColumn($alias . '.SERVICE_TEMPLATE');
			$criteria->addSelectColumn($alias . '.SERVICE');
			$criteria->addSelectColumn($alias . '.HOSTGROUP');
			$criteria->addSelectColumn($alias . '.NAME');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_UP');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_DOWN');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_UNREACHABLE');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_PENDING');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_OK');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_WARNING');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_UNKNOWN');
			$criteria->addSelectColumn($alias . '.EXECUTION_FAILURE_CRITERIA_CRITICAL');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_OK');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_WARNING');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_UNKNOWN');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_CRITICAL');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_PENDING');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_UP');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_DOWN');
			$criteria->addSelectColumn($alias . '.NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE');
			$criteria->addSelectColumn($alias . '.INHERITS_PARENT');
			$criteria->addSelectColumn($alias . '.DEPENDENCY_PERIOD');
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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
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
	 * @return     NagiosDependency
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosDependencyPeer::doSelect($critcopy, $con);
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
		return NagiosDependencyPeer::populateObjects(NagiosDependencyPeer::doSelectStmt($criteria, $con));
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
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosDependencyPeer::addSelectColumns($criteria);
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
	 * @param      NagiosDependency $value A NagiosDependency object.
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
	 * @param      mixed $value A NagiosDependency object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosDependency) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosDependency object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
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
	 * @return     NagiosDependency Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
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
	 * Method to invalidate the instance pool of all tables related to nagios_dependency
	 * by a foreign key with ON DELETE CASCADE
	 */
	public static function clearRelatedInstancePool()
	{
		// Invalidate objects in NagiosDependencyTargetPeer instance pool, 
		// since one or more of them may be deleted by ON DELETE CASCADE/SETNULL rule.
		NagiosDependencyTargetPeer::clearInstancePool();
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
		$cls = NagiosDependencyPeer::getOMClass(false);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosDependencyPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosDependencyPeer::addInstanceToPool($obj, $key);
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
	 * @return     array (NagiosDependency object, last column rank)
	 */
	public static function populateObject($row, $startcol = 0)
	{
		$key = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, $startcol);
		if (null !== ($obj = NagiosDependencyPeer::getInstanceFromPool($key))) {
			// We no longer rehydrate the object, since this can cause data loss.
			// See http://www.propelorm.org/ticket/509
			// $obj->hydrate($row, $startcol, true); // rehydrate
			$col = $startcol + NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		} else {
			$cls = NagiosDependencyPeer::OM_CLASS;
			$obj = new $cls();
			$col = $obj->hydrate($row, $startcol);
			NagiosDependencyPeer::addInstanceToPool($obj, $key);
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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosHostTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosHost objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosHost)
				$obj2->addNagiosDependency($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosServiceTemplate objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosServiceTemplatePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosServiceTemplate)
				$obj2->addNagiosDependency($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosService objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosServicePeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosService)
				$obj2->addNagiosDependency($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosHostgroup objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosHostgroupPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosHostgroup)
				$obj2->addNagiosDependency($obj1);

			} // if joined row was not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with their NagiosTimeperiod objects.
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;
		NagiosTimeperiodPeer::addSelectColumns($criteria);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {

				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to $obj2 (NagiosTimeperiod)
				$obj2->addNagiosDependency($obj1);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependency($obj1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosDependency($obj1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosDependency($obj1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosHostgroup)
				$obj6->addNagiosDependency($obj1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj7 (NagiosTimeperiod)
				$obj7->addNagiosDependency($obj1);
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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);

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
		$criteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
		
		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosDependencyPeer::addSelectColumns($criteria);
		}
		
		$criteria->clearOrderByColumns(); // ORDER BY should not affect count
		
		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
	
		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

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
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosHostTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHost)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosServiceTemplate)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosDependency($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosHost.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosServiceTemplate)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosDependency($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosServiceTemplate.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosService)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosDependency($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosService.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosHostgroup)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosDependency($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosHostgroup.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::DEPENDENCY_PERIOD, NagiosTimeperiodPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosTimeperiod)
				$obj6->addNagiosDependency($obj1);

			} // if joined row is not null

			$results[] = $obj1;
		}
		$stmt->closeCursor();
		return $results;
	}


	/**
	 * Selects a collection of NagiosDependency objects pre-filled with all related objects except NagiosTimeperiod.
	 *
	 * @param      Criteria  $criteria
	 * @param      PropelPDO $con
	 * @param      String    $join_behavior the type of joins to use, defaults to Criteria::LEFT_JOIN
	 * @return     array Array of NagiosDependency objects.
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

		NagiosDependencyPeer::addSelectColumns($criteria);
		$startcol2 = NagiosDependencyPeer::NUM_HYDRATE_COLUMNS;

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

		$criteria->addJoin(NagiosDependencyPeer::HOST_TEMPLATE, NagiosHostTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOST, NagiosHostPeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE_TEMPLATE, NagiosServiceTemplatePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::SERVICE, NagiosServicePeer::ID, $join_behavior);

		$criteria->addJoin(NagiosDependencyPeer::HOSTGROUP, NagiosHostgroupPeer::ID, $join_behavior);


		$stmt = BasePeer::doSelect($criteria, $con);
		$results = array();

		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key1 = NagiosDependencyPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj1 = NagiosDependencyPeer::getInstanceFromPool($key1))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://www.propelorm.org/ticket/509
				// $obj1->hydrate($row, 0, true); // rehydrate
			} else {
				$cls = NagiosDependencyPeer::getOMClass(false);

				$obj1 = new $cls();
				$obj1->hydrate($row);
				NagiosDependencyPeer::addInstanceToPool($obj1, $key1);
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

				// Add the $obj1 (NagiosDependency) to the collection in $obj2 (NagiosHostTemplate)
				$obj2->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj3 (NagiosHost)
				$obj3->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj4 (NagiosServiceTemplate)
				$obj4->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj5 (NagiosService)
				$obj5->addNagiosDependency($obj1);

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

				// Add the $obj1 (NagiosDependency) to the collection in $obj6 (NagiosHostgroup)
				$obj6->addNagiosDependency($obj1);

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
	  $dbMap = Propel::getDatabaseMap(BaseNagiosDependencyPeer::DATABASE_NAME);
	  if (!$dbMap->hasTable(BaseNagiosDependencyPeer::TABLE_NAME))
	  {
	    $dbMap->addTableObject(new NagiosDependencyTableMap());
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
		return $withPrefix ? NagiosDependencyPeer::CLASS_DEFAULT : NagiosDependencyPeer::OM_CLASS;
	}

	/**
	 * Performs an INSERT on the database, given a NagiosDependency or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosDependency object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosDependency object
		}

		if ($criteria->containsKey(NagiosDependencyPeer::ID) && $criteria->keyContainsValue(NagiosDependencyPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosDependencyPeer::ID.')');
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
	 * Performs an UPDATE on the database, given a NagiosDependency or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosDependency object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosDependencyPeer::ID);
			$value = $criteria->remove(NagiosDependencyPeer::ID);
			if ($value) {
				$selectCriteria->add(NagiosDependencyPeer::ID, $value, $comparison);
			} else {
				$selectCriteria->setPrimaryTableName(NagiosDependencyPeer::TABLE_NAME);
			}

		} else { // $values is NagiosDependency object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Deletes all rows from the nagios_dependency table.
	 *
	 * @param      PropelPDO $con the connection to use
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll(PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += NagiosDependencyPeer::doOnDeleteCascade(new Criteria(NagiosDependencyPeer::DATABASE_NAME), $con);
			$affectedRows += BasePeer::doDeleteAll(NagiosDependencyPeer::TABLE_NAME, $con, NagiosDependencyPeer::DATABASE_NAME);
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			NagiosDependencyPeer::clearInstancePool();
			NagiosDependencyPeer::clearRelatedInstancePool();
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs a DELETE on the database, given a NagiosDependency or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosDependency object or primary key or array of primary keys
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
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosDependency) { // it's a model object
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else { // it's a primary key, or an array of pks
			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosDependencyPeer::ID, (array) $values, Criteria::IN);
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
			$affectedRows += NagiosDependencyPeer::doOnDeleteCascade($c, $con);
			
			// Because this db requires some delete cascade/set null emulation, we have to
			// clear the cached instance *after* the emulation has happened (since
			// instances get re-added by the select statement contained therein).
			if ($values instanceof Criteria) {
				NagiosDependencyPeer::clearInstancePool();
			} elseif ($values instanceof NagiosDependency) { // it's a model object
				NagiosDependencyPeer::removeInstanceFromPool($values);
			} else { // it's a primary key, or an array of pks
				foreach ((array) $values as $singleval) {
					NagiosDependencyPeer::removeInstanceFromPool($singleval);
				}
			}
			
			$affectedRows += BasePeer::doDelete($criteria, $con);
			NagiosDependencyPeer::clearRelatedInstancePool();
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
		$objects = NagiosDependencyPeer::doSelect($criteria, $con);
		foreach ($objects as $obj) {


			// delete related NagiosDependencyTarget objects
			$criteria = new Criteria(NagiosDependencyTargetPeer::DATABASE_NAME);
			
			$criteria->add(NagiosDependencyTargetPeer::DEPENDENCY, $obj->getId());
			$affectedRows += NagiosDependencyTargetPeer::doDelete($criteria, $con);
		}
		return $affectedRows;
	}

	/**
	 * Validates all modified columns of given NagiosDependency object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosDependency $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate($obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosDependencyPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosDependencyPeer::TABLE_NAME);

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

		return BasePeer::doValidate(NagiosDependencyPeer::DATABASE_NAME, NagiosDependencyPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosDependency
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosDependencyPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
		$criteria->add(NagiosDependencyPeer::ID, $pk);

		$v = NagiosDependencyPeer::doSelect($criteria, $con);

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
			$con = Propel::getConnection(NagiosDependencyPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosDependencyPeer::DATABASE_NAME);
			$criteria->add(NagiosDependencyPeer::ID, $pks, Criteria::IN);
			$objs = NagiosDependencyPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosDependencyPeer

// This is the static code needed to register the TableMap for this table with the main Propel class.
//
BaseNagiosDependencyPeer::buildTableMap();

