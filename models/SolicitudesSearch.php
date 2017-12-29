<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Solicitudes;

/**
 * SolicitudesSearch represents the model behind the search form about `app\models\Solicitudes`.
 */
class SolicitudesSearch extends Solicitudes
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['solicitud_id', 'contenido_id'], 'integer'],
            [['solicitud_nombre', 'solicitud_email', 'solicitud_mensaje', 'solicitud_telefono'], 'safe'],
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
        $query = Solicitudes::find();

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
            'solicitud_id' => $this->solicitud_id,
            'contenido_id' => $this->contenido_id,
        ]);

        $query->andFilterWhere(['like', 'solicitud_nombre', $this->solicitud_nombre])
            ->andFilterWhere(['like', 'solicitud_email', $this->solicitud_email])
            ->andFilterWhere(['like', 'solicitud_mensaje', $this->solicitud_mensaje])
            ->andFilterWhere(['like', 'solicitud_telefono', $this->solicitud_telefono]);

        return $dataProvider;
    }
}
