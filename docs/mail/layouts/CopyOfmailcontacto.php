<?php 

	
	$nombre   = (isset($nombre)) ? $nombre : "";
	$email    = (isset($email)) ? $email : "";
	$telefono = (isset($telefono)) ? $telefono : "";
	$mensaje  = (isset($mensaje)) ? $mensaje : "";
	$empresa  = (isset($empresa)) ? $empresa : "";
	$pais     = (isset($pais)) ? $pais : "";
	
	$adicional = "";
	if($form_ofertas_servicios == 1){
		$adicional = "También me gustaría estar entre los primeros en conocer las nuevas ofertas y servicios de ICS";
	}
	

	
?>

<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   		<meta name="viewport" content="width=device-width"/>
		<style type="text/css">
			* {
		  margin: 0;
		  padding: 0;
		  font-size: 100%;
		  font-family: 'Avenir Next', "Helvetica Neue", "Helvetica", Helvetica, Arial, sans-serif;
		  line-height: 1.65; }
		
		img {
		  max-width: 100%;
		  margin: 0 auto;
		  display: block; }
		
		body,
		.body-wrap {
		  width: 100% !important;
		  height: 100%;
		  background: #FFFFFF;
		  -webkit-font-smoothing: antialiased;
		  -webkit-text-size-adjust: none; }
		
		a {
		  color: #03a9f4;
		  text-decoration: none; }
		
		.text-center {
		  text-align: center; }
		
		.text-right {
		  text-align: right; }
		
		.text-left {
		  text-align: left; }
		
		.button {
		  display: inline-block;
		  color: white;
		  background: #03a9f4;
		  border: solid #03a9f4;
		  border-width: 10px 20px 8px;
		  font-weight: bold;
		  border-radius: 4px; }
		
		h1, h2, h3, h4, h5, h6 {
		  /*margin-bottom: 20px;
		  line-height: 1.25; */}
		
		h1 {
		  font-size: 32px; }
		
		h2 {
		  font-size: 28px; }
		
		h3 {
		  font-size: 24px; }
		
		h4 {
		  font-size: 20px; }
		
		h5 {
		  font-size: 16px; }
		
		p, ul, ol {
		  font-size: 16px;
		  font-weight: normal;
		  margin-bottom: 20px; }
		
		.container {
		  display: block !important;
		  clear: both !important;
		  margin: 0 auto !important;
		  max-width: 580px !important; }
		  .container table {
		    width: 100% !important;
		    border-collapse: collapse; }
		  .container .masthead {
		    padding: 20px 0;
		    background: #ebebeb;
		    color: white; }
		    .container .masthead h1 {
		      margin: 0 auto !important;
		      max-width: 90%;
		      text-transform: uppercase; }
		  .container .content {
		    background: white;
		    padding: 30px 35px; }
		    .container .content.footer {
		      background: none; }
		      .container .content.footer p {
		        margin-bottom: 0;
		        color: #888;
		        text-align: center;
		        font-size: 14px; }
		      .container .content.footer a {
		        color: #888;
		        text-decoration: none;
		        font-weight: bold; }
		        
		        .letra_azul {
				color: black;
			}
			
			.mayuscula {
			    text-transform: uppercase;
			}
			
			.minuscula {
			    text-transform: lowercase;
			}
			
		</style>
	</head>
	<body>
		
		<table class="body-wrap">
		    <tr>
		        <td class="container">
		
		            <!-- Message start -->
		            <table align="center">
		                <tr>
		                    <td align="center" class="masthead">
		                        <img src='https://icslatam.com/themes/icslatam/img/logo/logo.png' alt='ICSLATAM.COM' title='ICSLATAM.COM' height="80" />
		                    </td>
		                </tr>
		                <tr>
		                    <td class="content">
		                    
								
		                        <h4 style="text-align: center;"><span class="letra_azul">SOLICITUD DE CONTACTO</span> DESDE ICSLATAM.COM</h4>
		                         
		                        <div>&nbsp;</div>
                                	<strong>Nombre y Apellido</strong>: <?php print $nombre; ?><br>
                                	<strong>Email</strong>: <?php print $email; ?><br>
                                	<strong>Teléfono</strong>: <?php print $telefono; ?><br>
                                	<strong>Empresa</strong>: <?php print $empresa; ?><br>
                                	<strong>País</strong>: <?php print $pais; ?><br>
                                	<strong>Mensaje</strong>: <?php print $mensaje; ?>
                               	
		                        <div>&nbsp;</div>
		                        <div><strong><?php print $adicional; ?></strong></div>
		                        
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		    <tr>
		        <td class="container">
				<div>&nbsp;</div>
		            <!-- Message start -->
		            <table align="center" style="background: #313131;">
		                <tr>
		                    <td class="content footer" align="center">
		                    	<p>International Consulting Services (ICS)</p>
                            	<p><a href="https://icslatam.com/">Visitenos en www.icslatam.com</a></p>
		                    </td>
		                </tr>
		            </table>
		
		        </td>
		    </tr>
		</table>
		
	</body>
</html>