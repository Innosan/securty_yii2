<?php

use yii\db\Migration;

class m230118_091152_create_table_problem extends Migration
{
    public function safeUp()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            $tableOptions = 'CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE=InnoDB';
        }

        $this->createTable(
            '{{%problem}}',
            [
                'id' => $this->primaryKey(),
                'name' => $this->string()->notNull(),
                'description' => $this->text()->notNull(),
                'timestamp' => $this->timestamp()->notNull()->defaultExpression('CURRENT_TIMESTAMP'),
                'user_id' => $this->integer()->notNull(),
                'category_id' => $this->integer()->notNull(),
                'status' => $this->string(0)->notNull(),
                'photo_before' => $this->string()->notNull(),
                'photo_after' => $this->string()->notNull(),
            ],
            $tableOptions
        );

        $this->createIndex('category_id', '{{%problem}}', ['category_id']);
        $this->createIndex('user_id', '{{%problem}}', ['user_id']);

        $this->addForeignKey(
            'problem_ibfk_1',
            '{{%problem}}',
            ['category_id'],
            '{{%category}}',
            ['id'],
            'NO ACTION',
            'NO ACTION'
        );
        $this->addForeignKey(
            'problem_ibfk_2',
            '{{%problem}}',
            ['user_id'],
            '{{%user}}',
            ['id'],
            'NO ACTION',
            'NO ACTION'
        );
    }

    public function safeDown()
    {
        $this->dropTable('{{%problem}}');
    }
}
