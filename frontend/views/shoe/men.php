<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
    <!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
            <script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/custom.css">
<head> <title> <h1 font-family:"Tangerine"> my-Duka</h1>
</title>
</head>
<body> 
  <div class="row" id="main">
  <div class="container-fluid">
    <div class="col" style="margin-top: 150px;">
      <div class="row">
    <div class="col-md-12">
    <div class="card mb-3">
      <img class="card-img-top" src="../assets/image/Large.jpg" alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">Mens</h5>
        <p class="card-text">Drawing on decades of alternative heritage, Dr. Martens men's collection provides the comfort, durability and attitude synonymous with our brand. Our men's shoes and boots are never worn the same. Choose from the range below, lace them up and make them your own</p>
      </div>
    </div>
    </div>
  </div>
    </div>
</div>
</div>
    <div class="row">
      <div class="container-fluid">
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../assets/image/up.jpg"  alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

       <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../assets/image/up.jpg"  alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

    
       <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid" src="../assets/image/pink.jpg" alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

  </div>
  <div class="col-md-12">

    <div class="row">
      <div class="container-fluid">
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid" src="../assets/image/blue.jpg" alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

       <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../assets/image/green.jpg"  alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

    
       <div class="col-md-4" style="float:left">
        <div class="card mb-2">
           <img class="card-img-top img-fluid" src="../assets/image/smallred.jpg" alt="">
           
         </div>
         <h4 class="card-title">Product Name</h4>
         <p class="card-text">Ksh.2000</p>
         <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
       </div>

<div class="col-md-12">
  <div class="row">
    <div class="container-fluid">
  <div class="col-md-12">
  <div class="col-xs-4">
    <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <img class="card-img-top img-fluid " src="../assets/image/smallred.jpg" alt="">
         
       </div>
       <h4 class="card-title">Product Name</h4>
       <p class="card-text">Ksh.2000</p>
       <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
     </div>

     <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <img class="card-img-top img-fluid " src="../assets/image/black.jpg" alt="">
         
       </div>
       <h4 class="card-title">Product Name</h4>
       <p class="card-text">Ksh.2000</p>
       <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
     </div>

  
     <div class="col-md-4" style="float:left">
      <div class="card mb-2">
         <img class="card-img-top img-fluid" src="../assets/image/two.jpg"  alt="">
         
       </div>
       <h4 class="card-title">Product Name</h4>
       <p class="card-text">Ksh.2000</p>
       <?= Html::a('add to cart', ['shoes/create'],['class'=>'btn btn-danger mt-3']); ?>
     </div>

</div>

  </div>
        
    </div>
  </div>
  </div>
  </div>
  </div>

  </body>
  </html>