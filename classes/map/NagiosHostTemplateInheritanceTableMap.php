<?php



/**
 * This class defines the structure of the 'nagios_host_template_inheritance' table.
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
class NagiosHostTemplateInheritanceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostTemplateInheritanceTableMap';

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
		$this->setName('nagios_host_template_inheritance');
		$this->setPhpName('NagiosHostTemplateInheritance');
		$this->setClassname('NagiosHostTemplateInheritance');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('SOURCE_HOST', 'SourceHost', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('SOURCE_TEMPLATE', 'SourceTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addForeignKey('TARGET_TEMPLATE', 'TargetTemplate', 'INTEGER', 'nagios_host_template', 'ID', true, null, null);
		$this->addColumn('ORDER', 'Order', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('source_host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplateRelatedBySourceTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('source_template' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplateRelatedByTargetTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('target_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostTemplateInheritanceTableMap
