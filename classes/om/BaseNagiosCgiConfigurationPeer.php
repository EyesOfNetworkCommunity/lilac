<?php

/**
 * Base static class for performing query and update operations on the 'nagios_cgi_configuration' table.
 *
 * CGI Configuration
 *
 * @package    .om
 */
abstract class BaseNagiosCgiConfigurationPeer {

	/** the default database name for this class */
	const DATABASE_NAME = 'lilac';

	/** the table name for this class */
	const TABLE_NAME = 'nagios_cgi_configuration';

	/** A class that can be returned by this peer. */
	const CLASS_DEFAULT = 'NagiosCgiConfiguration';

	/** The total number of columns. */
	const NUM_COLUMNS = 29;

	/** The number of lazy-loaded columns. */
	const NUM_LAZY_LOAD_COLUMNS = 0;

	/** the column name for the ID field */
	const ID = 'nagios_cgi_configuration.ID';

	/** the column name for the PHYSICAL_HTML_PATH field */
	const PHYSICAL_HTML_PATH = 'nagios_cgi_configuration.PHYSICAL_HTML_PATH';

	/** the column name for the URL_HTML_PATH field */
	const URL_HTML_PATH = 'nagios_cgi_configuration.URL_HTML_PATH';

	/** the column name for the USE_AUTHENTICATION field */
	const USE_AUTHENTICATION = 'nagios_cgi_configuration.USE_AUTHENTICATION';

	/** the column name for the DEFAULT_USER_NAME field */
	const DEFAULT_USER_NAME = 'nagios_cgi_configuration.DEFAULT_USER_NAME';

	/** the column name for the AUTHORIZED_FOR_SYSTEM_INFORMATION field */
	const AUTHORIZED_FOR_SYSTEM_INFORMATION = 'nagios_cgi_configuration.AUTHORIZED_FOR_SYSTEM_INFORMATION';

	/** the column name for the AUTHORIZED_FOR_SYSTEM_COMMANDS field */
	const AUTHORIZED_FOR_SYSTEM_COMMANDS = 'nagios_cgi_configuration.AUTHORIZED_FOR_SYSTEM_COMMANDS';

	/** the column name for the AUTHORIZED_FOR_CONFIGURATION_INFORMATION field */
	const AUTHORIZED_FOR_CONFIGURATION_INFORMATION = 'nagios_cgi_configuration.AUTHORIZED_FOR_CONFIGURATION_INFORMATION';

	/** the column name for the AUTHORIZED_FOR_ALL_HOSTS field */
	const AUTHORIZED_FOR_ALL_HOSTS = 'nagios_cgi_configuration.AUTHORIZED_FOR_ALL_HOSTS';

	/** the column name for the AUTHORIZED_FOR_ALL_HOST_COMMANDS field */
	const AUTHORIZED_FOR_ALL_HOST_COMMANDS = 'nagios_cgi_configuration.AUTHORIZED_FOR_ALL_HOST_COMMANDS';

	/** the column name for the AUTHORIZED_FOR_ALL_SERVICES field */
	const AUTHORIZED_FOR_ALL_SERVICES = 'nagios_cgi_configuration.AUTHORIZED_FOR_ALL_SERVICES';

	/** the column name for the AUTHORIZED_FOR_ALL_SERVICE_COMMANDS field */
	const AUTHORIZED_FOR_ALL_SERVICE_COMMANDS = 'nagios_cgi_configuration.AUTHORIZED_FOR_ALL_SERVICE_COMMANDS';

	/** the column name for the LOCK_AUTHOR_NAMES field */
	const LOCK_AUTHOR_NAMES = 'nagios_cgi_configuration.LOCK_AUTHOR_NAMES';

	/** the column name for the STATUSMAP_BACKGROUND_IMAGE field */
	const STATUSMAP_BACKGROUND_IMAGE = 'nagios_cgi_configuration.STATUSMAP_BACKGROUND_IMAGE';

	/** the column name for the DEFAULT_STATUSMAP_LAYOUT field */
	const DEFAULT_STATUSMAP_LAYOUT = 'nagios_cgi_configuration.DEFAULT_STATUSMAP_LAYOUT';

	/** the column name for the STATUSWRL_INCLUDE field */
	const STATUSWRL_INCLUDE = 'nagios_cgi_configuration.STATUSWRL_INCLUDE';

	/** the column name for the DEFAULT_STATUSWRL_LAYOUT field */
	const DEFAULT_STATUSWRL_LAYOUT = 'nagios_cgi_configuration.DEFAULT_STATUSWRL_LAYOUT';

	/** the column name for the REFRESH_RATE field */
	const REFRESH_RATE = 'nagios_cgi_configuration.REFRESH_RATE';

	/** the column name for the HOST_UNREACHABLE_SOUND field */
	const HOST_UNREACHABLE_SOUND = 'nagios_cgi_configuration.HOST_UNREACHABLE_SOUND';

	/** the column name for the HOST_DOWN_SOUND field */
	const HOST_DOWN_SOUND = 'nagios_cgi_configuration.HOST_DOWN_SOUND';

	/** the column name for the SERVICE_CRITICAL_SOUND field */
	const SERVICE_CRITICAL_SOUND = 'nagios_cgi_configuration.SERVICE_CRITICAL_SOUND';

	/** the column name for the SERVICE_WARNING_SOUND field */
	const SERVICE_WARNING_SOUND = 'nagios_cgi_configuration.SERVICE_WARNING_SOUND';

	/** the column name for the SERVICE_UNKNOWN_SOUND field */
	const SERVICE_UNKNOWN_SOUND = 'nagios_cgi_configuration.SERVICE_UNKNOWN_SOUND';

	/** the column name for the PING_SYNTAX field */
	const PING_SYNTAX = 'nagios_cgi_configuration.PING_SYNTAX';

	/** the column name for the ESCAPE_HTML_TAGS field */
	const ESCAPE_HTML_TAGS = 'nagios_cgi_configuration.ESCAPE_HTML_TAGS';

	/** the column name for the NOTES_URL_TARGET field */
	const NOTES_URL_TARGET = 'nagios_cgi_configuration.NOTES_URL_TARGET';

	/** the column name for the ACTION_URL_TARGET field */
	const ACTION_URL_TARGET = 'nagios_cgi_configuration.ACTION_URL_TARGET';

	/** the column name for the ENABLE_SPLUNK_INTEGRATION field */
	const ENABLE_SPLUNK_INTEGRATION = 'nagios_cgi_configuration.ENABLE_SPLUNK_INTEGRATION';

	/** the column name for the SPLUNK_URL field */
	const SPLUNK_URL = 'nagios_cgi_configuration.SPLUNK_URL';

	/**
	 * An identiy map to hold any loaded instances of NagiosCgiConfiguration objects.
	 * This must be public so that other peer classes can access this when hydrating from JOIN
	 * queries.
	 * @var        array NagiosCgiConfiguration[]
	 */
	public static $instances = array();

	/**
	 * The MapBuilder instance for this peer.
	 * @var        MapBuilder
	 */
	private static $mapBuilder = null;

	/**
	 * holds an array of fieldnames
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[self::TYPE_PHPNAME][0] = 'Id'
	 */
	private static $fieldNames = array (
		BasePeer::TYPE_PHPNAME => array ('Id', 'PhysicalHtmlPath', 'UrlHtmlPath', 'UseAuthentication', 'DefaultUserName', 'AuthorizedForSystemInformation', 'AuthorizedForSystemCommands', 'AuthorizedForConfigurationInformation', 'AuthorizedForAllHosts', 'AuthorizedForAllHostCommands', 'AuthorizedForAllServices', 'AuthorizedForAllServiceCommands', 'LockAuthorNames', 'StatusmapBackgroundImage', 'DefaultStatusmapLayout', 'StatuswrlInclude', 'DefaultStatuswrlLayout', 'RefreshRate', 'HostUnreachableSound', 'HostDownSound', 'ServiceCriticalSound', 'ServiceWarningSound', 'ServiceUnknownSound', 'PingSyntax', 'EscapeHtmlTags', 'NotesUrlTarget', 'ActionUrlTarget', 'EnableSplunkIntegration', 'SplunkUrl', ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id', 'physicalHtmlPath', 'urlHtmlPath', 'useAuthentication', 'defaultUserName', 'authorizedForSystemInformation', 'authorizedForSystemCommands', 'authorizedForConfigurationInformation', 'authorizedForAllHosts', 'authorizedForAllHostCommands', 'authorizedForAllServices', 'authorizedForAllServiceCommands', 'lockAuthorNames', 'statusmapBackgroundImage', 'defaultStatusmapLayout', 'statuswrlInclude', 'defaultStatuswrlLayout', 'refreshRate', 'hostUnreachableSound', 'hostDownSound', 'serviceCriticalSound', 'serviceWarningSound', 'serviceUnknownSound', 'pingSyntax', 'escapeHtmlTags', 'notesUrlTarget', 'actionUrlTarget', 'enableSplunkIntegration', 'splunkUrl', ),
		BasePeer::TYPE_COLNAME => array (self::ID, self::PHYSICAL_HTML_PATH, self::URL_HTML_PATH, self::USE_AUTHENTICATION, self::DEFAULT_USER_NAME, self::AUTHORIZED_FOR_SYSTEM_INFORMATION, self::AUTHORIZED_FOR_SYSTEM_COMMANDS, self::AUTHORIZED_FOR_CONFIGURATION_INFORMATION, self::AUTHORIZED_FOR_ALL_HOSTS, self::AUTHORIZED_FOR_ALL_HOST_COMMANDS, self::AUTHORIZED_FOR_ALL_SERVICES, self::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS, self::LOCK_AUTHOR_NAMES, self::STATUSMAP_BACKGROUND_IMAGE, self::DEFAULT_STATUSMAP_LAYOUT, self::STATUSWRL_INCLUDE, self::DEFAULT_STATUSWRL_LAYOUT, self::REFRESH_RATE, self::HOST_UNREACHABLE_SOUND, self::HOST_DOWN_SOUND, self::SERVICE_CRITICAL_SOUND, self::SERVICE_WARNING_SOUND, self::SERVICE_UNKNOWN_SOUND, self::PING_SYNTAX, self::ESCAPE_HTML_TAGS, self::NOTES_URL_TARGET, self::ACTION_URL_TARGET, self::ENABLE_SPLUNK_INTEGRATION, self::SPLUNK_URL, ),
		BasePeer::TYPE_FIELDNAME => array ('id', 'physical_html_path', 'url_html_path', 'use_authentication', 'default_user_name', 'authorized_for_system_information', 'authorized_for_system_commands', 'authorized_for_configuration_information', 'authorized_for_all_hosts', 'authorized_for_all_host_commands', 'authorized_for_all_services', 'authorized_for_all_service_commands', 'lock_author_names', 'statusmap_background_image', 'default_statusmap_layout', 'statuswrl_include', 'default_statuswrl_layout', 'refresh_rate', 'host_unreachable_sound', 'host_down_sound', 'service_critical_sound', 'service_warning_sound', 'service_unknown_sound', 'ping_syntax', 'escape_html_tags', 'notes_url_target', 'action_url_target', 'enable_splunk_integration', 'splunk_url', ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
	);

	/**
	 * holds an array of keys for quick access to the fieldnames array
	 *
	 * first dimension keys are the type constants
	 * e.g. self::$fieldNames[BasePeer::TYPE_PHPNAME]['Id'] = 0
	 */
	private static $fieldKeys = array (
		BasePeer::TYPE_PHPNAME => array ('Id' => 0, 'PhysicalHtmlPath' => 1, 'UrlHtmlPath' => 2, 'UseAuthentication' => 3, 'DefaultUserName' => 4, 'AuthorizedForSystemInformation' => 5, 'AuthorizedForSystemCommands' => 6, 'AuthorizedForConfigurationInformation' => 7, 'AuthorizedForAllHosts' => 8, 'AuthorizedForAllHostCommands' => 9, 'AuthorizedForAllServices' => 10, 'AuthorizedForAllServiceCommands' => 11, 'LockAuthorNames' => 12, 'StatusmapBackgroundImage' => 13, 'DefaultStatusmapLayout' => 14, 'StatuswrlInclude' => 15, 'DefaultStatuswrlLayout' => 16, 'RefreshRate' => 17, 'HostUnreachableSound' => 18, 'HostDownSound' => 19, 'ServiceCriticalSound' => 20, 'ServiceWarningSound' => 21, 'ServiceUnknownSound' => 22, 'PingSyntax' => 23, 'EscapeHtmlTags' => 24, 'NotesUrlTarget' => 25, 'ActionUrlTarget' => 26, 'EnableSplunkIntegration' => 27, 'SplunkUrl' => 28, ),
		BasePeer::TYPE_STUDLYPHPNAME => array ('id' => 0, 'physicalHtmlPath' => 1, 'urlHtmlPath' => 2, 'useAuthentication' => 3, 'defaultUserName' => 4, 'authorizedForSystemInformation' => 5, 'authorizedForSystemCommands' => 6, 'authorizedForConfigurationInformation' => 7, 'authorizedForAllHosts' => 8, 'authorizedForAllHostCommands' => 9, 'authorizedForAllServices' => 10, 'authorizedForAllServiceCommands' => 11, 'lockAuthorNames' => 12, 'statusmapBackgroundImage' => 13, 'defaultStatusmapLayout' => 14, 'statuswrlInclude' => 15, 'defaultStatuswrlLayout' => 16, 'refreshRate' => 17, 'hostUnreachableSound' => 18, 'hostDownSound' => 19, 'serviceCriticalSound' => 20, 'serviceWarningSound' => 21, 'serviceUnknownSound' => 22, 'pingSyntax' => 23, 'escapeHtmlTags' => 24, 'notesUrlTarget' => 25, 'actionUrlTarget' => 26, 'enableSplunkIntegration' => 27, 'splunkUrl' => 28, ),
		BasePeer::TYPE_COLNAME => array (self::ID => 0, self::PHYSICAL_HTML_PATH => 1, self::URL_HTML_PATH => 2, self::USE_AUTHENTICATION => 3, self::DEFAULT_USER_NAME => 4, self::AUTHORIZED_FOR_SYSTEM_INFORMATION => 5, self::AUTHORIZED_FOR_SYSTEM_COMMANDS => 6, self::AUTHORIZED_FOR_CONFIGURATION_INFORMATION => 7, self::AUTHORIZED_FOR_ALL_HOSTS => 8, self::AUTHORIZED_FOR_ALL_HOST_COMMANDS => 9, self::AUTHORIZED_FOR_ALL_SERVICES => 10, self::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS => 11, self::LOCK_AUTHOR_NAMES => 12, self::STATUSMAP_BACKGROUND_IMAGE => 13, self::DEFAULT_STATUSMAP_LAYOUT => 14, self::STATUSWRL_INCLUDE => 15, self::DEFAULT_STATUSWRL_LAYOUT => 16, self::REFRESH_RATE => 17, self::HOST_UNREACHABLE_SOUND => 18, self::HOST_DOWN_SOUND => 19, self::SERVICE_CRITICAL_SOUND => 20, self::SERVICE_WARNING_SOUND => 21, self::SERVICE_UNKNOWN_SOUND => 22, self::PING_SYNTAX => 23, self::ESCAPE_HTML_TAGS => 24, self::NOTES_URL_TARGET => 25, self::ACTION_URL_TARGET => 26, self::ENABLE_SPLUNK_INTEGRATION => 27, self::SPLUNK_URL => 28, ),
		BasePeer::TYPE_FIELDNAME => array ('id' => 0, 'physical_html_path' => 1, 'url_html_path' => 2, 'use_authentication' => 3, 'default_user_name' => 4, 'authorized_for_system_information' => 5, 'authorized_for_system_commands' => 6, 'authorized_for_configuration_information' => 7, 'authorized_for_all_hosts' => 8, 'authorized_for_all_host_commands' => 9, 'authorized_for_all_services' => 10, 'authorized_for_all_service_commands' => 11, 'lock_author_names' => 12, 'statusmap_background_image' => 13, 'default_statusmap_layout' => 14, 'statuswrl_include' => 15, 'default_statuswrl_layout' => 16, 'refresh_rate' => 17, 'host_unreachable_sound' => 18, 'host_down_sound' => 19, 'service_critical_sound' => 20, 'service_warning_sound' => 21, 'service_unknown_sound' => 22, 'ping_syntax' => 23, 'escape_html_tags' => 24, 'notes_url_target' => 25, 'action_url_target' => 26, 'enable_splunk_integration' => 27, 'splunk_url' => 28, ),
		BasePeer::TYPE_NUM => array (0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, )
	);

	/**
	 * Get a (singleton) instance of the MapBuilder for this peer class.
	 * @return     MapBuilder The map builder for this peer
	 */
	public static function getMapBuilder()
	{
		if (self::$mapBuilder === null) {
			self::$mapBuilder = new NagiosCgiConfigurationMapBuilder();
		}
		return self::$mapBuilder;
	}
	/**
	 * Translates a fieldname to another type
	 *
	 * @param      string $name field name
	 * @param      string $fromType One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                         BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @param      string $toType   One of the class type constants
	 * @return     string translated name of the field.
	 * @throws     PropelException - if the specified name could not be found in the fieldname mappings.
	 */
	static public function translateFieldName($name, $fromType, $toType)
	{
		$toNames = self::getFieldNames($toType);
		$key = isset(self::$fieldKeys[$fromType][$name]) ? self::$fieldKeys[$fromType][$name] : null;
		if ($key === null) {
			throw new PropelException("'$name' could not be found in the field names of type '$fromType'. These are: " . print_r(self::$fieldKeys[$fromType], true));
		}
		return $toNames[$key];
	}

	/**
	 * Returns an array of field names.
	 *
	 * @param      string $type The type of fieldnames to return:
	 *                      One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                      BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     array A list of field names
	 */

	static public function getFieldNames($type = BasePeer::TYPE_PHPNAME)
	{
		if (!array_key_exists($type, self::$fieldNames)) {
			throw new PropelException('Method getFieldNames() expects the parameter $type to be one of the class constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME, BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. ' . $type . ' was given.');
		}
		return self::$fieldNames[$type];
	}

	/**
	 * Convenience method which changes table.column to alias.column.
	 *
	 * Using this method you can maintain SQL abstraction while using column aliases.
	 * <code>
	 *		$c->addAlias("alias1", TablePeer::TABLE_NAME);
	 *		$c->addJoin(TablePeer::alias("alias1", TablePeer::PRIMARY_KEY_COLUMN), TablePeer::PRIMARY_KEY_COLUMN);
	 * </code>
	 * @param      string $alias The alias for the current table.
	 * @param      string $column The column name for current table. (i.e. NagiosCgiConfigurationPeer::COLUMN_NAME).
	 * @return     string
	 */
	public static function alias($alias, $column)
	{
		return str_replace(NagiosCgiConfigurationPeer::TABLE_NAME.'.', $alias.'.', $column);
	}

	/**
	 * Add all the columns needed to create a new object.
	 *
	 * Note: any columns that were marked with lazyLoad="true" in the
	 * XML schema will not be added to the select list and only loaded
	 * on demand.
	 *
	 * @param      criteria object containing the columns to add.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function addSelectColumns(Criteria $criteria)
	{

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::ID);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::PHYSICAL_HTML_PATH);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::URL_HTML_PATH);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::USE_AUTHENTICATION);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::DEFAULT_USER_NAME);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_INFORMATION);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_COMMANDS);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_CONFIGURATION_INFORMATION);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOSTS);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOST_COMMANDS);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICES);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::LOCK_AUTHOR_NAMES);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::STATUSMAP_BACKGROUND_IMAGE);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::STATUSWRL_INCLUDE);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::REFRESH_RATE);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::HOST_UNREACHABLE_SOUND);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::HOST_DOWN_SOUND);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::SERVICE_CRITICAL_SOUND);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::SERVICE_WARNING_SOUND);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::SERVICE_UNKNOWN_SOUND);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::PING_SYNTAX);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::ESCAPE_HTML_TAGS);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::NOTES_URL_TARGET);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::ACTION_URL_TARGET);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::ENABLE_SPLUNK_INTEGRATION);

		$criteria->addSelectColumn(NagiosCgiConfigurationPeer::SPLUNK_URL);

	}

	/**
	 * Returns the number of rows matching criteria.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct Whether to select only distinct columns; deprecated: use Criteria->setDistinct() instead.
	 * @param      PropelPDO $con
	 * @return     int Number of matching rows.
	 */
	public static function doCount(Criteria $criteria, $distinct = false, PropelPDO $con = null)
	{
		// we may modify criteria, so copy it first
		$criteria = clone $criteria;

		// We need to set the primary table name, since in the case that there are no WHERE columns
		// it will be impossible for the BasePeer::createSelectSql() method to determine which
		// tables go into the FROM clause.
		$criteria->setPrimaryTableName(NagiosCgiConfigurationPeer::TABLE_NAME);

		if ($distinct && !in_array(Criteria::DISTINCT, $criteria->getSelectModifiers())) {
			$criteria->setDistinct();
		}

		if (!$criteria->hasSelectClause()) {
			NagiosCgiConfigurationPeer::addSelectColumns($criteria);
		}

		$criteria->clearOrderByColumns(); // ORDER BY won't ever affect the count
		$criteria->setDbName(self::DATABASE_NAME); // Set the correct dbName

		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}
		// BasePeer returns a PDOStatement
		$stmt = BasePeer::doCount($criteria, $con);

		if ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$count = (int) $row[0];
		} else {
			$count = 0; // no rows returned; we infer that means 0 matches.
		}
		$stmt->closeCursor();
		return $count;
	}
	/**
	 * Method to select one object from the DB.
	 *
	 * @param      Criteria $criteria object used to create the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     NagiosCgiConfiguration
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelectOne(Criteria $criteria, PropelPDO $con = null)
	{
		$critcopy = clone $criteria;
		$critcopy->setLimit(1);
		$objects = NagiosCgiConfigurationPeer::doSelect($critcopy, $con);
		if ($objects) {
			return $objects[0];
		}
		return null;
	}
	/**
	 * Method to do selects.
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con
	 * @return     array Array of selected Objects
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doSelect(Criteria $criteria, PropelPDO $con = null)
	{
		return NagiosCgiConfigurationPeer::populateObjects(NagiosCgiConfigurationPeer::doSelectStmt($criteria, $con));
	}
	/**
	 * Prepares the Criteria object and uses the parent doSelect() method to execute a PDOStatement.
	 *
	 * Use this method directly if you want to work with an executed statement durirectly (for example
	 * to perform your own object hydration).
	 *
	 * @param      Criteria $criteria The Criteria object used to build the SELECT statement.
	 * @param      PropelPDO $con The connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 * @return     PDOStatement The executed PDOStatement object.
	 * @see        BasePeer::doSelect()
	 */
	public static function doSelectStmt(Criteria $criteria, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		if (!$criteria->hasSelectClause()) {
			$criteria = clone $criteria;
			NagiosCgiConfigurationPeer::addSelectColumns($criteria);
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		// BasePeer returns a PDOStatement
		return BasePeer::doSelect($criteria, $con);
	}
	/**
	 * Adds an object to the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doSelect*()
	 * methods in your stub classes -- you may need to explicitly add objects
	 * to the cache in order to ensure that the same objects are always returned by doSelect*()
	 * and retrieveByPK*() calls.
	 *
	 * @param      NagiosCgiConfiguration $value A NagiosCgiConfiguration object.
	 * @param      string $key (optional) key to use for instance map (for performance boost if key was already calculated externally).
	 */
	public static function addInstanceToPool(NagiosCgiConfiguration $obj, $key = null)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if ($key === null) {
				$key = (string) $obj->getId();
			} // if key === null
			self::$instances[$key] = $obj;
		}
	}

	/**
	 * Removes an object from the instance pool.
	 *
	 * Propel keeps cached copies of objects in an instance pool when they are retrieved
	 * from the database.  In some cases -- especially when you override doDelete
	 * methods in your stub classes -- you may need to explicitly remove objects
	 * from the cache in order to prevent returning objects that no longer exist.
	 *
	 * @param      mixed $value A NagiosCgiConfiguration object or a primary key value.
	 */
	public static function removeInstanceFromPool($value)
	{
		if (Propel::isInstancePoolingEnabled() && $value !== null) {
			if (is_object($value) && $value instanceof NagiosCgiConfiguration) {
				$key = (string) $value->getId();
			} elseif (is_scalar($value)) {
				// assume we've been passed a primary key
				$key = (string) $value;
			} else {
				$e = new PropelException("Invalid value passed to removeInstanceFromPool().  Expected primary key or NagiosCgiConfiguration object; got " . (is_object($value) ? get_class($value) . ' object.' : var_export($value,true)));
				throw $e;
			}

			unset(self::$instances[$key]);
		}
	} // removeInstanceFromPool()

	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      string $key The key (@see getPrimaryKeyHash()) for this instance.
	 * @return     NagiosCgiConfiguration Found object or NULL if 1) no instance exists for specified key or 2) instance pooling has been disabled.
	 * @see        getPrimaryKeyHash()
	 */
	public static function getInstanceFromPool($key)
	{
		if (Propel::isInstancePoolingEnabled()) {
			if (isset(self::$instances[$key])) {
				return self::$instances[$key];
			}
		}
		return null; // just to be explicit
	}
	
	/**
	 * Clear the instance pool.
	 *
	 * @return     void
	 */
	public static function clearInstancePool()
	{
		self::$instances = array();
	}
	
	/**
	 * Retrieves a string version of the primary key from the DB resultset row that can be used to uniquely identify a row in this table.
	 *
	 * For tables with a single-column primary key, that simple pkey value will be returned.  For tables with
	 * a multi-column primary key, a serialize()d version of the primary key will be returned.
	 *
	 * @param      array $row PropelPDO resultset row.
	 * @param      int $startcol The 0-based offset for reading from the resultset row.
	 * @return     string A string version of PK or NULL if the components of primary key in result array are all null.
	 */
	public static function getPrimaryKeyHashFromRow($row, $startcol = 0)
	{
		// If the PK cannot be derived from the row, return NULL.
		if ($row[$startcol + 0] === null) {
			return null;
		}
		return (string) $row[$startcol + 0];
	}

	/**
	 * The returned array will contain objects of the default type or
	 * objects that inherit from the default.
	 *
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function populateObjects(PDOStatement $stmt)
	{
		$results = array();
	
		// set the class once to avoid overhead in the loop
		$cls = NagiosCgiConfigurationPeer::getOMClass();
		$cls = substr('.'.$cls, strrpos('.'.$cls, '.') + 1);
		// populate the object(s)
		while ($row = $stmt->fetch(PDO::FETCH_NUM)) {
			$key = NagiosCgiConfigurationPeer::getPrimaryKeyHashFromRow($row, 0);
			if (null !== ($obj = NagiosCgiConfigurationPeer::getInstanceFromPool($key))) {
				// We no longer rehydrate the object, since this can cause data loss.
				// See http://propel.phpdb.org/trac/ticket/509
				// $obj->hydrate($row, 0, true); // rehydrate
				$results[] = $obj;
			} else {
		
				$obj = new $cls();
				$obj->hydrate($row);
				$results[] = $obj;
				NagiosCgiConfigurationPeer::addInstanceToPool($obj, $key);
			} // if key exists
		}
		$stmt->closeCursor();
		return $results;
	}
	/**
	 * Returns the TableMap related to this peer.
	 * This method is not needed for general use but a specific application could have a need.
	 * @return     TableMap
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function getTableMap()
	{
		return Propel::getDatabaseMap(self::DATABASE_NAME)->getTable(self::TABLE_NAME);
	}

	/**
	 * The class that the Peer will make instances of.
	 *
	 * This uses a dot-path notation which is tranalted into a path
	 * relative to a location on the PHP include_path.
	 * (e.g. path.to.MyClass -> 'path/to/MyClass.php')
	 *
	 * @return     string path.to.ClassName
	 */
	public static function getOMClass()
	{
		return NagiosCgiConfigurationPeer::CLASS_DEFAULT;
	}

	/**
	 * Method perform an INSERT on the database, given a NagiosCgiConfiguration or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosCgiConfiguration object containing data that is used to create the INSERT statement.
	 * @param      PropelPDO $con the PropelPDO connection to use
	 * @return     mixed The new primary key.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doInsert($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity
		} else {
			$criteria = $values->buildCriteria(); // build Criteria from NagiosCgiConfiguration object
		}

		if ($criteria->containsKey(NagiosCgiConfigurationPeer::ID) && $criteria->keyContainsValue(NagiosCgiConfigurationPeer::ID) ) {
			throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosCgiConfigurationPeer::ID.')');
		}


		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		try {
			// use transaction because $criteria could contain info
			// for more than one table (I guess, conceivably)
			$con->beginTransaction();
			$pk = BasePeer::doInsert($criteria, $con);
			$con->commit();
		} catch(PropelException $e) {
			$con->rollBack();
			throw $e;
		}

		return $pk;
	}

	/**
	 * Method perform an UPDATE on the database, given a NagiosCgiConfiguration or Criteria object.
	 *
	 * @param      mixed $values Criteria or NagiosCgiConfiguration object containing data that is used to create the UPDATE statement.
	 * @param      PropelPDO $con The connection to use (specify PropelPDO connection object to exert more control over transactions).
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function doUpdate($values, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$selectCriteria = new Criteria(self::DATABASE_NAME);

		if ($values instanceof Criteria) {
			$criteria = clone $values; // rename for clarity

			$comparison = $criteria->getComparison(NagiosCgiConfigurationPeer::ID);
			$selectCriteria->add(NagiosCgiConfigurationPeer::ID, $criteria->remove(NagiosCgiConfigurationPeer::ID), $comparison);

		} else { // $values is NagiosCgiConfiguration object
			$criteria = $values->buildCriteria(); // gets full criteria
			$selectCriteria = $values->buildPkeyCriteria(); // gets criteria w/ primary key(s)
		}

		// set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		return BasePeer::doUpdate($selectCriteria, $criteria, $con);
	}

	/**
	 * Method to DELETE all rows from the nagios_cgi_configuration table.
	 *
	 * @return     int The number of affected rows (if supported by underlying database driver).
	 */
	public static function doDeleteAll($con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		$affectedRows = 0; // initialize var to track total num of affected rows
		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			$affectedRows += BasePeer::doDeleteAll(NagiosCgiConfigurationPeer::TABLE_NAME, $con);
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Method perform a DELETE on the database, given a NagiosCgiConfiguration or Criteria object OR a primary key value.
	 *
	 * @param      mixed $values Criteria or NagiosCgiConfiguration object or primary key or array of primary keys
	 *              which is used to create the DELETE statement
	 * @param      PropelPDO $con the connection to use
	 * @return     int 	The number of affected rows (if supported by underlying database driver).  This includes CASCADE-related rows
	 *				if supported by native driver or if emulated using Propel.
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	 public static function doDelete($values, PropelPDO $con = null)
	 {
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		if ($values instanceof Criteria) {
			// invalidate the cache for all objects of this type, since we have no
			// way of knowing (without running a query) what objects should be invalidated
			// from the cache based on this Criteria.
			NagiosCgiConfigurationPeer::clearInstancePool();

			// rename for clarity
			$criteria = clone $values;
		} elseif ($values instanceof NagiosCgiConfiguration) {
			// invalidate the cache for this single object
			NagiosCgiConfigurationPeer::removeInstanceFromPool($values);
			// create criteria based on pk values
			$criteria = $values->buildPkeyCriteria();
		} else {
			// it must be the primary key



			$criteria = new Criteria(self::DATABASE_NAME);
			$criteria->add(NagiosCgiConfigurationPeer::ID, (array) $values, Criteria::IN);

			foreach ((array) $values as $singleval) {
				// we can invalidate the cache for this single object
				NagiosCgiConfigurationPeer::removeInstanceFromPool($singleval);
			}
		}

		// Set the correct dbName
		$criteria->setDbName(self::DATABASE_NAME);

		$affectedRows = 0; // initialize var to track total num of affected rows

		try {
			// use transaction because $criteria could contain info
			// for more than one table or we could emulating ON DELETE CASCADE, etc.
			$con->beginTransaction();
			
			$affectedRows += BasePeer::doDelete($criteria, $con);

			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Validates all modified columns of given NagiosCgiConfiguration object.
	 * If parameter $columns is either a single column name or an array of column names
	 * than only those columns are validated.
	 *
	 * NOTICE: This does not apply to primary or foreign keys for now.
	 *
	 * @param      NagiosCgiConfiguration $obj The object to validate.
	 * @param      mixed $cols Column name or array of column names.
	 *
	 * @return     mixed TRUE if all columns are valid or the error message of the first invalid column.
	 */
	public static function doValidate(NagiosCgiConfiguration $obj, $cols = null)
	{
		$columns = array();

		if ($cols) {
			$dbMap = Propel::getDatabaseMap(NagiosCgiConfigurationPeer::DATABASE_NAME);
			$tableMap = $dbMap->getTable(NagiosCgiConfigurationPeer::TABLE_NAME);

			if (! is_array($cols)) {
				$cols = array($cols);
			}

			foreach ($cols as $colName) {
				if ($tableMap->containsColumn($colName)) {
					$get = 'get' . $tableMap->getColumn($colName)->getPhpName();
					$columns[$colName] = $obj->$get();
				}
			}
		} else {

		}

		return BasePeer::doValidate(NagiosCgiConfigurationPeer::DATABASE_NAME, NagiosCgiConfigurationPeer::TABLE_NAME, $columns);
	}

	/**
	 * Retrieve a single object by pkey.
	 *
	 * @param      int $pk the primary key.
	 * @param      PropelPDO $con the connection to use
	 * @return     NagiosCgiConfiguration
	 */
	public static function retrieveByPK($pk, PropelPDO $con = null)
	{

		if (null !== ($obj = NagiosCgiConfigurationPeer::getInstanceFromPool((string) $pk))) {
			return $obj;
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$criteria = new Criteria(NagiosCgiConfigurationPeer::DATABASE_NAME);
		$criteria->add(NagiosCgiConfigurationPeer::ID, $pk);

		$v = NagiosCgiConfigurationPeer::doSelect($criteria, $con);

		return !empty($v) > 0 ? $v[0] : null;
	}

	/**
	 * Retrieve multiple objects by pkey.
	 *
	 * @param      array $pks List of primary keys
	 * @param      PropelPDO $con the connection to use
	 * @throws     PropelException Any exceptions caught during processing will be
	 *		 rethrown wrapped into a PropelException.
	 */
	public static function retrieveByPKs($pks, PropelPDO $con = null)
	{
		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		$objs = null;
		if (empty($pks)) {
			$objs = array();
		} else {
			$criteria = new Criteria(NagiosCgiConfigurationPeer::DATABASE_NAME);
			$criteria->add(NagiosCgiConfigurationPeer::ID, $pks, Criteria::IN);
			$objs = NagiosCgiConfigurationPeer::doSelect($criteria, $con);
		}
		return $objs;
	}

} // BaseNagiosCgiConfigurationPeer

// This is the static code needed to register the MapBuilder for this table with the main Propel class.
//
// NOTE: This static code cannot call methods on the NagiosCgiConfigurationPeer class, because it is not defined yet.
// If you need to use overridden methods, you can add this code to the bottom of the NagiosCgiConfigurationPeer class:
//
// Propel::getDatabaseMap(NagiosCgiConfigurationPeer::DATABASE_NAME)->addTableBuilder(NagiosCgiConfigurationPeer::TABLE_NAME, NagiosCgiConfigurationPeer::getMapBuilder());
//
// Doing so will effectively overwrite the registration below.

Propel::getDatabaseMap(BaseNagiosCgiConfigurationPeer::DATABASE_NAME)->addTableBuilder(BaseNagiosCgiConfigurationPeer::TABLE_NAME, BaseNagiosCgiConfigurationPeer::getMapBuilder());

