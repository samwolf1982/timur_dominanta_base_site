<?php

namespace frontend\components\largeslider;

use yii\base\Widget;
use yii\helpers\Html;


class LargesliderWidget extends Widget
{
    public $title;
    public $img_filial;
    public $url_filial;
    public $data_provider;


    public function init()
    {
    parent::init();
       // ob_start();
    }


     public function run()
    {
    // Register AssetBundle
       LargesliderAsset::register($this->getView());
     
          // id каталога,  ид карусели, тайтл, дата провайдер  

        return $this->render('hi',['title_widget'=>$this->title,'img_filial'=>$this->img_filial,'url_filial'=>$this->url_filial,'data_provider'=>$this->data_provider]);
    }
}