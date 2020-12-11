<?php

use yii\helpers\Html;
use yii\widgets\DetailView;
use frontend\models\Cart;
use yii\helpers\ArrayHelper;


/* @var $this yii\web\View */
/* @var $model frontend\models\Checkout */
$malindi=Cart::find()->JoinWith('shoe')->sum('amount');
$lists=Cart::find()->joinWith('shoe')->all();


$this->title = $model->productId;
$this->params['breadcrumbs'][] = ['label' => 'Checkouts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="checkout-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <!-- = Html::a('Update', ['update', 'id' => $model->productId], ['class' => 'btn btn-primary']) ?>
        = Html::a('Delete', ['delete', 'id' => $model->productId], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> -->
        
        <?= Html::a(Yii::t('app', 'Generate PDF'), ['gen-pdf', 'id' => $model->productId], [     'class' => 'btn btn-success'])?>
        <a class="btn btn-primary btn-sm" href="shoe/shoe/end" role="button"> finish</a>
    </p>
    <div class="jumbotron text-center">
  <h1 class="display-3"> success order confirmed </h1>

  <p class="lead">Your OrderId <?=$model->productId ?> of amount Ksh <?= $malindi ?> has been Confirmed</p>
  <hr>
  <p>
    Having trouble? <a href="">Contact us</a>
  </p>
 
  <p class="lead">
    <a class="btn btn-primary btn-sm" href="shoe/home" role="button">back to shopping </a>
  </p>
</div>
</div>