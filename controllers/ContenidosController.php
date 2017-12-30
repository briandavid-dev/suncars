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
            $rnd3 = rand(0,999).rand(0,999);
            $rnd4 = rand(0,999).rand(0,999);
            $rnd5 = rand(0,999).rand(0,999);          
            

            var_dump($rnd1); die();
                
            $uploadedFile1=UploadedFile::getInstance($model,'contenido_imagen_1');
            
            if(!empty($uploadedFile1)) {
                $fileName1 = "$rnd1.jpg";  // random number + file name
                $model->contenido_imagen_1 = $fileName1;
                $path1 = $themeBasePath.'/resources/images/contenidos/'.$fileName1;
            }

             $uploadedFile2=UploadedFile::getInstance($model,'contenido_imagen_2');
            
            if(!empty($uploadedFile2)) {
                $fileName2 = "$rnd2.jpg";  // random number + file name
                $model->contenido_imagen_2 = $fileName2;
                $path2 = $themeBasePath.'/resources/images/contenidos/'.$fileName2;
            }

            if(!empty($uploadedFile3)) {
                $fileName3 = "$rnd3.jpg";  // random number + file name
                $model->contenido_imagen_3 = $fileName3;
                $path3 = $themeBasePath.'/resources/images/contenidos/'.$fileName3;
            }

            $uploadedFile4=UploadedFile::getInstance($model,'contenido_imagen_4');
            
            if(!empty($uploadedFile4)) {
                $fileName4 = "$rnd4.jpg";  // random number + file name
                $model->contenido_imagen_4 = $fileName4;
                $path4 = $themeBasePath.'/resources/images/contenidos/'.$fileName4;
            }


             $uploadedFile5=UploadedFile::getInstance($model,'contenido_imagen_5');
            
            if(!empty($uploadedFile5)) {
                $fileName5 = "$rnd5.jpg";  // random number + file name
                $model->contenido_imagen_5 = $fileName5;
                $path5 = $themeBasePath.'/resources/images/contenidos/'.$fileName5;
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

            var_dump($model->attributes); die();

            $URLFriendly = new URLFriendly();
            $model->contenido_http = $URLFriendly->_new($model->contenido_titulo);

            if($model->save()){

                if(!empty($uploadedFile1)){
                    $uploadedFile1->saveAs($path1);
                }

                if(!empty($uploadedFile2)){
                    $uploadedFile2->saveAs($path2);
                }

                if(!empty($uploadedFile3)){
                    $uploadedFile3->saveAs($path3);
                }

                if(!empty($uploadedFile4)){
                    $uploadedFile4->saveAs($path4);
                }

                if(!empty($uploadedFile5)){
                    $uploadedFile5->saveAs($path5);
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
        $imagen2 = $model->contenido_imagen_2;
        $imagen3 = $model->contenido_imagen_3;
        $imagen4 = $model->contenido_imagen_4;
        $imagen5 = $model->contenido_imagen_5;

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
            $rnd3 = rand(0,999).rand(0,999);
            $rnd4 = rand(0,999).rand(0,999);
            $rnd5 = rand(0,999).rand(0,999);

            
           
                
            $uploadedFile1=UploadedFile::getInstance($model,'contenido_imagen_1');
             
            if(!empty($uploadedFile1)) {
                $fileName1 = "$rnd1.jpg";  // random number + file name
                $model->contenido_imagen_1 = $fileName1;
                $path1 = $themeBasePath.'/resources/images/contenidos/'.$fileName1;
            } else {
                $model->contenido_imagen_1 = $imagen1;
            }

            $uploadedFile2=UploadedFile::getInstance($model,'contenido_imagen_2');
            
            if(!empty($uploadedFile2)) {
                $fileName2 = "$rnd2.jpg";  // random number + file name
                $model->contenido_imagen_2 = $fileName2;
                $path2 = $themeBasePath.'/resources/images/contenidos/'.$fileName2;
            }   else {
                $model->contenido_imagen_2 = $imagen2;
            }

            $uploadedFile3=UploadedFile::getInstance($model,'contenido_imagen_3');

            if(!empty($uploadedFile3)) {
                $fileName3 = "$rnd3.jpg";  // random number + file name
                $model->contenido_imagen_3 = $fileName3;
                $path3 = $themeBasePath.'/resources/images/contenidos/'.$fileName3;
            }   else {
                $model->contenido_imagen_3 = $imagen3;
            }


            $uploadedFile4=UploadedFile::getInstance($model,'contenido_imagen_4');
            
            if(!empty($uploadedFile4)) {
                $fileName4 = "$rnd4.jpg";  // random number + file name
                $model->contenido_imagen_4 = $fileName4;
                $path4 = $themeBasePath.'/resources/images/contenidos/'.$fileName4;
            }   else {
                $model->contenido_imagen_4 = $imagen4;
            }


             $uploadedFile5=UploadedFile::getInstance($model,'contenido_imagen_5');
            
            if(!empty($uploadedFile5)) {
                $fileName5 = "$rnd5.jpg";  // random number + file name
                $model->contenido_imagen_5 = $fileName5;
                $path5 = $themeBasePath.'/resources/images/contenidos/'.$fileName5;
            }   else {
                $model->contenido_imagen_5 = $imagen5;
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
                 
                 if(!empty($uploadedFile2)){
                    $uploadedFile2->saveAs($path2);
                }

                if(!empty($uploadedFile3)){
                    $uploadedFile3->saveAs($path3);
                }

                if(!empty($uploadedFile4)){
                    $uploadedFile4->saveAs($path4);
                }

                if(!empty($uploadedFile5)){
                    $uploadedFile5->saveAs($path5);
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
