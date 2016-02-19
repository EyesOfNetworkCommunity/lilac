<?php

abstract class Importer {
	private $engine;
	
	public function __construct($engine) {
		$this->engine = $engine;
		
	}
	
	/**
	 * Enter description here...
	 *
	 * @return ImportEngine
	 */
	public function getEngine() {
		return $this->engine;
	}
	
}

abstract class ImportEngine {
	// Currently empty, but used to potentially employ rules later on
	private $job;
	
	/**
	 * Enter description here...
	 *
	 * @param ImportJob $importJob
	 */
	public function __construct($importJob) {
		$this->job = $importJob;
		
	}
	
	public abstract function getDisplayName();
	public abstract function getDescription();
	
	/**
	 * Enter description here...
	 *
	 * @return ImportJob
	 */
	public function getJob() {
		return $this->job;
	}

	/**
	 * Builds a collection of available engines
	 */
	static public function getAvailableEngines() {
		$engines = array();
		$engineDir = opendir(dirname(__FILE__) . "/engines/");
		while(false !== ($entry = readdir($engineDir))) {
			if($entry == "." || $entry == ".." || !is_dir(dirname(__FILE__) . "/engines/" . $entry)) {
				continue;
			}
			else {
				// Go into dir
				$tempDir = opendir(dirname(__FILE__) . "/engines/" . $entry);
				while(false !== ($tempEntry = readdir($tempDir))) {
					if($tempEntry == "." || $tempEntry == "..") {
						continue;
					}
					$pathinfo = pathinfo($tempEntry);
					if((!isset($pathinfo['extension'])) || $pathinfo['extension'] != 'php') {
						continue;
					}
					// Okay, it's a php file, let's grab the filename
					$className = $pathinfo['filename'];
					require_once(dirname(__FILE__) . "/engines/" . $entry . "/" . $tempEntry); 	// Include the Engine source file
					// Instantiate the engine, with a null import job (wacky)
					$engine = new $className(null);
					$engines[] = array('class' => $className,
									   'name' => $engine->getDisplayName(),
									   'description' => $engine->getDescription());
				}
			}
		}
		return $engines;
	}
	
	public function getConfig() {
		return unserialize($this->job->getConfig());
	}

	abstract public function renderConfig();
	
	abstract public function validateConfig();

	abstract public function buildConfig($config);

	abstract public function showJobSupplemental();
	
	public function getStats() {
		$stats =  $this->job->getStats();
		if(!$stats) {
			// Create stats on the fly
			$stats = new ImportStats();
			
		}
		else {
			$stats = unserialize($stats);
		}
		$stats->setJob($this->job);
		return $stats;
	}
	
	/**
	 * Should be used for any startup
	 *
	 */
	abstract function init();
	
	abstract function import();
	
	
}

/**
 * Currently implemented using a hash map, but we could potentially do more than this?
 *
 */
class ImportConfig {
	private $configVars;
	
	private $engineClass;
	
	public function __construct($engine) {
		$this->engineClass = $engine;
		$this->configVars = array();
	}
	
	public function getEngineClass() {
		return $this->engineClass;
	}
	
	public function setVar($name, $val) {
		$this->configVars[$name] = $val;
	}
	
	public function getVar($name) {
		if(isset($this->configVars[$name]))
			return $this->configVars[$name];
		return null;
	}
}

/**
 * Currently implemented using a hash map, but we could potentially do more than this?
 *
 */
class ImportStats {
	private $stats;
	private $job;	// Won't be serialized since it will be a reference
	
	public function __construct() {
		$this->stats = array();
	}
	
	public function setJob($importJob) {
		$this->job = $importJob;
	}
	
	public function setStat($name, $val) {
		$this->stats[$name] = $val;
		$this->save();
	}
	
	public function getStat($name) {
		return $this->stats[$name];
	}
	
	public function save() {
		if(isset($job)) {
			$job->setStats(serialize($his));
			$this->job->save();
		}
	}
}

?>
