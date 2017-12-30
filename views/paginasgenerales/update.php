<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */

$this->title = Yii::t('app', 'Actualización de la Página');
$this->params['breadcrumbs'][] = ['label' => 'Paginas Generales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class=" hr-bmo-12">


	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>

