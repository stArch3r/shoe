<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "cart".
 *
 * @property int $cartId
 * @property int|null $shoeId
 * @property int|null $imagePath
 * @property int $quantity
 * @property int $totalPrice
 *
 * @property Products $shoe
 */
class Cart extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cart';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeId', 'imagePath', 'quantity', 'totalPrice'], 'integer'],
            [['quantity', 'totalPrice'], 'required'],
            [['shoeId'], 'unique'],
            [['imagePath'], 'unique'],
            [['shoeId'], 'exist', 'skipOnError' => true, 'targetClass' => Products::className(), 'targetAttribute' => ['shoeId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cartId' => 'Cart ID',
            'shoeId' => 'Shoe ID',
            'imagePath' => 'Image Path',
            'quantity' => 'Quantity',
            'totalPrice' => 'Total Price',
        ];
    }

    /**
     * Gets query for [[Shoe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoe()
    {
        return $this->hasOne(Products::className(), ['id' => 'shoeId']);
    }
}
