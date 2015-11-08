<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'news_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'news_img')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'news_date')->textInput() ?>

    <?= $form->field($model, 'news_author')->textInput() ?>

    <?= $form->field($model, 'news_game_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
