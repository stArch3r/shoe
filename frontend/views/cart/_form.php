<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cart-form" style="margin-top:200px;">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'quantity')->textInput() ?>

    <?= $form->field($model, 'totalPrice')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
