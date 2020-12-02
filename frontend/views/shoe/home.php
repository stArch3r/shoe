<?php
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <!DOCTYPE html>
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
</head>
<body>
<div class="row">
<div class="col-md-12">
   <div class=" col-lg-12 ">
      <div class="row ">
          <div class="col-lg-8 " style="margin-top: 88px;">
          <img src="../assets/image/red.jpg" style="width:50%;" class="built" >
          </div>
           <div class="explore col-lg-4" style="margin-top: 88px;" >
            <h2 font-family:"Porter Sans Block" class="fight" > <strong>BUILT FOR </p> FIGHT </strong> </h2>
         </div>
    </div>
    </div>
    </div>
  </div>

<div class="row">
 <div class="col-md-8">
         <button class="btn btn-dark btn-lg " style="margin-left:200px;">Shop</button>
</div>
<div class="col-md-4">
<h3 font-family:"Porter Sans Block"> <p> our tougest design yet</p>builit for the jungle <br> unleash your wildside </h3>
</div>
</div>
<!--New releases-->
<div class="container-fluid">
  <div class="row">
      <div class="col-md-12 popular-category">
         <div class="row">
             <div class="col-md-1"></div>
               <div class="col-md-5 ">
                <div class="card border border-light ">
                    <img src="../assets/image/new.jpg" class="img-fluid">
                    <h5 class="ctitle">Women</h5>
                    <p class="btitle"> shop <?= Html::a('now', ['/site/login']); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                    
                </div>
                </div>
                <div class="col-md-5">
                    <div class="card border border-light">
                        <img src="../assets/image/shine.jpg" class="img-fluid">
                        <h5 class="ctitle">Men</h5>
                        <p class="btitle">Shop Now <?= Html::a('now', ['/site/login']); ?> <i class="fa fa-long-arrow-right" aria-hidden="true"></i></p>
                    </div>
                </div>
                <div class="col-md-1"></div>
         </div>

</div>
</div>
</div>
<!--end-->

<!--New Releases carousel-->
<div class="container-fluid ">
    <div class="row">
     <h2 class="text-left"> New Releases</h2>
     <div class="col-md-12 ">
        <!--Carousel Wrapper-->
      <div id="multi-item-example" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example" data-slide="next"><i
          class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->
  
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example" data-slide-to="1"></li>
      
    </ol>
    <!--/.Indicators-->
  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left;">
         <div class="card mb-2">
            <img class="card-img-top img-fluid" src="../assets/image/mens.jpg" alt="">
            
          </div>
          <h4 class="card-title">Product Name</h4>
          <p class="card-text">Ksh.2000</p>
          <?= Html::submitButton('Submit', ['class' => 'submit']) ?>ss
        </div>
  
       
        <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid " src="../assets/image/red.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
  
        <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-2">
               <img class="card-img-top img-fluid" src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
      </div>
      <!--/.Second slide-->
  
     
  
    </div>
    <!--/.Slides-->
  
  </div>
  <!--/.Carousel Wrapper-->
              


</div>
      
        </div>
        </div>
      <!--end-->

<!--Top kicks carousel-->
<div class="container-fluid kick">
    <div class="row">
     <h2 class="text-left"> Top Kicks</h2>
     <div class="col-md-12 ">
        <!--Carousel Wrapper-->
<div id="multi-item-example2" class="carousel slide carousel-multi-item" data-ride="carousel">

    <!--Controls-->
    <div class="controls-top">
      <a class="btn-floating" href="#multi-item-example2" data-slide="prev"><i class="fa fa-chevron-left"></i></a>
      <a class="btn-floating" href="#multi-item-example2" data-slide="next"><i
          class="fa fa-chevron-right"></i></a>
    </div>
    <!--/.Controls-->
  
    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#multi-item-example2" data-slide-to="0" class="active"></li>
      <li data-target="#multi-item-example2" data-slide-to="1"></li>
      
    </ol>
    <!--/.Indicators-->
  
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
  
      <!--First slide-->
      <div class="carousel-item active">
  
        <div class="col-md-4" style="float:left">
         <div class="card mb-3">
            <img class="card-img-top " src="../assets/image/red.jpg"" alt="">
            
          </div>
          <h4 class="card-title">Product Name</h4>
          <p class="card-text">Ksh.2000</p>
          <?= Html::a('add to cart', ['/site/login']); ?>
        </div>
  
       
        <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="../assets/image/new.jpg" alt="Card image cap">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
      </div>
      <!--/.First slide-->
  
      <!--Second slide-->
      <div class="carousel-item">
  
        <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="../assets/image/mens.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
           <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="../assets/image/mens.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
        
           <div class="col-md-4" style="float:left">
            <div class="card mb-3">
               <img class="card-img-top " src="../assets/image/red.jpg" alt="">
               
             </div>
             <h4 class="card-title">Product Name</h4>
             <p class="card-text">Ksh.2000</p>
             <?= Html::a('add to cart', ['/site/login']); ?>
           </div>
  
      </div>
      </div>
      <!--/.Second slide-->
  
     
  
    </div>
    <!--/.Slides-->
  
  </div>
  <!--/.Carousel Wrapper-->
              



      
        </div>
        </div>
      <!--end-->


      <!--Subscribe section-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 subscribe">
            <div class="row">
                <div class="col-md-4"></div>
              <div class="col-md-4 tex ">
                <h1 style="text-align: center;" > Never miss a drop</h1>
                <p   style="text-align: center;" >Recieve updates about new products and </p>
                <p style="text-align: center;">promotions.</p>
                <p style="text-align: center;"><button type="button" class="btn btn-outline-dark btn-lg">Join Mailing List</button></p></div>
              <div class="col-md-4"></div>
        
        </div>
        </div>
    </div>
    </div>
      <!--end-->

</body>
</html>
