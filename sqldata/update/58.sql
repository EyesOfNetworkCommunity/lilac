ALTER TABLE `nagios_cgi_configuration`
  ADD `authorized_for_read_only` VARCHAR(255),
  ADD `color_transparency_index_r` INTEGER,
  ADD `color_transparency_index_g` INTEGER,
  ADD `color_transparency_index_b` INTEGER,
  ADD `result_limit` INTEGER;

REPLACE INTO `label`(section, name, label)  VALUES('nagios_cgi_desc', 'authorized_for_read_only', 'A comma-delimited list of usernames that have read-only rights in the CGIs. This will block any service or host commands normally shown on the extinfo CGI pages. It will also block comments from being shown to read-only users.');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_cgi_desc', 'color_transparency_index', 'These options set the r,g,b values of the background color used the statusmap CGI, so normal browsers that can''t show real png transparency set the desired color as a background color instead (to make it look pretty). Defaults to white: (R,G,B) = (255,255,255).');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_cgi_desc', 'result_limit', 'The number of services being shown in Nagios at the same time.');

ALTER TABLE `nagios_main_configuration`
  ADD `log_current_states` TINYINT,
  ADD `check_workers` INTEGER,
  ADD `query_socket` VARCHAR(255);

REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'log_current_states', ' This option determines whether or not Nagios will log host and service current states at the beginning of a newly created log file after log rotation occurs. In Nagios Core 3, current states were always logged after a log rotation. In Nagios Core 4, the default behavior is to log current states after log rotation, but it can be disabled by setting log_current_states=0. In a large installation, disabling the logging of current states after log rotation can save considerable amounts of disk space, especially if the logs are rotated frequently. This risk is that, if logs are aged off and deleted, you may not have sufficient state information to calculate things like availability. <br><br>0 = Disable logging current state after log rotation<br>1 = Enable logging current state after log rotation (default).');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'check_workers', 'This setting specifies how many worker process should be started when Nagios Core starts. Worker processes are used to perform host and service checks. If the number of workers is not specified, a default number of workers is determined based on the number of CPU cores on the system (1.5 workers per core). If not specified, there is always a minimum of 4 workers.');
REPLACE INTO `label`(section, name, label)  VALUES('nagios_main_desc', 'query_socket', 'This is the path to the Unix-domain socket used by the <a href="http://nagios.sourceforge.net/docs/nagioscore/4/en/whatsnew.html#qh">query handler</a> interface. The default value is /usr/local/nagios/var/rw/nagios.qh.');