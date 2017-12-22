<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsuariosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="usuarios-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'usuario_id') ?>

    <?= $form->field($model, 'usuario_nombre') ?>

    <?= $form->field($model, 'usuario_apellido') ?>

    <?= $form->field($model, 'usuario_login') ?>

    <?= $form->field($model, 'usuario_password') ?>

    <?php // echo $form->field($model, 'usuario_fecha_creacion') ?>

    <?php // echo $form->field($model, 'usuario_fecha_modificacion') ?>

    <?php // echo $form->field($model, 'usuario_fecha_ultimo_acceso') ?>

    <?php // echo $form->field($model, 'usuario_email') ?>

    <?php // echo $form->field($model, 'usuario_telefono_1') ?>

    <?php // echo $form->field($model, 'usuario_telefono_2') ?>

    <?php // echo $form->field($model, 'usuario_direccion') ?>

    <?php // echo $form->field($model, 'usuario_activo') ?>

    <?php // echo $form->field($model, 'usuario_online') ?>

    <?php // echo $form->field($model, 'usuario_perfil') ?>

    <?php // echo $form->field($model, 'usuario_imagen_1') ?>

    <?php // echo $form->field($model, 'usuario_estado') ?>

    <?php // echo $form->field($model, 'usuario_mensaje_publico') ?>

    <?php // echo $form->field($model, 'usuario_genero') ?>

    <?php // echo $form->field($model, 'usuario_fecha_nacimiento') ?>

    <?php // echo $form->field($model, 'authKey') ?>

    <?php // echo $form->field($model, 'accessToken') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
