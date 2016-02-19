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
	Filename: config.inc
	Description:
	Starting-point
*/

require_once(dirname(__FILE__) . "/init.inc.php");	// This should be moved into other files.


$sys_config['logos_path'] = '/srv/eyesofnetwork/nagios/share/images/logos/';		// legacy
$path_config['image_root'] = 'images/';		// legacy	

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
?>
