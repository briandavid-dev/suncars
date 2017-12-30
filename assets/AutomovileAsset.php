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
class AutomovileAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = array( 'position' => \yii\web\View::POS_HEAD ); 
   
    public $css = [



            'themes/automovile/index_files/flexslider.css',
           'themes/automovile/index_files/jquery.bxslider.css',
           'themes/automovile/index_files/jquery.fancybox.css',
           'themes/automovile/index_files/jquery.selectbox.css',
           'themes/automovile/index_files/style.css',
           'themes/automovile/index_files/mobile.css',
           'themes/automovile/index_files/settings.css',
           'themes/automovile/index_files/animate.min.css',
           'themes/automovile/index_files/ts.css',
           'themes/automovile/index_files/css(1)',
           'themes/automovile/index_files/css',
            'themes/automovile/index_files/suncars.css',
            'themes/automovile/index_files/print.css',
            'themes/automovile/index_files/social-likes.css',

           



      ];
    public $js = [

            
           'themes/automovile/index_files/jquery.min.js',
           'themes/automovile/index_files/bootstrap.min.js',
           'themes/automovile/index_files/wow.min.js',
           /*'themes/automovile/index_files/js',*/
           'themes/automovile/index_files/jquery.themepunch.tools.min.js',
           'themes/automovile/index_files/jquery.themepunch.revolution.min.js',
           'themes/automovile/index_files/revolution.extension.actions.min.js',
           'themes/automovile/index_files/revolution.extension.carousel.min.js',
           'themes/automovile/index_files/revolution.extension.kenburn.min.js',
           'themes/automovile/index_files/revolution.extension.layeranimation.min.js',
           'themes/automovile/index_files/revolution.extension.migration.min.js',
           'themes/automovile/index_files/revolution.extension.navigation.min.js',
           'themes/automovile/index_files/revolution.extension.parallax.min.js',
           'themes/automovile/index_files/revolution.extension.slideanims.min.js',
           'themes/automovile/index_files/revolution.extension.video.min.js',
           /*'themes/automovile/index_files/common.js',*/
           /*'themes/automovile/index_files/map.js',*/
           /*'themes/automovile/index_files/util.js',*/
           /*'themes/automovile/index_files/marker.js',*/
           /*'themes/automovile/index_files/onion.js',*/
          /* 'themes/automovile/index_files/stats.js',*/
           'themes/automovile/index_files/retina.js',
           'themes/automovile/index_files/jquery.parallax.js',
           'themes/automovile/index_files/jquery.inview.min.js',
           'themes/automovile/index_files/main.js',
           'themes/automovile/index_files/jquery.fancybox.js',
           'themes/automovile/index_files/modernizr.custom.js',
           'themes/automovile/index_files/jquery.flexslider.js',
           'themes/automovile/index_files/jquery.bxslider.js',
           'themes/automovile/index_files/jquery.selectbox-0.2.js',
           'themes/automovile/index_files/jquery.mousewheel.js',
           'themes/automovile/index_files/jquery.easing.js',
            'themes/automovile/js/retina.js',
            'themes/automovile/js/main.js',
            'themes/automovile/js/jquery.fancybox.js',
            'themes/automovile/js/modernizr.custom.js',
            'themes/automovile/js/jquery.flexslider.js',
            'themes/automovile/js/jquery.bxslider.js',
            'themes/automovile/js/jquery.selectbox-0.2.js',
            'themes/automovile/js/jquery.mousewheel.js',
            'themes/automovile/js/jquery.easing.js',
            'themes/automovile/js/social-likes.min.js',


    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
