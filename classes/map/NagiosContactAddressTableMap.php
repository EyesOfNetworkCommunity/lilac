<?php



/**
 * This class defines the structure of the 'nagios_contact_address' table.
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
class NagiosContactAddressTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosContactAddressTableMap';

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
		$this->setName('nagios_contact_address');
		$this->setPhpName('NagiosContactAddress');
		$this->setClassname('NagiosContactAddress');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('CONTACT', 'Contact', 'INTEGER', 'nagios_contact', 'ID', true, null, null);
		$this->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosContact', 'NagiosContact', RelationMap::MANY_TO_ONE, array('contact' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosContactAddressTableMap
