<?php
use yii\helpers\Url;
use frontend\widgets\newsList\NewsList;
/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="site-index">

    <div class="jumbotron">
        <h1>Congratulations!</h1>

        <p class="lead">You have successfully created your Yii-powered application.</p>

        <p><a class="btn btn-lg btn-success" href="<?= Url::to(['newsletter/subscribe']) ?>">Subscribe to newsletter</a></p>
    </div>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['news_count/index']); ?>" class="btn btn-info">news count</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['employee/register']); ?>" class="btn btn-info">Employee Register</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['employee/update']); ?>" class="btn btn-info">Employee Update</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['gallery/index']); ?>" class="btn btn-info">Gallery</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['html-helper/demo']); ?>" class="btn btn-info">Html Helper</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['html-helper/escape-output']); ?>" class="btn btn-info">escape-output</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['book-shop/index']); ?>" class="btn btn-info">book-shop/index</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['/admin/default/index']); ?>" class="btn btn-success">Admin index</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['/admin/article']); ?>" class="btn btn-success">Articles</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['/admin/category']); ?>" class="btn btn-success">Category</a>
    <a href="<?php echo Yii::$app->urlManager->createUrl(['/admin/tag']); ?>" class="btn btn-success">Tag</a>
    <div class="body-content">

        <div class="row">
            <div class="col-lg-4">
                <h2>Heading</h2>

                <?php echo NewsList::widget(['showLimit' => 4]); ?>

            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/forum/">Yii Forum &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <h2>Heading</h2>

                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
                    dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip
                    ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                    fugiat nulla pariatur.</p>

                <p><a class="btn btn-default" href="http://www.yiiframework.com/extensions/">Yii Extensions &raquo;</a></p>
            </div>
        </div>

    </div>
</div>
