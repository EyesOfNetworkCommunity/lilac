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

$ImportOptions = array(
	"no_contacts"		=> 	false,
	"no_contactgroups"	=> 	false,
	"no_timeperiods"	=>	false
);

$Timeperiod=array(
	"TimeperiodEntrys" => "",
);

$Contact=array(
	"0" => array(
		"HostNotificationPeriod" => "Timeperiod",
		"ServiceNotificationPeriod" => "Timeperiod"
	),

	"ContactAddresss" => "",
	"ContactGroupMembers" => array("Contactgroup","ContactGroup"),
	"ContactNotificationCommands" => array("Command","Command"),
	//"HostContactMembers" => "",
	//"ServiceContactMembers" => "",
	//"EscalationContacts" => ""
);

$Host=array(
	"0" => array(
		"CheckPeriod" => "Timeperiod",
		"NotificationPeriod" => "Timeperiod",
		"EventHandler" => "Command",
		"CheckCommand" => "Command"
	),

	"HostCheckCommandParameters" => "",
	"HostTemplateInheritances" => array("Id","HostTemplate"),
	"Services" => array("Id","Service"),
	"HostContactMembers" => array("Contact","Contact"),
	"HostContactgroups" => array("Contactgroup","ContactGroup"),
	"HostgroupMemberships" => array("Hostgroup","Hostgroup"),
	//"HostParentsRelatedByChildHost" => "",
	//"HostParentsRelatedByParentHost" => "",
	//"Dependencys" => "",
	//"DependencyTargets" => "",
	//"Escalations" => ""
);

$Service=array(
	"0" => array(
		"CheckPeriod" => "Timeperiod",
		"NotificationPeriod" => "Timeperiod",
		"EventHandler" => "Command",
		"CheckCommand" => "Command"
	),

	"ServiceCheckCommandParameters" => "",
	"ServiceTemplateInheritances" => array("Id","ServiceTemplate"),
	"ServiceGroupMembers" => array("ServiceGroup","ServiceGroup"),
	"ServiceContactMembers" => array("Contact","Contact"),
	"ServiceContactGroupMembers" => array("ContactGroup","ContactGroup"),
	//"Dependencys" => "",
	//"DependencyTargets" => "",
	//"Escalations" => ""
);

$HostTemplate=array(
	"0" => array(
		"CheckPeriod" => "Timeperiod",
		"NotificationPeriod" => "Timeperiod",
		"EventHandler" => "Command",
		"CheckCommand" => "Command"
	),

	"HostCheckCommandParameters" => "",
	"HostTemplateInheritancesRelatedBySourceTemplate" => array("TargetTemplate","HostTemplate","SourceTemplate","NagiosHostTemplateInheritance"),
	"Services" => array("Id","Service"),
	"HostContactMembers" => array("Contact","Contact","Template","NagiosHostContactMember"),
	"HostContactgroups" => array("Contactgroup","ContactGroup"),
	"HostgroupMemberships" => array("Hostgroup","Hostgroup"),
	//"HostTemplateInheritancesRelatedByTargetTemplate" => "",
	//"Dependencys" => "",
	//"Escalations" => ""
);

$ServiceTemplate=array(
	"0" => array(
		"CheckPeriod" => "Timeperiod",
		"NotificationPeriod" => "Timeperiod",
		"EventHandler" => "Command",
		"CheckCommand" => "Command"
	),

	"ServiceCheckCommandParameters" =>"Template",
	"ServiceTemplateInheritancesRelatedBySourceTemplate" => array("TargetTemplate","ServiceTemplate","SourceTemplate","NagiosServiceTemplateInheritance"),
	"ServiceGroupMembers" => array("ServiceGroup","ServiceGroup","Template","NagiosServiceGroupMember"),
	"ServiceContactMembers" => array("Contact","Contact","Template","NagiosServiceContactMember"),
	"ServiceContactGroupMembers" => array("ContactGroup","ContactGroup","Template","NagiosServiceContactGroupMember"),
	//"ServiceTemplateInheritancesRelatedByTargetTemplate" => "",
	//"Dependencys" => "",
	//"Escalations" => ""
);

$Objects=array(
	"Timeperiod" => $Timeperiod,
	"Contact" => $Contact,
	"Host" => $Host,
	"Service" => $Service,
	"HostTemplate" => $HostTemplate,
	"ServiceTemplate" => $ServiceTemplate
);

?>
