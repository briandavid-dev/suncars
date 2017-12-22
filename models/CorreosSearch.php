<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Correos;

/**
 * CorreosSearch represents the model behind the search form about `app\models\Correos`.
 */
class CorreosSearch extends Correos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correo_id'], 'integer'],
            [['correo_principal', 'correo_copia_principal', 'correo_secundario', 'correo_secundario_copia'], 'safe'],
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
        $query = Correos::find();

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
            'correo_id' => $this->correo_id,
        ]);

        $query->andFilterWhere(['like', 'correo_principal', $this->correo_principal])
            ->andFilterWhere(['like', 'correo_copia_principal', $this->correo_copia_principal])
            ->andFilterWhere(['like', 'correo_secundario', $this->correo_secundario])
            ->andFilterWhere(['like', 'correo_secundario_copia', $this->correo_secundario_copia]);

        return $dataProvider;
    }
}
