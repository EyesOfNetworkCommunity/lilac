<?php

/**
 * Base class that represents a row from the 'nagios_service_template' table.
 *
 * Nagios Service Template
 *
 * @package    .om
 */
abstract class BaseNagiosServiceTemplate extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosServiceTemplatePeer
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
	 * The value for the description field.
	 * @var        string
	 */
	protected $description;

	/**
	 * The value for the initial_state field.
	 * @var        string
	 */
	protected $initial_state;

	/**
	 * The value for the is_volatile field.
	 * @var        boolean
	 */
	protected $is_volatile;

	/**
	 * The value for the check_command field.
	 * @var        int
	 */
	protected $check_command;

	/**
	 * The value for the maximum_check_attempts field.
	 * @var        int
	 */
	protected $maximum_check_attempts;

	/**
	 * The value for the normal_check_interval field.
	 * @var        int
	 */
	protected $normal_check_interval;

	/**
	 * The value for the retry_interval field.
	 * @var        int
	 */
	protected $retry_interval;

	/**
	 * The value for the first_notification_delay field.
	 * @var        int
	 */
	protected $first_notification_delay;

	/**
	 * The value for the active_checks_enabled field.
	 * @var        boolean
	 */
	protected $active_checks_enabled;

	/**
	 * The value for the passive_checks_enabled field.
	 * @var        boolean
	 */
	protected $passive_checks_enabled;

	/**
	 * The value for the check_period field.
	 * @var        int
	 */
	protected $check_period;

	/**
	 * The value for the parallelize_check field.
	 * @var        boolean
	 */
	protected $parallelize_check;

	/**
	 * The value for the obsess_over_service field.
	 * @var        boolean
	 */
	protected $obsess_over_service;

	/**
	 * The value for the check_freshness field.
	 * @var        boolean
	 */
	protected $check_freshness;

	/**
	 * The value for the freshness_threshold field.
	 * @var        int
	 */
	protected $freshness_threshold;

	/**
	 * The value for the event_handler field.
	 * @var        int
	 */
	protected $event_handler;

	/**
	 * The value for the event_handler_enabled field.
	 * @var        boolean
	 */
	protected $event_handler_enabled;

	/**
	 * The value for the low_flap_threshold field.
	 * @var        int
	 */
	protected $low_flap_threshold;

	/**
	 * The value for the high_flap_threshold field.
	 * @var        int
	 */
	protected $high_flap_threshold;

	/**
	 * The value for the flap_detection_enabled field.
	 * @var        boolean
	 */
	protected $flap_detection_enabled;

	/**
	 * The value for the flap_detection_on_ok field.
	 * @var        boolean
	 */
	protected $flap_detection_on_ok;

	/**
	 * The value for the flap_detection_on_warning field.
	 * @var        boolean
	 */
	protected $flap_detection_on_warning;

	/**
	 * The value for the flap_detection_on_critical field.
	 * @var        boolean
	 */
	protected $flap_detection_on_critical;

	/**
	 * The value for the flap_detection_on_unknown field.
	 * @var        boolean
	 */
	protected $flap_detection_on_unknown;

	/**
	 * The value for the process_perf_data field.
	 * @var        boolean
	 */
	protected $process_perf_data;

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
	 * The value for the notification_interval field.
	 * @var        int
	 */
	protected $notification_interval;

	/**
	 * The value for the notification_period field.
	 * @var        int
	 */
	protected $notification_period;

	/**
	 * The value for the notification_on_warning field.
	 * @var        boolean
	 */
	protected $notification_on_warning;

	/**
	 * The value for the notification_on_unknown field.
	 * @var        boolean
	 */
	protected $notification_on_unknown;

	/**
	 * The value for the notification_on_critical field.
	 * @var        boolean
	 */
	protected $notification_on_critical;

	/**
	 * The value for the notification_on_recovery field.
	 * @var        boolean
	 */
	protected $notification_on_recovery;

	/**
	 * The value for the notification_on_flapping field.
	 * @var        boolean
	 */
	protected $notification_on_flapping;

	/**
	 * The value for the notification_on_scheduled_downtime field.
	 * @var        boolean
	 */
	protected $notification_on_scheduled_downtime;

	/**
	 * The value for the notifications_enabled field.
	 * @var        boolean
	 */
	protected $notifications_enabled;

	/**
	 * The value for the stalking_on_ok field.
	 * @var        boolean
	 */
	protected $stalking_on_ok;

	/**
	 * The value for the stalking_on_warning field.
	 * @var        boolean
	 */
	protected $stalking_on_warning;

	/**
	 * The value for the stalking_on_unknown field.
	 * @var        boolean
	 */
	protected $stalking_on_unknown;

	/**
	 * The value for the stalking_on_critical field.
	 * @var        boolean
	 */
	protected $stalking_on_critical;

	/**
	 * The value for the failure_prediction_enabled field.
	 * @var        boolean
	 */
	protected $failure_prediction_enabled;

	/**
	 * The value for the notes field.
	 * @var        string
	 */
	protected $notes;

	/**
	 * The value for the notes_url field.
	 * @var        string
	 */
	protected $notes_url;

	/**
	 * The value for the action_url field.
	 * @var        string
	 */
	protected $action_url;

	/**
	 * The value for the icon_image field.
	 * @var        string
	 */
	protected $icon_image;

	/**
	 * The value for the icon_image_alt field.
	 * @var        string
	 */
	protected $icon_image_alt;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByCheckCommand;

	/**
	 * @var        NagiosCommand
	 */
	protected $aNagiosCommandRelatedByEventHandler;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByCheckPeriod;

	/**
	 * @var        NagiosTimeperiod
	 */
	protected $aNagiosTimeperiodRelatedByNotificationPeriod;

	/**
	 * @var        array NagiosServiceCheckCommandParameter[] Collection to store aggregation of NagiosServiceCheckCommandParameter objects.
	 */
	protected $collNagiosServiceCheckCommandParameters;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceCheckCommandParameters.
	 */
	private $lastNagiosServiceCheckCommandParameterCriteria = null;

	/**
	 * @var        array NagiosServiceGroupMember[] Collection to store aggregation of NagiosServiceGroupMember objects.
	 */
	protected $collNagiosServiceGroupMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceGroupMembers.
	 */
	private $lastNagiosServiceGroupMemberCriteria = null;

	/**
	 * @var        array NagiosServiceContactMember[] Collection to store aggregation of NagiosServiceContactMember objects.
	 */
	protected $collNagiosServiceContactMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceContactMembers.
	 */
	private $lastNagiosServiceContactMemberCriteria = null;

	/**
	 * @var        array NagiosServiceContactGroupMember[] Collection to store aggregation of NagiosServiceContactGroupMember objects.
	 */
	protected $collNagiosServiceContactGroupMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceContactGroupMembers.
	 */
	private $lastNagiosServiceContactGroupMemberCriteria = null;

	/**
	 * @var        array NagiosDependency[] Collection to store aggregation of NagiosDependency objects.
	 */
	protected $collNagiosDependencys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosDependencys.
	 */
	private $lastNagiosDependencyCriteria = null;

	/**
	 * @var        array NagiosEscalation[] Collection to store aggregation of NagiosEscalation objects.
	 */
	protected $collNagiosEscalations;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalations.
	 */
	private $lastNagiosEscalationCriteria = null;

	/**
	 * @var        array NagiosServiceTemplateInheritance[] Collection to store aggregation of NagiosServiceTemplateInheritance objects.
	 */
	protected $collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplateInheritancesRelatedBySourceTemplate.
	 */
	private $lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria = null;

	/**
	 * @var        array NagiosServiceTemplateInheritance[] Collection to store aggregation of NagiosServiceTemplateInheritance objects.
	 */
	protected $collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServiceTemplateInheritancesRelatedByTargetTemplate.
	 */
	private $lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria = null;

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
	 * Initializes internal state of BaseNagiosServiceTemplate object.
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
	 * Get the [description] column value.
	 * 
	 * @return     string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Get the [initial_state] column value.
	 * 
	 * @return     string
	 */
	public function getInitialState()
	{
		return $this->initial_state;
	}

	/**
	 * Get the [is_volatile] column value.
	 * 
	 * @return     boolean
	 */
	public function getIsVolatile()
	{
		return $this->is_volatile;
	}

	/**
	 * Get the [check_command] column value.
	 * 
	 * @return     int
	 */
	public function getCheckCommand()
	{
		return $this->check_command;
	}

	/**
	 * Get the [maximum_check_attempts] column value.
	 * 
	 * @return     int
	 */
	public function getMaximumCheckAttempts()
	{
		return $this->maximum_check_attempts;
	}

	/**
	 * Get the [normal_check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getNormalCheckInterval()
	{
		return $this->normal_check_interval;
	}

	/**
	 * Get the [retry_interval] column value.
	 * 
	 * @return     int
	 */
	public function getRetryInterval()
	{
		return $this->retry_interval;
	}

	/**
	 * Get the [first_notification_delay] column value.
	 * 
	 * @return     int
	 */
	public function getFirstNotificationDelay()
	{
		return $this->first_notification_delay;
	}

	/**
	 * Get the [active_checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getActiveChecksEnabled()
	{
		return $this->active_checks_enabled;
	}

	/**
	 * Get the [passive_checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getPassiveChecksEnabled()
	{
		return $this->passive_checks_enabled;
	}

	/**
	 * Get the [check_period] column value.
	 * 
	 * @return     int
	 */
	public function getCheckPeriod()
	{
		return $this->check_period;
	}

	/**
	 * Get the [parallelize_check] column value.
	 * 
	 * @return     boolean
	 */
	public function getParallelizeCheck()
	{
		return $this->parallelize_check;
	}

	/**
	 * Get the [obsess_over_service] column value.
	 * 
	 * @return     boolean
	 */
	public function getObsessOverService()
	{
		return $this->obsess_over_service;
	}

	/**
	 * Get the [check_freshness] column value.
	 * 
	 * @return     boolean
	 */
	public function getCheckFreshness()
	{
		return $this->check_freshness;
	}

	/**
	 * Get the [freshness_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getFreshnessThreshold()
	{
		return $this->freshness_threshold;
	}

	/**
	 * Get the [event_handler] column value.
	 * 
	 * @return     int
	 */
	public function getEventHandler()
	{
		return $this->event_handler;
	}

	/**
	 * Get the [event_handler_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getEventHandlerEnabled()
	{
		return $this->event_handler_enabled;
	}

	/**
	 * Get the [low_flap_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getLowFlapThreshold()
	{
		return $this->low_flap_threshold;
	}

	/**
	 * Get the [high_flap_threshold] column value.
	 * 
	 * @return     int
	 */
	public function getHighFlapThreshold()
	{
		return $this->high_flap_threshold;
	}

	/**
	 * Get the [flap_detection_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionEnabled()
	{
		return $this->flap_detection_enabled;
	}

	/**
	 * Get the [flap_detection_on_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnOk()
	{
		return $this->flap_detection_on_ok;
	}

	/**
	 * Get the [flap_detection_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnWarning()
	{
		return $this->flap_detection_on_warning;
	}

	/**
	 * Get the [flap_detection_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnCritical()
	{
		return $this->flap_detection_on_critical;
	}

	/**
	 * Get the [flap_detection_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnUnknown()
	{
		return $this->flap_detection_on_unknown;
	}

	/**
	 * Get the [process_perf_data] column value.
	 * 
	 * @return     boolean
	 */
	public function getProcessPerfData()
	{
		return $this->process_perf_data;
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
	 * Get the [notification_interval] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationInterval()
	{
		return $this->notification_interval;
	}

	/**
	 * Get the [notification_period] column value.
	 * 
	 * @return     int
	 */
	public function getNotificationPeriod()
	{
		return $this->notification_period;
	}

	/**
	 * Get the [notification_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnWarning()
	{
		return $this->notification_on_warning;
	}

	/**
	 * Get the [notification_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnUnknown()
	{
		return $this->notification_on_unknown;
	}

	/**
	 * Get the [notification_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnCritical()
	{
		return $this->notification_on_critical;
	}

	/**
	 * Get the [notification_on_recovery] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnRecovery()
	{
		return $this->notification_on_recovery;
	}

	/**
	 * Get the [notification_on_flapping] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnFlapping()
	{
		return $this->notification_on_flapping;
	}

	/**
	 * Get the [notification_on_scheduled_downtime] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnScheduledDowntime()
	{
		return $this->notification_on_scheduled_downtime;
	}

	/**
	 * Get the [notifications_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationsEnabled()
	{
		return $this->notifications_enabled;
	}

	/**
	 * Get the [stalking_on_ok] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnOk()
	{
		return $this->stalking_on_ok;
	}

	/**
	 * Get the [stalking_on_warning] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnWarning()
	{
		return $this->stalking_on_warning;
	}

	/**
	 * Get the [stalking_on_unknown] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnUnknown()
	{
		return $this->stalking_on_unknown;
	}

	/**
	 * Get the [stalking_on_critical] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnCritical()
	{
		return $this->stalking_on_critical;
	}

	/**
	 * Get the [failure_prediction_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getFailurePredictionEnabled()
	{
		return $this->failure_prediction_enabled;
	}

	/**
	 * Get the [notes] column value.
	 * 
	 * @return     string
	 */
	public function getNotes()
	{
		return $this->notes;
	}

	/**
	 * Get the [notes_url] column value.
	 * 
	 * @return     string
	 */
	public function getNotesUrl()
	{
		return $this->notes_url;
	}

	/**
	 * Get the [action_url] column value.
	 * 
	 * @return     string
	 */
	public function getActionUrl()
	{
		return $this->action_url;
	}

	/**
	 * Get the [icon_image] column value.
	 * 
	 * @return     string
	 */
	public function getIconImage()
	{
		return $this->icon_image;
	}

	/**
	 * Get the [icon_image_alt] column value.
	 * 
	 * @return     string
	 */
	public function getIconImageAlt()
	{
		return $this->icon_image_alt;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [description] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setDescription($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->description !== $v) {
			$this->description = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::DESCRIPTION;
		}

		return $this;
	} // setDescription()

	/**
	 * Set the value of [initial_state] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setInitialState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->initial_state !== $v) {
			$this->initial_state = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::INITIAL_STATE;
		}

		return $this;
	} // setInitialState()

	/**
	 * Set the value of [is_volatile] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIsVolatile($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->is_volatile !== $v) {
			$this->is_volatile = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::IS_VOLATILE;
		}

		return $this;
	} // setIsVolatile()

	/**
	 * Set the value of [check_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_command !== $v) {
			$this->check_command = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByCheckCommand !== null && $this->aNagiosCommandRelatedByCheckCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByCheckCommand = null;
		}

		return $this;
	} // setCheckCommand()

	/**
	 * Set the value of [maximum_check_attempts] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setMaximumCheckAttempts($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->maximum_check_attempts !== $v) {
			$this->maximum_check_attempts = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS;
		}

		return $this;
	} // setMaximumCheckAttempts()

	/**
	 * Set the value of [normal_check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNormalCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->normal_check_interval !== $v) {
			$this->normal_check_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL;
		}

		return $this;
	} // setNormalCheckInterval()

	/**
	 * Set the value of [retry_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetryInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retry_interval !== $v) {
			$this->retry_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETRY_INTERVAL;
		}

		return $this;
	} // setRetryInterval()

	/**
	 * Set the value of [first_notification_delay] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFirstNotificationDelay($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->first_notification_delay !== $v) {
			$this->first_notification_delay = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY;
		}

		return $this;
	} // setFirstNotificationDelay()

	/**
	 * Set the value of [active_checks_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setActiveChecksEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->active_checks_enabled !== $v) {
			$this->active_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setActiveChecksEnabled()

	/**
	 * Set the value of [passive_checks_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setPassiveChecksEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->passive_checks_enabled !== $v) {
			$this->passive_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setPassiveChecksEnabled()

	/**
	 * Set the value of [check_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_period !== $v) {
			$this->check_period = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null && $this->aNagiosTimeperiodRelatedByCheckPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		}

		return $this;
	} // setCheckPeriod()

	/**
	 * Set the value of [parallelize_check] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setParallelizeCheck($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->parallelize_check !== $v) {
			$this->parallelize_check = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PARALLELIZE_CHECK;
		}

		return $this;
	} // setParallelizeCheck()

	/**
	 * Set the value of [obsess_over_service] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setObsessOverService($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->obsess_over_service !== $v) {
			$this->obsess_over_service = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE;
		}

		return $this;
	} // setObsessOverService()

	/**
	 * Set the value of [check_freshness] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setCheckFreshness($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_freshness !== $v) {
			$this->check_freshness = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::CHECK_FRESHNESS;
		}

		return $this;
	} // setCheckFreshness()

	/**
	 * Set the value of [freshness_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFreshnessThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->freshness_threshold !== $v) {
			$this->freshness_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD;
		}

		return $this;
	} // setFreshnessThreshold()

	/**
	 * Set the value of [event_handler] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setEventHandler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->event_handler !== $v) {
			$this->event_handler = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::EVENT_HANDLER;
		}

		if ($this->aNagiosCommandRelatedByEventHandler !== null && $this->aNagiosCommandRelatedByEventHandler->getId() !== $v) {
			$this->aNagiosCommandRelatedByEventHandler = null;
		}

		return $this;
	} // setEventHandler()

	/**
	 * Set the value of [event_handler_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setEventHandlerEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->event_handler_enabled !== $v) {
			$this->event_handler_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED;
		}

		return $this;
	} // setEventHandlerEnabled()

	/**
	 * Set the value of [low_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setLowFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->low_flap_threshold !== $v) {
			$this->low_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD;
		}

		return $this;
	} // setLowFlapThreshold()

	/**
	 * Set the value of [high_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setHighFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->high_flap_threshold !== $v) {
			$this->high_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD;
		}

		return $this;
	} // setHighFlapThreshold()

	/**
	 * Set the value of [flap_detection_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_enabled !== $v) {
			$this->flap_detection_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED;
		}

		return $this;
	} // setFlapDetectionEnabled()

	/**
	 * Set the value of [flap_detection_on_ok] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnOk($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_ok !== $v) {
			$this->flap_detection_on_ok = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK;
		}

		return $this;
	} // setFlapDetectionOnOk()

	/**
	 * Set the value of [flap_detection_on_warning] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnWarning($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_warning !== $v) {
			$this->flap_detection_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING;
		}

		return $this;
	} // setFlapDetectionOnWarning()

	/**
	 * Set the value of [flap_detection_on_critical] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnCritical($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_critical !== $v) {
			$this->flap_detection_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL;
		}

		return $this;
	} // setFlapDetectionOnCritical()

	/**
	 * Set the value of [flap_detection_on_unknown] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFlapDetectionOnUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_unknown !== $v) {
			$this->flap_detection_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN;
		}

		return $this;
	} // setFlapDetectionOnUnknown()

	/**
	 * Set the value of [process_perf_data] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setProcessPerfData($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->process_perf_data !== $v) {
			$this->process_perf_data = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::PROCESS_PERF_DATA;
		}

		return $this;
	} // setProcessPerfData()

	/**
	 * Set the value of [retain_status_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetainStatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_status_information !== $v) {
			$this->retain_status_information = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION;
		}

		return $this;
	} // setRetainStatusInformation()

	/**
	 * Set the value of [retain_nonstatus_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setRetainNonstatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_nonstatus_information !== $v) {
			$this->retain_nonstatus_information = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION;
		}

		return $this;
	} // setRetainNonstatusInformation()

	/**
	 * Set the value of [notification_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_interval !== $v) {
			$this->notification_interval = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL;
		}

		return $this;
	} // setNotificationInterval()

	/**
	 * Set the value of [notification_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_period !== $v) {
			$this->notification_period = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null && $this->aNagiosTimeperiodRelatedByNotificationPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
		}

		return $this;
	} // setNotificationPeriod()

	/**
	 * Set the value of [notification_on_warning] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnWarning($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_warning !== $v) {
			$this->notification_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING;
		}

		return $this;
	} // setNotificationOnWarning()

	/**
	 * Set the value of [notification_on_unknown] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_unknown !== $v) {
			$this->notification_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN;
		}

		return $this;
	} // setNotificationOnUnknown()

	/**
	 * Set the value of [notification_on_critical] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnCritical($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_critical !== $v) {
			$this->notification_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL;
		}

		return $this;
	} // setNotificationOnCritical()

	/**
	 * Set the value of [notification_on_recovery] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnRecovery($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_recovery !== $v) {
			$this->notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setNotificationOnRecovery()

	/**
	 * Set the value of [notification_on_flapping] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnFlapping($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_flapping !== $v) {
			$this->notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setNotificationOnFlapping()

	/**
	 * Set the value of [notification_on_scheduled_downtime] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationOnScheduledDowntime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_scheduled_downtime !== $v) {
			$this->notification_on_scheduled_downtime = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME;
		}

		return $this;
	} // setNotificationOnScheduledDowntime()

	/**
	 * Set the value of [notifications_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotificationsEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notifications_enabled !== $v) {
			$this->notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setNotificationsEnabled()

	/**
	 * Set the value of [stalking_on_ok] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnOk($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_ok !== $v) {
			$this->stalking_on_ok = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_OK;
		}

		return $this;
	} // setStalkingOnOk()

	/**
	 * Set the value of [stalking_on_warning] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnWarning($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_warning !== $v) {
			$this->stalking_on_warning = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_WARNING;
		}

		return $this;
	} // setStalkingOnWarning()

	/**
	 * Set the value of [stalking_on_unknown] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnUnknown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_unknown !== $v) {
			$this->stalking_on_unknown = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN;
		}

		return $this;
	} // setStalkingOnUnknown()

	/**
	 * Set the value of [stalking_on_critical] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setStalkingOnCritical($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_critical !== $v) {
			$this->stalking_on_critical = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::STALKING_ON_CRITICAL;
		}

		return $this;
	} // setStalkingOnCritical()

	/**
	 * Set the value of [failure_prediction_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setFailurePredictionEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->failure_prediction_enabled !== $v) {
			$this->failure_prediction_enabled = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED;
		}

		return $this;
	} // setFailurePredictionEnabled()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Set the value of [notes_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setNotesUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes_url !== $v) {
			$this->notes_url = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::NOTES_URL;
		}

		return $this;
	} // setNotesUrl()

	/**
	 * Set the value of [action_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setActionUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_url !== $v) {
			$this->action_url = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ACTION_URL;
		}

		return $this;
	} // setActionUrl()

	/**
	 * Set the value of [icon_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIconImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image !== $v) {
			$this->icon_image = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ICON_IMAGE;
		}

		return $this;
	} // setIconImage()

	/**
	 * Set the value of [icon_image_alt] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 */
	public function setIconImageAlt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image_alt !== $v) {
			$this->icon_image_alt = $v;
			$this->modifiedColumns[] = NagiosServiceTemplatePeer::ICON_IMAGE_ALT;
		}

		return $this;
	} // setIconImageAlt()

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
			$this->description = ($row[$startcol + 2] !== null) ? (string) $row[$startcol + 2] : null;
			$this->initial_state = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->is_volatile = ($row[$startcol + 4] !== null) ? (boolean) $row[$startcol + 4] : null;
			$this->check_command = ($row[$startcol + 5] !== null) ? (int) $row[$startcol + 5] : null;
			$this->maximum_check_attempts = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->normal_check_interval = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->retry_interval = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->first_notification_delay = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->active_checks_enabled = ($row[$startcol + 10] !== null) ? (boolean) $row[$startcol + 10] : null;
			$this->passive_checks_enabled = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->check_period = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->parallelize_check = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->obsess_over_service = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->check_freshness = ($row[$startcol + 15] !== null) ? (boolean) $row[$startcol + 15] : null;
			$this->freshness_threshold = ($row[$startcol + 16] !== null) ? (int) $row[$startcol + 16] : null;
			$this->event_handler = ($row[$startcol + 17] !== null) ? (int) $row[$startcol + 17] : null;
			$this->event_handler_enabled = ($row[$startcol + 18] !== null) ? (boolean) $row[$startcol + 18] : null;
			$this->low_flap_threshold = ($row[$startcol + 19] !== null) ? (int) $row[$startcol + 19] : null;
			$this->high_flap_threshold = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->flap_detection_enabled = ($row[$startcol + 21] !== null) ? (boolean) $row[$startcol + 21] : null;
			$this->flap_detection_on_ok = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->flap_detection_on_warning = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->flap_detection_on_critical = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->flap_detection_on_unknown = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
			$this->process_perf_data = ($row[$startcol + 26] !== null) ? (boolean) $row[$startcol + 26] : null;
			$this->retain_status_information = ($row[$startcol + 27] !== null) ? (boolean) $row[$startcol + 27] : null;
			$this->retain_nonstatus_information = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->notification_interval = ($row[$startcol + 29] !== null) ? (int) $row[$startcol + 29] : null;
			$this->notification_period = ($row[$startcol + 30] !== null) ? (int) $row[$startcol + 30] : null;
			$this->notification_on_warning = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->notification_on_unknown = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
			$this->notification_on_critical = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->notification_on_recovery = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->notification_on_flapping = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->notification_on_scheduled_downtime = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->notifications_enabled = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
			$this->stalking_on_ok = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->stalking_on_warning = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->stalking_on_unknown = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
			$this->stalking_on_critical = ($row[$startcol + 41] !== null) ? (boolean) $row[$startcol + 41] : null;
			$this->failure_prediction_enabled = ($row[$startcol + 42] !== null) ? (boolean) $row[$startcol + 42] : null;
			$this->notes = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
			$this->notes_url = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
			$this->action_url = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
			$this->icon_image = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
			$this->icon_image_alt = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 48; // 48 = NagiosServiceTemplatePeer::NUM_COLUMNS - NagiosServiceTemplatePeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosServiceTemplate object", $e);
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

		if ($this->aNagiosCommandRelatedByCheckCommand !== null && $this->check_command !== $this->aNagiosCommandRelatedByCheckCommand->getId()) {
			$this->aNagiosCommandRelatedByCheckCommand = null;
		}
		if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null && $this->check_period !== $this->aNagiosTimeperiodRelatedByCheckPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		}
		if ($this->aNagiosCommandRelatedByEventHandler !== null && $this->event_handler !== $this->aNagiosCommandRelatedByEventHandler->getId()) {
			$this->aNagiosCommandRelatedByEventHandler = null;
		}
		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null && $this->notification_period !== $this->aNagiosTimeperiodRelatedByNotificationPeriod->getId()) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosServiceTemplatePeer::doSelectStmt($this->buildPkeyCriteria(), $con);
		$row = $stmt->fetch(PDO::FETCH_NUM);
		$stmt->closeCursor();
		if (!$row) {
			throw new PropelException('Cannot find matching row in the database to reload object values.');
		}
		$this->hydrate($row, 0, true); // rehydrate

		if ($deep) {  // also de-associate any related objects?

			$this->aNagiosCommandRelatedByCheckCommand = null;
			$this->aNagiosCommandRelatedByEventHandler = null;
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
			$this->collNagiosServiceCheckCommandParameters = null;
			$this->lastNagiosServiceCheckCommandParameterCriteria = null;

			$this->collNagiosServiceGroupMembers = null;
			$this->lastNagiosServiceGroupMemberCriteria = null;

			$this->collNagiosServiceContactMembers = null;
			$this->lastNagiosServiceContactMemberCriteria = null;

			$this->collNagiosServiceContactGroupMembers = null;
			$this->lastNagiosServiceContactGroupMemberCriteria = null;

			$this->collNagiosDependencys = null;
			$this->lastNagiosDependencyCriteria = null;

			$this->collNagiosEscalations = null;
			$this->lastNagiosEscalationCriteria = null;

			$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null;
			$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria = null;

			$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null;
			$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria = null;

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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosServiceTemplatePeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosServiceTemplatePeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosServiceTemplatePeer::addInstanceToPool($this);
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

			if ($this->aNagiosCommandRelatedByCheckCommand !== null) {
				if ($this->aNagiosCommandRelatedByCheckCommand->isModified() || $this->aNagiosCommandRelatedByCheckCommand->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByCheckCommand->save($con);
				}
				$this->setNagiosCommandRelatedByCheckCommand($this->aNagiosCommandRelatedByCheckCommand);
			}

			if ($this->aNagiosCommandRelatedByEventHandler !== null) {
				if ($this->aNagiosCommandRelatedByEventHandler->isModified() || $this->aNagiosCommandRelatedByEventHandler->isNew()) {
					$affectedRows += $this->aNagiosCommandRelatedByEventHandler->save($con);
				}
				$this->setNagiosCommandRelatedByEventHandler($this->aNagiosCommandRelatedByEventHandler);
			}

			if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByCheckPeriod->isModified() || $this->aNagiosTimeperiodRelatedByCheckPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByCheckPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByCheckPeriod($this->aNagiosTimeperiodRelatedByCheckPeriod);
			}

			if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null) {
				if ($this->aNagiosTimeperiodRelatedByNotificationPeriod->isModified() || $this->aNagiosTimeperiodRelatedByNotificationPeriod->isNew()) {
					$affectedRows += $this->aNagiosTimeperiodRelatedByNotificationPeriod->save($con);
				}
				$this->setNagiosTimeperiodRelatedByNotificationPeriod($this->aNagiosTimeperiodRelatedByNotificationPeriod);
			}

			if ($this->isNew() ) {
				$this->modifiedColumns[] = NagiosServiceTemplatePeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosServiceTemplatePeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosServiceTemplatePeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosServiceCheckCommandParameters !== null) {
				foreach ($this->collNagiosServiceCheckCommandParameters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceGroupMembers !== null) {
				foreach ($this->collNagiosServiceGroupMembers as $referrerFK) {
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

			if ($this->collNagiosServiceContactGroupMembers !== null) {
				foreach ($this->collNagiosServiceContactGroupMembers as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosDependencys !== null) {
				foreach ($this->collNagiosDependencys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosEscalations !== null) {
				foreach ($this->collNagiosEscalations as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate !== null) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate !== null) {
				foreach ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $referrerFK) {
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

			if ($this->aNagiosCommandRelatedByCheckCommand !== null) {
				if (!$this->aNagiosCommandRelatedByCheckCommand->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByCheckCommand->getValidationFailures());
				}
			}

			if ($this->aNagiosCommandRelatedByEventHandler !== null) {
				if (!$this->aNagiosCommandRelatedByEventHandler->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosCommandRelatedByEventHandler->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByCheckPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByCheckPeriod->getValidationFailures());
				}
			}

			if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null) {
				if (!$this->aNagiosTimeperiodRelatedByNotificationPeriod->validate($columns)) {
					$failureMap = array_merge($failureMap, $this->aNagiosTimeperiodRelatedByNotificationPeriod->getValidationFailures());
				}
			}


			if (($retval = NagiosServiceTemplatePeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosServiceCheckCommandParameters !== null) {
					foreach ($this->collNagiosServiceCheckCommandParameters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceGroupMembers !== null) {
					foreach ($this->collNagiosServiceGroupMembers as $referrerFK) {
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

				if ($this->collNagiosServiceContactGroupMembers !== null) {
					foreach ($this->collNagiosServiceContactGroupMembers as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosDependencys !== null) {
					foreach ($this->collNagiosDependencys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosEscalations !== null) {
					foreach ($this->collNagiosEscalations as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate !== null) {
					foreach ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate !== null) {
					foreach ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $referrerFK) {
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
		$pos = NagiosServiceTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDescription();
				break;
			case 3:
				return $this->getInitialState();
				break;
			case 4:
				return $this->getIsVolatile();
				break;
			case 5:
				return $this->getCheckCommand();
				break;
			case 6:
				return $this->getMaximumCheckAttempts();
				break;
			case 7:
				return $this->getNormalCheckInterval();
				break;
			case 8:
				return $this->getRetryInterval();
				break;
			case 9:
				return $this->getFirstNotificationDelay();
				break;
			case 10:
				return $this->getActiveChecksEnabled();
				break;
			case 11:
				return $this->getPassiveChecksEnabled();
				break;
			case 12:
				return $this->getCheckPeriod();
				break;
			case 13:
				return $this->getParallelizeCheck();
				break;
			case 14:
				return $this->getObsessOverService();
				break;
			case 15:
				return $this->getCheckFreshness();
				break;
			case 16:
				return $this->getFreshnessThreshold();
				break;
			case 17:
				return $this->getEventHandler();
				break;
			case 18:
				return $this->getEventHandlerEnabled();
				break;
			case 19:
				return $this->getLowFlapThreshold();
				break;
			case 20:
				return $this->getHighFlapThreshold();
				break;
			case 21:
				return $this->getFlapDetectionEnabled();
				break;
			case 22:
				return $this->getFlapDetectionOnOk();
				break;
			case 23:
				return $this->getFlapDetectionOnWarning();
				break;
			case 24:
				return $this->getFlapDetectionOnCritical();
				break;
			case 25:
				return $this->getFlapDetectionOnUnknown();
				break;
			case 26:
				return $this->getProcessPerfData();
				break;
			case 27:
				return $this->getRetainStatusInformation();
				break;
			case 28:
				return $this->getRetainNonstatusInformation();
				break;
			case 29:
				return $this->getNotificationInterval();
				break;
			case 30:
				return $this->getNotificationPeriod();
				break;
			case 31:
				return $this->getNotificationOnWarning();
				break;
			case 32:
				return $this->getNotificationOnUnknown();
				break;
			case 33:
				return $this->getNotificationOnCritical();
				break;
			case 34:
				return $this->getNotificationOnRecovery();
				break;
			case 35:
				return $this->getNotificationOnFlapping();
				break;
			case 36:
				return $this->getNotificationOnScheduledDowntime();
				break;
			case 37:
				return $this->getNotificationsEnabled();
				break;
			case 38:
				return $this->getStalkingOnOk();
				break;
			case 39:
				return $this->getStalkingOnWarning();
				break;
			case 40:
				return $this->getStalkingOnUnknown();
				break;
			case 41:
				return $this->getStalkingOnCritical();
				break;
			case 42:
				return $this->getFailurePredictionEnabled();
				break;
			case 43:
				return $this->getNotes();
				break;
			case 44:
				return $this->getNotesUrl();
				break;
			case 45:
				return $this->getActionUrl();
				break;
			case 46:
				return $this->getIconImage();
				break;
			case 47:
				return $this->getIconImageAlt();
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
		$keys = NagiosServiceTemplatePeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getDescription(),
			$keys[3] => $this->getInitialState(),
			$keys[4] => $this->getIsVolatile(),
			$keys[5] => $this->getCheckCommand(),
			$keys[6] => $this->getMaximumCheckAttempts(),
			$keys[7] => $this->getNormalCheckInterval(),
			$keys[8] => $this->getRetryInterval(),
			$keys[9] => $this->getFirstNotificationDelay(),
			$keys[10] => $this->getActiveChecksEnabled(),
			$keys[11] => $this->getPassiveChecksEnabled(),
			$keys[12] => $this->getCheckPeriod(),
			$keys[13] => $this->getParallelizeCheck(),
			$keys[14] => $this->getObsessOverService(),
			$keys[15] => $this->getCheckFreshness(),
			$keys[16] => $this->getFreshnessThreshold(),
			$keys[17] => $this->getEventHandler(),
			$keys[18] => $this->getEventHandlerEnabled(),
			$keys[19] => $this->getLowFlapThreshold(),
			$keys[20] => $this->getHighFlapThreshold(),
			$keys[21] => $this->getFlapDetectionEnabled(),
			$keys[22] => $this->getFlapDetectionOnOk(),
			$keys[23] => $this->getFlapDetectionOnWarning(),
			$keys[24] => $this->getFlapDetectionOnCritical(),
			$keys[25] => $this->getFlapDetectionOnUnknown(),
			$keys[26] => $this->getProcessPerfData(),
			$keys[27] => $this->getRetainStatusInformation(),
			$keys[28] => $this->getRetainNonstatusInformation(),
			$keys[29] => $this->getNotificationInterval(),
			$keys[30] => $this->getNotificationPeriod(),
			$keys[31] => $this->getNotificationOnWarning(),
			$keys[32] => $this->getNotificationOnUnknown(),
			$keys[33] => $this->getNotificationOnCritical(),
			$keys[34] => $this->getNotificationOnRecovery(),
			$keys[35] => $this->getNotificationOnFlapping(),
			$keys[36] => $this->getNotificationOnScheduledDowntime(),
			$keys[37] => $this->getNotificationsEnabled(),
			$keys[38] => $this->getStalkingOnOk(),
			$keys[39] => $this->getStalkingOnWarning(),
			$keys[40] => $this->getStalkingOnUnknown(),
			$keys[41] => $this->getStalkingOnCritical(),
			$keys[42] => $this->getFailurePredictionEnabled(),
			$keys[43] => $this->getNotes(),
			$keys[44] => $this->getNotesUrl(),
			$keys[45] => $this->getActionUrl(),
			$keys[46] => $this->getIconImage(),
			$keys[47] => $this->getIconImageAlt(),
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
		$pos = NagiosServiceTemplatePeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDescription($value);
				break;
			case 3:
				$this->setInitialState($value);
				break;
			case 4:
				$this->setIsVolatile($value);
				break;
			case 5:
				$this->setCheckCommand($value);
				break;
			case 6:
				$this->setMaximumCheckAttempts($value);
				break;
			case 7:
				$this->setNormalCheckInterval($value);
				break;
			case 8:
				$this->setRetryInterval($value);
				break;
			case 9:
				$this->setFirstNotificationDelay($value);
				break;
			case 10:
				$this->setActiveChecksEnabled($value);
				break;
			case 11:
				$this->setPassiveChecksEnabled($value);
				break;
			case 12:
				$this->setCheckPeriod($value);
				break;
			case 13:
				$this->setParallelizeCheck($value);
				break;
			case 14:
				$this->setObsessOverService($value);
				break;
			case 15:
				$this->setCheckFreshness($value);
				break;
			case 16:
				$this->setFreshnessThreshold($value);
				break;
			case 17:
				$this->setEventHandler($value);
				break;
			case 18:
				$this->setEventHandlerEnabled($value);
				break;
			case 19:
				$this->setLowFlapThreshold($value);
				break;
			case 20:
				$this->setHighFlapThreshold($value);
				break;
			case 21:
				$this->setFlapDetectionEnabled($value);
				break;
			case 22:
				$this->setFlapDetectionOnOk($value);
				break;
			case 23:
				$this->setFlapDetectionOnWarning($value);
				break;
			case 24:
				$this->setFlapDetectionOnCritical($value);
				break;
			case 25:
				$this->setFlapDetectionOnUnknown($value);
				break;
			case 26:
				$this->setProcessPerfData($value);
				break;
			case 27:
				$this->setRetainStatusInformation($value);
				break;
			case 28:
				$this->setRetainNonstatusInformation($value);
				break;
			case 29:
				$this->setNotificationInterval($value);
				break;
			case 30:
				$this->setNotificationPeriod($value);
				break;
			case 31:
				$this->setNotificationOnWarning($value);
				break;
			case 32:
				$this->setNotificationOnUnknown($value);
				break;
			case 33:
				$this->setNotificationOnCritical($value);
				break;
			case 34:
				$this->setNotificationOnRecovery($value);
				break;
			case 35:
				$this->setNotificationOnFlapping($value);
				break;
			case 36:
				$this->setNotificationOnScheduledDowntime($value);
				break;
			case 37:
				$this->setNotificationsEnabled($value);
				break;
			case 38:
				$this->setStalkingOnOk($value);
				break;
			case 39:
				$this->setStalkingOnWarning($value);
				break;
			case 40:
				$this->setStalkingOnUnknown($value);
				break;
			case 41:
				$this->setStalkingOnCritical($value);
				break;
			case 42:
				$this->setFailurePredictionEnabled($value);
				break;
			case 43:
				$this->setNotes($value);
				break;
			case 44:
				$this->setNotesUrl($value);
				break;
			case 45:
				$this->setActionUrl($value);
				break;
			case 46:
				$this->setIconImage($value);
				break;
			case 47:
				$this->setIconImageAlt($value);
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
		$keys = NagiosServiceTemplatePeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setDescription($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setInitialState($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setIsVolatile($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setCheckCommand($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setMaximumCheckAttempts($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setNormalCheckInterval($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setRetryInterval($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setFirstNotificationDelay($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setActiveChecksEnabled($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPassiveChecksEnabled($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCheckPeriod($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setParallelizeCheck($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setObsessOverService($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setCheckFreshness($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setFreshnessThreshold($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setEventHandler($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setEventHandlerEnabled($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setLowFlapThreshold($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setHighFlapThreshold($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setFlapDetectionEnabled($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setFlapDetectionOnOk($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setFlapDetectionOnWarning($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setFlapDetectionOnCritical($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setFlapDetectionOnUnknown($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setProcessPerfData($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setRetainStatusInformation($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setRetainNonstatusInformation($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setNotificationInterval($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setNotificationPeriod($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setNotificationOnWarning($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setNotificationOnUnknown($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setNotificationOnCritical($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setNotificationOnRecovery($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setNotificationOnFlapping($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setNotificationOnScheduledDowntime($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setNotificationsEnabled($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setStalkingOnOk($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setStalkingOnWarning($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setStalkingOnUnknown($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setStalkingOnCritical($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setFailurePredictionEnabled($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setNotes($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setNotesUrl($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setActionUrl($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setIconImage($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setIconImageAlt($arr[$keys[47]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosServiceTemplatePeer::ID)) $criteria->add(NagiosServiceTemplatePeer::ID, $this->id);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NAME)) $criteria->add(NagiosServiceTemplatePeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::DESCRIPTION)) $criteria->add(NagiosServiceTemplatePeer::DESCRIPTION, $this->description);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::INITIAL_STATE)) $criteria->add(NagiosServiceTemplatePeer::INITIAL_STATE, $this->initial_state);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::IS_VOLATILE)) $criteria->add(NagiosServiceTemplatePeer::IS_VOLATILE, $this->is_volatile);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_COMMAND)) $criteria->add(NagiosServiceTemplatePeer::CHECK_COMMAND, $this->check_command);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS)) $criteria->add(NagiosServiceTemplatePeer::MAXIMUM_CHECK_ATTEMPTS, $this->maximum_check_attempts);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::NORMAL_CHECK_INTERVAL, $this->normal_check_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETRY_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::RETRY_INTERVAL, $this->retry_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY)) $criteria->add(NagiosServiceTemplatePeer::FIRST_NOTIFICATION_DELAY, $this->first_notification_delay);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::ACTIVE_CHECKS_ENABLED, $this->active_checks_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::PASSIVE_CHECKS_ENABLED, $this->passive_checks_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_PERIOD)) $criteria->add(NagiosServiceTemplatePeer::CHECK_PERIOD, $this->check_period);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PARALLELIZE_CHECK)) $criteria->add(NagiosServiceTemplatePeer::PARALLELIZE_CHECK, $this->parallelize_check);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE)) $criteria->add(NagiosServiceTemplatePeer::OBSESS_OVER_SERVICE, $this->obsess_over_service);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::CHECK_FRESHNESS)) $criteria->add(NagiosServiceTemplatePeer::CHECK_FRESHNESS, $this->check_freshness);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::FRESHNESS_THRESHOLD, $this->freshness_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::EVENT_HANDLER)) $criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER, $this->event_handler);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::EVENT_HANDLER_ENABLED, $this->event_handler_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::LOW_FLAP_THRESHOLD, $this->low_flap_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD)) $criteria->add(NagiosServiceTemplatePeer::HIGH_FLAP_THRESHOLD, $this->high_flap_threshold);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ENABLED, $this->flap_detection_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_OK, $this->flap_detection_on_ok);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_WARNING, $this->flap_detection_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_CRITICAL, $this->flap_detection_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::FLAP_DETECTION_ON_UNKNOWN, $this->flap_detection_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::PROCESS_PERF_DATA)) $criteria->add(NagiosServiceTemplatePeer::PROCESS_PERF_DATA, $this->process_perf_data);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION)) $criteria->add(NagiosServiceTemplatePeer::RETAIN_STATUS_INFORMATION, $this->retain_status_information);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION)) $criteria->add(NagiosServiceTemplatePeer::RETAIN_NONSTATUS_INFORMATION, $this->retain_nonstatus_information);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_INTERVAL, $this->notification_interval);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_PERIOD, $this->notification_period);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_WARNING, $this->notification_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_UNKNOWN, $this->notification_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_CRITICAL, $this->notification_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_RECOVERY, $this->notification_on_recovery);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_FLAPPING, $this->notification_on_flapping);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME, $this->notification_on_scheduled_downtime);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::NOTIFICATIONS_ENABLED, $this->notifications_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_OK)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_OK, $this->stalking_on_ok);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_WARNING)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_WARNING, $this->stalking_on_warning);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_UNKNOWN, $this->stalking_on_unknown);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::STALKING_ON_CRITICAL)) $criteria->add(NagiosServiceTemplatePeer::STALKING_ON_CRITICAL, $this->stalking_on_critical);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED)) $criteria->add(NagiosServiceTemplatePeer::FAILURE_PREDICTION_ENABLED, $this->failure_prediction_enabled);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTES)) $criteria->add(NagiosServiceTemplatePeer::NOTES, $this->notes);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::NOTES_URL)) $criteria->add(NagiosServiceTemplatePeer::NOTES_URL, $this->notes_url);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ACTION_URL)) $criteria->add(NagiosServiceTemplatePeer::ACTION_URL, $this->action_url);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ICON_IMAGE)) $criteria->add(NagiosServiceTemplatePeer::ICON_IMAGE, $this->icon_image);
		if ($this->isColumnModified(NagiosServiceTemplatePeer::ICON_IMAGE_ALT)) $criteria->add(NagiosServiceTemplatePeer::ICON_IMAGE_ALT, $this->icon_image_alt);

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
		$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);

		$criteria->add(NagiosServiceTemplatePeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosServiceTemplate (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setDescription($this->description);

		$copyObj->setInitialState($this->initial_state);

		$copyObj->setIsVolatile($this->is_volatile);

		$copyObj->setCheckCommand($this->check_command);

		$copyObj->setMaximumCheckAttempts($this->maximum_check_attempts);

		$copyObj->setNormalCheckInterval($this->normal_check_interval);

		$copyObj->setRetryInterval($this->retry_interval);

		$copyObj->setFirstNotificationDelay($this->first_notification_delay);

		$copyObj->setActiveChecksEnabled($this->active_checks_enabled);

		$copyObj->setPassiveChecksEnabled($this->passive_checks_enabled);

		$copyObj->setCheckPeriod($this->check_period);

		$copyObj->setParallelizeCheck($this->parallelize_check);

		$copyObj->setObsessOverService($this->obsess_over_service);

		$copyObj->setCheckFreshness($this->check_freshness);

		$copyObj->setFreshnessThreshold($this->freshness_threshold);

		$copyObj->setEventHandler($this->event_handler);

		$copyObj->setEventHandlerEnabled($this->event_handler_enabled);

		$copyObj->setLowFlapThreshold($this->low_flap_threshold);

		$copyObj->setHighFlapThreshold($this->high_flap_threshold);

		$copyObj->setFlapDetectionEnabled($this->flap_detection_enabled);

		$copyObj->setFlapDetectionOnOk($this->flap_detection_on_ok);

		$copyObj->setFlapDetectionOnWarning($this->flap_detection_on_warning);

		$copyObj->setFlapDetectionOnCritical($this->flap_detection_on_critical);

		$copyObj->setFlapDetectionOnUnknown($this->flap_detection_on_unknown);

		$copyObj->setProcessPerfData($this->process_perf_data);

		$copyObj->setRetainStatusInformation($this->retain_status_information);

		$copyObj->setRetainNonstatusInformation($this->retain_nonstatus_information);

		$copyObj->setNotificationInterval($this->notification_interval);

		$copyObj->setNotificationPeriod($this->notification_period);

		$copyObj->setNotificationOnWarning($this->notification_on_warning);

		$copyObj->setNotificationOnUnknown($this->notification_on_unknown);

		$copyObj->setNotificationOnCritical($this->notification_on_critical);

		$copyObj->setNotificationOnRecovery($this->notification_on_recovery);

		$copyObj->setNotificationOnFlapping($this->notification_on_flapping);

		$copyObj->setNotificationOnScheduledDowntime($this->notification_on_scheduled_downtime);

		$copyObj->setNotificationsEnabled($this->notifications_enabled);

		$copyObj->setStalkingOnOk($this->stalking_on_ok);

		$copyObj->setStalkingOnWarning($this->stalking_on_warning);

		$copyObj->setStalkingOnUnknown($this->stalking_on_unknown);

		$copyObj->setStalkingOnCritical($this->stalking_on_critical);

		$copyObj->setFailurePredictionEnabled($this->failure_prediction_enabled);

		$copyObj->setNotes($this->notes);

		$copyObj->setNotesUrl($this->notes_url);

		$copyObj->setActionUrl($this->action_url);

		$copyObj->setIconImage($this->icon_image);

		$copyObj->setIconImageAlt($this->icon_image_alt);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosServiceCheckCommandParameters() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceCheckCommandParameter($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceGroupMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceGroupMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceContactMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceContactMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceContactGroupMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceContactGroupMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependency($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplateInheritancesRelatedBySourceTemplate() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosServiceTemplateInheritanceRelatedBySourceTemplate($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosServiceTemplateInheritancesRelatedByTargetTemplate() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					//$copyObj->addNagiosServiceTemplateInheritanceRelatedByTargetTemplate($relObj->copy($deepCopy));
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
	 * @return     NagiosServiceTemplate Clone of current object.
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
	 * @return     NagiosServiceTemplatePeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosServiceTemplatePeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByCheckCommand(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setCheckCommand(NULL);
		} else {
			$this->setCheckCommand($v->getId());
		}

		$this->aNagiosCommandRelatedByCheckCommand = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByCheckCommand($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByCheckCommand(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByCheckCommand === null && ($this->check_command !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->check_command);
			$this->aNagiosCommandRelatedByCheckCommand = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByCheckCommand->addNagiosServiceTemplatesRelatedByCheckCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByCheckCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosCommandRelatedByEventHandler(NagiosCommand $v = null)
	{
		if ($v === null) {
			$this->setEventHandler(NULL);
		} else {
			$this->setEventHandler($v->getId());
		}

		$this->aNagiosCommandRelatedByEventHandler = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosCommand object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByEventHandler($this);
		}

		return $this;
	}


	/**
	 * Get the associated NagiosCommand object
	 *
	 * @param      PropelPDO Optional Connection object.
	 * @return     NagiosCommand The associated NagiosCommand object.
	 * @throws     PropelException
	 */
	public function getNagiosCommandRelatedByEventHandler(PropelPDO $con = null)
	{
		if ($this->aNagiosCommandRelatedByEventHandler === null && ($this->event_handler !== null)) {
			$c = new Criteria(NagiosCommandPeer::DATABASE_NAME);
			$c->add(NagiosCommandPeer::ID, $this->event_handler);
			$this->aNagiosCommandRelatedByEventHandler = NagiosCommandPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosCommandRelatedByEventHandler->addNagiosServiceTemplatesRelatedByEventHandler($this);
			 */
		}
		return $this->aNagiosCommandRelatedByEventHandler;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByCheckPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setCheckPeriod(NULL);
		} else {
			$this->setCheckPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByCheckPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByCheckPeriod($this);
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
	public function getNagiosTimeperiodRelatedByCheckPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByCheckPeriod === null && ($this->check_period !== null)) {
			$c = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$c->add(NagiosTimeperiodPeer::ID, $this->check_period);
			$this->aNagiosTimeperiodRelatedByCheckPeriod = NagiosTimeperiodPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosTimeperiodRelatedByCheckPeriod->addNagiosServiceTemplatesRelatedByCheckPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByCheckPeriod;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosServiceTemplate The current object (for fluent API support)
	 * @throws     PropelException
	 */
	public function setNagiosTimeperiodRelatedByNotificationPeriod(NagiosTimeperiod $v = null)
	{
		if ($v === null) {
			$this->setNotificationPeriod(NULL);
		} else {
			$this->setNotificationPeriod($v->getId());
		}

		$this->aNagiosTimeperiodRelatedByNotificationPeriod = $v;

		// Add binding for other direction of this n:n relationship.
		// If this object has already been added to the NagiosTimeperiod object, it will not be re-added.
		if ($v !== null) {
			$v->addNagiosServiceTemplateRelatedByNotificationPeriod($this);
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
	public function getNagiosTimeperiodRelatedByNotificationPeriod(PropelPDO $con = null)
	{
		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod === null && ($this->notification_period !== null)) {
			$c = new Criteria(NagiosTimeperiodPeer::DATABASE_NAME);
			$c->add(NagiosTimeperiodPeer::ID, $this->notification_period);
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = NagiosTimeperiodPeer::doSelectOne($c, $con);
			/* The following can be used additionally to
			   guarantee the related object contains a reference
			   to this object.  This level of coupling may, however, be
			   undesirable since it could result in an only partially populated collection
			   in the referenced object.
			   $this->aNagiosTimeperiodRelatedByNotificationPeriod->addNagiosServiceTemplatesRelatedByNotificationPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosServiceCheckCommandParameters collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceCheckCommandParameters()
	 */
	public function clearNagiosServiceCheckCommandParameters()
	{
		$this->collNagiosServiceCheckCommandParameters = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceCheckCommandParameters collection (array).
	 *
	 * By default this just sets the collNagiosServiceCheckCommandParameters collection to an empty array (like clearcollNagiosServiceCheckCommandParameters());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceCheckCommandParameters()
	{
		$this->collNagiosServiceCheckCommandParameters = array();
	}

	/**
	 * Gets an array of NagiosServiceCheckCommandParameter objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceCheckCommandParameters from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceCheckCommandParameter[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceCheckCommandParameters($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceCheckCommandParameters === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceCheckCommandParameters = array();
			} else {

				$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

				NagiosServiceCheckCommandParameterPeer::addSelectColumns($criteria);
				$this->collNagiosServiceCheckCommandParameters = NagiosServiceCheckCommandParameterPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

				NagiosServiceCheckCommandParameterPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceCheckCommandParameterCriteria) || !$this->lastNagiosServiceCheckCommandParameterCriteria->equals($criteria)) {
					$this->collNagiosServiceCheckCommandParameters = NagiosServiceCheckCommandParameterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceCheckCommandParameterCriteria = $criteria;
		return $this->collNagiosServiceCheckCommandParameters;
	}

	/**
	 * Returns the number of related NagiosServiceCheckCommandParameter objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceCheckCommandParameter objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceCheckCommandParameters(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceCheckCommandParameters === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

				$count = NagiosServiceCheckCommandParameterPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

				if (!isset($this->lastNagiosServiceCheckCommandParameterCriteria) || !$this->lastNagiosServiceCheckCommandParameterCriteria->equals($criteria)) {
					$count = NagiosServiceCheckCommandParameterPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceCheckCommandParameters);
				}
			} else {
				$count = count($this->collNagiosServiceCheckCommandParameters);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosServiceCheckCommandParameter object to this object
	 * through the NagiosServiceCheckCommandParameter foreign key attribute.
	 *
	 * @param      NagiosServiceCheckCommandParameter $l NagiosServiceCheckCommandParameter
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceCheckCommandParameter(NagiosServiceCheckCommandParameter $l)
	{
		if ($this->collNagiosServiceCheckCommandParameters === null) {
			$this->initNagiosServiceCheckCommandParameters();
		}
		if (!in_array($l, $this->collNagiosServiceCheckCommandParameters, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceCheckCommandParameters, $l);
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceCheckCommandParameters from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceCheckCommandParametersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceCheckCommandParameters === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceCheckCommandParameters = array();
			} else {

				$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceCheckCommandParameters = NagiosServiceCheckCommandParameterPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceCheckCommandParameterCriteria) || !$this->lastNagiosServiceCheckCommandParameterCriteria->equals($criteria)) {
				$this->collNagiosServiceCheckCommandParameters = NagiosServiceCheckCommandParameterPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCheckCommandParameterCriteria = $criteria;

		return $this->collNagiosServiceCheckCommandParameters;
	}

	/**
	 * Clears out the collNagiosServiceGroupMembers collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceGroupMembers()
	 */
	public function clearNagiosServiceGroupMembers()
	{
		$this->collNagiosServiceGroupMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceGroupMembers collection (array).
	 *
	 * By default this just sets the collNagiosServiceGroupMembers collection to an empty array (like clearcollNagiosServiceGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceGroupMembers()
	{
		$this->collNagiosServiceGroupMembers = array();
	}

	/**
	 * Gets an array of NagiosServiceGroupMember objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceGroupMembers from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceGroupMember[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceGroupMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				NagiosServiceGroupMemberPeer::addSelectColumns($criteria);
				$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				NagiosServiceGroupMemberPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceGroupMemberCriteria) || !$this->lastNagiosServiceGroupMemberCriteria->equals($criteria)) {
					$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceGroupMemberCriteria = $criteria;
		return $this->collNagiosServiceGroupMembers;
	}

	/**
	 * Returns the number of related NagiosServiceGroupMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceGroupMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceGroupMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceGroupMembers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				$count = NagiosServiceGroupMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				if (!isset($this->lastNagiosServiceGroupMemberCriteria) || !$this->lastNagiosServiceGroupMemberCriteria->equals($criteria)) {
					$count = NagiosServiceGroupMemberPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceGroupMembers);
				}
			} else {
				$count = count($this->collNagiosServiceGroupMembers);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosServiceGroupMember object to this object
	 * through the NagiosServiceGroupMember foreign key attribute.
	 *
	 * @param      NagiosServiceGroupMember $l NagiosServiceGroupMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceGroupMember(NagiosServiceGroupMember $l)
	{
		if ($this->collNagiosServiceGroupMembers === null) {
			$this->initNagiosServiceGroupMembers();
		}
		if (!in_array($l, $this->collNagiosServiceGroupMembers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceGroupMembers, $l);
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceGroupMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceGroupMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceGroupMemberCriteria) || !$this->lastNagiosServiceGroupMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceGroupMemberCriteria = $criteria;

		return $this->collNagiosServiceGroupMembers;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceGroupMembersJoinNagiosServiceGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceGroupMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelectJoinNagiosServiceGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceGroupMemberCriteria) || !$this->lastNagiosServiceGroupMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceGroupMembers = NagiosServiceGroupMemberPeer::doSelectJoinNagiosServiceGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceGroupMemberCriteria = $criteria;

		return $this->collNagiosServiceGroupMembers;
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
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceContactMembers from storage. If this NagiosServiceTemplate is new, it will return
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
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

				NagiosServiceContactMemberPeer::addSelectColumns($criteria);
				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

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
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
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

				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

				$count = NagiosServiceContactMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

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
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceContactMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

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
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceContactMembersJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactMembers = array();
			} else {

				$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceContactMemberCriteria) || !$this->lastNagiosServiceContactMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceContactMembers = NagiosServiceContactMemberPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceContactMemberCriteria = $criteria;

		return $this->collNagiosServiceContactMembers;
	}

	/**
	 * Clears out the collNagiosServiceContactGroupMembers collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceContactGroupMembers()
	 */
	public function clearNagiosServiceContactGroupMembers()
	{
		$this->collNagiosServiceContactGroupMembers = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceContactGroupMembers collection (array).
	 *
	 * By default this just sets the collNagiosServiceContactGroupMembers collection to an empty array (like clearcollNagiosServiceContactGroupMembers());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceContactGroupMembers()
	{
		$this->collNagiosServiceContactGroupMembers = array();
	}

	/**
	 * Gets an array of NagiosServiceContactGroupMember objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceContactGroupMembers from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceContactGroupMember[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceContactGroupMembers($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactGroupMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceContactGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				NagiosServiceContactGroupMemberPeer::addSelectColumns($criteria);
				$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				NagiosServiceContactGroupMemberPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceContactGroupMemberCriteria) || !$this->lastNagiosServiceContactGroupMemberCriteria->equals($criteria)) {
					$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceContactGroupMemberCriteria = $criteria;
		return $this->collNagiosServiceContactGroupMembers;
	}

	/**
	 * Returns the number of related NagiosServiceContactGroupMember objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceContactGroupMember objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceContactGroupMembers(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceContactGroupMembers === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				$count = NagiosServiceContactGroupMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				if (!isset($this->lastNagiosServiceContactGroupMemberCriteria) || !$this->lastNagiosServiceContactGroupMemberCriteria->equals($criteria)) {
					$count = NagiosServiceContactGroupMemberPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceContactGroupMembers);
				}
			} else {
				$count = count($this->collNagiosServiceContactGroupMembers);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosServiceContactGroupMember object to this object
	 * through the NagiosServiceContactGroupMember foreign key attribute.
	 *
	 * @param      NagiosServiceContactGroupMember $l NagiosServiceContactGroupMember
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceContactGroupMember(NagiosServiceContactGroupMember $l)
	{
		if ($this->collNagiosServiceContactGroupMembers === null) {
			$this->initNagiosServiceContactGroupMembers();
		}
		if (!in_array($l, $this->collNagiosServiceContactGroupMembers, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceContactGroupMembers, $l);
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceContactGroupMembersJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactGroupMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceContactGroupMemberCriteria) || !$this->lastNagiosServiceContactGroupMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceContactGroupMemberCriteria = $criteria;

		return $this->collNagiosServiceContactGroupMembers;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceContactGroupMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceContactGroupMembersJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceContactGroupMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceContactGroupMembers = array();
			} else {

				$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

				$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceContactGroupMemberCriteria) || !$this->lastNagiosServiceContactGroupMemberCriteria->equals($criteria)) {
				$this->collNagiosServiceContactGroupMembers = NagiosServiceContactGroupMemberPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceContactGroupMemberCriteria = $criteria;

		return $this->collNagiosServiceContactGroupMembers;
	}

	/**
	 * Clears out the collNagiosDependencys collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencys()
	 */
	public function clearNagiosDependencys()
	{
		$this->collNagiosDependencys = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencys collection (array).
	 *
	 * By default this just sets the collNagiosDependencys collection to an empty array (like clearcollNagiosDependencys());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosDependencys()
	{
		$this->collNagiosDependencys = array();
	}

	/**
	 * Gets an array of NagiosDependency objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosDependencys from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosDependency[]
	 * @throws     PropelException
	 */
	public function getNagiosDependencys($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
			   $this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				NagiosDependencyPeer::addSelectColumns($criteria);
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				NagiosDependencyPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
					$this->collNagiosDependencys = NagiosDependencyPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;
		return $this->collNagiosDependencys;
	}

	/**
	 * Returns the number of related NagiosDependency objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependency objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencys(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$count = NagiosDependencyPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
					$count = NagiosDependencyPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosDependencys);
				}
			} else {
				$count = count($this->collNagiosDependencys);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosDependency object to this object
	 * through the NagiosDependency foreign key attribute.
	 *
	 * @param      NagiosDependency $l NagiosDependency
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosDependency(NagiosDependency $l)
	{
		if ($this->collNagiosDependencys === null) {
			$this->initNagiosDependencys();
		}
		if (!in_array($l, $this->collNagiosDependencys, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosDependencys, $l);
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosDependencysJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosDependencysJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosDependencysJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosDependencysJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosDependencysJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}

	/**
	 * Clears out the collNagiosEscalations collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosEscalations()
	 */
	public function clearNagiosEscalations()
	{
		$this->collNagiosEscalations = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosEscalations collection (array).
	 *
	 * By default this just sets the collNagiosEscalations collection to an empty array (like clearcollNagiosEscalations());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosEscalations()
	{
		$this->collNagiosEscalations = array();
	}

	/**
	 * Gets an array of NagiosEscalation objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosEscalations from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosEscalation[]
	 * @throws     PropelException
	 */
	public function getNagiosEscalations($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				NagiosEscalationPeer::addSelectColumns($criteria);
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				NagiosEscalationPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
					$this->collNagiosEscalations = NagiosEscalationPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;
		return $this->collNagiosEscalations;
	}

	/**
	 * Returns the number of related NagiosEscalation objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosEscalation objects.
	 * @throws     PropelException
	 */
	public function countNagiosEscalations(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$count = NagiosEscalationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
					$count = NagiosEscalationPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosEscalations);
				}
			} else {
				$count = count($this->collNagiosEscalations);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosEscalation object to this object
	 * through the NagiosEscalation foreign key attribute.
	 *
	 * @param      NagiosEscalation $l NagiosEscalation
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosEscalation(NagiosEscalation $l)
	{
		if ($this->collNagiosEscalations === null) {
			$this->initNagiosEscalations();
		}
		if (!in_array($l, $this->collNagiosEscalations, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosEscalations, $l);
			$l->setNagiosServiceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosEscalationsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosEscalationsJoinNagiosHost($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHost($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosEscalationsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosEscalationsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosEscalationsJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::SERVICE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}

	/**
	 * Clears out the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplateInheritancesRelatedBySourceTemplate()
	 */
	public function clearNagiosServiceTemplateInheritancesRelatedBySourceTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplateInheritancesRelatedBySourceTemplate collection to an empty array (like clearcollNagiosServiceTemplateInheritancesRelatedBySourceTemplate());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplateInheritancesRelatedBySourceTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplateInheritance objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceTemplateInheritancesRelatedBySourceTemplate from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplateInheritance[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplateInheritancesRelatedBySourceTemplate($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = array();
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

				NagiosServiceTemplateInheritancePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = NagiosServiceTemplateInheritancePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

				NagiosServiceTemplateInheritancePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = NagiosServiceTemplateInheritancePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria = $criteria;
		return $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;
	}

	/**
	 * Returns the number of related NagiosServiceTemplateInheritance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplateInheritance objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplateInheritancesRelatedBySourceTemplate(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

				$count = NagiosServiceTemplateInheritancePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

				if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria->equals($criteria)) {
					$count = NagiosServiceTemplateInheritancePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate);
				}
			} else {
				$count = count($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosServiceTemplateInheritance object to this object
	 * through the NagiosServiceTemplateInheritance foreign key attribute.
	 *
	 * @param      NagiosServiceTemplateInheritance $l NagiosServiceTemplateInheritance
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateInheritanceRelatedBySourceTemplate(NagiosServiceTemplateInheritance $l)
	{
		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate === null) {
			$this->initNagiosServiceTemplateInheritancesRelatedBySourceTemplate();
		}
		if (!in_array($l, $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate, $l);
			$l->setNagiosServiceTemplateRelatedBySourceTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceTemplateInheritancesRelatedBySourceTemplate from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceTemplateInheritancesRelatedBySourceTemplateJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = array();
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

				$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = NagiosServiceTemplateInheritancePeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = NagiosServiceTemplateInheritancePeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateInheritanceRelatedBySourceTemplateCriteria = $criteria;

		return $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate;
	}

	/**
	 * Clears out the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServiceTemplateInheritancesRelatedByTargetTemplate()
	 */
	public function clearNagiosServiceTemplateInheritancesRelatedByTargetTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection (array).
	 *
	 * By default this just sets the collNagiosServiceTemplateInheritancesRelatedByTargetTemplate collection to an empty array (like clearcollNagiosServiceTemplateInheritancesRelatedByTargetTemplate());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServiceTemplateInheritancesRelatedByTargetTemplate()
	{
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = array();
	}

	/**
	 * Gets an array of NagiosServiceTemplateInheritance objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate has previously been saved, it will retrieve
	 * related NagiosServiceTemplateInheritancesRelatedByTargetTemplate from storage. If this NagiosServiceTemplate is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosServiceTemplateInheritance[]
	 * @throws     PropelException
	 */
	public function getNagiosServiceTemplateInheritancesRelatedByTargetTemplate($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate === null) {
			if ($this->isNew()) {
			   $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = array();
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

				NagiosServiceTemplateInheritancePeer::addSelectColumns($criteria);
				$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = NagiosServiceTemplateInheritancePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

				NagiosServiceTemplateInheritancePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria->equals($criteria)) {
					$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = NagiosServiceTemplateInheritancePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria = $criteria;
		return $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;
	}

	/**
	 * Returns the number of related NagiosServiceTemplateInheritance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosServiceTemplateInheritance objects.
	 * @throws     PropelException
	 */
	public function countNagiosServiceTemplateInheritancesRelatedByTargetTemplate(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

				$count = NagiosServiceTemplateInheritancePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

				if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria->equals($criteria)) {
					$count = NagiosServiceTemplateInheritancePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate);
				}
			} else {
				$count = count($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosServiceTemplateInheritance object to this object
	 * through the NagiosServiceTemplateInheritance foreign key attribute.
	 *
	 * @param      NagiosServiceTemplateInheritance $l NagiosServiceTemplateInheritance
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosServiceTemplateInheritanceRelatedByTargetTemplate(NagiosServiceTemplateInheritance $l)
	{
		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate === null) {
			$this->initNagiosServiceTemplateInheritancesRelatedByTargetTemplate();
		}
		if (!in_array($l, $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate, $l);
			$l->setNagiosServiceTemplateRelatedByTargetTemplate($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosServiceTemplate is new, it will return
	 * an empty collection; or if this NagiosServiceTemplate has previously
	 * been saved, it will retrieve related NagiosServiceTemplateInheritancesRelatedByTargetTemplate from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosServiceTemplate.
	 */
	public function getNagiosServiceTemplateInheritancesRelatedByTargetTemplateJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosServiceTemplatePeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate === null) {
			if ($this->isNew()) {
				$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = array();
			} else {

				$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

				$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = NagiosServiceTemplateInheritancePeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->id);

			if (!isset($this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria) || !$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria->equals($criteria)) {
				$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = NagiosServiceTemplateInheritancePeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceTemplateInheritanceRelatedByTargetTemplateCriteria = $criteria;

		return $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate;
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
			if ($this->collNagiosServiceCheckCommandParameters) {
				foreach ((array) $this->collNagiosServiceCheckCommandParameters as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceGroupMembers) {
				foreach ((array) $this->collNagiosServiceGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactMembers) {
				foreach ((array) $this->collNagiosServiceContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceContactGroupMembers) {
				foreach ((array) $this->collNagiosServiceContactGroupMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencys) {
				foreach ((array) $this->collNagiosDependencys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalations) {
				foreach ((array) $this->collNagiosEscalations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate) {
				foreach ((array) $this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate) {
				foreach ((array) $this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNagiosServiceCheckCommandParameters = null;
		$this->collNagiosServiceGroupMembers = null;
		$this->collNagiosServiceContactMembers = null;
		$this->collNagiosServiceContactGroupMembers = null;
		$this->collNagiosDependencys = null;
		$this->collNagiosEscalations = null;
		$this->collNagiosServiceTemplateInheritancesRelatedBySourceTemplate = null;
		$this->collNagiosServiceTemplateInheritancesRelatedByTargetTemplate = null;
			$this->aNagiosCommandRelatedByCheckCommand = null;
			$this->aNagiosCommandRelatedByEventHandler = null;
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
	}

} // BaseNagiosServiceTemplate
