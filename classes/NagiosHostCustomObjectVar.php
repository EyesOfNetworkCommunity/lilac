<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_custom_object_var' table.
 *
 * Custom Object Variables for Host
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostCustomObjectVar extends BaseNagiosHostCustomObjectVar 
{
	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getHost() != null){
				$objectHost = NagiosHostPeer::retrieveByPK($this->getHost());
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
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
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
			}elseif($this->getHostTemplate() != null){
				$objectHost = NagiosHostTemplatePeer::retrieveByPK($this->getHostTemplate());
				$JobExport->insertAction($objectHost->getName(),'hosttemplate','modify');
			}
		}

		return parent::save($con);

	}
	
	// We modify setVarName($v) to save all values uppercase
	public function setVarName($v)
	{
		$v = strtoupper($v);
		return parent::setVarName($v);
	}
	
} // NagiosHostCustomObjectVar
