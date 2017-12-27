<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_service_group' table.
 *
 * Nagios  Service Group
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServiceGroupPeer extends BaseNagiosServiceGroupPeer {
	
    public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosServiceGroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$servicegroup = NagiosServiceGroupPeer::doSelectOne($c);
		if(!$servicegroup)
			return false;
		return $servicegroup;
    }

} // NagiosServiceGroupPeer
