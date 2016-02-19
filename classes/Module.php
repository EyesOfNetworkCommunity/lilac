<?php

/**
 * Base Module class to be used when writing Add On Modules.
 */
abstract class Module {
	private $_ormModule;	// The ORM AddOnModule which represents this module in ORM land
	private $_callingModule;	// Reference to the Module which is calling this module
	private $_context;	// The context which is passed by the calling Module

	private $__getParams = array(); 
	private $__notUsGetParams = array();	// Parameters from the URL which do not belong to us, but still needs to be passed to future urls.
	private $__postParams = array();
	private $__uploadedFiles = array();
	

	final public function __construct(AddOnModule $module, $context, Module $caller = null) {
		// Checks
		$tmpClassName = $module->getClassname();
		if((get_class($this) != $module->getClassname())) {
			throw new Exception("The creation of this module of type " . get_class($this) . " does not match the classname of the AddOnModule: " . $module->getClassname());
		}
		$this->_ormModule = $module;
		$this->_context = $context;
		$this->_callingModule = $caller;

		// Grab our getParameters
		$len = strlen("__m" . $this->_ormModule->getId() . "_");
		foreach($_GET as $getName => $getValue) {
			$pos = strpos($getName, "__m" . $this->_ormModule->getId() . "_");
			if($pos === 0) {
				// This variable belongs to us
				$actualName = substr($getName, $len);
				$this->__getParams[$actualName] = $getValue;
			}
			else {
				$this->__notUsGetParams[$getName] = $getValue;
			}
		}
		// Build our postParameters
		foreach($_POST as $postName => $postValue) {
			$pos = strpos($postName, "__m" . $this->_ormModule->getId() . "_");
			if($pos === 0) {
				// This variable belongs to us
				$actualName = substr($postName, $len);
				$this->__postParams[$actualName] = $postValue;
			}
		}
		// Build our uploadedFiles
		foreach($_FILES as $fileName => $fileValue) {
			$pos = strpos($fileName, "__m" . $this->_ormModule->getId() . "_");
			if($pos === 0) {
				// This variable belongs to us
				$actualName = substr($fileName, $len);
				$this->__fileParams[$actualName] = $fileValue;
			}
		}
		$this->init();
	}	

	final public function getId() {
		return $this->_ormModule->getId();
	}

	final public function getContext() {
		return $this->_context;
	}

	final protected function getParamName($name) {
		$newName = "__m" . $this->_ormModule->getId() . "_" . trim($name);
		return $newName;
	}

	final protected function buildURL($pairs) {
		if(!is_array($pairs)) {
			throw new Exception("Arguement to buildURL must be an associative array");
		}
		$url = $_SERVER['PHP_SELF'] . "?";
		// Add our not us values
		$first = true;
		foreach($this->__notUsGetParams as $key => $val) {
			if(!$first)
				$url .= "&";
			$first = false;
			$url .= $key . "=" . urlencode($val);
		}
		foreach($pairs as $key => $val) {
			$name = $this->getParamName($key);
			if(!$first)
				$url .= "&";
			$first = false;
			$url .= $name . "=" . urlencode($val);
		}
		return $url;
	}

	final protected function getUrlParam($name) {
		if(!array_key_exists($name, $this->__getParams))
		   return false;
		return $this->__getParams[$name];
	}

	final protected function getPostParam($name) {
		if(!array_key_exists($name, $this->__postParams))
		   return false;
		return $this->__postParams[$name];
	}

	final protected function getUploadedFile($name) {
		if(!array_key_exists($name, $this->__uploadedFiles))
		   return false;
		return $this->__uploadedFiles[$name];
	}

	final protected function getAddOnModule() {
		return $this->_ormModule;
	}

	final protected function getAddOnUrl() {
		$addOn = $this->_ormModule->getAddOnRelatedByAddOn();
		$url = $addOn->getPath();
		if(empty($url))
			return false;
		return $url . "/";
	}

	final protected function getCallingModule() {
		return $this->_callingModule;
	}

	final protected function createModulesByHook($hook, $context = null) {
		$c = new Criteria();
		$c->add(AddOnModuleHookPeer::ADD_ON_MODULE, $this->_ormModule->getId());
		$c->add(AddOnModuleHookPeer::NAME, $hook);
		$c->setIgnoreCase(true);
		$hook = AddOnModuleHookPeer::doSelectOne($c);
		if(!$hook)
			return false;
		$registrations = $hook->getAddOnModuleHookRegistrations();
		$modules = array();
		foreach($registrations as $registration) {
			$addOnModule = $registration->getAddOnModuleRelatedByAddOnModule();
			if($addOnModule) {
				// Okay, let's load up the class.
				// First, make sure we include the class file.
				if(!file_exists(dirname(__FILE__) . "/../addons/" . $addOnModule->getAddOnRelatedByAddOn()->getPath() . "/modules/" . $addOnModule->getClassName() . ".php")) {
					throw new Exception("The module class file for " . $addOnModule->getClassName() . " could not be found.");
				}
				require_once(dirname(__FILE__) . "/../addons/" . $addOnModule->getAddOnRelatedByAddOn()->getPath() . "/modules/" . $addOnModule->getClassName() . ".php");
				$className = $addOnModule->getClassName();
				$modules[] = new $className($addOnModule, $context == null ? $this->getContext() : $context, $this);
			}
		}
		return $modules;
	}

	final protected function getDynamicData($name = null) {
		$c = new Criteria();
		$c->add(AddOnModuleDynamicDataPeer::ADD_ON_MODULE, $this->_ormModule->getId());
		if($name != null)
			$c->add(AddOnModuleDynamicDataPeer::NAME, $name);
		$dynData = AddOnModuleDynamicDataPeer::doSelect($c);
		$data = array();
		if(!empty($dynData)) {
			foreach($dynData as $segment)
				$data[$segment->getName()] = $segment->getData();
		}
		return $data;
	}

	final protected function deleteDynamicdata($name) {
		$c = new Criteria();
		$c->add(AddOnModuleDynamicDataPeer::ADD_ON_MODULE, $this->_ormModule->getId());
		$c->add(AddOnModuleDynamicDataPeer::NAME, $name);
		$dynData = AddOnModuleDynamicDataPeer::doSelectOne($c);
		if(empty($dynData)) {
			return true;
		}
		$dynData->delete();
		return true;
	}


	final protected function dynamicDataExists($name) {
		$c = new Criteria();
		$c->add(AddOnModuleDynamicDataPeer::ADD_ON_MODULE, $this->_ormModule->getId());
		$c->add(AddOnModuleDynamicDataPeer::NAME, $name);
		$dynData = AddOnModuleDynamicDataPeer::doSelectOne($c);
		if(!empty($dynData)) {
			return true;
		}
		return false;

	}	

	final protected function setDynamicData($name, $data) {
		if(trim($name) == '') {
			throw new Exception("Name of dynamic data to be set cannot be blank.");
		}
		$c = new Criteria();
		$c->add(AddOnModuleDynamicDataPeer::ADD_ON_MODULE, $this->_ormModule->getId());
		$c->add(AddOnModuleDynamicDataPeer::NAME, $name);
		$dynData = AddOnModuleDynamicDataPeer::doSelectOne($c);
		if(!empty($dynData)) {
			$dynData->setData($data);
			$dynData->save();
			return true;
		}
		$dynData = new AddOnModuleDynamicData();
		$dynData->setAddOnModuleRelatedByAddOnModule($this->_ormModule);
		$dynData->setName($name);
		$dynData->setData($data);
		$dynData->save();
		return true;
	}

	abstract public function init();
	abstract public function render();
}

interface MenuItem {
	public function getTitle();
	public function getDescription();
	public function getIcon();
}

