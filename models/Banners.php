<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property integer $banner_id
 * @property string $banner_titulo
 * @property string $banner_descripcion
 * @property string $banner_ruta_imagen
 * @property string $banner_imagen_base
 * @property string $banne_fecha_creacion
 * @property string $banner_fecha_modificacion
 * @property string $banner_http
 * @property integer $banner_abre_nueva_pestana
 * @property integer $es_banner_top
 * @property integer $banner_en_home
 */
class Banners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['banner_titulo', 'banner_descripcion', 'banner_ruta_imagen', 'banner_imagen_base', 'banner_http'], 'string'],
            //[['banner_ruta_imagen'], 'required'],
            [['banne_fecha_creacion', 'banner_fecha_modificacion'], 'safe'],
            [['banner_abre_nueva_pestana', 'es_banner_top', 'banner_en_home'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => 'Banner ID',
            'banner_titulo' => 'Banner Titulo',
            'banner_descripcion' => 'Banner Descripcion',
            'banner_ruta_imagen' => 'Banner Imagen Base',
            'banne_fecha_creacion' => 'Banne Fecha Creacion',
            'banner_fecha_modificacion' => 'Banner Fecha Modificacion',
            'banner_http' => 'Banner Http',
            'banner_abre_nueva_pestana' => 'Banner Abre Nueva Pestana',
            'es_banner_top' => 'Es Banner Top',
            'banner_en_home' => 'Banner En Home',
        ];
    }

    /**
     * @inheritdoc
     * @return BannersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BannersQuery(get_called_class());
    }
}
