<?php

require 'om/BaseNagiosTimeperiodExclude.php';


/**
 * Skeleton subclass for representing a row from the 'nagios_timeperiod_exclude' table.
 *
 * Time Period Excludes
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class NagiosTimeperiodExclude extends BaseNagiosTimeperiodExclude {

	/**
	 * Initializes internal state of NagiosTimeperiodExclude object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // NagiosTimeperiodExclude
