<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 13.02.18
 * Time: 20:31
 */

namespace frontend\controllers;
use yii\web\Controller;
use frontend\models\forms\SearchForm;
use Yii;

class SearchController extends Controller
{
    public function actionIndex(){

        $model = new SearchForm();
        $results = null;

        if ($model->load(Yii::$app->request->post())){
            $results = $model->search();
        }

        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }

    public function actionAdvanced(){

        $model = new SearchForm();
        $results = null;

        if ($model->load(Yii::$app->request->post())){
            $results = $model->searchAdvanced();
        }

        return $this->render('advanced', [
            'model' => $model,
            'results' => $results,
        ]);
    }


}