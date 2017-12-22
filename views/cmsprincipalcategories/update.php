<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPrincipalcategories */

$this->title = Yii::t('app', 'Actualizar {modelClass}: ', [
    'modelClass' => 'Principal Categorias',
]) . $model->principalcategories_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Principal categorias '), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->principalcategories_id, 'url' => ['view', 'id' => $model->principalcategories_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class="hr-bmo-10 ">
	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>

