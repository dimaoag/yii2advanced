<?php

namespace frontend\models;
use Yii;
use frontend\components\StringHelper;


class Test{

    public static function getNewsList($max){
        $max = intval($max);

        $sql = "SELECT * FROM news LIMIT $max";


        $result = Yii::$app->db->createCommand($sql)->queryAll();


        if (!empty($result) && is_array($result)){
            //$helper = new StringHelper();
            //$helper = Yii::$app->stringHelper;
            foreach ($result as &$item){
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }

        return $result;
    }
}