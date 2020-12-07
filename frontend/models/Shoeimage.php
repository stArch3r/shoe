<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "shoeimage".
 *
 * @property int $ImageId
 * @property int|null $shoeId
 * @property resource $imagePath
 *
 * @property Cart $cart
 * @property Shoes $shoe
 */
class Shoeimage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'shoeimage';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['shoeId'], 'integer'],
            [['imagePath'], 'required'],
            [['imagePath'], 'string'],
            [['shoeId'], 'unique'],
            [['shoeId'], 'exist', 'skipOnError' => true, 'targetClass' => Shoes::className(), 'targetAttribute' => ['shoeId' => 'shoeId']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ImageId' => 'Image ID',
            'shoeId' => 'Shoe ID',
            'imagePath' => 'Image Path',
        ];
    }

    /**
     * Gets query for [[Cart]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCart()
    {
        return $this->hasOne(Cart::className(), ['imagePath' => 'ImageId']);
    }

    /**
     * Gets query for [[Shoe]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getShoe()
    {
        return $this->hasOne(Shoes::className(), ['shoeId' => 'shoeId']);
    }
}
