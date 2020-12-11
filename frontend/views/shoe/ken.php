<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cart;
use yii\helpers\ArrayHelper;
use frontend\models\Products;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoe = ArrayHelper::map(Cart::find()->all(), 'shoeId', 'amount');
// $shoey = ArrayHelper::map(Products::find()->all(), 'shoeId', 'name');

$products = Products::find()->where(['category'=>'mens'])->all();
$shoe=Cart::find()->JoinWith('shoe')->all();


?>
<div class="ken" style="margin-top:130px;">  

    <?php $form = ActiveForm::begin(); ?>
  
   

   <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId, 'readonly'=>true])->label(false) ?>

   
        <div class="form-group">
            <?= Html::submitButton('proceed to checkout ', ['class' => 'btn btn-danger']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ken -->
<div class="row">
      <div class="container-fluid">
     <?php foreach($products as $product) { ?>
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">

        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../uploads/<?= $product->image?>"  alt="">
           
         </div>
         <h4 class="card-title"><?=$product->name?>></h4>
         <p class="card-text"><?=$product->amount?></p>
         <a href="<?= Url::to(['shoe/ken', 'shoeId'=>$product->id,'totalPrice'=>$product->amount])?>" class="btn btn-primary ken" role="button">Add to Cart</a>
        

        
         </div>
        <div>
        </div>
        </div>
        </div>
      
       <?php } ?>
  </div>
