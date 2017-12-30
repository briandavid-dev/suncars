<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SolicitudesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitudes-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'solicitud_id') ?>

    <?= $form->field($model, 'solicitud_nombre') ?>

    <?= $form->field($model, 'solicitud_email') ?>

    <?= $form->field($model, 'solicitud_mensaje') ?>

    <?= $form->field($model, 'solicitud_telefono') ?>

    <?php // echo $form->field($model, 'contenido_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
