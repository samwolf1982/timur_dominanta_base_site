<?php

namespace frontend\components\hello;

use yii\base\Widget;
use yii\helpers\Html;


class HelloWidget extends Widget
{
    public $message;
     public $title;
    public $data_provider;
    public $id_widget;
    public $id_slider;

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