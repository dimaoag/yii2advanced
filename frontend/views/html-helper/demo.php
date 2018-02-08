<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.02.18
 * Time: 12:48
 */

use yii\helpers\Html;



echo Html::beginTag('div', ['class' => 'test1', 'style' => ['background-color' => 'red', 'width' => '100px', 'height' => '100px']]);

echo Html::tag('h1', 'some title');

echo Html::endTag('div');

$array = [
    '1' => 'Rome',
    '2' => 'London',
    '3' => 'Berlin',
    '4' => 'Warsaw',
];

echo Html::dropDownList('city_id', [], $array);

echo Html::radioList('city_id', [], $array);

echo Html::checkboxList('city_id[]', [], $array);

echo Html::img('@images/coffee.jpg', ['alt' => 'coffee']);

