<?php


/**
 * Base class that represents a query for the 'nagios_service' table.
 *
 * Nagios Service
 *
 * @method     NagiosServiceQuery orderById($order = Criteria::ASC) Order by the id column
 * @method     NagiosServiceQuery orderByDescription($order = Criteria::ASC) Order by the description column
 * @method     NagiosServiceQuery orderByDisplayName($order = Criteria::ASC) Order by the display_name column
 * @method     NagiosServiceQuery orderByHost($order = Criteria::ASC) Order by the host column
 * @method     NagiosServiceQuery orderByHostTemplate($order = Criteria::ASC) Order by the host_template column
 * @method     NagiosServiceQuery orderByHostgroup($order = Criteria::ASC) Order by the hostgroup column
 * @method     NagiosServiceQuery orderByInitialState($order = Criteria::ASC) Order by the initial_state column
 * @method     NagiosServiceQuery orderByIsVolatile($order = Criteria::ASC) Order by the is_volatile column
 * @method     NagiosServiceQuery orderByCheckCommand($order = Criteria::ASC) Order by the check_command column
 * @method     NagiosServiceQuery orderByMaximumCheckAttempts($order = Criteria::ASC) Order by the maximum_check_attempts column
 * @method     NagiosServiceQuery orderByNormalCheckInterval($order = Criteria::ASC) Order by the normal_check_interval column
 * @method     NagiosServiceQuery orderByRetryInterval($order = Criteria::ASC) Order by the retry_interval column
 * @method     NagiosServiceQuery orderByFirstNotificationDelay($order = Criteria::ASC) Order by the first_notification_delay column
 * @method     NagiosServiceQuery orderByActiveChecksEnabled($order = Criteria::ASC) Order by the active_checks_enabled column
 * @method     NagiosServiceQuery orderByPassiveChecksEnabled($order = Criteria::ASC) Order by the passive_checks_enabled column
 * @method     NagiosServiceQuery orderByCheckPeriod($order = Criteria::ASC) Order by the check_period column
 * @method     NagiosServiceQuery orderByParallelizeCheck($order = Criteria::ASC) Order by the parallelize_check column
 * @method     NagiosServiceQuery orderByObsessOverService($order = Criteria::ASC) Order by the obsess_over_service column
 * @method     NagiosServiceQuery orderByCheckFreshness($order = Criteria::ASC) Order by the check_freshness column
 * @method     NagiosServiceQuery orderByFreshnessThreshold($order = Criteria::ASC) Order by the freshness_threshold column
 * @method     NagiosServiceQuery orderByEventHandler($order = Criteria::ASC) Order by the event_handler column
 * @method     NagiosServiceQuery orderByEventHandlerEnabled($order = Criteria::ASC) Order by the event_handler_enabled column
 * @method     NagiosServiceQuery orderByLowFlapThreshold($order = Criteria::ASC) Order by the low_flap_threshold column
 * @method     NagiosServiceQuery orderByHighFlapThreshold($order = Criteria::ASC) Order by the high_flap_threshold column
 * @method     NagiosServiceQuery orderByFlapDetectionEnabled($order = Criteria::ASC) Order by the flap_detection_enabled column
 * @method     NagiosServiceQuery orderByFlapDetectionOnOk($order = Criteria::ASC) Order by the flap_detection_on_ok column
 * @method     NagiosServiceQuery orderByFlapDetectionOnWarning($order = Criteria::ASC) Order by the flap_detection_on_warning column
 * @method     NagiosServiceQuery orderByFlapDetectionOnCritical($order = Criteria::ASC) Order by the flap_detection_on_critical column
 * @method     NagiosServiceQuery orderByFlapDetectionOnUnknown($order = Criteria::ASC) Order by the flap_detection_on_unknown column
 * @method     NagiosServiceQuery orderByProcessPerfData($order = Criteria::ASC) Order by the process_perf_data column
 * @method     NagiosServiceQuery orderByRetainStatusInformation($order = Criteria::ASC) Order by the retain_status_information column
 * @method     NagiosServiceQuery orderByRetainNonstatusInformation($order = Criteria::ASC) Order by the retain_nonstatus_information column
 * @method     NagiosServiceQuery orderByNotificationInterval($order = Criteria::ASC) Order by the notification_interval column
 * @method     NagiosServiceQuery orderByNotificationPeriod($order = Criteria::ASC) Order by the notification_period column
 * @method     NagiosServiceQuery orderByNotificationOnWarning($order = Criteria::ASC) Order by the notification_on_warning column
 * @method     NagiosServiceQuery orderByNotificationOnUnknown($order = Criteria::ASC) Order by the notification_on_unknown column
 * @method     NagiosServiceQuery orderByNotificationOnCritical($order = Criteria::ASC) Order by the notification_on_critical column
 * @method     NagiosServiceQuery orderByNotificationOnRecovery($order = Criteria::ASC) Order by the notification_on_recovery column
 * @method     NagiosServiceQuery orderByNotificationOnFlapping($order = Criteria::ASC) Order by the notification_on_flapping column
 * @method     NagiosServiceQuery orderByNotificationOnScheduledDowntime($order = Criteria::ASC) Order by the notification_on_scheduled_downtime column
 * @method     NagiosServiceQuery orderByNotificationsEnabled($order = Criteria::ASC) Order by the notifications_enabled column
 * @method     NagiosServiceQuery orderByStalkingOnOk($order = Criteria::ASC) Order by the stalking_on_ok column
 * @method     NagiosServiceQuery orderByStalkingOnWarning($order = Criteria::ASC) Order by the stalking_on_warning column
 * @method     NagiosServiceQuery orderByStalkingOnUnknown($order = Criteria::ASC) Order by the stalking_on_unknown column
 * @method     NagiosServiceQuery orderByStalkingOnCritical($order = Criteria::ASC) Order by the stalking_on_critical column
 * @method     NagiosServiceQuery orderByFailurePredictionEnabled($order = Criteria::ASC) Order by the failure_prediction_enabled column
 * @method     NagiosServiceQuery orderByNotes($order = Criteria::ASC) Order by the notes column
 * @method     NagiosServiceQuery orderByNotesUrl($order = Criteria::ASC) Order by the notes_url column
 * @method     NagiosServiceQuery orderByActionUrl($order = Criteria::ASC) Order by the action_url column
 * @method     NagiosServiceQuery orderByIconImage($order = Criteria::ASC) Order by the icon_image column
 * @method     NagiosServiceQuery orderByIconImageAlt($order = Criteria::ASC) Order by the icon_image_alt column
 *
 * @method     NagiosServiceQuery groupById() Group by the id column
 * @method     NagiosServiceQuery groupByDescription() Group by the description column
 * @method     NagiosServiceQuery groupByDisplayName() Group by the display_name column
 * @method     NagiosServiceQuery groupByHost() Group by the host column
 * @method     NagiosServiceQuery groupByHostTemplate() Group by the host_template column
 * @method     NagiosServiceQuery groupByHostgroup() Group by the hostgroup column
 * @method     NagiosServiceQuery groupByInitialState() Group by the initial_state column
 * @method     NagiosServiceQuery groupByIsVolatile() Group by the is_volatile column
 * @method     NagiosServiceQuery groupByCheckCommand() Group by the check_command column
 * @method     NagiosServiceQuery groupByMaximumCheckAttempts() Group by the maximum_check_attempts column
 * @method     NagiosServiceQuery groupByNormalCheckInterval() Group by the normal_check_interval column
 * @method     NagiosServiceQuery groupByRetryInterval() Group by the retry_interval column
 * @method     NagiosServiceQuery groupByFirstNotificationDelay() Group by the first_notification_delay column
 * @method     NagiosServiceQuery groupByActiveChecksEnabled() Group by the active_checks_enabled column
 * @method     NagiosServiceQuery groupByPassiveChecksEnabled() Group by the passive_checks_enabled column
 * @method     NagiosServiceQuery groupByCheckPeriod() Group by the check_period column
 * @method     NagiosServiceQuery groupByParallelizeCheck() Group by the parallelize_check column
 * @method     NagiosServiceQuery groupByObsessOverService() Group by the obsess_over_service column
 * @method     NagiosServiceQuery groupByCheckFreshness() Group by the check_freshness column
 * @method     NagiosServiceQuery groupByFreshnessThreshold() Group by the freshness_threshold column
 * @method     NagiosServiceQuery groupByEventHandler() Group by the event_handler column
 * @method     NagiosServiceQuery groupByEventHandlerEnabled() Group by the event_handler_enabled column
 * @method     NagiosServiceQuery groupByLowFlapThreshold() Group by the low_flap_threshold column
 * @method     NagiosServiceQuery groupByHighFlapThreshold() Group by the high_flap_threshold column
 * @method     NagiosServiceQuery groupByFlapDetectionEnabled() Group by the flap_detection_enabled column
 * @method     NagiosServiceQuery groupByFlapDetectionOnOk() Group by the flap_detection_on_ok column
 * @method     NagiosServiceQuery groupByFlapDetectionOnWarning() Group by the flap_detection_on_warning column
 * @method     NagiosServiceQuery groupByFlapDetectionOnCritical() Group by the flap_detection_on_critical column
 * @method     NagiosServiceQuery groupByFlapDetectionOnUnknown() Group by the flap_detection_on_unknown column
 * @method     NagiosServiceQuery groupByProcessPerfData() Group by the process_perf_data column
 * @method     NagiosServiceQuery groupByRetainStatusInformation() Group by the retain_status_information column
 * @method     NagiosServiceQuery groupByRetainNonstatusInformation() Group by the retain_nonstatus_information column
 * @method     NagiosServiceQuery groupByNotificationInterval() Group by the notification_interval column
 * @method     NagiosServiceQuery groupByNotificationPeriod() Group by the notification_period column
 * @method     NagiosServiceQuery groupByNotificationOnWarning() Group by the notification_on_warning column
 * @method     NagiosServiceQuery groupByNotificationOnUnknown() Group by the notification_on_unknown column
 * @method     NagiosServiceQuery groupByNotificationOnCritical() Group by the notification_on_critical column
 * @method     NagiosServiceQuery groupByNotificationOnRecovery() Group by the notification_on_recovery column
 * @method     NagiosServiceQuery groupByNotificationOnFlapping() Group by the notification_on_flapping column
 * @method     NagiosServiceQuery groupByNotificationOnScheduledDowntime() Group by the notification_on_scheduled_downtime column
 * @method     NagiosServiceQuery groupByNotificationsEnabled() Group by the notifications_enabled column
 * @method     NagiosServiceQuery groupByStalkingOnOk() Group by the stalking_on_ok column
 * @method     NagiosServiceQuery groupByStalkingOnWarning() Group by the stalking_on_warning column
 * @method     NagiosServiceQuery groupByStalkingOnUnknown() Group by the stalking_on_unknown column
 * @method     NagiosServiceQuery groupByStalkingOnCritical() Group by the stalking_on_critical column
 * @method     NagiosServiceQuery groupByFailurePredictionEnabled() Group by the failure_prediction_enabled column
 * @method     NagiosServiceQuery groupByNotes() Group by the notes column
 * @method     NagiosServiceQuery groupByNotesUrl() Group by the notes_url column
 * @method     NagiosServiceQuery groupByActionUrl() Group by the action_url column
 * @method     NagiosServiceQuery groupByIconImage() Group by the icon_image column
 * @method     NagiosServiceQuery groupByIconImageAlt() Group by the icon_image_alt column
 *
 * @method     NagiosServiceQuery leftJoin($relation) Adds a LEFT JOIN clause to the query
 * @method     NagiosServiceQuery rightJoin($relation) Adds a RIGHT JOIN clause to the query
 * @method     NagiosServiceQuery innerJoin($relation) Adds a INNER JOIN clause to the query
 *
 * @method     NagiosServiceQuery leftJoinNagiosHost($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosServiceQuery rightJoinNagiosHost($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHost relation
 * @method     NagiosServiceQuery innerJoinNagiosHost($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHost relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosHostTemplate($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosServiceQuery rightJoinNagiosHostTemplate($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostTemplate relation
 * @method     NagiosServiceQuery innerJoinNagiosHostTemplate($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostTemplate relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosHostgroup($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosServiceQuery rightJoinNagiosHostgroup($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosHostgroup relation
 * @method     NagiosServiceQuery innerJoinNagiosHostgroup($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosHostgroup relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 * @method     NagiosServiceQuery rightJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 * @method     NagiosServiceQuery innerJoinNagiosCommandRelatedByCheckCommand($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByCheckCommand relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 * @method     NagiosServiceQuery rightJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 * @method     NagiosServiceQuery innerJoinNagiosCommandRelatedByEventHandler($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosCommandRelatedByEventHandler relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 * @method     NagiosServiceQuery rightJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 * @method     NagiosServiceQuery innerJoinNagiosTimeperiodRelatedByCheckPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByCheckPeriod relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 * @method     NagiosServiceQuery rightJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 * @method     NagiosServiceQuery innerJoinNagiosTimeperiodRelatedByNotificationPeriod($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosTimeperiodRelatedByNotificationPeriod relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceCheckCommandParameter($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceCheckCommandParameter relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceCheckCommandParameter($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceCheckCommandParameter relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceCheckCommandParameter($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceCheckCommandParameter relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceGroupMember relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceGroupMember relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceGroupMember relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceContactMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceContactMember relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceContactMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceContactMember relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceContactMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceContactMember relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceContactGroupMember relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceContactGroupMember relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceContactGroupMember($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceContactGroupMember relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosDependency($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosServiceQuery rightJoinNagiosDependency($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependency relation
 * @method     NagiosServiceQuery innerJoinNagiosDependency($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependency relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosDependencyTarget($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosServiceQuery rightJoinNagiosDependencyTarget($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosDependencyTarget relation
 * @method     NagiosServiceQuery innerJoinNagiosDependencyTarget($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosDependencyTarget relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosEscalation($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosServiceQuery rightJoinNagiosEscalation($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosEscalation relation
 * @method     NagiosServiceQuery innerJoinNagiosEscalation($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosEscalation relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceTemplateInheritance($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceTemplateInheritance relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceTemplateInheritance($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceTemplateInheritance relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceTemplateInheritance($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceTemplateInheritance relation
 *
 * @method     NagiosServiceQuery leftJoinNagiosServiceCustomObjectVar($relationAlias = null) Adds a LEFT JOIN clause to the query using the NagiosServiceCustomObjectVar relation
 * @method     NagiosServiceQuery rightJoinNagiosServiceCustomObjectVar($relationAlias = null) Adds a RIGHT JOIN clause to the query using the NagiosServiceCustomObjectVar relation
 * @method     NagiosServiceQuery innerJoinNagiosServiceCustomObjectVar($relationAlias = null) Adds a INNER JOIN clause to the query using the NagiosServiceCustomObjectVar relation
 *
 * @method     NagiosService findOne(PropelPDO $con = null) Return the first NagiosService matching the query
 * @method     NagiosService findOneOrCreate(PropelPDO $con = null) Return the first NagiosService matching the query, or a new NagiosService object populated from the query conditions when no match is found
 *
 * @method     NagiosService findOneById(int $id) Return the first NagiosService filtered by the id column
 * @method     NagiosService findOneByDescription(string $description) Return the first NagiosService filtered by the description column
 * @method     NagiosService findOneByDisplayName(string $display_name) Return the first NagiosService filtered by the display_name column
 * @method     NagiosService findOneByHost(int $host) Return the first NagiosService filtered by the host column
 * @method     NagiosService findOneByHostTemplate(int $host_template) Return the first NagiosService filtered by the host_template column
 * @method     NagiosService findOneByHostgroup(int $hostgroup) Return the first NagiosService filtered by the hostgroup column
 * @method     NagiosService findOneByInitialState(string $initial_state) Return the first NagiosService filtered by the initial_state column
 * @method     NagiosService findOneByIsVolatile(boolean $is_volatile) Return the first NagiosService filtered by the is_volatile column
 * @method     NagiosService findOneByCheckCommand(int $check_command) Return the first NagiosService filtered by the check_command column
 * @method     NagiosService findOneByMaximumCheckAttempts(int $maximum_check_attempts) Return the first NagiosService filtered by the maximum_check_attempts column
 * @method     NagiosService findOneByNormalCheckInterval(int $normal_check_interval) Return the first NagiosService filtered by the normal_check_interval column
 * @method     NagiosService findOneByRetryInterval(int $retry_interval) Return the first NagiosService filtered by the retry_interval column
 * @method     NagiosService findOneByFirstNotificationDelay(int $first_notification_delay) Return the first NagiosService filtered by the first_notification_delay column
 * @method     NagiosService findOneByActiveChecksEnabled(boolean $active_checks_enabled) Return the first NagiosService filtered by the active_checks_enabled column
 * @method     NagiosService findOneByPassiveChecksEnabled(boolean $passive_checks_enabled) Return the first NagiosService filtered by the passive_checks_enabled column
 * @method     NagiosService findOneByCheckPeriod(int $check_period) Return the first NagiosService filtered by the check_period column
 * @method     NagiosService findOneByParallelizeCheck(boolean $parallelize_check) Return the first NagiosService filtered by the parallelize_check column
 * @method     NagiosService findOneByObsessOverService(boolean $obsess_over_service) Return the first NagiosService filtered by the obsess_over_service column
 * @method     NagiosService findOneByCheckFreshness(boolean $check_freshness) Return the first NagiosService filtered by the check_freshness column
 * @method     NagiosService findOneByFreshnessThreshold(int $freshness_threshold) Return the first NagiosService filtered by the freshness_threshold column
 * @method     NagiosService findOneByEventHandler(int $event_handler) Return the first NagiosService filtered by the event_handler column
 * @method     NagiosService findOneByEventHandlerEnabled(boolean $event_handler_enabled) Return the first NagiosService filtered by the event_handler_enabled column
 * @method     NagiosService findOneByLowFlapThreshold(int $low_flap_threshold) Return the first NagiosService filtered by the low_flap_threshold column
 * @method     NagiosService findOneByHighFlapThreshold(int $high_flap_threshold) Return the first NagiosService filtered by the high_flap_threshold column
 * @method     NagiosService findOneByFlapDetectionEnabled(boolean $flap_detection_enabled) Return the first NagiosService filtered by the flap_detection_enabled column
 * @method     NagiosService findOneByFlapDetectionOnOk(boolean $flap_detection_on_ok) Return the first NagiosService filtered by the flap_detection_on_ok column
 * @method     NagiosService findOneByFlapDetectionOnWarning(boolean $flap_detection_on_warning) Return the first NagiosService filtered by the flap_detection_on_warning column
 * @method     NagiosService findOneByFlapDetectionOnCritical(boolean $flap_detection_on_critical) Return the first NagiosService filtered by the flap_detection_on_critical column
 * @method     NagiosService findOneByFlapDetectionOnUnknown(boolean $flap_detection_on_unknown) Return the first NagiosService filtered by the flap_detection_on_unknown column
 * @method     NagiosService findOneByProcessPerfData(boolean $process_perf_data) Return the first NagiosService filtered by the process_perf_data column
 * @method     NagiosService findOneByRetainStatusInformation(boolean $retain_status_information) Return the first NagiosService filtered by the retain_status_information column
 * @method     NagiosService findOneByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return the first NagiosService filtered by the retain_nonstatus_information column
 * @method     NagiosService findOneByNotificationInterval(int $notification_interval) Return the first NagiosService filtered by the notification_interval column
 * @method     NagiosService findOneByNotificationPeriod(int $notification_period) Return the first NagiosService filtered by the notification_period column
 * @method     NagiosService findOneByNotificationOnWarning(boolean $notification_on_warning) Return the first NagiosService filtered by the notification_on_warning column
 * @method     NagiosService findOneByNotificationOnUnknown(boolean $notification_on_unknown) Return the first NagiosService filtered by the notification_on_unknown column
 * @method     NagiosService findOneByNotificationOnCritical(boolean $notification_on_critical) Return the first NagiosService filtered by the notification_on_critical column
 * @method     NagiosService findOneByNotificationOnRecovery(boolean $notification_on_recovery) Return the first NagiosService filtered by the notification_on_recovery column
 * @method     NagiosService findOneByNotificationOnFlapping(boolean $notification_on_flapping) Return the first NagiosService filtered by the notification_on_flapping column
 * @method     NagiosService findOneByNotificationOnScheduledDowntime(boolean $notification_on_scheduled_downtime) Return the first NagiosService filtered by the notification_on_scheduled_downtime column
 * @method     NagiosService findOneByNotificationsEnabled(boolean $notifications_enabled) Return the first NagiosService filtered by the notifications_enabled column
 * @method     NagiosService findOneByStalkingOnOk(boolean $stalking_on_ok) Return the first NagiosService filtered by the stalking_on_ok column
 * @method     NagiosService findOneByStalkingOnWarning(boolean $stalking_on_warning) Return the first NagiosService filtered by the stalking_on_warning column
 * @method     NagiosService findOneByStalkingOnUnknown(boolean $stalking_on_unknown) Return the first NagiosService filtered by the stalking_on_unknown column
 * @method     NagiosService findOneByStalkingOnCritical(boolean $stalking_on_critical) Return the first NagiosService filtered by the stalking_on_critical column
 * @method     NagiosService findOneByFailurePredictionEnabled(boolean $failure_prediction_enabled) Return the first NagiosService filtered by the failure_prediction_enabled column
 * @method     NagiosService findOneByNotes(string $notes) Return the first NagiosService filtered by the notes column
 * @method     NagiosService findOneByNotesUrl(string $notes_url) Return the first NagiosService filtered by the notes_url column
 * @method     NagiosService findOneByActionUrl(string $action_url) Return the first NagiosService filtered by the action_url column
 * @method     NagiosService findOneByIconImage(string $icon_image) Return the first NagiosService filtered by the icon_image column
 * @method     NagiosService findOneByIconImageAlt(string $icon_image_alt) Return the first NagiosService filtered by the icon_image_alt column
 *
 * @method     array findById(int $id) Return NagiosService objects filtered by the id column
 * @method     array findByDescription(string $description) Return NagiosService objects filtered by the description column
 * @method     array findByDisplayName(string $display_name) Return NagiosService objects filtered by the display_name column
 * @method     array findByHost(int $host) Return NagiosService objects filtered by the host column
 * @method     array findByHostTemplate(int $host_template) Return NagiosService objects filtered by the host_template column
 * @method     array findByHostgroup(int $hostgroup) Return NagiosService objects filtered by the hostgroup column
 * @method     array findByInitialState(string $initial_state) Return NagiosService objects filtered by the initial_state column
 * @method     array findByIsVolatile(boolean $is_volatile) Return NagiosService objects filtered by the is_volatile column
 * @method     array findByCheckCommand(int $check_command) Return NagiosService objects filtered by the check_command column
 * @method     array findByMaximumCheckAttempts(int $maximum_check_attempts) Return NagiosService objects filtered by the maximum_check_attempts column
 * @method     array findByNormalCheckInterval(int $normal_check_interval) Return NagiosService objects filtered by the normal_check_interval column
 * @method     array findByRetryInterval(int $retry_interval) Return NagiosService objects filtered by the retry_interval column
 * @method     array findByFirstNotificationDelay(int $first_notification_delay) Return NagiosService objects filtered by the first_notification_delay column
 * @method     array findByActiveChecksEnabled(boolean $active_checks_enabled) Return NagiosService objects filtered by the active_checks_enabled column
 * @method     array findByPassiveChecksEnabled(boolean $passive_checks_enabled) Return NagiosService objects filtered by the passive_checks_enabled column
 * @method     array findByCheckPeriod(int $check_period) Return NagiosService objects filtered by the check_period column
 * @method     array findByParallelizeCheck(boolean $parallelize_check) Return NagiosService objects filtered by the parallelize_check column
 * @method     array findByObsessOverService(boolean $obsess_over_service) Return NagiosService objects filtered by the obsess_over_service column
 * @method     array findByCheckFreshness(boolean $check_freshness) Return NagiosService objects filtered by the check_freshness column
 * @method     array findByFreshnessThreshold(int $freshness_threshold) Return NagiosService objects filtered by the freshness_threshold column
 * @method     array findByEventHandler(int $event_handler) Return NagiosService objects filtered by the event_handler column
 * @method     array findByEventHandlerEnabled(boolean $event_handler_enabled) Return NagiosService objects filtered by the event_handler_enabled column
 * @method     array findByLowFlapThreshold(int $low_flap_threshold) Return NagiosService objects filtered by the low_flap_threshold column
 * @method     array findByHighFlapThreshold(int $high_flap_threshold) Return NagiosService objects filtered by the high_flap_threshold column
 * @method     array findByFlapDetectionEnabled(boolean $flap_detection_enabled) Return NagiosService objects filtered by the flap_detection_enabled column
 * @method     array findByFlapDetectionOnOk(boolean $flap_detection_on_ok) Return NagiosService objects filtered by the flap_detection_on_ok column
 * @method     array findByFlapDetectionOnWarning(boolean $flap_detection_on_warning) Return NagiosService objects filtered by the flap_detection_on_warning column
 * @method     array findByFlapDetectionOnCritical(boolean $flap_detection_on_critical) Return NagiosService objects filtered by the flap_detection_on_critical column
 * @method     array findByFlapDetectionOnUnknown(boolean $flap_detection_on_unknown) Return NagiosService objects filtered by the flap_detection_on_unknown column
 * @method     array findByProcessPerfData(boolean $process_perf_data) Return NagiosService objects filtered by the process_perf_data column
 * @method     array findByRetainStatusInformation(boolean $retain_status_information) Return NagiosService objects filtered by the retain_status_information column
 * @method     array findByRetainNonstatusInformation(boolean $retain_nonstatus_information) Return NagiosService objects filtered by the retain_nonstatus_information column
 * @method     array findByNotificationInterval(int $notification_interval) Return NagiosService objects filtered by the notification_interval column
 * @method     array findByNotificationPeriod(int $notification_period) Return NagiosService objects filtered by the notification_period column
 * @method     array findByNotificationOnWarning(boolean $notification_on_warning) Return NagiosService objects filtered by the notification_on_warning column
 * @method     array findByNotificationOnUnknown(boolean $notification_on_unknown) Return NagiosService objects filtered by the notification_on_unknown column
 * @method     array findByNotificationOnCritical(boolean $notification_on_critical) Return NagiosService objects filtered by the notification_on_critical column
 * @method     array findByNotificationOnRecovery(boolean $notification_on_recovery) Return NagiosService objects filtered by the notification_on_recovery column
 * @method     array findByNotificationOnFlapping(boolean $notification_on_flapping) Return NagiosService objects filtered by the notification_on_flapping column
 * @method     array findByNotificationOnScheduledDowntime(boolean $notification_on_scheduled_downtime) Return NagiosService objects filtered by the notification_on_scheduled_downtime column
 * @method     array findByNotificationsEnabled(boolean $notifications_enabled) Return NagiosService objects filtered by the notifications_enabled column
 * @method     array findByStalkingOnOk(boolean $stalking_on_ok) Return NagiosService objects filtered by the stalking_on_ok column
 * @method     array findByStalkingOnWarning(boolean $stalking_on_warning) Return NagiosService objects filtered by the stalking_on_warning column
 * @method     array findByStalkingOnUnknown(boolean $stalking_on_unknown) Return NagiosService objects filtered by the stalking_on_unknown column
 * @method     array findByStalkingOnCritical(boolean $stalking_on_critical) Return NagiosService objects filtered by the stalking_on_critical column
 * @method     array findByFailurePredictionEnabled(boolean $failure_prediction_enabled) Return NagiosService objects filtered by the failure_prediction_enabled column
 * @method     array findByNotes(string $notes) Return NagiosService objects filtered by the notes column
 * @method     array findByNotesUrl(string $notes_url) Return NagiosService objects filtered by the notes_url column
 * @method     array findByActionUrl(string $action_url) Return NagiosService objects filtered by the action_url column
 * @method     array findByIconImage(string $icon_image) Return NagiosService objects filtered by the icon_image column
 * @method     array findByIconImageAlt(string $icon_image_alt) Return NagiosService objects filtered by the icon_image_alt column
 *
 * @package    propel.generator..om
 */
abstract class BaseNagiosServiceQuery extends ModelCriteria
{

	/**
	 * Initializes internal state of BaseNagiosServiceQuery object.
	 *
	 * @param     string $dbName The dabase name
	 * @param     string $modelName The phpName of a model, e.g. 'Book'
	 * @param     string $modelAlias The alias for the model in this query, e.g. 'b'
	 */
	public function __construct($dbName = 'lilac', $modelName = 'NagiosService', $modelAlias = null)
	{
		parent::__construct($dbName, $modelName, $modelAlias);
	}

	/**
	 * Returns a new NagiosServiceQuery object.
	 *
	 * @param     string $modelAlias The alias of a model in the query
	 * @param     Criteria $criteria Optional Criteria to build the query from
	 *
	 * @return    NagiosServiceQuery
	 */
	public static function create($modelAlias = null, $criteria = null)
	{
		if ($criteria instanceof NagiosServiceQuery) {
			return $criteria;
		}
		$query = new NagiosServiceQuery();
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
	 * @return    NagiosService|array|mixed the result, formatted by the current formatter
	 */
	public function findPk($key, $con = null)
	{
		if ((null !== ($obj = NagiosServicePeer::getInstanceFromPool((string) $key))) && $this->getFormatter()->isObjectFormatter()) {
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKey($key)
	{
		return $this->addUsingAlias(NagiosServicePeer::ID, $key, Criteria::EQUAL);
	}

	/**
	 * Filter the query by a list of primary keys
	 *
	 * @param     array $keys The list of primary key to use for the query
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByPrimaryKeys($keys)
	{
		return $this->addUsingAlias(NagiosServicePeer::ID, $keys, Criteria::IN);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterById($id = null, $comparison = null)
	{
		if (is_array($id) && null === $comparison) {
			$comparison = Criteria::IN;
		}
		return $this->addUsingAlias(NagiosServicePeer::ID, $id, $comparison);
	}

	/**
	 * Filter the query on the description column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByDescription('fooValue');   // WHERE description = 'fooValue'
	 * $query->filterByDescription('%fooValue%'); // WHERE description LIKE '%fooValue%'
	 * </code>
	 *
	 * @param     string $description The value to use as filter.
	 *              Accepts wildcards (* and % trigger a LIKE)
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByDescription($description = null, $comparison = null)
	{
		if (null === $comparison) {
			if (is_array($description)) {
				$comparison = Criteria::IN;
			} elseif (preg_match('/[\%\*]/', $description)) {
				$description = str_replace('*', '%', $description);
				$comparison = Criteria::LIKE;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::DESCRIPTION, $description, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::DISPLAY_NAME, $displayName, $comparison);
	}

	/**
	 * Filter the query on the host column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHost(1234); // WHERE host = 1234
	 * $query->filterByHost(array(12, 34)); // WHERE host IN (12, 34)
	 * $query->filterByHost(array('min' => 12)); // WHERE host > 12
	 * </code>
	 *
	 * @see       filterByNagiosHost()
	 *
	 * @param     mixed $host The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByHost($host = null, $comparison = null)
	{
		if (is_array($host)) {
			$useMinMax = false;
			if (isset($host['min'])) {
				$this->addUsingAlias(NagiosServicePeer::HOST, $host['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($host['max'])) {
				$this->addUsingAlias(NagiosServicePeer::HOST, $host['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::HOST, $host, $comparison);
	}

	/**
	 * Filter the query on the host_template column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostTemplate(1234); // WHERE host_template = 1234
	 * $query->filterByHostTemplate(array(12, 34)); // WHERE host_template IN (12, 34)
	 * $query->filterByHostTemplate(array('min' => 12)); // WHERE host_template > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostTemplate()
	 *
	 * @param     mixed $hostTemplate The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByHostTemplate($hostTemplate = null, $comparison = null)
	{
		if (is_array($hostTemplate)) {
			$useMinMax = false;
			if (isset($hostTemplate['min'])) {
				$this->addUsingAlias(NagiosServicePeer::HOST_TEMPLATE, $hostTemplate['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostTemplate['max'])) {
				$this->addUsingAlias(NagiosServicePeer::HOST_TEMPLATE, $hostTemplate['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::HOST_TEMPLATE, $hostTemplate, $comparison);
	}

	/**
	 * Filter the query on the hostgroup column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByHostgroup(1234); // WHERE hostgroup = 1234
	 * $query->filterByHostgroup(array(12, 34)); // WHERE hostgroup IN (12, 34)
	 * $query->filterByHostgroup(array('min' => 12)); // WHERE hostgroup > 12
	 * </code>
	 *
	 * @see       filterByNagiosHostgroup()
	 *
	 * @param     mixed $hostgroup The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByHostgroup($hostgroup = null, $comparison = null)
	{
		if (is_array($hostgroup)) {
			$useMinMax = false;
			if (isset($hostgroup['min'])) {
				$this->addUsingAlias(NagiosServicePeer::HOSTGROUP, $hostgroup['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($hostgroup['max'])) {
				$this->addUsingAlias(NagiosServicePeer::HOSTGROUP, $hostgroup['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::HOSTGROUP, $hostgroup, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::INITIAL_STATE, $initialState, $comparison);
	}

	/**
	 * Filter the query on the is_volatile column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByIsVolatile(true); // WHERE is_volatile = true
	 * $query->filterByIsVolatile('yes'); // WHERE is_volatile = true
	 * </code>
	 *
	 * @param     boolean|string $isVolatile The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByIsVolatile($isVolatile = null, $comparison = null)
	{
		if (is_string($isVolatile)) {
			$is_volatile = in_array(strtolower($isVolatile), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::IS_VOLATILE, $isVolatile, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByCheckCommand($checkCommand = null, $comparison = null)
	{
		if (is_array($checkCommand)) {
			$useMinMax = false;
			if (isset($checkCommand['min'])) {
				$this->addUsingAlias(NagiosServicePeer::CHECK_COMMAND, $checkCommand['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkCommand['max'])) {
				$this->addUsingAlias(NagiosServicePeer::CHECK_COMMAND, $checkCommand['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::CHECK_COMMAND, $checkCommand, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByMaximumCheckAttempts($maximumCheckAttempts = null, $comparison = null)
	{
		if (is_array($maximumCheckAttempts)) {
			$useMinMax = false;
			if (isset($maximumCheckAttempts['min'])) {
				$this->addUsingAlias(NagiosServicePeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($maximumCheckAttempts['max'])) {
				$this->addUsingAlias(NagiosServicePeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::MAXIMUM_CHECK_ATTEMPTS, $maximumCheckAttempts, $comparison);
	}

	/**
	 * Filter the query on the normal_check_interval column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNormalCheckInterval(1234); // WHERE normal_check_interval = 1234
	 * $query->filterByNormalCheckInterval(array(12, 34)); // WHERE normal_check_interval IN (12, 34)
	 * $query->filterByNormalCheckInterval(array('min' => 12)); // WHERE normal_check_interval > 12
	 * </code>
	 *
	 * @param     mixed $normalCheckInterval The value to use as filter.
	 *              Use scalar values for equality.
	 *              Use array values for in_array() equivalent.
	 *              Use associative array('min' => $minValue, 'max' => $maxValue) for intervals.
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNormalCheckInterval($normalCheckInterval = null, $comparison = null)
	{
		if (is_array($normalCheckInterval)) {
			$useMinMax = false;
			if (isset($normalCheckInterval['min'])) {
				$this->addUsingAlias(NagiosServicePeer::NORMAL_CHECK_INTERVAL, $normalCheckInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($normalCheckInterval['max'])) {
				$this->addUsingAlias(NagiosServicePeer::NORMAL_CHECK_INTERVAL, $normalCheckInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::NORMAL_CHECK_INTERVAL, $normalCheckInterval, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByRetryInterval($retryInterval = null, $comparison = null)
	{
		if (is_array($retryInterval)) {
			$useMinMax = false;
			if (isset($retryInterval['min'])) {
				$this->addUsingAlias(NagiosServicePeer::RETRY_INTERVAL, $retryInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($retryInterval['max'])) {
				$this->addUsingAlias(NagiosServicePeer::RETRY_INTERVAL, $retryInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::RETRY_INTERVAL, $retryInterval, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFirstNotificationDelay($firstNotificationDelay = null, $comparison = null)
	{
		if (is_array($firstNotificationDelay)) {
			$useMinMax = false;
			if (isset($firstNotificationDelay['min'])) {
				$this->addUsingAlias(NagiosServicePeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($firstNotificationDelay['max'])) {
				$this->addUsingAlias(NagiosServicePeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::FIRST_NOTIFICATION_DELAY, $firstNotificationDelay, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByActiveChecksEnabled($activeChecksEnabled = null, $comparison = null)
	{
		if (is_string($activeChecksEnabled)) {
			$active_checks_enabled = in_array(strtolower($activeChecksEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::ACTIVE_CHECKS_ENABLED, $activeChecksEnabled, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByPassiveChecksEnabled($passiveChecksEnabled = null, $comparison = null)
	{
		if (is_string($passiveChecksEnabled)) {
			$passive_checks_enabled = in_array(strtolower($passiveChecksEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::PASSIVE_CHECKS_ENABLED, $passiveChecksEnabled, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByCheckPeriod($checkPeriod = null, $comparison = null)
	{
		if (is_array($checkPeriod)) {
			$useMinMax = false;
			if (isset($checkPeriod['min'])) {
				$this->addUsingAlias(NagiosServicePeer::CHECK_PERIOD, $checkPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($checkPeriod['max'])) {
				$this->addUsingAlias(NagiosServicePeer::CHECK_PERIOD, $checkPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::CHECK_PERIOD, $checkPeriod, $comparison);
	}

	/**
	 * Filter the query on the parallelize_check column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByParallelizeCheck(true); // WHERE parallelize_check = true
	 * $query->filterByParallelizeCheck('yes'); // WHERE parallelize_check = true
	 * </code>
	 *
	 * @param     boolean|string $parallelizeCheck The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByParallelizeCheck($parallelizeCheck = null, $comparison = null)
	{
		if (is_string($parallelizeCheck)) {
			$parallelize_check = in_array(strtolower($parallelizeCheck), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::PARALLELIZE_CHECK, $parallelizeCheck, $comparison);
	}

	/**
	 * Filter the query on the obsess_over_service column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByObsessOverService(true); // WHERE obsess_over_service = true
	 * $query->filterByObsessOverService('yes'); // WHERE obsess_over_service = true
	 * </code>
	 *
	 * @param     boolean|string $obsessOverService The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByObsessOverService($obsessOverService = null, $comparison = null)
	{
		if (is_string($obsessOverService)) {
			$obsess_over_service = in_array(strtolower($obsessOverService), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::OBSESS_OVER_SERVICE, $obsessOverService, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByCheckFreshness($checkFreshness = null, $comparison = null)
	{
		if (is_string($checkFreshness)) {
			$check_freshness = in_array(strtolower($checkFreshness), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::CHECK_FRESHNESS, $checkFreshness, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFreshnessThreshold($freshnessThreshold = null, $comparison = null)
	{
		if (is_array($freshnessThreshold)) {
			$useMinMax = false;
			if (isset($freshnessThreshold['min'])) {
				$this->addUsingAlias(NagiosServicePeer::FRESHNESS_THRESHOLD, $freshnessThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($freshnessThreshold['max'])) {
				$this->addUsingAlias(NagiosServicePeer::FRESHNESS_THRESHOLD, $freshnessThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::FRESHNESS_THRESHOLD, $freshnessThreshold, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByEventHandler($eventHandler = null, $comparison = null)
	{
		if (is_array($eventHandler)) {
			$useMinMax = false;
			if (isset($eventHandler['min'])) {
				$this->addUsingAlias(NagiosServicePeer::EVENT_HANDLER, $eventHandler['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($eventHandler['max'])) {
				$this->addUsingAlias(NagiosServicePeer::EVENT_HANDLER, $eventHandler['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::EVENT_HANDLER, $eventHandler, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByEventHandlerEnabled($eventHandlerEnabled = null, $comparison = null)
	{
		if (is_string($eventHandlerEnabled)) {
			$event_handler_enabled = in_array(strtolower($eventHandlerEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::EVENT_HANDLER_ENABLED, $eventHandlerEnabled, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByLowFlapThreshold($lowFlapThreshold = null, $comparison = null)
	{
		if (is_array($lowFlapThreshold)) {
			$useMinMax = false;
			if (isset($lowFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosServicePeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($lowFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosServicePeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::LOW_FLAP_THRESHOLD, $lowFlapThreshold, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByHighFlapThreshold($highFlapThreshold = null, $comparison = null)
	{
		if (is_array($highFlapThreshold)) {
			$useMinMax = false;
			if (isset($highFlapThreshold['min'])) {
				$this->addUsingAlias(NagiosServicePeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($highFlapThreshold['max'])) {
				$this->addUsingAlias(NagiosServicePeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::HIGH_FLAP_THRESHOLD, $highFlapThreshold, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionEnabled($flapDetectionEnabled = null, $comparison = null)
	{
		if (is_string($flapDetectionEnabled)) {
			$flap_detection_enabled = in_array(strtolower($flapDetectionEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FLAP_DETECTION_ENABLED, $flapDetectionEnabled, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_ok column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnOk(true); // WHERE flap_detection_on_ok = true
	 * $query->filterByFlapDetectionOnOk('yes'); // WHERE flap_detection_on_ok = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnOk The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnOk($flapDetectionOnOk = null, $comparison = null)
	{
		if (is_string($flapDetectionOnOk)) {
			$flap_detection_on_ok = in_array(strtolower($flapDetectionOnOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FLAP_DETECTION_ON_OK, $flapDetectionOnOk, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnWarning(true); // WHERE flap_detection_on_warning = true
	 * $query->filterByFlapDetectionOnWarning('yes'); // WHERE flap_detection_on_warning = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnWarning($flapDetectionOnWarning = null, $comparison = null)
	{
		if (is_string($flapDetectionOnWarning)) {
			$flap_detection_on_warning = in_array(strtolower($flapDetectionOnWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FLAP_DETECTION_ON_WARNING, $flapDetectionOnWarning, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnCritical(true); // WHERE flap_detection_on_critical = true
	 * $query->filterByFlapDetectionOnCritical('yes'); // WHERE flap_detection_on_critical = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnCritical($flapDetectionOnCritical = null, $comparison = null)
	{
		if (is_string($flapDetectionOnCritical)) {
			$flap_detection_on_critical = in_array(strtolower($flapDetectionOnCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FLAP_DETECTION_ON_CRITICAL, $flapDetectionOnCritical, $comparison);
	}

	/**
	 * Filter the query on the flap_detection_on_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByFlapDetectionOnUnknown(true); // WHERE flap_detection_on_unknown = true
	 * $query->filterByFlapDetectionOnUnknown('yes'); // WHERE flap_detection_on_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $flapDetectionOnUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFlapDetectionOnUnknown($flapDetectionOnUnknown = null, $comparison = null)
	{
		if (is_string($flapDetectionOnUnknown)) {
			$flap_detection_on_unknown = in_array(strtolower($flapDetectionOnUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FLAP_DETECTION_ON_UNKNOWN, $flapDetectionOnUnknown, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByProcessPerfData($processPerfData = null, $comparison = null)
	{
		if (is_string($processPerfData)) {
			$process_perf_data = in_array(strtolower($processPerfData), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::PROCESS_PERF_DATA, $processPerfData, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByRetainStatusInformation($retainStatusInformation = null, $comparison = null)
	{
		if (is_string($retainStatusInformation)) {
			$retain_status_information = in_array(strtolower($retainStatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::RETAIN_STATUS_INFORMATION, $retainStatusInformation, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByRetainNonstatusInformation($retainNonstatusInformation = null, $comparison = null)
	{
		if (is_string($retainNonstatusInformation)) {
			$retain_nonstatus_information = in_array(strtolower($retainNonstatusInformation), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::RETAIN_NONSTATUS_INFORMATION, $retainNonstatusInformation, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationInterval($notificationInterval = null, $comparison = null)
	{
		if (is_array($notificationInterval)) {
			$useMinMax = false;
			if (isset($notificationInterval['min'])) {
				$this->addUsingAlias(NagiosServicePeer::NOTIFICATION_INTERVAL, $notificationInterval['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationInterval['max'])) {
				$this->addUsingAlias(NagiosServicePeer::NOTIFICATION_INTERVAL, $notificationInterval['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_INTERVAL, $notificationInterval, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationPeriod($notificationPeriod = null, $comparison = null)
	{
		if (is_array($notificationPeriod)) {
			$useMinMax = false;
			if (isset($notificationPeriod['min'])) {
				$this->addUsingAlias(NagiosServicePeer::NOTIFICATION_PERIOD, $notificationPeriod['min'], Criteria::GREATER_EQUAL);
				$useMinMax = true;
			}
			if (isset($notificationPeriod['max'])) {
				$this->addUsingAlias(NagiosServicePeer::NOTIFICATION_PERIOD, $notificationPeriod['max'], Criteria::LESS_EQUAL);
				$useMinMax = true;
			}
			if ($useMinMax) {
				return $this;
			}
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_PERIOD, $notificationPeriod, $comparison);
	}

	/**
	 * Filter the query on the notification_on_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnWarning(true); // WHERE notification_on_warning = true
	 * $query->filterByNotificationOnWarning('yes'); // WHERE notification_on_warning = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnWarning($notificationOnWarning = null, $comparison = null)
	{
		if (is_string($notificationOnWarning)) {
			$notification_on_warning = in_array(strtolower($notificationOnWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_WARNING, $notificationOnWarning, $comparison);
	}

	/**
	 * Filter the query on the notification_on_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnUnknown(true); // WHERE notification_on_unknown = true
	 * $query->filterByNotificationOnUnknown('yes'); // WHERE notification_on_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnUnknown($notificationOnUnknown = null, $comparison = null)
	{
		if (is_string($notificationOnUnknown)) {
			$notification_on_unknown = in_array(strtolower($notificationOnUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_UNKNOWN, $notificationOnUnknown, $comparison);
	}

	/**
	 * Filter the query on the notification_on_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByNotificationOnCritical(true); // WHERE notification_on_critical = true
	 * $query->filterByNotificationOnCritical('yes'); // WHERE notification_on_critical = true
	 * </code>
	 *
	 * @param     boolean|string $notificationOnCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnCritical($notificationOnCritical = null, $comparison = null)
	{
		if (is_string($notificationOnCritical)) {
			$notification_on_critical = in_array(strtolower($notificationOnCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_CRITICAL, $notificationOnCritical, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnRecovery($notificationOnRecovery = null, $comparison = null)
	{
		if (is_string($notificationOnRecovery)) {
			$notification_on_recovery = in_array(strtolower($notificationOnRecovery), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_RECOVERY, $notificationOnRecovery, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnFlapping($notificationOnFlapping = null, $comparison = null)
	{
		if (is_string($notificationOnFlapping)) {
			$notification_on_flapping = in_array(strtolower($notificationOnFlapping), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_FLAPPING, $notificationOnFlapping, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationOnScheduledDowntime($notificationOnScheduledDowntime = null, $comparison = null)
	{
		if (is_string($notificationOnScheduledDowntime)) {
			$notification_on_scheduled_downtime = in_array(strtolower($notificationOnScheduledDowntime), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATION_ON_SCHEDULED_DOWNTIME, $notificationOnScheduledDowntime, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNotificationsEnabled($notificationsEnabled = null, $comparison = null)
	{
		if (is_string($notificationsEnabled)) {
			$notifications_enabled = in_array(strtolower($notificationsEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::NOTIFICATIONS_ENABLED, $notificationsEnabled, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_ok column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnOk(true); // WHERE stalking_on_ok = true
	 * $query->filterByStalkingOnOk('yes'); // WHERE stalking_on_ok = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnOk The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnOk($stalkingOnOk = null, $comparison = null)
	{
		if (is_string($stalkingOnOk)) {
			$stalking_on_ok = in_array(strtolower($stalkingOnOk), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::STALKING_ON_OK, $stalkingOnOk, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_warning column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnWarning(true); // WHERE stalking_on_warning = true
	 * $query->filterByStalkingOnWarning('yes'); // WHERE stalking_on_warning = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnWarning The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnWarning($stalkingOnWarning = null, $comparison = null)
	{
		if (is_string($stalkingOnWarning)) {
			$stalking_on_warning = in_array(strtolower($stalkingOnWarning), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::STALKING_ON_WARNING, $stalkingOnWarning, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_unknown column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnUnknown(true); // WHERE stalking_on_unknown = true
	 * $query->filterByStalkingOnUnknown('yes'); // WHERE stalking_on_unknown = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnUnknown The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnUnknown($stalkingOnUnknown = null, $comparison = null)
	{
		if (is_string($stalkingOnUnknown)) {
			$stalking_on_unknown = in_array(strtolower($stalkingOnUnknown), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::STALKING_ON_UNKNOWN, $stalkingOnUnknown, $comparison);
	}

	/**
	 * Filter the query on the stalking_on_critical column
	 * 
	 * Example usage:
	 * <code>
	 * $query->filterByStalkingOnCritical(true); // WHERE stalking_on_critical = true
	 * $query->filterByStalkingOnCritical('yes'); // WHERE stalking_on_critical = true
	 * </code>
	 *
	 * @param     boolean|string $stalkingOnCritical The value to use as filter.
	 *              Non-boolean arguments are converted using the following rules:
	 *                * 1, '1', 'true',  'on',  and 'yes' are converted to boolean true
	 *                * 0, '0', 'false', 'off', and 'no'  are converted to boolean false
	 *              Check on string values is case insensitive (so 'FaLsE' is seen as 'false').
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByStalkingOnCritical($stalkingOnCritical = null, $comparison = null)
	{
		if (is_string($stalkingOnCritical)) {
			$stalking_on_critical = in_array(strtolower($stalkingOnCritical), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::STALKING_ON_CRITICAL, $stalkingOnCritical, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByFailurePredictionEnabled($failurePredictionEnabled = null, $comparison = null)
	{
		if (is_string($failurePredictionEnabled)) {
			$failure_prediction_enabled = in_array(strtolower($failurePredictionEnabled), array('false', 'off', '-', 'no', 'n', '0', '')) ? false : true;
		}
		return $this->addUsingAlias(NagiosServicePeer::FAILURE_PREDICTION_ENABLED, $failurePredictionEnabled, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::NOTES, $notes, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::NOTES_URL, $notesUrl, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::ACTION_URL, $actionUrl, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::ICON_IMAGE, $iconImage, $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
		return $this->addUsingAlias(NagiosServicePeer::ICON_IMAGE_ALT, $iconImageAlt, $comparison);
	}

	/**
	 * Filter the query by a related NagiosHost object
	 *
	 * @param     NagiosHost|PropelCollection $nagiosHost The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHost($nagiosHost, $comparison = null)
	{
		if ($nagiosHost instanceof NagiosHost) {
			return $this
				->addUsingAlias(NagiosServicePeer::HOST, $nagiosHost->getId(), $comparison);
		} elseif ($nagiosHost instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::HOST, $nagiosHost->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHost() only accepts arguments of type NagiosHost or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHost relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosHost($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHost');
		
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
			$this->addJoinObject($join, 'NagiosHost');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHost relation NagiosHost object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHost($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHost', 'NagiosHostQuery');
	}

	/**
	 * Filter the query by a related NagiosHostTemplate object
	 *
	 * @param     NagiosHostTemplate|PropelCollection $nagiosHostTemplate The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostTemplate($nagiosHostTemplate, $comparison = null)
	{
		if ($nagiosHostTemplate instanceof NagiosHostTemplate) {
			return $this
				->addUsingAlias(NagiosServicePeer::HOST_TEMPLATE, $nagiosHostTemplate->getId(), $comparison);
		} elseif ($nagiosHostTemplate instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::HOST_TEMPLATE, $nagiosHostTemplate->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostTemplate() only accepts arguments of type NagiosHostTemplate or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostTemplate relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosHostTemplate($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostTemplate');
		
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
			$this->addJoinObject($join, 'NagiosHostTemplate');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostTemplate relation NagiosHostTemplate object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostTemplateQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostTemplateQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostTemplate($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostTemplate', 'NagiosHostTemplateQuery');
	}

	/**
	 * Filter the query by a related NagiosHostgroup object
	 *
	 * @param     NagiosHostgroup|PropelCollection $nagiosHostgroup The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosHostgroup($nagiosHostgroup, $comparison = null)
	{
		if ($nagiosHostgroup instanceof NagiosHostgroup) {
			return $this
				->addUsingAlias(NagiosServicePeer::HOSTGROUP, $nagiosHostgroup->getId(), $comparison);
		} elseif ($nagiosHostgroup instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::HOSTGROUP, $nagiosHostgroup->toKeyValue('PrimaryKey', 'Id'), $comparison);
		} else {
			throw new PropelException('filterByNagiosHostgroup() only accepts arguments of type NagiosHostgroup or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosHostgroup relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosHostgroup($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosHostgroup');
		
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
			$this->addJoinObject($join, 'NagiosHostgroup');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosHostgroup relation NagiosHostgroup object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosHostgroupQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosHostgroupQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosHostgroup($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosHostgroup', 'NagiosHostgroupQuery');
	}

	/**
	 * Filter the query by a related NagiosCommand object
	 *
	 * @param     NagiosCommand|PropelCollection $nagiosCommand The related object(s) to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByCheckCommand($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosServicePeer::CHECK_COMMAND, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::CHECK_COMMAND, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosCommandRelatedByEventHandler($nagiosCommand, $comparison = null)
	{
		if ($nagiosCommand instanceof NagiosCommand) {
			return $this
				->addUsingAlias(NagiosServicePeer::EVENT_HANDLER, $nagiosCommand->getId(), $comparison);
		} elseif ($nagiosCommand instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::EVENT_HANDLER, $nagiosCommand->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByCheckPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosServicePeer::CHECK_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::CHECK_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosTimeperiodRelatedByNotificationPeriod($nagiosTimeperiod, $comparison = null)
	{
		if ($nagiosTimeperiod instanceof NagiosTimeperiod) {
			return $this
				->addUsingAlias(NagiosServicePeer::NOTIFICATION_PERIOD, $nagiosTimeperiod->getId(), $comparison);
		} elseif ($nagiosTimeperiod instanceof PropelCollection) {
			if (null === $comparison) {
				$comparison = Criteria::IN;
			}
			return $this
				->addUsingAlias(NagiosServicePeer::NOTIFICATION_PERIOD, $nagiosTimeperiod->toKeyValue('PrimaryKey', 'Id'), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosServiceCheckCommandParameter object
	 *
	 * @param     NagiosServiceCheckCommandParameter $nagiosServiceCheckCommandParameter  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceCheckCommandParameter($nagiosServiceCheckCommandParameter, $comparison = null)
	{
		if ($nagiosServiceCheckCommandParameter instanceof NagiosServiceCheckCommandParameter) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceCheckCommandParameter->getService(), $comparison);
		} elseif ($nagiosServiceCheckCommandParameter instanceof PropelCollection) {
			return $this
				->useNagiosServiceCheckCommandParameterQuery()
					->filterByPrimaryKeys($nagiosServiceCheckCommandParameter->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceCheckCommandParameter() only accepts arguments of type NagiosServiceCheckCommandParameter or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceCheckCommandParameter relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceCheckCommandParameter($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceCheckCommandParameter');
		
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
			$this->addJoinObject($join, 'NagiosServiceCheckCommandParameter');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceCheckCommandParameter relation NagiosServiceCheckCommandParameter object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceCheckCommandParameterQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceCheckCommandParameterQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceCheckCommandParameter($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceCheckCommandParameter', 'NagiosServiceCheckCommandParameterQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceGroupMember object
	 *
	 * @param     NagiosServiceGroupMember $nagiosServiceGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceGroupMember($nagiosServiceGroupMember, $comparison = null)
	{
		if ($nagiosServiceGroupMember instanceof NagiosServiceGroupMember) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceGroupMember->getService(), $comparison);
		} elseif ($nagiosServiceGroupMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceGroupMemberQuery()
					->filterByPrimaryKeys($nagiosServiceGroupMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceGroupMember() only accepts arguments of type NagiosServiceGroupMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceGroupMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceGroupMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceGroupMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceGroupMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceGroupMember relation NagiosServiceGroupMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceGroupMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceGroupMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceGroupMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceGroupMember', 'NagiosServiceGroupMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceContactMember object
	 *
	 * @param     NagiosServiceContactMember $nagiosServiceContactMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceContactMember($nagiosServiceContactMember, $comparison = null)
	{
		if ($nagiosServiceContactMember instanceof NagiosServiceContactMember) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceContactMember->getService(), $comparison);
		} elseif ($nagiosServiceContactMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceContactMemberQuery()
					->filterByPrimaryKeys($nagiosServiceContactMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceContactMember() only accepts arguments of type NagiosServiceContactMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceContactMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceContactMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceContactMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceContactMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceContactMember relation NagiosServiceContactMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceContactMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceContactMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceContactMember', 'NagiosServiceContactMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceContactGroupMember object
	 *
	 * @param     NagiosServiceContactGroupMember $nagiosServiceContactGroupMember  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceContactGroupMember($nagiosServiceContactGroupMember, $comparison = null)
	{
		if ($nagiosServiceContactGroupMember instanceof NagiosServiceContactGroupMember) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceContactGroupMember->getService(), $comparison);
		} elseif ($nagiosServiceContactGroupMember instanceof PropelCollection) {
			return $this
				->useNagiosServiceContactGroupMemberQuery()
					->filterByPrimaryKeys($nagiosServiceContactGroupMember->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceContactGroupMember() only accepts arguments of type NagiosServiceContactGroupMember or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceContactGroupMember relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceContactGroupMember($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceContactGroupMember');
		
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
			$this->addJoinObject($join, 'NagiosServiceContactGroupMember');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceContactGroupMember relation NagiosServiceContactGroupMember object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceContactGroupMemberQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceContactGroupMemberQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceContactGroupMember($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceContactGroupMember', 'NagiosServiceContactGroupMemberQuery');
	}

	/**
	 * Filter the query by a related NagiosDependency object
	 *
	 * @param     NagiosDependency $nagiosDependency  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependency($nagiosDependency, $comparison = null)
	{
		if ($nagiosDependency instanceof NagiosDependency) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosDependency->getService(), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosDependencyTarget($nagiosDependencyTarget, $comparison = null)
	{
		if ($nagiosDependencyTarget instanceof NagiosDependencyTarget) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosDependencyTarget->getTargetService(), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosEscalation($nagiosEscalation, $comparison = null)
	{
		if ($nagiosEscalation instanceof NagiosEscalation) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosEscalation->getService(), $comparison);
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
	 * @return    NagiosServiceQuery The current query, for fluid interface
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
	 * Filter the query by a related NagiosServiceTemplateInheritance object
	 *
	 * @param     NagiosServiceTemplateInheritance $nagiosServiceTemplateInheritance  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceTemplateInheritance($nagiosServiceTemplateInheritance, $comparison = null)
	{
		if ($nagiosServiceTemplateInheritance instanceof NagiosServiceTemplateInheritance) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceTemplateInheritance->getSourceService(), $comparison);
		} elseif ($nagiosServiceTemplateInheritance instanceof PropelCollection) {
			return $this
				->useNagiosServiceTemplateInheritanceQuery()
					->filterByPrimaryKeys($nagiosServiceTemplateInheritance->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceTemplateInheritance() only accepts arguments of type NagiosServiceTemplateInheritance or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceTemplateInheritance relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceTemplateInheritance($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceTemplateInheritance');
		
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
			$this->addJoinObject($join, 'NagiosServiceTemplateInheritance');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceTemplateInheritance relation NagiosServiceTemplateInheritance object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceTemplateInheritanceQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceTemplateInheritanceQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceTemplateInheritance($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceTemplateInheritance', 'NagiosServiceTemplateInheritanceQuery');
	}

	/**
	 * Filter the query by a related NagiosServiceCustomObjectVar object
	 *
	 * @param     NagiosServiceCustomObjectVar $nagiosServiceCustomObjectVar  the related object to use as filter
	 * @param     string $comparison Operator to use for the column comparison, defaults to Criteria::EQUAL
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function filterByNagiosServiceCustomObjectVar($nagiosServiceCustomObjectVar, $comparison = null)
	{
		if ($nagiosServiceCustomObjectVar instanceof NagiosServiceCustomObjectVar) {
			return $this
				->addUsingAlias(NagiosServicePeer::ID, $nagiosServiceCustomObjectVar->getService(), $comparison);
		} elseif ($nagiosServiceCustomObjectVar instanceof PropelCollection) {
			return $this
				->useNagiosServiceCustomObjectVarQuery()
					->filterByPrimaryKeys($nagiosServiceCustomObjectVar->getPrimaryKeys())
				->endUse();
		} else {
			throw new PropelException('filterByNagiosServiceCustomObjectVar() only accepts arguments of type NagiosServiceCustomObjectVar or PropelCollection');
		}
	}

	/**
	 * Adds a JOIN clause to the query using the NagiosServiceCustomObjectVar relation
	 * 
	 * @param     string $relationAlias optional alias for the relation
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function joinNagiosServiceCustomObjectVar($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		$tableMap = $this->getTableMap();
		$relationMap = $tableMap->getRelation('NagiosServiceCustomObjectVar');
		
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
			$this->addJoinObject($join, 'NagiosServiceCustomObjectVar');
		}
		
		return $this;
	}

	/**
	 * Use the NagiosServiceCustomObjectVar relation NagiosServiceCustomObjectVar object
	 *
	 * @see       useQuery()
	 * 
	 * @param     string $relationAlias optional alias for the relation,
	 *                                   to be used as main alias in the secondary query
	 * @param     string $joinType Accepted values are null, 'left join', 'right join', 'inner join'
	 *
	 * @return    NagiosServiceCustomObjectVarQuery A secondary query class using the current class as primary query
	 */
	public function useNagiosServiceCustomObjectVarQuery($relationAlias = null, $joinType = Criteria::LEFT_JOIN)
	{
		return $this
			->joinNagiosServiceCustomObjectVar($relationAlias, $joinType)
			->useQuery($relationAlias ? $relationAlias : 'NagiosServiceCustomObjectVar', 'NagiosServiceCustomObjectVarQuery');
	}

	/**
	 * Exclude object from result
	 *
	 * @param     NagiosService $nagiosService Object to remove from the list of results
	 *
	 * @return    NagiosServiceQuery The current query, for fluid interface
	 */
	public function prune($nagiosService = null)
	{
		if ($nagiosService) {
			$this->addUsingAlias(NagiosServicePeer::ID, $nagiosService->getId(), Criteria::NOT_EQUAL);
	  }
	  
		return $this;
	}

} // BaseNagiosServiceQuery
