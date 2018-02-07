<?php

/* @var $this yii\web\View */

use frontend\assets\GalleryAsset;
GalleryAsset::register($this);

$this->registerJsFile('@web/js/gallery/scripts.js', ['depends' =>[
    GalleryAsset::className()
]]);


?>

<h1>Gallery</h1>



<div class="portfolioFilter">

    <a href="#" data-filter="*" class="current">All Categories</a>
    <a href="#" data-filter=".people" class="">People</a>
    <a href="#" data-filter=".places" class="">Places</a>
    <a href="#" data-filter=".food" class="">Food</a>
    <a href="#" data-filter=".objects" class="">Objects</a>

</div>

<div class="portfolioContainer isotope" style="position: relative; overflow: hidden; height: 856px;">

    <div class="objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/watch.jpg" alt="image">
    </div>

    <div class="people places isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 0px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/surf.jpg" alt="image">
    </div>

    <div class="food isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 214px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/burger.jpg" alt="image" naptha_cursor="region">
    </div>

    <div class="people places isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 214px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/subway.jpg" alt="image">
    </div>

    <div class="places objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 428px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/trees.jpg" alt="image">
    </div>

    <div class="people food objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 428px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/coffee.jpg" alt="image">
    </div>

    <div class="food objects isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(0px, 642px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/wine.jpg" alt="image">
    </div>

    <div class="food isotope-item" style="position: absolute; left: 0px; top: 0px; transform: translate3d(470px, 642px, 0px) scale3d(1, 1, 1); opacity: 1;">
        <img src="/files/photos/salad.jpg" alt="image">
    </div>

</div>


