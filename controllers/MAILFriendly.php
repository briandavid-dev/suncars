<?php

	namespace app\controllers;
	use Yii;

	/**
	 * @class MAILFriendly 
	 * @author Brayan Ochoa
	 * @since 02/06/16
	 * @description enviar mail facilmente a traves de parametros y la vista del mail
	 */
	class MAILFriendly
	{
		/**
		 * @method _new
		 * @param {string} $str
		 * @author Brayan Ochoa
		 * @return string
		 */
		public function enviar($title, $to, $replyTo, $from, $view, $arrayParams, $bcc = false)
		{
			/*
			 * From: nombre y mail de quien lo envia. Ejemplo: Reservas Venaventours <reservas@venaventours.com>'
			 * Reply-to: responder a (cuando preciona responder en el mail sale el mail aqui puesto)
			 * Bcc: con copia oculta 
			 */
			
	

			$mensaje = Yii::$app->mailer->render($view, $arrayParams, 'layouts/html');
			


			//$mensaje = Yii::$app->mailer->render($view, $arrayParams);
			
			$cabeceras = "";
			if($replyTo) $cabeceras .= "Reply-to: $replyTo\r\n";
			$cabeceras .= 'From: '.$from.'' . "\r\n";
			$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			if($bcc) $cabeceras .= 'Bcc: bmosolucionestecnologicas@gmail.com, brayad@hotmail.com, antony2013araque@gmail.com' . "\r\n";
	

			//return true; // descomentar para hambiente de desarrollo, comentar para hambiente produccion
			
			// Enviarlo - la funcion mail retorna true o false			
			return mail($to, $title, $mensaje, $cabeceras);
			
		}
		
		
		/**
		 * @method _new
		 * @param {string} $str
		 * @author Brayan Ochoa
		 * @return string
		 */
		public function sendWithFileContent($title, $to, $replyTo, $from, $view, $arrayParams, $bcc = false)
		{
				
			
			
			$mensaje = Yii::$app->mailer->render($view, $arrayParams, 'layouts/html');
			

			 $ruta_completa = $arrayParams["archivo"]; 
			    $content = chunk_split(base64_encode(file_get_contents($ruta_completa))); 
			    $uid= md5(uniqid(time())); 
			    $bound= "--".$uid."\r\n"; 
			    $last_bound= "--".$uid."--"; 
				$ruta = "filename.pdf";				
				$eol = PHP_EOL;		
			
			
			// Basic headers
			$header = "From: ".$from." <".$from.">".$eol;
			$header .= "Reply-To: ".$replyTo.$eol;
			$header .= "MIME-Version: 1.0\r\n";
			$header .= "Bcc: bmosolucionestecnologicas@gmail.com, brayad@hotmail.com, antony2013araque@gmail.com\r\n";
			$header .= "Content-Type: multipart/mixed; boundary=\"".$uid."\"";
			
			// Put everything else in $message
			$message = "--".$uid.$eol;
			$message .= "Content-Type: text/html; charset=ISO-8859-1".$eol;
			$message .= "Content-Transfer-Encoding: 8bit".$eol.$eol;
			$message .= $mensaje.$eol;
			$message .= "--".$uid.$eol;
			$message .= "Content-Type: application/pdf; name=\"".$ruta_completa."\"".$eol;
			$message .= "Content-Transfer-Encoding: base64".$eol;
			$message .= "Content-Disposition: attachment; filename=\"".$ruta."\"".$eol;
			$message .= $content.$eol;
			$message .= "--".$uid."--";
						
			

			//return true; // descomentar para hambiente de desarrollo, comentar para hambiente produccion
			
			// Enviarlo - la funcion mail retorna true o false			
			return mail($to, $title, $message, $header);
	
	
		}






	/**
		 * @method _new
		 * @param {string} $str
		 * @author Brayan Ochoa
		 * @return string
		 */
		public function sendWithFileContentold($title, $to, $replyTo, $from, $view, $arrayParams, $bcc = false)
		{
				
			
			
			$postdata = http_build_query(
				$arrayParams
			);
				
			$opts = array('http' =>
				array(
					'method'  => 'POST',
					'header'  => 'Content-type: application/x-www-form-urlencoded',
					'content' => $postdata
				)
			);
				//var_dump($arrayParams["archivo"]);die();
			$context  = stream_context_create($opts);
				
			//var_dump($arrayParams);die();
				
			/*
			 * From: nombre y mail de quien lo envia. Ejemplo: Reservas Venaventours <reservas@venaventours.com>'
			 * Reply-to: responder a (cuando preciona responder en el mail sale el mail aqui puesto)
			 * Bcc: con copia oculta
			 */
			$mensaje = file_get_contents($arrayParams["archivo"], false, $context);

				
			$cabeceras = "";
			$cabeceras .= "Reply-to: $replyTo\r\n";
			$cabeceras .= 'From: '.$from.'' . "\r\n";
			$cabeceras .= 'MIME-Version: 1.0' . "\r\n";
			$cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
			if($bcc) $cabeceras .= 'Bcc: bmosolucionestecnologicas@gmail.com, brayad@hotmail.com, antony2013araque@gmail.com' . "\r\n";
		
		
			//return true; // descomentar para hambiente de desarrollo, comentar para hambiente produccion
				
			// Enviarlo - la funcion mail retorna true o false
			return mail($to, $title, $mensaje, $cabeceras);
				
		}	
	}

?>