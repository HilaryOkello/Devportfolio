<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'theme/assets/vendor/bootstrap/css/bootstrap.min.css',
        'theme/assets/vendor/font-awesome/css/font-awesome.min.css',
        'theme/assets/vendor/ionicons/css/ionicons.min.css',
        'theme/assets/vendor/owl.carousel/assets/owl.carousel.min.css',
        'theme/assets/vendor/venobox/venobox.css',
        'theme/assets/css/style.css',
        'theme/assets/css/custom.css',
    ];
    public $js = [
        'theme/assets/vendor/jquery/jquery.min.js',
        'theme/assets/vendor/bootstrap/js/bootstrap.bundle.min.js',
        'theme/assets/vendor/jquery.easing/jquery.easing.min.js',
        'theme/assets/vendor/php-email-form/validate.js',
        'theme/assets/vendor/waypoints/jquery.waypoints.min.js',
        'theme/assets/vendor/counterup/jquery.counterup.min.js',
        'theme/assets/vendor/owl.carousel/owl.carousel.min.js',
        'theme/assets/vendor/typed.js/typed.min.js',
        'theme/assets/vendor/venobox/venobox.min.js',
        'theme/assets/js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
