<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_contactgroup' table.
 *
 * Contact Group for Host
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostContactgroup extends BaseNagiosHostContactgroup {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getNagiosHost() != null) {
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
			} else {
				$JobExport->insertAction($this->getNagiosHostTemplate()->getName(),'hosttemplate','modify');
			}
		}
		
		return parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			if($this->getNagiosHost() != null) {
				$JobExport->insertAction($this->getNagiosHost()->getName(),'host','modify');
			} else {
				$JobExport->insertAction($this->getNagiosHostTemplate()->getName(),'hosttemplate','modify');
			}
		}

		return parent::save($con);

	}

} // NagiosHostContactgroup
