<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContenidosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Contenidos';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contenidos-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Contenidos', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'contenido_id',
            'contenido_titulo:ntext',
            'contenido_texto:ntext',
            'contenido_http:ntext',
            'contenido_imagen_1:ntext',
            // 'contenido_imagen_2:ntext',
            // 'contenido_imagen_3:ntext',
            // 'contenido_precio',
            // 'contenido_fecha_creacion',
            // 'contenido_tipo:ntext',
            // 'contenido_marca',
            // 'contenido_categoria:ntext',
            // 'contenido_subcategoria:ntext',
            // 'contenidoscol',
            // 'usuario_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
