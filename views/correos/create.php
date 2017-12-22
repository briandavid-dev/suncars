<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Correos */

$this->title = Yii::t('app', 'Create Correos');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Correos'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="correos-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
