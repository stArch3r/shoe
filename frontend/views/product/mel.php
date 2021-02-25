<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cartitems */
/* @var $form ActiveForm */
?>
<div class="mel">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'cartId') ?>
        <?= $form->field($model, 'productId') ?>
        <?= $form->field($model, 'quantity') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- mel -->
