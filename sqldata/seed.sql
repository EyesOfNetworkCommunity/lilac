-- MySQL dump 10.11
--
-- Host: localhost    Database: lilac
-- ------------------------------------------------------
-- Server version	5.0.67-0ubuntu6

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Dumping data for table `autodiscovery_device`
--

LOCK TABLES `autodiscovery_device` WRITE;
/*!40000 ALTER TABLE `autodiscovery_device` DISABLE KEYS */;
/*!40000 ALTER TABLE `autodiscovery_device` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `autodiscovery_device_service`
--

LOCK TABLES `autodiscovery_device_service` WRITE;
/*!40000 ALTER TABLE `autodiscovery_device_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `autodiscovery_device_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `autodiscovery_device_template_match`
--

LOCK TABLES `autodiscovery_device_template_match` WRITE;
/*!40000 ALTER TABLE `autodiscovery_device_template_match` DISABLE KEYS */;
/*!40000 ALTER TABLE `autodiscovery_device_template_match` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `autodiscovery_job`
--

LOCK TABLES `autodiscovery_job` WRITE;
/*!40000 ALTER TABLE `autodiscovery_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `autodiscovery_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `autodiscovery_log_entry`
--

LOCK TABLES `autodiscovery_log_entry` WRITE;
/*!40000 ALTER TABLE `autodiscovery_log_entry` DISABLE KEYS */;
/*!40000 ALTER TABLE `autodiscovery_log_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `export_job`
--

LOCK TABLES `export_job` WRITE;
/*!40000 ALTER TABLE `export_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `export_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `export_log_entry`
--

LOCK TABLES `export_log_entry` WRITE;
/*!40000 ALTER TABLE `export_log_entry` DISABLE KEYS */;
/*!40000 ALTER TABLE `export_log_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `import_job`
--

LOCK TABLES `import_job` WRITE;
/*!40000 ALTER TABLE `import_job` DISABLE KEYS */;
/*!40000 ALTER TABLE `import_job` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `import_log_entry`
--

LOCK TABLES `import_log_entry` WRITE;
/*!40000 ALTER TABLE `import_log_entry` DISABLE KEYS */;
/*!40000 ALTER TABLE `import_log_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_broker_module`
--

LOCK TABLES `nagios_broker_module` WRITE;
/*!40000 ALTER TABLE `nagios_broker_module` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_broker_module` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_cgi_configuration`
--

LOCK TABLES `nagios_cgi_configuration` WRITE;
/*!40000 ALTER TABLE `nagios_cgi_configuration` DISABLE KEYS */;
INSERT INTO `nagios_cgi_configuration` (`id`, `physical_html_path`, `url_html_path`, `use_authentication`, `default_user_name`, `authorized_for_system_information`, `authorized_for_system_commands`, `authorized_for_configuration_information`, `authorized_for_all_hosts`, `authorized_for_all_host_commands`, `authorized_for_all_services`, `authorized_for_all_service_commands`, `lock_author_names`, `statusmap_background_image`, `default_statusmap_layout`, `statuswrl_include`, `default_statuswrl_layout`, `refresh_rate`, `host_unreachable_sound`, `host_down_sound`, `service_critical_sound`, `service_warning_sound`, `service_unknown_sound`, `ping_syntax`, `escape_html_tags`, `notes_url_target`, `action_url_target`, `enable_splunk_integration`, `splunk_url`, `authorized_for_read_only`, `color_transparency_index_r`, `color_transparency_index_g`, `color_transparency_index_b`, `result_limit`) VALUES (2,'/usr/local/nagios/share','/nagios',1,NULL,'nagiosadmin','nagiosadmin','nagiosadmin','nagiosadmin','nagiosadmin','nagiosadmin','nagiosadmin',NULL,NULL,5,NULL,4,90,NULL,NULL,NULL,NULL,NULL,'/bin/ping -n -U -c 5 $HOSTADDRESS$',NULL,NULL,NULL,NULL,NULL,'nagiosadmin',NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_cgi_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_command`
--

LOCK TABLES `nagios_command` WRITE;
/*!40000 ALTER TABLE `nagios_command` DISABLE KEYS */;
INSERT INTO `nagios_command` (`id`, `name`, `line`, `description`) VALUES (25,'notify-host-by-email','/usr/bin/printf \"%b\" \"***** Nagios *****\\n\\nNotification Type: $NOTIFICATIONTYPE$\\nHost: $HOSTNAME$\\nState: $HOSTSTATE$\\nAddress: $HOSTADDRESS$\\nInfo: $HOSTOUTPUT$\\n\\nDate/Time: $LONGDATETIME$\\n\" | /usr/bin/mail -s \"** $NOTIFICATIONTYPE$ Host Alert: $HOSTNAME$ is $HOSTSTATE$ **\" $CONTACTEMAIL$',NULL),(26,'notify-service-by-email','/usr/bin/printf \"%b\" \"***** Nagios *****\\n\\nNotification Type: $NOTIFICATIONTYPE$\\n\\nService: $SERVICEDESC$\\nHost: $HOSTALIAS$\\nAddress: $HOSTADDRESS$\\nState: $SERVICESTATE$\\n\\nDate/Time: $LONGDATETIME$\\n\\nAdditional Info:\\n\\n$SERVICEOUTPUT$\" | /usr/bin/mail -s \"** $NOTIFICATIONTYPE$ Service Alert: $HOSTALIAS$/$SERVICEDESC$ is $SERVICESTATE$ **\" $CONTACTEMAIL$',NULL),(27,'check-host-alive','$USER1$/check_ping -H $HOSTADDRESS$ -w 3000.0,80% -c 5000.0,100% -p 5',NULL),(28,'check_local_disk','$USER1$/check_disk -w $ARG1$ -c $ARG2$ -p $ARG3$',NULL),(29,'check_local_load','$USER1$/check_load -w $ARG1$ -c $ARG2$',NULL),(30,'check_local_procs','$USER1$/check_procs -w $ARG1$ -c $ARG2$ -s $ARG3$',NULL),(31,'check_local_users','$USER1$/check_users -w $ARG1$ -c $ARG2$',NULL),(32,'check_local_swap','$USER1$/check_swap -w $ARG1$ -c $ARG2$',NULL),(33,'check_local_mrtgtraf','$USER1$/check_mrtgtraf -F $ARG1$ -a $ARG2$ -w $ARG3$ -c $ARG4$ -e $ARG5$',NULL),(34,'check_ftp','$USER1$/check_ftp -H $HOSTADDRESS$ $ARG1$',NULL),(35,'check_hpjd','$USER1$/check_hpjd -H $HOSTADDRESS$ $ARG1$',NULL),(36,'check_snmp','$USER1$/check_snmp -H $HOSTADDRESS$ $ARG1$',NULL),(37,'check_http','$USER1$/check_http -I $HOSTADDRESS$ $ARG1$',NULL),(38,'check_ssh','$USER1$/check_ssh $ARG1$ $HOSTADDRESS$',NULL),(39,'check_dhcp','$USER1$/check_dhcp $ARG1$',NULL),(40,'check_ping','$USER1$/check_ping -H $HOSTADDRESS$ -w $ARG1$ -c $ARG2$ -p 5',NULL),(41,'check_pop','$USER1$/check_pop -H $HOSTADDRESS$ $ARG1$',NULL),(42,'check_imap','$USER1$/check_imap -H $HOSTADDRESS$ $ARG1$',NULL),(43,'check_smtp','$USER1$/check_smtp -H $HOSTADDRESS$ $ARG1$',NULL),(44,'check_tcp','$USER1$/check_tcp -H $HOSTADDRESS$ -p $ARG1$ $ARG2$',NULL),(45,'check_udp','$USER1$/check_udp -H $HOSTADDRESS$ -p $ARG1$ $ARG2$',NULL),(46,'check_nt','$USER1$/check_nt -H $HOSTADDRESS$ -p 12489 -v $ARG1$ $ARG2$',NULL),(47,'process-host-perfdata','/usr/bin/printf \"%b\" \"$LASTHOSTCHECK$\\t$HOSTNAME$\\t$HOSTSTATE$\\t$HOSTATTEMPT$\\t$HOSTSTATETYPE$\\t$HOSTEXECUTIONTIME$\\t$HOSTOUTPUT$\\t$HOSTPERFDATA$\\n\" >> /usr/local/nagios/var/host-perfdata.out',NULL),(48,'process-service-perfdata','/usr/bin/printf \"%b\" \"$LASTSERVICECHECK$\\t$HOSTNAME$\\t$SERVICEDESC$\\t$SERVICESTATE$\\t$SERVICEATTEMPT$\\t$SERVICESTATETYPE$\\t$SERVICEEXECUTIONTIME$\\t$SERVICELATENCY$\\t$SERVICEOUTPUT$\\t$SERVICEPERFDATA$\\n\" >> /usr/local/nagios/var/service-perfdata.out',NULL);
/*!40000 ALTER TABLE `nagios_command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_contact`
--

LOCK TABLES `nagios_contact` WRITE;
/*!40000 ALTER TABLE `nagios_contact` DISABLE KEYS */;
INSERT INTO `nagios_contact` (`id`, `name`, `alias`, `email`, `pager`, `host_notifications_enabled`, `service_notifications_enabled`, `host_notification_period`, `service_notification_period`, `host_notification_on_down`, `host_notification_on_unreachable`, `host_notification_on_recovery`, `host_notification_on_flapping`, `host_notification_on_scheduled_downtime`, `service_notification_on_warning`, `service_notification_on_unknown`, `service_notification_on_critical`, `service_notification_on_recovery`, `service_notification_on_flapping`, `can_submit_commands`, `retain_status_information`, `retain_nonstatus_information`) VALUES (2,'nagiosadmin','Nagios Admin','nagios@localhost',NULL,0,0,6,6,1,1,1,1,1,1,1,1,1,1,0,0,0);
/*!40000 ALTER TABLE `nagios_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_contact_address`
--

LOCK TABLES `nagios_contact_address` WRITE;
/*!40000 ALTER TABLE `nagios_contact_address` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_contact_address` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_contact_group`
--

LOCK TABLES `nagios_contact_group` WRITE;
/*!40000 ALTER TABLE `nagios_contact_group` DISABLE KEYS */;
INSERT INTO `nagios_contact_group` (`id`, `name`, `alias`) VALUES (2,'admins','Nagios Administrators');
/*!40000 ALTER TABLE `nagios_contact_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_contact_group_member`
--

LOCK TABLES `nagios_contact_group_member` WRITE;
/*!40000 ALTER TABLE `nagios_contact_group_member` DISABLE KEYS */;
INSERT INTO `nagios_contact_group_member` (`id`, `contact`, `contactgroup`) VALUES (2,2,2);
/*!40000 ALTER TABLE `nagios_contact_group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_contact_notification_command`
--

LOCK TABLES `nagios_contact_notification_command` WRITE;
/*!40000 ALTER TABLE `nagios_contact_notification_command` DISABLE KEYS */;
INSERT INTO `nagios_contact_notification_command` (`id`, `contact_id`, `command`, `type`) VALUES (3,2,26,'service'),(4,2,25,'host');
/*!40000 ALTER TABLE `nagios_contact_notification_command` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_dependency`
--

LOCK TABLES `nagios_dependency` WRITE;
/*!40000 ALTER TABLE `nagios_dependency` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_dependency` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_dependency_target`
--

LOCK TABLES `nagios_dependency_target` WRITE;
/*!40000 ALTER TABLE `nagios_dependency_target` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_dependency_target` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_escalation`
--

LOCK TABLES `nagios_escalation` WRITE;
/*!40000 ALTER TABLE `nagios_escalation` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_escalation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_escalation_contact`
--

LOCK TABLES `nagios_escalation_contact` WRITE;
/*!40000 ALTER TABLE `nagios_escalation_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_escalation_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_escalation_contactgroup`
--

LOCK TABLES `nagios_escalation_contactgroup` WRITE;
/*!40000 ALTER TABLE `nagios_escalation_contactgroup` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_escalation_contactgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host`
--

LOCK TABLES `nagios_host` WRITE;
/*!40000 ALTER TABLE `nagios_host` DISABLE KEYS */;
INSERT INTO `nagios_host` (`id`, `name`, `alias`, `display_name`, `initial_state`, `address`, `check_command`, `retry_interval`, `first_notification_delay`, `maximum_check_attempts`, `check_interval`, `passive_checks_enabled`, `check_period`, `obsess_over_host`, `check_freshness`, `freshness_threshold`, `active_checks_enabled`, `checks_enabled`, `event_handler`, `event_handler_enabled`, `low_flap_threshold`, `high_flap_threshold`, `flap_detection_enabled`, `process_perf_data`, `retain_status_information`, `retain_nonstatus_information`, `notification_interval`, `notification_period`, `notifications_enabled`, `notification_on_down`, `notification_on_unreachable`, `notification_on_recovery`, `notification_on_flapping`, `notification_on_scheduled_downtime`, `stalking_on_up`, `stalking_on_down`, `stalking_on_unreachable`, `failure_prediction_enabled`, `flap_detection_on_up`, `flap_detection_on_down`, `flap_detection_on_unreachable`, `notes`, `notes_url`, `action_url`, `icon_image`, `icon_image_alt`, `vrml_image`, `statusmap_image`, `two_d_coords`, `three_d_coords`) VALUES (2,'localhost','localhost','',NULL,'localhost',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(3,'winserver','My Windows Server','',NULL,'My Windows Server',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(4,'linksys-srw224p','Linksys SRW224P Switch','',NULL,'192.168.1.253',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(5,'hplj2605dn','HP LaserJet 2605dn','',NULL,'192.168.1.30',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_host` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_check_command_parameter`
--

LOCK TABLES `nagios_host_check_command_parameter` WRITE;
/*!40000 ALTER TABLE `nagios_host_check_command_parameter` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_host_check_command_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_contact_member`
--

LOCK TABLES `nagios_host_contact_member` WRITE;
/*!40000 ALTER TABLE `nagios_host_contact_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_host_contact_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_contactgroup`
--

LOCK TABLES `nagios_host_contactgroup` WRITE;
/*!40000 ALTER TABLE `nagios_host_contactgroup` DISABLE KEYS */;
INSERT INTO `nagios_host_contactgroup` (`id`, `host`, `host_template`, `contactgroup`) VALUES (6,NULL,8,2),(5,NULL,7,2),(4,NULL,6,2),(7,NULL,9,2);
/*!40000 ALTER TABLE `nagios_host_contactgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_parent`
--

LOCK TABLES `nagios_host_parent` WRITE;
/*!40000 ALTER TABLE `nagios_host_parent` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_host_parent` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_template`
--

LOCK TABLES `nagios_host_template` WRITE;
/*!40000 ALTER TABLE `nagios_host_template` DISABLE KEYS */;
INSERT INTO `nagios_host_template` (`id`, `name`, `description`, `initial_state`, `check_command`, `retry_interval`, `first_notification_delay`, `maximum_check_attempts`, `check_interval`, `passive_checks_enabled`, `check_period`, `obsess_over_host`, `check_freshness`, `freshness_threshold`, `active_checks_enabled`, `checks_enabled`, `event_handler`, `event_handler_enabled`, `low_flap_threshold`, `high_flap_threshold`, `flap_detection_enabled`, `process_perf_data`, `retain_status_information`, `retain_nonstatus_information`, `notification_interval`, `notification_period`, `notifications_enabled`, `notification_on_down`, `notification_on_unreachable`, `notification_on_recovery`, `notification_on_flapping`, `notification_on_scheduled_downtime`, `stalking_on_up`, `stalking_on_down`, `stalking_on_unreachable`, `failure_prediction_enabled`, `flap_detection_on_up`, `flap_detection_on_down`, `flap_detection_on_unreachable`, `notes`, `notes_url`, `action_url`, `icon_image`, `icon_image_alt`, `vrml_image`, `statusmap_image`, `two_d_coords`, `three_d_coords`, `autodiscovery_address_filter`, `autodiscovery_hostname_filter`, `autodiscovery_os_family_filter`, `autodiscovery_os_generation_filter`, `autodiscovery_os_vendor_filter`) VALUES (5,'generic-host',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,1,1,1,1,NULL,6,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(6,'linux-server',NULL,NULL,27,1,NULL,10,5,NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,120,7,NULL,1,1,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(7,'windows-server',NULL,NULL,27,1,NULL,10,5,NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,6,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(8,'generic-printer',NULL,NULL,27,1,NULL,10,5,NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,7,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(9,'generic-switch',NULL,NULL,27,1,NULL,10,5,NULL,6,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,30,6,NULL,1,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_host_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_template_autodiscovery_service`
--

LOCK TABLES `nagios_host_template_autodiscovery_service` WRITE;
/*!40000 ALTER TABLE `nagios_host_template_autodiscovery_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_host_template_autodiscovery_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_host_template_inheritance`
--

LOCK TABLES `nagios_host_template_inheritance` WRITE;
/*!40000 ALTER TABLE `nagios_host_template_inheritance` DISABLE KEYS */;
INSERT INTO `nagios_host_template_inheritance` (`id`, `source_host`, `source_template`, `target_template`, `order`) VALUES (8,NULL,9,5,0),(7,NULL,8,5,0),(6,NULL,7,5,0),(5,NULL,6,5,0),(9,2,NULL,6,0),(10,3,NULL,7,0),(11,4,NULL,9,0),(12,5,NULL,8,0);
/*!40000 ALTER TABLE `nagios_host_template_inheritance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_hostgroup`
--

LOCK TABLES `nagios_hostgroup` WRITE;
/*!40000 ALTER TABLE `nagios_hostgroup` DISABLE KEYS */;
INSERT INTO `nagios_hostgroup` (`id`, `name`, `alias`, `notes`, `notes_url`, `action_url`) VALUES (2,'windows-servers','Windows Servers',NULL,NULL,NULL),(3,'switches','Network Switches',NULL,NULL,NULL),(4,'network-printers','Network Printers',NULL,NULL,NULL),(5,'linux-servers','Linux Servers',NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_hostgroup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_hostgroup_membership`
--

LOCK TABLES `nagios_hostgroup_membership` WRITE;
/*!40000 ALTER TABLE `nagios_hostgroup_membership` DISABLE KEYS */;
INSERT INTO `nagios_hostgroup_membership` (`id`, `host`, `host_template`, `hostgroup`) VALUES (2,NULL,7,2),(3,2,NULL,5);
/*!40000 ALTER TABLE `nagios_hostgroup_membership` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_main_configuration`
--

LOCK TABLES `nagios_main_configuration` WRITE;
/*!40000 ALTER TABLE `nagios_main_configuration` DISABLE KEYS */;
INSERT INTO `nagios_main_configuration` (`id`, `config_dir`, `log_file`, `temp_file`, `status_file`, `status_update_interval`, `nagios_user`, `nagios_group`, `enable_notifications`, `execute_service_checks`, `accept_passive_service_checks`, `enable_event_handlers`, `log_rotation_method`, `log_archive_path`, `check_external_commands`, `command_check_interval`, `command_file`, `lock_file`, `retain_state_information`, `state_retention_file`, `retention_update_interval`, `use_retained_program_state`, `use_syslog`, `log_notifications`, `log_service_retries`, `log_host_retries`, `log_event_handlers`, `log_initial_states`, `log_external_commands`, `log_passive_checks`, `global_host_event_handler`, `global_service_event_handler`, `external_command_buffer_slots`, `sleep_time`, `service_interleave_factor`, `max_concurrent_checks`, `service_reaper_frequency`, `interval_length`, `use_aggressive_host_checking`, `enable_flap_detection`, `low_service_flap_threshold`, `high_service_flap_threshold`, `low_host_flap_threshold`, `high_host_flap_threshold`, `soft_state_dependencies`, `service_check_timeout`, `host_check_timeout`, `event_handler_timeout`, `notification_timeout`, `ocsp_timeout`, `ohcp_timeout`, `perfdata_timeout`, `obsess_over_services`, `ocsp_command`, `process_performance_data`, `check_for_orphaned_services`, `check_service_freshness`, `freshness_check_interval`, `date_format`, `illegal_object_name_chars`, `illegal_macro_output_chars`, `admin_email`, `admin_pager`, `execute_host_checks`, `service_inter_check_delay_method`, `use_retained_scheduling_info`, `accept_passive_host_checks`, `max_service_check_spread`, `host_inter_check_delay_method`, `max_host_check_spread`, `auto_reschedule_checks`, `auto_rescheduling_interval`, `auto_rescheduling_window`, `ochp_timeout`, `obsess_over_hosts`, `ochp_command`, `check_host_freshness`, `host_freshness_check_interval`, `service_freshness_check_interval`, `use_regexp_matching`, `use_true_regexp_matching`, `event_broker_options`, `daemon_dumps_core`, `host_perfdata_command`, `service_perfdata_command`, `host_perfdata_file`, `host_perfdata_file_template`, `service_perfdata_file`, `service_perfdata_file_template`, `host_perfdata_file_mode`, `service_perfdata_file_mode`, `host_perfdata_file_processing_command`, `service_perfdata_file_processing_command`, `host_perfdata_file_processing_interval`, `service_perfdata_file_processing_interval`, `object_cache_file`, `precached_object_file`, `retained_host_attribute_mask`, `retained_service_attribute_mask`, `retained_process_host_attribute_mask`, `retained_process_service_attribute_mask`, `retained_contact_host_attribute_mask`, `retained_contact_service_attribute_mask`, `check_result_reaper_frequency`, `max_check_result_reaper_time`, `check_result_path`, `max_check_result_file_age`, `translate_passive_host_checks`, `passive_host_checks_are_soft`, `enable_predictive_host_dependency_checks`, `enable_predictive_service_dependency_checks`, `cached_host_check_horizon`, `cached_service_check_horizon`, `use_large_installation_tweaks`, `free_child_process_memory`, `child_processes_fork_twice`, `enable_environment_macros`, `additional_freshness_latency`, `enable_embedded_perl`, `use_embedded_perl_implicitly`, `p1_file`, `use_timezone`, `debug_file`, `debug_level`, `debug_verbosity`, `max_debug_file_size`, `temp_path`) VALUES (2,'/usr/local/nagios/etc','/usr/local/nagios/var/nagios.log','/usr/local/nagios/var/nagios.tmp','/usr/local/nagios/var/status.dat',10,'nagios','nagios',1,1,1,1,'d','/usr/local/nagios/var/archives',1,'-1','/usr/local/nagios/var/rw/nagios.cmd','/usr/local/nagios/var/nagios.lock',1,'/usr/local/nagios/var/retention.dat',60,1,1,1,1,1,1,0,1,1,NULL,NULL,4096,0.25,'s',0,NULL,60,0,1,5,20,5,20,0,60,30,30,30,5,NULL,5,0,NULL,0,1,1,NULL,'us','()=','`~$&|\'\"<>','nagios@localhost','pagenagios@localhost',1,'s',1,1,30,'s',30,0,30,180,NULL,0,NULL,0,60,60,0,0,'-1',0,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,'/usr/local/nagios/var/objects.cache','/usr/local/nagios/var/objects.precache',0,0,0,0,0,0,10,30,'/usr/local/nagios/var/spool/checkresults',3600,0,0,1,1,15,15,0,NULL,NULL,1,15,1,1,'/usr/local/nagios/bin/p1.pl',NULL,'/usr/local/nagios/var/nagios.debug',0,1,1000000,'/tmp');
/*!40000 ALTER TABLE `nagios_main_configuration` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_resource`
--

LOCK TABLES `nagios_resource` WRITE;
/*!40000 ALTER TABLE `nagios_resource` DISABLE KEYS */;
INSERT INTO `nagios_resource` (`id`, `user1`, `user2`, `user3`, `user4`, `user5`, `user6`, `user7`, `user8`, `user9`, `user10`, `user11`, `user12`, `user13`, `user14`, `user15`, `user16`, `user17`, `user18`, `user19`, `user20`, `user21`, `user22`, `user23`, `user24`, `user25`, `user26`, `user27`, `user28`, `user29`, `user30`, `user31`, `user32`) VALUES (2,'/usr/local/nagios/libexec',NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_resource` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service`
--

LOCK TABLES `nagios_service` WRITE;
/*!40000 ALTER TABLE `nagios_service` DISABLE KEYS */;
INSERT INTO `nagios_service` (`id`, `description`, `display_name`, `host`, `host_template`, `hostgroup`, `initial_state`, `is_volatile`, `check_command`, `maximum_check_attempts`, `normal_check_interval`, `retry_interval`, `first_notification_delay`, `active_checks_enabled`, `passive_checks_enabled`, `check_period`, `parallelize_check`, `obsess_over_service`, `check_freshness`, `freshness_threshold`, `event_handler`, `event_handler_enabled`, `low_flap_threshold`, `high_flap_threshold`, `flap_detection_enabled`, `flap_detection_on_ok`, `flap_detection_on_warning`, `flap_detection_on_critical`, `flap_detection_on_unknown`, `process_perf_data`, `retain_status_information`, `retain_nonstatus_information`, `notification_interval`, `notification_period`, `notification_on_warning`, `notification_on_unknown`, `notification_on_critical`, `notification_on_recovery`, `notification_on_flapping`, `notification_on_scheduled_downtime`, `notifications_enabled`, `stalking_on_ok`, `stalking_on_warning`, `stalking_on_unknown`, `stalking_on_critical`, `failure_prediction_enabled`, `notes`, `notes_url`, `action_url`, `icon_image`, `icon_image_alt`) VALUES (9,'PING',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(10,'Root Partition',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(11,'Current Users',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(12,'Total Processes',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(13,'Current Load',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(14,'Swap Usage',NULL,2,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(15,'SSH',NULL,2,NULL,NULL,NULL,NULL,38,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(16,'HTTP',NULL,2,NULL,NULL,NULL,NULL,37,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(17,'NSClient++ Version',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(18,'Uptime',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(19,'CPU Load',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(20,'Memory Usage',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(21,'C:\\ Drive Space',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(22,'W3SVC',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(23,'Explorer',NULL,3,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(24,'PING',NULL,4,NULL,NULL,NULL,NULL,40,NULL,5,5,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(25,'Uptime',NULL,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(26,'Port 1 Link Status',NULL,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(27,'Port 1 Bandwidth Usage',NULL,4,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(28,'Printer Status',NULL,5,NULL,NULL,NULL,NULL,35,NULL,10,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL),(29,'PING',NULL,5,NULL,NULL,NULL,NULL,40,NULL,10,10,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_check_command_parameter`
--

LOCK TABLES `nagios_service_check_command_parameter` WRITE;
/*!40000 ALTER TABLE `nagios_service_check_command_parameter` DISABLE KEYS */;
INSERT INTO `nagios_service_check_command_parameter` (`id`, `service`, `template`, `parameter`) VALUES (1,24,NULL,'200.0,20%'),(2,24,NULL,'600.0,60%'),(3,28,NULL,'-C public'),(4,29,NULL,'3000.0,80%'),(5,29,NULL,'5000.0,100%');
/*!40000 ALTER TABLE `nagios_service_check_command_parameter` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_contact_group_member`
--

LOCK TABLES `nagios_service_contact_group_member` WRITE;
/*!40000 ALTER TABLE `nagios_service_contact_group_member` DISABLE KEYS */;
INSERT INTO `nagios_service_contact_group_member` (`id`, `service`, `template`, `contact_group`) VALUES (2,NULL,3,2);
/*!40000 ALTER TABLE `nagios_service_contact_group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_contact_member`
--

LOCK TABLES `nagios_service_contact_member` WRITE;
/*!40000 ALTER TABLE `nagios_service_contact_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_service_contact_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_group`
--

LOCK TABLES `nagios_service_group` WRITE;
/*!40000 ALTER TABLE `nagios_service_group` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_service_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_group_member`
--

LOCK TABLES `nagios_service_group_member` WRITE;
/*!40000 ALTER TABLE `nagios_service_group_member` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_service_group_member` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_template`
--

LOCK TABLES `nagios_service_template` WRITE;
/*!40000 ALTER TABLE `nagios_service_template` DISABLE KEYS */;
INSERT INTO `nagios_service_template` (`id`, `name`, `description`, `initial_state`, `is_volatile`, `check_command`, `maximum_check_attempts`, `normal_check_interval`, `retry_interval`, `first_notification_delay`, `active_checks_enabled`, `passive_checks_enabled`, `check_period`, `parallelize_check`, `obsess_over_service`, `check_freshness`, `freshness_threshold`, `event_handler`, `event_handler_enabled`, `low_flap_threshold`, `high_flap_threshold`, `flap_detection_enabled`, `flap_detection_on_ok`, `flap_detection_on_warning`, `flap_detection_on_critical`, `flap_detection_on_unknown`, `process_perf_data`, `retain_status_information`, `retain_nonstatus_information`, `notification_interval`, `notification_period`, `notification_on_warning`, `notification_on_unknown`, `notification_on_critical`, `notification_on_recovery`, `notification_on_flapping`, `notification_on_scheduled_downtime`, `notifications_enabled`, `stalking_on_ok`, `stalking_on_warning`, `stalking_on_unknown`, `stalking_on_critical`, `failure_prediction_enabled`, `notes`, `notes_url`, `action_url`, `icon_image`, `icon_image_alt`) VALUES (3,'generic-service',NULL,NULL,0,NULL,3,10,2,NULL,1,1,6,1,1,0,NULL,NULL,1,NULL,NULL,1,NULL,NULL,NULL,NULL,1,1,1,60,6,NULL,1,1,1,NULL,NULL,1,NULL,NULL,NULL,NULL,1,NULL,NULL,NULL,NULL,NULL),(4,'local-service',NULL,NULL,NULL,NULL,4,5,1,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL,NULL);
/*!40000 ALTER TABLE `nagios_service_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_service_template_inheritance`
--

LOCK TABLES `nagios_service_template_inheritance` WRITE;
/*!40000 ALTER TABLE `nagios_service_template_inheritance` DISABLE KEYS */;
INSERT INTO `nagios_service_template_inheritance` (`id`, `source_service`, `source_template`, `target_template`, `order`) VALUES (10,NULL,4,3,0),(18,16,NULL,4,0),(17,15,NULL,4,0),(16,14,NULL,4,0),(15,13,NULL,4,0),(14,12,NULL,4,0),(13,11,NULL,4,0),(12,10,NULL,4,0),(11,9,NULL,4,0),(19,17,NULL,3,0),(20,18,NULL,3,0),(21,19,NULL,3,0),(22,20,NULL,3,0),(23,21,NULL,3,0),(24,22,NULL,3,0),(25,23,NULL,3,0),(26,24,NULL,3,0),(27,25,NULL,3,0),(28,26,NULL,3,0),(29,27,NULL,3,0),(30,28,NULL,3,0),(31,29,NULL,3,0);
/*!40000 ALTER TABLE `nagios_service_template_inheritance` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_timeperiod`
--

LOCK TABLES `nagios_timeperiod` WRITE;
/*!40000 ALTER TABLE `nagios_timeperiod` DISABLE KEYS */;
INSERT INTO `nagios_timeperiod` (`id`, `name`, `alias`) VALUES (6,'24x7','7 Days A Week'),(7,'workhours','Normal Work Hours'),(8,'none','No Time Is A Good Time'),(9,'us-holidays','U.S. Holidays'),(10,'24x7_sans_holidays','24x7 Sans Holidays');
/*!40000 ALTER TABLE `nagios_timeperiod` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_timeperiod_entry`
--

LOCK TABLES `nagios_timeperiod_entry` WRITE;
/*!40000 ALTER TABLE `nagios_timeperiod_entry` DISABLE KEYS */;
INSERT INTO `nagios_timeperiod_entry` (`id`, `timeperiod_id`, `entry`, `value`) VALUES (1,NULL,'sunday','00:00-24:00'),(2,NULL,'monday','00:00-24:00'),(3,NULL,'tuesday','00:00-24:00'),(4,NULL,'wednesday','00:00-24:00'),(5,NULL,'thursday','00:00-24:00'),(6,NULL,'friday','00:00-24:00'),(7,NULL,'saturday','00:00-24:00'),(8,NULL,'monday','09:00-17:00'),(9,NULL,'tuesday','09:00-17:00'),(10,NULL,'wednesday','09:00-17:00'),(11,NULL,'thursday','09:00-17:00'),(12,NULL,'friday','09:00-17:00'),(13,NULL,'january 1','00:00-00:00'),(14,NULL,'monday -1 may','00:00-00:00'),(15,NULL,'monday 1 september','00:00-00:00'),(16,NULL,'july 4','00:00-00:00'),(17,NULL,'thursday -1 november','00:00-00:00'),(18,NULL,'december 25','00:00-00:00'),(19,NULL,'january 1','00:00-00:00'),(20,NULL,'monday -1 may','00:00-00:00'),(21,NULL,'monday 1 september','00:00-00:00'),(22,NULL,'july 4','00:00-00:00'),(23,NULL,'thursday -1 november','00:00-00:00'),(24,NULL,'december 25','00:00-00:00'),(25,NULL,'sunday','00:00-24:00'),(26,NULL,'monday','00:00-24:00'),(27,NULL,'tuesday','00:00-24:00'),(28,NULL,'wednesday','00:00-24:00'),(29,NULL,'thursday','00:00-24:00'),(30,NULL,'friday','00:00-24:00'),(31,NULL,'saturday','00:00-24:00'),(32,6,'sunday','00:00-24:00'),(33,6,'monday','00:00-24:00'),(34,6,'tuesday','00:00-24:00'),(35,6,'wednesday','00:00-24:00'),(36,6,'thursday','00:00-24:00'),(37,6,'friday','00:00-24:00'),(38,6,'saturday','00:00-24:00'),(39,7,'monday','09:00-17:00'),(40,7,'tuesday','09:00-17:00'),(41,7,'wednesday','09:00-17:00'),(42,7,'thursday','09:00-17:00'),(43,7,'friday','09:00-17:00'),(44,9,'january 1','00:00-00:00'),(45,9,'monday -1 may','00:00-00:00'),(46,9,'monday 1 september','00:00-00:00'),(47,9,'july 4','00:00-00:00'),(48,9,'thursday -1 november','00:00-00:00'),(49,9,'december 25','00:00-00:00'),(50,10,'january 1','00:00-00:00'),(51,10,'monday -1 may','00:00-00:00'),(52,10,'monday 1 september','00:00-00:00'),(53,10,'july 4','00:00-00:00'),(54,10,'thursday -1 november','00:00-00:00'),(55,10,'december 25','00:00-00:00'),(56,10,'sunday','00:00-24:00'),(57,10,'monday','00:00-24:00'),(58,10,'tuesday','00:00-24:00'),(59,10,'wednesday','00:00-24:00'),(60,10,'thursday','00:00-24:00'),(61,10,'friday','00:00-24:00'),(62,10,'saturday','00:00-24:00');
/*!40000 ALTER TABLE `nagios_timeperiod_entry` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping data for table `nagios_timeperiod_exclude`
--

LOCK TABLES `nagios_timeperiod_exclude` WRITE;
/*!40000 ALTER TABLE `nagios_timeperiod_exclude` DISABLE KEYS */;
/*!40000 ALTER TABLE `nagios_timeperiod_exclude` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2009-04-01  8:16:03
