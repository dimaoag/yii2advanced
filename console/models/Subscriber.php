<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.01.18
 * Time: 18:46
 */

namespace console\models;
use Yii;

class Subscriber
{




    public static function getList(){

        $sql = "SELECT * FROM subscriber";
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        return $result;
    }






}