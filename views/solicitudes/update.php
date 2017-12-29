<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Solicitudes',
]) . $model->solicitud_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Solicitudes'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->solicitud_id, 'url' => ['view', 'id' => $model->solicitud_id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="solicitudes-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
