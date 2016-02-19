<?php


/**
 * This class adds structure of 'nagios_cgi_configuration' table to 'lilac' DatabaseMap object.
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
class NagiosCgiConfigurationMapBuilder implements MapBuilder {

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosCgiConfigurationMapBuilder';

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
		$this->dbMap = Propel::getDatabaseMap(NagiosCgiConfigurationPeer::DATABASE_NAME);

		$tMap = $this->dbMap->addTable(NagiosCgiConfigurationPeer::TABLE_NAME);
		$tMap->setPhpName('NagiosCgiConfiguration');
		$tMap->setClassname('NagiosCgiConfiguration');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'INTEGER', true, null);

		$tMap->addColumn('PHYSICAL_HTML_PATH', 'PhysicalHtmlPath', 'VARCHAR', false, 255);

		$tMap->addColumn('URL_HTML_PATH', 'UrlHtmlPath', 'VARCHAR', false, 255);

		$tMap->addColumn('USE_AUTHENTICATION', 'UseAuthentication', 'BOOLEAN', false, null);

		$tMap->addColumn('DEFAULT_USER_NAME', 'DefaultUserName', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_SYSTEM_INFORMATION', 'AuthorizedForSystemInformation', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_SYSTEM_COMMANDS', 'AuthorizedForSystemCommands', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_CONFIGURATION_INFORMATION', 'AuthorizedForConfigurationInformation', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_ALL_HOSTS', 'AuthorizedForAllHosts', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_ALL_HOST_COMMANDS', 'AuthorizedForAllHostCommands', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_ALL_SERVICES', 'AuthorizedForAllServices', 'VARCHAR', false, 255);

		$tMap->addColumn('AUTHORIZED_FOR_ALL_SERVICE_COMMANDS', 'AuthorizedForAllServiceCommands', 'VARCHAR', false, 255);

		$tMap->addColumn('LOCK_AUTHOR_NAMES', 'LockAuthorNames', 'BOOLEAN', false, null);

		$tMap->addColumn('STATUSMAP_BACKGROUND_IMAGE', 'StatusmapBackgroundImage', 'VARCHAR', false, 255);

		$tMap->addColumn('DEFAULT_STATUSMAP_LAYOUT', 'DefaultStatusmapLayout', 'TINYINT', false, null);

		$tMap->addColumn('STATUSWRL_INCLUDE', 'StatuswrlInclude', 'VARCHAR', false, 255);

		$tMap->addColumn('DEFAULT_STATUSWRL_LAYOUT', 'DefaultStatuswrlLayout', 'TINYINT', false, null);

		$tMap->addColumn('REFRESH_RATE', 'RefreshRate', 'INTEGER', false, null);

		$tMap->addColumn('HOST_UNREACHABLE_SOUND', 'HostUnreachableSound', 'VARCHAR', false, 255);

		$tMap->addColumn('HOST_DOWN_SOUND', 'HostDownSound', 'VARCHAR', false, 255);

		$tMap->addColumn('SERVICE_CRITICAL_SOUND', 'ServiceCriticalSound', 'VARCHAR', false, 255);

		$tMap->addColumn('SERVICE_WARNING_SOUND', 'ServiceWarningSound', 'VARCHAR', false, 255);

		$tMap->addColumn('SERVICE_UNKNOWN_SOUND', 'ServiceUnknownSound', 'VARCHAR', false, 255);

		$tMap->addColumn('PING_SYNTAX', 'PingSyntax', 'VARCHAR', false, 255);

		$tMap->addColumn('ESCAPE_HTML_TAGS', 'EscapeHtmlTags', 'BOOLEAN', false, null);

		$tMap->addColumn('NOTES_URL_TARGET', 'NotesUrlTarget', 'VARCHAR', false, 255);

		$tMap->addColumn('ACTION_URL_TARGET', 'ActionUrlTarget', 'VARCHAR', false, 255);

		$tMap->addColumn('ENABLE_SPLUNK_INTEGRATION', 'EnableSplunkIntegration', 'BOOLEAN', false, null);

		$tMap->addColumn('SPLUNK_URL', 'SplunkUrl', 'VARCHAR', false, 255);

	} // doBuild()

} // NagiosCgiConfigurationMapBuilder
