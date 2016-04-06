<?php
/**
 * Created by PhpStorm.
 * User: Huijiewei
 * Date: 2014/10/12
 * Time: 23:35
 */

namespace novakom\notifyjs;

use yii\web\AssetBundle;

class NotifyjsAsset extends AssetBundle
{
    public $sourcePath = '@novakom/notifyjs/assets';

    public $css = [
        'css/notifyjs.css',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

    public $js = [
        'js/notifyjs.js',
    ];
}
