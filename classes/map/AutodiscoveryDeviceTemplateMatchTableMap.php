<?php



/**
 * This class defines the structure of the 'autodiscovery_device_template_match' table.
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
class AutodiscoveryDeviceTemplateMatchTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.AutodiscoveryDeviceTemplateMatchTableMap';

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
		$this->setName('autodiscovery_device_template_match');
		$this->setPhpName('AutodiscoveryDeviceTemplateMatch');
		$this->setClassname('AutodiscoveryDeviceTemplateMatch');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('DEVICE_ID', 'DeviceId', 'INTEGER', 'autodiscovery_device', 'ID', true, null, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', true, null, null);
		$this->addColumn('PERCENT', 'Percent', 'FLOAT', true, null, null);
		$this->addColumn('COMPLEXITY', 'Complexity', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AutodiscoveryDevice', 'AutodiscoveryDevice', RelationMap::MANY_TO_ONE, array('device_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('host_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // AutodiscoveryDeviceTemplateMatchTableMap
