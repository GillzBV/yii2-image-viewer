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
    public $sourcePath = '@vendor/gillz/yii2-image-viewer/vendor/ImageViewer-master/';
    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'imageviewer.min.js'
    ];
    public $css = [
        'imageviewer.css'
    ];
}