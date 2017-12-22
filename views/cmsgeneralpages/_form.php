<?php

	use yii\helpers\Html;
	use yii\helpers\Url;
	use yii\widgets\ActiveForm;
	use app\models\CmsGeneralPages;

	
	/* @var $this yii\web\View */
	/* @var $model app\models\CmsGeneralPages */
	/* @var $form yii\widgets\ActiveForm */
	
	switch ($_REQUEST["id"]){
		case 'nosotros':
			$titulo = "Nosotros";
		break;
		case 'indicador1':
			$titulo = "Indicador 1";
		break;
		case 'indicador2':
			$titulo = "Indicador 2";
		break;
	}

?>
<?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
       <?= Yii::$app->session->getFlash('success') ?>
      </div>
  <?php endif; ?>
  
    <?php $form = ActiveForm::begin(); ?>

<div class="col-sm-4">
                 <span class="text-info "><strong><h4>Tamaño de Banner: 1170px ancho. 468px alto</strong></h4> </span>
           
                <?php echo $form->field($model, 'general_pages_banner')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
                <div class="thumbnail">
                  <?php
                      $rutaImg2 = "#";
                      $classImg2 = "hidden";
                      if(!$model->isNewRecord){
                        $rutaImg2 = Url::base(true).'/themes/rigal/resources/images/banners/'.$model->general_pages_banner;

                        $classImg2 = "";
                    }
                  ?>
                  <img id="preview_cmsgeneralpages-general_pages_banner" src="<?php print $rutaImg2; ?>" alt="<?php print $model->general_pages_banner?>" title="<?php print $model->general_pages_banner?>" class="<?php print $classImg2; ?>" width="90" height="75" />
                </div>

</div>

<div class="row">

	<div class="col-md-8">
	<?=
        $form->field($model, 'general_pages_content')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                //'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/cmsposts/upload'],
                //'fileUpload' => ['/clientes/upload'],
                'lang' => 'es',
                'plugins' => ['clips', 'fontcolor','imagemanager','video']
            ]
        ])
	?>
	</div>


</div>
<div class="row">
    <div class="col-md-8">
        <?= Html::submitButton($model->isNewRecord ? 'Crear' : 'Actualizar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
    <?php ActiveForm::end(); ?>
    
    