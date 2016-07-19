<?php
namespace Codeages\Biz\Targetlog;

use Psr\Log\LoggerInterface;
use Codeages\Biz\Targetlog\Service\TargetlogService;

class Targetlogger implements LoggerInterface
{
    protected $container;
    protected $targetType;
    protected $targetId;

    public function __construct($container, $targetType, $targetId)
    {
        $this->container = $container;
        $this->targetType = $targetType;
        $this->targetId = $targetId;
    }

    public function emergency($message, array $context = array())
    {
        return $this->log(TargetlogService::EMERGENCY, $message, $context);
    }

    public function alert($message, array $context = array())
    {
        return $this->log(TargetlogService::ALERT, $message, $context);
    }

    public function critical($message, array $context = array())
    {
        return $this->log(TargetlogService::CRITICAL, $message, $context);
    }

    public function error($message, array $context = array())
    {
        return $this->log(TargetlogService::ERROR, $message, $context);
    }

    public function warning($message, array $context = array())
    {
        return $this->log(TargetlogService::WARNING, $message, $context);
    }

    public function notice($message, array $context = array())
    {
        return $this->log(TargetlogService::NOTICE, $message, $context);
    }

    public function info($message, array $context = array())
    {
        return $this->log(TargetlogService::INFO, $message, $context);
    }

    public function debug($message, array $context = array())
    {
        return $this->log(TargetlogService::DEBUG, $message, $context);
    }

    public function log($level, $message, array $context = array())
    {
        return $this->getTargetlogService()->log($level, $this->targetType, $this->targetId, $message, $context);
    }

    protected function getTargetlogService()
    {
        return $this->container['targetlog.targetlog_service'];
    }
}
