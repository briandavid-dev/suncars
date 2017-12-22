<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Subcategorias;

/**
 * SubcategoriasSearch represents the model behind the search form about `app\models\Subcategorias`.
 */
class SubcategoriasSearch extends Subcategorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subcategorias_id', 'categoria_id'], 'integer'],
            [['subcategorias_cog', 'subcategorias_nombre', 'subcategorias_http'], 'safe'],
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
        $query = Subcategorias::find();

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
            'subcategorias_id' => $this->subcategorias_id,
            'categoria_id' => $this->categoria_id,
        ]);

        $query->andFilterWhere(['like', 'subcategorias_cog', $this->subcategorias_cog])
            ->andFilterWhere(['like', 'subcategorias_nombre', $this->subcategorias_nombre])
            ->andFilterWhere(['like', 'subcategorias_http', $this->subcategorias_http]);

        return $dataProvider;
    }
}
