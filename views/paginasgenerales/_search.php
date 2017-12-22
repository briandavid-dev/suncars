<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaginasGeneralesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paginas-generales-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pagina_general_id') ?>

    <?= $form->field($model, 'pagina_general_titulo') ?>

    <?= $form->field($model, 'pagina_general_http') ?>

    <?= $form->field($model, 'pagina_general_contenido_1') ?>

    <?= $form->field($model, 'pagina_general_contenido_2') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
