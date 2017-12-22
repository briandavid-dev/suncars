<!--formulario donde se iniciara sesionn -->
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
    
<!-- Imagen -->
<header class="style_2 " style="background: url(themes/tuagendamedica/img/header-bg-1.jpg) 50% 0 no-repeat;">
     <div class="breadCrumbs_header">
        <div class="container xsx-width">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                      <h2>Recuperar contraseña</h2>
                            <ul>
                                <li typeof="v:Breadcrumb"><a rel="v:url" property="v:title" href="home" title="">Inicio</a></li><li class="current">Inicio de sesión
                                </li>
                            </ul>
                </div>
            </div>
        </div>
    </div>  
</header>

<div class="container">
<div class="row">
        <?php if(Yii::$app->session->hasFlash('exception')): ?>
                <?php endif; ?>

                          <?php if (Yii::$app->session->hasFlash('success4')): ?>
                           <div class="alert alert-success alert-danger fade in colored_alerts">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                                <div class="iconCheck"><i class="fa fa-check"></i>
                                </div>
                                <div class="contenT"><strong>Error </strong>-- Código inválido! por favor ingrese nuevamente su código.
                                </div>
                            </div>
                          <?php endif; ?>
    </div>
<div class="row">
<center>
<h3>Ingrese su nueva contraseña</h3>
<p>Por favor, ingrese su nueva contraseña mayor a 8 dígitos:</p>

<form method="post" action="login">
<input type="hidden" name="correoemail1" value="<?php print $email ;?>">
<h5 style="font-weight: bold;">Ingrese su nueva clave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="cambioclave" style="width: 250px; height: 35px; border-radius: 5px;" required></h5>
<h5 style="font-weight: bold;">Repita su nueva clave&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="cambioclave2" style="width: 250px; height: 35px; border-radius: 5px;" required></h5><br>
<button class="btn btn-primary">Enviar</button>
</form>
</div>
</div>
</center>
<br><br>
<br><br>
<br>
