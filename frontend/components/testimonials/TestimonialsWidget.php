<?php

namespace frontend\components\testimonials;

use yii\base\Widget;
use yii\helpers\Html;


class TestimonialsWidget extends Widget
{
    public $title;
    public $data_provider;


    public function init()
    {
    parent::init();
        //ob_start();
    }


     public function run()
    {
    // Register AssetBundle
        TestimonialsAsset::register($this->getView());
     
        return $this->render('hi',['title_widget'=>$this->title,'data_provider'=>$this->data_provider]);
    }
}