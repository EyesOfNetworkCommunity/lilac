<?php

require_once 'om/BaseExportJob.php';


/**
 * Skeleton subclass for representing a row from the 'export_job' table.
 *
 * Export Job Information
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class ExportJob extends BaseExportJob {

	const CMD_START = "start";
	const CMD_STOP = "stop";

	const STATUS_PENDING = 1;
	const STATUS_STARTING = 2;
	const STATUS_RUNNING = 3;
	const STATUS_FINISHED = 4;
	const STATUS_FAILED = 50;
	
	public function __construct() {
		$this->setStats(serialize(new ImportStats()));
	}
	
	public function addLogEntry($text, $type = 3) {
		if(!ExportLogEntry::isValidType($type)) {
			return false;
		}
		$entry = new ExportLogEntry();
		$entry->setTime(time());
		$entry->setType($type);
		$entry->setExportJob($this);
		$entry->setText($text);
		$entry->save();
		return true;
	}

	public function setStatus($v) {
		parent::setStatus($v);
		$this->setStatusChangeTime(time());
	}
	
	public function clearLog() {
		$c = new Criteria();
		$c->add(ExportLogEntryPeer::JOB, $this->getId());
		ExportLogEntryPeer::doDelete($c);
	}
	
	public function addError($text) {
		$this->addLogEntry($text, ImportLogEntry::TYPE_ERROR);
	}
	
	public function addWarning($text) {
		$this->addLogEntry($text, ImportLogEntry::TYPE_WARNING);
	}
	
	public function addNotice($text) {
		$this->addLogEntry($text, ImportLogEntry::TYPE_NOTICE);
	}
	
} // ExportJob
