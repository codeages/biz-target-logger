<?php
namespace Codeages\Biz\Targetlog;

use Codeages\Biz\Framework\Context\Kernel;

class TargetlogKernel extends Kernel
{
    public function getNamespace()
    {
        return '';
    }

    public function registerProviders()
    {
        return array(
            new TargetlogServiceProvider(),
        );
    }
}