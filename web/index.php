<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views',
));

// definitions
$app->get('/', function() use ($app) {
	/* @var $twig Silex\Provider\TwigCoreExtension */
	$twig = $app['twig'];
	
	$loader = new SCW\Skin\Loader();
	$skins = $loader->load();
	
	return $twig->render('main.twig', array(
		'skins' => $skins
	));
});


$app->run();
