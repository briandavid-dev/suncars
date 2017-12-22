<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsSubcategories;

/**
 * CmsSubcategoriesSearch represents the model behind the search form about `app\models\CmsSubcategories`.
 */
class CmsSubcategoriesSearch extends CmsSubcategories
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subcategorie_id', 'categorie_id'], 'integer'],
            [['subcategorie_name', 'subcategorie_http'], 'safe'],
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
        $query = CmsSubcategories::find();

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
            'subcategorie_id' => $this->subcategorie_id,
            'categorie_id' => $this->categorie_id,
        ]);

        $query->andFilterWhere(['like', 'subcategorie_name', $this->subcategorie_name])
            ->andFilterWhere(['like', 'subcategorie_http', $this->subcategorie_http]);

        return $dataProvider;
    }
}
