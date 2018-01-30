<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Test;
use Yii;



class TestController extends Controller{

    public function actionIndex(){



        $max = Yii::$app->params['maxNewsInList'];
        $list = Test::getNewsList($max);

        return $this->render('index', [
            'list' => $list,
        ]);

    }

    public function actionView($id){


        $item = Test::getOneNews($id);

        return $this->render('view', [
           'item' => $item,
        ]);
    }


    public function actionMail(){

        $result = Yii::$app->mailer->compose()
            ->setFrom('dimaoag@gmail.com')
            ->setTo('dimaoag@gmail.com')
            ->setSubject('Тема сообщения')
            ->setTextBody('Text massage')
            ->setHtmlBody('<h2>Text massage</h2>')
            ->send();

        var_dump($result); die();
    }


}