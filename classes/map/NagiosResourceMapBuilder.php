<?php


/**
 * This class adds structure of 'nagios_resource' table to 'lilac' DatabaseMap object.
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
class NagiosResourceMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosResourceMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosResourcePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosResourcePeer::TABLE_NAME);
		$tMap->setPhpName('NagiosResource');
		$tMap->setClassname('NagiosResource');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('USER1', 'User1', 'VARCHAR', false, 255);

		$tMap->addColumn('USER2', 'User2', 'VARCHAR', false, 255);

		$tMap->addColumn('USER3', 'User3', 'VARCHAR', false, 255);

		$tMap->addColumn('USER4', 'User4', 'VARCHAR', false, 255);

		$tMap->addColumn('USER5', 'User5', 'VARCHAR', false, 255);

		$tMap->addColumn('USER6', 'User6', 'VARCHAR', false, 255);

		$tMap->addColumn('USER7', 'User7', 'VARCHAR', false, 255);

		$tMap->addColumn('USER8', 'User8', 'VARCHAR', false, 255);

		$tMap->addColumn('USER9', 'User9', 'VARCHAR', false, 255);

		$tMap->addColumn('USER10', 'User10', 'VARCHAR', false, 255);

		$tMap->addColumn('USER11', 'User11', 'VARCHAR', false, 255);

		$tMap->addColumn('USER12', 'User12', 'VARCHAR', false, 255);

		$tMap->addColumn('USER13', 'User13', 'VARCHAR', false, 255);

		$tMap->addColumn('USER14', 'User14', 'VARCHAR', false, 255);

		$tMap->addColumn('USER15', 'User15', 'VARCHAR', false, 255);

		$tMap->addColumn('USER16', 'User16', 'VARCHAR', false, 255);

		$tMap->addColumn('USER17', 'User17', 'VARCHAR', false, 255);

		$tMap->addColumn('USER18', 'User18', 'VARCHAR', false, 255);

		$tMap->addColumn('USER19', 'User19', 'VARCHAR', false, 255);

		$tMap->addColumn('USER20', 'User20', 'VARCHAR', false, 255);

		$tMap->addColumn('USER21', 'User21', 'VARCHAR', false, 255);

		$tMap->addColumn('USER22', 'User22', 'VARCHAR', false, 255);

		$tMap->addColumn('USER23', 'User23', 'VARCHAR', false, 255);

		$tMap->addColumn('USER24', 'User24', 'VARCHAR', false, 255);

		$tMap->addColumn('USER25', 'User25', 'VARCHAR', false, 255);

		$tMap->addColumn('USER26', 'User26', 'VARCHAR', false, 255);

		$tMap->addColumn('USER27', 'User27', 'VARCHAR', false, 255);

		$tMap->addColumn('USER28', 'User28', 'VARCHAR', false, 255);

		$tMap->addColumn('USER29', 'User29', 'VARCHAR', false, 255);

		$tMap->addColumn('USER30', 'User30', 'VARCHAR', false, 255);

		$tMap->addColumn('USER31', 'User31', 'VARCHAR', false, 255);

		$tMap->addColumn('USER32', 'User32', 'VARCHAR', false, 255);

	} // doBuild()

} // NagiosResourceMapBuilder
