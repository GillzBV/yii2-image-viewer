<?php
/**
 * Created by PhpStorm.
 * User: bvanleeuwen
 * Date: 21/06/2017
 * Time: 14:35
 */

namespace gillz\imageViewer;

use yii\base\Widget;
use yii\base\InvalidConfigException;

class ImageViewer extends Widget {

    public static $imageViewerHasBeenLoaded = false;

    /**
     * @var string The image source for the image that will be displayed
     * This variable will be used to render the image that the user can click
     */
    public $imageSource;

    /**
     * @var string|null The image source for the high res version of the `self::$imageSource` variable
     * If no high res image is passed to this variable the `self::$imageSource` variable will be used for this variable
     */
    public $imageSourceHighRes = null;

    public function init() {
        parent::init();

        // Check if all the needed variables are set
        $this->_checkVariables();

        // Check image the high res source has been set
        if ($this->imageSourceHighRes === null)
            $this->imageSourceHighRes = $this->imageSource;

        // Register the javascript
        $this->_registerJavascript();
    }

    /**
     * Check if all the variables that are needed for this plugin have been set
     */
    protected function _checkVariables() {
        if ($this->imageSource === null)
            // No image source has been provided, throw new error
            throw new InvalidConfigException('Gillz ImageViewer: The image source has not been provided');
    }

    protected function _renderHtml() {

    }

    protected function _registerJavascript() {
        // Check if the image viewer has been loaded
        if (! self::$imageViewerHasBeenLoaded) {
            // Load the AssetBundle
            AssetBundle::register($this->getView());
            // Register the ImageViewer variale
            \Yii::$app->view->registerJs('var viewer = ImageViewer();');
        }
    }
}