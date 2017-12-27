<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_dependency' table.
 *
 * Nagios Dependency
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosDependency extends BaseNagiosDependency {
	
    public function getType() {
        if($this->getNagiosService())
            return "service";
        if($this->getNagiosServiceTemplate())
            return "servicetemplate";
        if($this->getNagiosHost())
            return "host";
        if($this->getNagiosHostTemplate())
            return "hosttemplate";
        if($this->getNagiosHostgroup())
            return "hostgroup";
    }

    public function setDependencyPeriodByName($name) {
        $timeperiod = NagiosTimeperiodPeer::getByName($name);
        if(!$timeperiod)
        	return false;
        $this->setNagiosTimeperiod($timeperiod);
        $this->save();
    }

} // NagiosDependency
