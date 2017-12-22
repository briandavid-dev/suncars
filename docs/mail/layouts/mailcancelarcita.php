<?php 
$theme = $this->theme;
	
	$nombrepaciente   = (isset($nombrepaciente)) ? $nombrepaciente : "";
	$apellidopaciente    = (isset($apellidopaciente)) ? $apellidopaciente : "";
	$nombredoctor = (isset($nombredoctor)) ? $nombredoctor : "";
	$apellidodoctor = (isset($apellidodoctor)) ? $apellidodoctor : "";
	$hora = (isset($hora)) ? $hora : "";
	$fecha = (isset($fecha)) ? date('d-m-Y', strtotime($fecha)) : "";
	
	

?>

		
		<table class="body-wrap">
		    <tr>
		        <td class="container">
		
		            <!-- Message start -->
		            <table align="center">
		                <tr>
		                    <td align="center" class="masthead">
		                        <img src='https://tuagendamedica.com/themes/tuagendamedica/img/logo/logo.png' alt='TUAGENDAMEDICA' title='TUAGENDAMEDICA' height="80" />
		                    </td>
		                </tr>
		                <tr>
		                    <td class="content">
		                    
								
		                        <h4 style="text-align: center;">CITA CANCELADA</h4>
		                         <p> La siguiente cita fue cancelada: <p>
		                        <div>&nbsp;</div>
                                	<strong>Doctor</strong>: <?php print $nombredoctor." ".$apellidodoctor; ?><br>
                                	<strong>Paciente</strong>: <?php print $nombrepaciente." ".$apellidopaciente; ?><br>
                                	
                                	<strong>Fecha</strong>: <?php print $fecha; ?><br>
                                	<strong>Hora</strong>: <?php print $hora; ?><br>
                                	
		                        <div>&nbsp;</div>
		                        
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
                            	<p><a href="https://tuagendamedica.com/">Visitenos en www.tuagendamedica.com</a></p>
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		</table>
		
