<?php


/**
 * This class adds structure of 'export_log_entry' table to 'lilac' DatabaseMap object.
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
class ExportLogEntryMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ExportLogEntryMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(ExportLogEntryPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(ExportLogEntryPeer::TABLE_NAME);
		$tMap->setPhpName('ExportLogEntry');
		$tMap->setClassname('ExportLogEntry');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('JOB', 'Job', 'INTEGER', 'export_job', 'ID', false, null);

		$tMap->addColumn('TIME', 'Time', 'TIMESTAMP', true, null);

		$tMap->addColumn('TEXT', 'Text', 'LONGVARCHAR', true, null);

		$tMap->addColumn('TYPE', 'Type', 'INTEGER', true, null);

	} // doBuild()

} // ExportLogEntryMapBuilder
