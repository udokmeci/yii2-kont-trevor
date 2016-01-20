<?php
namespace udokmeci\yii2kt\assets;
use yii\web\AssetBundle;
use udokmeci\yii2kt\KontTrevor;

class CustomSirTrevorAsset extends AssetBundle
{
    public $sourcePath = '@vendor/udokmeci/yii2-kont-trevor/src/udokmeci/yii2kt/cst-files';

    public $css = [
        '//cdnjs.cloudflare.com/ajax/libs/cropper/2.2.4/cropper.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/medium-editor/5.13.0/css/medium-editor.min.css',
        '//cdnjs.cloudflare.com/ajax/libs/medium-editor/5.13.0/css/themes/bootstrap.min.css',
        'custom-st-trevor-part.less',
    ];
    public $js = [
        '//cdnjs.cloudflare.com/ajax/libs/cropper/2.2.4/cropper.min.js',
        '//cdnjs.cloudflare.com/ajax/libs/nanobar/0.2.1/nanobar.js',
        '//cdnjs.cloudflare.com/ajax/libs/medium-editor/5.13.0/js/medium-editor.min.js',
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

    public static function register($view){
        $providers=\Yii::$app->{KontTrevor::$componentName}->providers;
        $view->registerJS('SirTrevorProviders='.json_encode($providers).';
            _.each(SirTrevorProviders, function(e) {
                var extended = $.extend(e, SirTrevorCustomBlockAttributes);
                //console.log(extended);
                SirTrevor.Blocks[e.type] = SirTrevor.Block.extend(extended);
            });',\yii\web\View::POS_END);
        parent::register($view);
    }
}
