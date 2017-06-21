<?php
/**
 * Created by PhpStorm.
 * User: bvanleeuwen
 * Date: 21/06/2017
 * Time: 14:28
 */

namespace gillz\imageViewer;

use \yii\web\AssetBundle as BaseAssetBundle;

class AssetBundle extends BaseAssetBundle
{
    public $sourcePath = '@vendor/bower/imageviewer/dist';
    public $depends = [
        'yii\web\JqueryAsset',
        'yii\bootstrap\BootstrapPluginAsset',
    ];

    public $js = [
        'viewer.min.js'
    ];
    public $css = [
        'viewer.min.css'
    ];
}