<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_service_group' table.
 *
 * Nagios  Service Group
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceGroup extends BaseNagiosServiceGroup {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'servicegroup');
		}
		
		$setName = parent::setName($v);
		
		return $setName;
	}
	
	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->renameAction($this->getName(),$this->getName(),'servicegroup','delete');
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'servicegroup',$action);
		}
	
		return parent::save($con);

	}
	
	public function addService($service) {
		// First check to see if the membership exists
		$c = new Criteria();
		$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $this->getId());
		$c->add(NagiosServiceGroupMemberPeer::SERVICE, $service->getId());
		$membership = NagiosServiceGroupMemberPeer::doSelectOne($c);
		if($membership)
			return true;
		$membership = new NagiosServiceGroupMember();
		$membership->setNagiosServiceGroup($this);
		$membership->setNagiosService($service);
		$membership->save();
		return true;
	}

	public function addMembersByServiceGroup($name) {
		// First get servicegroup
		$servicegroup = NagiosServiceGroupPeer::getByName($name);
		if(!$servicegroup) {
			return false;
		}
		// Get the members
		$memberships = $servicegroup->getNagiosServiceGroupMembers();
		foreach($memberships as $membership) {
			$service = $membership->getNagiosService();
			// Check to see if we already have this in our member list
			$id = $this->getId();
			if(!empty($id)) {
				$c = new Criteria();
				$c->add(NagiosServiceGroupMemberPeer::SERVICE_GROUP, $this->getId());
				$c->add(NagiosServiceGroupMemberPeer::SERVICE, $service->getId());
				$relationship = NagiosServiceGroupMemberPeer::doSelectOne($c);
				if($relationship)
					continue;
			}
			// Create new relationship
			$relationship = new NagiosServiceGroupMember();
			$relationship->setNagiosService($service);
			$relationship->setNagiosServiceGroup($this);
			$relationship->save();
		}
		return true;
	}

	public function duplicate() {
		return parent::copy();
	}
	
} // NagiosServiceGroup
