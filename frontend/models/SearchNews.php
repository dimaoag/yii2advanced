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
use yii\helpers\ArrayHelper;

class SearchNews extends Model
{

    public function simpleSearch($keyword){

//        $keyword = strip_tags($keyword); // удаляем теги
//        $keyword = preg_quote($keyword); //екранирование
//        $keyword = mysqli_real_escape_string($keyword); //если есть специальные символы они будут заэкранированы
        $params = [
            ':keyword' => $keyword,
        ];

        //$sql = "SELECT * FROM `news` WHERE content LIKE '%$keyword%' LIMIT 20";
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST (:keyword) LIMIT 200";
        return Yii::$app->db->createCommand($sql)->bindValues($params)->queryAll();
    }


    public function advancedSearch($keyword){

        $sql = "SELECT * FROM index_news_content WHERE MATCH ('$keyword') OPTION ranker=WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();
        $ids = ArrayHelper::map($data, 'id', 'id');
        $data = News::find()->where(['id' => $ids])->asArray()->all();
        $data = ArrayHelper::index($data, 'id');

        $result = [];

        foreach ($ids as $item){
            $result[] = [
                'id' => $item,
                'title' => $data[$item]['title'],
                'content' => $data[$item]['content'],
            ];
        }

        return $result;

    }


}