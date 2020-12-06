<?php
use yii\helpers\Html;
use yii\helpers\Url;
use yii\bootstrap4;
use frontend\models\Products;
$products = Products::find()->where(['status'=>1])->all();

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<?php $this->beginPage() ?>

<?php $this->head() ?>
<head>
<link 
 href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
 rel="stylesheet"
integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" 
 crossorigin="anonymous"
>
<script 
     src="https://code.jquery.com/jquery-2.2.2.min.js" 
     integrity="sha256-36cp2Co+/62rEAAYHLmRCPIych47CvdM+uTBJwSzWjI=" 
     crossorigin="anonymous"></script>
 <script 
     src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" 
     integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" 
     crossorigin="anonymous"></script>
</head>
<?php $this->beginBody() ?>
<body> 
<div class="container">
 <div class="row">
 <div class="col-md-6" style="margin-top:10px;"> 
 <img
  src="../assets/image/mens.jpg"
  alt="dr marten brown"
  class="image-responsive" style="width:440px; height:349px;">
   </div>
 
<div class="col-md-6">
 <div class="row">
  <div class="col-md-12">
 <h1>dr martens brown mens </h1>
 </div>
</div>
<!-- end row-->
<div class="row">
 <div class="col-md-12">
  <span class="label label-primary">Vintage</span>
  <span class="monospaced">No. 1960140180</span>
 </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-12">
  <p class="description">
 this is from our latest collection off the factory made for tough
  </p>
 </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-6">
  <span class="sr-only">Four out of Five Stars</span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span>
  <span class="glyphicon glyphicon-star-empty" aria-hidden="true"></span>
  <span class="label label-success">61</span>
 </div>
 <div class="col-md-3">
  <span class="monospaced">Write a Review</span>
 </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-12 bottom-rule">
  <h2 class="product-price">3500</h2>
 </div>
</div><!-- end row -->

<div class="row add-to-cart">
 <div class="col-md-5 product-qty">
  <span class="btn btn-default btn-lg btn-qty">
   <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
  </span>
  <input class="btn btn-default btn-lg btn-qty" value="1" />
  <span class="btn btn-default btn-lg btn-qty">
   <span class="glyphicon glyphicon-minus" aria-hidden="true"></span>
  </span>
 </div>
 <div class="col-md-4">
  <button class="btn btn-lg btn-brand btn-full-width">
   Add to Cart
  </button>
 </div>
</div><!-- end row -->

<div class="row">
 <div class="col-md-12 top-10">
  <p>To order by telephone, <a href="tel:18005551212">please call 25470000000</a></p>
 </div>
</div><!-- end row -->
<div class="row">
 <div class="col-md-4 text-center">
  <span class="monospaced">In Stock</span>
 </div>
 <div class="col-md-4 col-md-offset-1 text-center">
  <a class="monospaced" href="#">Add to wishlist</a>
 </div>
</div><!-- end row -->
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
 <li role="presentation" class="active">
  <a href="#description"
   aria-controls="description"
   role="tab"
   data-toggle="tab"
  >Description</a>
 </li>
 <li role="presentation">
  <a href="#features"
   aria-controls="features"
   role="tab"
   data-toggle="tab"
  >Features</a>
 </li>
 <li role="presentation">
  <a href="#notes"
   aria-controls="notes"
   role="tab"
   data-toggle="tab"
   >Notes</a>
 </li>
 <li role="presentation">
  <a href="#reviews"
   aria-controls="reviews"
   role="tab"
   data-toggle="tab"
  >Reviews</a>
 </li>
</ul>
</div>
</div>