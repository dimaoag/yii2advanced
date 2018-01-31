<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use console\models\News;

class MailerController extends Controller
{

    public function actionSend(){

        $list = News::getList();
        print_r($list);


//        $result = Yii::$app->mailer->compose()
//            ->setFrom('dimaoag@gmail.com')
//            ->setTo('dimaoag@gmail.com')
//            ->setSubject('Тема сообщения')
//            ->setTextBody('Text massage')
//            ->setHtmlBody('<h2>Text massage</h2>')
//            ->send();
//
//        var_dump($result);
        die();
    }

}