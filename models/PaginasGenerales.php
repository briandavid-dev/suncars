<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "paginas_generales".
 *
 * @property integer $pagina_general_id
 * @property string $pagina_general_titulo
 * @property string $pagina_general_http
 * @property string $pagina_general_contenido_1
 * @property string $pagina_general_contenido_2
 */
class PaginasGenerales extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'paginas_generales';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pagina_general_titulo', 'pagina_general_http'], 'required'],
            [['pagina_general_titulo', 'pagina_general_http', 'pagina_general_contenido_1', 'pagina_general_contenido_2'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pagina_general_id' => 'Pagina General ID',
            'pagina_general_titulo' => 'Título',
            'pagina_general_http' => 'Http',
            'pagina_general_contenido_1' => 'Contenido 1',
            'pagina_general_contenido_2' => 'Contenido 2',
        ];
    }

    /**
     * @inheritdoc
     * @return PaginasGeneralesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new PaginasGeneralesQuery(get_called_class());
    }
}
