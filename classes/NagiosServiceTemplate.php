<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_service_template' table.
 *
 * Nagios Service Template
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceTemplate extends BaseNagiosServiceTemplate {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'servicetemplate');
		}
		
		return parent::setName($v);
	}
	
	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getName(),'servicetemplate','delete');
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'servicetemplate',$action);
		}

		return parent::save($con);

	}
	
	public function getValues($inherited = false, $notinherited = false) {
		$values = array();
		
		if(!$notinherited) {	
			$c = new Criteria();
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
			$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
		
			$inheritanceTemplates = NagiosServiceTemplateInheritancePeer::doSelect($c);
		
			if(count($inheritanceTemplates)) {
				// This template has inherited templates, let's bring their values in
				foreach($inheritanceTemplates as $inheritanceItem) {
					$serviceTemplate = $inheritanceItem->getNagiosServiceTemplateRelatedByTargetTemplate();
					$templateValues = $serviceTemplate->getValues(true);
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
		foreach(NagiosServiceTemplatePeer::getFieldNames() as $fieldName) {
			$colName = NagiosServiceTemplatePeer::translateFieldName($fieldName, BasePeer::TYPE_PHPNAME, BasePeer::TYPE_COLNAME);
			// At this point, $fieldName is the fieldname for each column in our table record
			$colName = strtolower(substr($colName, strlen("nagios_service_template.")));
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
		
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$parameters = $serviceTemplate->getInheritedCommandParameters(false);
				foreach($parameters as $parameter) {
					$parameterList[] = $parameter;
				}
			}
		}
		if(!$self) {
			$parameters = $this->getNagiosServiceCheckCommandParameters();
			foreach($parameters as $parameter) {
				$parameterList[] = $parameter;
			}
		}
		return $parameterList;
	}
	
	function getInheritedDependencies($self = true) {
		$dependenciesList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$dependencies = $serviceTemplate->getInheritedDependencies(false);
				if(count($dependencies))
					$dependenciesList = array_merge($dependenciesList, $dependencies);
			}
		}
		if(!$self) {
			$dependencies = $this->getNagiosDependencys();
			if(count($dependencies))
				$dependenciesList = array_merge($dependenciesList, $dependencies);
		}
		return $dependenciesList;
	}	

	function getInheritedEscalations($self = true) {
		$escalationsList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$escalations = $serviceTemplate->getInheritedEscalations(false);
				if(count($escalations))
					$escalationsList = array_merge($escalationsList, $escalations);
			}
		}
		if(!$self) {
			$escalations = $this->getNagiosEscalations();
			if(count($escalations))
				$escalationsList = array_merge($escalationsList, $escalations);			
		}
		return $escalationsList;
	}	
	
	function getInheritedServiceGroups($self = true) {
		$groupList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$servicegroup = $serviceTemplate->getInheritedServiceGroups(false);
				$groupList = array_merge($groupList, $servicegroup);
			}
		}
		if(!$self) {
			$servicegroupMemberships = $this->getNagiosServiceGroupMembers();
			foreach($servicegroupMemberships as $membership) {
				$servicegroup = $membership->getNagiosServiceGroup();
				$groupList[] = $servicegroup;
			}			
		}
		return $groupList;
	}	
	
	function getInheritedContactGroups($self = true) {
		$groupList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$contactgroups = $serviceTemplate->getInheritedContactGroups(false);
				$groupList = array_merge($groupList, $contactgroups);
			}
		}
		if(!$self) {
			$contatgroupMemberships = $this->getNagiosServiceContactGroupMembers();
			foreach($contatgroupMemberships as $membership) {
				$contactgroup = $membership->getNagiosContactGroup();
				$groupList[] = $contactgroup;
			}			
		}
		return $groupList;
	}

	function getInheritedContacts($self = true) {
		$contactsList = array();

		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$contacts = $serviceTemplate->getInheritedContacts(false);
				$contactsList = array_merge($contactsList, $contacts);
			}
		}
		if(!$self) {
			$contactMemberships = $this->getNagiosServiceContactMembers();
			foreach($contactMemberships as $membership) {
				$contact = $membership->getNagiosContact();
				$contactsList[] = $contact;
			}			
		}
		return $contactsList;
	}

	function getNagiosServiceTemplateInheritances() {
		$c = new Criteria();
		$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
		$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
		
		$list = array();
		$inheritanceTemplates = NagiosServiceTemplateInheritancePeer::doSelect($c);
		foreach($inheritanceTemplates as $inheritanceItem) {
			$list[] = $inheritanceItem->getNagiosServiceTemplateRelatedByTargetTemplate();
		}
		
		
		return $list;
	}

    function addCheckCommandParameter($value) {
        $parameter = new NagiosServiceCheckCommandParameter();
        $parameter->setNagiosServiceTemplate($this);
        $parameter->setParameter($value);
        $parameter->save();
        return true;
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
		$inheritedTemplates = $this->getNagiosServiceTemplateInheritances();
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
		$parameters = $this->getNagiosServiceCheckCommandParameters();
		foreach($parameters as $param) {
			$cmdObj['parameters'][] = array(
				'inherited' => ($self ? false : true),
				'source' => $this,
				'parameter' => $param
				);
		}
		return $cmdObj;
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

	function addServicegroupByName($name) {
		$c = new Criteria();
		$c->add(NagiosServiceGroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$servicegroup = NagiosServiceGroupPeer::doSelectOne($c);
		if(!$servicegroup) {
			return false;
		}
		// Okay, servicegroup is valid, check for relationship
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosServiceGroupMemberPeer::TEMPLATE, $this->getId());
			$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $servicegroup->getId());
			$relationship = NagiosServiceGroupMemberPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosServiceGroupMember();
		$relationship->setNagiosServiceTemplate($this);
		$relationship->setNagiosServiceGroup($servicegroup);
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
			$c->add(NagiosServiceContactMemberPeer::TEMPLATE, $this->getId());
			$c->add(NagiosServiceContactMemberPeer::CONTACT, $contact->getId());
			$relationship = NagiosServiceContactMemberPeer::doSelectOne($c);
			if($relationship)
				return false;
		}
		$relationship = new NagiosServiceContactMember();
		$relationship->setNagiosServiceTemplate($this);
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
			$c->add(NagiosServiceContactGroupMemberPeer::TEMPLATE, $this->getId());
			$c->add(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $contactgroup->getId());
			$relationship = NagiosServiceContactGroupMemberPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosServiceContactGroupMember();
		$relationship->setNagiosServiceTemplate($this);
		$relationship->setNagiosContactGroup($contactgroup);
		$relationship->save();
		return true;
	}

	function addTemplateInheritance($name) {
		// First get the template by name
		$template = NagiosServiceTemplatePeer::getByName($name);
		if(!$template) {
			return false;
		}
		// Check to see if inheritance already exists
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, $this->getId());
			$c->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $template->getId());
			$relationship = NagiosServiceTemplateInheritancePeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		// Okay, create new one
		$relationship = new NagiosServiceTemplateInheritance();
		$relationship->setNagiosServiceTemplateRelatedBySourceTemplate($this);
		$relationship->setNagiosServiceTemplateRelatedByTargetTemplate($template);
		$relationship->save();
		return true;
	}

	function getNagiosServiceCheckCommandParameters($criteria = null, PropelPDO $con = null) {
		if($criteria == null)
			$criteria = new Criteria();
		$criteria->addAscendingOrderByColumn(NagiosServiceCheckCommandParameterPeer::ID);
		return parent::getNagiosServiceCheckCommandParameters($criteria);
	}
	
	function getInheritedCustomObjectVariables($self = true) {
		$parameterList = array();
	
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
	
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$parameters = $serviceTemplate->getInheritedCustomObjectVariables(false);
				$parameterList = array_merge($parameterList, $parameters);
			}
		}
		$parameters = $this->getNagiosServiceTemplateCustomObjectVariables();
		foreach($parameters as $parameter) {
			if(!$self) {
				# Set (or overwrite) the parameter if we want to include our parameters
				$parameterList[$parameter->getVarName()] = $parameter;
			} else {
				# Make sure the inherited parameter is not used
				unset($parameterList[$parameter->getVarName()]);
			}
		}
		return $parameterList;
	}
	
	function getNagiosServiceTemplateCustomObjectVariables($criteria = null, PropelPDO $con = null) {
		if($criteria == null)
			$criteria = new Criteria();
		$criteria->addAscendingOrderByColumn(NagiosServiceCustomObjectVarPeer::VAR_NAME);
		return parent::getNagiosServiceCustomObjectVars($criteria);
	}

	function getDependentServices() {
		$services = array();
		$criteria = new Criteria();
		$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, NULL, Criteria::ISNOTNULL);
		$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->getId());
		$links = NagiosServiceTemplateInheritancePeer::doSelect($criteria);
		foreach($links as $link) {
			$service = $link->getNagiosService();
			$services[] = $service;
		}
		return $services;
	}

	function getDependentServiceTemplates() {
		$servicetemplates = array();
		$criteria = new Criteria();
		$criteria->add(NagiosServiceTemplateInheritancePeer::SOURCE_TEMPLATE, NULL, Criteria::ISNOTNULL);
		$criteria->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $this->getId());
		$links = NagiosServiceTemplateInheritancePeer::doSelect($criteria);
		foreach($links as $link) {
			$servicetemplate = $link->getNagiosServiceTemplateRelatedBySourceTemplate();
			$servicetemplates[] = $servicetemplate;
		}
		return $servicetemplates;
	}

	function getDependentCount() {
		return count($this->getDependentServices()) + count($this->getDependentServiceTemplates());
	}

	public function duplicate() {

		$copyObj = parent::copy();
		$copyObj->setNew(false);
		$deepCopy=true;

		foreach ($this->getNagiosServiceCheckCommandParameters() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceCheckCommandParameter($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosServiceGroupMembers() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceGroupMember($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosServiceContactMembers() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceContactMember($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosServiceContactGroupMembers() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceContactGroupMember($relObj->copy($deepCopy));
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

		foreach ($this->getNagiosServiceTemplateInheritancesRelatedBySourceTemplate() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceTemplateInheritanceRelatedBySourceTemplate($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosServiceCustomObjectVars() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosServiceCustomObjectVar($relObj->copy($deepCopy));
			}
		}		

		$copyObj->setNew(true);
		$copyObj->setId(NULL);
		return $copyObj;
	
	}
	
} // NagiosServiceTemplate
