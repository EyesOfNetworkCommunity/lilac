<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2007 Taylor Dondich

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
	Filename: init.inc.php
	Description:
	Starting-point
*/

define("LILAC_VERSION", "2.5");
define("LILAC_NAME", "Eonweb Configurator");
define("LILAC_FS_ROOT", dirname(__FILE__) . "/../");

// Setup include path to initially include from our library directory before including anything else.
set_include_path(dirname(__FILE__) . "/../library/:" . dirname(__FILE__) . "/../classes/:" . get_include_path());

require_once("Log.php");

function installer_exists() {
	if(file_exists(dirname(__FILE__) . "/../install.php")) {
		return true;
	}
}

if(basename($_SERVER['PHP_SELF']) != "install.php" && installer_exists() && !file_exists(dirname(__FILE__) . "/lilac-conf.php")) {
	header("Location: install.php");
	die();
}
?>
