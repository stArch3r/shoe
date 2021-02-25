<?php
use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use frontend\models\Product;
use frontend\models\Cartitems;
use frontend\models\Deposit;
use frontend\models\Productimages;
use yii\helpers\StringHelper;
use frontend\models\Productcart;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
$cart= Cartitems::find()->joinWith('cart')->where(['userId'=>Yii::$app->user->id])->joinWith('product')->joinWith('productimages')->all();

$cartPrice = Product::find()->sum('basePrice');
$malindi=Cartitems::find()->JoinWith('product')->sum('baseprice');
$cart= Cartitems::find()->joinWith('cart')->where(['userId'=>Yii::$app->user->id])->joinWith('product')->joinWith('productimages')->all();
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <!DOCTYPE html>
<html>

<head> <title> <h1> my-Duka</h1>
</title>
<head>

</head>
<body>

  <div class="container" style="margin-top:130px;">
     <div class="card shopping-cart">
              <div class="card-header bg-dark text-light">
                  <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  Shipping cart
                  <a href="" class="btn btn-outline-info btn-sm pull-right">Continue shopping</a>
                  <div class="clearfix"></div>
              </div>
              <div class="card-body">
                      <!-- PRODUCT -->
                      <div class="row">
                      <?php  foreach($cart as $product)  { ?>
                      
    
                          <div class="col-12 col-sm-12 col-md-2 text-center ">
                                  <!-- <img class="img-responsive" src="../uploads/"     alt="prewiew" width="120" height="80"> -->
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong><?= $product->product->productName?></strong></h4>
                              <h4>
                                  <small><?= $product->product->productDesc?></small>
                              </h4>
                          </div>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row item-detail">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right prices" style="padding-top: 5px" >
                                  <h6><strong id="product"><?=$product->product->basePrice ?><<span class="text-muted">x</span></strong></h6>
                              </div>
                              
                              <div class="col-2 col-sm-2 col-md-2 text-right">
                               
                                  <button type="button" class="btn btn-outline-danger btn-xs">
                                  
                                      <i class="fa fa-trash" id="sub" aria-hidden="true"></i>
                                  </button>
                              </div>
                    
                          </div>
                
                    
                      <?php } ?>
                      
                      <hr>
                      <!-- END PRODUCT -->
                      <!-- PRODUCT -->
                    
                      <!-- END PRODUCT -->
                  <div class="pull-right">
                      <a href="" class="btn btn-outline-secondary pull-right">
                          Update shopping cart
                      </a>
                  </div>
                      </div>
              </div>
              <div class="card-footer">      
                  <div class="pull-right" style="margin: 10px">
                      <!-- <a href="http://localhost/shoe/shoe/checkout" class="btn btn-success pull-right">Checkout</a>  -->
                      <select id="total<?$product->productId?>" class="form-control form-control-sm" style="width:70px;">
                            <option><?=$cartPrice?> </option>
                            <option> 2 </option>
                            <option> 3 </option>
                        </select>
                        <a href="<?=Url::to(['/shoe/checkout'])?>" baseUrl="<?= Yii::$app->request->baseUrl?>" productId="?=$product->productId?>" userId="<?= Yii::$app->user->id?>" class="btn btn-lg btn-outline-primary text-uppercase addtoorder"> <i class="fas fa-shopping-cart"></i> Checkout </a>

                        
                      <div class="pull-right" style="margin: 5px">
                      <h5>Total: Ksh<?=$malindi?>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
  </div>
</body>
</html>