<?php

/**
 * Base class that represents a row from the 'nagios_host' table.
 *
 * Nagios Host
 *
 * @package    .om
 */
abstract class BaseNagiosHost extends BaseObject  implements Persistent {


	/**
	 * The Peer class.
	 * Instance provides a convenient way of calling static methods on a class
	 * that calling code may not be able to identify.
	 * @var        NagiosHostPeer
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
	 * The value for the display_name field.
	 * @var        string
	 */
	protected $display_name;

	/**
	 * The value for the initial_state field.
	 * @var        string
	 */
	protected $initial_state;

	/**
	 * The value for the address field.
	 * @var        string
	 */
	protected $address;

	/**
	 * The value for the check_command field.
	 * @var        int
	 */
	protected $check_command;

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
	 * The value for the maximum_check_attempts field.
	 * @var        int
	 */
	protected $maximum_check_attempts;

	/**
	 * The value for the check_interval field.
	 * @var        int
	 */
	protected $check_interval;

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
	 * The value for the obsess_over_host field.
	 * @var        boolean
	 */
	protected $obsess_over_host;

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
	 * The value for the active_checks_enabled field.
	 * @var        boolean
	 */
	protected $active_checks_enabled;

	/**
	 * The value for the checks_enabled field.
	 * @var        boolean
	 */
	protected $checks_enabled;

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
	 * The value for the notifications_enabled field.
	 * @var        boolean
	 */
	protected $notifications_enabled;

	/**
	 * The value for the notification_on_down field.
	 * @var        boolean
	 */
	protected $notification_on_down;

	/**
	 * The value for the notification_on_unreachable field.
	 * @var        boolean
	 */
	protected $notification_on_unreachable;

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
	 * The value for the stalking_on_up field.
	 * @var        boolean
	 */
	protected $stalking_on_up;

	/**
	 * The value for the stalking_on_down field.
	 * @var        boolean
	 */
	protected $stalking_on_down;

	/**
	 * The value for the stalking_on_unreachable field.
	 * @var        boolean
	 */
	protected $stalking_on_unreachable;

	/**
	 * The value for the failure_prediction_enabled field.
	 * @var        boolean
	 */
	protected $failure_prediction_enabled;

	/**
	 * The value for the flap_detection_on_up field.
	 * @var        boolean
	 */
	protected $flap_detection_on_up;

	/**
	 * The value for the flap_detection_on_down field.
	 * @var        boolean
	 */
	protected $flap_detection_on_down;

	/**
	 * The value for the flap_detection_on_unreachable field.
	 * @var        boolean
	 */
	protected $flap_detection_on_unreachable;

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
	 * The value for the vrml_image field.
	 * @var        string
	 */
	protected $vrml_image;

	/**
	 * The value for the statusmap_image field.
	 * @var        string
	 */
	protected $statusmap_image;

	/**
	 * The value for the two_d_coords field.
	 * @var        string
	 */
	protected $two_d_coords;

	/**
	 * The value for the three_d_coords field.
	 * @var        string
	 */
	protected $three_d_coords;

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
	 * @var        array NagiosService[] Collection to store aggregation of NagiosService objects.
	 */
	protected $collNagiosServices;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosServices.
	 */
	private $lastNagiosServiceCriteria = null;

	/**
	 * @var        array NagiosHostContactMember[] Collection to store aggregation of NagiosHostContactMember objects.
	 */
	protected $collNagiosHostContactMembers;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostContactMembers.
	 */
	private $lastNagiosHostContactMemberCriteria = null;

	/**
	 * @var        array NagiosDependency[] Collection to store aggregation of NagiosDependency objects.
	 */
	protected $collNagiosDependencys;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosDependencys.
	 */
	private $lastNagiosDependencyCriteria = null;

	/**
	 * @var        array NagiosDependencyTarget[] Collection to store aggregation of NagiosDependencyTarget objects.
	 */
	protected $collNagiosDependencyTargets;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosDependencyTargets.
	 */
	private $lastNagiosDependencyTargetCriteria = null;

	/**
	 * @var        array NagiosEscalation[] Collection to store aggregation of NagiosEscalation objects.
	 */
	protected $collNagiosEscalations;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosEscalations.
	 */
	private $lastNagiosEscalationCriteria = null;

	/**
	 * @var        array NagiosHostContactgroup[] Collection to store aggregation of NagiosHostContactgroup objects.
	 */
	protected $collNagiosHostContactgroups;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostContactgroups.
	 */
	private $lastNagiosHostContactgroupCriteria = null;

	/**
	 * @var        array NagiosHostgroupMembership[] Collection to store aggregation of NagiosHostgroupMembership objects.
	 */
	protected $collNagiosHostgroupMemberships;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostgroupMemberships.
	 */
	private $lastNagiosHostgroupMembershipCriteria = null;

	/**
	 * @var        array NagiosHostCheckCommandParameter[] Collection to store aggregation of NagiosHostCheckCommandParameter objects.
	 */
	protected $collNagiosHostCheckCommandParameters;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostCheckCommandParameters.
	 */
	private $lastNagiosHostCheckCommandParameterCriteria = null;

	/**
	 * @var        array NagiosHostParent[] Collection to store aggregation of NagiosHostParent objects.
	 */
	protected $collNagiosHostParentsRelatedByChildHost;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostParentsRelatedByChildHost.
	 */
	private $lastNagiosHostParentRelatedByChildHostCriteria = null;

	/**
	 * @var        array NagiosHostParent[] Collection to store aggregation of NagiosHostParent objects.
	 */
	protected $collNagiosHostParentsRelatedByParentHost;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostParentsRelatedByParentHost.
	 */
	private $lastNagiosHostParentRelatedByParentHostCriteria = null;

	/**
	 * @var        array NagiosHostTemplateInheritance[] Collection to store aggregation of NagiosHostTemplateInheritance objects.
	 */
	protected $collNagiosHostTemplateInheritances;

	/**
	 * @var        Criteria The criteria used to select the current contents of collNagiosHostTemplateInheritances.
	 */
	private $lastNagiosHostTemplateInheritanceCriteria = null;

	/**
	 * @var        array AutodiscoveryDevice[] Collection to store aggregation of AutodiscoveryDevice objects.
	 */
	protected $collAutodiscoveryDevices;

	/**
	 * @var        Criteria The criteria used to select the current contents of collAutodiscoveryDevices.
	 */
	private $lastAutodiscoveryDeviceCriteria = null;

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
	 * Initializes internal state of BaseNagiosHost object.
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
	 * Get the [display_name] column value.
	 * 
	 * @return     string
	 */
	public function getDisplayName()
	{
		return $this->display_name;
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
	 * Get the [address] column value.
	 * 
	 * @return     string
	 */
	public function getAddress()
	{
		return $this->address;
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
	 * Get the [maximum_check_attempts] column value.
	 * 
	 * @return     int
	 */
	public function getMaximumCheckAttempts()
	{
		return $this->maximum_check_attempts;
	}

	/**
	 * Get the [check_interval] column value.
	 * 
	 * @return     int
	 */
	public function getCheckInterval()
	{
		return $this->check_interval;
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
	 * Get the [obsess_over_host] column value.
	 * 
	 * @return     boolean
	 */
	public function getObsessOverHost()
	{
		return $this->obsess_over_host;
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
	 * Get the [active_checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getActiveChecksEnabled()
	{
		return $this->active_checks_enabled;
	}

	/**
	 * Get the [checks_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getChecksEnabled()
	{
		return $this->checks_enabled;
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
	 * Get the [notifications_enabled] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationsEnabled()
	{
		return $this->notifications_enabled;
	}

	/**
	 * Get the [notification_on_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnDown()
	{
		return $this->notification_on_down;
	}

	/**
	 * Get the [notification_on_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getNotificationOnUnreachable()
	{
		return $this->notification_on_unreachable;
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
	 * Get the [stalking_on_up] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnUp()
	{
		return $this->stalking_on_up;
	}

	/**
	 * Get the [stalking_on_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnDown()
	{
		return $this->stalking_on_down;
	}

	/**
	 * Get the [stalking_on_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getStalkingOnUnreachable()
	{
		return $this->stalking_on_unreachable;
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
	 * Get the [flap_detection_on_up] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnUp()
	{
		return $this->flap_detection_on_up;
	}

	/**
	 * Get the [flap_detection_on_down] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnDown()
	{
		return $this->flap_detection_on_down;
	}

	/**
	 * Get the [flap_detection_on_unreachable] column value.
	 * 
	 * @return     boolean
	 */
	public function getFlapDetectionOnUnreachable()
	{
		return $this->flap_detection_on_unreachable;
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
	 * Get the [vrml_image] column value.
	 * 
	 * @return     string
	 */
	public function getVrmlImage()
	{
		return $this->vrml_image;
	}

	/**
	 * Get the [statusmap_image] column value.
	 * 
	 * @return     string
	 */
	public function getStatusmapImage()
	{
		return $this->statusmap_image;
	}

	/**
	 * Get the [two_d_coords] column value.
	 * 
	 * @return     string
	 */
	public function getTwoDCoords()
	{
		return $this->two_d_coords;
	}

	/**
	 * Get the [three_d_coords] column value.
	 * 
	 * @return     string
	 */
	public function getThreeDCoords()
	{
		return $this->three_d_coords;
	}

	/**
	 * Set the value of [id] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setId($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->id !== $v) {
			$this->id = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ID;
		}

		return $this;
	} // setId()

	/**
	 * Set the value of [name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->name !== $v) {
			$this->name = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NAME;
		}

		return $this;
	} // setName()

	/**
	 * Set the value of [alias] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setAlias($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->alias !== $v) {
			$this->alias = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ALIAS;
		}

		return $this;
	} // setAlias()

	/**
	 * Set the value of [display_name] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setDisplayName($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->display_name !== $v) {
			$this->display_name = $v;
			$this->modifiedColumns[] = NagiosHostPeer::DISPLAY_NAME;
		}

		return $this;
	} // setDisplayName()

	/**
	 * Set the value of [initial_state] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setInitialState($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->initial_state !== $v) {
			$this->initial_state = $v;
			$this->modifiedColumns[] = NagiosHostPeer::INITIAL_STATE;
		}

		return $this;
	} // setInitialState()

	/**
	 * Set the value of [address] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setAddress($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->address !== $v) {
			$this->address = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ADDRESS;
		}

		return $this;
	} // setAddress()

	/**
	 * Set the value of [check_command] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setCheckCommand($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_command !== $v) {
			$this->check_command = $v;
			$this->modifiedColumns[] = NagiosHostPeer::CHECK_COMMAND;
		}

		if ($this->aNagiosCommandRelatedByCheckCommand !== null && $this->aNagiosCommandRelatedByCheckCommand->getId() !== $v) {
			$this->aNagiosCommandRelatedByCheckCommand = null;
		}

		return $this;
	} // setCheckCommand()

	/**
	 * Set the value of [retry_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setRetryInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->retry_interval !== $v) {
			$this->retry_interval = $v;
			$this->modifiedColumns[] = NagiosHostPeer::RETRY_INTERVAL;
		}

		return $this;
	} // setRetryInterval()

	/**
	 * Set the value of [first_notification_delay] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFirstNotificationDelay($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->first_notification_delay !== $v) {
			$this->first_notification_delay = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FIRST_NOTIFICATION_DELAY;
		}

		return $this;
	} // setFirstNotificationDelay()

	/**
	 * Set the value of [maximum_check_attempts] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setMaximumCheckAttempts($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->maximum_check_attempts !== $v) {
			$this->maximum_check_attempts = $v;
			$this->modifiedColumns[] = NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS;
		}

		return $this;
	} // setMaximumCheckAttempts()

	/**
	 * Set the value of [check_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setCheckInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_interval !== $v) {
			$this->check_interval = $v;
			$this->modifiedColumns[] = NagiosHostPeer::CHECK_INTERVAL;
		}

		return $this;
	} // setCheckInterval()

	/**
	 * Set the value of [passive_checks_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setPassiveChecksEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->passive_checks_enabled !== $v) {
			$this->passive_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::PASSIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setPassiveChecksEnabled()

	/**
	 * Set the value of [check_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setCheckPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->check_period !== $v) {
			$this->check_period = $v;
			$this->modifiedColumns[] = NagiosHostPeer::CHECK_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByCheckPeriod !== null && $this->aNagiosTimeperiodRelatedByCheckPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		}

		return $this;
	} // setCheckPeriod()

	/**
	 * Set the value of [obsess_over_host] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setObsessOverHost($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->obsess_over_host !== $v) {
			$this->obsess_over_host = $v;
			$this->modifiedColumns[] = NagiosHostPeer::OBSESS_OVER_HOST;
		}

		return $this;
	} // setObsessOverHost()

	/**
	 * Set the value of [check_freshness] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setCheckFreshness($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->check_freshness !== $v) {
			$this->check_freshness = $v;
			$this->modifiedColumns[] = NagiosHostPeer::CHECK_FRESHNESS;
		}

		return $this;
	} // setCheckFreshness()

	/**
	 * Set the value of [freshness_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFreshnessThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->freshness_threshold !== $v) {
			$this->freshness_threshold = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FRESHNESS_THRESHOLD;
		}

		return $this;
	} // setFreshnessThreshold()

	/**
	 * Set the value of [active_checks_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setActiveChecksEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->active_checks_enabled !== $v) {
			$this->active_checks_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ACTIVE_CHECKS_ENABLED;
		}

		return $this;
	} // setActiveChecksEnabled()

	/**
	 * Set the value of [checks_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setChecksEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->checks_enabled !== $v) {
			$this->checks_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::CHECKS_ENABLED;
		}

		return $this;
	} // setChecksEnabled()

	/**
	 * Set the value of [event_handler] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setEventHandler($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->event_handler !== $v) {
			$this->event_handler = $v;
			$this->modifiedColumns[] = NagiosHostPeer::EVENT_HANDLER;
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
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setEventHandlerEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->event_handler_enabled !== $v) {
			$this->event_handler_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::EVENT_HANDLER_ENABLED;
		}

		return $this;
	} // setEventHandlerEnabled()

	/**
	 * Set the value of [low_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setLowFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->low_flap_threshold !== $v) {
			$this->low_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosHostPeer::LOW_FLAP_THRESHOLD;
		}

		return $this;
	} // setLowFlapThreshold()

	/**
	 * Set the value of [high_flap_threshold] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setHighFlapThreshold($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->high_flap_threshold !== $v) {
			$this->high_flap_threshold = $v;
			$this->modifiedColumns[] = NagiosHostPeer::HIGH_FLAP_THRESHOLD;
		}

		return $this;
	} // setHighFlapThreshold()

	/**
	 * Set the value of [flap_detection_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFlapDetectionEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_enabled !== $v) {
			$this->flap_detection_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FLAP_DETECTION_ENABLED;
		}

		return $this;
	} // setFlapDetectionEnabled()

	/**
	 * Set the value of [process_perf_data] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setProcessPerfData($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->process_perf_data !== $v) {
			$this->process_perf_data = $v;
			$this->modifiedColumns[] = NagiosHostPeer::PROCESS_PERF_DATA;
		}

		return $this;
	} // setProcessPerfData()

	/**
	 * Set the value of [retain_status_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setRetainStatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_status_information !== $v) {
			$this->retain_status_information = $v;
			$this->modifiedColumns[] = NagiosHostPeer::RETAIN_STATUS_INFORMATION;
		}

		return $this;
	} // setRetainStatusInformation()

	/**
	 * Set the value of [retain_nonstatus_information] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setRetainNonstatusInformation($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->retain_nonstatus_information !== $v) {
			$this->retain_nonstatus_information = $v;
			$this->modifiedColumns[] = NagiosHostPeer::RETAIN_NONSTATUS_INFORMATION;
		}

		return $this;
	} // setRetainNonstatusInformation()

	/**
	 * Set the value of [notification_interval] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationInterval($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_interval !== $v) {
			$this->notification_interval = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_INTERVAL;
		}

		return $this;
	} // setNotificationInterval()

	/**
	 * Set the value of [notification_period] column.
	 * 
	 * @param      int $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationPeriod($v)
	{
		if ($v !== null) {
			$v = (int) $v;
		}

		if ($this->notification_period !== $v) {
			$this->notification_period = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_PERIOD;
		}

		if ($this->aNagiosTimeperiodRelatedByNotificationPeriod !== null && $this->aNagiosTimeperiodRelatedByNotificationPeriod->getId() !== $v) {
			$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
		}

		return $this;
	} // setNotificationPeriod()

	/**
	 * Set the value of [notifications_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationsEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notifications_enabled !== $v) {
			$this->notifications_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATIONS_ENABLED;
		}

		return $this;
	} // setNotificationsEnabled()

	/**
	 * Set the value of [notification_on_down] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationOnDown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_down !== $v) {
			$this->notification_on_down = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_ON_DOWN;
		}

		return $this;
	} // setNotificationOnDown()

	/**
	 * Set the value of [notification_on_unreachable] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationOnUnreachable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_unreachable !== $v) {
			$this->notification_on_unreachable = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_ON_UNREACHABLE;
		}

		return $this;
	} // setNotificationOnUnreachable()

	/**
	 * Set the value of [notification_on_recovery] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationOnRecovery($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_recovery !== $v) {
			$this->notification_on_recovery = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_ON_RECOVERY;
		}

		return $this;
	} // setNotificationOnRecovery()

	/**
	 * Set the value of [notification_on_flapping] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationOnFlapping($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_flapping !== $v) {
			$this->notification_on_flapping = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_ON_FLAPPING;
		}

		return $this;
	} // setNotificationOnFlapping()

	/**
	 * Set the value of [notification_on_scheduled_downtime] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotificationOnScheduledDowntime($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->notification_on_scheduled_downtime !== $v) {
			$this->notification_on_scheduled_downtime = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME;
		}

		return $this;
	} // setNotificationOnScheduledDowntime()

	/**
	 * Set the value of [stalking_on_up] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setStalkingOnUp($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_up !== $v) {
			$this->stalking_on_up = $v;
			$this->modifiedColumns[] = NagiosHostPeer::STALKING_ON_UP;
		}

		return $this;
	} // setStalkingOnUp()

	/**
	 * Set the value of [stalking_on_down] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setStalkingOnDown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_down !== $v) {
			$this->stalking_on_down = $v;
			$this->modifiedColumns[] = NagiosHostPeer::STALKING_ON_DOWN;
		}

		return $this;
	} // setStalkingOnDown()

	/**
	 * Set the value of [stalking_on_unreachable] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setStalkingOnUnreachable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->stalking_on_unreachable !== $v) {
			$this->stalking_on_unreachable = $v;
			$this->modifiedColumns[] = NagiosHostPeer::STALKING_ON_UNREACHABLE;
		}

		return $this;
	} // setStalkingOnUnreachable()

	/**
	 * Set the value of [failure_prediction_enabled] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFailurePredictionEnabled($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->failure_prediction_enabled !== $v) {
			$this->failure_prediction_enabled = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FAILURE_PREDICTION_ENABLED;
		}

		return $this;
	} // setFailurePredictionEnabled()

	/**
	 * Set the value of [flap_detection_on_up] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFlapDetectionOnUp($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_up !== $v) {
			$this->flap_detection_on_up = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FLAP_DETECTION_ON_UP;
		}

		return $this;
	} // setFlapDetectionOnUp()

	/**
	 * Set the value of [flap_detection_on_down] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFlapDetectionOnDown($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_down !== $v) {
			$this->flap_detection_on_down = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FLAP_DETECTION_ON_DOWN;
		}

		return $this;
	} // setFlapDetectionOnDown()

	/**
	 * Set the value of [flap_detection_on_unreachable] column.
	 * 
	 * @param      boolean $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setFlapDetectionOnUnreachable($v)
	{
		if ($v !== null) {
			$v = (boolean) $v;
		}

		if ($this->flap_detection_on_unreachable !== $v) {
			$this->flap_detection_on_unreachable = $v;
			$this->modifiedColumns[] = NagiosHostPeer::FLAP_DETECTION_ON_UNREACHABLE;
		}

		return $this;
	} // setFlapDetectionOnUnreachable()

	/**
	 * Set the value of [notes] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotes($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes !== $v) {
			$this->notes = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTES;
		}

		return $this;
	} // setNotes()

	/**
	 * Set the value of [notes_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setNotesUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->notes_url !== $v) {
			$this->notes_url = $v;
			$this->modifiedColumns[] = NagiosHostPeer::NOTES_URL;
		}

		return $this;
	} // setNotesUrl()

	/**
	 * Set the value of [action_url] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setActionUrl($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->action_url !== $v) {
			$this->action_url = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ACTION_URL;
		}

		return $this;
	} // setActionUrl()

	/**
	 * Set the value of [icon_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setIconImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image !== $v) {
			$this->icon_image = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ICON_IMAGE;
		}

		return $this;
	} // setIconImage()

	/**
	 * Set the value of [icon_image_alt] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setIconImageAlt($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->icon_image_alt !== $v) {
			$this->icon_image_alt = $v;
			$this->modifiedColumns[] = NagiosHostPeer::ICON_IMAGE_ALT;
		}

		return $this;
	} // setIconImageAlt()

	/**
	 * Set the value of [vrml_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setVrmlImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->vrml_image !== $v) {
			$this->vrml_image = $v;
			$this->modifiedColumns[] = NagiosHostPeer::VRML_IMAGE;
		}

		return $this;
	} // setVrmlImage()

	/**
	 * Set the value of [statusmap_image] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setStatusmapImage($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->statusmap_image !== $v) {
			$this->statusmap_image = $v;
			$this->modifiedColumns[] = NagiosHostPeer::STATUSMAP_IMAGE;
		}

		return $this;
	} // setStatusmapImage()

	/**
	 * Set the value of [two_d_coords] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setTwoDCoords($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->two_d_coords !== $v) {
			$this->two_d_coords = $v;
			$this->modifiedColumns[] = NagiosHostPeer::TWO_D_COORDS;
		}

		return $this;
	} // setTwoDCoords()

	/**
	 * Set the value of [three_d_coords] column.
	 * 
	 * @param      string $v new value
	 * @return     NagiosHost The current object (for fluent API support)
	 */
	public function setThreeDCoords($v)
	{
		if ($v !== null) {
			$v = (string) $v;
		}

		if ($this->three_d_coords !== $v) {
			$this->three_d_coords = $v;
			$this->modifiedColumns[] = NagiosHostPeer::THREE_D_COORDS;
		}

		return $this;
	} // setThreeDCoords()

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
			$this->display_name = ($row[$startcol + 3] !== null) ? (string) $row[$startcol + 3] : null;
			$this->initial_state = ($row[$startcol + 4] !== null) ? (string) $row[$startcol + 4] : null;
			$this->address = ($row[$startcol + 5] !== null) ? (string) $row[$startcol + 5] : null;
			$this->check_command = ($row[$startcol + 6] !== null) ? (int) $row[$startcol + 6] : null;
			$this->retry_interval = ($row[$startcol + 7] !== null) ? (int) $row[$startcol + 7] : null;
			$this->first_notification_delay = ($row[$startcol + 8] !== null) ? (int) $row[$startcol + 8] : null;
			$this->maximum_check_attempts = ($row[$startcol + 9] !== null) ? (int) $row[$startcol + 9] : null;
			$this->check_interval = ($row[$startcol + 10] !== null) ? (int) $row[$startcol + 10] : null;
			$this->passive_checks_enabled = ($row[$startcol + 11] !== null) ? (boolean) $row[$startcol + 11] : null;
			$this->check_period = ($row[$startcol + 12] !== null) ? (int) $row[$startcol + 12] : null;
			$this->obsess_over_host = ($row[$startcol + 13] !== null) ? (boolean) $row[$startcol + 13] : null;
			$this->check_freshness = ($row[$startcol + 14] !== null) ? (boolean) $row[$startcol + 14] : null;
			$this->freshness_threshold = ($row[$startcol + 15] !== null) ? (int) $row[$startcol + 15] : null;
			$this->active_checks_enabled = ($row[$startcol + 16] !== null) ? (boolean) $row[$startcol + 16] : null;
			$this->checks_enabled = ($row[$startcol + 17] !== null) ? (boolean) $row[$startcol + 17] : null;
			$this->event_handler = ($row[$startcol + 18] !== null) ? (int) $row[$startcol + 18] : null;
			$this->event_handler_enabled = ($row[$startcol + 19] !== null) ? (boolean) $row[$startcol + 19] : null;
			$this->low_flap_threshold = ($row[$startcol + 20] !== null) ? (int) $row[$startcol + 20] : null;
			$this->high_flap_threshold = ($row[$startcol + 21] !== null) ? (int) $row[$startcol + 21] : null;
			$this->flap_detection_enabled = ($row[$startcol + 22] !== null) ? (boolean) $row[$startcol + 22] : null;
			$this->process_perf_data = ($row[$startcol + 23] !== null) ? (boolean) $row[$startcol + 23] : null;
			$this->retain_status_information = ($row[$startcol + 24] !== null) ? (boolean) $row[$startcol + 24] : null;
			$this->retain_nonstatus_information = ($row[$startcol + 25] !== null) ? (boolean) $row[$startcol + 25] : null;
			$this->notification_interval = ($row[$startcol + 26] !== null) ? (int) $row[$startcol + 26] : null;
			$this->notification_period = ($row[$startcol + 27] !== null) ? (int) $row[$startcol + 27] : null;
			$this->notifications_enabled = ($row[$startcol + 28] !== null) ? (boolean) $row[$startcol + 28] : null;
			$this->notification_on_down = ($row[$startcol + 29] !== null) ? (boolean) $row[$startcol + 29] : null;
			$this->notification_on_unreachable = ($row[$startcol + 30] !== null) ? (boolean) $row[$startcol + 30] : null;
			$this->notification_on_recovery = ($row[$startcol + 31] !== null) ? (boolean) $row[$startcol + 31] : null;
			$this->notification_on_flapping = ($row[$startcol + 32] !== null) ? (boolean) $row[$startcol + 32] : null;
			$this->notification_on_scheduled_downtime = ($row[$startcol + 33] !== null) ? (boolean) $row[$startcol + 33] : null;
			$this->stalking_on_up = ($row[$startcol + 34] !== null) ? (boolean) $row[$startcol + 34] : null;
			$this->stalking_on_down = ($row[$startcol + 35] !== null) ? (boolean) $row[$startcol + 35] : null;
			$this->stalking_on_unreachable = ($row[$startcol + 36] !== null) ? (boolean) $row[$startcol + 36] : null;
			$this->failure_prediction_enabled = ($row[$startcol + 37] !== null) ? (boolean) $row[$startcol + 37] : null;
			$this->flap_detection_on_up = ($row[$startcol + 38] !== null) ? (boolean) $row[$startcol + 38] : null;
			$this->flap_detection_on_down = ($row[$startcol + 39] !== null) ? (boolean) $row[$startcol + 39] : null;
			$this->flap_detection_on_unreachable = ($row[$startcol + 40] !== null) ? (boolean) $row[$startcol + 40] : null;
			$this->notes = ($row[$startcol + 41] !== null) ? (string) $row[$startcol + 41] : null;
			$this->notes_url = ($row[$startcol + 42] !== null) ? (string) $row[$startcol + 42] : null;
			$this->action_url = ($row[$startcol + 43] !== null) ? (string) $row[$startcol + 43] : null;
			$this->icon_image = ($row[$startcol + 44] !== null) ? (string) $row[$startcol + 44] : null;
			$this->icon_image_alt = ($row[$startcol + 45] !== null) ? (string) $row[$startcol + 45] : null;
			$this->vrml_image = ($row[$startcol + 46] !== null) ? (string) $row[$startcol + 46] : null;
			$this->statusmap_image = ($row[$startcol + 47] !== null) ? (string) $row[$startcol + 47] : null;
			$this->two_d_coords = ($row[$startcol + 48] !== null) ? (string) $row[$startcol + 48] : null;
			$this->three_d_coords = ($row[$startcol + 49] !== null) ? (string) $row[$startcol + 49] : null;
			$this->resetModified();

			$this->setNew(false);

			if ($rehydrate) {
				$this->ensureConsistency();
			}

			// FIXME - using NUM_COLUMNS may be clearer.
			return $startcol + 50; // 50 = NagiosHostPeer::NUM_COLUMNS - NagiosHostPeer::NUM_LAZY_LOAD_COLUMNS).

		} catch (Exception $e) {
			throw new PropelException("Error populating NagiosHost object", $e);
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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_READ);
		}

		// We don't need to alter the object instance pool; we're just modifying this instance
		// already in the pool.

		$stmt = NagiosHostPeer::doSelectStmt($this->buildPkeyCriteria(), $con);
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
			$this->collNagiosServices = null;
			$this->lastNagiosServiceCriteria = null;

			$this->collNagiosHostContactMembers = null;
			$this->lastNagiosHostContactMemberCriteria = null;

			$this->collNagiosDependencys = null;
			$this->lastNagiosDependencyCriteria = null;

			$this->collNagiosDependencyTargets = null;
			$this->lastNagiosDependencyTargetCriteria = null;

			$this->collNagiosEscalations = null;
			$this->lastNagiosEscalationCriteria = null;

			$this->collNagiosHostContactgroups = null;
			$this->lastNagiosHostContactgroupCriteria = null;

			$this->collNagiosHostgroupMemberships = null;
			$this->lastNagiosHostgroupMembershipCriteria = null;

			$this->collNagiosHostCheckCommandParameters = null;
			$this->lastNagiosHostCheckCommandParameterCriteria = null;

			$this->collNagiosHostParentsRelatedByChildHost = null;
			$this->lastNagiosHostParentRelatedByChildHostCriteria = null;

			$this->collNagiosHostParentsRelatedByParentHost = null;
			$this->lastNagiosHostParentRelatedByParentHostCriteria = null;

			$this->collNagiosHostTemplateInheritances = null;
			$this->lastNagiosHostTemplateInheritanceCriteria = null;

			$this->collAutodiscoveryDevices = null;
			$this->lastAutodiscoveryDeviceCriteria = null;

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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			NagiosHostPeer::doDelete($this, $con);
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
			$con = Propel::getConnection(NagiosHostPeer::DATABASE_NAME, Propel::CONNECTION_WRITE);
		}
		
		$con->beginTransaction();
		try {
			$affectedRows = $this->doSave($con);
			$con->commit();
			NagiosHostPeer::addInstanceToPool($this);
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
				$this->modifiedColumns[] = NagiosHostPeer::ID;
			}

			// If this object has been modified, then save it to the database.
			if ($this->isModified()) {
				if ($this->isNew()) {
					$pk = NagiosHostPeer::doInsert($this, $con);
					$affectedRows += 1; // we are assuming that there is only 1 row per doInsert() which
										 // should always be true here (even though technically
										 // BasePeer::doInsert() can insert multiple rows).

					$this->setId($pk);  //[IMV] update autoincrement primary key

					$this->setNew(false);
				} else {
					$affectedRows += NagiosHostPeer::doUpdate($this, $con);
				}

				$this->resetModified(); // [HL] After being saved an object is no longer 'modified'
			}

			if ($this->collNagiosServices !== null) {
				foreach ($this->collNagiosServices as $referrerFK) {
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

			if ($this->collNagiosDependencys !== null) {
				foreach ($this->collNagiosDependencys as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosDependencyTargets !== null) {
				foreach ($this->collNagiosDependencyTargets as $referrerFK) {
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

			if ($this->collNagiosHostContactgroups !== null) {
				foreach ($this->collNagiosHostContactgroups as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostgroupMemberships !== null) {
				foreach ($this->collNagiosHostgroupMemberships as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostCheckCommandParameters !== null) {
				foreach ($this->collNagiosHostCheckCommandParameters as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostParentsRelatedByChildHost !== null) {
				foreach ($this->collNagiosHostParentsRelatedByChildHost as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostParentsRelatedByParentHost !== null) {
				foreach ($this->collNagiosHostParentsRelatedByParentHost as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collNagiosHostTemplateInheritances !== null) {
				foreach ($this->collNagiosHostTemplateInheritances as $referrerFK) {
					if (!$referrerFK->isDeleted()) {
						$affectedRows += $referrerFK->save($con);
					}
				}
			}

			if ($this->collAutodiscoveryDevices !== null) {
				foreach ($this->collAutodiscoveryDevices as $referrerFK) {
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


			if (($retval = NagiosHostPeer::doValidate($this, $columns)) !== true) {
				$failureMap = array_merge($failureMap, $retval);
			}


				if ($this->collNagiosServices !== null) {
					foreach ($this->collNagiosServices as $referrerFK) {
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

				if ($this->collNagiosDependencys !== null) {
					foreach ($this->collNagiosDependencys as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosDependencyTargets !== null) {
					foreach ($this->collNagiosDependencyTargets as $referrerFK) {
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

				if ($this->collNagiosHostContactgroups !== null) {
					foreach ($this->collNagiosHostContactgroups as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostgroupMemberships !== null) {
					foreach ($this->collNagiosHostgroupMemberships as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostCheckCommandParameters !== null) {
					foreach ($this->collNagiosHostCheckCommandParameters as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostParentsRelatedByChildHost !== null) {
					foreach ($this->collNagiosHostParentsRelatedByChildHost as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostParentsRelatedByParentHost !== null) {
					foreach ($this->collNagiosHostParentsRelatedByParentHost as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collNagiosHostTemplateInheritances !== null) {
					foreach ($this->collNagiosHostTemplateInheritances as $referrerFK) {
						if (!$referrerFK->validate($columns)) {
							$failureMap = array_merge($failureMap, $referrerFK->getValidationFailures());
						}
					}
				}

				if ($this->collAutodiscoveryDevices !== null) {
					foreach ($this->collAutodiscoveryDevices as $referrerFK) {
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
		$pos = NagiosHostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				return $this->getDisplayName();
				break;
			case 4:
				return $this->getInitialState();
				break;
			case 5:
				return $this->getAddress();
				break;
			case 6:
				return $this->getCheckCommand();
				break;
			case 7:
				return $this->getRetryInterval();
				break;
			case 8:
				return $this->getFirstNotificationDelay();
				break;
			case 9:
				return $this->getMaximumCheckAttempts();
				break;
			case 10:
				return $this->getCheckInterval();
				break;
			case 11:
				return $this->getPassiveChecksEnabled();
				break;
			case 12:
				return $this->getCheckPeriod();
				break;
			case 13:
				return $this->getObsessOverHost();
				break;
			case 14:
				return $this->getCheckFreshness();
				break;
			case 15:
				return $this->getFreshnessThreshold();
				break;
			case 16:
				return $this->getActiveChecksEnabled();
				break;
			case 17:
				return $this->getChecksEnabled();
				break;
			case 18:
				return $this->getEventHandler();
				break;
			case 19:
				return $this->getEventHandlerEnabled();
				break;
			case 20:
				return $this->getLowFlapThreshold();
				break;
			case 21:
				return $this->getHighFlapThreshold();
				break;
			case 22:
				return $this->getFlapDetectionEnabled();
				break;
			case 23:
				return $this->getProcessPerfData();
				break;
			case 24:
				return $this->getRetainStatusInformation();
				break;
			case 25:
				return $this->getRetainNonstatusInformation();
				break;
			case 26:
				return $this->getNotificationInterval();
				break;
			case 27:
				return $this->getNotificationPeriod();
				break;
			case 28:
				return $this->getNotificationsEnabled();
				break;
			case 29:
				return $this->getNotificationOnDown();
				break;
			case 30:
				return $this->getNotificationOnUnreachable();
				break;
			case 31:
				return $this->getNotificationOnRecovery();
				break;
			case 32:
				return $this->getNotificationOnFlapping();
				break;
			case 33:
				return $this->getNotificationOnScheduledDowntime();
				break;
			case 34:
				return $this->getStalkingOnUp();
				break;
			case 35:
				return $this->getStalkingOnDown();
				break;
			case 36:
				return $this->getStalkingOnUnreachable();
				break;
			case 37:
				return $this->getFailurePredictionEnabled();
				break;
			case 38:
				return $this->getFlapDetectionOnUp();
				break;
			case 39:
				return $this->getFlapDetectionOnDown();
				break;
			case 40:
				return $this->getFlapDetectionOnUnreachable();
				break;
			case 41:
				return $this->getNotes();
				break;
			case 42:
				return $this->getNotesUrl();
				break;
			case 43:
				return $this->getActionUrl();
				break;
			case 44:
				return $this->getIconImage();
				break;
			case 45:
				return $this->getIconImageAlt();
				break;
			case 46:
				return $this->getVrmlImage();
				break;
			case 47:
				return $this->getStatusmapImage();
				break;
			case 48:
				return $this->getTwoDCoords();
				break;
			case 49:
				return $this->getThreeDCoords();
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
		$keys = NagiosHostPeer::getFieldNames($keyType);
		$result = array(
			$keys[0] => $this->getId(),
			$keys[1] => $this->getName(),
			$keys[2] => $this->getAlias(),
			$keys[3] => $this->getDisplayName(),
			$keys[4] => $this->getInitialState(),
			$keys[5] => $this->getAddress(),
			$keys[6] => $this->getCheckCommand(),
			$keys[7] => $this->getRetryInterval(),
			$keys[8] => $this->getFirstNotificationDelay(),
			$keys[9] => $this->getMaximumCheckAttempts(),
			$keys[10] => $this->getCheckInterval(),
			$keys[11] => $this->getPassiveChecksEnabled(),
			$keys[12] => $this->getCheckPeriod(),
			$keys[13] => $this->getObsessOverHost(),
			$keys[14] => $this->getCheckFreshness(),
			$keys[15] => $this->getFreshnessThreshold(),
			$keys[16] => $this->getActiveChecksEnabled(),
			$keys[17] => $this->getChecksEnabled(),
			$keys[18] => $this->getEventHandler(),
			$keys[19] => $this->getEventHandlerEnabled(),
			$keys[20] => $this->getLowFlapThreshold(),
			$keys[21] => $this->getHighFlapThreshold(),
			$keys[22] => $this->getFlapDetectionEnabled(),
			$keys[23] => $this->getProcessPerfData(),
			$keys[24] => $this->getRetainStatusInformation(),
			$keys[25] => $this->getRetainNonstatusInformation(),
			$keys[26] => $this->getNotificationInterval(),
			$keys[27] => $this->getNotificationPeriod(),
			$keys[28] => $this->getNotificationsEnabled(),
			$keys[29] => $this->getNotificationOnDown(),
			$keys[30] => $this->getNotificationOnUnreachable(),
			$keys[31] => $this->getNotificationOnRecovery(),
			$keys[32] => $this->getNotificationOnFlapping(),
			$keys[33] => $this->getNotificationOnScheduledDowntime(),
			$keys[34] => $this->getStalkingOnUp(),
			$keys[35] => $this->getStalkingOnDown(),
			$keys[36] => $this->getStalkingOnUnreachable(),
			$keys[37] => $this->getFailurePredictionEnabled(),
			$keys[38] => $this->getFlapDetectionOnUp(),
			$keys[39] => $this->getFlapDetectionOnDown(),
			$keys[40] => $this->getFlapDetectionOnUnreachable(),
			$keys[41] => $this->getNotes(),
			$keys[42] => $this->getNotesUrl(),
			$keys[43] => $this->getActionUrl(),
			$keys[44] => $this->getIconImage(),
			$keys[45] => $this->getIconImageAlt(),
			$keys[46] => $this->getVrmlImage(),
			$keys[47] => $this->getStatusmapImage(),
			$keys[48] => $this->getTwoDCoords(),
			$keys[49] => $this->getThreeDCoords(),
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
		$pos = NagiosHostPeer::translateFieldName($name, $type, BasePeer::TYPE_NUM);
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
				$this->setDisplayName($value);
				break;
			case 4:
				$this->setInitialState($value);
				break;
			case 5:
				$this->setAddress($value);
				break;
			case 6:
				$this->setCheckCommand($value);
				break;
			case 7:
				$this->setRetryInterval($value);
				break;
			case 8:
				$this->setFirstNotificationDelay($value);
				break;
			case 9:
				$this->setMaximumCheckAttempts($value);
				break;
			case 10:
				$this->setCheckInterval($value);
				break;
			case 11:
				$this->setPassiveChecksEnabled($value);
				break;
			case 12:
				$this->setCheckPeriod($value);
				break;
			case 13:
				$this->setObsessOverHost($value);
				break;
			case 14:
				$this->setCheckFreshness($value);
				break;
			case 15:
				$this->setFreshnessThreshold($value);
				break;
			case 16:
				$this->setActiveChecksEnabled($value);
				break;
			case 17:
				$this->setChecksEnabled($value);
				break;
			case 18:
				$this->setEventHandler($value);
				break;
			case 19:
				$this->setEventHandlerEnabled($value);
				break;
			case 20:
				$this->setLowFlapThreshold($value);
				break;
			case 21:
				$this->setHighFlapThreshold($value);
				break;
			case 22:
				$this->setFlapDetectionEnabled($value);
				break;
			case 23:
				$this->setProcessPerfData($value);
				break;
			case 24:
				$this->setRetainStatusInformation($value);
				break;
			case 25:
				$this->setRetainNonstatusInformation($value);
				break;
			case 26:
				$this->setNotificationInterval($value);
				break;
			case 27:
				$this->setNotificationPeriod($value);
				break;
			case 28:
				$this->setNotificationsEnabled($value);
				break;
			case 29:
				$this->setNotificationOnDown($value);
				break;
			case 30:
				$this->setNotificationOnUnreachable($value);
				break;
			case 31:
				$this->setNotificationOnRecovery($value);
				break;
			case 32:
				$this->setNotificationOnFlapping($value);
				break;
			case 33:
				$this->setNotificationOnScheduledDowntime($value);
				break;
			case 34:
				$this->setStalkingOnUp($value);
				break;
			case 35:
				$this->setStalkingOnDown($value);
				break;
			case 36:
				$this->setStalkingOnUnreachable($value);
				break;
			case 37:
				$this->setFailurePredictionEnabled($value);
				break;
			case 38:
				$this->setFlapDetectionOnUp($value);
				break;
			case 39:
				$this->setFlapDetectionOnDown($value);
				break;
			case 40:
				$this->setFlapDetectionOnUnreachable($value);
				break;
			case 41:
				$this->setNotes($value);
				break;
			case 42:
				$this->setNotesUrl($value);
				break;
			case 43:
				$this->setActionUrl($value);
				break;
			case 44:
				$this->setIconImage($value);
				break;
			case 45:
				$this->setIconImageAlt($value);
				break;
			case 46:
				$this->setVrmlImage($value);
				break;
			case 47:
				$this->setStatusmapImage($value);
				break;
			case 48:
				$this->setTwoDCoords($value);
				break;
			case 49:
				$this->setThreeDCoords($value);
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
		$keys = NagiosHostPeer::getFieldNames($keyType);

		if (array_key_exists($keys[0], $arr)) $this->setId($arr[$keys[0]]);
		if (array_key_exists($keys[1], $arr)) $this->setName($arr[$keys[1]]);
		if (array_key_exists($keys[2], $arr)) $this->setAlias($arr[$keys[2]]);
		if (array_key_exists($keys[3], $arr)) $this->setDisplayName($arr[$keys[3]]);
		if (array_key_exists($keys[4], $arr)) $this->setInitialState($arr[$keys[4]]);
		if (array_key_exists($keys[5], $arr)) $this->setAddress($arr[$keys[5]]);
		if (array_key_exists($keys[6], $arr)) $this->setCheckCommand($arr[$keys[6]]);
		if (array_key_exists($keys[7], $arr)) $this->setRetryInterval($arr[$keys[7]]);
		if (array_key_exists($keys[8], $arr)) $this->setFirstNotificationDelay($arr[$keys[8]]);
		if (array_key_exists($keys[9], $arr)) $this->setMaximumCheckAttempts($arr[$keys[9]]);
		if (array_key_exists($keys[10], $arr)) $this->setCheckInterval($arr[$keys[10]]);
		if (array_key_exists($keys[11], $arr)) $this->setPassiveChecksEnabled($arr[$keys[11]]);
		if (array_key_exists($keys[12], $arr)) $this->setCheckPeriod($arr[$keys[12]]);
		if (array_key_exists($keys[13], $arr)) $this->setObsessOverHost($arr[$keys[13]]);
		if (array_key_exists($keys[14], $arr)) $this->setCheckFreshness($arr[$keys[14]]);
		if (array_key_exists($keys[15], $arr)) $this->setFreshnessThreshold($arr[$keys[15]]);
		if (array_key_exists($keys[16], $arr)) $this->setActiveChecksEnabled($arr[$keys[16]]);
		if (array_key_exists($keys[17], $arr)) $this->setChecksEnabled($arr[$keys[17]]);
		if (array_key_exists($keys[18], $arr)) $this->setEventHandler($arr[$keys[18]]);
		if (array_key_exists($keys[19], $arr)) $this->setEventHandlerEnabled($arr[$keys[19]]);
		if (array_key_exists($keys[20], $arr)) $this->setLowFlapThreshold($arr[$keys[20]]);
		if (array_key_exists($keys[21], $arr)) $this->setHighFlapThreshold($arr[$keys[21]]);
		if (array_key_exists($keys[22], $arr)) $this->setFlapDetectionEnabled($arr[$keys[22]]);
		if (array_key_exists($keys[23], $arr)) $this->setProcessPerfData($arr[$keys[23]]);
		if (array_key_exists($keys[24], $arr)) $this->setRetainStatusInformation($arr[$keys[24]]);
		if (array_key_exists($keys[25], $arr)) $this->setRetainNonstatusInformation($arr[$keys[25]]);
		if (array_key_exists($keys[26], $arr)) $this->setNotificationInterval($arr[$keys[26]]);
		if (array_key_exists($keys[27], $arr)) $this->setNotificationPeriod($arr[$keys[27]]);
		if (array_key_exists($keys[28], $arr)) $this->setNotificationsEnabled($arr[$keys[28]]);
		if (array_key_exists($keys[29], $arr)) $this->setNotificationOnDown($arr[$keys[29]]);
		if (array_key_exists($keys[30], $arr)) $this->setNotificationOnUnreachable($arr[$keys[30]]);
		if (array_key_exists($keys[31], $arr)) $this->setNotificationOnRecovery($arr[$keys[31]]);
		if (array_key_exists($keys[32], $arr)) $this->setNotificationOnFlapping($arr[$keys[32]]);
		if (array_key_exists($keys[33], $arr)) $this->setNotificationOnScheduledDowntime($arr[$keys[33]]);
		if (array_key_exists($keys[34], $arr)) $this->setStalkingOnUp($arr[$keys[34]]);
		if (array_key_exists($keys[35], $arr)) $this->setStalkingOnDown($arr[$keys[35]]);
		if (array_key_exists($keys[36], $arr)) $this->setStalkingOnUnreachable($arr[$keys[36]]);
		if (array_key_exists($keys[37], $arr)) $this->setFailurePredictionEnabled($arr[$keys[37]]);
		if (array_key_exists($keys[38], $arr)) $this->setFlapDetectionOnUp($arr[$keys[38]]);
		if (array_key_exists($keys[39], $arr)) $this->setFlapDetectionOnDown($arr[$keys[39]]);
		if (array_key_exists($keys[40], $arr)) $this->setFlapDetectionOnUnreachable($arr[$keys[40]]);
		if (array_key_exists($keys[41], $arr)) $this->setNotes($arr[$keys[41]]);
		if (array_key_exists($keys[42], $arr)) $this->setNotesUrl($arr[$keys[42]]);
		if (array_key_exists($keys[43], $arr)) $this->setActionUrl($arr[$keys[43]]);
		if (array_key_exists($keys[44], $arr)) $this->setIconImage($arr[$keys[44]]);
		if (array_key_exists($keys[45], $arr)) $this->setIconImageAlt($arr[$keys[45]]);
		if (array_key_exists($keys[46], $arr)) $this->setVrmlImage($arr[$keys[46]]);
		if (array_key_exists($keys[47], $arr)) $this->setStatusmapImage($arr[$keys[47]]);
		if (array_key_exists($keys[48], $arr)) $this->setTwoDCoords($arr[$keys[48]]);
		if (array_key_exists($keys[49], $arr)) $this->setThreeDCoords($arr[$keys[49]]);
	}

	/**
	 * Build a Criteria object containing the values of all modified columns in this object.
	 *
	 * @return     Criteria The Criteria object containing all modified values.
	 */
	public function buildCriteria()
	{
		$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);

		if ($this->isColumnModified(NagiosHostPeer::ID)) $criteria->add(NagiosHostPeer::ID, $this->id);
		if ($this->isColumnModified(NagiosHostPeer::NAME)) $criteria->add(NagiosHostPeer::NAME, $this->name);
		if ($this->isColumnModified(NagiosHostPeer::ALIAS)) $criteria->add(NagiosHostPeer::ALIAS, $this->alias);
		if ($this->isColumnModified(NagiosHostPeer::DISPLAY_NAME)) $criteria->add(NagiosHostPeer::DISPLAY_NAME, $this->display_name);
		if ($this->isColumnModified(NagiosHostPeer::INITIAL_STATE)) $criteria->add(NagiosHostPeer::INITIAL_STATE, $this->initial_state);
		if ($this->isColumnModified(NagiosHostPeer::ADDRESS)) $criteria->add(NagiosHostPeer::ADDRESS, $this->address);
		if ($this->isColumnModified(NagiosHostPeer::CHECK_COMMAND)) $criteria->add(NagiosHostPeer::CHECK_COMMAND, $this->check_command);
		if ($this->isColumnModified(NagiosHostPeer::RETRY_INTERVAL)) $criteria->add(NagiosHostPeer::RETRY_INTERVAL, $this->retry_interval);
		if ($this->isColumnModified(NagiosHostPeer::FIRST_NOTIFICATION_DELAY)) $criteria->add(NagiosHostPeer::FIRST_NOTIFICATION_DELAY, $this->first_notification_delay);
		if ($this->isColumnModified(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS)) $criteria->add(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS, $this->maximum_check_attempts);
		if ($this->isColumnModified(NagiosHostPeer::CHECK_INTERVAL)) $criteria->add(NagiosHostPeer::CHECK_INTERVAL, $this->check_interval);
		if ($this->isColumnModified(NagiosHostPeer::PASSIVE_CHECKS_ENABLED)) $criteria->add(NagiosHostPeer::PASSIVE_CHECKS_ENABLED, $this->passive_checks_enabled);
		if ($this->isColumnModified(NagiosHostPeer::CHECK_PERIOD)) $criteria->add(NagiosHostPeer::CHECK_PERIOD, $this->check_period);
		if ($this->isColumnModified(NagiosHostPeer::OBSESS_OVER_HOST)) $criteria->add(NagiosHostPeer::OBSESS_OVER_HOST, $this->obsess_over_host);
		if ($this->isColumnModified(NagiosHostPeer::CHECK_FRESHNESS)) $criteria->add(NagiosHostPeer::CHECK_FRESHNESS, $this->check_freshness);
		if ($this->isColumnModified(NagiosHostPeer::FRESHNESS_THRESHOLD)) $criteria->add(NagiosHostPeer::FRESHNESS_THRESHOLD, $this->freshness_threshold);
		if ($this->isColumnModified(NagiosHostPeer::ACTIVE_CHECKS_ENABLED)) $criteria->add(NagiosHostPeer::ACTIVE_CHECKS_ENABLED, $this->active_checks_enabled);
		if ($this->isColumnModified(NagiosHostPeer::CHECKS_ENABLED)) $criteria->add(NagiosHostPeer::CHECKS_ENABLED, $this->checks_enabled);
		if ($this->isColumnModified(NagiosHostPeer::EVENT_HANDLER)) $criteria->add(NagiosHostPeer::EVENT_HANDLER, $this->event_handler);
		if ($this->isColumnModified(NagiosHostPeer::EVENT_HANDLER_ENABLED)) $criteria->add(NagiosHostPeer::EVENT_HANDLER_ENABLED, $this->event_handler_enabled);
		if ($this->isColumnModified(NagiosHostPeer::LOW_FLAP_THRESHOLD)) $criteria->add(NagiosHostPeer::LOW_FLAP_THRESHOLD, $this->low_flap_threshold);
		if ($this->isColumnModified(NagiosHostPeer::HIGH_FLAP_THRESHOLD)) $criteria->add(NagiosHostPeer::HIGH_FLAP_THRESHOLD, $this->high_flap_threshold);
		if ($this->isColumnModified(NagiosHostPeer::FLAP_DETECTION_ENABLED)) $criteria->add(NagiosHostPeer::FLAP_DETECTION_ENABLED, $this->flap_detection_enabled);
		if ($this->isColumnModified(NagiosHostPeer::PROCESS_PERF_DATA)) $criteria->add(NagiosHostPeer::PROCESS_PERF_DATA, $this->process_perf_data);
		if ($this->isColumnModified(NagiosHostPeer::RETAIN_STATUS_INFORMATION)) $criteria->add(NagiosHostPeer::RETAIN_STATUS_INFORMATION, $this->retain_status_information);
		if ($this->isColumnModified(NagiosHostPeer::RETAIN_NONSTATUS_INFORMATION)) $criteria->add(NagiosHostPeer::RETAIN_NONSTATUS_INFORMATION, $this->retain_nonstatus_information);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_INTERVAL)) $criteria->add(NagiosHostPeer::NOTIFICATION_INTERVAL, $this->notification_interval);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_PERIOD)) $criteria->add(NagiosHostPeer::NOTIFICATION_PERIOD, $this->notification_period);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATIONS_ENABLED)) $criteria->add(NagiosHostPeer::NOTIFICATIONS_ENABLED, $this->notifications_enabled);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_ON_DOWN)) $criteria->add(NagiosHostPeer::NOTIFICATION_ON_DOWN, $this->notification_on_down);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_ON_UNREACHABLE)) $criteria->add(NagiosHostPeer::NOTIFICATION_ON_UNREACHABLE, $this->notification_on_unreachable);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_ON_RECOVERY)) $criteria->add(NagiosHostPeer::NOTIFICATION_ON_RECOVERY, $this->notification_on_recovery);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_ON_FLAPPING)) $criteria->add(NagiosHostPeer::NOTIFICATION_ON_FLAPPING, $this->notification_on_flapping);
		if ($this->isColumnModified(NagiosHostPeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME)) $criteria->add(NagiosHostPeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME, $this->notification_on_scheduled_downtime);
		if ($this->isColumnModified(NagiosHostPeer::STALKING_ON_UP)) $criteria->add(NagiosHostPeer::STALKING_ON_UP, $this->stalking_on_up);
		if ($this->isColumnModified(NagiosHostPeer::STALKING_ON_DOWN)) $criteria->add(NagiosHostPeer::STALKING_ON_DOWN, $this->stalking_on_down);
		if ($this->isColumnModified(NagiosHostPeer::STALKING_ON_UNREACHABLE)) $criteria->add(NagiosHostPeer::STALKING_ON_UNREACHABLE, $this->stalking_on_unreachable);
		if ($this->isColumnModified(NagiosHostPeer::FAILURE_PREDICTION_ENABLED)) $criteria->add(NagiosHostPeer::FAILURE_PREDICTION_ENABLED, $this->failure_prediction_enabled);
		if ($this->isColumnModified(NagiosHostPeer::FLAP_DETECTION_ON_UP)) $criteria->add(NagiosHostPeer::FLAP_DETECTION_ON_UP, $this->flap_detection_on_up);
		if ($this->isColumnModified(NagiosHostPeer::FLAP_DETECTION_ON_DOWN)) $criteria->add(NagiosHostPeer::FLAP_DETECTION_ON_DOWN, $this->flap_detection_on_down);
		if ($this->isColumnModified(NagiosHostPeer::FLAP_DETECTION_ON_UNREACHABLE)) $criteria->add(NagiosHostPeer::FLAP_DETECTION_ON_UNREACHABLE, $this->flap_detection_on_unreachable);
		if ($this->isColumnModified(NagiosHostPeer::NOTES)) $criteria->add(NagiosHostPeer::NOTES, $this->notes);
		if ($this->isColumnModified(NagiosHostPeer::NOTES_URL)) $criteria->add(NagiosHostPeer::NOTES_URL, $this->notes_url);
		if ($this->isColumnModified(NagiosHostPeer::ACTION_URL)) $criteria->add(NagiosHostPeer::ACTION_URL, $this->action_url);
		if ($this->isColumnModified(NagiosHostPeer::ICON_IMAGE)) $criteria->add(NagiosHostPeer::ICON_IMAGE, $this->icon_image);
		if ($this->isColumnModified(NagiosHostPeer::ICON_IMAGE_ALT)) $criteria->add(NagiosHostPeer::ICON_IMAGE_ALT, $this->icon_image_alt);
		if ($this->isColumnModified(NagiosHostPeer::VRML_IMAGE)) $criteria->add(NagiosHostPeer::VRML_IMAGE, $this->vrml_image);
		if ($this->isColumnModified(NagiosHostPeer::STATUSMAP_IMAGE)) $criteria->add(NagiosHostPeer::STATUSMAP_IMAGE, $this->statusmap_image);
		if ($this->isColumnModified(NagiosHostPeer::TWO_D_COORDS)) $criteria->add(NagiosHostPeer::TWO_D_COORDS, $this->two_d_coords);
		if ($this->isColumnModified(NagiosHostPeer::THREE_D_COORDS)) $criteria->add(NagiosHostPeer::THREE_D_COORDS, $this->three_d_coords);

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
		$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);

		$criteria->add(NagiosHostPeer::ID, $this->id);

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
	 * @param      object $copyObj An object of NagiosHost (or compatible) type.
	 * @param      boolean $deepCopy Whether to also copy all rows that refer (by fkey) to the current row.
	 * @throws     PropelException
	 */
	public function copyInto($copyObj, $deepCopy = false)
	{

		$copyObj->setName($this->name);

		$copyObj->setAlias($this->alias);

		$copyObj->setDisplayName($this->display_name);

		$copyObj->setInitialState($this->initial_state);

		$copyObj->setAddress($this->address);

		$copyObj->setCheckCommand($this->check_command);

		$copyObj->setRetryInterval($this->retry_interval);

		$copyObj->setFirstNotificationDelay($this->first_notification_delay);

		$copyObj->setMaximumCheckAttempts($this->maximum_check_attempts);

		$copyObj->setCheckInterval($this->check_interval);

		$copyObj->setPassiveChecksEnabled($this->passive_checks_enabled);

		$copyObj->setCheckPeriod($this->check_period);

		$copyObj->setObsessOverHost($this->obsess_over_host);

		$copyObj->setCheckFreshness($this->check_freshness);

		$copyObj->setFreshnessThreshold($this->freshness_threshold);

		$copyObj->setActiveChecksEnabled($this->active_checks_enabled);

		$copyObj->setChecksEnabled($this->checks_enabled);

		$copyObj->setEventHandler($this->event_handler);

		$copyObj->setEventHandlerEnabled($this->event_handler_enabled);

		$copyObj->setLowFlapThreshold($this->low_flap_threshold);

		$copyObj->setHighFlapThreshold($this->high_flap_threshold);

		$copyObj->setFlapDetectionEnabled($this->flap_detection_enabled);

		$copyObj->setProcessPerfData($this->process_perf_data);

		$copyObj->setRetainStatusInformation($this->retain_status_information);

		$copyObj->setRetainNonstatusInformation($this->retain_nonstatus_information);

		$copyObj->setNotificationInterval($this->notification_interval);

		$copyObj->setNotificationPeriod($this->notification_period);

		$copyObj->setNotificationsEnabled($this->notifications_enabled);

		$copyObj->setNotificationOnDown($this->notification_on_down);

		$copyObj->setNotificationOnUnreachable($this->notification_on_unreachable);

		$copyObj->setNotificationOnRecovery($this->notification_on_recovery);

		$copyObj->setNotificationOnFlapping($this->notification_on_flapping);

		$copyObj->setNotificationOnScheduledDowntime($this->notification_on_scheduled_downtime);

		$copyObj->setStalkingOnUp($this->stalking_on_up);

		$copyObj->setStalkingOnDown($this->stalking_on_down);

		$copyObj->setStalkingOnUnreachable($this->stalking_on_unreachable);

		$copyObj->setFailurePredictionEnabled($this->failure_prediction_enabled);

		$copyObj->setFlapDetectionOnUp($this->flap_detection_on_up);

		$copyObj->setFlapDetectionOnDown($this->flap_detection_on_down);

		$copyObj->setFlapDetectionOnUnreachable($this->flap_detection_on_unreachable);

		$copyObj->setNotes($this->notes);

		$copyObj->setNotesUrl($this->notes_url);

		$copyObj->setActionUrl($this->action_url);

		$copyObj->setIconImage($this->icon_image);

		$copyObj->setIconImageAlt($this->icon_image_alt);

		$copyObj->setVrmlImage($this->vrml_image);

		$copyObj->setStatusmapImage($this->statusmap_image);

		$copyObj->setTwoDCoords($this->two_d_coords);

		$copyObj->setThreeDCoords($this->three_d_coords);


		if ($deepCopy) {
			// important: temporarily setNew(false) because this affects the behavior of
			// the getter/setter methods for fkey referrer objects.
			$copyObj->setNew(false);

			foreach ($this->getNagiosServices() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosService($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostContactMembers() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostContactMember($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencys() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependency($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosDependencyTargets() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosDependencyTarget($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosEscalations() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostContactgroups() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostContactgroup($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostgroupMemberships() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostgroupMembership($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostCheckCommandParameters() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostCheckCommandParameter($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostParentsRelatedByChildHost() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostParentRelatedByChildHost($relObj->copy($deepCopy));
				}
			}

			foreach ($this->getNagiosHostParentsRelatedByParentHost() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addNagiosHostParentRelatedByParentHost($relObj->copy($deepCopy));
				}
			}

			$numInheritance=0;
        	        foreach ($this->getNagiosHostTemplateInheritances() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
                                	$newInheritance = new NagiosHostTemplateInheritance();
                                	$newInheritance->setNagiosHost($copyObj);
        		                $newInheritance->setNagiosHostTemplateRelatedByTargetTemplate($relObj);
					$newInheritance->setOrder($numInheritance);
					//$copyObj->addNagiosHostTemplateInheritance($relObj->copy($deepCopy));
                        	}
				$numInheritance++;
                	}

			foreach ($this->getAutodiscoveryDevices() as $relObj) {
				if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
					$copyObj->addAutodiscoveryDevice($relObj->copy($deepCopy));
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
	 * @return     NagiosHost Clone of current object.
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
	 * @return     NagiosHostPeer
	 */
	public function getPeer()
	{
		if (self::$peer === null) {
			self::$peer = new NagiosHostPeer();
		}
		return self::$peer;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosHost The current object (for fluent API support)
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
			$v->addNagiosHostRelatedByCheckCommand($this);
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
			   $this->aNagiosCommandRelatedByCheckCommand->addNagiosHostsRelatedByCheckCommand($this);
			 */
		}
		return $this->aNagiosCommandRelatedByCheckCommand;
	}

	/**
	 * Declares an association between this object and a NagiosCommand object.
	 *
	 * @param      NagiosCommand $v
	 * @return     NagiosHost The current object (for fluent API support)
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
			$v->addNagiosHostRelatedByEventHandler($this);
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
			   $this->aNagiosCommandRelatedByEventHandler->addNagiosHostsRelatedByEventHandler($this);
			 */
		}
		return $this->aNagiosCommandRelatedByEventHandler;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosHost The current object (for fluent API support)
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
			$v->addNagiosHostRelatedByCheckPeriod($this);
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
			   $this->aNagiosTimeperiodRelatedByCheckPeriod->addNagiosHostsRelatedByCheckPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByCheckPeriod;
	}

	/**
	 * Declares an association between this object and a NagiosTimeperiod object.
	 *
	 * @param      NagiosTimeperiod $v
	 * @return     NagiosHost The current object (for fluent API support)
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
			$v->addNagiosHostRelatedByNotificationPeriod($this);
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
			   $this->aNagiosTimeperiodRelatedByNotificationPeriod->addNagiosHostsRelatedByNotificationPeriod($this);
			 */
		}
		return $this->aNagiosTimeperiodRelatedByNotificationPeriod;
	}

	/**
	 * Clears out the collNagiosServices collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosServices()
	 */
	public function clearNagiosServices()
	{
		$this->collNagiosServices = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosServices collection (array).
	 *
	 * By default this just sets the collNagiosServices collection to an empty array (like clearcollNagiosServices());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosServices()
	{
		$this->collNagiosServices = array();
	}

	/**
	 * Gets an array of NagiosService objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosServices from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosService[]
	 * @throws     PropelException
	 */
	public function getNagiosServices($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
			   $this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				$this->collNagiosServices = NagiosServicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosServicePeer::HOST, $this->id);

				NagiosServicePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
					$this->collNagiosServices = NagiosServicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;
		return $this->collNagiosServices;
	}

	/**
	 * Returns the number of related NagiosService objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosService objects.
	 * @throws     PropelException
	 */
	public function countNagiosServices(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$count = NagiosServicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosServicePeer::HOST, $this->id);

				if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
					$count = NagiosServicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosServices);
				}
			} else {
				$count = count($this->collNagiosServices);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosService object to this object
	 * through the NagiosService foreign key attribute.
	 *
	 * @param      NagiosService $l NagiosService
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosService(NagiosService $l)
	{
		if ($this->collNagiosServices === null) {
			$this->initNagiosServices();
		}
		if (!in_array($l, $this->collNagiosServices, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosServices, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosCommandRelatedByCheckCommand($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByCheckCommand($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosCommandRelatedByEventHandler($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosCommandRelatedByEventHandler($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosTimeperiodRelatedByCheckPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByCheckPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosServices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosServicesJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosServices === null) {
			if ($this->isNew()) {
				$this->collNagiosServices = array();
			} else {

				$criteria->add(NagiosServicePeer::HOST, $this->id);

				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosServicePeer::HOST, $this->id);

			if (!isset($this->lastNagiosServiceCriteria) || !$this->lastNagiosServiceCriteria->equals($criteria)) {
				$this->collNagiosServices = NagiosServicePeer::doSelectJoinNagiosTimeperiodRelatedByNotificationPeriod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosServiceCriteria = $criteria;

		return $this->collNagiosServices;
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
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostContactMembers from storage. If this NagiosHost is new, it will return
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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

				NagiosHostContactMemberPeer::addSelectColumns($criteria);
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
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

				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

				$count = NagiosHostContactMemberPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

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
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostContactMembersJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactMemberCriteria = $criteria;

		return $this->collNagiosHostContactMembers;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostContactMembers from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostContactMembersJoinNagiosContact($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactMembers === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactMembers = array();
			} else {

				$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactMemberPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostContactMemberCriteria) || !$this->lastNagiosHostContactMemberCriteria->equals($criteria)) {
				$this->collNagiosHostContactMembers = NagiosHostContactMemberPeer::doSelectJoinNagiosContact($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactMemberCriteria = $criteria;

		return $this->collNagiosHostContactMembers;
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
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosDependencys from storage. If this NagiosHost is new, it will return
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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
			   $this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				NagiosDependencyPeer::addSelectColumns($criteria);
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
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

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$count = NagiosDependencyPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

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
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencysJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencysJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::HOST, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencysJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencysJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencys from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencysJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencys === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencys = array();
			} else {

				$criteria->add(NagiosDependencyPeer::HOST, $this->id);

				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyPeer::HOST, $this->id);

			if (!isset($this->lastNagiosDependencyCriteria) || !$this->lastNagiosDependencyCriteria->equals($criteria)) {
				$this->collNagiosDependencys = NagiosDependencyPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyCriteria = $criteria;

		return $this->collNagiosDependencys;
	}

	/**
	 * Clears out the collNagiosDependencyTargets collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosDependencyTargets()
	 */
	public function clearNagiosDependencyTargets()
	{
		$this->collNagiosDependencyTargets = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosDependencyTargets collection (array).
	 *
	 * By default this just sets the collNagiosDependencyTargets collection to an empty array (like clearcollNagiosDependencyTargets());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosDependencyTargets()
	{
		$this->collNagiosDependencyTargets = array();
	}

	/**
	 * Gets an array of NagiosDependencyTarget objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosDependencyTargets from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosDependencyTarget[]
	 * @throws     PropelException
	 */
	public function getNagiosDependencyTargets($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencyTargets === null) {
			if ($this->isNew()) {
			   $this->collNagiosDependencyTargets = array();
			} else {

				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				NagiosDependencyTargetPeer::addSelectColumns($criteria);
				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				NagiosDependencyTargetPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosDependencyTargetCriteria) || !$this->lastNagiosDependencyTargetCriteria->equals($criteria)) {
					$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosDependencyTargetCriteria = $criteria;
		return $this->collNagiosDependencyTargets;
	}

	/**
	 * Returns the number of related NagiosDependencyTarget objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosDependencyTarget objects.
	 * @throws     PropelException
	 */
	public function countNagiosDependencyTargets(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosDependencyTargets === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				$count = NagiosDependencyTargetPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				if (!isset($this->lastNagiosDependencyTargetCriteria) || !$this->lastNagiosDependencyTargetCriteria->equals($criteria)) {
					$count = NagiosDependencyTargetPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosDependencyTargets);
				}
			} else {
				$count = count($this->collNagiosDependencyTargets);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosDependencyTarget object to this object
	 * through the NagiosDependencyTarget foreign key attribute.
	 *
	 * @param      NagiosDependencyTarget $l NagiosDependencyTarget
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosDependencyTarget(NagiosDependencyTarget $l)
	{
		if ($this->collNagiosDependencyTargets === null) {
			$this->initNagiosDependencyTargets();
		}
		if (!in_array($l, $this->collNagiosDependencyTargets, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosDependencyTargets, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencyTargetsJoinNagiosDependency($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencyTargets === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencyTargets = array();
			} else {

				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosDependency($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

			if (!isset($this->lastNagiosDependencyTargetCriteria) || !$this->lastNagiosDependencyTargetCriteria->equals($criteria)) {
				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosDependency($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyTargetCriteria = $criteria;

		return $this->collNagiosDependencyTargets;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencyTargetsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencyTargets === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencyTargets = array();
			} else {

				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

			if (!isset($this->lastNagiosDependencyTargetCriteria) || !$this->lastNagiosDependencyTargetCriteria->equals($criteria)) {
				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyTargetCriteria = $criteria;

		return $this->collNagiosDependencyTargets;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosDependencyTargets from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosDependencyTargetsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosDependencyTargets === null) {
			if ($this->isNew()) {
				$this->collNagiosDependencyTargets = array();
			} else {

				$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosDependencyTargetPeer::TARGET_HOST, $this->id);

			if (!isset($this->lastNagiosDependencyTargetCriteria) || !$this->lastNagiosDependencyTargetCriteria->equals($criteria)) {
				$this->collNagiosDependencyTargets = NagiosDependencyTargetPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosDependencyTargetCriteria = $criteria;

		return $this->collNagiosDependencyTargets;
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
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosEscalations from storage. If this NagiosHost is new, it will return
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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
			   $this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				NagiosEscalationPeer::addSelectColumns($criteria);
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

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
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
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

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$count = NagiosEscalationPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

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
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosEscalationsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosEscalationsJoinNagiosServiceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::HOST, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosServiceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosEscalationsJoinNagiosService($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosService($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosEscalationsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::HOST, $this->id);

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
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosEscalations from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosEscalationsJoinNagiosTimeperiod($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosEscalations === null) {
			if ($this->isNew()) {
				$this->collNagiosEscalations = array();
			} else {

				$criteria->add(NagiosEscalationPeer::HOST, $this->id);

				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosEscalationPeer::HOST, $this->id);

			if (!isset($this->lastNagiosEscalationCriteria) || !$this->lastNagiosEscalationCriteria->equals($criteria)) {
				$this->collNagiosEscalations = NagiosEscalationPeer::doSelectJoinNagiosTimeperiod($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosEscalationCriteria = $criteria;

		return $this->collNagiosEscalations;
	}

	/**
	 * Clears out the collNagiosHostContactgroups collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostContactgroups()
	 */
	public function clearNagiosHostContactgroups()
	{
		$this->collNagiosHostContactgroups = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostContactgroups collection (array).
	 *
	 * By default this just sets the collNagiosHostContactgroups collection to an empty array (like clearcollNagiosHostContactgroups());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostContactgroups()
	{
		$this->collNagiosHostContactgroups = array();
	}

	/**
	 * Gets an array of NagiosHostContactgroup objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostContactgroups from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostContactgroup[]
	 * @throws     PropelException
	 */
	public function getNagiosHostContactgroups($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactgroups === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostContactgroups = array();
			} else {

				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				NagiosHostContactgroupPeer::addSelectColumns($criteria);
				$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				NagiosHostContactgroupPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostContactgroupCriteria) || !$this->lastNagiosHostContactgroupCriteria->equals($criteria)) {
					$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostContactgroupCriteria = $criteria;
		return $this->collNagiosHostContactgroups;
	}

	/**
	 * Returns the number of related NagiosHostContactgroup objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostContactgroup objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostContactgroups(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostContactgroups === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				$count = NagiosHostContactgroupPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				if (!isset($this->lastNagiosHostContactgroupCriteria) || !$this->lastNagiosHostContactgroupCriteria->equals($criteria)) {
					$count = NagiosHostContactgroupPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostContactgroups);
				}
			} else {
				$count = count($this->collNagiosHostContactgroups);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostContactgroup object to this object
	 * through the NagiosHostContactgroup foreign key attribute.
	 *
	 * @param      NagiosHostContactgroup $l NagiosHostContactgroup
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostContactgroup(NagiosHostContactgroup $l)
	{
		if ($this->collNagiosHostContactgroups === null) {
			$this->initNagiosHostContactgroups();
		}
		if (!in_array($l, $this->collNagiosHostContactgroups, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostContactgroups, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostContactgroups from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostContactgroupsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactgroups === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactgroups = array();
			} else {

				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostContactgroupCriteria) || !$this->lastNagiosHostContactgroupCriteria->equals($criteria)) {
				$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactgroupCriteria = $criteria;

		return $this->collNagiosHostContactgroups;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostContactgroups from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostContactgroupsJoinNagiosContactGroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostContactgroups === null) {
			if ($this->isNew()) {
				$this->collNagiosHostContactgroups = array();
			} else {

				$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

				$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostContactgroupPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostContactgroupCriteria) || !$this->lastNagiosHostContactgroupCriteria->equals($criteria)) {
				$this->collNagiosHostContactgroups = NagiosHostContactgroupPeer::doSelectJoinNagiosContactGroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostContactgroupCriteria = $criteria;

		return $this->collNagiosHostContactgroups;
	}

	/**
	 * Clears out the collNagiosHostgroupMemberships collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostgroupMemberships()
	 */
	public function clearNagiosHostgroupMemberships()
	{
		$this->collNagiosHostgroupMemberships = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostgroupMemberships collection (array).
	 *
	 * By default this just sets the collNagiosHostgroupMemberships collection to an empty array (like clearcollNagiosHostgroupMemberships());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostgroupMemberships()
	{
		$this->collNagiosHostgroupMemberships = array();
	}

	/**
	 * Gets an array of NagiosHostgroupMembership objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostgroupMemberships from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostgroupMembership[]
	 * @throws     PropelException
	 */
	public function getNagiosHostgroupMemberships($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostgroupMemberships === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostgroupMemberships = array();
			} else {

				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				NagiosHostgroupMembershipPeer::addSelectColumns($criteria);
				$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				NagiosHostgroupMembershipPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostgroupMembershipCriteria) || !$this->lastNagiosHostgroupMembershipCriteria->equals($criteria)) {
					$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostgroupMembershipCriteria = $criteria;
		return $this->collNagiosHostgroupMemberships;
	}

	/**
	 * Returns the number of related NagiosHostgroupMembership objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostgroupMembership objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostgroupMemberships(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostgroupMemberships === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				$count = NagiosHostgroupMembershipPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				if (!isset($this->lastNagiosHostgroupMembershipCriteria) || !$this->lastNagiosHostgroupMembershipCriteria->equals($criteria)) {
					$count = NagiosHostgroupMembershipPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostgroupMemberships);
				}
			} else {
				$count = count($this->collNagiosHostgroupMemberships);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostgroupMembership object to this object
	 * through the NagiosHostgroupMembership foreign key attribute.
	 *
	 * @param      NagiosHostgroupMembership $l NagiosHostgroupMembership
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostgroupMembership(NagiosHostgroupMembership $l)
	{
		if ($this->collNagiosHostgroupMemberships === null) {
			$this->initNagiosHostgroupMemberships();
		}
		if (!in_array($l, $this->collNagiosHostgroupMemberships, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostgroupMemberships, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostgroupMemberships from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostgroupMembershipsJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostgroupMemberships === null) {
			if ($this->isNew()) {
				$this->collNagiosHostgroupMemberships = array();
			} else {

				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostgroupMembershipCriteria) || !$this->lastNagiosHostgroupMembershipCriteria->equals($criteria)) {
				$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostgroupMembershipCriteria = $criteria;

		return $this->collNagiosHostgroupMemberships;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostgroupMemberships from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostgroupMembershipsJoinNagiosHostgroup($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostgroupMemberships === null) {
			if ($this->isNew()) {
				$this->collNagiosHostgroupMemberships = array();
			} else {

				$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

				$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostgroupMembershipPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostgroupMembershipCriteria) || !$this->lastNagiosHostgroupMembershipCriteria->equals($criteria)) {
				$this->collNagiosHostgroupMemberships = NagiosHostgroupMembershipPeer::doSelectJoinNagiosHostgroup($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostgroupMembershipCriteria = $criteria;

		return $this->collNagiosHostgroupMemberships;
	}

	/**
	 * Clears out the collNagiosHostCheckCommandParameters collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostCheckCommandParameters()
	 */
	public function clearNagiosHostCheckCommandParameters()
	{
		$this->collNagiosHostCheckCommandParameters = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostCheckCommandParameters collection (array).
	 *
	 * By default this just sets the collNagiosHostCheckCommandParameters collection to an empty array (like clearcollNagiosHostCheckCommandParameters());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostCheckCommandParameters()
	{
		$this->collNagiosHostCheckCommandParameters = array();
	}

	/**
	 * Gets an array of NagiosHostCheckCommandParameter objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostCheckCommandParameters from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostCheckCommandParameter[]
	 * @throws     PropelException
	 */
	public function getNagiosHostCheckCommandParameters($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostCheckCommandParameters === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostCheckCommandParameters = array();
			} else {

				$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

				NagiosHostCheckCommandParameterPeer::addSelectColumns($criteria);
				$this->collNagiosHostCheckCommandParameters = NagiosHostCheckCommandParameterPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

				NagiosHostCheckCommandParameterPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostCheckCommandParameterCriteria) || !$this->lastNagiosHostCheckCommandParameterCriteria->equals($criteria)) {
					$this->collNagiosHostCheckCommandParameters = NagiosHostCheckCommandParameterPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostCheckCommandParameterCriteria = $criteria;
		return $this->collNagiosHostCheckCommandParameters;
	}

	/**
	 * Returns the number of related NagiosHostCheckCommandParameter objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostCheckCommandParameter objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostCheckCommandParameters(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostCheckCommandParameters === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

				$count = NagiosHostCheckCommandParameterPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

				if (!isset($this->lastNagiosHostCheckCommandParameterCriteria) || !$this->lastNagiosHostCheckCommandParameterCriteria->equals($criteria)) {
					$count = NagiosHostCheckCommandParameterPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostCheckCommandParameters);
				}
			} else {
				$count = count($this->collNagiosHostCheckCommandParameters);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostCheckCommandParameter object to this object
	 * through the NagiosHostCheckCommandParameter foreign key attribute.
	 *
	 * @param      NagiosHostCheckCommandParameter $l NagiosHostCheckCommandParameter
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostCheckCommandParameter(NagiosHostCheckCommandParameter $l)
	{
		if ($this->collNagiosHostCheckCommandParameters === null) {
			$this->initNagiosHostCheckCommandParameters();
		}
		if (!in_array($l, $this->collNagiosHostCheckCommandParameters, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostCheckCommandParameters, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostCheckCommandParameters from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostCheckCommandParametersJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostCheckCommandParameters === null) {
			if ($this->isNew()) {
				$this->collNagiosHostCheckCommandParameters = array();
			} else {

				$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

				$this->collNagiosHostCheckCommandParameters = NagiosHostCheckCommandParameterPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostCheckCommandParameterPeer::HOST, $this->id);

			if (!isset($this->lastNagiosHostCheckCommandParameterCriteria) || !$this->lastNagiosHostCheckCommandParameterCriteria->equals($criteria)) {
				$this->collNagiosHostCheckCommandParameters = NagiosHostCheckCommandParameterPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostCheckCommandParameterCriteria = $criteria;

		return $this->collNagiosHostCheckCommandParameters;
	}

	/**
	 * Clears out the collNagiosHostParentsRelatedByChildHost collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostParentsRelatedByChildHost()
	 */
	public function clearNagiosHostParentsRelatedByChildHost()
	{
		$this->collNagiosHostParentsRelatedByChildHost = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostParentsRelatedByChildHost collection (array).
	 *
	 * By default this just sets the collNagiosHostParentsRelatedByChildHost collection to an empty array (like clearcollNagiosHostParentsRelatedByChildHost());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostParentsRelatedByChildHost()
	{
		$this->collNagiosHostParentsRelatedByChildHost = array();
	}

	/**
	 * Gets an array of NagiosHostParent objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostParentsRelatedByChildHost from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostParent[]
	 * @throws     PropelException
	 */
	public function getNagiosHostParentsRelatedByChildHost($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostParentsRelatedByChildHost === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostParentsRelatedByChildHost = array();
			} else {

				$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

				NagiosHostParentPeer::addSelectColumns($criteria);
				$this->collNagiosHostParentsRelatedByChildHost = NagiosHostParentPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

				NagiosHostParentPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostParentRelatedByChildHostCriteria) || !$this->lastNagiosHostParentRelatedByChildHostCriteria->equals($criteria)) {
					$this->collNagiosHostParentsRelatedByChildHost = NagiosHostParentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostParentRelatedByChildHostCriteria = $criteria;
		return $this->collNagiosHostParentsRelatedByChildHost;
	}

	/**
	 * Returns the number of related NagiosHostParent objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostParent objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostParentsRelatedByChildHost(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostParentsRelatedByChildHost === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

				$count = NagiosHostParentPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

				if (!isset($this->lastNagiosHostParentRelatedByChildHostCriteria) || !$this->lastNagiosHostParentRelatedByChildHostCriteria->equals($criteria)) {
					$count = NagiosHostParentPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostParentsRelatedByChildHost);
				}
			} else {
				$count = count($this->collNagiosHostParentsRelatedByChildHost);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostParent object to this object
	 * through the NagiosHostParent foreign key attribute.
	 *
	 * @param      NagiosHostParent $l NagiosHostParent
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostParentRelatedByChildHost(NagiosHostParent $l)
	{
		if ($this->collNagiosHostParentsRelatedByChildHost === null) {
			$this->initNagiosHostParentsRelatedByChildHost();
		}
		if (!in_array($l, $this->collNagiosHostParentsRelatedByChildHost, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostParentsRelatedByChildHost, $l);
			$l->setNagiosHostRelatedByChildHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostParentsRelatedByChildHost from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostParentsRelatedByChildHostJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostParentsRelatedByChildHost === null) {
			if ($this->isNew()) {
				$this->collNagiosHostParentsRelatedByChildHost = array();
			} else {

				$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

				$this->collNagiosHostParentsRelatedByChildHost = NagiosHostParentPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostParentPeer::CHILD_HOST, $this->id);

			if (!isset($this->lastNagiosHostParentRelatedByChildHostCriteria) || !$this->lastNagiosHostParentRelatedByChildHostCriteria->equals($criteria)) {
				$this->collNagiosHostParentsRelatedByChildHost = NagiosHostParentPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostParentRelatedByChildHostCriteria = $criteria;

		return $this->collNagiosHostParentsRelatedByChildHost;
	}

	/**
	 * Clears out the collNagiosHostParentsRelatedByParentHost collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostParentsRelatedByParentHost()
	 */
	public function clearNagiosHostParentsRelatedByParentHost()
	{
		$this->collNagiosHostParentsRelatedByParentHost = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostParentsRelatedByParentHost collection (array).
	 *
	 * By default this just sets the collNagiosHostParentsRelatedByParentHost collection to an empty array (like clearcollNagiosHostParentsRelatedByParentHost());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostParentsRelatedByParentHost()
	{
		$this->collNagiosHostParentsRelatedByParentHost = array();
	}

	/**
	 * Gets an array of NagiosHostParent objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostParentsRelatedByParentHost from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostParent[]
	 * @throws     PropelException
	 */
	public function getNagiosHostParentsRelatedByParentHost($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostParentsRelatedByParentHost === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostParentsRelatedByParentHost = array();
			} else {

				$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

				NagiosHostParentPeer::addSelectColumns($criteria);
				$this->collNagiosHostParentsRelatedByParentHost = NagiosHostParentPeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

				NagiosHostParentPeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostParentRelatedByParentHostCriteria) || !$this->lastNagiosHostParentRelatedByParentHostCriteria->equals($criteria)) {
					$this->collNagiosHostParentsRelatedByParentHost = NagiosHostParentPeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostParentRelatedByParentHostCriteria = $criteria;
		return $this->collNagiosHostParentsRelatedByParentHost;
	}

	/**
	 * Returns the number of related NagiosHostParent objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostParent objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostParentsRelatedByParentHost(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostParentsRelatedByParentHost === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

				$count = NagiosHostParentPeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

				if (!isset($this->lastNagiosHostParentRelatedByParentHostCriteria) || !$this->lastNagiosHostParentRelatedByParentHostCriteria->equals($criteria)) {
					$count = NagiosHostParentPeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostParentsRelatedByParentHost);
				}
			} else {
				$count = count($this->collNagiosHostParentsRelatedByParentHost);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostParent object to this object
	 * through the NagiosHostParent foreign key attribute.
	 *
	 * @param      NagiosHostParent $l NagiosHostParent
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostParentRelatedByParentHost(NagiosHostParent $l)
	{
		if ($this->collNagiosHostParentsRelatedByParentHost === null) {
			$this->initNagiosHostParentsRelatedByParentHost();
		}
		if (!in_array($l, $this->collNagiosHostParentsRelatedByParentHost, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostParentsRelatedByParentHost, $l);
			$l->setNagiosHostRelatedByParentHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostParentsRelatedByParentHost from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostParentsRelatedByParentHostJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostParentsRelatedByParentHost === null) {
			if ($this->isNew()) {
				$this->collNagiosHostParentsRelatedByParentHost = array();
			} else {

				$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

				$this->collNagiosHostParentsRelatedByParentHost = NagiosHostParentPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostParentPeer::PARENT_HOST, $this->id);

			if (!isset($this->lastNagiosHostParentRelatedByParentHostCriteria) || !$this->lastNagiosHostParentRelatedByParentHostCriteria->equals($criteria)) {
				$this->collNagiosHostParentsRelatedByParentHost = NagiosHostParentPeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostParentRelatedByParentHostCriteria = $criteria;

		return $this->collNagiosHostParentsRelatedByParentHost;
	}

	/**
	 * Clears out the collNagiosHostTemplateInheritances collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addNagiosHostTemplateInheritances()
	 */
	public function clearNagiosHostTemplateInheritances()
	{
		$this->collNagiosHostTemplateInheritances = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collNagiosHostTemplateInheritances collection (array).
	 *
	 * By default this just sets the collNagiosHostTemplateInheritances collection to an empty array (like clearcollNagiosHostTemplateInheritances());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initNagiosHostTemplateInheritances()
	{
		$this->collNagiosHostTemplateInheritances = array();
	}

	/**
	 * Gets an array of NagiosHostTemplateInheritance objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related NagiosHostTemplateInheritances from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array NagiosHostTemplateInheritance[]
	 * @throws     PropelException
	 */
	public function getNagiosHostTemplateInheritances($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplateInheritances === null) {
			if ($this->isNew()) {
			   $this->collNagiosHostTemplateInheritances = array();
			} else {

				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				NagiosHostTemplateInheritancePeer::addSelectColumns($criteria);
				$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				NagiosHostTemplateInheritancePeer::addSelectColumns($criteria);
				if (!isset($this->lastNagiosHostTemplateInheritanceCriteria) || !$this->lastNagiosHostTemplateInheritanceCriteria->equals($criteria)) {
					$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastNagiosHostTemplateInheritanceCriteria = $criteria;
		return $this->collNagiosHostTemplateInheritances;
	}

	/**
	 * Returns the number of related NagiosHostTemplateInheritance objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related NagiosHostTemplateInheritance objects.
	 * @throws     PropelException
	 */
	public function countNagiosHostTemplateInheritances(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collNagiosHostTemplateInheritances === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				$count = NagiosHostTemplateInheritancePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				if (!isset($this->lastNagiosHostTemplateInheritanceCriteria) || !$this->lastNagiosHostTemplateInheritanceCriteria->equals($criteria)) {
					$count = NagiosHostTemplateInheritancePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collNagiosHostTemplateInheritances);
				}
			} else {
				$count = count($this->collNagiosHostTemplateInheritances);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a NagiosHostTemplateInheritance object to this object
	 * through the NagiosHostTemplateInheritance foreign key attribute.
	 *
	 * @param      NagiosHostTemplateInheritance $l NagiosHostTemplateInheritance
	 * @return     void
	 * @throws     PropelException
	 */
	public function addNagiosHostTemplateInheritance(NagiosHostTemplateInheritance $l)
	{
		if ($this->collNagiosHostTemplateInheritances === null) {
			$this->initNagiosHostTemplateInheritances();
		}
		if (!in_array($l, $this->collNagiosHostTemplateInheritances, true)) { // only add it if the **same** object is not already associated
			array_push($this->collNagiosHostTemplateInheritances, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostTemplateInheritances from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostTemplateInheritancesJoinNagiosHostTemplateRelatedBySourceTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplateInheritances === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplateInheritances = array();
			} else {

				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelectJoinNagiosHostTemplateRelatedBySourceTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

			if (!isset($this->lastNagiosHostTemplateInheritanceCriteria) || !$this->lastNagiosHostTemplateInheritanceCriteria->equals($criteria)) {
				$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelectJoinNagiosHostTemplateRelatedBySourceTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateInheritanceCriteria = $criteria;

		return $this->collNagiosHostTemplateInheritances;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related NagiosHostTemplateInheritances from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getNagiosHostTemplateInheritancesJoinNagiosHostTemplateRelatedByTargetTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collNagiosHostTemplateInheritances === null) {
			if ($this->isNew()) {
				$this->collNagiosHostTemplateInheritances = array();
			} else {

				$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

				$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelectJoinNagiosHostTemplateRelatedByTargetTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $this->id);

			if (!isset($this->lastNagiosHostTemplateInheritanceCriteria) || !$this->lastNagiosHostTemplateInheritanceCriteria->equals($criteria)) {
				$this->collNagiosHostTemplateInheritances = NagiosHostTemplateInheritancePeer::doSelectJoinNagiosHostTemplateRelatedByTargetTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastNagiosHostTemplateInheritanceCriteria = $criteria;

		return $this->collNagiosHostTemplateInheritances;
	}

	/**
	 * Clears out the collAutodiscoveryDevices collection (array).
	 *
	 * This does not modify the database; however, it will remove any associated objects, causing
	 * them to be refetched by subsequent calls to accessor method.
	 *
	 * @return     void
	 * @see        addAutodiscoveryDevices()
	 */
	public function clearAutodiscoveryDevices()
	{
		$this->collAutodiscoveryDevices = null; // important to set this to NULL since that means it is uninitialized
	}

	/**
	 * Initializes the collAutodiscoveryDevices collection (array).
	 *
	 * By default this just sets the collAutodiscoveryDevices collection to an empty array (like clearcollAutodiscoveryDevices());
	 * however, you may wish to override this method in your stub class to provide setting appropriate
	 * to your application -- for example, setting the initial array to the values stored in database.
	 *
	 * @return     void
	 */
	public function initAutodiscoveryDevices()
	{
		$this->collAutodiscoveryDevices = array();
	}

	/**
	 * Gets an array of AutodiscoveryDevice objects which contain a foreign key that references this object.
	 *
	 * If this collection has already been initialized with an identical Criteria, it returns the collection.
	 * Otherwise if this NagiosHost has previously been saved, it will retrieve
	 * related AutodiscoveryDevices from storage. If this NagiosHost is new, it will return
	 * an empty collection or the current collection, the criteria is ignored on a new object.
	 *
	 * @param      PropelPDO $con
	 * @param      Criteria $criteria
	 * @return     array AutodiscoveryDevice[]
	 * @throws     PropelException
	 */
	public function getAutodiscoveryDevices($criteria = null, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAutodiscoveryDevices === null) {
			if ($this->isNew()) {
			   $this->collAutodiscoveryDevices = array();
			} else {

				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				AutodiscoveryDevicePeer::addSelectColumns($criteria);
				$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelect($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return the collection.


				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				AutodiscoveryDevicePeer::addSelectColumns($criteria);
				if (!isset($this->lastAutodiscoveryDeviceCriteria) || !$this->lastAutodiscoveryDeviceCriteria->equals($criteria)) {
					$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelect($criteria, $con);
				}
			}
		}
		$this->lastAutodiscoveryDeviceCriteria = $criteria;
		return $this->collAutodiscoveryDevices;
	}

	/**
	 * Returns the number of related AutodiscoveryDevice objects.
	 *
	 * @param      Criteria $criteria
	 * @param      boolean $distinct
	 * @param      PropelPDO $con
	 * @return     int Count of related AutodiscoveryDevice objects.
	 * @throws     PropelException
	 */
	public function countAutodiscoveryDevices(Criteria $criteria = null, $distinct = false, PropelPDO $con = null)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		} else {
			$criteria = clone $criteria;
		}

		if ($distinct) {
			$criteria->setDistinct();
		}

		$count = null;

		if ($this->collAutodiscoveryDevices === null) {
			if ($this->isNew()) {
				$count = 0;
			} else {

				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				$count = AutodiscoveryDevicePeer::doCount($criteria, $con);
			}
		} else {
			// criteria has no effect for a new object
			if (!$this->isNew()) {
				// the following code is to determine if a new query is
				// called for.  If the criteria is the same as the last
				// one, just return count of the collection.


				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				if (!isset($this->lastAutodiscoveryDeviceCriteria) || !$this->lastAutodiscoveryDeviceCriteria->equals($criteria)) {
					$count = AutodiscoveryDevicePeer::doCount($criteria, $con);
				} else {
					$count = count($this->collAutodiscoveryDevices);
				}
			} else {
				$count = count($this->collAutodiscoveryDevices);
			}
		}
		return $count;
	}

	/**
	 * Method called to associate a AutodiscoveryDevice object to this object
	 * through the AutodiscoveryDevice foreign key attribute.
	 *
	 * @param      AutodiscoveryDevice $l AutodiscoveryDevice
	 * @return     void
	 * @throws     PropelException
	 */
	public function addAutodiscoveryDevice(AutodiscoveryDevice $l)
	{
		if ($this->collAutodiscoveryDevices === null) {
			$this->initAutodiscoveryDevices();
		}
		if (!in_array($l, $this->collAutodiscoveryDevices, true)) { // only add it if the **same** object is not already associated
			array_push($this->collAutodiscoveryDevices, $l);
			$l->setNagiosHost($this);
		}
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related AutodiscoveryDevices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getAutodiscoveryDevicesJoinAutodiscoveryJob($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAutodiscoveryDevices === null) {
			if ($this->isNew()) {
				$this->collAutodiscoveryDevices = array();
			} else {

				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelectJoinAutodiscoveryJob($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

			if (!isset($this->lastAutodiscoveryDeviceCriteria) || !$this->lastAutodiscoveryDeviceCriteria->equals($criteria)) {
				$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelectJoinAutodiscoveryJob($criteria, $con, $join_behavior);
			}
		}
		$this->lastAutodiscoveryDeviceCriteria = $criteria;

		return $this->collAutodiscoveryDevices;
	}


	/**
	 * If this collection has already been initialized with
	 * an identical criteria, it returns the collection.
	 * Otherwise if this NagiosHost is new, it will return
	 * an empty collection; or if this NagiosHost has previously
	 * been saved, it will retrieve related AutodiscoveryDevices from storage.
	 *
	 * This method is protected by default in order to keep the public
	 * api reasonable.  You can provide public methods for those you
	 * actually need in NagiosHost.
	 */
	public function getAutodiscoveryDevicesJoinNagiosHostTemplate($criteria = null, $con = null, $join_behavior = Criteria::LEFT_JOIN)
	{
		if ($criteria === null) {
			$criteria = new Criteria(NagiosHostPeer::DATABASE_NAME);
		}
		elseif ($criteria instanceof Criteria)
		{
			$criteria = clone $criteria;
		}

		if ($this->collAutodiscoveryDevices === null) {
			if ($this->isNew()) {
				$this->collAutodiscoveryDevices = array();
			} else {

				$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

				$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		} else {
			// the following code is to determine if a new query is
			// called for.  If the criteria is the same as the last
			// one, just return the collection.

			$criteria->add(AutodiscoveryDevicePeer::PROPOSED_PARENT, $this->id);

			if (!isset($this->lastAutodiscoveryDeviceCriteria) || !$this->lastAutodiscoveryDeviceCriteria->equals($criteria)) {
				$this->collAutodiscoveryDevices = AutodiscoveryDevicePeer::doSelectJoinNagiosHostTemplate($criteria, $con, $join_behavior);
			}
		}
		$this->lastAutodiscoveryDeviceCriteria = $criteria;

		return $this->collAutodiscoveryDevices;
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
			if ($this->collNagiosServices) {
				foreach ((array) $this->collNagiosServices as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostContactMembers) {
				foreach ((array) $this->collNagiosHostContactMembers as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencys) {
				foreach ((array) $this->collNagiosDependencys as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosDependencyTargets) {
				foreach ((array) $this->collNagiosDependencyTargets as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosEscalations) {
				foreach ((array) $this->collNagiosEscalations as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostContactgroups) {
				foreach ((array) $this->collNagiosHostContactgroups as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostgroupMemberships) {
				foreach ((array) $this->collNagiosHostgroupMemberships as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostCheckCommandParameters) {
				foreach ((array) $this->collNagiosHostCheckCommandParameters as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostParentsRelatedByChildHost) {
				foreach ((array) $this->collNagiosHostParentsRelatedByChildHost as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostParentsRelatedByParentHost) {
				foreach ((array) $this->collNagiosHostParentsRelatedByParentHost as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collNagiosHostTemplateInheritances) {
				foreach ((array) $this->collNagiosHostTemplateInheritances as $o) {
					$o->clearAllReferences($deep);
				}
			}
			if ($this->collAutodiscoveryDevices) {
				foreach ((array) $this->collAutodiscoveryDevices as $o) {
					$o->clearAllReferences($deep);
				}
			}
		} // if ($deep)

		$this->collNagiosServices = null;
		$this->collNagiosHostContactMembers = null;
		$this->collNagiosDependencys = null;
		$this->collNagiosDependencyTargets = null;
		$this->collNagiosEscalations = null;
		$this->collNagiosHostContactgroups = null;
		$this->collNagiosHostgroupMemberships = null;
		$this->collNagiosHostCheckCommandParameters = null;
		$this->collNagiosHostParentsRelatedByChildHost = null;
		$this->collNagiosHostParentsRelatedByParentHost = null;
		$this->collNagiosHostTemplateInheritances = null;
		$this->collAutodiscoveryDevices = null;
		$this->aNagiosCommandRelatedByCheckCommand = null;
		$this->aNagiosCommandRelatedByEventHandler = null;
		$this->aNagiosTimeperiodRelatedByCheckPeriod = null;
		$this->aNagiosTimeperiodRelatedByNotificationPeriod = null;
	}

} // BaseNagiosHost
