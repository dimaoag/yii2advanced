<?php

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\Author;
use Yii;

class AuthorController extends Controller
{
    public function actionCreate()
    {
        $model = new Author();

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Author added');
            return $this->redirect('index');
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }





    public function actionDelete($id)
    {
        $model = Author::findOne($id);
        $model->delete();
        Yii::$app->session->setFlash('success', 'Author has been deleted');
        return $this->redirect('index');
    }





    public function actionIndex()
    {
        $authorsList = Author::find()->all();


        return $this->render('index', [
            'authorsList' => $authorsList
        ]);
    }





    public function actionUpdate($id)
    {
        $model = Author::findOne($id);


        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Author has been updated');
            return $this->redirect('index');
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

}
