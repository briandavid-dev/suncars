<?php

namespace app\models;

use Yii;


/**
 * This is the model class for table "cms_categories".
 *
 * @property integer $categorie_id
 * @property string $categorie_name
 * @property string $categorie_http
 *
 * @property CmsSubcategories[] $cmsSubcategories
 */
class CmsCategories extends \yii\db\ActiveRecord
{




    public static function getDb() {

  return Yii::$app->get('db2');

    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_categories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categorie_name'], 'required'],
            [['categorie_id'], 'integer'],
            [['categorie_name', 'categorie_http'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categorie_id' => 'Id',
            'categorie_name' => 'Nombre',
            'categorie_http' => 'Http',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsSubcategories()
    {
        return $this->hasMany(CmsSubcategories::className(), ['categorie_id' => 'categorie_id']);
    }
}
