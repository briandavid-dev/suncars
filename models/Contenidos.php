<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contenidos".
 *
 * @property integer $contenido_id
 * @property string $contenido_titulo
 * @property string $contenido_texto
 * @property string $contenido_http
 * @property string $contenido_imagen_1
 * @property string $contenido_imagen_2
 * @property string $contenido_imagen_3
 * @property double $contenido_precio
 * @property string $contenido_fecha_creacion
 * @property string $contenido_tipo
 * @property string $contenido_marca
 * @property string $contenido_categoria
 * @property string $contenido_subcategoria
 * @property string $contenidoscol
 * @property integer $usuario_id
 *
 * @property Comentarios[] $comentarios
 * @property Usuarios $usuario
 */
class Contenidos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contenidos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['contenido_titulo', 'usuario_id'], 'required'],
            [['contenido_titulo', 'contenido_texto', 'contenido_http', 'contenido_imagen_1', 'contenido_imagen_2', 'contenido_imagen_3', 'contenido_tipo', 'contenido_categoria', 'contenido_subcategoria'], 'string'],
            [['contenido_precio'], 'number'],
            [['contenido_fecha_creacion'], 'safe'],
            [['usuario_id'], 'integer'],
            [['contenido_marca', 'contenidoscol'], 'string', 'max' => 45],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'contenido_id' => 'Contenido ID',
            'contenido_titulo' => 'Contenido Titulo',
            'contenido_texto' => 'Contenido Texto',
            'contenido_http' => 'Contenido Http',
            'contenido_imagen_1' => 'Contenido Imagen 1',
            'contenido_imagen_2' => 'Contenido Imagen 2',
            'contenido_imagen_3' => 'Contenido Imagen 3',
            'contenido_precio' => 'Contenido Precio',
            'contenido_fecha_creacion' => 'Contenido Fecha Creacion',
            'contenido_tipo' => 'Contenido Tipo',
            'contenido_marca' => 'Contenido Marca',
            'contenido_categoria' => 'Contenido Categoria',
            'contenido_subcategoria' => 'Contenido Subcategoria',
            'contenidoscol' => 'Contenidoscol',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentarios::className(), ['contenido_id' => 'contenido_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuarios::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @inheritdoc
     * @return ContenidosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ContenidosQuery(get_called_class());
    }
}
