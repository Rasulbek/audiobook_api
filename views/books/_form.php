<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Books */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'author')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'published_year')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'publisher')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'edition')->textInput() ?>

    <?= $form->field($model, 'ganre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'more')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chapters')->textInput() ?>

    <?= $form->field($model, 'raiting')->textInput() ?>

    <?= $form->field($model, 'language')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
