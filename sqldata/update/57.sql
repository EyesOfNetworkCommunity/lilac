DROP TABLE IF EXISTS `nagios_host_custom_object_var`;

CREATE TABLE `nagios_host_custom_object_var`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`host` INTEGER,
	`host_template` INTEGER,
	`var_name` VARCHAR(255) NOT NULL,
	`var_value` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `nagios_host_custom_object_var_U_1` (`host`, `var_name`),
	UNIQUE INDEX `nagios_host_custom_object_var_U_2` (`host_template`, `var_name`),
	INDEX `nagios_host_custom_object_var_I_1` (`host`),
	INDEX `nagios_host_custom_object_var_I_2` (`host_template`),
	CONSTRAINT `nagios_host_custom_object_var_FK_1`
		FOREIGN KEY (`host`)
		REFERENCES `nagios_host` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `nagios_host_custom_object_var_FK_2`
		FOREIGN KEY (`host_template`)
		REFERENCES `nagios_host_template` (`id`)
		ON DELETE CASCADE
) ENGINE=MyISAM COMMENT='Custom Object Variables for Host';


DROP TABLE IF EXISTS `nagios_service_custom_object_var`;

CREATE TABLE `nagios_service_custom_object_var`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`service` INTEGER,
	`service_template` INTEGER,
	`var_name` VARCHAR(255) NOT NULL,
	`var_value` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `nagios_service_custom_object_var_U_1` (`service`, `var_name`),
	UNIQUE INDEX `nagios_service_custom_object_var_U_2` (`service_template`, `var_name`),
	INDEX `nagios_service_custom_object_var_I_1` (`service`),
	INDEX `nagios_service_custom_object_var_I_2` (`service_template`),
	CONSTRAINT `nagios_service_custom_object_var_FK_1`
		FOREIGN KEY (`service`)
		REFERENCES `nagios_service` (`id`)
		ON DELETE CASCADE,
	CONSTRAINT `nagios_service_custom_object_var_FK_2`
		FOREIGN KEY (`service_template`)
		REFERENCES `nagios_service_template` (`id`)
		ON DELETE CASCADE
) ENGINE=MyISAM COMMENT='Custom Object Variables for Service';


DROP TABLE IF EXISTS `nagios_contact_custom_object_var`;

CREATE TABLE `nagios_contact_custom_object_var`
(
	`id` INTEGER NOT NULL AUTO_INCREMENT,
	`contact` INTEGER,
	`var_name` VARCHAR(255) NOT NULL,
	`var_value` VARCHAR(255) NOT NULL,
	PRIMARY KEY (`id`),
	UNIQUE INDEX `nagios_contact_custom_object_var_U_1` (`contact`, `var_name`),
	INDEX `nagios_contact_custom_object_var_I_1` (`contact`),
	CONSTRAINT `nagios_contact_custom_object_var_FK_1`
		FOREIGN KEY (`contact`)
		REFERENCES `nagios_contact` (`id`)
		ON DELETE CASCADE
) ENGINE=MyISAM COMMENT='Custom Object Variables for Contact';