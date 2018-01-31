<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.01.18
 * Time: 20:40
 */

namespace frontend\models;
use Yii;

class NewsCount
{

    public static function getCount(){
        $sql = "SELECT COUNT(*) as count FROM news";

        $result = Yii::$app->db->createCommand($sql)->queryOne();

        return $result['count'];
    }

}