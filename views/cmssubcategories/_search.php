<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmsSubcategoriessSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-subcategories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'subcategorie_id') ?>

    <?= $form->field($model, 'subcategorie_name') ?>

    <?= $form->field($model, 'subcategorie_http') ?>

    <?= $form->field($model, 'categorie_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
