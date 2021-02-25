<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ProductuomSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="productuom-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'uomId') ?>

    <?= $form->field($model, 'uomDesc') ?>

    <?= $form->field($model, 'uomPrice') ?>

    <?= $form->field($model, 'quanitty') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
