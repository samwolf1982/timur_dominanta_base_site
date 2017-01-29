<?php

namespace frontend\components\upslider;

use yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class UpsliderAsset extends AssetBundle
{
   //  public $basePath = '@webroot';
    // public $baseUrl = '@web';
 //public $sourcePath = '@app/components/hello/assets';
  // public $sourcePath = '/components/myWidget/assets';
    
     public $publishOptions = [
        'forceCopy' => true,
         //you can also make it work only in debug mode: 'forceCopy' => YII_DEBUG
    ];
    public $css = [
        'css/main.css',
  
    ];
    public $js = [
            'js/main.js'
    ];
    public $depends = [
         'yii\web\YiiAsset',
         'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
     // Tell AssetBundle where the assets files are
        $this->sourcePath = __DIR__ . "/assets";
        parent::init();

    }

    protected function beforeAction($action){
    // if(defined('YII_DEBUG') && YII_DEBUG){
       // Yii::app()->assetManager->forceCopy = true;
   // }
    return parent::beforeAction($action);
}
}
