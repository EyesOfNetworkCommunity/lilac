<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_resource' table.
 *
 * Nagios Resource
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosResource extends BaseNagiosResource {
	
	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();		
		if($con == null || $con == ""){
			$JobExport->insertAction('resource','nagios_resource','modify');
		}

		return parent::save($con);

	}

} // NagiosResource
