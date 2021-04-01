<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersIntegrationsJivositeApiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Users Integrations Jivosite Apis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-integrations-jivosite-api-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            'js',
            ['attribute' => 'update', 'format' => 'html', 'value' => function($model) {return '<a href="update?id='.$model->user_id.'">Изменить</a>';}]
        ],
    ]); ?>


</div>
