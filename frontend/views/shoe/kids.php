<?php
use yii\helpers\Html;
use frontend\models\Categories;
use frontend\models\Products;

/* @var $this yii\web\View */

$products = Products::find()->where(['Category'=>'kids'])->all();
?>

<?php $this->beginPage() ?>

<?php $this->head() ?>
<html>

<head> <title> <h1 font-family:"Tangerine"> my-Duka</h1>
</title>
<head>
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
        <h5 class="card-title">kids</h5>
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

