<?php


/**
 * This class adds structure of 'nagios_service_contact_group_member' table to 'lilac' DatabaseMap object.
 *
 *
 *
 * These statically-built map classes are used by Propel to do runtime db structure discovery.
 * For example, the createSelectSql() method checks the type of a given column used in an
 * ORDER BY clause to know whether it needs to apply SQL to make the ORDER BY case-insensitive
 * (i.e. if it's a text column type).
 *
 * @package    .map
 */
class NagiosServiceContactGroupMemberMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosServiceContactGroupMemberMapBuilder';

	/**
	 * The database map.
	 */
	private $dbMap;

	/**
	 * Tells us if this DatabaseMapBuilder is built so that we
	 * don't have to re-build it every time.
	 *
	 * @return     boolean true if this DatabaseMapBuilder is built, false otherwise.
	 */
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	/**
	 * Gets the databasemap this map builder built.
	 *
	 * @return     the databasemap
	 */
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	/**
	 * The doBuild() method builds the DatabaseMap
	 *
	 * @return     void
	 * @throws     PropelException
	 */
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap(NagiosServiceContactGroupMemberPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosServiceContactGroupMemberPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosServiceContactGroupMember');
		$tMap->setClassname('NagiosServiceContactGroupMember');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addForeignKey('SERVICE', 'Service', 'INTEGER', 'nagios_service', 'ID', false, null);

		$tMap->addForeignKey('TEMPLATE', 'Template', 'INTEGER', 'nagios_service_template', 'ID', false, null);

		$tMap->addForeignKey('CONTACT_GROUP', 'ContactGroup', 'INTEGER', 'nagios_contact_group', 'ID', false, null);

	} // doBuild()

} // NagiosServiceContactGroupMemberMapBuilder
