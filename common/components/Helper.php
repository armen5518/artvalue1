<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 5/26/2016
 * Time: 3:54 PM
 */

namespace common\components;


use yii\web\Cookie;

class Helper
{
    /**
     * @param $name
     * @param $value
     */

   public static function GetCookie($name,$value){
       \Yii::$app->response->cookies->add(new Cookie([
           'name' => $name,
           'value' => $value
       ]));
   }

    public static function out($param){
        echo '<pre>';
        print_r($param);
        exit();
        echo '</pre>';
    }


}