<?php

namespace frontend\controllers;
use yii\db\ActiveQuery;
use \yii\web\Controller;
use frontend\models\Book;
use frontend\models\Publisher;
use Yii;


class BookShopController extends Controller
{
    public function actionIndex()
    {
//        $query = Book::find();
//        $query->where(['publisher_id' => 1]);
//        $query->limit(2);
//        $query->orderBy('date_published');
//        $bookList = $query->all();

        $conditions = ['publisher_id' => 1];
        //$bookList = Book::find()->where($conditions)->limit(2)->orderBy('date_published')->all();
        $bookList = Book::find()->limit(20)->orderBy('date_published')->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }



    public function actionCreate(){

        $book = new Book();
        $publisherList = Publisher::getList();


        if ($book->load(Yii::$app->request->post()) && $book->save()){
            Yii::$app->session->setFlash('success', 'Saved:)');
            return $this->refresh();
            //return $this->redirect('index');
        }

        return $this->render('create', [
            'book' => $book,
            'publisherList' => $publisherList,
        ]);
    }


}
