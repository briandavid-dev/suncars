<?php

    use yii\helpers\Html;
    use yii\bootstrap\Nav;
    use yii\bootstrap\NavBar;
    use yii\widgets\Breadcrumbs;
	use app\assets\AutomovileAsset;
    use yii\helpers\Url;
    use app\controllers\SiteController;
    use app\models\Categorias;


	AutomovileAsset::register($this);
	$theme = $this->theme;

?>
<!DOCTYPE html>
<!-- saved from url=(0039)https://demo.themesuite.com/automotive/ -->
<html lang="en" class="js no-touch"><!--<![endif]-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">


<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<link rel="shortcut icon" href="<?php print $theme->getUrl('resources/images/logos/logito.ico'); ?>">

<?php 
            $site = new SiteController(null, null);
            $site->display_seo();
        ?>

<!-- Bootstrap core CSS -->
<link href="./themes/automovile/index_files/bootstrap.min.css" rel="stylesheet">

<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

<link rel="stylesheet" type="text/css" href="./themes/automovile/index_files/css(1)" media="screen">
<!-- Custom styles for this template -->

<link rel="stylesheet" href="./themes/automovile/index_files/flexslider.css" type="text/css" media="screen">
<link rel="stylesheet" href="./themes/automovile/index_files/jquery.bxslider.css" type="text/css" media="screen">

<link href="./themes/automovile/index_files/jquery.fancybox.css" rel="stylesheet">
<link href="./themes/automovile/index_files/jquery.selectbox.css" rel="stylesheet">
<link href="./themes/automovile/index_files/style.css" rel="stylesheet">
<link href="./themes/automovile/index_files/mobile.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="./themes/automovile/index_files/settings.css" media="screen">

<link href="./themes/automovile/index_files/animate.min.css" rel="stylesheet">
<link href="./themes/automovile/index_files/ts.css" type="text/css" rel="stylesheet">


<script type="text/javascript" src="./themes/automovile/index_files/jquery.min.js"></script>
<script src="./themes/automovile/index_files/bootstrap.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/wow.min.js"></script>
<!--<script type="text/javascript" src="./themes/automovile/index_files/js"></script>-->

<script type="text/javascript" src="./themes/automovile/index_files/jquery.themepunch.tools.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/jquery.themepunch.revolution.min.js"></script>



<!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
            (Load Extensions only on Local File Systems !  
            The following part can be removed on Server for On Demand Loading) -->  
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.parallax.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="./themes/automovile/index_files/revolution.extension.video.min.js"></script>
<!--<script type="text/javascript" src="./themes/automovile/index_files/map.js"></script>

<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Yellowtail%7COpen%20Sans%3A400%2C300%2C600%2C700%2C800" media="screen" />-->



<!--
<style type="text/css">.fancybox-margin{margin-right:17px;}</style><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/common.js"></script></script><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/util.js"></script><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/marker.js"></script> <style type="text/css">.gm-style {
        font: 400 11px Roboto, Arial, sans-serif;
        text-decoration: none;
      }
      .gm-style img { max-width: none; }</style><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/onion.js"></script><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/controls.js"></script><script type="text/javascript" charset="UTF-8" src="./themes/automovile/index_files/stats.js"></script>-->

<style type="text/css">

.bottom-header .navbar-default .navbar-nav>.active>a, .bottom-header .navbar-default .navbar-nav>.active>a:hover, .bottom-header .navbar-default .navbar-nav>.active>a:focus {
    background-color: #009FB6 !important;
    
}


header .nav .open>a, header .nav .open>a:hover, header .nav .open>a:focus, header .navbar-default .navbar-nav>.open>a, header .navbar-default .navbar-nav>.open>a:hover, header .navbar-default .navbar-nav>.open>a:focus {
    background-color: #009FB6 !important;
}


.bottom-header .navbar-default .navbar-nav> li> a:hover {
    background-color: #009FB6 !important;
}

.car-block-wrap h4 a {

    color: #FFA019 !important;
}

.welcome-wrap h4 {
    color: #FFA019 !important;
    }

    .recent-vehicles h5 {
    color: #FFA019 !important;
    }

    .alternate-font {
      color: #FFA019 !important;
    }
    

    .default-btn:hover, .btn-inventory:hover, button:hover, input[type="reset"]:hover, input[type="button"]:hover, input[type="submit"]:hover {
    background-color: #009FB6 !important;
   
}  


.default-btn{

        background-color: #009FB6 !important;
}


.dropdown-menu>li>a:hover, .dropdown-menu>li>a:focus {
    background-color: #FFA019 !important;
}

.flip .card .back {
   
    background-color: #009FB6 !important;
}


.sc-13 {
    background: url(themes/automovile/images/ista.PNG) 0px 0px no-repeat;

    
}


 label:before {

   background-image: url() !important; 
}

label {
    
    right: 0px  !important;
}



.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1 { 
   padding-right: 0px !important;
}


.col-lg-1 {
    width: 12% !important;
}




</style> 

  </head>

<body>



<!--Header Start-->
<header data-spy="affix" data-offset-top="1" class="clearfix affix-top">


    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">
                       <li>
                           
                        <?php if (!Yii::$app->user->isGuest) { ?>

<a href="<?php print Url::to(['banners/create']);?>"><?php print "Mi Panel BMO (".Yii::$app->user->identity->usuario_nombre.")"; ?></a>
<?php } else { ?>
<a href="<?php print Url::to(['/login']);?>">Iniciar Sesión</a>
<?php } ?>


                       </li>

                      
                       
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i class="fa fa-phone"></i> (0212) 662 84 04</a></li>
                        <li class="address"><a href="contacto"><i class="fa fa-map-marker"></i> Santa Mónica, Av. Arturo Michelena, Qta. Ami.</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>
    <div class="bottom-header">
        <div class="container">
            <nav class="navbar navbar-default" role="navigation">
                <div class="container-fluid"> 
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                        <a class="navbar-brand" href="<?php print Url::base(true)."/productos"; ?>""><img src ="themes/automovile/images/LOGO.png" alt="suncars"  height="5" width="5"  title="suncars"> </a> </div>
                    
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav pull-right">
                            <li class=" <?php print (Yii::$app->session['menu'] == "inicio") ? "active" : "" ; ?> ">
                                <a href="<?php print Url::base(true); ?>"">Inicio</a></li>
                            <li class="dropdown <?php print (Yii::$app->session['menu'] == "nosotros") ? "active" : "" ; ?> ">
                                <a href="<?php print Url::base(true)."/nosotros"; ?>"" >Quiénes Somos</a>
                            </li>

                            <li class="dropdown <?php print (Yii::$app->session['menu'] == "productos") ? "active" : "" ; ?> ">
                                <a href="<?php print Url::base(true)."/productos"; ?>">Productos <b class="caret"></b></a>
                            </li>

                            <!--
                            <li class="dropdown"><a href="<?php print Url::base(true)."/productos"; ?>" class="dropdown-toggle" data-toggle="dropdown">Productos <b class="caret"></b></a>
                                
                                
                                <ul class="dropdown-menu">
                                    <li><a href="productos">Alarmas</a></li>
                                <li><a href="productos">Tranca Palancas</a>
                                     </li>
                                      <li><a href="productos">Bóveda</a></li>
                                    <li><a href="productos">Papel Ahumado</a></li>

                                    <li ><a href="productos">Auto Periquitos </a></li>
                                </ul>   
                                

                            </li>
                            -->
                             <li class="dropdown <?php print (Yii::$app->session['menu'] == "servicios") ? "active" : "" ; ?> ">
                                <a href="<?php print Url::base(true)."/servicios"; ?>"">Servicios</a>
                            </li>
                           
                             <li class="dropdown <?php print (Yii::$app->session['menu'] == "contacto") ? "active" : "" ; ?> ">
                                <a href="<?php print Url::base(true)."/contacto"; ?>"">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse --> 
                </div>
                <!-- /.container-fluid --> 
            </nav>
        </div>
        <div class="header_shadow"></div>
    </div>
</header>
<!--Header End-->




<div class="clearfix"></div>







<?php print $content; ?>






<!--Footer Start-->
<footer class="design_2">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-left-none md-padding-left-none sm-padding-left-15 xs-padding-left-15">
                <h4>Escríbenos</h4>
                <p style="text-align: justify">Para más informacion sobre nuestros productos y servicios no dudes en escribirnos a través de nuestro formulario<a href="contacto" > <strong> AQUÍ</strong></a>
               
                </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                <h4>Productos y Servicios</h4>
               

              <nav class="sidebar-menu slide-from-left">
            <div class="nano">
                <div  class="content" >
                    <nav class="responsive-menu">
                        <ul >
                            <?php
                                $modelCategorias = Categorias::find()->limit(6)->all();


                                foreach ($modelCategorias as $keyCat => $valCat) {
                            ?>
                                <a href="<?php print Url::base(true).$valCat->categoria_http; ?>"><?php print $valCat->categoria_nombre; ?></a><br>

                            <?php
                                }
                            ?>

                            <!--
                            <a href="productos">Alarmas</a><br>
                            <a href="productos">Tranca Palanca</a><br>
                            <a href="productos">Bódeda</a><br>
                            <a href="productos">Papel Ahumado</a><br>
                            <a href="productos">Auto Periquitos</a>
                            -->
                        </ul>
                    </nav>
                </div>
            </div>
        </nav>
                    


            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 padding-right-none md-padding-right-none sm-padding-right-15 xs-padding-right-15">
                <h4>Contáctenos</h4>
                <div class="footer-contact">
                    <ul>

                        <li><i class="fa fa-map-marker"></i> <strong>Dirección:</strong>  Santa Mónica, Av. Arturo Michelena, Quinta. Ami. Caracas. Venezuela</li>
                        <li><i class="fa fa-phone"></i> <strong>Teléfono:</strong>(0212) 662 84 04</li>
                        <li><i class="fa fa-phone"></i><strong>Telefax:</strong> <span>(0212) 693 75 65</span></li>
                        <li><i class="fa fa-envelope-o"></i> <strong>Email:</strong><a href="contacto">suncarsinfo@gmail.com</a></li>
                        
                    </ul>

                    <i class="fa fa-location-arrow back_icon"></i>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="clearfix"></div>
<section class="copyright-wrap padding-bottom-10">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="<?php print Url::to(["site/index"]); ?>">
                    <h1>Suncars</h1>
                    <span>J-30893230-2</span></a>
                </div>
            </div>
            
             <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" >
                <div class="logo-footer margin-bottom-20 md-margin-bottom-20 sm-margin-bottom-10 xs-margin-bottom-20"><a href="<?php print Url::to(["site/index"]); ?>">
                    <p style="line-height:20px !important; padding: 8px 0px 0px 0px ;      text-align: center;">
             All Rights Reserved. <br> 
            Desarrollado por <a class="linkFooter" href= "http://www.bmosoluciones.com/" target="_blank"> BMO Soluciones Tecnológicas, C.A</a></p>
                    
                </div>
            </div>

            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12"  >
                <ul class="social margin-bottom-25 md-margin-bottom-25 sm-margin-bottom-20 xs-margin-bottom-20 xs-padding-top-10 clearfix">
                    <!--
                    <li><a class="sc-1" href="https://demo.themesuite.com/automotive/#"></a></li>
                    <li><a class="sc-2" href="https://demo.themesuite.com/automotive/#"></a></li>
                   <li><a class="sc-3" href="https://demo.themesuite.com/automotive/#"></a></li>          
                    -->
                </ul>
            </div>
        </div>
    </div>
</section>
<div class="back_to_top" style="display: none;"> <img src="./themes/automovile/index_files/arrow-up.png" alt="scroll up"> </div>
<!-- Bootstrap core JavaScript --> 
<script src="./themes/automovile/index_files/retina.js"></script> 
<script type="text/javascript" src="./themes/automovile/index_files/jquery.parallax.js"></script> 
<script type="text/javascript" src="./themes/automovile/index_files/jquery.inview.min.js"></script> 
<script src="./themes/automovile/index_files/main.js"></script> 
<script type="text/javascript" src="./themes/automovile/index_files/jquery.fancybox.js"></script> 
<script src="./themes/automovile/index_files/modernizr.custom.js"></script> 
<script defer="" src="./themes/automovile/index_files/jquery.flexslider.js"></script> 
<script src="./themes/automovile/index_files/jquery.bxslider.js" type="text/javascript"></script> 
<script src="./themes/automovile/index_files/jquery.selectbox-0.2.js" type="text/javascript"></script> 
<script type="text/javascript" src="./themes/automovile/index_files/jquery.mousewheel.js"></script> 
<script type="text/javascript" src="./themes/automovile/index_files/jquery.easing.js"></script>

</body></html>