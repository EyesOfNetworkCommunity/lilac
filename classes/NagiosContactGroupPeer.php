<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_contact_group' table.
 *
 * Nagios Contact Group
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactGroupPeer extends BaseNagiosContactGroupPeer {
	
    public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosContactGroupPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$contactgroup = NagiosContactGroupPeer::doSelectOne($c);
		if(!$contactgroup)
			return false;
		return $contactgroup;
    }

} // NagiosContactGroupPeer
