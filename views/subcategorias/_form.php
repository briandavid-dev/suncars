<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategorias */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subcategorias-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subcategorias_cog')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subcategorias_nombre')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subcategorias_http')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'categoria_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
