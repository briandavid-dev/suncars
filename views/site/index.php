
<?php
$theme = $this->theme;
use app\models\Banners;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use yii\helpers\Url;
?>


<?php 
                    $nombre='inicio';

                    $banners = Banners::find()->all();
                    
                  ?>

<div class="clearfix"></div>
<section class="banner-wrap">
    <div class="banner">
        
        <div class="rev_slider_wrapper">            
            <!-- START REVOLUTION SLIDER 5.0 auto mode -->



          


            <div id="rev_slider" class="rev_slider"  data-version="5.0">
                <ul>    
                    <!-- SLIDE  -->
                    <?php foreach($banners as $key => $val){ ?>
                    <li data-transition="fade">
                        
                        <!-- MAIN IMAGE -->
                        

                    <img src="<?php print Url::base(true).'/themes/automovile/resources/images/banners/'.$val->banner_ruta_imagen; ?>" style=" max-width: 100%; max-height: 100%; "/>                          

                        <!-- LAYERS -->
                        <div class="tp-caption mediumlarge_light_white_center domainate start"
                        data-x="0"
                        data-hoffset="0"
                        data-y="214"
                        
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-start="1000" 
                        data-splitin="none" 
                        data-splitout="none" 

                        data-speed="1000"
                        data-endspeed="300">DISFRUTA </div>
                        
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption internet"
                        data-x="0"
                        data-y="282"
                        data-speed="500"
                        data-start="800"

                        
                        data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:1000;e:Power2.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 

                        style="z-index: 6; letter-spacing: -3px;">DE LOS MEJORES </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption attract "
                        data-x="0"
                        data-y="369"
                        data-speed="500"
                        data-start="1700"                        
                        data-transform_in="y:-50px;opacity:0;s:1500;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        style="z-index: 6; ">Productos para tu </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption more "
                        data-x="100"
                        data-y="425"
                        data-speed="800"
                        data-start="1900"
                        data-transform_in="x:-50px;opacity:0;s:2000;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none"
                        style="z-index: 6; ">Carro </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption qualified"
                        data-x="0"
                        data-y="476"
                        data-speed="800"
                        data-start="2600"
                        data-transform_in="y:50px;opacity:0;s:1500;e:Power3.easeOut;" 
                        data-transform_out="s:1000;e:Power3.easeInOut;s:1000;e:Power3.easeInOut;" 
                        data-splitin="none" 
                        data-splitout="none" 
                        style="z-index: 6">con los mejores precios</div>

                        
                    </li>
                    

<?php
                  }
                ?>

                </ul> 

 


            

               
                               
            </div><!-- END REVOLUTION SLIDER -->
        </div><!-- END REVOLUTION SLIDER WRAPPER -->    

        <script>
        /******************************************
        -   PREPARE PLACEHOLDER FOR SLIDER  -
        ******************************************/
        
        var revapi;
        jQuery(document).ready(function() {     
            revapi = jQuery("#rev_slider").revolution({
                sliderType:"standard",
                sliderLayout:"fullwidth",
                delay:9000,
                navigation: {
                    arrows:{enable:true}                
                },          
                gridwidth:1170,
                gridheight:645      
            });     
        }); /*ready*/
        </script>       
        
        <!-- END REVOLUTION SLIDER --> 
        
        <!-- Content End --> 
            
    </div>
</section>


            <section class=" content welcome-wrap padding-top-30 sm-horizontal-15">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                        <h4 class="margin-bottom-25 margin-top-none" style="text-align:center"> ¿<strong>QUIÉNES</strong> SOMOS?</h4>
                        <p  style="text-align: justify">Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                            ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                            philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                            ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                            egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                            mel vivendo scriptorem.</p>
                        <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                            referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                            mel graece mel vivendo scriptorem dolorum.</p>
                    </div>

                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 welcome padding-left-none padding-bottom-40 scroll_effect fadeInUp">
                         <h4 class="margin-bottom-25 margin-top-none">  <br></h4>
                        <p  style="text-align: justify">Lorem ipsum dolor sit amet, falli tollit cetero te eos. Ea ullum liber aperiri mi, impetus
                            ate philosophia ad duo, quem regione ne ius. Vis quis lobortis dissentias ex, in du aft 
                            philosophia, malis necessitatibus no mei. Volumus sensibus qui ex, eum duis doming 
                            ad. Modo liberavisse eu mel, no viris prompta sit. Pro labore sadipscing et. Ne peax
                            egat usu te mel <span class="alternate-font">vivendo scriptorem</span>. Pro labore sadipscing et. Ne pertinax egat usu te 
                            mel vivendo scriptorem.</p>
                        <p>Cum ut tractatos imperdiet, no tamquam facilisi qui. Eum tibique consectetuer in, an 
                            referrentur vis, vocent deseruisse ex mel. Sed te <span class="alternate-font">idque graecis</span>. Vel ne libris dolores, 
                            mel graece mel vivendo scriptorem dolorum.</p>
                    </div>


                </div>
                
                <div class="recent-vehicles-wrap margin-top-30 sm-padding-left-none padding-bottom-40">
                    <div class="row">
                        <div class="col-lg-2 col-md-2 col-sm-4 col-xs-12 recent-vehicles padding-left-none">
                            <h5 class="margin-top-none">PRODUCTOS</h5>
                            <p>Ofrecemos los mejores productos para su vehículos.</p>
                            <div class="arrow3 clearfix margin-top-15 xs-margin-bottom-25" id="slideControls3"><span class="prev-btn"></span><span class="next-btn"></span></div>
                        </div>
                        <div class="col-md-10 col-sm-8 padding-right-none xs-padding-left-none">
                            <div class="carasouel-slider3">
                                <div class="slide">
                                    <div class="angled_badge blue">
                                        <span>405 HP</span>
                                    </div>
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="informacionservicio"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car1.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2012 Porsche Cayenne GTS</strong></h6>
                                            <h6>1 Owner, 26,273 miles</h6>
                                            <h5>$ 102,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="angled_badge red">
                                        <span>Just Arrived</span>
                                    </div>
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="informacionservicio"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car2.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2009 Porsche Boxster</strong></h6>
                                            <h6>New Tires, 26,273 miles</h6>
                                            <h5>$ 34,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="informacionservicio"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car3.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2013 Porsche Panamera S</strong></h6>
                                            <h6>Demonstrator, 7,088 miles</h6>
                                            <h5>$ 63,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="informacionservicio"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car4.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2010 Porsche Carrera 4S</strong></h6>
                                            <h6>AWD, 21,900 miles</h6>
                                            <h5>$ 73,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car5.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2012 Porsche Carrera S</strong></h6>
                                            <h6>Convertible, 22,158 miles</h6>
                                            <h5>$ 56,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car6.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2013 Porsche Panamera GTS</strong></h6>
                                            <h6>1 Owner, 3,914 miles</h6>
                                            <h5>$ 94,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car7.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2014 Porsche Cayenne GTS</strong></h6>
                                            <h6>1 Owner, 7 miles</h6>
                                            <h5>$ 114,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <span class="sold_text">Sold</span>
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car8.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2014 Porsche GTS</strong></h6>
                                            <h6>1 Owner, 5 miles</h6>
                                            <h5>$ 99,995</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="slide">
                                    <div class="car-block">
                                        <div class="img-flex"> <a href="inventory-listing.html"><span class="align-center"><i class="fa fa-3x fa-plus-square-o"></i></span></a> <img src="./themes/automovile/images/c-car9.jpg" alt="" class="img-responsive"> </div>
                                        <div class="car-block-bottom">
                                            <h6><strong>2009 Porsche Carrera 4S</strong></h6>
                                            <h6>1 Owner, 114,239 miles</h6>
                                            <h5>$ 39,995</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
  
               
<!--message-wrap ends-->
<section class="content">
    <div class="container">
        <div class="inner-page homepage margin-bottom-none">
            <section class="car-block-wrap padding-bottom-40">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 margin-bottom-none">
                            <div class="small-block clearfix">
                                <h4 class="margin-bottom-25 margin-top-none">Servicios que Ofrecemos</h4>
                           </div>

                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="./themes/automovile/index_files/car1.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>Imagen Servicio</div>
                                        <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="./themes/automovile/index_files/car1-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="informacionservicio">FACTORY READY FOR TRACK DAY</a></h4>
                            <p class="margin-bottom-none">Sea veniam lucilius neglegentur ad, an per sumo volum
                                voluptatibus. Qui cu everti repudiare. Eam ut cibo nobis 
                                aperiam, elit qualisque at cum. Possit antiopam id est. 
                                Illud delicata ea mel, sed novum mucius id. Nullam qua.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip horizontal margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="./themes/automovile/index_files/car2.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>Imagen Servicio</div>
                                        <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="./themes/automovile/index_files/car2-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="informacionservicio">A SPORT UTILITY FOR THE FAMILY</a></h4>
                            <p class="margin-bottom-none">Cum ut tractatos imperdiet, no tamquam facilisi qui. 
                                Eum tibique consectetuer in, an legimus referrentur vis, 
                                vocent deseruisse ex mel. Sed te idque graecis. Vel ne 
                                libris dolores, in mel graece dolorum.</p>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 margin-bottom-none">
                            <div class="flip margin-bottom-30">
                                <div class="card">
                                    <div class="face front"><img class="img-responsive" src="./themes/automovile/index_files/car3.jpg" alt=""></div>
                                    <div class="face back">
                                        <div class='hover_title'>Imagen Servicio</div>
                                        <a href="#"><i class="fa fa-link button_icon"></i></a> <a href="./themes/automovile/index_files/car3-lrg.jpg" class="fancybox"><i class="fa fa-arrows-alt button_icon"></i></a> </div>
                                </div>
                            </div>
                            <h4><a href="informacionservicio">MAKE AN EXECUTIVE STATEMENT</a></h4>
                            <p class="margin-bottom-none">Te inermis cotidieque cum, sed ea utroque atomorum 
                                sadipscing. Qui id oratio everti scaevola, vim ea augue 
                                ponderum vituperatoribus, quo adhuc abhorreant 
                                omittantur ad. No his fierent perpetua consequat, et nis.</p>
                        </div>
                    </div>
                </div>
            </section>
            
        </div>
    </div>
</section>