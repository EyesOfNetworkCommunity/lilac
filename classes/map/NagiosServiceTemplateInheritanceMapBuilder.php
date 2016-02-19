<?php


/**
 * This class adds structure of 'nagios_service_template_inheritance' table to 'lilac' DatabaseMap object.
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
class NagiosServiceTemplateInheritanceMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosServiceTemplateInheritanceMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosServiceTemplateInheritancePeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosServiceTemplateInheritancePeer::TABLE_NAME);
		$tMap->setPhpName('NagiosServiceTemplateInheritance');
		$tMap->setClassname('NagiosServiceTemplateInheritance');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('SOURCE_SERVICE', 'SourceService', 'INTEGER', 'nagios_service', 'ID', false, null);

		$tMap->addForeignKey('SOURCE_TEMPLATE', 'SourceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null);

		$tMap->addForeignKey('TARGET_TEMPLATE', 'TargetTemplate', 'INTEGER', 'nagios_service_template', 'ID', true, null);

		$tMap->addColumn('ORDER', 'Order', 'INTEGER', true, null);

	} // doBuild()

} // NagiosServiceTemplateInheritanceMapBuilder
