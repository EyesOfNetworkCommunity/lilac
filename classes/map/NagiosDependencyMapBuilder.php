<?php


/**
 * This class adds structure of 'nagios_dependency' table to 'lilac' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    .map
 */
class NagiosDependencyMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosDependencyMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NagiosDependencyPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosDependencyPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosDependency');
		$tMap->setClassname('NagiosDependency');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null);

		$tMap->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null);

		$tMap->addForeignKey('SERVICE_TEMPLATE', 'ServiceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null);

		$tMap->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null);

		$tMap->addForeignKey('HOSTGROUP', 'Hostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', false, 255);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_UP', 'ExecutionFailureCriteriaUp', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_DOWN', 'ExecutionFailureCriteriaDown', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_UNREACHABLE', 'ExecutionFailureCriteriaUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_PENDING', 'ExecutionFailureCriteriaPending', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_OK', 'ExecutionFailureCriteriaOk', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_WARNING', 'ExecutionFailureCriteriaWarning', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_UNKNOWN', 'ExecutionFailureCriteriaUnknown', 'BOOLEAN', false, null);

		$tMap->addColumn('EXECUTION_FAILURE_CRITERIA_CRITICAL', 'ExecutionFailureCriteriaCritical', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_OK', 'NotificationFailureCriteriaOk', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_WARNING', 'NotificationFailureCriteriaWarning', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_UNKNOWN', 'NotificationFailureCriteriaUnknown', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_CRITICAL', 'NotificationFailureCriteriaCritical', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_PENDING', 'NotificationFailureCriteriaPending', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_UP', 'NotificationFailureCriteriaUp', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_DOWN', 'NotificationFailureCriteriaDown', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE', 'NotificationFailureCriteriaUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('INHERITS_PARENT', 'InheritsParent', 'BOOLEAN', false, null);

		$tMap->addForeignKey('DEPENDENCY_PERIOD', 'DependencyPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

	} // doBuild()

} // NagiosDependencyMapBuilder
