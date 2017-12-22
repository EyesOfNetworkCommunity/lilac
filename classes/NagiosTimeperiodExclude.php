<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_timeperiod_exclude' table.
 *
 * Time Period Excludes
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosTimeperiodExclude extends BaseNagiosTimeperiodExclude {

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$NagiosTimeperiod = NagiosTimeperiodPeer::retrieveByPK($this->getTimeperiodId());
			$JobExport->insertAction($NagiosTimeperiod->getName(),'timeperiod','modify');
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$NagiosTimeperiod = NagiosTimeperiodPeer::retrieveByPK($this->getTimeperiodId());
			$JobExport->insertAction($NagiosTimeperiod->getName(),'timeperiod','modify');
		}

		return parent::save($con);

	}

} // NagiosTimeperiodExclude
