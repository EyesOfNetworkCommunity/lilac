<?php



/**
 * This class defines the structure of the 'autodiscovery_device_service' table.
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
class AutodiscoveryDeviceServiceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.AutodiscoveryDeviceServiceTableMap';

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
		$this->setName('autodiscovery_device_service');
		$this->setPhpName('AutodiscoveryDeviceService');
		$this->setClassname('AutodiscoveryDeviceService');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('DEVICE_ID', 'DeviceId', 'INTEGER', 'autodiscovery_device', 'ID', true, null, null);
		$this->addColumn('PROTOCOL', 'Protocol', 'VARCHAR', true, 255, null);
		$this->addColumn('PORT', 'Port', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('PRODUCT', 'Product', 'VARCHAR', true, 255, null);
		$this->addColumn('VERSION', 'Version', 'VARCHAR', true, 255, null);
		$this->addColumn('EXTRAINFO', 'Extrainfo', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AutodiscoveryDevice', 'AutodiscoveryDevice', RelationMap::MANY_TO_ONE, array('device_id' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // AutodiscoveryDeviceServiceTableMap
