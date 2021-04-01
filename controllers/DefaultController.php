<?php

namespace app\controllers;

use app\models\UsersIntegrationsJivositeApi;

/**
 * DefaultController
 */
class DefaultController extends \yii\web\Controller
{
    public function actionView($id)
    {
        $model = UsersIntegrationsJivositeApi::find()->where(['user_id' => $id])->one(); //получение js кода из бд
        return $this->render('view', [
            'model' => $model,
        ]);
    }

}
