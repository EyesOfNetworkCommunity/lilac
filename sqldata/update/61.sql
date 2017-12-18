DROP TABLE IF EXISTS `export_job_history`;
CREATE TABLE `export_job_history` (
        `id` INT(11) NOT NULL AUTO_INCREMENT,
        `name` VARCHAR(50) NOT NULL,
        `type` VARCHAR(50) NOT NULL,
        `parent_id` VARCHAR(50) DEFAULT NULL,
        `parent_type` VARCHAR(50) DEFAULT NULL,
        `date` DATETIME NOT NULL,
        `user` VARCHAR(50) NOT NULL,
        `action` VARCHAR(50) NOT NULL,
        PRIMARY KEY (`id`)
) ENGINE=MyISAM COMMENT='Actions history for differential export job';
