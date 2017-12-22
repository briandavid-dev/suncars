<?php 
	

	$nombrepaciente = (isset($nombrepaciente)) ? $nombrepaciente : "";
	$email  = (isset($email)) ? $email : "";
	$medicina   = (isset($medicina)) ? $medicina : "";
	$presentacion    = (isset($presentacion)) ? $presentacion : "";
	$cantidad = (isset($cantidad)) ? $cantidad : "";
	$contador = (isset($numhoras)) ? $numhoras : "";
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
		                        <h4 style="text-align: center;">NOS PREOCUPAMOS POR TU BIENESTAR</h4>
		                         
		                        <div>&nbsp;</div>
		                        <h5>Para ayudarte a mejorar tu salud te recordarmos que tienes asignado el siguiente tratamiento:  </h5>
                                	<strong>Paciente</strong>: <?php print $nombrepaciente; ?><br>
                                	<strong>E-Mail</strong>: <?php print $email; ?><br>
                                	<strong>Debes tomar:</strong>: <?php print $medicina.' ('.$presentacion.')'; ?><br>
                                	<strong>Cantidad total:</strong>: <?php print $cantidad;?><br>
                                	<strong>Vas por la número: </strong>: <?php print $contador; ?>
                                	<strong>Hora:</strong>: <?php print $horacomienzo; ?>
                               	
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
                            	<p><a href="https://tuagendamedica.com">Visitenos en www.tuagendamedica.com</a></p>
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		</table>
		
