<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productuom */

$this->title = 'Update Productuom: ' . $model->uomId;
$this->params['breadcrumbs'][] = ['label' => 'Productuoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->uomId, 'url' => ['view', 'id' => $model->uomId]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="productuom-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
