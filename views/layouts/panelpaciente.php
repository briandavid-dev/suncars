<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\DashboardAsset;
use yii\helpers\Url;
use app\models\Usuarios;
use app\models\Clientes;
DashboardAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="<?php print Url::base(true).'/web/resources/images/logos/bmosoluciones.ico'; ?>" />
    <?= Html::csrfMetaTags() ?>
        <title>
            <?= Html::encode($this->title) ?>
        </title>

        <style type="text/css">

    	.title-bmo-10 {
    		font-size: 20px;
    		font-weight: bold;
    	}

    	.hr-bmo-10 {
    		margin-top: 10px;
		    margin-bottom: 10px;
		    border: 0;
		    border-top: 1px solid #eee;
    	}

    </style>

        <?php $this->head() ?>
</head>

<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?php $this->beginBody() ?>

        <header class="main-header">
            <!-- Logo -->
            <a href="" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>BMO</b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>BMO</b>Panel</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>


                 <a href="https://www.icslatam.com" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b  class="fa fa-home"></b></span>
                <!-- logo for regular state and mobile devices -->
                <span class="fa fa-home"></span>
            </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <?php  ?>



                        <?php

	          	//$modelUsuarios = Usuarios::mo

	          ?>

                        <!-- User Account: style can be found in dropdown.less -->
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <?php if(!empty(Yii::$app->user->identity->usuario_imagen_1)){ ?>
                                <img src="<?php print Url::base(true); ?>/web/resources/AdminLTE/dist/img/avatars/<?php print Yii::$app->user->identity->usuario_imagen_1; ?>" class="user-image" alt="<?php print Yii::$app->user->identity->usuario_nombre; ?>">
                                <?php } ?>
                                <span class="hidden-xs">    <?php print Yii::$app->user->identity->usuario_nombre." ".Yii::$app->user->identity->usuario_apellido; ?>
                                  </span>
                            </a>
                            <ul class="dropdown-menu">
                                <!-- User image -->
                                <li class="user-header">

                                    <?php if(!empty(Yii::$app->user->identity->usuario_imagen_1)){ ?>
                                    <img src="<?php print Url::base(true); ?>/web/resources/AdminLTE/dist/img/avatars/<?php print Yii::$app->user->identity->usuario_imagen_1; ?>" class="img-circle" alt="<?php print Yii::$app->user->identity->usuario_nombre; ?>">
                                    <?php } ?>
                                    <p>
                                        <?php print Yii::$app->user->identity->usuario_nombre." ".Yii::$app->user->identity->usuario_apellido; ?>
                                        <small><?php print Yii::$app->user->identity->usuario_perfil; ?></small>
                                    </p>
                                </li>

                                <!-- Menu Footer-->
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="<?php print Url::to(['usuarios/view','id'=>Yii::$app->user->identity->usuario_id]);?>" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <?php
	                		print Html::beginForm(['/site/logout'], 'post');
	                		print Html::submitButton(
	                			'Cerrar Sesión',
	                			['class' => 'btn btn-default btn-flat']
	                			);
	                		print Html::endForm();
	                	?>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <!-- Control Sidebar Toggle Button -->
                        <?php /* ?>
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                        <?php */ ?>
                    </ul>
                </div>



            </nav>
        </header>

        <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <?php if(!empty(Yii::$app->user->identity->usuario_imagen_1)){ ?>
                        <img src="<?php print Url::base(true); ?>/web/resources/AdminLTE/dist/img/avatars/<?php print Yii::$app->user->identity->usuario_imagen_1; ?>" class="img-circle" alt="<?php print Yii::$app->user->identity->usuario_nombre; ?>">
                        <?php } ?>
                    </div>
                    <div class="pull-left info">
                        <p>
                            <?php print Yii::$app->user->identity->usuario_nombre." ".Yii::$app->user->identity->usuario_apellido; ?>
                        </p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
                <!-- search form -->
                <!--
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Buscar...">
              <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      -->
                <!-- /.search form -->
                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu">
                    <li class="header">Menú Navegación</li>




                    <!--menu clientes-->
                  




                    <!-- Menu idioma-->
              



                    <!-- Menu Banners-->
                
                    <!-- Menu Ubicacion-->
                  




                   
                    <!-- Menu Formularios-->
               




 <!-- Menu BLOB-->
              
                    
                    
                    
                     <li class=" treeview">
                        <a href="#">
                                    <i class="fa fa-user-plus"></i> <span>Categorías</span>
                                    <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
                                </a>
                                <ul class="treeview-menu">
                                    <li class=""><a href="<?php print Url::to(['cmscategories/create']);?>"><i class="fa fa-circle-o"></i>Nuevo</a></li>
                                    <li class=""><a href="<?php print Url::to(['cmscategories/index']);?>"><i class="fa fa-circle-o"></i>Gestionar</a></li>
                                </ul>
                            </li>

					<li class=" treeview">
                        <a href="#">
							<i class="fa fa-user-plus"></i> <span>Sub Categorías</span>
							<span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                          </span>
						</a>
						<ul class="treeview-menu">
							<li class=""><a href="<?php print Url::to(['cmssubcategories/create']);?>"><i class="fa fa-circle-o"></i>Nuevo</a></li>
							<li class=""><a href="<?php print Url::to(['cmssubcategories/index']);?>"><i class="fa fa-circle-o"></i>Gestionar</a></li>
						</ul>
					</li>







					<li class="active">
                        <!-- menu usuarios-->
                        <a href="#">
                            <i class="fa fa-bars"></i> <span>Páginas Generales</span>
                            <span class="pull-right-container">
                        		<i class="fa fa-angle-left pull-right"></i>
                      		</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?php print Url::to(['cmsgeneralpages/create','id'=>'nosotros','lang'=>1]);?>"><i class="fa fa-circle-o"></i> Nosotros</a></li>
                                  
                            <li><a href="<?php print Url::to(['cmsgeneralpages/create','id'=>'indicador1','lang'=>1]);?>"><i class="fa fa-circle-o"></i> Indicador 1</a></li>
                            <li><a href="<?php print Url::to(['cmsgeneralpages/create','id'=>'indicador2','lang'=>1]);?>"><i class="fa fa-circle-o"></i> Indicador 2</a></li>
                            <li><a href="<?php print Url::to(['cmsgeneralpages/create','id'=>'imagen1','lang'=>1]);?>"><i class="fa fa-circle-o"></i> Imagen 1</a></li>
                            <li><a href="<?php print Url::to(['cmsgeneralpages/create','id'=>'imagen2','lang'=>1]);?>"><i class="fa fa-circle-o"></i> Imagen 2</a></li>
                        </ul>
                    </li>

                    <li>

                        <!-- menu usuarios-->
                        <a href="#">
                            <i class="fa fa-users"></i> <span>Usuarios</span>
                            <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                      </span>
                        </a>
                        <ul class="treeview-menu">
                            <li class=""><a href="<?php print Url::to(['usuarios/create']);?>"><i class="fa fa-circle-o"></i> Crear</a></li>
                            <li><a href="<?php print Url::to(['usuarios/index']);?>"><i class="fa fa-circle-o"></i> Gestionar</a></li>
                        </ul>
                    </li>

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>









        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <section class="content-header">
                <h1>
	        Dashboard
	        <small>Control panel</small>
	      </h1>
                <?= Breadcrumbs::widget([
            	'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        	]) ?>
            </section>
            <section class="content-header">
                <!-- Main content -->
                <?php print $content; ?>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->










        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                 PCNET-SOLUTIONS
                <strong><a href="http://pcnet-solutions.com" target="_blank">www.pcnet-solutions.com</a></strong>

            </div>
            &copy; <b><?php print Yii::$app->params['panelClienteNombre']; ?></b>
            <?= date('Y') ?> All rights reserved.
        </footer>


        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Create the tabs -->
            <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
                <li><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
                <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <!-- Home tab content -->
                <div class="tab-pane" id="control-sidebar-home-tab">
                    <h3 class="control-sidebar-heading">Recent Activity</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-birthday-cake bg-red"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

                                    <p>Will be 23 on April 24th</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-user bg-yellow"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Frodo Updated His Profile</h4>

                                    <p>New phone +1(800)555-1234</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-envelope-o bg-light-blue"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Nora Joined Mailing List</h4>

                                    <p>nora@example.com</p>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="menu-icon fa fa-file-code-o bg-green"></i>

                                <div class="menu-info">
                                    <h4 class="control-sidebar-subheading">Cron Job 254 Executed</h4>

                                    <p>Execution time 5 seconds</p>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                    <h3 class="control-sidebar-heading">Tasks Progress</h3>
                    <ul class="control-sidebar-menu">
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
	                Custom Template Design
	                <span class="label label-danger pull-right">70%</span>
	              </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
	                Update Resume
	                <span class="label label-success pull-right">95%</span>
	              </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-success" style="width: 95%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
	                Laravel Integration
	                <span class="label label-warning pull-right">50%</span>
	              </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-warning" style="width: 50%"></div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <h4 class="control-sidebar-subheading">
	                Back End Framework
	                <span class="label label-primary pull-right">68%</span>
	              </h4>

                                <div class="progress progress-xxs">
                                    <div class="progress-bar progress-bar-primary" style="width: 68%"></div>
                                </div>
                            </a>
                        </li>
                    </ul>
                    <!-- /.control-sidebar-menu -->

                </div>
                <!-- /.tab-pane -->
                <!-- Stats tab content -->
                <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
                <!-- /.tab-pane -->
                <!-- Settings tab content -->
                <div class="tab-pane" id="control-sidebar-settings-tab">
                    <form method="post">
                        <h3 class="control-sidebar-heading">General Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Report panel usage
	              <input type="checkbox" class="pull-right" checked>
	            </label>

                            <p>
                                Some information about this general settings option
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Allow mail redirect
	              <input type="checkbox" class="pull-right" checked>
	            </label>

                            <p>
                                Other sets of options are available
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Expose author name in posts
	              <input type="checkbox" class="pull-right" checked>
	            </label>

                            <p>
                                Allow the user to show his name in blog posts
                            </p>
                        </div>
                        <!-- /.form-group -->

                        <h3 class="control-sidebar-heading">Chat Settings</h3>

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Show me as online
	              <input type="checkbox" class="pull-right" checked>
	            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Turn off notifications
	              <input type="checkbox" class="pull-right">
	            </label>
                        </div>
                        <!-- /.form-group -->

                        <div class="form-group">
                            <label class="control-sidebar-subheading">
	              Delete chat history
	              <a href="javascript:void(0)" class="text-red pull-right"><i class="fa fa-trash-o"></i></a>
	            </label>
                        </div>
                        <!-- /.form-group -->
                    </form>
                </div>
                <!-- /.tab-pane -->
            </div>
        </aside>
        <!-- /.control-sidebar -->
        <!-- Add the sidebar's background. This div must be placed
	       immediately after the control sidebar -->
        <div class="control-sidebar-bg"></div>

<style type="text/css">

        .montajeImagesBrianSystems {
            /* Reference -> http://www.oloblogger.com/2013/11/galeria-imagenes-css-rwd.html */
            position: relative;
            float: left;
            max-height: 110px;
            min-height: 110px;
            /*width: 148.75px; /* ancho total (1190) entre numero de imagenes a mostrar por lÃ­nea (8) */
            max-width: 180px;
            margin: 1px;
            background-position: 50% 50%;
            -moz-background-size: cover;
            -webkit-background-size: cover;
            background-size: cover;
            background-repeat: no-repeat;
            overflow: hidden;
        }
        .montajeImagesBrianSystems img {
            min-height: 110px;
        }



    </style>


<script type="text/javascript">


    </script>
        <?php $this->endBody() ?>
    </div>
</body>

</html>
<?php $this->endPage() ?>
