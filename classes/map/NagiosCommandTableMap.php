<?php



/**
 * This class defines the structure of the 'nagios_command' table.
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
class NagiosCommandTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosCommandTableMap';

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
		$this->setName('nagios_command');
		$this->setPhpName('NagiosCommand');
		$this->setClassname('NagiosCommand');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('LINE', 'Line', 'LONGVARCHAR', true, null, null);
		$this->addColumn('DESCRIPTION', 'Description', 'LONGVARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosContactNotificationCommand', 'NagiosContactNotificationCommand', RelationMap::ONE_TO_MANY, array('id' => 'command', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplateRelatedByCheckCommand', 'NagiosHostTemplate', RelationMap::ONE_TO_MANY, array('id' => 'check_command', ), 'SET NULL', null);
		$this->addRelation('NagiosHostTemplateRelatedByEventHandler', 'NagiosHostTemplate', RelationMap::ONE_TO_MANY, array('id' => 'event_handler', ), 'SET NULL', null);
		$this->addRelation('NagiosHostRelatedByCheckCommand', 'NagiosHost', RelationMap::ONE_TO_MANY, array('id' => 'check_command', ), 'SET NULL', null);
		$this->addRelation('NagiosHostRelatedByEventHandler', 'NagiosHost', RelationMap::ONE_TO_MANY, array('id' => 'event_handler', ), 'SET NULL', null);
		$this->addRelation('NagiosServiceTemplateRelatedByCheckCommand', 'NagiosServiceTemplate', RelationMap::ONE_TO_MANY, array('id' => 'check_command', ), 'SET NULL', null);
		$this->addRelation('NagiosServiceTemplateRelatedByEventHandler', 'NagiosServiceTemplate', RelationMap::ONE_TO_MANY, array('id' => 'event_handler', ), 'SET NULL', null);
		$this->addRelation('NagiosServiceRelatedByCheckCommand', 'NagiosService', RelationMap::ONE_TO_MANY, array('id' => 'check_command', ), 'SET NULL', null);
		$this->addRelation('NagiosServiceRelatedByEventHandler', 'NagiosService', RelationMap::ONE_TO_MANY, array('id' => 'event_handler', ), 'SET NULL', null);
		$this->addRelation('NagiosMainConfigurationRelatedByOcspCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'ocsp_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByOchpCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'ochp_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByHostPerfdataCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'host_perfdata_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByServicePerfdataCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'service_perfdata_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByHostPerfdataFileProcessingCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'host_perfdata_file_processing_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByServicePerfdataFileProcessingCommand', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'service_perfdata_file_processing_command', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByGlobalServiceEventHandler', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'global_service_event_handler', ), 'CASCADE', null);
		$this->addRelation('NagiosMainConfigurationRelatedByGlobalHostEventHandler', 'NagiosMainConfiguration', RelationMap::ONE_TO_MANY, array('id' => 'global_host_event_handler', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosCommandTableMap
