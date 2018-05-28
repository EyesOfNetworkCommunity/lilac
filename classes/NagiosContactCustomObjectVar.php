<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_contact_custom_object_var' table.
 *
 * Custom Object Variables for Contact
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactCustomObjectVar extends BaseNagiosContactCustomObjectVar 
{
	
	public function delete(PropelPDO $con = null) {
		
		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'contact','modify');
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->insertAction($this->getNagiosContact()->getName(),'contact','modify');
		}

		return parent::save($con);

	}
	
	// We modify setVarName($v) to save all values uppercase
	public function setVarName($v)
	{
		$v = strtoupper($v);
		return parent::setVarName($v);
	}
	
} // NagiosContactCustomObjectVar
