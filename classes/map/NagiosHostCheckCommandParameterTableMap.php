<?php



/**
 * This class defines the structure of the 'nagios_host_check_command_parameter' table.
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
class NagiosHostCheckCommandParameterTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostCheckCommandParameterTableMap';

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
		$this->setName('nagios_host_check_command_parameter');
		$this->setPhpName('NagiosHostCheckCommandParameter');
		$this->setClassname('NagiosHostCheckCommandParameter');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('HOST', 'Host', 'INTEGER', 'nagios_host', 'ID', false, null, null);
		$this->addForeignKey('HOST_TEMPLATE', 'HostTemplate', 'INTEGER', 'nagios_host_template', 'ID', false, null, null);
		$this->addColumn('PARAMETER', 'Parameter', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosHost', 'NagiosHost', RelationMap::MANY_TO_ONE, array('host' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplate', 'NagiosHostTemplate', RelationMap::MANY_TO_ONE, array('host_template' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostCheckCommandParameterTableMap
