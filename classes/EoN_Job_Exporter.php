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

	function renameObject($object,$dep_type,$dep_array) {
		foreach ($dep_array as $relObj) {
			if ($relObj !== $object) {  // ensure that we don't try to copy a reference to ourselves
				switch($dep_type) {
					case "contact":
						$tmpObj = NagiosContactPeer::retrieveByPK($relObj->getContactId());
						break;
					case "host":
						$tmpObj = NagiosHostPeer::retrieveByPK($relObj->getId());
						break;
					case "hosttemplate":
						$tmpObj = NagiosHostTemplatePeer::retrieveByPK($relObj->getId());
						break;
					case "servicetemplate":
						$tmpObj = NagiosServiceTemplatePeer::retrieveByPK($relObj->getId());
						break;
					case "service":
						$tmpService = NagiosServicePeer::retrieveByPK($relObj->getId());
						if($tmpService->getHost() !== null) {
							$parent=NagiosHostPeer::retrieveByPK($tmpService->getHost());
							$parent_type="host";
						} elseif($tmpService->getHostTemplate() !== null) {
							$parent=NagiosHostTemplatePeer::retrieveByPK($tmpService->getHostTemplate());
							$parent_type="hosttemplate";
						}
						break;
				}
				if($dep_type=="service") {
					$this->insertAction($tmpService->getDescription(),$dep_type,"modify",$parent->getName(),$parent_type);
				} else {
					$this->insertAction($tmpObj->getName(),$dep_type,"modify");
				}
			}
		}
	}

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
				$this->renameObject($tmpCommand,"contact",$tmpCommand->getNagiosContactNotificationCommands());
					
				// HostTemplates
				$tmpHostTemplates = (object) array_merge((array) $tmpCommand->getNagiosHostTemplatesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosHostTemplatesRelatedByEventHandler());	
				$this->renameObject($tmpCommand,"hosttemplate",$tmpHostTemplates);
				
				// Hosts
				$tmpHosts = (object) array_merge((array) $tmpCommand->getNagiosHostsRelatedByCheckCommand(),(array) $tmpCommand->getNagiosHostsRelatedByEventHandler());
				$this->renameObject($tmpCommand,"host",$tmpHosts);

				// ServiceTemplates
				$tmpServiceTemplates = (object) array_merge((array) $tmpCommand->getNagiosServiceTemplatesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosServiceTemplatesRelatedByEventHandler());
				$this->renameObject($tmpCommand,"servicetemplate",$tmpServiceTemplates);
				
				// Services
				$tmpServices = (object) array_merge((array) $tmpCommand->getNagiosServicesRelatedByCheckCommand(),(array) $tmpCommand->getNagiosServicesRelatedByEventHandler());
				$this->renameObject($tmpCommand,"service",$tmpServices);
				
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
			case "contact":
			
				break;
			case "service":
			
				break;
			case "hostgroup":
			
				break;
			case "servicegroup":
			
				break;
			case "contactgroup":
			
				break;
			case "timeperiod":
			
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
