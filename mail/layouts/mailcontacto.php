<?php 
$theme = $this->theme;
	
	$nombre   = (isset($nombre)) ? $nombre : "";
	$email    = (isset($email)) ? $email : "";
	$telefono = (isset($telefono)) ? $telefono : "";
	$mensaje  = (isset($mensaje)) ? $mensaje : "";
	$titulo  = (isset($titulo)) ? $titulo : "SOLICITUD DE CONTACTO";
	
?>

		
		<table class="body-wrap">
		    <tr>
		        <td class="container">
		
		            <!-- Message start -->
		            <table align="center">
		                <tr>
		                    <td align="center" class="masthead">
		                        <img src='https://bmosoluciones.com/logosuncars.png' alt='suncars' title='suncars' height="80" />
		                    </td>
		                </tr>
		                <tr>
		                    <td class="content">
		                    
								
		                        <h4 style="text-align: center;"><?php print $titulo; ?></h4>
		                         
		                        <div>&nbsp;</div>
                                	<strong>Nombre:</strong>: <?php print $nombre; ?><br>
                                	<strong>E-Mail</strong>: <?php print $email; ?><br>
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
                            	<p><a href="https://suncars.com.ve/">Visitenos en www.suncars.com.ve</a></p>
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		</table>
		
