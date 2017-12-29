<?php
    use app\models\PaginasGenerales;

    $texto = PaginasGenerales::find()->where(["pagina_general_http"=>"quienesomos"])->one();
?>
<section ><!--for other images just change the class name of this section block like, class="dynamic-image-2" and add css for the changed class-->
    <div class="container">
        <div class="row">
            <div  >
                <br><br><br><br><br>
            </div>
             
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h2 style="color: #009FB6;
    text-align: center; padding-bottom: 30px;  "><?php
                            print $texto["pagina_general_titulo"]; 
                        ?></h2>
                
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

<div class="sidebar-menu-container" id="sidebar-menu-container">

        <div class="shortcodes-content container">
        
            <div class="row">

                <div class="col-md-12 text-columns">      
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12"">
                        <p style="text-align: justify !important;">

                        <?php
                            print $texto["pagina_general_contenido_1"]; 
                        ?>

                        </p>
                    </div>

                   <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                  <p style="text-align: justify !important;"> 

                    <?php
                            print $texto["pagina_general_contenido_2"]; 
                        ?>

                    </p>
                    </div>                  
                  
               </div>
            </div>
        </div>

</section>
  
