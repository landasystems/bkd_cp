<?php
use yii\helpers\Html;
?>
<!DOCTYPE html>
<html>
    <head>
        <?= Html::csrfMetaTags() ?>
        <meta charset=utf-8>
        <title><?= Html::encode($this->title) ?></title>
        <meta name=description content="Informasi lengkap kepegawaian PNS, Honorer di Kabupaten Sampang, Madura">
        <meta name=keywords content="BKD, Badan, Kepegawaian, Daerah, Kabupaten Sampang, Madura">

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.2" />
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/reset.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/superfish.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/prettyPhoto.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/jquery.qtip.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/style.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/menu_styles.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/animations.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/responsive.css">
        <link type="text/css" rel='stylesheet' href="<?= Yii::$app->homeUrl ?>css/odometer-theme-default.css">
        <link rel="shortcut icon" href="img/favicon.ico">
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery-1.11.1.min.js"></script>
    </head>
    <body>
        <div class="site_container">
            <?= $this->render('_menu') ?>
           

            <div class="page">
                <?= $content ?>
            </div>
             <?= $this->render('_footer') ?>	
        </div>
        <div class="background_overlay"></div>
        <!--js-->
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery-migrate-1.2.1.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.ba-bbq.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery-ui-1.11.1.custom.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.easing.1.3.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.carouFredSel-6.2.1-packed.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.touchSwipe.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.transit.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.sliderControl.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.prettyPhoto.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.qtip.min.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/jquery.blockUI.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/main.js"></script>
        <script type="text/javascript" src="<?= Yii::$app->homeUrl ?>js/odometer.min.js"></script>
    </body>
</html>