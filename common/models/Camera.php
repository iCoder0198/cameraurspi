<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "camera.camera".
 *
 * @property int $id
 * @property string $name
 * @property string $department
 * @property string $specialty
 * @property string $type
 * @property string $start_date
 * @property string $end_date
 * @property bool $active
 * @property string $description
 * @property string $link
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
            [['name', 'department','link', 'specialty', 'type', 'start_date', 'end_date', 'description'], 'required'],
            [['active'], 'boolean'],
            [['description'], 'string'],
            [['name', 'department', 'specialty', 'type', 'start_date', 'end_date','link'], 'string', 'max' => 255],
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
            'link' => 'Link',
            'department' => 'Department',
            'specialty' => 'Specialty',
            'type' => 'Type',
            'start_date' => 'Start Date',
            'end_date' => 'End Date',
            'active' => 'Active',
            'description' => 'Description',
        ];
    }
}
