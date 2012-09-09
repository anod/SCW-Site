<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new \SCW\Application(__DIR__.'/..');

$app->init()->run();