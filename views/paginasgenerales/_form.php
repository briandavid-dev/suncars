<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paginas-generales-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pagina_general_titulo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pagina_general_http')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pagina_general_contenido_1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pagina_general_contenido_2')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
