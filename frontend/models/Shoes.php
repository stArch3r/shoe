<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shoes".
 *
 * @property int $shoeId
 * @property string $shoeName
 * @property int $price
 * @property string $createdat
 * @property string $description
 *
 * @property Cart $cart
 * @property Category $category
 * @property Shoeimage $shoeimage
 */
class Shoes extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoes';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeName', 'price', 'description'], 'required'],
            [['price'], 'integer'],
            [['createdat'], 'safe'],
            [['description'], 'string'],
            [['shoeName'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'shoeId' => 'Shoe ID',
            'shoeName' => 'Shoe Name',
            'price' => 'Price',
            'createdat' => 'Createdat',
            'description' => 'Description',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['shoeId' => 'shoeId']);
    }

    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['shoeId' => 'shoeId']);
    }

    /**
     * Gets query for [[Shoeimage]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoeimage()
    {
        return $this->hasOne(Shoeimage::className(), ['shoeId' => 'shoeId']);
    }
}
