<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\PaginasGenerales;

/**
 * PaginasGeneralesSearch represents the model behind the search form about `app\models\PaginasGenerales`.
 */
class PaginasGeneralesSearch extends PaginasGenerales
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pagina_general_id'], 'integer'],
            [['pagina_general_titulo', 'pagina_general_http', 'pagina_general_contenido_1', 'pagina_general_contenido_2'], 'safe'],
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
        $query = PaginasGenerales::find();

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
            'pagina_general_id' => $this->pagina_general_id,
        ]);

        $query->andFilterWhere(['like', 'pagina_general_titulo', $this->pagina_general_titulo])
            ->andFilterWhere(['like', 'pagina_general_http', $this->pagina_general_http])
            ->andFilterWhere(['like', 'pagina_general_contenido_1', $this->pagina_general_contenido_1])
            ->andFilterWhere(['like', 'pagina_general_contenido_2', $this->pagina_general_contenido_2]);

        return $dataProvider;
    }
}
