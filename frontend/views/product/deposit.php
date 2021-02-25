<?php
use frontend\models\Country;
use frontend\models\Productcart;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Deposit;
use frontend\models\Product;
/* @var $this yii\web\View */
/* @var $model frontend\models\Deposit */
/* @var $form ActiveForm */
$cartId = Productcart::find()->where(['userId'=>Yii::$app->user->id])->joinWith('user')->all();

?>
<div class="deposit">
    <?php $form = ActiveForm::begin(); ?>
        <?= $form->field($model, 'cartId')->hiddenInput(['value' => $cartId[0]->cartId, 'readonly'=>true])->label(false) ?>
        <?= $form->field($model, 'transAmount')?>
       
        <?= $form->field($model, 'createdBy')->hiddenInput(['value'=>yii::$app->user->id])->label(false) ?>
        <?= $form->field($model, 'phoneCode')->dropDownList(ArrayHelper::map(Country::find()->all(), 'couPhoneCode', 'countryName'))?>
        <?= $form->field($model, 'phoneNumber')?>
        <?= $form->field($model, 'details') ?>
        <!-- <?= $form->field($model, 'status') ?>
        <?= $form->field($model, 'reciept') ?> -->
    
        <div class="form-group">
            <?= Html::submitButton('Submit', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>
  
</div><!-- deposit -->
