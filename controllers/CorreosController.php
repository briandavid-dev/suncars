<?php

namespace app\controllers;

use Yii;
use app\models\Correos;
use app\models\CorreosSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CorreosController implements the CRUD actions for Correos model.
 */
class CorreosController extends Controller
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
     * Lists all Correos models.
     * @return mixed
     */
    public function actionIndex()
    {

        $searchModel = new CorreosSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Correos model.
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
     * Creates a new Correos model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Correos();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->correo_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Correos model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        $themeBasePath = Yii::getAlias('@app/themes/rigal');



        if (isset ( $_POST ['Correos'] )) {

  // creamos un valor aleatorio
               $rnd = rand(0,999).rand(0,999);
                $rnd2 = rand(0,999).rand(0,999);

                $model->attributes = $_POST ['Correos'];
    

          if ($model->save ()){

                    if(!empty($uploadedFile1)){
                        $uploadedFile1->saveAs($path1);
                    }
                    
                    if(!empty($uploadedFile2)){
                        $uploadedFile2->saveAs($path2);
                    }
                               
                        //  Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
                    Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Correo Actualizado!");
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
     * Deletes an existing Correos model.
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
     * Finds the Correos model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Correos the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Correos::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
