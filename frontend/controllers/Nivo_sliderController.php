<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.02.18
 * Time: 18:11
 */

namespace frontend\controllers;
use yii\web\Controller;

class Nivo_sliderController extends Controller
{

    public function actionIndex(){

        return $this->render('index');
    }
}