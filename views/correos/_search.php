<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CorreosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correos-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'correo_id') ?>

    <?= $form->field($model, 'coreo_principal') ?>

    <?= $form->field($model, 'correo_copia_principal') ?>

    <?= $form->field($model, 'correo_secundario') ?>

    <?= $form->field($model, 'correo_secundario_copia') ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Search'), ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton(Yii::t('app', 'Reset'), ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
