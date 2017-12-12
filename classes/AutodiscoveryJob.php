<?php



/**
 * Skeleton subclass for representing a row from the 'autodiscovery_job' table.
 *
 * AutoDiscovery Job Information
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class AutodiscoveryJob extends BaseAutodiscoveryJob {
	
	const CMD_START = "start";
	const CMD_STOP = "stop";
		
	const STATUS_PENDING = 1;
	const STATUS_STARTING = 2;
	const STATUS_RUNNING = 3;
	const STATUS_FINISHED = 4;
	const STATUS_FAILED = 50;
	
	/**
	 * Initializes internal state of AutodiscoveryJob object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

	
	public function addLogEntry($text, $type = 3) {
		if(!AutodiscoveryLogEntry::isValidType($type)) {
			return false;
		}
		$entry = new AutodiscoveryLogEntry();
		$entry->setTime(time());
		$entry->setType($type);
		$entry->setAutodiscoveryJob($this);
		$entry->setText($text);
		$entry->save();
		return true;
	}
	
	public function setStatus($v) {
		parent::setStatus($v);
		// update the status time
		$this->setStatusChangeTime(time());
	}
	
	public function clearLog() {
		$c = new Criteria();
		$c->add(AutodiscoveryLogEntryPeer::JOB, $this->getId());
		AutodiscoveryLogEntryPeer::doDelete($c);
	}
	
	public function addError($text) {
		$this->addLogEntry($text, AutodiscoveryLogEntry::TYPE_ERROR);
	}
	
	public function addWarning($text) {
		$this->addLogEntry($text, AutodiscoveryLogEntry::TYPE_WARNING);
	}
	
	public function addNotice($text) {
		$this->addLogEntry($text, AutodiscoveryLogEntry::TYPE_NOTICE);
	}	

} // AutodiscoveryJob
