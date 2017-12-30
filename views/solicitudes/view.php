<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */

$this->title = $model->solicitud_id;
<<<<<<< HEAD
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Solicitudes'), 'url' => ['index']];
=======
$this->params['breadcrumbs'][] = ['label' => 'Solicitudes', 'url' => ['index']];
>>>>>>> 930a8e43e2632c3f843cfabaeda7a21e4291ff7d
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="solicitudes-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
<<<<<<< HEAD
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->solicitud_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->solicitud_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
=======
        <?= Html::a('Update', ['update', 'id' => $model->solicitud_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->solicitud_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
>>>>>>> 930a8e43e2632c3f843cfabaeda7a21e4291ff7d
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'solicitud_id',
            'solicitud_nombre:ntext',
            'solicitud_email:ntext',
            'solicitud_mensaje:ntext',
            'solicitud_telefono:ntext',
            'contenido_id',
        ],
    ]) ?>

</div>
