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

// sanitizeFileName
function sanitizeFileName($dangerous_filename, $platform = 'Unix'){
	if (in_array(strtolower($platform), array('unix', 'linux'))) {
		// our list of "dangerous characters", add/remove characters if necessary
		$dangerous_characters = array(" ", '"', "'", "&", "/", "\\", "?", "#", ".");
	}
	else {
	// no OS matched? return the original filename then...
		return $dangerous_filename;
	}

	// every forbidden character is replace by an underscore
	return str_replace($dangerous_characters, '_', $dangerous_filename);
}

// Class EoN_Job_Exporter
class EoN_Job_Exporter {

	public function getInheritances($templateInheritance,$continue=true) {
		if($templateInheritance->getSourceHost() == null) {
			$tmpTemplate = NagiosHostTemplatePeer::retrieveByPK($templateInheritance->getSourceTemplate());
			if($tmpTemplate) {
				$this->insertAction($tmpTemplate->getName(),"hosttemplate","modify");
				$template_ins = $tmpTemplate->getNagiosHostTemplateInheritancesRelatedByTargetTemplate();
				foreach($template_ins as $template_in) {
					$this->getInheritances($template_in,false);
				}
			}
		} elseif($continue) {
			$tmpHost = NagiosHostPeer::retrieveByPK($templateInheritance->getSourceHost());
			$tmpTemplate = NagiosHostTemplatePeer::retrieveByPK($templateInheritance->getTargetTemplate());
			if($tmpHost) {
				$this->insertAction($tmpHost->getName(),"host","modify",$tmpTemplate->getName(),"hosttemplate");			
			}
		}
	}

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
							foreach($tmpObj->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $template_in) {
								$this->getInheritances($template_in,"modify");
							}
							$deptype = "hosttemplate";
						}
						break;
					case "hosttemplate":
						$tmpObj = NagiosHostTemplatePeer::retrieveByPK($relObj->getId());
						foreach($tmpObj->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $template_in) {
							$this->getInheritances($template_in,"modify");
						}
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
							foreach($parent->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $template_in) {
								$this->getInheritances($template_in,"modify");
							}
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
				sqlrequest($database_lilac,"DELETE FROM export_job_history 
					WHERE name='".$oldname."'
					AND parent_type='hosttemplate'"
				);
				$tmpHost = new NagiosHostPeer();
				$tmpHost = $tmpHost->getByName($oldname);
				$children_list = $tmpHost->getChildrenHosts();
				$numOfChildren = count($children_list);
				if($numOfChildren) {
					$this->renameObject($tmpHost,"host",$children_list);
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
		
			if(isset($_COOKIE['user_name'])) {
				$user_name = $_COOKIE['user_name'];	
			} else {
				$user_name = "admin";
			}	
	
			sqlrequest($database_lilac,"INSERT INTO export_job_history 
				(name,type,parent_name,parent_type,date,user,action) 
				VALUES ('".$name."', '".$type."', '".$parent_name."', '".$parent_type."', '".$date."', '".$user_name."', '".$action."')"
			);			
		}

	}
	
	function ModifyCfgFile($job, $MainConfigDir, $name, $type, $parent_name=false, $parent_type=false){
		
		if($type == 'host') {
			$file = $MainConfigDir.'/objects/hosts/'.sanitizeFileName($name).'.cfg';
		} elseif($type == 'hosttemplate') {
			$file = $MainConfigDir.'/objects/hosttemplates/'.sanitizeFileName($name).'.cfg';
		} elseif($type == 'servicetemplate') {
			$file = $MainConfigDir.'/objects/servicetemplates/'.sanitizeFileName($name).'.cfg';
		} elseif($type == 'service') {
			$file = $MainConfigDir.'/objects/hosts/'.sanitizeFileName($parent_name).'.cfg';
		} else {
			$file = $MainConfigDir.'/objects/'.$type.'s.cfg';
		}
		$lecture=file_get_contents($file);
		$writer=$lecture;		
		
		if($type == 'service' && $name){
			preg_match_all("#define service {\\n\\thost_name\\t".$parent_name."\\n\\tservice_description\\t".$name."\n#", $writer, $matches, PREG_OFFSET_CAPTURE);
			preg_match_all("#define service {\\n\\thost_name\\t".$parent_name."\\n\\tuse\\t.*\\n\\tservice_description\\t".$name."\n#", $writer, $matches, PREG_OFFSET_CAPTURE);
		}elseif($type == 'service'){
			preg_match_all("#define service {\\n\\thost_name\\t".$parent_name."\n#", $writer, $matches, PREG_OFFSET_CAPTURE);
		}else{
			preg_match_all("#define ".$type." {\\n\\t".$type."_name\\t".$name."\n#", $writer, $matches, PREG_OFFSET_CAPTURE);
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
		
		// Suppress line returns
		$writer=str_replace("\n\n\n","\n", $writer);
		
		// Write file
		$fp = @fopen($file, "w");
		fwrite($fp,$writer);
		fclose ($fp);
		
		// Notice
		if($type == 'service' && $name){
			$job->addNotice(ucfirst($type)." ".$name." has been deleted on ".$parent_type." ".$parent_name);
		}elseif($type == 'service'){
			$job->addNotice("All Services have been deleted on ".$parent_type." ".$parent_name);
		} else {
			$job->addNotice(ucfirst($type)." ".$name." has been deleted");
		}

	}
	
}
