<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2013 Rene Hadler
Copyright (C) 2018 EyesOfNetwork Team

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
	Filename: config.inc
	Description:
	Starting-point
*/

require_once(dirname(__FILE__) . "/init.inc.php");	// This should be moved into other files.

if ( ! defined( "PATH_SEPARATOR" ) ) {
  if ( strpos( $_ENV[ "OS" ], "Win" ) !== false )
    define( "PATH_SEPARATOR", ";" );
  else define( "PATH_SEPARATOR", ":" );
}

require_once('propel/Propel.php');
Propel::init(LILAC_FS_ROOT . "includes/lilac-conf.php");
include_once(LILAC_FS_ROOT . 'importer/classes.inc.php');
include_once(LILAC_FS_ROOT . 'exporter/classes.inc.php');
include_once(LILAC_FS_ROOT . 'autodiscovery/classes.inc.php');
include_once(LILAC_FS_ROOT . 'includes/output.php');
include_once(LILAC_FS_ROOT . 'includes/lilac.inc');
include_once(LILAC_FS_ROOT . 'includes/eon.php');
include_once(LILAC_FS_ROOT . 'classes/Module.php');
include_once(LILAC_FS_ROOT . 'classes/LilacCoreModule.php');

/* Check mysql connection */
try {
    Propel::getConnection();
} catch (Exception $e) {
    exit('Connection to database failed: ' . $e->getMessage());
}

include_once(LILAC_FS_ROOT . 'includes/update.php');

/* Update check */
if(basename($_SERVER['PHP_SELF']) != "update.php") {
	$cUpdate = new lilacUpdate();
	if($cUpdate->getCurrentDBVersion() != $cUpdate->getCurrentAPPVersion()) {
		header("Location: update.php");
		die();
	}
}

/* We get the physical location of logos and images nagios uses */
// Root of nagios logos directory
// Set a default first
$sys_config['logos_path'] = '/usr/share/nagios/htdocs/images/logos/';

// We try now to get the path by quering the database for the physical path
$logosPath = Lilac::get_physical_nagios_logos_path();
if($logosPath)
	$sys_config['logos_path'] = $logosPath . "/images/logos/";

// Root of lilac-reloaded images directory
$path_config['image_root'] = dirname($_SERVER['SCRIPT_NAME']) . '/images/';		

?>
