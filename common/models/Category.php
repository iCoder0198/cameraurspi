<?php

namespace common\models;

use common\models\query\CameraSearch;
use Yii;

/**
 * This is the model class for table "camera.category".
 *
 * @property int $code
 * @property string $name
 * @property-read Camera[] $cameras
 *
  */
class Category extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'camera.category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'code' => 'Code',
            'name' => 'Name',
        ];
    }
    public function getCameras()
    {
        return $this->hasMany(Camera::className(), ['_category' => 'code']);
    }
}
