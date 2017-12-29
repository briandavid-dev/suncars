<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="solicitudes-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'solicitud_nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solicitud_email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solicitud_mensaje')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'solicitud_telefono')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
