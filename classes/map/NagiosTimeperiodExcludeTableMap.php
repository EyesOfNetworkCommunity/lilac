<?php



/**
 * This class defines the structure of the 'nagios_timeperiod_exclude' table.
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
class NagiosTimeperiodExcludeTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosTimeperiodExcludeTableMap';

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
		$this->setName('nagios_timeperiod_exclude');
		$this->setPhpName('NagiosTimeperiodExclude');
		$this->setClassname('NagiosTimeperiodExclude');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('TIMEPERIOD_ID', 'TimeperiodId', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addForeignKey('EXCLUDED_TIMEPERIOD', 'ExcludedTimeperiod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosTimeperiodRelatedByTimeperiodId', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('timeperiod_id' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByExcludedTimeperiod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('excluded_timeperiod' => 'id', ), 'SET NULL', null);
	} // buildRelations()

} // NagiosTimeperiodExcludeTableMap
