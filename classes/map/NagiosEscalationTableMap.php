<?php



/**
 * This class defines the structure of the 'nagios_escalation' table.
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
class NagiosEscalationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosEscalationTableMap';

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
		$this->setName('nagios_escalation');
		$this->setPhpName('NagiosEscalation');
		$this->setClassname('NagiosEscalation');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 255, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('HOSTGROUP', 'Hostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_TEMPLATE', 'ServiceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null, null);
		$this->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null, null);
		$this->addColumn('FIRST_NOTIFICATION', 'FirstNotification', 'INTEGER', false, null, null);
		$this->addColumn('LAST_NOTIFICATION', 'LastNotification', 'INTEGER', false, null, null);
		$this->addColumn('NOTIFICATION_INTERVAL', 'NotificationInterval', 'INTEGER', false, null, null);
		$this->addForeignKey('ESCALATION_PERIOD', 'EscalationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_UP', 'EscalationOptionsUp', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_DOWN', 'EscalationOptionsDown', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_UNREACHABLE', 'EscalationOptionsUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_OK', 'EscalationOptionsOk', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_WARNING', 'EscalationOptionsWarning', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_UNKNOWN', 'EscalationOptionsUnknown', 'BOOLEAN', false, null, null);
		$this->addColumn('ESCALATION_OPTIONS_CRITICAL', 'EscalationOptionsCritical', 'BOOLEAN', false, null, null);
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
		$this->addRelation('NagiosTimeperiod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('escalation_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosEscalationContact', 'NagiosEscalationContact', RelationMap::ONE_TO_MANY, array('id' => 'escalation', ), 'CASCADE', null);
		$this->addRelation('NagiosEscalationContactgroup', 'NagiosEscalationContactgroup', RelationMap::ONE_TO_MANY, array('id' => 'escalation', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosEscalationTableMap
