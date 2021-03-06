<?php

namespace app\controllers;

use Yii;
use app\models\Categorias;
use app\models\CategoriasSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use app\controllers\URLFriendly;

/**
 * CategoriasController implements the CRUD actions for Categorias model.
 */
class CategoriasController extends Controller
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
     * Lists all Categorias models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CategoriasSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Categorias model.
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
     * Creates a new Categorias model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Categorias();

        if(isset($_POST["Categorias"])){

            $model->attributes = $_POST["Categorias"];

            $URLFriendly = new URLFriendly();
            $model->categoria_http = $URLFriendly->_new($model->categoria_nombre);


            if ($model->save()) {

            /* actualiza el codigo del post */
                    $modelCategorias = Categorias::findOne($model->categoria_id);
                    $codigo = str_pad($model->categoria_id, 5, "0", STR_PAD_LEFT);
                    $modelCategorias->categoria_codigo = "$codigo";
                    
                    if ($modelCategorias->save ()){
                     }

            Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Exito");
            return $this->redirect(['create']);

            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
        
    }

    /**
     * Updates an existing Categorias model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if(isset($_POST["Categorias"])){

            $model->attributes = $_POST["Categorias"];

            $URLFriendly = new URLFriendly();
            $model->categoria_http = $URLFriendly->_new($model->categoria_nombre);


            if ($model->save()) {

            /* actualiza el codigo del post */
                    $modelCategorias = Categorias::findOne($model->categoria_id);
                    $codigo = str_pad($model->categoria_id, 5, "0", STR_PAD_LEFT);
                    $modelCategorias->categoria_codigo = "$codigo";
                    
                    if ($modelCategorias->save ()){
                     }

                Yii::$app->session->setFlash('success', "<span class='fa fa-check'></span> Exito");
                return $this->redirect(['update', 'id' => $model->categoria_id]);

            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);


        
    }

    /**
     * Deletes an existing Categorias model.
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
     * Finds the Categorias model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Categorias the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Categorias::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
