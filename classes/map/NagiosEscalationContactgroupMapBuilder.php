<?php


/**
 * This class adds structure of 'nagios_escalation_contactgroup' table to 'lilac' DatabaseMap object.
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
class NagiosEscalationContactgroupMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosEscalationContactgroupMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosEscalationContactgroupPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosEscalationContactgroupPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosEscalationContactgroup');
		$tMap->setClassname('NagiosEscalationContactgroup');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('ESCALATION', 'Escalation', 'INTEGER', 'nagios_escalation', 'ID', true, null);

		$tMap->addForeignKey('CONTACTGROUP', 'Contactgroup', 'INTEGER', 'nagios_contact_group', 'ID', true, null);

	} // doBuild()

} // NagiosEscalationContactgroupMapBuilder
