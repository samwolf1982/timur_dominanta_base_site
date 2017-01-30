<?php

namespace frontend\utilities;
use Yii;
use yii\web\UrlRuleInterface;
use common\models\RoomRecord;
class RoomNameUrlRule implements UrlRuleInterface
{
    /**
     * @inheritdoc
     */
 public function parseRequest($manager, $request)
    {
    //	die();
    	 $path_info=$request->pathInfo;
        // Yii::trace($path_info);

         $roomname=RoomRecord::find()->where(['seo_url' => str_replace('kvartira/','',$path_info)])->one();
           //Yii::trace($roomname);
           if (!$roomname) {
           	  return false;    
           }
        // return false;      
         return ['kvartira', ['id'=>$roomname->id]];

    }

        /**
     * @inheritdoc
     */
 public function createUrl($manager, $route, $params)
    {
    	Yii::trace(['rr'=>$route,'param'=>$params]);
         if ($route=='kvartira/update' ||$route=='kvartira/delete') {
         	 $roomname=RoomRecord::findOne($params['id']);
         	 return $roomname->seo_url;
         }
    }

 
}
