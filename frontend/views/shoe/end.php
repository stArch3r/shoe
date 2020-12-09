<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Cart;
use frontend\models\Products;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\Modal;

$val=Products::find()->where(['status'=>1])->all();


$products = Products::find()->where(['category'=>'mens'])->all();
$shoe=Cart::find()->JoinWith('shoe')->all();

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<html>
<meta charset="utf-8">
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
<head> <title> <h1 font-family:"Tangerine"> my-Duka</h1>
</title>
<?php $this->beginPage() ?>

<?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body>
<div class="jumbotron text-center">
  <h1 class="display-3">Thank You!</h1>
  <p class="lead"><strong>Please check your email</strong> your order ID <?=$val->ikey?> has been confirmed check email for more information</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="https://bootstrapcreative.com/" role="button">Continue to homepage</a>
  </p>
</div>