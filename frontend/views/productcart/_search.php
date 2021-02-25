<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProductcartSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productcart-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cartId') ?>

    <?= $form->field($model, 'userId') ?>

    <?= $form->field($model, 'total') ?>

    <?= $form->field($model, 'cartStatus') ?>

    <?= $form->field($model, 'createdAt') ?>

    <?php // echo $form->field($model, 'createdBy') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
