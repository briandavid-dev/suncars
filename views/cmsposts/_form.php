<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\CmsCategories;
use app\models\CmsSubcategories;
Use yii\helpers\ArrayHelper;
use yii\helpers\Url;
use kartik\date\DatePicker;
use app\models\CmsPrincipalcategories;



/* @var $this yii\web\View */
/* @var $model app\models\CmsPosts */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cms-posts-form">
<style>
  span.required {
  color: #ff0000;
}
</style>

  <?php if (Yii::$app->session->hasFlash('success')): ?>
      <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
       <?= Yii::$app->session->getFlash('success') ?>
      </div>
  <?php endif; ?>
   

 <?php $form = ActiveForm::begin(); ?>


<div>&nbsp;</div>
          <p class="note">Campos con <span class="required">*</span> son requeridos.</p>
            <div>&nbsp;</div>
            <?= $form->errorSummary($model); ?>


      <div class="row">
          <div class="col-sm-3">
            <!-- cliente_activo -> puede ser activado o desactivado en sistema -->
            <div class="text-info small">Indica si es un post activo</div>
                <?= $form->field($model, 'post_status')->checkBox(array('value'=>'1')) ?>
          </div>
          <div class="col-sm-3">
            <!-- cliente_activo -> puede ser activado o desactivado en sistema -->
            <div class="text-info small">Se colocará en la columna derecha</div>
                <?= $form->field($model, 'post_section_right')->checkBox(array('value'=>'1')) ?>
          </div>
          <div class="col-sm-3">
            <?php
        // usage without $model
        print Html::activeLabel($model, 'post_date');
        echo DatePicker::widget([
            'name' => 'CmsPosts[post_date]',
            'value' => (isset($_REQUEST['CmsPosts'])) ? $_REQUEST['CmsPosts']['post_date'] : '',
            'options' => ['placeholder' => 'Seleccione...'],
            'pluginOptions' => [
                'format' => 'dd-mm-yyyy',
                'todayHighlight' => true,
                'autoclose' => true
            ]
        ]);
        print Html::error($model, 'post_date');
        ?>
          </div>
      </div>




    <div class="row" >
          <div class="col-sm-3">
            <!-- cliente_activo -> puede ser activado o desactivado en sistema -->
            <div class="text-info small">Por defecto se coloca despues de la imagen</div>
                <?= $form->field($model, 'post_title_in_top')->checkBox(array('value'=>'1')) ?>
          </div>
      <div class="col-sm-9">
        <?= $form->field($model, 'post_title')->textInput(['maxlength' => true,'class' => 'form-control','placeholder' => 'Ingrese Titulo'])->label('Titulo <span class="required">*</span>') ?>
    </div>
      <div class="col-sm-12">
        <?= $form->field($model, 'post_summary')->textInput() ?>
    </div>
    <div class="col-sm-12">
      <div class="text-info small">Separe las palabras o frases con coma ( , )</div>
      <?= $form->field($model, 'post_keywords')->textInput() ?>
    </div>
  </div>

  <div class="row">
        <div class="col-md-12">
          <?=
        $form->field($model, 'post_content')->widget(\yii\redactor\widgets\Redactor::className(), [
            'clientOptions' => [
                //'imageManagerJson' => ['/redactor/upload/image-json'],
                'imageUpload' => ['/cmsposts/upload'],
                'fileUpload' => ['/cmsposts/uploadfile'],
                'lang' => 'es',
                'plugins' => ['clips', 'fontcolor','imagemanager','video','table','fontfamily', 'filemanager']
            ]
        ])
          ?>
        </div>
  </div>

<div class="row">
  <div class="col-sm-6">
                    <?php
                        $items = ArrayHelper::map(CmsPrincipalcategories::find()->orderBy(['(principalcategories_name)' => SORT_ASC])->all(), 'principalcategories_id', 'principalcategories_name');
                        echo $form->field($model, 'post_principalcategories')->dropDownList(
                           $items,
                           [
                               'prompt'=>'Seleccione...',
                               'onchange'=>'
                                               $.get( "'.Url::toRoute('dependent-dropdown/categorie_name').'", { id: $(this).val() } )
                                                   .done(function( data ) {
                                                       $( "#'.Html::getInputId($model, 'principalcategories_id').'" ).html( data );
                                                   }
                                               );
                                           '
                           ]
                        )->label(' Link o Página <span class="required">*</span>');
                      ?>
                </div>

</div>
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
      
          $fieldCategorias = $model->post_categories;
          $fieldSubCategorias = $model->post_subcategories;
        
            $arrayCategorias = ArrayHelper::map(CmsCategories::find()->all(), 'categorie_id','categorie_name');
        

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
          <input type="checkbox" id="cat_<?php print $keyCat; ?>" name="CmsPosts[post_categories][]" value="<?php print $keyCat; ?>" <?php print $checkedCat; ?>"> 
          <label for="cat_<?php print $keyCat; ?>" style="color: #0a3673; font-weight: normal;"> <?php print $valCat; ?> </label>
        </div>
        <div style="margin-left: 20px;">
          <?php
                   ?>
        <?php 
        
         $arraySubCategorias = ArrayHelper::map(CmsSubcategories::find()->where(['categorie_id' => $keyCat])->all(), 'subcategorie_id','subcategorie_name');
          

        foreach ($arraySubCategorias as $keySubCat => $valSubCat){
           //var_dump($fieldSubCategorias);
             //  var_dump($keySubCat  );
         //die();
          /* si la categoria esta en el campo subcategorias entonces marca el chechbox checked */
          $checkedSubCat = '';
          if(!empty($keyCat)){
            if( strpos( $fieldSubCategorias, (string) $keySubCat ) !== false ) {
              $checkedSubCat = 'checked="checked"';
            }
          }
          
        ?>
          <span style="background: #e6eff8;">
            <input type="checkbox" id="subcat_<?php print $keySubCat; ?>" name="CmsPosts[post_subcategories][]" onchange="check('<?php print $keyCat; ?>',this)" value="<?php print $keySubCat; ?>" <?php print $checkedSubCat; ?>  esdecategoria="categoria<?php print $keyCat; ?>">  
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
<div class="row">
<div>&nbsp;</div>
  <div class="col-sm-8 text-center" style="background: #222d32; color: #ffffff;">
    <h4>Indique si usará video o imagen para la presentación</h4>
  </div>
  <div class="col-sm-4 clearfix">
    &nbsp;
  </div>
  <div class="col-sm-8 text-center" style="padding: 5px;">
    <div class="col-sm-4">
      <div class="text-info small">Se usa la imagen 1. Principal, por defecto</div>
    </div>
    <div class="col-sm-4">
      <?= $form->field($model, 'post_presentacion_is_video')->checkBox(array('value'=>'1')) ?>
    </div>
    <div class="col-sm-4">
      <?= $form->field($model, 'post_presentacion_hide')->checkBox(array('value'=>'1')) ?>
    </div>
  </div>
  <div class="col-sm-4">
    &nbsp;
  </div>
<div>&nbsp;</div>
</div>
  <div class="col-sm-4">
      <span class="text-info small"><h4><strong>Código iframe YouTube</h4></span>
    <?= $form->field($model, 'post_video_1')->textarea(['rows' => '5']) ?>
    <?php //print (empty($model->post_video_1)) ? "" : $model->post_video_1; ?>
    
    
  </div>
  <div class="col-sm-4">
                 <span class="text-info small"><h4><strong>Tamaño para Productos: 300px ancho. 200px alto <br>Tamaño para Recetas Noticias: 300px ancho. 200px alto</strong> </h4></span>
           
                <?php echo $form->field($model, 'post_image_1')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
                <div class="thumbnail">
                  <?php
                      $rutaImg1 = "#";
                      $classImg1 = "hidden";
                      if(!$model->isNewRecord){
                        $rutaImg1 = Url::base(true).'/themes/rigal/resources/images/post/'.$model->post_image_1;

                        $classImg1 = "";
                    }
                    
                    if(empty($model->post_image_1)) $rutaImg1 = "";
                  ?>
                  <img id="preview_cmsposts-post_image_1" src="<?php print $rutaImg1; ?>" alt="<?php print $model->post_image_1?>" title="<?php print $model->post_image_c1?>" class="<?php print $classImg1; ?>" width="90" height="75" />
                </div>

            </div>

  <div class="col-sm-4">
                 <span class="text-info "><strong><h4>Tamaño para Productos: 650px ancho. 250px alto <br>Tamaño para Recetas Noticias: 650px ancho. 250px alto</strong></h4> </span>
           
                <?php echo $form->field($model, 'post_image_2')->fileInput(['class'=>'col-md-12 btn btn-info']); ?>
                <div class="thumbnail">
                  <?php
                      $rutaImg2 = "#";
                      $classImg2 = "hidden";
                      if(!$model->isNewRecord){
                        $rutaImg2 = Url::base(true).'/themes/rigal/resources/images/post/'.$model->post_image_2;

                        $classImg2 = "";
                    }
                  ?>
                  <img id="preview_cmsposts-post_image_2" src="<?php print $rutaImg2; ?>" alt="<?php print $model->post_image_2?>" title="<?php print $model->post_image_c2?>" class="<?php print $classImg2; ?>" width="90" height="75" />
                </div>

            </div>

      
<div class="col-md-12 text-center">
    <div>&nbsp;</div>
    <?= Html::a(
        $model->isNewRecord ? 'Crear' : 'Actualizar',
        $model->isNewRecord ? ['cmsposts/create'] : ['cmsposts/update','id'=>$model->post_id],
        [
            'data' => [
                'method' => 'post',
              ],
          'class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary'
          ])?>
        <div>&nbsp;</div>
</div>

    <?php ActiveForm::end(); ?>

</div>