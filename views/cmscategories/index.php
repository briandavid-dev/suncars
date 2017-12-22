<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;


/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsCategoriesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestionar Gategorías';
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

    <p>
        <?= Html::a('Crear', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

     <?php Pjax::begin(); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

           //  'categorie_id',
            'categorie_name',
            'categorie_position',
            

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
        <?php Pjax::end(); ?>
</div>
</div>