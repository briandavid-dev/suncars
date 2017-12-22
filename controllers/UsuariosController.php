<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use app\models\UsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
use app\controllers\URLFriendly;
use yii\web\UploadedFile;
use app\models\Correos;
/**
 * UsuariosController implements the CRUD actions for Usuarios model.
 */
class UsuariosController extends Controller
{

    public $layout = 'panel';

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
            'access' => [
                'class' => \yii\filters\AccessControl::className(),
                'only' => ['create', 'update','admin', 'delete'],
                'rules' => [
                        // allow authenticated users
                        [
                                'allow' => true,
                                'roles' => ['@'],
                        ],
                        // everything else is denied
                ],
            ],
        ];
    }


    /**
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new UsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
    Autor: Erick Araque
Empresa : BMOSOLUCIONES
Fecha :septiembre-2017
Parametros : ninguno
Descripcion: Funcion que me permite mostar todos los doctores en el index
     */
    public function actionIndexdoctores()
    {

            $searchModel = new UsuariosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            
            return $this->render('indexdoctores', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }
        /**
     * Lists all Usuarios models.
     * @return mixed
     */
    public function actionIndexasistentes()
    {

            $searchModel = new UsuariosSearch();
            $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            
            return $this->render('indexasistentes', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }

        /**
   Autor: Erick Araque
Empresa : BMOSOLUCIONES
Fecha :septiembre-2017
Parametros : niguno
Descripcion: funcion que me permite mostrar  dependiendo del cal si el pefil logeado es doctor  realiza una busqueda por cita
si no es doctor reaiza una busqueda normal por usuario
     */
    public function actionIndexpacientes() 
    {

      if(Yii::$app->user->identity->usuario_perfil=='doctor')
          {
              $searchModel = new CitasMedicasSearch();
             $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            
          } else { 
              $searchModel = new UsuariosSearch();
              $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            

          }
          
           
            return $this->render('indexpacientes', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }


    public function actionIndexmiscitas() 
    {

      if(Yii::$app->user->identity->usuario_perfil=='doctor')
          {
              $searchModel = new CitasMedicasSearch();
             $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            
          } else { 
              $searchModel = new UsuariosSearch();
              $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            

          }
          
            
            return $this->render('indexmiscitas', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }

    public function actionIndextratamientos() 
    {

      if(Yii::$app->user->identity->usuario_perfil=='doctor')
          {
              $searchModel = new CitasMedicasSearch();
             $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            
          } else { 
              $searchModel = new UsuariosSearch();
              $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
            

          }
          
            
            return $this->render('indextratamientos', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            ]);
    }
    /**
   Autor: Erick Araque
Empresa : BMOSOLUCIONES
Fecha :septiembre-2017
Parametros : $id = id de usuario
Descripcion: Funcion que me permite ir ala view y mostrar datos del paciente y su historia medica 
     */
    public function actionView($id)
    {
        $searchModel = new CitasMedicasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $modelhistoriamedica  =  HistoriaMedica::find()->where(['usuario_id' =>  $id])->one();
                                
            return $this->render('view', [
            'model' => $this->findModel($id), 'modelhistoriamedica' => $modelhistoriamedica
            ,'searchModel' => $searchModel,
            'dataProvider' => $dataProvider, 
            ]);
    }

    /**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
         $model = new Usuarios();

        if (isset ( $_POST ['Usuarios'] )) {

          $model->attributes = $_REQUEST["Usuarios"];
          $model->usuario_login = $model->usuario_email;
          
          date_default_timezone_set("UTC");
          $now_time_UTC = date("Y-m-d H:i:s", time());
          $model->usuario_fecha_creacion = $now_time_UTC;
          $model->usuario_fecha_modificacion = $now_time_UTC;
          
          $password = $model->usuario_password;

            if ($model->validate ()){
            $model->usuario_password = md5($model->usuario_password);
            $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
            } else {
            $model->usuario_password = $model->usuario_password;
            $model->usuario_password_confirmacion = $model->usuario_password_confirmacion;
            }


          $model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
                    
                    if ($model->save ()){
                    
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Usuario Guardado!");
                    
                    return $this->redirect(['create']);
                    }
                    }
                    return $this->render('create', [
                    'model' => $model,
                    ]);

    }

    /**
     * Updates an existing Usuarios model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
         $model         = $this->findModel($id);
         $usuario       = 'administrador';
         $modeldoctores = "";


        if (isset ( $_POST ['Usuarios'] )) {
            $model->attributes = $_REQUEST["Usuarios"];
            $model->usuario_login = $model->usuario_email;

            date_default_timezone_set("UTC");
            $now_time_UTC = date("Y-m-d H:i:s", time());
            $model->usuario_fecha_creacion = $now_time_UTC;
            $model->usuario_fecha_modificacion = $now_time_UTC;

            $password = $model->usuario_password;

            if ($model->validate ()){
                $model->usuario_password = md5($model->usuario_password);
                $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
            } else {
                $model->usuario_password = $model->usuario_password;
                $model->usuario_password_confirmacion = $model->usuario_password_confirmacion;
            }


            $model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));

                    if ($model->save ()){

                                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Usuario Actualizado!");
                                
                                return $this->render('update', [
                                'model' => $model, 'usuario' => $usuario ,'modeldoctores'=> $modeldoctores
                                ]);
                                }

                                }
                                return $this->render('update', [
                                'model' => $model,'usuario' => $usuario , 'modeldoctores'=> $modeldoctores
                                ]);
    }

    /**
     * Deletes an existing Usuarios model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        
        try {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "<span class ='fa fa-check'></span> Usuario Eiminado!");

        } catch(\Exception $e){
        //throw new \yii\web\HttpException(405, 'Error saving model');
        Yii::$app->session->setFlash('exception', "<span class='fa fa-exclamation-triangle '></span> No se puede eliminar el registro. Está asociado a otra tabla de la Base de Datos.");
        }

        return $this->redirect(['index']);
      }


    /**
     * Finds the Usuarios model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Usuarios the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Usuarios::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


 public function actionEditable($usuarios) {
        
        $activo = $_REQUEST["Usuarios"]["usuario_activo"];
        
        if (isset($_POST['hasEditable'])) {
            
            /* actualiza el EQUIPO asignado de la cita */
            $modelUsuarios = Usuarios::findOne($usuarios);
            $modelUsuarios->usuario_activo = "$activo";
            $modelUsuarios->usuario_email_confirmacion =   $modelUsuarios->usuario_email;
             $modelUsuarios->usuario_password_confirmacion = $modelUsuarios->usuario_password; 

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            
            if($modelUsuarios->save()){
                $activo = ($activo) ? "ACTIVO" : "INACTIVO";
                return ['output'=>$activo, 'message'=>''];
            } else {
               var_dump($modelUsuarios->getErrors());
            }
        }
    }


    public function actionEditabledoctor($usuarios) {
       
        $activo = $_REQUEST["Usuarios"]["usuario_activo"];
        
        if (isset($_POST['hasEditable'])) {
         
            /* actualiza el EQUIPO asignado de la cita */
            $modelUsuarios = Usuarios::findOne($usuarios);
             $modeldoctor = Doctores::findOne($usuarios);
              $modeldoctor = Doctores::find()
                                ->where(['usuario_id' => $usuarios])
                                ->one(); 

            $modelUsuarios->usuario_activo = "$activo";


            $modeldoctor->doctor_estatus = "$activo";

            $modelUsuarios->usuario_email_confirmacion =   $modelUsuarios->usuario_email;
             $modelUsuarios->usuario_password_confirmacion = $modelUsuarios->usuario_password; 

            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            
            if($modelUsuarios->save()){
              if($modeldoctor->save()){
 $activo = ($activo) ? "ACTIVO" : "INACTIVO";
                return ['output'=>$activo, 'message'=>''];

              }
               
            } else {
               var_dump($modelUsuarios->getErrors());
            }
        }
    }




    public function actionRegistropaciente() {

            $model = new Usuarios();
            $modelhistoria = new HistoriaMedica();
            $model->attributes = $_POST["Usuarios"];
            $model->usuario_login = $model->usuario_email;

            date_default_timezone_set("UTC");
            $now_time_UTC = date("Y-m-d H:i:s", time());
            $model->usuario_fecha_creacion = $now_time_UTC;
            $model->usuario_fecha_modificacion = $now_time_UTC;
            /*$model->pais_id = 1;*/
            $model->usuario_activo = 1;

            $password = $model->usuario_password;

            $model->pais_id = (empty($_POST["Usuarios"]["pais_id"])) ? "" : $_POST["Usuarios"]["pais_id"];

            if ($model->validate ()){
                $model->usuario_password = md5($model->usuario_password);
                $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
            } else {
                $model->usuario_password = md5($model->usuario_password);
                $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);
            }


            $model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
            $model->usuario_perfil ='paciente';
            $correo =$model->usuario_login;

                    if ($model->save ()){

                  $modelhistoria->usuario_id = $model->usuario_id; 
                  if ($modelhistoria->save ()){
                  } else {
                    var_dump($modelhistoria->getErrors()); 
                    die();

                  }
                   $para = $model->usuario_login;
                   $programa =  Correos::find()
                   ->one();
        
                  $email = $programa->correo_principal;
                  
                  $params = array(
                  "nombre" => $model->usuario_nombre,
                  "apellido" => $model->usuario_apellido,
                  );
                  
                  $MAILFriendly = new MAILFriendly();
                  
                  if(
                  $MAILFriendly->enviar(
                  "SOLICITUD DE PERFIL PACIENTE CREADA",
                  "$para",
                  "<$email>",
                  Yii::$app->params['dominioNombreMayusculaSinWWW']." <info@".Yii::$app->params['dominioNombreMinusculaSinWWW'].">",
                  "layouts/mailcrearpaciente",
                  $params,
                  true
                  )
                  ) {
                        Yii::$app->session->setFlash('success', "Usuario registrado. Le enviamos un E-Mail.<br>Ingrese con su usuario y contraseña.");
                  } else {
                        Yii::$app->session->setFlash('success', "Gracias");
                  }
 
                              //Yii::$app->session->setFlash('success', "guardado");
                              return $this->redirect(['/antecedentes','cod'=>$model->usuario_id]);
                              }  else {
                              
                                var_dump($model->errors);die();
                                
                                
                              Yii::$app->session->setFlash('exception', $model);
                              
                              return $this->redirect(['/registro']);
                              }
            }




    public function actionHistoriamedica() {

        $modelHistoria =  HistoriaMedica::find()
    ->where(['usuario_id' => $_POST['HistoriaMedica']['usuario_id']])->one();
        //$correo = $_POST['Usuarios']['usuario_login'];

                                
                                $modelUsuarios = Usuarios::find()
                                ->where(['usuario_id' => $modelHistoria->usuario_id])
                                ->one();
                               
                                
                              //  $usuarioid = $modelUsuarios->usuario_id;
                                $modelUsuarios->attributes = $_REQUEST["Usuarios"] ;
                                
                                $modelHistoria->attributes = $_REQUEST["HistoriaMedica"];
                               // $modelHistoria->usuario_id = $usuarioid;
                                
                                $modelHistoria->historia_peso = $modelHistoria->historia_peso." ".$_REQUEST["HistoriaMedica"]['medida'];
                                  $modelHistoria->historia_estatura = $modelHistoria->historia_estatura." ".$_REQUEST["HistoriaMedica"]['estaturamedida'];
                              
                              if($modelHistoria->historia_fumar){
                              $modelHistoria->historia_fumar = 1; 
                              }

                              if($modelHistoria->historia_bebidad){
                              $modelHistoria->historia_bebidad = 1;
                              }

                              if($modelHistoria->historia_tension){
                              $modelHistoria->historia_tension = 1; 
                              }

                              if($modelHistoria->historia_operado){
                              $modelHistoria->historia_operado = 1; 
                              }
                              
                              if($modelHistoria->historia_familia_tension){
                              $modelHistoria->historia_familia_tension = 1; 
                              }

                              if($modelHistoria->historia_alergia_medicamentos){
                              $modelHistoria->historia_alergia_medicamentos = 1; 
                              }
                              
                              
                              $modelUsuarios->usuario_email_confirmacion = $modelUsuarios->usuario_login;
                              $modelUsuarios->usuario_email_confirmacion = $modelUsuarios->usuario_email;
                              $modelUsuarios->usuario_password_confirmacion = $modelUsuarios->usuario_password;
                              $modelUsuarios->usuario_password = $modelUsuarios->usuario_password;
                              $modelUsuarios->usuario_fecha_nacimiento = date('Y-m-d', strtotime($modelUsuarios->usuario_fecha_nacimiento));
                              



                 if ($modelUsuarios->validate ()){
                
                 } else {
                 var_dump($modelUsuarios->getErrors()); 
                 }

                            if ($modelHistoria->validate ()){
                            
                            } else {
                                var_dump($modelHistoria->getErrors());  
                            }
                            
                            if ($modelUsuarios->save ()){
                            
                                if ($modelHistoria->save ()){
                                    Yii::$app->session->setFlash('success', "Usuario registrado. Le enviamos un E-Mail.<br>Ingrese con su usuario y contraseña.");
                                    return $this->redirect(['/login']);
                                } else {
                                    Yii::$app->session->setFlash('success', "Ha ocurrido un error (000111222), intente nuevamente por favor.");
                                    var_dump($modelHistoria->getErrors());
                                }
                            
                            } else {
                            
                                var_dump($modelUsuarios->getErrors());
                                return $this->redirect(['/antecedentes','correo'=>$correo]);
                            
                            }
    }


/**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreatedoctor()
    {
        if(!isset(Yii::$app->user->identity->usuario_id)){
            $code = $_REQUEST['code'];
            return $this->redirect(["../login?code=$code"]);
        }
        
        
        
$modelhistoria = new HistoriaMedica;
        $searchModel = new UsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $themeBasePath = Yii::getAlias('@app/themes/tuagendamedica');
        $usuario= 'doctor';
        $cod =  'doctor';
        $model = new Usuarios();
        $modeldoctor = new Doctores();



        if (isset ( $_POST ['Usuarios'] )) {
            $model->attributes = $_REQUEST["Usuarios"];
            $modeldoctor->attributes = $_REQUEST["Doctores"];

            $model->usuario_login = $model->usuario_email;

            date_default_timezone_set("UTC");
            $now_time_UTC = date("Y-m-d H:i:s", time());
            $model->usuario_fecha_creacion = $now_time_UTC;
            $model->usuario_fecha_modificacion = $now_time_UTC;

            $password = $model->usuario_password;
            $model->usuario_password = md5($model->usuario_password);
            $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);

                $rnd = rand(0,999).rand(0,999);

                    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($modeldoctor,'doctor_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $modeldoctor->doctor_imagen = $fileName1;
                    $path1 = $themeBasePath.'/resources/images/doctores/'.$fileName1;
                }

        
                    if(!empty($modeldoctor->doctor_especialidades)){

                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                $arrayespecialidades = array();

                foreach($modeldoctor->doctor_especialidades as $keyModelCategorias => $valModelCategorias){

                $especialidades =  Especialidades::find()
                ->where(['especialidad_id' =>  $valModelCategorias])
                ->one();
                $nombre = $especialidades->especialidad_nombre;

                    array_push($arrayespecialidades,$nombre );
                    array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }

                 $modeldoctor->doctor_especialidades = implode(",", $arrayCategorias);
                 $modeldoctor->buscador_especialidades = implode(",", $arrayespecialidades);
            }

            $URLFriendly = new URLFriendly();
            $modeldoctor->doctor_http = $URLFriendly->_new($model->usuario_nombre.$model->usuario_apellido);

            $model->pais_id = $_POST ['Usuarios']['pais_id'];
             $pais=  Paises::find()
              ->where(['pais_id' =>  $model->pais_id])
             ->one();
              

            $model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
            $model->usuario_perfil = 'doctor';
            $model->usuario_activo = 1;
            $modeldoctor->buscador_doctor_nombre = $model->usuario_nombre." ".$model->usuario_apellido;

            $modeldoctor->buscador_paises = $pais->pais_nombre;

            

                    if ($model->save ()){

                      $modelhistoria->usuario_id = $model->usuario_id; 
                  if ($modelhistoria->save ()){
                  } else {
                    var_dump($modelhistoria->getErrors()); 
                    die();

                  }

                                $modelid = Usuarios::find()
                                ->where(['usuario_login' => $model->usuario_login])
                                ->one(); 

                                $modeldoctor->usuario_id =$modelid->usuario_id;

 
                        if ($modeldoctor->save ()){
                              if(!empty($uploadedFile1)){
                                $uploadedFile1->saveAs($path1);
                              }
    
                            $para = $model->usuario_login;
                             $programa  =  Correos::find()
                            ->one();
                     
    
                              $email = $programa->correo_principal;
                              
                              $params = array(
                                  "nombre" => $modelid->usuario_nombre,
                                  "apellido" => $modelid->usuario_apellido,
                                  "fecha" => '',
                                  "hora" => '',
                                  "email" => $modelid->usuario_email,
                                  "password" => $password,
                              );
                              
                              $MAILFriendly = new MAILFriendly();
                              
                              if(
                              $MAILFriendly->enviar(
                              "SOLICITUD DE PERFIL APROBADA  DESDE TUAGENDAMEDICA",
                              "$para",
                              "<$email>",
                              Yii::$app->params['dominioNombreMayusculaSinWWW']." <info@".Yii::$app->params['dominioNombreMinusculaSinWWW'].">",
                              "layouts/maildoctorcrear", 
                              $params,
                              true
                              )
                              ) {
                                    Yii::$app->session->setFlash('success', "Gracias. Doctor Agregado.");
                              } else {
                                    Yii::$app->session->setFlash('success', "Gracias");
                              }
                            
                        } else {
                            var_dump($model->errors);//die("BRINDA CHURROS");
                        }
        
                         //Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Doctor Guardado!");
                           
                        /*
                         return $this->render('indexdoctores', [
                            'searchModel' => $searchModel,
                            'dataProvider' => $dataProvider,
                         ]);
                         */
                         return $this->redirect(['doctores/centros/', 'id' => $modeldoctor->doctor_id]);

                    }
                    
                    
                }

                return $this->render('create', [
                    'model' => $model, 'modeldoctor' =>$modeldoctor, 'usuario' =>$usuario, 'cod' =>$cod
                        
                ]);
                

    }

    

/**
     * Creates a new Usuarios model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionUpdatedoctor($id)
    {

        $searchModel = new UsuariosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        $themeBasePath = Yii::getAlias('@app/themes/tuagendamedica');
        $usuario= 'doctor';
        $model = $this->findModel($id);

        $modeldoctores =  Doctores::find()->where(['usuario_id' => $model->usuario_id])->one();



        if (isset ( $_POST ['Usuarios'] )) {
            
            $model->attributes = $_POST["Usuarios"];
            $model->pais_id = $_POST ['Usuarios']['pais_id'];
           
            //por si coloca la imagen vacia
            $imagendoctor = $modeldoctores->doctor_imagen;

            $modeldoctores->attributes = $_REQUEST["Doctores"];
            $model->usuario_login = $model->usuario_email;
            
            date_default_timezone_set("UTC");
            $now_time_UTC = date("Y-m-d H:i:s", time());
         
            $model->usuario_fecha_modificacion = $now_time_UTC;
    
            $password = $model->usuario_password;
            $model->usuario_password = md5($model->usuario_password);
            $model->usuario_password_confirmacion = md5($model->usuario_password_confirmacion);

                $rnd = rand(0,999).rand(0,999);

                    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($modeldoctores,'doctor_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $modeldoctores->doctor_imagen = $fileName1;
                    $model->usuario_imagen_1 = $fileName1;
                    $path1 = $themeBasePath.'/resources/images/doctores/'.$fileName1;
                }
                
                if($modeldoctores->doctor_imagen=="") {
                $modeldoctores->doctor_imagen =$imagendoctor;
                }


                if(!empty($modeldoctores->doctor_especialidades)){

                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                $arrayespecialidades = array();

                foreach($modeldoctores->doctor_especialidades as $keyModelCategorias => $valModelCategorias){

                $especialidades =  Especialidades::find()
                ->where(['especialidad_id' =>  $valModelCategorias])
                ->one();
                $nombre = $especialidades->especialidad_nombre;
                
                  
                   array_push($arrayespecialidades,$nombre);
                   array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }

                $modeldoctores->doctor_especialidades = implode(",", $arrayCategorias);
                $modeldoctores->buscador_especialidades = implode(",", $arrayespecialidades);

            }


                
            $URLFriendly = new URLFriendly();
            $modeldoctores->doctor_http = $URLFriendly->_new($model->usuario_nombre.$model->usuario_apellido);
            $model->usuario_fecha_nacimiento = date('Y-m-d', strtotime($model->usuario_fecha_nacimiento));
            $model->usuario_perfil = 'doctor';
           
           $pais=  Paises::find()->where(['pais_id' =>  $model->pais_id])->one();
 
            $modeldoctores->buscador_doctor_nombre = $model->usuario_nombre." ".$model->usuario_apellido;
            $modeldoctores->buscador_paises = $pais->pais_nombre;

                    if ($model->save ()){

                                $modelid = Usuarios::find()
                                ->where(['usuario_login' => $model->usuario_login])
                                ->one(); 

                                $modeldoctores->usuario_id =$modelid->usuario_id;

 
                    if ($modeldoctores->save ()){
                      if(!empty($uploadedFile1)){
                        $uploadedFile1->saveAs($path1);
                      }

                      Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Doctor Actualizado!");
                   
                      return $this->render('update', [
                      'model' => $model, 'usuario' =>$usuario, 'modeldoctores' => $modeldoctores
                      ]);

                    }

                     
                  }
                }
                
                      return $this->render('update', [
                      'model' => $model, 'usuario' =>$usuario ,'modeldoctores' => $modeldoctores,
                      ]);
    }
}






