<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "mpesastkrequests".
 *
 * @property string $MerchantRequestID
 * @property string $phone
 * @property float $amount
 * @property string $reference
 * @property int $cartId
 * @property int $depositTransId
 * @property string $description
 * @property string $status
 * @property int $complete
 * @property string $CheckoutRequestID
 * @property int|null $userId
 * @property string|null $created_at
 * @property string|null $updated_at
 *
 * @property Deposit[] $deposits
 * @property Productcart $cart
 * @property User $user
 */
class Mpesastkrequests extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'mpesastkrequests';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['MerchantRequestID', 'phone', 'amount', 'reference', 'cartId', 'depositTransId', 'description', 'CheckoutRequestID'], 'required'],
            [['amount'], 'number'],
            [['cartId', 'depositTransId', 'complete', 'userId'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['MerchantRequestID', 'phone', 'reference', 'description', 'status', 'CheckoutRequestID'], 'string', 'max' => 191],
            [['MerchantRequestID'], 'unique'],
            [['CheckoutRequestID'], 'unique'],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Productcart::className(), 'targetAttribute' => ['cartId' => 'cartId']],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'MerchantRequestID' => 'Merchant Request ID',
            'phone' => 'Phone',
            'amount' => 'Amount',
            'reference' => 'Reference',
            'cartId' => 'Cart ID',
            'depositTransId' => 'Deposit Trans ID',
            'description' => 'Description',
            'status' => 'Status',
            'complete' => 'Complete',
            'CheckoutRequestID' => 'Checkout Request ID',
            'userId' => 'User ID',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * Gets query for [[Deposits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposits()
    {
        return $this->hasMany(Deposit::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Productcart::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'userId']);
    }
}
