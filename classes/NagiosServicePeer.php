<?php



/**
 * Skeleton subclass for performing query and update operations on the 'nagios_service' table.
 *
 * Nagios Service
 *
 * You should add additional methods to this class to meet the
 * application requirements.  This class will only be generated as
 * long as it does not already exist in the output directory.
 *
 * @package    propel.generator.
 */
class NagiosServicePeer extends BaseNagiosServicePeer {
	
	public static function doCountAll() {
		// Get total count of services for all hosts in the system.
		// It's kind of slow, but gets the job done.
		$hosts = NagiosHostPeer::doSelect(new Criteria());
		// All hosts
		$totalCount = 0;
		foreach($hosts as $host) {
			$services = $host->getNagiosServices();
			$inheritedServices = $host->getInheritedServices();
			$totalCount += count($inheritedServices);
			$totalCount += count($services);
		}
		return $totalCount;
	}

	public static function getByHostAndDescription($hostname, $description) {
		// First get host
		$host = NagiosHostPeer::getByName($hostname);
		if(!$host)
			return false;
		$c = new Criteria();
		$c->add(NagiosServicePeer::HOST, $host->getId());
		$c->add(NagiosServicePeer::DESCRIPTION, $description);
		$c->setIgnoreCase(true);
		$service = NagiosServicePeer::doSelectOne($c);
		if(!$service)
			return false;
		return $service;
	}

	public static function getByHostgroupAndDescription($hostgroupname, $description) {
		// First get hostgroup
		$hostgroup = NagiosHostgroupPeer::getByName($hostgroupname);
		if(!$hostgroup)
			return false;
		$c = new Criteria();
		$c->add(NagiosServicePeer::HOSTGROUP, $hostgroup->getId());
		$c->add(NagiosServicePeer::DESCRIPTION, $description);
		$c->setIgnoreCase(true);
		$service = NagiosServicePeer::doSelectOne($c);
		if(!$service)
			return false;
		return $service;

	}

	public static function getByHostTemplateAndDescription($hostTemplateName, $description) {
		// First get host template
		$template = NagiosHostTemplatePeer::getByName($hostTemplateName);
		if(!$template)
			return false;
		$c = new Criteria();
		$c->add(NagiosServicePeer::HOST_TEMPLATE, $template->getId());
		$c->add(NagiosServicePeer::DESCRIPTION, $description);
		$c->setIgnoreCase(true);
		$service = NagiosServicePeer::doSelectOne($c);
		if(!$service)
			return false;
		return $service;
	}

} // NagiosServicePeer
