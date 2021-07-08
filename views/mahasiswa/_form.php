<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
// use dosamigos\datepicker\DatePicker;
// use kartik\widgets\DatePicker;
/* @var $this yii\web\View */
/* @var $model app\models\Mahasiswa */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="mahasiswa-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id')->textInput() ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'alamat')->textInput(['maxlength' => true]) ?>
    <?= $form->field($model, 'tanggal_lahir')->widget(DatePicker::classname(), [
        'options' => ['placeholder' => '20002311 ...'],
        'value' => '30/12/2021',
        'readonly' => true,
        'pluginOptions' => [
            'autoclose' => true,
            'format' => 'mm/dd/yyyy'
        ]
    ]);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>