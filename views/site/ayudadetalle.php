  <div class="elements_news_c">

<?php
use yii\helpers\Url;
$theme = $this->theme;
?>
<!-- ================================ -->
<!-- ========== Imagen ========== -->

    <!-- ================================ -->
    <!-- ========== Begin Blog Style ========== -->
    <!-- ================================ -->
  
        <div class="container container-fluid">
            <div class="row">

                
                <!-- ===== Begin Blog blocks ===== -->
                <div class="col-md-10" style="background: #fff; border-radius: 4px; border: 1px solid #367FA9;border-top: 4px solid #367FA9;" >
                    <!-- ===== Begin Thumbnails ===== -->
                    <dir>
                    <a href="<?php print Url::base(true)."/ayuda"; ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                
                <span class="fa fa-arrow-circle-left " style="font-size: 25px;"> Volver</span>
            </a>
        </dir>

                    
                    
                        
                            


                    <div class="caption">

                    <h3>
                        <h3>
                           Ingrese a la opcion, en el ciculo rojo de la imagen.
                        </h3>
                    </h3>
                  </div>
                    <div>
                    <img style="max-width: 500px; margin-top: 20px;"  src="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/post/'.$modelayuda->post_image_2; ?>" class="attachment-blog_image_2 wp-post-image" alt="Medical consultation" />  
                      </div>
                  
                  <div class="section">
                      <p> 
                      <?php  print $modelayuda->post_content;?>   
                    </p>
                    
                  </div>
                  <dir>
                    <a href="<?php print Url::base(true)."/ayuda"; ?>" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b  class=""></b></span>
                <span class="fa fa-arrow-circle-left " style="font-size: 25px;"> Volver</span>
            </a>
        </dir>
                    </div>  
               </div>
            </div>
        </div>
    
   
