<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductcartSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productcarts';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcart-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productcart', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'cartId',
            'userId',
            'total',
            'cartStatus',
            'createdAt',
            //'createdBy',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
