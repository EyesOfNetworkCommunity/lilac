<?php

class FruityTimeperiodImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityTimeperiodImporter beginning to import Timeperiod Configuration.");
		// Timeperiods
		foreach($this->dbConn->query("SELECT * FROM nagios_timeperiods", PDO::FETCH_ASSOC) as $timeperiod) {
			// Check for existing timeperiod
			if(NagiosTimeperiodPeer::getByName($timeperiod['timeperiod_name'])) {
				$job->addNotice("Fruity Timeperiod Importer:  The timeperiod " . $timeperiod['timeperiod_name'] . " already exists.  Aborting it's import.");
				continue;
			}
			$newTimeperiod = new NagiosTimeperiod();
			$newTimeperiod->setName($timeperiod['timeperiod_name']);
			$newTimeperiod->setAlias($timeperiod['alias']);
			$newTimeperiod->save();
			if(!empty($timeperiod['sunday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('sunday');
				$entry->setValue($timeperiod['sunday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['monday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('monday');
				$entry->setValue($timeperiod['monday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['tuesday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('tuesday');
				$entry->setValue($timeperiod['tuesday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['wednesday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('wednesday');
				$entry->setValue($timeperiod['wednesday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['thursday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('thursday');
				$entry->setValue($timeperiod['thursday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['friday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('friday');
				$entry->setValue($timeperiod['friday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
			if(!empty($timeperiod['saturday'])) {
				$entry = new NagiosTimeperiodEntry();
				$entry->setEntry('saturday');
				$entry->setValue($timeperiod['saturday']);
				$entry->setNagiosTimeperiod($newTimeperiod);
				$entry->save();
			}
		}
		$job->addNotice("FruityTimeperiodImporter finished importing Timeperiod Configuration.");
	}
}


