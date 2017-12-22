<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsGeneralPages */

$this->title = $model->general_pages_id;
$this->params['breadcrumbs'][] = ['label' => 'Cms General Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-general-pages-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->general_pages_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->general_pages_id], [
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
            'general_pages_id',
            'general_pages_content:ntext',
        ],
    ]) ?>

</div>
