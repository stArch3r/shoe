<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "deposit".
 *
 * @property int $transId
 * @property string $MerchantRequestId
 * @property int $cartId
 * @property float $transAmount
 * @property string $details
 * @property string|null $reciept
 * @property string $transDate
 * @property int $createdBy
 * @property int|null $status
 * @property int $phoneCode
 * @property int $phoneNumber
 *
 * @property Cartitems $cart
 * @property Mpesastkrequests $cart0
 * @property Productcart $transAmount0
 */
class Deposit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'deposit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['transId', 'MerchantRequestId', 'cartId', 'transAmount', 'details', 'createdBy', 'phoneCode', 'phoneNumber'], 'required'],
            [['transId', 'cartId', 'createdBy', 'status', 'phoneCode', 'phoneNumber'], 'integer'],
            [['transAmount'], 'number'],
            [['details'], 'string'],
            [['transDate'], 'safe'],
            [['MerchantRequestId'], 'string', 'max' => 110],
            [['reciept'], 'string', 'max' => 100],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Cartitems::className(), 'targetAttribute' => ['cartId' => 'cartId']],
            [['cartId'], 'exist', 'skipOnError' => true, 'targetClass' => Mpesastkrequests::className(), 'targetAttribute' => ['cartId' => 'cartId']],
            [['transAmount'], 'exist', 'skipOnError' => true, 'targetClass' => Productcart::className(), 'targetAttribute' => ['transAmount' => 'total']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transId' => 'Trans ID',
            'MerchantRequestId' => 'Merchant Request ID',
            'cartId' => 'Cart ID',
            'transAmount' => 'Trans Amount',
            'details' => 'Details',
            'reciept' => 'Reciept',
            'transDate' => 'Trans Date',
            'createdBy' => 'Created By',
            'status' => 'Status',
            'phoneCode' => 'Phone Code',
            'phoneNumber' => 'Phone Number',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cartitems::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[Cart0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart0()
    {
        return $this->hasOne(Mpesastkrequests::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[TransAmount0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTransAmount0()
    {
        return $this->hasOne(Productcart::className(), ['total' => 'transAmount']);
    }
}
