<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\CmsPosts;

/**
 * CmsPostsSearch represents the model behind the search form about `app\models\CmsPosts`.
 */
class CmsPostsSearch extends CmsPosts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['post_id', 'commnet_count' , 'user_id'], 'integer'],
            [['post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_summary', 'post_status', 'post_comment_status', 'post_name', 'post_http', 'post_categories', 'post_subcategories', 'post_modified', 'post_modified_gmt'], 'safe'],
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
        $query = CmsPosts::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
		    'pagination' => [
		        'pageSize' => 300,
		    ],
		    'sort' => [
		        'defaultOrder' => [
		            'post_date' => SORT_DESC,
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
            'post_id' => $this->post_id,
            'post_date' => $this->post_date,
            'post_date_gmt' => $this->post_date_gmt,
            'post_modified' => $this->post_modified,
            'post_modified_gmt' => $this->post_modified_gmt,
            'commnet_count' => $this->commnet_count,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'post_content', $this->post_content])
            ->andFilterWhere(['like', 'post_title', $this->post_title])
            ->andFilterWhere(['like', 'post_summary', $this->post_summary])
            ->andFilterWhere(['like', 'post_status', $this->post_status])
            ->andFilterWhere(['like', 'post_comment_status', $this->post_comment_status])
            ->andFilterWhere(['like', 'post_name', $this->post_name])
            ->andFilterWhere(['like', 'post_http', $this->post_http])
            ->andFilterWhere(['like', 'post_categories', $this->post_categories])
            ->andFilterWhere(['like', 'post_subcategories', $this->post_subcategories]);

        return $dataProvider;
    }
}
