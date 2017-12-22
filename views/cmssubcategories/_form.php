<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CmsCategories;
use yii\helpers\Url;
Use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\CmsSubcategories */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-subcategories-form">
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
  <div>&nbsp;</div>
 
      <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
          <?= $form->errorSummary($model); ?>
    <div>&nbsp;</div>
     <div class="row" >

    <div class="col-sm-6">
  

   
    <?= $form->field($model, 'subcategorie_name')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese Nombre'])->label('Sub-Categoría <span class="required">*</span>') ?>

   
    </div>
   
    
     <div class="col-sm-6">
                    <?php
                        $items = ArrayHelper::map(CmsCategories::find()->orderBy(['(categorie_name)' => SORT_ASC])->all(), 'categorie_id', 'categorie_name');
                        echo $form->field($model, 'categorie_id')->dropDownList(
                           $items,
                           [
                               'prompt'=>'Seleccione...',
                               'onchange'=>'
                                               $.get( "'.Url::toRoute('dependent-dropdown/categorie_name').'", { id: $(this).val() } )
                                                   .done(function( data ) {
                                                       $( "#'.Html::getInputId($model, 'categorie_id').'" ).html( data );
                                                   }
                                               );
                                           '
                           ]
                        )->label('Categoría <span class="required">*</span>');
                      ?>
                </div>



    
    </div>

   	<div class="col-md-12 text-center">
      			<div>&nbsp;</div>
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
