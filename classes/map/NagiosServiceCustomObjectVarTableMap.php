<?php



/**
 * This class defines the structure of the 'nagios_service_custom_object_var' table.
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
class NagiosServiceCustomObjectVarTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosServiceCustomObjectVarTableMap';

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
		$this->setName('nagios_service_custom_object_var');
		$this->setPhpName('NagiosServiceCustomObjectVar');
		$this->setClassname('NagiosServiceCustomObjectVar');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null, null);
		$this->addForeignKey('SERVICE_TEMPLATE', 'ServiceTemplate', 'INTEGER', 'nagios_service_template', 'ID', false, null, null);
		$this->addColumn('VAR_NAME', 'VarName', 'VARCHAR', true, 255, null);
		$this->addColumn('VAR_VALUE', 'VarValue', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosService', 'NagiosService', RelationMap::MANY_TO_ONE, array('service' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosServiceTemplate', 'NagiosServiceTemplate', RelationMap::MANY_TO_ONE, array('service_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosServiceCustomObjectVarTableMap
