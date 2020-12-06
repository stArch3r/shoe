<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Products;

/**
 * ProductsSearch represents the model behind the search form of `frontend\models\Products`.
 */
class ProductsSearch extends Products
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'quanity', 'stock', 'status'], 'integer'],
            [['userEmail', 'name', 'description', 'ikey', 'amount', 'availablity', 'productCondition', 'brand', 'image', 'category', 'createdAt'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Products::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'quanity' => $this->quanity,
            'stock' => $this->stock,
            'status' => $this->status,
            'createdAt' => $this->createdAt,
        ]);

        $query->andFilterWhere(['like', 'userEmail', $this->userEmail])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'ikey', $this->ikey])
            ->andFilterWhere(['like', 'amount', $this->amount])
            ->andFilterWhere(['like', 'availablity', $this->availablity])
            ->andFilterWhere(['like', 'productCondition', $this->productCondition])
            ->andFilterWhere(['like', 'brand', $this->brand])
            ->andFilterWhere(['like', 'image', $this->image])
            ->andFilterWhere(['like', 'category', $this->category]);

        return $dataProvider;
    }
}
