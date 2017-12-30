<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Solicitudes */
/* @var $form yii\widgets\ActiveForm */
?>

<section >
    <div class="container">
        <div class="row">

            <div>
                <br><br><br><br><br>
            </div>
            
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #009FB6;
    text-align: center; padding-bottom: 30px;"><?php print $model->contenido_titulo; ?></h2>
                
            </div>          
        </div>
    </div>
</section>




<!--secondary-banner ends-->
<div class="message-shadow"></div>
<div class="clearfix"></div>
<section class="content">
    <div class="container">
        <div class="inner-page inventory-listing">
            <div class="inventory-heading margin-bottom-10 clearfix">
                
           
            <div class="row"   >
                <div align="center" class="col-lg-8 col-md-8 col-sm-8 col-xs-12 left-content padding-left-none"> 
                    <!--OPEN OF SLIDER-->
                    <div  align="center" class="listing-slider" >
                       
                        <section align="center" class="slider home-banner">
                            <div align="center" class="flexslider" id="home-slider-canvas" >
                                <ul class="slides">

<?php
                                    $theme = $this->theme;
                                    $imagen = "";
                                    $imagen2 = "";
                                    $imagen3 = "";
                                    $imagen4 = "";
                                    $imagen5 = "";    

                                     if(!empty($model->contenido_imagen_1)){
                                        $imagen = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_1;
                                         $imagen2 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_2;
                                         $imagen3 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_3;
                                         $imagen4 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_4; 
                                         $imagen5 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_5;

                                    }
                                    


                                    ?>

                                    <li data-thumb="<?php print $imagen; ?>"> <img  src="<?php print $imagen; ?>" alt="" data-full-image="<?php print $imagen; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen2; ?>"> <img  src="<?php print $imagen2; ?>" alt="" data-full-image="<?php print $imagen2; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen3; ?>"> <img  src="<?php print $imagen3; ?>" alt="" data-full-image="<?php print $imagen3; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen4; ?>"> <img  src="<?php print $imagen4; ?>" alt="" data-full-image="<?php print $imagen4; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen5; ?>"> <img  src="<?php print $imagen5; ?>" alt="" data-full-image="<?php print $imagen5; ?>" /> </li>

                                    <!--
                                    <li data-thumb="themes/automovile/images/boxster4_slide.jpg"> <img src="themes/automovile/images/boxster4_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster4.jpg" /> </li>
                                    <li data-thumb="themes/automovile/images/boxster5_slide.jpg"> <img src="themes/automovile/images/boxster5_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster5.jpg"  /> </li>
                                    <li data-thumb="themes/automovile/images/boxster8_slide.jpg"> <img src="themes/automovile/images/boxster8_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster8.jpg" /> </li>
                                    <li data-thumb="themes/automovile/images/boxster10_slide.jpg"><img src="themes/automovile/images/boxster10_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster10.jpg" /> </li>



                                    

                                    <li data-thumb="themes/automovile/images/boxster6_slide.jpg"> <img src="themes/automovile/images/boxster6_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster6.jpg" /> </li>
                                    <li data-thumb="themes/automovile/images/boxster7_slide.jpg"> <img src="themes/automovile/images/boxster7_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster7.jpg" /> </li>
                                  <li data-thumb="themes/automovile/images/boxster9_slide.jpg"> <img src="themes/automovile/images/boxster9_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster9.jpg" /> </li>

                                  <li data-thumb="themes/automovile/images/boxster14_slide.jpg"> <img src="themes/automovile/images/boxster14_slide.jpg" alt="" data-full-image="themes/automovile/images/boxster14.jpg" /> </li>

                                    -->

                                </ul>
                            </div>
                        </section>
                        
                        <section align="center" class="home-slider-thumbs">
                            <div align="center" class="flexslider" id="home-slider-thumbs">
                                <ul class="slides">


<?php
                                    $theme = $this->theme;
                                    $imagen = "";
                                    $imagen2 = "";
                                    $imagen3 = "";
                                    $imagen4 = "";
                                    $imagen5 = "";    

                                     if(!empty($model->contenido_imagen_1)){
                                        $imagen = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_1;
                                         $imagen2 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_2;
                                         $imagen3 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_3;
                                         $imagen4 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_4; 
                                         $imagen5 = $theme->getUrl('resources/images/contenidos/').$model->contenido_imagen_5;

                                    }
                                    


                                    ?>

                                    <li data-thumb="<?php print $imagen; ?>"> <img  src="<?php print $imagen; ?>" alt="" data-full-image="<?php print $imagen; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen2; ?>"> <img  src="<?php print $imagen2; ?>" alt="" data-full-image="<?php print $imagen2; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen3; ?>"> <img  src="<?php print $imagen3; ?>" alt="" data-full-image="<?php print $imagen3; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen4; ?>"> <img  src="<?php print $imagen4; ?>" alt="" data-full-image="<?php print $imagen4; ?>" /> </li>

                                    <li data-thumb="<?php print $imagen5; ?>"> <img  src="<?php print $imagen5; ?>" alt="" data-full-image="<?php print $imagen5; ?>" /> </li>

                                    <!--
                                    <li data-thumb="themes/automovile/images/thumbnail1.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail1.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail2.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail2.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail3.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail3.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail4.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail4.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail5.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail5.jpg" alt="" /></a> </li>

                                    

                                    <li data-thumb="themes/automovile/images/thumbnail8.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail8.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail9.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail9.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail10.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail10.jpg" alt="" /></a> </li>
                                    <li data-thumb="themes/automovile/images/thumbnail14.jpg"> <a href="#"><img src="themes/automovile/images/thumbnail14.jpg" alt="" /></a> </li>-->
                                    

                                </ul>
                            </div>
                        </section>
                        
                    </div>

                </div>

            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 left-content" style="padding-left: 12px !important;"> 

                                         
                        <div id="myTabContent" class="tab-content margin-top-15 margin-bottom-20">
                            <div class="tab-pane fade in active" id="vehicle">
                                <p style="text-align: justify;">
                                    <div><strong>Resumen:</strong></div>
                                    <?php print $model->contenido_resumen; ?>
                                </p>
                                <p style="text-align: justify;">
                                    <div><strong>Detalles:</strong></div>
                                    <?php print $model->contenido_detalles; ?>
                                </p>
                                <p style="text-align: justify;">
                                    <div><strong>Categoría:</strong></div>
                                    <?php print $model->contenido_tipo; ?>
                                </p>
                                <p style="text-align: justify;">
                                    <div><strong>Marca:</strong></div>
                                    <?php print $model->contenido_marca; ?>
                                </p>
                                <p style="text-align: justify;">
                                    <?php print ($model->contenido_disponibilidad) ? '<span class="label label-info">DIPONIBLE</span>' : '<span class="label label-default">NO DIPONIBLE</span>' ; ?>
                                </p>

                                <!--
                                <p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate 
                                    interdum et vel eros. Maecenas eros enim, tincidunt vel turpis vel, dapibus tempus nulla. Donec vel nulla dui. Pellentesque sed ante 
                                    sed ligula hendrerit condimentum. Suspendisse rhoncus fringilla ipsum quis porta. Morbi tincidunt viverra pharetra.</p>
                                -->
                                
                              </div>

                         </div>

            </div>


            </div>


                




            <div class="clearfix"></div>

            <div>&nbsp;</div>
            <div class="row">
                <div class="col-md-12">
                    <h3>Preguntanos sobre este <?php print $model->contenido_tipo; ?></h3>
                </div>

                <div class="col-md-12">
                <?php $form = ActiveForm::begin(); ?>
                    
                    <?= $form->errorSummary($modelSolicitudes); ?>

                    <?= $form->field($modelSolicitudes, 'solicitud_nombre')->textInput(['rows' => 6]) ?>

                    <?= $form->field($modelSolicitudes, 'solicitud_email')->textInput(['rows' => 6]) ?>

                    <?= $form->field($modelSolicitudes, 'solicitud_mensaje')->textarea(['rows' => 6]) ?>

                    <?= $form->field($modelSolicitudes, 'solicitud_telefono')->textInput(['rows' => 6]) ?>

                    <?= $form->field($modelSolicitudes, 'contenido_id')->hiddenInput(['value'=>$model->contenido_id])->label(false);?>


                    <div class="form-group">

                        <?= Html::submitButton('Enviar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>



                    </div>

                    <?php ActiveForm::end(); ?>
                </div>

            </div>


            <div class="clearfix"></div>
        </div>
    </div>
    <!--container ends--> 
</section>
<!--content ends-->
<div class="clearfix"></div>

<div class="back_to_top"> <img src="themes/automovile/images/arrow-up.png" alt="scroll up" /> </div>
