<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Contenidos;

/**
 * ContenidosSearch represents the model behind the search form about `app\models\Contenidos`.
 */
class ContenidosSearch extends Contenidos
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenido_id', 'contenido_disponibilidad', 'usuario_id'], 'integer'],
            [['contenido_titulo', 'contenido_resumen', 'contenido_detalles', 'contenido_http', 'contenido_imagen_1', 'contenido_imagen_2', 'contenido_imagen_3', 'contenido_fecha_creacion', 'contenido_tipo', 'contenido_marca', 'contenido_categorias', 'contenido_subcategorias'], 'safe'],
            [['contenido_precio'], 'number'],
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
        $query = Contenidos::find();

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
            'contenido_id' => $this->contenido_id,
            'contenido_disponibilidad' => $this->contenido_disponibilidad,
            'contenido_precio' => $this->contenido_precio,
            'contenido_fecha_creacion' => $this->contenido_fecha_creacion,
            'usuario_id' => $this->usuario_id,
        ]);

        $query->andFilterWhere(['like', 'contenido_titulo', $this->contenido_titulo])
            ->andFilterWhere(['like', 'contenido_resumen', $this->contenido_resumen])
            ->andFilterWhere(['like', 'contenido_detalles', $this->contenido_detalles])
            ->andFilterWhere(['like', 'contenido_http', $this->contenido_http])
            ->andFilterWhere(['like', 'contenido_imagen_1', $this->contenido_imagen_1])
            ->andFilterWhere(['like', 'contenido_imagen_2', $this->contenido_imagen_2])
            ->andFilterWhere(['like', 'contenido_imagen_3', $this->contenido_imagen_3])
            ->andFilterWhere(['like', 'contenido_tipo', $this->contenido_tipo])
            ->andFilterWhere(['like', 'contenido_marca', $this->contenido_marca])
            ->andFilterWhere(['like', 'contenido_categorias', $this->contenido_categorias])
            ->andFilterWhere(['like', 'contenido_subcategorias', $this->contenido_subcategorias]);

        return $dataProvider;
    }
}
