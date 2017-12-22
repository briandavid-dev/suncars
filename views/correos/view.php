<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Correos */

$this->title = $model->correo_id;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Correos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correos-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a(Yii::t('app', 'Update'), ['update', 'id' => $model->correo_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a(Yii::t('app', 'Delete'), ['delete', 'id' => $model->correo_id], [
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
            'correo_id',
            'coreo_principal',
            'correo_copia_principal',
            'correo_secundario',
            'correo_secundario_copia',
        ],
    ]) ?>

</div>
