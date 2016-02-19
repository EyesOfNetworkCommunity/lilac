#!/usr/bin/php
<?php
/*
#########################################
#
# Copyright (C) 2015 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# APPLICATION : eonweb configurator 
# DESCRIPTION : XML Importer Client
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
			
		case "--file":
			$file=$value;
			break;
		
		case "--no_contacts":
			$ImportOptions["no_contacts"]=true;
			break;

		case "--no_contactgroups":
			$ImportOptions["no_contactgroups"]=true;
			break;
			
		case "--no_timeperiods":
			$ImportOptions["no_timeperiods"]=true;
			break;
		
		case "--verbose":
			$verbose=true;
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
if (!isset($file)) {
	echo "Please specify the path to your xml exported file !\n";
	exit(1);
}
elseif(!file_exists($file)) {
	echo "The file $file does not exists !\n";
	exit(1);
}

// Params help function
function display_help() {
	echo "Usage: ".basename($_SERVER["argv"][0])." --file=[input_file] [--no_contacts] [--no_contactgroups] [--no_timeperiods] [--verbose]\n";
	exit(0);
}

// Begin Import
$import = new EoN_Importer($ImportOptions);
$import->EoN_Import_Start($file);
$import_msg=$import->EoN_Import_Object();

if($import_msg==false) {
	echo "ERROR : Not implemented yet.\n";
	exit(1);
}
else {
	// Verbose html output
	if(isset($verbose)) {
		$msg="\n<html>\n\n  <title>Object(s) imported</title>\n\n  <body>\n";
		$import_msg_array=array_unique($import_msg);
		unset($import_msg);
		foreach($import_msg_array as $html) {
				$msg=$msg."\n    ".$html;
		}
		echo $msg."\n  </body>\n\n</html>\n\n";
	}
	else {
		echo "Object(s) imported.\n";
	}
	
	exit(0);
}

?>
