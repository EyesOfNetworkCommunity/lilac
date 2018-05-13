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
	private $ut_version = 55;
	
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
	
		$updates[] = "Small update of nagios label database";
	
		return $updates;
	}
	
	public function executeUpdate()
	{
		$result = $this->updateLilacDB();
		if($result)
			return $result;
		
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
			mysql_query("UPDATE `lilac_configuration` SET `value`='" . $this->ut_version . "' WHERE `key`='db_build';", $dbConn);
		} else
		{
			return "Failed to write database update on updateLilacDB()";
		}
		
		return;
	}
} 

?>