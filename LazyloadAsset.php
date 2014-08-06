<?php

namespace xj\lazyload;

use yii\web\AssetBundle;

class LazyloadAsset extends AssetBundle {

    public $sourcePath;
    public $basePath = '@webroot/assets';
    public $publishOptions = ['forceCopy' => YII_DEBUG];
//    public $css = [];
    public $js = [];
    public $depends = ['yii\web\JqueryAsset'];

    private function getJs() {
        return [
            YII_DEBUG ? 'jquery.lazyload.js' : 'jquery.lazyload.min.js',
        ];
    }

    public function init() {
        $this->sourcePath = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'assets';
        if (empty($this->js)) {
            $this->js = $this->getJs();
        }
        return parent::init();
    }

}
