<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class SiteAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web/main/assets';
    public $jsOptions = ['position' => \yii\web\View::POS_END];
    public $css = [
        "css/main.css",
        "css/style.css",
    ];
    public $js = [
        "js/jquery.min.js",
        "js/skel.min.js",
        "js/skel-viewport.min.js",
        "js/util.js",
        "js/main.js",
        "js/slider/wowslider.js",
        "js/slider/script.js",
        "js/src.js",
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}
