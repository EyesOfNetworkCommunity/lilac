<?php

class NagiosContactExporter extends NagiosExporter {
	
	public function init() {
		return true;
	}
	
	public function valid() {
		return true;
	}
	
	public function export() {
		// Grab our export job
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("NagiosContactExporter attempting to export contact configuration.");

		$fp = $this->getOutputFile();
		fputs($fp, "# Written by NagiosContactExporter from " . LILAC_NAME . " " . LILAC_VERSION . " on " . date("F j, Y, g:i a") . "\n\n");		
		
		$contacts = NagiosContactPeer::doSelect(new Criteria());
		
		foreach($contacts as $contact) {
			fputs($fp, "define contact {\n");
			$finalArray = array();
			$values = $contact->toArray(BasePeer::TYPE_FIELDNAME);
			foreach($values as $key => $value) {
				if($key == 'id' || 
					$key == 'host_notification_on_down' ||
					$key == 'host_notification_on_unreachable' ||
					$key == 'host_notification_on_recovery' ||
					$key == 'host_notification_on_flapping' ||
					$key == 'host_notification_on_scheduled_downtime' ||
					$key == 'service_notification_on_warning' ||
					$key == 'service_notification_on_unknown' ||
					$key == 'service_notification_on_critical' ||
					$key == 'service_notification_on_recovery' ||
					$key == 'service_notification_on_flapping') {
					continue;
				}
				if($key == 'name') {
					$key = 'contact_name';
				}
				if($value === null) {
					continue;
				}
				if($value === false) {
					$value = '0';
				}
				if($key == "host_notification_period" || $key == "service_notification_period") {
					$timeperiod = NagiosTimeperiodPeer::retrieveByPK($value);
					if(!$timeperiod) {
						$job->addError("Unable to find timeperiod with id: " . $value . " for " . $key);
						return false;
					}
					$value = $timeperiod->getName();
				}
				
				$finalArray[$key] = $value;
			}

			foreach($finalArray as $key => $val) {
				fputs($fp, "\t" . $key . "\t" . $val . "\n");
			}
			
			// Notification On changes
			if(!$contact->getHostNotificationOnDown() && !$contact->getHostNotificationOnUnreachable() && !$contact->getHostNotificationOnRecovery() && !$contact->getHostNotificationOnFlapping()) {
				// Do nothing
			}
			else {
				fputs($fp, "\thost_notification_options\t");
				if($contact->getHostNotificationOnDown()) {
					fputs($fp, "d");
					if($contact->getHostNotificationOnUnreachable() || $contact->getHostNotificationOnRecovery() || $contact->getHostNotificationOnFlapping()|| $contact->getHostNotificationOnScheduledDowntime())
						fputs($fp, ",");
				}
				if($contact->getHostNotificationOnUnreachable()) {
					fputs($fp, "u");
					if($contact->getHostNotificationOnRecovery() || $contact->getHostNotificationOnFlapping()|| $contact->getHostNotificationOnScheduledDowntime())
						fputs($fp, ",");
				}
				if($contact->getHostNotificationOnRecovery()) {
					fputs($fp, "r");
						if($contact->getHostNotificationOnFlapping()|| $contact->getHostNotificationOnScheduledDowntime())
							fputs($fp, ",");
				}
				if($contact->getHostNotificationOnFlapping()) {
					fputs($fp, "f");
						if($contact->getHostNotificationOnScheduledDowntime())
							fputs($fp, ",");
				}
				if($contact->getHostNotificationOnScheduledDowntime()) {
					fputs($fp, "s");
				}
				fputs($fp, "\n");
			}		
			if(!$contact->getServiceNotificationOnWarning() && !$contact->getServiceNotificationOnUnknown() && !$contact->getServiceNotificationOnCritical() && !$contact->getServiceNotificationOnRecovery()) {
				// Do nothing
			}
			else {
				fputs($fp, "\tservice_notification_options\t");
				if($contact->getServiceNotificationOnWarning()) {
					fputs($fp, "w");
					if($contact->getServiceNotificationOnUnknown() || $contact->getServiceNotificationOnCritical() || $contact->getServiceNotificationOnRecovery())
						fputs($fp, ",");
				}
				if($contact->getServiceNotificationOnUnknown()) {
					fputs($fp, "u");
					if($contact->getServiceNotificationOnCritical() || $contact->getServiceNotificationOnRecovery())
						fputs($fp, ",");
				}
				if($contact->getServiceNotificationOnCritical()) {
					fputs($fp, "c");
					if($contact->getServiceNotificationOnRecovery() || $contact->getServiceNotificationOnFlapping())
						fputs($fp, ",");
				}
				if($contact->getServiceNotificationOnRecovery()) {
					fputs($fp, "r");
					if($contact->getServiceNotificationOnFlapping())
						fputs($fp, ",");
				}
				if($contact->getServiceNotificationOnFlapping()) {
					fputs($fp, "f");
				}
				fputs($fp, "\n");
			}	
			
			// Get notification commands
			$c = new Criteria();
			$c->add(NagiosContactNotificationCommandPeer::TYPE, "host");
			$hostNotificationCommands = $contact->getNagiosContactNotificationCommands($c);
			$c = new Criteria();
			$c->add(NagiosContactNotificationCommandPeer::TYPE, "service");
			$serviceNotificationCommands = $contact->getNagiosContactNotificationCommands($c);

			if(count($hostNotificationCommands)) {
				fputs($fp, "\thost_notification_commands\t");
				$first = true;
				foreach($hostNotificationCommands as $command) {
					if(!$first) {
						fputs($fp, ",");
					}
					else {
						$first = false;
					}
					fputs($fp, $command->getNagiosCommand()->getName());
				}
				fputs($fp, "\n");
			}
			if(count($serviceNotificationCommands)) {
				fputs($fp, "\tservice_notification_commands\t");
				$first = true;
				foreach($serviceNotificationCommands as $command) {
					if(!$first) {
						fputs($fp, ",");
					}
					else {
						$first = false;
					}
					fputs($fp, $command->getNagiosCommand()->getName());
				}
				fputs($fp, "\n");
			}
			
			// Get Addresses
			$c = new Criteria();
			$c->addAscendingOrderByColumn(NagiosContactAddressPeer::ID);
			$addresses = $contact->getNagiosContactAddresss($c);
			if(count($addresses)) {
				$counter = 1;
				foreach($addresses as $address) {
					fputs($fp, "\taddress" . $counter++ . "\t" . $address->getAddress() . "\n");
				}
			}

			fputs($fp, "}\n");
			fputs($fp, "\n");
		}
		
		$job->addNotice("NagiosContactExporter complete.");
		return true;
	}
	
}

?>
