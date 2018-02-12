<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 12.02.18
 * Time: 19:33
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\forms\SignupForm;
use Yii;


class UserController extends Controller
{

    public function actionLogin(){

        return $this->render('login');
    }

    public function actionSignup(){

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $model->save()){
            Yii::$app->session->setFlash('success', 'Registered');
            return $this->redirect('site/index');
        }

        return $this->render('signup', [
            'model' => $model
        ]);
    }




}