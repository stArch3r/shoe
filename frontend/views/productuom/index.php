<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ProductuomSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Productuoms';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productuom-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Productuom', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'uomId',
            'uomDesc',
            'uomPrice',
            'quanitty',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
