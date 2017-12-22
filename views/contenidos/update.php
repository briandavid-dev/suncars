<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */

$this->title = 'Update Contenidos: ' . $model->contenido_id;
$this->params['breadcrumbs'][] = ['label' => 'Contenidos', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->contenido_id, 'url' => ['view', 'id' => $model->contenido_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="contenidos-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
