<?php

use yii\helpers\Html;
use yii\widgets\Pjax;
use yii\grid\GridView;
use kartik\editable\Editable;
Use yii\helpers\ArrayHelper;
use app\models\Usuarios;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsuariosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestión de Usuarios';
$this->params['breadcrumbs'][] = $this->title;
?>


<div class="row">
	<div class="col-md-12">
		<div class="box">


			<div class="box box-primary">
				<div class="box-body">
				<div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>	<div class="box-header">
<hr class="hr-bmo-10 ">
					<?php if(Yii::$app->session->hasFlash('exception')): ?>
				<div class="alert alert-danger alert-dismissable">
						<?php echo Yii::$app->session->getFlash('exception'); ?>
				</div>
				<?php endif; ?>

				          <?php if (Yii::$app->session->hasFlash('success')): ?>
				              <div class="alert alert-success alert-dismissable">
				                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
				               <?= Yii::$app->session->getFlash('success') ?>
				              </div>
				          <?php endif; ?>

			  <p>
		        <?= Html::a('Crear', ['create'], ['class' => 'btn btn-success']) ?>
		    </p>
		    <?= GridView::widget([
		        'dataProvider' => $dataProvider,
		        'filterModel' => $searchModel,
		 
		    
					'rowOptions' => function($model)

					{

						if($model->usuario_activo=='SI')
						{
							return ['class'=>'danger'];
						} else{

							return ['class'=>'success'];
						}
					},

		        'columns' => [
		            ['class' => 'yii\grid\SerialColumn'],

		            //'usuario_id',
		            'usuario_nombre',
		            'usuario_apellido',
		            //'usuario_login',
		            //'usuario_password:ntext',
		            // 'usuario_fecha_creacion',
		            // 'usuario_fecha_modificacion',
		            // 'usuario_fecha_ultimo_acceso',
		             'usuario_email:ntext',
		            	//['class' => 'kartik\grid\EditableColumn',
		            	//'attribute' => 'usuario_email',
		            // ],
		            
		            // 'usuario_telefono_1',
		            // 'usuario_telefono_2',
		            // 'usuario_direccion:ntext',

/*
[
		        		'attribute' => 'usuario_activo',
		        		'header' => 'Usuario activo',
		        		'format' => 'raw',
		        		
		        		'value' => function ($data) {
		        		
			        		/* referencia http://demos.krajee.com/editable */
			        		/**
			        		 * STEP 2: SETUP WIDGET IN VIEW
			        		 * view.php
			        		 *//*
		        		$data->usuario_activo = ($data->usuario_activo) ? '<h4><span class="label label-success">SI</span></h4>' : '<h4><span class="label label-danger">NO</span></h4>';
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
		        	          
		        				
		        				'formOptions' => [ 'action' => [ 'editable', 'usuario' => $data->usuario_id ]],
		        			]);
		        			
		        			
		        	
			        		
			        		return $editable;
		        		 
		        		},
	        		],
*/

        /*    ['class' => 'kartik\grid\EditableColumn',
                  'attribute' => 'usuario_activo',
                  'format' =>  'raw',
                            'value'=> function($data){
                                                if($data->usuario_activo){
                                                    return '<h4><span class="label label-success">SI</span></h4>';
                        }
                                                return '<h4><span class="label label-danger">NO</span></h4>';
                                        
                                        return [
            'source' => ['SI' => 'SI', 'NO' => 'NO'],
            'value' => $data->usuario_activo,
        ];
       },           
],*/

                           
		            // 'usuario_activo',
		            // 'usuario_online',
		             'usuario_perfil',
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


		</div>
	</div>
</div>
