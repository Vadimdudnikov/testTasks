<?php

namespace app\controllers;

use Yii;
use app\models\UsersIntegrationsJivositeApi;
use app\models\UsersIntegrationsJivositeApiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;

/**
 * UserController implements the CRUD actions for UsersIntegrationsJivositeApi model.
 */
class UserController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['form', 'update', 'index'],
                'rules' => [
                    [
                        'actions' => ['form', 'update', 'index'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all UsersIntegrationsJivositeApi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new UsersIntegrationsJivositeApiSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Creates a new UsersIntegrationsJivositeApi model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionForm()
    {
        $model = new UsersIntegrationsJivositeApi();

        if ($model->load(Yii::$app->request->post())) {
            $model->user_id = Yii::$app->user->id; //добавление к модели id пользователя, который сохраняет код
            if ($model->save()) { // сохранение вставленного js кода
                return $this->redirect(['index']);
            } 
        }

        return $this->render('form', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing UsersIntegrationsJivositeApi model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['index']);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Finds the UsersIntegrationsJivositeApi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return UsersIntegrationsJivositeApi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = UsersIntegrationsJivositeApi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
