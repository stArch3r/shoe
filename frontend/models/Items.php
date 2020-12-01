<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "items".
 *
 * @property int $productId
 * @property float $price
 * @property string $title
 * @property string $details
 * @property string $day
 * @property string $category
 *
 * @property ListItem $product
 * @property ListItem $listItem
 */
class Items extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'items';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['price', 'title', 'details', 'day', 'category'], 'required'],
            [['price'], 'number'],
            [['day'], 'safe'],
            [['category'], 'string'],
            [['title', 'details'], 'string', 'max' => 221],
            [['productId'], 'exist', 'skipOnError' => true, 'targetClass' => ListItem::className(), 'targetAttribute' => ['productId' => 'itemId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productId' => 'Product ID',
            'price' => 'Price',
            'title' => 'Title',
            'details' => 'Details',
            'day' => 'Day',
            'category' => 'Category',
        ];
    }

    /**
     * Gets query for [[Product]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getProduct()
    {
        return $this->hasOne(ListItem::className(), ['itemId' => 'productId']);
    }

    /**
     * Gets query for [[ListItem]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getListItem()
    {
        return $this->hasOne(ListItem::className(), ['itemId' => 'productId']);
    }
}
