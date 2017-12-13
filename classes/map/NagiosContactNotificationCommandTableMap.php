<?php



/**
 * This class defines the structure of the 'nagios_contact_notification_command' table.
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
class NagiosContactNotificationCommandTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosContactNotificationCommandTableMap';

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
		$this->setName('nagios_contact_notification_command');
		$this->setPhpName('NagiosContactNotificationCommand');
		$this->setClassname('NagiosContactNotificationCommand');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CONTACT_ID', 'ContactId', 'INTEGER', 'nagios_contact', 'ID', true, null, null);
		$this->addForeignKey('COMMAND', 'Command', 'INTEGER', 'nagios_command', 'ID', true, null, null);
		$this->addColumn('TYPE', 'Type', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosContact', 'NagiosContact', RelationMap::MANY_TO_ONE, array('contact_id' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('command' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosContactNotificationCommandTableMap
