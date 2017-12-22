<!--formulario donde se iniciara sesionn -->
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>
    

<div class="container">

    <div class="row">

            <div class="hidden-sm hidden-xs" >
                <br><br><br><br><br>
            </div>

        <?php if(Yii::$app->session->hasFlash('exception')): ?>
                <?php endif; ?>

                          <?php if (Yii::$app->session->hasFlash('success2')): ?>
                           <div class="alert alert-success alert-danger fade in colored_alerts">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button> 
                                <div class="iconCheck"><i class="fa fa-check"></i>
                                </div>
                                <div class="contenT"><strong>Error </strong>-- Correo inválido! por favor ingrese nuevamente su correo.
                                </div>
                            </div>
                          <?php endif; ?>
    </div>

<center>
<h3>Ingrese su correo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h3>
<p>Por favor, ingrese su correo para recuperar contraseña:</p>

<form method="post" action="codigo">
<h5 style="font-weight: bold; font-size: 12px !important; letter-spacing: 0.3px;">Ingrese su correo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="email" name="codigorecuperacion" style="width: 250px; height: 35px; border-radius: 5px; float: initial !important;" required></h5><br>
<button class="btn btn-primary" style="">Enviar</button>
</form>
</div>
</center>
<br><br><br><br><br>
