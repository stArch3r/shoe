<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productuom */
/* @var $form ActiveForm */
?>
<div class="uom">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'uomDesc') ?>
        <?= $form->field($model, 'uomPrice') ?>
        <?= $form->field($model, 'quanitty') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- uom -->
