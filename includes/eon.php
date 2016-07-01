<?php
/*
#########################################
#
# Copyright (C) 2011 EyesOfNetwork Team
# DEV NAME : Jean-Philippe LEVY
# APPLICATION : eonweb configurator
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

// EoN Classes
include_once(LILAC_FS_ROOT . 'includes/eon.inc');
include_once(LILAC_FS_ROOT . 'classes/EoN_Exporter.php');
include_once(LILAC_FS_ROOT . 'classes/EoN_Importer.php');

// EoN Actions Selection
function EoN_Actions($type) {

	global $lilac;

	echo '
		<div align="left">';

	if($type=='Host') {
		echo 'Object to 

                <select id="targetaction" name="EoN_Association_Action">
                        <option value="add">Add</option>
                        <option value="delete">Delete</option>
                </select> :
                <select id="targettype" name="EoN_Association_Object" onchange="RefreshAutoComplete()">
                	<option value="hostgroup">HostGroup</option>
                        <option value="host">Parent</option>
                        <option value="hosttemplate">Template</option>
                </select>';

                echo ' <input id="targetname" name="EoN_Association_Value" type="text" /> <input class="btn btn-primary btn-xs" type="submit" name="EoN_Association" value="Do it!"> |
                <script type="text/javascript">
                        function RefreshAutoComplete() {
			  $("#targetname").val("");
			  $("#targetname").unautocomplete();
                          targettype = "hosts.php?request=search&type="+$("#targettype :selected").val();
                          $("#targetname").autocomplete(targettype);
                        }
                        $(function() {
			  RefreshAutoComplete();
			  });
                </script>';
	}

	echo 'Actions :
                <select id="EoN_Actions_Select_'.$type.'" name="EoN_Actions_Select_'.$type.'">
			<option value="EoN_Actions_Delete_'.$type.'">Delete</option>
			<option value="EoN_Actions_Duplicate_'.$type.'">Duplicate</option>
			<option value="EoN_Actions_Export_'.$type.'">Export</option>
                </select>
                <input class="btn btn-primary btn-xs" type="submit" name="EoN_Actions" value="Submit" onClick="javascript:return confirmDelete();">';

	echo '</div><br /><br />';
}

// EoN Actions Process
function EoN_Actions_Process($object) {

	global $error;
	global $success;

	// Generic Actions
	if(isset($_POST["EoN_Actions"]) && isset($_POST["EoN_Actions_Checks_$object"])) {
		switch($_POST["EoN_Actions_Select_$object"]) {
		
		// Delete
		case 'EoN_Actions_Delete_'.$object :
			foreach($_POST["EoN_Actions_Checks_$object"] as $EoN_Actions_Checks) {
				EoN_Delete($object,$EoN_Actions_Checks);
			}
			break;
			
		// Duplicate
		case 'EoN_Actions_Duplicate_'.$object :
			foreach($_POST["EoN_Actions_Checks_$object"] as $EoN_Actions_Checks) {
				EoN_Duplicate($object,$EoN_Actions_Checks);
			}
			break;

		// Export
		case 'EoN_Actions_Export_'.$object :
			$export=new EoN_Exporter();		
			$export->EoN_Export_Start($object);
			
			foreach($_POST["EoN_Actions_Checks_$object"] as $EoN_Actions_Checks) {
				$msg_export=$export->EoN_Export_Object($EoN_Actions_Checks);
			}
			if($msg_export!=false) {
				$success=$object."(s) exported.";
				$export->EoN_Export_End();
			}
			else {
				$error="ERROR : " . $object . " Not implemented yet.";
			}
			break;
		}
	}
	// Objects Associations
	else if(isset($_POST["EoN_Actions_Checks_$object"]) && isset($_POST["EoN_Association"])) {
		foreach($_POST["EoN_Actions_Checks_$object"] as $EoN_Actions_Checks) {
			switch($_POST["EoN_Association_Action"]) {
				case 'add' :
					switch($_POST["EoN_Association_Object"]) {
						case 'host' :
                        				EoN_Association_Host_Parent($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
							break;
						case 'hostgroup' :	
							EoN_Association_Host_HostGroup($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
							break;
						case 'hosttemplate' :	
                        				EoN_Association_Host_HostTemplate($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
							break;
					}
					break;
				case 'delete' :
                                        switch($_POST["EoN_Association_Object"]) {
                                                case 'host' :
                                                        EoN_Dissociation_Host_Parent($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
                                                        break;
                                                case 'hostgroup' :
                                                        EoN_Dissociation_Host_HostGroup($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
                                                        break;
                                                case 'hosttemplate' :
                                                        EoN_Dissociation_Host_HostTemplate($EoN_Actions_Checks,$_POST["EoN_Association_Value"]);
                                                        break;
                                        }
                                        break;
			}
		}
	}
	else {
		if(isset($_POST["EoN_Actions_Select_$object"])) {
			$error = "Please select an object.";
		}
	}
}

// EoN Generic Delete
function EoN_Delete($object,$id) {

	global $error;
	global $success;

	$class="Nagios".$object."Peer";
	$class=&new $class();
	$a = $class->retrieveByPK($id);
	$a->delete();
	unset($a);
	$success = "Object(s) Deleted.";
}

// EoN Generic Duplicate
function EoN_Duplicate($object,$id) {

	global $error;
	global $success;

	$class="Nagios".$object."Peer";
	$old=&new $class;
	$old=$old->retrieveByPK($id);
	$new=$old->copy(true);
	if($object=="Service") {
		$name=$old->getDescription();
		$new->setDescription($name."-".rand(1000,9999));
	}
	else {
		$name=$old->getName();
		$new->setName($name."-".rand(1000,9999));
	}
	$new->save();
	$success = "Object(s) Duplicated.";
}

// EoN Generic Host Association
function EoN_Association_Host_HostGroup($hostid,$hostgroupname) {

	global $error;
	global $success;

	$b = new Criteria();
	$b->add(NagiosHostgroupPeer::NAME, $hostgroupname);
	$b->setIgnoreCase(true);
	$tempHostgroup=NagiosHostgroupPeer::doSelectOne($b);
	if(!$tempHostgroup) {
		$error = "The hostgroup named " . $hostgroupname . " was not found.";
        }
	$hostgroupid=$tempHostgroup->getId();
	$c = new Criteria();
	$c->add(NagiosHostgroupMembershipPeer::HOST, $hostid);
	$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $hostgroupid);
	$c->setIgnoreCase(true);

	$tempMembership = NagiosHostgroupMembershipPeer::doSelectOne($c);
	if($tempMembership) {
		$error = "That host group already exists in that list.";
	}
	else {
		$old=NagiosHostPeer::retrieveByPK($hostid);
		$membership = new NagiosHostgroupMembership();
		$membership->setNagiosHost($old);
		$membership->setHostgroup($hostgroupid);
		$membership->save();
		$success = "Host(s) Added To Host Group.";
	}
}

function EoN_Association_Host_Parent($hostid,$parent) {

        global $error;
        global $success;

	$c = new Criteria();
	$c->add(NagiosHostPeer::NAME, $parent);
	$c->setIgnoreCase(true);
	$parentHost = NagiosHostPeer::doSelectOne($c);
	if(!$parentHost) {
		$error = "The host named " . $parent . " was not found.";
	}
	elseif($hostid==$parentHost->getId()) {
		$error = "The host cannot be the parent.";
	}
	else {
		$host = NagiosHostPeer::retrieveByPK($hostid);
		$tempParent = new NagiosHostParent();
		$tempParent->setChildHost($host->getId());
		$tempParent->setParentHost($parentHost->getId());
		$tempParent->save();
		$success = "Parent added";
	}
}

function EoN_Association_Host_HostTemplate($hostid,$HostTemplate) {

        global $error;
        global $success;

	$c = new Criteria();
        $c->add(NagiosHostTemplatePeer::NAME, $HostTemplate);
        $c->setIgnoreCase(true);
        $template = NagiosHostTemplatePeer::doSelectOne($c);

	if(!$template) {
		$error = "The host template named " . $HostTemplate . " was not found.";
	}
	else {
		// We need to get the count of templates already inherited
		$host = NagiosHostPeer::retrieveByPK($hostid);
		$templateList = $host->getNagiosHostTemplateInheritances();
		foreach($templateList as $tempTemplate) {
			if($tempTemplate->getId() == $template->getId()) {
				$error = "That template already exists in the inheritance chain.";
			}
		}
		if(empty($error)) {
			$newInheritance = new NagiosHostTemplateInheritance();
			$newInheritance->setNagiosHost($host);
			$newInheritance->setNagiosHostTemplateRelatedByTargetTemplate($template);
			$newInheritance->setOrder(count($templateList));
			try {
				$newInheritance->save();
				$success = "Template added to inheritance chain.";				
			}
			catch(Exception $e) {
				$error = $e->getMessage();
			}		
		}
	}
}


// EoN Generic Host Dissociation
function EoN_Dissociation_Host_HostTemplate($hostid,$HostTemplate) {

        global $error;
        global $success;

        $c = new Criteria();
        $c->add(NagiosHostTemplatePeer::NAME, $HostTemplate);
        $c->setIgnoreCase(true);
        $template = NagiosHostTemplatePeer::doSelectOne($c);

        if(!$template) {
		$error = "The host template named " . $HostTemplate . " was not found.";
        }
        else {
                
		$d = new Criteria();
		$d->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, $hostid);
		$d->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
		$inheritanceList = NagiosHostTemplateInheritancePeer::doSelect($d);
		
		for($counter = 0; $counter < count($inheritanceList); $counter++) {
			if($inheritanceList[$counter]->getNagiosHostTemplateRelatedByTargetTemplate()->getId() == $template->getId()) {
				// Omg, we found it!
				// Delete the inheritance
				$inheritanceList[$counter]->delete();
				// Okay, regrab the list
				$newList = NagiosHostTemplateInheritancePeer::doSelect($d);
				for($counter = 0; $counter < count($newList); $counter++) {
					// Reordering
					$newList[$counter]->setOrder($counter);
					$newList[$counter]->save();
				}
			
			}
		}
		$success = "Template deleted from inheritance chain.";
        }
}

function EoN_Dissociation_Host_Parent($hostid,$parent) {

        global $error;
        global $success;

        $c = new Criteria();
        $c->add(NagiosHostPeer::NAME, $parent);
        $c->setIgnoreCase(true);
        $parentHost = NagiosHostPeer::doSelectOne($c);
        if(!$parentHost) {
		$error = "The host named " . $parent . " was not found.";
        }
        else {
                $d = new Criteria();
                $d->add(NagiosHostParentPeer::CHILD_HOST , $hostid);
                $d->add(NagiosHostParentPeer::PARENT_HOST, $parentHost->getId());

                $parentRelationship = NagiosHostParentPeer::doSelectOne($d);
                if(!$parentRelationship) {
			$error = "That parent relationship was not found.";
                }
                else {
                        $parentRelationship->delete();
                        $success = "Parent relationship removed.";
                }
        }
}

function EoN_Dissociation_Host_HostGroup($hostid,$hostgroupname) {

        global $error;
        global $success;

        $b = new Criteria();
        $b->add(NagiosHostgroupPeer::NAME, $hostgroupname);
        $b->setIgnoreCase(true);
        $tempHostgroup=NagiosHostgroupPeer::doSelectOne($b);
        if(!$tempHostgroup) {
		$error = "The hostgroup named " . $hostgroupname . " was not found.";
        }
        $d = new Criteria();
        $d->add(NagiosHostgroupMembershipPeer::HOST, $hostid);
        $d->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $tempHostgroup->getId());
        $membership = NagiosHostgroupMembershipPeer::doSelectOne($d);
        if($membership) {
                $membership->delete();
                $success = "Membership Deleted";
        }
}
?>
