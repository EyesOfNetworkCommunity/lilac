<?php

/**
 * Base class that represents a row from the 'nagios_escalation' table.
 *
 * Nagios Escalation
 *
 * @package    .om
 */
abstract class BaseNagiosEscalation extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosEscalationPeer
	 */
	protected static $peer;

	/**
	 * The value for the id field.
	 * @var        int
	 */
	protected $id;

	/**
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the host_template field.
	 * @var        int
	 */
	protected $host_template;

	/**
	 * The value for the host field.
	 * @var        int
	 */
	protected $host;

	/**
	 * The value for the hostgroup field.
	 * @var        int
	 */
	protected $hostgroup;

	/**
	 * The value for the service_template field.
	 * @var        int
	 */
	protected $service_template;

	/**
	 * The value for the service field.
	 * @var        int
	 */
	protected $service;

	/**
	 * The value for the first_notification field.
	 * @var        int
	 */
	protected $first_notification;

	/**
	 * The value for the last_notification field.
	 * @var        int
	 */
	protected $last_notification;

	/**
	 * The value for the notification_interval field.
	 * @var        int
	 */
	protected $notification_interval;

	/**
	 * The value for the escalation_period field.
	 * @var        int
	 */
	protected $escalation_period;

	/**
	 * The value for the escalation_options_up field.
	 * @var        boolean
	 */
	protected $escalation_options_up;

	/**
	 * The value for the escalation_options_down field.
	 * @var        boolean
	 */
	protected $escalation_options_down;

	/**
	 * The value for the escalation_options_unreachable field.
	 * @var        boolean
	 */
	protected $escalation_options_unreachable;

	/**
	 * The value for the escalation_options_ok field.
	 * @var        boolean
	 */
	protected $escalation_options_ok;

	/**
	 * The value for the escalation_options_warning field.
	 * @var        boolean
	 */
	protected $escalation_options_warning;

	/**
	 * The value for the escalation_options_unknown field.
	 * @var        boolean
	 */
	protected $escalation_options_unknown;

	/**
	 * The value for the escalation_options_critical field.
	 * @var        boolean
	 */
	protected $escalation_options_critical;

	/**
	 * @var        NagiosHostTemplate
	 */
	protected $aNagiosHostTemplate;

	/**
	 * @var        NagiosHost
	 */
	protected $aNagiosHost;

	/**
	 * @var        NagiosServiceTemplate
	 */
	protected $aNagiosServiceTemplate;

	/**
	 * @var        NagiosService
	 */
	protected $aNagiosService;

	/**
	 * @var        NagiosHostgroup
	 */
	protected $aNagiosHostgroup;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiod;

	/**
	 * @var        array NagiosEscalationContact[] Collection to store aggregation of NagiosEscalationContact objects.
	 */
	protected $collNagiosEscalationContacts;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalationContacts.
	 */
	private $lastNagiosEscalationContactCriteria = null;

	/**
	 * @var        array NagiosEscalationContactgroup[] Collection to store aggregation of NagiosEscalationContactgroup objects.
	 */
	protected $collNagiosEscalationContactgroups;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalationContactgroups.
	 */
	private $lastNagiosEscalationContactgroupCriteria = null;

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
	 * Initializes internal state of BaseNagiosEscalation object.
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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [host_template] column value.
	 * 
	 * @return     int
	 */
	public function getHostTemplate()
	{
		return $this->host_template;
	}

	/**
	 * Get the [host] column value.
	 * 
	 * @return     int
	 */
	public function getHost()
	{
		return $this->host;
	}

	/**
	 * Get the [hostgroup] column value.
	 * 
	 * @return     int
	 */
	public function getHostgroup()
	{
		return $this->hostgroup;
	}

	/**
	 * Get the [service_template] column value.
	 * 
	 * @return     int
	 */
	public function getServiceTemplate()
	{
		return $this->service_template;
	}

	/**
	 * Get the [service] column value.
	 * 
	 * @return     int
	 */
	public function getService()
	{
		return $this->service;
	}

	/**
	 * Get the [first_notification] column value.
	 * 
	 * @return     int
	 */
	public function getFirstNotification()
	{
		return $this->first_notification;
	}

	/**
	 * Get the [last_notification] column value.
	 * 
	 * @return     int
	 */
	public function getLastNotification()
	{
		return $this->last_notification;
	}

	/**
	 * Get the [notification_interval] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationInterval()
	{
		return $this->notification_interval;
	}

	/**
	 * Get the [escalation_period] column value.
	 * 
	 * @return     int
	 */
	public function getEscalationPeriod()
	{
		return $this->escalation_period;
	}

	/**
	 * Get the [escalation_options_up] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsUp()
	{
		return $this->escalation_options_up;
	}

	/**
	 * Get the [escalation_options_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsDown()
	{
		return $this->escalation_options_down;
	}

	/**
	 * Get the [escalation_options_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsUnreachable()
	{
		return $this->escalation_options_unreachable;
	}

	/**
	 * Get the [escalation_options_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsOk()
	{
		return $this->escalation_options_ok;
	}

	/**
	 * Get the [escalation_options_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsWarning()
	{
		return $this->escalation_options_warning;
	}

	/**
	 * Get the [escalation_options_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsUnknown()
	{
		return $this->escalation_options_unknown;
	}

	/**
	 * Get the [escalation_options_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getEscalationOptionsCritical()
	{
		return $this->escalation_options_critical;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [host_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setHostTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host_template !== $v) {
			$this->host_template = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::HOST_TEMPLATE;
		}

		if ($this->aNagiosHostTemplate !== null && $this->aNagiosHostTemplate->getId() !== $v) {
			$this->aNagiosHostTemplate = null;
		}

		return $this;
	} // setHostTemplate()

	/**
	 * Set the value of [host] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setHost($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->host !== $v) {
			$this->host = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::HOST;
		}

		if ($this->aNagiosHost !== null && $this->aNagiosHost->getId() !== $v) {
			$this->aNagiosHost = null;
		}

		return $this;
	} // setHost()

	/**
	 * Set the value of [hostgroup] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setHostgroup($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->hostgroup !== $v) {
			$this->hostgroup = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::HOSTGROUP;
		}

		if ($this->aNagiosHostgroup !== null && $this->aNagiosHostgroup->getId() !== $v) {
			$this->aNagiosHostgroup = null;
		}

		return $this;
	} // setHostgroup()

	/**
	 * Set the value of [service_template] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setServiceTemplate($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service_template !== $v) {
			$this->service_template = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::SERVICE_TEMPLATE;
		}

		if ($this->aNagiosServiceTemplate !== null && $this->aNagiosServiceTemplate->getId() !== $v) {
			$this->aNagiosServiceTemplate = null;
		}

		return $this;
	} // setServiceTemplate()

	/**
	 * Set the value of [service] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setService($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->service !== $v) {
			$this->service = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::SERVICE;
		}

		if ($this->aNagiosService !== null && $this->aNagiosService->getId() !== $v) {
			$this->aNagiosService = null;
		}

		return $this;
	} // setService()

	/**
	 * Set the value of [first_notification] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setFirstNotification($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->first_notification !== $v) {
			$this->first_notification = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::FIRST_NOTIFICATION;
		}

		return $this;
	} // setFirstNotification()

	/**
	 * Set the value of [last_notification] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setLastNotification($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->last_notification !== $v) {
			$this->last_notification = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::LAST_NOTIFICATION;
		}

		return $this;
	} // setLastNotification()

	/**
	 * Set the value of [notification_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setNotificationInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_interval !== $v) {
			$this->notification_interval = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::NOTIFICATION_INTERVAL;
		}

		return $this;
	} // setNotificationInterval()

	/**
	 * Set the value of [escalation_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->escalation_period !== $v) {
			$this->escalation_period = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_PERIOD;
		}

		if ($this->aNagiosTimeperiod !== null && $this->aNagiosTimeperiod->getId() !== $v) {
			$this->aNagiosTimeperiod = null;
		}

		return $this;
	} // setEscalationPeriod()

	/**
	 * Set the value of [escalation_options_up] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsUp($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_up !== $v) {
			$this->escalation_options_up = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_UP;
		}

		return $this;
	} // setEscalationOptionsUp()

	/**
	 * Set the value of [escalation_options_down] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsDown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_down !== $v) {
			$this->escalation_options_down = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_DOWN;
		}

		return $this;
	} // setEscalationOptionsDown()

	/**
	 * Set the value of [escalation_options_unreachable] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsUnreachable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_unreachable !== $v) {
			$this->escalation_options_unreachable = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_UNREACHABLE;
		}

		return $this;
	} // setEscalationOptionsUnreachable()

	/**
	 * Set the value of [escalation_options_ok] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsOk($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_ok !== $v) {
			$this->escalation_options_ok = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_OK;
		}

		return $this;
	} // setEscalationOptionsOk()

	/**
	 * Set the value of [escalation_options_warning] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsWarning($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_warning !== $v) {
			$this->escalation_options_warning = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_WARNING;
		}

		return $this;
	} // setEscalationOptionsWarning()

	/**
	 * Set the value of [escalation_options_unknown] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_unknown !== $v) {
			$this->escalation_options_unknown = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_UNKNOWN;
		}

		return $this;
	} // setEscalationOptionsUnknown()

	/**
	 * Set the value of [escalation_options_critical] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosEscalation The current object (for fluent API support)
	 */
	public function setEscalationOptionsCritical($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->escalation_options_critical !== $v) {
			$this->escalation_options_critical = $v;
			$this->modifiedColumns[] = NagiosEscalationPeer::ESCALATION_OPTIONS_CRITICAL;
		}

		return $this;
	} // setEscalationOptionsCritical()

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
			$this->description = ($row[$startcol + 1] !== null) ? (string) $row[$startcol + 1] : null;
			$this->host_template = ($row[$startcol + 2] !== null) ? (int) $row[$startcol + 2] : null;
			$this->host = ($row[$startcol + 3] !== null) ? (int) $row[$startcol + 3] : null;
			$this->hostgroup = ($row[$startcol + 4] !== null) ? (int) $row[$startcol + 4] : null;
			$this->service_template = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->service = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->first_notification = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->last_notification = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->notification_interval = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->escalation_period = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->escalation_options_up = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->escalation_options_down = ($row[$startcol + 12] !== null) ? (boolean) $row[$startcol + 12] : null;
			$this->escalation_options_unreachable = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->escalation_options_ok = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->escalation_options_warning = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->escalation_options_unknown = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->escalation_options_critical = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 18; // 18 = NagiosEscalationPeer::NUM_COLUMNS - NagiosEscalationPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosEscalation object", $e);
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

		if ($this->aNagiosHostTemplate !== null && $this->host_template !== $this->aNagiosHostTemplate->getId()) {
			$this->aNagiosHostTemplate = null;
		}
		if ($this->aNagiosHost !== null && $this->host !== $this->aNagiosHost->getId()) {
			$this->aNagiosHost = null;
		}
		if ($this->aNagiosHostgroup !== null && $this->hostgroup !== $this->aNagiosHostgroup->getId()) {
			$this->aNagiosHostgroup = null;
		}
		if ($this->aNagiosServiceTemplate !== null && $this->service_template !== $this->aNagiosServiceTemplate->getId()) {
			$this->aNagiosServiceTemplate = null;
		}
		if ($this->aNagiosService !== null && $this->service !== $this->aNagiosService->getId()) {
			$this->aNagiosService = null;
		}
		if ($this->aNagiosTimeperiod !== null && $this->escalation_period !== $this->aNagiosTimeperiod->getId()) {
			$this->aNagiosTimeperiod = null;
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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosEscalationPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosHostTemplate = null;
			$this->aNagiosHost = null;
			$this->aNagiosServiceTemplate = null;
			$this->aNagiosService = null;
			$this->aNagiosHostgroup = null;
			$this->aNagiosTimeperiod = null;
			$this->collNagiosEscalationContacts = null;
			$this->lastNagiosEscalationContactCriteria = null;

			$this->collNagiosEscalationContactgroups = null;
			$this->lastNagiosEscalationContactgroupCriteria = null;

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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosEscalationPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosEscalationPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosEscalationPeer::addInstanceToPool($this);
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

			if ($this->aNagiosHostTemplate !== null) {
				if ($this->aNagiosHostTemplate->isModified() || $this->aNagiosHostTemplate->isNew()) {
					$affectedRows += $this->aNagiosHostTemplate->save($con);
				}
				$this->setNagiosHostTemplate($this->aNagiosHostTemplate);
			}

			if ($this->aNagiosHost !== null) {
				if ($this->aNagiosHost->isModified() || $this->aNagiosHost->isNew()) {
					$affectedRows += $this->aNagiosHost->save($con);
				}
				$this->setNagiosHost($this->aNagiosHost);
			}

			if ($this->aNagiosServiceTemplate !== null) {
				if ($this->aNagiosServiceTemplate->isModified() || $this->aNagiosServiceTemplate->isNew()) {
					$affectedRows += $this->aNagiosServiceTemplate->save($con);
				}
				$this->setNagiosServiceTemplate($this->aNagiosServiceTemplate);
			}

			if ($this->aNagiosService !== null) {
				if ($this->aNagiosService->isModified() || $this->aNagiosService->isNew()) {
					$affectedRows += $this->aNagiosService->save($con);
				}
				$this->setNagiosService($this->aNagiosService);
			}

			if ($this->aNagiosHostgroup !== null) {
				if ($this->aNagiosHostgroup->isModified() || $this->aNagiosHostgroup->isNew()) {
					$affectedRows += $this->aNagiosHostgroup->save($con);
				}
				$this->setNagiosHostgroup($this->aNagiosHostgroup);
			}

			if ($this->aNagiosTimeperiod !== null) {
				if ($this->aNagiosTimeperiod->isModified() || $this->aNagiosTimeperiod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiod->save($con);
				}
				$this->setNagiosTimeperiod($this->aNagiosTimeperiod);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosEscalationPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosEscalationPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosEscalationPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosEscalationContacts !== null) {
				foreach ($this->collNagiosEscalationContacts as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosEscalationContactgroups !== null) {
				foreach ($this->collNagiosEscalationContactgroups as $referrerFK) {
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

			if ($this->aNagiosHostTemplate !== null) {
				if (!$this->aNagiosHostTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosHost !== null) {
				if (!$this->aNagiosHost->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHost->getValidationFailures());
				}
			}

			if ($this->aNagiosServiceTemplate !== null) {
				if (!$this->aNagiosServiceTemplate->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosServiceTemplate->getValidationFailures());
				}
			}

			if ($this->aNagiosService !== null) {
				if (!$this->aNagiosService->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosService->getValidationFailures());
				}
			}

			if ($this->aNagiosHostgroup !== null) {
				if (!$this->aNagiosHostgroup->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosHostgroup->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiod !== null) {
				if (!$this->aNagiosTimeperiod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiod->getValidationFailures());
				}
			}


			if (($retval = NagiosEscalationPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosEscalationContacts !== null) {
					foreach ($this->collNagiosEscalationContacts as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosEscalationContactgroups !== null) {
					foreach ($this->collNagiosEscalationContactgroups as $referrerFK) {
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
		$pos = NagiosEscalationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDescription();
				break;
			case 2:
				return $this->getHostTemplate();
				break;
			case 3:
				return $this->getHost();
				break;
			case 4:
				return $this->getHostgroup();
				break;
			case 5:
				return $this->getServiceTemplate();
				break;
			case 6:
				return $this->getService();
				break;
			case 7:
				return $this->getFirstNotification();
				break;
			case 8:
				return $this->getLastNotification();
				break;
			case 9:
				return $this->getNotificationInterval();
				break;
			case 10:
				return $this->getEscalationPeriod();
				break;
			case 11:
				return $this->getEscalationOptionsUp();
				break;
			case 12:
				return $this->getEscalationOptionsDown();
				break;
			case 13:
				return $this->getEscalationOptionsUnreachable();
				break;
			case 14:
				return $this->getEscalationOptionsOk();
				break;
			case 15:
				return $this->getEscalationOptionsWarning();
				break;
			case 16:
				return $this->getEscalationOptionsUnknown();
				break;
			case 17:
				return $this->getEscalationOptionsCritical();
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
		$keys = NagiosEscalationPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getDescription(),
			$keys[2] => $this->getHostTemplate(),
			$keys[3] => $this->getHost(),
			$keys[4] => $this->getHostgroup(),
			$keys[5] => $this->getServiceTemplate(),
			$keys[6] => $this->getService(),
			$keys[7] => $this->getFirstNotification(),
			$keys[8] => $this->getLastNotification(),
			$keys[9] => $this->getNotificationInterval(),
			$keys[10] => $this->getEscalationPeriod(),
			$keys[11] => $this->getEscalationOptionsUp(),
			$keys[12] => $this->getEscalationOptionsDown(),
			$keys[13] => $this->getEscalationOptionsUnreachable(),
			$keys[14] => $this->getEscalationOptionsOk(),
			$keys[15] => $this->getEscalationOptionsWarning(),
			$keys[16] => $this->getEscalationOptionsUnknown(),
			$keys[17] => $this->getEscalationOptionsCritical(),
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
		$pos = NagiosEscalationPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDescription($value);
				break;
			case 2:
				$this->setHostTemplate($value);
				break;
			case 3:
				$this->setHost($value);
				break;
			case 4:
				$this->setHostgroup($value);
				break;
			case 5:
				$this->setServiceTemplate($value);
				break;
			case 6:
				$this->setService($value);
				break;
			case 7:
				$this->setFirstNotification($value);
				break;
			case 8:
				$this->setLastNotification($value);
				break;
			case 9:
				$this->setNotificationInterval($value);
				break;
			case 10:
				$this->setEscalationPeriod($value);
				break;
			case 11:
				$this->setEscalationOptionsUp($value);
				break;
			case 12:
				$this->setEscalationOptionsDown($value);
				break;
			case 13:
				$this->setEscalationOptionsUnreachable($value);
				break;
			case 14:
				$this->setEscalationOptionsOk($value);
				break;
			case 15:
				$this->setEscalationOptionsWarning($value);
				break;
			case 16:
				$this->setEscalationOptionsUnknown($value);
				break;
			case 17:
				$this->setEscalationOptionsCritical($value);
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
		$keys = NagiosEscalationPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setDescription($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setHostTemplate($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setHost($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setHostgroup($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setServiceTemplate($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setService($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setFirstNotification($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setLastNotification($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setNotificationInterval($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setEscalationPeriod($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setEscalationOptionsUp($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setEscalationOptionsDown($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setEscalationOptionsUnreachable($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setEscalationOptionsOk($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setEscalationOptionsWarning($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setEscalationOptionsUnknown($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setEscalationOptionsCritical($arr[$keys[17]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosEscalationPeer::ID)) $criteria->add(NagiosEscalationPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosEscalationPeer::DESCRIPTION)) $criteria->add(NagiosEscalationPeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(NagiosEscalationPeer::HOST_TEMPLATE)) $criteria->add(NagiosEscalationPeer::HOST_TEMPLATE, $this->host_template);
		if ($this->isColumnModified(NagiosEscalationPeer::HOST)) $criteria->add(NagiosEscalationPeer::HOST, $this->host);
		if ($this->isColumnModified(NagiosEscalationPeer::HOSTGROUP)) $criteria->add(NagiosEscalationPeer::HOSTGROUP, $this->hostgroup);
		if ($this->isColumnModified(NagiosEscalationPeer::SERVICE_TEMPLATE)) $criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->service_template);
		if ($this->isColumnModified(NagiosEscalationPeer::SERVICE)) $criteria->add(NagiosEscalationPeer::SERVICE, $this->service);
		if ($this->isColumnModified(NagiosEscalationPeer::FIRST_NOTIFICATION)) $criteria->add(NagiosEscalationPeer::FIRST_NOTIFICATION, $this->first_notification);
		if ($this->isColumnModified(NagiosEscalationPeer::LAST_NOTIFICATION)) $criteria->add(NagiosEscalationPeer::LAST_NOTIFICATION, $this->last_notification);
		if ($this->isColumnModified(NagiosEscalationPeer::NOTIFICATION_INTERVAL)) $criteria->add(NagiosEscalationPeer::NOTIFICATION_INTERVAL, $this->notification_interval);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_PERIOD)) $criteria->add(NagiosEscalationPeer::ESCALATION_PERIOD, $this->escalation_period);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_UP)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_UP, $this->escalation_options_up);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_DOWN)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_DOWN, $this->escalation_options_down);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_UNREACHABLE)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_UNREACHABLE, $this->escalation_options_unreachable);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_OK)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_OK, $this->escalation_options_ok);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_WARNING)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_WARNING, $this->escalation_options_warning);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_UNKNOWN)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_UNKNOWN, $this->escalation_options_unknown);
		if ($this->isColumnModified(NagiosEscalationPeer::ESCALATION_OPTIONS_CRITICAL)) $criteria->add(NagiosEscalationPeer::ESCALATION_OPTIONS_CRITICAL, $this->escalation_options_critical);

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
		$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);

		$criteria->add(NagiosEscalationPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosEscalation (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setDescription($this->description);

		$copyObj->setHostTemplate($this->host_template);

		$copyObj->setHost($this->host);

		$copyObj->setHostgroup($this->hostgroup);

		$copyObj->setServiceTemplate($this->service_template);

		$copyObj->setService($this->service);

		$copyObj->setFirstNotification($this->first_notification);

		$copyObj->setLastNotification($this->last_notification);

		$copyObj->setNotificationInterval($this->notification_interval);

		$copyObj->setEscalationPeriod($this->escalation_period);

		$copyObj->setEscalationOptionsUp($this->escalation_options_up);

		$copyObj->setEscalationOptionsDown($this->escalation_options_down);

		$copyObj->setEscalationOptionsUnreachable($this->escalation_options_unreachable);

		$copyObj->setEscalationOptionsOk($this->escalation_options_ok);

		$copyObj->setEscalationOptionsWarning($this->escalation_options_warning);

		$copyObj->setEscalationOptionsUnknown($this->escalation_options_unknown);

		$copyObj->setEscalationOptionsCritical($this->escalation_options_critical);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosEscalationContacts() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalationContact($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalationContactgroups() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalationContactgroup($relObj->copy($deepCopy));
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
	 * @return     NagiosEscalation Clone of current object.
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
	 * @return     NagiosEscalationPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosEscalationPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosHostTemplate object.
	 *
	 * @param      NagiosHostTemplate $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostTemplate(NagiosHostTemplate $v = null)
	{
		if ($v === null) {
			$this->setHostTemplate(NULL);
		} else {
			$this->setHostTemplate($v->getId());
		}

		$this->aNagiosHostTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostTemplate The associated NagiosHostTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosHostTemplate === null && ($this->host_template !== null)) {
			$c = new Criteria(NagiosHostTemplatePeer::DATABASE_NAME);
			$c->add(NagiosHostTemplatePeer::ID, $this->host_template);
			$this->aNagiosHostTemplate = NagiosHostTemplatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHostTemplate->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosHostTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosHost object.
	 *
	 * @param      NagiosHost $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHost(NagiosHost $v = null)
	{
		if ($v === null) {
			$this->setHost(NULL);
		} else {
			$this->setHost($v->getId());
		}

		$this->aNagiosHost = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHost object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHost object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHost The associated NagiosHost object.
	 * @throws     PropelException
	 */
	public function getNagiosHost(PropelPDO $con = null)
	{
		if ($this->aNagiosHost === null && ($this->host !== null)) {
			$c = new Criteria(NagiosHostPeer::DATABASE_NAME);
			$c->add(NagiosHostPeer::ID, $this->host);
			$this->aNagiosHost = NagiosHostPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHost->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosHost;
	}

	/**
	 * Declares an association between this object and a NagiosServiceTemplate object.
	 *
	 * @param      NagiosServiceTemplate $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosServiceTemplate(NagiosServiceTemplate $v = null)
	{
		if ($v === null) {
			$this->setServiceTemplate(NULL);
		} else {
			$this->setServiceTemplate($v->getId());
		}

		$this->aNagiosServiceTemplate = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosServiceTemplate object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosServiceTemplate object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosServiceTemplate The associated NagiosServiceTemplate object.
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplate(PropelPDO $con = null)
	{
		if ($this->aNagiosServiceTemplate === null && ($this->service_template !== null)) {
			$c = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
			$c->add(NagiosServiceTemplatePeer::ID, $this->service_template);
			$this->aNagiosServiceTemplate = NagiosServiceTemplatePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosServiceTemplate->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosServiceTemplate;
	}

	/**
	 * Declares an association between this object and a NagiosService object.
	 *
	 * @param      NagiosService $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosService(NagiosService $v = null)
	{
		if ($v === null) {
			$this->setService(NULL);
		} else {
			$this->setService($v->getId());
		}

		$this->aNagiosService = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosService object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosService object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosService The associated NagiosService object.
	 * @throws     PropelException
	 */
	public function getNagiosService(PropelPDO $con = null)
	{
		if ($this->aNagiosService === null && ($this->service !== null)) {
			$c = new Criteria(NagiosServicePeer::DATABASE_NAME);
			$c->add(NagiosServicePeer::ID, $this->service);
			$this->aNagiosService = NagiosServicePeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosService->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosService;
	}

	/**
	 * Declares an association between this object and a NagiosHostgroup object.
	 *
	 * @param      NagiosHostgroup $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosHostgroup(NagiosHostgroup $v = null)
	{
		if ($v === null) {
			$this->setHostgroup(NULL);
		} else {
			$this->setHostgroup($v->getId());
		}

		$this->aNagiosHostgroup = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosHostgroup object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosHostgroup object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosHostgroup The associated NagiosHostgroup object.
	 * @throws     PropelException
	 */
	public function getNagiosHostgroup(PropelPDO $con = null)
	{
		if ($this->aNagiosHostgroup === null && ($this->hostgroup !== null)) {
			$c = new Criteria(NagiosHostgroupPeer::DATABASE_NAME);
			$c->add(NagiosHostgroupPeer::ID, $this->hostgroup);
			$this->aNagiosHostgroup = NagiosHostgroupPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosHostgroup->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosHostgroup;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosEscalation The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setEscalationPeriod(NULL);
		} else {
			$this->setEscalationPeriod($v->getId());
		}

		$this->aNagiosTimeperiod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosEscalation($this);
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
	public function getNagiosTimeperiod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiod === null && ($this->escalation_period !== null)) {
			$c = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$c->add(NagiosTimeperiodPeer::ID, $this->escalation_period);
			$this->aNagiosTimeperiod = NagiosTimeperiodPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosTimeperiod->addNagiosEscalations($this);
			 */
		}
		return $this->aNagiosTimeperiod;
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
	 * Otherwise if this NagiosEscalation has previously been saved, it will retrieve
	 * related NagiosEscalationContacts from storage. If this NagiosEscalation is new, it will return
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
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContacts === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalationContacts = array();
			} else {

				$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

				NagiosEscalationContactPeer::addSelectColumns($criteria);
				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

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
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
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

				$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

				$count = NagiosEscalationContactPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

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
			$l->setNagiosEscalation($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosEscalation is new, it will return
	 * an empty collection; or if this NagiosEscalation has previously
	 * been saved, it will retrieve related NagiosEscalationContacts from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosEscalation.
	 */
	public function getNagiosEscalationContactsJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContacts === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalationContacts = array();
			} else {

				$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationContactPeer::ESCALATION, $this->id);

			if (!isset($this->lastNagiosEscalationContactCriteria) || !$this->lastNagiosEscalationContactCriteria->equals($criteria)) {
				$this->collNagiosEscalationContacts = NagiosEscalationContactPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationContactCriteria = $criteria;

		return $this->collNagiosEscalationContacts;
	}

	/**
	 * Clears out the collNagiosEscalationContactgroups collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosEscalationContactgroups()
	 */
	public function clearNagiosEscalationContactgroups()
	{
		$this->collNagiosEscalationContactgroups = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosEscalationContactgroups collection (array).
	 *
	 * By default this just sets the collNagiosEscalationContactgroups collection to an empty array (like clearcollNagiosEscalationContactgroups());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosEscalationContactgroups()
	{
		$this->collNagiosEscalationContactgroups = array();
	}

	/**
	 * Gets an array of NagiosEscalationContactgroup objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosEscalation has previously been saved, it will retrieve
	 * related NagiosEscalationContactgroups from storage. If this NagiosEscalation is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosEscalationContactgroup[]
	 * @throws     PropelException
	 */
	public function getNagiosEscalationContactgroups($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContactgroups === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalationContactgroups = array();
			} else {

				$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

				NagiosEscalationContactgroupPeer::addSelectColumns($criteria);
				$this->collNagiosEscalationContactgroups = NagiosEscalationContactgroupPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

				NagiosEscalationContactgroupPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosEscalationContactgroupCriteria) || !$this->lastNagiosEscalationContactgroupCriteria->equals($criteria)) {
					$this->collNagiosEscalationContactgroups = NagiosEscalationContactgroupPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosEscalationContactgroupCriteria = $criteria;
		return $this->collNagiosEscalationContactgroups;
	}

	/**
	 * Returns the number of related NagiosEscalationContactgroup objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosEscalationContactgroup objects.
	 * @throws     PropelException
	 */
	public function countNagiosEscalationContactgroups(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosEscalationContactgroups === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

				$count = NagiosEscalationContactgroupPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

				if (!isset($this->lastNagiosEscalationContactgroupCriteria) || !$this->lastNagiosEscalationContactgroupCriteria->equals($criteria)) {
					$count = NagiosEscalationContactgroupPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosEscalationContactgroups);
				}
			} else {
				$count = count($this->collNagiosEscalationContactgroups);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosEscalationContactgroup object to this object
	 * through the NagiosEscalationContactgroup foreign key attribute.
	 *
	 * @param      NagiosEscalationContactgroup $l NagiosEscalationContactgroup
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosEscalationContactgroup(NagiosEscalationContactgroup $l)
	{
		if ($this->collNagiosEscalationContactgroups === null) {
			$this->initNagiosEscalationContactgroups();
		}
		if (!in_array($l, $this->collNagiosEscalationContactgroups, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosEscalationContactgroups, $l);
			$l->setNagiosEscalation($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosEscalation is new, it will return
	 * an empty collection; or if this NagiosEscalation has previously
	 * been saved, it will retrieve related NagiosEscalationContactgroups from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosEscalation.
	 */
	public function getNagiosEscalationContactgroupsJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosEscalationPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalationContactgroups === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalationContactgroups = array();
			} else {

				$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

				$this->collNagiosEscalationContactgroups = NagiosEscalationContactgroupPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationContactgroupPeer::ESCALATION, $this->id);

			if (!isset($this->lastNagiosEscalationContactgroupCriteria) || !$this->lastNagiosEscalationContactgroupCriteria->equals($criteria)) {
				$this->collNagiosEscalationContactgroups = NagiosEscalationContactgroupPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationContactgroupCriteria = $criteria;

		return $this->collNagiosEscalationContactgroups;
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
			if ($this->collNagiosEscalationContacts) {
				foreach ((array) $this->collNagiosEscalationContacts as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalationContactgroups) {
				foreach ((array) $this->collNagiosEscalationContactgroups as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNagiosEscalationContacts = null;
		$this->collNagiosEscalationContactgroups = null;
			$this->aNagiosHostTemplate = null;
			$this->aNagiosHost = null;
			$this->aNagiosServiceTemplate = null;
			$this->aNagiosService = null;
			$this->aNagiosHostgroup = null;
			$this->aNagiosTimeperiod = null;
	}

} // BaseNagiosEscalation
