<?php



/**
 * This class defines the structure of the 'nagios_host_template_autodiscovery_service' table.
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
class NagiosHostTemplateAutodiscoveryServiceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostTemplateAutodiscoveryServiceTableMap';

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
		$this->setName('nagios_host_template_autodiscovery_service');
		$this->setPhpName('NagiosHostTemplateAutodiscoveryService');
		$this->setClassname('NagiosHostTemplateAutodiscoveryService');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', false, 255, null);
		$this->addColumn('PROTOCOL', 'Protocol', 'VARCHAR', false, 255, null);
		$this->addColumn('PORT', 'Port', 'VARCHAR', false, 255, null);
		$this->addColumn('PRODUCT', 'Product', 'VARCHAR', false, 255, null);
		$this->addColumn('VERSION', 'Version', 'VARCHAR', false, 255, null);
		$this->addColumn('EXTRA_INFORMATION', 'ExtraInformation', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('host_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostTemplateAutodiscoveryServiceTableMap
