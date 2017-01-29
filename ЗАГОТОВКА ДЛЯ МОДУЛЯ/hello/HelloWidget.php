<?php

namespace frontend\components\hello;

use yii\base\Widget;
use yii\helpers\Html;


class HelloWidget extends Widget
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
        HelloAsset::register($this->getView());
     
        return $this->render('hi');
    }
}