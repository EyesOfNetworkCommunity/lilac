<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_parent' table.
 *
 * Nagios Additional Host Parent Relationship
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostParent extends BaseNagiosHostParent {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$HostObject = NagiosHostPeer::retrieveByPK($this->getChildHost());
			if($HostObject) {
				$JobExport->insertAction($HostObject->getName(),'host','modify');
			}
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$HostObject = NagiosHostPeer::retrieveByPK($this->getChildHost());
			if($HostObject) {
				$JobExport->insertAction($HostObject->getName(),'host','modify');
			}
		}

		return parent::save($con);

	}

} // NagiosHostParent
