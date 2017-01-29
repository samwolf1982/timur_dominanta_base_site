<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{

         public $publishOptions = [
        'forceCopy' => true,
         //you can also make it work only in debug mode: 'forceCopy' => YII_DEBUG
    ];
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
         'css/libs/bootstrap/bootstrap-grid-3.3.1.min.css',
        'css/docs/dist/css/bootstrap.min.css',
        'css/docs/assets/css/ie10-viewport-bug-workaround.css',       
        'css/libs/font-awesome-4.2.0/css/font-awesome.min.css',
        'css/bower_components/fancybox/source/jquery.fancybox.css',
        'css/bower_components/flipclock/compiled/flipclock.css',
        'css/bower_components/bootstrap/dist/css/bootstrap.css',
        'css/bower_components/bxslider-4/dist/jquery.bxslider.css',
        'css/css/main.css',
    ];
    public $js = [
     'js/docs/assets/js/ie-emulation-modes-warning.js',
     'js/bower_components/jquery/dist/jquery.js',
     'js/bower_components/jquery-mousewheel/jquery.mousewheel.js',
     'js/bower_components/bootstrap/dist/js/bootstrap.js',
     'js/bower_components/fancybox/source/jquery.fancybox.js',
     'js/bower_components/fancybox/source/jquery.fancybox.pack.js',
     'js/bower_components/flipclock/compiled/flipclock.js',
     'js/bower_components/bxslider-4/dist/jquery.bxslider.js',
     'js/bower_components/waypoints/lib/noframework.waypoints.js',
     'js/js/common.js',
     'js/docs/assets/js/ie10-viewport-bug-workaround.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
