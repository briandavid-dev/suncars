<!--formulario donde se iniciara sesionn -->
<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

?>

<!-- Imagen -->





<style type="text/css">


input[type="text"] {
    width: 100% !important;
}

</style>

<div><br><br><br><br><br></div>

<div class="container" style="background: #ffffff;">



    <h3>Entrar</h3>

    <p>Por favor, complete los siguientes campos para ingresar:</p>

        <?php $form    = ActiveForm::begin([
        'id'           => 'login-form',
        'layout'       => 'horizontal',
        'fieldConfig'  => [
        'template'     => "{label}\n<div class=\"col-lg-3\">{input}</div>\n<div class=\"col-lg-8\">{error}</div>", 
        'labelOptions' => ['class' => 'col-lg-1 control-label'],
        ],
        ]); ?>

        <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

        <?= $form->field($model, 'password')->passwordInput() ?>

        
        
        <div class="form-group">
            <div class="col-lg-offset-1 col-lg-11">
            <br><br>
                <?= Html::submitButton('Entrar', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>
            </div>
        </div>
       
    <?php ActiveForm::end(); ?>
</div>
<br><br><br>

