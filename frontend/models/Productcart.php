<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productcart".
 *
 * @property int $cartId
 * @property int $userId
 * @property float $total
 * @property string $cartStatus
 * @property string $createdAt
 * @property int $createdBy
 *
 * @property Cartitems[] $cartitems
 * @property Deposit[] $deposits
 * @property Mpesastkrequests[] $mpesastkrequests
 * @property User $user
 */
class Productcart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'total', 'cartStatus', 'createdBy'], 'required'],
            [['userId', 'createdBy'], 'integer'],
            [['total'], 'number'],
            [['cartStatus'], 'string'],
            [['createdAt'], 'safe'],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartId' => 'Cart ID',
            'userId' => 'User ID',
            'total' => 'Total',
            'cartStatus' => 'Cart Status',
            'createdAt' => 'Created At',
            'createdBy' => 'Created By',
        ];
    }

    /**
     * Gets query for [[Cartitems]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCartitems()
    {
        return $this->hasMany(Cartitems::className(), ['cartId' => 'cartId']);
    }

    /**
     * Gets query for [[Deposits]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDeposits()
    {
        return $this->hasMany(Deposit::className(), ['transAmount' => 'total']);
    }

    /**
     * Gets query for [[Mpesastkrequests]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMpesastkrequests()
    {
        return $this->hasMany(Mpesastkrequests::className(), ['cartId' => 'cartId']);
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
