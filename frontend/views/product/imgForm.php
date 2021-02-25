<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Productimages */
/* @var $form ActiveForm */
?>
<div class="imgForm">

    <?php $form = ActiveForm::begin(); ?>

        <?= $form->field($model, 'imageId') ?>
        <?= $form->field($model, 'imagePath') ?>
        <?= $form->field($model, 'productId') ?>
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- imgForm -->
