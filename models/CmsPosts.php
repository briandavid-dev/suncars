<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cms_posts".
 *
 * @property integer $post_id
 * @property string $post_date
 * @property string $post_date_gmt
 * @property string $post_content
 * @property string $post_title
 * @property string $post_summary
 * @property string $post_status
 * @property string $post_comment_status
 * @property string $post_name
 * @property string $post_http
 * @property string $post_categories
 * @property string $post_subcategories
 * @property string $post_modified
 * @property string $post_modified_gmt
 * @property string $commnet_count
 * @property integer $categorie_id 
 * @property integer $subcategorie_id 
 * @property integer $post_section_right
 * @property string $post_keywords 
 * @property integer $post_presentacion_is_video
 * @property string $post_video_1 
 * @property integer $post_title_in_top
 * @property integer $post_presentacion_hide 
 *
 * @property CmsCommens[] $cmsCommens
 * @property CmsPostmeta[] $cmsPostmetas
 */
class CmsPosts extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'cms_posts';
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
            [['post_date', 'post_content', 'post_title', 'post_name' , 'post_categories','post_subcategories','post_summary',  'post_principalcategories'], 'required'],
            [['post_date', 'post_date_gmt', 'post_modified', 'post_modified_gmt'], 'safe'],
            [['post_content', 'post_title', 'post_summary' , 'post_image_c1', 'post_image_c2', 'post_keywords', 'post_video_1' , 'post_principalcategories'], 'string'],
            [['commnet_count', 'user_id', 'post_section_right', 'post_presentacion_is_video', 'post_title_in_top', 'post_presentacion_hide'], 'integer'],
            [['post_status', 'post_comment_status'], 'string', 'max' => 45],
            //[['post_name'], 'string', 'max' => 200],
        		
        		[['post_summary'], 'string', 'max' => 250],

        		//[['post_image_1','post_image_2'], 'required', 'on'=>'insert'],
        		[['post_image_2'], 'required', 'on'=>'insert'],
        		
        		
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'post_id' => 'Id',
            'post_date' => 'Fecha de publicación',
            'post_date_gmt' => 'Fecha de creacion GMT UTC',
            'post_content' => 'Contenido',
            'post_title' => 'Titulo',
            'post_summary' => 'Resumen. Extracto.',
            'post_status' => 'Post Activo',
            'post_comment_status' => 'Comentario de estatus',
            'post_name' => 'Nombre', // es el mismo http para wordpress
            'post_http' => 'Http',
            'post_categorie' => 'Categorias',
            'post_subcategorie' => 'Tipo de categorias',
            'post_modified' => 'Fecha de modificación',
            'post_modified_gmt' => 'Fecha de modificación GMT UTC',
            'commnet_count' => 'Cantidad de comentarios',
            'user_id' => 'Usuario', 
            'categorie_id' => 'Categoría',
           	'subcategorie_id' => 'Sub Categorías',
           	'post_image_1' => 'IMAGEN 1. Principal',
          	'post_image_2' => 'IMAGEN 2. Cabecera del Post',
            'post_image_c1' => 'Post Image C1 ??',
           	'post_image_c2' => 'Post Image C2 ??',
            'post_categories' => 'Categorías',
            'post_subcategories' => 'Sub Categorías',
            'post_section_right' => 'Colocar en sección derecha',
           	'post_keywords' => 'Palabras Claves (keywords)',
           	'post_presentacion_is_video' => 'Usar Video como presentación',
           	'post_video_1' => 'Video',
           	'post_title_in_top' => 'Título sobre la imagen',
           	'post_presentacion_hide' => 'Ocultar Presentación',

        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsCommens()
    {
        return $this->hasMany(CmsCommens::className(), ['post_id' => 'post_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCmsPostmetas()
    {
        return $this->hasMany(CmsPostmeta::className(), ['post_id' => 'post_id']);
    }

 /** 
    * @return \yii\db\ActiveQuery 
    */ 
  

}
