<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_general_pages".
 *
 * @property string $general_pages_id
 * @property string $general_pages_content
 */
class CmsGeneralPages extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_general_pages';
    }
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
            [['general_pages_id'], 'required'],
            [['general_pages_content'], 'string'],
            [['general_pages_id'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'general_pages_id' => 'ID Nombre',
            'general_pages_content' => 'Contenido',
            'general_pages_banner' => 'Imagen'
        ];
    }
}
