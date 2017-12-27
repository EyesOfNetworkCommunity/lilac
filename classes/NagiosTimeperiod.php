<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_timeperiod' table.
 *
 * Nagios Timeperiods
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosTimeperiod extends BaseNagiosTimeperiod {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'timeperiod');
		}
		
		$setName = parent::setName($v);
		
		return $setName;
	}

	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->renameAction($this->getName(),$this->getName(),'timeperiod','delete');
		}

		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'timeperiod',$action);
		}

		return parent::save($con);

	}

	public function duplicate() {
	
		$copyObj = parent::copy();
		$copyObj->setNew(false);
		$deepCopy=true;
		foreach ($this->getNagiosTimeperiodEntrys() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosTimeperiodEntry($relObj->copy($deepCopy));
			}
		}
		foreach ($this->getNagiosTimeperiodExcludesRelatedByTimeperiodId() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosTimeperiodExcludeRelatedByTimeperiodId($relObj->copy($deepCopy));
			}
		}
		foreach ($this->getNagiosTimeperiodExcludesRelatedByExcludedTimeperiod() as $relObj) {
			if ($relObj !== $this) {  // ensure that we don't try to copy a reference to ourselves
				$copyObj->addNagiosTimeperiodExcludeRelatedByExcludedTimeperiod($relObj->copy($deepCopy));
			}
		}
		$copyObj->setNew(true);
		$copyObj->setId(NULL);
		return $copyObj;
	
	}
	
} // NagiosTimeperiod
