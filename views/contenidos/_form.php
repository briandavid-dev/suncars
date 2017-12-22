<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contenidos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'contenido_titulo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_texto')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_http')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_imagen_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_imagen_2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_imagen_3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_precio')->textInput() ?>

    <?= $form->field($model, 'contenido_fecha_creacion')->textInput() ?>

    <?= $form->field($model, 'contenido_tipo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'contenido_categoria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenido_subcategoria')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'contenidoscol')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usuario_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
