<?php

require 'om/BaseNagiosEscalationContact.php';


/**
 * Skeleton subclass for representing a row from the 'nagios_escalation_contact' table.
 *
 * Contact Group for Escalation
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class NagiosEscalationContact extends BaseNagiosEscalationContact {

	/**
	 * Initializes internal state of NagiosEscalationContact object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // NagiosEscalationContact
