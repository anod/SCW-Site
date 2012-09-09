<?php
namespace SCW;

use Silex;

class Application extends Silex\Application {
	private $rootDir;
	
	public function __construct($rootDir) {
		parent::__construct();
		$this->rootDir = $rootDir;
	}
	
	public function init()  {
		$this['debug'] = true;
		
		$this->register(new Silex\Provider\TwigServiceProvider(), array(
			'twig.path' =>$this->rootDir.'/views'
		));
		
		$router = new Controllers($this);
		// definitions
		$this->get('/', array($router,'home'));
		
	}
	
	/**
	 * @return Silex\Provider\TwigCoreExtension
	 */
	public function getTwig() {
		return $this['twig'];
	}
	
}