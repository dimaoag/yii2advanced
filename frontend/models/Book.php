<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 09.02.18
 * Time: 16:45
 */

namespace frontend\models;
use yii\db\ActiveRecord;


class Book extends ActiveRecord
{

    public static function tableName()
    {
        return '{{book}}';
    }


    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
            [['name'], 'string', 'min' => 2],
            [['isbn'], 'safe'],
            [['date_published'], 'date', 'format' => 'php:Y-m-d'],
        ];
    }

    public function getDatePublished(){

        return ($this->date_published) ? $this->date_published : 'Not set';
    }


}