<?php

namespace frontend\controllers;
use \yii\web\Controller;
use frontend\models\Book;
use Yii;


class BookShopController extends Controller
{
    public function actionIndex()
    {

//        $book = new Book();
//        $book->name = 'T';
//        $book->isbn = '1551511151';
//        $book->save();
//
//        echo '<pre>';
//        print_r($book->getErrors());
//        echo '</pre>';



        return $this->render('index');
    }



    public function actionCreate(){

        $book = new Book();

        if ($book->load(Yii::$app->request->post()) && $book->save()){
            Yii::$app->session->setFlash('success', 'Saved:)');
            return $this->refresh();
            //return $this->redirect('index');
        }

        return $this->render('create', [
            'book' => $book,
        ]);
    }


}
