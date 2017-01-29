<?php

namespace frontend\components\upslider;

use yii\base\Widget;
use yii\helpers\Html;


class UpsliderWidget extends Widget
{
    public $message;

    public function init()
    {
    parent::init();
        ob_start();
    }


     public function run()
    {
    // Register AssetBundle
       UpsliderAsset::register($this->getView());
     
        return $this->render('hi');
    }
}