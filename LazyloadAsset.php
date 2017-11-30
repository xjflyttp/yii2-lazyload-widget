<?php

namespace xj\lazyload;

use yii\web\AssetBundle;

class LazyloadAsset extends AssetBundle {

    public $sourcePath = '@vendor/xj/yii2-lazyload-widget/assets';
    public $js = ['jquery.lazyload.js'];
    public $depends = ['yii\web\JqueryAsset'];

}
