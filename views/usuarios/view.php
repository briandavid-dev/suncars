<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use yii\helpers\Url;
use kartik\editable\Editable;

/* @var $this yii\web\View */
/* @var $model app\models\Usuarios */

$this->title = $model->usuario_id;
$this->params['breadcrumbs'][] = ['label' => 'Usuarios', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
  <div class="box-body">
  <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>
  <hr class="hr-bmo-10 ">



    <p>
        <?= Html::a('Actualizar', ['update', 'id' => $model->usuario_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Eliminar', ['delete', 'id' => $model->usuario_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => '¿Si? ¿Quieres eliminar este registro?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?php

						$homeUrl = Url::base(true).'/web/resources/AdminLTE/dist/img/avatars/';

						if(!empty($model->usuario_imagen_1)){
							$fotoAvatar = $homeUrl.$model->usuario_imagen_1;
					?>
						<img src='<?php print $fotoAvatar; ?>' height='150' >
					<?php
			 			}
					?>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            //'usuario_id',
            'usuario_nombre',
            'usuario_apellido',
            //'usuario_login',
            //'usuario_password:ntext',
            //'usuario_fecha_creacion',
            [
            	'label' => Html::activeLabel($model, 'usuario_fecha_creacion'),
            	'value' => date('d-m-Y', strtotime($model->usuario_fecha_creacion))
        	],
            //'usuario_fecha_modificacion',
           // 'usuario_fecha_ultimo_acceso',
            'usuario_email:ntext',
            //'usuario_telefono_1',
            //'usuario_telefono_2',
            //'usuario_direccion:ntext',
            //'usuario_activo',
            //'usuario_online',
            'usuario_perfil',
            //'usuario_imagen_1:ntext',
            //'usuario_estado',
            //'usuario_mensaje_publico',
            //'usuario_genero',
            //'usuario_fecha_nacimiento',
            //'authKey:ntext',
            //'accessToken:ntext',

[
                        'attribute' => 'usuario_activo',
                        'header' => 'Usuario activo',
                        'format' => 'raw',
                        
                        'value' => function ($data) {
                        
                            /* referencia http://demos.krajee.com/editable */
                            /**
                             * STEP 2: SETUP WIDGET IN VIEW
                             * view.php
                             */
                        
                        $Prueba=array("0"=>"NO",
                                        "1"=>"SI");
                            
                            $editable = Editable::widget([
                                'model' => $data,
                                'attribute' => 'usuario_activo',

                    
                                'type' => 'primary',
                                //'size'=> 'lg',
                                //'asPopover' => false,
                                'format' => Editable::FORMAT_BUTTON,
                                'inputType' => Editable::INPUT_DROPDOWN_LIST,
                                'options' => ['class'=>'form-control', 'prompt'=>'Seleccione...', 'id' => $data->usuario_id ],
                                'data' => $Prueba,
                              
                                /*'displayValueConfig'=> [
                                 '0' => '<i class="glyphicon glyphicon-thumbs-up"></i> pass',
                                        '1' => '<i class="glyphicon glyphicon-thumbs-down"></i> fail',
                                        '2' => '<i class="glyphicon glyphicon-hourglass"></i> waived',
                                        '3' => '<i class="glyphicon glyphicon-flag"></i> todo',
                                ],*/
                                'formOptions' => [ 'action' => [ 'editable', 'usuario' => $data->usuario_id ]],
                            ]);
                            
                            
                        
                        /*
                            $html = (isset($data->equipo->equipo_nombre)) ? 
                            '<span style="color: blue;"><i class="fa fa-bicycle"></i> '.$data->equipo->equipo_nombre .'</span>': 
                            $editable;
                            */
                            
                            return $editable;
                         
                        },
                    ],



        ],
    ]) ?>



    	</div>

</div>
