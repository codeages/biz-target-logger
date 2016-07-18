<?php

namespace Codeages\Biz\TargetLog;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Codeages\Biz\Framework\Context\MigrationProviderInterface;
use Codeages\Biz\Framework\Context\Kernel;

class TargetLogServiceProvider implements ServiceProviderInterface, MigrationProviderInterface
{
    public function register(Container $container)
    {

    }

    public function registerMigrationDirectory(Kernel $contaier)
    {
        $contaier->put('migration_directories', dirname(__DIR__) . '/database');
    }
}
