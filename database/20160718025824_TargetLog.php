<?php

use Phpmig\Migration\Migration;

class TargetLog extends Migration
{
    /**
     * Do the migration
     */
    public function up()
    {
        $container = $this->getContainer();

        $table = new Doctrine\DBAL\Schema\Table('target_log');
        $table->addColumn('id', 'integer', array('unsigned' => true));
        $table->addColumn('targetType', 'string', array('length'=>64, 'default'=>'', 'null' => false, 'comment' => '日志对象类型'));
        $table->addColumn('targetId', 'integer' , array('default' => 0, 'null' => false, 'comment' => '日志对象ID'));
        $table->addColumn('act', 'string', array('length' => 64, 'default' => '', 'null' => false, 'comment' => '日志行为'));
        $table->addColumn('level', 'smallint' , array('default' => 0, 'null' => false, 'comment' => '日志等级'));
        $table->addColumn('message', 'text', array('comment' => '日志信息'));
        $table->addColumn('context', 'text', array('comment' => '日志上下文'));
        $table->addColumn('userId', 'integer' , array('default' => 0, 'null' => false, 'comment' => '操作人ID'));
        $table->addColumn('created', 'integer' , array('default' => 0, 'null' => false, 'comment' => '创建时间'));
        $table->addColumn('createdIp', 'string', array('length' => 32, 'default' => '', 'null' => false, 'comment' => '操作人IP'));
        $table->setPrimaryKey(array('id'));

        $container['db']->getSchemaManager()->createTable($table);
    }

    /**
     * Undo the migration
     */
    public function down()
    {
        $container = $this->getContainer();
        $container['db']->getSchemaManager()->dropTable('target_log');
    }
}
