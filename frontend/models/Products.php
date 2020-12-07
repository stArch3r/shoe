<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $userEmail
 * @property string $name
 * @property string $description
 * @property string $ikey
 * @property string $amount
 * @property int $quanity
 * @property string $availablity
 * @property string $productCondition
 * @property string $brand
 * @property int $stock
 * @property string $image
 * @property int $status
 * @property string $category
 * @property string $createdAt
 *
 * @property Cart $cart
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userEmail', 'name', 'description', 'ikey', 'amount', 'availablity', 'productCondition', 'brand', 'stock', 'image', 'status', 'category', 'createdAt'], 'required'],
            [['description', 'category'], 'string'],
            [['quanity', 'stock', 'status'], 'integer'],
            [['createdAt'], 'safe'],
            [['userEmail', 'name', 'image'], 'string', 'max' => 255],
            [['ikey', 'amount', 'availablity'], 'string', 'max' => 50],
            [['productCondition', 'brand'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'userEmail' => 'User Email',
            'name' => 'Name',
            'description' => 'Description',
            'ikey' => 'Ikey',
            'amount' => 'Amount',
            'quanity' => 'Quanity',
            'availablity' => 'Availablity',
            'productCondition' => 'Product Condition',
            'brand' => 'Brand',
            'stock' => 'Stock',
            'image' => 'Image',
            'status' => 'Status',
            'category' => 'Category',
            'createdAt' => 'Created At',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['shoeId' => 'id']);
    }
}
