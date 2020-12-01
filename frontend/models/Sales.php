<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "sales".
 *
 * @property int $itemId
 * @property string $title
 * @property string $name
 * @property string $phone
 * @property string $country
 * @property string $city
 * @property int $orderId
 * @property float $total
 * @property int $userId
 * @property string $day
 *
 * @property User $user
 * @property ListItem $order
 */
class Sales extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sales';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title', 'name', 'phone', 'country', 'city', 'orderId', 'total', 'userId', 'day'], 'required'],
            [['orderId', 'userId'], 'integer'],
            [['total'], 'number'],
            [['day'], 'safe'],
            [['title'], 'string', 'max' => 200],
            [['name'], 'string', 'max' => 255],
            [['phone'], 'string', 'max' => 15],
            [['country', 'city'], 'string', 'max' => 50],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
            [['orderId'], 'exist', 'skipOnError' => true, 'targetClass' => ListItem::className(), 'targetAttribute' => ['orderId' => 'itemId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'itemId' => 'Item ID',
            'title' => 'Title',
            'name' => 'Name',
            'phone' => 'Phone',
            'country' => 'Country',
            'city' => 'City',
            'orderId' => 'Order ID',
            'total' => 'Total',
            'userId' => 'User ID',
            'day' => 'Day',
        ];
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

    /**
     * Gets query for [[Order]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOrder()
    {
        return $this->hasOne(ListItem::className(), ['itemId' => 'orderId']);
    }
}
