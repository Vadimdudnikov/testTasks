<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UsersIntegrationsJivositeApi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-integrations-jivosite-api-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'js')->textArea(['rows' => 15]) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
