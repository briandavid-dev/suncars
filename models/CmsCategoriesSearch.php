<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsCategories;

/**
 * CmsCategoriesSearch represents the model behind the search form about `app\models\CmsCategories`.
 */
class CmsCategoriesSearch extends CmsCategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categorie_id'], 'integer'],
            [['categorie_name', 'categorie_http'], 'safe'],
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
        $query = CmsCategories::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
		    'pagination' => [
		        'pageSize' => 300,
		    ],
		    'sort' => [
		        'defaultOrder' => [
		            'categorie_position' => SORT_ASC,
		        ]
		    ],
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'categorie_id' => $this->categorie_id,
        ]);

        $query->andFilterWhere(['like', 'categorie_name', $this->categorie_name])
            ->andFilterWhere(['like', 'categorie_http', $this->categorie_http]);

        return $dataProvider;
    }
}
