<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "correos".
 *
 * @property integer $correo_id
 * @property string $correo_principal
 * @property string $correo_copia_principal
 * @property string $correo_secundario
 * @property string $correo_secundario_copia
 */
class Correos extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'correos';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['correo_principal'], 'required'],
            [['correo_principal', 'correo_copia_principal', 'correo_secundario', 'correo_secundario_copia'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'correo_id' => Yii::t('app', 'Correo ID'),
            'correo_principal' => Yii::t('app', 'Correo para formulario contacto'),
            'correo_copia_principal' => Yii::t('app', 'Correo Copia formulario  contacto'),
            'correo_secundario' => Yii::t('app', 'Correo para personal de citas'),
            'correo_secundario_copia' => Yii::t('app', 'Correo copia personal de citas'),
        ];
    }
}
