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
			$deptype = $dep_type;
			if ($relObj !== $object) {  // ensure that we don't try to copy a reference to ourselves
				switch($dep_type) {
					case "contact":
						$tmpObj = NagiosContactPeer::retrieveByPK($relObj->getId());
						break;
					case "contactmember":
						$tmpObj = NagiosContactPeer::retrieveByPK($relObj->getContactId());
						$deptype = "contact";
						break;
					case "contactgroup":
						$tmpObj = NagiosContactGroupPeer::retrieveByPK($relObj->getContactgroup());
						break;
					case "timeperiod":
						$tmpObj = NagiosTimeperiodPeer::retrieveByPK($relObj->getTimeperiodId());
						break;
					case "host":
						$tmpObj = NagiosHostPeer::retrieveByPK($relObj->getId());
						break;
					case "hostmember":
						if($relObj->getNagiosHost() !== null) {
							$tmpObj = $relObj->getNagiosHost();
							$deptype = "host";
						} elseif($relObj->getNagiosHostTemplate() !== null) {
							$tmpObj = $relObj->getNagiosHostTemplate();
							$deptype = "hosttemplate";
						}
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
					case "servicemember":
						if($relObj->getNagiosService() !== null) {
							$tmpService = $relObj->getNagiosService();
							$deptype = "service";
							if($tmpService->getHost() !== null) {
								$parent=NagiosHostPeer::retrieveByPK($tmpService->getHost());
								$parent_type="host";
							} elseif($tmpService->getHostTemplate() !== null) {
								$parent=NagiosHostTemplatePeer::retrieveByPK($tmpService->getHostTemplate());
								$parent_type="hosttemplate";
							}
						}
						else {
							$tmpObj = $relObj->getNagiosServiceTemplate();
							$deptype = "servicetemplate";
						}
						break;
				}
				if($deptype=="service") {
					$this->insertAction($tmpService->getDescription(),$deptype,"modify",$parent->getName(),$parent_type);
				} else {
					$this->insertAction($tmpObj->getName(),$deptype,"modify");
				}
			}
		}
	}

	function renameAction($newname,$oldname,$type,$action="add") {
		
		global $database_lilac;
		
		$date=date("Y-m-d H:i:s");
		
		$this->insertAction($oldname,$type,'delete');
				
		switch($type) {
			
			case "command":
				
				$tmpCommand = new NagiosCommandPeer();
				$tmpCommand = $tmpCommand->getByName($oldname);
				
				// Contacts
				$this->renameObject($tmpCommand,"contactmember",$tmpCommand->getNagiosContactNotificationCommands());
					
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
			
			case "contact":
			
				$tmpContact = new NagiosContactPeer();
				$tmpContact = $tmpContact->getByName($oldname);
			
				// ContactGroups
				$this->renameObject($tmpContact,"contactgroup",$tmpContact->getNagiosContactGroupMembers());
				
				// Hosts
				$this->renameObject($tmpContact,"hostmember",$tmpContact->getNagiosHostContactMembers());
								
				// Services
				$this->renameObject($tmpContact,"servicemember",$tmpContact->getNagiosServiceContactMembers());
			
				break;
			
			case "contactgroup":
			
				$tmpContactGroup = new NagiosContactGroupPeer();
				$tmpContactGroup = $tmpContactGroup->getByName($oldname);
			
				// Hosts
				$this->renameObject($tmpContactGroup,"hostmember",$tmpContactGroup->getNagiosHostContactgroups());
								
				// Services
				$this->renameObject($tmpContactGroup,"servicemember",$tmpContactGroup->getNagiosServiceContactGroupMembers());
			
				break;
			
			case "timeperiod":
			
				$tmpTimeperiod = new NagiosTimeperiodPeer();
				$tmpTimeperiod = $tmpTimeperiod->getByName($oldname);
			
				// Timeperiods
				$this->renameObject($tmpTimeperiod,"timeperiod",$tmpTimeperiod->getNagiosTimeperiodExcludesRelatedByExcludedTimeperiod());
			
				// Contacts
				$this->renameObject($tmpTimeperiod,"contact",$tmpTimeperiod->getNagiosContactsRelatedByHostNotificationPeriod());
				$this->renameObject($tmpTimeperiod,"contact",$tmpTimeperiod->getNagiosContactsRelatedByServiceNotificationPeriod());
				
				// Hosts
				$this->renameObject($tmpTimeperiod,"host",$tmpTimeperiod->getNagiosHostsRelatedByCheckPeriod());
				$this->renameObject($tmpTimeperiod,"host",$tmpTimeperiod->getNagiosHostsRelatedByNotificationPeriod());	
							
				// HostTemplates
				$this->renameObject($tmpTimeperiod,"hosttemplate",$tmpTimeperiod->getNagiosHostTemplatesRelatedByCheckPeriod());
				$this->renameObject($tmpTimeperiod,"hosttemplate",$tmpTimeperiod->getNagiosHostTemplatesRelatedByNotificationPeriod());
										
				// Services
				$this->renameObject($tmpTimeperiod,"service",$tmpTimeperiod->getNagiosServicesRelatedByCheckPeriod());
				$this->renameObject($tmpTimeperiod,"service",$tmpTimeperiod->getNagiosServicesRelatedByNotificationPeriod());	
				
				// ServiceTemplates
				$this->renameObject($tmpTimeperiod,"servicetemplate",$tmpTimeperiod->getNagiosServiceTemplatesRelatedByCheckPeriod());
				$this->renameObject($tmpTimeperiod,"servicetemplate",$tmpTimeperiod->getNagiosServiceTemplatesRelatedByNotificationPeriod());
				
				break;
			
			case "hostgroup":
			
				$tmpHostGroup = new NagiosHostgroupPeer();
				$tmpHostGroup = $tmpHostGroup->getByName($oldname);
			
				// Hosts
				$this->renameObject($tmpHostGroup,"hostmember",$tmpHostGroup->getNagiosHostgroupMemberships());
											
				break;
			
			case "servicegroup":
			
				$tmpServiceGroup = new NagiosServiceGroupPeer();
				$tmpServiceGroup = $tmpServiceGroup->getByName($oldname);
			
				// Hosts
				$this->renameObject($tmpServiceGroup,"servicemember",$tmpServiceGroup->getNagiosServiceGroupMembers());
											
				break;
			
			case "host":		
				sqlrequest($database_lilac,"DELETE FROM export_job_history 
					WHERE parent_name='".$oldname."'
					AND parent_type='".$type."'"
				);
			
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
