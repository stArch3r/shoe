<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Delivery */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="delivery-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'deliveryDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cost')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
