<?php

namespace app\controllers;

use Yii;
use app\models\CmsCategories;
use app\models\CmsCategoriesSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * CmsCategoriesController implements the CRUD actions for CmsCategories model.
 */
class CmscategoriesController extends Controller
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
     * Lists all CmsCategories models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CmsCategoriesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CmsCategories model.
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
     * Creates a new CmsCategories model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()

    {



        $model = new CmsCategories();

       

        if (isset ( $_POST ['CmsCategories'] )) {
                    $model->attributes = $_POST ['CmsCategories'];

                    if ($model->save ()){


             		/* actualiza el codigo del post */
        			$modelCitas = CmsCategories::findOne($model->categorie_id);
        			$codigo = str_pad($model->categorie_id, 5, "0", STR_PAD_LEFT);
        			$modelCitas->categorie_codigo = "$codigo";
        			
         			if ($modelCitas->save ()){
                     }

                    //  Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Guardado!");
                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Categoría Guardado!");
                //Yii::$app->session->setFlash('Exitoso', "<span class='fa fa-exclamation-triangle '></span>Idioma Guardado!");

                return $this->redirect(['create']);

                    }
                    else {
                  var_dump($model->getErrors());
        

                    }
                }

        
             return $this->render('create', [
                'model' => $model
                  ]);

    }

    /**
     * Updates an existing CmsCategories model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

       



        if (isset ( $_POST ['CmsCategories'] )) {
                $model->attributes = $_POST ['CmsCategories'];
                if ($model->save ()){
                	
                	/* actualiza el codigo del post */
                	$modelCitas = CmsCategories::findOne($model->categorie_id);
                	$codigo = str_pad($model->categorie_id, 5, "0", STR_PAD_LEFT);
                	$modelCitas->categorie_codigo = "$codigo";

            //      Yii::app()->user->setFlash('success', "<span class='fa fa-check'></span> Idioma Actualizado!");
              Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Categoría Actualizado!");

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
     * Deletes an existing CmsCategories model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
       


        try {
            $this->findModel($id)->delete();
        Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Categoría Eiminado!");

        } catch(\Exception $e){
            //throw new \yii\web\HttpException(405, 'Error saving model');
            Yii::$app->session->setFlash('exception', "<span class='fa fa-exclamation-triangle '></span> No se puede eliminar el registro. Está asociado a otra tabla de la Base de Datos.");
        }



        return $this->redirect(['index']);

    }

    /**
     * Finds the CmsCategories model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CmsCategories the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CmsCategories::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
