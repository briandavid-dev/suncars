<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsBanners */

$this->title = 'Banner';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Banners'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
    <hr class="hr-bmo-10 ">


    <p>
        <?= Html::a(Yii::t('app', 'Actualizar'), ['update', 'id' => $model->banner_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Eliminar'), ['delete', 'id' => $model->banner_id], ['class' => 'btn btn-danger','data' => [
                'confirm' => Yii::t('app', '¿Desea eliminar el siguiente registro?'),
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            
            'banner_imagen:ntext',
            'banner_titulo',
        ],
    ]) ?>

</div>
</div>