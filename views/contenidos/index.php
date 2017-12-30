<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\ContenidosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Publicaciones');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>


    <hr class="hr-bmo-12 ">


          <?php if (Yii::$app->session->hasFlash('success')): ?>
              <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
               <?= Yii::$app->session->getFlash('success') ?>
              </div>
          <?php endif; ?>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Contenido'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            [
                'attribute' => 'contenido_imagen_1',
                'header' => 'Imagen',
                'format' => 'raw',
                
                'value' => function ($data) {

                    $theme = $this->theme;

                    $imagen = $theme->getUrl('resources/images/contenidos/').$data->contenido_imagen_1;

                    $html = "<img height='50' src='$imagen' />";
                    return $html;
                }
            ],
            'contenido_titulo:ntext',

            [
                'attribute' => 'contenido_disponibilidad',
                'format' => 'raw',
                
                'value' => function ($data) {


                    $html = $data->contenido_disponibilidad ? "SI" : "NO" ;
                    
                    return $html;

                }
            ],
            
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}'
            ],
        ],
    ]); ?>
<?php Pjax::end(); ?></div> </div>
