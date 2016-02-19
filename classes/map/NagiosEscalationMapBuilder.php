<?php


/**
 * This class adds structure of 'nagios_escalation' table to 'lilac' DatabaseMap object.
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
class NagiosEscalationMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosEscalationMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosEscalationPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosEscalationPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosEscalation');
		$tMap->setClassname('NagiosEscalation');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 255);

		$tMap->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null);

		$tMap->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null);

		$tMap->addForeignKey('HOSTGROUP', 'Hostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null);

		$tMap->addForeignKey('SERVICE_TEMPLATE', 'ServiceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null);

		$tMap->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null);

		$tMap->addColumn('FIRST_NOTIFICATION', 'FirstNotification', 'INTEGER', false, null);

		$tMap->addColumn('LAST_NOTIFICATION', 'LastNotification', 'INTEGER', false, null);

		$tMap->addColumn('NOTIFICATION_INTERVAL', 'NotificationInterval', 'INTEGER', false, null);

		$tMap->addForeignKey('ESCALATION_PERIOD', 'EscalationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_UP', 'EscalationOptionsUp', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_DOWN', 'EscalationOptionsDown', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_UNREACHABLE', 'EscalationOptionsUnreachable', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_OK', 'EscalationOptionsOk', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_WARNING', 'EscalationOptionsWarning', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_UNKNOWN', 'EscalationOptionsUnknown', 'BOOLEAN', false, null);

		$tMap->addColumn('ESCALATION_OPTIONS_CRITICAL', 'EscalationOptionsCritical', 'BOOLEAN', false, null);

	} // doBuild()

} // NagiosEscalationMapBuilder
