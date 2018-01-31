<?php

namespace common\components;
use Yii;


class StringHelper
{

    private $limit;

    public function __construct()
    {
        $this->limit = Yii::$app->params['limitChars'];
    }


    public function getShort($string, $limit = null){

        if ($limit === null){
            $limit = $this->limit;
        }
        return substr($string, 0, $limit);
    }

    public function getShortFullWord($string, $limit = null){

        if ($limit === null){
            $limit = $this->limit;
        }

        $str = substr($string, $limit, $limit + 20);
        $pos = strpos($str, ' ');
        $result = substr($string, 0, $limit + $pos);

        return $result;

    }



}