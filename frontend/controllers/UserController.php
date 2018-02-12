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
use frontend\models\forms\LoginForm;
use Yii;


class UserController extends Controller
{

    public function actionLogin(){

        $model = new LoginForm();

        if ($model->load(Yii::$app->request->post()) && $model->login()){
            return $this->redirect('/site/index');
        }

        return $this->render('login', [
            'model' => $model,
        ]);
    }

    public function actionSignup(){

        $model = new SignupForm();

        if ($model->load(Yii::$app->request->post()) && $user = $model->save()){
            Yii::$app->user->login($user);
            Yii::$app->session->setFlash('success', 'Registered');
            return $this->redirect('/site/index');
        }

        return $this->render('signup', [
            'model' => $model
        ]);
    }

    public function actionLogout(){
        Yii::$app->user->logout();
        return $this->redirect('/site/index');
    }




}