<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.01.18
 * Time: 14:07
 */

namespace console\models;
use Yii;


class News
{
    const STATUS_NOT_SEND = 1;

    public static function getList(){

        $sql = "SELECT * FROM news WHERE status = ". self::STATUS_NOT_SEND;

        return Yii::$app->db->createCommand($sql)->queryAll();
    }



    public static function prepareList($list){

    }




}