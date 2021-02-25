<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cartitems;
use yii\helpers\ArrayHelper;
use frontend\models\Product;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoe = ArrayHelper::map(Cartitems::find()->all(), 'productId', 'quanity');
// $shoey = ArrayHelper::map(Products::find()->all(), 'shoeId', 'name');

$products = Product::find()->all();
$shoe=Cartitems::find()->JoinWith('product')->all();


?>
<div class="ken" style="margin-top:130px;">  

    <?php $form = ActiveForm::begin(); ?>
  
   

   <?= $form->field($model, 'productId')->hiddenInput(['value' => $productId, 'readonly'=>true])->label(false) ?>

   
        <div class="form-group">
            <?= Html::submitButton('proceed to checkout ', ['class' => 'btn btn-danger']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ken -->
<?php foreach($products as $product) { ?>
<div class="row">
      <div class="container-fluid">
   
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">

        <div class="card mb-2">
        <div class="item-gallery"> <img class="img-responsive" style="height:250px; witdth:auto;" src="<?=yii::$app->request->baseUrl.'/'.$product->productimages[0]->imagePath?>">
           
         </div>
         <h4 class="card-title"><?=$product->productName?>></h4>
         <p class="card-text"><?=$product->basePrice?></p>
         <a href="<?= Url::to(['shoe/ken', 'productId'=>$product->productId,'totalPrice'=>$product->basePrice])?>" class="btn btn-primary ken" role="button">Add to Cart</a>
        

        
         </div>
        <div>
        </div>
        </div>
        </div>
      </div>
      </div>
     
  </div>
  <?php } ?>