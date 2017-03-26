<?php

/** @var \Composer\Autoload\ClassLoader $loader */
$loader = require_once '../vendor/autoload.php';

# Path to load core files
$loader->addPsr4('Core\\', realpath(__DIR__.'/../vendor/ulwanski/thunderphp-core/src'));
$loader->addPsr4('Application\\', realpath(__DIR__.'/../modules/application/src'));

Core\Application\Framework::init(__DIR__)->run();