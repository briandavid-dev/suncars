<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_subcategories".
 *
 * @property integer $subcategorie_id
 * @property string $subcategorie_name
 * @property string $subcategorie_http
 * @property integer $categorie_id
 *
 * @property CmsCategories $categories
 */
class CmsSubcategories extends \yii\db\ActiveRecord
{



    public static function getDb() {

  return Yii::$app->get('db');

    }
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_subcategories';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [[ 'subcategorie_name', 'categorie_id'], 'required'],
            [['subcategorie_id', 'categorie_id'], 'integer'],
            [['subcategorie_name', 'subcategorie_http'], 'string', 'max' => 100],
            [['categorie_id'], 'exist', 'skipOnError' => true, 'targetClass' => CmsCategories::className(), 'targetAttribute' => ['categorie_id' => 'categorie_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subcategorie_id' => 'Id',
            'subcategorie_name' => 'Nombre',
            'subcategorie_http' => 'Http
',
            'categorie_id' => 'Categoria',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasOne(CmsCategories::className(), ['categorie_id' => 'categorie_id']);
    }
}
