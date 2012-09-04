<?php

require_once __DIR__.'/../silex/vendor/autoload.php';

$app = new Silex\Application();

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

// definitions
$app->get('/', function() {
    return 'Hello!';
});

$app['debug'] = true;

$app->run();
