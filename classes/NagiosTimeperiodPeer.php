<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_timeperiod' table.
 *
 * Nagios Timeperiods
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosTimeperiodPeer extends BaseNagiosTimeperiodPeer {
	
    public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosTimeperiodPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$timeperiod = NagiosTimeperiodPeer::doSelectOne($c);
		if(!$timeperiod)
			return false;
		return $timeperiod;
    }

} // NagiosTimeperiodPeer
