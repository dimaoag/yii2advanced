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
                var_dump($result);

                if ($result){
                    $count++;
                }
            }
        }

        return $count;

    }



}