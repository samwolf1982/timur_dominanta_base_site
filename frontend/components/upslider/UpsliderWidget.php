<?php

namespace frontend\components\upslider;

use yii\base\Widget;
use yii\helpers\Html;


class UpsliderWidget extends Widget
{
    public $title;
    public $img_filial;
    public $url_filial;
    public $data_provider;


    public function init()
    {
    parent::init();
        ob_start();
    }


     public function run()
    {
    // Register AssetBundle
       UpsliderAsset::register($this->getView());
     
        return $this->render('hi',['title_widget'=>$this->title,'img_filial'=>$this->img_filial,'url_filial'=>$this->url_filial,'data_provider'=>$this->data_provider]);
    }
}