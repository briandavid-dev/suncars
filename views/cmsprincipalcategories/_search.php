<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPrincipalcategoriesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-principalcategories-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'principalcategories_id') ?>

    <?= $form->field($model, 'principalcategories_name') ?>

    <?= $form->field($model, 'principalcategories_http') ?>

    <?= $form->field($model, 'principalcategories_codigo') ?>

    <?= $form->field($model, 'principalcategories_status') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
