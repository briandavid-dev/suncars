
<?php 



include 'config.php';

function enviar($title, $to, $replyTo, $from, $view, $arrayParams, $bcc = false)
{


	$mensaje =  "

    <style type='text/css'>
      * {
      margin: 0;
      padding: 0;
      font-size: 100%;
      font-family: 'Avenir Next', 'Helvetica Neue', 'Helvetica', Helvetica, Arial, sans-serif;
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


    <table class='body-wrap'>
        <tr>
            <td class='container'>

                <!-- Message start -->
                <table align='center'>
                    <tr>
                        <td class='masthead'>
                            <img src='https://tuagendamedica.com/themes/tuagendamedica/img/logo/logo.png' alt='TUAGENDAMEDICA' title='TUAGENDAMEDICA' height='80' />
                        </td>
                    </tr>
                    <tr>
                        <td class='content'>


                            <h4 style='text-align: center;'>NOS PREOCUPAMOS POR TU BIENESTAR</h4>
               
                            <h5>Para  ayudarte  a mejorar tu salud te recordarmos que tienes asignado el siguiente tratamiento:  </h5>
                                  <strong>Paciente:</strong> ".$arrayParams['nombrepaciente']."<br>
                                  <strong>E-Mail:</strong> ".$arrayParams['email']."<br>
                                  <strong>Debes tomar:</strong> " .$arrayParams['medicina'].' ('.$arrayParams['presentacion'].')'."<br>
                                  <strong>Cantidad total:</strong> ".$arrayParams['cantidad']."<br>
                                  <strong>Vas por la número: </strong> ".$arrayParams['contador']."<br>
                                  <strong>Hora:</strong> " .$arrayParams['horas']."
                        </td>
                    </tr>
                </table>

            </td>
        </tr>
    </table>";
	//$mensaje = Yii::$app->mailer->render($view, $arrayParams);
	 

	$cabeceras = "";
	if($replyTo) $cabeceras .= "Reply-to: $replyTo\r\n";
	$cabeceras .= 'From: '.$from.'' . "\r\n";
	$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
	$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
	if($bcc) $cabeceras .= 'Bcc: bmosolucionestecnologicas@gmail.com, brayad@hotmail.com, antony2013araque@gmail.com' . "\r\n";


	// return true; // descomentar para hambiente de desarrollo, comentar para hambiente produccion

	// Enviarlo - la funcion mail retorna true o false
	return mail($to, $title, $mensaje, $cabeceras);

}

//por ahora asi
 	date_default_timezone_set("america/panama");
            //formato de fecha
           $now_time_UTC = date("Y-m-d H:i:s");
            $nuevafechainicio = strtotime ('- 3 minute ', strtotime($now_time_UTC)) ; 
           $nuevafechafinal = strtotime ('+ 3 minute ', strtotime($now_time_UTC)) ;
           $nuevafechainicio = date ( 'Y-m-d H:i:s' , $nuevafechainicio );
           $nuevafechafinal = date ( 'Y-m-d H:i:s' , $nuevafechafinal );
           
           print "------";
           var_dump($nuevafechafinal);
           print "------";
           
var_dump($nuevafechainicio);
var_dump($nuevafechainicio);
          
           
   

//busco todos las notifcaciones en el rango de fecha
$sql = "SELECT * FROM notificaciones WHERE  notificacion_fecha_hora >=  '$nuevafechainicio'  AND  notificacion_fecha_hora  <= '$nuevafechafinal' AND  notificacion_status  = '0'";


$result = $conexion->query($sql);


if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
  
$tratamiento =      $row['tratamiento_id'];
$sql2 = "SELECT * FROM tratamientos WHERE tratamiento_id  = '$tratamiento'";


    	
 
$result2 = $conexion->query($sql2);

while($row2 = $result2->fetch_assoc()) {


     $array = [
    "cantidad" => $row2['tratamiento_cantidad'],
    "horacomienzo" => $row2['tratamiento_fecha_hora'],
    "presentacion" => $row['notificacion_presentacion'],
    "medicina" => $row['notificacion_medicina'],
    "citamedica" => $row2['cita_medica_id'],
    "intervalo" => $row['notificacion_intervalo'],
    "horas" => $row2['tratamiento_fecha_hora'],
    "tiempo" => $row['notificacion_tiempo'],
    "miligramo" => $row['noificacion_miligramo'],
    "nombrepaciente" => $row['notificacion_usuario'],
    "email" => $row['notificacion_correo'],
    "contador" => $row['notificacion_contador'],

];
$para = $row['notificacion_correo'];
$email ="erick.araque.bmo@gmail.com";

 echo json_encode($array); 

                  
                  if(
                  enviar(
                  "TRATAMIENTO ASIGNADO",
                  "$para",
                  "<$email>",
                  "tuagendamedica.com"."<info@tuagendamedica.com>",
                  "themes/layouts/mailnotificaciones",
                  $array,
                  true
                  )
                  ) {
                  //Yii::$app->session->setFlash('success', "Gracias. Recibiras una respuesta pronto");
                  	print "OK - ENVIO EL CORREO";
                  } else {
                 // Yii::$app->session->setFlash('success', "Gracias");
                  	print "NEY - NO ENVIO EL CORREO";
                  }

$sql3 = " UPDATE notificaciones SET notificacion_status = 1  WHERE tratamiento_id =".$row2['tratamiento_id'];

if ($conexion->query($sql3) === TRUE) {
                  

}


	}



           }       
               


} else {
    print "0";
}

  

	

$conexion->close();
    

      
 
 


  





?>
