<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "list_item".
 *
 * @property int $itemId
 * @property int $orderId
 * @property float $price
 * @property int $quanitty
 * @property string $descr
 * @property string $day
 * @property string $title
 *
 * @property Items $items
 * @property Items $item
 * @property Sales[] $sales
 */
class ListItem extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'list_item';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['orderId', 'price', 'quanitty', 'descr', 'title'], 'required'],
            [['orderId', 'quanitty'], 'integer'],
            [['price'], 'number'],
            [['day'], 'safe'],
            [['descr'], 'string', 'max' => 255],
            [['title'], 'string', 'max' => 100],
            [['itemId'], 'exist', 'skipOnError' => true, 'targetClass' => Items::className(), 'targetAttribute' => ['itemId' => 'productId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'itemId' => 'Item ID',
            'orderId' => 'Order ID',
            'price' => 'Price',
            'quanitty' => 'Quanitty',
            'descr' => 'Descr',
            'day' => 'Day',
            'title' => 'Title',
        ];
    }

    /**
     * Gets query for [[Items]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItems()
    {
        return $this->hasOne(Items::className(), ['productId' => 'itemId']);
    }

    /**
     * Gets query for [[Item]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getItem()
    {
        return $this->hasOne(Items::className(), ['productId' => 'itemId']);
    }

    /**
     * Gets query for [[Sales]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSales()
    {
        return $this->hasMany(Sales::className(), ['orderId' => 'itemId']);
    }
}
