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

    <?= $form->field($model, 'contenido_resumen') ?>

    <?= $form->field($model, 'contenido_detalles') ?>

    <?= $form->field($model, 'contenido_disponibilidad') ?>

    <?php // echo $form->field($model, 'contenido_http') ?>

    <?php // echo $form->field($model, 'contenido_imagen_1') ?>

    <?php // echo $form->field($model, 'contenido_imagen_2') ?>

    <?php // echo $form->field($model, 'contenido_imagen_3') ?>

    <?php // echo $form->field($model, 'contenido_precio') ?>

    <?php // echo $form->field($model, 'contenido_fecha_creacion') ?>

    <?php // echo $form->field($model, 'contenido_tipo') ?>

    <?php // echo $form->field($model, 'contenido_marca') ?>

    <?php // echo $form->field($model, 'contenido_categorias') ?>

    <?php // echo $form->field($model, 'contenido_subcategorias') ?>

    <?php // echo $form->field($model, 'usuario_id') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
