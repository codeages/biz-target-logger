<?php

namespace Codeages\Biz\Targetlog;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Codeages\Biz\Framework\Context\MigrationProviderInterface;
use Codeages\Biz\Framework\Context\Kernel;

class TargetlogServiceProvider implements ServiceProviderInterface, MigrationProviderInterface
{
    public function register(Container $container)
    {
        // $container['biz.targetlog.targetlog_service']
    }

    public function registerMigrationDirectory(Kernel $contaier)
    {
        $contaier->put('migration_directories', dirname(__DIR__) . '/database');
    }
}
