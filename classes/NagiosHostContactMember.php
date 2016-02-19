<?php

require 'om/BaseNagiosHostContactMember.php';


/**
 * Skeleton subclass for representing a row from the 'nagios_host_contact_member' table.
 *
 * Contacts which belong to host templates or hosts
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class NagiosHostContactMember extends BaseNagiosHostContactMember {

	/**
	 * Initializes internal state of NagiosHostContactMember object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // NagiosHostContactMember
