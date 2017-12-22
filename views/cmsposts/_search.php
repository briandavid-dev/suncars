<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\CmsPostsSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-posts-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'post_id') ?>

    <?= $form->field($model, 'post_date') ?>

    <?= $form->field($model, 'post_date_gmt') ?>

    <?= $form->field($model, 'post_content') ?>

    <?= $form->field($model, 'post_title') ?>

    <?php // echo $form->field($model, 'post_summary') ?>

    <?php // echo $form->field($model, 'post_status') ?>

    <?php // echo $form->field($model, 'post_comment_status') ?>

    <?php // echo $form->field($model, 'post_name') ?>

    <?php // echo $form->field($model, 'post_http') ?>

    <?php // echo $form->field($model, 'post_categories') ?>

    <?php // echo $form->field($model, 'post_subcategories') ?>

    <?php // echo $form->field($model, 'post_modified') ?>

    <?php // echo $form->field($model, 'post_modified_gmt') ?>

    <?php // echo $form->field($model, 'commnet_count') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
