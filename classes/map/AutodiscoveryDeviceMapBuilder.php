<?php


/**
 * This class adds structure of 'autodiscovery_device' table to 'lilac' DatabaseMap object.
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
class AutodiscoveryDeviceMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.AutodiscoveryDeviceMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(AutodiscoveryDevicePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(AutodiscoveryDevicePeer::TABLE_NAME);
		$tMap->setPhpName('AutodiscoveryDevice');
		$tMap->setClassname('AutodiscoveryDevice');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('JOB_ID', 'JobId', 'INTEGER', 'autodiscovery_job', 'ID', true, null);

		$tMap->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 255);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', false, 255);

		$tMap->addColumn('HOSTNAME', 'Hostname', 'VARCHAR', false, 255);

		$tMap->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255);

		$tMap->addColumn('OSVENDOR', 'Osvendor', 'VARCHAR', false, 255);

		$tMap->addColumn('OSFAMILY', 'Osfamily', 'VARCHAR', false, 255);

		$tMap->addColumn('OSGEN', 'Osgen', 'VARCHAR', false, 255);

		$tMap->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', true, null);

		$tMap->addForeignKey('PROPOSED_PARENT', 'ProposedParent', 'INTEGER', 'nagios_host', 'ID', false, null);

	} // doBuild()

} // AutodiscoveryDeviceMapBuilder
