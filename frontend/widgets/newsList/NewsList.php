<?php
/**
 * Created by PhpStorm.
 * User: dima
 * Date: 07.02.18
 * Time: 19:19
 */
namespace frontend\widgets\newsList;
use yii\base\Widget;
use Yii;
use frontend\models\Test;


class NewsList extends Widget
{
    public $showLimit = null;


    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];

        if ($this->showLimit){
            $max = $this->showLimit;
        }

        $list = Test::getNewsList($max);

        return $this->render('block', [
            'list' => $list,
        ]);
    }


}