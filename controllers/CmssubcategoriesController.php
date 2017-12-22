<?php

namespace app\controllers;

use Yii;
use app\models\CmsSubcategories;
use app\models\CmsSubcategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CmsSubcategoriesController implements the CRUD actions for CmsSubcategories model.
 */
class CmssubcategoriesController extends Controller
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
     * Lists all CmsSubcategories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmsSubcategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsSubcategories model.
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
     * Creates a new CmsSubcategories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new CmsSubcategories();

			if (isset ( $_POST ['CmsSubcategories'] )) {
			
 				$model->attributes = $_POST ['CmsSubcategories'];
 				
 				$URLFriendly = new URLFriendly();
 				$model->subcategorie_http = $URLFriendly->_new($model->subcategorie_name);
 				
 				
                if ($model->save ()){

                   	$modelCitas = CmsSubcategories::findOne($model->subcategorie_id);
		       		$codigo = str_pad($model->subcategorie_id, 5, "0", STR_PAD_LEFT);
		       		$modelCitas->subcategorie_codigo = "$codigo";
		        	if ($modelCitas->save ()){
         	
                 	}

               		Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Sub-Categoría Guardado!");
               		return $this->redirect(['create']);

                }
			}

        
             return $this->render('create', [
                'model' => $model,
                  ]);

    }

    /**
     * Updates an existing CmsSubcategories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

      



        if (isset ( $_POST ['CmsSubcategories'] )) {
                $model->attributes = $_POST ['CmsSubcategories'];
                if ($model->save ()){

            //      Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Actualizado!");
              Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Sub-Categoría Actualizado!");

            //  return $this->redirect(['view', 'id' => $model->idioma_id]);
            return $this->render('update', [
                'model' => $model,
                  ]);
                    //$this->redirect ( array (
                        //  'update',
                    //      'id' => $model->idioma_id
                //  ) );
                }
            }
          return $this->render('update', [
              'model' => $model,
                ]);


    }

    /**
     * Deletes an existing CmsSubcategories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {


        try {
            $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Sub-Categoría Eiminado!");

        } catch(\Exception $e){
            //throw new \yii\web\HttpException(405, 'Error saving model');
            Yii::$app->session->setFlash('exception', "<span class='fa fa-exclamation-triangle '></span> No se puede eliminar el registro. Está asociado a otra tabla de la Base de Datos.");
        }



        return $this->redirect(['index']);

    }

    /**
     * Finds the CmsSubcategories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsSubcategories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsSubcategories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
