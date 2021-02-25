<?php
use frontend\models\Product;
use common\models\User;
use yii\bootstrap4\Modal;
use frontend\models\Cartitems;

$cartPrice = Product::find()->sum('basePrice');
$malindi=Cartitems::find()->JoinWith('product')->sum('baseprice');
?>
<!DOCTYPE html><html lang="en">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet" />
        <link rel="stylesheet" type="text/css" href="../css/checkout.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title></title>
    </head>
<body>
    
  
    <div class="container-fluid carrt">
    <h4 class="d-flex justify-content-center">Check Out</h4>
    <div class="row">
      <div class="col-md-12">
        <div class="row">
          <div class="col-md-8 shadow-lg p-3 mb-5 bg-white rounded shopp">
 <h5>Billing Details</h5>
 <form>
    <div class="form-group">
      <label for="exampleFormControlInput1"></label>
      <?php Yii::$app->user->identity->username ?>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="<?= Yii::$app->user->identity->email ?>">
    </div>
    <div class="form-check">
    <button baseUrl=<?=Yii::$app->request->baseUrl?>  class="btn btn-success  deposit  "> </button>
      </div>
    <div class="form-check">
        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
        <i class="far fa-credit-card"></i><label class="form-check-label" for="exampleRadios1">
          Credit Card
        </label>
      </div>
     
      <div class="form-group">
        <label for="exampleFormControlInput1">Card Number</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
                
  </form>
  
             
           </div>
           
           <div class="col-md-4 ">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded " style="width: 18rem;">
                <button onclick="window.location.href='shop';" class="btn btn-dark btn-lg btn-block rounded-0">Continue Shopping</button>
                <div class="card-header border-bottom">
                  Order Summary
                </div>
                <div class="row">
                  <div class="col-md-6">
                   <!-- <p> Sub Total:</p>    
                   <p>Tax:</p> -->
                  <h5>Total: Ksh<?=$malindi?>
                  </h5>
                  </div>
                  <div class="col-md-6">
                    <!-- <p></p>
                    <p> </span></p> -->
                    <p></p>
                  </div>
                </div>
                 
              
                </div>
               
             
        </div>
        </div>
        </div>
    </div>
    </div>
    <?php
Modal::begin([
  'title'=>'<h4>Add</h4>',
  'id'=>'mpesa',
  'size'=>'modal-lg'
  ]);
echo "<div id='mpesaContent'></div>";
Modal::end();
?>
<?php
     Modal::begin([
        'id'=>'deposit',
        'size'=>'modal-lg'
        ]);
    echo "<div id='depositContent'></div>";
    Modal::end();
?>