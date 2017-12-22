<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Notificaciones */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notificaciones-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'notificacion_id')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'notificacion_descripicion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'notificacion_tipo')->textInput() ?>

    <?= $form->field($model, 'notificacion_fecha_hora')->textInput() ?>

    <?= $form->field($model, 'notifacion_fecha_hora_utc')->textInput() ?>

    <?= $form->field($model, 'notificacion_status')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'tratamiento_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Update'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
