<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_contact_group_member' table.
 *
 * Member of a Nagios Contact Group
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactGroupMember extends BaseNagiosContactGroupMember {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'contactgroup','modify');
		}
		
		parent::delete($con);

	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'contactgroup','modify');
		}

		parent::save($con);

	}
	
} // NagiosContactGroupMember
