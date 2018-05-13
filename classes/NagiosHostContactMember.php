<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_host_contact_member' table.
 *
 * Contacts which belong to host templates or hosts
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostContactMember extends BaseNagiosHostContactMember {

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

} // NagiosHostContactMember
