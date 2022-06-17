<?php

use common\models\hemis\EDepartment;
use kartik\datetime\DateTimePicker;
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Camera */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="camera-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->dropDownList(
            \yii\helpers\ArrayHelper::map(EDepartment::find()->where(['_structure_type'=>11])->asArray()->all(),'id','name'),
            ['prompt'=>'Select Department']
    ) ?>

    <?= $form->field($model, 'specialty')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'type')->dropDownList([
        '1' => 'Bitiruv malakaviy ish',
        '2' => 'Yakuniy davlat attestatsiya',
    ], ['prompt'=>'Select Type']) ?>

    <?= $form->field($model, 'start_date')->widget(\kartik\datetime\DateTimePicker::class,
        [
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'dd-M-yyyy hh:ii'
            ]
    ]) ?>

    <?= $form->field($model, 'end_date')->widget(\kartik\datetime\DateTimePicker::class,
        [
            'type' => DateTimePicker::TYPE_COMPONENT_PREPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'format' => 'dd-M-yyyy hh:ii'
            ]
        ]) ?>


    <?= $form->field($model, 'active')->checkbox() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
