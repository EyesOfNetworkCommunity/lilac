<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_service_check_command_parameter' table.
 *
 * Parameter for check command for service or service template
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceCheckCommandParameter extends BaseNagiosServiceCheckCommandParameter {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getTemplate() != null){
				$object = NagiosServiceTemplatePeer::retrieveByPK($this->getTemplate());
				$JobExport->insertAction($object->getName(),'servicetemplate','modify');
			}elseif($this->getService() != null){
				$object = NagiosServicePeer::retrieveByPK($this->getService());
				if($object->getHost() != null){
					$objectHost = NagiosHostPeer::retrieveByPK($object->getHost());
					$JobExport->insertAction($object->getDescription(),'service','modify', $objectHost->getName(), 'host');
				}elseif($object->getHostTemplate() != null){
					$objectHost = NagiosHostTemplatePeer::retrieveByPK($object->getHostTemplate());
					$JobExport->insertAction($object->getDescription(),'service','modify', $objectHost->getName(), 'hosttemplate');
				}
			}
		}

		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getTemplate() != null){
				$object = NagiosServiceTemplatePeer::retrieveByPK($this->getTemplate());
				$JobExport->insertAction($object->getName(),'servicetemplate','modify');
			}elseif($this->getService() != null){
				$object = NagiosServicePeer::retrieveByPK($this->getService());
				if($object->getHost() != null){
					$objectHost = NagiosHostPeer::retrieveByPK($object->getHost());
					$JobExport->insertAction($object->getDescription(),'service','modify', $objectHost->getName(), 'host');
				}elseif($object->getHostTemplate() != null){
					$objectHost = NagiosHostTemplatePeer::retrieveByPK($object->getHostTemplate());
					$JobExport->insertAction($object->getDescription(),'service','modify', $objectHost->getName(), 'hosttemplate');
				}
			}
		}

		return parent::save($con);

	}

} // NagiosServiceCheckCommandParameter
