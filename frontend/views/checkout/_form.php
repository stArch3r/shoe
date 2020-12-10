<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cart;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */
/* @var $form yii\widgets\ActiveForm */
$malindi=Cart::find()->JoinWith('shoe')->sum('amount');

?>
<html>
<meta charset="utf-8">
 
<head> <title> <h1 font-family:"Tangerine"> my-Duka</h1>
</title>
<?php $this->beginPage() ?>

<?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<div class="row">
<div class="checkout-form" style="margin-top:20px;">
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('save', ['class' => 'btn btn-success']) ?>
        
    </div>

    <?php ActiveForm::end(); ?>
    </div>
</div>
<div class="col-md-4 ">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
                <button onclick="window.location.href='shop';" class="btn btn-dark btn-lg btn-block rounded-0">Continue Shopping</button>
                <div class="card-header border-bottom">
                  Order Summary
                </div>
                <div class="row">
                  <div class="col-md-6">
                   <!-- <p> Sub Total:</p>    
                   <p>Tax:</p> -->
                  <h5>Total: Ksh<?=$malindi?>
                  </h5>
                  </div>

</div>
</div>