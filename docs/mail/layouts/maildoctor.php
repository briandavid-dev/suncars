<?php 
	
	$nombre   = (isset($nombre)) ? $nombre : "";
	$email    = (isset($email)) ? $email : "";
	$pais = (isset($pais)) ? $pais : "";
	$telefono = (isset($telefono)) ? $telefono : "";
	
	$mensaje  = (isset($mensaje)) ? $mensaje : "";
	
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
		                    
								
		                        <h4 style="text-align: center;">SOLICITUD DE PERFIL DE DOCTOR</h4>
		                         
		                        <div>&nbsp;</div>
                                	<strong>Doctor</strong>: <?php print $nombre; ?><br>
                                	<strong>E-Mail</strong>: <?php print $email; ?><br>
                                	<strong>País</strong>: <?php print $pais; ?><br>
                                	<strong>Teléfono</strong>: <?php print $telefono; ?><br>
                                	<strong>Mensaje</strong>: <?php print $mensaje; ?>
                               	
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
		
