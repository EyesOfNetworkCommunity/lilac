<?php



/**
 * This class defines the structure of the 'lilac_configuration' table.
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
class LilacConfigurationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.LilacConfigurationTableMap';

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
		$this->setName('lilac_configuration');
		$this->setPhpName('LilacConfiguration');
		$this->setClassname('LilacConfiguration');
		$this->setPackage('');
		$this->setUseIdGenerator(false);
		// columns
		$this->addPrimaryKey('KEY', 'Key', 'VARCHAR', true, 255, null);
		$this->addColumn('VALUE', 'Value', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // LilacConfigurationTableMap
