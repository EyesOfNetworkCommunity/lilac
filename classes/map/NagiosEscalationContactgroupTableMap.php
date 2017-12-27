<?php



/**
 * This class defines the structure of the 'nagios_escalation_contactgroup' table.
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
class NagiosEscalationContactgroupTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosEscalationContactgroupTableMap';

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
		$this->setName('nagios_escalation_contactgroup');
		$this->setPhpName('NagiosEscalationContactgroup');
		$this->setClassname('NagiosEscalationContactgroup');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('ESCALATION', 'Escalation', 'INTEGER', 'nagios_escalation', 'ID', true, null, null);
		$this->addForeignKey('CONTACTGROUP', 'Contactgroup', 'INTEGER', 'nagios_contact_group', 'ID', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosEscalation', 'NagiosEscalation', RelationMap::MANY_TO_ONE, array('escalation' => 'id', ), 'CASCADE', null);
		$this->addRelation('NagiosContactGroup', 'NagiosContactGroup', RelationMap::MANY_TO_ONE, array('contactgroup' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosEscalationContactgroupTableMap
