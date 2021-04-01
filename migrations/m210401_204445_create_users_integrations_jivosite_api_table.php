<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%users_integrations_jivosite_api}}`.
 * Has foreign keys to the tables:
 *
 * - `{{%user}}`
 */
class m210401_204445_create_users_integrations_jivosite_api_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%users_integrations_jivosite_api}}', [
            // 'id' => $this->primaryKey(),
            'user_id' => $this->integer()->notNull()->unique(),
            'js' => $this->string(),
        ]);

        // creates index for column `user_id`
        $this->createIndex(
            '{{%idx-users_integrations_jivosite_api-user_id}}',
            '{{%users_integrations_jivosite_api}}',
            'user_id'
        );

        // add foreign key for table `{{%user}}`
        $this->addForeignKey(
            '{{%fk-users_integrations_jivosite_api-user_id}}',
            '{{%users_integrations_jivosite_api}}',
            'user_id',
            '{{%users}}',
            'id',
            'CASCADE'
        );
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        // drops foreign key for table `{{%user}}`
        $this->dropForeignKey(
            '{{%fk-users_integrations_jivosite_api-user_id}}',
            '{{%users_integrations_jivosite_api}}'
        );

        // drops index for column `user_id`
        $this->dropIndex(
            '{{%idx-users_integrations_jivosite_api-user_id}}',
            '{{%users_integrations_jivosite_api}}'
        );

        $this->dropTable('{{%users_integrations_jivosite_api}}');
    }
}
