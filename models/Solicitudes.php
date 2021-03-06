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

            [['solicitud_email'], 'email'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'solicitud_id' => Yii::t('app', 'ID'),
            'solicitud_nombre' => Yii::t('app', 'Nombre'),
            'solicitud_email' => Yii::t('app', 'E-Mail'),
            'solicitud_mensaje' => Yii::t('app', 'Mensaje'),
            'solicitud_telefono' => Yii::t('app', 'Teléfono'),
            'contenido_id' => Yii::t('app', 'Contenido Asociado'),
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
