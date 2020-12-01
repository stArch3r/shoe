<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "transaction".
 *
 * @property int $transId
 * @property int $orderId
 * @property int $itemId
 * @property int $userId
 * @property int $quantity
 * @property string $createdAt
 */
class Transaction extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'transaction';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'itemId', 'userId', 'quantity', 'createdAt'], 'required'],
            [['orderId', 'itemId', 'userId', 'quantity'], 'integer'],
            [['createdAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'transId' => 'Trans ID',
            'orderId' => 'Order ID',
            'itemId' => 'Item ID',
            'userId' => 'User ID',
            'quantity' => 'Quantity',
            'createdAt' => 'Created At',
        ];
    }
}
