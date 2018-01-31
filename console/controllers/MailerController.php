<?php
namespace console\controllers;

use Yii;
use Codeception\Command\Console;
use yii\console\Controller;
use console\models\News;
use console\models\Subscriber;
use console\models\Sender;


class MailerController extends Controller
{

    public function actionSend(){

        $newsList = News::getList();
        $subscribes = Subscriber::getList();

        $count = Sender::send($subscribes, $newsList);


        echo "\nEmails send: {$count}";
    }


}