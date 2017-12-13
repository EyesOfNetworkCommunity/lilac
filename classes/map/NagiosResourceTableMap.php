<?php



/**
 * This class defines the structure of the 'nagios_resource' table.
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
class NagiosResourceTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosResourceTableMap';

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
		$this->setName('nagios_resource');
		$this->setPhpName('NagiosResource');
		$this->setClassname('NagiosResource');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('USER1', 'User1', 'VARCHAR', false, 255, null);
		$this->addColumn('USER2', 'User2', 'VARCHAR', false, 255, null);
		$this->addColumn('USER3', 'User3', 'VARCHAR', false, 255, null);
		$this->addColumn('USER4', 'User4', 'VARCHAR', false, 255, null);
		$this->addColumn('USER5', 'User5', 'VARCHAR', false, 255, null);
		$this->addColumn('USER6', 'User6', 'VARCHAR', false, 255, null);
		$this->addColumn('USER7', 'User7', 'VARCHAR', false, 255, null);
		$this->addColumn('USER8', 'User8', 'VARCHAR', false, 255, null);
		$this->addColumn('USER9', 'User9', 'VARCHAR', false, 255, null);
		$this->addColumn('USER10', 'User10', 'VARCHAR', false, 255, null);
		$this->addColumn('USER11', 'User11', 'VARCHAR', false, 255, null);
		$this->addColumn('USER12', 'User12', 'VARCHAR', false, 255, null);
		$this->addColumn('USER13', 'User13', 'VARCHAR', false, 255, null);
		$this->addColumn('USER14', 'User14', 'VARCHAR', false, 255, null);
		$this->addColumn('USER15', 'User15', 'VARCHAR', false, 255, null);
		$this->addColumn('USER16', 'User16', 'VARCHAR', false, 255, null);
		$this->addColumn('USER17', 'User17', 'VARCHAR', false, 255, null);
		$this->addColumn('USER18', 'User18', 'VARCHAR', false, 255, null);
		$this->addColumn('USER19', 'User19', 'VARCHAR', false, 255, null);
		$this->addColumn('USER20', 'User20', 'VARCHAR', false, 255, null);
		$this->addColumn('USER21', 'User21', 'VARCHAR', false, 255, null);
		$this->addColumn('USER22', 'User22', 'VARCHAR', false, 255, null);
		$this->addColumn('USER23', 'User23', 'VARCHAR', false, 255, null);
		$this->addColumn('USER24', 'User24', 'VARCHAR', false, 255, null);
		$this->addColumn('USER25', 'User25', 'VARCHAR', false, 255, null);
		$this->addColumn('USER26', 'User26', 'VARCHAR', false, 255, null);
		$this->addColumn('USER27', 'User27', 'VARCHAR', false, 255, null);
		$this->addColumn('USER28', 'User28', 'VARCHAR', false, 255, null);
		$this->addColumn('USER29', 'User29', 'VARCHAR', false, 255, null);
		$this->addColumn('USER30', 'User30', 'VARCHAR', false, 255, null);
		$this->addColumn('USER31', 'User31', 'VARCHAR', false, 255, null);
		$this->addColumn('USER32', 'User32', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // NagiosResourceTableMap
