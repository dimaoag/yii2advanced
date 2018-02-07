<?php

/* @var $this yii\web\View */

use frontend\assets\NivoAsset;
NivoAsset::register($this);

$this->registerJsFile('@web/js/nivo_slider/scripts/script.js', ['depends' =>[
    NivoAsset::className()
]]);


?>


<div id="wrapper">
    <a href="http://dev7studios.com" id="dev7link" title="Go to dev7studios">dev7studios</a>
    <div class="slider-wrapper theme-default">
        <div id="slider" class="nivoSlider">
            <img src="/files/nivo_images/toystory.jpg" data-thumb="images/toystory.jpg" alt="" />
            <img src="/files/nivo_images/up.jpg" data-thumb="images/up.jpg" alt="" title="This is an example of a caption" />
            <img src="/files/nivo_images/walle.jpg" data-thumb="images/walle.jpg" alt="" data-transition="slideInLeft" />
            <img src="/files/nivo_images/nemo.jpg" data-thumb="images/nemo.jpg" alt="" title="#htmlcaption" />
        </div>
        <div id="htmlcaption" class="nivo-html-caption">
            <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
        </div>
    </div>
</div>