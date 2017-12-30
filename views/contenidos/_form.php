<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
Use yii\helpers\ArrayHelper;
use app\models\Categorias;
use app\models\Subcategorias;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model app\models\Contenidos */
/* @var $form yii\widgets\ActiveForm */
?>


    <?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
       <?= Yii::$app->session->getFlash('success') ?>
      </div>
    <?php endif; ?>

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->errorSummary($model); ?>


<div class="row">
    <div class="col-md-6">
        <?= $form->field($model, 'contenido_titulo')->textInput()?>
        
          <?php
            echo $form->field($model, 'contenido_tipo')->dropDownList(
            Yii::$app->params['contenidosTipos'],
            ['prompt'=>'Seleccione...']);
        ?>


        <?= $form->field($model, 'contenido_marca')->textInput() ?>

 <div>&nbsp</div>

 <div class="text-info small">Indica si el producto o servicio esta disponible </div>
        
        

        <?php 
            $model->contenido_disponibilidad = $model->isNewRecord ? true : $model->contenido_disponibilidad;
            print $form->field($model, 'contenido_disponibilidad')->checkBox(array('value'=>'1')) 
        ?>  

        <div>&nbsp</div>
        

        <?php echo $form->field($model, 'contenido_imagen_1')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
        <div class="thumbnail">
          <?php
              $rutaImg1 = "#";
              $classImg1 = "hidden";
              if(!$model->isNewRecord){
                $rutaImg1 = Url::base(true).'/themes/automovile/resources/images/contenidos/'.$model->contenido_imagen_1;

                $classImg1 = "";
            }
            
            if(empty($model->contenido_imagen_1)) $rutaImg1 = "";
          ?>
          <img id="preview_contenidos-contenido_imagen_1" src="<?php print $rutaImg1; ?>" alt="<?php print $model->contenido_imagen_1?>" title="<?php print $model->contenido_imagen_1?>" class="<?php print $classImg1; ?>" width="90" height="75" />
        </div>

         <span class="text-info small"><h4><strong>762px ancho x 456px alto <br> </strong> </h4></span>
  
        

         <div>&nbsp</div>

         <?php echo $form->field($model, 'contenido_imagen_3')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
        <div class="thumbnail">
          <?php
              $rutaImg3 = "#";
              $classImg3 = "hidden";
              if(!$model->isNewRecord){
                $rutaImg3 = Url::base(true).'/themes/automovile/resources/images/contenidos/'.$model->contenido_imagen_3;

                $classImg3 = "";
            }
            
            if(empty($model->contenido_imagen_3)) $rutaImg3 = "";
          ?>
          <img id="preview_contenidos-contenido_imagen_3" src="<?php print $rutaImg3; ?>" alt="<?php print $model->contenido_imagen_3?>" title="<?php print $model->contenido_imagen_3?>" class="<?php print $classImg3; ?>" width="90" height="75" />
        </div>

         <span class="text-info small"><h4><strong>762px ancho x 456px alto <br> </strong> </h4></span>

        

         <div>&nbsp</div>

         <?php echo $form->field($model, 'contenido_imagen_5')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
        <div class="thumbnail">
          <?php
              $rutaImg5 = "#";
              $classImg5 = "hidden";
              if(!$model->isNewRecord){
                $rutaImg5 = Url::base(true).'/themes/automovile/resources/images/contenidos/'.$model->contenido_imagen_5;

                $classImg5 = "";
            }
            
            if(empty($model->contenido_imagen_5)) $rutaImg1 = "";
          ?>
          <img id="preview_contenidos-contenido_imagen_5" src="<?php print $rutaImg5; ?>" alt="<?php print $model->contenido_imagen_5?>" title="<?php print $model->contenido_imagen_5?>" class="<?php print $classImg5; ?>" width="90" height="75" />
        </div>

         <span class="text-info small"><h4><strong>762px ancho x 456px alto <br> </strong> </h4></span>

         <div>&nbsp</div>

       

    </div>
    <div class="col-md-6">

        <?php
        print 
        $form->field($model, 'contenido_detalles')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                //'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/contenidos/upload'],
                //'fileUpload' => ['/clientes/upload'],
                'lang' => 'es',
                'plugins' => ['clips', 'fontcolor','imagemanager','video']
            ]
        ])

        ?>


         <?= $form->field($model, 'contenido_resumen')->textarea(['rows' => 6]) ?>

        
         <div>&nbsp</div>

 <?php echo $form->field($model, 'contenido_imagen_2')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
        <div class="thumbnail">
          <?php
              $rutaImg2 = "#";
              $classImg2 = "hidden";
              if(!$model->isNewRecord){
                $rutaImg2 = Url::base(true).'/themes/automovile/resources/images/contenidos/'.$model->contenido_imagen_2;

                $classImg2 = "";
            }
            
            if(empty($model->contenido_imagen_2)) $rutaImg2 = "";
          ?>
          <img id="preview_contenidos-contenido_imagen_2" src="<?php print $rutaImg2; ?>" alt="<?php print $model->contenido_imagen_2?>" title="<?php print $model->contenido_imagen_2?>" class="<?php print $classImg2; ?>" width="90" height="75" />
        </div>

         <span class="text-info small"><h4><strong>762px ancho x 456px alto <br> </strong> </h4></span>
 <div>&nbsp</div>

         <?php echo $form->field($model, 'contenido_imagen_4')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
        <div class="thumbnail">
          <?php
              $rutaImg4 = "#";
              $classImg4 = "hidden";
              if(!$model->isNewRecord){
                $rutaImg4 = Url::base(true).'/themes/automovile/resources/images/contenidos/'.$model->contenido_imagen_4;

                $classImg4 = "";
            }
            
            if(empty($model->contenido_imagen_4)) $rutaImg4 = "";
          ?>
          <img id="preview_contenidos-contenido_imagen_4" src="<?php print $rutaImg4; ?>" alt="<?php print $model->contenido_imagen_4?>" title="<?php print $model->contenido_imagen_4?>" class="<?php print $classImg4; ?>" width="90" height="75" />
        </div>

         <span class="text-info small"><h4><strong>762px ancho x 456px alto <br> </strong> </h4></span>



    </div>  
</div>
<hr>
<div>&nbsp;</div>
<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-tabs"  >
        <li class="active"><a href="#"><b>Categorías</b></a></li>
    </ul>
    <div>&nbsp;</div>
    
      <script type="text/javascript">
        function check(id,obj){
          $('#cat_'+id).prop('checked', true);
          //jQuery("#check_subcategorias")
          var esdecategoria = jQuery(obj).attr("esdecategoria");
          var countChekes = jQuery("[esdecategoria='"+esdecategoria+"']:checked").length;

          /* si no hay ninguno chequeado o tildado */
          if(countChekes < 1) $('#cat_'+id).prop('checked', false);
        }
      </script>
      
      <?php 
      
            $fieldCategorias = $model->contenido_categorias;
            $fieldSubCategorias = $model->contenido_subcategorias;
        
            $arrayCategorias = ArrayHelper::map(Categorias::find()->all(), 'categoria_id','categoria_nombre');

        foreach ($arrayCategorias as $keyCat => $valCat){

          /* si la categoria esta en el campo categorias entonces marca el chechbox checked */
          $checkedCat = '';
          if(!empty($keyCat)){
            if( strpos( $fieldCategorias, (string) $keyCat ) !== false ) {
              $checkedCat = 'checked="checked"';
            }
          }
          
      ?>
        <div>
          <input type="checkbox" id="cat_<?php print $keyCat; ?>" name="Contenidos[contenido_categorias][]" value="<?php print $keyCat; ?>" <?php print $checkedCat; ?>"> 
          <label for="cat_<?php print $keyCat; ?>" style="color: #0a3673; font-weight: normal;"> <?php print $valCat; ?> </label>
        </div>
        <div style="margin-left: 20px;">
        <?php 
        
         $arraySubCategorias = ArrayHelper::map(Subcategorias::find()->where(['categoria_id' => $keyCat])->all(), 'subcategoria_id','subcategorie_name');

    
        foreach ($arraySubCategorias as $keySubCat => $valSubCat){
          
          /* si la categoria esta en el campo subcategorias entonces marca el chechbox checked */
          $checkedSubCat = '';
          if(!empty($keyCat)){
            if( strpos( $fieldSubCategorias, (string) $keySubCat ) !== false ) {
              $checkedSubCat = 'checked="checked"';
            }
          }
          
        ?>
          <span style="background: #e6eff8;">
            <input type="checkbox" id="subcat_<?php print $keySubCat; ?>" name="Contenidos[contenido_subcategorias][]" onchange="check('<?php print $keyCat; ?>',this)" value="<?php print $keySubCat; ?>" <?php print $checkedSubCat; ?>  esdecategoria="categoria<?php print $keyCat; ?>">  
            <label for="subcat_<?php print $keySubCat; ?>" style="color: #2c7abd; font-weight: normal;"> <?php print $valSubCat; ?> </label>
          </span> &nbsp;&nbsp;
        <?php 
          }
        ?>
        </div>
      <?php 
        }
      ?>
  </div>
</div>
 

    


    
    <div>&nbsp;</div><div>&nbsp;</div>
    


    <div class="form-group">

        <?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['contenidos/create'] : ['contenidos/update','id'=>$model->contenido_id],
        [
            'data' => [
                'method' => 'post',
              ],
          'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
          ])?>

    </div>

    

</div>


<?php ActiveForm::end(); ?>