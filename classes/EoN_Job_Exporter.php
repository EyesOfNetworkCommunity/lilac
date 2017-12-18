<?php
/*
#########################################
#
# Copyright (C) 2017 EyesOfNetwork Team
# DEV NAME : Bastien PUJOS
# APPLICATION : eonweb configurator 
# DESCRIPTION : EoN_Exporter class
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

include_once("/srv/eyesofnetwork/eonweb/include/config.php");
include_once("/srv/eyesofnetwork/eonweb/include/function.php");

class EoN_Job_Exporter {

	function insertAction($uid, $name, $type, $action, $parent_id=NULL, $parent_type=NULL) {

		global $database_lilac;
	
		$insert=true;
		$date=date("Y-m-d H:i:s");
		
		switch ($type){
			case "nagios_main_configuration":
			case "nagios_cgi_configuration":
			case "nagios_resource":
				if(sqlrequest($database_lilac,"SELECT type FROM export_job_history WHERE type='".$type."'")->num_rows != 0){
					$insert = false;
				}
		}

		if($insert) {
			sqlrequest($database_lilac,"UPDATE export_job_history 
				SET name = '".$name."' where type = '".$type."' and uid='".$uid."'"
			);
			
			sqlrequest($database_lilac,"INSERT INTO export_job_history 
				(uid,name,type,parent_id,parent_type,date,user,action) 
				VALUES ('".$uid."','".$name."', '".$type."', '".$parent_id."', '".$parent_type."', '".$date."', '".$_COOKIE['user_name']."', '".$action."')"
			);
		}

	}

	function ModifyCfgFile($MainConfigDir, $name, $type, $parent_name, $parent_type){
		
		$lecture= file_get_contents($MainConfigDir."/objects/".$type."s.cfg");
		$writer=$lecture;		
		
		if($type == 'service'){
			preg_match_all("#define service {\\n\\thost_name\\t".$parent_name."\\n\\tservice_description\\t".$name."#", $writer, $matches, PREG_OFFSET_CAPTURE);
		}elseif($type == 'service' && $name=""){
			preg_match_all("#define service {\\n\\thost_name\\t".$parent_name."#", $writer, $matches, PREG_OFFSET_CAPTURE);
		}else{
			preg_match_all("#define ".$type." {\\n\\t".$type."_name\\t".$name."#", $writer, $matches, PREG_OFFSET_CAPTURE);
		}

		preg_match_all("#\\n}#", $writer, $match, PREG_OFFSET_CAPTURE);
		$i=count($matches[0])-1;
		for($i;$i>=0;$i--){
			$z=0;
			$debut = $matches[0][$i][1];
			while($debut>=$match[0][$z][1]){
				$z++;
			}
			$fin = $match[0][$z][1]+3;
			$writer = substr_replace($writer,"",$debut,$fin-$debut);
		}	
		return $writer;
	}
	
}
