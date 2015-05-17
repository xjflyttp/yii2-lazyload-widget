yii2-lazyload-widget
====================
```
http://www.appelsiini.net/projects/lazyload
```

composer.json
-----
```json
"require": {
        "xj/yii2-lazyload-widget": "*"
},
```

In View
------------
```html
<img class="lazy" data-original="img/example.jpg" width="640" height="480">
```

```php
use yii\web\View;
use xj\lazyload\LazyloadAsset;
LazyloadAsset::register($this);
$view->registerJs('$("img.lazy").lazyload();'
        , View::POS_READY);
```

In Assets depends
-----------
```php
public $depends = [
    'xj\lazyload\LazyloadAsset',
];
```

