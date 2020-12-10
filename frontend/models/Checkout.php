<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "checkout".
 *
 * @property int $productId
 * @property int $userId
 * @property string $email
 * @property string $location
 *
 * @property User $user
 */
class Checkout extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'checkout';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['userId', 'email', 'location'], 'required'],
            [['userId'], 'integer'],
            [['email'], 'string', 'max' => 255],
            [['location'], 'string', 'max' => 225],
            [['userId'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['userId' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productId' => 'Product ID',
            'userId' => 'User ID',
            'email' => 'Email',
            'location' => 'Location',
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
}
