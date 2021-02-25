<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productcart */

$this->title = 'Create Productcart';
$this->params['breadcrumbs'][] = ['label' => 'Productcarts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productcart-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
