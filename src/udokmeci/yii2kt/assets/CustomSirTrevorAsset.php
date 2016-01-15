<?php
namespace udokmeci\yii2kt;
use yii\web\AssetBundle;

class CustomSirTrevorAsset extends AssetBundle
{
    public $sourcePath = '@udokmeci/yii2kt/cst-files/';

    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/cropper/2.2.4/cropper.min.css',
        'custom-st-trevor-part.less',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/cropper/2.2.4/cropper.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/nanobar/0.2.1/nanobar.js',
        'custom-st-trevor-part.js',
        'convert.js'
    ];

    public $depends = [
        'yii\web\JqueryAsset',
        'xfg\mustachejs\MustachejsAsset',
        'apollo\yii2\i18next\assets\Asset',
        'yii\imperavi\ImperaviRedactorAsset',
        'madand\underscore\UnderscoreAsset'
    ];
}
