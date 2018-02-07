<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\widgets\newsList\NewsList;


$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-about">
    <h1><?= Html::encode($this->title) ?></h1>

    <div class="container">
        <div class="row">
            <div class="col-lg-8"></div>
            <div class="col-lg-4">
                <?php echo NewsList::widget(['showLimit' => 3]); ?>
            </div>
        </div>
    </div>



</div>
