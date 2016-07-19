<?php
namespace Codeages\Biz\Targetlog\Service\Impl;

use Codeages\Biz\Framework\Service\KernelAwareBaseService;
use Codeages\Biz\Targetlog\Service\TargetlogService;

class TargetlogServiceImpl extends KernelAwareBaseService implements TargetlogService
{
    public function log($level, $targetType, $targetId, $message, array $context = array())
    {
        $log = array();
        if (!empty($context['action'])) {
            $log['action'] = $context['action'];
            unset($context['action']);
        }

        $log['level'] = $level;
        $log['target_type'] = $targetType;
        $log['target_id'] = $targetId;
        $log['message'] = $message;
        $log['context'] = empty($context) ? array() : $context;

        $log['ip'] = '';
        $log['user_id'] = 0;

        return $this->getLogDao()->create($log);
    }

    public function getLog($id)
    {
        return $this->getLogDao()->get($id);
    }

    public function searchLogs($conditions, $orderBy, $start, $limit)
    {
        return $this->getLogDao()->searchLogs($conditions, $orderBy, $start, $limit);
    }

    public function countLogs($conditions)
    {
        return $this->getLogDao()->searchLogCount($conditions);
    }

    protected function getLogDao()
    {
        return $this->kernel['targetlog.targetlog_dao'];
    }
}
