<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Users', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'usuario_id',
            'usuario_nombre',
            'usuario_apellido',
            'usuario_login',
            'usuario_password:ntext',
            // 'usuario_fecha_creacion',
            // 'usuario_fecha_modificacion',
            // 'usuario_fecha_ultimo_acceso',
            // 'usuario_email:ntext',
            // 'usuario_telefono_1',
            // 'usuario_telefono_2',
            // 'usuario_direccion:ntext',
            // 'usuario_activo',
            // 'usuario_online',
            // 'usuario_perfi',
            // 'usuario_imagen_1:ntext',
            // 'usuario_estado',
            // 'usuario_mensaje_publico',
            // 'usuario_genero',
            // 'usuario_fecha_nacimiento',
            // 'authKey:ntext',
            // 'accessToken:ntext',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
