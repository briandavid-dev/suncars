<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Subcategorias */

$this->title = 'Update Subcategorias: ' . $model->subcategorias_id;
$this->params['breadcrumbs'][] = ['label' => 'Subcategorias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->subcategorias_id, 'url' => ['view', 'id' => $model->subcategorias_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="subcategorias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
