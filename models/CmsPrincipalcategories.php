<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_principalcategories".
 *
 * @property integer $principalcategories_id
 * @property string $principalcategories_name
 * @property string $principalcategories_http
 * @property string $principalcategories_codigo
 * @property integer $principalcategories_status
 *
 * @property CmsCategories[] $cmsCategories
 */
class CmsPrincipalcategories extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_principalcategories';
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
            [['principalcategories_status'], 'integer'],
            [['principalcategories_name', 'principalcategories_http'], 'string', 'max' => 100],
            [['principalcategories_codigo'], 'string', 'max' => 45],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'principalcategories_id' => Yii::t('app', 'Id'),
            'principalcategories_name' => Yii::t('app', 'Nombre'),
            'principalcategories_http' => Yii::t('app', 'Http'),
            'principalcategories_codigo' => Yii::t('app', 'Codigo'),
            'principalcategories_status' => Yii::t('app', '
status'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsCategories()
    {
        return $this->hasMany(CmsCategories::className(), ['principalcategories_id' => 'principalcategories_id']);
    }
}
