<?php

require 'om/BaseAutodiscoveryDevice.php';


/**
 * Skeleton subclass for representing a row from the 'autodiscovery_device' table.
 *
 * AutoDiscovery Found Device
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    
 */
class AutodiscoveryDevice extends BaseAutodiscoveryDevice {

	/**
	 * Initializes internal state of AutodiscoveryDevice object.
	 * @see        parent::__construct()
	 */
	public function __construct()
	{
		// Make sure that parent constructor is always invoked, since that
		// is where any default values for this object are set.
		parent::__construct();
	}
	
	public function getTemplateMatches() {
		$c = new Criteria();
		$c->add(AutodiscoveryDeviceTemplateMatchPeer::DEVICE_ID, $this->getId());
		$c->addDescendingOrderByColumn(AutodiscoveryDeviceTemplateMatchPeer::PERCENT);
		$c->addDescendingOrderByColumn(AutodiscoveryDeviceTemplateMatchPeer::COMPLEXITY);
		$matches = AutodiscoveryDeviceTemplateMatchPeer::doSelect($c);
		return $matches;
	}

} // AutodiscoveryDevice
