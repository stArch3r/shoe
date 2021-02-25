<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "productcategory".
 *
 * @property int $productId
 * @property int $categoryId
 * @property int $productCategoryId
 */
class Productcategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'productcategory';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['productId', 'categoryId'], 'required'],
            [['productId', 'categoryId'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'productId' => 'Product ID',
            'categoryId' => 'Category ID',
            'productCategoryId' => 'Product Category ID',
        ];
    }
}
