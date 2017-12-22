<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsBannersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gestionar Banner');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>


    <hr class="hr-bmo-12 ">
    
    <?php if(Yii::$app->session->hasFlash('exception')): ?>
<div class="alert alert-danger alert-dismissable">
        <?php echo Yii::$app->session->getFlash('exception'); ?>
</div>
<?php endif; ?>

          <?php if (Yii::$app->session->hasFlash('success')): ?>
              <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
               <?= Yii::$app->session->getFlash('success') ?>
              </div>
          <?php endif; ?>

    
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Crear Banner'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>
<?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'banner_id',
            'banner_imagen:ntext',
            'banner_titulo',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
<?php Pjax::end(); ?>
</div>
</div>
