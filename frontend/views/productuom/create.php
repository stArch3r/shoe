<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productuom */

$this->title = 'Create Productuom';
$this->params['breadcrumbs'][] = ['label' => 'Productuoms', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="productuom-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
