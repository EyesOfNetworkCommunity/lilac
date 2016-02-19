<?php

final class LilacCoreModule extends Module {

	public function getModulesByHook($hook) {
		return $this->createModulesByHook($hook);
	}

	public function renderForHook($hook) {
		$mods = $this->getModulesByHook($hook);
		foreach($mods as $mod) {
			$mod->render();
		}
	}
	
	public function render() {

	}

	public function init() {

	}

}

