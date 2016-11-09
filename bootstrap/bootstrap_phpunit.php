<?php
use Codeages\Biz\Framework\Context\Biz;
use Codeages\Biz\Framework\Provider\DoctrineServiceProvider;
use Codeages\Biz\Targetlog\TargetlogServiceProvider;
use Codeages\Biz\Framework\UnitTests\UnitTestsBootstrap;

define('ROOT_DIR', dirname(__DIR__));

require_once ROOT_DIR . '/vendor/autoload.php';

$biz = new Biz(include ROOT_DIR.'/config/biz_test.php');
$biz->register(new DoctrineServiceProvider());
$biz->register(new TargetlogServiceProvider());
$biz->boot();

$bootstrap = new UnitTestsBootstrap($biz);
$bootstrap->boot();
