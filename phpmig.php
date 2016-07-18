<?php

use Codeages\Biz\Framework\Dao\MigrationBootstrap;
use Codeages\Biz\TargetLog\TargetLogKernel;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$kernel = new TargetLogKernel(array());
$kernel->boot();

$bootstrap = new MigrationBootstrap($kernel);

return $bootstrap->run();