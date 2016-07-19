<?php
namespace Codeages\Biz\TargetLog\Tests\Service;

use Codeages\Biz\Framework\UnitTests\BaseTestCase;
use Codeages\Biz\TargetLog\Service\TargetlogService;

class TargetlogServiceTest extends BaseTestCase
{
    public function testGetLog()
    {
        $created = $this->getTargetlogService()->log(TargetlogService::INTO, 'example', 1, 'hello world.');
        $found = $this->getTargetlogService()->getLog($created['id']);
        $this->assertEquals($created['id'], $found['id']);
    }

    protected function getTargetlogService()
    {
        return self::$kernel['targetlog.targetlog_service'];
    }
}