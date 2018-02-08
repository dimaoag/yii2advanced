<?php
/* @var $this yii\web\View */

use yii\helpers\Url;

$this->params['breadcrumbs'] = [
    ['label' => $item['title']],
];

?>


<h1><?= $item['title']?></h1>
<p><?= $item['content']?></p>

<!--<a href="--><?php //echo Yii::$app->urlManager->createUrl(['test/index']); ?><!--" class="btn btn-info">Prev</a>-->
<a href="<?= Url::to(['test/index']); ?>" class="btn btn-info">Prev</a>