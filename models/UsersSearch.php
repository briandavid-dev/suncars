<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Users;

/**
 * UsersSearch represents the model behind the search form about `app\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_id', 'usuario_activo', 'usuario_online'], 'integer'],
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_password', 'usuario_fecha_creacion', 'usuario_fecha_modificacion', 'usuario_fecha_ultimo_acceso', 'usuario_email', 'usuario_telefono_1', 'usuario_telefono_2', 'usuario_direccion', 'usuario_perfi', 'usuario_imagen_1', 'usuario_estado', 'usuario_mensaje_publico', 'usuario_genero', 'usuario_fecha_nacimiento', 'authKey', 'accessToken'], 'safe'],
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
        $query = Users::find();

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
            'usuario_id' => $this->usuario_id,
            'usuario_fecha_creacion' => $this->usuario_fecha_creacion,
            'usuario_fecha_modificacion' => $this->usuario_fecha_modificacion,
            'usuario_fecha_ultimo_acceso' => $this->usuario_fecha_ultimo_acceso,
            'usuario_activo' => $this->usuario_activo,
            'usuario_online' => $this->usuario_online,
            'usuario_fecha_nacimiento' => $this->usuario_fecha_nacimiento,
        ]);

        $query->andFilterWhere(['like', 'usuario_nombre', $this->usuario_nombre])
            ->andFilterWhere(['like', 'usuario_apellido', $this->usuario_apellido])
            ->andFilterWhere(['like', 'usuario_login', $this->usuario_login])
            ->andFilterWhere(['like', 'usuario_password', $this->usuario_password])
            ->andFilterWhere(['like', 'usuario_email', $this->usuario_email])
            ->andFilterWhere(['like', 'usuario_telefono_1', $this->usuario_telefono_1])
            ->andFilterWhere(['like', 'usuario_telefono_2', $this->usuario_telefono_2])
            ->andFilterWhere(['like', 'usuario_direccion', $this->usuario_direccion])
            ->andFilterWhere(['like', 'usuario_perfi', $this->usuario_perfi])
            ->andFilterWhere(['like', 'usuario_imagen_1', $this->usuario_imagen_1])
            ->andFilterWhere(['like', 'usuario_estado', $this->usuario_estado])
            ->andFilterWhere(['like', 'usuario_mensaje_publico', $this->usuario_mensaje_publico])
            ->andFilterWhere(['like', 'usuario_genero', $this->usuario_genero])
            ->andFilterWhere(['like', 'authKey', $this->authKey])
            ->andFilterWhere(['like', 'accessToken', $this->accessToken]);

        return $dataProvider;
    }
}
