<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 06.02.18
 * Time: 19:55
 */

namespace frontend\models;
use yii\base\Model;

class ExampleValidation extends Model
{
    const STATUS_ACTIVE = 1;
    const STATUS_DISABLE = 2;
    const STATUS_ARCHIVED = 3;

    public $city = ['min' => 1, 'max' => 4];


    public $testAttribute;

    public function rules()
    {
        return [
            [['testAttribute'], 'number', 'min' => $this->city['min'] , 'max' => $this->city['max']],
        ];
    }

    /*
    ['categories', 'each', 'rule' => ['integer']],//проверка масива, все данные в масиве должны быть integer
    [['placeId'], 'required'],
    [['id'], 'integer'],
    [['description'], 'string'],
    [['rating'], 'in', 'range' => [1, 2, 3]],
    [['someDate'], 'date', 'format' => 'php:Y-m-d'],
    [['somePattern'], 'match', 'pattern' => '/^[a-zA-Z0-9_-]+$/'],
    ['endTime', 'compare',  //сравнивает по оператору '>'; должно выполнятся условие (endTime > startTime)
                    'compareAttribute' => 'startTime',
                    'operator' => '>',
                    'message' => Yii::t('validation', 'endtime must be greater than starttime'),
    ],
    [['startTime'], 'safe'], //добавить безопасный атрибут, чтобы данные записались в модель; ($model->attributes = $formData;)
    [['siteAddress'], 'url'], //должно быть с http://
    [['link'], 'url', 'defaultScheme' => 'http'],  // Validates URL. Prepend scheme if neede; //изменяет данные,
    в начале строки добавляет http://
     */




}