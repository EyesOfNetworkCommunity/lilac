<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_contact_group' table.
 *
 * Nagios Contact Group
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactGroup extends BaseNagiosContactGroup {
	
	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getName(),'contactgroup','delete');
		}

		parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'contactgroup',$action);
		}

		parent::save($con);
		
	}
	
	public function addMemberByName($name) {
		$c = new Criteria();
		$c->add(NagiosContactPeer::NAME, $name);
		$contact = NagiosContactPeer::doSelectOne($c);
		if(!empty($contact)) {
			$membership = new NagiosContactGroupMember();
			$membership->setNagiosContactGroup($this);
			$membership->setNagiosContact($contact);
			$membership->save();
			return true;
		}
		return false;
	}

} // NagiosContactGroup
