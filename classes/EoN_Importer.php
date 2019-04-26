<?php
/*
#########################################
#
# Copyright (C) 2015 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# APPLICATION : eonweb configurator 
# DESCRIPTION : EoN_Importer class
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

class EoN_Importer {

	private $type;
	private $ImportOptions;
	private $import_msg;
	private $xml_file;
	private $xml_xpath;
	
	// Constructor
	function __construct($ImportOptions) {
		$this->ImportOptions=$ImportOptions;
	}
	
	// XML Import Initialization
	public function EoN_Import_Start($xml) {
		$this->xml_file = new DOMDocument("1.0","UTF-8");
		$this->xml_file->load($xml);
		$this->xml_xpath = new DOMXPath($this->xml_file);
		$this->type=$this->xml_file->getElementsByTagName("EoN_Export")->item(0)->getAttribute("type");
	}
	
	// Generic Imports Options
	private function EoN_Import_Options($field) {
		if($this->type==$field) { return false; }
		switch($field) {
			case "Contact":
			case "HostContactMembers":
			case "NagiosHostContactMember":
			case "ServiceContactMembers":
			case "HostNotificationPeriod":
			case "ServiceNotificationPeriod":
				return $this->ImportOptions["no_contacts"];
				break;
			case "ContactGroup":
			case "ContactGroupMembers":
			case "HostContactgroups":
			case "ServiceContactGroupMembers":
				return $this->ImportOptions["no_contactgroups"];
				break;
			case "CheckPeriod":
			case "NotificationPeriod":
			case "Timeperiod":
			case "TimeperiodEntrys":
				if($this->type=="Timeperiod") { 
					return false; 
				}
				else {
					return $this->ImportOptions["no_timeperiods"];
				}
				break;
			default:
				return false;
				break;
		}
	}
	
	// Generic Imports Function
	public function EoN_Import_Object() {
	
		global $lilac;
	
		// Call export by object type
		$type=$this->type;
		$this->import_msg[]="<h2>Results for ".$type." import</h2>\n";
		
		// Switch types
		switch($type) {
			case "Contact":
			case "ContactGroup":
			case "Command":
			case "Host":
			case "Hostgroup":
			case "HostTemplate":
			case "Service":
			case "ServiceTemplate":
			case "ServiceGroup":
			case "Timeperiod":
				$this->import_msg=$this->EoN_Import_Recursive($lilac);
				break;
			default:
				return false;
				break;
		}
		
		return $this->import_msg;
		
	}
	
	// XML to Array
	private function EoN_XML_Array($object) {

		global ${$object->nodeName};
	
		$notvalues = ${$object->nodeName};
		$children = $object->childNodes;

		for($i=0; $i<$children->length; $i++) {
			$child = $children->item($i);
			$name=$child->nodeName;

			if($name != '#text' && $child->getAttribute("object")!="true" && !isset($notvalues[$name]) && !isset($notvalues["0"][$name])) {
				$nodeValue=$object->getElementsByTagName($child->nodeName)->item(0)->nodeValue;
				if($nodeValue!="") {
					$result[$child->nodeName]=$nodeValue;
				}
			}
		}
		
		return $result;
		
	}

	// XML DomNodeList to Reverse Array
	private function EoN_XML_Array_Reverse($domnodelist) {
		$return = array();
		for ($i = 0; $i < $domnodelist->length; ++$i) {
			$return[] = $domnodelist->item($i);
		}
		return array_reverse($return);
	}
	
	// Generic Import
	private function EoN_Import_Recursive($lilac) {
		
		global $lilac;
		
		// Build Xpath request
		$xml_request="//*[name()!='Service' and @object='true']";
		$objects = $this->xml_xpath->query($xml_request);

		// Convert DomNodeList to a reversed Array
		$objects=$this->EoN_XML_Array_Reverse($objects);

		// Import Each Main Objects
		foreach($objects as $object) {
			
			// Get type, id and name
			$type=$object->nodeName;
			global ${$type};

			$object_class="Nagios".$type;
			$object_exist=strtolower($type)."_exists";
			$result=$this->EoN_XML_Array($object);
			$id = $object->getAttribute("id");		
			$name = $object->getElementsByTagName("Name")->item(0)->nodeValue;	

			// Check if unique value
			if(!isset($array_global[$type][$id])) {
		
				$array_global[$type][$id]=$id;
						
				// Update
				if($lilac->$object_exist($name)){
				
					// Do nothing if option is defined
					if($this->EoN_Import_Options($type)) {				
						$this->import_msg[]=$this->EoN_Msg_Success($type,"noupdate","gray",$name);
					}
					else {
						// --- Update each field
						$tmp_object_name=$object_class."Peer";
						$tmp_object=new $tmp_object_name();
						$object_sql=$tmp_object->getByName($name);
						foreach($result as $result_field => $result_value) {
							$function="set".$result_field;
							$object_sql->$function($result_value);
						}
						// --- Delete existing dependencies
						if(isset(${$type})) {
							foreach(${$type} as $dependtype => $depenvalues) {
								// Do nothing if option is defined
								if($this->EoN_Import_Options($dependtype)) {}
								elseif($dependtype!="0" && $dependtype!="Services") {
									$object_delete_func="getNagios".$dependtype;
									if($this->type=="Host") {
										if($type!="Host") {
											foreach($object_sql->$object_delete_func() as $object_delete) {
												$object_delete->delete();
											}
										}
									}
									elseif($this->type=="Service") {
										if($type!="Host" && $type!="HostTemplate") {
											foreach($object_sql->$object_delete_func() as $object_delete) {
												$object_delete->delete();
											}
										}
									}
									else {
										foreach($object_sql->$object_delete_func() as $object_delete) {
											$object_delete->delete();
										}	
									}
								}
							}
						}
						
						$object_sql->save();
						$this->import_msg[]=$this->EoN_Msg_Success($type,"update","gray",$name);
					}
				}
				
				// Insert
				else {
					// Do nothing if option is defined
					if($this->EoN_Import_Options($type)) {
						$this->import_msg[]=$this->EoN_Msg_Success($type,"nonew","blue",$name);
					}
					else {
						$object_sql = new $object_class();
						foreach($result as $result_field => $result_value) {
							$function="set".$result_field;
							$object_sql->$function($result_value);
						}
						$object_sql->save();
						$this->import_msg[]=$this->EoN_Msg_Success($type,"new","blue",$name);
					}
				}
				
				// Import Links
				$this->EON_Import_Links($type,$id,$name,$object_sql);
				
				// Import Host Inheritance
				if($type=="Host") {
					$link_templates=$this->xml_xpath->query("//Host[@id=".$id."]/HostTemplate");
					$links_name=array();
					$link_order="0";
					
					// Get Actual Inheritances
					$templateInheritances = $object_sql->getNagiosHostTemplateInheritances();
					$numOfTemplates = count($templateInheritances);
					$exclude_list = array();
					if($numOfTemplates) {
						foreach($templateInheritances as $template) {
							$exclude_list[] = $template->getName();
						}
					}
					
					foreach($link_templates as $link_template) {
						// Get Template Name
						$link_template_name=$link_template->getElementsByTagName("Name")->item(0)->nodeValue;
						
						// Skip Duplicates
						if(!in_array($link_template_name,$exclude_list) && !in_array($link_template_name,$links_name)) {						
							$links_name[]=$link_template_name;
							// Get Template ID in SQL
							$link_template=NagiosHostTemplatePeer::getByName($link_template_name);
							// Set Inheritance
							$newInheritance = new NagiosHostTemplateInheritance();
							$newInheritance->setNagiosHost($object_sql);
							$newInheritance->setNagiosHostTemplateRelatedByTargetTemplate($link_template);
							$newInheritance->setOrder($link_order);
							try {
								$newInheritance->save();
								$this->import_msg[]=$this->EoN_Msg_Success("HostTemplate","link","blue",$link_template_name);
							}
							catch(Exception $e) {
								$this->import_msg[]=$this->EoN_Msg_Error("HostTemplate","link","blue",$link_template_name);
							}
							$link_order++;
						}
					}
				}
				
			}
			
		}
		
		// Import Services
		$xml_request="//Service[@object='true']";
		$objects = $this->xml_xpath->query($xml_request);

		foreach($objects as $object) {
		
			// Get type, id and name
			$type=$object->nodeName;
			global ${$type};
			
			$result=$this->EoN_XML_Array($object);
			$id = $object->getAttribute("id");		
			$name = $object->getElementsByTagName("Description")->item(0)->nodeValue;	

			// Check if unique value
			if(!isset($array_global[$type][$id])) {
				$array_global[$type][$id]=$id;
				$object_sql=$this->EON_Import_Service($result,$id,$name);	
				$this->EON_Import_Links($type,$id,$name,$object_sql);
			}
			
		}
		
		return $this->import_msg;
		
	}
	
	// Import Services
	private function EON_Import_Service($result,$id,$name) {
	
		global $lilac;

		// Get Link Host ID in XML
		if(isset($result["Host"])) {
			$link_service_id=$result["Host"];		
			if($link_service_id!="") {
				// Get Link Name in XML
				$link_object=$this->xml_xpath->query("//Host[@id='".$link_service_id."']");
				$link_service_name=$link_object->item(0)->getElementsByTagName("Name")->item(0)->nodeValue;
				// Get Link ID in SQL
				$link_service_created_id=NagiosHostPeer::getByName($link_service_name);
				$link_service_created_id=$link_service_created_id->getId();
				$result["Host"]=$link_service_created_id;
			}
		}
		
		// Get Link HostTemplate ID in XML
		if(isset($result["HostTemplate"])) {
			$link_service_id=$result["HostTemplate"];		
			if($link_service_id!="") {
				// Get Link Name in XML
				$link_object=$this->xml_xpath->query("//HostTemplate[@id='".$link_service_id."']");
				$link_service_name=$link_object->item(0)->getElementsByTagName("Name")->item(0)->nodeValue;
				// Get Link ID in SQL
				$link_service_created_id=NagiosHostTemplatePeer::getByName($link_service_name);
				$link_service_created_id=$link_service_created_id->getId();
				$result["HostTemplate"]=$link_service_created_id;
			}
		}
		
		// Delete existing service
		if(isset($result["Host"]) || isset($result["HostTemplate"])) {
			$service_id=$lilac->service_exists($name,$result["Host"],$result["HostTemplate"]);
			if($service_id!=false) {
				$service = NagiosServicePeer::retrieveByPK($service_id);
				if($service) {
					$service->delete();
					$this->import_msg[]=$this->EoN_Msg_Success("Service","delete","black",$name);
				}
			}
		}
		
		// Create service
		$object_sql = new NagiosService();
		foreach($result as $result_field => $result_value) {
			$function="set".$result_field;
			$object_sql->$function($result_value);
		}
		$object_sql->save();
		$this->import_msg[]=$this->EoN_Msg_Success("Service","new","blue",$name);
		
		// Get Service Template Inheritance
		$link_templates=$this->xml_xpath->query("//Service[@id=".$id."]/ServiceTemplate");
		$links_name=array();
		$link_order="0";
		
		foreach($link_templates as $link_template) {
			// Get Template Name
			$link_template_name=$link_template->getElementsByTagName("Name")->item(0)->nodeValue;
			
			// Skip Duplicates
			if(!in_array($link_template_name,$links_name)) {	
				$links_name[]=$link_template_name;
				// Get Template ID in SQL
				$link_template=NagiosServiceTemplatePeer::getByName($link_template_name);
				// Set Inheritance
				$newInheritance = new NagiosServiceTemplateInheritance();
				$newInheritance->setNagiosService($object_sql);
				$newInheritance->setNagiosServiceTemplateRelatedByTargetTemplate($link_template);
				$newInheritance->setOrder($link_order);
				try {
						$newInheritance->save();
						$this->import_msg[]=$this->EoN_Msg_Success("ServiceTemplate","link","blue",$link_template_name);
				}
				catch(Exception $e) {
						$this->import_msg[]=$this->EoN_Msg_Error("ServiceTemplate","link","blue",$link_template_name);
				}
				$link_order++;
			}
		}
		
		return $object_sql;
		
	}
	
	// Import Links
	private function EON_Import_Links($type,$id,$name,$object_sql) {
		
		global $lilac;
		global ${$type};
	
		if(isset(${$type})) {
			foreach(${$type} as $field => $value) {
				// Links without juntions
				if($field=="0") {
					foreach($value as $zero_field => $zero_value) {
						// Get Link ID in XML
						$link_id_path=$this->xml_xpath->query("//".$type."[@id='".$id."']/".$zero_field."");
						if($link_id_path->length>0) {
							$link_id=$link_id_path->item(0)->nodeValue;
							if($link_id!="") {
								// Get Link Name in XML
								$link_object=$this->xml_xpath->query("//".$zero_value."[@id='".$link_id."']");
								$link_name=$link_object->item(0)->getElementsByTagName("Name")->item(0)->nodeValue;
								// Do nothing if option is defined
								if($this->EoN_Import_Options($zero_value)) {
									$this->import_msg[]=$this->EoN_Msg_Success($zero_value,"nolink","blue",$link_name);
								}
								elseif($this->EoN_Import_Options($zero_field)) {
									$this->import_msg[]=$this->EoN_Msg_Success($zero_field,"nolink","blue",$link_name);
								}
								// No Options
								else {					
									// Get Link ID in SQL
				                                        $tmp_object_name='Nagios'.$zero_value.'Peer';
                                                			$tmp_object=new $tmp_object_name();
									$link_created=$tmp_object->getByName($link_name);
									$link_created_id=$link_created->getId();

									// Set Link
									$link_function="set".$zero_field;
									$object_sql->$link_function($link_created_id);
									$object_sql->save();
									$this->import_msg[]=$this->EoN_Msg_Success($zero_field,"link","blue",$link_name);
								}
							}
						}
					}
				}
				// Links with juntions
				else {		
					// --- ID = Type
					if(!is_array($value) && !empty($value)) {
						$link_objects=$this->xml_xpath->query("//".$type."/".$field."/".$value."[.='".$id."']");
					}
					else {
						$link_objects=$this->xml_xpath->query("//".$type."/".$field."/".$type."[.='".$id."']");
					}
					if($link_objects->length>0){
						$extra_type=$type;
					}
					else {
						// --- ID = TypeId
						$link_objects=$this->xml_xpath->query("//".$type."/".$field."/".$type."Id[.='".$id."']");
						if($link_objects->length>0) {
							$extra_type=$type."Id";
						}
						// --- IF SPECIAL CLASS FOR INHERITANCE
						else {
							if(isset($value[2]) && is_array($value)) {
								$link_objects=$this->xml_xpath->query("//".$type."/".$field."/".$value[2]."[.='".$id."']");
								if($link_objects->length>0){
									$extra_type=$type;
								}
							}
						}
					}

					// If ID found
					if(isset($extra_type)) {

						foreach($link_objects as $link_object) {

							// Check if unique value
							if(!isset($array_global_link[$field][$link_object->parentNode->getAttribute("id")])) {
					
								$array_global_link[$field][$link_object->parentNode->getAttribute("id")]=$link_object->parentNode->getAttribute("id");
						
								// Get XML Values
								$result_depend=$this->EoN_XML_Array($link_object->parentNode);
						
								// Get Link ID in SQL
								if($type=="Service") {
									$link_created_id=$lilac->service_exists($name,$object_sql->getHost(),$object_sql->getHostTemplate());
								}
								else {
									// Do nothing if option is defined
									if($this->EoN_Import_Options($type)) {
										$this->import_msg[]=$this->EoN_Msg_Success($type,"nolink","blue",$name);
									}
									// No Options
									else {	
                                                                        	$tmp_object_name='Nagios'.$type.'Peer';
                                                                        	$tmp_object=new $tmp_object_name();
										$link_created=$tmp_object->getByName($name);	
										$link_created_id=$link_created->getId();
									}
								}

								// Set Fields
								// --- IF SPECIAL CLASS FOR INHERITANCE
								if(isset($value[3]) && is_array($value)){
									$object_depend_class=$value[3];
									$result_depend[$value[2]]=$link_created_id;
								}
								else {
									$object_depend_class=substr("Nagios".$field,0,-1);
									if(!is_array($value) && !empty($value)) {
										$result_depend[$value]=$link_created_id;
									}
									else {
										$result_depend[$extra_type]=$link_created_id;
									}
								}
								
								// Do nothing if option is defined 
								if($this->EoN_Import_Options($field)) {}
								else {
									$object_depend = new $object_depend_class();
								}

								// If Juntions between Objects
								if(isset($value[0]) && is_array($value)) {
									// Do nothing if option is defined
									if($this->EoN_Import_Options($value[1])) {
										$this->import_msg[]=$this->EoN_Msg_Success($value[1],"nolink","blue",$link_name);
									}
									// No Options
									else {
										// Get Name in XML
										$link_object3=$this->xml_xpath->query("//".$type."/".$value[1]."[@id='".$result_depend[$value[0]]."']");
										$link_name=$link_object3->item(0)->getElementsByTagName("Name")->item(0)->nodeValue;
										// Get Link ID in SQL
										$link_created_id=call_user_func(array('Nagios'.$value[1].'Peer','getByName'),$link_name);
										$result_depend[$value[0]]=$link_created_id->getId();
									}
								}

								// Set Values
								foreach($result_depend as $result_field => $result_value) {
									// Do nothing if option is defined
									if($this->EoN_Import_Options($field)) {}
									else {
										$function="set".$result_field;
										$object_depend->$function($result_value);
									}
								}
								// Do nothing if option is defined 
								if($this->EoN_Import_Options($field)) {}
								else { 
									$object_depend->save(); 
								}
								unset($object_depend);
							}
						}
					}
				}
			}
		}
	}
		
	// Generic Import Messages
	private function EoN_Msg_Error($type,$action,$color,$name) {
		return "&nbsp;<span style='color: red;'> [error] </span><b>".$type."</b> : ".$name."<span style='color: ".$color.";'> [".$action."] </span><br>\n";
	}
	private function EoN_Msg_Success($type,$action,$color,$name) {
		return "&nbsp;<span style='color: green;'> [success] </span><b>".$type."</b> : ".$name."<span style='color: ".$color.";'> [".$action."] </span><br>\n";
	}
	
}
