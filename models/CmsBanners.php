<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_banners".
 *
 * @property integer $banner_id
 * @property string $banner_imagen
 * @property string $banner_titulo
 */
class CmsBanners extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_banners';
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
           
            [['banner_id'], 'integer'],
            [['banner_imagen', 'banner_titulo', 'banner_ubicacion'], 'required'],
            [['banner_titulo'], 'string', 'max' => 45],
            //[['banner_imagen'], 'required', 'on'=>'insert'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'banner_id' => Yii::t('app', 'cod_id'),
            'banner_imagen' => Yii::t('app', 'imagen'),
            'banner_titulo' => Yii::t('app', 'titulo'),
            //'banner_tipo' => Yii::t('app', 'tipo'),
        ];
    }

    /**
     * @inheritdoc
     * @return CmsBannersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CmsBannersQuery(get_called_class());
    }
}
