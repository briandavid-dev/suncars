<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsGeneralPages */

	$titulo = "";

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
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($titulo) ?></div>
	<hr class="hr-bmo-10 ">
	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>
<div>&nbsp;</div>


