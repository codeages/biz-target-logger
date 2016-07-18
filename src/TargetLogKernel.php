<?php
namespace Codeages\Biz\TargetLog;

use Codeages\Biz\Framework\Context\Kernel;

class TargetLogKernel extends Kernel
{
    public function getNamespace()
    {
        return '';
    }

    public function registerProviders()
    {
        return array(
            new TargetLogServiceProvider(),
        );
    }
}