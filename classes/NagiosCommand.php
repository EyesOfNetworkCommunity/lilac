<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_command' table.
 *
 * Nagios Command
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosCommand extends BaseNagiosCommand {
	
	public function setName($v) {
		
		$JobExport=new EoN_Job_Exporter();
		$action = ($this->isNew()) ? "add" : "modify";
		
		if($action == "modify" && $v!=$this->getName()){
			$JobExport->renameAction($v,$this->getName(),'command');
		}
		
		$setName = parent::setName($v);
		
		return $setName;
	}
	
	public function delete(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
		if($con == null || $con == ""){
			$JobExport->renameAction($this->getName(),$this->getName(),'command','delete');
		}
		
		return parent::delete($con);
		
	}

	public function save(PropelPDO $con = null) {

		$JobExport=new EoN_Job_Exporter();
	
		if($con == null || $con == ""){	
			$action = ($this->isNew()) ? "add" : "modify";
			$JobExport->insertAction($this->getName(),'command',$action);
		}

		return parent::save($con);
		
	}

	public function updateFromArray($source) {
		if(isset($source['command_name'])) $this->setName($source['command_name']);
		if(isset($source['command_desc'])) $this->setDescription($source['command_desc']);
		if(isset($source['command_line'])) $this->setLine($source['command_line']);
	}

	public function duplicate() {
		return parent::copy();
	}
	
} // NagiosCommand
