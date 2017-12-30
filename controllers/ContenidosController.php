<?php

namespace app\controllers;

use Yii;
use app\models\Contenidos;
use app\models\ContenidosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\controllers\URLFriendly;

/**
 * ContenidosController implements the CRUD actions for Contenidos model.
 */
class ContenidosController extends Controller
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
        ];
    }

    /**
     * Lists all Contenidos models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ContenidosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Contenidos model.
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
     * Creates a new Contenidos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Contenidos();
        $themeBasePath = Yii::getAlias('@app/themes/automovile');


        if(isset($_POST["Contenidos"])){

            $model->attributes = $_POST ['Contenidos'];

            date_default_timezone_set("america/caracas");
            $now_time_UTC = date("Y-m-d H:i:s");
            $model->contenido_fecha_creacion = $now_time_UTC;


            $usuario = Yii::$app->user->identity->usuario_id;
            $model->usuario_id = $usuario;


            $rnd1 = rand(0,999).rand(0,999);
            $rnd2 = rand(0,999).rand(0,999);
            $rnd  = $rnd1.$rnd2;

                
            $uploadedFile1=UploadedFile::getInstance($model,'contenido_imagen_1');
            
            if(!empty($uploadedFile1)) {
                $fileName1 = "$rnd.jpg";  // random number + file name
                $model->contenido_imagen_1 = $fileName1;
                $path1 = $themeBasePath.'/resources/images/contenidos/'.$fileName1;
            }


            if(!empty($model->contenido_categorias)){

                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                foreach($model->contenido_categorias as $keyModelCategorias => $valModelCategorias){
                    array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->contenido_categorias = implode(",", $arrayCategorias);
                
            }

            if(!empty($model->contenido_subcategorias)){
                /* le agrega el sufijo delante con 0 ceros */
                $arraySubCategorias = array();
                foreach($model->contenido_subcategorias as $keyModelSubCategorias => $valModelSubCategorias){
                    array_push($arraySubCategorias, str_pad($valModelSubCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->contenido_subcategorias = implode(",", $arraySubCategorias);
            }

            $URLFriendly = new URLFriendly();
            $model->contenido_http = $URLFriendly->_new($model->contenido_titulo);

            if($model->save()){

                if(!empty($uploadedFile1)){
                    $uploadedFile1->saveAs($path1);
                }
                           
                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Exito");
    
                return $this->redirect(['create']);

            } else {
                var_dump($model->errors);die();
            }   



        }


                    

        return $this->render('create', [
            'model' => $model,
        ]);
        
    }

    /**
     * Updates an existing Contenidos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $imagen1 = $model->contenido_imagen_1;
        $themeBasePath = Yii::getAlias('@app/themes/automovile');


        if(isset($_POST["Contenidos"])){

            $model->attributes = $_POST ['Contenidos'];

            date_default_timezone_set("america/caracas");
            $now_time_UTC = date("Y-m-d H:i:s");
            $model->contenido_fecha_creacion = $now_time_UTC;


            $usuario = Yii::$app->user->identity->usuario_id;
            $model->usuario_id = $usuario;


            $rnd1 = rand(0,999).rand(0,999);
            $rnd2 = rand(0,999).rand(0,999);
            $rnd  = $rnd1.$rnd2;

                
            $uploadedFile1=UploadedFile::getInstance($model,'contenido_imagen_1');
             
            if(!empty($uploadedFile1)) {
                $fileName1 = "$rnd.jpg";  // random number + file name
                $model->contenido_imagen_1 = $fileName1;
                $path1 = $themeBasePath.'/resources/images/contenidos/'.$fileName1;
            } else {
                $model->contenido_imagen_1 = $imagen1;
            }


            if(!empty($model->contenido_categorias)){

                /* le agrega el sufijo delante con 0 ceros */
                $arrayCategorias = array();
                foreach($model->contenido_categorias as $keyModelCategorias => $valModelCategorias){
                    array_push($arrayCategorias, str_pad($valModelCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->contenido_categorias = implode(",", $arrayCategorias);
                
            }

            if(!empty($model->contenido_subcategorias)){
                /* le agrega el sufijo delante con 0 ceros */
                $arraySubCategorias = array();
                foreach($model->contenido_subcategorias as $keyModelSubCategorias => $valModelSubCategorias){
                    array_push($arraySubCategorias, str_pad($valModelSubCategorias, 5, "0", STR_PAD_LEFT));
                }
                $model->contenido_subcategorias = implode(",", $arraySubCategorias);
            }

            $URLFriendly = new URLFriendly();
            $model->contenido_http = $URLFriendly->_new($model->contenido_titulo);


//var_dump($model->contenido_disponibilidad);die();


            if($model->save()){

                if(!empty($uploadedFile1)){
                    $uploadedFile1->saveAs($path1);
                }
                           
                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Exito");

                return $this->redirect(['update', 'id' => $model->contenido_id]);

            } else {
                var_dump($model->errors);die();
            }   



        }


                    

        return $this->render('update', [
            'model' => $model,
        ]);

    }

    /**
     * Deletes an existing Contenidos model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Contenidos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Contenidos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Contenidos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
