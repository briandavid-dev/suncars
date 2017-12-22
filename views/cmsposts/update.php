<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPosts */

$this->title = Yii::t('app', 'Actualizar {modelClass} ', [
    'modelClass' => 'Post',
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->post_id, 'url' => ['view', 'id' => $model->post_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class="hr-bmo-10 ">
	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>
