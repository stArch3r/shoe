<?php
use yii\helpers\Html;
use yii\helpers\Url;
use frontend\models\Cart;
use frontend\models\Products;
use yii\helpers\ArrayHelper;
use yii\bootstrap4\Modal;




$products = Products::find()->where(['category'=>'mens'])->all();
$shoe=Cart::find()->JoinWith('shoe')->all();

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>

<?php $this->beginPage() ?>

<?php $this->head() ?>


<?php $this->beginBody() ?>
<body> 
  <div class="row">
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
     <?php foreach($products as $product) { ?>
    <div class="col-md-12">
    <div class="col-xs-4">
      <div class="col-md-4" style="float:left">

        <div class="card mb-2">
           <img class="card-img-top img-fluid " src="../uploads/<?= $product->image?>"  alt="">
           
         </div>
         <h4 class="card-title"><?=$product->name?>></h4>
         <p class="card-text"><?=$product->amount?></p>
         <a href="<?= Url::to(['shoe/ken', 'shoeId'=>$product->id,'totalPrice'=>$product->amount])?>" class="btn btn-primary ken" role="button">Add to Cart</a>
        <button class="btn btn-danger ken  ">pop</button>
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

<?php
Modal::begin([
  'title'=>'<h4>Add</h4>',
  'id'=>'ken',
  'size'=>'modal-lg'
  ]);
echo "<div id='kenContent'></div>";
Modal::end();
?>