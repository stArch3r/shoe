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
        'css/custom.css',
        'css/cart.css',
        'checkout.css',
        'asset/vendor/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        'asset/vendor/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css',
        'asset/vendor/cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css',
        'asset/vendor/www.w3schools.com/w3css/4/w3.css',
        'asset/vendor/cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css',


    ];
    public $js = [
    'asset/vendor/cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js',
    'asset/vendor/ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js',
    'asset/vendor/maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js',
    'asset/vendor/cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js',
    'asset/vendor/kit.fontawesome.com/86c7034986.js',
    'asset/vendor/cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js',
    

    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
