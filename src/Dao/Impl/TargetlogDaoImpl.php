<?php

namespace Codeages\Biz\Targetlog\Dao\Impl;

use Codeages\Biz\Targetlog\Dao\TargetlogDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class TargetlogDaoImpl extends GeneralDaoImpl implements TargetlogDao
{
    protected $table = 'target_log';

    public function declares()
    {
        return array(
            'timestamps' => array('created'),
            'serializes' => array('context' => 'json'),
            'conditions' => array(
                'level = :level',
                'target_type = :target_type',
                'target_id = :target_id',
                'action = :action',
                'user_id = :user_id',
                'ip = :ip',
            ),
        );
    }
}