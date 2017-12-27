<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_hostgroup' table.
 *
 * Nagios Hostgroup
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostgroupPeer extends BaseNagiosHostgroupPeer {
	
    public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosHostgroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$hostgroup = NagiosHostgroupPeer::doSelectOne($c);
		if(!$hostgroup)
			return false;
		return $hostgroup;
    }

} // NagiosHostgroupPeer
