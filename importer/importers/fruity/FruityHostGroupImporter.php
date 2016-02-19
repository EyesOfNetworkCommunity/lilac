<?php

class FruityHostGroupImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityHostGroupImporter beginning to import Host Group Configuration.");
		// Host groups
		foreach($this->dbConn->query("SELECT * FROM nagios_hostgroups", PDO::FETCH_ASSOC) as $hostgroupInfo) {
			// Check to see if hostgroup exists
			$tempHostgroup = NagiosHostgroupPeer::getByName($hostgroupInfo['hostgroup_name']);
			if($tempHostgroup) {
				$job->addNotice("Fruity Host Group Importer: Host group " . $hostgroupInfo['hostgroup_name'] . " already exists, skipping import.");
				continue;
			}
			// Let's create a hostgroup
			$newHostgroup = new NagiosHostgroup();
			$newHostgroup->setName($hostgroupInfo['hostgroup_name']);
			$newHostgroup->setAlias($hostgroupInfo['alias']);
			$newHostgroup->save();
		}		
		$job->addNotice("FruityHostGroupImporter finished importing Host Group Configuration.");
	}
}


