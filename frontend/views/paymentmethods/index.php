<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PaymenmethodsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Paymentmethods';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paymentmethods-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Paymentmethods', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'paymentMethodId',
            'paymentMethodDesc',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
