<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <title>Kappe a Personal Portfolio Category Flat Bootstarp Responsive Website Template | Home :: w3layouts</title>
    <script src="js/jquery.min.js"></script>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Kappe Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900' rel='stylesheet' type='text/css'>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <div class="header">
        <!---->
            <div class="logo">
                <a href="index.html"><img src="images/logo.png" alt=""></a>
            </div>
            <div class="top-nav">
                <ul>
                    <li class="active" ><a href="index.html" >ГЛАВНАЯ</a></li>

                    <li><a href="about.html" class="black1"> О НАС</a></li>
                    <li><a href="blog.html" class="black1"> ИГРЫ</a></li>
                    <li><a href="https://www.youtube.com/watch?v=fWR9d-GehrM" class="black1" > ВИДЕО</a></li>
                    <li><a href="index.html" >ВХОД</a></li>
                </ul>
            </div>
        </div>

    <div class="container">

        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
