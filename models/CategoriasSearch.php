<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Categorias;

/**
 * CategoriasSearch represents the model behind the search form about `app\models\Categorias`.
 */
class CategoriasSearch extends Categorias
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoria_id'], 'integer'],
            [['categoria_codigo', 'categoria_nombre', 'categoria_http'], 'safe'],
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
        $query = Categorias::find();

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
            'categoria_id' => $this->categoria_id,
        ]);

        $query->andFilterWhere(['like', 'categoria_codigo', $this->categoria_codigo])
            ->andFilterWhere(['like', 'categoria_nombre', $this->categoria_nombre])
            ->andFilterWhere(['like', 'categoria_http', $this->categoria_http]);

        return $dataProvider;
    }
}
