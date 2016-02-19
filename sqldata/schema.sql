
# This is a fix for InnoDB in MySQL >= 4.1.x
# It "suspends judgement" for fkey relationships until are tables are set.
SET FOREIGN_KEY_CHECKS = 0;

#-----------------------------------------------------------------------------
#-- lilac_configuration
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `lilac_configuration`;


CREATE TABLE `lilac_configuration`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`version` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Lilac Configuration';

#-----------------------------------------------------------------------------
#-- import_job
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `import_job`;


CREATE TABLE `import_job`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(255)  NOT NULL,
	`config` TEXT  NOT NULL,
	`start_time` DATETIME,
	`end_time` DATETIME,
	`status` VARCHAR(255),
	`status_code` INTEGER  NOT NULL,
	`status_change_time` DATETIME,
	`stats` TEXT  NOT NULL,
	`cmd` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Import Job Information';

#-----------------------------------------------------------------------------
#-- export_job
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `export_job`;


CREATE TABLE `export_job`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(255)  NOT NULL,
	`config` TEXT  NOT NULL,
	`start_time` DATETIME,
	`end_time` DATETIME,
	`status` VARCHAR(255),
	`status_code` INTEGER  NOT NULL,
	`status_change_time` DATETIME,
	`stats` TEXT  NOT NULL,
	`cmd` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Export Job Information';

#-----------------------------------------------------------------------------
#-- export_log_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `export_log_entry`;


CREATE TABLE `export_log_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`job` INTEGER,
	`time` DATETIME  NOT NULL,
	`text` TEXT  NOT NULL,
	`type` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `export_log_entry_FI_1` (`job`),
	CONSTRAINT `export_log_entry_FK_1`
		FOREIGN KEY (`job`)
		REFERENCES `export_job` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Export Job Entry';

#-----------------------------------------------------------------------------
#-- import_log_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `import_log_entry`;


CREATE TABLE `import_log_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`job` INTEGER,
	`time` DATETIME  NOT NULL,
	`text` TEXT  NOT NULL,
	`type` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `import_log_entry_FI_1` (`job`),
	CONSTRAINT `import_log_entry_FK_1`
		FOREIGN KEY (`job`)
		REFERENCES `import_job` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Import Job Entry';

#-----------------------------------------------------------------------------
#-- label
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `label`;


CREATE TABLE `label`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`section` VARCHAR(255),
	`name` VARCHAR(255),
	`label` TEXT,
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Language based labels';

#-----------------------------------------------------------------------------
#-- nagios_broker_module
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_broker_module`;


CREATE TABLE `nagios_broker_module`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`line` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Event Broker Modules';

#-----------------------------------------------------------------------------
#-- nagios_cgi_configuration
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_cgi_configuration`;


CREATE TABLE `nagios_cgi_configuration`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`physical_html_path` VARCHAR(255),
	`url_html_path` VARCHAR(255),
	`use_authentication` TINYINT,
	`default_user_name` VARCHAR(255),
	`authorized_for_system_information` VARCHAR(255),
	`authorized_for_system_commands` VARCHAR(255),
	`authorized_for_configuration_information` VARCHAR(255),
	`authorized_for_all_hosts` VARCHAR(255),
	`authorized_for_all_host_commands` VARCHAR(255),
	`authorized_for_all_services` VARCHAR(255),
	`authorized_for_all_service_commands` VARCHAR(255),
	`lock_author_names` TINYINT,
	`statusmap_background_image` VARCHAR(255),
	`default_statusmap_layout` TINYINT,
	`statuswrl_include` VARCHAR(255),
	`default_statuswrl_layout` TINYINT,
	`refresh_rate` INTEGER,
	`host_unreachable_sound` VARCHAR(255),
	`host_down_sound` VARCHAR(255),
	`service_critical_sound` VARCHAR(255),
	`service_warning_sound` VARCHAR(255),
	`service_unknown_sound` VARCHAR(255),
	`ping_syntax` VARCHAR(255),
	`escape_html_tags` TINYINT,
	`notes_url_target` VARCHAR(255),
	`action_url_target` VARCHAR(255),
	`enable_splunk_integration` TINYINT,
	`splunk_url` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='CGI Configuration';

#-----------------------------------------------------------------------------
#-- nagios_command
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_command`;


CREATE TABLE `nagios_command`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`line` TEXT  NOT NULL,
	`description` TEXT(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios Command';

#-----------------------------------------------------------------------------
#-- nagios_timeperiod
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_timeperiod`;


CREATE TABLE `nagios_timeperiod`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios Timeperiods';

#-----------------------------------------------------------------------------
#-- nagios_timeperiod_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_timeperiod_entry`;


CREATE TABLE `nagios_timeperiod_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`timeperiod_id` INTEGER,
	`entry` VARCHAR(255)  NOT NULL,
	`value` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_timeperiod_entry_FI_1` (`timeperiod_id`),
	CONSTRAINT `nagios_timeperiod_entry_FK_1`
		FOREIGN KEY (`timeperiod_id`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Time Period Entries';

#-----------------------------------------------------------------------------
#-- nagios_timeperiod_exclude
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_timeperiod_exclude`;


CREATE TABLE `nagios_timeperiod_exclude`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`timeperiod_id` INTEGER,
	`excluded_timeperiod` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_timeperiod_exclude_FI_1` (`timeperiod_id`),
	CONSTRAINT `nagios_timeperiod_exclude_FK_1`
		FOREIGN KEY (`timeperiod_id`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_timeperiod_exclude_FI_2` (`excluded_timeperiod`),
	CONSTRAINT `nagios_timeperiod_exclude_FK_2`
		FOREIGN KEY (`excluded_timeperiod`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Time Period Excludes';

#-----------------------------------------------------------------------------
#-- nagios_contact
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_contact`;


CREATE TABLE `nagios_contact`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	`email` VARCHAR(255),
	`pager` VARCHAR(255),
	`host_notifications_enabled` TINYINT  NOT NULL,
	`service_notifications_enabled` TINYINT  NOT NULL,
	`host_notification_period` INTEGER,
	`service_notification_period` INTEGER,
	`host_notification_on_down` TINYINT  NOT NULL,
	`host_notification_on_unreachable` TINYINT  NOT NULL,
	`host_notification_on_recovery` TINYINT  NOT NULL,
	`host_notification_on_flapping` TINYINT  NOT NULL,
	`host_notification_on_scheduled_downtime` TINYINT  NOT NULL,
	`service_notification_on_warning` TINYINT  NOT NULL,
	`service_notification_on_unknown` TINYINT  NOT NULL,
	`service_notification_on_critical` TINYINT  NOT NULL,
	`service_notification_on_recovery` TINYINT  NOT NULL,
	`service_notification_on_flapping` TINYINT  NOT NULL,
	`can_submit_commands` TINYINT  NOT NULL,
	`retain_status_information` TINYINT  NOT NULL,
	`retain_nonstatus_information` TINYINT  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_contact_FI_1` (`host_notification_period`),
	CONSTRAINT `nagios_contact_FK_1`
		FOREIGN KEY (`host_notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_contact_FI_2` (`service_notification_period`),
	CONSTRAINT `nagios_contact_FK_2`
		FOREIGN KEY (`service_notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Contact';

#-----------------------------------------------------------------------------
#-- nagios_contact_address
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_contact_address`;


CREATE TABLE `nagios_contact_address`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`contact` INTEGER  NOT NULL,
	`address` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_contact_address_FI_1` (`contact`),
	CONSTRAINT `nagios_contact_address_FK_1`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios Contact Address';

#-----------------------------------------------------------------------------
#-- nagios_contact_group
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_contact_group`;


CREATE TABLE `nagios_contact_group`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios Contact Group';

#-----------------------------------------------------------------------------
#-- nagios_contact_group_member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_contact_group_member`;


CREATE TABLE `nagios_contact_group_member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`contact` INTEGER  NOT NULL,
	`contactgroup` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_contact_group_member_FI_1` (`contact`),
	CONSTRAINT `nagios_contact_group_member_FK_1`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_contact_group_member_FI_2` (`contactgroup`),
	CONSTRAINT `nagios_contact_group_member_FK_2`
		FOREIGN KEY (`contactgroup`)
		REFERENCES `nagios_contact_group` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Member of a Nagios Contact Group';

#-----------------------------------------------------------------------------
#-- nagios_contact_notification_command
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_contact_notification_command`;


CREATE TABLE `nagios_contact_notification_command`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`contact_id` INTEGER  NOT NULL,
	`command` INTEGER  NOT NULL,
	`type` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_contact_notification_command_FI_1` (`contact_id`),
	CONSTRAINT `nagios_contact_notification_command_FK_1`
		FOREIGN KEY (`contact_id`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_contact_notification_command_FI_2` (`command`),
	CONSTRAINT `nagios_contact_notification_command_FK_2`
		FOREIGN KEY (`command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Notification Command for a Nagios Contact';

#-----------------------------------------------------------------------------
#-- nagios_host_template
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_template`;


CREATE TABLE `nagios_host_template`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(255),
	`initial_state` VARCHAR(1),
	`check_command` INTEGER,
	`retry_interval` INTEGER,
	`first_notification_delay` INTEGER,
	`maximum_check_attempts` INTEGER,
	`check_interval` INTEGER,
	`passive_checks_enabled` TINYINT,
	`check_period` INTEGER,
	`obsess_over_host` TINYINT,
	`check_freshness` TINYINT,
	`freshness_threshold` INTEGER,
	`active_checks_enabled` TINYINT,
	`checks_enabled` TINYINT,
	`event_handler` INTEGER,
	`event_handler_enabled` TINYINT,
	`low_flap_threshold` INTEGER,
	`high_flap_threshold` INTEGER,
	`flap_detection_enabled` TINYINT,
	`process_perf_data` TINYINT,
	`retain_status_information` TINYINT,
	`retain_nonstatus_information` TINYINT,
	`notification_interval` INTEGER,
	`notification_period` INTEGER,
	`notifications_enabled` TINYINT,
	`notification_on_down` TINYINT,
	`notification_on_unreachable` TINYINT,
	`notification_on_recovery` TINYINT,
	`notification_on_flapping` TINYINT,
	`notification_on_scheduled_downtime` TINYINT,
	`stalking_on_up` TINYINT,
	`stalking_on_down` TINYINT,
	`stalking_on_unreachable` TINYINT,
	`failure_prediction_enabled` TINYINT,
	`flap_detection_on_up` TINYINT,
	`flap_detection_on_down` TINYINT,
	`flap_detection_on_unreachable` TINYINT,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	`icon_image` VARCHAR(255),
	`icon_image_alt` VARCHAR(255),
	`vrml_image` VARCHAR(255),
	`statusmap_image` VARCHAR(255),
	`two_d_coords` VARCHAR(255),
	`three_d_coords` VARCHAR(255),
	`autodiscovery_address_filter` VARCHAR(255),
	`autodiscovery_hostname_filter` VARCHAR(255),
	`autodiscovery_os_family_filter` VARCHAR(255),
	`autodiscovery_os_generation_filter` VARCHAR(255),
	`autodiscovery_os_vendor_filter` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_host_template_FI_1` (`check_command`),
	CONSTRAINT `nagios_host_template_FK_1`
		FOREIGN KEY (`check_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_template_FI_2` (`event_handler`),
	CONSTRAINT `nagios_host_template_FK_2`
		FOREIGN KEY (`event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_template_FI_3` (`check_period`),
	CONSTRAINT `nagios_host_template_FK_3`
		FOREIGN KEY (`check_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_template_FI_4` (`notification_period`),
	CONSTRAINT `nagios_host_template_FK_4`
		FOREIGN KEY (`notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Host Template';

#-----------------------------------------------------------------------------
#-- nagios_host_template_autodiscovery_service
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_template_autodiscovery_service`;


CREATE TABLE `nagios_host_template_autodiscovery_service`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host_template` INTEGER,
	`name` VARCHAR(255),
	`protocol` VARCHAR(255),
	`port` VARCHAR(255),
	`product` VARCHAR(255),
	`version` VARCHAR(255),
	`extra_information` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_host_template_autodiscovery_service_FI_1` (`host_template`),
	CONSTRAINT `nagios_host_template_autodiscovery_service_FK_1`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB;

#-----------------------------------------------------------------------------
#-- nagios_host
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host`;


CREATE TABLE `nagios_host`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	`display_name` VARCHAR(255)  NOT NULL,
	`initial_state` VARCHAR(1),
	`address` VARCHAR(255)  NOT NULL,
	`check_command` INTEGER,
	`retry_interval` INTEGER,
	`first_notification_delay` INTEGER,
	`maximum_check_attempts` INTEGER,
	`check_interval` INTEGER,
	`passive_checks_enabled` TINYINT,
	`check_period` INTEGER,
	`obsess_over_host` TINYINT,
	`check_freshness` TINYINT,
	`freshness_threshold` INTEGER,
	`active_checks_enabled` TINYINT,
	`checks_enabled` TINYINT,
	`event_handler` INTEGER,
	`event_handler_enabled` TINYINT,
	`low_flap_threshold` INTEGER,
	`high_flap_threshold` INTEGER,
	`flap_detection_enabled` TINYINT,
	`process_perf_data` TINYINT,
	`retain_status_information` TINYINT,
	`retain_nonstatus_information` TINYINT,
	`notification_interval` INTEGER,
	`notification_period` INTEGER,
	`notifications_enabled` TINYINT,
	`notification_on_down` TINYINT,
	`notification_on_unreachable` TINYINT,
	`notification_on_recovery` TINYINT,
	`notification_on_flapping` TINYINT,
	`notification_on_scheduled_downtime` TINYINT,
	`stalking_on_up` TINYINT,
	`stalking_on_down` TINYINT,
	`stalking_on_unreachable` TINYINT,
	`failure_prediction_enabled` TINYINT,
	`flap_detection_on_up` TINYINT,
	`flap_detection_on_down` TINYINT,
	`flap_detection_on_unreachable` TINYINT,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	`icon_image` VARCHAR(255),
	`icon_image_alt` VARCHAR(255),
	`vrml_image` VARCHAR(255),
	`statusmap_image` VARCHAR(255),
	`two_d_coords` VARCHAR(255),
	`three_d_coords` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_host_FI_1` (`check_command`),
	CONSTRAINT `nagios_host_FK_1`
		FOREIGN KEY (`check_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_FI_2` (`event_handler`),
	CONSTRAINT `nagios_host_FK_2`
		FOREIGN KEY (`event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_FI_3` (`check_period`),
	CONSTRAINT `nagios_host_FK_3`
		FOREIGN KEY (`check_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_host_FI_4` (`notification_period`),
	CONSTRAINT `nagios_host_FK_4`
		FOREIGN KEY (`notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Host';

#-----------------------------------------------------------------------------
#-- nagios_service_template
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_template`;


CREATE TABLE `nagios_service_template`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(255),
	`initial_state` VARCHAR(1),
	`is_volatile` TINYINT,
	`check_command` INTEGER,
	`maximum_check_attempts` INTEGER,
	`normal_check_interval` INTEGER,
	`retry_interval` INTEGER,
	`first_notification_delay` INTEGER,
	`active_checks_enabled` TINYINT,
	`passive_checks_enabled` TINYINT,
	`check_period` INTEGER,
	`parallelize_check` TINYINT,
	`obsess_over_service` TINYINT,
	`check_freshness` TINYINT,
	`freshness_threshold` INTEGER,
	`event_handler` INTEGER,
	`event_handler_enabled` TINYINT,
	`low_flap_threshold` INTEGER,
	`high_flap_threshold` INTEGER,
	`flap_detection_enabled` TINYINT,
	`flap_detection_on_ok` TINYINT,
	`flap_detection_on_warning` TINYINT,
	`flap_detection_on_critical` TINYINT,
	`flap_detection_on_unknown` TINYINT,
	`process_perf_data` TINYINT,
	`retain_status_information` TINYINT,
	`retain_nonstatus_information` TINYINT,
	`notification_interval` INTEGER,
	`notification_period` INTEGER,
	`notification_on_warning` TINYINT,
	`notification_on_unknown` TINYINT,
	`notification_on_critical` TINYINT,
	`notification_on_recovery` TINYINT,
	`notification_on_flapping` TINYINT,
	`notification_on_scheduled_downtime` TINYINT,
	`notifications_enabled` TINYINT,
	`stalking_on_ok` TINYINT,
	`stalking_on_warning` TINYINT,
	`stalking_on_unknown` TINYINT,
	`stalking_on_critical` TINYINT,
	`failure_prediction_enabled` TINYINT,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	`icon_image` VARCHAR(255),
	`icon_image_alt` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_service_template_FI_1` (`check_command`),
	CONSTRAINT `nagios_service_template_FK_1`
		FOREIGN KEY (`check_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_template_FI_2` (`event_handler`),
	CONSTRAINT `nagios_service_template_FK_2`
		FOREIGN KEY (`event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_template_FI_3` (`check_period`),
	CONSTRAINT `nagios_service_template_FK_3`
		FOREIGN KEY (`check_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_template_FI_4` (`notification_period`),
	CONSTRAINT `nagios_service_template_FK_4`
		FOREIGN KEY (`notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Service Template';

#-----------------------------------------------------------------------------
#-- nagios_service
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service`;


CREATE TABLE `nagios_service`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(255),
	`display_name` VARCHAR(255),
	`host` INTEGER,
	`host_template` INTEGER,
	`hostgroup` INTEGER,
	`initial_state` VARCHAR(1),
	`is_volatile` TINYINT,
	`check_command` INTEGER,
	`maximum_check_attempts` INTEGER,
	`normal_check_interval` INTEGER,
	`retry_interval` INTEGER,
	`first_notification_delay` INTEGER,
	`active_checks_enabled` TINYINT,
	`passive_checks_enabled` TINYINT,
	`check_period` INTEGER,
	`parallelize_check` TINYINT,
	`obsess_over_service` TINYINT,
	`check_freshness` TINYINT,
	`freshness_threshold` INTEGER,
	`event_handler` INTEGER,
	`event_handler_enabled` TINYINT,
	`low_flap_threshold` INTEGER,
	`high_flap_threshold` INTEGER,
	`flap_detection_enabled` TINYINT,
	`flap_detection_on_ok` TINYINT,
	`flap_detection_on_warning` TINYINT,
	`flap_detection_on_critical` TINYINT,
	`flap_detection_on_unknown` TINYINT,
	`process_perf_data` TINYINT,
	`retain_status_information` TINYINT,
	`retain_nonstatus_information` TINYINT,
	`notification_interval` INTEGER,
	`notification_period` INTEGER,
	`notification_on_warning` TINYINT,
	`notification_on_unknown` TINYINT,
	`notification_on_critical` TINYINT,
	`notification_on_recovery` TINYINT,
	`notification_on_flapping` TINYINT,
	`notification_on_scheduled_downtime` TINYINT,
	`notifications_enabled` TINYINT,
	`stalking_on_ok` TINYINT,
	`stalking_on_warning` TINYINT,
	`stalking_on_unknown` TINYINT,
	`stalking_on_critical` TINYINT,
	`failure_prediction_enabled` TINYINT,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	`icon_image` VARCHAR(255),
	`icon_image_alt` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_service_FI_1` (`host`),
	CONSTRAINT `nagios_service_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_FI_2` (`host_template`),
	CONSTRAINT `nagios_service_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_FI_3` (`hostgroup`),
	CONSTRAINT `nagios_service_FK_3`
		FOREIGN KEY (`hostgroup`)
		REFERENCES `nagios_hostgroup` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_FI_4` (`check_command`),
	CONSTRAINT `nagios_service_FK_4`
		FOREIGN KEY (`check_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_FI_5` (`event_handler`),
	CONSTRAINT `nagios_service_FK_5`
		FOREIGN KEY (`event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_FI_6` (`check_period`),
	CONSTRAINT `nagios_service_FK_6`
		FOREIGN KEY (`check_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL,
	INDEX `nagios_service_FI_7` (`notification_period`),
	CONSTRAINT `nagios_service_FK_7`
		FOREIGN KEY (`notification_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Service';

#-----------------------------------------------------------------------------
#-- nagios_service_check_command_parameter
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_check_command_parameter`;


CREATE TABLE `nagios_service_check_command_parameter`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`service` INTEGER,
	`template` INTEGER,
	`parameter` VARCHAR(255),
	PRIMARY KEY (`id`),
	INDEX `nagios_service_check_command_parameter_FI_1` (`service`),
	CONSTRAINT `nagios_service_check_command_parameter_FK_1`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_check_command_parameter_FI_2` (`template`),
	CONSTRAINT `nagios_service_check_command_parameter_FK_2`
		FOREIGN KEY (`template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Parameter for check command for service or service template';

#-----------------------------------------------------------------------------
#-- nagios_service_group
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_group`;


CREATE TABLE `nagios_service_group`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios  Service Group';

#-----------------------------------------------------------------------------
#-- nagios_service_group_member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_group_member`;


CREATE TABLE `nagios_service_group_member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`service` INTEGER,
	`template` INTEGER,
	`service_group` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_service_group_member_FI_1` (`service`),
	CONSTRAINT `nagios_service_group_member_FK_1`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_group_member_FI_2` (`template`),
	CONSTRAINT `nagios_service_group_member_FK_2`
		FOREIGN KEY (`template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_group_member_FI_3` (`service_group`),
	CONSTRAINT `nagios_service_group_member_FK_3`
		FOREIGN KEY (`service_group`)
		REFERENCES `nagios_service_group` (`id`)
		ON DELETE CASCADE
)Type=INNODB;

#-----------------------------------------------------------------------------
#-- nagios_host_contact_member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_contact_member`;


CREATE TABLE `nagios_host_contact_member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host` INTEGER,
	`template` INTEGER,
	`contact` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_host_contact_member_FI_1` (`host`),
	CONSTRAINT `nagios_host_contact_member_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_contact_member_FI_2` (`template`),
	CONSTRAINT `nagios_host_contact_member_FK_2`
		FOREIGN KEY (`template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_contact_member_FI_3` (`contact`),
	CONSTRAINT `nagios_host_contact_member_FK_3`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Contacts which belong to host templates or hosts';

#-----------------------------------------------------------------------------
#-- nagios_service_contact_member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_contact_member`;


CREATE TABLE `nagios_service_contact_member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`service` INTEGER,
	`template` INTEGER,
	`contact` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_service_contact_member_FI_1` (`service`),
	CONSTRAINT `nagios_service_contact_member_FK_1`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_contact_member_FI_2` (`template`),
	CONSTRAINT `nagios_service_contact_member_FK_2`
		FOREIGN KEY (`template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_contact_member_FI_3` (`contact`),
	CONSTRAINT `nagios_service_contact_member_FK_3`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Contacts which belong to service templates or services';

#-----------------------------------------------------------------------------
#-- nagios_service_contact_group_member
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_contact_group_member`;


CREATE TABLE `nagios_service_contact_group_member`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`service` INTEGER,
	`template` INTEGER,
	`contact_group` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_service_contact_group_member_FI_1` (`service`),
	CONSTRAINT `nagios_service_contact_group_member_FK_1`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_contact_group_member_FI_2` (`template`),
	CONSTRAINT `nagios_service_contact_group_member_FK_2`
		FOREIGN KEY (`template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_contact_group_member_FI_3` (`contact_group`),
	CONSTRAINT `nagios_service_contact_group_member_FK_3`
		FOREIGN KEY (`contact_group`)
		REFERENCES `nagios_contact_group` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios  Service Group';

#-----------------------------------------------------------------------------
#-- nagios_dependency
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_dependency`;


CREATE TABLE `nagios_dependency`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host_template` INTEGER,
	`host` INTEGER,
	`service_template` INTEGER,
	`service` INTEGER,
	`hostgroup` INTEGER,
	`name` VARCHAR(255),
	`execution_failure_criteria_up` TINYINT,
	`execution_failure_criteria_down` TINYINT,
	`execution_failure_criteria_unreachable` TINYINT,
	`execution_failure_criteria_pending` TINYINT,
	`execution_failure_criteria_ok` TINYINT,
	`execution_failure_criteria_warning` TINYINT,
	`execution_failure_criteria_unknown` TINYINT,
	`execution_failure_criteria_critical` TINYINT,
	`notification_failure_criteria_ok` TINYINT,
	`notification_failure_criteria_warning` TINYINT,
	`notification_failure_criteria_unknown` TINYINT,
	`notification_failure_criteria_critical` TINYINT,
	`notification_failure_criteria_pending` TINYINT,
	`notification_failure_criteria_up` TINYINT,
	`notification_failure_criteria_down` TINYINT,
	`notification_failure_criteria_unreachable` TINYINT,
	`inherits_parent` TINYINT,
	`dependency_period` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_dependency_FI_1` (`host_template`),
	CONSTRAINT `nagios_dependency_FK_1`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_FI_2` (`host`),
	CONSTRAINT `nagios_dependency_FK_2`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_FI_3` (`service_template`),
	CONSTRAINT `nagios_dependency_FK_3`
		FOREIGN KEY (`service_template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_FI_4` (`service`),
	CONSTRAINT `nagios_dependency_FK_4`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_FI_5` (`hostgroup`),
	CONSTRAINT `nagios_dependency_FK_5`
		FOREIGN KEY (`hostgroup`)
		REFERENCES `nagios_hostgroup` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_FI_6` (`dependency_period`),
	CONSTRAINT `nagios_dependency_FK_6`
		FOREIGN KEY (`dependency_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios Dependency';

#-----------------------------------------------------------------------------
#-- nagios_dependency_target
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_dependency_target`;


CREATE TABLE `nagios_dependency_target`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`dependency` INTEGER,
	`target_host` INTEGER,
	`target_service` INTEGER,
	`target_hostgroup` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_dependency_target_FI_1` (`dependency`),
	CONSTRAINT `nagios_dependency_target_FK_1`
		FOREIGN KEY (`dependency`)
		REFERENCES `nagios_dependency` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_target_FI_2` (`target_host`),
	CONSTRAINT `nagios_dependency_target_FK_2`
		FOREIGN KEY (`target_host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_target_FI_3` (`target_service`),
	CONSTRAINT `nagios_dependency_target_FK_3`
		FOREIGN KEY (`target_service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_dependency_target_FI_4` (`target_hostgroup`),
	CONSTRAINT `nagios_dependency_target_FK_4`
		FOREIGN KEY (`target_hostgroup`)
		REFERENCES `nagios_hostgroup` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Targets for a Dependency';

#-----------------------------------------------------------------------------
#-- nagios_escalation
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_escalation`;


CREATE TABLE `nagios_escalation`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`description` VARCHAR(255)  NOT NULL,
	`host_template` INTEGER,
	`host` INTEGER,
	`hostgroup` INTEGER,
	`service_template` INTEGER,
	`service` INTEGER,
	`first_notification` INTEGER,
	`last_notification` INTEGER,
	`notification_interval` INTEGER,
	`escalation_period` INTEGER,
	`escalation_options_up` TINYINT,
	`escalation_options_down` TINYINT,
	`escalation_options_unreachable` TINYINT,
	`escalation_options_ok` TINYINT,
	`escalation_options_warning` TINYINT,
	`escalation_options_unknown` TINYINT,
	`escalation_options_critical` TINYINT,
	PRIMARY KEY (`id`),
	INDEX `nagios_escalation_FI_1` (`host_template`),
	CONSTRAINT `nagios_escalation_FK_1`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_FI_2` (`host`),
	CONSTRAINT `nagios_escalation_FK_2`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_FI_3` (`service_template`),
	CONSTRAINT `nagios_escalation_FK_3`
		FOREIGN KEY (`service_template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_FI_4` (`service`),
	CONSTRAINT `nagios_escalation_FK_4`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_FI_5` (`hostgroup`),
	CONSTRAINT `nagios_escalation_FK_5`
		FOREIGN KEY (`hostgroup`)
		REFERENCES `nagios_hostgroup` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_FI_6` (`escalation_period`),
	CONSTRAINT `nagios_escalation_FK_6`
		FOREIGN KEY (`escalation_period`)
		REFERENCES `nagios_timeperiod` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='Nagios Escalation';

#-----------------------------------------------------------------------------
#-- nagios_escalation_contact
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_escalation_contact`;


CREATE TABLE `nagios_escalation_contact`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`escalation` INTEGER  NOT NULL,
	`contact` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_escalation_contact_FI_1` (`escalation`),
	CONSTRAINT `nagios_escalation_contact_FK_1`
		FOREIGN KEY (`escalation`)
		REFERENCES `nagios_escalation` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_contact_FI_2` (`contact`),
	CONSTRAINT `nagios_escalation_contact_FK_2`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Contact Group for Escalation';

#-----------------------------------------------------------------------------
#-- nagios_escalation_contactgroup
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_escalation_contactgroup`;


CREATE TABLE `nagios_escalation_contactgroup`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`escalation` INTEGER  NOT NULL,
	`contactgroup` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_escalation_contactgroup_FI_1` (`escalation`),
	CONSTRAINT `nagios_escalation_contactgroup_FK_1`
		FOREIGN KEY (`escalation`)
		REFERENCES `nagios_escalation` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_escalation_contactgroup_FI_2` (`contactgroup`),
	CONSTRAINT `nagios_escalation_contactgroup_FK_2`
		FOREIGN KEY (`contactgroup`)
		REFERENCES `nagios_contact_group` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Contact Group for Escalation';

#-----------------------------------------------------------------------------
#-- nagios_host_contactgroup
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_contactgroup`;


CREATE TABLE `nagios_host_contactgroup`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host` INTEGER,
	`host_template` INTEGER,
	`contactgroup` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_host_contactgroup_FI_1` (`host`),
	CONSTRAINT `nagios_host_contactgroup_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_contactgroup_FI_2` (`host_template`),
	CONSTRAINT `nagios_host_contactgroup_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_contactgroup_FI_3` (`contactgroup`),
	CONSTRAINT `nagios_host_contactgroup_FK_3`
		FOREIGN KEY (`contactgroup`)
		REFERENCES `nagios_contact_group` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Contact Group for Host';

#-----------------------------------------------------------------------------
#-- nagios_hostgroup
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_hostgroup`;


CREATE TABLE `nagios_hostgroup`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`alias` VARCHAR(255)  NOT NULL,
	`notes` VARCHAR(255),
	`notes_url` VARCHAR(255),
	`action_url` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios Hostgroup';

#-----------------------------------------------------------------------------
#-- nagios_hostgroup_membership
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_hostgroup_membership`;


CREATE TABLE `nagios_hostgroup_membership`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host` INTEGER,
	`host_template` INTEGER,
	`hostgroup` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_hostgroup_membership_FI_1` (`host`),
	CONSTRAINT `nagios_hostgroup_membership_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_hostgroup_membership_FI_2` (`host_template`),
	CONSTRAINT `nagios_hostgroup_membership_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_hostgroup_membership_FI_3` (`hostgroup`),
	CONSTRAINT `nagios_hostgroup_membership_FK_3`
		FOREIGN KEY (`hostgroup`)
		REFERENCES `nagios_hostgroup` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Hostgroup Membership for Host';

#-----------------------------------------------------------------------------
#-- nagios_host_check_command_parameter
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_check_command_parameter`;


CREATE TABLE `nagios_host_check_command_parameter`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`host` INTEGER,
	`host_template` INTEGER,
	`parameter` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_host_check_command_parameter_FI_1` (`host`),
	CONSTRAINT `nagios_host_check_command_parameter_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_check_command_parameter_FI_2` (`host_template`),
	CONSTRAINT `nagios_host_check_command_parameter_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Parameter for Host Check Command';

#-----------------------------------------------------------------------------
#-- nagios_host_parent
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_parent`;


CREATE TABLE `nagios_host_parent`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`child_host` INTEGER,
	`child_host_template` INTEGER,
	`parent_host` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_host_parent_FI_1` (`child_host`),
	CONSTRAINT `nagios_host_parent_FK_1`
		FOREIGN KEY (`child_host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_parent_FI_2` (`parent_host`),
	CONSTRAINT `nagios_host_parent_FK_2`
		FOREIGN KEY (`parent_host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_parent_FI_3` (`child_host_template`),
	CONSTRAINT `nagios_host_parent_FK_3`
		FOREIGN KEY (`child_host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios Additional Host Parent Relationship';

#-----------------------------------------------------------------------------
#-- nagios_resource
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_resource`;


CREATE TABLE `nagios_resource`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`user1` VARCHAR(255),
	`user2` VARCHAR(255),
	`user3` VARCHAR(255),
	`user4` VARCHAR(255),
	`user5` VARCHAR(255),
	`user6` VARCHAR(255),
	`user7` VARCHAR(255),
	`user8` VARCHAR(255),
	`user9` VARCHAR(255),
	`user10` VARCHAR(255),
	`user11` VARCHAR(255),
	`user12` VARCHAR(255),
	`user13` VARCHAR(255),
	`user14` VARCHAR(255),
	`user15` VARCHAR(255),
	`user16` VARCHAR(255),
	`user17` VARCHAR(255),
	`user18` VARCHAR(255),
	`user19` VARCHAR(255),
	`user20` VARCHAR(255),
	`user21` VARCHAR(255),
	`user22` VARCHAR(255),
	`user23` VARCHAR(255),
	`user24` VARCHAR(255),
	`user25` VARCHAR(255),
	`user26` VARCHAR(255),
	`user27` VARCHAR(255),
	`user28` VARCHAR(255),
	`user29` VARCHAR(255),
	`user30` VARCHAR(255),
	`user31` VARCHAR(255),
	`user32` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='Nagios Resource';

#-----------------------------------------------------------------------------
#-- nagios_main_configuration
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_main_configuration`;


CREATE TABLE `nagios_main_configuration`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`config_dir` VARCHAR(255),
	`log_file` VARCHAR(255),
	`temp_file` VARCHAR(255),
	`status_file` VARCHAR(255),
	`status_update_interval` INTEGER,
	`nagios_user` VARCHAR(255),
	`nagios_group` VARCHAR(255),
	`enable_notifications` TINYINT,
	`execute_service_checks` TINYINT,
	`accept_passive_service_checks` TINYINT,
	`enable_event_handlers` TINYINT,
	`log_rotation_method` CHAR,
	`log_archive_path` VARCHAR(255),
	`check_external_commands` TINYINT,
	`command_check_interval` VARCHAR(255),
	`command_file` VARCHAR(255),
	`lock_file` VARCHAR(255),
	`retain_state_information` TINYINT,
	`state_retention_file` VARCHAR(255),
	`retention_update_interval` INTEGER,
	`use_retained_program_state` TINYINT,
	`use_syslog` TINYINT,
	`log_notifications` TINYINT,
	`log_service_retries` TINYINT,
	`log_host_retries` TINYINT,
	`log_event_handlers` TINYINT,
	`log_initial_states` TINYINT,
	`log_external_commands` TINYINT,
	`log_passive_checks` TINYINT,
	`global_host_event_handler` INTEGER,
	`global_service_event_handler` INTEGER,
	`external_command_buffer_slots` INTEGER,
	`sleep_time` FLOAT,
	`service_interleave_factor` CHAR,
	`max_concurrent_checks` INTEGER,
	`service_reaper_frequency` INTEGER,
	`interval_length` INTEGER,
	`use_aggressive_host_checking` TINYINT,
	`enable_flap_detection` TINYINT,
	`low_service_flap_threshold` FLOAT,
	`high_service_flap_threshold` FLOAT,
	`low_host_flap_threshold` FLOAT,
	`high_host_flap_threshold` FLOAT,
	`soft_state_dependencies` TINYINT,
	`service_check_timeout` INTEGER,
	`host_check_timeout` INTEGER,
	`event_handler_timeout` INTEGER,
	`notification_timeout` INTEGER,
	`ocsp_timeout` INTEGER,
	`ohcp_timeout` INTEGER,
	`perfdata_timeout` INTEGER,
	`obsess_over_services` TINYINT,
	`ocsp_command` INTEGER,
	`process_performance_data` TINYINT,
	`check_for_orphaned_services` TINYINT,
	`check_service_freshness` TINYINT,
	`freshness_check_interval` INTEGER,
	`date_format` VARCHAR(255),
	`illegal_object_name_chars` VARCHAR(255),
	`illegal_macro_output_chars` VARCHAR(255),
	`admin_email` VARCHAR(255),
	`admin_pager` VARCHAR(255),
	`execute_host_checks` TINYINT,
	`service_inter_check_delay_method` VARCHAR(255),
	`use_retained_scheduling_info` TINYINT,
	`accept_passive_host_checks` TINYINT,
	`max_service_check_spread` INTEGER,
	`host_inter_check_delay_method` VARCHAR(255),
	`max_host_check_spread` INTEGER,
	`auto_reschedule_checks` TINYINT,
	`auto_rescheduling_interval` INTEGER,
	`auto_rescheduling_window` INTEGER,
	`ochp_timeout` INTEGER,
	`obsess_over_hosts` TINYINT,
	`ochp_command` INTEGER,
	`check_host_freshness` TINYINT,
	`host_freshness_check_interval` INTEGER,
	`service_freshness_check_interval` INTEGER,
	`use_regexp_matching` TINYINT,
	`use_true_regexp_matching` TINYINT,
	`event_broker_options` VARCHAR(255),
	`daemon_dumps_core` TINYINT,
	`host_perfdata_command` INTEGER,
	`service_perfdata_command` INTEGER,
	`host_perfdata_file` VARCHAR(255),
	`host_perfdata_file_template` VARCHAR(255),
	`service_perfdata_file` VARCHAR(255),
	`service_perfdata_file_template` VARCHAR(255),
	`host_perfdata_file_mode` CHAR,
	`service_perfdata_file_mode` CHAR,
	`host_perfdata_file_processing_command` INTEGER,
	`service_perfdata_file_processing_command` INTEGER,
	`host_perfdata_file_processing_interval` INTEGER,
	`service_perfdata_file_processing_interval` INTEGER,
	`object_cache_file` VARCHAR(255),
	`precached_object_file` VARCHAR(255),
	`retained_host_attribute_mask` INTEGER,
	`retained_service_attribute_mask` INTEGER,
	`retained_process_host_attribute_mask` INTEGER,
	`retained_process_service_attribute_mask` INTEGER,
	`retained_contact_host_attribute_mask` INTEGER,
	`retained_contact_service_attribute_mask` INTEGER,
	`check_result_reaper_frequency` INTEGER,
	`max_check_result_reaper_time` INTEGER,
	`check_result_path` VARCHAR(255),
	`max_check_result_file_age` INTEGER,
	`translate_passive_host_checks` TINYINT,
	`passive_host_checks_are_soft` TINYINT,
	`enable_predictive_host_dependency_checks` TINYINT,
	`enable_predictive_service_dependency_checks` TINYINT,
	`cached_host_check_horizon` INTEGER,
	`cached_service_check_horizon` INTEGER,
	`use_large_installation_tweaks` TINYINT,
	`free_child_process_memory` TINYINT,
	`child_processes_fork_twice` TINYINT,
	`enable_environment_macros` TINYINT,
	`additional_freshness_latency` INTEGER,
	`enable_embedded_perl` TINYINT,
	`use_embedded_perl_implicitly` TINYINT,
	`p1_file` VARCHAR(255),
	`use_timezone` VARCHAR(255),
	`debug_file` VARCHAR(255),
	`debug_level` INTEGER,
	`debug_verbosity` INTEGER,
	`max_debug_file_size` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `nagios_main_configuration_FI_1` (`ocsp_command`),
	CONSTRAINT `nagios_main_configuration_FK_1`
		FOREIGN KEY (`ocsp_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_2` (`ochp_command`),
	CONSTRAINT `nagios_main_configuration_FK_2`
		FOREIGN KEY (`ochp_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_3` (`host_perfdata_command`),
	CONSTRAINT `nagios_main_configuration_FK_3`
		FOREIGN KEY (`host_perfdata_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_4` (`service_perfdata_command`),
	CONSTRAINT `nagios_main_configuration_FK_4`
		FOREIGN KEY (`service_perfdata_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_5` (`host_perfdata_file_processing_command`),
	CONSTRAINT `nagios_main_configuration_FK_5`
		FOREIGN KEY (`host_perfdata_file_processing_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_6` (`service_perfdata_file_processing_command`),
	CONSTRAINT `nagios_main_configuration_FK_6`
		FOREIGN KEY (`service_perfdata_file_processing_command`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_7` (`global_service_event_handler`),
	CONSTRAINT `nagios_main_configuration_FK_7`
		FOREIGN KEY (`global_service_event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_main_configuration_FI_8` (`global_host_event_handler`),
	CONSTRAINT `nagios_main_configuration_FK_8`
		FOREIGN KEY (`global_host_event_handler`)
		REFERENCES `nagios_command` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios Main Configuration';

#-----------------------------------------------------------------------------
#-- nagios_host_template_inheritance
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_host_template_inheritance`;


CREATE TABLE `nagios_host_template_inheritance`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`source_host` INTEGER,
	`source_template` INTEGER,
	`target_template` INTEGER  NOT NULL,
	`order` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_host_template_inheritance_FI_1` (`source_host`),
	CONSTRAINT `nagios_host_template_inheritance_FK_1`
		FOREIGN KEY (`source_host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_template_inheritance_FI_2` (`source_template`),
	CONSTRAINT `nagios_host_template_inheritance_FK_2`
		FOREIGN KEY (`source_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_host_template_inheritance_FI_3` (`target_template`),
	CONSTRAINT `nagios_host_template_inheritance_FK_3`
		FOREIGN KEY (`target_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios Host Template Inheritance';

#-----------------------------------------------------------------------------
#-- nagios_service_template_inheritance
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `nagios_service_template_inheritance`;


CREATE TABLE `nagios_service_template_inheritance`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`source_service` INTEGER,
	`source_template` INTEGER,
	`target_template` INTEGER  NOT NULL,
	`order` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `nagios_service_template_inheritance_FI_1` (`source_service`),
	CONSTRAINT `nagios_service_template_inheritance_FK_1`
		FOREIGN KEY (`source_service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_template_inheritance_FI_2` (`source_template`),
	CONSTRAINT `nagios_service_template_inheritance_FK_2`
		FOREIGN KEY (`source_template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE,
	INDEX `nagios_service_template_inheritance_FI_3` (`target_template`),
	CONSTRAINT `nagios_service_template_inheritance_FK_3`
		FOREIGN KEY (`target_template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Nagios service Template Inheritance';

#-----------------------------------------------------------------------------
#-- autodiscovery_job
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `autodiscovery_job`;


CREATE TABLE `autodiscovery_job`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`name` VARCHAR(255)  NOT NULL,
	`description` VARCHAR(255)  NOT NULL,
	`config` TEXT  NOT NULL,
	`start_time` DATETIME,
	`end_time` DATETIME,
	`status` VARCHAR(255),
	`status_code` INTEGER  NOT NULL,
	`status_change_time` DATETIME,
	`stats` TEXT  NOT NULL,
	`cmd` VARCHAR(255),
	PRIMARY KEY (`id`)
)Type=INNODB COMMENT='AutoDiscovery Job Information';

#-----------------------------------------------------------------------------
#-- autodiscovery_log_entry
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `autodiscovery_log_entry`;


CREATE TABLE `autodiscovery_log_entry`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`job` INTEGER,
	`time` DATETIME  NOT NULL,
	`text` TEXT  NOT NULL,
	`type` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `autodiscovery_log_entry_FI_1` (`job`),
	CONSTRAINT `autodiscovery_log_entry_FK_1`
		FOREIGN KEY (`job`)
		REFERENCES `autodiscovery_job` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='Export Job Entry';

#-----------------------------------------------------------------------------
#-- autodiscovery_device
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `autodiscovery_device`;


CREATE TABLE `autodiscovery_device`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`job_id` INTEGER  NOT NULL,
	`address` VARCHAR(255)  NOT NULL,
	`name` VARCHAR(255),
	`hostname` VARCHAR(255),
	`description` VARCHAR(255),
	`osvendor` VARCHAR(255),
	`osfamily` VARCHAR(255),
	`osgen` VARCHAR(255),
	`host_template` INTEGER  NOT NULL,
	`proposed_parent` INTEGER,
	PRIMARY KEY (`id`),
	INDEX `autodiscovery_device_FI_1` (`job_id`),
	CONSTRAINT `autodiscovery_device_FK_1`
		FOREIGN KEY (`job_id`)
		REFERENCES `autodiscovery_job` (`id`)
		ON DELETE CASCADE,
	INDEX `autodiscovery_device_FI_2` (`host_template`),
	CONSTRAINT `autodiscovery_device_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE,
	INDEX `autodiscovery_device_FI_3` (`proposed_parent`),
	CONSTRAINT `autodiscovery_device_FK_3`
		FOREIGN KEY (`proposed_parent`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE SET NULL
)Type=INNODB COMMENT='AutoDiscovery Found Device';

#-----------------------------------------------------------------------------
#-- autodiscovery_device_service
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `autodiscovery_device_service`;


CREATE TABLE `autodiscovery_device_service`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`device_id` INTEGER  NOT NULL,
	`protocol` VARCHAR(255)  NOT NULL,
	`port` INTEGER  NOT NULL,
	`name` VARCHAR(255)  NOT NULL,
	`product` VARCHAR(255)  NOT NULL,
	`version` VARCHAR(255)  NOT NULL,
	`extrainfo` VARCHAR(255)  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `autodiscovery_device_service_FI_1` (`device_id`),
	CONSTRAINT `autodiscovery_device_service_FK_1`
		FOREIGN KEY (`device_id`)
		REFERENCES `autodiscovery_device` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='AutoDiscovery Found Service';

#-----------------------------------------------------------------------------
#-- autodiscovery_device_template_match
#-----------------------------------------------------------------------------

DROP TABLE IF EXISTS `autodiscovery_device_template_match`;


CREATE TABLE `autodiscovery_device_template_match`
(
	`id` INTEGER  NOT NULL AUTO_INCREMENT,
	`device_id` INTEGER  NOT NULL,
	`host_template` INTEGER  NOT NULL,
	`percent` FLOAT  NOT NULL,
	`complexity` INTEGER  NOT NULL,
	PRIMARY KEY (`id`),
	INDEX `autodiscovery_device_template_match_FI_1` (`device_id`),
	CONSTRAINT `autodiscovery_device_template_match_FK_1`
		FOREIGN KEY (`device_id`)
		REFERENCES `autodiscovery_device` (`id`)
		ON DELETE CASCADE,
	INDEX `autodiscovery_device_template_match_FI_2` (`host_template`),
	CONSTRAINT `autodiscovery_device_template_match_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
)Type=INNODB COMMENT='AutoDiscovery Device Matched Template';

# This restores the fkey checks, after having unset them earlier
SET FOREIGN_KEY_CHECKS = 1;
