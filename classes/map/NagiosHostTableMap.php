<?php



/**
 * This class defines the structure of the 'nagios_host' table.
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
class NagiosHostTableMap extends TableMap
{

	/**
	 * The (dot-path) name of this class
	 */
	const CLASS_NAME = '.map.NagiosHostTableMap';

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
		$this->setName('nagios_host');
		$this->setPhpName('NagiosHost');
		$this->setClassname('NagiosHost');
		$this->setPackage('');
		$this->setUseIdGenerator(true);
		// columns
		$this->addPrimaryKey('ID', 'Id', 'INTEGER', true, null, null);
		$this->addColumn('NAME', 'Name', 'VARCHAR', true, 255, null);
		$this->addColumn('ALIAS', 'Alias', 'VARCHAR', true, 255, null);
		$this->addColumn('DISPLAY_NAME', 'DisplayName', 'VARCHAR', true, 255, null);
		$this->addColumn('INITIAL_STATE', 'InitialState', 'VARCHAR', false, 1, null);
		$this->addColumn('ADDRESS', 'Address', 'VARCHAR', true, 255, null);
		$this->addForeignKey('CHECK_COMMAND', 'CheckCommand', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('RETRY_INTERVAL', 'RetryInterval', 'INTEGER', false, null, null);
		$this->addColumn('FIRST_NOTIFICATION_DELAY', 'FirstNotificationDelay', 'INTEGER', false, null, null);
		$this->addColumn('MAXIMUM_CHECK_ATTEMPTS', 'MaximumCheckAttempts', 'INTEGER', false, null, null);
		$this->addColumn('CHECK_INTERVAL', 'CheckInterval', 'INTEGER', false, null, null);
		$this->addColumn('PASSIVE_CHECKS_ENABLED', 'PassiveChecksEnabled', 'BOOLEAN', false, null, null);
		$this->addForeignKey('CHECK_PERIOD', 'CheckPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('OBSESS_OVER_HOST', 'ObsessOverHost', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECK_FRESHNESS', 'CheckFreshness', 'BOOLEAN', false, null, null);
		$this->addColumn('FRESHNESS_THRESHOLD', 'FreshnessThreshold', 'INTEGER', false, null, null);
		$this->addColumn('ACTIVE_CHECKS_ENABLED', 'ActiveChecksEnabled', 'BOOLEAN', false, null, null);
		$this->addColumn('CHECKS_ENABLED', 'ChecksEnabled', 'BOOLEAN', false, null, null);
		$this->addForeignKey('EVENT_HANDLER', 'EventHandler', 'INTEGER', 'nagios_command', 'ID', false, null, null);
		$this->addColumn('EVENT_HANDLER_ENABLED', 'EventHandlerEnabled', 'BOOLEAN', false, null, null);
		$this->addColumn('LOW_FLAP_THRESHOLD', 'LowFlapThreshold', 'INTEGER', false, null, null);
		$this->addColumn('HIGH_FLAP_THRESHOLD', 'HighFlapThreshold', 'INTEGER', false, null, null);
		$this->addColumn('FLAP_DETECTION_ENABLED', 'FlapDetectionEnabled', 'BOOLEAN', false, null, null);
		$this->addColumn('PROCESS_PERF_DATA', 'ProcessPerfData', 'BOOLEAN', false, null, null);
		$this->addColumn('RETAIN_STATUS_INFORMATION', 'RetainStatusInformation', 'BOOLEAN', false, null, null);
		$this->addColumn('RETAIN_NONSTATUS_INFORMATION', 'RetainNonstatusInformation', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_INTERVAL', 'NotificationInterval', 'INTEGER', false, null, null);
		$this->addForeignKey('NOTIFICATION_PERIOD', 'NotificationPeriod', 'INTEGER', 'nagios_timeperiod', 'ID', false, null, null);
		$this->addColumn('NOTIFICATIONS_ENABLED', 'NotificationsEnabled', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_ON_DOWN', 'NotificationOnDown', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_ON_UNREACHABLE', 'NotificationOnUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_ON_RECOVERY', 'NotificationOnRecovery', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_ON_FLAPPING', 'NotificationOnFlapping', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTIFICATION_ON_SCHEDULED_DOWNTIME', 'NotificationOnScheduledDowntime', 'BOOLEAN', false, null, null);
		$this->addColumn('STALKING_ON_UP', 'StalkingOnUp', 'BOOLEAN', false, null, null);
		$this->addColumn('STALKING_ON_DOWN', 'StalkingOnDown', 'BOOLEAN', false, null, null);
		$this->addColumn('STALKING_ON_UNREACHABLE', 'StalkingOnUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('FAILURE_PREDICTION_ENABLED', 'FailurePredictionEnabled', 'BOOLEAN', false, null, null);
		$this->addColumn('FLAP_DETECTION_ON_UP', 'FlapDetectionOnUp', 'BOOLEAN', false, null, null);
		$this->addColumn('FLAP_DETECTION_ON_DOWN', 'FlapDetectionOnDown', 'BOOLEAN', false, null, null);
		$this->addColumn('FLAP_DETECTION_ON_UNREACHABLE', 'FlapDetectionOnUnreachable', 'BOOLEAN', false, null, null);
		$this->addColumn('NOTES', 'Notes', 'VARCHAR', false, 255, null);
		$this->addColumn('NOTES_URL', 'NotesUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('ACTION_URL', 'ActionUrl', 'VARCHAR', false, 255, null);
		$this->addColumn('ICON_IMAGE', 'IconImage', 'VARCHAR', false, 255, null);
		$this->addColumn('ICON_IMAGE_ALT', 'IconImageAlt', 'VARCHAR', false, 255, null);
		$this->addColumn('VRML_IMAGE', 'VrmlImage', 'VARCHAR', false, 255, null);
		$this->addColumn('STATUSMAP_IMAGE', 'StatusmapImage', 'VARCHAR', false, 255, null);
		$this->addColumn('TWO_D_COORDS', 'TwoDCoords', 'VARCHAR', false, 255, null);
		$this->addColumn('THREE_D_COORDS', 'ThreeDCoords', 'VARCHAR', false, 255, null);
		// validators
	} // initialize()

	/**
	 * Build the RelationMap objects for this table relationships
	 */
	public function buildRelations()
	{
		$this->addRelation('NagiosCommandRelatedByCheckCommand', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('check_command' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosCommandRelatedByEventHandler', 'NagiosCommand', RelationMap::MANY_TO_ONE, array('event_handler' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByCheckPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('check_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosTimeperiodRelatedByNotificationPeriod', 'NagiosTimeperiod', RelationMap::MANY_TO_ONE, array('notification_period' => 'id', ), 'SET NULL', null);
		$this->addRelation('NagiosService', 'NagiosService', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostContactMember', 'NagiosHostContactMember', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosDependency', 'NagiosDependency', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosDependencyTarget', 'NagiosDependencyTarget', RelationMap::ONE_TO_MANY, array('id' => 'target_host', ), 'CASCADE', null);
		$this->addRelation('NagiosEscalation', 'NagiosEscalation', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostContactgroup', 'NagiosHostContactgroup', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostgroupMembership', 'NagiosHostgroupMembership', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostCheckCommandParameter', 'NagiosHostCheckCommandParameter', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostParentRelatedByChildHost', 'NagiosHostParent', RelationMap::ONE_TO_MANY, array('id' => 'child_host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostParentRelatedByParentHost', 'NagiosHostParent', RelationMap::ONE_TO_MANY, array('id' => 'parent_host', ), 'CASCADE', null);
		$this->addRelation('NagiosHostTemplateInheritance', 'NagiosHostTemplateInheritance', RelationMap::ONE_TO_MANY, array('id' => 'source_host', ), 'CASCADE', null);
		$this->addRelation('AutodiscoveryDevice', 'AutodiscoveryDevice', RelationMap::ONE_TO_MANY, array('id' => 'proposed_parent', ), 'SET NULL', null);
		$this->addRelation('NagiosHostCustomObjectVar', 'NagiosHostCustomObjectVar', RelationMap::ONE_TO_MANY, array('id' => 'host', ), 'CASCADE', null);
	} // buildRelations()

} // NagiosHostTableMap
