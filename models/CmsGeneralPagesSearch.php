<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsGeneralPages;

/**
 * CmsGeneralPagesSearch represents the model behind the search form about `app\models\CmsGeneralPages`.
 */
class CmsGeneralPagesSearch extends CmsGeneralPages
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['general_pages_id'], 'integer'],
            [['general_pages_content'], 'safe'],
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
        $query = CmsGeneralPages::find();

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
            'general_pages_id' => $this->general_pages_id,
        ]);

        $query->andFilterWhere(['like', 'general_pages_content', $this->general_pages_content]);

        return $dataProvider;
    }
}
