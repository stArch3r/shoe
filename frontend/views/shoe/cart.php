<?php
use yii\helpers\Html;
use frontend\models\Products;

$products=Products::find()->where(['status'=>1])->all();


/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <!DOCTYPE html>
<html>
    
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <script src="https://use.fontawesome.com/c560c025cf.js"></script>
  <link rel="stylesheet" type="text/css" href="css/cart.css">
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
 
  
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
                  <a href="" class="btn btn-outline-info btn-sm pull-right">Continiu shopping</a>
                  <div class="clearfix"></div>
              </div>
              <div class="card-body">
                      <!-- PRODUCT -->
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-2 text-center">
                                  <img class="img-responsive" src="../uploads/<?= $product->image?>" alt="prewiew" width="120" height="80">
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong>Product Name</strong></h4>
                              <h4>
                                  <small>Product description</small>
                              </h4>
                          </div>
                          <?php foreach($carts as $cart)  { ?>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                  <h6><strong><?=$cart->amount?> <span class="text-muted">x</span></strong></h6>
                              </div>
                              <div class="col-4 col-sm-4 col-md-4">
                                  <div class="quantity">
                                      <input type="button" value="+" class="plus">
                                      <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                             size="4">
                                      <input type="button" value="-" class="minus">
                                  </div>
                              </div>
                              <div class="col-2 col-sm-2 col-md-2 text-right">
                                  <button type="button" class="btn btn-outline-danger btn-xs">
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <?php } ?>
                      <hr>
                      <!-- END PRODUCT -->
                      <!-- PRODUCT -->
                      <div class="row">
                          <div class="col-12 col-sm-12 col-md-2 text-center">
                                  <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong>Product Name</strong></h4>
                              <h4>
                                  <small>Product description</small>
                              </h4>
                          </div>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                  <h6><strong>3500 <span class="text-muted">x</span></strong></h6>
                              </div>
                              <div class="col-4 col-sm-4 col-md-4">
                                  <div class="quantity">
                                      <input type="button" value="+" class="plus">
                                      <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                             size="4">
                                      <input type="button" value="-" class="minus">
                                  </div>
                              </div>
                              <div class="col-2 col-sm-2 col-md-2 text-right">
                                  <button type="button" class="btn btn-outline-danger btn-xs">
                                      <i class="fa fa-trash" aria-hidden="true"></i>
                                  </button>
                              </div>
                          </div>
                      </div>
                      <hr>
                      <!-- END PRODUCT -->
                  <div class="pull-right">
                      <a href="" class="btn btn-outline-secondary pull-right">
                          Update shopping cart
                      </a>
                  </div>
              </div>
              <div class="card-footer">
                
                          
                  
                  <div class="pull-right" style="margin: 10px">
                      <a href="http://localhost/shoe/shoe/checkout" class="btn btn-success pull-right">Checkout</a>
                      <div class="pull-right" style="margin: 5px">
                          Total price: <b>7000 KES</b>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
  </div>
</body>
</html>