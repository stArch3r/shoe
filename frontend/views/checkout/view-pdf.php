<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Cart;
use yii\helpers\ArrayHelper;
use frontend\models\Products;
use common\models\User;


/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */

$products = ArrayHelper::map(cart::find()->all(), 'quantity', 'totalPrice');
$ken=Products::find()->where(['status'=>1])->all();
$cartTotal=Cart::find()->asArray()->all();
$malindi=Cart::find()->JoinWith('shoe')->sum('amount');
$lists=Cart::find()->joinWith('shoe')->all();

$this->title = 'DUKA SHOEZ INVOICE' ;

$this->params['breadcrumbs'][] = ['label' => 'Checkouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?> </h1>

    <p>
            
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'productId',
            'userId',
            'email:email',
            'location',
        ],
    ]) ?>

</div>
<div class="container">
  <div class="card">
<div class="card-header">
Invoice
<strong>12/11/20</strong> 
  <span class="float-right"> <strong>Status:</strong> Confirmed </span>

</div>
<div class="card-body">
<div class="row mb-4">
<div class="col-sm-6">
<h6 class="mb-3">From: duka shoe</h6>
<div>
<strong>Duka Shoez</strong>
</div>
<div>NAIROBi </div>
<div>Karen Business park</div>
<div>Email: info@duka.com</div>
<div>Phone: +255 444 666 3333</div>
</div>

<div class="col-sm-6">
<h6 class="mb-3">To:</h6>
<div>
<strong> </strong>
</div>
<div><?=Yii::$app->user->identity->username?></div>
<div></div>
<div><?=Yii::$app->user->identity->email?></div>
<div>Phone: 2547867676776</div>
</div>



</div>

</div>

</div>
</div>
</div>
                         <div class="row">
                      <?php  foreach($lists as $cart) { ?>
                        
    
                          <div class="col-12 col-sm-12 col-md-2 text-center ">
                                  <img class="img-responsive" src="<?= Yii::$app->request->baseUrl.'/'.$cart->shoe->image?>"     alt="prewiew" width="120" height="80">
                          </div>
                          <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                              <h4 class="product-name"><strong><?= $cart->shoe->name?></strong></h4>
                              <h4>
                                  <small><?= $cart->shoe->description?></small>
                              </h4>
                          </div>
                          <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row item-detail">
                              <div class="col-3 col-sm-3 col-md-6 text-md-right prices" style="padding-top: 5px" >
                                  <h6><strong id="product"><?=$cart->shoe->amount?>  <span class="text-muted">x</span></strong></h6>
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
                
                  </div>
                      </div>
              </div>
              <div class="card-footer">      
                  <div class="ken" style="margin: 10px">
                      <a href="http://localhost/shoe/shoe/checkout" class="btn btn-success pull-right">Checkout</a>
                      <div class="pull-right" style="margin: 5px">
                          Total price:<b><?= $malindi?></b>
                      </div>
                  </div>
              </div>
          </div>
          </div>
          </div>
  </div>

