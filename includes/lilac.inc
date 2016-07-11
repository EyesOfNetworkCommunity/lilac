<?php
/*
Lilac - A Nagios Configuration Tool
Copyright (C) 2007 Taylor Dondich

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
*/

/*
	Filename: lilac.inc
	Description:
	The class definition for lilac
*/

class Lilac {
	
	function get_children_hosts_list($host_id, &$children_lists) {
		$c = new Criteria();
		if($host_id != 0) {
			$c->add(NagiosHostPeer::PARENT_HOST, $host_id);
		}
		else {
			$c->add(NagiosHostPeer::PARENT_HOST, null);
		}
		$c->addAscendingOrderByColumn(NagiosHostPeer::NAME);
		$children_lists = NagiosHostPeer::doSelect($c);		
		return true;
	}
	
	function return_period_list(&$period_list) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosTimeperiodPeer::NAME);
		
		$period_list = NagiosTimeperiodPeer::doSelect($c);
		return true;
	}
	
	function get_contactgroup_list(&$contactgroups_list) {
		
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosContactGroupPeer::NAME);
		
		$contactgroups_list = NagiosContactGroupPeer::doSelect($c);
		return true;
	}
	
	function element_desc($name, $section) {
		$c = new Criteria();
		$c->add(LabelPeer::SECTION, $section);
		$c->setIgnoreCase(true);
		$c->add(LabelPeer::NAME, $name);
		$description = LabelPeer::doSelectOne($c);
		if(!$description) {
			return null;
		}
		else {
			//return '<i> '.$description->getLabel().'</i>';
			return '<i class="fa fa-info-circle" data-toggle="tooltip" data-placement="top" title="'.htmlentities($description->getLabel()).'" style="cursor: pointer;"></i>';
		}
	}
	
	/**
	 * @todo Finalized.  Should be moved to caller.
	 *
	 * @param unknown_type $contactgroup_name
	 * @return unknown
	 */
	function contactgroup_exists($contactgroup_name) {
		$c = new Criteria();
		$c->add(NagiosContactGroupPeer::NAME, $contactgroup_name);
		$c->setIgnoreCase(true);
		
		$group = NagiosContactGroupPeer::doSelectOne($c);
		
		if(!$group) {
			return false;
		}
		else {
			return true;
		}
	}
	
	function hosttemplate_exists($template_name) {
		$c = new Criteria();
		$c->add(NagiosHostTemplatePeer::NAME, $template_name);
		$c->setIgnoreCase(true);
		$template = NagiosHostTemplatePeer::doSelectOne($c);		
		if($template) {
			return true;
		}
		else {
			return false;
		}
	}
	
	function servicetemplate_exists($template_name) {
		$c = new Criteria();
		$c->add(NagiosServiceTemplatePeer::NAME, $template_name);
		$c->setIgnoreCase(true);
		$template = NagiosServiceTemplatePeer::doSelectOne($c);		
		if($template) {
			return true;
		}
		else {
			return false;
		}
	}	
	
	function get_command($command_id, &$command) {
		$command = NagiosCommandPeer::retrieveByPK($command_id);
	}
	
	function return_host_command($host_id) {
		$complete_command = array();
		$tempHost = NagiosHostPeer::retrieveByPK($host_id);
		if( $tempHost->getCheckCommand()) {
			$complete_command[] = $this->return_command_name( $tempHost->getCheckCommand());
			$tempParameters = $this->get_host_check_command_parameters( $host_id, $tempParameters);
			if(count($tempParameters)) {
				foreach( $tempParameters as $parameter) {
					$complete_command[] = $parameter->getParameter();
				}
			}
		} elseif( $tempHost->getTemplate()) {
			$complete_command = $this->return_host_template_command( $tempHost->getTemplate());
			
			// check if there might be arguments to add to this
			if( count( $complete_command) > 0) {
				$tempParameters = $this->get_host_template_check_command_parameters( $host_template_id, $tempParameters);
				if(count($tempParameters)) {
					foreach( $tempParameters as $parameter) {
						$complete_command[] = $parameter->getParameter();
					}
				}
			}
		}
		
		return $complete_command;
	}
	
	/**
	 * @todo This should go into NagiosHostTemplate, or NagiosHostTemplatePeer
	 *
	 * @param unknown_type $host_template_id
	 * @return unknown
	 */
	function return_host_template_command($host_template_id) {
		$complete_command = array();
		$tempHostTemplate = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		if( $tempHostTemplate->getCheckCommand()) {
			$complete_command[] = $this->return_command_name( $tempHostTemplate->getCheckCommand());
			$tempParameters = $this->get_host_template_check_command_parameters( $host_template_id, $tempParameters);
			if(count($tempParameters)) {
				foreach( $tempParameters as $parameter) {
					$complete_command[] = $parameter->getParameter();
				}
			}
		} elseif( $tempHostTemplate->getTemplate()) {
			$complete_command = $this->return_host_template_command( $tempHostTemplate->getTemplate());
			
			// check if there might be arguments to add to this
			if( count( $complete_command) > 0) {
				$tempParameters = $this->get_host_template_check_command_parameters( $host_template_id, $tempParameters);
				if(count($tempParameters)) {
					foreach( $tempParameters as $parameter) {
						$complete_command[] = $parameter->getParameter();
					}
				}
			}
		}
		
		return $complete_command;
	}
	
	function return_service_command($service_id) {
		$complete_command = array();
		$this->get_service_info($service_id, $tempService);
		if( $tempService->getCheckCommand()) {
			$complete_command[] = $this->return_command_name( $tempService->getCheckCommand());
			$tempParameters = $this->get_service_check_command_parameters( $service_id, $tempParameters);
			if(count($tempParameters)) {
				foreach( $tempParameters as $parameter) {
					$complete_command[] = $parameter->getParameter();
				}
			}
		} elseif( $tempService->getTemplate()) {
			$complete_command = $this->return_service_template_command( $tempService->getTemplate());
			
			// check if there might be arguments to add to this
			if( count( $complete_command) > 0) {
				$tempParameters = $this->get_service_template_check_command_parameters( $service_id, $tempParameters);
				if(count($tempParameters)) {
					foreach( $tempParameters as $parameter) {
						$complete_command[] = $parameter->getParameter();
					}
				}
			}
		}
		
		return $complete_command;
	}
	
	function return_service_template_command($service_template_id) {
		$complete_command = array();
		$this->get_service_template_info($service_template_id, $tempServiceTemplate);
		if( $tempServiceTemplate->getCheckCommand()) {
			$complete_command[] = $this->return_command_name( $tempServiceTemplate->getCheckCommand());
			$tempParameters = $this->get_service_template_check_command_parameters( $service_template_id, $tempParameters);
			if(count($tempParameters)) {
				foreach( $tempParameters as $parameter) {
					$complete_command[] = $parameter->getParameter();
				}
			}
		} elseif( $tempServiceTemplate->getTemplate()) {
			$complete_command = $this->return_service_template_command( $tempServiceTemplate->getTemplate());
			
			// check if there might be arguments to add to this
			if( count( $complete_command) > 0) {
				$tempParameters = $this->get_service_template_check_command_parameters( $service_template_id, $tempParameters);
				if(count($tempParameters)) {
					foreach( $tempParameters as $parameter) {
						$complete_command[] = $parameter->getParameter();
					}
				}
			}
		}
		
		return $complete_command;
	}
	

	/**
	 * @todo Completed, should be moved elsewhere
	 *
	 * @param unknown_type $command_id
	 * @return unknown
	 */
	function return_command_name($command_id) {
		$command = NagiosCommandPeer::retrieveByPK($command_id);
		if($command == null) {
			return null;
		}
		else {
			return $command->getName();
		}
	}
	
	function update_main_conf($main_conf) {
		$config = $this->get_main_conf();
		$config->updateFromArray($main_conf);
		$rows = $config->save();
	}
	
	function get_main_conf() {
		$config = NagiosMainConfigurationPeer::doSelectOne(new Criteria());
		if(!$config) {
			// We need to create the config object on the fly
			$config = new NagiosMainConfiguration();
			$config->save();
		}
		return $config;
	}
	
	function get_period($timeperiod_id, &$periodInfo) {
		$periodInfo = NagiosTimeperiodPeer::retrieveByPK($timeperiod_id);
	}
		
	function return_command_list(&$command_list) {
                $c=new Criteria();
                $c->addAscendingOrderByColumn(NagiosCommandPeer::NAME);
                $command_list = NagiosCommandPeer::doSelect($c);
		return 1;
	}
	
	function command_exists($command_name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME, $command_name);
		$c->setIgnoreCase(true);
		
		$command = NagiosCommandPeer::doSelectOne($c);
		
		if(!$command) {
			return false;
		}
		else {
			return true;
		}
	}
	
	function host_exists($host_name) {
		$c = new Criteria();
		$c->add(NagiosHostPeer::NAME, $host_name);
		$c->setIgnoreCase(true);		
		$host = NagiosHostPeer::doSelectOne($c);		
		if($host) {
			return true;
		}
		else {
			return false;
		}
	}

	function service_exists($service_name,$id_host=false,$id_host_template=false) {
		if($id_host!=false) {
                        $this->get_host_services_list($id_host, $hostServiceList);
                        for($i=0;$i<count($hostServiceList);$i++) {
                                $desc=$hostServiceList[$i]->getDescription();
                                if($desc==$service_name) {
                                        return $hostServiceList[$i]->getId();
                                }
                        }
                }
		if($id_host_template!=false) {
	        	$this->get_host_template_services_list($id_host_template, $hostTemplateServiceList);
			for($i=0;$i<count($hostTemplateServiceList);$i++) {
				$desc=$hostTemplateServiceList[$i]->getDescription();
				if($desc==$service_name) {
					return $hostTemplateServiceList[$i]->getId();
				}
			}
		}
		return false;
        }
		
	/**
	 * @todo Completed.  Should we deprecate.
	 *
	 * @param unknown_type $contact_name
	 * @return unknown
	 */
	function contact_exists($contact_name) {
		$c = new Criteria();
		$c->add(NagiosContactPeer::NAME, $contact_name);
		$c->setIgnoreCase(true);
		$contact = NagiosContactPeer::doSelectOne($c);
		if(!$contact) {
			return false;
		}
		else {
			return true;
		}
	}
	
	
	/**
	 * @todo Optimized.  Do we need this tho?  How many callers of this do we have?
	 *
	 * @param unknown_type $hostgroup_name
	 * @return unknown
	 */
	function hostgroup_exists($hostgroup_name) {
		$c = new Criteria();
		$c->add(NagiosHostgroupPeer::NAME, $hostgroup_name);
		$c->setIgnoreCase(true);
		
		$hostgroup = NagiosHostgroupPeer::doSelectOne($c);
		if(!$hostgroup) {
			return false;
		}
		else {
			return true;
		}
	}
	
	function servicegroup_exists($servicegroup_name) {
		$c = new Criteria();
		$c->add(NagiosServiceGroupPeer::NAME, $servicegroup_name);
		$c->setIgnoreCase(true);
		
		$group = NagiosServiceGroupPeer::doSelectOne($c);
		return ($group !== null);
	}
	
	function timeperiod_exists($period_name) {
		$c = new Criteria();
		$c->add(NagiosTimeperiodPeer::NAME, $period_name);
		
		$timeperiod = NagiosTimeperiodPeer::doSelectOne($c);
		
		if($timeperiod) {
			return true;
		}
		else {
			return false;
		}
	}

	function add_command($command) {
		$tempCommand = new NagiosCommand();
		$tempCommand->setDescription($command['command_desc']);
		$tempCommand->setLine($command['command_line']);
		$tempCommand->setName($command['command_name']);
		$tempCommand->save();
		return true;
	}
	
	function add_contact($contact) {
		$tempContact = new NagiosContact();
		$tempContact->setName($contact['contact_name']);
		$tempContact->setAlias($contact['alias']);
		$tempContact->setHostNotificationPeriod($contact['host_notification_period']);
		$tempContact->setServiceNotificationPeriod($contact['service_notification_period']);
		$tempContact->setHostNotificationOnDown($contact['host_notification_options_down']);
		$tempContact->setHostNotificationOnFlapping($contact['host_notification_options_flapping']);
		$tempContact->setHostNotificationOnRecovery($contact['host_notification_options_recovery']);
		$tempContact->setHostNotificationOnScheduledDowntime($contact['host_notification_options_scheduled_downtime']);
		$tempContact->setHostNotificationOnUnreachable($contact['host_notification_options_unreachable']);
		$tempContact->setServiceNotificationOnCritical($contact['service_notification_options_critical']);
		$tempContact->setServiceNotificationOnFlapping($contact['service_notification_options_flapping']);
		$tempContact->setServiceNotificationOnRecovery($contact['service_notification_options_recovery']);
		$tempContact->setServiceNotificationOnUnknown($contact['service_notification_options_unknown']);
		$tempContact->setServiceNotificationOnWarning($contact['service_notification_options_warning']);
		
		$tempContact->setCanSubmitCommands($contact['can_submit_commands']);
		$tempContact->setRetainStatusInformation($contact['retain_status_information']);
		$tempContact->setRetainNonstatusInformation($contact['retain_nonstatus_information']);		
		
		$tempContact->setHostNotificationsEnabled($contact['host_notifications_enabled']);
		$tempContact->setServiceNotificationsEnabled($contact['service_notifications_enabled']);		
		
		$tempContact->setEmail($contact['email']);
		$tempContact->setPager($contact['pager']);
		$tempContact->save();
		return $tempContact;
	}
	
	function add_contactgroup($contactgroup) {
		$group = new NagiosContactGroup();
		$group->setName($contactgroup['contactgroup_name']);
		$group->setAlias($contactgroup['alias']);
		$group->save();
		return true;
	}
		
	function add_period($timeperiod) {
		$tempTimeperiod = new NagiosTimeperiod();
		$tempTimeperiod->setName($timeperiod['timeperiod_name']);
		$tempTimeperiod->setAlias($timeperiod['alias']);
		$tempTimeperiod->setSunday($timeperiod['sunday']);
		$tempTimeperiod->setMonday($timeperiod['monday']);
		$tempTimeperiod->setTuesday($timeperiod['tuesday']);
		$tempTimeperiod->setWednesday($timeperiod['wednesday']);
		$tempTimeperiod->setThursday($timeperiod['thursday']);
		$tempTimeperiod->setFriday($timeperiod['friday']);
		$tempTimeperiod->setSaturday($timeperiod['saturday']);
		$tempTimeperiod->save();
	}
								
	function add_host_command_parameter($host_id, $parameter) {
		$param = new NagiosHostCheckCommandParameter();
		$param->setNagiosHost(NagiosHostPeer::retrieveByPK($host_id));
		$param->setParameter($parameter['parameter']);
		$param->save();
		return true;
	}
	
	function add_host_template_command_parameter($host_template_id, $parameter) {
		
		$param = new NagiosHostCheckCommandParameter();
		$param->setNagiosHostTemplate(NagiosHostTemplatePeer::retrieveByPK($host_template_id));
		$param->setParameter($parameter['parameter']);
		$param->save();
		return true;
	}

	/**
	 * @todo Finalized.  Should be moved to Contact.
	 *
	 * @param unknown_type $contact_id
	 * @param unknown_type $address
	 * @return unknown
	 */
	function add_contact_address($contact_id, $address) {
		$contact = NagiosContactPeer::retrieveByPK($contact_id);
		if($contact) {
			$newAddress = new NagiosContactAddress();
			$newAddress->setContact($contact->getId());
			$newAddress->setAddress($address['address']);
			$newAddress->save();
		}
		return false;
	}
	
	function modify_contact($contact_id, $contact) {
		$tempContact = NagiosContactPeer::retrieveByPK($contact_id);
		if(!$tempContact) {
			return false;
		}
		
		$tempContact->setName($contact['contact_name']);
		$tempContact->setAlias($contact['alias']);
		$tempContact->setHostNotificationPeriod($contact['host_notification_period']);
		$tempContact->setServiceNotificationPeriod($contact['service_notification_period']);
		$tempContact->setHostNotificationOnDown($contact['host_notification_options_down']);
		$tempContact->setHostNotificationOnFlapping($contact['host_notification_options_flapping']);
		$tempContact->setHostNotificationOnRecovery($contact['host_notification_options_recovery']);
		$tempContact->setHostNotificationOnScheduledDowntime($contact['host_notification_options_scheduled_downtime']);
		$tempContact->setHostNotificationOnUnreachable($contact['host_notification_options_unreachable']);
		$tempContact->setServiceNotificationOnCritical($contact['service_notification_options_critical']);
		$tempContact->setServiceNotificationOnFlapping($contact['service_notification_options_flapping']);
		$tempContact->setServiceNotificationOnRecovery($contact['service_notification_options_recovery']);
		$tempContact->setServiceNotificationOnUnknown($contact['service_notification_options_unknown']);
		$tempContact->setServiceNotificationOnWarning($contact['service_notification_options_warning']);
		
		$tempContact->setCanSubmitCommands($contact['can_submit_commands']);
		$tempContact->setRetainStatusInformation($contact['retain_status_information']);
		$tempContact->setRetainNonstatusInformation($contact['retain_nonstatus_information']);		
		
		$tempContact->setHostNotificationsEnabled($contact['host_notifications_enabled']);
		$tempContact->setServiceNotificationsEnabled($contact['service_notifications_enabled']);				
		
		$tempContact->setEmail($contact['email']);
		$tempContact->setPager($contact['pager']);
		$tempContact->save();
		return true;
	}
	
	function modify_period($period) {
		$tempPeriod = NagiosTimeperiodPeer::retrieveByPK($period['timeperiod_id']);
		if(!$tempPeriod) {
			return false;
		}
		$tempPeriod->setName($period['timeperiod_name']);
		$tempPeriod->setAlias($period['alias']);
		$tempPeriod->setSunday($period['sunday']);
		$tempPeriod->setMonday($period['monday']);
		$tempPeriod->setTuesday($period['tuesday']);
		$tempPeriod->setWednesday($period['wednesday']);
		$tempPeriod->setThursday($period['thursday']);
		$tempPeriod->setFriday($period['friday']);
		$tempPeriod->setSaturday($period['saturday']);
		$tempPeriod->save();
		return true;
	}

	/**
	 * @todo Optimized.  Deprecate this.
	 *
	 * @param unknown_type $escalation_id
	 * @return unknown
	 */
	function delete_escalation($escalation_id) {
		$escalation = NagiosEscalationPeer::retrieveByPK($escalation_id);
		if($escalation) {
			$escalation->delete();
			return true;
		}
		return false;
	}
	
	function delete_period($timeperiod_id) {
		$timeperiod = NagiosTimeperiodPeer::retrieveByPK($timeperiod_id);
		$timeperiod->delete();
		return true;
	}

	/**
	 * @todo Finalized.  Should move to caller script
	 *
	 * @param unknown_type $command_id
	 */
	function delete_contact_notification_command($command_id) {
		$notificationCommand = NagiosContactNotificationCommandPeer::retrieveByPk($command_id);
		if($notificationCommand) {
			$notificationCommand->delete();
		}
	}
	
	function delete_contact_address($address_id) {
		
		$address = NagiosContactAddressPeer::retrieveByPK($address_id);
		if($address) {
			$address->delete();
		}
	}
	
	/**
	 * @todo Optimized.  Move to NagiosEscalation.
	 *
	 * @param unknown_type $escalation_id
	 * @param unknown_type $contactgroup_id
	 * @return unknown
	 */
	function delete_escalation_contactgroup($escalation_id, $contactgroup_id) {
		$c = new Criteria();
		$c->add(NagiosEscalationContactgroupPeer::ESCALATION, $escalation_id);
		$c->add(NagiosEscalationContactgroupPeer::CONTACTGROUP, $contactgroup_id);
		$membership = NagiosEscalationContactgroupPeer::doSelectOne($c);
		if($membership) {
			$membership->delete();
			return true;
		}
		return false;
	}

	/**
	 * Ah, the magic of database relationships and a decent ORM layer.
	 * @todo Finalized, this should be moved to the caller.
	 *
	 * @param unknown_type $contact_id
	 */
	function delete_contact($contact_id) {
		$contact = NagiosContactPeer::retrieveByPK($contact_id);
		if($contact) {
			$contact->delete();
		}
	}
	
	/**
	 * @todo Finalized.  move to caller script.
	 *
	 * @param unknown_type $contact_id
	 * @param unknown_type $group_list
	 * @return unknown
	 */
	function get_contact_membership_list($contact_id, &$group_list) {
		$c = new Criteria();
		$c->add(NagiosContactGroupMemberPeer::CONTACT, $contact_id);
		
		$group_list = NagiosContactGroupMemberPeer::doSelect($c);		
		return true;
	}
	
	function get_host_services_list($host_id, &$service_list) {
		$c = new Criteria();
		$c->add(NagiosServicePeer::HOST, $host_id);
		$c->addAscendingOrderByColumn(NagiosServicePeer::ID);
		$service_list = NagiosServicePeer::doSelect($c);
		return true;
	}
	
	function get_host_template_services_list($host_template_id, &$service_list) {
		$c = new Criteria();
		$c->add(NagiosServicePeer::HOST_TEMPLATE, $host_template_id);
		$c->addAscendingOrderByColumn(NagiosServicePeer::DESCRIPTION );
		
		$service_list = NagiosServicePeer::doSelect($c);
		return true;
	}
	
	function get_host_check_command_parameters($host_id, &$parameter_list) {
		$parameters = array();
		
		$c = new Criteria();
		$c->add(NagiosHostCheckCommandParameterPeer::HOST, $host_id);
		$c->addAscendingOrderByColumn(NagiosHostCheckCommandParameterPeer::ID);
		
		$parameter_list = NagiosHostCheckCommandParameterPeer::doSelect($c);
		
		return $parameters;
	}
	
	/**
	 * @todo Optimized, but should be moved into possibly NagiosCheckCommand?
	 *
	 * @param unknown_type $host_template_id
	 * @param unknown_type $parameter_list
	 * @return unknown
	 */
	function get_host_template_check_command_parameters($host_template_id, &$parameter_list) {
		$parameters = array();
		
		$c = new Criteria();
		$c->add(NagiosHostCheckCommandParameterPeer::HOST_TEMPLATE, $host_template_id);
		$c->addAscendingOrderByColumn(NagiosHostCheckCommandParameterPeer::ID);
		
		$parameter_list = NagiosHostCheckCommandParameterPeer::doSelect($c);
		
		return $parameters;
		
	}
	
	function get_service_check_command_parameters($service_id, &$parameter_list) {
		$parameter_list = array();
		
		$c = new Criteria();
		$c->add(NagiosServiceCheckCommandParameterPeer::SERVICE, $service_id);
		$c->addAscendingOrderByColumn(NagiosServiceCheckCommandParameterPeer::ID);
		
		$parameter_list = NagiosServiceCheckCommandParameterPeer::doSelect($c);
		
		return $parameter_list;
		
	}
	
	
	function get_service_template_check_command_parameters($service_template_id, &$parameter_list) {
		$parameter_list = array();
		
		$c = new Criteria();
		$c->add(NagiosServiceCheckCommandParameterPeer::TEMPLATE, $service_template_id);
		$c->addAscendingOrderByColumn(NagiosServiceCheckCommandParameterPeer::ID);
		
		$parameter_list = NagiosServiceCheckCommandParameterPeer::doSelect($c);
		
		return $parameter_list;
		
	}
	
	
	/**
	 * @todo Finalized  Should be moved to Contact?
	 *
	 * @param unknown_type $contact_id
	 * @param unknown_type $address_list
	 * @return unknown
	 */
	function get_contact_addresses($contact_id, &$address_list) {
		$c = new Criteria();
		$c->add(NagiosContactAddressPeer::CONTACT , $contact_id);
		
		$address_list = NagiosContactAddressPeer::doSelect($c);
		return true;
	}	
		
	function get_host_template_membership_list($host_template_id, &$group_list) {
		
		$c = new Criteria();
		$c->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE , $host_template_id);
		
		$group_list = NagiosHostgroupMembershipPeer::doSelect($c);		
		return true;
	}
		
	/**
	 * @todo Optimized.
	 *
	 * @param unknown_type $escalation_id
	 * @param unknown_type $escalation_info
	 */
	function get_escalation($escalation_id, &$escalation_info) {
		$escalation_info = NagiosEscalationPeer::retrieveByPK($escalation_id);
		return true;
	}
	
	
	
	function get_host_template_info($host_template_id, &$hosttemplateinfo) {
		$hosttemplateinfo = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		return true;
	}
	
	function get_service_template_info($service_template_id, &$servicetemplateinfo) {
		$servicetemplateinfo = NagiosServiceTemplatePeer::retrieveByPK($service_template_id);
		return true;
	}
					
	// Function recursively gets the inherited template values, given a template
	function get_host_template_inherited_contactgroups_list($host_template_id, &$groupList) {		
		$groupList = array();
		$template = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		if($template) {
			if($template->getTemplate()) {
				$this->get_host_template_inherited_contactgroups_list($template->getTemplate(), $tempList);
				$groupList = array_merge($groupList, $tempList);
			}
			$c = new Criteria();
			$c->add(NagiosHostContactgroupPeer::HOST_TEMPLATE, $template->getId());
			$memberships = NagiosHostContactgroupPeer::doSelect($c);
			
			foreach($memberships as $membership) {
				$groupList[$membership->getContactgroup()] = $membership->getContactgroup();
			}
			return true;
		}
		return false;
	}
		
	function get_host_template_inherited_hostgroups_list($host_template_id, &$groupList) {
		$groupList = array();
		$template = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		if($template) {
			if($template->getTemplate()) {
				$tempList = array();
				$this->get_host_template_inherited_hostgroups_list($template->getTemplate(), $tempList);
				$groupList = array_merge($groupList, $tempList);
			}
		}
		$c = new Criteria();
		$c->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $template->getId());
		
		$memberships = NagiosHostgroupMembershipPeer::doSelect($c);
		foreach($memberships as $membership) {
			$groupList[$membership->getHostgroup()] = $membership->getHostgroup();
		}
		return true;
	}
		
	// Function recursively gets the inherited template values, given a template
	function get_host_template_inherited_services_list($host_template_id, &$serviceList) {
		$serviceList = array();
		$template = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		if($template) {
			$this->get_host_template_inherited_services_list($template->getTemplate(), $serviceList);
			$serviceList = array_merge($serviceList, $tempList);
			
			$services = $template->getNagiosServices();
			// We do the following to "override" our inherited services with what we have
			foreach($services as $service) {
				$serviceList[strtolower($service->getDescription())] = $service;
			}
			return true;		
		}

	}
	
	// Function recursively gets the inherited template values, given a template
	function get_service_template_inherited_contactgroups_list($service_template_id, &$groupList) {
		$groupList = array();
		$template = NagiosServiceTemplatePeer::retrieveByPK($service_template_id);
		if($template) {
			if($template->getTemplate()) {
				$this->get_service_template_inherited_contactgroups_list($template->getTemplate(), $tempList);
				$groupList = array_merge($groupList, $tempList);
			}
			$c = new Criteria();
			$c->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $template->getId());
			$memberships = NagiosServiceContactGroupMemberPeer::doSelect($c);
			
			foreach($memberships as $membership) {
				$groupList[$membership->getContactgroup()] = $membership->getContactgroup();
			}
			return true;
		}
		return false;
	}
	
	// Function recursively gets the inherited template values, given a template
	function get_service_template_inherited_servicegroups_list($service_template_id, &$groupList) {
		$groupList = array();
		$template = NagiosServiceTemplatePeer::retrieveByPK($service_template_id);
		if($template) {
			if($template->getTemplate()) {
				$this->get_service_template_inherited_servicegroups_list($template->getTemplate(), $tempList);
				$groupList = array_merge($groupList, $tempList);
			}
			$c = new Criteria();
			$c->add(NagiosServiceGroupMemberPeer::TEMPLATE, $template->getId());
			$memberships = NagiosServiceGroupMemberPeer::doSelect($c);
			
			foreach($memberships as $membership) {
				$groupList[] = $membership;
			}
			return true;
		}
		return false;
	}
		
	function get_service_info($service_id, &$service_info) {
		$service_info = NagiosServicePeer::retrieveByPK($service_id);
		return $service_info;
	}
	
	/**
	 * @todo Finalized.  Should deprecate.
	 *
	 * @param unknown_type $command_id
	 * @return unknown
	 */
	function get_command_name($command_id) {
		$command = NagiosCommandPeer::retrieveByPK($command_id);
		if($command) {
			return $command->getName();
		}
		return null;
	}

	/**
	 * @todo Finalized.  Should we deprecate?
	 *
	 * @param unknown_type $timeperiod_id
	 * @return unknown
	 */
	function return_period_name($timeperiod_id) {
		$timeperiod = NagiosTimeperiodPeer::retrieveByPK($timeperiod_id);
		if($timeperiod) {
			return $timeperiod->getName();
		}
		else {
			return null;
		}
	}
		
	/**
	 * @todo Optimized.  Deprecate this.
	 *
	 * @param unknown_type $contactgroup_id
	 * @return unknown
	 */
	function return_contactgroup_name($contactgroup_id) {
		$contactgroup = NagiosContactGroupPeer::retrieveByPK($contactgroup_id);
		if($contactgroup) {
			return $contactgroup->getName();
		}
		return false;
	}
	
	function return_hostgroup_name($hostgroup_id) {
		$hostgroup = NagiosHostgroupPeer::retrieveByPK($hostgroup_id);
		if($hostgroup) return $hostgroup->getName();
		return null;
	}
					
	function return_hostgroup_alias($hostgroup_id) {
		$hostgroup = NagiosHostgroupPeer::retrieveByPK($hostgroup_id);
		if($hostgroup) return $hostgroup->getAlias();
		return null;
	}
	
	/**
	 * @todo Optimized.  Deprecate this.
	 *
	 * @param unknown_type $contactgroup_id
	 * @return unknown
	 */
	function return_contactgroup_alias($contactgroup_id) {
		$contactgroup = NagiosContactGroupPeer::retrieveByPK($contactgroup_id);
		if($contactgroup) {
			return $contactgroup->getAlias();
		}
		return false;
	}	

	/**
	 * @todo Optiized.  Maybe move to caller?
	 *
	 * @param unknown_type $contact_id
	 * @return unknown
	 */
	function return_contact_alias($contact_id) {
		$contact = NagiosContactPeer::retrieveByPK($contact_id);
		if($contact) {
			return $contact->getAlias();
		}
		return null;
	}

	/**
	 * @todo Optimized.  Move to caller.
	 *
	 * @param unknown_type $host_id
	 * @return unknown
	 */
	function return_host_name($host_id) {
		$host = NagiosHostPeer::retrieveByPK($host_id);
		if($host) {
			return $host->getName();
		}
		return null;
	}
	
	/**
	 * @todo Optimized.
	 *
	 * @param unknown_type $host_template_id
	 * @return unknown
	 */
	function return_host_template_name($host_template_id) {
		$template = NagiosHostTemplatePeer::retrieveByPK($host_template_id);
		if($template) {
			return $template->getName();
		}
		return null;
	}
	
	function get_host_template_list(&$template_list) {
		
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosHostTemplatePeer::NAME);
		$template_list = NagiosHostTemplatePeer::doSelect($c);
		return true;
	}
	
	function get_service_template_list(&$template_list) {
		
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosServiceTemplatePeer::NAME );
		$template_list = NagiosServiceTemplatePeer::doSelect($c);
		return true;
	}
			
	function return_host_contactgroups_list($host_template_id, &$groups_list) {
		$c = new Criteria();
		$c->add(NagiosHostContactgroupPeer::HOST , $host_template_id);
		
		$groups_list = NagiosHostContactgroupPeer::doSelect($c);
		return true;
	}
	
	function return_escalation_contactgroups_list($escalation_id, &$groups_list) {
		$groups_list = array();
		$c = new Criteria();
		$c->add(NagiosEscalationContactgroupPeer::ESCALATION, $escalation_id);

		$membershiplist = NagiosEscalationContactgroupPeer::doSelectJoinNagiosContactGroup($c);
		
		foreach($membershiplist as $membership) {
			$groups_list[] = $membership->getNagiosContactgroup();
		}
		return 1;
	}
	
	function return_host_template_contactgroups_list($host_template_id, &$groups_list) {
		$c = new Criteria();
		$c->add(NagiosHostContactgroupPeer::HOST_TEMPLATE , $host_template_id);
		
		$groups_list = NagiosHostContactgroupPeer::doSelect($c);
		return true;
	}
	
	function return_service_template_contactgroups_list($service_template_id, &$groups_list) {
		$c = new Criteria();
		$c->add(NagiosServiceContactGroupMemberPeer::TEMPLATE , $service_template_id);
		
		$groups_list = NagiosServiceContactGroupMemberPeer::doSelect($c);
		return true;
	}
	
	function return_service_template_servicegroups_list($service_template_id, &$groups_list) {
		$groups_list = array();
		
		$serviceTemplate = NagiosServiceTemplatePeer::retrieveByPK($service_template_id);
		if($serviceTemplate) {
			$groups_list = $serviceTemplate->getNagiosServiceGroupMembers();
		}
		return $groups_list;
	}
	
	function return_host_template_escalations_list($host_template_id, &$escalations_list) {
		
		$c = new Criteria();
		$c->add(NagiosEscalationPeer::HOST_TEMPLATE , $host_template_id);
		$c->addAscendingOrderByColumn(NagiosEscalationPeer::DESCRIPTION );
		$escalations_list = NagiosEscalationPeer::doSelect($c);
		return true;	
	}
	
	function return_service_template_escalations_list($service_template_id, &$escalations_list) {
		$c = new Criteria();
		$c->add(NagiosEscalationPeer::SERVICE_TEMPLATE , $service_template_id);
		$c->addAscendingOrderByColumn(NagiosEscalationPeer::DESCRIPTION );
		$escalations_list = NagiosEscalationPeer::doSelect($c);
		return true;	
	}
	
	
	/**
	 * @todo Completed.  But we should depercate this nd use NagiosContactPeer instead.
	 *
	 * @param unknown_type $contact_list
	 * @return unknown
	 */
	function get_contact_list(&$contact_list) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosContactPeer::NAME);
		
		$contact_list = NagiosContactPeer::doSelect($c);
		return true;
	}
	

	function get_hostgroup_list(&$hostgroups_list) {
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosHostgroupPeer::NAME);
		$hostgroups_list = NagiosHostgroupPeer::doSelect($c);
		return true;
	}
	
	function get_servicegroup_list(&$servicegroups_list) {
		$servicegroups_list = array();
		$c = new Criteria();
		$c->addAscendingOrderByColumn(NagiosServiceGroupPeer::NAME);
		$servicegroups_list = NagiosServiceGroupPeer::doSelect($c);
		return true;
	}
		
	function get_contacts_notification_commands($contact_id, &$command_list) {
		$c = new Criteria();
		$c->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $contact_id);
		$commands = NagiosContactNotificationCommandPeer::doSelect($c);

		foreach($commands as $command) {
			if($command->getType() == 'host')
				$command_list['host'][] = $command;
			else
				$command_list['service'][] = $command;
			
		}
		return true;
	}
	
	/**
	 * @todo finalized.  We should keep this, or put it in NagiosContact
	 *
	 * @param unknown_type $contact_id
	 * @param unknown_type $notification_command
	 * @return unknown
	 */
	
	function contact_has_notification_command($contact_id, $notification_command) {
		$c = new Criteria();
		$c->add(NagiosContactNotificationCommandPeer::CONTACT_ID, $contact_id);
		$c->add(NagiosContactNotificationCommandPeer::COMMAND, $notification_command['command_id']);
		$c->add(NagiosContactNotificationCommandPeer::TYPE, $notification_command['notification_type']);
		$notificationCommand = NagiosContactNotificationCommandPeer::doSelectOne($c);
		if(!$notificationCommand) {
			return false;
		}
		else {
			return true;
		}
	}

	/**
	 * @todo Finalized.  Need to move to ContactGroup.
	 *
	 * @param unknown_type $contactgroup_id
	 * @param unknown_type $contact_id
	 * @return unknown
	 */
	function contactgroup_has_member($contactgroup_id, $contact_id) {
		$c = new Criteria();
		$c->add(NagiosContactGroupMemberPeer::CONTACT , $contact_id);
		$c->add(NagiosContactGroupMemberPeer::CONTACTGROUP , $contactgroup_id);
		
		$membership = NagiosContactGroupMemberPeer::doSelectOne($c);
		
		if(!$membership) {
			return false;
		}
		else {
			return true;
		}
	}
	
	/**
	 * @todo Optimized.  Move to NagiosEscalation perhaps?
	 *
	 * @param unknown_type $escalation_id
	 * @param unknown_type $contactgroup_id
	 * @return unknown
	 */
	function escalation_has_contactgroup($escalation_id, $contactgroup_id) {
		$c = new Criteria();
		$c->add(NagiosEscalationContactgroupPeer::ESCALATION, $escalation_id);
		$c->add(NagiosEscalationContactgroupPeer::CONTACTGROUP, $contactgroup_id);		
		return NagiosEscalationContactgroupPeer::doSelectOne($c);
	}
	
		
	function host_template_has_hostgroup($host_template_id, $hostgroup_id) {
		$c = new Criteria();
		$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP , $hostgroup_id);
		$c->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $host_template_id);
		
		$membership = NagiosHostgroupMembershipPeer::doSelectOne($c);
		if($membership) {
			return true;
		}
		else {
			return false;
		}
	}
		
	/**
	 * @todo Finalized.  Should add to Contact.
	 *
	 * @param unknown_type $contact_id
	 * @param unknown_type $notification_command
	 * @return unknown
	 */
	function add_contacts_notification_command($contact_id, $notification_command) {
		
		$contact = NagiosContactPeer::retrieveByPK($contact_id);
		$command = NagiosCommandPeer::retrieveByPK($notification_command['command_id']);
		
		if($contact && $command) {
			$notificationCommand = new NagiosContactNotificationCommand();
			$notificationCommand->setContactId($contact->getId());
			$notificationCommand->setCommand($command->getId());
			$notificationCommand->setType($notification_command['notification_type']);
			$notificationCommand->save();
			return true;
		}
		return false;	// Uh oh, inconsistency if we ever reach here.
	}
	
	/**
	 * @todo Finalized.  Should be added to ContactGroup
	 *
	 * @param unknown_type $contactgroup_id
	 * @param unknown_type $contact_id
	 * @return unknown
	 */
	function add_contactgroup_member($contactgroup_id, $contact_id) {
		$contact = NagiosContactPeer::retrieveByPK($contact_id);
		$group = NagiosContactGroupPeer::retrieveByPK($contactgroup_id);		
		if($contact && $group) {
			$membership = new NagiosContactGroupMember();
			$membership->setContact($contact->getId());
			$membership->setContactgroup($group->getId());
			$membership->save();
			return true;
		}
		return false;	// Inconsistency
		
	}
	
	
	/**
	 * @todo Cleaned up, maybe move this to the callers.
	 *
	 * @param unknown_type $hostgroup_id
	 * @param unknown_type $host_template_id
	 * @return unknown
	 */
	function add_hostgroup_template_member($hostgroup_id, $host_template_id) {	
		$membership = new NagiosHostgroupMembership();
		$membership->setHostTemplate($host_template_id);
		$membership->setHostgroup($hostgroup_id);
		$membership->save();
		return true;
	}
	

		
	
}

$lilac = new Lilac();

?>
