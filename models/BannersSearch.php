<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Banners;

/**
 * BannersSearch represents the model behind the search form about `app\models\Banners`.
 */
class BannersSearch extends Banners
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_id', 'banner_abre_nueva_pestana', 'es_banner_top', 'banner_en_home'], 'integer'],
            [['banner_titulo', 'banner_descripcion', 'banner_ruta_imagen', 'banner_imagen_base', 'banne_fecha_creacion', 'banner_fecha_modificacion', 'banner_http'], 'safe'],
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
        $query = Banners::find();

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
            'banner_id' => $this->banner_id,
            'banne_fecha_creacion' => $this->banne_fecha_creacion,
            'banner_fecha_modificacion' => $this->banner_fecha_modificacion,
            'banner_abre_nueva_pestana' => $this->banner_abre_nueva_pestana,
            'es_banner_top' => $this->es_banner_top,
            'banner_en_home' => $this->banner_en_home,
        ]);

        $query->andFilterWhere(['like', 'banner_titulo', $this->banner_titulo])
            ->andFilterWhere(['like', 'banner_descripcion', $this->banner_descripcion])
            ->andFilterWhere(['like', 'banner_ruta_imagen', $this->banner_ruta_imagen])
            ->andFilterWhere(['like', 'banner_imagen_base', $this->banner_imagen_base])
            ->andFilterWhere(['like', 'banner_http', $this->banner_http]);

        return $dataProvider;
    }
}
