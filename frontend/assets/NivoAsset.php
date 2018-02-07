<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.02.18
 * Time: 18:33
 */

namespace frontend\assets;
use yii\web\AssetBundle;

class NivoAsset extends AssetBundle
{

    public $css = [
        'css/nivo_slider/nivo-slider.css',
        'css/nivo_slider/default/default.css',
    ];


    public $js = [
        'js/nivo_slider/jquery.nivo.slider.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];

}