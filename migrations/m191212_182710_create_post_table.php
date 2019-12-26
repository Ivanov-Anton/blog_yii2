<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%post}}`.
 */
class m191212_182710_create_post_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('airbagua_posts', [
            'id' => $this->primaryKey(),
            'title' => $this->string(255),
            'shortDescription' => $this->text(),
            'content' => $this->text()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('airbagua_posts');
    }
}
