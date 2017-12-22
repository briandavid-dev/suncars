<?php

namespace app\controllers;

use Yii;
use app\models\Usuarios;
use app\models\UsuariosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\helpers\Json;
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
     * Displays a single Usuarios model.
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
					//	Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
						Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Usuario Guardado!");
						//Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");

						return $this->redirect(['create']);

				//		$this->redirect (Yii::app()->createUrl('idiomas/create'));
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
        $model = $this->findModel($id);


        if (isset ( $_POST ['Usuarios'] )) {
        	$model->attributes = $_REQUEST["Usuarios"];
       // var_dump($model->attributes);die();
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

				//		Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Actualizado!");
						Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Usuario Actualizado!");

					//  return $this->redirect(['view', 'id' => $model->idioma_id]);
					return $this->render('update', [
							'model' => $model,
								]);
						//$this->redirect ( array (
							//	'update',
						//		'id' => $model->idioma_id
					//	) );
					}
				}
				return $this->render('update', [
						'model' => $model,
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
				Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Usuario Eiminado!");

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


 public function actionEditable($usuario) {
        
        $activo = $_REQUEST["Usuarios"]["usuario_activo"];
        
        if (isset($_POST['hasEditable'])) {
            //var_dump($usuario);
            //die();
            /* actualiza el EQUIPO asignado de la cita */
            $modelUsuarios = Usuarios::findOne($usuario);
            $modelUsuarios->usuario_activo = "$activo";
            $modelUsuarios->usuario_email_confirmacion =   $modelUsuarios->usuario_email;
             $modelUsuarios->usuario_password_confirmacion = $modelUsuarios->usuario_password; 

            //var_dump($modelUsuarios->usuario_email);die();
             
            /* retorna la respuesta en formato JSON */
            \Yii::$app->response->format = \yii\web\Response::FORMAT_JSON;
            
            if($modelUsuarios->save()){
                $activo = ($activo) ? "SI" : "NO";
                return ['output'=>$activo, 'message'=>''];
            } else {
                //return ['output'=>'', 'message'=>'Gracias...'];
                var_dump($modelUsuarios->getErrors());
        
            }
        
        }
    }

}
