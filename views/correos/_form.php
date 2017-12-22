<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Correos */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="correos-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'correo_principal')->textInput(['maxlength' => true]) ?>

   

    <div class="form-group text-center">
        <?= Html::submitButton($model->isNewRecord ? Yii::t('app', 'Create') : Yii::t('app', 'Actualizar'), ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
