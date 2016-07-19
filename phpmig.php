<?php

use Codeages\Biz\Framework\Dao\MigrationBootstrap;
use Codeages\Biz\Targetlog\TargetlogKernel;
use Dotenv\Dotenv;

$dotenv = new Dotenv(__DIR__);
$dotenv->load();

$kernel = new TargetlogKernel(array());
$kernel->boot();

$bootstrap = new MigrationBootstrap($kernel);

return $bootstrap->run();