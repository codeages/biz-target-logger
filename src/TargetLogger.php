<?php
namespace Codeages\Biz\TargetLog;

use Psr\Log\LoggerInterface;

class TargetLogger implements LoggerInterface
{
    protected $targetType;

    protected $targetId;

    public function __construct($targetType, $targetId)
    {
        $this->targetType = $targetType;
        $this->targetId = $targetId;
    }

    public function emergency($message, array $context = array())
    {
        return $this->log('emergency', $message, $context);
    }

    public function alert($message, array $context = array())
    {
        return $this->log('alert', $message, $context);
    }

    public function critical($message, array $context = array())
    {
        return $this->log('critical', $message, $context);
    }

    public function error($message, array $context = array())
    {
        return $this->log('error', $message, $context);
    }

    public function warning($message, array $context = array())
    {
        return $this->log('warning', $message, $context);
    }

    public function notice($message, array $context = array())
    {
        return $this->log('notice', $message, $context);
    }

    public function info($message, array $context = array())
    {
        return $this->log('info', $message, $context);
    }

    public function debug($message, array $context = array())
    {
        return $this->log('debug', $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        return $this->getTargetLogService()->log($level, $this->targetType, $this->targetId, $message, $context);
    }

    protected function getTargetLogService()
    {
        return ServiceKernel::instance()->service('TargetLogService');
    }
}
