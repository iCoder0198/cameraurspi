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
            '_category'=>$this->integer()->notNull(),
            'specialty'=>$this->string()->notNull(),
            'type'=>$this->string()->notNull(),
            'link'=>$this->string()->notNull(),
            'start_date'=>$this->string()->notNull(),
            'end_date'=>$this->string()->notNull(),
            'active'=>$this->boolean()->notNull()->defaultValue(true),
            'description'=>$this->text()->notNull(),

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
