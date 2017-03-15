#!/usr/bin/env php
<?php
require 'phar://console.phar/run.php';
$phar = new \Thunderphp\Console\PharRun($argv);

__HALT_COMPILER(); ?>