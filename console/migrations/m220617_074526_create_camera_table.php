<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%camera}}`.
 */
class m220617_074526_create_camera_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%camera.camera}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string()->notNull(),
            '_category' => $this->integer()->notNull(),
            'link' => $this->string()->notNull(),
            'active' => $this->boolean()->notNull()->defaultValue(true),

        ]);
        $this->createIndex('idx_category_code', '{{%camera.camera}}', '_category');
        $this->addForeignKey('fk_category_code', '{{%camera.camera}}', '_category', '{{%camera.category}}', 'code', 'CASCADE', 'CASCADE');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%camera.camera}}');
    }
}
