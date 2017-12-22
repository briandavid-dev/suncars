<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <?= $form->field($model, 'usuario_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_apellido')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_login')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_password')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'usuario_fecha_modificacion')->textInput() ?>

    <?= $form->field($model, 'usuario_fecha_ultimo_acceso')->textInput() ?>

    <?= $form->field($model, 'usuario_email')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'usuario_telefono_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_telefono_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_direccion')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'usuario_activo')->textInput() ?>

    <?= $form->field($model, 'usuario_online')->textInput() ?>

    <?= $form->field($model, 'usuario_perfil')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_imagen_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'usuario_estado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_mensaje_publico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_genero')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_fecha_nacimiento')->textInput() ?>

    <?= $form->field($model, 'authKey')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'accessToken')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
