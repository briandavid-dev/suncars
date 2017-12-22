<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class TuagendamedicaAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = array( 'position' => \yii\web\View::POS_HEAD ); 
   
    public $css = [


            'themes/tuagendamedica/css/settings.css',
            'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
            'themes/tuagendamedica/css/style.css',
            'themes/tuagendamedica/css/style2.css',
            'themes/tuagendamedica/css/style3.css',
            'themes/tuagendamedica/css/js_composer.css',
            'themes/tuagendamedica/css/custom.css',
            'themes/tuagendamedica/css/alertify.core.css',
            'themes/tuagendamedica/css/font-awesome.min.css',
            'themes/tuagendamedica/css/alertify.default.css',
           


      ];
    public $js = [


        
    	'themes/tuagendamedica/js/jquery-migrate.min.js',
		  'themes/tuagendamedica/js/jquery.themepunch.tools.min.js',
            'themes/tuagendamedica/js/jquery.themepunch.revolution.min.js',
            'themes/tuagendamedica/js/comment-reply.min.js',
            'themes/tuagendamedica/js/bootstrap.min.js',
            'themes/tuagendamedica/js/smooth-scroll.js',
            'themes/tuagendamedica/js/yt_player.min.js',
            'themes/tuagendamedica/js/jquery.fitvids.js',
            'themes/tuagendamedica/js/jquery.royalslider.min.js',
            'themes/tuagendamedica/js/jquery.beforeafter-1.4.min.js',
            'themes/tuagendamedica/js/jquery-ui-1.8.13.custom.min.js',
            'themes/tuagendamedica/js/isotope.min.js',
            'themes/tuagendamedica/js/circles.js',
            'themes/tuagendamedica/js/select.min.js',
            'themes/tuagendamedica/js/jquery.prettyPhoto.js',
            'themes/tuagendamedica/js/owl.carousel.js',
            'themes/tuagendamedica/js/app.js',
            'themes/tuagendamedica/js/js_composer_front.js',
            'themes/tuagendamedica/js/BMOFunctions.js',
            'themes/tuagendamedica/js/moment.min.js',
            'themes/tuagendamedica/js/notificaciones.js',
            'themes/tuagendamedica/js/alertify.js',
           

          
        // 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'
          
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
