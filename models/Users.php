<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property integer $usuario_id
 * @property string $usuario_nombre
 * @property string $usuario_apellido
 * @property string $usuario_login
 * @property string $usuario_password
 * @property string $usuario_fecha_creacion
 * @property string $usuario_fecha_modificacion
 * @property string $usuario_fecha_ultimo_acceso
 * @property string $usuario_email
 * @property string $usuario_telefono_1
 * @property string $usuario_telefono_2
 * @property string $usuario_direccion
 * @property integer $usuario_activo
 * @property integer $usuario_online
 * @property string $usuario_perfil
 * @property string $usuario_imagen_1
 * @property string $usuario_estado
 * @property string $usuario_mensaje_publico
 * @property string $usuario_genero
 * @property string $usuario_fecha_nacimiento
 * @property string $authKey
 * @property string $accessToken
 * @property integer $pais_id 
 * @property integer $usuario_codigo 
 * @property string $usuario_fecha_codigo 
 *
 * @property CmsPosts[] $cmsPosts
 * @property CitasMedicas[] $citasMedicas
 * @property Notificaciones[] $notificaciones
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('db');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_password', 'usuario_email', 'usuario_perfi' , 'pais_id'], 'required'],
            [['usuario_password', 'usuario_email', 'usuario_direccion', 'usuario_imagen_1', 'authKey', 'accessToken', 'usuario_codigo', 'usuario_fecha_codigo'], 'string'],
            [['usuario_fecha_creacion', 'usuario_fecha_modificacion', 'usuario_fecha_ultimo_acceso', 'usuario_fecha_nacimiento'], 'safe'],
            [['usuario_activo', 'usuario_online'], 'integer'],
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_perfi', 'usuario_genero'], 'string', 'max' => 45],
            [['usuario_telefono_1', 'usuario_telefono_2'], 'string', 'max' => 15],
            [['usuario_estado'], 'string', 'max' => 20],
            [['usuario_mensaje_publico'], 'string', 'max' => 100],
        		
        	[['pais_id'], 'exist', 'skipOnError' => true, 'targetClass' => Paises::className(), 'targetAttribute' => ['pais_id' => 'pais_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Id',
            'usuario_nombre' => 'Nombre ',
            'usuario_apellido' => 'Apellido',
            'usuario_login' => 'Inicio',
            'usuario_password' => 'Clave',
            'usuario_fecha_creacion' => 'Fecha de creacion',
            'usuario_fecha_modificacion' => 'Fecha de modificacion',
            'usuario_fecha_ultimo_acceso' => 'Fecha de ultimo  acceso',
            'usuario_email' => 'Correo',
            'usuario_telefono_1' => 'Usuario Telefono 1',
            'usuario_telefono_2' => 'Telefono secundario',
            'usuario_direccion' => 'Direccion',
            'usuario_activo' => 'conexion',
            'usuario_online' => 'Usuario Online',
            'usuario_perfi' => 'Perfil',
            'usuario_imagen_1' => 'Imagen 1',
            'usuario_estado' => 'Estado',
            'usuario_mensaje_publico' => 'Mensaje público',
            'usuario_genero' => 'Género',
            'usuario_fecha_nacimiento' => 'Fecha nacimiento',
            'authKey' => 'autkey',
            'accessToken' => 'acceso a token',
            'pais_id' => Yii::t('app', 'País'),
            'usuario_codigo' => 'Código',
            'usuario_fecha_codigo' => 'Fecha código',
            'cita_medica_id' => 'Cita medica',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsPosts()
    {
        return $this->hasMany(CmsPosts::className(), ['usuario_id' => 'usuario_id']);
    }
    
    
    
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPais()
    {
    	return $this->hasOne(Paises::className(), ['pais_id' => 'pais_id']);
    }
    
}
