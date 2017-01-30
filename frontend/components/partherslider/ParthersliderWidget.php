<?php

namespace frontend\components\partherslider;

use yii\base\Widget;
use yii\helpers\Html;


class ParthersliderWidget extends Widget
{
    public $title;
    public $data_provider;
    public $id_widget;
    public $id_slider;

    public function init()
    {
    parent::init();
        // ob_start();
    }


     public function run()
    {
    // Register AssetBundle
        ParthersliderAsset::register($this->getView());
     
     return $this->render('hi',['id_slider'=>$this->id_slider,'id_widget'=>$this->id_widget,'title_widget'=>$this->title,'data_provider'=>$this->data_provider]);
    
    }
}