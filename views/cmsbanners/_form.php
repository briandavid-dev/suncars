<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
Use yii\helpers\ArrayHelper;
use app\models\CmsBanners;
//use app\models\CmsPrincipalcategories;
/* @var $this yii\web\View */
/* @var $model app\models\CmsBanners */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-banners-form">
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

      <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
    <div>&nbsp;</div>
    <?= $form->errorSummary($model); ?>
    <div>&nbsp;</div>

  <div class="row" >
    
   
<!-- titulo================================================== -->

<div class="col-sm-9">

        <?= $form->field($model, 'banner_titulo')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese Titulo'])->label('Titulo <span class="required">*</span>') ?>
    </div>
</div>
<!-- select================================================== -->
<div class="row">
  <div class="col-sm-6">
                    <?php
                        $items = ArrayHelper::map(CmsBanners::find()->orderBy(['(banner_ubicacion)' => SORT_ASC])->all(), 'banner_ubicacion', 'banner_ubicacion');
                        echo $form->field($model, 'banner_ubicacion')->dropDownList(
                           $items,
                           [
                               'prompt'=>'Seleccione...',
                               'onchange'=>'
                                               $.get( "'.Url::toRoute('dependent-dropdown/categorie_name').'", { id: $(this).val() } )
                                                   .done(function( data ) {
                                                       $( "#'.Html::getInputId($model, 'banner_ubicacion').'" ).html( data );
                                                   }
                                               );
                                           '
                           ]
                        )->label(' Link o Página <span class="required">*</span>');
                      ?>
                </div>

</div>

<!-- imagen================================================== -->

<div class="col-sm-4">
                 <span class="text-info small"><h4><strong>Tamaño para Banner: 1170px ancho. 468px alto <br> Tamaño para Contacto: 600px ancho. 450px alto</strong> </h4></span>
           
                <?php echo $form->field($model, 'banner_imagen')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
                <div class="thumbnail">
                  <?php
                      $rutaImg1 = "#";
                      $classImg1 = "hidden";
                      if(!$model->isNewRecord){
                        $rutaImg1 = Url::base(true).'/themes/rigal/resources/images/banners/'.$model->banner_imagen;

                        $classImg1 = "";
                    }
                    
                    if(empty($model->banner_imagen)) $rutaImg1 = "";
                  ?>
                  <img id="preview_cmsbanners-banner_imagen" src="<?php print $rutaImg1; ?>" alt="<?php print $model->banner_imagen?>" title="<?php print $model->banner_imagen?>" class="<?php print $classImg1; ?>" width="90" height="75" />
                </div>

            </div>



  <div class="col-md-12 text-center">
    <div>&nbsp;</div>
    <?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['cmsbanners/create'] : ['cmsbanners/update','id'=>$model->banner_id],
        [
            'data' => [
                'method' => 'post',
              ],
          'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
          ])?>
        <div>&nbsp;</div>
</div>




    <?php ActiveForm::end(); ?>
