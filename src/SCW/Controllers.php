<?php

namespace SCW;

class Controllers {
	/**
	 * 
	 * @var SCW\Application
	 */
	private $app = null;
	
	public function __construct(Application $app) {
		$this->app = $app;
	}
	
	public function home() {
		$twig = $this->app->getTwig();
		
		$loader = new SCW\Skin\Loader();
		$skins = $loader->load();
		
		return $twig->render('main.twig', array(
				'skins' => $skins
		));
	}

	
}
?>