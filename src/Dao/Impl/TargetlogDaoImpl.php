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
                'username = :username',
                'email = :email',
                'sn = :sn',
            ),
        );
    }
}