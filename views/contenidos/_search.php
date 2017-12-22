<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ContenidosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contenidos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'contenido_id') ?>

    <?= $form->field($model, 'contenido_titulo') ?>

    <?= $form->field($model, 'contenido_texto') ?>

    <?= $form->field($model, 'contenido_http') ?>

    <?= $form->field($model, 'contenido_imagen_1') ?>

    <?php // echo $form->field($model, 'contenido_imagen_2') ?>

    <?php // echo $form->field($model, 'contenido_imagen_3') ?>

    <?php // echo $form->field($model, 'contenido_precio') ?>

    <?php // echo $form->field($model, 'contenido_fecha_creacion') ?>

    <?php // echo $form->field($model, 'contenido_tipo') ?>

    <?php // echo $form->field($model, 'contenido_marca') ?>

    <?php // echo $form->field($model, 'contenido_categoria') ?>

    <?php // echo $form->field($model, 'contenido_subcategoria') ?>

    <?php // echo $form->field($model, 'contenidoscol') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
