<?php

class NagiosEscalationExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	/**
	 * Enter description here...
	 *
	 * @param NagiosEscalation $escalation
	 * @param unknown_type $type
	 * @param unknown_type $targetObj
	 * @param unknown_type $subObj
	 */
	private function _exportEscalation($escalation, $type, $targetObj, $subObj = null) {
		global $lilac;
		$fp = $this->getOutputFile();
		
		if($type == "host") {
			$host = $targetObj;
			fputs($fp, "define hostescalation {\n");
			fputs($fp, "\thost_name\t" . $host->getName() . "\n");
		}
		else if($type == 'service') {
			$host = $subObj;
			$service = $targetObj;
			fputs($fp, "define serviceescalation {\n");
			fputs($fp, "\thost_name\t" . $host->getName() . "\n");
			fputs($fp, "\tservice_description\t" . $service->getDescription() . "\n");
		}
        else if($type == "hostgroup") {
            $hostgroup = $targetObj;
            fputs($fp, "define hostescalation {\n");
            fputs($fp, "\thostgroup_name\t" . $hostgroup->getName() . "\n");
        }
		// Get contacts
		$contacts = $escalation->getNagiosEscalationContacts();
		if(count($contacts)) {
			fputs($fp, "\tcontacts\t");
			$first = true;
			foreach($contacts as $membership) {
				$contact = $membership->getNagiosContact();
				if(!$first) {
					fputs($fp, ",");
				}
				else {
					$first = false;
				}
				fputs($fp, $contact->getName());
			}
			fputs($fp, "\n");
		}

		// Get contact groups
		$contactGroups = $escalation->getNagiosEscalationContactgroups();
		if(count($contactGroups)) {
			fputs($fp, "\tcontact_groups\t");
			$first = true;
			foreach($contactGroups as $membership) {
				$contactGroup = $membership->getNagiosContactGroup();
				if(!$first) {
					fputs($fp, ",");
				}
				else {
					$first = false;
				}
				fputs($fp, $contactGroup->getName());
			}
			fputs($fp, "\n");
		}

		if($escalation->getEscalationPeriod()) {
			fputs($fp, "\tescalation_period\t");
			$timePeriod = NagiosTimeperiodPeer::retrieveByPK($escalation->getEscalationPeriod());
			fputs($fp, $timePeriod->getName() . "\n");
		}
		
		if($escalation->getFirstNotification()) {
			fputs($fp, "\tfirst_notification\t" . $escalation->getFirstNotification() ."\n");
		}
		
		if($escalation->getLastNotification()) {
			fputs($fp, "\tlast_notification\t" . $escalation->getLastNotification() ."\n");
		}
		
		if($escalation->getNotificationInterval()) {
			fputs($fp, "\tnotification_interval\t" . $escalation->getNotificationInterval() ."\n");
		}
		
		if($escalation->getEscalationOptionsUp() != null || $escalation->getEscalationOptionsDown() != null || $escalation->getEscalationOptionsUnreachable() != null || $escalation->getEscalationOptionsOk() != null || $escalation->getEscalationOptionsWarning() != null || $escalation->getEscalationOptionsUnknown() != null || $escalation->getEscalationOptionsCritical() != null) {
			fputs($fp, "\tescalation_options\t");
			if($escalation->getEscalationOptionsUp()) {
				fputs($fp, "r");
				if($escalation->getEscalationOptionsDown() || $escalation->getEscalationOptionsUnreachable() || $escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
					fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsDown()) {
				fputs($fp, "d");
				if($escalation->getEscalationOptionsUnreachable() || $escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
					fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsUnreachable()) {
				fputs($fp, "u");
				if($escalation->getEscalationOptionsOk() || $escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
					fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsOk()) {
				fputs($fp, "o");
					if($escalation->getEscalationOptionsWarning() || $escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
						fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsWarning()) {
				fputs($fp, "w");
					if($escalation->getEscalationOptionsUnknown() || $escalation->getEscalationOptionsCritical() )
						fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsUnknown()) {
				fputs($fp, "u");
					if($escalation->getEscalationOptionsCritical() )
						fputs($fp, ",");
			}
			if($escalation->getEscalationOptionsCritical()) {
				fputs($fp, "c");
			}
			fputs($fp, "\n");
		}
		
		fputs($fp, "}\n");
		fputs($fp, "\n");
	}
	
	public function export() {
		global $lilac;
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosEscalationExporter attempting to export escalation configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosEscalationExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		

        $hostgroups = NagiosHostgroupPeer::doSelect(new Criteria());
        foreach($hostgroups as $hostgroup) {
            $job->addNotice("Processing escalations for hostgroup: " . $hostgroup->getName());
            $escalations = $hostgroup->getNagiosEscalations();
            foreach($escalations as $escalation) {
             $this->_exportEscalation($escalation, "hostgroup", $hostgroup);
            }
        }
		
		$hosts = NagiosHostPeer::doSelect(new Criteria());
		
		foreach($hosts as $host) {
			// Got hosts
			// Get inherited escalations first
			$job->addNotice("Processing escalations for host: " . $host->getName());
			$inheritedEscalations = $host->getInheritedEscalations();
			foreach($inheritedEscalations as $escalation) {
				$this->_exportEscalation($escalation, "host", $host);
			}
			$$escalations = $host->getNagiosEscalations();
			foreach($$escalations as $escalation) {
				$this->_exportEscalation($escalation, "host", $host);
			}
			// Get our services
			$inheritedServices = $host->getInheritedServices();
			foreach($inheritedServices as $service) {
				$job->addNotice("Processing escalations for service: " . $service->getDescription() . " on " . $host->getName());
				$serviceInheritedEscalations = $service->getInheritedEscalations();
				foreach($serviceInheritedEscalations as $escalation) {
					$this->_exportEscalation($escalation, "service", $service, $host);
				}
				
				$c = new Criteria();
				$c->add(NagiosEscalationPeer::HOST, $host->getId());
				$c->add(NagiosEscalationPeer::SERVICE, $service->getId());
				$serviceEscalations = NagiosEscalationPeer::doSelect($c);
				foreach($serviceEscalations as $escalation) {
					$this->_exportEscalation($escalation, "service", $service, $host);
				}
			}
			$services = $host->getNagiosServices();
			foreach($services as $service) {
				$job->addNotice("Processing escalations for service: " . $service->getDescription() . " on " . $host->getName());
				$serviceInheritedEscalations = $service->getInheritedEscalations();
				foreach($serviceInheritedEscalations as $escalation) {
					$this->_exportEscalation($escalation, "service", $service, $host);
				}
				$serviceEscalations = $service->getNagiosEscalations();
				foreach($serviceEscalations as $escalation) {
					$this->_exportEscalation($escalation, "service", $service, $host);
				}
			}
			$job->addNotice("Completed escalations export for host: " . $host->getName());
		}
		

		$job->addNotice("NagiosEscalationExporter complete.");
		return true;
	}
	
}

?>
