<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */

$this->title = 'Update Paginas Generales: ' . $model->pagina_general_id;
$this->params['breadcrumbs'][] = ['label' => 'Paginas Generales', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pagina_general_id, 'url' => ['view', 'id' => $model->pagina_general_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paginas-generales-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
