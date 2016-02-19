<?php
/*
#########################################
#
# Copyright (C) 2011 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
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

class EoN_Exporter {
	
	private $type;
	private $xml_file;
	private $xml_root;
			
	// XML Export Initialization
	public function EoN_Export_Start($type) {
		
		// Create a new XML document
		$doc = new DomDocument('1.0','UTF-8');
		$doc->preserveWhiteSpace = true;
		$doc->formatOutput = true;
		$root = $doc->createElement("EoN_Export");
		$root = $doc->appendChild($root);	
		$root->setAttribute('type',$type);		
	
		// Set private variable
		$this->type=$type;
		$this->xml_file=$doc;
		$this->xml_root=$root;
	
	}
	
	// Global Export Object Function
	public function EoN_Export_Object($id,$son=false,$son_type=false) {
	
		// Test for type
		if($son_type!=false) {
			$type=$son_type;
		}
		else {
			$type=$this->type;
		}

		// First export basic values
		$object=call_user_func('Nagios'.$type.'Peer::retrieveByPK',$id);
		$array=$object->toArray();
		
		// Get Host or HostTemplate if Service
		if($this->type=="Service" && $type=="Service") {
			
			if($object->getHost()) {
				$service_host=call_user_func('NagiosHostPeer::retrieveByPK',$object->getHost());	
				$service_host_type="Host";
			}
			elseif($object->getHostTemplate()) {
				$service_host=call_user_func('NagiosHostTemplatePeer::retrieveByPK',$object->getHostTemplate());	
				$service_host_type="HostTemplate";
			}

			if(isset($service_host_type)) {
				$occ = $this->xml_file->createElement($service_host_type);
				$occ = $this->xml_root->appendChild($occ);
				$occ->setAttribute("id",$service_host->getId());
				$occ->setAttribute("object","true");
				$child = $this->xml_file->createElement("Name");
				$child = $occ->appendChild($child);
				$value = $this->xml_file->createTextNode($service_host->getName());
				$value = $child->appendChild($value);
			}
		}

		// Create XML Main Object
		$son=$this->EoN_Export_Xml($array,$son,$son_type);
		
		// Call export by object type
		switch($type) {
			case "Host":
			case "Contact":
			case "HostTemplate":
			case "Service":
			case "ServiceTemplate":
			case "Timeperiod":
				$this->EoN_Export_Recursive($type,$object,$son);
				break;
			default:
				break;
		}
		
		return true;
		
	}
	
	// Generic Recursive Export
	private function EoN_Export_Recursive($type,$object,$son) {
				
		global $Objects;
		
		// Get Multi Objects
		foreach($Objects[$type] as $object_type => $object_fields) {

			// Get Mono Objects
			if($object_type=="0") {
				foreach($object_fields as $object_func => $object_field) {
					$object_func="get".$object_func;
					$object_mono=$object->$object_func();
					if(isset($object_mono)) {
						$this->EoN_Export_Object($object_mono,$son,$object_field);
					}
				}
			}
			// Get Objects of Objects
			else {
				$function="getNagios".$object_type;	
				foreach ($object->$function() as $entry) {
					$array=$entry->toArray();
					if(is_array($object_fields)) {
						if($array[$object_fields[0]] != "") {
							$this->EoN_Export_Object($array[$object_fields[0]],$son,$object_fields[1]);
						}
					}
					if($object_type!="Services" && $object_type!="ServiceTemplateInheritances" && $object_type!="Hosts" && $object_type!="HostTemplateInheritances") {
						$this->EoN_Export_Xml($entry->toArray(),$son,$object_type);
					}
				}
			}
			
		}	
	
	}

	// XML Export Creation
	private function EoN_Export_Xml($array,$son=false,$son_type=false) {
	
		global $Objects;
	
		// Create xml object
		if($son==false) {
			$occ = $this->xml_file->createElement($this->type);
			$occ = $this->xml_root->appendChild($occ);
			$type=$this->type;
		}
		else {
			$occ = $this->xml_file->createElement($son_type);
			$occ = $son->appendChild($occ);
			$type=$son_type;
		}
										
		// Process each fields
		foreach($array as $fieldname => $fieldvalue) {
			if($fieldvalue!="") {
				if($fieldname=="Id") {
					$occ->setAttribute("id",$fieldvalue);
				}
				else {
					$child = $this->xml_file->createElement($fieldname);
					$child = $occ->appendChild($child);
					$value = $this->xml_file->createTextNode($fieldvalue);
					$value = $child->appendChild($value);
				}
				
				$occ->setAttribute("object","true");
				
			}
		}
		
		// Detect non objects and non values
		foreach($Objects as $Object => $Object_Value) {
			global ${$Object};
			if(isset(${$Object})) {
				foreach(${$Object} as $zero => $zero_val) {
					if($type==$zero && $zero!="0") {
						$occ->setAttribute("object","false");
					}
				}
			}
		}
		
		return $occ;
				
	}
	
	// XML Export Download
	public function EoN_Export_End() {

		// Download xml file
		header('Content-type: "text/xml"; charset="utf8"');
		header('Content-disposition: attachment; filename="EoN_Export_'.$this->type.'.xml"');
		echo $this->xml_file->saveXML();
		exit();
		
	}
	
	// XML Export Save
	public function EoN_Export_Save($file) {

		// Save xml file to disk
		$fp=@fopen($file,"w+") or die("Unable to open $file !\n");
		@fwrite($fp,$this->xml_file->saveXML()) or die ("Unable to write in $file !\n");
		fclose($fp);
		
	}
		
}
