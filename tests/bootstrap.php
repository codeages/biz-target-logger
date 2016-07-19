<?php

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR . '/vendor/autoload.php';

use Codeages\Biz\Framework\UnitTests\UnitTestsBootstrap;
use Codeages\Biz\Targetlog\TargetlogKernel;

$kernel = new TargetlogKernel(array());

$bootstrap = new UnitTestsBootstrap($kernel);
$bootstrap->boot();