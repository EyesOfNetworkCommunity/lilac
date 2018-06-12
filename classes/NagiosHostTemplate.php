<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_template' table.
 *
 * Nagios Host Template
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostTemplate extends BaseNagiosHostTemplate {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'hosttemplate');
		}
		
		return parent::setName($v);
	}
	
	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getName(),'hosttemplate','delete');
			foreach($this->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $template_in) {
				$JobExport->getInheritances($template_in,false);
			}
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'hosttemplate',$action);
			foreach($this->getNagiosHostTemplateInheritancesRelatedByTargetTemplate() as $template_in) {
				$JobExport->getInheritances($template_in,false);
			}
		}

		return parent::save($con);

	}
	
	/**
	 * Returns hosts which are affected by this template, via voodoo-magic
	 * (and recursive powah!)
	 */
	public function getAffectedHosts($affectedHosts = null) {
		if($affectedHosts == null)
			$affectedHosts = array();	// Hosts array will be indexed by hostname
		// Get directly affected hosts
		$inheritances = $this->getNagiosHostTemplateInheritancesRelatedByTargetTemplateJoinNagiosHost();
		foreach($inheritances as $inheritance) {
			if($inheritance->getNagiosHostTemplateRelatedBySourceTemplate()) {
				// This is a template which inherits us, grab it's hosts!
				$affectedHosts = $inheritance->getNagiosHostTemplateRelatedBySourceTemplate()->getAffectedHosts($affectedHosts);
			}
			else {
				$host = $inheritance->getNagiosHost();
				if(!array_key_exists($host->getName(), $affectedHosts)) {
					$affectedHosts[$host->getName()] = $host;
				}
			}
		}
		return $affectedHosts;
	}


	/**
	 * Returns multi-dimension
	 *
	 * @param unknown_type $hosttemplateinfo
	 * @param unknown_type $hosttemplateinfoSources
	 * @return unknown
	 */
	public function getValues($inherited = false, $notinherited = false) {
		$values = array();
	
		if(!$notinherited) {	
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
			$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
		
			$inheritanceTemplates = NagiosHostTemplateInheritancePeer::doSelect($c);
		
			if(count($inheritanceTemplates)) {
				// This template has inherited templates, let's bring their values in
				foreach($inheritanceTemplates as $inheritanceItem) {
					$hostTemplate = $inheritanceItem->getNagiosHostTemplateRelatedByTargetTemplate();
					$templateValues = $hostTemplate->getValues(true);
					$values = array_merge($values, $templateValues);
				}
			}
		} else {
			$cmdObj = $this->getInheritedCommandWithParameters();
			if(!empty($cmdObj['command'])) {
				$values["check_command"] = array(
					'inherited' => $inherited,
					'source' => array('id' => $this->getId(), 'name' => $this->getName()),
					'value' => $cmdObj['command']['command']->getId()
				);
			}
		}
		foreach(NagiosHostTemplatePeer::getFieldNames() as $fieldName) {
			$colName = NagiosHostTemplatePeer::translateFieldName($fieldName, BasePeer::TYPE_PHPNAME, BasePeer::TYPE_COLNAME);
			// At this point, $fieldName is the fieldname for each column in our table record
			$colName = strtolower(substr($colName, strlen("nagios_host_template.")));
			// $colName is now the abbreviated column name.
			
			switch($colName) {
				case 'maximum_check_attempts':
					$colName = 'max_check_attempts';
					break;
			}
			$methodName = "get" . $fieldName;
			if(method_exists($this, $methodName)) {
				$val = $this->{$methodName}();
				
				if($val !== null) {
					
					// Yay, let's populate
					$values[$colName] = array(
							'inherited' => $inherited,
							'source' => array('id' => $this->getId(), 'name' => $this->getName()),
							'value' => $val
						);
				}
			}
			
		}
		return $values;
	}
	
	function getInheritedCommandParameters($self = true) {
		$parameterList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$parameters = $hostTemplate->getInheritedCommandParameters(false);
				if(count($parameters))
					$parameterList = array_merge($parameterList, $parameters);
			}
		}
		if(!$self) {
			$parameters = $this->getNagiosHostCheckCommandParameters();
				
			foreach($parameters as $parameter) {
				$parameterList[] = $parameter;
			}
		}
		return $parameterList;
	}
	
	function getInheritedDependencies($self = true) {
		$dependenciesList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$dependencies = $hostTemplate->getInheritedDependencies(false);
				if(count($dependencies)) 
					$dependenciesList = array_merge($dependenciesList, $dependencies);
			}
		}
		if(!$self) {
			$dependencies = $this->getNagiosDependencys();
				
			foreach($dependencies as $dependency) {
				$dependenciesList[] = $dependency;
			}
		}
		return $dependenciesList;
	}	

	function getInheritedEscalations($self = true) {
		$escalationsList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$escalations = $hostTemplate->getInheritedEscalations(false);
				if(count($escalations)) 
					foreach($escalations as $escalation) { 
						$escalationsList[] = $escalation; 
					}
			}
		}
		
		 $inheritanceTemplates = $this->getInheritedHostGroups();
		 if(count($inheritanceTemplates)) {
		 	// This template has inherited templates, let's bring their values in
		 	foreach($inheritanceTemplates as $hostgroup) {
		 		$escalations = $hostgroup->getNagiosEscalations();
		 		foreach($escalations as $escalation) {
		 			$escalationsList[] = $escalation;
		 		}
		 	}
		 }
		
		 $hostgroupMemberships = $this->getNagiosHostgroupMemberships();
		 foreach($hostgroupMemberships as $membership) {
		 	$hostgroup = $membership->getNagiosHostGroup();
		 	$escalations = $hostgroup->getNagiosEscalations();
		 	foreach($escalations as $escalation) { 
				$escalationsList[] = $escalation; 
			}
		 }
		
		if(!$self) {
			$escalations = $this->getNagiosEscalations();
				
			foreach($escalations as $escalation) {
				$escalationsList[] = $escalation;
			}
		}
		
		return array_unique($escalationsList);
	}	
	
	function getInheritedServices($self = true) {
		$servicesList = array();
		
		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();

		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$services = $hostTemplate->getInheritedServices(false);
				if(count($services)) {
					$servicesList = array_merge($servicesList, $services);
				}
			}
		}
		
		$inheritanceTemplates = $this->getInheritedHostGroups();
		if(count($inheritanceTemplates)) {
			foreach($inheritanceTemplates as $hostgroup) {
				$c = new Criteria();
				$c->add(NagiosServicePeer::HOSTGROUP, $hostgroup->getId() );
				$services = NagiosServicePeer::doSelect($c);
				$servicesList = array_merge($servicesList, $services);
			}
		}

		$hostgroupMemberships =
		$this->getNagiosHostgroupMemberships();
		foreach($hostgroupMemberships as $membership) {
			$hostgroup = $membership->getNagiosHostGroup();
			$c = new Criteria();
			$c->add(NagiosServicePeer::HOSTGROUP, $hostgroup->getId() );
			$services = NagiosServicePeer::doSelect($c);
			$servicesList = array_merge($servicesList, $services);
		}
		
		if(!$self) {
			$services = $this->getNagiosServices();
			
			foreach($services as $service) {
				$servicesList[] = $service;
			}
		}
		
		return array_unique($servicesList);
	}
	
	function getInheritedHostGroups($self = true) {
		$groupList = array();
		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$hostgroups = $hostTemplate->getInheritedHostGroups(false);
				$groupList = array_merge($groupList, $hostgroups);
			}
		}
		if(!$self) {
			$hostgroupMemberships = $this->getNagiosHostgroupMemberships();
			foreach($hostgroupMemberships as $membership) {
				$hostgroup = $membership->getNagiosHostGroup();
				$groupList[] = $hostgroup;
			}
		}
		return $groupList;
	}
	
	function getInheritedContactGroups($self = true) {
		$groupList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$contactgroups = $hostTemplate->getInheritedContactGroups(false);
				$groupList = array_merge($groupList, $contactgroups);
			}
		}
		if(!$self) {
			$contactgroupMemberships = $this->getNagiosHostContactgroups();
			foreach($contactgroupMemberships as $membership) {
				$contactgroup = $membership->getNagiosContactGroup();
				$groupList[] = $contactgroup;
			}			
		}
		return $groupList;
	}

	function getInheritedContacts($self = true) {
		$contactsList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$contacts = $hostTemplate->getInheritedContacts(false);
				$contactsList = array_merge($contactsList, $contacts);
			}
		}
		if(!$self) {
			$contactMemberships = $this->getNagiosHostContactMembers();
			foreach($contactMemberships as $membership) {
				$contact = $membership->getNagiosContact();
				$contactsList[] = $contact;
			}			
		}
		return $contactsList;
	}

	function getInheritedNagiosAutodiscoveryServiceFilters($self = true) {
		$filterList = array();

		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$filters = $hostTemplate->getInheritedNagiosAutodiscoveryServiceFilters(false);
				if(count($filters))
					$filterList = array_merge($filterList, $filters);
			}
		}
		if(!$self) {
			$filters = $this->getNagiosHostTemplateAutodiscoveryServices();
				
			foreach($filters as $filter) {
				$filterList[] = $filter;
			}
		}
		return $filterList;
	}
	
	function getNagiosHostTemplateInheritances() {
		$c = new Criteria();
		$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
		$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
		
		$list = array();
		$inheritanceTemplates = NagiosHostTemplateInheritancePeer::doSelect($c);
		foreach($inheritanceTemplates as $inheritanceItem) {
			$list[] = $inheritanceItem->getNagiosHostTemplateRelatedByTargetTemplate();
		}
		
		return $list;
	}
	
	function getInheritedCommandWithParameters($cmdObj = null) {
		$self = false;
		if($cmdObj === null) {
			$self = true;
			// Initialize array
			$cmdObj = array(
				'command' => null,
				'parameters' => array()
				);
		}
		$inheritedTemplates = $this->getNagiosHostTemplateInheritances();
		// Inheritedtemplates is our collection of templates that we directly inherit from.  Let's grab 'em
		foreach($inheritedTemplates as $template) {
			$cmdObj = $template->getInheritedCommandWithParameters($cmdObj);
		}
		// Okay, let's check ourselves
		if($this->getNagiosCommandRelatedByCheckCommand()) {
			$cmdObj['command'] = array('inherited' => ($self ? false : true),
										'source' => $this,
										'command' => $this->getNagiosCommandRelatedByCheckCommand());
		}
		$parameters = $this->getNagiosHostCheckCommandParameters();
		foreach($parameters as $param) {
			$cmdObj['parameters'][] = array(
				'inherited' => ($self ? false : true),
				'source' => $this,
				'parameter' => $param
				);
		}
		return $cmdObj;
	}

    function addCheckCommandParameter($value) {
        $parameter = new NagiosHostCheckCommandParameter();
        $parameter->setNagiosHostTemplate($this);
        $parameter->setParameter($value);
        $parameter->save();
        return true;
    }


	function setCheckCommandByName($name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if(!$command)
			return false;
		$this->setNagiosCommandRelatedByCheckCommand($command);
		$this->save();
		return true;
	}

	function setCheckPeriodByName($name) {
		$c = new Criteria();
		$c->add(NagiosTimeperiodPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$command = NagiosTimeperiodPeer::doSelectOne($c);
		if(!$command)
			return false;
		$this->setNagiosTimeperiodRelatedByCheckPeriod($command);
		$this->save();
		return true;
	}

	function setEventHandlerByName($name) {
		$c = new Criteria();
		$c->add(NagiosCommandPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$command = NagiosCommandPeer::doSelectOne($c);
		if(!$command)
			return false;
		$this->setNagiosCommandRelatedByEventHandler($command);
		$this->save();
		return true;
	}
	function setNotificationPeriodByName($name) {
		$c = new Criteria();
		$c->add(NagiosTimeperiodPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$command = NagiosTimeperiodPeer::doSelectOne($c);
		if(!$command)
			return false;
		$this->setNagiosTimeperiodRelatedByNotificationPeriod($command);
		$this->save();
		return true;
	}

	function addParentByName($name) {
		$parentId = $this->getParentHost();

		$c = new Criteria();
		$c->add(NagiosHostPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$host = NagiosHostPeer::doSelectOne($c);
		if(!$host)
			return false;

		if(empty($parentId)) {
			$this->setParentHost($host->getId());
			return true;
		}
		// Okay, let's first see if there's a parent relationship around
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostParentPeer::CHILD_HOST_TEMPLATE, $this->getId());
			$c->add(NagiosHostParentPeer::PARENT_HOST, $host->getId());
			$relationship = NagiosHostParentPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		// Okay, relationship doesn't exist, let's add it!
		$relationship = new NagiosHostParent();
		$relationship->setNagiosHostTemplate($this);
		$relationship->setNagiosHostRelatedByParentHost($host);
		$relationship->save();
		return true;
	}

	function addHostgroupByName($name) {
		$c = new Criteria();
		$c->add(NagiosHostgroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$hostgroup = NagiosHostgroupPeer::doSelectOne($c);
		if(!$hostgroup) {
			return false;
		}
		// Okay, hostgroup is valid, check for relationship
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, $this->getId());
			$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $hostgroup->getId());
			$relationship = NagiosHostgroupMembershipPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosHostgroupMembership();
		$relationship->setNagiosHostTemplate($this);
		$relationship->setNagiosHostgroup($hostgroup);
		$relationship->save();
		return true;
	}

	function addContactByName($name) {
		$c = new Criteria();
		$c->add(NagiosContactPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$contact = NagiosContactPeer::doSelectOne($c);
		if(!$contact)
			return false;
		// Okay, contact is valid, check for relationship
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostContactMemberPeer::TEMPLATE, $this->getId());
			$c->add(NagiosHostContactMemberPeer::CONTACT, $contact->getId());
			$relationship = NagiosHostContactMemberPeer::doSelectOne($c);
			if($relationship)
				return false;
		}
		$relationship = new NagiosHostContactMember();
		$relationship->setNagiosHostTemplate($this);
		$relationship->setNagiosContact($contact);
		$relationship->save();
		return true;
	}

	function addContactGroupByName($name) {
		$c = new Criteria();
		$c->add(NagiosContactGroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$contactgroup = NagiosContactGroupPeer::doSelectOne($c);
		if(!$contactgroup) {
			return false;
		}
		// Okay, contactgroup is valid, check for relationship
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostContactgroupPeer::HOST_TEMPLATE, $this->getId());
			$c->add(NagiosHostContactgroupPeer::CONTACTGROUP, $contactgroup->getId());
			$relationship = NagiosHostContactgroupPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosHostContactgroup();
		$relationship->setNagiosHostTemplate($this);
		$relationship->setNagiosContactGroup($contactgroup);
		$relationship->save();
		return true;
	}
    function integrityCheck() {
        // Get our services
        $services = $this->getNagiosServices();
        foreach($services as $service) {
            $service->integrityCheck();
        }
		$c = new Criteria();
		$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
		$c->addAscendingOrderByColumn(NagiosHostTemplateInheritancePeer::ORDER);
		$inheritanceTemplates = NagiosHostTemplateInheritancePeer::doSelect($c);
        foreach($inheritanceTemplates as $inheritance) {
			$template = $inheritance->getNagiosHostTemplateRelatedByTargetTemplate();
			$template->integrityCheck();
        }
    }

	function addTemplateInheritance($name) {
		// First get the template by name
		$template = NagiosHostTemplatePeer::getByName($name);
		if(!$template) {
			return false;
		}
		// Check to see if inheritance already exists
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
			$c->add(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $template->getId());
			$relationship = NagiosHostTemplateInheritancePeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		// Okay, create new one
		$relationship = new NagiosHostTemplateInheritance();
		$relationship->setNagiosHostTemplateRelatedBySourceTemplate($this);
		$relationship->setNagiosHostTemplateRelatedByTargetTemplate($template);
		$relationship->save();
		return true;
	}

	function getNagiosHostCheckCommandParameters($criteria = null, PropelPDO $con = null) {
		if($criteria == null)
			$criteria = new Criteria();
		$criteria->addAscendingOrderByColumn(NagiosHostCheckCommandParameterPeer::ID);
		return parent::getNagiosHostCheckCommandParameters($criteria);
	}
	
	function getInheritedCustomObjectVariables($self = true) {
		$parameterList = array();
	
		$inheritanceTemplates = $this->getNagiosHostTemplateInheritances();
	
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $hostTemplate) {
				$parameters = $hostTemplate->getInheritedCustomObjectVariables(false);
				$parameterList = array_merge($parameterList, $parameters);
			}
		}
		$parameters = $this->getNagiosHostTemplateCustomObjectVariables();

		foreach($parameters as $parameter) {
			if(!$self) {
				# Set (or overwrite) the paramter if we are returning our objects
				$parameterList[$parameter->getVarName()] = $parameter;
			} else {
				# Remove the inherited parameter if we are not returning our objects, but have defined one directly
				unset($parameterList[$parameter->getVarName()]);
			}
		}
		return $parameterList;
	}
	
	function getNagiosHostTemplateCustomObjectVariables($criteria = null, PropelPDO $con = null) {
		if($criteria == null)
			$criteria = new Criteria();
		$criteria->addAscendingOrderByColumn(NagiosHostCustomObjectVarPeer::VAR_NAME);
		return parent::getNagiosHostCustomObjectVars($criteria);
	}

	function getDependentHosts() {
			$hosts = array();
			$criteria = new Criteria();
			$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_HOST, NULL, Criteria::ISNOTNULL);
			$criteria->add(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $this->getId());
			$links = NagiosHostTemplateInheritancePeer::doSelect($criteria);
			foreach($links as $link) {
					$host = $link->getNagiosHost();
					$hosts[] = $host;
			}
			return $hosts;
	}

	function getDependentHostTemplates() {
			$hosttemplates = array();
			$criteria = new Criteria();
			$criteria->add(NagiosHostTemplateInheritancePeer::SOURCE_TEMPLATE, NULL, Criteria::ISNOTNULL);
			$criteria->add(NagiosHostTemplateInheritancePeer::TARGET_TEMPLATE, $this->getId());
			$links = NagiosHostTemplateInheritancePeer::doSelect($criteria);
			foreach($links as $link) {
					$hosttemplate = $link->getNagiosHostTemplateRelatedBySourceTemplate();
					$hosttemplates[] = $hosttemplate;
			}
			return $hosttemplates;
	}

	function getDependentCount() {
			return count($this->getDependentHosts()) + count($this->getDependentHostTemplates());
	}

	public function duplicate() {
		
		$copyObj = parent::copy();
		$copyObj->setNew(false);
		$deepCopy=true;
		
		foreach ($this->getNagiosHostTemplateAutodiscoveryServices() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostTemplateAutodiscoveryService($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosServices() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosService($relObj->duplicate());
			}
		}

		foreach ($this->getNagiosHostContactMembers() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostContactMember($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosDependencys() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosDependency($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosEscalations() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostContactgroups() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostContactgroup($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostgroupMemberships() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostgroupMembership($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostCheckCommandParameters() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostCheckCommandParameter($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostParents() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostParent($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostTemplateInheritancesRelatedBySourceTemplate() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostTemplateInheritanceRelatedBySourceTemplate($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getAutodiscoveryDevices() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addAutodiscoveryDevice($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getAutodiscoveryDeviceTemplateMatchs() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addAutodiscoveryDeviceTemplateMatch($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosHostCustomObjectVars() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosHostCustomObjectVar($relObj->copy($deepCopy));
			}
		}
		
		$copyObj->setNew(true);
		$copyObj->setId(NULL);
		return $copyObj;

	}

} // NagiosHostTemplate
