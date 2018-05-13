<?php

/*
 lilac-reloaded - A Nagios Configuration Tool
Copyright (C) 2012 Rene Hadler

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
 Filename: 54.php
Description:
The class definition and methods for the updateLilac class
*/

require_once "base_class.php";

class updateLilac extends updateBase
{
	private $ut_version = 54;
	
	public function __construct()
	{
		parent::__construct();
	}
	
	public function getInfo()
	{
		return "updateLilac-class for updating lilac-reloaded to version " . $ut_version;
	}
	
	public function getUpdates()
	{
		$updates = array();
	
		$updates[] = "Updating configuration file lilac-conf.php to new format";
		$updates[] = "Updating database to new configuration store, adding new required fields";
	
		return $updates;
	}
	
	public function executeUpdate()
	{
		$result = $this->updateLilacConf();
		if($result)
			return $result;
		
		$result = $this->updateLilacDB();
		if($result)
			return $result;
		
		return;
	}
	
	private function updateLilacConf()
	{
		if(!file_exists($this->rootdir . "/includes/lilac-conf.php"))
			return "Configuration file lilac-conf.php does not exist, is your installation in a sane state?";
		
		if(!file_exists($this->rootdir . "/includes/lilac-conf.php.dist"))
			return "Configuration template does not exist, make sure your current installation contains a lilac-conf.php.dist file in the includes directory.";
		
		$dbConfig = $this->getConfig();
		
		if($dbConfig === false)
			return "Could not fetch configuration state, is your installation in a sane state??";
		
		$conf = file_get_contents($this->rootdir . "/includes/lilac-conf.php.dist");
		$conf = str_replace("%%DSN%%", $dbConfig["db_dsn"], $conf);
		$conf = str_replace("%%USERNAME%%", $dbConfig["db_username"], $conf);
		$conf = str_replace("%%PASSWORD%%", $dbConfig["db_password"], $conf);
		$conf = str_replace("%%TIMEZONE%%", "date_default_timezone_set('" . date_default_timezone_get() . "');", $conf);
		$ret = file_put_contents($this->rootdir . "/includes/lilac-conf.php", $conf);
		
		if($ret === false)
			return "Configuration file lilac-conf.php could not be written, please check file permissions.";
		
		return;
	}
	
	private function updateLilacDB()
	{
		if(!file_exists($this->rootdir . "/includes/lilac-conf.php"))
			return "Configuration file lilac-conf.php does not exist, is your installation in a sane state?";
		
		$dbConfig = $this->getConfig();
		
		if($dbConfig === false)
			return "Could not fetch configuration state, is your installation in a sane state??";
		
		exec("mysql -h " . $dbConfig["db_host"] . " -u " . $dbConfig["db_username"] . " -p'" . $dbConfig["db_password"] . "' " . $dbConfig["db_name"] . " < " . $this->rootdir . "/sqldata/update/" . $this->ut_version . ".sql", $output, $retVal);
		if($retVal != 0) {
			return "Failed to import database update-schema. Error message: " . $output[0];
		}		
		
		$dbConn = mysql_connect($dbConfig["db_host"], $dbConfig["db_username"], $dbConfig["db_password"]);
		if(mysql_select_db($dbConfig["db_name"], $dbConn)) {
			mysql_query("ALTER TABLE `nagios_main_configuration` ADD `temp_path` VARCHAR( 255 ) NOT NULL;", $dbConn);
			mysql_query("ALTER TABLE `nagios_main_configuration` ADD `check_for_updates` TINYINT( 4 ) NOT NULL;", $dbConn);
			mysql_query("ALTER TABLE `nagios_main_configuration` ADD `check_for_orphaned_hosts` TINYINT( 4 ) NOT NULL;", $dbConn);
			mysql_query("ALTER TABLE `nagios_main_configuration` ADD `bare_update_check` TINYINT( 4 ) NOT NULL;", $dbConn);
			
			// We add a default value for temp_path
			mysql_query("UPDATE `nagios_main_configuration` SET `temp_path`='/tmp';", $dbConn);
		} else
		{
			return "Failed to write database update on updateLilacDB()";
		}
		
		return;
	}
} 

?>