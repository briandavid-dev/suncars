<!-- formulario  para cuando se inicia sesion-->
<?php 
	use yii\helpers\Url;

	use yii\helpers\Html;
	use yii\bootstrap\ActiveForm;
	Use yii\helpers\ArrayHelper;
	use kartik\select2\Select2;
	use app\models\Paises;
	use app\models\Seguros;
	use app\models\Especialidades;
	use app\models\Usuarios;
	//use app\models\Doctores;
	
	
	$theme = $this->theme;
	//obtengo el id del usario logeado
	 $idusuario =  Yii::$app->user->identity->usuario_id;
 ?>
  <input type="hidden" name="comprobar_mensaje" id="comprobar_mensaje" value="<?php  print   $idusuario; ?>">
 <!-- imagen -->
<header class="style_2 " style="background: url(themes/tuagendamedica/img/header-bg-1.jpg) 50% 0 no-repeat;">
	<div class="breadCrumbs_header">
        <div class="container xsx-width">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                	 <?php if(Yii::$app->user->identity->usuario_perfil=='doctor'){
                	 	$panelusuario = Url::to(['usuarios/updatedoctor/'.$idusuario]);
                	 	?>
                	 	<h2>Bienvenido DR(ra) <?php  print Yii::$app->user->identity->usuario_nombre." ".Yii::$app->user->identity->usuario_apellido;?></h2>
                	 	<h3 style="color: white"> a su sistema<br><br>TUAGENDAMEDICA.COM </h3>
                	 <?php } else {
                	 $panelusuario = Url::to(['usuarios/update/'.$idusuario]);
                	 	 ?>
	 				<h2>Hola <?php  print Yii::$app->user->identity->usuario_nombre;?></h2></h2>
	 				<h3 style="color: white"> Bienvenido a su sistema<br><br>TUAGENDAMEDICA.COM </h3>
                	<?php } ?>
                 </div>
            </div>
        </div>
    </div>
</header>
<?php if(Yii::$app->session->getFlash('success')) { ?>
<div class="container">
 <div class="alert alert-info alert-dismissable fade in colored_alerts">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="contenT"><strong>INFORMACIÓN</strong> - Cita Cancelada, busque su doctor de confianza para una nueva cita. </div>
</div>
</div>
<br>
<br>
<br>

		<?php }  ?>


		<?php if(Yii::$app->session->getFlash('Exitoso')) { ?>
<div class="container">
 <div class="alert alert-info alert-Success fade in colored_alerts" style="background-color: green; border: green solid 1px">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    <div class="contenT"><strong>INFORMACIÓN</strong> - Cita Creada, por favor revise su correo para más información.  </div>
</div>
</div>
<br>
<br>
<br><br>
<br>

		<?php }  ?>

<style>
	/* 
	  se colocó este estylo aqui porq es la unica parte donde lo requiere
	  el buscador da mensajes de error y deben resaltar 
	*/
	.help-block-error {
		color: #FFFFFF !important;
	}

</style>

    <?php $form = ActiveForm::begin(); ?>

	<div class ="medicalHealth_form_1">
				<div class="container xsx-width xl-width">
					<div class="row">
					
						<div>&nbsp;</div>
					
						<div class="col-md-3">
							<?php 
								$items1 = ArrayHelper::map(Paises::find()->where(["pais_estatus"=>1])->all(), 'pais_nombre', 'pais_nombre');
								// Normal select with ActiveForm & model
								echo $form->field($modelDoctores, 'buscador_paises')->widget(Select2::classname(), [
										'data' => $items1,
										'language' => 'es',
										'options' => [
											'placeholder' => 'País',

											//'dataType'=>'json',
											  'onchange'=>'
                                         $.get("'.Url::toRoute('citasmedicas/pais').'", { 
                                           id: $(this).val(), 
                                  
                                           
                                        }).done(function( data ) {
  		
                                            $( "#'.Html::getInputId($modelDoctores, 'buscador_seguros').'" ).html("<select>"+jQuery.parseJSON(data).seguros+"</select>");
                							$( "#'.Html::getInputId($modelDoctores, 'buscador_especialidades').'" ).html("<select>"+jQuery.parseJSON(data).especialidades+"</select>");
                							$( "#'.Html::getInputId($modelDoctores, 'buscador_clinicas').'" ).html("<select>"+jQuery.parseJSON(data).clinicas+"</select>");
                		
                                        });
                                             '
		 								],
										'pluginOptions' => [
											'allowClear' => true, 


										],
								'pluginEvents' => [
							    "change" => 'function() { 
							        var data_id = $(this).val();
							        
							    }',
							      ],
								])->label(false);
								//print Html::activeLabel($modelBuscador, 'buscador_pais_origen_nombre');
							?>
						</div>
						  
						<div class="col-md-2">
							<?php 
							
								echo $form->field($modelDoctores, 'buscador_seguros')->widget(Select2::classname(), [
										'data' => array(),
										'language' => 'es',
										'options' => [
											'placeholder' => 'Seguro',
											'onchange'=>'
                                         $.get("'.Url::toRoute('citasmedicas/seguros').'", { 
                                           id: $(this).val(), 
                                  
                                           
                                        }).done(function( data ) {


                                            $( "#'.Html::getInputId($modelDoctores, 'buscador_clinicas').'" ).html( data );
                                        });
                                             '
		 								],
										'pluginOptions' => [
											'allowClear' => true
										],
										'pluginEvents' => [
										    "change" => 'function() { 
										        var data_seguro = $(this).val();
										    }',
									 	],
								])->label(false);
								//print Html::activeLabel($modelBuscador, 'buscador_pais_origen_nombre');
							?>
						</div>
							<div class="col-md-2">
							<?php 
							
								echo $form->field($modelDoctores, 'buscador_clinicas')->widget(Select2::classname(), [
										'data' => array(),
										'language' => 'es',
										'options' => [
											'placeholder' => 'Clínica',
											'onchange'=>'
                                         $.get("'.Url::toRoute('citasmedicas/clinicas').'", { 
                                           id: $(this).val(), 
                                  
                                           
                                        }).done(function( data ) {


                                            $( "#'.Html::getInputId($modelDoctores, 'buscador_especialidades').'" ).html( data );
                                        });
                                             '
		 								],
										'pluginOptions' => [
											'allowClear' => true
										],
								])->label(false);
								//print Html::activeLabel($modelBuscador, 'buscador_pais_origen_nombre');
							?>
						</div>
						 <script>
            //convierto en javascript paard espues usarlo para la fecha
          
                      </script>

						<div class="col-md-2">
							<?php 
					
								echo $form->field($modelDoctores, 'buscador_especialidades')->widget(Select2::classname(), [
										'data' => array(),
										'language' => 'es',
										'options' => [
											'placeholder' => 'Especialidad',
												'onchange'=>'
                                         $.get("'.Url::toRoute('citasmedicas/especialidades').'", { 
                                           id: $(this).val(),
                                           pais:  jQuery("#doctores-buscador_paises").val(), 
                                           seguro:  jQuery("#doctores-buscador_seguros").val(), 
  											clinica:  jQuery("#doctores-buscador_clinicas").val(), 
                                  
                                           
                                        }).done(function( data ) {


                                            $( "#'.Html::getInputId($modelDoctores, 'buscador_doctor_nombre').'" ).html( data );
                                        });
                                             '
		 								],
										'pluginOptions' => [
											'allowClear' => true
										],
								])->label(false);
								//print Html::activeLabel($modelBuscador, 'buscador_pais_origen_nombre');
							?>
						</div>
						<div class="col-md-3">
							<?php
								echo $form->field($modelDoctores, 'buscador_doctor_nombre')->widget(Select2::classname(), [
										'data' =>array(),
										'language' => 'es',
										'options' => [
											'placeholder' => 'Médico',
		 								],
										'pluginOptions' => [
											'allowClear' => true
										],
								])->label(false);
								//print Html::activeLabel($modelBuscador, 'buscador_pais_origen_nombre');
							?>
						</div>
						
						<div class="col-md-12 text-center">
							<input type="submit" value="BUSCAR"  class="btn btn-primary" > 
						</div>
					</div>
				</div>
		</div>

<?php if (isset($modelDoctoresListado) && $modelDoctoresListado == null) { ?>
	<div>&nbsp;</div>
	<div class="text-center">
	<?php 
	$texto = "";
	$texto .= Yii::$app->user->identity->usuario_nombre." no encontramos resultados para su búsqueda";
	
	print $texto;
	 ?>
	</div>
	<div>&nbsp;</div>
<?php } else {
	



if(isset($modelDoctoresListado) && $modelDoctoresListado != null) { ?>
<div class="container" >
	<div class="row">
		<div>&nbsp;</div>
		<?php 
		
			$resultadosCount = count($modelDoctoresListado);
		
			$texto = "";
			$texto .= Yii::$app->user->identity->usuario_nombre." encontramos ".$resultadosCount;
			$texto .= ($resultadosCount > 1) ? " resultados." : " resultado.";
			
			print $texto;
		
		?>
		<div>&nbsp;</div>
		<div class="col-md-12">
			
			
                        <div class="isotope isotope-container">
                         <?php foreach($modelDoctoresListado  as $keydoctores => $valdoctores){ 

                               $especialidades = str_replace(",", " " ,$valdoctores->doctor_especialidades);
                               
                               $caca = str_replace(",", " " ,$valdoctores->doctor_especialidades);
                               
                                $modelusuario = Usuarios::find()
                               ->where(['usuario_id' => $valdoctores->usuario_id])
                                ->one(); 
                            ?>
                            <div class="element-item col-sm-6 col-md-3 <?php print $especialidades ?>">
                                <div class="doctor_filter_elements">
                                <?php if ($valdoctores->doctor_imagen != null) { ?>
                                    <div class="thumbnail doctor_filter">
                                        <img width="400" height="333" src="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/doctores/'.$valdoctores->doctor_imagen; ?>" class="attachment-gallery wp-post-image" alt="doctor-1f_big_m" />                 <div class="mask">
                                            <ul>
                                                <li><a href="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/doctores/'.$valdoctores->doctor_imagen; ?>" data-gal="prettyPhoto[gallery]"><i class="fa fa-search"></i>
                                                    </a>
                                            </li>
                                    <li><a href="<?php print $valdoctores->doctor_http;?>?cod=<?php print $valdoctores->doctor_id ?>"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                                        </div>
                                    </div>
                                     <?php } else { ?>
                                     <div class="thumbnail doctor_filter">
                                        <img width="400" height="333" src="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/doctores/sinfoto.jpg'?>" class="attachment-gallery wp-post-image" alt="doctor-1f_big_m" />                 <div class="mask">
                                            <ul>
                                                <li><a href="<?php print Url::base(true).'/themes/tuagendamedica/resources/images/doctores/'.$valdoctores->doctor_imagen; ?>" data-gal="prettyPhoto[gallery]"><i class="fa fa-search"></i>
                                                    </a>
                                            </li>
                                    <li><a href="<?php print $valdoctores->doctor_http;?>?cod=<?php print $valdoctores->doctor_id ?>"><i class="fa fa-external-link"></i></a></li>
                                </ul>
                                        </div>
                                    </div>
                     <?php } ?>
                                    <div class="caption_doctor">
                                        <a href="<?php print $valdoctores->doctor_http;?>?cod=<?php print $valdoctores->doctor_id ?>"><h4><?php print $modelusuario->usuario_nombre." ".$modelusuario->usuario_apellido; ?></h4></a>
                                        <?php 
                                        $especialidades = explode(',' ,$valdoctores->doctor_especialidades);
                                        foreach($especialidades as $valueEspecialidad){
                                      //recooroo las especialidades
                                        $modelespe = Especialidades::find()
                                        ->where(['especialidad_codigo' => $valueEspecialidad])
                                        ->one(); 
                                        ?>
                           			<span><a href="<?php print $modelespe->especialidad_http;?>"><?php print $modelespe->especialidad_nombre; ?></a></span>.
                                <?php } ?>
                                                         
                                  <p>
                                  <!--  
                                  <?php print $valdoctores->doctor_resumen ?>
                                  <br><br>
                                  -->
                                  
                                  <a href="<?php print $valdoctores->doctor_http;?>?cod=<?php print $valdoctores->doctor_id ?>"><button class="btn btn-default btn-normal btn-3" type="button">Ver mi perfil</button></a>
                                  </p>  
                                    </div>
                                </div>
                            </div>
                                 <?php } ?>
                        </div>
			
		</div>
	</div>
</div>
<?php } ?>
<?php } ?>




        <div class="overlay-none" >
        	<div class="container xsx-width">
        		<div class="vc_row wpb_row vc_row-fluid">
					<div class="vc_col-sm-12 wpb_column vc_column_container">
						<div class="wpb_wrapper">
							<div class="heading_e">
							<div>&nbsp;</div>
							<h4><img src="<?php print $theme->getUrl('img/heading.png');?>" alt="heading"></h4>
							<p></p>
							<h3>Escoja la opción de su preferencia</h3>
							<br>
	 			<?php if(Yii::$app->user->identity->usuario_perfil=='doctor'){?>
                	 		
				<a href="citasmedicas/calendario" target="_self">
					<button type="button" class="btn btn-default btn-normal btn-3">Mis Citas</button></a>

					<a href="usuarios/indexpacientes" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Mis Pacientes</button></a>
			
           			<a href="<?php print $panelusuario;?>" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Ir a mi panel</button></a>

               		<?php } else  if (Yii::$app->user->identity->usuario_perfil=='paciente'){ ?>

                	<a href="<?php print $panelusuario;?>" target="_self">
					<button type="button" class="btn btn-default btn-normal btn-3">Ir a mi perfil </button></a>

				<a href="citasmedicas/index" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Mis Citas</button></a>
				<?php  } else {?>

			<a href="doctores" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Médicos</button></a>
			<a href="paisesclinicas" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Paises/Clinicas</button></a>
			<a href="seguros" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Paises/Seguros</button></a>
			<a href="<?php print $panelusuario;?>" target="_self"><button type="button" class="btn btn-default btn-normal btn-3">Ir a mi panel</button></a>
			<?php } ?>

							</div>
						</div> 
					</div> 
				</div>
			</div>
		</div>
		<div class="overlay-none text-cnter" >
			<div class="container xsx-width">
				<div class="vc_row wpb_row vc_row-fluid">
				<div class="col-md-1">
				</div>
					<div class="vc_col-sm-10 wpb_column vc_column_container">
						<div class="wpb_wrapper">
							<div class="vc_row wpb_row vc_inner vc_row-fluid">
								<div class="col-md-12">
									<div class="wpb_wrapper">
									</div>
								</div> 
							</div>
						</div> 
					</div> 
					<div class="col-md-1">
					</div>
					</div>
				</div>
			</div>
    

<?php ActiveForm::end(); ?>

                  