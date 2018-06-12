<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_service' table.
 *
 * Nagios Service
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosService extends BaseNagiosService {
	
	public function setDescription($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify"){
			if($this->getNagiosHost() != null) {
				$JobExport->insertAction($this->getDescription(),'service','delete',$this->getNagiosHost()->getName(),'host');
			}elseif($this->getNagiosHostTemplate()  != null) {
				$JobExport->insertAction($this->getDescription(),'service','delete',$this->getNagiosHostTemplate()->getName(),'hosttemplate');
			}
		}
		
		$setName = parent::setDescription($v);
		
		return $setName;
	}

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getNagiosHost()) {
				$JobExport->insertAction($this->getDescription(),'service','delete',$this->getNagiosHost()->getName(),'host');
			}elseif($this->getNagiosHostTemplate()) {
				$JobExport->insertAction($this->getDescription(),'service','delete',$this->getNagiosHostTemplate()->getName(),'hosttemplate');
			}
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			if($this->getNagiosHost()) {
				$JobExport->insertAction($this->getDescription(),'service',$action,$this->getNagiosHost()->getName(),'host');
			}elseif($this->getNagiosHostTemplate()) {
				$JobExport->insertAction($this->getDescription(),'service',$action,$this->getNagiosHostTemplate()->getName(),'hosttemplate');
			}
		}
		
		return parent::save($con);
		
	}

	public function getOwnerDescription() {
		if($this->getNagiosHost()) {
			return "Host " . $this->getNagiosHost()->getName();
		}
		else {
			if($this->getNagiosHostTemplate()) {
				return "Host Template " . $this->getNagiosHostTemplate()->getName();
			}
			else {
				if($this->getNagiosHostgroup()) {
					return "Hostgroup " . $this->getNagiosHostgroup()->getName();
				}
			}
		}
		return null;
	}
	
	public function getValues($inherited = false, $notinherited = false) {
		$values = array();
		
		if(!$notinherited) {	
			$c = new Criteria();
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $this->getId());
			$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
		
			$inheritanceTemplates = NagiosServiceTemplateInheritancePeer::doSelect($c);
		
			if(count($inheritanceTemplates)) {
				// This template has inherited templates, let's bring their values in
				foreach($inheritanceTemplates as $inheritanceItem) {
					$serviceTemplate = $inheritanceItem->getNagiosServiceTemplateRelatedByTargetTemplate();
					if($serviceTemplate)
					{
						$templateValues = $serviceTemplate->getValues(true);
						$values = array_merge($values, $templateValues);
					}
				}
			}
		} else {
			$cmdObj = $this->getInheritedCommandWithParameters();
			if(!empty($cmdObj['command'])) {
				$values["check_command"] = array(
					'inherited' => $inherited,
					'source' => array('id' => $this->getId(), 'name' => $this->getDescription()),
					'value' => $cmdObj['command']['command']->getId()
				);
			}
		}
		foreach(NagiosServicePeer::getFieldNames() as $fieldName) {
			$colName = NagiosServicePeer::translateFieldName($fieldName, BasePeer::TYPE_PHPNAME, BasePeer::TYPE_COLNAME);
			// At this point, $fieldName is the fieldname for each column in our table record
			$colName = strtolower(substr($colName, strlen("nagios_service.")));
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
						'source' => array('id' => $this->getId(), 'name' => $this->getDescription()),
						'value' => $val
					);
				}
			}
			
		}
		$service_description = $values["description"];
		unset($values["description"]);
		$values = array("description" => $service_description) + $values;
		return $values;
	}
	
	function getInheritedCommandParameters($self = true) {
		$parameterList = array();
		
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				$parameters = $serviceTemplate->getInheritedCommandParameters(false);
				$parameterList = array_merge($parameterList, $parameters);
			}
		}
		if(!$self) {
			$parameters = $this->getNagiosServiceCheckCommandParameters();
			$parameterList = array_merge($parameterList, $parameters);
		}
		return $parameterList;
	}
	
	function getInheritedDependencies($self = true) {
		$dependenciesList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				if($serviceTemplate)
				{
					$dependencies = $serviceTemplate->getInheritedDependencies(false);
					$dependenciesList = array_merge($dependenciesList, $dependencies);
				}
			}
		}
		if(!$self) {
			$dependencies = $this->getNagiosDependencys();
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
				if($serviceTemplate)
				{
					$escalations = $serviceTemplate->getInheritedEscalations(false);
					$escalationsList = array_merge($escalationsList, $escalations);
				}
			}
		}
		if(!$self) {
			$escalations = $this->getNagiosEscalations();
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
				if($serviceTemplate)
				{
					$servicegroup = $serviceTemplate->getInheritedServiceGroups(false);
					$groupList = array_merge($groupList, $servicegroup);
				}
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

	function getInheritedContacts($self = true) {
		$contactsList = array();

		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				if($serviceTemplate)
				{
					$contacts = $serviceTemplate->getInheritedContacts(false);
					$contactsList = array_merge($contactsList, $contacts);
				}
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


	function getInheritedContactGroups($self = true) {
		$groupList = array();
		$inheritanceTemplates = $this->getNagiosServiceTemplateInheritances();
		
		if(count($inheritanceTemplates)) {
			// This template has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				if($serviceTemplate)
				{
					$contactgroups = $serviceTemplate->getInheritedContactGroups(false);
					$groupList = array_merge($groupList, $contactgroups);
				}
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
    
    function addCheckCommandParameter($value) {
        $parameter = new NagiosServiceCheckCommandParameter();
        $parameter->setNagiosService($this);
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
	
	function getNagiosServiceTemplateInheritances($criteria = null, PropelPDO $con = null) {
		$c = new Criteria();
		$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE , $this->getId());
		$c->addAscendingOrderByColumn(NagiosServiceTemplateInheritancePeer::ORDER);
		
		$list = array();
		$inheritanceTemplates = NagiosServiceTemplateInheritancePeer::doSelect($c);
		foreach($inheritanceTemplates as $inheritanceItem) {
			$list[] = $inheritanceItem->getNagiosServiceTemplateRelatedByTargetTemplate();
		}
		
		
		return $list;
	}

    function integrityCheck() {
        // Get NagiosDependencyTargets with Target service being this service
        $c = new Criteria();
        $c->add(NagiosDependencyTargetPeer::TARGET_SERVICE, $this->getId());
        $targets = NagiosDependencyTargetPeer::doSelect($c);
        foreach($targets as $target) {
            $found = false;
            // Get host
            $host = $target->getNagiosHost();
            $services = $host->getNagiosServices();
            foreach($services as $service) {
            	if($service->getId() == $this->getId()) {
              		$found = true;
              		break;
             	}
            }
            if(!$found) {
            	$services = $host->getInheritedServices();
             	foreach($services as $service) {
              		if($service->getId() == $this->getId()) {
               			$found = true;
               			break;
              		}
             	}
            }
            if(!$found) {
            	$target->delete();
            }
        }
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
			$c->add(NagiosServiceGroupMemberPeer::SERVICE, $this->getId());
			$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $servicegroup->getId());
			$relationship = NagiosServiceGroupMemberPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosServiceGroupMember();
		$relationship->setNagiosService($this);
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
			$c->add(NagiosServiceContactMemberPeer::SERVICE, $this->getId());
			$c->add(NagiosServiceContactMemberPeer::CONTACT, $contact->getId());
			$relationship = NagiosServiceContactMemberPeer::doSelectOne($c);
			if($relationship)
				return false;
		}
		$relationship = new NagiosServiceContactMember();
		$relationship->setNagiosService($this);
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
			$c->add(NagiosServiceContactGroupMemberPeer::SERVICE, $this->getId());
			$c->add(NagiosServiceContactGroupMemberPeer::CONTACT_GROUP, $contactgroup->getId());
			$relationship = NagiosServiceContactGroupMemberPeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		$relationship = new NagiosServiceContactGroupMember();
		$relationship->setNagiosService($this);
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
			$c->add(NagiosServiceTemplateInheritancePeer::SOURCE_SERVICE, $this->getId());
			$c->add(NagiosServiceTemplateInheritancePeer::TARGET_TEMPLATE, $template->getId());
			$relationship = NagiosServiceTemplateInheritancePeer::doSelectOne($c);
			if($relationship) {
				return false;
			}
		}
		// Okay, create new one
		$relationship = new NagiosServiceTemplateInheritance();
		$relationship->setNagiosService($this);
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
			// This service has inherited templates, let's bring their values in
			foreach($inheritanceTemplates as $serviceTemplate) {
				if($serviceTemplate)
				{
					$parameters = $serviceTemplate->getInheritedCustomObjectVariables(false);
					$parameterList = array_merge($parameterList, $parameters);
				}
			}
		}
		$parameters = $this->getNagiosServiceCustomObjectVariables();
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
	
	function getNagiosServiceCustomObjectVariables($criteria = null, PropelPDO $con = null) {
		if($criteria == null)
			$criteria = new Criteria();
		$criteria->addAscendingOrderByColumn(NagiosServiceCustomObjectVarPeer::VAR_NAME);
		return parent::getNagiosServiceCustomObjectVars($criteria);
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

		foreach ($this->getNagiosDependencyTargets() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosDependencyTarget($relObj->copy($deepCopy));
			}
		}

		foreach ($this->getNagiosEscalations() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosEscalation($relObj->copy($deepCopy));
			}
		}

		$numInheritance="0";
		foreach ($this->getNagiosServiceTemplateInheritances() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$newInheritance = new NagiosServiceTemplateInheritance();
				$newInheritance->setNagiosService($copyObj);
				$newInheritance->setNagiosServiceTemplateRelatedByTargetTemplate($relObj);
				$newInheritance->setOrder($numInheritance);
				//$copyObj->addNagiosServiceTemplateInheritance($relObj->copy($deepCopy));
			}
			$numInheritance++;
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
	
} // NagiosService
