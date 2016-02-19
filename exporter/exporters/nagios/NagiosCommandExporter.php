<?php

class NagiosCommandExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export() {
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosCommandExporter attempting to export command configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosCommandExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$commands = NagiosCommandPeer::doSelect(new Criteria());

		foreach($commands as $command) {
			fputs($fp, "define command {\n");
			$finalArray = array();
			$values = $command->toArray(BasePeer::TYPE_FIELDNAME);
			foreach($values as $key => $value) {
				if($key == 'id' || $key == 'description') {
					continue;
				}
				if($value === null) {
					continue;
				}
				if($value === false) {
					$value = '0';
				}
				if($key == "name") {
					$key = "command_name";
				}
				if($key == "line") {
					$key = "command_line";
				}			
				$finalArray[$key] = $value;
			}
			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosCommandExporter complete.");
		return true;
	}
	
}

?>
