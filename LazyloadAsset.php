<?php

namespace xj\lazyload;

use yii\web\AssetBundle;

class LazyloadAsset extends AssetBundle {

    public $sourcePath = '@bower/jquery.lazyload';
    public $basePath = '@webroot/assets';
    public $js = ['jquery.lazyload.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
