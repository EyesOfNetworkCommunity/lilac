DROP TABLE IF EXISTS `lilac_configuration`;

CREATE TABLE `lilac_configuration`
(
	`key` VARCHAR(255) NOT NULL,
	`value` VARCHAR(255),
	PRIMARY KEY (`key`)
) ENGINE=MyISAM COMMENT='Lilac Configuration';

INSERT INTO `lilac_configuration` (
`key` ,
`value`
)
VALUES (
'db_build', '54'
);

REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'check_for_updates', 'This option determines whether Nagios will automatically check to see if new updates (releases) are available. It is recommend that you enable this option to ensure that you stay on top of the latest critical patches to Nagios. Nagios is critical to you - make sure you keep it in good shape. Nagios will check once a day for new updates. Data collected by Nagios Enterprises from the update check is processed in accordance with our privacy policy - see <a href="http://api.nagios.org">http://api.nagios.org</a> for details.');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'check_for_orphaned_hosts', 'This option allows you to enable or disable checks for orphaned hoste checks. Orphaned host checks are checks which have been executed and have been removed from the event queue, but have not had any results reported in a long time. Since no results have come back in for the host, it is not rescheduled in the event queue. This can cause host checks to stop being executed. Normally it is very rare for this to happen - it might happen if an external user or process killed off the process that was being used to execute a host check. If this option is enabled and Nagios finds that results for a particular host check have not come back, it will log an error message and reschedule the host check. If you start seeing host checks that never seem to get rescheduled, enable this option and see if you notice any log messages about orphaned hosts.');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'bare_update_check', 'This option deterines what data Nagios will send to api.nagios.org when it checks for updates. By default, Nagios will send information on the current version of Nagios you have installed, as well as an indicator as to whether this was a new installation or not. Nagios Enterprises uses this data to determine the number of users running specific version of Nagios. Enable this option if you do not wish for this information to be sent.');
