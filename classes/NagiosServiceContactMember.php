<?php

require 'om/BaseNagiosServiceContactMember.php';


/**
 * Skeleton subclass for representing a row from the 'nagios_service_contact_member' table.
 *
 * Contacts which belong to service templates or services
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class NagiosServiceContactMember extends BaseNagiosServiceContactMember {

	/**
	 * Initializes internal state of NagiosServiceContactMember object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}

} // NagiosServiceContactMember
