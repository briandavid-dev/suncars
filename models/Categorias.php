<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "categorias".
 *
 * @property integer $categoria_id
 * @property string $categoria_codigo
 * @property string $categoria_nombre
 * @property string $categoria_http
 *
 * @property Subcategorias[] $subcategorias
 */
class Categorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'categorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['categoria_nombre'], 'required'],
            [['categoria_nombre', 'categoria_http'], 'string'],
            [['categoria_codigo'], 'string', 'max' => 5],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'categoria_id' => Yii::t('app', 'ID Categoría'),
            'categoria_codigo' => Yii::t('app', 'Código'),
            'categoria_nombre' => Yii::t('app', 'Nombre'),
            'categoria_http' => Yii::t('app', 'HTTP'),
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSubcategorias()
    {
        return $this->hasMany(Subcategorias::className(), ['categoria_id' => 'categoria_id']);
    }

    /**
     * @inheritdoc
     * @return CategoriasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriasQuery(get_called_class());
    }
}
