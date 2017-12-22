<?php

namespace app\controllers;

use Yii;
use app\models\CmsBanners;
use app\models\CmsBannersSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CmsBannersController implements the CRUD actions for CmsBanners model.
 */
class CmsbannersController extends Controller
{
    public $layout = 'panel';/**
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
     * Lists all CmsBanners models.
     * @return mixed
     */
    public function actionIndex()
    {


        $searchModel = new CmsBannersSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsBanners model.
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
     * Creates a new CmsBanners model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {


        $model = new CmsBanners();
            $themeBasePath = Yii::getAlias('@app/themes/rigal');

        if (isset ( $_POST ['CmsBanners'] )) {
  
  // creamos un valor aleatorio
               $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['CmsBanners'];
    
    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($model,'banner_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $model->banner_imagen = $fileName1;
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
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Banner Guardado!");
                    //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");
    
                    return $this->redirect(['create']);

                } else {
                    var_dump($model->errors);die();
                }
            
        
    }
  
        return $this->render('create', ['model' => $model]);
    }
    /**
     * Updates an existing CmsBanners model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {


        $model = $this->findModel($id);


        $themeBasePath = Yii::getAlias('@app/themes/rigal');



        if (isset ( $_POST ['CmsBanners'] )) {

  // creamos un valor aleatorio
               $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['CmsBanners'];
    
    //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($model,'banner_imagen');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $model->banner_imagen = $fileName1;
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
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Banner Actualizado!");
                    //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");
    
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
     * Deletes an existing CmsBanners model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    { try {
        $this->findModel($id)->delete();
Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span>Banner Eiminado!");

      } catch(\Exception $e){
        //throw new \yii\web\HttpException(405, 'Error saving model');
        Yii::$app->session->setFlash('exception', "<span class='fa fa-exclamation-triangle '></span> No se puede eliminar el registro. Está asociado a otra tabla de la Base de Datos.");
    }



      return $this->redirect(['index']);

    }

    /**
     * Finds the CmsBanners model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsBanners the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsBanners::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
