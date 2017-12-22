<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\date\DatePicker;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */
/* @var $form yii\widgets\ActiveForm */
?>

<?php /* $form = ActiveForm::begin([
		'id' => 'form-usuarios-create',
		'method' => 'post',
]);  */ ?>
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
<?php


$form = ActiveForm::begin([
		'options' => ['enctype' => 'multipart/form-data'],
		'method' => 'post',
		'id' => 'form-usuarios-create'
]);
?>
<div>&nbsp;</div>
  <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
<div class="row">
	<div class="col-md-12 col-sm-12">
		<p class="note"><?php // print Yii::t('general','fields_required'); ?></p>
		<?= $form->errorSummary($model); ?>
		<div>&nbsp;</div>
	</div>
</div>
<div class="row">
			<div class="col-md-3 col-sm-6">
				<?= $form->field($model, 'usuario_nombre')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese un Nombre'])->label('Nombre <span class="required">*</span>') ?>
			</div>
			<div class="col-md-3 col-sm-6">
				<?= $form->field($model, 'usuario_apellido')->textInput(['maxlength' => true,'placeholder' => 'Ingrese un Apellido'])->label('Apellido <span class="required">*</span>') ?>
			</div>
			<div class="col-md-2">
				<?php
					echo $form->field($model, 'usuario_perfil')->dropDownList(
					Yii::$app->params['usuariosPerfiles'],
					['prompt'=>'Seleccione...'])->label('Perfil <span class="required">*</span>');
				?>
			</div>
</div>
	<div class="row">
		<div class="col-md-4">
			<?= $form->field($model, 'usuario_email')->textInput(['placeholder' => 'E-mail'])->label('E-mail <span class="required">*</span>') ?>
		</div>

		<div class="col-md-4">
			<?= $form->field($model, 'usuario_email_confirmacion')->textInput(['placeholder' => 'E-mail'])->label('E-mail <span class="required">*</span>') ?>
		</div>
	</div>

	<div class="row">
		<?php
		if(!$model->isNewRecord){
			$model->usuario_password = "";
		}
		?>
		<div class="col-md-4">
			<?= $form->field($model, 'usuario_password')->passwordInput(['placeholder' => 'Contraseña'])->label('Contraseña <span class="required">*</span>') ?>
		</div>
		<div class="col-md-4">
			<?= $form->field($model, 'usuario_password_confirmacion')->passwordInput(['placeholder' => 'Contraseña'])->label('Contraseña <span class="required">*</span>') ?>
		</div>
	</div>

<div class="row">

			<!--
			<div class="col-md-12">
			<?php
				/*
				// usage without $model
				print Html::activeLabel($model, 'usuario_fecha_nacimiento');
				echo DatePicker::widget([
						'name' => 'Usuarios[usuario_fecha_nacimiento]',
						'value' => (isset($_REQUEST['Usuarios'])) ? $_REQUEST['Usuarios']['usuario_fecha_nacimiento'] : '',
						'options' => ['placeholder' => 'Seleccione...'],
						'pluginOptions' => [
								'format' => 'dd-mm-yyyy',
								'todayHighlight' => true,
								'autoclose' => true
						]
				]);
				print Html::error($model, 'usuario_fecha_nacimiento');
				*/
				?>
			</div>
			-->

		<div class="col-md-8 text-center">

			<?php
			// Yii::getAlias('@web')
			//var_dump(Url::base(true));
			//web\resources\AdminLTE\dist\img\avatars
			?>

		<h3>Escoje un avatar</h3>
		<?php //var_dump($model->usuario_imagen_1); ?>

    	<?php //echo Html::hiddenInput('usuario_imagen_1', $model->usuario_imagen_1);

			echo $form->field($model, 'usuario_imagen_1')
			->hiddenInput()
			->label(false);


			?>
				<style>
			    	.selectAvatar {
			    		cursor: pointer;
			    	}
			    	.selectAvatar:HOVER{
			    		opacity: 0.5;
			    	}
			    </style>
			    <div>&nbsp;</div>
				<div id="avatarSeleccionado" class="text-center">
					<?php

						/*
						 * en este caso la logica de los avatars es que hay un hidden de la imagen 1
						 * de los usuarios que se actualiza con el js bmosoluciones.js
						 * y eso cambia la imagen del hidden
						 */

						$homeUrl = Url::base(true).'/web/resources/AdminLTE/dist/img/avatars/';
						/*if(substr_count(Yii::app()->user->getState("imagen_1"), 'avatar') > 0){
			    			$fotoAvatar = Yii::app()->theme->baseUrl.'/resources/images/avatares/'.Yii::app()->user->getState("imagen_1");
			    	?>
			    			<img src='<?php print $fotoAvatar; ?>' height='200' width='200' >
			    	<?php
			 			}*/
					?>
					<?php
						if(!empty($model->usuario_imagen_1)){
							$fotoAvatar = $homeUrl.$model->usuario_imagen_1;
					?>
						<img src='<?php print $fotoAvatar; ?>' height='200' width='200' >
					<?php
			 			}
					?>

				</div>
				<div>&nbsp;</div>

				 <?php


				    $folder = Yii::$app->basePath.'/web/resources/AdminLTE/dist/img/avatars';
				    if(is_dir($folder)){
				    	$folderContent = scandir($folder);

				    	foreach($folderContent as $keyFolCon => $valFolCon){
				    		// si esta la palabra avatar en el archivo
				    		if(substr_count($valFolCon, 'avatar') > 0){
				    ?>

				    	<img class="selectAvatar" alt="avatar" title="avatar" avatarName="<?php print $valFolCon; ?>" src="<?php print $homeUrl.$valFolCon; ?>" style="max-height: 85px; max-width: 85px;">

				    <?php
				    		}

				    	}


				    }

				    ?>


		</div>

			<div class="col-md-8 text-center">
			<div>&nbsp;</div>
			 <?= Html::a(
			 		$model->isNewRecord ? 'Crear' : 'Actualizar',
			 		$model->isNewRecord ? ['usuarios/create'] : ['usuarios/update','id'=>$model->usuario_id],
			 		[
		        	'data' => [
			            'method' => 'post',
			        	],
		 				'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
		    		])?>
    <div>&nbsp;</div>
			</div>



</div>
<?php ActiveForm::end(); ?>
