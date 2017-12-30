<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;


/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */
/* @var $form yii\widgets\ActiveForm */
?>

<?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
       <?= Yii::$app->session->getFlash('success') ?>
      </div>
    <?php endif; ?>



    <?php $form = ActiveForm::begin(); ?>


    <?= $form->errorSummary($model); ?>


<div class="row">
    <div class="col-md-12">
        <?= $form->field($model, 'pagina_general_titulo')->textInput()?>
    
        <div>&nbsp</div>

	</div>
	<div class="col-md-6">

		<?php
        print 
        $form->field($model, 'pagina_general_contenido_1')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                //'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/paginasgenerales/upload'],
                //'fileUpload' => ['/clientes/upload'],
                'lang' => 'es',
                'plugins' => ['clips', 'fontcolor','imagemanager','video']
            ]
        ])

        ?>
	</div>
	<div class="col-md-6">

        <?php
        print 
        $form->field($model, 'pagina_general_contenido_2')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                //'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/paginasgenerales/upload'],
                //'fileUpload' => ['/clientes/upload'],
                'lang' => 'es',
                'plugins' => ['clips', 'fontcolor','imagemanager','video']
            ]
        ])

        ?>

	</div>


</div>

    <div class="form-group">

    	<?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['paginasgenerales/create'] : ['paginasgenerales/update','id'=>$model->pagina_general_id],
        [
            'data' => [
                'method' => 'post',
              ],
          'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
          ])?>


    </div>

    <?php ActiveForm::end(); ?>


