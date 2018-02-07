<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.02.18
 * Time: 14:46
 */

namespace frontend\controllers;
use yii\web\Controller;
use Yii;




class AliasController extends Controller
{
    public function actionExample()
    {

        //Yii::setAlias('@files', '/var/www/php_up/frontend/web/files');

        //$result = mkdir(Yii::getAlias('@files').'/test2');
        //var_dump($result);

        echo Yii::getAlias('@photos');

    }

}