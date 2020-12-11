<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\User;
use yii\helpers\ArrayHelper;
use frontend\models\Products;
use frontend\models\Cart;

/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */
/* @var $form yii\widgets\ActiveForm */
$userId = user::find()->where(['id'=>Yii::$app->user->id])->one();
$products = ArrayHelper::map(cart::find()->all(), 'quantity', 'totalPrice');
$ken=Products::find()->where(['status'=>1])->all();
$cartTotal=Cart::find()->asArray()->all();
$malindi=Cart::find()->JoinWith('shoe')->sum('amount');
$lists=Cart::find()->joinWith('shoe')->all();
?>
<div class="row">
<div class="checkout-form" style="margin-top:20px;">
<div class="col-md-8">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'userId')->hiddenInput(['value' => $userId->id, 'readonly'=>true])->label(false)  ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'location')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
<div class="col-md-4">
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
</div>