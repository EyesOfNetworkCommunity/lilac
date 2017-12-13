<?php



/**
 * This class defines the structure of the 'nagios_hostgroup' table.
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
class NagiosHostgroupTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostgroupTableMap';

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
		$this->setName('nagios_hostgroup');
		$this->setPhpName('NagiosHostgroup');
		$this->setClassname('NagiosHostgroup');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('ALIAS', 'Alias', 'VARCHAR', true, 255, null);
		$this->addColumn('NOTES', 'Notes', 'VARCHAR', false, 255, null);
		$this->addColumn('NOTES_URL', 'NotesUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTION_URL', 'ActionUrl', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosService', 'NagiosService', RelationMap::ONE_TO_MANY, array('id' => 'hostgroup', ), 'CASCADE', null);
		$this->addRelation('NagiosDependency', 'NagiosDependency', RelationMap::ONE_TO_MANY, array('id' => 'hostgroup', ), 'CASCADE', null);
		$this->addRelation('NagiosDependencyTarget', 'NagiosDependencyTarget', RelationMap::ONE_TO_MANY, array('id' => 'target_hostgroup', ), 'CASCADE', null);
		$this->addRelation('NagiosEscalation', 'NagiosEscalation', RelationMap::ONE_TO_MANY, array('id' => 'hostgroup', ), 'CASCADE', null);
		$this->addRelation('NagiosHostgroupMembership', 'NagiosHostgroupMembership', RelationMap::ONE_TO_MANY, array('id' => 'hostgroup', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostgroupTableMap
