<?php

namespace frontend\assets;
use yii;
use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class DemoAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site_red.css',
  
    ];
    public $js = [
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];

    public function init()
    {
        parent::init();
        // Yii::trace($this->className());
                     if (false) {
                    $this->css[] = 'css/site_red.css';
                     }else{
                      $this->css[] = 'css/site_green.css';  
                     }
          

    }
}
