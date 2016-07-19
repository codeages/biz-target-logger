<?php

namespace Codeages\Biz\Targetlog;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Codeages\Biz\Framework\Context\MigrationProviderInterface;
use Codeages\Biz\Framework\Context\Kernel;
use Codeages\Biz\Targetlog\Dao\Impl\TargetlogDaoImpl;
use Codeages\Biz\Targetlog\Service\Impl\TargetlogServiceImpl;

class TargetlogServiceProvider implements ServiceProviderInterface, MigrationProviderInterface
{
    public function register(Container $container)
    {
        $container['targetlog.targetlog_dao'] = $container->dao(function() {
            return new TargetlogDaoImpl();
        });

        $container['targetlog.targetlog_service'] = function() {
            return new TargetlogServiceImpl();
        };
    }

    public function registerMigrationDirectory(Kernel $contaier)
    {
        $contaier->put('migration_directories', dirname(__DIR__) . '/database');
    }
}
