<?php

    use yii\helpers\Url;

    ?>

<section ><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div>
                <br><br><br><br><br>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #009FB6;
    text-align: center; padding-bottom: 30px;"> <?php  print $tipo; ?> </h2>
                
            </div>          
        </div>
    </div>
</section>

<div class="message-shadow"></div>
<div class="clearfix"></div>

            <div class="col-md-12">
                <br><br>
            </div>
<section class="content">
        <div class="shortcodes-content container">
        
            <div class="row">
                 
                <?php

                    foreach ($model as $key => $value) {
                ?>
                    <div class="col-md-4">
                        <div style="border:1px solid #CCCCCC; 
padding:5px; width: 300px; word-wrap: break-word; ">
                            
                            <div class="text-center" border="1"  >
                                <a href="<?php print Url::base(true)."/".$value->contenido_http; ?>">
                                    <?php print $value->contenido_titulo; ?>
                                    <?php
                                    $theme = $this->theme;
                                    
                                    $imagen = "";
                                    if(!empty($value->contenido_imagen_1)){
                                        $imagen = $theme->getUrl('resources/images/contenidos/').$value->contenido_imagen_1;  
                                    }
                                    


                                    ?>


                                    <img src="<?php print $imagen; ?>" alt="<?php print $value->contenido_titulo; ?>" title="<?php print $value->contenido_titulo; ?>" class="img-responsive_ m-b-15" style=" max-height: 204px; max-width: 100%;border:1px solid #CCCCCC; 
    padding:5px; ">
                                </a>
                            </div>
                            <div class="text-justify" style="min-height: 130px; position: relative;">                       
                            <p><?php print $value->contenido_resumen; ?></p>
                            <p>

                                <?php print ($value->contenido_disponibilidad) ? '<span class="label label-info">DIPONIBLE</span>' : '<span class="label label-default">NO DIPONIBLE</span>' ; ?>
                                <br>
                                <a href="<?php print Url::base(true)."/".$value->contenido_http; ?>">Ver detalles o enviar un mensaje a SUNCARS</a>

                            </p>
                            </div>
                        </div>

                        <di> &nbsp;</di>
                   </div>
                <?php
                    }

                ?>

                    

                 <!--
                    <div class="col-md-4" >

                    	<div style="border:1px solid #CCCCCC; 
padding:5px; width: 300px; word-wrap: break-word; ">
                    		
	                    	<div class="text-center" border="1">
			                	<a href="informacionservicio">
			                    	<img src="themes/automovile/images/slide-show1.jpg" alt="IMAGEN 3" title="Dar click para más información" class="img-responsive_ m-b-15" alt="" style="max-height: 204px; max-width: 100%;border:1px solid #CCCCCC; 
	padding:5px; ">
			                    </a>
			                </div>
	                    	<div class="text-justify" style="min-height: 130px; position: relative;">                 		
							<p>sssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssssss</p>
							</div>
	                  		 </div>             
	                 </div>  
-->

           		 </div>
       		 </div>
        <br><br>
    
    <section >