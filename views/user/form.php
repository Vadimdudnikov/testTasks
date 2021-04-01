<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\UsersIntegrationsJivositeApi */

$this->title = 'Добавить Users Integrations Jivosite Api';
$this->params['breadcrumbs'][] = ['label' => 'Users Integrations Jivosite Apis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-integrations-jivosite-api-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
