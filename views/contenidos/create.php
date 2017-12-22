<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */

$this->title = 'Create Contenidos';
$this->params['breadcrumbs'][] = ['label' => 'Contenidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="contenidos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
