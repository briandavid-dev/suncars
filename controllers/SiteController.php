<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Banners;
use app\models\Usuarios;
use app\models\Commentarios;
use app\models\Contenidos;
use yii\helpers\Url;
use app\models\Categorias;
use app\models\Subcategorias;
use app\models\Correos;
use app\controllers\URLFriendly;
use yii\helpers\html; 
use yii\db\Expression;
use app\controllers\MAILFriendly;
use app\models\Solicitudes;

class SiteController extends Controller
{


    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
     public function actionIndex()
     {


         
    	Yii::$app->session['metaTitle'] = 'suncars';
  		Yii::$app->session['metaKeywords'] = 'suncars';
     	Yii::$app->session['metaDescription'] = 'suncars';
     			
  		$this->layout ="automovile"; 

           
                     
       Yii::$app->session->setFlash('success', "Su solicitud fue enviada exitosamente! Nos estaremos comunicando con usted lo mas pronto posible !");
         return $this->render('index');     
        
     }

    /**
     * Login action.
     *
     * @return string
     */
  
    
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

     public function actionUrlmanage($http)

    {


        $modelContact = new ContactForm();
        $this->layout ="automovile"; 

        $modelContenido = Contenidos::find()->where(['contenido_http' => $http])->one();  
        if(!empty($modelContenido)){
            

            $modelSolicitudes = new Solicitudes();
            
            if(isset($_POST["Solicitudes"])){

                $modelSolicitudes->attributes = $_POST ['Solicitudes'];


                if ($modelSolicitudes->save ()){

                    $nombre = $modelSolicitudes->solicitud_nombre;
                    $email = $modelSolicitudes->solicitud_email;
                    $mensaje = $modelSolicitudes->solicitud_mensaje;
                    $telefono = $modelSolicitudes->solicitud_telefono;
       
                    $params = array(
                        "nombre" => $nombre,
                        "email" => $email,
                        "mensaje" => $mensaje,
                        "telefono" => $telefono,
                        "titulo" => "SOLICITUD DE PRODUCTO O SERVICIO PARA SUNCARS",
                        "para" => "suncarsinfo@gmail.com",
                    );
                    
                    $MAILFriendly = new MAILFriendly();
                    
                    if(
                        $MAILFriendly->enviar(
                            $params["titulo"],
                            $params["para"],
                            "<".$params["email"].">",
                            Yii::$app->params['dominioNombreMayusculaSinWWW']." <info@".Yii::$app->params['dominioNombreMinusculaSinWWW'].">",
                            "layouts/mailcontacto",
                            $params,
                            true
                        )
                    ) {
                        Yii::$app->session->setFlash('success', "Gracias. Recibiras una respuesta pronto");
                    } else {
                    //Yii::$app->session->setFlash('success', "Gracias");
                    }

             
                  } else {

                    //var_dump($modelrecuperacion->getErrors());
                    //die();
                  }

            }


            return $this->render('informacionservicio',array('model'=>$modelContenido,'modelSolicitudes'=>$modelSolicitudes));

        }



    
                   switch($http){
                                
                                case 'home':

                                
                                return $this->render('index');
                                
                                break;

                                case 'nosotros':
                                
                                  return $this->render('nosotros');
                                
                                break;

                                case 'servicios':
                                
                                    $modelServicios = Contenidos::find()
                                    ->where(['contenido_tipo' => 'servicio'])
                                    ->all();
                                
                                    return $this->render('servicios',array('tipo'=>'Servicios', 'model'=>$modelServicios));
                                
                                break;

                                case 'productos':

                                    $modelProductos = Contenidos::find()
                                    ->where(['contenido_tipo' => 'producto'])
                                    ->all();
                                
                                    return $this->render('servicios',array('tipo'=>'Productos', 'model'=>$modelProductos));
                                
                                break;


                                case 'informacionservicio':
                                
                                  return $this->render('informacionservicio');
                                
                                break;



                                case 'contacto':

                                return $this->render('contacto',array());
                                
                                break;

                                case 'enviarmensaje':

                                $para = "suncarsinfo@gmail.com";

                                    $nombre= $_REQUEST['name'];
                                    $email = $_REQUEST['email'];
                                    $mensaje = $_REQUEST['msg'];
            
                                      $params = array(
                                      "nombre" => $nombre,
                                      "email" => $email,
                                      "mensaje" => $mensaje,
                                      );
                                      
                                       

                                      $MAILFriendly = new MAILFriendly();
                                      
                                      if(
                                      $MAILFriendly->enviar(
                                      "NUEVA SOLICITUD DE CONTACTO DESDE SUNCARS",
                                      "$para",
                                      "<$email>",
                                      Yii::$app->params['dominioNombreMayusculaSinWWW']." <info@".Yii::$app->params['dominioNombreMinusculaSinWWW'].">",
                  "layouts/mailcontacto",
                                      $params,
                                      true
                                      )
                                      ) {
                                      Yii::$app->session->setFlash('success', "Gracias. Recibiras una respuesta pronto");
                                      } else {
                                      Yii::$app->session->setFlash('success', "Gracias");
                                      }

                                    return $this->render('contacto',array());
                                
                                break;


                                case 'login':
                                
                                  

                                if (!Yii::$app->user->isGuest) {
                                    return $this->goHome();
                                }

                                $model = new LoginForm();
                                if ($model->load(Yii::$app->request->post()) && $model->login()) {

                                    return $this->redirect(['banners/create']);


                                }
                                  
                                return $this->render('login', [
                                    'model' => $model,
                                ]);
                                                        
                                break;







                                case 'correo':


                                return $this->render('correo',array());
                                
                                break;


                                 case 'cambioclave':

                               
                                if (isset ( $_POST ['codigo'] )) {
                                  $email = $_POST ['correoemail'];

                                  $modelvalidarcodigo = Usuarios::find()
                                  ->where(['usuario_codigo' => $_POST["codigo"]])
                                  ->one();

                                if ($modelvalidarcodigo ['usuario_codigo'] ) {
                                  
                                }else{
                                
                                  Yii::$app->session->setFlash('success4');

                                  return $this->render('codigo' ,['email' => $email]);
                                }
                              }

                                return $this->render('cambioclave',['email' => $email]);
                                
                                break;


                                 case 'codigo':


                                if (isset ( $_POST ['codigorecuperacion'] )) {

                                       
                                      // creamos un valor aleatorio
                                          $rnd = rand(0,9999).rand(0,9999);
                                         // $rnd2 = rand(0,9999).rand(0,9999);
                                          $rnd3 = $rnd;

                                 

                                 $modelrecuperacion = Usuarios::find()
                                  ->where(['usuario_email' => $_POST["codigorecuperacion"]])
                                  ->one();

                                  if (isset ($modelrecuperacion ['usuario_email'])){

                                  date_default_timezone_set("UTC");
                                  $now_time_UTC = date("Y-m-d H:i:s", time());
                                
                                 $modelrecuperacion->usuario_fecha_codigo = $now_time_UTC;
                                 $modelrecuperacion->usuario_codigo = $rnd3;
                                 $modelrecuperacion->usuario_email_confirmacion = $modelrecuperacion->usuario_email;
                                 $modelrecuperacion->usuario_password_confirmacion = $modelrecuperacion->usuario_password;

                                
                              if ($modelrecuperacion->save ()){

                                $email = $_POST["codigorecuperacion"];
                   
                                $params = array(
                                "codigo" => $modelrecuperacion->usuario_codigo,
                                "fecha_codigo" => $modelrecuperacion->usuario_fecha_codigo,
                                );
                                
                                $MAILFriendly = new MAILFriendly();
                                
                                if(
                                $MAILFriendly->enviar(
                                "SOLICITUD DE CAMBIO DE CONTRASEÑA APROBADA  DESDE SUNCARS",
                                "$para",
                                "<$email>",
                                Yii::$app->params['dominioNombreMayusculaSinWWW']." <info@".Yii::$app->params['dominioNombreMinusculaSinWWW'].">",
                                "layouts/mailrecuperacion",
                                $params,
                                true
                                )
                                ) {
                                //Yii::$app->session->setFlash('success', "Gracias. Recibiras una respuesta pronto");
                                } else {
                                //Yii::$app->session->setFlash('success', "Gracias");
                                }

                               
                           
                               //Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Código enviado a su correo!");
                                  
                                       return $this->render('codigo',['email' => $email]);
                         
                              }else {

                                //var_dump($modelrecuperacion->getErrors());
                                //die();
                              }
 }else{
  Yii::$app->session->setFlash('success2');

 return $this->render('correo');
 }
}
                                 
              
                                 
                                

                                return $this->render('codigo',array());
                                
                                break;



                 
                              }
    }
}

