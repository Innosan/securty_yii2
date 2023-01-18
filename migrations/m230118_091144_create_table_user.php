<?php

use yii\db\Migration;

class m230118_091144_create_table_user extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%user}}',
            [
                'id' => $this->primaryKey(),
                'fio' => $this->string()->notNull(),
                'login' => $this->string()->notNull(),
                'email' => $this->string()->notNull(),
                'password' => $this->string()->notNull(),
                'admin' => $this->integer()->notNull(),
            ],
            $tableOptions
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
