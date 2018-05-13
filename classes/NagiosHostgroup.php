<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_hostgroup' table.
 *
 * Nagios Hostgroup
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostgroup extends BaseNagiosHostgroup {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'hostgroup');
		}
		
		return parent::setName($v);
	}
	
	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->renameAction($this->getName(),$this->getName(),'hostgroup','delete');
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'hostgroup',$action);
		}
	
		return parent::save($con);

	}
	
	/**
	 * We should update this.
	 *
	 * @return unknown
	 */
	public function getMembers() {
		$members = array();	// Members are indexed by host names
		$criteria = new Criteria();
		$criteria->add(NagiosHostgroupMembershipPeer::HOST, NULL, Criteria::ISNOTNULL);
		$criteria->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $this->getId());
		$memberships = NagiosHostgroupMembershipPeer::doSelect($criteria);
		foreach($memberships as $member) {
			$host = $member->getNagiosHost();
			if(!array_key_exists($host->getName(), $members)) {
				$members[$host->getName()] = $host;
			}
		}
		$criteria = new Criteria();
		$criteria->add(NagiosHostgroupMembershipPeer::HOST_TEMPLATE, NULL, Criteria::ISNOTNULL);
		$criteria->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $this->getId());
		$memberships = NagiosHostgroupMembershipPeer::doSelect($criteria);
		foreach($memberships as $member) {
			$template = $member->getNagiosHostTemplate();
			$members = $template->getAffectedHosts($members);
		}
		return $members;
	}

	public function addMembersByHostgroup($name) {
		// First get hostgroup
		$hostgroup = NagiosHostgroupPeer::getByName($name);
		if(!$hostgroup) {
			return false;
		}
		// Get the members
		$memberships = $hostgroup->getNagiosHostgroupMemberships();
		foreach($memberships as $membership) {
			$host = $membership->getNagiosHost();
			// Check to see if we already have this in our member list
			$id = $this->getId();
			if(!empty($id)) {
				$c = new Criteria();
				$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $this->getId());
				$c->add(NagiosHostgroupMembershipPeer::HOST, $host->getId());
				$relationship = NagiosHostgroupMembershipPeer::doSelectOne($c);
				if($relationship)
					continue;
			}
			// Create new relationship
			$relationship = new NagiosHostgroupMembership();
			$relationship->setNagiosHost($host);
			$relationship->setNagiosHostgroup($this);
			$relationship->save();
		}
		return true;
	}

	public function addMemberByName($name) {
		// Support for adding ALL hosts
		if($name == "*") {
			$hosts = NagiosHostPeer::doSelect(new Criteria());
			foreach($hosts as $host) {
				$this->addMemberByName($host->getName());
			}
			return true;
		}
		$host = NagiosHostPeer::getByName($name);
		if(!$host) {
			return false;
		}
		$id = $this->getId();
		if(!empty($id)) {
			$c = new Criteria();
			$c->add(NagiosHostgroupMembershipPeer::HOSTGROUP, $this->getId());
			$c->add(NagiosHostgroupMembershipPeer::HOST, $host->getId());
			$relationship = NagiosHostgroupMembershipPeer::doSelectOne($c);
			if($relationship)
				return true; 	// Already exists.	
		}
		// Create new relationship
		$relationship = new NagiosHostgroupMembership();
		$relationship->setNagiosHost($host);
		$relationship->setNagiosHostgroup($this);
		$relationship->save();
		return true;
	}

	public function duplicate() {
		return parent::copy();
	}
	
} // NagiosHostgroup
