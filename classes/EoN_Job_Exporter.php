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

	function renameAction($newname,$oldname,$type,$action="add") {
		
		global $database_lilac;
		
		$date=date("Y-m-d H:i:s");
		
		sqlrequest($database_lilac,"DELETE FROM export_job_history 
			WHERE parent_name='".$oldname."'
			AND parent_type='".$type."'"
		);
		$this->insertAction($oldname,$type,'delete');
				
		switch($type) {
			case "command":
				
				$tmpCommand = NagiosCommandPeer::getByName($oldname);
				
				// Contacts
				foreach ($tmpCommand->getNagiosContactNotificationCommands() as $relObj) {
					if ($relObj !== $tmpCommand) {  // ensure that we don't try to copy a reference to ourselves
						$tmpContact = NagiosContactPeer::retrieveByPK($relObj->getContactId());
						$this->insertAction($tmpContact->getName(),"contact","modify");
					}
				}
				
				// HostTemplates
				$tmpHostTemplates = (object) array_merge((array) $tmpCommand->getNagiosHostTemplatesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosHostTemplatesRelatedByEventHandler());	
				foreach ($tmpHostTemplates as $relObj) {
					if ($relObj !== $tmpCommand) {
						$tmpHostTemplate = NagiosHostTemplatePeer::retrieveByPK($relObj->getId());
						$this->insertAction($tmpHostTemplate->getName(),"hosttemplate","modify");
					}
				}
				
				// Hosts
				$tmpHosts = (object) array_merge((array) $tmpCommand->getNagiosHostsRelatedByCheckCommand(),(array) $tmpCommand->getNagiosHostsRelatedByEventHandler());
				foreach ($tmpHosts as $relObj) {
					if ($relObj !== $tmpCommand) {
						$tmpHost = NagiosHostPeer::retrieveByPK($relObj->getId());
						$this->insertAction($tmpHost->getName(),"host","modify");
					}
				}

				// ServiceTemplates
				$tmpServiceTemplates = (object) array_merge((array) $tmpCommand->getNagiosServiceTemplatesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosServiceTemplatesRelatedByEventHandler());
				foreach ($tmpServiceTemplates as $relObj) {
					if ($relObj !== $tmpCommand) {  // ensure that we don't try to copy a reference to ourselves
						$tmpServiceTemplate = NagiosServiceTemplatePeer::retrieveByPK($relObj->getId());
						$this->insertAction($tmpServiceTemplate->getName(),"servicetemplate","modify");
					}
				}
				
				// Services
				$tmpServices = (object) array_merge((array) $tmpCommand->getNagiosServicesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosServicesRelatedByEventHandler());
				foreach ($tmpServices as $relObj) {
					if ($relObj !== $tmpCommand) {  // ensure that we don't try to copy a reference to ourselves
						$tmpService = NagiosServicePeer::retrieveByPK($relObj->getId());
						if($tmpService->getHost() !== null) {
							$parent=NagiosHostPeer::retrieveByPK($tmpService->getHost());
							$parent_type="host";
						} elseif($tmpService->getHostTemplate() !== null) {
							$parent=NagiosHostTemplatePeer::retrieveByPK($tmpService->getHostTemplate());
							$parent_type="hostTemplate";
						}
						$this->insertAction($tmpService->getDescription(),"service","modify",$parent->getName(),$parent_type);
					}
				}
				break;
				
			case "host":		
				// Get Services List
				$tmpHost = NagiosHostPeer::getByName($oldname);
				if($tmpHost->getInheritedServices() !== null) {
					foreach($tmpHost->getInheritedServices() as $tmpService) {
						if($action=="add") {
							$this->insertAction($tmpService->getDescription(),"service","delete",$oldname,$type);
						}
						$this->insertAction($tmpService->getDescription(),"service",$action,$newname,$type);
					}
				}
				if($tmpHost->getNagiosServices() !== null) {
					foreach($tmpHost->getNagiosServices() as $tmpService) {
						if($action=="add") {
							$this->insertAction($tmpService->getDescription(),"service","delete",$oldname,$type);
						}
						$this->insertAction($tmpService->getDescription(),"service",$action,$newname,$type);
					}
				}
				break;
		}
		
	}

	function insertAction($name, $type, $action, $parent_name=NULL, $parent_type=NULL) {

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
			sqlrequest($database_lilac,"DELETE FROM export_job_history 
				WHERE name='".$name."'
				AND type='".$type."'
				AND parent_name='".$parent_name."'
				AND parent_type='".$parent_type."'"
			);	
			sqlrequest($database_lilac,"INSERT INTO export_job_history 
				(name,type,parent_name,parent_type,date,user,action) 
				VALUES ('".$name."', '".$type."', '".$parent_name."', '".$parent_type."', '".$date."', '".$_COOKIE['user_name']."', '".$action."')"
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
