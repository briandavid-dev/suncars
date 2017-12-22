<?php

namespace app\controllers;

use Yii;
use app\models\CmsPosts;
use app\models\CmsPostsSearch;
use app\models\CmsCategories;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\helpers\Url;
use yii\helpers\FileHelper;
use yii\helpers\Json;
use app\models\UserModel;
use app\controllers\URLFriendly;
use app\models\UploadForm;

/**
 * CmsPostsController implements the CRUD actions for CmsPosts model.
 */
class CmspostsController extends Controller
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
     * Lists all CmsPosts models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmsPostsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsPosts model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CmsPosts model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
    	
    	
		$themeBasePath = Yii::getAlias('@app/themes/rigal');

		$model = new CmsPosts();
		
		// se define el scenario para validaciones en el modelo
		$model->scenario = 'insert';

		date_default_timezone_set("america/caracas");
                   $now_time_UTC = date("Y-m-d H:i:s");
                 // $date = $time = new \DateTime('now', new \DateTimeZone('UTC'));
                    
                   //$model->post_date = $now_time_UTC;
                    
                    
                    $model->post_date_gmt= $now_time_UTC;
                   	$model->post_modified= $now_time_UTC;
                    $model->post_modified_gmt=$now_time_UTC;
//$time = new \DateTime('now', new \DateTimeZone('UTC'));
                   //asigno el usuario
                       $usuario = Yii::$app->user->identity->usuario_id;
		$model->user_id = $usuario;

		
		
		

        if (isset ( $_POST ['CmsPosts'] )) {
 
  // creamos un valor aleatorio
                $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

				$model->attributes = $_POST ['CmsPosts'];
				
				if(!empty($model->post_date)){
					$model->post_date = date('Y-m-d', strtotime($model->post_date));
				}
				
				
				//proceso para guardar imagen 1 
				$uploadedFile1=UploadedFile::getInstance($model,'post_image_1');
             
              	if(!empty($uploadedFile1)) {
                  	$fileName1 = "$rnd.jpg";  // random number + file name
                 	$model->post_image_1 = $fileName1;
                  	$path1 = $themeBasePath.'/resources/images/post/'.$fileName1;
              	}
              	


                //proceso para guardar imagen  2
              	$uploadedFile2=UploadedFile::getInstance($model,'post_image_2');

              	if(!empty($uploadedFile2)){

              		$fileName2 = "$rnd2.jpg";  // random number + file name
	              	$model->post_image_2 = $fileName2;
	              	//$model->contenido_imagen_2 = $model->cliente_imagen_1;
	              	$path2 = $themeBasePath.'/resources/images/post/'.$fileName2;
				}

     
  			if(!empty($model->post_categories)){

                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                foreach($model->post_categories as $keyModelCategorias => $valModelCategorias){
                    array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->post_categories = implode(",", $arrayCategorias);
                
            }

            if(!empty($model->post_subcategories)){
                /* le agrega el sufijo delante con 0 ceros */
                $arraySubCategorias = array();
                foreach($model->post_subcategories as $keyModelSubCategorias => $valModelSubCategorias){
                    array_push($arraySubCategorias, str_pad($valModelSubCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->post_subcategories = implode(",", $arraySubCategorias);
            }
            else{

               $model->post_subcategories=0;
            }

            $URLFriendly = new URLFriendly();
			$model->post_http = $URLFriendly->_new($model->post_title);
			$model->post_name = $URLFriendly->_new($model->post_title);

				if ($model->save ()){

	        		if(!empty($uploadedFile1)){
	       				$uploadedFile1->saveAs($path1);
	           		}
	                
	         		if(!empty($uploadedFile2)){
	          			$uploadedFile2->saveAs($path2);
					}
	                           
	                    //  Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
	                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Post Guardado!");
	                //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");
	
	                return $this->redirect(['create']);

				} else {
					//var_dump($model->errors);die();
                }
			}
        
		return $this->render('create', ['model' => $model]);
		
    }

    /**
     * Updates an existing CmsPosts model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
$themeBasePath = Yii::getAlias('@app/themes/rigal');

  date_default_timezone_set("america/caracas");
                   $now_time_UTC = date("Y-m-d H:i:s");
                 // $date = $time = new \DateTime('now', new \DateTimeZone('UTC'));
                    $model->post_date = $now_time_UTC;
                    $model->post_date_gmt= $now_time_UTC;
                     $model->post_modified= $now_time_UTC;
                    $model->post_modified_gmt=$now_time_UTC;
//$time = new \DateTime('now', new \DateTimeZone('UTC'));
                   //asigno el usuario
                       $usuario = Yii::$app->user->identity->usuario_id;
                $model->user_id = $usuario;


        	if (isset ( $_POST ['CmsPosts'] )) {

  				// creamos un valor aleatorio
                $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

      			$model->attributes = $_POST ['CmsPosts'];
      			
      			if(!empty($model->post_date)){
      				$model->post_date = date('Y-m-d', strtotime($model->post_date));
      			}
      			
     
				//proceso para guardar imagen 1 
  				$uploadedFile1=UploadedFile::getInstance($model,'post_image_1');
             
              	if(!empty($uploadedFile1)) {
                  	$fileName1 = "$rnd.jpg";  // random number + file name
                  	$model->post_image_1 = $fileName1;
                  	$path1 = $themeBasePath.'/resources/images/post/'.$fileName1;
              	}
              	

                //proceso para guardar imagen  2
              	$uploadedFile2=UploadedFile::getInstance($model,'post_image_2');
              
              	if(!empty($uploadedFile2)){
	              $fileName2 = "$rnd2.jpg";  // random number + file name
	              $model->post_image_2 = $fileName2;
	              $path2 = $themeBasePath.'/resources/images/post/'.$fileName2;
				}

            
  			if(!empty($model->post_categories)){


                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                foreach($model->post_categories as $keyModelCategorias => $valModelCategorias){
                    array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->post_categories = implode(",", $arrayCategorias);
                
            }

            if(!empty($model->post_subcategories)){
                /* le agrega el sufijo delante con 0 ceros */
                $arraySubCategorias = array();
                foreach($model->post_subcategories as $keyModelSubCategorias => $valModelSubCategorias){
                    array_push($arraySubCategorias, str_pad($valModelSubCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->post_subcategories = implode(",", $arraySubCategorias);
            }
            
            
            $URLFriendly = new URLFriendly();
            $model->post_http = $URLFriendly->_new($model->post_title);
			$model->post_name = $URLFriendly->_new($model->post_title);
            

                if ($model->save ()){

                    if(!empty($uploadedFile1)){
                                      $uploadedFile1->saveAs($path1);
                                    }
                                    if(!empty($uploadedFile2)){
                                                $uploadedFile2->saveAs($path2);
                                            }

            //      Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Actualizado!");
              Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Post Actualizado!");

            //  return $this->redirect(['view', 'id' => $model->idioma_id]);
            return $this->render('update', [
                'model' => $model,
                  ]);
                   
                }
                else {
  					//var_dump($model->errors); die();

                }
            }
          return $this->render('update', [
              'model' => $model,
                ]);
    }

    /**
     * Deletes an existing CmsPosts model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    { try {
        $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span>Post Eiminado!");

      } catch(\Exception $e){
        //throw new \yii\web\HttpException(405, 'Error saving model');
        Yii::$app->session->setFlash('exception', "<span class='fa fa-exclamation-triangle '></span> No se puede eliminar el registro. Está asociado a otra tabla de la Base de Datos.");
    }



      return $this->redirect(['index']);

    }

    /**
     * Finds the CmsPosts model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsPosts the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsPosts::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }


 public function actionEditable($cmspost) {
        
        $activo = $_REQUEST["CmsPosts"]["post_status"];
        
        if (isset($_POST['hasEditable'])) {
            //var_dump($usuario);
            //die();
            /* actualiza el EQUIPO asignado de la cita */
            $modelClientes = CmsPosts::findOne($cmspost);
            $modelClientes->post_status = "$activo";
          //  $modelClientes->usuario_email_confirmacion =   $modelUsuarios->usuario_email;
            //$modelClientes->usuario_password_confirmacion = $modelUsuarios->usuario_password; 

            //var_dump($modelUsuarios->usuario_email);die();
             
            /* retorna la respuesta en formato JSON */
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            
            if($modelClientes->save()){
                $activo = ($activo) ? "ACTIVO" : "INACTIVO";
                return ['output'=>$activo, 'message'=>''];
            } else {
                return ['output'=>'', 'message'=>'Gracias...'];
              //  var_dump($modelUsuarios->getErrors());
        
            }
        
        }
    }
/**
     * sube la imagenes del articulo
     */
    public function actionUpload()
    {

        $themeBasePath = Yii::getAlias('@app/themes/rigal');
        $themeBaseUrl = Url::base(true).'/themes/rigal';


        //$model = new ClientesContenidos;

        $_FILES['file']['type'] = strtolower($_FILES['file']['type']);

        if ($_FILES['file']['type'] == 'image/png'
                || $_FILES['file']['type'] == 'image/jpg'
                || $_FILES['file']['type'] == 'image/gif'
                || $_FILES['file']['type'] == 'image/jpeg'
                || $_FILES['file']['type'] == 'image/pjpeg')
        {


            $rnd = rand(0,9999).rand(0,9999);
            //$uploadedFile=CUploadedFile::getInstance($model,'info_art');
            $fileName = "$rnd.jpg";  // random number + file name

            copy($_FILES['file']['tmp_name'], $themeBasePath.'/resources/images/post/'.$fileName);

            //$model->picture->saveAs(Yii::app()->basePath.'/../resources/images/clientes/galeria/'.$model->picture->name);
            //copy($_FILES['file']['tmp_name'], Yii::app()->basePath.'/resources/'.$fileName);

            // displaying file
            $array = array(
                "filelink" => $themeBaseUrl."/resources/images/post/$fileName"
            );

            echo json_encode($array);

            //$img = Yii::app()->getBaseUrl().'/resources/images/clientesPropiedades/'.$data->cliente_propiedad_imagen;

        }

    }



     public function actionUploadfile()
    {
  $themeBasePath = Yii::getAlias('@app/themes/rigal');
        //$themeBaseUrl = Url::base(true).'/themes/fundacion';


// This is a simplified example, which doesn't cover security of uploaded files.
// This example just demonstrate the logic behind the process.

copy($_FILES['file']['tmp_name'], $themeBasePath."/resources/doc/".$_FILES['file']['name']);

$array = array(
    'url' => 'hola',
    'name' => 'hol2',
);

echo stripslashes(json_encode($array));


    }


}



