<?php


/**
 * Base class that represents a query for the 'nagios_cgi_configuration' table.
 *
 * CGI Configuration
 *
 * @method     NagiosCgiConfigurationQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosCgiConfigurationQuery orderByPhysicalHtmlPath($order = Criteria::ASC) Order by the physical_html_path column
 * @method     NagiosCgiConfigurationQuery orderByUrlHtmlPath($order = Criteria::ASC) Order by the url_html_path column
 * @method     NagiosCgiConfigurationQuery orderByUseAuthentication($order = Criteria::ASC) Order by the use_authentication column
 * @method     NagiosCgiConfigurationQuery orderByDefaultUserName($order = Criteria::ASC) Order by the default_user_name column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForSystemInformation($order = Criteria::ASC) Order by the authorized_for_system_information column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForSystemCommands($order = Criteria::ASC) Order by the authorized_for_system_commands column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForConfigurationInformation($order = Criteria::ASC) Order by the authorized_for_configuration_information column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForAllHosts($order = Criteria::ASC) Order by the authorized_for_all_hosts column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForAllHostCommands($order = Criteria::ASC) Order by the authorized_for_all_host_commands column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForAllServices($order = Criteria::ASC) Order by the authorized_for_all_services column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForAllServiceCommands($order = Criteria::ASC) Order by the authorized_for_all_service_commands column
 * @method     NagiosCgiConfigurationQuery orderByLockAuthorNames($order = Criteria::ASC) Order by the lock_author_names column
 * @method     NagiosCgiConfigurationQuery orderByStatusmapBackgroundImage($order = Criteria::ASC) Order by the statusmap_background_image column
 * @method     NagiosCgiConfigurationQuery orderByDefaultStatusmapLayout($order = Criteria::ASC) Order by the default_statusmap_layout column
 * @method     NagiosCgiConfigurationQuery orderByStatuswrlInclude($order = Criteria::ASC) Order by the statuswrl_include column
 * @method     NagiosCgiConfigurationQuery orderByDefaultStatuswrlLayout($order = Criteria::ASC) Order by the default_statuswrl_layout column
 * @method     NagiosCgiConfigurationQuery orderByRefreshRate($order = Criteria::ASC) Order by the refresh_rate column
 * @method     NagiosCgiConfigurationQuery orderByHostUnreachableSound($order = Criteria::ASC) Order by the host_unreachable_sound column
 * @method     NagiosCgiConfigurationQuery orderByHostDownSound($order = Criteria::ASC) Order by the host_down_sound column
 * @method     NagiosCgiConfigurationQuery orderByServiceCriticalSound($order = Criteria::ASC) Order by the service_critical_sound column
 * @method     NagiosCgiConfigurationQuery orderByServiceWarningSound($order = Criteria::ASC) Order by the service_warning_sound column
 * @method     NagiosCgiConfigurationQuery orderByServiceUnknownSound($order = Criteria::ASC) Order by the service_unknown_sound column
 * @method     NagiosCgiConfigurationQuery orderByPingSyntax($order = Criteria::ASC) Order by the ping_syntax column
 * @method     NagiosCgiConfigurationQuery orderByEscapeHtmlTags($order = Criteria::ASC) Order by the escape_html_tags column
 * @method     NagiosCgiConfigurationQuery orderByNotesUrlTarget($order = Criteria::ASC) Order by the notes_url_target column
 * @method     NagiosCgiConfigurationQuery orderByActionUrlTarget($order = Criteria::ASC) Order by the action_url_target column
 * @method     NagiosCgiConfigurationQuery orderByEnableSplunkIntegration($order = Criteria::ASC) Order by the enable_splunk_integration column
 * @method     NagiosCgiConfigurationQuery orderBySplunkUrl($order = Criteria::ASC) Order by the splunk_url column
 * @method     NagiosCgiConfigurationQuery orderByAuthorizedForReadOnly($order = Criteria::ASC) Order by the authorized_for_read_only column
 * @method     NagiosCgiConfigurationQuery orderByColorTransparencyIndexR($order = Criteria::ASC) Order by the color_transparency_index_r column
 * @method     NagiosCgiConfigurationQuery orderByColorTransparencyIndexG($order = Criteria::ASC) Order by the color_transparency_index_g column
 * @method     NagiosCgiConfigurationQuery orderByColorTransparencyIndexB($order = Criteria::ASC) Order by the color_transparency_index_b column
 * @method     NagiosCgiConfigurationQuery orderByResultLimit($order = Criteria::ASC) Order by the result_limit column
 * @method     NagiosCgiConfigurationQuery orderByNagiosCheckCommand($order = Criteria::ASC) Order by the nagios_check_command column
 *
 * @method     NagiosCgiConfigurationQuery groupById() Group by the id column
 * @method     NagiosCgiConfigurationQuery groupByPhysicalHtmlPath() Group by the physical_html_path column
 * @method     NagiosCgiConfigurationQuery groupByUrlHtmlPath() Group by the url_html_path column
 * @method     NagiosCgiConfigurationQuery groupByUseAuthentication() Group by the use_authentication column
 * @method     NagiosCgiConfigurationQuery groupByDefaultUserName() Group by the default_user_name column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForSystemInformation() Group by the authorized_for_system_information column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForSystemCommands() Group by the authorized_for_system_commands column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForConfigurationInformation() Group by the authorized_for_configuration_information column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForAllHosts() Group by the authorized_for_all_hosts column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForAllHostCommands() Group by the authorized_for_all_host_commands column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForAllServices() Group by the authorized_for_all_services column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForAllServiceCommands() Group by the authorized_for_all_service_commands column
 * @method     NagiosCgiConfigurationQuery groupByLockAuthorNames() Group by the lock_author_names column
 * @method     NagiosCgiConfigurationQuery groupByStatusmapBackgroundImage() Group by the statusmap_background_image column
 * @method     NagiosCgiConfigurationQuery groupByDefaultStatusmapLayout() Group by the default_statusmap_layout column
 * @method     NagiosCgiConfigurationQuery groupByStatuswrlInclude() Group by the statuswrl_include column
 * @method     NagiosCgiConfigurationQuery groupByDefaultStatuswrlLayout() Group by the default_statuswrl_layout column
 * @method     NagiosCgiConfigurationQuery groupByRefreshRate() Group by the refresh_rate column
 * @method     NagiosCgiConfigurationQuery groupByHostUnreachableSound() Group by the host_unreachable_sound column
 * @method     NagiosCgiConfigurationQuery groupByHostDownSound() Group by the host_down_sound column
 * @method     NagiosCgiConfigurationQuery groupByServiceCriticalSound() Group by the service_critical_sound column
 * @method     NagiosCgiConfigurationQuery groupByServiceWarningSound() Group by the service_warning_sound column
 * @method     NagiosCgiConfigurationQuery groupByServiceUnknownSound() Group by the service_unknown_sound column
 * @method     NagiosCgiConfigurationQuery groupByPingSyntax() Group by the ping_syntax column
 * @method     NagiosCgiConfigurationQuery groupByEscapeHtmlTags() Group by the escape_html_tags column
 * @method     NagiosCgiConfigurationQuery groupByNotesUrlTarget() Group by the notes_url_target column
 * @method     NagiosCgiConfigurationQuery groupByActionUrlTarget() Group by the action_url_target column
 * @method     NagiosCgiConfigurationQuery groupByEnableSplunkIntegration() Group by the enable_splunk_integration column
 * @method     NagiosCgiConfigurationQuery groupBySplunkUrl() Group by the splunk_url column
 * @method     NagiosCgiConfigurationQuery groupByAuthorizedForReadOnly() Group by the authorized_for_read_only column
 * @method     NagiosCgiConfigurationQuery groupByColorTransparencyIndexR() Group by the color_transparency_index_r column
 * @method     NagiosCgiConfigurationQuery groupByColorTransparencyIndexG() Group by the color_transparency_index_g column
 * @method     NagiosCgiConfigurationQuery groupByColorTransparencyIndexB() Group by the color_transparency_index_b column
 * @method     NagiosCgiConfigurationQuery groupByResultLimit() Group by the result_limit column
 * @method     NagiosCgiConfigurationQuery groupByNagiosCheckCommand() Group by the nagios_check_command column
 *
 * @method     NagiosCgiConfigurationQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosCgiConfigurationQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosCgiConfigurationQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosCgiConfiguration findOne(PropelPDO $con = null) Return the first NagiosCgiConfiguration matching the query
 * @method     NagiosCgiConfiguration findOneOrCreate(PropelPDO $con = null) Return the first NagiosCgiConfiguration matching the query, or a new NagiosCgiConfiguration object populated from the query conditions when no match is found
 *
 * @method     NagiosCgiConfiguration findOneById(int $id) Return the first NagiosCgiConfiguration filtered by the id column
 * @method     NagiosCgiConfiguration findOneByPhysicalHtmlPath(string $physical_html_path) Return the first NagiosCgiConfiguration filtered by the physical_html_path column
 * @method     NagiosCgiConfiguration findOneByUrlHtmlPath(string $url_html_path) Return the first NagiosCgiConfiguration filtered by the url_html_path column
 * @method     NagiosCgiConfiguration findOneByUseAuthentication(boolean $use_authentication) Return the first NagiosCgiConfiguration filtered by the use_authentication column
 * @method     NagiosCgiConfiguration findOneByDefaultUserName(string $default_user_name) Return the first NagiosCgiConfiguration filtered by the default_user_name column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForSystemInformation(string $authorized_for_system_information) Return the first NagiosCgiConfiguration filtered by the authorized_for_system_information column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForSystemCommands(string $authorized_for_system_commands) Return the first NagiosCgiConfiguration filtered by the authorized_for_system_commands column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForConfigurationInformation(string $authorized_for_configuration_information) Return the first NagiosCgiConfiguration filtered by the authorized_for_configuration_information column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForAllHosts(string $authorized_for_all_hosts) Return the first NagiosCgiConfiguration filtered by the authorized_for_all_hosts column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForAllHostCommands(string $authorized_for_all_host_commands) Return the first NagiosCgiConfiguration filtered by the authorized_for_all_host_commands column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForAllServices(string $authorized_for_all_services) Return the first NagiosCgiConfiguration filtered by the authorized_for_all_services column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForAllServiceCommands(string $authorized_for_all_service_commands) Return the first NagiosCgiConfiguration filtered by the authorized_for_all_service_commands column
 * @method     NagiosCgiConfiguration findOneByLockAuthorNames(boolean $lock_author_names) Return the first NagiosCgiConfiguration filtered by the lock_author_names column
 * @method     NagiosCgiConfiguration findOneByStatusmapBackgroundImage(string $statusmap_background_image) Return the first NagiosCgiConfiguration filtered by the statusmap_background_image column
 * @method     NagiosCgiConfiguration findOneByDefaultStatusmapLayout(int $default_statusmap_layout) Return the first NagiosCgiConfiguration filtered by the default_statusmap_layout column
 * @method     NagiosCgiConfiguration findOneByStatuswrlInclude(string $statuswrl_include) Return the first NagiosCgiConfiguration filtered by the statuswrl_include column
 * @method     NagiosCgiConfiguration findOneByDefaultStatuswrlLayout(int $default_statuswrl_layout) Return the first NagiosCgiConfiguration filtered by the default_statuswrl_layout column
 * @method     NagiosCgiConfiguration findOneByRefreshRate(int $refresh_rate) Return the first NagiosCgiConfiguration filtered by the refresh_rate column
 * @method     NagiosCgiConfiguration findOneByHostUnreachableSound(string $host_unreachable_sound) Return the first NagiosCgiConfiguration filtered by the host_unreachable_sound column
 * @method     NagiosCgiConfiguration findOneByHostDownSound(string $host_down_sound) Return the first NagiosCgiConfiguration filtered by the host_down_sound column
 * @method     NagiosCgiConfiguration findOneByServiceCriticalSound(string $service_critical_sound) Return the first NagiosCgiConfiguration filtered by the service_critical_sound column
 * @method     NagiosCgiConfiguration findOneByServiceWarningSound(string $service_warning_sound) Return the first NagiosCgiConfiguration filtered by the service_warning_sound column
 * @method     NagiosCgiConfiguration findOneByServiceUnknownSound(string $service_unknown_sound) Return the first NagiosCgiConfiguration filtered by the service_unknown_sound column
 * @method     NagiosCgiConfiguration findOneByPingSyntax(string $ping_syntax) Return the first NagiosCgiConfiguration filtered by the ping_syntax column
 * @method     NagiosCgiConfiguration findOneByEscapeHtmlTags(boolean $escape_html_tags) Return the first NagiosCgiConfiguration filtered by the escape_html_tags column
 * @method     NagiosCgiConfiguration findOneByNotesUrlTarget(string $notes_url_target) Return the first NagiosCgiConfiguration filtered by the notes_url_target column
 * @method     NagiosCgiConfiguration findOneByActionUrlTarget(string $action_url_target) Return the first NagiosCgiConfiguration filtered by the action_url_target column
 * @method     NagiosCgiConfiguration findOneByEnableSplunkIntegration(boolean $enable_splunk_integration) Return the first NagiosCgiConfiguration filtered by the enable_splunk_integration column
 * @method     NagiosCgiConfiguration findOneBySplunkUrl(string $splunk_url) Return the first NagiosCgiConfiguration filtered by the splunk_url column
 * @method     NagiosCgiConfiguration findOneByAuthorizedForReadOnly(string $authorized_for_read_only) Return the first NagiosCgiConfiguration filtered by the authorized_for_read_only column
 * @method     NagiosCgiConfiguration findOneByColorTransparencyIndexR(int $color_transparency_index_r) Return the first NagiosCgiConfiguration filtered by the color_transparency_index_r column
 * @method     NagiosCgiConfiguration findOneByColorTransparencyIndexG(int $color_transparency_index_g) Return the first NagiosCgiConfiguration filtered by the color_transparency_index_g column
 * @method     NagiosCgiConfiguration findOneByColorTransparencyIndexB(int $color_transparency_index_b) Return the first NagiosCgiConfiguration filtered by the color_transparency_index_b column
 * @method     NagiosCgiConfiguration findOneByResultLimit(int $result_limit) Return the first NagiosCgiConfiguration filtered by the result_limit column
 * @method     NagiosCgiConfiguration findOneByNagiosCheckCommand(string $nagios_check_command) Return the first NagiosCgiConfiguration filtered by the nagios_check_command column
 *
 * @method     array findById(int $id) Return NagiosCgiConfiguration objects filtered by the id column
 * @method     array findByPhysicalHtmlPath(string $physical_html_path) Return NagiosCgiConfiguration objects filtered by the physical_html_path column
 * @method     array findByUrlHtmlPath(string $url_html_path) Return NagiosCgiConfiguration objects filtered by the url_html_path column
 * @method     array findByUseAuthentication(boolean $use_authentication) Return NagiosCgiConfiguration objects filtered by the use_authentication column
 * @method     array findByDefaultUserName(string $default_user_name) Return NagiosCgiConfiguration objects filtered by the default_user_name column
 * @method     array findByAuthorizedForSystemInformation(string $authorized_for_system_information) Return NagiosCgiConfiguration objects filtered by the authorized_for_system_information column
 * @method     array findByAuthorizedForSystemCommands(string $authorized_for_system_commands) Return NagiosCgiConfiguration objects filtered by the authorized_for_system_commands column
 * @method     array findByAuthorizedForConfigurationInformation(string $authorized_for_configuration_information) Return NagiosCgiConfiguration objects filtered by the authorized_for_configuration_information column
 * @method     array findByAuthorizedForAllHosts(string $authorized_for_all_hosts) Return NagiosCgiConfiguration objects filtered by the authorized_for_all_hosts column
 * @method     array findByAuthorizedForAllHostCommands(string $authorized_for_all_host_commands) Return NagiosCgiConfiguration objects filtered by the authorized_for_all_host_commands column
 * @method     array findByAuthorizedForAllServices(string $authorized_for_all_services) Return NagiosCgiConfiguration objects filtered by the authorized_for_all_services column
 * @method     array findByAuthorizedForAllServiceCommands(string $authorized_for_all_service_commands) Return NagiosCgiConfiguration objects filtered by the authorized_for_all_service_commands column
 * @method     array findByLockAuthorNames(boolean $lock_author_names) Return NagiosCgiConfiguration objects filtered by the lock_author_names column
 * @method     array findByStatusmapBackgroundImage(string $statusmap_background_image) Return NagiosCgiConfiguration objects filtered by the statusmap_background_image column
 * @method     array findByDefaultStatusmapLayout(int $default_statusmap_layout) Return NagiosCgiConfiguration objects filtered by the default_statusmap_layout column
 * @method     array findByStatuswrlInclude(string $statuswrl_include) Return NagiosCgiConfiguration objects filtered by the statuswrl_include column
 * @method     array findByDefaultStatuswrlLayout(int $default_statuswrl_layout) Return NagiosCgiConfiguration objects filtered by the default_statuswrl_layout column
 * @method     array findByRefreshRate(int $refresh_rate) Return NagiosCgiConfiguration objects filtered by the refresh_rate column
 * @method     array findByHostUnreachableSound(string $host_unreachable_sound) Return NagiosCgiConfiguration objects filtered by the host_unreachable_sound column
 * @method     array findByHostDownSound(string $host_down_sound) Return NagiosCgiConfiguration objects filtered by the host_down_sound column
 * @method     array findByServiceCriticalSound(string $service_critical_sound) Return NagiosCgiConfiguration objects filtered by the service_critical_sound column
 * @method     array findByServiceWarningSound(string $service_warning_sound) Return NagiosCgiConfiguration objects filtered by the service_warning_sound column
 * @method     array findByServiceUnknownSound(string $service_unknown_sound) Return NagiosCgiConfiguration objects filtered by the service_unknown_sound column
 * @method     array findByPingSyntax(string $ping_syntax) Return NagiosCgiConfiguration objects filtered by the ping_syntax column
 * @method     array findByEscapeHtmlTags(boolean $escape_html_tags) Return NagiosCgiConfiguration objects filtered by the escape_html_tags column
 * @method     array findByNotesUrlTarget(string $notes_url_target) Return NagiosCgiConfiguration objects filtered by the notes_url_target column
 * @method     array findByActionUrlTarget(string $action_url_target) Return NagiosCgiConfiguration objects filtered by the action_url_target column
 * @method     array findByEnableSplunkIntegration(boolean $enable_splunk_integration) Return NagiosCgiConfiguration objects filtered by the enable_splunk_integration column
 * @method     array findBySplunkUrl(string $splunk_url) Return NagiosCgiConfiguration objects filtered by the splunk_url column
 * @method     array findByAuthorizedForReadOnly(string $authorized_for_read_only) Return NagiosCgiConfiguration objects filtered by the authorized_for_read_only column
 * @method     array findByColorTransparencyIndexR(int $color_transparency_index_r) Return NagiosCgiConfiguration objects filtered by the color_transparency_index_r column
 * @method     array findByColorTransparencyIndexG(int $color_transparency_index_g) Return NagiosCgiConfiguration objects filtered by the color_transparency_index_g column
 * @method     array findByColorTransparencyIndexB(int $color_transparency_index_b) Return NagiosCgiConfiguration objects filtered by the color_transparency_index_b column
 * @method     array findByResultLimit(int $result_limit) Return NagiosCgiConfiguration objects filtered by the result_limit column
 * @method     array findByNagiosCheckCommand(string $nagios_check_command) Return NagiosCgiConfiguration objects filtered by the nagios_check_command column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosCgiConfigurationQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosCgiConfigurationQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosCgiConfiguration', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosCgiConfigurationQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosCgiConfigurationQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosCgiConfigurationQuery) {
			return $criteria;
		}
		$query = new NagiosCgiConfigurationQuery();
		if (null !== $modelAlias) {
			$query->setModelAlias($modelAlias);
		}
		if ($criteria instanceof Criteria) {
			$query->mergeWith($criteria);
		}
		return $query;
	}

	/**
	 * Find object by primary key
	 * Use instance pooling to avoid a database query if the object exists
	 * <code>
	 * $obj  = $c->findPk(12, $con);
	 * </code>
	 * @param     mixed $key Primary key to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    NagiosCgiConfiguration|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosCgiConfigurationPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
			// the object is alredy in the instance pool
			return $obj;
		} else {
			// the object has not been requested yet, or the formatter is not an object formatter
			$criteria = $this->isKeepQuery() ? clone $this : $this;
			$stmt = $criteria
				->filterByPrimaryKey($key)
				->getSelectStatement($con);
			return $criteria->getFormatter()->init($criteria)->formatOne($stmt);
		}
	}

	/**
	 * Find objects by primary key
	 * <code>
	 * $objs = $c->findPks(array(12, 56, 832), $con);
	 * </code>
	 * @param     array $keys Primary keys to use for the query
	 * @param     PropelPDO $con an optional connection object
	 *
	 * @return    PropelObjectCollection|array|mixed the list of results, formatted by the current formatter
	 */
	public function findPks($keys, $con = null)
	{
		$criteria = $this->isKeepQuery() ? clone $this : $this;
		return $this
			->filterByPrimaryKeys($keys)
			->find($con);
	}

	/**
	 * Filter the query by primary key
	 *
	 * @param     mixed $key Primary key to use for the query
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ID, $keys, Criteria::IN);
	}

	/**
	 * Filter the query on the id column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterById(1234); // WHERE id = 1234
	 * $query->filterById(array(12, 34)); // WHERE id IN (12, 34)
	 * $query->filterById(array('min' => 12)); // WHERE id > 12
	 * </code>
	 *
	 * @param     mixed $id The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the physical_html_path column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPhysicalHtmlPath('fooValue');   // WHERE physical_html_path = 'fooValue'
	 * $query->filterByPhysicalHtmlPath('%fooValue%'); // WHERE physical_html_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $physicalHtmlPath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPhysicalHtmlPath($physicalHtmlPath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($physicalHtmlPath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $physicalHtmlPath)) {
				$physicalHtmlPath = str_replace('*', '%', $physicalHtmlPath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::PHYSICAL_HTML_PATH, $physicalHtmlPath, $comparison);
	}

	/**
	 * Filter the query on the url_html_path column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUrlHtmlPath('fooValue');   // WHERE url_html_path = 'fooValue'
	 * $query->filterByUrlHtmlPath('%fooValue%'); // WHERE url_html_path LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $urlHtmlPath The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUrlHtmlPath($urlHtmlPath = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($urlHtmlPath)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $urlHtmlPath)) {
				$urlHtmlPath = str_replace('*', '%', $urlHtmlPath);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::URL_HTML_PATH, $urlHtmlPath, $comparison);
	}

	/**
	 * Filter the query on the use_authentication column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByUseAuthentication(true); // WHERE use_authentication = true
	 * $query->filterByUseAuthentication('yes'); // WHERE use_authentication = true
	 * </code>
	 *
	 * @param     boolean|string $useAuthentication The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByUseAuthentication($useAuthentication = null, $comparison = null)
	{
		if (is_string($useAuthentication)) {
			$use_authentication = in_array(strtolower($useAuthentication), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::USE_AUTHENTICATION, $useAuthentication, $comparison);
	}

	/**
	 * Filter the query on the default_user_name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDefaultUserName('fooValue');   // WHERE default_user_name = 'fooValue'
	 * $query->filterByDefaultUserName('%fooValue%'); // WHERE default_user_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $defaultUserName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDefaultUserName($defaultUserName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($defaultUserName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $defaultUserName)) {
				$defaultUserName = str_replace('*', '%', $defaultUserName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_USER_NAME, $defaultUserName, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_system_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForSystemInformation('fooValue');   // WHERE authorized_for_system_information = 'fooValue'
	 * $query->filterByAuthorizedForSystemInformation('%fooValue%'); // WHERE authorized_for_system_information LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForSystemInformation The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForSystemInformation($authorizedForSystemInformation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForSystemInformation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForSystemInformation)) {
				$authorizedForSystemInformation = str_replace('*', '%', $authorizedForSystemInformation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_INFORMATION, $authorizedForSystemInformation, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_system_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForSystemCommands('fooValue');   // WHERE authorized_for_system_commands = 'fooValue'
	 * $query->filterByAuthorizedForSystemCommands('%fooValue%'); // WHERE authorized_for_system_commands LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForSystemCommands The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForSystemCommands($authorizedForSystemCommands = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForSystemCommands)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForSystemCommands)) {
				$authorizedForSystemCommands = str_replace('*', '%', $authorizedForSystemCommands);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_COMMANDS, $authorizedForSystemCommands, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_configuration_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForConfigurationInformation('fooValue');   // WHERE authorized_for_configuration_information = 'fooValue'
	 * $query->filterByAuthorizedForConfigurationInformation('%fooValue%'); // WHERE authorized_for_configuration_information LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForConfigurationInformation The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForConfigurationInformation($authorizedForConfigurationInformation = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForConfigurationInformation)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForConfigurationInformation)) {
				$authorizedForConfigurationInformation = str_replace('*', '%', $authorizedForConfigurationInformation);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_CONFIGURATION_INFORMATION, $authorizedForConfigurationInformation, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_all_hosts column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForAllHosts('fooValue');   // WHERE authorized_for_all_hosts = 'fooValue'
	 * $query->filterByAuthorizedForAllHosts('%fooValue%'); // WHERE authorized_for_all_hosts LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForAllHosts The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForAllHosts($authorizedForAllHosts = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForAllHosts)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForAllHosts)) {
				$authorizedForAllHosts = str_replace('*', '%', $authorizedForAllHosts);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOSTS, $authorizedForAllHosts, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_all_host_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForAllHostCommands('fooValue');   // WHERE authorized_for_all_host_commands = 'fooValue'
	 * $query->filterByAuthorizedForAllHostCommands('%fooValue%'); // WHERE authorized_for_all_host_commands LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForAllHostCommands The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForAllHostCommands($authorizedForAllHostCommands = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForAllHostCommands)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForAllHostCommands)) {
				$authorizedForAllHostCommands = str_replace('*', '%', $authorizedForAllHostCommands);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOST_COMMANDS, $authorizedForAllHostCommands, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_all_services column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForAllServices('fooValue');   // WHERE authorized_for_all_services = 'fooValue'
	 * $query->filterByAuthorizedForAllServices('%fooValue%'); // WHERE authorized_for_all_services LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForAllServices The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForAllServices($authorizedForAllServices = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForAllServices)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForAllServices)) {
				$authorizedForAllServices = str_replace('*', '%', $authorizedForAllServices);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICES, $authorizedForAllServices, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_all_service_commands column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForAllServiceCommands('fooValue');   // WHERE authorized_for_all_service_commands = 'fooValue'
	 * $query->filterByAuthorizedForAllServiceCommands('%fooValue%'); // WHERE authorized_for_all_service_commands LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForAllServiceCommands The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForAllServiceCommands($authorizedForAllServiceCommands = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForAllServiceCommands)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForAllServiceCommands)) {
				$authorizedForAllServiceCommands = str_replace('*', '%', $authorizedForAllServiceCommands);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS, $authorizedForAllServiceCommands, $comparison);
	}

	/**
	 * Filter the query on the lock_author_names column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLockAuthorNames(true); // WHERE lock_author_names = true
	 * $query->filterByLockAuthorNames('yes'); // WHERE lock_author_names = true
	 * </code>
	 *
	 * @param     boolean|string $lockAuthorNames The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByLockAuthorNames($lockAuthorNames = null, $comparison = null)
	{
		if (is_string($lockAuthorNames)) {
			$lock_author_names = in_array(strtolower($lockAuthorNames), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::LOCK_AUTHOR_NAMES, $lockAuthorNames, $comparison);
	}

	/**
	 * Filter the query on the statusmap_background_image column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusmapBackgroundImage('fooValue');   // WHERE statusmap_background_image = 'fooValue'
	 * $query->filterByStatusmapBackgroundImage('%fooValue%'); // WHERE statusmap_background_image LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $statusmapBackgroundImage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByStatusmapBackgroundImage($statusmapBackgroundImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statusmapBackgroundImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statusmapBackgroundImage)) {
				$statusmapBackgroundImage = str_replace('*', '%', $statusmapBackgroundImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::STATUSMAP_BACKGROUND_IMAGE, $statusmapBackgroundImage, $comparison);
	}

	/**
	 * Filter the query on the default_statusmap_layout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDefaultStatusmapLayout(1234); // WHERE default_statusmap_layout = 1234
	 * $query->filterByDefaultStatusmapLayout(array(12, 34)); // WHERE default_statusmap_layout IN (12, 34)
	 * $query->filterByDefaultStatusmapLayout(array('min' => 12)); // WHERE default_statusmap_layout > 12
	 * </code>
	 *
	 * @param     mixed $defaultStatusmapLayout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDefaultStatusmapLayout($defaultStatusmapLayout = null, $comparison = null)
	{
		if (is_array($defaultStatusmapLayout)) {
			$useMinMax = false;
			if (isset($defaultStatusmapLayout['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT, $defaultStatusmapLayout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($defaultStatusmapLayout['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT, $defaultStatusmapLayout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT, $defaultStatusmapLayout, $comparison);
	}

	/**
	 * Filter the query on the statuswrl_include column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatuswrlInclude('fooValue');   // WHERE statuswrl_include = 'fooValue'
	 * $query->filterByStatuswrlInclude('%fooValue%'); // WHERE statuswrl_include LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $statuswrlInclude The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByStatuswrlInclude($statuswrlInclude = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statuswrlInclude)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statuswrlInclude)) {
				$statuswrlInclude = str_replace('*', '%', $statuswrlInclude);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::STATUSWRL_INCLUDE, $statuswrlInclude, $comparison);
	}

	/**
	 * Filter the query on the default_statuswrl_layout column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDefaultStatuswrlLayout(1234); // WHERE default_statuswrl_layout = 1234
	 * $query->filterByDefaultStatuswrlLayout(array(12, 34)); // WHERE default_statuswrl_layout IN (12, 34)
	 * $query->filterByDefaultStatuswrlLayout(array('min' => 12)); // WHERE default_statuswrl_layout > 12
	 * </code>
	 *
	 * @param     mixed $defaultStatuswrlLayout The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByDefaultStatuswrlLayout($defaultStatuswrlLayout = null, $comparison = null)
	{
		if (is_array($defaultStatuswrlLayout)) {
			$useMinMax = false;
			if (isset($defaultStatuswrlLayout['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT, $defaultStatuswrlLayout['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($defaultStatuswrlLayout['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT, $defaultStatuswrlLayout['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT, $defaultStatuswrlLayout, $comparison);
	}

	/**
	 * Filter the query on the refresh_rate column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRefreshRate(1234); // WHERE refresh_rate = 1234
	 * $query->filterByRefreshRate(array(12, 34)); // WHERE refresh_rate IN (12, 34)
	 * $query->filterByRefreshRate(array('min' => 12)); // WHERE refresh_rate > 12
	 * </code>
	 *
	 * @param     mixed $refreshRate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByRefreshRate($refreshRate = null, $comparison = null)
	{
		if (is_array($refreshRate)) {
			$useMinMax = false;
			if (isset($refreshRate['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::REFRESH_RATE, $refreshRate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($refreshRate['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::REFRESH_RATE, $refreshRate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::REFRESH_RATE, $refreshRate, $comparison);
	}

	/**
	 * Filter the query on the host_unreachable_sound column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostUnreachableSound('fooValue');   // WHERE host_unreachable_sound = 'fooValue'
	 * $query->filterByHostUnreachableSound('%fooValue%'); // WHERE host_unreachable_sound LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostUnreachableSound The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostUnreachableSound($hostUnreachableSound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostUnreachableSound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostUnreachableSound)) {
				$hostUnreachableSound = str_replace('*', '%', $hostUnreachableSound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::HOST_UNREACHABLE_SOUND, $hostUnreachableSound, $comparison);
	}

	/**
	 * Filter the query on the host_down_sound column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostDownSound('fooValue');   // WHERE host_down_sound = 'fooValue'
	 * $query->filterByHostDownSound('%fooValue%'); // WHERE host_down_sound LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $hostDownSound The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByHostDownSound($hostDownSound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($hostDownSound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $hostDownSound)) {
				$hostDownSound = str_replace('*', '%', $hostDownSound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::HOST_DOWN_SOUND, $hostDownSound, $comparison);
	}

	/**
	 * Filter the query on the service_critical_sound column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceCriticalSound('fooValue');   // WHERE service_critical_sound = 'fooValue'
	 * $query->filterByServiceCriticalSound('%fooValue%'); // WHERE service_critical_sound LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $serviceCriticalSound The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceCriticalSound($serviceCriticalSound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($serviceCriticalSound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $serviceCriticalSound)) {
				$serviceCriticalSound = str_replace('*', '%', $serviceCriticalSound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::SERVICE_CRITICAL_SOUND, $serviceCriticalSound, $comparison);
	}

	/**
	 * Filter the query on the service_warning_sound column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceWarningSound('fooValue');   // WHERE service_warning_sound = 'fooValue'
	 * $query->filterByServiceWarningSound('%fooValue%'); // WHERE service_warning_sound LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $serviceWarningSound The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceWarningSound($serviceWarningSound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($serviceWarningSound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $serviceWarningSound)) {
				$serviceWarningSound = str_replace('*', '%', $serviceWarningSound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::SERVICE_WARNING_SOUND, $serviceWarningSound, $comparison);
	}

	/**
	 * Filter the query on the service_unknown_sound column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByServiceUnknownSound('fooValue');   // WHERE service_unknown_sound = 'fooValue'
	 * $query->filterByServiceUnknownSound('%fooValue%'); // WHERE service_unknown_sound LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $serviceUnknownSound The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByServiceUnknownSound($serviceUnknownSound = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($serviceUnknownSound)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $serviceUnknownSound)) {
				$serviceUnknownSound = str_replace('*', '%', $serviceUnknownSound);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::SERVICE_UNKNOWN_SOUND, $serviceUnknownSound, $comparison);
	}

	/**
	 * Filter the query on the ping_syntax column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPingSyntax('fooValue');   // WHERE ping_syntax = 'fooValue'
	 * $query->filterByPingSyntax('%fooValue%'); // WHERE ping_syntax LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $pingSyntax The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByPingSyntax($pingSyntax = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($pingSyntax)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $pingSyntax)) {
				$pingSyntax = str_replace('*', '%', $pingSyntax);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::PING_SYNTAX, $pingSyntax, $comparison);
	}

	/**
	 * Filter the query on the escape_html_tags column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEscapeHtmlTags(true); // WHERE escape_html_tags = true
	 * $query->filterByEscapeHtmlTags('yes'); // WHERE escape_html_tags = true
	 * </code>
	 *
	 * @param     boolean|string $escapeHtmlTags The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEscapeHtmlTags($escapeHtmlTags = null, $comparison = null)
	{
		if (is_string($escapeHtmlTags)) {
			$escape_html_tags = in_array(strtolower($escapeHtmlTags), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ESCAPE_HTML_TAGS, $escapeHtmlTags, $comparison);
	}

	/**
	 * Filter the query on the notes_url_target column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotesUrlTarget('fooValue');   // WHERE notes_url_target = 'fooValue'
	 * $query->filterByNotesUrlTarget('%fooValue%'); // WHERE notes_url_target LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $notesUrlTarget The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNotesUrlTarget($notesUrlTarget = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notesUrlTarget)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notesUrlTarget)) {
				$notesUrlTarget = str_replace('*', '%', $notesUrlTarget);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::NOTES_URL_TARGET, $notesUrlTarget, $comparison);
	}

	/**
	 * Filter the query on the action_url_target column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByActionUrlTarget('fooValue');   // WHERE action_url_target = 'fooValue'
	 * $query->filterByActionUrlTarget('%fooValue%'); // WHERE action_url_target LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $actionUrlTarget The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByActionUrlTarget($actionUrlTarget = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($actionUrlTarget)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $actionUrlTarget)) {
				$actionUrlTarget = str_replace('*', '%', $actionUrlTarget);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ACTION_URL_TARGET, $actionUrlTarget, $comparison);
	}

	/**
	 * Filter the query on the enable_splunk_integration column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEnableSplunkIntegration(true); // WHERE enable_splunk_integration = true
	 * $query->filterByEnableSplunkIntegration('yes'); // WHERE enable_splunk_integration = true
	 * </code>
	 *
	 * @param     boolean|string $enableSplunkIntegration The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByEnableSplunkIntegration($enableSplunkIntegration = null, $comparison = null)
	{
		if (is_string($enableSplunkIntegration)) {
			$enable_splunk_integration = in_array(strtolower($enableSplunkIntegration), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::ENABLE_SPLUNK_INTEGRATION, $enableSplunkIntegration, $comparison);
	}

	/**
	 * Filter the query on the splunk_url column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterBySplunkUrl('fooValue');   // WHERE splunk_url = 'fooValue'
	 * $query->filterBySplunkUrl('%fooValue%'); // WHERE splunk_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $splunkUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterBySplunkUrl($splunkUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($splunkUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $splunkUrl)) {
				$splunkUrl = str_replace('*', '%', $splunkUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::SPLUNK_URL, $splunkUrl, $comparison);
	}

	/**
	 * Filter the query on the authorized_for_read_only column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAuthorizedForReadOnly('fooValue');   // WHERE authorized_for_read_only = 'fooValue'
	 * $query->filterByAuthorizedForReadOnly('%fooValue%'); // WHERE authorized_for_read_only LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $authorizedForReadOnly The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByAuthorizedForReadOnly($authorizedForReadOnly = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($authorizedForReadOnly)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $authorizedForReadOnly)) {
				$authorizedForReadOnly = str_replace('*', '%', $authorizedForReadOnly);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_READ_ONLY, $authorizedForReadOnly, $comparison);
	}

	/**
	 * Filter the query on the color_transparency_index_r column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByColorTransparencyIndexR(1234); // WHERE color_transparency_index_r = 1234
	 * $query->filterByColorTransparencyIndexR(array(12, 34)); // WHERE color_transparency_index_r IN (12, 34)
	 * $query->filterByColorTransparencyIndexR(array('min' => 12)); // WHERE color_transparency_index_r > 12
	 * </code>
	 *
	 * @param     mixed $colorTransparencyIndexR The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByColorTransparencyIndexR($colorTransparencyIndexR = null, $comparison = null)
	{
		if (is_array($colorTransparencyIndexR)) {
			$useMinMax = false;
			if (isset($colorTransparencyIndexR['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R, $colorTransparencyIndexR['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($colorTransparencyIndexR['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R, $colorTransparencyIndexR['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R, $colorTransparencyIndexR, $comparison);
	}

	/**
	 * Filter the query on the color_transparency_index_g column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByColorTransparencyIndexG(1234); // WHERE color_transparency_index_g = 1234
	 * $query->filterByColorTransparencyIndexG(array(12, 34)); // WHERE color_transparency_index_g IN (12, 34)
	 * $query->filterByColorTransparencyIndexG(array('min' => 12)); // WHERE color_transparency_index_g > 12
	 * </code>
	 *
	 * @param     mixed $colorTransparencyIndexG The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByColorTransparencyIndexG($colorTransparencyIndexG = null, $comparison = null)
	{
		if (is_array($colorTransparencyIndexG)) {
			$useMinMax = false;
			if (isset($colorTransparencyIndexG['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G, $colorTransparencyIndexG['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($colorTransparencyIndexG['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G, $colorTransparencyIndexG['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G, $colorTransparencyIndexG, $comparison);
	}

	/**
	 * Filter the query on the color_transparency_index_b column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByColorTransparencyIndexB(1234); // WHERE color_transparency_index_b = 1234
	 * $query->filterByColorTransparencyIndexB(array(12, 34)); // WHERE color_transparency_index_b IN (12, 34)
	 * $query->filterByColorTransparencyIndexB(array('min' => 12)); // WHERE color_transparency_index_b > 12
	 * </code>
	 *
	 * @param     mixed $colorTransparencyIndexB The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByColorTransparencyIndexB($colorTransparencyIndexB = null, $comparison = null)
	{
		if (is_array($colorTransparencyIndexB)) {
			$useMinMax = false;
			if (isset($colorTransparencyIndexB['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B, $colorTransparencyIndexB['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($colorTransparencyIndexB['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B, $colorTransparencyIndexB['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B, $colorTransparencyIndexB, $comparison);
	}

	/**
	 * Filter the query on the result_limit column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByResultLimit(1234); // WHERE result_limit = 1234
	 * $query->filterByResultLimit(array(12, 34)); // WHERE result_limit IN (12, 34)
	 * $query->filterByResultLimit(array('min' => 12)); // WHERE result_limit > 12
	 * </code>
	 *
	 * @param     mixed $resultLimit The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByResultLimit($resultLimit = null, $comparison = null)
	{
		if (is_array($resultLimit)) {
			$useMinMax = false;
			if (isset($resultLimit['min'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::RESULT_LIMIT, $resultLimit['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($resultLimit['max'])) {
				$this->addUsingAlias(NagiosCgiConfigurationPeer::RESULT_LIMIT, $resultLimit['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::RESULT_LIMIT, $resultLimit, $comparison);
	}

	/**
	 * Filter the query on the nagios_check_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNagiosCheckCommand('fooValue');   // WHERE nagios_check_command = 'fooValue'
	 * $query->filterByNagiosCheckCommand('%fooValue%'); // WHERE nagios_check_command LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $nagiosCheckCommand The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function filterByNagiosCheckCommand($nagiosCheckCommand = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($nagiosCheckCommand)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $nagiosCheckCommand)) {
				$nagiosCheckCommand = str_replace('*', '%', $nagiosCheckCommand);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosCgiConfigurationPeer::NAGIOS_CHECK_COMMAND, $nagiosCheckCommand, $comparison);
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosCgiConfiguration $nagiosCgiConfiguration Object to remove from the list of results
	 *
	 * @return    NagiosCgiConfigurationQuery The current query, for fluid interface
	 */
	public function prune($nagiosCgiConfiguration = null)
	{
		if ($nagiosCgiConfiguration) {
			$this->addUsingAlias(NagiosCgiConfigurationPeer::ID, $nagiosCgiConfiguration->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosCgiConfigurationQuery
