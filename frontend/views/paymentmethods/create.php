<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Paymentmethods */

$this->title = 'Create Paymentmethods';
$this->params['breadcrumbs'][] = ['label' => 'Paymentmethods', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="paymentmethods-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
