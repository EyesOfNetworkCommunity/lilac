<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_contact' table.
 *
 * Nagios Contact
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosContactPeer extends BaseNagiosContactPeer {
	
	public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosContactPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$contact = NagiosContactPeer::doSelectOne($c);
		if(!$contact)
			return false;
		return $contact;
	}

} // NagiosContactPeer
