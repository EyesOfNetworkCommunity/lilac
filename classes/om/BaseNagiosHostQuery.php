<?php


/**
 * Base class that represents a query for the 'nagios_host' table.
 *
 * Nagios Host
 *
 * @method     NagiosHostQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosHostQuery orderByName($order = Criteria::ASC) Order by the name column
 * @method     NagiosHostQuery orderByAlias($order = Criteria::ASC) Order by the alias column
 * @method     NagiosHostQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 * @method     NagiosHostQuery orderByInitialState($order = Criteria::ASC) Order by the initial_state column
 * @method     NagiosHostQuery orderByAddress($order = Criteria::ASC) Order by the address column
 * @method     NagiosHostQuery orderByCheckCommand($order = Criteria::ASC) Order by the check_command column
 * @method     NagiosHostQuery orderByRetryInterval($order = Criteria::ASC) Order by the retry_interval column
 * @method     NagiosHostQuery orderByFirstNotificationDelay($order = Criteria::ASC) Order by the first_notification_delay column
 * @method     NagiosHostQuery orderByMaximumCheckAttempts($order = Criteria::ASC) Order by the maximum_check_attempts column
 * @method     NagiosHostQuery orderByCheckInterval($order = Criteria::ASC) Order by the check_interval column
 * @method     NagiosHostQuery orderByPassiveChecksEnabled($order = Criteria::ASC) Order by the passive_checks_enabled column
 * @method     NagiosHostQuery orderByCheckPeriod($order = Criteria::ASC) Order by the check_period column
 * @method     NagiosHostQuery orderByObsessOverHost($order = Criteria::ASC) Order by the obsess_over_host column
 * @method     NagiosHostQuery orderByCheckFreshness($order = Criteria::ASC) Order by the check_freshness column
 * @method     NagiosHostQuery orderByFreshnessThreshold($order = Criteria::ASC) Order by the freshness_threshold column
 * @method     NagiosHostQuery orderByActiveChecksEnabled($order = Criteria::ASC) Order by the active_checks_enabled column
 * @method     NagiosHostQuery orderByChecksEnabled($order = Criteria::ASC) Order by the checks_enabled column
 * @method     NagiosHostQuery orderByEventHandler($order = Criteria::ASC) Order by the event_handler column
 * @method     NagiosHostQuery orderByEventHandlerEnabled($order = Criteria::ASC) Order by the event_handler_enabled column
 * @method     NagiosHostQuery orderByLowFlapThreshold($order = Criteria::ASC) Order by the low_flap_threshold column
 * @method     NagiosHostQuery orderByHighFlapThreshold($order = Criteria::ASC) Order by the high_flap_threshold column
 * @method     NagiosHostQuery orderByFlapDetectionEnabled($order = Criteria::ASC) Order by the flap_detection_enabled column
 * @method     NagiosHostQuery orderByProcessPerfData($order = Criteria::ASC) Order by the process_perf_data column
 * @method     NagiosHostQuery orderByRetainStatusInformation($order = Criteria::ASC) Order by the retain_status_information column
 * @method     NagiosHostQuery orderByRetainNonstatusInformation($order = Criteria::ASC) Order by the retain_nonstatus_information column
 * @method     NagiosHostQuery orderByNotificationInterval($order = Criteria::ASC) Order by the notification_interval column
 * @method     NagiosHostQuery orderByNotificationPeriod($order = Criteria::ASC) Order by the notification_period column
 * @method     NagiosHostQuery orderByNotificationsEnabled($order = Criteria::ASC) Order by the notifications_enabled column
 * @method     NagiosHostQuery orderByNotificationOnDown($order = Criteria::ASC) Order by the notification_on_down column
 * @method     NagiosHostQuery orderByNotificationOnUnreachable($order = Criteria::ASC) Order by the notification_on_unreachable column
 * @method     NagiosHostQuery orderByNotificationOnRecovery($order = Criteria::ASC) Order by the notification_on_recovery column
 * @method     NagiosHostQuery orderByNotificationOnFlapping($order = Criteria::ASC) Order by the notification_on_flapping column
 * @method     NagiosHostQuery orderByNotificationOnScheduledDowntime($order = Criteria::ASC) Order by the notification_on_scheduled_downtime column
 * @method     NagiosHostQuery orderByStalkingOnUp($order = Criteria::ASC) Order by the stalking_on_up column
 * @method     NagiosHostQuery orderByStalkingOnDown($order = Criteria::ASC) Order by the stalking_on_down column
 * @method     NagiosHostQuery orderByStalkingOnUnreachable($order = Criteria::ASC) Order by the stalking_on_unreachable column
 * @method     NagiosHostQuery orderByFailurePredictionEnabled($order = Criteria::ASC) Order by the failure_prediction_enabled column
 * @method     NagiosHostQuery orderByFlapDetectionOnUp($order = Criteria::ASC) Order by the flap_detection_on_up column
 * @method     NagiosHostQuery orderByFlapDetectionOnDown($order = Criteria::ASC) Order by the flap_detection_on_down column
 * @method     NagiosHostQuery orderByFlapDetectionOnUnreachable($order = Criteria::ASC) Order by the flap_detection_on_unreachable column
 * @method     NagiosHostQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     NagiosHostQuery orderByNotesUrl($order = Criteria::ASC) Order by the notes_url column
 * @method     NagiosHostQuery orderByActionUrl($order = Criteria::ASC) Order by the action_url column
 * @method     NagiosHostQuery orderByIconImage($order = Criteria::ASC) Order by the icon_image column
 * @method     NagiosHostQuery orderByIconImageAlt($order = Criteria::ASC) Order by the icon_image_alt column
 * @method     NagiosHostQuery orderByVrmlImage($order = Criteria::ASC) Order by the vrml_image column
 * @method     NagiosHostQuery orderByStatusmapImage($order = Criteria::ASC) Order by the statusmap_image column
 * @method     NagiosHostQuery orderByTwoDCoords($order = Criteria::ASC) Order by the two_d_coords column
 * @method     NagiosHostQuery orderByThreeDCoords($order = Criteria::ASC) Order by the three_d_coords column
 *
 * @method     NagiosHostQuery groupById() Group by the id column
 * @method     NagiosHostQuery groupByName() Group by the name column
 * @method     NagiosHostQuery groupByAlias() Group by the alias column
 * @method     NagiosHostQuery groupByDisplayName() Group by the display_name column
 * @method     NagiosHostQuery groupByInitialState() Group by the initial_state column
 * @method     NagiosHostQuery groupByAddress() Group by the address column
 * @method     NagiosHostQuery groupByCheckCommand() Group by the check_command column
 * @method     NagiosHostQuery groupByRetryInterval() Group by the retry_interval column
 * @method     NagiosHostQuery groupByFirstNotificationDelay() Group by the first_notification_delay column
 * @method     NagiosHostQuery groupByMaximumCheckAttempts() Group by the maximum_check_attempts column
 * @method     NagiosHostQuery groupByCheckInterval() Group by the check_interval column
 * @method     NagiosHostQuery groupByPassiveChecksEnabled() Group by the passive_checks_enabled column
 * @method     NagiosHostQuery groupByCheckPeriod() Group by the check_period column
 * @method     NagiosHostQuery groupByObsessOverHost() Group by the obsess_over_host column
 * @method     NagiosHostQuery groupByCheckFreshness() Group by the check_freshness column
 * @method     NagiosHostQuery groupByFreshnessThreshold() Group by the freshness_threshold column
 * @method     NagiosHostQuery groupByActiveChecksEnabled() Group by the active_checks_enabled column
 * @method     NagiosHostQuery groupByChecksEnabled() Group by the checks_enabled column
 * @method     NagiosHostQuery groupByEventHandler() Group by the event_handler column
 * @method     NagiosHostQuery groupByEventHandlerEnabled() Group by the event_handler_enabled column
 * @method     NagiosHostQuery groupByLowFlapThreshold() Group by the low_flap_threshold column
 * @method     NagiosHostQuery groupByHighFlapThreshold() Group by the high_flap_threshold column
 * @method     NagiosHostQuery groupByFlapDetectionEnabled() Group by the flap_detection_enabled column
 * @method     NagiosHostQuery groupByProcessPerfData() Group by the process_perf_data column
 * @method     NagiosHostQuery groupByRetainStatusInformation() Group by the retain_status_information column
 * @method     NagiosHostQuery groupByRetainNonstatusInformation() Group by the retain_nonstatus_information column
 * @method     NagiosHostQuery groupByNotificationInterval() Group by the notification_interval column
 * @method     NagiosHostQuery groupByNotificationPeriod() Group by the notification_period column
 * @method     NagiosHostQuery groupByNotificationsEnabled() Group by the notifications_enabled column
 * @method     NagiosHostQuery groupByNotificationOnDown() Group by the notification_on_down column
 * @method     NagiosHostQuery groupByNotificationOnUnreachable() Group by the notification_on_unreachable column
 * @method     NagiosHostQuery groupByNotificationOnRecovery() Group by the notification_on_recovery column
 * @method     NagiosHostQuery groupByNotificationOnFlapping() Group by the notification_on_flapping column
 * @method     NagiosHostQuery groupByNotificationOnScheduledDowntime() Group by the notification_on_scheduled_downtime column
 * @method     NagiosHostQuery groupByStalkingOnUp() Group by the stalking_on_up column
 * @method     NagiosHostQuery groupByStalkingOnDown() Group by the stalking_on_down column
 * @method     NagiosHostQuery groupByStalkingOnUnreachable() Group by the stalking_on_unreachable column
 * @method     NagiosHostQuery groupByFailurePredictionEnabled() Group by the failure_prediction_enabled column
 * @method     NagiosHostQuery groupByFlapDetectionOnUp() Group by the flap_detection_on_up column
 * @method     NagiosHostQuery groupByFlapDetectionOnDown() Group by the flap_detection_on_down column
 * @method     NagiosHostQuery groupByFlapDetectionOnUnreachable() Group by the flap_detection_on_unreachable column
 * @method     NagiosHostQuery groupByNotes() Group by the notes column
 * @method     NagiosHostQuery groupByNotesUrl() Group by the notes_url column
 * @method     NagiosHostQuery groupByActionUrl() Group by the action_url column
 * @method     NagiosHostQuery groupByIconImage() Group by the icon_image column
 * @method     NagiosHostQuery groupByIconImageAlt() Group by the icon_image_alt column
 * @method     NagiosHostQuery groupByVrmlImage() Group by the vrml_image column
 * @method     NagiosHostQuery groupByStatusmapImage() Group by the statusmap_image column
 * @method     NagiosHostQuery groupByTwoDCoords() Group by the two_d_coords column
 * @method     NagiosHostQuery groupByThreeDCoords() Group by the three_d_coords column
 *
 * @method     NagiosHostQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosHostQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosHostQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosHostQuery leftJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 * @method     NagiosHostQuery rightJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 * @method     NagiosHostQuery innerJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 *
 * @method     NagiosHostQuery leftJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 * @method     NagiosHostQuery rightJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 * @method     NagiosHostQuery innerJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 *
 * @method     NagiosHostQuery leftJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 * @method     NagiosHostQuery rightJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 * @method     NagiosHostQuery innerJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 *
 * @method     NagiosHostQuery leftJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 * @method     NagiosHostQuery rightJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 * @method     NagiosHostQuery innerJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 *
 * @method     NagiosHostQuery leftJoinNagiosService($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosService relation
 * @method     NagiosHostQuery rightJoinNagiosService($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosService relation
 * @method     NagiosHostQuery innerJoinNagiosService($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosService relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostContactMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostContactMember relation
 * @method     NagiosHostQuery rightJoinNagiosHostContactMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostContactMember relation
 * @method     NagiosHostQuery innerJoinNagiosHostContactMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostContactMember relation
 *
 * @method     NagiosHostQuery leftJoinNagiosDependency($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosHostQuery rightJoinNagiosDependency($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosHostQuery innerJoinNagiosDependency($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependency relation
 *
 * @method     NagiosHostQuery leftJoinNagiosDependencyTarget($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosHostQuery rightJoinNagiosDependencyTarget($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosHostQuery innerJoinNagiosDependencyTarget($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependencyTarget relation
 *
 * @method     NagiosHostQuery leftJoinNagiosEscalation($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosHostQuery rightJoinNagiosEscalation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosHostQuery innerJoinNagiosEscalation($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalation relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostContactgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostContactgroup relation
 * @method     NagiosHostQuery rightJoinNagiosHostContactgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostContactgroup relation
 * @method     NagiosHostQuery innerJoinNagiosHostContactgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostContactgroup relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostgroupMembership($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroupMembership relation
 * @method     NagiosHostQuery rightJoinNagiosHostgroupMembership($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroupMembership relation
 * @method     NagiosHostQuery innerJoinNagiosHostgroupMembership($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroupMembership relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostCheckCommandParameter($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostCheckCommandParameter relation
 * @method     NagiosHostQuery rightJoinNagiosHostCheckCommandParameter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostCheckCommandParameter relation
 * @method     NagiosHostQuery innerJoinNagiosHostCheckCommandParameter($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostCheckCommandParameter relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostParentRelatedByChildHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostParentRelatedByChildHost relation
 * @method     NagiosHostQuery rightJoinNagiosHostParentRelatedByChildHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostParentRelatedByChildHost relation
 * @method     NagiosHostQuery innerJoinNagiosHostParentRelatedByChildHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostParentRelatedByChildHost relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostParentRelatedByParentHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostParentRelatedByParentHost relation
 * @method     NagiosHostQuery rightJoinNagiosHostParentRelatedByParentHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostParentRelatedByParentHost relation
 * @method     NagiosHostQuery innerJoinNagiosHostParentRelatedByParentHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostParentRelatedByParentHost relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostTemplateInheritance($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplateInheritance relation
 * @method     NagiosHostQuery rightJoinNagiosHostTemplateInheritance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplateInheritance relation
 * @method     NagiosHostQuery innerJoinNagiosHostTemplateInheritance($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplateInheritance relation
 *
 * @method     NagiosHostQuery leftJoinAutodiscoveryDevice($relationAlias = null) Adds a LEFT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     NagiosHostQuery rightJoinAutodiscoveryDevice($relationAlias = null) Adds a RIGHT JOIN clause to the query using the AutodiscoveryDevice relation
 * @method     NagiosHostQuery innerJoinAutodiscoveryDevice($relationAlias = null) Adds a INNER JOIN clause to the query using the AutodiscoveryDevice relation
 *
 * @method     NagiosHostQuery leftJoinNagiosHostCustomObjectVar($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostCustomObjectVar relation
 * @method     NagiosHostQuery rightJoinNagiosHostCustomObjectVar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostCustomObjectVar relation
 * @method     NagiosHostQuery innerJoinNagiosHostCustomObjectVar($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostCustomObjectVar relation
 *
 * @method     NagiosHost findOne(PropelPDO $con = null) Return the first NagiosHost matching the query
 * @method     NagiosHost findOneOrCreate(PropelPDO $con = null) Return the first NagiosHost matching the query, or a new NagiosHost object populated from the query conditions when no match is found
 *
 * @method     NagiosHost findOneById(int $id) Return the first NagiosHost filtered by the id column
 * @method     NagiosHost findOneByName(string $name) Return the first NagiosHost filtered by the name column
 * @method     NagiosHost findOneByAlias(string $alias) Return the first NagiosHost filtered by the alias column
 * @method     NagiosHost findOneByDisplayName(string $display_name) Return the first NagiosHost filtered by the display_name column
 * @method     NagiosHost findOneByInitialState(string $initial_state) Return the first NagiosHost filtered by the initial_state column
 * @method     NagiosHost findOneByAddress(string $address) Return the first NagiosHost filtered by the address column
 * @method     NagiosHost findOneByCheckCommand(int $check_command) Return the first NagiosHost filtered by the check_command column
 * @method     NagiosHost findOneByRetryInterval(int $retry_interval) Return the first NagiosHost filtered by the retry_interval column
 * @method     NagiosHost findOneByFirstNotificationDelay(int $first_notification_delay) Return the first NagiosHost filtered by the first_notification_delay column
 * @method     NagiosHost findOneByMaximumCheckAttempts(int $maximum_check_attempts) Return the first NagiosHost filtered by the maximum_check_attempts column
 * @method     NagiosHost findOneByCheckInterval(int $check_interval) Return the first NagiosHost filtered by the check_interval column
 * @method     NagiosHost findOneByPassiveChecksEnabled(boolean $passive_checks_enabled) Return the first NagiosHost filtered by the passive_checks_enabled column
 * @method     NagiosHost findOneByCheckPeriod(int $check_period) Return the first NagiosHost filtered by the check_period column
 * @method     NagiosHost findOneByObsessOverHost(boolean $obsess_over_host) Return the first NagiosHost filtered by the obsess_over_host column
 * @method     NagiosHost findOneByCheckFreshness(boolean $check_freshness) Return the first NagiosHost filtered by the check_freshness column
 * @method     NagiosHost findOneByFreshnessThreshold(int $freshness_threshold) Return the first NagiosHost filtered by the freshness_threshold column
 * @method     NagiosHost findOneByActiveChecksEnabled(boolean $active_checks_enabled) Return the first NagiosHost filtered by the active_checks_enabled column
 * @method     NagiosHost findOneByChecksEnabled(boolean $checks_enabled) Return the first NagiosHost filtered by the checks_enabled column
 * @method     NagiosHost findOneByEventHandler(int $event_handler) Return the first NagiosHost filtered by the event_handler column
 * @method     NagiosHost findOneByEventHandlerEnabled(boolean $event_handler_enabled) Return the first NagiosHost filtered by the event_handler_enabled column
 * @method     NagiosHost findOneByLowFlapThreshold(int $low_flap_threshold) Return the first NagiosHost filtered by the low_flap_threshold column
 * @method     NagiosHost findOneByHighFlapThreshold(int $high_flap_threshold) Return the first NagiosHost filtered by the high_flap_threshold column
 * @method     NagiosHost findOneByFlapDetectionEnabled(boolean $flap_detection_enabled) Return the first NagiosHost filtered by the flap_detection_enabled column
 * @method     NagiosHost findOneByProcessPerfData(boolean $process_perf_data) Return the first NagiosHost filtered by the process_perf_data column
 * @method     NagiosHost findOneByRetainStatusInformation(boolean $retain_status_information) Return the first NagiosHost filtered by the retain_status_information column
 * @method     NagiosHost findOneByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return the first NagiosHost filtered by the retain_nonstatus_information column
 * @method     NagiosHost findOneByNotificationInterval(int $notification_interval) Return the first NagiosHost filtered by the notification_interval column
 * @method     NagiosHost findOneByNotificationPeriod(int $notification_period) Return the first NagiosHost filtered by the notification_period column
 * @method     NagiosHost findOneByNotificationsEnabled(boolean $notifications_enabled) Return the first NagiosHost filtered by the notifications_enabled column
 * @method     NagiosHost findOneByNotificationOnDown(boolean $notification_on_down) Return the first NagiosHost filtered by the notification_on_down column
 * @method     NagiosHost findOneByNotificationOnUnreachable(boolean $notification_on_unreachable) Return the first NagiosHost filtered by the notification_on_unreachable column
 * @method     NagiosHost findOneByNotificationOnRecovery(boolean $notification_on_recovery) Return the first NagiosHost filtered by the notification_on_recovery column
 * @method     NagiosHost findOneByNotificationOnFlapping(boolean $notification_on_flapping) Return the first NagiosHost filtered by the notification_on_flapping column
 * @method     NagiosHost findOneByNotificationOnScheduledDowntime(boolean $notification_on_scheduled_downtime) Return the first NagiosHost filtered by the notification_on_scheduled_downtime column
 * @method     NagiosHost findOneByStalkingOnUp(boolean $stalking_on_up) Return the first NagiosHost filtered by the stalking_on_up column
 * @method     NagiosHost findOneByStalkingOnDown(boolean $stalking_on_down) Return the first NagiosHost filtered by the stalking_on_down column
 * @method     NagiosHost findOneByStalkingOnUnreachable(boolean $stalking_on_unreachable) Return the first NagiosHost filtered by the stalking_on_unreachable column
 * @method     NagiosHost findOneByFailurePredictionEnabled(boolean $failure_prediction_enabled) Return the first NagiosHost filtered by the failure_prediction_enabled column
 * @method     NagiosHost findOneByFlapDetectionOnUp(boolean $flap_detection_on_up) Return the first NagiosHost filtered by the flap_detection_on_up column
 * @method     NagiosHost findOneByFlapDetectionOnDown(boolean $flap_detection_on_down) Return the first NagiosHost filtered by the flap_detection_on_down column
 * @method     NagiosHost findOneByFlapDetectionOnUnreachable(boolean $flap_detection_on_unreachable) Return the first NagiosHost filtered by the flap_detection_on_unreachable column
 * @method     NagiosHost findOneByNotes(string $notes) Return the first NagiosHost filtered by the notes column
 * @method     NagiosHost findOneByNotesUrl(string $notes_url) Return the first NagiosHost filtered by the notes_url column
 * @method     NagiosHost findOneByActionUrl(string $action_url) Return the first NagiosHost filtered by the action_url column
 * @method     NagiosHost findOneByIconImage(string $icon_image) Return the first NagiosHost filtered by the icon_image column
 * @method     NagiosHost findOneByIconImageAlt(string $icon_image_alt) Return the first NagiosHost filtered by the icon_image_alt column
 * @method     NagiosHost findOneByVrmlImage(string $vrml_image) Return the first NagiosHost filtered by the vrml_image column
 * @method     NagiosHost findOneByStatusmapImage(string $statusmap_image) Return the first NagiosHost filtered by the statusmap_image column
 * @method     NagiosHost findOneByTwoDCoords(string $two_d_coords) Return the first NagiosHost filtered by the two_d_coords column
 * @method     NagiosHost findOneByThreeDCoords(string $three_d_coords) Return the first NagiosHost filtered by the three_d_coords column
 *
 * @method     array findById(int $id) Return NagiosHost objects filtered by the id column
 * @method     array findByName(string $name) Return NagiosHost objects filtered by the name column
 * @method     array findByAlias(string $alias) Return NagiosHost objects filtered by the alias column
 * @method     array findByDisplayName(string $display_name) Return NagiosHost objects filtered by the display_name column
 * @method     array findByInitialState(string $initial_state) Return NagiosHost objects filtered by the initial_state column
 * @method     array findByAddress(string $address) Return NagiosHost objects filtered by the address column
 * @method     array findByCheckCommand(int $check_command) Return NagiosHost objects filtered by the check_command column
 * @method     array findByRetryInterval(int $retry_interval) Return NagiosHost objects filtered by the retry_interval column
 * @method     array findByFirstNotificationDelay(int $first_notification_delay) Return NagiosHost objects filtered by the first_notification_delay column
 * @method     array findByMaximumCheckAttempts(int $maximum_check_attempts) Return NagiosHost objects filtered by the maximum_check_attempts column
 * @method     array findByCheckInterval(int $check_interval) Return NagiosHost objects filtered by the check_interval column
 * @method     array findByPassiveChecksEnabled(boolean $passive_checks_enabled) Return NagiosHost objects filtered by the passive_checks_enabled column
 * @method     array findByCheckPeriod(int $check_period) Return NagiosHost objects filtered by the check_period column
 * @method     array findByObsessOverHost(boolean $obsess_over_host) Return NagiosHost objects filtered by the obsess_over_host column
 * @method     array findByCheckFreshness(boolean $check_freshness) Return NagiosHost objects filtered by the check_freshness column
 * @method     array findByFreshnessThreshold(int $freshness_threshold) Return NagiosHost objects filtered by the freshness_threshold column
 * @method     array findByActiveChecksEnabled(boolean $active_checks_enabled) Return NagiosHost objects filtered by the active_checks_enabled column
 * @method     array findByChecksEnabled(boolean $checks_enabled) Return NagiosHost objects filtered by the checks_enabled column
 * @method     array findByEventHandler(int $event_handler) Return NagiosHost objects filtered by the event_handler column
 * @method     array findByEventHandlerEnabled(boolean $event_handler_enabled) Return NagiosHost objects filtered by the event_handler_enabled column
 * @method     array findByLowFlapThreshold(int $low_flap_threshold) Return NagiosHost objects filtered by the low_flap_threshold column
 * @method     array findByHighFlapThreshold(int $high_flap_threshold) Return NagiosHost objects filtered by the high_flap_threshold column
 * @method     array findByFlapDetectionEnabled(boolean $flap_detection_enabled) Return NagiosHost objects filtered by the flap_detection_enabled column
 * @method     array findByProcessPerfData(boolean $process_perf_data) Return NagiosHost objects filtered by the process_perf_data column
 * @method     array findByRetainStatusInformation(boolean $retain_status_information) Return NagiosHost objects filtered by the retain_status_information column
 * @method     array findByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return NagiosHost objects filtered by the retain_nonstatus_information column
 * @method     array findByNotificationInterval(int $notification_interval) Return NagiosHost objects filtered by the notification_interval column
 * @method     array findByNotificationPeriod(int $notification_period) Return NagiosHost objects filtered by the notification_period column
 * @method     array findByNotificationsEnabled(boolean $notifications_enabled) Return NagiosHost objects filtered by the notifications_enabled column
 * @method     array findByNotificationOnDown(boolean $notification_on_down) Return NagiosHost objects filtered by the notification_on_down column
 * @method     array findByNotificationOnUnreachable(boolean $notification_on_unreachable) Return NagiosHost objects filtered by the notification_on_unreachable column
 * @method     array findByNotificationOnRecovery(boolean $notification_on_recovery) Return NagiosHost objects filtered by the notification_on_recovery column
 * @method     array findByNotificationOnFlapping(boolean $notification_on_flapping) Return NagiosHost objects filtered by the notification_on_flapping column
 * @method     array findByNotificationOnScheduledDowntime(boolean $notification_on_scheduled_downtime) Return NagiosHost objects filtered by the notification_on_scheduled_downtime column
 * @method     array findByStalkingOnUp(boolean $stalking_on_up) Return NagiosHost objects filtered by the stalking_on_up column
 * @method     array findByStalkingOnDown(boolean $stalking_on_down) Return NagiosHost objects filtered by the stalking_on_down column
 * @method     array findByStalkingOnUnreachable(boolean $stalking_on_unreachable) Return NagiosHost objects filtered by the stalking_on_unreachable column
 * @method     array findByFailurePredictionEnabled(boolean $failure_prediction_enabled) Return NagiosHost objects filtered by the failure_prediction_enabled column
 * @method     array findByFlapDetectionOnUp(boolean $flap_detection_on_up) Return NagiosHost objects filtered by the flap_detection_on_up column
 * @method     array findByFlapDetectionOnDown(boolean $flap_detection_on_down) Return NagiosHost objects filtered by the flap_detection_on_down column
 * @method     array findByFlapDetectionOnUnreachable(boolean $flap_detection_on_unreachable) Return NagiosHost objects filtered by the flap_detection_on_unreachable column
 * @method     array findByNotes(string $notes) Return NagiosHost objects filtered by the notes column
 * @method     array findByNotesUrl(string $notes_url) Return NagiosHost objects filtered by the notes_url column
 * @method     array findByActionUrl(string $action_url) Return NagiosHost objects filtered by the action_url column
 * @method     array findByIconImage(string $icon_image) Return NagiosHost objects filtered by the icon_image column
 * @method     array findByIconImageAlt(string $icon_image_alt) Return NagiosHost objects filtered by the icon_image_alt column
 * @method     array findByVrmlImage(string $vrml_image) Return NagiosHost objects filtered by the vrml_image column
 * @method     array findByStatusmapImage(string $statusmap_image) Return NagiosHost objects filtered by the statusmap_image column
 * @method     array findByTwoDCoords(string $two_d_coords) Return NagiosHost objects filtered by the two_d_coords column
 * @method     array findByThreeDCoords(string $three_d_coords) Return NagiosHost objects filtered by the three_d_coords column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosHostQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosHostQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosHost', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosHostQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosHostQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosHostQuery) {
			return $criteria;
		}
		$query = new NagiosHostQuery();
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
	 * @return    NagiosHost|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosHostPeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosHostPeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosHostPeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosHostPeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByName('fooValue');   // WHERE name = 'fooValue'
	 * $query->filterByName('%fooValue%'); // WHERE name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $name The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByName($name = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($name)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $name)) {
				$name = str_replace('*', '%', $name);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::NAME, $name, $comparison);
	}

	/**
	 * Filter the query on the alias column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAlias('fooValue');   // WHERE alias = 'fooValue'
	 * $query->filterByAlias('%fooValue%'); // WHERE alias LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $alias The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByAlias($alias = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($alias)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $alias)) {
				$alias = str_replace('*', '%', $alias);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::ALIAS, $alias, $comparison);
	}

	/**
	 * Filter the query on the display_name column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDisplayName('fooValue');   // WHERE display_name = 'fooValue'
	 * $query->filterByDisplayName('%fooValue%'); // WHERE display_name LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $displayName The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByDisplayName($displayName = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($displayName)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $displayName)) {
				$displayName = str_replace('*', '%', $displayName);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::DISPLAY_NAME, $displayName, $comparison);
	}

	/**
	 * Filter the query on the initial_state column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByInitialState('fooValue');   // WHERE initial_state = 'fooValue'
	 * $query->filterByInitialState('%fooValue%'); // WHERE initial_state LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $initialState The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByInitialState($initialState = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($initialState)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $initialState)) {
				$initialState = str_replace('*', '%', $initialState);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::INITIAL_STATE, $initialState, $comparison);
	}

	/**
	 * Filter the query on the address column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByAddress('fooValue');   // WHERE address = 'fooValue'
	 * $query->filterByAddress('%fooValue%'); // WHERE address LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $address The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByAddress($address = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($address)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $address)) {
				$address = str_replace('*', '%', $address);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::ADDRESS, $address, $comparison);
	}

	/**
	 * Filter the query on the check_command column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckCommand(1234); // WHERE check_command = 1234
	 * $query->filterByCheckCommand(array(12, 34)); // WHERE check_command IN (12, 34)
	 * $query->filterByCheckCommand(array('min' => 12)); // WHERE check_command > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByCheckCommand()
	 *
	 * @param     mixed $checkCommand The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByCheckCommand($checkCommand = null, $comparison = null)
	{
		if (is_array($checkCommand)) {
			$useMinMax = false;
			if (isset($checkCommand['min'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_COMMAND, $checkCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkCommand['max'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_COMMAND, $checkCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::CHECK_COMMAND, $checkCommand, $comparison);
	}

	/**
	 * Filter the query on the retry_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetryInterval(1234); // WHERE retry_interval = 1234
	 * $query->filterByRetryInterval(array(12, 34)); // WHERE retry_interval IN (12, 34)
	 * $query->filterByRetryInterval(array('min' => 12)); // WHERE retry_interval > 12
	 * </code>
	 *
	 * @param     mixed $retryInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByRetryInterval($retryInterval = null, $comparison = null)
	{
		if (is_array($retryInterval)) {
			$useMinMax = false;
			if (isset($retryInterval['min'])) {
				$this->addUsingAlias(NagiosHostPeer::RETRY_INTERVAL, $retryInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retryInterval['max'])) {
				$this->addUsingAlias(NagiosHostPeer::RETRY_INTERVAL, $retryInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::RETRY_INTERVAL, $retryInterval, $comparison);
	}

	/**
	 * Filter the query on the first_notification_delay column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFirstNotificationDelay(1234); // WHERE first_notification_delay = 1234
	 * $query->filterByFirstNotificationDelay(array(12, 34)); // WHERE first_notification_delay IN (12, 34)
	 * $query->filterByFirstNotificationDelay(array('min' => 12)); // WHERE first_notification_delay > 12
	 * </code>
	 *
	 * @param     mixed $firstNotificationDelay The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFirstNotificationDelay($firstNotificationDelay = null, $comparison = null)
	{
		if (is_array($firstNotificationDelay)) {
			$useMinMax = false;
			if (isset($firstNotificationDelay['min'])) {
				$this->addUsingAlias(NagiosHostPeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($firstNotificationDelay['max'])) {
				$this->addUsingAlias(NagiosHostPeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay, $comparison);
	}

	/**
	 * Filter the query on the maximum_check_attempts column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByMaximumCheckAttempts(1234); // WHERE maximum_check_attempts = 1234
	 * $query->filterByMaximumCheckAttempts(array(12, 34)); // WHERE maximum_check_attempts IN (12, 34)
	 * $query->filterByMaximumCheckAttempts(array('min' => 12)); // WHERE maximum_check_attempts > 12
	 * </code>
	 *
	 * @param     mixed $maximumCheckAttempts The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByMaximumCheckAttempts($maximumCheckAttempts = null, $comparison = null)
	{
		if (is_array($maximumCheckAttempts)) {
			$useMinMax = false;
			if (isset($maximumCheckAttempts['min'])) {
				$this->addUsingAlias(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maximumCheckAttempts['max'])) {
				$this->addUsingAlias(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts, $comparison);
	}

	/**
	 * Filter the query on the check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckInterval(1234); // WHERE check_interval = 1234
	 * $query->filterByCheckInterval(array(12, 34)); // WHERE check_interval IN (12, 34)
	 * $query->filterByCheckInterval(array('min' => 12)); // WHERE check_interval > 12
	 * </code>
	 *
	 * @param     mixed $checkInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByCheckInterval($checkInterval = null, $comparison = null)
	{
		if (is_array($checkInterval)) {
			$useMinMax = false;
			if (isset($checkInterval['min'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_INTERVAL, $checkInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkInterval['max'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_INTERVAL, $checkInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::CHECK_INTERVAL, $checkInterval, $comparison);
	}

	/**
	 * Filter the query on the passive_checks_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByPassiveChecksEnabled(true); // WHERE passive_checks_enabled = true
	 * $query->filterByPassiveChecksEnabled('yes'); // WHERE passive_checks_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $passiveChecksEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByPassiveChecksEnabled($passiveChecksEnabled = null, $comparison = null)
	{
		if (is_string($passiveChecksEnabled)) {
			$passive_checks_enabled = in_array(strtolower($passiveChecksEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::PASSIVE_CHECKS_ENABLED, $passiveChecksEnabled, $comparison);
	}

	/**
	 * Filter the query on the check_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckPeriod(1234); // WHERE check_period = 1234
	 * $query->filterByCheckPeriod(array(12, 34)); // WHERE check_period IN (12, 34)
	 * $query->filterByCheckPeriod(array('min' => 12)); // WHERE check_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByCheckPeriod()
	 *
	 * @param     mixed $checkPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByCheckPeriod($checkPeriod = null, $comparison = null)
	{
		if (is_array($checkPeriod)) {
			$useMinMax = false;
			if (isset($checkPeriod['min'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_PERIOD, $checkPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkPeriod['max'])) {
				$this->addUsingAlias(NagiosHostPeer::CHECK_PERIOD, $checkPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::CHECK_PERIOD, $checkPeriod, $comparison);
	}

	/**
	 * Filter the query on the obsess_over_host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByObsessOverHost(true); // WHERE obsess_over_host = true
	 * $query->filterByObsessOverHost('yes'); // WHERE obsess_over_host = true
	 * </code>
	 *
	 * @param     boolean|string $obsessOverHost The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByObsessOverHost($obsessOverHost = null, $comparison = null)
	{
		if (is_string($obsessOverHost)) {
			$obsess_over_host = in_array(strtolower($obsessOverHost), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::OBSESS_OVER_HOST, $obsessOverHost, $comparison);
	}

	/**
	 * Filter the query on the check_freshness column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByCheckFreshness(true); // WHERE check_freshness = true
	 * $query->filterByCheckFreshness('yes'); // WHERE check_freshness = true
	 * </code>
	 *
	 * @param     boolean|string $checkFreshness The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByCheckFreshness($checkFreshness = null, $comparison = null)
	{
		if (is_string($checkFreshness)) {
			$check_freshness = in_array(strtolower($checkFreshness), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::CHECK_FRESHNESS, $checkFreshness, $comparison);
	}

	/**
	 * Filter the query on the freshness_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFreshnessThreshold(1234); // WHERE freshness_threshold = 1234
	 * $query->filterByFreshnessThreshold(array(12, 34)); // WHERE freshness_threshold IN (12, 34)
	 * $query->filterByFreshnessThreshold(array('min' => 12)); // WHERE freshness_threshold > 12
	 * </code>
	 *
	 * @param     mixed $freshnessThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFreshnessThreshold($freshnessThreshold = null, $comparison = null)
	{
		if (is_array($freshnessThreshold)) {
			$useMinMax = false;
			if (isset($freshnessThreshold['min'])) {
				$this->addUsingAlias(NagiosHostPeer::FRESHNESS_THRESHOLD, $freshnessThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($freshnessThreshold['max'])) {
				$this->addUsingAlias(NagiosHostPeer::FRESHNESS_THRESHOLD, $freshnessThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::FRESHNESS_THRESHOLD, $freshnessThreshold, $comparison);
	}

	/**
	 * Filter the query on the active_checks_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByActiveChecksEnabled(true); // WHERE active_checks_enabled = true
	 * $query->filterByActiveChecksEnabled('yes'); // WHERE active_checks_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $activeChecksEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByActiveChecksEnabled($activeChecksEnabled = null, $comparison = null)
	{
		if (is_string($activeChecksEnabled)) {
			$active_checks_enabled = in_array(strtolower($activeChecksEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::ACTIVE_CHECKS_ENABLED, $activeChecksEnabled, $comparison);
	}

	/**
	 * Filter the query on the checks_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByChecksEnabled(true); // WHERE checks_enabled = true
	 * $query->filterByChecksEnabled('yes'); // WHERE checks_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $checksEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByChecksEnabled($checksEnabled = null, $comparison = null)
	{
		if (is_string($checksEnabled)) {
			$checks_enabled = in_array(strtolower($checksEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::CHECKS_ENABLED, $checksEnabled, $comparison);
	}

	/**
	 * Filter the query on the event_handler column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEventHandler(1234); // WHERE event_handler = 1234
	 * $query->filterByEventHandler(array(12, 34)); // WHERE event_handler IN (12, 34)
	 * $query->filterByEventHandler(array('min' => 12)); // WHERE event_handler > 12
	 * </code>
	 *
	 * @see       filterByNagiosCommandRelatedByEventHandler()
	 *
	 * @param     mixed $eventHandler The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByEventHandler($eventHandler = null, $comparison = null)
	{
		if (is_array($eventHandler)) {
			$useMinMax = false;
			if (isset($eventHandler['min'])) {
				$this->addUsingAlias(NagiosHostPeer::EVENT_HANDLER, $eventHandler['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($eventHandler['max'])) {
				$this->addUsingAlias(NagiosHostPeer::EVENT_HANDLER, $eventHandler['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::EVENT_HANDLER, $eventHandler, $comparison);
	}

	/**
	 * Filter the query on the event_handler_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByEventHandlerEnabled(true); // WHERE event_handler_enabled = true
	 * $query->filterByEventHandlerEnabled('yes'); // WHERE event_handler_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $eventHandlerEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByEventHandlerEnabled($eventHandlerEnabled = null, $comparison = null)
	{
		if (is_string($eventHandlerEnabled)) {
			$event_handler_enabled = in_array(strtolower($eventHandlerEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::EVENT_HANDLER_ENABLED, $eventHandlerEnabled, $comparison);
	}

	/**
	 * Filter the query on the low_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByLowFlapThreshold(1234); // WHERE low_flap_threshold = 1234
	 * $query->filterByLowFlapThreshold(array(12, 34)); // WHERE low_flap_threshold IN (12, 34)
	 * $query->filterByLowFlapThreshold(array('min' => 12)); // WHERE low_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $lowFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByLowFlapThreshold($lowFlapThreshold = null, $comparison = null)
	{
		if (is_array($lowFlapThreshold)) {
			$useMinMax = false;
			if (isset($lowFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosHostPeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lowFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosHostPeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the high_flap_threshold column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHighFlapThreshold(1234); // WHERE high_flap_threshold = 1234
	 * $query->filterByHighFlapThreshold(array(12, 34)); // WHERE high_flap_threshold IN (12, 34)
	 * $query->filterByHighFlapThreshold(array('min' => 12)); // WHERE high_flap_threshold > 12
	 * </code>
	 *
	 * @param     mixed $highFlapThreshold The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByHighFlapThreshold($highFlapThreshold = null, $comparison = null)
	{
		if (is_array($highFlapThreshold)) {
			$useMinMax = false;
			if (isset($highFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosHostPeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($highFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosHostPeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionEnabled(true); // WHERE flap_detection_enabled = true
	 * $query->filterByFlapDetectionEnabled('yes'); // WHERE flap_detection_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionEnabled($flapDetectionEnabled = null, $comparison = null)
	{
		if (is_string($flapDetectionEnabled)) {
			$flap_detection_enabled = in_array(strtolower($flapDetectionEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::FLAP_DETECTION_ENABLED, $flapDetectionEnabled, $comparison);
	}

	/**
	 * Filter the query on the process_perf_data column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByProcessPerfData(true); // WHERE process_perf_data = true
	 * $query->filterByProcessPerfData('yes'); // WHERE process_perf_data = true
	 * </code>
	 *
	 * @param     boolean|string $processPerfData The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByProcessPerfData($processPerfData = null, $comparison = null)
	{
		if (is_string($processPerfData)) {
			$process_perf_data = in_array(strtolower($processPerfData), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::PROCESS_PERF_DATA, $processPerfData, $comparison);
	}

	/**
	 * Filter the query on the retain_status_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainStatusInformation(true); // WHERE retain_status_information = true
	 * $query->filterByRetainStatusInformation('yes'); // WHERE retain_status_information = true
	 * </code>
	 *
	 * @param     boolean|string $retainStatusInformation The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByRetainStatusInformation($retainStatusInformation = null, $comparison = null)
	{
		if (is_string($retainStatusInformation)) {
			$retain_status_information = in_array(strtolower($retainStatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::RETAIN_STATUS_INFORMATION, $retainStatusInformation, $comparison);
	}

	/**
	 * Filter the query on the retain_nonstatus_information column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByRetainNonstatusInformation(true); // WHERE retain_nonstatus_information = true
	 * $query->filterByRetainNonstatusInformation('yes'); // WHERE retain_nonstatus_information = true
	 * </code>
	 *
	 * @param     boolean|string $retainNonstatusInformation The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByRetainNonstatusInformation($retainNonstatusInformation = null, $comparison = null)
	{
		if (is_string($retainNonstatusInformation)) {
			$retain_nonstatus_information = in_array(strtolower($retainNonstatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::RETAIN_NONSTATUS_INFORMATION, $retainNonstatusInformation, $comparison);
	}

	/**
	 * Filter the query on the notification_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationInterval(1234); // WHERE notification_interval = 1234
	 * $query->filterByNotificationInterval(array(12, 34)); // WHERE notification_interval IN (12, 34)
	 * $query->filterByNotificationInterval(array('min' => 12)); // WHERE notification_interval > 12
	 * </code>
	 *
	 * @param     mixed $notificationInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationInterval($notificationInterval = null, $comparison = null)
	{
		if (is_array($notificationInterval)) {
			$useMinMax = false;
			if (isset($notificationInterval['min'])) {
				$this->addUsingAlias(NagiosHostPeer::NOTIFICATION_INTERVAL, $notificationInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationInterval['max'])) {
				$this->addUsingAlias(NagiosHostPeer::NOTIFICATION_INTERVAL, $notificationInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_INTERVAL, $notificationInterval, $comparison);
	}

	/**
	 * Filter the query on the notification_period column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationPeriod(1234); // WHERE notification_period = 1234
	 * $query->filterByNotificationPeriod(array(12, 34)); // WHERE notification_period IN (12, 34)
	 * $query->filterByNotificationPeriod(array('min' => 12)); // WHERE notification_period > 12
	 * </code>
	 *
	 * @see       filterByNagiosTimeperiodRelatedByNotificationPeriod()
	 *
	 * @param     mixed $notificationPeriod The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationPeriod($notificationPeriod = null, $comparison = null)
	{
		if (is_array($notificationPeriod)) {
			$useMinMax = false;
			if (isset($notificationPeriod['min'])) {
				$this->addUsingAlias(NagiosHostPeer::NOTIFICATION_PERIOD, $notificationPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationPeriod['max'])) {
				$this->addUsingAlias(NagiosHostPeer::NOTIFICATION_PERIOD, $notificationPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_PERIOD, $notificationPeriod, $comparison);
	}

	/**
	 * Filter the query on the notifications_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationsEnabled(true); // WHERE notifications_enabled = true
	 * $query->filterByNotificationsEnabled('yes'); // WHERE notifications_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $notificationsEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationsEnabled($notificationsEnabled = null, $comparison = null)
	{
		if (is_string($notificationsEnabled)) {
			$notifications_enabled = in_array(strtolower($notificationsEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATIONS_ENABLED, $notificationsEnabled, $comparison);
	}

	/**
	 * Filter the query on the notification_on_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnDown(true); // WHERE notification_on_down = true
	 * $query->filterByNotificationOnDown('yes'); // WHERE notification_on_down = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnDown($notificationOnDown = null, $comparison = null)
	{
		if (is_string($notificationOnDown)) {
			$notification_on_down = in_array(strtolower($notificationOnDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_ON_DOWN, $notificationOnDown, $comparison);
	}

	/**
	 * Filter the query on the notification_on_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnUnreachable(true); // WHERE notification_on_unreachable = true
	 * $query->filterByNotificationOnUnreachable('yes'); // WHERE notification_on_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnUnreachable($notificationOnUnreachable = null, $comparison = null)
	{
		if (is_string($notificationOnUnreachable)) {
			$notification_on_unreachable = in_array(strtolower($notificationOnUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_ON_UNREACHABLE, $notificationOnUnreachable, $comparison);
	}

	/**
	 * Filter the query on the notification_on_recovery column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnRecovery(true); // WHERE notification_on_recovery = true
	 * $query->filterByNotificationOnRecovery('yes'); // WHERE notification_on_recovery = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnRecovery The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnRecovery($notificationOnRecovery = null, $comparison = null)
	{
		if (is_string($notificationOnRecovery)) {
			$notification_on_recovery = in_array(strtolower($notificationOnRecovery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_ON_RECOVERY, $notificationOnRecovery, $comparison);
	}

	/**
	 * Filter the query on the notification_on_flapping column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnFlapping(true); // WHERE notification_on_flapping = true
	 * $query->filterByNotificationOnFlapping('yes'); // WHERE notification_on_flapping = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnFlapping The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnFlapping($notificationOnFlapping = null, $comparison = null)
	{
		if (is_string($notificationOnFlapping)) {
			$notification_on_flapping = in_array(strtolower($notificationOnFlapping), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_ON_FLAPPING, $notificationOnFlapping, $comparison);
	}

	/**
	 * Filter the query on the notification_on_scheduled_downtime column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnScheduledDowntime(true); // WHERE notification_on_scheduled_downtime = true
	 * $query->filterByNotificationOnScheduledDowntime('yes'); // WHERE notification_on_scheduled_downtime = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnScheduledDowntime The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnScheduledDowntime($notificationOnScheduledDowntime = null, $comparison = null)
	{
		if (is_string($notificationOnScheduledDowntime)) {
			$notification_on_scheduled_downtime = in_array(strtolower($notificationOnScheduledDowntime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME, $notificationOnScheduledDowntime, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_up column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnUp(true); // WHERE stalking_on_up = true
	 * $query->filterByStalkingOnUp('yes'); // WHERE stalking_on_up = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnUp The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnUp($stalkingOnUp = null, $comparison = null)
	{
		if (is_string($stalkingOnUp)) {
			$stalking_on_up = in_array(strtolower($stalkingOnUp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::STALKING_ON_UP, $stalkingOnUp, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnDown(true); // WHERE stalking_on_down = true
	 * $query->filterByStalkingOnDown('yes'); // WHERE stalking_on_down = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnDown($stalkingOnDown = null, $comparison = null)
	{
		if (is_string($stalkingOnDown)) {
			$stalking_on_down = in_array(strtolower($stalkingOnDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::STALKING_ON_DOWN, $stalkingOnDown, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnUnreachable(true); // WHERE stalking_on_unreachable = true
	 * $query->filterByStalkingOnUnreachable('yes'); // WHERE stalking_on_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnUnreachable($stalkingOnUnreachable = null, $comparison = null)
	{
		if (is_string($stalkingOnUnreachable)) {
			$stalking_on_unreachable = in_array(strtolower($stalkingOnUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::STALKING_ON_UNREACHABLE, $stalkingOnUnreachable, $comparison);
	}

	/**
	 * Filter the query on the failure_prediction_enabled column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFailurePredictionEnabled(true); // WHERE failure_prediction_enabled = true
	 * $query->filterByFailurePredictionEnabled('yes'); // WHERE failure_prediction_enabled = true
	 * </code>
	 *
	 * @param     boolean|string $failurePredictionEnabled The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFailurePredictionEnabled($failurePredictionEnabled = null, $comparison = null)
	{
		if (is_string($failurePredictionEnabled)) {
			$failure_prediction_enabled = in_array(strtolower($failurePredictionEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::FAILURE_PREDICTION_ENABLED, $failurePredictionEnabled, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_up column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnUp(true); // WHERE flap_detection_on_up = true
	 * $query->filterByFlapDetectionOnUp('yes'); // WHERE flap_detection_on_up = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnUp The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnUp($flapDetectionOnUp = null, $comparison = null)
	{
		if (is_string($flapDetectionOnUp)) {
			$flap_detection_on_up = in_array(strtolower($flapDetectionOnUp), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::FLAP_DETECTION_ON_UP, $flapDetectionOnUp, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_down column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnDown(true); // WHERE flap_detection_on_down = true
	 * $query->filterByFlapDetectionOnDown('yes'); // WHERE flap_detection_on_down = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnDown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnDown($flapDetectionOnDown = null, $comparison = null)
	{
		if (is_string($flapDetectionOnDown)) {
			$flap_detection_on_down = in_array(strtolower($flapDetectionOnDown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::FLAP_DETECTION_ON_DOWN, $flapDetectionOnDown, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_unreachable column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnUnreachable(true); // WHERE flap_detection_on_unreachable = true
	 * $query->filterByFlapDetectionOnUnreachable('yes'); // WHERE flap_detection_on_unreachable = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnUnreachable The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnUnreachable($flapDetectionOnUnreachable = null, $comparison = null)
	{
		if (is_string($flapDetectionOnUnreachable)) {
			$flap_detection_on_unreachable = in_array(strtolower($flapDetectionOnUnreachable), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosHostPeer::FLAP_DETECTION_ON_UNREACHABLE, $flapDetectionOnUnreachable, $comparison);
	}

	/**
	 * Filter the query on the notes column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotes('fooValue');   // WHERE notes = 'fooValue'
	 * $query->filterByNotes('%fooValue%'); // WHERE notes LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $notes The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotes($notes = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notes)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notes)) {
				$notes = str_replace('*', '%', $notes);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTES, $notes, $comparison);
	}

	/**
	 * Filter the query on the notes_url column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotesUrl('fooValue');   // WHERE notes_url = 'fooValue'
	 * $query->filterByNotesUrl('%fooValue%'); // WHERE notes_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $notesUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNotesUrl($notesUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($notesUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $notesUrl)) {
				$notesUrl = str_replace('*', '%', $notesUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::NOTES_URL, $notesUrl, $comparison);
	}

	/**
	 * Filter the query on the action_url column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByActionUrl('fooValue');   // WHERE action_url = 'fooValue'
	 * $query->filterByActionUrl('%fooValue%'); // WHERE action_url LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $actionUrl The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByActionUrl($actionUrl = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($actionUrl)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $actionUrl)) {
				$actionUrl = str_replace('*', '%', $actionUrl);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::ACTION_URL, $actionUrl, $comparison);
	}

	/**
	 * Filter the query on the icon_image column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIconImage('fooValue');   // WHERE icon_image = 'fooValue'
	 * $query->filterByIconImage('%fooValue%'); // WHERE icon_image LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $iconImage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByIconImage($iconImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($iconImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $iconImage)) {
				$iconImage = str_replace('*', '%', $iconImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::ICON_IMAGE, $iconImage, $comparison);
	}

	/**
	 * Filter the query on the icon_image_alt column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIconImageAlt('fooValue');   // WHERE icon_image_alt = 'fooValue'
	 * $query->filterByIconImageAlt('%fooValue%'); // WHERE icon_image_alt LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $iconImageAlt The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByIconImageAlt($iconImageAlt = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($iconImageAlt)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $iconImageAlt)) {
				$iconImageAlt = str_replace('*', '%', $iconImageAlt);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::ICON_IMAGE_ALT, $iconImageAlt, $comparison);
	}

	/**
	 * Filter the query on the vrml_image column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByVrmlImage('fooValue');   // WHERE vrml_image = 'fooValue'
	 * $query->filterByVrmlImage('%fooValue%'); // WHERE vrml_image LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $vrmlImage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByVrmlImage($vrmlImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($vrmlImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $vrmlImage)) {
				$vrmlImage = str_replace('*', '%', $vrmlImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::VRML_IMAGE, $vrmlImage, $comparison);
	}

	/**
	 * Filter the query on the statusmap_image column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStatusmapImage('fooValue');   // WHERE statusmap_image = 'fooValue'
	 * $query->filterByStatusmapImage('%fooValue%'); // WHERE statusmap_image LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $statusmapImage The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByStatusmapImage($statusmapImage = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($statusmapImage)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $statusmapImage)) {
				$statusmapImage = str_replace('*', '%', $statusmapImage);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::STATUSMAP_IMAGE, $statusmapImage, $comparison);
	}

	/**
	 * Filter the query on the two_d_coords column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByTwoDCoords('fooValue');   // WHERE two_d_coords = 'fooValue'
	 * $query->filterByTwoDCoords('%fooValue%'); // WHERE two_d_coords LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $twoDCoords The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByTwoDCoords($twoDCoords = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($twoDCoords)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $twoDCoords)) {
				$twoDCoords = str_replace('*', '%', $twoDCoords);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::TWO_D_COORDS, $twoDCoords, $comparison);
	}

	/**
	 * Filter the query on the three_d_coords column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByThreeDCoords('fooValue');   // WHERE three_d_coords = 'fooValue'
	 * $query->filterByThreeDCoords('%fooValue%'); // WHERE three_d_coords LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $threeDCoords The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByThreeDCoords($threeDCoords = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($threeDCoords)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $threeDCoords)) {
				$threeDCoords = str_replace('*', '%', $threeDCoords);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosHostPeer::THREE_D_COORDS, $threeDCoords, $comparison);
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByCheckCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosHostPeer::CHECK_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostPeer::CHECK_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByCheckCommand() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByCheckCommand($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByCheckCommand');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByCheckCommand');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByCheckCommand relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByCheckCommandQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByCheckCommand($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByCheckCommand', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByEventHandler($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosHostPeer::EVENT_HANDLER, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostPeer::EVENT_HANDLER, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosCommandRelatedByEventHandler() only accepts arguments of type NagiosCommand or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosCommandRelatedByEventHandler($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosCommandRelatedByEventHandler');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosCommandRelatedByEventHandler');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosCommandRelatedByEventHandler relation NagiosCommand object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosCommandQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosCommandRelatedByEventHandlerQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosCommandRelatedByEventHandler($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosCommandRelatedByEventHandler', 'NagiosCommandQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByCheckPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosHostPeer::CHECK_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostPeer::CHECK_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByCheckPeriod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByCheckPeriod');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByCheckPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByCheckPeriod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByCheckPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByCheckPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByCheckPeriod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosTimeperiod object
	 *
	 * @param     NagiosTimeperiod|PropelCollection $nagiosTimeperiod The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByNotificationPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosHostPeer::NOTIFICATION_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosHostPeer::NOTIFICATION_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosTimeperiodRelatedByNotificationPeriod() only accepts arguments of type NagiosTimeperiod or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosTimeperiodRelatedByNotificationPeriod');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosTimeperiodRelatedByNotificationPeriod');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosTimeperiodRelatedByNotificationPeriod relation NagiosTimeperiod object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosTimeperiodQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosTimeperiodRelatedByNotificationPeriodQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosTimeperiodRelatedByNotificationPeriod', 'NagiosTimeperiodQuery');
	}

	/**
	 * Filter the query by a related NagiosService object
	 *
	 * @param     NagiosService $nagiosService  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosService($nagiosService, $comparison = null)
	{
		if ($nagiosService instanceof NagiosService) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosService->getHost(), $comparison);
		} elseif ($nagiosService instanceof PropelCollection) {
			return $this
				->useNagiosServiceQuery()
					->filterByPrimaryKeys($nagiosService->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosService() only accepts arguments of type NagiosService or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosService relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosService($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosService');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosService');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosService relation NagiosService object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosService($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosService', 'NagiosServiceQuery');
	}

	/**
	 * Filter the query by a related NagiosHostContactMember object
	 *
	 * @param     NagiosHostContactMember $nagiosHostContactMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostContactMember($nagiosHostContactMember, $comparison = null)
	{
		if ($nagiosHostContactMember instanceof NagiosHostContactMember) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostContactMember->getHost(), $comparison);
		} elseif ($nagiosHostContactMember instanceof PropelCollection) {
			return $this
				->useNagiosHostContactMemberQuery()
					->filterByPrimaryKeys($nagiosHostContactMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostContactMember() only accepts arguments of type NagiosHostContactMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostContactMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostContactMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostContactMember');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostContactMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostContactMember relation NagiosHostContactMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostContactMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostContactMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostContactMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostContactMember', 'NagiosHostContactMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosDependency object
	 *
	 * @param     NagiosDependency $nagiosDependency  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependency($nagiosDependency, $comparison = null)
	{
		if ($nagiosDependency instanceof NagiosDependency) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosDependency->getHost(), $comparison);
		} elseif ($nagiosDependency instanceof PropelCollection) {
			return $this
				->useNagiosDependencyQuery()
					->filterByPrimaryKeys($nagiosDependency->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosDependency() only accepts arguments of type NagiosDependency or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosDependency relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosDependency($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosDependency');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosDependency');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosDependency relation NagiosDependency object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosDependencyQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosDependency($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosDependency', 'NagiosDependencyQuery');
	}

	/**
	 * Filter the query by a related NagiosDependencyTarget object
	 *
	 * @param     NagiosDependencyTarget $nagiosDependencyTarget  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependencyTarget($nagiosDependencyTarget, $comparison = null)
	{
		if ($nagiosDependencyTarget instanceof NagiosDependencyTarget) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosDependencyTarget->getTargetHost(), $comparison);
		} elseif ($nagiosDependencyTarget instanceof PropelCollection) {
			return $this
				->useNagiosDependencyTargetQuery()
					->filterByPrimaryKeys($nagiosDependencyTarget->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosDependencyTarget() only accepts arguments of type NagiosDependencyTarget or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosDependencyTarget relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosDependencyTarget($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosDependencyTarget');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosDependencyTarget');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosDependencyTarget relation NagiosDependencyTarget object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosDependencyTargetQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosDependencyTargetQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosDependencyTarget($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosDependencyTarget', 'NagiosDependencyTargetQuery');
	}

	/**
	 * Filter the query by a related NagiosEscalation object
	 *
	 * @param     NagiosEscalation $nagiosEscalation  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalation($nagiosEscalation, $comparison = null)
	{
		if ($nagiosEscalation instanceof NagiosEscalation) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosEscalation->getHost(), $comparison);
		} elseif ($nagiosEscalation instanceof PropelCollection) {
			return $this
				->useNagiosEscalationQuery()
					->filterByPrimaryKeys($nagiosEscalation->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosEscalation() only accepts arguments of type NagiosEscalation or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosEscalation relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosEscalation($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosEscalation');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosEscalation');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosEscalation relation NagiosEscalation object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosEscalationQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosEscalationQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosEscalation($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosEscalation', 'NagiosEscalationQuery');
	}

	/**
	 * Filter the query by a related NagiosHostContactgroup object
	 *
	 * @param     NagiosHostContactgroup $nagiosHostContactgroup  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostContactgroup($nagiosHostContactgroup, $comparison = null)
	{
		if ($nagiosHostContactgroup instanceof NagiosHostContactgroup) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostContactgroup->getHost(), $comparison);
		} elseif ($nagiosHostContactgroup instanceof PropelCollection) {
			return $this
				->useNagiosHostContactgroupQuery()
					->filterByPrimaryKeys($nagiosHostContactgroup->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostContactgroup() only accepts arguments of type NagiosHostContactgroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostContactgroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostContactgroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostContactgroup');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostContactgroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostContactgroup relation NagiosHostContactgroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostContactgroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostContactgroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostContactgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostContactgroup', 'NagiosHostContactgroupQuery');
	}

	/**
	 * Filter the query by a related NagiosHostgroupMembership object
	 *
	 * @param     NagiosHostgroupMembership $nagiosHostgroupMembership  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroupMembership($nagiosHostgroupMembership, $comparison = null)
	{
		if ($nagiosHostgroupMembership instanceof NagiosHostgroupMembership) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostgroupMembership->getHost(), $comparison);
		} elseif ($nagiosHostgroupMembership instanceof PropelCollection) {
			return $this
				->useNagiosHostgroupMembershipQuery()
					->filterByPrimaryKeys($nagiosHostgroupMembership->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostgroupMembership() only accepts arguments of type NagiosHostgroupMembership or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostgroupMembership relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostgroupMembership($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostgroupMembership');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostgroupMembership');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostgroupMembership relation NagiosHostgroupMembership object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostgroupMembershipQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostgroupMembershipQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostgroupMembership($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostgroupMembership', 'NagiosHostgroupMembershipQuery');
	}

	/**
	 * Filter the query by a related NagiosHostCheckCommandParameter object
	 *
	 * @param     NagiosHostCheckCommandParameter $nagiosHostCheckCommandParameter  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostCheckCommandParameter($nagiosHostCheckCommandParameter, $comparison = null)
	{
		if ($nagiosHostCheckCommandParameter instanceof NagiosHostCheckCommandParameter) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostCheckCommandParameter->getHost(), $comparison);
		} elseif ($nagiosHostCheckCommandParameter instanceof PropelCollection) {
			return $this
				->useNagiosHostCheckCommandParameterQuery()
					->filterByPrimaryKeys($nagiosHostCheckCommandParameter->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostCheckCommandParameter() only accepts arguments of type NagiosHostCheckCommandParameter or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostCheckCommandParameter relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostCheckCommandParameter($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostCheckCommandParameter');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostCheckCommandParameter');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostCheckCommandParameter relation NagiosHostCheckCommandParameter object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostCheckCommandParameterQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostCheckCommandParameterQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostCheckCommandParameter($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostCheckCommandParameter', 'NagiosHostCheckCommandParameterQuery');
	}

	/**
	 * Filter the query by a related NagiosHostParent object
	 *
	 * @param     NagiosHostParent $nagiosHostParent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostParentRelatedByChildHost($nagiosHostParent, $comparison = null)
	{
		if ($nagiosHostParent instanceof NagiosHostParent) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostParent->getChildHost(), $comparison);
		} elseif ($nagiosHostParent instanceof PropelCollection) {
			return $this
				->useNagiosHostParentRelatedByChildHostQuery()
					->filterByPrimaryKeys($nagiosHostParent->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostParentRelatedByChildHost() only accepts arguments of type NagiosHostParent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostParentRelatedByChildHost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostParentRelatedByChildHost($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostParentRelatedByChildHost');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostParentRelatedByChildHost');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostParentRelatedByChildHost relation NagiosHostParent object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostParentQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostParentRelatedByChildHostQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostParentRelatedByChildHost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostParentRelatedByChildHost', 'NagiosHostParentQuery');
	}

	/**
	 * Filter the query by a related NagiosHostParent object
	 *
	 * @param     NagiosHostParent $nagiosHostParent  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostParentRelatedByParentHost($nagiosHostParent, $comparison = null)
	{
		if ($nagiosHostParent instanceof NagiosHostParent) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostParent->getParentHost(), $comparison);
		} elseif ($nagiosHostParent instanceof PropelCollection) {
			return $this
				->useNagiosHostParentRelatedByParentHostQuery()
					->filterByPrimaryKeys($nagiosHostParent->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostParentRelatedByParentHost() only accepts arguments of type NagiosHostParent or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostParentRelatedByParentHost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostParentRelatedByParentHost($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostParentRelatedByParentHost');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostParentRelatedByParentHost');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostParentRelatedByParentHost relation NagiosHostParent object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostParentQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostParentRelatedByParentHostQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostParentRelatedByParentHost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostParentRelatedByParentHost', 'NagiosHostParentQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplateInheritance object
	 *
	 * @param     NagiosHostTemplateInheritance $nagiosHostTemplateInheritance  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplateInheritance($nagiosHostTemplateInheritance, $comparison = null)
	{
		if ($nagiosHostTemplateInheritance instanceof NagiosHostTemplateInheritance) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostTemplateInheritance->getSourceHost(), $comparison);
		} elseif ($nagiosHostTemplateInheritance instanceof PropelCollection) {
			return $this
				->useNagiosHostTemplateInheritanceQuery()
					->filterByPrimaryKeys($nagiosHostTemplateInheritance->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostTemplateInheritance() only accepts arguments of type NagiosHostTemplateInheritance or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplateInheritance relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplateInheritance($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplateInheritance');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostTemplateInheritance');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplateInheritance relation NagiosHostTemplateInheritance object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateInheritanceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateInheritanceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplateInheritance($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplateInheritance', 'NagiosHostTemplateInheritanceQuery');
	}

	/**
	 * Filter the query by a related AutodiscoveryDevice object
	 *
	 * @param     AutodiscoveryDevice $autodiscoveryDevice  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByAutodiscoveryDevice($autodiscoveryDevice, $comparison = null)
	{
		if ($autodiscoveryDevice instanceof AutodiscoveryDevice) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $autodiscoveryDevice->getProposedParent(), $comparison);
		} elseif ($autodiscoveryDevice instanceof PropelCollection) {
			return $this
				->useAutodiscoveryDeviceQuery()
					->filterByPrimaryKeys($autodiscoveryDevice->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByAutodiscoveryDevice() only accepts arguments of type AutodiscoveryDevice or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the AutodiscoveryDevice relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinAutodiscoveryDevice($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('AutodiscoveryDevice');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'AutodiscoveryDevice');
		}
		
		return $this;
	}

	/**
	 * Use the AutodiscoveryDevice relation AutodiscoveryDevice object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    AutodiscoveryDeviceQuery A secondary query class using the current class as primary query
	 */
	public function useAutodiscoveryDeviceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinAutodiscoveryDevice($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'AutodiscoveryDevice', 'AutodiscoveryDeviceQuery');
	}

	/**
	 * Filter the query by a related NagiosHostCustomObjectVar object
	 *
	 * @param     NagiosHostCustomObjectVar $nagiosHostCustomObjectVar  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostCustomObjectVar($nagiosHostCustomObjectVar, $comparison = null)
	{
		if ($nagiosHostCustomObjectVar instanceof NagiosHostCustomObjectVar) {
			return $this
				->addUsingAlias(NagiosHostPeer::ID, $nagiosHostCustomObjectVar->getHost(), $comparison);
		} elseif ($nagiosHostCustomObjectVar instanceof PropelCollection) {
			return $this
				->useNagiosHostCustomObjectVarQuery()
					->filterByPrimaryKeys($nagiosHostCustomObjectVar->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosHostCustomObjectVar() only accepts arguments of type NagiosHostCustomObjectVar or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostCustomObjectVar relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function joinNagiosHostCustomObjectVar($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostCustomObjectVar');
		
		// create a ModelJoin object for this join
		$join = new ModelJoin();
		$join->setJoinType($joinType);
		$join->setRelationMap($relationMap, $this->useAliasInSQL ? $this->getModelAlias() : null, $relationAlias);
		if ($previousJoin = $this->getPreviousJoin()) {
			$join->setPreviousJoin($previousJoin);
		}
		
		// add the ModelJoin to the current object
		if($relationAlias) {
			$this->addAlias($relationAlias, $relationMap->getRightTable()->getName());
			$this->addJoinObject($join, $relationAlias);
		} else {
			$this->addJoinObject($join, 'NagiosHostCustomObjectVar');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostCustomObjectVar relation NagiosHostCustomObjectVar object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostCustomObjectVarQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostCustomObjectVarQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostCustomObjectVar($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostCustomObjectVar', 'NagiosHostCustomObjectVarQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosHost $nagiosHost Object to remove from the list of results
	 *
	 * @return    NagiosHostQuery The current query, for fluid interface
	 */
	public function prune($nagiosHost = null)
	{
		if ($nagiosHost) {
			$this->addUsingAlias(NagiosHostPeer::ID, $nagiosHost->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosHostQuery
