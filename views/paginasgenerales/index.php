<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\PaginasGeneralesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paginas Generales';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paginas-generales-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Paginas Generales', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'pagina_general_id',
            'pagina_general_titulo:ntext',
            'pagina_general_http:ntext',
            'pagina_general_contenido_1:ntext',
            'pagina_general_contenido_2:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?></div>
