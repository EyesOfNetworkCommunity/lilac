<?php

class FruityMainImporter extends FruityImporter {

	public function import() {
		global $lilac;
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityMainImporter beginning to import Main Configuration.");
		$res = $this->dbConn->query("SELECT * FROM nagios_main");
		// Fruity has just one record in the main, if we get it, import 
		// it.
		$row = $res->fetch(PDO::FETCH_ASSOC);
		// Get our main obj.
		$mainConfig = $lilac->get_main_conf();
		foreach($row as $key => $val) {
			unset($name);
			if($key == "id" || $key == "p1_file" || $key == "comment_file" || $key == "downtime_file" || $key == "aggregate_status_updates")
				continue;
			if($key == "service_perfdata_template")
				$key = "service_perfdata_file_template";
			if($key == "host_perfdata_template")
				$key = "host_perfdata_file_template";
			if($key == "global_host_event_handler") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "global_service_event_handler") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "ocsp_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "ochp_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "host_perfdata_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "service_perfdata_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "host_perfdata_file_processing_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}
			if($key == "service_perfdata_file_processing_command") {
				$commandName = $this->getCommandNameById($val);
				$command = NagiosCommandPeer::getByName($commandName);
				if($command) {
					$val = $command->getId();
				}
				else {
					$val = null;
				}
			}

			try {
				$name = NagiosMainConfigurationPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Main Configuration: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$mainConfig->$method($val);
			}
		}
		$mainConfig->save();	// Save main configuration

		// Broker modules
		foreach($this->dbConn->query("SELECT * FROM nagios_broker_modules", PDO::FETCH_ASSOC) as $brokerModule) {
			$newModule = new NagiosBrokerModule();
			foreach($brokerModule as $key => $val) {
				unset($name);
				if($key == "module_id")
					continue;
				if($key == "module_line")
					$key = "line";
				try {
					$name = NagiosBrokerModulePeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
				} catch(Exception $e) {
					$job->addNotice("Broker Module: Was unable to store unsupported value: " . $key);
				}
				if(!empty($name)) {
					$method = "set" .$name;
					$newModule->$method($val);
				}
			}
			$newModule->save();
		}

		$job->addNotice("FruityMainImporter finished importing Main Configuration.");
	}
}


