<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\SubcategoriasSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="subcategorias-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'subcategorias_id') ?>

    <?= $form->field($model, 'subcategorias_cog') ?>

    <?= $form->field($model, 'subcategorias_nombre') ?>

    <?= $form->field($model, 'subcategorias_http') ?>

    <?= $form->field($model, 'categoria_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
