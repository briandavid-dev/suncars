<?php

namespace app\controllers;

use Yii;
use app\models\Banners;
use app\models\BannersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * BannersController implements the CRUD actions for Banners model.
 */
class BannersController extends Controller
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
     * Lists all Banners models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new BannersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Banners model.
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
     * Creates a new Banners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Banners();

        $themeBasePath = Yii::getAlias('@app/themes/automovile');


        if (isset ( $_POST ['Banners'] )) {
  
  // creamos un valor aleatorio
                $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['Banners'];
    
    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($model,'banner_ruta_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $model->banner_ruta_imagen = $fileName1;
                    $path1 = $themeBasePath.'/resources/images/banners/'.$fileName1;
                }

          if ($model->save ()){

                    if(!empty($uploadedFile1)){
                        $uploadedFile1->saveAs($path1);
                    }
                    
                    if(!empty($uploadedFile2)){
                        $uploadedFile2->saveAs($path2);
                    }
                               
                        //  Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Banner Guardado.");
                    //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");
    
                    return $this->redirect(['create']);

                } else {
                    var_dump($model->errors);die();
                }
            
        
        }
  
        return $this->render('create', ['model' => $model]);
    }

    /**
     * Updates an existing Banners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $themeBasePath = Yii::getAlias('@app/themes/automovile');

        $imagenActual = $model->banner_ruta_imagen;


        if (isset ( $_POST ['Banners'] )) {
  
  // creamos un valor aleatorio
                $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['Banners'];
    
    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($model,'banner_ruta_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $model->banner_ruta_imagen = $fileName1;
                    $path1 = $themeBasePath.'/resources/images/banners/'.$fileName1;
                } else {
                    $model->banner_ruta_imagen = $imagenActual;
                }

          if ($model->save ()){

                    if(!empty($uploadedFile1)){
                        $uploadedFile1->saveAs($path1);
                    }
                    
                    if(!empty($uploadedFile2)){
                        $uploadedFile2->saveAs($path2);
                    }
                               
                        //  Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Banner Actualizado.");
                    //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");
    
                    return $this->redirect(['index']);

                } else {
                    var_dump($model->errors);die();
                }
            
        
        }
  
        return $this->render('create', ['model' => $model]);

    }

    /**
     * Deletes an existing Banners model.
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
     * Finds the Banners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Banners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Banners::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
