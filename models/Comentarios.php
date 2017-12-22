<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "comentarios".
 *
 * @property integer $comentario_id
 * @property string $comentario_texto
 * @property integer $comentario_asociado_id
 * @property integer $contenido_id
 * @property integer $usuario_id
 *
 * @property Contenidos $contenido
 * @property Usuarios $usuario
 */
class Comentarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'comentarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comentario_texto'], 'string'],
            [['comentario_asociado_id', 'contenido_id', 'usuario_id'], 'integer'],
            [['contenido_id', 'usuario_id'], 'required'],
            [['contenido_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contenidos::className(), 'targetAttribute' => ['contenido_id' => 'contenido_id']],
            [['usuario_id'], 'exist', 'skipOnError' => true, 'targetClass' => Usuarios::className(), 'targetAttribute' => ['usuario_id' => 'usuario_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'comentario_id' => 'Comentario ID',
            'comentario_texto' => 'Comentario Texto',
            'comentario_asociado_id' => 'Comentario Asociado ID',
            'contenido_id' => 'Contenido ID',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContenido()
    {
        return $this->hasOne(Contenidos::className(), ['contenido_id' => 'contenido_id']);
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
     * @return ComentariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ComentariosQuery(get_called_class());
    }
}
