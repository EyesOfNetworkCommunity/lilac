<?php



/**
 * This class defines the structure of the 'nagios_host_parent' table.
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
class NagiosHostParentTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostParentTableMap';

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
		$this->setName('nagios_host_parent');
		$this->setPhpName('NagiosHostParent');
		$this->setClassname('NagiosHostParent');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CHILD_HOST', 'ChildHost', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('CHILD_HOST_TEMPLATE', 'ChildHostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addForeignKey('PARENT_HOST', 'ParentHost', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosHostRelatedByChildHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('child_host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostRelatedByParentHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('parent_host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('child_host_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostParentTableMap
