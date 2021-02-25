<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productcart */

$this->title = 'Update Productcart: ' . $model->cartId;
$this->params['breadcrumbs'][] = ['label' => 'Productcarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cartId, 'url' => ['view', 'id' => $model->cartId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productcart-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
