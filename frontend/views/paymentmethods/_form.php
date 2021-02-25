<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Paymentmethods */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="paymentmethods-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'paymentMethodDesc')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
