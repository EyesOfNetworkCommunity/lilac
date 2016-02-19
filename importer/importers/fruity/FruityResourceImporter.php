<?php

class FruityResourceImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityResourceImporter beginning to import Resources.");
		// Resources
		$res = $this->dbConn->query("SELECT * FROM nagios_resources");
		// Fruity has just one record in the resources, if we get it, import 
		// it.
		$row = $res->fetch(PDO::FETCH_ASSOC);
		// Get our resources obj.
		$resourceCfg = NagiosResourcePeer::doSelectOne(new Criteria());
		if(!$resourceCfg) {
			$resourceCfg = new NagiosResource();
			$resourceCfg->save();
		}
		foreach($row as $key => $val) {
			unset($name);
			if($key == "id")
				continue;
			// Iterate through and, if we have a valid key, we set it to 
			// the NagiosResource obj.	
			try {
				$name = NagiosResourcePeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
			} catch(Exception $e) {
				$job->addNotice("Fruity Resource Importer: Was unable to store unsupported value: " . $key);
			}
			if(!empty($name)) {
				$method = "set" . $name;
				$resourceCfg->$method($val);
			}
		}
		$resourceCfg->save();	// Save resources configuration
		$job->addNotice("FruityResourceImporter finished importing Resources.");
	}
}


