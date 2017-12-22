<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\CmsGeneralPages */

$this->title = 'Create Cms General Pages';
$this->params['breadcrumbs'][] = ['label' => 'Cms General Pages', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cms-general-pages-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
