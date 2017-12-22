<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\CmsSubcategories */

$this->title = 'Sub-Categoría';
$this->params['breadcrumbs'][] = ['label' => 'Categorías', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>

  <div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
    <hr class="hr-bmo-10 ">


    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->subcategorie_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->subcategorie_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Desea eliminar el registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'subcategorie_id',
            'subcategorie_name',
            'subcategorie_http',
            'categorie_id',
        ],
    ]) ?>

</div>
</div>