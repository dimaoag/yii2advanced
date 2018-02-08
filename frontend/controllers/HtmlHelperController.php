<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 08.02.18
 * Time: 12:48
 */

namespace frontend\controllers;
use yii\web\Controller;




class HtmlHelperController extends Controller
{

    public function actionDemo(){

        return $this->render('demo');
    }

    public function actionEscapeOutput(){

        $comments = [
                [
                'id' => 10,
                'author' => 'Student',
                'text' => 'Hello',
            ],
                [
                'id' => 11,
                'author' => 'Dima',
                'text' => 'Hello! How are you?',
            ],
        ];


        return $this->render('escape-output', [
            'comments' => $comments,
        ]);
    }

}