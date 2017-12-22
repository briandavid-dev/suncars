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
class DashboardAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $jsOptions = array( 'position' => \yii\web\View::POS_HEAD ); 
   
    public $css = [
        'web/css/site.css',
    	/* AdminLTE */
    		'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css',
    		'https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css',
    		'web/resources/AdminLTE/dist/css/AdminLTE.min.css',
    		'web/resources/AdminLTE/dist/css/skins/_all-skins.min.css',
    		'web/resources/AdminLTE/plugins/iCheck/flat/blue.css',
    		'web/resources/AdminLTE/plugins/morris/morris.css',
    		'web/resources/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.css',
    		'web/resources/AdminLTE/plugins/datepicker/datepicker3.css',
    		'web/resources/AdminLTE/plugins/daterangepicker/daterangepicker.css',
    		'web/resources/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css',
           // 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',

    ];
    public $js = [

    		'https://code.jquery.com/ui/1.11.4/jquery-ui.min.js',
    		'web/resources/AdminLTE/bootstrap/js/bootstrap.min.js',
    		'https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js',
    		'web/resources/AdminLTE/plugins/morris/morris.min.js',
    		'web/resources/AdminLTE/plugins/sparkline/jquery.sparkline.min.js',
    		'web/resources/AdminLTE/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js',
    		'web/resources/AdminLTE/plugins/jvectormap/jquery-jvectormap-world-mill-en.js',
    		'web/resources/AdminLTE/plugins/knob/jquery.knob.js',
    		'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js',
    		'web/resources/AdminLTE/plugins/daterangepicker/daterangepicker.js',
    		'web/resources/AdminLTE/plugins/datepicker/bootstrap-datepicker.js',
    		'web/resources/AdminLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js',
    	    'web/resources/AdminLTE/plugins/slimScroll/jquery.slimscroll.min.js',
    		'web/resources/AdminLTE/plugins/fastclick/fastclick.js',
         	'web/resources/AdminLTE/dist/js/app.min.js',
        //	'web/resources/AdminLTE/dist/js/pages/dashboard.js',
        	'web/resources/AdminLTE/dist/js/demo.js',
    		'web/resources/js/bmosoluciones.js',
		    'themes/automovile/js/file-input-load-preview.js',
		    'themes/automovile/js/bootstrap.file-input.js',
            'themes/automovile/js/BMOFunctions.js',
            
     
          
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
