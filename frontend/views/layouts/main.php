<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>

    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://kit.fontawesome.com/86c7034986.js" crossorigin="anonymous"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css" rel="stylesheet" />
  <link rel="stylesheet" type="text/css" href="css/custom.css">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<nav class="navbar nav-boot navbar-expand-lg fixed-top navbar-light bg-light navbar-fixed  " style="margin-bottom:100px;">
  <a class="navbar-brand " href="#"> <h5> Duka Prototype </h5> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <i class="fa fa-bars"></i>
  </button>
  <div class="container">
    <div class="collapse navbar-collapse pull-right" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="http://localhost/shoe/shoe/home"><h5 font-family: "sans-serif", style="color:#000000; mr-sm-0;">HOME</h5> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/shoe/shoe/womens"><h5 font-family: "sans-serif;", style="color:#000000; mr-sm-0;">WOMEN'S</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/shoe/shoe/men"><h5 font-family: "sans-serif", style="color:#000000; mr-sm-0;">MEN'S</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/shoe/shoe/kids"><h5 font-family: "sans-serif", style="color:#000000; mr-sm-0;">KID'S</h5></a>
      </li>
      </li>
      <?php if(Yii::$app->User->can('ken')){?>
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/shoe/products"><h5 font-family: "sans-serif", style="color:#000000; mr-sm-0;">ADD</h5></a>
      </li>
      <?php }?>

      <li class="nav-item">
  <a class="nav-link" href="sale.php"> <h5 font-family: "sans-serif", style="color:#FF0000; mr-sm-0;">SALE</h5> </a>
</li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><h5 font-family: "sans-serif", style="color:#000000; mr-sm-0">My-Account</h5></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="http://localhost/shoe/site/login">login</a>
          <a class="dropdown-item" href="http://localhost/shoe/site/signup">signup</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="http://localhost/shoe/site/logout"  >log out</a>
        </div>
      </li>
    </ul>
  </div>
   <!-- ! search-cart-nav -->
      <div class="search-cart-nav">
        <ul class="navbar-nav mr-auto right">
      <li class="nav-item search">
      <form id="demo-2">
      <input type="search" placeholder="Search">
  </form> 
      </li><!--/.search-->
     
      <li class="nav-item">
        <a class="nav-link" href="http://localhost/shoe/shoe/cart">cart</a>
      </li>
      </ul>
    </div>
</div>
</nav>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
<footer class="mainfooter" role="contentinfo">
  <div class="footer-middle">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>My Account</h4>
          <ul class="list-unstyled">
            <li><a href="#"></a></li>
            <li><a href="#">Sign in</a></li>
            <li><a href="#">Register</a></li>
            <li><a href="#">My orders</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>Help</h4>
          <ul class="list-unstyled">
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Returns</a></li>
            <li><a href="#">Sizing</a></li>
        
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4> About us </h4>
          <ul class="list-unstyled">
            <li><a href="#">Our story</a></li>
            <li><a href="#">Media</a></li>
            <li><a href="#">Sustainability</a></li>
        
          </ul>
        </div>
      </div>
      <div class="col-md-2 col-sm-6">
        <!--Column1-->
        <div class="footer-pad">
          <h4>legal stuff</h4>
          <ul class="list-unstyled">
            <li><a href="#">Terms of Use</a></li>
            <li><a href="#">Terms os sale</a></li>
            <li><a href="#">Privacy Policy</a></li>
  
            <li>
              <a href="#"></a>
            </li>
          </ul>
        </div>
      </div>
    	<div class="col-md-3">
    		<h4>Follow Us</h4>
            <ul class="social-network social-circle">
             <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
             <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
            </ul>				
		</div>
    </div>
	<div class="row">
		<div class="col-md-12 copy">
			<p class="text-center">&copy; Copyright 2020 - Duka llc.  All rights reserved.</p>
		</div>
	</div>
  </div>

</footer>

<?php $this->endBody() ?>

<script type="text/javascript">
let productPrice= document.querySelector('#ikey').text
productPrice=parseInt(productPrice); 
var e = document.getElementById("paul");
var productQ = e.value;
let subTotal=productPrice * productQ;
const calculateTotal = () => {
    // Assume this your cart.
    let cartArr = [
      {
        'price': 1000,
        'quantity': 12
      },
      {
        'price': 2000,
        'quantity': 22
      },
      {
        'price': 3000,
        'quantity': 32
      }
    ];
    
    let grandTotal = 0;
    cartArr.forEach(function (cartItem) {
      let productTotal = cartItem.price * cartItem.quantity;
      grandTotal += productTotal;
      console.log(productTotal);
      console.log(grandTotal);
    });
}
  
  console.log(calculateTotal())






            </script>
</body>
</html>
<?php $this->endPage() ?>
