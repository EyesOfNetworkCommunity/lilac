<?php


/**
 * Base class that represents a row from the 'nagios_contact' table.
 *
 * Nagios Contact
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosContact extends BaseObject  implements Persistent
{

	/**
	 * Peer class name
	 */
	const PEER = 'NagiosContactPeer';

	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosContactPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the name field.
	 * @var        string
	 */
	protected $name;

	/**
	 * The value for the alias field.
	 * @var        string
	 */
	protected $alias;

	/**
	 * The value for the email field.
	 * @var        string
	 */
	protected $email;

	/**
	 * The value for the pager field.
	 * @var        string
	 */
	protected $pager;

	/**
	 * The value for the host_notifications_enabled field.
	 * @var        boolean
	 */
	protected $host_notifications_enabled;

	/**
	 * The value for the service_notifications_enabled field.
	 * @var        boolean
	 */
	protected $service_notifications_enabled;

	/**
	 * The value for the host_notification_period field.
	 * @var        int
	 */
	protected $host_notification_period;

	/**
	 * The value for the service_notification_period field.
	 * @var        int
	 */
	protected $service_notification_period;

	/**
	 * The value for the host_notification_on_down field.
	 * @var        boolean
	 */
	protected $host_notification_on_down;

	/**
	 * The value for the host_notification_on_unreachable field.
	 * @var        boolean
	 */
	protected $host_notification_on_unreachable;

	/**
	 * The value for the host_notification_on_recovery field.
	 * @var        boolean
	 */
	protected $host_notification_on_recovery;

	/**
	 * The value for the host_notification_on_flapping field.
	 * @var        boolean
	 */
	protected $host_notification_on_flapping;

	/**
	 * The value for the host_notification_on_scheduled_downtime field.
	 * @var        boolean
	 */
	protected $host_notification_on_scheduled_downtime;

	/**
	 * The value for the service_notification_on_warning field.
	 * @var        boolean
	 */
	protected $service_notification_on_warning;

	/**
	 * The value for the service_notification_on_unknown field.
	 * @var        boolean
	 */
	protected $service_notification_on_unknown;

	/**
	 * The value for the service_notification_on_critical field.
	 * @var        boolean
	 */
	protected $service_notification_on_critical;

	/**
	 * The value for the service_notification_on_recovery field.
	 * @var        boolean
	 */
	protected $service_notification_on_recovery;

	/**
	 * The value for the service_notification_on_flapping field.
	 * @var        boolean
	 */
	protected $service_notification_on_flapping;

	/**
	 * The value for the can_submit_commands field.
	 * @var        boolean
	 */
	protected $can_submit_commands;

	/**
	 * The value for the retain_status_information field.
	 * @var        boolean
	 */
	protected $retain_status_information;

	/**
	 * The value for the retain_nonstatus_information field.
	 * @var        boolean
	 */
	protected $retain_nonstatus_information;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByHostNotificationPeriod;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByServiceNotificationPeriod;

	/**
	 * @var        array NagiosContactAddress[] Collection to store aggregation of NagiosContactAddress objects.
	 */
	protected $collNagiosContactAddresss;

	/**
	 * @var        array NagiosContactGroupMember[] Collection to store aggregation of NagiosContactGroupMember objects.
	 */
	protected $collNagiosContactGroupMembers;

	/**
	 * @var        array NagiosContactNotificationCommand[] Collection to store aggregation of NagiosContactNotificationCommand objects.
	 */
	protected $collNagiosContactNotificationCommands;

	/**
	 * @var        array NagiosHostContactMember[] Collection to store aggregation of NagiosHostContactMember objects.
	 */
	protected $collNagiosHostContactMembers;

	/**
	 * @var        array NagiosServiceContactMember[] Collection to store aggregation of NagiosServiceContactMember objects.
	 */
	protected $collNagiosServiceContactMembers;

	/**
	 * @var        array NagiosEscalationContact[] Collection to store aggregation of NagiosEscalationContact objects.
	 */
	protected $collNagiosEscalationContacts;

	/**
	 * @var        array NagiosContactCustomObjectVar[] Collection to store aggregation of NagiosContactCustomObjectVar objects.
	 */
	protected $collNagiosContactCustomObjectVars;

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
	 * Get the [name] column value.
	 * 
	 * @return     string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Get the [alias] column value.
	 * 
	 * @return     string
	 */
	public function getAlias()
	{
		return $this->alias;
	}

	/**
	 * Get the [email] column value.
	 * 
	 * @return     string
	 */
	public function getEmail()
	{
		return $this->email;
	}

	/**
	 * Get the [pager] column value.
	 * 
	 * @return     string
	 */
	public function getPager()
	{
		return $this->pager;
	}

	/**
	 * Get the [host_notifications_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationsEnabled()
	{
		return $this->host_notifications_enabled;
	}

	/**
	 * Get the [service_notifications_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationsEnabled()
	{
		return $this->service_notifications_enabled;
	}

	/**
	 * Get the [host_notification_period] column value.
	 * 
	 * @return     int
	 */
	public function getHostNotificationPeriod()
	{
		return $this->host_notification_period;
	}

	/**
	 * Get the [service_notification_period] column value.
	 * 
	 * @return     int
	 */
	public function getServiceNotificationPeriod()
	{
		return $this->service_notification_period;
	}

	/**
	 * Get the [host_notification_on_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationOnDown()
	{
		return $this->host_notification_on_down;
	}

	/**
	 * Get the [host_notification_on_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationOnUnreachable()
	{
		return $this->host_notification_on_unreachable;
	}

	/**
	 * Get the [host_notification_on_recovery] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationOnRecovery()
	{
		return $this->host_notification_on_recovery;
	}

	/**
	 * Get the [host_notification_on_flapping] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationOnFlapping()
	{
		return $this->host_notification_on_flapping;
	}

	/**
	 * Get the [host_notification_on_scheduled_downtime] column value.
	 * 
	 * @return     boolean
	 */
	public function getHostNotificationOnScheduledDowntime()
	{
		return $this->host_notification_on_scheduled_downtime;
	}

	/**
	 * Get the [service_notification_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationOnWarning()
	{
		return $this->service_notification_on_warning;
	}

	/**
	 * Get the [service_notification_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationOnUnknown()
	{
		return $this->service_notification_on_unknown;
	}

	/**
	 * Get the [service_notification_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationOnCritical()
	{
		return $this->service_notification_on_critical;
	}

	/**
	 * Get the [service_notification_on_recovery] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationOnRecovery()
	{
		return $this->service_notification_on_recovery;
	}

	/**
	 * Get the [service_notification_on_flapping] column value.
	 * 
	 * @return     boolean
	 */
	public function getServiceNotificationOnFlapping()
	{
		return $this->service_notification_on_flapping;
	}

	/**
	 * Get the [can_submit_commands] column value.
	 * 
	 * @return     boolean
	 */
	public function getCanSubmitCommands()
	{
		return $this->can_submit_commands;
	}

	/**
	 * Get the [retain_status_information] column value.
	 * 
	 * @return     boolean
	 */
	public function getRetainStatusInformation()
	{
		return $this->retain_status_information;
	}

	/**
	 * Get the [retain_nonstatus_information] column value.
	 * 
	 * @return     boolean
	 */
	public function getRetainNonstatusInformation()
	{
		return $this->retain_nonstatus_information;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosContactPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosContactPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [alias] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setAlias($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->alias !== $v) {
			$this->alias = $v;
			$this->modifiedColumns[] = NagiosContactPeer::ALIAS;
		}

		return $this;
	} // setAlias()

	/**
	 * Set the value of [email] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setEmail($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->email !== $v) {
			$this->email = $v;
			$this->modifiedColumns[] = NagiosContactPeer::EMAIL;
		}

		return $this;
	} // setEmail()

	/**
	 * Set the value of [pager] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setPager($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->pager !== $v) {
			$this->pager = $v;
			$this->modifiedColumns[] = NagiosContactPeer::PAGER;
		}

		return $this;
	} // setPager()

	/**
	 * Sets the value of the [host_notifications_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationsEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notifications_enabled !== $v) {
			$this->host_notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setHostNotificationsEnabled()

	/**
	 * Sets the value of the [service_notifications_enabled] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationsEnabled($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notifications_enabled !== $v) {
			$this->service_notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setServiceNotificationsEnabled()

	/**
	 * Set the value of [host_notification_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_notification_period !== $v) {
			$this->host_notification_period = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod !== null && $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = null;
		}

		return $this;
	} // setHostNotificationPeriod()

	/**
	 * Set the value of [service_notification_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_notification_period !== $v) {
			$this->service_notification_period = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod !== null && $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = null;
		}

		return $this;
	} // setServiceNotificationPeriod()

	/**
	 * Sets the value of the [host_notification_on_down] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnDown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notification_on_down !== $v) {
			$this->host_notification_on_down = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN;
		}

		return $this;
	} // setHostNotificationOnDown()

	/**
	 * Sets the value of the [host_notification_on_unreachable] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnUnreachable($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notification_on_unreachable !== $v) {
			$this->host_notification_on_unreachable = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE;
		}

		return $this;
	} // setHostNotificationOnUnreachable()

	/**
	 * Sets the value of the [host_notification_on_recovery] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnRecovery($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notification_on_recovery !== $v) {
			$this->host_notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setHostNotificationOnRecovery()

	/**
	 * Sets the value of the [host_notification_on_flapping] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnFlapping($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notification_on_flapping !== $v) {
			$this->host_notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setHostNotificationOnFlapping()

	/**
	 * Sets the value of the [host_notification_on_scheduled_downtime] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnScheduledDowntime($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->host_notification_on_scheduled_downtime !== $v) {
			$this->host_notification_on_scheduled_downtime = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME;
		}

		return $this;
	} // setHostNotificationOnScheduledDowntime()

	/**
	 * Sets the value of the [service_notification_on_warning] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnWarning($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notification_on_warning !== $v) {
			$this->service_notification_on_warning = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING;
		}

		return $this;
	} // setServiceNotificationOnWarning()

	/**
	 * Sets the value of the [service_notification_on_unknown] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnUnknown($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notification_on_unknown !== $v) {
			$this->service_notification_on_unknown = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN;
		}

		return $this;
	} // setServiceNotificationOnUnknown()

	/**
	 * Sets the value of the [service_notification_on_critical] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnCritical($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notification_on_critical !== $v) {
			$this->service_notification_on_critical = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL;
		}

		return $this;
	} // setServiceNotificationOnCritical()

	/**
	 * Sets the value of the [service_notification_on_recovery] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnRecovery($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notification_on_recovery !== $v) {
			$this->service_notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setServiceNotificationOnRecovery()

	/**
	 * Sets the value of the [service_notification_on_flapping] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnFlapping($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->service_notification_on_flapping !== $v) {
			$this->service_notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setServiceNotificationOnFlapping()

	/**
	 * Sets the value of the [can_submit_commands] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setCanSubmitCommands($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->can_submit_commands !== $v) {
			$this->can_submit_commands = $v;
			$this->modifiedColumns[] = NagiosContactPeer::CAN_SUBMIT_COMMANDS;
		}

		return $this;
	} // setCanSubmitCommands()

	/**
	 * Sets the value of the [retain_status_information] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setRetainStatusInformation($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->retain_status_information !== $v) {
			$this->retain_status_information = $v;
			$this->modifiedColumns[] = NagiosContactPeer::RETAIN_STATUS_INFORMATION;
		}

		return $this;
	} // setRetainStatusInformation()

	/**
	 * Sets the value of the [retain_nonstatus_information] column. 
	 * Non-boolean arguments are converted using the following rules:
	 *   * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *   * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 * Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * 
	 * @param      boolean|integer|string $v The new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setRetainNonstatusInformation($v)
	{
		if ($v !== null) {
			if (is_string($v)) {
				$v = in_array(strtolower($v), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
			} else {
				$v = (boolean) $v;
			}
		}

		if ($this->retain_nonstatus_information !== $v) {
			$this->retain_nonstatus_information = $v;
			$this->modifiedColumns[] = NagiosContactPeer::RETAIN_NONSTATUS_INFORMATION;
		}

		return $this;
	} // setRetainNonstatusInformation()

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
			$this->name = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->alias = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->email = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->pager = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->host_notifications_enabled = ($row[$startcol + 5] !== null) ? (boolean) $row[$startcol + 5] : null;
			$this->service_notifications_enabled = ($row[$startcol + 6] !== null) ? (boolean) $row[$startcol + 6] : null;
			$this->host_notification_period = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->service_notification_period = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->host_notification_on_down = ($row[$startcol + 9] !== null) ? (boolean) $row[$startcol + 9] : null;
			$this->host_notification_on_unreachable = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->host_notification_on_recovery = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->host_notification_on_flapping = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->host_notification_on_scheduled_downtime = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->service_notification_on_warning = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->service_notification_on_unknown = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->service_notification_on_critical = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->service_notification_on_recovery = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->service_notification_on_flapping = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
			$this->can_submit_commands = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
			$this->retain_status_information = ($row[$startcol + 20] !== null) ? (boolean) $row[$startcol + 20] : null;
			$this->retain_nonstatus_information = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			return $startcol + 22; // 22 = NagiosContactPeer::NUM_HYDRATE_COLUMNS.

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosContact object", $e);
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

		if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod !== null && $this->host_notification_period !== $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = null;
		}
		if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod !== null && $this->service_notification_period !== $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = null;
		}
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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosContactPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = null;
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = null;
			$this->collNagiosContactAddresss = null;

			$this->collNagiosContactGroupMembers = null;

			$this->collNagiosContactNotificationCommands = null;

			$this->collNagiosHostContactMembers = null;

			$this->collNagiosServiceContactMembers = null;

			$this->collNagiosEscalationContacts = null;

			$this->collNagiosContactCustomObjectVars = null;

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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}

		$con->beginTransaction();
		try {
			$ret = $this->preDelete($con);
			if ($ret) {
				NagiosContactQuery::create()
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
			$con = Propel::getConnection(NagiosContactPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
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
				NagiosContactPeer::addInstanceToPool($this);
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

			// We call the save method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod->isModified() || $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByHostNotificationPeriod($this->aNagiosTimeperiodRelatedByHostNotificationPeriod);
			}

			if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->isModified() || $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByServiceNotificationPeriod($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosContactPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$criteria = $this->buildCriteria();
					if ($criteria->keyContainsValue(NagiosContactPeer::ID) ) {
						throw new PropelException('Cannot insert a value for auto-increment primary key ('.NagiosContactPeer::ID.')');
					}

					$pk = BasePeer::doInsert($criteria, $con);
					$affectedRows += 1;
					$this->setId($pk);  //[IMV] update autoincrement primary key
					$this->setNew(false);
				} else {
					$affectedRows += NagiosContactPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosContactAddresss !== null) {
				foreach ($this->collNagiosContactAddresss as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosContactGroupMembers !== null) {
				foreach ($this->collNagiosContactGroupMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosContactNotificationCommands !== null) {
				foreach ($this->collNagiosContactNotificationCommands as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostContactMembers !== null) {
				foreach ($this->collNagiosHostContactMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceContactMembers !== null) {
				foreach ($this->collNagiosServiceContactMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosEscalationContacts !== null) {
				foreach ($this->collNagiosEscalationContacts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosContactCustomObjectVars !== null) {
				foreach ($this->collNagiosContactCustomObjectVars as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
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


			// We call the validate method on the following object(s) if they
			// were passed to this object by their coresponding set
			// method.  This object relates to these object(s) by a
			// foreign key reference.

			if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByHostNotificationPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->getValidationFailures());
				}
			}


			if (($retval = NagiosContactPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosContactAddresss !== null) {
					foreach ($this->collNagiosContactAddresss as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosContactGroupMembers !== null) {
					foreach ($this->collNagiosContactGroupMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosContactNotificationCommands !== null) {
					foreach ($this->collNagiosContactNotificationCommands as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostContactMembers !== null) {
					foreach ($this->collNagiosHostContactMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceContactMembers !== null) {
					foreach ($this->collNagiosServiceContactMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosEscalationContacts !== null) {
					foreach ($this->collNagiosEscalationContacts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosContactCustomObjectVars !== null) {
					foreach ($this->collNagiosContactCustomObjectVars as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
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
		$pos = NagiosContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getName();
				break;
			case 2:
				return $this->getAlias();
				break;
			case 3:
				return $this->getEmail();
				break;
			case 4:
				return $this->getPager();
				break;
			case 5:
				return $this->getHostNotificationsEnabled();
				break;
			case 6:
				return $this->getServiceNotificationsEnabled();
				break;
			case 7:
				return $this->getHostNotificationPeriod();
				break;
			case 8:
				return $this->getServiceNotificationPeriod();
				break;
			case 9:
				return $this->getHostNotificationOnDown();
				break;
			case 10:
				return $this->getHostNotificationOnUnreachable();
				break;
			case 11:
				return $this->getHostNotificationOnRecovery();
				break;
			case 12:
				return $this->getHostNotificationOnFlapping();
				break;
			case 13:
				return $this->getHostNotificationOnScheduledDowntime();
				break;
			case 14:
				return $this->getServiceNotificationOnWarning();
				break;
			case 15:
				return $this->getServiceNotificationOnUnknown();
				break;
			case 16:
				return $this->getServiceNotificationOnCritical();
				break;
			case 17:
				return $this->getServiceNotificationOnRecovery();
				break;
			case 18:
				return $this->getServiceNotificationOnFlapping();
				break;
			case 19:
				return $this->getCanSubmitCommands();
				break;
			case 20:
				return $this->getRetainStatusInformation();
				break;
			case 21:
				return $this->getRetainNonstatusInformation();
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
	 * @param     boolean $includeForeignObjects (optional) Whether to include hydrated related objects. Default to FALSE.
	 *
	 * @return    array an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true, $alreadyDumpedObjects = array(), $includeForeignObjects = false)
	{
		if (isset($alreadyDumpedObjects['NagiosContact'][$this->getPrimaryKey()])) {
			return '*RECURSION*';
		}
		$alreadyDumpedObjects['NagiosContact'][$this->getPrimaryKey()] = true;
		$keys = NagiosContactPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getAlias(),
			$keys[3] => $this->getEmail(),
			$keys[4] => $this->getPager(),
			$keys[5] => $this->getHostNotificationsEnabled(),
			$keys[6] => $this->getServiceNotificationsEnabled(),
			$keys[7] => $this->getHostNotificationPeriod(),
			$keys[8] => $this->getServiceNotificationPeriod(),
			$keys[9] => $this->getHostNotificationOnDown(),
			$keys[10] => $this->getHostNotificationOnUnreachable(),
			$keys[11] => $this->getHostNotificationOnRecovery(),
			$keys[12] => $this->getHostNotificationOnFlapping(),
			$keys[13] => $this->getHostNotificationOnScheduledDowntime(),
			$keys[14] => $this->getServiceNotificationOnWarning(),
			$keys[15] => $this->getServiceNotificationOnUnknown(),
			$keys[16] => $this->getServiceNotificationOnCritical(),
			$keys[17] => $this->getServiceNotificationOnRecovery(),
			$keys[18] => $this->getServiceNotificationOnFlapping(),
			$keys[19] => $this->getCanSubmitCommands(),
			$keys[20] => $this->getRetainStatusInformation(),
			$keys[21] => $this->getRetainNonstatusInformation(),
		);
		if ($includeForeignObjects) {
			if (null !== $this->aNagiosTimeperiodRelatedByHostNotificationPeriod) {
				$result['NagiosTimeperiodRelatedByHostNotificationPeriod'] = $this->aNagiosTimeperiodRelatedByHostNotificationPeriod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod) {
				$result['NagiosTimeperiodRelatedByServiceNotificationPeriod'] = $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->toArray($keyType, $includeLazyLoadColumns,  $alreadyDumpedObjects, true);
			}
			if (null !== $this->collNagiosContactAddresss) {
				$result['NagiosContactAddresss'] = $this->collNagiosContactAddresss->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosContactGroupMembers) {
				$result['NagiosContactGroupMembers'] = $this->collNagiosContactGroupMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosContactNotificationCommands) {
				$result['NagiosContactNotificationCommands'] = $this->collNagiosContactNotificationCommands->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosHostContactMembers) {
				$result['NagiosHostContactMembers'] = $this->collNagiosHostContactMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosServiceContactMembers) {
				$result['NagiosServiceContactMembers'] = $this->collNagiosServiceContactMembers->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosEscalationContacts) {
				$result['NagiosEscalationContacts'] = $this->collNagiosEscalationContacts->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
			if (null !== $this->collNagiosContactCustomObjectVars) {
				$result['NagiosContactCustomObjectVars'] = $this->collNagiosContactCustomObjectVars->toArray(null, true, $keyType, $includeLazyLoadColumns, $alreadyDumpedObjects);
			}
		}
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
		$pos = NagiosContactPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setName($value);
				break;
			case 2:
				$this->setAlias($value);
				break;
			case 3:
				$this->setEmail($value);
				break;
			case 4:
				$this->setPager($value);
				break;
			case 5:
				$this->setHostNotificationsEnabled($value);
				break;
			case 6:
				$this->setServiceNotificationsEnabled($value);
				break;
			case 7:
				$this->setHostNotificationPeriod($value);
				break;
			case 8:
				$this->setServiceNotificationPeriod($value);
				break;
			case 9:
				$this->setHostNotificationOnDown($value);
				break;
			case 10:
				$this->setHostNotificationOnUnreachable($value);
				break;
			case 11:
				$this->setHostNotificationOnRecovery($value);
				break;
			case 12:
				$this->setHostNotificationOnFlapping($value);
				break;
			case 13:
				$this->setHostNotificationOnScheduledDowntime($value);
				break;
			case 14:
				$this->setServiceNotificationOnWarning($value);
				break;
			case 15:
				$this->setServiceNotificationOnUnknown($value);
				break;
			case 16:
				$this->setServiceNotificationOnCritical($value);
				break;
			case 17:
				$this->setServiceNotificationOnRecovery($value);
				break;
			case 18:
				$this->setServiceNotificationOnFlapping($value);
				break;
			case 19:
				$this->setCanSubmitCommands($value);
				break;
			case 20:
				$this->setRetainStatusInformation($value);
				break;
			case 21:
				$this->setRetainNonstatusInformation($value);
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
		$keys = NagiosContactPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAlias($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setEmail($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setPager($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setHostNotificationsEnabled($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setServiceNotificationsEnabled($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setHostNotificationPeriod($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setServiceNotificationPeriod($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setHostNotificationOnDown($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setHostNotificationOnUnreachable($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setHostNotificationOnRecovery($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setHostNotificationOnFlapping($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setHostNotificationOnScheduledDowntime($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setServiceNotificationOnWarning($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setServiceNotificationOnUnknown($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setServiceNotificationOnCritical($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setServiceNotificationOnRecovery($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setServiceNotificationOnFlapping($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setCanSubmitCommands($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setRetainStatusInformation($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setRetainNonstatusInformation($arr[$keys[21]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosContactPeer::ID)) $criteria->add(NagiosContactPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosContactPeer::NAME)) $criteria->add(NagiosContactPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosContactPeer::ALIAS)) $criteria->add(NagiosContactPeer::ALIAS, $this->alias);
		if ($this->isColumnModified(NagiosContactPeer::EMAIL)) $criteria->add(NagiosContactPeer::EMAIL, $this->email);
		if ($this->isColumnModified(NagiosContactPeer::PAGER)) $criteria->add(NagiosContactPeer::PAGER, $this->pager);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED, $this->host_notifications_enabled);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATIONS_ENABLED)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATIONS_ENABLED, $this->service_notifications_enabled);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_PERIOD)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_PERIOD, $this->host_notification_period);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_PERIOD, $this->service_notification_period);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN, $this->host_notification_on_down);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE, $this->host_notification_on_unreachable);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY, $this->host_notification_on_recovery);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING, $this->host_notification_on_flapping);
		if ($this->isColumnModified(NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME)) $criteria->add(NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME, $this->host_notification_on_scheduled_downtime);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING, $this->service_notification_on_warning);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN, $this->service_notification_on_unknown);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL, $this->service_notification_on_critical);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY, $this->service_notification_on_recovery);
		if ($this->isColumnModified(NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING)) $criteria->add(NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING, $this->service_notification_on_flapping);
		if ($this->isColumnModified(NagiosContactPeer::CAN_SUBMIT_COMMANDS)) $criteria->add(NagiosContactPeer::CAN_SUBMIT_COMMANDS, $this->can_submit_commands);
		if ($this->isColumnModified(NagiosContactPeer::RETAIN_STATUS_INFORMATION)) $criteria->add(NagiosContactPeer::RETAIN_STATUS_INFORMATION, $this->retain_status_information);
		if ($this->isColumnModified(NagiosContactPeer::RETAIN_NONSTATUS_INFORMATION)) $criteria->add(NagiosContactPeer::RETAIN_NONSTATUS_INFORMATION, $this->retain_nonstatus_information);

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
		$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		$criteria->add(NagiosContactPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosContact (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @param      boolean $makeNew Whether to reset autoincrement PKs and make the object new.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false, $makeNew = true)
	{
		$copyObj->setName($this->getName());
		$copyObj->setAlias($this->getAlias());
		$copyObj->setEmail($this->getEmail());
		$copyObj->setPager($this->getPager());
		$copyObj->setHostNotificationsEnabled($this->getHostNotificationsEnabled());
		$copyObj->setServiceNotificationsEnabled($this->getServiceNotificationsEnabled());
		$copyObj->setHostNotificationPeriod($this->getHostNotificationPeriod());
		$copyObj->setServiceNotificationPeriod($this->getServiceNotificationPeriod());
		$copyObj->setHostNotificationOnDown($this->getHostNotificationOnDown());
		$copyObj->setHostNotificationOnUnreachable($this->getHostNotificationOnUnreachable());
		$copyObj->setHostNotificationOnRecovery($this->getHostNotificationOnRecovery());
		$copyObj->setHostNotificationOnFlapping($this->getHostNotificationOnFlapping());
		$copyObj->setHostNotificationOnScheduledDowntime($this->getHostNotificationOnScheduledDowntime());
		$copyObj->setServiceNotificationOnWarning($this->getServiceNotificationOnWarning());
		$copyObj->setServiceNotificationOnUnknown($this->getServiceNotificationOnUnknown());
		$copyObj->setServiceNotificationOnCritical($this->getServiceNotificationOnCritical());
		$copyObj->setServiceNotificationOnRecovery($this->getServiceNotificationOnRecovery());
		$copyObj->setServiceNotificationOnFlapping($this->getServiceNotificationOnFlapping());
		$copyObj->setCanSubmitCommands($this->getCanSubmitCommands());
		$copyObj->setRetainStatusInformation($this->getRetainStatusInformation());
		$copyObj->setRetainNonstatusInformation($this->getRetainNonstatusInformation());

		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosContactAddresss() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactAddress($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosContactGroupMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactGroupMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosContactNotificationCommands() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactNotificationCommand($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostContactMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostContactMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceContactMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceContactMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalationContacts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalationContact($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosContactCustomObjectVars() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosContactCustomObjectVar($relObj->copy($deepCopy));
				}
			}

		} // if ($deepCopy)

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
	 * @return     NagiosContact Clone of current object.
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
	 * @return     NagiosContactPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosContactPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosContact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByHostNotificationPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setHostNotificationPeriod(NULL);
		} else {
			$this->setHostNotificationPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosContactRelatedByHostNotificationPeriod($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosTimeperiod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosTimeperiod The associated NagiosTimeperiod object.
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodRelatedByHostNotificationPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByHostNotificationPeriod === null && ($this->host_notification_period !== null)) {
			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = NagiosTimeperiodQuery::create()->findPk($this->host_notification_period, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosTimeperiodRelatedByHostNotificationPeriod->addNagiosContactsRelatedByHostNotificationPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByHostNotificationPeriod;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosContact The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByServiceNotificationPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setServiceNotificationPeriod(NULL);
		} else {
			$this->setServiceNotificationPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosContactRelatedByServiceNotificationPeriod($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosTimeperiod object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosTimeperiod The associated NagiosTimeperiod object.
	 * @throws     PropelException
	 */
	public function getNagiosTimeperiodRelatedByServiceNotificationPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByServiceNotificationPeriod === null && ($this->service_notification_period !== null)) {
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = NagiosTimeperiodQuery::create()->findPk($this->service_notification_period, $con);
			/* The following can be used additionally to
				guarantee the related object contains a reference
				to this object.  This level of coupling may, however, be
				undesirable since it could result in an only partially populated collection
				in the referenced object.
				$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod->addNagiosContactsRelatedByServiceNotificationPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByServiceNotificationPeriod;
	}


	/**
	 * Initializes a collection based on the name of a relation.
	 * Avoids crafting an 'init[$relationName]s' method name 
	 * that wouldn't work when StandardEnglishPluralizer is used.
	 *
	 * @param      string $relationName The name of the relation to initialize
	 * @return     void
	 */
	public function initRelation($relationName)
	{
		if ('NagiosContactAddress' == $relationName) {
			return $this->initNagiosContactAddresss();
		}
		if ('NagiosContactGroupMember' == $relationName) {
			return $this->initNagiosContactGroupMembers();
		}
		if ('NagiosContactNotificationCommand' == $relationName) {
			return $this->initNagiosContactNotificationCommands();
		}
		if ('NagiosHostContactMember' == $relationName) {
			return $this->initNagiosHostContactMembers();
		}
		if ('NagiosServiceContactMember' == $relationName) {
			return $this->initNagiosServiceContactMembers();
		}
		if ('NagiosEscalationContact' == $relationName) {
			return $this->initNagiosEscalationContacts();
		}
		if ('NagiosContactCustomObjectVar' == $relationName) {
			return $this->initNagiosContactCustomObjectVars();
		}
	}

	/**
	 * Clears out the collNagiosContactAddresss collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactAddresss()
	 */
	public function clearNagiosContactAddresss()
	{
		$this->collNagiosContactAddresss = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactAddresss collection.
	 *
	 * By default this just sets the collNagiosContactAddresss collection to an empty array (like clearcollNagiosContactAddresss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosContactAddresss($overrideExisting = true)
	{
		if (null !== $this->collNagiosContactAddresss && !$overrideExisting) {
			return;
		}
		$this->collNagiosContactAddresss = new PropelObjectCollection();
		$this->collNagiosContactAddresss->setModel('NagiosContactAddress');
	}

	/**
	 * Gets an array of NagiosContactAddress objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosContactAddress[] List of NagiosContactAddress objects
	 * @throws     PropelException
	 */
	public function getNagiosContactAddresss($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactAddresss || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactAddresss) {
				// return empty collection
				$this->initNagiosContactAddresss();
			} else {
				$collNagiosContactAddresss = NagiosContactAddressQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosContactAddresss;
				}
				$this->collNagiosContactAddresss = $collNagiosContactAddresss;
			}
		}
		return $this->collNagiosContactAddresss;
	}

	/**
	 * Returns the number of related NagiosContactAddress objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContactAddress objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactAddresss(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactAddresss || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactAddresss) {
				return 0;
			} else {
				$query = NagiosContactAddressQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosContactAddresss);
		}
	}

	/**
	 * Method called to associate a NagiosContactAddress object to this object
	 * through the NagiosContactAddress foreign key attribute.
	 *
	 * @param      NagiosContactAddress $l NagiosContactAddress
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactAddress(NagiosContactAddress $l)
	{
		if ($this->collNagiosContactAddresss === null) {
			$this->initNagiosContactAddresss();
		}
		if (!$this->collNagiosContactAddresss->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosContactAddresss[]= $l;
			$l->setNagiosContact($this);
		}
	}

	/**
	 * Clears out the collNagiosContactGroupMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactGroupMembers()
	 */
	public function clearNagiosContactGroupMembers()
	{
		$this->collNagiosContactGroupMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactGroupMembers collection.
	 *
	 * By default this just sets the collNagiosContactGroupMembers collection to an empty array (like clearcollNagiosContactGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosContactGroupMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosContactGroupMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosContactGroupMembers = new PropelObjectCollection();
		$this->collNagiosContactGroupMembers->setModel('NagiosContactGroupMember');
	}

	/**
	 * Gets an array of NagiosContactGroupMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosContactGroupMember[] List of NagiosContactGroupMember objects
	 * @throws     PropelException
	 */
	public function getNagiosContactGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactGroupMembers) {
				// return empty collection
				$this->initNagiosContactGroupMembers();
			} else {
				$collNagiosContactGroupMembers = NagiosContactGroupMemberQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosContactGroupMembers;
				}
				$this->collNagiosContactGroupMembers = $collNagiosContactGroupMembers;
			}
		}
		return $this->collNagiosContactGroupMembers;
	}

	/**
	 * Returns the number of related NagiosContactGroupMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContactGroupMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactGroupMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactGroupMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactGroupMembers) {
				return 0;
			} else {
				$query = NagiosContactGroupMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosContactGroupMembers);
		}
	}

	/**
	 * Method called to associate a NagiosContactGroupMember object to this object
	 * through the NagiosContactGroupMember foreign key attribute.
	 *
	 * @param      NagiosContactGroupMember $l NagiosContactGroupMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactGroupMember(NagiosContactGroupMember $l)
	{
		if ($this->collNagiosContactGroupMembers === null) {
			$this->initNagiosContactGroupMembers();
		}
		if (!$this->collNagiosContactGroupMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosContactGroupMembers[]= $l;
			$l->setNagiosContact($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosContactGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosContactGroupMember[] List of NagiosContactGroupMember objects
	 */
	public function getNagiosContactGroupMembersJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosContactGroupMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosContactGroup', $join_behavior);

		return $this->getNagiosContactGroupMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosContactNotificationCommands collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactNotificationCommands()
	 */
	public function clearNagiosContactNotificationCommands()
	{
		$this->collNagiosContactNotificationCommands = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactNotificationCommands collection.
	 *
	 * By default this just sets the collNagiosContactNotificationCommands collection to an empty array (like clearcollNagiosContactNotificationCommands());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosContactNotificationCommands($overrideExisting = true)
	{
		if (null !== $this->collNagiosContactNotificationCommands && !$overrideExisting) {
			return;
		}
		$this->collNagiosContactNotificationCommands = new PropelObjectCollection();
		$this->collNagiosContactNotificationCommands->setModel('NagiosContactNotificationCommand');
	}

	/**
	 * Gets an array of NagiosContactNotificationCommand objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosContactNotificationCommand[] List of NagiosContactNotificationCommand objects
	 * @throws     PropelException
	 */
	public function getNagiosContactNotificationCommands($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactNotificationCommands || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactNotificationCommands) {
				// return empty collection
				$this->initNagiosContactNotificationCommands();
			} else {
				$collNagiosContactNotificationCommands = NagiosContactNotificationCommandQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosContactNotificationCommands;
				}
				$this->collNagiosContactNotificationCommands = $collNagiosContactNotificationCommands;
			}
		}
		return $this->collNagiosContactNotificationCommands;
	}

	/**
	 * Returns the number of related NagiosContactNotificationCommand objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContactNotificationCommand objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactNotificationCommands(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactNotificationCommands || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactNotificationCommands) {
				return 0;
			} else {
				$query = NagiosContactNotificationCommandQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosContactNotificationCommands);
		}
	}

	/**
	 * Method called to associate a NagiosContactNotificationCommand object to this object
	 * through the NagiosContactNotificationCommand foreign key attribute.
	 *
	 * @param      NagiosContactNotificationCommand $l NagiosContactNotificationCommand
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactNotificationCommand(NagiosContactNotificationCommand $l)
	{
		if ($this->collNagiosContactNotificationCommands === null) {
			$this->initNagiosContactNotificationCommands();
		}
		if (!$this->collNagiosContactNotificationCommands->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosContactNotificationCommands[]= $l;
			$l->setNagiosContact($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosContactNotificationCommands from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosContactNotificationCommand[] List of NagiosContactNotificationCommand objects
	 */
	public function getNagiosContactNotificationCommandsJoinNagiosCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosContactNotificationCommandQuery::create(null, $criteria);
		$query->joinWith('NagiosCommand', $join_behavior);

		return $this->getNagiosContactNotificationCommands($query, $con);
	}

	/**
	 * Clears out the collNagiosHostContactMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostContactMembers()
	 */
	public function clearNagiosHostContactMembers()
	{
		$this->collNagiosHostContactMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostContactMembers collection.
	 *
	 * By default this just sets the collNagiosHostContactMembers collection to an empty array (like clearcollNagiosHostContactMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosHostContactMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosHostContactMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosHostContactMembers = new PropelObjectCollection();
		$this->collNagiosHostContactMembers->setModel('NagiosHostContactMember');
	}

	/**
	 * Gets an array of NagiosHostContactMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosHostContactMember[] List of NagiosHostContactMember objects
	 * @throws     PropelException
	 */
	public function getNagiosHostContactMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostContactMembers) {
				// return empty collection
				$this->initNagiosHostContactMembers();
			} else {
				$collNagiosHostContactMembers = NagiosHostContactMemberQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosHostContactMembers;
				}
				$this->collNagiosHostContactMembers = $collNagiosHostContactMembers;
			}
		}
		return $this->collNagiosHostContactMembers;
	}

	/**
	 * Returns the number of related NagiosHostContactMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostContactMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostContactMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosHostContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosHostContactMembers) {
				return 0;
			} else {
				$query = NagiosHostContactMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosHostContactMembers);
		}
	}

	/**
	 * Method called to associate a NagiosHostContactMember object to this object
	 * through the NagiosHostContactMember foreign key attribute.
	 *
	 * @param      NagiosHostContactMember $l NagiosHostContactMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostContactMember(NagiosHostContactMember $l)
	{
		if ($this->collNagiosHostContactMembers === null) {
			$this->initNagiosHostContactMembers();
		}
		if (!$this->collNagiosHostContactMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosHostContactMembers[]= $l;
			$l->setNagiosContact($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosHostContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostContactMember[] List of NagiosHostContactMember objects
	 */
	public function getNagiosHostContactMembersJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosHost', $join_behavior);

		return $this->getNagiosHostContactMembers($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosHostContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosHostContactMember[] List of NagiosHostContactMember objects
	 */
	public function getNagiosHostContactMembersJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosHostContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosHostTemplate', $join_behavior);

		return $this->getNagiosHostContactMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosServiceContactMembers collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceContactMembers()
	 */
	public function clearNagiosServiceContactMembers()
	{
		$this->collNagiosServiceContactMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceContactMembers collection.
	 *
	 * By default this just sets the collNagiosServiceContactMembers collection to an empty array (like clearcollNagiosServiceContactMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosServiceContactMembers($overrideExisting = true)
	{
		if (null !== $this->collNagiosServiceContactMembers && !$overrideExisting) {
			return;
		}
		$this->collNagiosServiceContactMembers = new PropelObjectCollection();
		$this->collNagiosServiceContactMembers->setModel('NagiosServiceContactMember');
	}

	/**
	 * Gets an array of NagiosServiceContactMember objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 * @throws     PropelException
	 */
	public function getNagiosServiceContactMembers($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactMembers) {
				// return empty collection
				$this->initNagiosServiceContactMembers();
			} else {
				$collNagiosServiceContactMembers = NagiosServiceContactMemberQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosServiceContactMembers;
				}
				$this->collNagiosServiceContactMembers = $collNagiosServiceContactMembers;
			}
		}
		return $this->collNagiosServiceContactMembers;
	}

	/**
	 * Returns the number of related NagiosServiceContactMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceContactMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceContactMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosServiceContactMembers || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosServiceContactMembers) {
				return 0;
			} else {
				$query = NagiosServiceContactMemberQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosServiceContactMembers);
		}
	}

	/**
	 * Method called to associate a NagiosServiceContactMember object to this object
	 * through the NagiosServiceContactMember foreign key attribute.
	 *
	 * @param      NagiosServiceContactMember $l NagiosServiceContactMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceContactMember(NagiosServiceContactMember $l)
	{
		if ($this->collNagiosServiceContactMembers === null) {
			$this->initNagiosServiceContactMembers();
		}
		if (!$this->collNagiosServiceContactMembers->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosServiceContactMembers[]= $l;
			$l->setNagiosContact($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 */
	public function getNagiosServiceContactMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosService', $join_behavior);

		return $this->getNagiosServiceContactMembers($query, $con);
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosServiceContactMember[] List of NagiosServiceContactMember objects
	 */
	public function getNagiosServiceContactMembersJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosServiceContactMemberQuery::create(null, $criteria);
		$query->joinWith('NagiosServiceTemplate', $join_behavior);

		return $this->getNagiosServiceContactMembers($query, $con);
	}

	/**
	 * Clears out the collNagiosEscalationContacts collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosEscalationContacts()
	 */
	public function clearNagiosEscalationContacts()
	{
		$this->collNagiosEscalationContacts = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosEscalationContacts collection.
	 *
	 * By default this just sets the collNagiosEscalationContacts collection to an empty array (like clearcollNagiosEscalationContacts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosEscalationContacts($overrideExisting = true)
	{
		if (null !== $this->collNagiosEscalationContacts && !$overrideExisting) {
			return;
		}
		$this->collNagiosEscalationContacts = new PropelObjectCollection();
		$this->collNagiosEscalationContacts->setModel('NagiosEscalationContact');
	}

	/**
	 * Gets an array of NagiosEscalationContact objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosEscalationContact[] List of NagiosEscalationContact objects
	 * @throws     PropelException
	 */
	public function getNagiosEscalationContacts($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalationContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalationContacts) {
				// return empty collection
				$this->initNagiosEscalationContacts();
			} else {
				$collNagiosEscalationContacts = NagiosEscalationContactQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosEscalationContacts;
				}
				$this->collNagiosEscalationContacts = $collNagiosEscalationContacts;
			}
		}
		return $this->collNagiosEscalationContacts;
	}

	/**
	 * Returns the number of related NagiosEscalationContact objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosEscalationContact objects.
	 * @throws     PropelException
	 */
	public function countNagiosEscalationContacts(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosEscalationContacts || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosEscalationContacts) {
				return 0;
			} else {
				$query = NagiosEscalationContactQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosEscalationContacts);
		}
	}

	/**
	 * Method called to associate a NagiosEscalationContact object to this object
	 * through the NagiosEscalationContact foreign key attribute.
	 *
	 * @param      NagiosEscalationContact $l NagiosEscalationContact
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosEscalationContact(NagiosEscalationContact $l)
	{
		if ($this->collNagiosEscalationContacts === null) {
			$this->initNagiosEscalationContacts();
		}
		if (!$this->collNagiosEscalationContacts->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosEscalationContacts[]= $l;
			$l->setNagiosContact($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosContact is new, it will return
	 * an empty collection; or if this NagiosContact has previously
	 * been saved, it will retrieve related NagiosEscalationContacts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosContact.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @param      string $join_behavior optional join type to use (defaults to Criteria::LEFT_JOIN)
	 * @return     PropelCollection|array NagiosEscalationContact[] List of NagiosEscalationContact objects
	 */
	public function getNagiosEscalationContactsJoinNagiosEscalation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		$query = NagiosEscalationContactQuery::create(null, $criteria);
		$query->joinWith('NagiosEscalation', $join_behavior);

		return $this->getNagiosEscalationContacts($query, $con);
	}

	/**
	 * Clears out the collNagiosContactCustomObjectVars collection
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosContactCustomObjectVars()
	 */
	public function clearNagiosContactCustomObjectVars()
	{
		$this->collNagiosContactCustomObjectVars = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosContactCustomObjectVars collection.
	 *
	 * By default this just sets the collNagiosContactCustomObjectVars collection to an empty array (like clearcollNagiosContactCustomObjectVars());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @param      boolean $overrideExisting If set to true, the method call initializes
	 *                                        the collection even if it is not empty
	 *
	 * @return     void
	 */
	public function initNagiosContactCustomObjectVars($overrideExisting = true)
	{
		if (null !== $this->collNagiosContactCustomObjectVars && !$overrideExisting) {
			return;
		}
		$this->collNagiosContactCustomObjectVars = new PropelObjectCollection();
		$this->collNagiosContactCustomObjectVars->setModel('NagiosContactCustomObjectVar');
	}

	/**
	 * Gets an array of NagiosContactCustomObjectVar objects which contain a foreign key that references this object.
	 *
	 * If the $criteria is not null, it is used to always fetch the results from the database.
	 * Otherwise the results are fetched from the database the first time, then cached.
	 * Next time the same method is called without $criteria, the cached collection is returned.
	 * If this NagiosContact is new, it will return
	 * an empty collection or the current collection; the criteria is ignored on a new object.
	 *
	 * @param      Criteria $criteria optional Criteria object to narrow the query
	 * @param      PropelPDO $con optional connection object
	 * @return     PropelCollection|array NagiosContactCustomObjectVar[] List of NagiosContactCustomObjectVar objects
	 * @throws     PropelException
	 */
	public function getNagiosContactCustomObjectVars($criteria = null, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactCustomObjectVars || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactCustomObjectVars) {
				// return empty collection
				$this->initNagiosContactCustomObjectVars();
			} else {
				$collNagiosContactCustomObjectVars = NagiosContactCustomObjectVarQuery::create(null, $criteria)
					->filterByNagiosContact($this)
					->find($con);
				if (null !== $criteria) {
					return $collNagiosContactCustomObjectVars;
				}
				$this->collNagiosContactCustomObjectVars = $collNagiosContactCustomObjectVars;
			}
		}
		return $this->collNagiosContactCustomObjectVars;
	}

	/**
	 * Returns the number of related NagiosContactCustomObjectVar objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosContactCustomObjectVar objects.
	 * @throws     PropelException
	 */
	public function countNagiosContactCustomObjectVars(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if(null === $this->collNagiosContactCustomObjectVars || null !== $criteria) {
			if ($this->isNew() && null === $this->collNagiosContactCustomObjectVars) {
				return 0;
			} else {
				$query = NagiosContactCustomObjectVarQuery::create(null, $criteria);
				if($distinct) {
					$query->distinct();
				}
				return $query
					->filterByNagiosContact($this)
					->count($con);
			}
		} else {
			return count($this->collNagiosContactCustomObjectVars);
		}
	}

	/**
	 * Method called to associate a NagiosContactCustomObjectVar object to this object
	 * through the NagiosContactCustomObjectVar foreign key attribute.
	 *
	 * @param      NagiosContactCustomObjectVar $l NagiosContactCustomObjectVar
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosContactCustomObjectVar(NagiosContactCustomObjectVar $l)
	{
		if ($this->collNagiosContactCustomObjectVars === null) {
			$this->initNagiosContactCustomObjectVars();
		}
		if (!$this->collNagiosContactCustomObjectVars->contains($l)) { // only add it if the **same** object is not already associated
			$this->collNagiosContactCustomObjectVars[]= $l;
			$l->setNagiosContact($this);
		}
	}

	/**
	 * Clears the current object and sets all attributes to their default values
	 */
	public function clear()
	{
		$this->id = null;
		$this->name = null;
		$this->alias = null;
		$this->email = null;
		$this->pager = null;
		$this->host_notifications_enabled = null;
		$this->service_notifications_enabled = null;
		$this->host_notification_period = null;
		$this->service_notification_period = null;
		$this->host_notification_on_down = null;
		$this->host_notification_on_unreachable = null;
		$this->host_notification_on_recovery = null;
		$this->host_notification_on_flapping = null;
		$this->host_notification_on_scheduled_downtime = null;
		$this->service_notification_on_warning = null;
		$this->service_notification_on_unknown = null;
		$this->service_notification_on_critical = null;
		$this->service_notification_on_recovery = null;
		$this->service_notification_on_flapping = null;
		$this->can_submit_commands = null;
		$this->retain_status_information = null;
		$this->retain_nonstatus_information = null;
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
			if ($this->collNagiosContactAddresss) {
				foreach ($this->collNagiosContactAddresss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactGroupMembers) {
				foreach ($this->collNagiosContactGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactNotificationCommands) {
				foreach ($this->collNagiosContactNotificationCommands as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostContactMembers) {
				foreach ($this->collNagiosHostContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactMembers) {
				foreach ($this->collNagiosServiceContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalationContacts) {
				foreach ($this->collNagiosEscalationContacts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactCustomObjectVars) {
				foreach ($this->collNagiosContactCustomObjectVars as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		if ($this->collNagiosContactAddresss instanceof PropelCollection) {
			$this->collNagiosContactAddresss->clearIterator();
		}
		$this->collNagiosContactAddresss = null;
		if ($this->collNagiosContactGroupMembers instanceof PropelCollection) {
			$this->collNagiosContactGroupMembers->clearIterator();
		}
		$this->collNagiosContactGroupMembers = null;
		if ($this->collNagiosContactNotificationCommands instanceof PropelCollection) {
			$this->collNagiosContactNotificationCommands->clearIterator();
		}
		$this->collNagiosContactNotificationCommands = null;
		if ($this->collNagiosHostContactMembers instanceof PropelCollection) {
			$this->collNagiosHostContactMembers->clearIterator();
		}
		$this->collNagiosHostContactMembers = null;
		if ($this->collNagiosServiceContactMembers instanceof PropelCollection) {
			$this->collNagiosServiceContactMembers->clearIterator();
		}
		$this->collNagiosServiceContactMembers = null;
		if ($this->collNagiosEscalationContacts instanceof PropelCollection) {
			$this->collNagiosEscalationContacts->clearIterator();
		}
		$this->collNagiosEscalationContacts = null;
		if ($this->collNagiosContactCustomObjectVars instanceof PropelCollection) {
			$this->collNagiosContactCustomObjectVars->clearIterator();
		}
		$this->collNagiosContactCustomObjectVars = null;
		$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = null;
		$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = null;
	}

	/**
	 * Return the string representation of this object
	 *
	 * @return string
	 */
	public function __toString()
	{
		return (string) $this->exportTo(NagiosContactPeer::DEFAULT_STRING_FORMAT);
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

} // BaseNagiosContact
