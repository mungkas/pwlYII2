<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Tblmakan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tblmakan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deks')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nama')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'harga')->textInput() ?>

    <?= $form->field($model, 'gambar')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
