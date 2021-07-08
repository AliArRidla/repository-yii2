<?php

/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * Main application asset bundle.
 *
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/site.css',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        'https://use.fontawesome.com/releases/v5.7.2/css/all.css',
        'assets/stisla/css/style.css',
        'assets/stisla/css/components.css',

    ];
    public $js = [
        'http://code.jquery.com/ui/1.11.0/jquery-ui.js',
        'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js',
        'https://code.jquery.com/jquery-3.6.0.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js',
        'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js',
        'assets/stisla/js/stisla.js',
        'assets/stisla/js/scripts.js',
        'assets/stisla/js/custom.js',

    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap4\BootstrapAsset',
    ];
}
