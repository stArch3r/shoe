<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4;
use frontend\models\Products;
$products = Products::find()->where(['category'=>'mens'])->all();

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>


  <!--Header-->

  <div class="modal-header">
        <p class="heading">Product in the cart
        </p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="row">
          <div class="col-3">
            <p></p>
            <p class="text-center"><i class="fas fa-shopping-cart fa-4x"></i></p>
          </div>
          <div class="col-9">
            <p>Do you need more time to make a purchase decision?</p>
            <p>No pressure, your product will be waiting for you in the cart.</p>
          </div>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer justify-content-center">
      <?= Html::a('Go To Cart',['add-to-cart','id'=>$product->id], ['class'=>'btn btn-info'])?>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Continue Shopping</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>