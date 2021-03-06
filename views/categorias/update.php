<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsCategories */



$this->title = Yii::t('app', 'Actualizar {modelClass} ', [
    'modelClass' => 'Categoría',
]);
$this->params['breadcrumbs'][] = ['label' => 'Categorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class="hr-bmo-10 ">
	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>
