<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Categories;
use frontend\models\Products;

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
$products = Products::find()->where(['Category'=>'womens'])->all();
?>

<?php $this->beginPage() ?>

<?php $this->head() ?>
</head>
<?php $this->beginBody() ?>
<body> 
  <div class="row">
  <div class="container-fluid">
    <div class="col" style="margin-top: 150px;">
    <div class="row">
    <div class="col-md-12">
    <div class="card mb-3">
      <img class="card-img-top" src="../assets/image/large.jpg"  alt="Card image cap">
      <div class="card-body">
        <h5 class="card-title">womens</h5>
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
     <?php foreach($products as $product) { ?>
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">

        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../uploads/<?= $product->image?>"  alt="">
           
         </div>
         <h4 class="card-title"><?=$product->name?>></h4>
         <p class="card-text"><?=$product->amount?></p>
         <?= Html::a('view product', ['/shoe/more']); ?>
         <form action="<?=Url::to(['/shoe/cart'])?>" method="post">
         <input name="pid" value="<?=$product->id?>">
         <button class="btn btn-danger mt-3 add-to-cart"> ADD to</button>
         </form>
         </div>
      
       <?php } ?>
  



  </div>
  </div>
     
</div>

  </div>
        
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>

<!-- Modal: modalAbandonedCart-->
<div class="modal fade right" id="modalAbandonedCart" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true" data-backdrop="false">
  <div class="modal-dialog modal-side modal-bottom-right modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content">
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
<!-- Modal: modalAbandonedCart-->