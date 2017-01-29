<?php

namespace frontend\components\largeslider;

use yii\base\Widget;
use yii\helpers\Html;


class LargesliderWidget extends Widget
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
       LargesliderAsset::register($this->getView());
     
          // id каталога,  ид карусели, тайтл, дата провайдер  

        return $this->render('hi',['id_slider'=>$this->id_slider,'id_widget'=>$this->id_widget,'title_widget'=>$this->title,'data_provider'=>$this->data_provider]);
    }
  public static  function shortDescription($fullDescription) {
$shortDescription ='';

$fullDescription = trim(strip_tags($fullDescription));

if ($fullDescription) {
$initialCount = 120;
if (strlen($fullDescription) > $initialCount) {
//$shortDescription = substr(strip_tags($fullDescription),0,$initialCount).”…”;
$shortDescription = substr($fullDescription,0,$initialCount).'…';
}
else {
return $fullDescription;
}
}

return $shortDescription;
}//End of function shortDescription
}