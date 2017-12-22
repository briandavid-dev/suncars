<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsPrincipalcategories;

/**
 * CmsPrincipalcategoriesSearch represents the model behind the search form about `app\models\CmsPrincipalcategories`.
 */
class CmsPrincipalcategoriesSearch extends CmsPrincipalcategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['principalcategories_id', 'principalcategories_status'], 'integer'],
            [['principalcategories_name', 'principalcategories_http', 'principalcategories_codigo'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = CmsPrincipalcategories::find();

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
            'principalcategories_id' => $this->principalcategories_id,
            'principalcategories_status' => $this->principalcategories_status,
        ]);

        $query->andFilterWhere(['like', 'principalcategories_name', $this->principalcategories_name])
            ->andFilterWhere(['like', 'principalcategories_http', $this->principalcategories_http])
            ->andFilterWhere(['like', 'principalcategories_codigo', $this->principalcategories_codigo]);

        return $dataProvider;
    }
}
