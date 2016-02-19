<?php

class FruityCgiImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityCgiImporter beginning to import CGI Configuration.");
		// Cgi configuration
		$res = $this->dbConn->query("SELECT * FROM nagios_cgi");
		// Fruity has just one record in the resources, if we get it, import 
		// it.
		$row = $res->fetch(PDO::FETCH_ASSOC);
		// Get our resources obj.
		$cgiConfig = NagiosCgiConfigurationPeer::doSelectOne(new Criteria());
		if(!$cgiConfig) {
			$cgiConfig = new NagiosCgiConfiguration();
			$cgiConfig->save();
		}	
		foreach($row as $key => $val) {
			unset($name);
			if($key == "id" || $key == "show_context_help" || $key == "nagios_check_command")
				continue;
			// Iterate through and, if we have a valid key, we set it to 
			// the NagiosResource obj.	
			try {
				$name = NagiosCgiConfigurationPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("CGI Configuration Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$cgiConfig->$method($val);
			}
		}
		$cgiConfig->save();	// Save resources configuration
		$job->addNotice("FruityCgiImporter finished importing CGI Configuration.");
	}
}


