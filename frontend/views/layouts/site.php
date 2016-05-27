<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\SiteAsset;

SiteAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE HTML>
<!--
	Minimaxing by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title><?= Html::encode($this->title) ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--[if lte IE 8]><script src="main/assets/js/ie/html5shiv.js"></script><![endif]-->
    <!--[if lte IE 9]><link rel="stylesheet" href="main/assets/css/ie9.css"><![endif]-->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

    <?= $content ?>

<!-- Scripts -->
<!--[if lte IE 8]><script src="main/assets/js/ie/respond.min.js"></script><![endif]-->
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
