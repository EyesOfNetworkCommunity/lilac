<?php

class FruityDependencyImporter extends FruityImporter {

	public function import() {
		$engine = $this->getEngine();
		$job = $engine->getJob();
		$job->addNotice("FruityDependencyImporter beginning to import Dependency Configuration.");
		foreach($this->dbConn->query("SELECT * FROM nagios_dependencies", PDO::FETCH_ASSOC) as $dependency) {
			$newDependency = new NagiosDependency();
			if(!empty($dependency['service_id'])) {
				// This is a service dependency
				$lilacService = $this->getLilacServiceById($dependency['service_id']);
				if(!$lilacService) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac service with an id matching: " . $dependency['service_id']);
					return true;
				}
				$newDependency->setService($lilacService->getId());
				// Create Target
				$targetLilacService = $this->getLilacServiceById($dependency['target_service_id']);
				if(!$targetLilacService) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac service with an id matching: " . $dependency['target_service_id']);
					return true;
				}
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($newDependency);
				$target->setTargetService($targetLilacService->getId());
				$target->save();
			}
			else if(!empty($dependency['host_id'])) {
				// This is a host dependency
				$hostName = $this->getHostNameById($dependency['host_id']);
				$host = NagiosHostPeer::getByName($hostName);
				if(!$host) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac host with an name matching: " . $hostName);
					return true;
				}
				$newDependency->setHost($host->getId());
				// Create Target
				$hostName = $this->getHostNameById($dependency['target_host_id']);
				$host = NagiosHostPeer::getByName($hostName);
				if(!$host) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac host with an name matching: " . $hostName);
					return true;
				}
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($newDependency);
				$target->setTargetHost($host->getId());
				$target->save();
			}
			else if(!empty($dependency['service_template_id'])) {
				// This is a service template dependency
				$templateName = $this->getServiceTemplateNameById($dependency['service_template_id']);
				$template = NagiosServiceTemplatePeer::getByName($templateName);
				if(!$template) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac service template with  name matching: " . $templateName);
					return true;
				}
				$newDependency->setServiceTemplate($template->getId());
				// Create Target
				$targetLilacService = $this->getLilacServiceById($dependency['target_service_id']);
				if(!$targetLilacService) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac service with an id matching: " . $dependency['target_service_id']);
					return true;
				}
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($newDependency);
				$target->setTargetService($targetLilacService->getId());
				$target->save();

			}
			else if(!empty($dependency['host_template_id'])) {
				// This is for a host template dependency
				$templateName = $this->getHostTemplateNameById($dependency['host_template_id']);
				$template = NagiosHostTemplatePeer::getByName($templateName);
				if(!$template) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac host template with  name matching: " . $templateName);
					return true;
				}
				$newDependency->setHostTemplate($template->getId());
				$hostName = $this->getHostNameById($dependency['target_host_id']);
				$host = NagiosHostPeer::getByName($hostName);
				if(!$host) {
					$job->addNotice("Fruity Dependency Importer: Failed to get Lilac host with an name matching: " . $hostName);
					return true;
				}
				$target = new NagiosDependencyTarget();
				$target->setNagiosDependency($newDependency);
				$target->setTargetHost($host->getId());
				$target->save();

			}
			foreach($dependency as $key => $val) {
				unset($name);
				if($key == "dependency_id" || $key == "host_id" || $key == "host_template_id" || $key == "service_template_id" || $key == "service_id" || $key == "target_service_id" || $key == "target_host_id") {
					continue;
				}
				if($key == "command_name")
					$key = "name";
				if($key == "command_line")
					$key = "line";
				if($key == "command_desc")
					$key = "description";
				try {
					$name = NagiosDependencyPeer::translateFieldName($key, BasePeer::TYPE_FIELDNAME, BasePeer::TYPE_PHPNAME);
				} catch(Exception $e) {
					$job->addNotice("Fruity Dependency Importer: Was unable to store unsupported value: " . $key);
				}
				if(!empty($name)) {
					$method = "set" .$name;
					$newDependency->$method($val);
				}
			}
			$newDependency->save();
			$newDependency->setName("Imported Dependency #" . $newDependency->getId());
			$newDependency->save();
			$job->addNotice("FruityDependencyImporter imported dependency with id: " . $newDependency->getId());
		}
		$job->addNotice("FruityDependencyImporter finished importing Dependency Configuration.");
	}
}


