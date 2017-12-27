<?php



/**
 * This class defines the structure of the 'import_log_entry' table.
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
class ImportLogEntryTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.ImportLogEntryTableMap';

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
		$this->setName('import_log_entry');
		$this->setPhpName('ImportLogEntry');
		$this->setClassname('ImportLogEntry');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addForeignKey('JOB', 'Job', 'INTEGER', 'import_job', 'ID', false, null, null);
		$this->addColumn('TIME', 'Time', 'TIMESTAMP', true, null, null);
		$this->addColumn('TEXT', 'Text', 'LONGVARCHAR', true, null, null);
		$this->addColumn('TYPE', 'Type', 'INTEGER', true, null, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('ImportJob', 'ImportJob', RelationMap::MANY_TO_ONE, array('job' => 'id', ), 'CASCADE', null);
	} // buildRelations()

} // ImportLogEntryTableMap
