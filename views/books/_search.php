<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\BookSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="books-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'author') ?>

    <?= $form->field($model, 'published_year') ?>

    <?= $form->field($model, 'publisher') ?>

    <?php // echo $form->field($model, 'edition') ?>

    <?php // echo $form->field($model, 'ganre') ?>

    <?php // echo $form->field($model, 'more') ?>

    <?php // echo $form->field($model, 'photo') ?>

    <?php // echo $form->field($model, 'chapters') ?>

    <?php // echo $form->field($model, 'raiting') ?>

    <?php // echo $form->field($model, 'language') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
