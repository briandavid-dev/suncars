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

            'contenido_id' => Yii::t('app', 'ID Contenido'),
            'contenido_titulo' => Yii::t('app', 'Título'),
            'contenido_resumen' => Yii::t('app', 'Resumen'),
            'contenido_detalles' => Yii::t('app', 'Detalles
'),
            'contenido_disponibilidad' => Yii::t('app', 'Disponibilidad
'),
            'contenido_http' => Yii::t('app', 'HTTP'),
            'contenido_imagen_1' => Yii::t('app', 'Imagen Tamaño Grande'),
            'contenido_imagen_2' => Yii::t('app', 'Imagen 2 Tamaño Grande'),
            'contenido_imagen_3' => Yii::t('app', 'Imagen 3 Tamaño Grande'),
            'contenido_precio' => Yii::t('app', 'Precio'),
            'contenido_fecha_creacion' => Yii::t('app', 'Fecha de Creación'),
            'contenido_tipo' => Yii::t('app', 'Tipo Contenido'),
            'contenido_marca' => Yii::t('app', 'Marca'),
            'contenido_categorias' => Yii::t('app', 'Categoría'),
            'contenido_subcategorias' => Yii::t('app', 'Sub Categoría'),
            'usuario_id' => Yii::t('app', 'ID Usuario'),
            'contenido_imagen_4' => 'Imagen 4 Tamaño Grande',
            'contenido_imagen_5' => 'Imagen 5 Tamaño Grande',
            'contenido_imagen_6' => 'Imagen Tamaño Pequeño',
            'contenido_imagen_7' => 'Imagen 2 Tamaño Pequeño',
            'contenido_imagen_8' => 'Imagen 3 Tamaño Pequeño',
            'contenido_imagen_9' => 'Imagen 4 Tamaño Pequeño',
            'contenido_imagen_10' => 'Imagen 5 Tamaño Pequeño',


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
