<?php


/**
 * This class adds structure of 'nagios_dependency_target' table to 'lilac' DatabaseMap object.
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
class NagiosDependencyTargetMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosDependencyTargetMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosDependencyTargetPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosDependencyTargetPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosDependencyTarget');
		$tMap->setClassname('NagiosDependencyTarget');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('DEPENDENCY', 'Dependency', 'INTEGER', 'nagios_dependency', 'ID', false, null);

		$tMap->addForeignKey('TARGET_HOST', 'TargetHost', 'INTEGER', 'nagios_host', 'ID', false, null);

		$tMap->addForeignKey('TARGET_SERVICE', 'TargetService', 'INTEGER', 'nagios_service', 'ID', false, null);

		$tMap->addForeignKey('TARGET_HOSTGROUP', 'TargetHostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null);

	} // doBuild()

} // NagiosDependencyTargetMapBuilder
