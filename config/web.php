<?php
use kartik\mpdf\Pdf;

$params = require(__DIR__ . '/params.php');

$config = [
    'id' => 'basic',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log'],
   // 'bootstrap' => ['translatemanager'],
	//'sourceLanguage'    =>'ru-RU',
	'language'          =>'es',
	'charset'          =>'UTF-8', 
    'components' => [

   
    // setup Krajee Pdf component
    'pdf' => [
        'class' => Pdf::classname(),
        'format' => Pdf::FORMAT_A4,
        'orientation' => Pdf::ORIENT_PORTRAIT,
        'destination' => Pdf::DEST_BROWSER,
        // refer settings section for all configuration options
    
],
   

 'blog' => [
            'class' => '\monitorbacklinks\yii2wp\Wordpress',
            'endpoint' => 'http://example.com/xmlrpc.php',
            'username' => 'demo',
            'password' => 'demo'
        ],

        'request' => [
            // !!! insert a secret key in the following (if it is empty) - this is required by cookie validation
            'cookieValidationKey' => 'cualquiercosa',
        	// http://www.yiiframework.com/forum/index.php/topic/67683-bad-request/
            'enableCsrfValidation' => false,
        	/*'parsers' => [
        			'application/json' => 'yii\web\JsonParser'
        	]*/
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'identityClass' => 'app\models\User',
            'enableAutoLogin' => true,
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
              'maxSourceLines' => 20,
        ],
        'mailer' => [
            'class' => 'yii\swiftmailer\Mailer',
            // send all mails to a file by default. You have to set
            // 'useFileTransport' to false and configure a transport
            // for the mailer to send real emails.
            'useFileTransport' => false, // al estar como false es como si se estuviera diciendo que necesita la autentificacion
	        /* configuracion del correo corporativo creado en el servidor */
        	'transport' => [
		        'class' => 'Swift_SmtpTransport',
		        'host' => 'mail.bmosoluciones.com',
		        'username' => 'info@bmosoluciones.com',
		        'password' => 'In10Fo.14',
		        'port' => '465',
		        'encryption' => 'ssl',
		       	//'encryption' => 'tls',
	        ],
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
    //      'db2' => require(__DIR__ . '/db2.php'),


    		'urlManager' => [
    				'class' => 'yii\web\UrlManager',
    				'enablePrettyUrl' => true,
    				'showScriptName' => false,
    				'enableStrictParsing' => true,
    				'rules' => [
    						'/' => 'site/index',
    						'<controller:\w+>/<id:\d+>'=>'<controller>/view',
        					'<controller:\w+>/<action:\w+>/<id:\d+>'=>'<controller>/<action>',
        					'<controller:\w+>/<action:\w+>'=>'<controller>/<action>',

    						// es muy extraño pero funciona separam
    						//'reset-password' => 'site/url-contenido',

    						'<http:\w[ñáéíóúÁÉÍÓÚa-zA-Z-0-9]+>' => 'site/urlmanage',



    				],

    		],


	

        'view' => [
        'theme'=>[
            'basePath' =>'@app/themes/automovile',
            'baseUrl' => '@web/themes/automovile',
            'pathMap' =>[
                '@app/views' => '@app/themes/automovile',
                        ],
                 ],
                ],
    ],
		'modules' => [

    

				'redactor' => 'yii\redactor\RedactorModule',
                'gridview' =>  [
        'class' => '\kartik\grid\Module'
    ],



 


		],
    'params' => $params,
];

if (YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];

    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
        'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.*'] // adjust this to your needs

    ];

     //'allowedIPs' => ['127.0.0.1', '::1', '192.168.1.107'] // adjust this to your needs


}

return $config;
