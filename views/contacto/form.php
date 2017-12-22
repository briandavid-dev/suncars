<?php 

use yii\widgets\ActiveForm;




?>

<style>
.btn-send {
    cursor: pointer;
    background: #666666;
    padding: 6px;
    box-shadow: 0px 0px 1px #888888;
    width: 110px;
    text-align: center;
    color: #ffffff;
    border: 1px solid #ffffff;
}
.btn-send:HOVER {
    cursor: pointer;
    background: #ffffff;
    box-shadow: 0px 0px 1px #888888;
    color: #666666;
    border: 1px solid #666666;
}
</style>

<div class="col-md-12">
 <?php if (Yii::$app->session->hasFlash('success')): ?>
 <!-- 
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <strong><?= Yii::$app->session->getFlash('success') ?></strong>
      </div>
       -->
      <div class="alert alert-success alert-dismissable text-center" style="background: #1b1d1f; color: #ebebeb; ">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
         <strong><?= Yii::$app->session->getFlash('success') ?></strong>
      </div>
  <?php endif; ?>
</div>
	<?php // var_dump($modelContact); ?>
				
<?php $form = ActiveForm::begin(); ?>

	<div class="col-md-12">
		<?php print $form->field($modelContact, 'name')->textInput(); ?>
	</div>
	<div class="col-md-12">
		<?php print $form->field($modelContact, 'email')->textInput(); ?>
	</div>
	<div class="col-md-12">
		<?php print $form->field($modelContact, 'telefono')->textInput(); ?>
	</div>
	<div class="col-md-12">
		<?php print $form->field($modelContact, 'empresa')->textInput(); ?>
	</div>
	<div class="col-md-12">
		<?php print $form->field($modelContact, 'pais')->textInput(); ?>
	</div>
	<div class="col-md-12">
		<?= $form->field($modelContact, 'body')->textarea(['rows' => '6']) ?>
	</div>
	<div class="col-md-12" style="font-size: 12px; text-align: justify;">
		<label for="form_ofertas_servicios">
			<input type="checkbox" id="form_ofertas_servicios" name="ContactForm[form_ofertas_servicios]"> 
		<?php echo \Yii::t('app', 'Me gustaría conocer las ofertas y servicios de ICS'); ?>	</label>
	</div>
	<div>&nbsp;</div>
	<div class="col-md-12" style="font-size: 12px; text-align: center;">
		<input type="submit" class="btn-send" value="<?php echo \Yii::t('app', 'Enviar'); ?>	">
	</div>
	
	
	

<?php ActiveForm::end(); ?>
	
