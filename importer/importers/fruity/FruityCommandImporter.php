<?php

class FruityCommandImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityCommandImporter beginning to import Command Configuration.");
		foreach($this->dbConn->query("SELECT * FROM nagios_commands", PDO::FETCH_ASSOC) as $command) {
			$newCommand = new NagiosCommand();
			foreach($command as $key => $val) {
				unset($name);
				if($key == "command_id" || $key == "network_id")
					continue;
				if($key == "command_name")
					$key = "name";
				if($key == "command_line")
					$key = "line";
				if($key == "command_desc")
					$key = "description";
				try {
					$name = NagiosCommandPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
				} catch(Exception $e) {
					$job->addNotice("Fruity Command Importer: Was unable to store unsupported value: " . $key);
				}
				if(!empty($name)) {
					$method = "set" .$name;
					$newCommand->$method($val);
				}
			}
			// Check to see if the command already exists
			if(NagiosCommandPeer::getByName($newCommand->getName())) {
				$job->addNotice("Fruity Command Importer: The command " . $newCommand->getName() . " already exists.  Aborting it's import.");
			}
			else {
				$newCommand->save();
			}
		}
		$job->addNotice("FruityCommandImporter finished importing Command Configuration.");
	}
}


