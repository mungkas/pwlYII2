<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tblmakan;

/**
 * TblmakanSearch represents the model behind the search form of `app\models\Tblmakan`.
 */
class TblmakanSearch extends Tblmakan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['deks', 'nama', 'gambar'], 'safe'],
            [['id', 'harga'], 'integer'],
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
        $query = Tblmakan::find();

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
            'harga' => $this->harga,
        ]);

        $query->andFilterWhere(['like', 'deks', $this->deks])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'gambar', $this->gambar]);

        return $dataProvider;
    }
}
