<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "camera.camera".
 *
 * @property int $id
 * @property string $name
 * @property int $_category
 * @property string $specialty
 * @property string $type
 * @property string $link
 * @property string $start_date
 * @property string $end_date
 * @property bool $active
 * @property string $description
 * @property-read Category $category
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
            [['name', '_category', 'specialty', 'type', 'link', 'start_date', 'end_date', 'description'], 'required'],
            [['_category'], 'default', 'value' => null],
            [['_category'], 'integer'],
            [['active'], 'boolean'],
            [['description'], 'string'],
            [['name', 'specialty', 'type', 'link', 'start_date', 'end_date'], 'string', 'max' => 255],
            [['_category'], 'exist', 'skipOnError' => true, 'targetClass' => Category::className(), 'targetAttribute' => ['_category' => 'code']],
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
            'specialty' => 'Specialty',
            'type' => 'Type',
            'link' => 'Link',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'active' => 'Active',
            'description' => 'Description',
        ];
    }
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['code' => '_category']);
    }
}
