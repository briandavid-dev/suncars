<?php

namespace app\controllers;

use Yii;
use app\models\CmsGeneralPages;
use app\models\CmsGeneralPagesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * CmsGeneralPagesController implements the CRUD actions for CmsGeneralPages model.
 */
class CmsgeneralpagesController extends Controller
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
     * Lists all CmsGeneralPages models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmsGeneralPagesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsGeneralPages model.
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
     * Creates a new CmsGeneralPages model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CmsGeneralPages();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->general_pages_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CmsGeneralPages model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $themeBasePath = Yii::getAlias('@app/themes/rigal');

 
                


            if (isset ( $_POST ['CmsGeneralPages'] )) {

                // creamos un valor aleatorio
                $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['CmsGeneralPages'];
                
                if(!empty($model->post_date)){
                    $model->post_date = date('Y-m-d', strtotime($model->post_date));
                }
                
     
                //proceso para guardar imagen 1 
                $uploadedFile1=UploadedFile::getInstance($model,'general_pages_banner');
             
                if(!empty($uploadedFile1)) {
                    $fileName1 = "$rnd.jpg";  // random number + file name
                    $model->general_pages_banner = $fileName1;
                    $path1 = $themeBasePath.'/resources/images/banners/'.$fileName1;
                }

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
     * Deletes an existing CmsGeneralPages model.
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
     * Finds the CmsGeneralPages model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsGeneralPages the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsGeneralPages::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
