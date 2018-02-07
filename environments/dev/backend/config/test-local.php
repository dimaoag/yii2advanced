<?php
return yii\helpers\ArrayHelper::merge(
    require __DIR__ . '/../../common/config/test-local.php',
    require __DIR__ . '/main.php',
    require __DIR__ . '/main-local.php',
    require __DIR__ . '/nivo_imagers.php',
    [
    ]
);
