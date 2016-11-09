<?php

namespace Codeages\Biz\Targetlog;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use Codeages\Biz\Framework\Context\MigrationProviderInterface;
use Codeages\Biz\Framework\Context\Kernel;
use Codeages\Biz\Targetlog\Dao\Impl\TargetlogDaoImpl;
use Codeages\Biz\Targetlog\Service\Impl\TargetlogServiceImpl;

class TargetlogServiceProvider implements ServiceProviderInterface
{
    public function register(Container $container)
    {
        $container['migration.directories'][] = dirname(__DIR__) . '/migrations';
        $container['autoload.aliases']['Targetlog'] = 'Codeages\Biz\Targetlog';
    }
}
