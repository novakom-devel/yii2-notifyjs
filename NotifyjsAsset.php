<?php
/**
 * Created by PhpStorm.
 * User: Huijiewei
 * Date: 2014/10/12
 * Time: 23:35
 */

namespace huijiewei\notifyjs;

use yii\web\AssetBundle;

class NotifyjsAsset extends AssetBundle
{
    public $sourcePath = '@huijiewei/notifyjs/assets';

    public $css = [
        'css/notifyjs.css',
    ];

    public $js = [
        'js/notifyjs.js',
    ];
}
