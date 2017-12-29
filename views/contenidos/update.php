<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */

$this->title = Yii::t('app', 'Actualizar Publicación');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Publicaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
	<div class="box-body">
	<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
	<hr class=" hr-bmo-12">


	<?= $this->render('_form', ['model' => $model,]) ?>
	</div>
</div>
