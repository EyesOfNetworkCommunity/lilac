<?php



/**
 * This class defines the structure of the 'nagios_dependency_target' table.
 *
 *
 *
 * This map class is used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    propel.generator..map
 */
class NagiosDependencyTargetTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosDependencyTargetTableMap';

	/**
	 * Initialize the table attributes, columns and validators
	 * Relations are not initialized by this method since they are lazy loaded
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function initialize()
	{
		// attributes
		$this->setName('nagios_dependency_target');
		$this->setPhpName('NagiosDependencyTarget');
		$this->setClassname('NagiosDependencyTarget');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('DEPENDENCY', 'Dependency', 'INTEGER', 'nagios_dependency', 'ID', false, null, null);
		$this->addForeignKey('TARGET_HOST', 'TargetHost', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('TARGET_SERVICE', 'TargetService', 'INTEGER', 'nagios_service', 'ID', false, null, null);
		$this->addForeignKey('TARGET_HOSTGROUP', 'TargetHostgroup', 'INTEGER', 'nagios_hostgroup', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosDependency', 'NagiosDependency', RelationMap::MANY_TO_ONE, array('dependency' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('target_host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosService', 'NagiosService', RelationMap::MANY_TO_ONE, array('target_service' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostgroup', 'NagiosHostgroup', RelationMap::MANY_TO_ONE, array('target_hostgroup' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosDependencyTargetTableMap
