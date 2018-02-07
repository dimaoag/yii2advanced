<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.02.18
 * Time: 16:11
 */



namespace frontend\assets;
use yii\web\AssetBundle;




class GalleryAsset extends AssetBundle
{
    public $css = [
        'css/gallery/gallery.css',
    ];


    public $js = [
        'js/isotope/jquery.isotope.js',
    ];

    public $depends = [
        'yii\web\JqueryAsset',
    ];




}