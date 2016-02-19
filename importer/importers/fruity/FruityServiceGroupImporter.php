<?php

class FruityServiceGroupImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityServiceGroupImporter beginning to import Service Group Configuration.");
		// service groups
		foreach($this->dbConn->query("SELECT * FROM nagios_servicegroups", PDO::FETCH_ASSOC) as $serviceGroup) {
			if(NagiosContactGroupPeer::getByName($serviceGroup['servicegroup_name'])) {
				$job->addNotice("Fruity Service Group Importer: Group " . $serviceGroup['servicegroup_name'] . " already exists.  Aborting it's import.");
				continue;
			}
			$newServiceGroup = new NagiosServiceGroup();
			$newServiceGroup->setName($serviceGroup['servicegroup_name']);
			$newServiceGroup->setAlias($serviceGroup['alias']);
			$newServiceGroup->save();
		}
		$job->addNotice("FruityServiceGroupImporter finished importing Service Group Configuration.");
	}
}


