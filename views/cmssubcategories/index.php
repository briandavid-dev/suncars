<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsSubcategoriessSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Gestionar Sub Categorías');
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
        <?= Html::a('Crear Sub-Categoría', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           // 'subcategorie_id',
            'subcategorie_name',
        		[
	        		'attribute' => 'categories.categorie_name',
	        		'header' => 'Categoría',
        		],
            //'subcategorie_http',
            //'categorie_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]);
     ?>
</div>
</div>
