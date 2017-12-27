<?php



/**
 * This class defines the structure of the 'nagios_cgi_configuration' table.
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
class NagiosCgiConfigurationTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosCgiConfigurationTableMap';

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
		$this->setName('nagios_cgi_configuration');
		$this->setPhpName('NagiosCgiConfiguration');
		$this->setClassname('NagiosCgiConfiguration');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('PHYSICAL_HTML_PATH', 'PhysicalHtmlPath', 'VARCHAR', false, 255, null);
		$this->addColumn('URL_HTML_PATH', 'UrlHtmlPath', 'VARCHAR', false, 255, null);
		$this->addColumn('USE_AUTHENTICATION', 'UseAuthentication', 'BOOLEAN', false, null, null);
		$this->addColumn('DEFAULT_USER_NAME', 'DefaultUserName', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_SYSTEM_INFORMATION', 'AuthorizedForSystemInformation', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_SYSTEM_COMMANDS', 'AuthorizedForSystemCommands', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_CONFIGURATION_INFORMATION', 'AuthorizedForConfigurationInformation', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_ALL_HOSTS', 'AuthorizedForAllHosts', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_ALL_HOST_COMMANDS', 'AuthorizedForAllHostCommands', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_ALL_SERVICES', 'AuthorizedForAllServices', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_ALL_SERVICE_COMMANDS', 'AuthorizedForAllServiceCommands', 'VARCHAR', false, 255, null);
		$this->addColumn('LOCK_AUTHOR_NAMES', 'LockAuthorNames', 'BOOLEAN', false, null, null);
		$this->addColumn('STATUSMAP_BACKGROUND_IMAGE', 'StatusmapBackgroundImage', 'VARCHAR', false, 255, null);
		$this->addColumn('DEFAULT_STATUSMAP_LAYOUT', 'DefaultStatusmapLayout', 'TINYINT', false, null, null);
		$this->addColumn('STATUSWRL_INCLUDE', 'StatuswrlInclude', 'VARCHAR', false, 255, null);
		$this->addColumn('DEFAULT_STATUSWRL_LAYOUT', 'DefaultStatuswrlLayout', 'TINYINT', false, null, null);
		$this->addColumn('REFRESH_RATE', 'RefreshRate', 'INTEGER', false, null, null);
		$this->addColumn('HOST_UNREACHABLE_SOUND', 'HostUnreachableSound', 'VARCHAR', false, 255, null);
		$this->addColumn('HOST_DOWN_SOUND', 'HostDownSound', 'VARCHAR', false, 255, null);
		$this->addColumn('SERVICE_CRITICAL_SOUND', 'ServiceCriticalSound', 'VARCHAR', false, 255, null);
		$this->addColumn('SERVICE_WARNING_SOUND', 'ServiceWarningSound', 'VARCHAR', false, 255, null);
		$this->addColumn('SERVICE_UNKNOWN_SOUND', 'ServiceUnknownSound', 'VARCHAR', false, 255, null);
		$this->addColumn('PING_SYNTAX', 'PingSyntax', 'VARCHAR', false, 255, null);
		$this->addColumn('ESCAPE_HTML_TAGS', 'EscapeHtmlTags', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTES_URL_TARGET', 'NotesUrlTarget', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTION_URL_TARGET', 'ActionUrlTarget', 'VARCHAR', false, 255, null);
		$this->addColumn('ENABLE_SPLUNK_INTEGRATION', 'EnableSplunkIntegration', 'BOOLEAN', false, null, null);
		$this->addColumn('SPLUNK_URL', 'SplunkUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('AUTHORIZED_FOR_READ_ONLY', 'AuthorizedForReadOnly', 'VARCHAR', false, 255, null);
		$this->addColumn('COLOR_TRANSPARENCY_INDEX_R', 'ColorTransparencyIndexR', 'INTEGER', false, null, null);
		$this->addColumn('COLOR_TRANSPARENCY_INDEX_G', 'ColorTransparencyIndexG', 'INTEGER', false, null, null);
		$this->addColumn('COLOR_TRANSPARENCY_INDEX_B', 'ColorTransparencyIndexB', 'INTEGER', false, null, null);
		$this->addColumn('RESULT_LIMIT', 'ResultLimit', 'INTEGER', false, null, null);
		$this->addColumn('NAGIOS_CHECK_COMMAND', 'NagiosCheckCommand', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
	} // buildRelations()

} // NagiosCgiConfigurationTableMap
