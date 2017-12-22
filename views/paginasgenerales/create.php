<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PaginasGenerales */

$this->title = 'Create Paginas Generales';
$this->params['breadcrumbs'][] = ['label' => 'Paginas Generales', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paginas-generales-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
