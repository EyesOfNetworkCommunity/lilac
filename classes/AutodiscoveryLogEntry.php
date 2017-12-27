<?php



/**
 * Skeleton subclass for representing a row from the 'autodiscovery_log_entry' table.
 *
 * Export Job Entry
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class AutodiscoveryLogEntry extends BaseAutodiscoveryLogEntry {
	
	const TYPE_NOTICE = 1;
	const TYPE_WARNING = 2;
	const TYPE_ERROR = 3;

	/**
	 * Initializes internal state of AutodiscoveryLogEntry object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
	public function isValidType($type) {
		return true;
		if($type != AutodiscoveryLogEntry::TYPE_NOTICE &&
			$type != AutodiscoveryLogEntry::TYPE_WARNING &&
			$type != AutodiscoveryLogEntry::TYPE_ERROR) {
				return false;
			}
			return true;
	}
	
	public function getReadableType($type) {
		if($type == AutodiscoveryLogEntry::TYPE_NOTICE) {
			return "NOTICE";
		}
		if($type == AutodiscoveryLogEntry::TYPE_WARNING) {
			return "WARNING";
		}
		if($type == AutodiscoveryLogEntry::TYPE_ERROR) {
			return "ERROR";
		}
	}

} // AutodiscoveryLogEntry
