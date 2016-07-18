<?php

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR . '/vendor/autoload.php';

use Phpmig\Api\PhpmigApplication;
use Symfony\Component\Console\Output\NullOutput;
use Codeages\Biz\Framework\Dao\MigrationBootstrap;
use Codeages\Biz\TargetLog\TargetLogKernel;

$kernel = new TargetLogKernel(array());
$kernel->boot();

$bootstrap = new MigrationBootstrap($kernel, __DIR__);
$container = $bootstrap->run();


$adapter = $container['phpmig.adapter'];
if (!$adapter->hasSchema()) {
    $adapter->createSchema();
}

$app = new PhpmigApplication($container, new NullOutput());

$app->up();