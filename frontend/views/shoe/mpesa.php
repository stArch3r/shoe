<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4;
use frontend\models\Products;
use frontend\models\Cart;



$cartPrice = Products::find()->sum('amount');
$malindi=Cart::find()->JoinWith('shoe')->sum('amount');
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<div class="modal-header">
        <p class="heading">MPESA</p><br/>
        <p><strong>Confirm Payment</strong></p>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true" class="white-text">&times;</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <div class="row">
          <!-- <div class="col-5">
            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(55).jpg"
              class="img-fluid" alt="">
          </div> -->
          <div class="col-12">
            
            <p>Phone Number : +2509090945</p>
            <h5>Total: Ksh<?=$malindi?><br>
            <button type="button" class="btn btn-info btn-md mt-3"><a href="http://localhost/shoe/checkout/create"> Proceed</button></a>
          </div>
        </div>
      </div>
    </div>