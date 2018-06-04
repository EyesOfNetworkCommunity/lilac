<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_check_command_parameter' table.
 *
 * Parameter for Host Check Command
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostCheckCommandParameter extends BaseNagiosHostCheckCommandParameter {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getHostTemplate() != null){
				$object = NagiosHostTemplatePeer::retrieveByPK($this->getHostTemplate());
				$JobExport->insertAction($object->getName(),'hosttemplate','modify');
			} else {
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
			}
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getHostTemplate() != null){
				$object = NagiosHostTemplatePeer::retrieveByPK($this->getHostTemplate());
				$JobExport->insertAction($object->getName(),'hosttemplate','modify');
			} else {
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
			}
		}

		return parent::save($con);

	}

} // NagiosHostCheckCommandParameter
