<?php

class FruityEscalationImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityEscalationImporter beginning to import Dependency Configuration.");
		foreach($this->dbConn->query("SELECT * FROM nagios_escalations", PDO::FETCH_ASSOC) as $escalation) {
			$newEscalation = new NagiosEscalation();
			if(!empty($escalation['service_id'])) {
				// This is a service escalation
				$lilacService = $this->getLilacServiceById($escalation['service_id']);
				if(!$lilacService) {
					$job->addNotice("Fruity Escalation Importer: Failed to get Lilac service with an id matching: " . $escalation['service_id']);
					return true;
				}
				$newEscalation->setService($lilacService->getId());
			}
			else if(!empty($escalation['host_id'])) {
				// This is a host escalation
				$hostName = $this->getHostNameById($escalation['host_id']);
				$host = NagiosHostPeer::getByName($hostName);
				if(!$host) {
					$job->addNotice("Fruity Escalation Importer: Failed to get Lilac host with an name matching: " . $hostName);
					return true;
				}
				$newEscalation->setHost($host->getId());
			}
			else if(!empty($escalation['service_template_id'])) {
				// This is a service template escalation
				$templateName = $this->getServiceTemplateNameById($escalation['service_template_id']);
				$template = NagiosServiceTemplatePeer::getByName($templateName);
				if(!$template) {
					$job->addNotice("Fruity Escalation Importer: Failed to get Lilac service template with  name matching: " . $templateName);
					return true;
				}
				$newEscalation->setServiceTemplate($template->getId());
			}
			else if(!empty($escalation['host_template_id'])) {
				// This is for a host template escalation
				$templateName = $this->getHostTemplateNameById($escalation['host_template_id']);
				$template = NagiosHostTemplatePeer::getByName($templateName);
				if(!$template) {
					$job->addNotice("Fruity Escalation Importer: Failed to get Lilac host template with  name matching: " . $templateName);
					return true;
				}
				$newEscalation->setHostTemplate($template->getId());
			}
			foreach($escalation as $key => $val) {
				unset($name);
				if($key == "escalation_id" || $key == "host_id" || $key == "host_template_id" || $key == "service_template_id" || $key == "service_id") {
					continue;
				}
				if($key == "escalation_description")
					$key = "description";
				if($key == "escalation_period") {
					$escalationName = $this->getTimeperiodNameById($id);
					if($escalationName) {
						$newEscalation->setEscalationPeriodByName($escalationName);
					}
					continue;
				}
				try {
					$name = NagiosEscalationPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
				} catch(Exception $e) {
					$job->addNotice("Fruity Escalation Importer: Was unable to store unsupported value: " . $key);
				}
				if(!empty($name)) {
					$method = "set" .$name;
					$newEscalation->$method($val);
				}
			}
			$newEscalation->save();
			// Handle escalation contact groups.
			foreach($this->dbConn->query("SELECT * FROM nagios_escalation_contactgroups WHERE escalation_id = " . $escalation['escalation_id'], PDO::FETCH_ASSOC) as $contactgroup) {
				$contactgroupName = $this->getContactGroupNameById($contactgroup['contactgroup_id']);
				if($contactgroupName) {
					$lilacContactGroup = NagiosContactGroupPeer::getByName($contactgroupName);
					if($lilacContactGroup) {
						$newContactGroup = new NagiosEscalationContactgroup();
						$newContactGroup->setEscalation($newEscalation->getId());
						$newContactGroup->setContactgroup($lilacContactGroup->getId());
						$newContactGroup->save();
					}
				}
			}
		}
		$job->addNotice("FruityEscalationImporter finished importing Escalation Configuration.");
	}
}


