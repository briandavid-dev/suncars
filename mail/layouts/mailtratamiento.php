<?php 
	
	$doctornombre   = (isset($doctornombre)) ? $doctornombre : "";
	$doctorapellido    = (isset($doctorapellido)) ? $doctorapellido : "";
	$nombrepaciente = (isset($nombrepaciente)) ? $nombrepaciente : "";
	$apellidopaciente = (isset($apellidopaciente)) ? $apellidopaciente : "";
	$email  = (isset($email)) ? $email : "";
	$medicina   = (isset($medicina)) ? $medicina : "";
	$presentacion    = (isset($presentacion)) ? $presentacion : "";
	$cantidad = (isset($cantidad)) ? $cantidad : "";
	$numhoras = (isset($numhoras)) ? $numhoras : "";
	$horas  = (isset($horas)) ? $horas : "";
	$numdias   = (isset($numdias)) ? $numdias : "";
	$dias    = (isset($dias)) ? $dias : "";
	$fechacomienzo = (isset($fechacomienzo)) ? date('d-m-Y', strtotime($fechacomienzo)) : ""; 
	$horacomienzo = (isset($horacomienzo)) ? $horacomienzo : "";
	
	
?>

		
		<table class="body-wrap">
		    <tr>
		        <td class="container">
		
		            <!-- Message start -->
		            <table align="center">
		                <tr>
		                    <td align="center" class="masthead">
		                        <img src='https://www.tuagendamedica.com/logo.png' alt='TUAGENDAMEDICA' title='TUAGENDAMEDICA' height="80" />
		                    </td>
		                </tr>
		                <tr>
		                    <td class="content">
		                    
								
		                        <h4 style="text-align: center;">TRATAMIENTO ASIGNADO</h4>
		                         
		                        <h5> Tratamiento asignado por el doctor: <?php print $doctornombre.' '.$doctorapellido ?>  </h5>
                                	<strong>Paciente</strong>: <?php print $nombrepaciente.' '.$apellidopaciente; ?><br>
                                	<strong>E-Mail</strong>: <?php print $email; ?><br>
                                	<strong>Medicina</strong>: <?php print $medicina.' ('.$presentacion.')'; ?><br>
                                	<strong>Dosis</strong>: <?php print $cantidad.' cada '.$numhoras.' '.$horas.' por '.$numdias.' '.$dias ?><br>
                                	<strong>Fecha de comienzo de tratamiento</strong>: <?php print $fechacomienzo; ?><br>
                                	<strong>Hora de comienzo de tratamiento</strong>: <?php print $horacomienzo; ?>
                               	
		                        
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
		
