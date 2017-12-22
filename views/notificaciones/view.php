<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Notificaciones */

$this->title = $model->notificacion_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Notificaciones'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notificaciones-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->notificacion_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->notificacion_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => Yii::t('app', 'Are you sure you want to delete this item?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'notificacion_id',
            'notificacion_descripicion:ntext',
            'notificacion_tipo',
            'notificacion_fecha_hora',
            'notifacion_fecha_hora_utc',
            'notificacion_status',
            'usuario_id',
            'tratamiento_id',
        ],
    ]) ?>

</div>
