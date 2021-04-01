<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users}}`.
 */
class m210401_200007_create_users_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users}}', [
            'id' => $this->primaryKey(),
            'email' => $this->char(255),
        ]);
        $this->insert('{{%users}}', ['email' => 'user1@mail.ru']);
        $this->insert('{{%users}}', ['email' => 'user2@mail.ru']);
        $this->insert('{{%users}}', ['email' => 'user3@mail.ru']);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%users}}');
    }
}
