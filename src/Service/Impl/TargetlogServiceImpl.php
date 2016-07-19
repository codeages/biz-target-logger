<?php
namespace Codeages\Biz\Targetlog\Service\Impl;

use Codeages\Biz\Framework\Service\KernelAwareBaseService;
use Codeages\Biz\Targetlog\Service\TargetlogService;

class TargetlogService extends KernelAwareBaseService implements TargetlogService
{
    public function log($level, $targetType, $targetId, $message, array $context = array())
    {
        $log = array();
        if (!empty($context['act'])) {
            $log['act'] = $context['act'];
            unset($context['act']);
        }

        $log['level'] = $level;
        $log['targetType'] = $targetType;
        $log['targetId'] = $targetId;
        $log['message'] = $message;
        $log['context'] = empty($context) ? array() : $context;

        $log['userId'] = 0;
        $log['createdIp'] = '';
        $log['createdTime'] = time();

        return $this->getLogDao()->addLog($log);
    }

    public function getLog($id)
    {
        return $this->getLogDao()->get($id);
    }

    public function searchLogs($conditions, $orderBy, $start, $limit)
    {
        return $this->getLogDao()->searchLogs($conditions, $orderBy, $start, $limit);
    }

    public function searchLogCount($conditions)
    {
        return $this->getLogDao()->searchLogCount($conditions);
    }

    protected function getLogDao()
    {
        return $this->kernel['targetlog.targetlog_dao'];
    }
}
