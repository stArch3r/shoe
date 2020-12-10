<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cart;
use yii\helpers\ArrayHelper;
use frontend\models\Products;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoe = ArrayHelper::map(Cart::find()->all(), 'shoeId', 'amount');
// $shoey = ArrayHelper::map(Products::find()->all(), 'shoeId', 'name');


?>
<div class="ken" style="margin-top:270px;">  

    <?php $form = ActiveForm::begin(); ?>
  
   

   <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId, 'readonly'=>true])->label(false) ?>

   
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ken -->
