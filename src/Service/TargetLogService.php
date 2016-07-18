<?php

namespace Codeages\Biz\Targetlog\Service;

interface TargetlogService
{
    public function log($level, $targetType, $targetId, $message, array $context = array());

    public function searchLogs($conditions, $orderBy, $start, $limit);

    public function countLogs($conditions);
}