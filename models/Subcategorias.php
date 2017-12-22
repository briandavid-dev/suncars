<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "subcategorias".
 *
 * @property integer $subcategorias_id
 * @property string $subcategorias_cog
 * @property string $subcategorias_nombre
 * @property string $subcategorias_http
 * @property integer $categoria_id
 *
 * @property Categorias $categoria
 */
class Subcategorias extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'subcategorias';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['subcategorias_nombre', 'categoria_id'], 'required'],
            [['subcategorias_nombre', 'subcategorias_http'], 'string'],
            [['categoria_id'], 'integer'],
            [['subcategorias_cog'], 'string', 'max' => 3],
            [['categoria_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categorias::className(), 'targetAttribute' => ['categoria_id' => 'categoria_id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'subcategorias_id' => 'Subcategorias ID',
            'subcategorias_cog' => 'Subcategorias Cog',
            'subcategorias_nombre' => 'Subcategorias Nombre',
            'subcategorias_http' => 'Subcategorias Http',
            'categoria_id' => 'Categoria ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategoria()
    {
        return $this->hasOne(Categorias::className(), ['categoria_id' => 'categoria_id']);
    }

    /**
     * @inheritdoc
     * @return SubcategoriasQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubcategoriasQuery(get_called_class());
    }
}
