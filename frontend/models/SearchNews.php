<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 13.02.18
 * Time: 21:27
 */

namespace frontend\models;
use yii\base\Model;
use Yii;

class SearchNews extends Model
{

    public function simpleSearch($keyword){

        $sql = "SELECT * FROM `news` WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
}