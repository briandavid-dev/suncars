<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPosts */

$this->title = 'Post';
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posts'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

  <div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
    <hr class="hr-bmo-10 ">

     <p>
        <?= Html::a('Update', ['update', 'id' => $model->post_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->post_id], [
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
            'post_id',
            'post_date',
            'post_date_gmt',
            'post_content:ntext',
            'post_title:ntext',
            'post_summary:ntext',
            'post_status',
            'post_comment_status',
            'post_name',
            'post_http',
            'post_categories:ntext',
            'post_subcategories:ntext',
            'post_modified',
            'post_modified_gmt',
            'commnet_count',
            'user_id'
        ],
    ]) ?>

</div>
</div>
