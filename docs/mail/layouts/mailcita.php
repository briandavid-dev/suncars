<?php 
$theme = $this->theme;
	
	$nombre   = (isset($nombre)) ? $nombre : "";
	$apellido    = (isset($apellido)) ? $apellido : "";
	$fecha = (isset($fecha)) ? date('d-m-Y', strtotime($fecha)) : "";
	$hora = (isset($hora)) ? $hora : "";
	$doctor = (isset($doctor)) ? $doctor : "";

	$clinica_nombre = (isset($clinica_nombre)) ? $clinica_nombre : "";
	$clinica_consultorio = (isset($clinica_consultorio)) ? $clinica_consultorio : "";
	$clinica_direccion = (isset($clinica_direccion)) ? $clinica_direccion : "";
	$clinica_telefono = (isset($clinica_telefono)) ? $clinica_telefono : "";
	$clinica_email = (isset($clinica_email)) ? $clinica_email : "";
	$sintomas = (isset($sintomas)) ? $sintomas : "";
	$comentarios = (isset($comentarios)) ? $comentarios : "";
	
	
?>

		
		<table class="body-wrap">
		    <tr>
		        <td class="container">
		
		            <!-- Message start -->
		            <table align="center">
		                <tr>
		                    <td align="center" class="masthead">
		                        <img src='https://bmosoluciones.com/projects/tuagendamedica.com/themes/tuagendamedica/img/logo/logo.png' alt='TUAGENDAMEDICA' title='TUAGENDAMEDICA' height="80" />
		                    </td>
		                </tr>
		                <tr>
		                    <td class="content">
		                    
								
		                        <h4 style="text-align: center;">SOLICITUD  DE NUEVA CITA</h4>
		                         
                                	<strong>Médico</strong>: <?php print $doctor; ?><br>
                                	<strong>Paciente</strong>: <?php print $nombre." ".$apellido; ?><br>
                                	<strong>Fecha</strong>: <?php print $fecha; ?><br>
                                	<strong>Hora</strong>: <?php print $hora; ?><br>
                                	<strong>Síntomas</strong>: <?php print $sintomas; ?><br>
                                	<strong>Comentarios</strong>: <?php print $comentarios; ?>
                                	
                                	<div>&nbsp;</div>
                                	
                                	<p><strong>DATOS DEL CENTRO MÉDICO</strong></p>
                                	<strong>Centro médico:</strong> <?php print $clinica_nombre; ?><br>
                                	<strong>Consultorio:</strong> <?php print $clinica_consultorio; ?><br>
                                	<strong>Dirección:</strong> <?php print $clinica_direccion; ?><br>
                                	<strong>Teléfono:</strong> <?php print $clinica_telefono; ?><br>
                                	<strong>E-Mail:</strong> <?php print $clinica_email; ?>
		                        
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		    <tr>
		        <td class="container">
				<div>&nbsp;</div>
		            <!-- Message start -->
		            <table align="center" style="background: #313131 !important; color: #ffffff;">
		                <tr>
		                    <td class="content footer" align="center" style="background: #313131 !important;">
		                    	<p>TUAGENDAMEDICA.COM</p>
                            	<p><a href="#">Visitenos en www.tuagendamedica.com</a></p>
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		</table>
		
