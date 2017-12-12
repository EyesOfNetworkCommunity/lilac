<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_host' table.
 *
 * Nagios Host
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosHostPeer extends BaseNagiosHostPeer {
	
	static public function getByName($name) {
		$c = new Criteria();
		$c->add(NagiosHostPeer::NAME, $name);
		$c->setIgnoreCase(true);
		$host = NagiosHostPeer::doSelectOne($c);
		if(!$host)
			return false;
			
		return $host;
	}

	static public function getTopLevelHosts() {
		$con = Propel::getConnection(BaseNagiosHostPeer::DATABASE_NAME);
		$sql = "SELECT * from nagios_host WHERE (select count(*) FROM nagios_host_parent WHERE nagios_host_parent.child_host = nagios_host.id) = 0 ORDER BY nagios_host.name";
		$stmt = $con->prepare($sql);
		$stmt->execute();
		$hosts = NagiosHostPeer::populateObjects($stmt);
		
		return $hosts;
	}

} // NagiosHostPeer
