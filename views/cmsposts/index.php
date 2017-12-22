<?php

use yii\helpers\Html;
use yii\grid\GridView;
use kartik\editable\Editable;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CmsPostsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Gestionar Posts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="box box-primary">
    <div class="box-body">
    <div class="title-bmo-10"> <?= Html::encode($this->title) ?></div>



    <hr class="hr-bmo-12 ">

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
            'tableOptions'=>['class'=>'table-striped table-bordered table-condensed'],
         'options'=>['style' => 'white-space:nowrap;'],
 
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'post_id',
            //'post_date',
            //'post_date_gmt',
            //'post_content:ntext',
            'post_title:ntext',
            // 'post_summary:ntext',
            



     [
                'attribute' => 'post_status',
                'header' => 'Status',
                'format' => 'raw',
                
                'value' => function ($data) {
                  
          $data->post_status = ($data->post_status) ? '<h4><span class="label label-success">ACTIVO</span></h4>' : '<h4><span class="label label-danger">INACTIVO</span></h4>';
                
                
                  /* referencia http://demos.krajee.com/editable */
                  /**
                   * STEP 2: SETUP WIDGET IN VIEW
                   * view.php
                   */
                
                $Prueba=array("0"=>"INACTIVO",
                        "1"=>"ACTIVO");
                  
                  $editable = Editable::widget([
                    'model' => $data,
                    'attribute' => 'post_status',

                              
              
                    'type' => 'primary',
                    //'size'=> 'lg',
                    //'asPopover' => false,
                    'format' => Editable::FORMAT_BUTTON,
                    'inputType' => Editable::INPUT_DROPDOWN_LIST,
                    'options' => ['class'=>'form-control', 'prompt'=>'Seleccione...', 'id' => $data->post_id ],
                    'data' => $Prueba,
                        
                    /*'displayValueConfig'=> [
                     '0' => '<i class="glyphicon glyphicon-thumbs-up"></i> pass',
                        '1' => '<i class="glyphicon glyphicon-thumbs-down"></i> fail',
                        '2' => '<i class="glyphicon glyphicon-hourglass"></i> waived',
                        '3' => '<i class="glyphicon glyphicon-flag"></i> todo',
                    ],*/
                    'formOptions' => [ 'action' => [ 'editable', 'cmspost' => $data->post_id ]],
                  ]);
                  
                  
                
                /*
                  $html = (isset($data->equipo->equipo_nombre)) ? 
                  '<span style="color: blue;"><i class="fa fa-bicycle"></i> '.$data->equipo->equipo_nombre .'</span>': 
                  $editable;
                  */

                
                      //     $data->cliente_activo = ($data->cliente_activo) ? "SI" : "NO";
                 // return $data->cliente_activo.$editable;
                   return $editable;
                    

                 
                },
              ],




            // 'post_comment_status',
            // 'post_http',
             //'post_categories:ntext',
             //'post_subcategories:ntext',
            // 'post_modified',
            // 'post_modified_gmt',
            // 'commnet_count',
              // 'user_id',
            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
</div>
