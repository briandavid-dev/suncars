<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuarios".
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
 */
class Usuarios extends \yii\db\ActiveRecord
{
	
	public $usuario_email_confirmacion;
	public $usuario_password_confirmacion;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_perfil'], 'required'],
            [['usuario_password', 'usuario_email', 'usuario_direccion', 'usuario_imagen_1', 'authKey', 'accessToken'], 'string'],
            [['usuario_fecha_creacion', 'usuario_fecha_modificacion', 'usuario_fecha_ultimo_acceso', 'usuario_fecha_nacimiento'], 'safe'],
            [[ 'usuario_online'], 'integer'],
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_perfil', 'usuario_genero'], 'string', 'max' => 45],
            [['usuario_telefono_1', 'usuario_telefono_2'], 'string', 'max' => 15],
            [['usuario_estado'], 'string', 'max' => 20],
            [['usuario_mensaje_publico'], 'string', 'max' => 100],
        		
        	[['usuario_email', 'usuario_email_confirmacion'],'required'],
        	[['usuario_email', 'usuario_email_confirmacion'],'email'],
        	[['usuario_email'],'unique'],
        	[['usuario_email'],'compare','compareAttribute'=>'usuario_email_confirmacion'],
        	
        	[['usuario_password', 'usuario_password_confirmacion'],'required'],
        	[['usuario_password', 'usuario_password_confirmacion'], 'string', 'length' => [8, 50]],
        	[['usuario_password'],'compare','compareAttribute'=>'usuario_password_confirmacion'],

      ['usuario_activo', 'in', 'range' => ['1','0'], 'strict' => true,'message' => 'Debes colocar 1 = SI o  0 = NO'],
        		
        		
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'ID USUARIO',
            'usuario_nombre' => 'Nombre',
            'usuario_apellido' => 'Apellido',
            'usuario_login' => 'Login',
            'usuario_password' => 'Contraseña',
            'usuario_fecha_creacion' => 'Fecha Creación',
            'usuario_fecha_modificacion' => 'Fecha modificación
',
            'usuario_fecha_ultimo_acceso' => 'Fecha último acceso',
            'usuario_email' => 'Correo Electrónico',
            'usuario_telefono_1' => 'Teléfono 1',
            'usuario_telefono_2' => 'Teléfono 2',
            'usuario_direccion' => 'Dirección',
            'usuario_activo' => 'Usuario Activo',
            'usuario_online' => 'Usuario Online',
            'usuario_perfil' => 'Perfíl',
            'usuario_imagen_1' => 'Usuario Imagen 1',
            'usuario_estado' => 'Disponibilidad',
            'usuario_mensaje_publico' => 'Mensaje al público',
            'usuario_genero' => 'Género',
            'usuario_fecha_nacimiento' => 'Fecha de Nacimiento',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        		
        		'usuario_password_confirmacion' => 'Vuelva a Introducir Contraseña',
        		'usuario_email_confirmacion' => 'Vuelva a Introducir E-Mail',
        ];
    }

    /**
     * @inheritdoc
     * @return UsuariosQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsuariosQuery(get_called_class());
    }
}
