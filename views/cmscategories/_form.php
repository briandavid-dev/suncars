<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CmsPrincipalcategories;
use yii\helpers\Url;
Use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCategories */
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

<div class="col-sm-5">
  

   
     
  <?= $form->field($model, 'categorie_name')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese Nombre'])->label('Categoría <span class="required">*</span>') ?>

   
    </div>
   	<div class="col-sm-3">
		<?= $form->field($model, 'categorie_position')->textInput() ?>
	</div>
    
     <div class="col-sm-4">
                    <?php
                        $items = ArrayHelper::map(CmsPrincipalcategories::find()->orderBy(['(principalcategories_name)' => SORT_ASC])->all(), 'principalcategories_id', 'principalcategories_name');
                        echo $form->field($model, 'principalcategories_id')->dropDownList(
                           $items,
                           [
                               'prompt'=>'Seleccione...',
                               'onchange'=>'
                                               $.get( "'.Url::toRoute('dependent-dropdown/categorie_name').'", { id: $(this).val() } )
                                                   .done(function( data ) {
                                                       $( "#'.Html::getInputId($model, 'principalcategories_id').'" ).html( data );
                                                   }
                                               );
                                           '
                           ]
                        )->label(' Principal Categoría <span class="required">*</span>');
                      ?>
                </div>
	
   
  
</div>


</div>

 <div class="col-md-12 text-center">
    <div>&nbsp;</div>
         <?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['cmscategories/create'] : ['cmscategories/update','id'=>$model->categorie_id],
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
