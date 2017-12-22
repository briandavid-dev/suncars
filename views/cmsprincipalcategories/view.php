<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPrincipalcategories */

$this->title = $model->principalcategories_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Cms Principalcategories'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-principalcategories-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->principalcategories_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->principalcategories_id], [
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
            'principalcategories_id',
            'principalcategories_name',
            'principalcategories_http',
            'principalcategories_codigo',
            'principalcategories_status',
        ],
    ]) ?>

</div>
