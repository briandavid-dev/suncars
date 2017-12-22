<?php

namespace app\controllers;

use Yii;
use app\models\CmsPrincipalcategories;
use app\models\CmsPrincipalcategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CmsPrincipalcategoriesController implements the CRUD actions for CmsPrincipalcategories model.
 */
class CmsprincipalcategoriesController extends Controller
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
     * Lists all CmsPrincipalcategories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmsPrincipalcategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsPrincipalcategories model.
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
     * Creates a new CmsPrincipalcategories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CmsPrincipalcategories();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->principalcategories_id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing CmsPrincipalcategories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->save ()){

                //      Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Actualizado!");
                        Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Categoria Actualizado!");

                    //  return $this->redirect(['view', 'id' => $model->idioma_id]);
                    return $this->render('update', [
                            'model' => $model,
                                ]);
                        //$this->redirect ( array (
                            //  'update',
                        //      'id' => $model->idioma_id
                    //  ) );
                    }else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing CmsPrincipalcategories model.
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
     * Finds the CmsPrincipalcategories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsPrincipalcategories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsPrincipalcategories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
