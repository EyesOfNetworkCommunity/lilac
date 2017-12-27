<?php


/**
 * Base class that represents a row from the 'nagios_cgi_configuration' table.
 *
 * CGI Configuration
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosCgiConfiguration extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosCgiConfigurationPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosCgiConfigurationPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the physical_html_path field.
	 * @var        string
	 */
	protected $physical_html_path;

	/**
	 * The value for the url_html_path field.
	 * @var        string
	 */
	protected $url_html_path;

	/**
	 * The value for the use_authentication field.
	 * @var        boolean
	 */
	protected $use_authentication;

	/**
	 * The value for the default_user_name field.
	 * @var        string
	 */
	protected $default_user_name;

	/**
	 * The value for the authorized_for_system_information field.
	 * @var        string
	 */
	protected $authorized_for_system_information;

	/**
	 * The value for the authorized_for_system_commands field.
	 * @var        string
	 */
	protected $authorized_for_system_commands;

	/**
	 * The value for the authorized_for_configuration_information field.
	 * @var        string
	 */
	protected $authorized_for_configuration_information;

	/**
	 * The value for the authorized_for_all_hosts field.
	 * @var        string
	 */
	protected $authorized_for_all_hosts;

	/**
	 * The value for the authorized_for_all_host_commands field.
	 * @var        string
	 */
	protected $authorized_for_all_host_commands;

	/**
	 * The value for the authorized_for_all_services field.
	 * @var        string
	 */
	protected $authorized_for_all_services;

	/**
	 * The value for the authorized_for_all_service_commands field.
	 * @var        string
	 */
	protected $authorized_for_all_service_commands;

	/**
	 * The value for the lock_author_names field.
	 * @var        boolean
	 */
	protected $lock_author_names;

	/**
	 * The value for the statusmap_background_image field.
	 * @var        string
	 */
	protected $statusmap_background_image;

	/**
	 * The value for the default_statusmap_layout field.
	 * @var        int
	 */
	protected $default_statusmap_layout;

	/**
	 * The value for the statuswrl_include field.
	 * @var        string
	 */
	protected $statuswrl_include;

	/**
	 * The value for the default_statuswrl_layout field.
	 * @var        int
	 */
	protected $default_statuswrl_layout;

	/**
	 * The value for the refresh_rate field.
	 * @var        int
	 */
	protected $refresh_rate;

	/**
	 * The value for the host_unreachable_sound field.
	 * @var        string
	 */
	protected $host_unreachable_sound;

	/**
	 * The value for the host_down_sound field.
	 * @var        string
	 */
	protected $host_down_sound;

	/**
	 * The value for the service_critical_sound field.
	 * @var        string
	 */
	protected $service_critical_sound;

	/**
	 * The value for the service_warning_sound field.
	 * @var        string
	 */
	protected $service_warning_sound;

	/**
	 * The value for the service_unknown_sound field.
	 * @var        string
	 */
	protected $service_unknown_sound;

	/**
	 * The value for the ping_syntax field.
	 * @var        string
	 */
	protected $ping_syntax;

	/**
	 * The value for the escape_html_tags field.
	 * @var        boolean
	 */
	protected $escape_html_tags;

	/**
	 * The value for the notes_url_target field.
	 * @var        string
	 */
	protected $notes_url_target;

	/**
	 * The value for the action_url_target field.
	 * @var        string
	 */
	protected $action_url_target;

	/**
	 * The value for the enable_splunk_integration field.
	 * @var        boolean
	 */
	protected $enable_splunk_integration;

	/**
	 * The value for the splunk_url field.
	 * @var        string
	 */
	protected $splunk_url;

	/**
	 * The value for the authorized_for_read_only field.
	 * @var        string
	 */
	protected $authorized_for_read_only;

	/**
	 * The value for the color_transparency_index_r field.
	 * @var        int
	 */
	protected $color_transparency_index_r;

	/**
	 * The value for the color_transparency_index_g field.
	 * @var        int
	 */
	protected $color_transparency_index_g;

	/**
	 * The value for the color_transparency_index_b field.
	 * @var        int
	 */
	protected $color_transparency_index_b;

	/**
	 * The value for the result_limit field.
	 * @var        int
	 */
	protected $result_limit;

	/**
	 * The value for the nagios_check_command field.
	 * @var        string
	 */
	protected $nagios_check_command;

	/**
	 * Flag to prevent endless save loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInSave = false;

	/**
	 * Flag to prevent endless validation loop, if this object is referenced
	 * by another object which falls in this transaction.
	 * @var        boolean
	 */
	protected $alreadyInValidation = false;

	/**
	 * Get the [id] column value.
	 * 
	 * @return     int
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * Get the [physical_html_path] column value.
	 * 
	 * @return     string
	 */
	public function getPhysicalHtmlPath()
	{
		return $this->physical_html_path;
	}

	/**
	 * Get the [url_html_path] column value.
	 * 
	 * @return     string
	 */
	public function getUrlHtmlPath()
	{
		return $this->url_html_path;
	}

	/**
	 * Get the [use_authentication] column value.
	 * 
	 * @return     boolean
	 */
	public function getUseAuthentication()
	{
		return $this->use_authentication;
	}

	/**
	 * Get the [default_user_name] column value.
	 * 
	 * @return     string
	 */
	public function getDefaultUserName()
	{
		return $this->default_user_name;
	}

	/**
	 * Get the [authorized_for_system_information] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForSystemInformation()
	{
		return $this->authorized_for_system_information;
	}

	/**
	 * Get the [authorized_for_system_commands] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForSystemCommands()
	{
		return $this->authorized_for_system_commands;
	}

	/**
	 * Get the [authorized_for_configuration_information] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForConfigurationInformation()
	{
		return $this->authorized_for_configuration_information;
	}

	/**
	 * Get the [authorized_for_all_hosts] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForAllHosts()
	{
		return $this->authorized_for_all_hosts;
	}

	/**
	 * Get the [authorized_for_all_host_commands] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForAllHostCommands()
	{
		return $this->authorized_for_all_host_commands;
	}

	/**
	 * Get the [authorized_for_all_services] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForAllServices()
	{
		return $this->authorized_for_all_services;
	}

	/**
	 * Get the [authorized_for_all_service_commands] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForAllServiceCommands()
	{
		return $this->authorized_for_all_service_commands;
	}

	/**
	 * Get the [lock_author_names] column value.
	 * 
	 * @return     boolean
	 */
	public function getLockAuthorNames()
	{
		return $this->lock_author_names;
	}

	/**
	 * Get the [statusmap_background_image] column value.
	 * 
	 * @return     string
	 */
	public function getStatusmapBackgroundImage()
	{
		return $this->statusmap_background_image;
	}

	/**
	 * Get the [default_statusmap_layout] column value.
	 * 
	 * @return     int
	 */
	public function getDefaultStatusmapLayout()
	{
		return $this->default_statusmap_layout;
	}

	/**
	 * Get the [statuswrl_include] column value.
	 * 
	 * @return     string
	 */
	public function getStatuswrlInclude()
	{
		return $this->statuswrl_include;
	}

	/**
	 * Get the [default_statuswrl_layout] column value.
	 * 
	 * @return     int
	 */
	public function getDefaultStatuswrlLayout()
	{
		return $this->default_statuswrl_layout;
	}

	/**
	 * Get the [refresh_rate] column value.
	 * 
	 * @return     int
	 */
	public function getRefreshRate()
	{
		return $this->refresh_rate;
	}

	/**
	 * Get the [host_unreachable_sound] column value.
	 * 
	 * @return     string
	 */
	public function getHostUnreachableSound()
	{
		return $this->host_unreachable_sound;
	}

	/**
	 * Get the [host_down_sound] column value.
	 * 
	 * @return     string
	 */
	public function getHostDownSound()
	{
		return $this->host_down_sound;
	}

	/**
	 * Get the [service_critical_sound] column value.
	 * 
	 * @return     string
	 */
	public function getServiceCriticalSound()
	{
		return $this->service_critical_sound;
	}

	/**
	 * Get the [service_warning_sound] column value.
	 * 
	 * @return     string
	 */
	public function getServiceWarningSound()
	{
		return $this->service_warning_sound;
	}

	/**
	 * Get the [service_unknown_sound] column value.
	 * 
	 * @return     string
	 */
	public function getServiceUnknownSound()
	{
		return $this->service_unknown_sound;
	}

	/**
	 * Get the [ping_syntax] column value.
	 * 
	 * @return     string
	 */
	public function getPingSyntax()
	{
		return $this->ping_syntax;
	}

	/**
	 * Get the [escape_html_tags] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscapeHtmlTags()
	{
		return $this->escape_html_tags;
	}

	/**
	 * Get the [notes_url_target] column value.
	 * 
	 * @return     string
	 */
	public function getNotesUrlTarget()
	{
		return $this->notes_url_target;
	}

	/**
	 * Get the [action_url_target] column value.
	 * 
	 * @return     string
	 */
	public function getActionUrlTarget()
	{
		return $this->action_url_target;
	}

	/**
	 * Get the [enable_splunk_integration] column value.
	 * 
	 * @return     boolean
	 */
	public function getEnableSplunkIntegration()
	{
		return $this->enable_splunk_integration;
	}

	/**
	 * Get the [splunk_url] column value.
	 * 
	 * @return     string
	 */
	public function getSplunkUrl()
	{
		return $this->splunk_url;
	}

	/**
	 * Get the [authorized_for_read_only] column value.
	 * 
	 * @return     string
	 */
	public function getAuthorizedForReadOnly()
	{
		return $this->authorized_for_read_only;
	}

	/**
	 * Get the [color_transparency_index_r] column value.
	 * 
	 * @return     int
	 */
	public function getColorTransparencyIndexR()
	{
		return $this->color_transparency_index_r;
	}

	/**
	 * Get the [color_transparency_index_g] column value.
	 * 
	 * @return     int
	 */
	public function getColorTransparencyIndexG()
	{
		return $this->color_transparency_index_g;
	}

	/**
	 * Get the [color_transparency_index_b] column value.
	 * 
	 * @return     int
	 */
	public function getColorTransparencyIndexB()
	{
		return $this->color_transparency_index_b;
	}

	/**
	 * Get the [result_limit] column value.
	 * 
	 * @return     int
	 */
	public function getResultLimit()
	{
		return $this->result_limit;
	}

	/**
	 * Get the [nagios_check_command] column value.
	 * 
	 * @return     string
	 */
	public function getNagiosCheckCommand()
	{
		return $this->nagios_check_command;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [physical_html_path] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setPhysicalHtmlPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->physical_html_path !== $v) {
			$this->physical_html_path = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::PHYSICAL_HTML_PATH;
		}

		return $this;
	} // setPhysicalHtmlPath()

	/**
	 * Set the value of [url_html_path] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setUrlHtmlPath($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->url_html_path !== $v) {
			$this->url_html_path = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::URL_HTML_PATH;
		}

		return $this;
	} // setUrlHtmlPath()

	/**
	 * Sets the value of the [use_authentication] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setUseAuthentication($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->use_authentication !== $v) {
			$this->use_authentication = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::USE_AUTHENTICATION;
		}

		return $this;
	} // setUseAuthentication()

	/**
	 * Set the value of [default_user_name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setDefaultUserName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->default_user_name !== $v) {
			$this->default_user_name = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::DEFAULT_USER_NAME;
		}

		return $this;
	} // setDefaultUserName()

	/**
	 * Set the value of [authorized_for_system_information] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForSystemInformation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_system_information !== $v) {
			$this->authorized_for_system_information = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_INFORMATION;
		}

		return $this;
	} // setAuthorizedForSystemInformation()

	/**
	 * Set the value of [authorized_for_system_commands] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForSystemCommands($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_system_commands !== $v) {
			$this->authorized_for_system_commands = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_COMMANDS;
		}

		return $this;
	} // setAuthorizedForSystemCommands()

	/**
	 * Set the value of [authorized_for_configuration_information] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForConfigurationInformation($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_configuration_information !== $v) {
			$this->authorized_for_configuration_information = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_CONFIGURATION_INFORMATION;
		}

		return $this;
	} // setAuthorizedForConfigurationInformation()

	/**
	 * Set the value of [authorized_for_all_hosts] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForAllHosts($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_all_hosts !== $v) {
			$this->authorized_for_all_hosts = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOSTS;
		}

		return $this;
	} // setAuthorizedForAllHosts()

	/**
	 * Set the value of [authorized_for_all_host_commands] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForAllHostCommands($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_all_host_commands !== $v) {
			$this->authorized_for_all_host_commands = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOST_COMMANDS;
		}

		return $this;
	} // setAuthorizedForAllHostCommands()

	/**
	 * Set the value of [authorized_for_all_services] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForAllServices($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_all_services !== $v) {
			$this->authorized_for_all_services = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICES;
		}

		return $this;
	} // setAuthorizedForAllServices()

	/**
	 * Set the value of [authorized_for_all_service_commands] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForAllServiceCommands($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_all_service_commands !== $v) {
			$this->authorized_for_all_service_commands = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS;
		}

		return $this;
	} // setAuthorizedForAllServiceCommands()

	/**
	 * Sets the value of the [lock_author_names] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setLockAuthorNames($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->lock_author_names !== $v) {
			$this->lock_author_names = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::LOCK_AUTHOR_NAMES;
		}

		return $this;
	} // setLockAuthorNames()

	/**
	 * Set the value of [statusmap_background_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setStatusmapBackgroundImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->statusmap_background_image !== $v) {
			$this->statusmap_background_image = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::STATUSMAP_BACKGROUND_IMAGE;
		}

		return $this;
	} // setStatusmapBackgroundImage()

	/**
	 * Set the value of [default_statusmap_layout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setDefaultStatusmapLayout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->default_statusmap_layout !== $v) {
			$this->default_statusmap_layout = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT;
		}

		return $this;
	} // setDefaultStatusmapLayout()

	/**
	 * Set the value of [statuswrl_include] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setStatuswrlInclude($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->statuswrl_include !== $v) {
			$this->statuswrl_include = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::STATUSWRL_INCLUDE;
		}

		return $this;
	} // setStatuswrlInclude()

	/**
	 * Set the value of [default_statuswrl_layout] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setDefaultStatuswrlLayout($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->default_statuswrl_layout !== $v) {
			$this->default_statuswrl_layout = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT;
		}

		return $this;
	} // setDefaultStatuswrlLayout()

	/**
	 * Set the value of [refresh_rate] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setRefreshRate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->refresh_rate !== $v) {
			$this->refresh_rate = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::REFRESH_RATE;
		}

		return $this;
	} // setRefreshRate()

	/**
	 * Set the value of [host_unreachable_sound] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setHostUnreachableSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_unreachable_sound !== $v) {
			$this->host_unreachable_sound = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::HOST_UNREACHABLE_SOUND;
		}

		return $this;
	} // setHostUnreachableSound()

	/**
	 * Set the value of [host_down_sound] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setHostDownSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->host_down_sound !== $v) {
			$this->host_down_sound = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::HOST_DOWN_SOUND;
		}

		return $this;
	} // setHostDownSound()

	/**
	 * Set the value of [service_critical_sound] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setServiceCriticalSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_critical_sound !== $v) {
			$this->service_critical_sound = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::SERVICE_CRITICAL_SOUND;
		}

		return $this;
	} // setServiceCriticalSound()

	/**
	 * Set the value of [service_warning_sound] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setServiceWarningSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_warning_sound !== $v) {
			$this->service_warning_sound = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::SERVICE_WARNING_SOUND;
		}

		return $this;
	} // setServiceWarningSound()

	/**
	 * Set the value of [service_unknown_sound] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setServiceUnknownSound($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->service_unknown_sound !== $v) {
			$this->service_unknown_sound = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::SERVICE_UNKNOWN_SOUND;
		}

		return $this;
	} // setServiceUnknownSound()

	/**
	 * Set the value of [ping_syntax] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setPingSyntax($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->ping_syntax !== $v) {
			$this->ping_syntax = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::PING_SYNTAX;
		}

		return $this;
	} // setPingSyntax()

	/**
	 * Sets the value of the [escape_html_tags] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setEscapeHtmlTags($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->escape_html_tags !== $v) {
			$this->escape_html_tags = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::ESCAPE_HTML_TAGS;
		}

		return $this;
	} // setEscapeHtmlTags()

	/**
	 * Set the value of [notes_url_target] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setNotesUrlTarget($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes_url_target !== $v) {
			$this->notes_url_target = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::NOTES_URL_TARGET;
		}

		return $this;
	} // setNotesUrlTarget()

	/**
	 * Set the value of [action_url_target] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setActionUrlTarget($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_url_target !== $v) {
			$this->action_url_target = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::ACTION_URL_TARGET;
		}

		return $this;
	} // setActionUrlTarget()

	/**
	 * Sets the value of the [enable_splunk_integration] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setEnableSplunkIntegration($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->enable_splunk_integration !== $v) {
			$this->enable_splunk_integration = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::ENABLE_SPLUNK_INTEGRATION;
		}

		return $this;
	} // setEnableSplunkIntegration()

	/**
	 * Set the value of [splunk_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setSplunkUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->splunk_url !== $v) {
			$this->splunk_url = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::SPLUNK_URL;
		}

		return $this;
	} // setSplunkUrl()

	/**
	 * Set the value of [authorized_for_read_only] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setAuthorizedForReadOnly($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->authorized_for_read_only !== $v) {
			$this->authorized_for_read_only = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::AUTHORIZED_FOR_READ_ONLY;
		}

		return $this;
	} // setAuthorizedForReadOnly()

	/**
	 * Set the value of [color_transparency_index_r] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setColorTransparencyIndexR($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->color_transparency_index_r !== $v) {
			$this->color_transparency_index_r = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R;
		}

		return $this;
	} // setColorTransparencyIndexR()

	/**
	 * Set the value of [color_transparency_index_g] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setColorTransparencyIndexG($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->color_transparency_index_g !== $v) {
			$this->color_transparency_index_g = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G;
		}

		return $this;
	} // setColorTransparencyIndexG()

	/**
	 * Set the value of [color_transparency_index_b] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setColorTransparencyIndexB($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->color_transparency_index_b !== $v) {
			$this->color_transparency_index_b = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B;
		}

		return $this;
	} // setColorTransparencyIndexB()

	/**
	 * Set the value of [result_limit] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setResultLimit($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->result_limit !== $v) {
			$this->result_limit = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::RESULT_LIMIT;
		}

		return $this;
	} // setResultLimit()

	/**
	 * Set the value of [nagios_check_command] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosCgiConfiguration The current object (for fluent API support)
	 */
	public function setNagiosCheckCommand($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->nagios_check_command !== $v) {
			$this->nagios_check_command = $v;
			$this->modifiedColumns[] = NagiosCgiConfigurationPeer::NAGIOS_CHECK_COMMAND;
		}

		return $this;
	} // setNagiosCheckCommand()

	/**
	 * Indicates whether the columns in this object are only set to default values.
	 *
	 * This method can be used in conjunction with isModified() to indicate whether an object is both
	 * modified _and_ has some values set which are non-default.
	 *
	 * @return     boolean Whether the columns in this object are only been set with default values.
	 */
	public function hasOnlyDefaultValues()
	{
		// otherwise, everything was equal, so return TRUE
		return true;
	} // hasOnlyDefaultValues()

	/**
	 * Hydrates (populates) the object variables with values from the database resultset.
	 *
	 * An offset (0-based "start column") is specified so that objects can be hydrated
	 * with a subset of the columns in the resultset rows.  This is needed, for example,
	 * for results of JOIN queries where the resultset row includes columns from two or
	 * more tables.
	 *
	 * @param      array $row The row returned by PDOStatement->fetch(PDO::FETCH_NUM)
	 * @param      int $startcol 0-based offset column which indicates which restultset column to start with.
	 * @param      boolean $rehydrate Whether this object is being re-hydrated from the database.
	 * @return     int next starting column
	 * @throws     PropelException  - Any caught Exception will be rewrapped as a PropelException.
	 */
	public function hydrate($row, $startcol = 0, $rehydrate = false)
	{
		try {

			$this->id = ($row[$startcol + 0] !== null) ? (int) $row[$startcol + 0] : null;
			$this->physical_html_path = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->url_html_path = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->use_authentication = ($row[$startcol + 3] !== null) ? (boolean) $row[$startcol + 3] : null;
			$this->default_user_name = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->authorized_for_system_information = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->authorized_for_system_commands = ($row[$startcol + 6] !== null) ? (string) $row[$startcol + 6] : null;
			$this->authorized_for_configuration_information = ($row[$startcol + 7] !== null) ? (string) $row[$startcol + 7] : null;
			$this->authorized_for_all_hosts = ($row[$startcol + 8] !== null) ? (string) $row[$startcol + 8] : null;
			$this->authorized_for_all_host_commands = ($row[$startcol + 9] !== null) ? (string) $row[$startcol + 9] : null;
			$this->authorized_for_all_services = ($row[$startcol + 10] !== null) ? (string) $row[$startcol + 10] : null;
			$this->authorized_for_all_service_commands = ($row[$startcol + 11] !== null) ? (string) $row[$startcol + 11] : null;
			$this->lock_author_names = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->statusmap_background_image = ($row[$startcol + 13] !== null) ? (string) $row[$startcol + 13] : null;
			$this->default_statusmap_layout = ($row[$startcol + 14] !== null) ? (int) $row[$startcol + 14] : null;
			$this->statuswrl_include = ($row[$startcol + 15] !== null) ? (string) $row[$startcol + 15] : null;
			$this->default_statuswrl_layout = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->refresh_rate = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->host_unreachable_sound = ($row[$startcol + 18] !== null) ? (string) $row[$startcol + 18] : null;
			$this->host_down_sound = ($row[$startcol + 19] !== null) ? (string) $row[$startcol + 19] : null;
			$this->service_critical_sound = ($row[$startcol + 20] !== null) ? (string) $row[$startcol + 20] : null;
			$this->service_warning_sound = ($row[$startcol + 21] !== null) ? (string) $row[$startcol + 21] : null;
			$this->service_unknown_sound = ($row[$startcol + 22] !== null) ? (string) $row[$startcol + 22] : null;
			$this->ping_syntax = ($row[$startcol + 23] !== null) ? (string) $row[$startcol + 23] : null;
			$this->escape_html_tags = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->notes_url_target = ($row[$startcol + 25] !== null) ? (string) $row[$startcol + 25] : null;
			$this->action_url_target = ($row[$startcol + 26] !== null) ? (string) $row[$startcol + 26] : null;
			$this->enable_splunk_integration = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->splunk_url = ($row[$startcol + 28] !== null) ? (string) $row[$startcol + 28] : null;
			$this->authorized_for_read_only = ($row[$startcol + 29] !== null) ? (string) $row[$startcol + 29] : null;
			$this->color_transparency_index_r = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->color_transparency_index_g = ($row[$startcol + 31] !== null) ? (int) $row[$startcol + 31] : null;
			$this->color_transparency_index_b = ($row[$startcol + 32] !== null) ? (int) $row[$startcol + 32] : null;
			$this->result_limit = ($row[$startcol + 33] !== null) ? (int) $row[$startcol + 33] : null;
			$this->nagios_check_command = ($row[$startcol + 34] !== null) ? (string) $row[$startcol + 34] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 35; // 35 = NagiosCgiConfigurationPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosCgiConfiguration object", $e);
		}
	}

	/**
	 * Checks and repairs the internal consistency of the object.
	 *
	 * This method is executed after an already-instantiated object is re-hydrated
	 * from the database.  It exists to check any foreign keys to make sure that
	 * the objects related to the current object are correct based on foreign key.
	 *
	 * You can override this method in the stub class, but you should always invoke
	 * the base method from the overridden method (i.e. parent::ensureConsistency()),
	 * in case your model changes.
	 *
	 * @throws     PropelException
	 */
	public function ensureConsistency()
	{

	} // ensureConsistency

	/**
	 * Reloads this object from datastore based on primary key and (optionally) resets all associated objects.
	 *
	 * This will only work if the object has been saved and has a valid primary key set.
	 *
	 * @param      boolean $deep (optional) Whether to also de-associated any related objects.
	 * @param      PropelPDO $con (optional) The PropelPDO connection to use.
	 * @return     void
	 * @throws     PropelException - if this object is deleted, unsaved or doesn't have pk match in db
	 */
	public function reload($deep = false, PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("Cannot reload a deleted object.");
		}

		if ($this->isNew()) {
			throw new PropelException("Cannot reload an unsaved object.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosCgiConfigurationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

		} // if (deep)
	}

	/**
	 * Removes this object from datastore and sets delete attribute.
	 *
	 * @param      PropelPDO $con
	 * @return     void
	 * @throws     PropelException
	 * @see        BaseObject::setDeleted()
	 * @see        BaseObject::isDeleted()
	 */
	public function delete(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("This object has already been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosCgiConfigurationQuery::create()
					->filterByPrimaryKey($this->getPrimaryKey())
					->delete($con);
				$this->postDelete($con);
				$con->commit();
				$this->setDeleted(true);
			} else {
				$con->commit();
			}
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Persists this object to the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All modified related objects will also be persisted in the doSave()
	 * method.  This method wraps all precipitate database operations in a
	 * single transaction.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        doSave()
	 */
	public function save(PropelPDO $con = null)
	{
		if ($this->isDeleted()) {
			throw new PropelException("You cannot save an object that has been deleted.");
		}

		if ($con === null) {
			$con = Propel::getConnection(NagiosCgiConfigurationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		$isInsert = $this->isNew();
		try {
			$ret = $this->preSave($con);
			if ($isInsert) {
				$ret = $ret && $this->preInsert($con);
			} else {
				$ret = $ret && $this->preUpdate($con);
			}
			if ($ret) {
				$affectedRows = $this->doSave($con);
				if ($isInsert) {
					$this->postInsert($con);
				} else {
					$this->postUpdate($con);
				}
				$this->postSave($con);
				NagiosCgiConfigurationPeer::addInstanceToPool($this);
			} else {
				$affectedRows = 0;
			}
			$con->commit();
			return $affectedRows;
		} catch (PropelException $e) {
			$con->rollBack();
			throw $e;
		}
	}

	/**
	 * Performs the work of inserting or updating the row in the database.
	 *
	 * If the object is new, it inserts it; otherwise an update is performed.
	 * All related objects are also updated in this method.
	 *
	 * @param      PropelPDO $con
	 * @return     int The number of rows affected by this insert/update and any referring fk objects' save() operations.
	 * @throws     PropelException
	 * @see        save()
	 */
	protected function doSave(PropelPDO $con)
	{
		$affectedRows = 0; // initialize var to track total num of affected rows
		if (!$this->alreadyInSave) {
			$this->alreadyInSave = true;

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosCgiConfigurationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosCgiConfigurationPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosCgiConfigurationPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows = 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows = NagiosCgiConfigurationPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			$this->alreadyInSave = false;

		}
		return $affectedRows;
	} // doSave()

	/**
	 * Array of ValidationFailed objects.
	 * @var        array ValidationFailed[]
	 */
	protected $validationFailures = array();

	/**
	 * Gets any ValidationFailed objects that resulted from last call to validate().
	 *
	 *
	 * @return     array ValidationFailed[]
	 * @see        validate()
	 */
	public function getValidationFailures()
	{
		return $this->validationFailures;
	}

	/**
	 * Validates the objects modified field values and all objects related to this table.
	 *
	 * If $columns is either a column name or an array of column names
	 * only those columns are validated.
	 *
	 * @param      mixed $columns Column name or an array of column names.
	 * @return     boolean Whether all columns pass validation.
	 * @see        doValidate()
	 * @see        getValidationFailures()
	 */
	public function validate($columns = null)
	{
		$res = $this->doValidate($columns);
		if ($res === true) {
			$this->validationFailures = array();
			return true;
		} else {
			$this->validationFailures = $res;
			return false;
		}
	}

	/**
	 * This function performs the validation work for complex object models.
	 *
	 * In addition to checking the current object, all related objects will
	 * also be validated.  If all pass then <code>true</code> is returned; otherwise
	 * an aggreagated array of ValidationFailed objects will be returned.
	 *
	 * @param      array $columns Array of column names to validate.
	 * @return     mixed <code>true</code> if all validations pass; array of <code>ValidationFailed</code> objets otherwise.
	 */
	protected function doValidate($columns = null)
	{
		if (!$this->alreadyInValidation) {
			$this->alreadyInValidation = true;
			$retval = null;

			$failureMap = array();


			if (($retval = NagiosCgiConfigurationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}



			$this->alreadyInValidation = false;
		}

		return (!empty($failureMap) ? $failureMap : true);
	}

	/**
	 * Retrieves a field from the object by name passed in as a string.
	 *
	 * @param      string $name name
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     mixed Value of field.
	 */
	public function getByName($name, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosCgiConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		$field = $this->getByPosition($pos);
		return $field;
	}

	/**
	 * Retrieves a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @return     mixed Value of field at $pos
	 */
	public function getByPosition($pos)
	{
		switch($pos) {
			case 0:
				return $this->getId();
				break;
			case 1:
				return $this->getPhysicalHtmlPath();
				break;
			case 2:
				return $this->getUrlHtmlPath();
				break;
			case 3:
				return $this->getUseAuthentication();
				break;
			case 4:
				return $this->getDefaultUserName();
				break;
			case 5:
				return $this->getAuthorizedForSystemInformation();
				break;
			case 6:
				return $this->getAuthorizedForSystemCommands();
				break;
			case 7:
				return $this->getAuthorizedForConfigurationInformation();
				break;
			case 8:
				return $this->getAuthorizedForAllHosts();
				break;
			case 9:
				return $this->getAuthorizedForAllHostCommands();
				break;
			case 10:
				return $this->getAuthorizedForAllServices();
				break;
			case 11:
				return $this->getAuthorizedForAllServiceCommands();
				break;
			case 12:
				return $this->getLockAuthorNames();
				break;
			case 13:
				return $this->getStatusmapBackgroundImage();
				break;
			case 14:
				return $this->getDefaultStatusmapLayout();
				break;
			case 15:
				return $this->getStatuswrlInclude();
				break;
			case 16:
				return $this->getDefaultStatuswrlLayout();
				break;
			case 17:
				return $this->getRefreshRate();
				break;
			case 18:
				return $this->getHostUnreachableSound();
				break;
			case 19:
				return $this->getHostDownSound();
				break;
			case 20:
				return $this->getServiceCriticalSound();
				break;
			case 21:
				return $this->getServiceWarningSound();
				break;
			case 22:
				return $this->getServiceUnknownSound();
				break;
			case 23:
				return $this->getPingSyntax();
				break;
			case 24:
				return $this->getEscapeHtmlTags();
				break;
			case 25:
				return $this->getNotesUrlTarget();
				break;
			case 26:
				return $this->getActionUrlTarget();
				break;
			case 27:
				return $this->getEnableSplunkIntegration();
				break;
			case 28:
				return $this->getSplunkUrl();
				break;
			case 29:
				return $this->getAuthorizedForReadOnly();
				break;
			case 30:
				return $this->getColorTransparencyIndexR();
				break;
			case 31:
				return $this->getColorTransparencyIndexG();
				break;
			case 32:
				return $this->getColorTransparencyIndexB();
				break;
			case 33:
				return $this->getResultLimit();
				break;
			case 34:
				return $this->getNagiosCheckCommand();
				break;
			default:
				return null;
				break;
		} // switch()
	}

	/**
	 * Exports the object as an array.
	 *
	 * You can specify the key type of the array by passing one of the class
	 * type constants.
	 *
	 * @param     string  $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 *                    BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 *                    Defaults to BasePeer::TYPE_PHPNAME.
	 * @param     boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns. Defaults to TRUE.
	 * @param     array $alreadyDumpedObjects List of objects to skip to avoid recursion
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array())
	{
		if (isset($alreadyDumpedObjects['NagiosCgiConfiguration'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosCgiConfiguration'][$this->getPrimaryKey()] = true;
		$keys = NagiosCgiConfigurationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getPhysicalHtmlPath(),
			$keys[2] => $this->getUrlHtmlPath(),
			$keys[3] => $this->getUseAuthentication(),
			$keys[4] => $this->getDefaultUserName(),
			$keys[5] => $this->getAuthorizedForSystemInformation(),
			$keys[6] => $this->getAuthorizedForSystemCommands(),
			$keys[7] => $this->getAuthorizedForConfigurationInformation(),
			$keys[8] => $this->getAuthorizedForAllHosts(),
			$keys[9] => $this->getAuthorizedForAllHostCommands(),
			$keys[10] => $this->getAuthorizedForAllServices(),
			$keys[11] => $this->getAuthorizedForAllServiceCommands(),
			$keys[12] => $this->getLockAuthorNames(),
			$keys[13] => $this->getStatusmapBackgroundImage(),
			$keys[14] => $this->getDefaultStatusmapLayout(),
			$keys[15] => $this->getStatuswrlInclude(),
			$keys[16] => $this->getDefaultStatuswrlLayout(),
			$keys[17] => $this->getRefreshRate(),
			$keys[18] => $this->getHostUnreachableSound(),
			$keys[19] => $this->getHostDownSound(),
			$keys[20] => $this->getServiceCriticalSound(),
			$keys[21] => $this->getServiceWarningSound(),
			$keys[22] => $this->getServiceUnknownSound(),
			$keys[23] => $this->getPingSyntax(),
			$keys[24] => $this->getEscapeHtmlTags(),
			$keys[25] => $this->getNotesUrlTarget(),
			$keys[26] => $this->getActionUrlTarget(),
			$keys[27] => $this->getEnableSplunkIntegration(),
			$keys[28] => $this->getSplunkUrl(),
			$keys[29] => $this->getAuthorizedForReadOnly(),
			$keys[30] => $this->getColorTransparencyIndexR(),
			$keys[31] => $this->getColorTransparencyIndexG(),
			$keys[32] => $this->getColorTransparencyIndexB(),
			$keys[33] => $this->getResultLimit(),
			$keys[34] => $this->getNagiosCheckCommand(),
		);
		return $result;
	}

	/**
	 * Sets a field from the object by name passed in as a string.
	 *
	 * @param      string $name peer name
	 * @param      mixed $value field value
	 * @param      string $type The type of fieldname the $name is of:
	 *                     one of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                     BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM
	 * @return     void
	 */
	public function setByName($name, $value, $type = BasePeer::TYPE_PHPNAME)
	{
		$pos = NagiosCgiConfigurationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
		return $this->setByPosition($pos, $value);
	}

	/**
	 * Sets a field from the object by Position as specified in the xml schema.
	 * Zero-based.
	 *
	 * @param      int $pos position in xml schema
	 * @param      mixed $value field value
	 * @return     void
	 */
	public function setByPosition($pos, $value)
	{
		switch($pos) {
			case 0:
				$this->setId($value);
				break;
			case 1:
				$this->setPhysicalHtmlPath($value);
				break;
			case 2:
				$this->setUrlHtmlPath($value);
				break;
			case 3:
				$this->setUseAuthentication($value);
				break;
			case 4:
				$this->setDefaultUserName($value);
				break;
			case 5:
				$this->setAuthorizedForSystemInformation($value);
				break;
			case 6:
				$this->setAuthorizedForSystemCommands($value);
				break;
			case 7:
				$this->setAuthorizedForConfigurationInformation($value);
				break;
			case 8:
				$this->setAuthorizedForAllHosts($value);
				break;
			case 9:
				$this->setAuthorizedForAllHostCommands($value);
				break;
			case 10:
				$this->setAuthorizedForAllServices($value);
				break;
			case 11:
				$this->setAuthorizedForAllServiceCommands($value);
				break;
			case 12:
				$this->setLockAuthorNames($value);
				break;
			case 13:
				$this->setStatusmapBackgroundImage($value);
				break;
			case 14:
				$this->setDefaultStatusmapLayout($value);
				break;
			case 15:
				$this->setStatuswrlInclude($value);
				break;
			case 16:
				$this->setDefaultStatuswrlLayout($value);
				break;
			case 17:
				$this->setRefreshRate($value);
				break;
			case 18:
				$this->setHostUnreachableSound($value);
				break;
			case 19:
				$this->setHostDownSound($value);
				break;
			case 20:
				$this->setServiceCriticalSound($value);
				break;
			case 21:
				$this->setServiceWarningSound($value);
				break;
			case 22:
				$this->setServiceUnknownSound($value);
				break;
			case 23:
				$this->setPingSyntax($value);
				break;
			case 24:
				$this->setEscapeHtmlTags($value);
				break;
			case 25:
				$this->setNotesUrlTarget($value);
				break;
			case 26:
				$this->setActionUrlTarget($value);
				break;
			case 27:
				$this->setEnableSplunkIntegration($value);
				break;
			case 28:
				$this->setSplunkUrl($value);
				break;
			case 29:
				$this->setAuthorizedForReadOnly($value);
				break;
			case 30:
				$this->setColorTransparencyIndexR($value);
				break;
			case 31:
				$this->setColorTransparencyIndexG($value);
				break;
			case 32:
				$this->setColorTransparencyIndexB($value);
				break;
			case 33:
				$this->setResultLimit($value);
				break;
			case 34:
				$this->setNagiosCheckCommand($value);
				break;
		} // switch()
	}

	/**
	 * Populates the object using an array.
	 *
	 * This is particularly useful when populating an object from one of the
	 * request arrays (e.g. $_POST).  This method goes through the column
	 * names, checking to see whether a matching key exists in populated
	 * array. If so the setByName() method is called for that column.
	 *
	 * You can specify the key type of the array by additionally passing one
	 * of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME,
	 * BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM.
	 * The default key type is the column's phpname (e.g. 'AuthorId')
	 *
	 * @param      array  $arr     An array to populate the object from.
	 * @param      string $keyType The type of keys the array uses.
	 * @return     void
	 */
	public function fromArray($arr, $keyType = BasePeer::TYPE_PHPNAME)
	{
		$keys = NagiosCgiConfigurationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setPhysicalHtmlPath($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setUrlHtmlPath($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setUseAuthentication($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setDefaultUserName($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAuthorizedForSystemInformation($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setAuthorizedForSystemCommands($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setAuthorizedForConfigurationInformation($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setAuthorizedForAllHosts($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setAuthorizedForAllHostCommands($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setAuthorizedForAllServices($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setAuthorizedForAllServiceCommands($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setLockAuthorNames($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setStatusmapBackgroundImage($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setDefaultStatusmapLayout($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setStatuswrlInclude($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setDefaultStatuswrlLayout($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setRefreshRate($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setHostUnreachableSound($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setHostDownSound($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setServiceCriticalSound($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setServiceWarningSound($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setServiceUnknownSound($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setPingSyntax($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setEscapeHtmlTags($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setNotesUrlTarget($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setActionUrlTarget($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setEnableSplunkIntegration($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setSplunkUrl($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setAuthorizedForReadOnly($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setColorTransparencyIndexR($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setColorTransparencyIndexG($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setColorTransparencyIndexB($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setResultLimit($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setNagiosCheckCommand($arr[$keys[34]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosCgiConfigurationPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosCgiConfigurationPeer::ID)) $criteria->add(NagiosCgiConfigurationPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::PHYSICAL_HTML_PATH)) $criteria->add(NagiosCgiConfigurationPeer::PHYSICAL_HTML_PATH, $this->physical_html_path);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::URL_HTML_PATH)) $criteria->add(NagiosCgiConfigurationPeer::URL_HTML_PATH, $this->url_html_path);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::USE_AUTHENTICATION)) $criteria->add(NagiosCgiConfigurationPeer::USE_AUTHENTICATION, $this->use_authentication);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::DEFAULT_USER_NAME)) $criteria->add(NagiosCgiConfigurationPeer::DEFAULT_USER_NAME, $this->default_user_name);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_INFORMATION)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_INFORMATION, $this->authorized_for_system_information);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_COMMANDS)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_SYSTEM_COMMANDS, $this->authorized_for_system_commands);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_CONFIGURATION_INFORMATION)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_CONFIGURATION_INFORMATION, $this->authorized_for_configuration_information);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOSTS)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOSTS, $this->authorized_for_all_hosts);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOST_COMMANDS)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_HOST_COMMANDS, $this->authorized_for_all_host_commands);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICES)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICES, $this->authorized_for_all_services);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_ALL_SERVICE_COMMANDS, $this->authorized_for_all_service_commands);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::LOCK_AUTHOR_NAMES)) $criteria->add(NagiosCgiConfigurationPeer::LOCK_AUTHOR_NAMES, $this->lock_author_names);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::STATUSMAP_BACKGROUND_IMAGE)) $criteria->add(NagiosCgiConfigurationPeer::STATUSMAP_BACKGROUND_IMAGE, $this->statusmap_background_image);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT)) $criteria->add(NagiosCgiConfigurationPeer::DEFAULT_STATUSMAP_LAYOUT, $this->default_statusmap_layout);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::STATUSWRL_INCLUDE)) $criteria->add(NagiosCgiConfigurationPeer::STATUSWRL_INCLUDE, $this->statuswrl_include);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT)) $criteria->add(NagiosCgiConfigurationPeer::DEFAULT_STATUSWRL_LAYOUT, $this->default_statuswrl_layout);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::REFRESH_RATE)) $criteria->add(NagiosCgiConfigurationPeer::REFRESH_RATE, $this->refresh_rate);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::HOST_UNREACHABLE_SOUND)) $criteria->add(NagiosCgiConfigurationPeer::HOST_UNREACHABLE_SOUND, $this->host_unreachable_sound);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::HOST_DOWN_SOUND)) $criteria->add(NagiosCgiConfigurationPeer::HOST_DOWN_SOUND, $this->host_down_sound);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::SERVICE_CRITICAL_SOUND)) $criteria->add(NagiosCgiConfigurationPeer::SERVICE_CRITICAL_SOUND, $this->service_critical_sound);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::SERVICE_WARNING_SOUND)) $criteria->add(NagiosCgiConfigurationPeer::SERVICE_WARNING_SOUND, $this->service_warning_sound);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::SERVICE_UNKNOWN_SOUND)) $criteria->add(NagiosCgiConfigurationPeer::SERVICE_UNKNOWN_SOUND, $this->service_unknown_sound);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::PING_SYNTAX)) $criteria->add(NagiosCgiConfigurationPeer::PING_SYNTAX, $this->ping_syntax);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::ESCAPE_HTML_TAGS)) $criteria->add(NagiosCgiConfigurationPeer::ESCAPE_HTML_TAGS, $this->escape_html_tags);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::NOTES_URL_TARGET)) $criteria->add(NagiosCgiConfigurationPeer::NOTES_URL_TARGET, $this->notes_url_target);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::ACTION_URL_TARGET)) $criteria->add(NagiosCgiConfigurationPeer::ACTION_URL_TARGET, $this->action_url_target);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::ENABLE_SPLUNK_INTEGRATION)) $criteria->add(NagiosCgiConfigurationPeer::ENABLE_SPLUNK_INTEGRATION, $this->enable_splunk_integration);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::SPLUNK_URL)) $criteria->add(NagiosCgiConfigurationPeer::SPLUNK_URL, $this->splunk_url);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_READ_ONLY)) $criteria->add(NagiosCgiConfigurationPeer::AUTHORIZED_FOR_READ_ONLY, $this->authorized_for_read_only);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R)) $criteria->add(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_R, $this->color_transparency_index_r);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G)) $criteria->add(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_G, $this->color_transparency_index_g);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B)) $criteria->add(NagiosCgiConfigurationPeer::COLOR_TRANSPARENCY_INDEX_B, $this->color_transparency_index_b);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::RESULT_LIMIT)) $criteria->add(NagiosCgiConfigurationPeer::RESULT_LIMIT, $this->result_limit);
		if ($this->isColumnModified(NagiosCgiConfigurationPeer::NAGIOS_CHECK_COMMAND)) $criteria->add(NagiosCgiConfigurationPeer::NAGIOS_CHECK_COMMAND, $this->nagios_check_command);

		return $criteria;
	}

	/**
	 * Builds a Criteria object containing the primary key for this object.
	 *
	 * Unlike buildCriteria() this method includes the primary key values regardless
	 * of whether or not they have been modified.
	 *
	 * @return     Criteria The Criteria object containing value(s) for primary key(s).
	 */
	public function buildPkeyCriteria()
	{
		$criteria = new Criteria(NagiosCgiConfigurationPeer::DATABASE_NAME);
		$criteria->add(NagiosCgiConfigurationPeer::ID, $this->id);

		return $criteria;
	}

	/**
	 * Returns the primary key for this object (row).
	 * @return     int
	 */
	public function getPrimaryKey()
	{
		return $this->getId();
	}

	/**
	 * Generic method to set the primary key (id column).
	 *
	 * @param      int $key Primary key.
	 * @return     void
	 */
	public function setPrimaryKey($key)
	{
		$this->setId($key);
	}

	/**
	 * Returns true if the primary key for this object is null.
	 * @return     boolean
	 */
	public function isPrimaryKeyNull()
	{
		return null === $this->getId();
	}

	/**
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosCgiConfiguration (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setPhysicalHtmlPath($this->getPhysicalHtmlPath());
		$copyObj->setUrlHtmlPath($this->getUrlHtmlPath());
		$copyObj->setUseAuthentication($this->getUseAuthentication());
		$copyObj->setDefaultUserName($this->getDefaultUserName());
		$copyObj->setAuthorizedForSystemInformation($this->getAuthorizedForSystemInformation());
		$copyObj->setAuthorizedForSystemCommands($this->getAuthorizedForSystemCommands());
		$copyObj->setAuthorizedForConfigurationInformation($this->getAuthorizedForConfigurationInformation());
		$copyObj->setAuthorizedForAllHosts($this->getAuthorizedForAllHosts());
		$copyObj->setAuthorizedForAllHostCommands($this->getAuthorizedForAllHostCommands());
		$copyObj->setAuthorizedForAllServices($this->getAuthorizedForAllServices());
		$copyObj->setAuthorizedForAllServiceCommands($this->getAuthorizedForAllServiceCommands());
		$copyObj->setLockAuthorNames($this->getLockAuthorNames());
		$copyObj->setStatusmapBackgroundImage($this->getStatusmapBackgroundImage());
		$copyObj->setDefaultStatusmapLayout($this->getDefaultStatusmapLayout());
		$copyObj->setStatuswrlInclude($this->getStatuswrlInclude());
		$copyObj->setDefaultStatuswrlLayout($this->getDefaultStatuswrlLayout());
		$copyObj->setRefreshRate($this->getRefreshRate());
		$copyObj->setHostUnreachableSound($this->getHostUnreachableSound());
		$copyObj->setHostDownSound($this->getHostDownSound());
		$copyObj->setServiceCriticalSound($this->getServiceCriticalSound());
		$copyObj->setServiceWarningSound($this->getServiceWarningSound());
		$copyObj->setServiceUnknownSound($this->getServiceUnknownSound());
		$copyObj->setPingSyntax($this->getPingSyntax());
		$copyObj->setEscapeHtmlTags($this->getEscapeHtmlTags());
		$copyObj->setNotesUrlTarget($this->getNotesUrlTarget());
		$copyObj->setActionUrlTarget($this->getActionUrlTarget());
		$copyObj->setEnableSplunkIntegration($this->getEnableSplunkIntegration());
		$copyObj->setSplunkUrl($this->getSplunkUrl());
		$copyObj->setAuthorizedForReadOnly($this->getAuthorizedForReadOnly());
		$copyObj->setColorTransparencyIndexR($this->getColorTransparencyIndexR());
		$copyObj->setColorTransparencyIndexG($this->getColorTransparencyIndexG());
		$copyObj->setColorTransparencyIndexB($this->getColorTransparencyIndexB());
		$copyObj->setResultLimit($this->getResultLimit());
		$copyObj->setNagiosCheckCommand($this->getNagiosCheckCommand());
		if ($makeNew) {
			$copyObj->setNew(true);
			$copyObj->setId(NULL); // this is a auto-increment column, so set to default value
		}
	}

	/**
	 * Makes a copy of this object that will be inserted as a new row in table when saved.
	 * It creates a new object filling in the simple attributes, but skipping any primary
	 * keys that are defined for the table.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @return     NagiosCgiConfiguration Clone of current object.
	 * @throws     PropelException
	 */
	public function copy($deepCopy = false)
	{
		// we use get_class(), because this might be a subclass
		$clazz = get_class($this);
		$copyObj = new $clazz();
		$this->copyInto($copyObj, $deepCopy);
		return $copyObj;
	}

	/**
	 * Returns a peer instance associated with this om.
	 *
	 * Since Peer classes are not to have any instance attributes, this method returns the
	 * same instance for all member of this class. The method could therefore
	 * be static, but this would prevent one from overriding the behavior.
	 *
	 * @return     NagiosCgiConfigurationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosCgiConfigurationPeer();
		}
		return self::$peer;
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->physical_html_path = null;
		$this->url_html_path = null;
		$this->use_authentication = null;
		$this->default_user_name = null;
		$this->authorized_for_system_information = null;
		$this->authorized_for_system_commands = null;
		$this->authorized_for_configuration_information = null;
		$this->authorized_for_all_hosts = null;
		$this->authorized_for_all_host_commands = null;
		$this->authorized_for_all_services = null;
		$this->authorized_for_all_service_commands = null;
		$this->lock_author_names = null;
		$this->statusmap_background_image = null;
		$this->default_statusmap_layout = null;
		$this->statuswrl_include = null;
		$this->default_statuswrl_layout = null;
		$this->refresh_rate = null;
		$this->host_unreachable_sound = null;
		$this->host_down_sound = null;
		$this->service_critical_sound = null;
		$this->service_warning_sound = null;
		$this->service_unknown_sound = null;
		$this->ping_syntax = null;
		$this->escape_html_tags = null;
		$this->notes_url_target = null;
		$this->action_url_target = null;
		$this->enable_splunk_integration = null;
		$this->splunk_url = null;
		$this->authorized_for_read_only = null;
		$this->color_transparency_index_r = null;
		$this->color_transparency_index_g = null;
		$this->color_transparency_index_b = null;
		$this->result_limit = null;
		$this->nagios_check_command = null;
		$this->alreadyInSave = false;
		$this->alreadyInValidation = false;
		$this->clearAllReferences();
		$this->resetModified();
		$this->setNew(true);
		$this->setDeleted(false);
	}

	/**
	 * Resets all references to other model objects or collections of model objects.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect
	 * objects with circular references (even in PHP 5.3). This is currently necessary
	 * when using Propel in certain daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all referrer objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
		} // if ($deep)

	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosCgiConfigurationPeer::DEFAULT_STRING_FORMAT);
	}

	/**
	 * Catches calls to virtual methods
	 */
	public function __call($name, $params)
	{
		if (preg_match('/get(\w+)/', $name, $matches)) {
			$virtualColumn = $matches[1];
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
			// no lcfirst in php<5.3...
			$virtualColumn[0] = strtolower($virtualColumn[0]);
			if ($this->hasVirtualColumn($virtualColumn)) {
				return $this->getVirtualColumn($virtualColumn);
			}
		}
		return parent::__call($name, $params);
	}

} // BaseNagiosCgiConfiguration
