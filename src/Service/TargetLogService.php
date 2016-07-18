<?php

namespace Codeages\Biz\TargetLog\Service;

interface TargetLogService
{
    public function log($level, $targetType, $targetId, $message, array $context = array());

    public function searchLogs($conditions, $orderBy, $start, $limit);

    public function countLogs($conditions);
}