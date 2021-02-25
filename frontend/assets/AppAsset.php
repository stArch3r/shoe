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
        
        'css/custom.css',
        'css/cart.css',
        'css/checkout.css',
        'css/bs-stepper.css',
        
    ];
    public $js = [
    'js/custom.js',
    'js/stepper.js',
    'js/modal.js',
    

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
