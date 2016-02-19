#!/usr/bin/php
<?php
/*
#########################################
#
# Copyright (C) 2011 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# APPLICATION : eonweb configurator 
# DESCRIPTION : XML Exporter Client
#
# LICENCE :
# This program is free software; you can redistribute it and/or
# modify it under the terms of the GNU General Public License
# as published by the Free Software Foundation; either version 2
# of the License, or (at your option) any later version.
# This program is distributed in the hope that it will be useful,
# but WITHOUT ANY WARRANTY; without even the implied warranty of
# MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
# GNU General Public License for more details.
#
#########################################
*/

include_once(dirname(__FILE__).'/../includes/config.inc');

// Params initialization
$parms = $_SERVER["argv"];
array_shift($parms);

if (sizeof($parms)) {
	/* setup defaults */
	foreach($parms as $parameter) {
		@list($arg, $value) = @explode("=", $parameter);

		switch ($arg) {
		
		case "--object":
			$object=$value;
			break;
		
		case "--ids":
			$ids=$value;
			break;
		
		case "--file":
			$file=$value;
			break;

		case "-V":
		case "-h":
		case "--help":
			display_help();
			break;
		}
	}
}
else {
	display_help();
}

// Params check
if (!isset($object) || !isset($ids) || !isset($file)) {
	display_help();
}

// Params help function
function display_help() {
	echo "\nUsage: ".basename($_SERVER["argv"][0])." --object=[lilac_object] --ids=[ids_comma_separated] --file=[output_file]\n\n";
	echo "  --object=Contact|ContactGroup|Command|Host|Hostgroup|HostTemplate|Service|ServiceTemplate|ServiceGroup|Timeperiod\n";
	echo "  --ids=1,2,...\n";
	echo "  --file=path_to_xml_file\n\n";
	exit(0);
}

// Begin Export
$export=new EoN_Exporter();		
$export->EoN_Export_Start($object);

$id_array=explode(",",$ids);

foreach($id_array as $id) {
	$msg_export=$export->EoN_Export_Object($id);
}
if($msg_export==false) {
	echo "ERROR : " . $object . " Not implemented yet.\n";
	exit(1);
}
else {
	$export->EoN_Export_Save($file);
	echo $object."(s) exported.\n";
	exit(0);
}

?>
