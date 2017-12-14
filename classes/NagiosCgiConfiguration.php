<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_cgi_configuration' table.
 *
 * CGI Configuration
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosCgiConfiguration extends BaseNagiosCgiConfiguration {
	
	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();		
		if($con == null || $con == ""){
			$JobExport->insertAction('cgi_config','nagios_cgi_configuration','modify');
		}

		parent::save($con);

	}

} // NagiosCgiConfiguration
