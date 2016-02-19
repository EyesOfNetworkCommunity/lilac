<?php


/**
 * This class adds structure of 'nagios_host_contactgroup' table to 'lilac' DatabaseMap object.
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
class NagiosHostContactgroupMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostContactgroupMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosHostContactgroupPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosHostContactgroupPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosHostContactgroup');
		$tMap->setClassname('NagiosHostContactgroup');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null);

		$tMap->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null);

		$tMap->addForeignKey('CONTACTGROUP', 'Contactgroup', 'INTEGER', 'nagios_contact_group', 'ID', true, null);

	} // doBuild()

} // NagiosHostContactgroupMapBuilder
