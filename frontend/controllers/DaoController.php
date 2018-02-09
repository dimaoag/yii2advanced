<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 09.02.18
 * Time: 11:11
 */

namespace frontend\controllers;
use yii\db\Command;
use yii\web\Controller;
use Yii;


class DaoController extends Controller
{

    public function actionIndex(){

        $db = new \yii\db\Connection([
            'dsn' => 'mysql:host=localhost;dbname=yii2advance',
            'username' => 'root',
            'password' => '1111',
            'charset' => 'utf8',
        ]);

        $sql = "SELECT * FROM city;";
        $command = new \yii\db\Command([
            'db' => $db,
            'sql' => $sql,
        ]);

        $array = $command->queryAll();
        var_dump($array);
        echo '<hr>';

        $sql1 = "SELECT title FROM news";
        $res1 = Yii::$app->db->createCommand($sql1)->queryColumn();
        var_dump($res1);
        echo '<hr>';

        $sql2 = "SELECT * FROM news WHERE id = 3";
        $res2 = Yii::$app->db->createCommand($sql2)->queryOne();
        var_dump($res2);
        echo '<hr>';

        $sql3 = "SELECT COUNT(*) as count FROM news";
        $res3 = Yii::$app->db->createCommand($sql3)->queryScalar();
        var_dump($res3);
        echo '<hr>';

        $sql4 = "DELETE FROM news WHERE id = 6";
        $res4 = Yii::$app->db->createCommand($sql4)->execute();
        var_dump($res4);
        echo '<hr>';


        return $this->render('index');



    }

}