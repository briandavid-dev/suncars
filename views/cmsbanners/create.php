<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CmsBanners */

$this->title = Yii::t('app', 'Crear Banner');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;


?>
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class=" hr-bmo-12">


	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>
