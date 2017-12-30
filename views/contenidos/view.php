<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */

$this->title = $model->contenido_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Contenidos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contenidos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->contenido_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->contenido_id], [
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
            'contenido_id',
            'contenido_titulo:ntext',
            'contenido_resumen:ntext',
            'contenido_detalles:ntext',
            'contenido_disponibilidad',
            'contenido_http:ntext',
            'contenido_imagen_1:ntext',
            'contenido_imagen_2:ntext',
            'contenido_imagen_3:ntext',
            'contenido_precio',
            'contenido_fecha_creacion',
            'contenido_tipo:ntext',
            'contenido_marca:ntext',
            'contenido_categorias:ntext',
            'contenido_subcategorias:ntext',
            'usuario_id',
        ],
    ]) ?>

</div>
