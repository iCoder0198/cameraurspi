<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "camera.camera".
 *
 * @property int $id
 * @property string $name
 * @property int $_category
 * @property string $link
 * @property bool $active
 */
class Camera extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camera.camera';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', '_category', 'link'], 'required'],
            [['_category'], 'default', 'value' => null],
            [['_category'], 'integer'],
            [['active'], 'boolean'],
            [['name', 'link'], 'string', 'max' => 255],
            [['_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['_category' => 'code']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            '_category' => 'Category',
            'link' => 'Link',
            'active' => 'Active',
        ];
    }

    public function getCategory()
    {
        return $this->hasOne(Category::class, ['code' => '_category']);
    }
}
