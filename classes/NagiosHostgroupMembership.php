<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_hostgroup_membership' table.
 *
 * Hostgroup Membership for Host
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostgroupMembership extends BaseNagiosHostgroupMembership {
	
	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getHost() != null){
				$objectHost = NagiosHostPeer::retrieveByPK($this->getHost());
				$JobExport->insertAction($objectHost->getName(),'host','modify');
			}elseif($this->getHostTemplate() != null){
				$objectHost = NagiosHostTemplatePeer::retrieveByPK($this->getHostTemplate());
				$JobExport->insertAction($objectHost->getName(),'hosttemplate','modify');
			}
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getHost() != null){
				$objectHost = NagiosHostPeer::retrieveByPK($this->getHost());
				$JobExport->insertAction($objectHost->getName(),'host','modify');
			}elseif($this->getHostTemplate() != null){
				$objectHost = NagiosHostTemplatePeer::retrieveByPK($this->getHostTemplate());
				$JobExport->insertAction($objectHost->getName(),'hosttemplate','modify');
			}
		}
		
		return parent::save($con);

	}

} // NagiosHostgroupMembership
