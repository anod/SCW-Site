<?php
namespace SCW;

use Silex;

class Application extends Silex\Application {
	
	public function init()  {
		$this['debug'] = true;
		
		$this->register(new Silex\Provider\TwigServiceProvider(), array(
			'twig.path' => __DIR__.'/../views',
		));
		
		$router = new Controllers($this);
		// definitions
		$this->get('/', $router::home);
		
	}
	
	/**
	 * @return Silex\Provider\TwigCoreExtension
	 */
	public function getTwig() {
		return $this['twig'];
	}
	
}