<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'user_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_date_regestration')->textInput() ?>

    <?= $form->field($model, 'user_date_birth')->textInput() ?>

    <?= $form->field($model, 'user_male')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_avatar')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_town')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_status')->textInput() ?>

    <?= $form->field($model, 'user_email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'user_password')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
