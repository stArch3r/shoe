<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productuom */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productuom-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'uomDesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'uomPrice')->textInput() ?>

    <?= $form->field($model, 'quanitty')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
