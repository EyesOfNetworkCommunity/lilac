<?php



/**
 * This class defines the structure of the 'autodiscovery_device' table.
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
class AutodiscoveryDeviceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.AutodiscoveryDeviceTableMap';

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
		$this->setName('autodiscovery_device');
		$this->setPhpName('AutodiscoveryDevice');
		$this->setClassname('AutodiscoveryDevice');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('JOB_ID', 'JobId', 'INTEGER', 'autodiscovery_job', 'ID', true, null, null);
		$this->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 255, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', false, 255, null);
		$this->addColumn('HOSTNAME', 'Hostname', 'VARCHAR', false, 255, null);
		$this->addColumn('DESCRIPTION', 'Description', 'VARCHAR', false, 255, null);
		$this->addColumn('OSVENDOR', 'Osvendor', 'VARCHAR', false, 255, null);
		$this->addColumn('OSFAMILY', 'Osfamily', 'VARCHAR', false, 255, null);
		$this->addColumn('OSGEN', 'Osgen', 'VARCHAR', false, 255, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', true, null, null);
		$this->addForeignKey('PROPOSED_PARENT', 'ProposedParent', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('AutodiscoveryJob', 'AutodiscoveryJob', RelationMap::MANY_TO_ONE, array('job_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('host_template' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('proposed_parent' => 'id', ), 'SET NULL', null);
		$this->addRelation('AutodiscoveryDeviceService', 'AutodiscoveryDeviceService', RelationMap::ONE_TO_MANY, array('id' => 'device_id', ), 'CASCADE', null);
		$this->addRelation('AutodiscoveryDeviceTemplateMatch', 'AutodiscoveryDeviceTemplateMatch', RelationMap::ONE_TO_MANY, array('id' => 'device_id', ), 'CASCADE', null);
	} // buildRelations()

} // AutodiscoveryDeviceTableMap
