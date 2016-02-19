<?php


/**
 * This class adds structure of 'nagios_timeperiod_exclude' table to 'lilac' DatabaseMap object.
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
class NagiosTimeperiodExcludeMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosTimeperiodExcludeMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosTimeperiodExcludePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosTimeperiodExcludePeer::TABLE_NAME);
		$tMap->setPhpName('NagiosTimeperiodExclude');
		$tMap->setClassname('NagiosTimeperiodExclude');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('TIMEPERIOD_ID', 'TimeperiodId', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

		$tMap->addForeignKey('EXCLUDED_TIMEPERIOD', 'ExcludedTimeperiod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null);

	} // doBuild()

} // NagiosTimeperiodExcludeMapBuilder
