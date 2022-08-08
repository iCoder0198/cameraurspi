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

    <?php $form = ActiveForm::begin(); $list = [
        1 => "Tasviriy san'at va muhandislik grafikasi",
        2 => "Musiqa ta'limi",
        3 => "Jismoniy madaniyat",
        4 => "Sport faoliyati (xotin-qizlar sporti yo'nalishlar bo'yicha)",
        5 => "Sport faoliyati: kurash",
        6 => "Sport faoliyati: futbol",
	7=>"Ko'zi ojizlar uchun"
    ]; ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'link')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'department')->dropDownList(
            $list,
            ['prompt'=>'Select Talim yo\'nalish']
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
