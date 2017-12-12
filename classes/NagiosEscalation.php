<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_escalation' table.
 *
 * Nagios Escalation
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosEscalation extends BaseNagiosEscalation {
	
	public function setEscalationPeriodByName($name) {
		$timeperiod = NagiosTimeperiodPeer::getByName($name);
		if(!$timeperiod)
			return false;
		return $timeperiod;
	}

} // NagiosEscalation
