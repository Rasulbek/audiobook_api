<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\ChapterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="chapters-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'book_id') ?>

    <?= $form->field($model, 'name') ?>

    <?= $form->field($model, 'num_of_chapter') ?>

    <?= $form->field($model, 'file_size') ?>

    <?php // echo $form->field($model, 'duration') ?>

    <?php // echo $form->field($model, 'filename') ?>

    <?php // echo $form->field($model, 'is_free') ?>

    <?php // echo $form->field($model, 'more') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
