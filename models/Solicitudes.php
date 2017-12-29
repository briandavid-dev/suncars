<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "solicitudes".
 *
 * @property integer $solicitud_id
 * @property string $solicitud_nombre
 * @property string $solicitud_email
 * @property string $solicitud_mensaje
 * @property string $solicitud_telefono
 * @property integer $contenido_id
 *
 * @property Contenidos $contenido
 */
class Solicitudes extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'solicitudes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['solicitud_nombre', 'solicitud_email', 'solicitud_mensaje'], 'required'],
            [['solicitud_nombre', 'solicitud_email', 'solicitud_mensaje', 'solicitud_telefono'], 'string'],
            [['contenido_id'], 'integer'],
            [['contenido_id'], 'exist', 'skipOnError' => true, 'targetClass' => Contenidos::className(), 'targetAttribute' => ['contenido_id' => 'contenido_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'solicitud_id' => 'Solicitud ID',
            'solicitud_nombre' => 'Solicitud Nombre',
            'solicitud_email' => 'Solicitud Email',
            'solicitud_mensaje' => 'Solicitud Mensaje',
            'solicitud_telefono' => 'Solicitud Telefono',
            'contenido_id' => 'Contenido ID',
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
     * @inheritdoc
     * @return SolicitudesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SolicitudesQuery(get_called_class());
    }
}
