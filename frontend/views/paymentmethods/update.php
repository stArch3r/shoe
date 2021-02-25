<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Paymentmethods */

$this->title = 'Update Paymentmethods: ' . $model->paymentMethodId;
$this->params['breadcrumbs'][] = ['label' => 'Paymentmethods', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->paymentMethodId, 'url' => ['view', 'id' => $model->paymentMethodId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="paymentmethods-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
