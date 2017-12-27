<?php



/**
 * This class defines the structure of the 'nagios_dependency' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class NagiosDependencyTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosDependencyTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('nagios_dependency');
		$this->setPhpName('NagiosDependency');
		$this->setClassname('NagiosDependency');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_TEMPLATE', 'ServiceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null, null);
		$this->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null, null);
		$this->addForeignKey('HOSTGROUP', 'Hostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', false, 255, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_UP', 'ExecutionFailureCriteriaUp', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_DOWN', 'ExecutionFailureCriteriaDown', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_UNREACHABLE', 'ExecutionFailureCriteriaUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_PENDING', 'ExecutionFailureCriteriaPending', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_OK', 'ExecutionFailureCriteriaOk', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_WARNING', 'ExecutionFailureCriteriaWarning', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_UNKNOWN', 'ExecutionFailureCriteriaUnknown', 'BOOLEAN', false, null, null);
		$this->addColumn('EXECUTION_FAILURE_CRITERIA_CRITICAL', 'ExecutionFailureCriteriaCritical', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_OK', 'NotificationFailureCriteriaOk', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_WARNING', 'NotificationFailureCriteriaWarning', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_UNKNOWN', 'NotificationFailureCriteriaUnknown', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_CRITICAL', 'NotificationFailureCriteriaCritical', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_PENDING', 'NotificationFailureCriteriaPending', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_UP', 'NotificationFailureCriteriaUp', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_DOWN', 'NotificationFailureCriteriaDown', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_FAILURE_CRITERIA_UNREACHABLE', 'NotificationFailureCriteriaUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('INHERITS_PARENT', 'InheritsParent', 'BOOLEAN', false, null, null);
		$this->addForeignKey('DEPENDENCY_PERIOD', 'DependencyPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('host_template' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosServiceTemplate', 'NagiosServiceTemplate', RelationMap::MANY_TO_ONE, array('service_template' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosService', 'NagiosService', RelationMap::MANY_TO_ONE, array('service' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostgroup', 'NagiosHostgroup', RelationMap::MANY_TO_ONE, array('hostgroup' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosTimeperiod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('dependency_period' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosDependencyTarget', 'NagiosDependencyTarget', RelationMap::ONE_TO_MANY, array('id' => 'dependency', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosDependencyTableMap
