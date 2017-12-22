<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
Use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\Categories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-categories-form">
<style>
  span.required {
  color: #ff0000;
}
</style>

  <?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
       <?= Yii::$app->session->getFlash('success') ?>
      </div>
  <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>
  
  <div class="row" >
    <div class="col-md-12">
     <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
    <div>&nbsp;</div>
    <?= $form->errorSummary($model); ?>
    <div>&nbsp;</div>


   
    
  <?= $form->field($model, 'categoria_nombre')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese Nombre'])->label('Categoría <span class="required">*</span>') ?>

</div>
</div>

 <div class="col-md-12 text-center">
    <div>&nbsp;</div>
         <?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['categorias/create'] : ['categorias/update','id'=>$model->categoria_id],
        [
            'data' => [
                'method' => 'post',
              ],
          'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
          ])?>
  <div>&nbsp;</div>
    </div>
  
 
    <?php ActiveForm::end(); ?>

</div>
