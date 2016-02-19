<?php


/**
 * This class adds structure of 'export_job' table to 'lilac' DatabaseMap object.
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
class ExportJobMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ExportJobMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ExportJobPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ExportJobPeer::TABLE_NAME);
		$tMap->setPhpName('ExportJob');
		$tMap->setClassname('ExportJob');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('NAME', 'Name', 'VARCHAR', true, 255);

		$tMap->addColumn('DESCRIPTION', 'Description', 'VARCHAR', true, 255);

		$tMap->addColumn('CONFIG', 'Config', 'LONGVARCHAR', true, null);

		$tMap->addColumn('START_TIME', 'StartTime', 'TIMESTAMP', false, null);

		$tMap->addColumn('END_TIME', 'EndTime', 'TIMESTAMP', false, null);

		$tMap->addColumn('STATUS', 'Status', 'VARCHAR', false, 255);

		$tMap->addColumn('STATUS_CODE', 'StatusCode', 'INTEGER', true, null);

		$tMap->addColumn('STATUS_CHANGE_TIME', 'StatusChangeTime', 'TIMESTAMP', false, null);

		$tMap->addColumn('STATS', 'Stats', 'LONGVARCHAR', true, null);

		$tMap->addColumn('CMD', 'Cmd', 'VARCHAR', false, 255);

	} // doBuild()

} // ExportJobMapBuilder
