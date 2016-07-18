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
