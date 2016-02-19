<?php

require_once 'om/BaseExportLogEntry.php';


/**
 * Skeleton subclass for representing a row from the 'export_log_entry' table.
 *
 * Export Job Entry
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class ExportLogEntry extends BaseExportLogEntry {

	const TYPE_NOTICE = 1;
	const TYPE_WARNING = 2;
	const TYPE_ERROR = 3;

	public function isValidType($type) {
		return true;
		if($type != ImportLogEntry::TYPE_NOTICE &&
			$type != ImportLogEntry::TYPE_WARNING &&
			$type != ImportLogEntry::TYPE_ERROR) {
				return false;
			}
			return true;
	}
	
	public function getReadableType($type) {
		if($type == ImportLogEntry::TYPE_NOTICE) {
			return "NOTICE";
		}
		if($type == ImportLogEntry::TYPE_WARNING) {
			return "WARNING";
		}
		if($type == ImportLogEntry::TYPE_ERROR) {
			return "ERROR";
		}
	}	
	
} // ExportLogEntry
