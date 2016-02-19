<?php

/**
 * Base class that represents a row from the 'nagios_contact' table.
 *
 * Nagios Contact
 *
 * @package    .om
 */
abstract class BaseNagiosContact extends BaseObject  implements Persistent {


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
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactAddresss.
	 */
	private $lastNagiosContactAddressCriteria = null;

	/**
	 * @var        array NagiosContactGroupMember[] Collection to store aggregation of NagiosContactGroupMember objects.
	 */
	protected $collNagiosContactGroupMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactGroupMembers.
	 */
	private $lastNagiosContactGroupMemberCriteria = null;

	/**
	 * @var        array NagiosContactNotificationCommand[] Collection to store aggregation of NagiosContactNotificationCommand objects.
	 */
	protected $collNagiosContactNotificationCommands;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosContactNotificationCommands.
	 */
	private $lastNagiosContactNotificationCommandCriteria = null;

	/**
	 * @var        array NagiosHostContactMember[] Collection to store aggregation of NagiosHostContactMember objects.
	 */
	protected $collNagiosHostContactMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostContactMembers.
	 */
	private $lastNagiosHostContactMemberCriteria = null;

	/**
	 * @var        array NagiosServiceContactMember[] Collection to store aggregation of NagiosServiceContactMember objects.
	 */
	protected $collNagiosServiceContactMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceContactMembers.
	 */
	private $lastNagiosServiceContactMemberCriteria = null;

	/**
	 * @var        array NagiosEscalationContact[] Collection to store aggregation of NagiosEscalationContact objects.
	 */
	protected $collNagiosEscalationContacts;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalationContacts.
	 */
	private $lastNagiosEscalationContactCriteria = null;

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
	 * Initializes internal state of BaseNagiosContact object.
	 * @see        applyDefaults()
	 */
	public function __construct()
	{
		parent::__construct();
		$this->applyDefaultValues();
	}

	/**
	 * Applies default values to this object.
	 * This method should be called from the object's constructor (or
	 * equivalent initialization method).
	 * @see        __construct()
	 */
	public function applyDefaultValues()
	{
	}

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
	 * Set the value of [host_notifications_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationsEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notifications_enabled !== $v) {
			$this->host_notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setHostNotificationsEnabled()

	/**
	 * Set the value of [service_notifications_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationsEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
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
	 * Set the value of [host_notification_on_down] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnDown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notification_on_down !== $v) {
			$this->host_notification_on_down = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_DOWN;
		}

		return $this;
	} // setHostNotificationOnDown()

	/**
	 * Set the value of [host_notification_on_unreachable] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnUnreachable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notification_on_unreachable !== $v) {
			$this->host_notification_on_unreachable = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_UNREACHABLE;
		}

		return $this;
	} // setHostNotificationOnUnreachable()

	/**
	 * Set the value of [host_notification_on_recovery] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnRecovery($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notification_on_recovery !== $v) {
			$this->host_notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setHostNotificationOnRecovery()

	/**
	 * Set the value of [host_notification_on_flapping] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnFlapping($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notification_on_flapping !== $v) {
			$this->host_notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setHostNotificationOnFlapping()

	/**
	 * Set the value of [host_notification_on_scheduled_downtime] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setHostNotificationOnScheduledDowntime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->host_notification_on_scheduled_downtime !== $v) {
			$this->host_notification_on_scheduled_downtime = $v;
			$this->modifiedColumns[] = NagiosContactPeer::HOST_NOTIFICATION_ON_SCHEDULED_DOWNTIME;
		}

		return $this;
	} // setHostNotificationOnScheduledDowntime()

	/**
	 * Set the value of [service_notification_on_warning] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnWarning($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->service_notification_on_warning !== $v) {
			$this->service_notification_on_warning = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_WARNING;
		}

		return $this;
	} // setServiceNotificationOnWarning()

	/**
	 * Set the value of [service_notification_on_unknown] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->service_notification_on_unknown !== $v) {
			$this->service_notification_on_unknown = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_UNKNOWN;
		}

		return $this;
	} // setServiceNotificationOnUnknown()

	/**
	 * Set the value of [service_notification_on_critical] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnCritical($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->service_notification_on_critical !== $v) {
			$this->service_notification_on_critical = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_CRITICAL;
		}

		return $this;
	} // setServiceNotificationOnCritical()

	/**
	 * Set the value of [service_notification_on_recovery] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnRecovery($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->service_notification_on_recovery !== $v) {
			$this->service_notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setServiceNotificationOnRecovery()

	/**
	 * Set the value of [service_notification_on_flapping] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setServiceNotificationOnFlapping($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->service_notification_on_flapping !== $v) {
			$this->service_notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosContactPeer::SERVICE_NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setServiceNotificationOnFlapping()

	/**
	 * Set the value of [can_submit_commands] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setCanSubmitCommands($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->can_submit_commands !== $v) {
			$this->can_submit_commands = $v;
			$this->modifiedColumns[] = NagiosContactPeer::CAN_SUBMIT_COMMANDS;
		}

		return $this;
	} // setCanSubmitCommands()

	/**
	 * Set the value of [retain_status_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setRetainStatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_status_information !== $v) {
			$this->retain_status_information = $v;
			$this->modifiedColumns[] = NagiosContactPeer::RETAIN_STATUS_INFORMATION;
		}

		return $this;
	} // setRetainStatusInformation()

	/**
	 * Set the value of [retain_nonstatus_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosContact The current object (for fluent API support)
	 */
	public function setRetainNonstatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
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
			// First, ensure that we don't have any columns that have been modified which aren't default columns.
			if (array_diff($this->modifiedColumns, array())) {
				return false;
			}

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

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 22; // 22 = NagiosContactPeer::NUM_COLUMNS - NagiosContactPeer::NUM_LAZY_LOAD_COLUMNS).

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
			$this->lastNagiosContactAddressCriteria = null;

			$this->collNagiosContactGroupMembers = null;
			$this->lastNagiosContactGroupMemberCriteria = null;

			$this->collNagiosContactNotificationCommands = null;
			$this->lastNagiosContactNotificationCommandCriteria = null;

			$this->collNagiosHostContactMembers = null;
			$this->lastNagiosHostContactMemberCriteria = null;

			$this->collNagiosServiceContactMembers = null;
			$this->lastNagiosServiceContactMemberCriteria = null;

			$this->collNagiosEscalationContacts = null;
			$this->lastNagiosEscalationContactCriteria = null;

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
			NagiosContactPeer::doDelete($this, $con);
			$this->setDeleted(true);
			$con->commit();
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
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosContactPeer::addInstanceToPool($this);
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
					$pk = NagiosContactPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

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
	 * @param      string $keyType (optional) One of the class type constants BasePeer::TYPE_PHPNAME, BasePeer::TYPE_STUDLYPHPNAME
	 *                        BasePeer::TYPE_COLNAME, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_NUM. Defaults to BasePeer::TYPE_PHPNAME.
	 * @param      boolean $includeLazyLoadColumns (optional) Whether to include lazy loaded columns.  Defaults to TRUE.
	 * @return     an associative array containing the field names (as keys) and field values
	 */
	public function toArray($keyType = BasePeer::TYPE_PHPNAME, $includeLazyLoadColumns = true)
	{
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
	 * Sets contents of passed object to values from current object.
	 *
	 * If desired, this method can also make copies of all associated (fkey referrers)
	 * objects.
	 *
	 * @param      object $copyObj An object of NagiosContact (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setAlias($this->alias);

		$copyObj->setEmail($this->email);

		$copyObj->setPager($this->pager);

		$copyObj->setHostNotificationsEnabled($this->host_notifications_enabled);

		$copyObj->setServiceNotificationsEnabled($this->service_notifications_enabled);

		$copyObj->setHostNotificationPeriod($this->host_notification_period);

		$copyObj->setServiceNotificationPeriod($this->service_notification_period);

		$copyObj->setHostNotificationOnDown($this->host_notification_on_down);

		$copyObj->setHostNotificationOnUnreachable($this->host_notification_on_unreachable);

		$copyObj->setHostNotificationOnRecovery($this->host_notification_on_recovery);

		$copyObj->setHostNotificationOnFlapping($this->host_notification_on_flapping);

		$copyObj->setHostNotificationOnScheduledDowntime($this->host_notification_on_scheduled_downtime);

		$copyObj->setServiceNotificationOnWarning($this->service_notification_on_warning);

		$copyObj->setServiceNotificationOnUnknown($this->service_notification_on_unknown);

		$copyObj->setServiceNotificationOnCritical($this->service_notification_on_critical);

		$copyObj->setServiceNotificationOnRecovery($this->service_notification_on_recovery);

		$copyObj->setServiceNotificationOnFlapping($this->service_notification_on_flapping);

		$copyObj->setCanSubmitCommands($this->can_submit_commands);

		$copyObj->setRetainStatusInformation($this->retain_status_information);

		$copyObj->setRetainNonstatusInformation($this->retain_nonstatus_information);


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

		} // if ($deepCopy)


		$copyObj->setNew(true);

		$copyObj->setId(NULL); // this is a auto-increment column, so set to default value

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
			$c = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$c->add(NagiosTimeperiodPeer::ID, $this->host_notification_period);
			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = NagiosTimeperiodPeer::doSelectOne($c, $con);
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
			$c = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$c->add(NagiosTimeperiodPeer::ID, $this->service_notification_period);
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = NagiosTimeperiodPeer::doSelectOne($c, $con);
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
	 * Clears out the collNagiosContactAddresss collection (array).
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
	 * Initializes the collNagiosContactAddresss collection (array).
	 *
	 * By default this just sets the collNagiosContactAddresss collection to an empty array (like clearcollNagiosContactAddresss());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactAddresss()
	{
		$this->collNagiosContactAddresss = array();
	}

	/**
	 * Gets an array of NagiosContactAddress objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosContactAddresss from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContactAddress[]
	 * @throws     PropelException
	 */
	public function getNagiosContactAddresss($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactAddresss === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactAddresss = array();
			} else {

				$criteria->add(NagiosContactAddressPeer::CONTACT, $this->id);

				NagiosContactAddressPeer::addSelectColumns($criteria);
				$this->collNagiosContactAddresss = NagiosContactAddressPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactAddressPeer::CONTACT, $this->id);

				NagiosContactAddressPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactAddressCriteria) || !$this->lastNagiosContactAddressCriteria->equals($criteria)) {
					$this->collNagiosContactAddresss = NagiosContactAddressPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactAddressCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactAddresss === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactAddressPeer::CONTACT, $this->id);

				$count = NagiosContactAddressPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactAddressPeer::CONTACT, $this->id);

				if (!isset($this->lastNagiosContactAddressCriteria) || !$this->lastNagiosContactAddressCriteria->equals($criteria)) {
					$count = NagiosContactAddressPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactAddresss);
				}
			} else {
				$count = count($this->collNagiosContactAddresss);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosContactAddresss, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactAddresss, $l);
			$l->setNagiosContact($this);
		}
	}

	/**
	 * Clears out the collNagiosContactGroupMembers collection (array).
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
	 * Initializes the collNagiosContactGroupMembers collection (array).
	 *
	 * By default this just sets the collNagiosContactGroupMembers collection to an empty array (like clearcollNagiosContactGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactGroupMembers()
	{
		$this->collNagiosContactGroupMembers = array();
	}

	/**
	 * Gets an array of NagiosContactGroupMember objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosContactGroupMembers from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContactGroupMember[]
	 * @throws     PropelException
	 */
	public function getNagiosContactGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactGroupMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactGroupMembers = array();
			} else {

				$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

				NagiosContactGroupMemberPeer::addSelectColumns($criteria);
				$this->collNagiosContactGroupMembers = NagiosContactGroupMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

				NagiosContactGroupMemberPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactGroupMemberCriteria) || !$this->lastNagiosContactGroupMemberCriteria->equals($criteria)) {
					$this->collNagiosContactGroupMembers = NagiosContactGroupMemberPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactGroupMemberCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactGroupMembers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

				$count = NagiosContactGroupMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

				if (!isset($this->lastNagiosContactGroupMemberCriteria) || !$this->lastNagiosContactGroupMemberCriteria->equals($criteria)) {
					$count = NagiosContactGroupMemberPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactGroupMembers);
				}
			} else {
				$count = count($this->collNagiosContactGroupMembers);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosContactGroupMembers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactGroupMembers, $l);
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
	 */
	public function getNagiosContactGroupMembersJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactGroupMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosContactGroupMembers = array();
			} else {

				$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

				$this->collNagiosContactGroupMembers = NagiosContactGroupMemberPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosContactGroupMemberPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosContactGroupMemberCriteria) || !$this->lastNagiosContactGroupMemberCriteria->equals($criteria)) {
				$this->collNagiosContactGroupMembers = NagiosContactGroupMemberPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosContactGroupMemberCriteria = $criteria;

		return $this->collNagiosContactGroupMembers;
	}

	/**
	 * Clears out the collNagiosContactNotificationCommands collection (array).
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
	 * Initializes the collNagiosContactNotificationCommands collection (array).
	 *
	 * By default this just sets the collNagiosContactNotificationCommands collection to an empty array (like clearcollNagiosContactNotificationCommands());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosContactNotificationCommands()
	{
		$this->collNagiosContactNotificationCommands = array();
	}

	/**
	 * Gets an array of NagiosContactNotificationCommand objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosContactNotificationCommands from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosContactNotificationCommand[]
	 * @throws     PropelException
	 */
	public function getNagiosContactNotificationCommands($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
			   $this->collNagiosContactNotificationCommands = array();
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

				NagiosContactNotificationCommandPeer::addSelectColumns($criteria);
				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

				NagiosContactNotificationCommandPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
					$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosContactNotificationCommandCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

				$count = NagiosContactNotificationCommandPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

				if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
					$count = NagiosContactNotificationCommandPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosContactNotificationCommands);
				}
			} else {
				$count = count($this->collNagiosContactNotificationCommands);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosContactNotificationCommands, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosContactNotificationCommands, $l);
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
	 */
	public function getNagiosContactNotificationCommandsJoinNagiosCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosContactNotificationCommands === null) {
			if ($this->isNew()) {
				$this->collNagiosContactNotificationCommands = array();
			} else {

				$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelectJoinNagiosCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $this->id);

			if (!isset($this->lastNagiosContactNotificationCommandCriteria) || !$this->lastNagiosContactNotificationCommandCriteria->equals($criteria)) {
				$this->collNagiosContactNotificationCommands = NagiosContactNotificationCommandPeer::doSelectJoinNagiosCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosContactNotificationCommandCriteria = $criteria;

		return $this->collNagiosContactNotificationCommands;
	}

	/**
	 * Clears out the collNagiosHostContactMembers collection (array).
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
	 * Initializes the collNagiosHostContactMembers collection (array).
	 *
	 * By default this just sets the collNagiosHostContactMembers collection to an empty array (like clearcollNagiosHostContactMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostContactMembers()
	{
		$this->collNagiosHostContactMembers = array();
	}

	/**
	 * Gets an array of NagiosHostContactMember objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosHostContactMembers from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostContactMember[]
	 * @throws     PropelException
	 */
	public function getNagiosHostContactMembers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				NagiosHostContactMemberPeer::addSelectColumns($criteria);
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				NagiosHostContactMemberPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
					$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostContactMemberCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				$count = NagiosHostContactMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
					$count = NagiosHostContactMemberPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostContactMembers);
				}
			} else {
				$count = count($this->collNagiosHostContactMembers);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosHostContactMembers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostContactMembers, $l);
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
	 */
	public function getNagiosHostContactMembersJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactMemberCriteria = $criteria;

		return $this->collNagiosHostContactMembers;
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
	 */
	public function getNagiosHostContactMembersJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactMemberPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactMemberCriteria = $criteria;

		return $this->collNagiosHostContactMembers;
	}

	/**
	 * Clears out the collNagiosServiceContactMembers collection (array).
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
	 * Initializes the collNagiosServiceContactMembers collection (array).
	 *
	 * By default this just sets the collNagiosServiceContactMembers collection to an empty array (like clearcollNagiosServiceContactMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceContactMembers()
	{
		$this->collNagiosServiceContactMembers = array();
	}

	/**
	 * Gets an array of NagiosServiceContactMember objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosServiceContactMembers from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceContactMember[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceContactMembers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				NagiosServiceContactMemberPeer::addSelectColumns($criteria);
				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				NagiosServiceContactMemberPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceContactMemberCriteria) || !$this->lastNagiosServiceContactMemberCriteria->equals($criteria)) {
					$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceContactMemberCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				$count = NagiosServiceContactMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				if (!isset($this->lastNagiosServiceContactMemberCriteria) || !$this->lastNagiosServiceContactMemberCriteria->equals($criteria)) {
					$count = NagiosServiceContactMemberPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceContactMembers);
				}
			} else {
				$count = count($this->collNagiosServiceContactMembers);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosServiceContactMembers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceContactMembers, $l);
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
	 */
	public function getNagiosServiceContactMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosServiceContactMemberCriteria) || !$this->lastNagiosServiceContactMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceContactMemberCriteria = $criteria;

		return $this->collNagiosServiceContactMembers;
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
	 */
	public function getNagiosServiceContactMembersJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactMemberPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosServiceContactMemberCriteria) || !$this->lastNagiosServiceContactMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceContactMemberCriteria = $criteria;

		return $this->collNagiosServiceContactMembers;
	}

	/**
	 * Clears out the collNagiosEscalationContacts collection (array).
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
	 * Initializes the collNagiosEscalationContacts collection (array).
	 *
	 * By default this just sets the collNagiosEscalationContacts collection to an empty array (like clearcollNagiosEscalationContacts());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosEscalationContacts()
	{
		$this->collNagiosEscalationContacts = array();
	}

	/**
	 * Gets an array of NagiosEscalationContact objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosContact has previously been saved, it will retrieve
	 * related NagiosEscalationContacts from storage. If this NagiosContact is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosEscalationContact[]
	 * @throws     PropelException
	 */
	public function getNagiosEscalationContacts($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContacts === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalationContacts = array();
			} else {

				$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

				NagiosEscalationContactPeer::addSelectColumns($criteria);
				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

				NagiosEscalationContactPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosEscalationContactCriteria) || !$this->lastNagiosEscalationContactCriteria->equals($criteria)) {
					$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosEscalationContactCriteria = $criteria;
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
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosEscalationContacts === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

				$count = NagiosEscalationContactPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

				if (!isset($this->lastNagiosEscalationContactCriteria) || !$this->lastNagiosEscalationContactCriteria->equals($criteria)) {
					$count = NagiosEscalationContactPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosEscalationContacts);
				}
			} else {
				$count = count($this->collNagiosEscalationContacts);
			}
		}
		return $count;
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
		if (!in_array($l, $this->collNagiosEscalationContacts, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosEscalationContacts, $l);
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
	 */
	public function getNagiosEscalationContactsJoinNagiosEscalation($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosContactPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContacts === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalationContacts = array();
			} else {

				$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelectJoinNagiosEscalation($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationContactPeer::CONTACT, $this->id);

			if (!isset($this->lastNagiosEscalationContactCriteria) || !$this->lastNagiosEscalationContactCriteria->equals($criteria)) {
				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelectJoinNagiosEscalation($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationContactCriteria = $criteria;

		return $this->collNagiosEscalationContacts;
	}

	/**
	 * Resets all collections of referencing foreign keys.
	 *
	 * This method is a user-space workaround for PHP's inability to garbage collect objects
	 * with circular references.  This is currently necessary when using Propel in certain
	 * daemon or large-volumne/high-memory operations.
	 *
	 * @param      boolean $deep Whether to also clear the references on all associated objects.
	 */
	public function clearAllReferences($deep = false)
	{
		if ($deep) {
			if ($this->collNagiosContactAddresss) {
				foreach ((array) $this->collNagiosContactAddresss as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactGroupMembers) {
				foreach ((array) $this->collNagiosContactGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosContactNotificationCommands) {
				foreach ((array) $this->collNagiosContactNotificationCommands as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostContactMembers) {
				foreach ((array) $this->collNagiosHostContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactMembers) {
				foreach ((array) $this->collNagiosServiceContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalationContacts) {
				foreach ((array) $this->collNagiosEscalationContacts as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNagiosContactAddresss = null;
		$this->collNagiosContactGroupMembers = null;
		$this->collNagiosContactNotificationCommands = null;
		$this->collNagiosHostContactMembers = null;
		$this->collNagiosServiceContactMembers = null;
		$this->collNagiosEscalationContacts = null;
			$this->aNagiosTimeperiodRelatedByHostNotificationPeriod = null;
			$this->aNagiosTimeperiodRelatedByServiceNotificationPeriod = null;
	}

} // BaseNagiosContact
