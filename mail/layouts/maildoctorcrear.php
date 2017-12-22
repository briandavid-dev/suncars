<?php 
	
	$nombre   = (isset($nombre)) ? $nombre : "";
	$apellido    = (isset($apellido)) ? $apellido : "";
	$fecha = (isset($fecha)) ? date('d-m-Y', strtotime($fecha)) : "";
	$hora = (isset($hora)) ? $hora : "";
	$email = (isset($email)) ? $email : "";
	$password = (isset($password)) ? $password : "";
	
	
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
		                    
								
		                        <h4 style="text-align: center;"><span class="letra_azul">SOLICITUD  DE APROBACIÓN DE PERFIL</h4>
		                         
		                        <div>&nbsp;</div>
                                <?php print $nombre." ".$apellido; ?> su perfil fue aprobado.<br>
                                <h3>Bienvenido a TUAGENDAMEDICA.COM</h3>
                                
                                <div>&nbsp;</div>
                                
                                <strong>Sus datos para ingresar son:</strong><br>
                                
                                Usuario: <?php print $email; ?><br>
                                Contraseña <?php print $password; ?><br>
                                
                                <p><a href="https://tuagendamedica.com/login?email=<?php print $email; ?>">Iniciar Sesión</a></p>
                                	
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
		
