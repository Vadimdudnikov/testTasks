<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersIntegrationsJivositeApi */

$this->title = 'Изменить Users Integrations Jivosite Api: ' . $model->user_id;
$this->params['breadcrumbs'][] = ['label' => 'Users Integrations Jivosite Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->user_id, 'url' => ['view', 'id' => $model->user_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="users-integrations-jivosite-api-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
