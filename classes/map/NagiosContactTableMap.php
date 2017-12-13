<?php



/**
 * This class defines the structure of the 'nagios_contact' table.
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
class NagiosContactTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosContactTableMap';

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
		$this->setName('nagios_contact');
		$this->setPhpName('NagiosContact');
		$this->setClassname('NagiosContact');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('ALIAS', 'Alias', 'VARCHAR', true, 255, null);
		$this->addColumn('EMAIL', 'Email', 'VARCHAR', false, 255, null);
		$this->addColumn('PAGER', 'Pager', 'VARCHAR', false, 255, null);
		$this->addColumn('HOST_NOTIFICATIONS_ENABLED', 'HostNotificationsEnabled', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATIONS_ENABLED', 'ServiceNotificationsEnabled', 'BOOLEAN', true, null, null);
		$this->addForeignKey('HOST_NOTIFICATION_PERIOD', 'HostNotificationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_NOTIFICATION_PERIOD', 'ServiceNotificationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('HOST_NOTIFICATION_ON_DOWN', 'HostNotificationOnDown', 'BOOLEAN', true, null, null);
		$this->addColumn('HOST_NOTIFICATION_ON_UNREACHABLE', 'HostNotificationOnUnreachable', 'BOOLEAN', true, null, null);
		$this->addColumn('HOST_NOTIFICATION_ON_RECOVERY', 'HostNotificationOnRecovery', 'BOOLEAN', true, null, null);
		$this->addColumn('HOST_NOTIFICATION_ON_FLAPPING', 'HostNotificationOnFlapping', 'BOOLEAN', true, null, null);
		$this->addColumn('HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME', 'HostNotificationOnScheduledDowntime', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATION_ON_WARNING', 'ServiceNotificationOnWarning', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATION_ON_UNKNOWN', 'ServiceNotificationOnUnknown', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATION_ON_CRITICAL', 'ServiceNotificationOnCritical', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATION_ON_RECOVERY', 'ServiceNotificationOnRecovery', 'BOOLEAN', true, null, null);
		$this->addColumn('SERVICE_NOTIFICATION_ON_FLAPPING', 'ServiceNotificationOnFlapping', 'BOOLEAN', true, null, null);
		$this->addColumn('CAN_SUBMIT_COMMANDS', 'CanSubmitCommands', 'BOOLEAN', true, null, null);
		$this->addColumn('RETAIN_STATUS_INFORMATION', 'RetainStatusInformation', 'BOOLEAN', true, null, null);
		$this->addColumn('RETAIN_NONSTATUS_INFORMATION', 'RetainNonstatusInformation', 'BOOLEAN', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosTimeperiodRelatedByHostNotificationPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('host_notification_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByServiceNotificationPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('service_notification_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosContactAddress', 'NagiosContactAddress', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
		$this->addRelation('NagiosContactGroupMember', 'NagiosContactGroupMember', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
		$this->addRelation('NagiosContactNotificationCommand', 'NagiosContactNotificationCommand', RelationMap::ONE_TO_MANY, array('id' => 'contact_id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostContactMember', 'NagiosHostContactMember', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
		$this->addRelation('NagiosServiceContactMember', 'NagiosServiceContactMember', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
		$this->addRelation('NagiosEscalationContact', 'NagiosEscalationContact', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
		$this->addRelation('NagiosContactCustomObjectVar', 'NagiosContactCustomObjectVar', RelationMap::ONE_TO_MANY, array('id' => 'contact', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosContactTableMap
