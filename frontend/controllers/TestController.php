<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Test;
use Yii;
use frontend\models\ExampleValidation;
use Faker\Factory;
use frontend\models\News;


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


    public function actionValidation(){

        $model = new ExampleValidation();

        $formData = Yii::$app->request->post();

        if (Yii::$app->request->isPost){

            $model->attributes = $formData;

            if ($model->validate()){
                Yii::$app->session->setFlash('success', 'Success:)');
            }

        }


        return $this->render('validation', [
            'model' => $model,
        ]);
    }


    public function actionGenerate(){

//        for ($i = 0; $i < 100; $i++){
//
//            $faker = Factory::create();
//
//            $newsItem = new News();
//
//            $newsItem->title = $faker->text(rand(35, 45));
//            $newsItem->content = $faker->text(rand(1000, 2000));
//            $newsItem->status = rand(0, 1);
//            $newsItem->save();
//        }

        $faker = Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $news = [];

            for ($j = 0; $j < 100; $j++){
                $news[] = [$faker->text(rand(35, 45)), $faker->text(rand(1000, 2000)), rand(0, 1)];
            }

            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
        }



        die('stop');

    }


}