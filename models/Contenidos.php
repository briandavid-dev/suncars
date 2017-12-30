<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contenidos".
 *
 * @property integer $contenido_id
 * @property string $contenido_titulo
 * @property string $contenido_resumen
 * @property string $contenido_detalles
 * @property integer $contenido_disponibilidad
 * @property string $contenido_http
 * @property string $contenido_imagen_1
 * @property string $contenido_imagen_2
 * @property string $contenido_imagen_3
 * @property double $contenido_precio
 * @property string $contenido_fecha_creacion
 * @property string $contenido_tipo
 * @property string $contenido_marca
 * @property string $contenido_categorias
 * @property string $contenido_subcategorias
 * @property integer $usuario_id
 * @property string $contenido_imagen_4
 * @property string $contenido_imagen_5
 * @property string $contenido_imagen_6
 * @property string $contenido_imagen_7
 * @property string $contenido_imagen_8
 * @property string $contenido_imagen_9
 * @property string $contenido_imagen_10
 *
 * @property Comentarios[] $comentarios
 * @property Usuarios $usuario
 * @property Solicitudes[] $solicitudes
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
            [['contenido_titulo', 'contenido_resumen', 'contenido_detalles', 'contenido_http', 'contenido_imagen_1', 'contenido_imagen_2', 'contenido_imagen_3', 'contenido_tipo', 'contenido_marca', 'contenido_categorias', 'contenido_subcategorias', 'contenido_imagen_4', 'contenido_imagen_5', 'contenido_imagen_6', 'contenido_imagen_7', 'contenido_imagen_8', 'contenido_imagen_9', 'contenido_imagen_10'], 'string'],
            [['contenido_disponibilidad', 'usuario_id'], 'integer'],
            [['contenido_precio'], 'number'],
            [['contenido_fecha_creacion'], 'safe'],
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
            'contenido_resumen' => 'Contenido Resumen',
            'contenido_detalles' => 'Contenido Detalles',
            'contenido_disponibilidad' => 'Contenido Disponibilidad',
            'contenido_http' => 'Contenido Http',
            'contenido_imagen_1' => 'Contenido Imagen 1',
            'contenido_imagen_2' => 'Contenido Imagen 2',
            'contenido_imagen_3' => 'Contenido Imagen 3',
            'contenido_precio' => 'Contenido Precio',
            'contenido_fecha_creacion' => 'Contenido Fecha Creacion',
            'contenido_tipo' => 'Contenido Tipo',
            'contenido_marca' => 'Contenido Marca',
            'contenido_categorias' => 'Contenido Categorias',
            'contenido_subcategorias' => 'Contenido Subcategorias',
            'usuario_id' => 'Usuario ID',
            'contenido_imagen_4' => 'Contenido Imagen 4',
            'contenido_imagen_5' => 'Contenido Imagen 5',
            'contenido_imagen_6' => 'Contenido Imagen 6',
            'contenido_imagen_7' => 'Contenido Imagen 7',
            'contenido_imagen_8' => 'Contenido Imagen 8',
            'contenido_imagen_9' => 'Contenido Imagen 9',
            'contenido_imagen_10' => 'Contenido Imagen 10',
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
     * @return \yii\db\ActiveQuery
     */
    public function getSolicitudes()
    {
        return $this->hasMany(Solicitudes::className(), ['contenido_id' => 'contenido_id']);
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
