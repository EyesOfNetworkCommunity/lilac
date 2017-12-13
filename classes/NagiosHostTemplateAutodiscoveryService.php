<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_template_autodiscovery_service' table.
 *
 * 
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostTemplateAutodiscoveryService extends BaseNagiosHostTemplateAutodiscoveryService {

	public function delete(PropelPDO $con = null) {

		parent::delete($con);

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'hostTemplate','modify');
		}
		
	}

	public function save(PropelPDO $con = null) {

		parent::save($con);

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'hostTemplate','modify');
		}

	}

} // NagiosHostTemplateAutodiscoveryService
