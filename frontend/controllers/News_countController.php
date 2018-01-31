<?php


namespace frontend\controllers;
use Yii;
use yii\web\Controller;
use frontend\models\NewsCount;

class News_countController extends Controller
{

    public function actionIndex(){

        $count = NewsCount::getCount();

        return $this->render('index', ['count' => $count]);
    }

}