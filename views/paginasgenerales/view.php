<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */

$this->title = $model->pagina_general_id;
$this->params['breadcrumbs'][] = ['label' => 'Paginas Generales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paginas-generales-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pagina_general_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pagina_general_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'pagina_general_id',
            'pagina_general_titulo:ntext',
            'pagina_general_http:ntext',
            'pagina_general_contenido_1:ntext',
            'pagina_general_contenido_2:ntext',
        ],
    ]) ?>

</div>
