<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */

<<<<<<< HEAD
$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Solicitudes',
]) . $model->solicitud_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solicitud_id, 'url' => ['view', 'id' => $model->solicitud_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
=======
$this->title = 'Update Solicitudes: ' . $model->solicitud_id;
$this->params['breadcrumbs'][] = ['label' => 'Solicitudes', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solicitud_id, 'url' => ['view', 'id' => $model->solicitud_id]];
$this->params['breadcrumbs'][] = 'Update';
>>>>>>> 930a8e43e2632c3f843cfabaeda7a21e4291ff7d
?>
<div class="solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
