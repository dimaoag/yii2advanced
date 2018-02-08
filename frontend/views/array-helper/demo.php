<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.02.18
 * Time: 14:57
 */

/* @var $employees array */

use yii\helpers\ArrayHelper;
use yii\helpers\Html;

$names = ArrayHelper::getColumn($employees, 'firstName');

echo implode(', ', $names);


$array = [
    '1' => 'Rome',
    '2' => 'London',
    '3' => 'Berlin',
    '4' => 'Warsaw',
];

$listData = ArrayHelper::map($employees, 'id', 'firstName');

echo '<pre>';
print_r($listData);
echo '</pre>';

echo Html::dropDownList('name_id', [], $listData);