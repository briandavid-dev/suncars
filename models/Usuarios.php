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
 *
 * @property Comentarios[] $comentarios
 * @property Contenidos[] $contenidos
 */
class Usuarios extends \yii\db\ActiveRecord
{
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
            [['usuario_id', 'usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_password', 'usuario_email', 'usuario_direccion', 'usuario_perfil'], 'required'],
            [['usuario_id', 'usuario_activo', 'usuario_online'], 'integer'],
            [['usuario_fecha_creacion', 'usuario_fecha_modificacion', 'usuario_fecha_ultimo_acceso', 'usuario_fecha_nacimiento'], 'safe'],
            [['usuario_email', 'usuario_direccion', 'usuario_imagen_1', 'authKey', 'accessToken'], 'string'],
            [['usuario_nombre', 'usuario_apellido', 'usuario_login', 'usuario_password', 'usuario_perfil', 'usuario_genero'], 'string', 'max' => 45],
            [['usuario_telefono_1', 'usuario_telefono_2'], 'string', 'max' => 15],
            [['usuario_estado'], 'string', 'max' => 20],
            [['usuario_mensaje_publico'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'usuario_id' => 'Usuario ID',
            'usuario_nombre' => 'Usuario Nombre',
            'usuario_apellido' => 'Usuario Apellido',
            'usuario_login' => 'Usuario Login',
            'usuario_password' => 'Usuario Password',
            'usuario_fecha_creacion' => 'Usuario Fecha Creacion',
            'usuario_fecha_modificacion' => 'Usuario Fecha Modificacion',
            'usuario_fecha_ultimo_acceso' => 'Usuario Fecha Ultimo Acceso',
            'usuario_email' => 'Usuario Email',
            'usuario_telefono_1' => 'Usuario Telefono 1',
            'usuario_telefono_2' => 'Usuario Telefono 2',
            'usuario_direccion' => 'Usuario Direccion',
            'usuario_activo' => 'Usuario Activo',
            'usuario_online' => 'Usuario Online',
            'usuario_perfil' => 'Usuario Perfil',
            'usuario_imagen_1' => 'Usuario Imagen 1',
            'usuario_estado' => 'Usuario Estado',
            'usuario_mensaje_publico' => 'Usuario Mensaje Publico',
            'usuario_genero' => 'Usuario Genero',
            'usuario_fecha_nacimiento' => 'Usuario Fecha Nacimiento',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComentarios()
    {
        return $this->hasMany(Comentarios::className(), ['usuario_id' => 'usuario_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getContenidos()
    {
        return $this->hasMany(Contenidos::className(), ['usuario_id' => 'usuario_id']);
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
