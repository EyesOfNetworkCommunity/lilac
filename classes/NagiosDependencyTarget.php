<?php



/**
 * Skeleton subclass for representing a row from the 'nagios_dependency_target' table.
 *
 * Targets for a Dependency
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosDependencyTarget extends BaseNagiosDependencyTarget {
	
	/**
	 * Initializes internal state of NagiosDependencyTarget object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

    public function getType() {
        if($this->getNagiosService())
            return "service";
        if($this->getNagiosHost())
            return "host";
        if($this->getNagiosHostgroup())
            return "hostgroup";
    }

} // NagiosDependencyTarget
