<?php

namespace Codeages\Biz\TargetLog\Dao\Impl;

use Codeages\Biz\TargetLog\Dao\TargetLogDao;
use Codeages\Biz\Framework\Dao\GeneralDaoImpl;

class TargetLogDaoImpl extends GeneralDaoImpl implements TargetLogDao
{
    protected $table = 'target_log';

    public function declares()
    {
        return array(
            'timestamps' => array('created', 'updated'),
            'serializes' => array(),
            'conditions' => array(
                'username = :username',
                'email = :email',
                'sn = :sn',
            ),
        );
    }
}