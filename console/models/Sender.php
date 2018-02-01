<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 31.01.18
 * Time: 18:56
 */

namespace console\models;
use Yii;

class Sender
{

    public static function send($subscribes, $newsList){

        $viewData = ['newsList' => $newsList];

        $count = 0;

        if ($newsList && $subscribes){
            foreach ($subscribes as $subscribe){

                $result = Yii::$app->mailer->compose('/mailer/newslist', $viewData)
                    ->setFrom('dimaoag@gmail.com')
                    ->setTo($subscribe['email'])
                    ->setSubject('Тема сообщения')
                    ->send();
                //var_dump($result);


                if ($result){
                    $count++;
                }
            }
        }

        return $count;

    }

    public static function sendSalary($subscribes){

        if (function_exists('date_default_timezone_set'))
            date_default_timezone_set('Europe/Kiev');

        $date = date('d-m-Y H:i:s');
        $dataInEmail = "Уважаемый Марко Поло! ".$date." Вам была начислена заработная плата в размере $5.";

        $count = 0;
        $file = '/var/www/php_up/frontend/web/log.txt';

        if ($subscribes){
            foreach ($subscribes as $subscribe){

                $result = Yii::$app->mailer->compose()
                    ->setFrom('dimaoag@gmail.com')
                    ->setTo($subscribe['email'])
                    ->setSubject('Тема сообщения')
                    ->setHtmlBody("<p>$dataInEmail</p>")
                    ->send();


                if ($result){
                    $dataInFile =  $subscribe['email'] . " -----> " . $date . "\n";
                    file_put_contents($file,$dataInFile, FILE_APPEND);
                    $count++;
                }
            }
        }

        //crontab -e
        //  * *   *   *   * php /var/www/php_up/yii mailer/dispatch

        return $count;

    }



}