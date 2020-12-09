<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Cart;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model frontend\models\Cart */
/* @var $form ActiveForm */
$shoe = ArrayHelper::map(cart::find()->all(), 'shoeId', 'amount');


?>
<div class="ken" style="margin-top:200px;">  

    <?php $form = ActiveForm::begin(); ?>
   <?= $form->field($model, 'shoeId')->hiddenInput(['value' => $shoeId, 'readonly'=> true])->label(false) ?>

    

   
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- ken -->
